<?php

namespace Arkitecht\Gryphon\Services;

use Arkitecht\Gryphon\SOAP\AddContactRequest;
use Arkitecht\Gryphon\SOAP\CertifyChannelInfo;
use Arkitecht\Gryphon\SOAP\CertifyPreferenceValue;
use Arkitecht\Gryphon\SOAP\ChannelType;
use Arkitecht\Gryphon\SOAP\ContactAdmin;

class ContactAdminService extends Service
{
    public function optOutFromCalls($numbers)
    {
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

    protected function makeAddContactRequest(string $type, array $values)
    {
        $options = [];
        $wsdl = null;

        if (!$this->isLive()) {
            $options = [
                'trace'    => true,
                'location' => 'https://testwebsvcs.gryphonnetworks.com/CoreServices40/services/ContactAdmin',
            ];
            $wsdl = 'https://testwebsvcs.gryphonnetworks.com/CoreServices40/services/ContactAdmin?wsdl';
        }

        $this->client = $client = new ContactAdmin($options, $wsdl);
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

        $request = new AddContactRequest($this->getLicense(), $rinfo, $cinfo);
        $response = $client->addContact($request);

        if ($this->debug()) {
            print $this->getLastRequest();
            print $this->getLastResponse();
        }

        return $response;
    }
}
