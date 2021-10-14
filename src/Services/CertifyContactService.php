<?php

namespace Arkitecht\Gryphon\Services;

use Arkitecht\Gryphon\SOAP\CertifyChannelInfo;
use Arkitecht\Gryphon\SOAP\CertifyContact;
use Arkitecht\Gryphon\SOAP\CertifyContactRequest;
use Arkitecht\Gryphon\SOAP\CertifyContactResponse;
use Arkitecht\Gryphon\SOAP\CertifyPreferenceValue;
use Arkitecht\Gryphon\SOAP\ChannelType;
use Arkitecht\Gryphon\SOAP\RequestInfo;

class CertifyContactService extends Service
{
    public function canCallList(array $ptns, $verbose = false): array
    {
        $response = $this->makeCanCallRequest($ptns, $verbose);

        $numbers = [];
        foreach ($response->getCInfo() as $cinfo) {
            foreach ($cinfo->getPhoneNumber() as $number) {
                $numbers[ $number->getValue() ] = $number->getStatus();
            }
        }

        return $numbers;
    }

    public function canCall($ptn, $verbose = false): bool
    {
        $response = $this->canCallList([$ptn], $verbose);

        return (bool)$response[ $ptn ];
    }

    public function canTextList(array $ptns, $verbose = false): array
    {
        $response = $this->makeCanTextRequest($ptns, $verbose);

        foreach ($response->getCInfo() as $cinfo) {
            foreach ($cinfo->getTextAddress() as $number) {
                $numbers[ $number->getValue() ] = $number->getStatus();
            }
        }

        return $numbers;
    }

    public function canText($ptn, $verbose = false): bool
    {
        $response = $this->canTextList([$ptn], $verbose);

        return (bool)$response[ $ptn ];
    }

    public function canEmailList(array $emails, $verbose = false): array
    {
        $response = $this->makeCanEmailRequest($emails, $verbose);

        $numbers = [];
        foreach ($response->getCInfo() as $cinfo) {
            foreach ($cinfo->getEmailAddress() as $email) {
                $numbers[ $email->getValue() ] = $email->getStatus();
            }
        }

        return $numbers;
    }

    public function canEmail($email, $verbose = false): bool
    {
        $response = $this->canEmailList([$email], $verbose);

        return (bool)$response[ $email ];
    }

    protected function makeCertifyContactRequest($type, array $values, bool $verbose = false): CertifyContactResponse
    {
        $options = [];
        $wsdl = null;

        if (!$this->isLive()) {
            $options = [
                'trace'    => true,
                'location' => 'https://testwebsvcs.gryphonnetworks.com/CoreServices40/services/CertifyContact',
            ];
            $wsdl = 'https://testwebsvcs.gryphonnetworks.com/CoreServices40/services/CertifyContact?wsdl';
        }

        $this->client = $client = new CertifyContact($options, $wsdl);
        $this->gryphon_service->setClient($client);

        $cinfo = new CertifyChannelInfo($type);
        if ($type == ChannelType::EMAIL) {
            $emails = new CertifyPreferenceValue($values);
            $cinfo->setEmailAddress($emails);
        }

        if ($type == ChannelType::TEXT) {
            $textAddress = new CertifyPreferenceValue($values);
            $cinfo->setTextAddress($textAddress);
        }

        if ($type == ChannelType::CALL) {
            $phoneNumber = new CertifyPreferenceValue($values);
            $cinfo->setPhoneNumber($phoneNumber);
        }

        $rinfo = null;

        if ($verbose) {
            $rinfo = new RequestInfo();
            $rinfo->setVerbose(1);
        }

        $request = new CertifyContactRequest($this->getLicense(), $rinfo, $cinfo);

        return $client->certifyContact($request);
    }

    /**
     * @param array $ptns
     * @param mixed $verbose
     *
     * @return CertifyContactResponse
     */
    protected function makeCanCallRequest(array $ptns, bool $verbose = false): CertifyContactResponse
    {
        return $this->makeCertifyContactRequest(ChannelType::CALL, $ptns, $verbose);
    }

    /**
     * @param array $ptns
     * @param mixed $verbose
     *
     * @return CertifyContactResponse
     */
    protected function makeCanTextRequest(array $ptns, bool $verbose = false): CertifyContactResponse
    {
        return $this->makeCertifyContactRequest(ChannelType::TEXT, $ptns, $verbose);
    }

    /**
     * @param array $ptns
     * @param mixed $verbose
     *
     * @return CertifyContactResponse
     */
    protected function makeCanEmailRequest(array $emails, bool $verbose = false): CertifyContactResponse
    {
        return $this->makeCertifyContactRequest(ChannelType::EMAIL, $emails, $verbose);
    }
}
