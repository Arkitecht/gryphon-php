<?php

namespace Arkitecht\Gryphon\Services;

use Arkitecht\Gryphon\SOAP\AddContactRequest;
use Arkitecht\Gryphon\SOAP\addExemptionRequest;
use Arkitecht\Gryphon\SOAP\CertifyChannelInfo;
use Arkitecht\Gryphon\SOAP\CertifyPreferenceValue;
use Arkitecht\Gryphon\SOAP\ChannelType;
use Arkitecht\Gryphon\SOAP\ContactAdmin;
use Arkitecht\Gryphon\SOAP\ExemptionChannelInfo;
use Arkitecht\Gryphon\SOAP\ExemptionPreferenceValue;
use Carbon\Carbon;

class ContactAdminService extends Service
{
    public function optOutFromCalls($numbers)
    {
        if (!$numbers) {
            return true;
        }

        $response = $this->makeAddContactRequest(ChannelType::CALL, $numbers);
        foreach ($response->getCInfo() as $cinfo) {
            foreach ($cinfo->getPhoneNumber() as $number) {
                if (!$this->isSuccess($number->getStatus())) {
                    return false;
                }

                return $number->getValue();
            }
        }

        return false;
    }

    public function optOutFromTexts($numbers)
    {
        if (!$numbers) {
            return true;
        }

        $response = $this->makeAddContactRequest(ChannelType::TEXT, $numbers);

        foreach ($response->getCInfo() as $cinfo) {
            foreach ($cinfo->getTextAddress() as $number) {
                if (!$this->isSuccess($number->getStatus())) {
                    return false;
                }

                return $number->getValue();
            }
        }

        return false;
    }

    public function optOutFromEmails($emails)
    {
        if (!$emails) {
            return true;
        }

        $response = $this->makeAddContactRequest(ChannelType::EMAIL, $emails);

        foreach ($response->getCInfo() as $cinfo) {
            foreach ($cinfo->getEmailAddress() as $email) {
                if (!$this->isSuccess($email->getStatus())) {
                    return false;
                }

                return $email->getValue();
            }
        }

        return false;
    }

    public function addExemption(string $type, string|array $values)
    {
        if (!is_array($values)) {
            $values = [$values];
        }

        return $this->makeAddExemptionRequest($type, $values);
    }

    protected function makeAddContactRequest(string $type, array $values)
    {
        $client = $this->getClient();

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

        $request = new AddContactRequest($this->getLicense(), $rinfo, $cinfo);
        $response = $client->addContact($request);

        if ($this->debug()) {
            print $this->getLastRequest();
            print $this->getLastResponse();
        }

        return $response;
    }

    protected function makeAddExemptionRequest(string $type, array $values)
    {
        $client = $this->getClient();

        $cinfo = new ExemptionChannelInfo($type);
        if ($type == ChannelType::EMAIL) {
            $emails = new ExemptionPreferenceValue($values);
            $cinfo->setEmailAddress($emails);
        }

        if ($type == ChannelType::TEXT) {
            $textAddress = new ExemptionPreferenceValue($values);
            $cinfo->setTextAddress($textAddress);
            $textAddress->setExemptionName('Express Written Permission');
            $textAddress->setExemptionDate(Carbon::now()->toIso8601ZuluString());
        }

        if ($type == ChannelType::CALL) {
            $phoneNumber = new ExemptionPreferenceValue($values);
            $cinfo->setPhoneNumber($phoneNumber);
        }

        $request = new AddExemptionRequest($this->getLicense(), null, $cinfo);
        $response = $client->addExemption($request);

        if ($this->debug()) {
            print $this->getLastRequest();
            print $this->getLastResponse();
        }

        return $response;
    }

    protected function getClient()
    {
        $options = [
            'location'   => 'https://websvcs.gryphon.ai/CoreServices40/services/ContactAdmin',
            'keep_alive' => false,
        ];
        $wsdl = 'https://websvcs.gryphon.ai/CoreServices40/services/ContactAdmin?wsdl';

        if (!$this->isLive()) {
            $options = [
                'trace'      => true,
                'location'   => 'https://testwebsvcs.gryphon.ai/CoreServices40/services/ContactAdmin',
                'keep_alive' => false,
            ];
            $wsdl = 'https://testwebsvcs.gryphon.ai/CoreServices40/services/ContactAdmin?wsdl';
        }

        $this->client = $client = new ContactAdmin($options, $wsdl);
        $this->gryphon_service->setClient($client);
        
        return $client;
    }
}
