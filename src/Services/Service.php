<?php

namespace Arkitecht\Gryphon\Services;

use Arkitecht\Gryphon\GryphonService;

abstract class Service
{
    protected GryphonService $gryphon_service;
    protected $client;


    public function __construct(GryphonService $gryphonService)
    {
        $this->gryphon_service = $gryphonService;
    }

    protected function isLive()
    {
        return $this->gryphon_service->isLive();
    }

    protected function getLicense()
    {
        return $this->gryphon_service->getLicense();
    }

    public function getLastRequest()
    {
        return $this->client->__getLastRequest();
    }

    public function getLastResponse()
    {
        return $this->client->__getLastResponse();
    }
}
