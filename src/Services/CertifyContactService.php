<?php

namespace Arkitecht\Gryphon\Services;

use Arkitecht\Gryphon\Classes\CanContactResponse;
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
                $numbers[ $number->getValue() ] = new CanContactResponse($number->getValue(), ChannelType::CALL, $number, $verbose);
            }
        }

        return $numbers;
    }

    public function canCall($ptn, $verbose = false): CanContactResponse
    {
        $response = $this->canCallList([$ptn], $verbose);

        return $response[ $ptn ];
    }

    public function canTextList(array $ptns, $verbose = false): array
    {
        $response = $this->makeCanTextRequest($ptns, $verbose);

        foreach ($response->getCInfo() as $cinfo) {
            foreach ($cinfo->getTextAddress() as $number) {
                $numbers[ $number->getValue() ] = new CanContactResponse($number->getValue(), ChannelType::TEXT, $number, $verbose);
            }
        }

        return $numbers;
    }

    public function canText($ptn, $verbose = false): CanContactResponse
    {
        $response = $this->canTextList([$ptn], $verbose);

        return $response[ $ptn ];
    }

    public function canEmailList(array $emails, $verbose = false): array
    {
        $response = $this->makeCanEmailRequest($emails, $verbose);

        $numbers = [];
        foreach ($response->getCInfo() as $cinfo) {
            foreach ($cinfo->getEmailAddress() as $email) {
                $numbers[ $email->getValue() ] = new CanContactResponse($email->getValue(), ChannelType::EMAIL, $email, $verbose);
            }
        }

        return $numbers;
    }

    public function canEmail($email, $verbose = false): CanContactResponse
    {
        $response = $this->canEmailList([$email], $verbose);

        return $response[ $email ];
    }

    protected function makeCertifyContactRequest(string $type, array $values, bool $verbose = false, array $preferences = []): CertifyContactResponse
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
            if ($preferences) {
                $emails->setPreferenceName($preferences);
            }
            $cinfo->setEmailAddress($emails);
        }

        if ($type == ChannelType::TEXT) {
            $textAddress = new CertifyPreferenceValue($values);
            if ($preferences) {
                $textAddress->setPreferenceName($preferences);
            }
            $cinfo->setTextAddress($textAddress);
        }

        if ($type == ChannelType::CALL) {
            $phoneNumber = new CertifyPreferenceValue($values);
            if ($preferences) {
                $phoneNumber->setPreferenceName($preferences);
            }
            $cinfo->setPhoneNumber($phoneNumber);
        }

        $rinfo = null;

        if ($verbose) {
            $rinfo = new RequestInfo();
            $rinfo->setVerbose(1);
        }

        $request = new CertifyContactRequest($this->getLicense(), $rinfo, $cinfo);
        $response = $client->certifyContact($request);

        if ($this->debug()) {
            print $this->getLastRequest();
            print $this->getLastResponse();
        }

        return $response;
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
