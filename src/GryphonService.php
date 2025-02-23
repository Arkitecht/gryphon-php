<?php

namespace Arkitecht\Gryphon;

use Arkitecht\Gryphon\Services\CertifyContactService;
use Arkitecht\Gryphon\Services\ContactAdminService;
use Arkitecht\Gryphon\SOAP\CertifyChannelInfo;
use Arkitecht\Gryphon\SOAP\CertifyContact;
use Arkitecht\Gryphon\SOAP\CertifyContactRequest;
use Arkitecht\Gryphon\SOAP\CertifyContactResponse;
use Arkitecht\Gryphon\SOAP\CertifyPreferenceValue;
use Arkitecht\Gryphon\SOAP\ChannelType;

class GryphonService
{
    protected $license;
    protected $live;
    protected $certify_contact_service;
    protected $contact_admin_service;
    protected $client;
    protected $debug = false;

    public function __construct($license, $live = true)
    {
        $this->license = $license;
        $this->live = $live;
        $this->certify_contact_service = new CertifyContactService($this);
        $this->contact_admin_service = new ContactAdminService($this);
    }

    public function certify($campaign = null)
    {
        return $this->certify_contact_service->setCampaign($campaign);
    }

    public function contact()
    {
        return $this->contact_admin_service;
    }

    public function getLicense(): string
    {
        return $this->license;
    }

    public function isLive(): bool
    {
        return (bool)$this->live;
    }

    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function getLastRequest()
    {
        return $this->client->__getLastRequest();
    }

    public function getLastResponse()
    {
        return $this->client->__getLastResponse();
    }

    public function setDebug($debug = true)
    {
        $this->debug = $debug;

        return $this;
    }

    public function getDebug()
    {
        return $this->debug;
    }
}
