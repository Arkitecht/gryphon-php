<?php

namespace Arkitecht\Gryphon\Services;

use Arkitecht\Gryphon\Classes\StatusCode;
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

    public function isSuccess($status): bool
    {
        return in_array($status, StatusCode::SUCCESS);
    }

    public function isFailure($status): bool
    {
        return !$this->isSuccess($status);
    }

    public function debug()
    {
        return $this->gryphon_service->getDebug();
    }
}
