<?php

namespace Arkitecht\Gryphon\Classes;

use Arkitecht\Gryphon\SOAP\CertificationDetails;
use Arkitecht\Gryphon\SOAP\CertificationResults;

class CanContactResponse
{
    public string $type;
    public string $value;
    protected $response;
    protected $verbose;

    const PERMANENT_RESULTS = ['certstatus', 'cma', 'crtc', 'dma', 'federal', 'internal', 'state', 'vip'];
    const TEMPORARY_RESULTS = ['curfew', 'special', 'frequency'];

    public function __construct(string $value, string $type, CertificationDetails $response, bool $verbose = false)
    {
        $this->value = $value;
        $this->type = $type;
        $this->response = $response;
        $this->verbose = $verbose;
    }

    public function isVerbose(): bool
    {
        return $this->verbose;
    }

    public function canContact(): bool
    {
        $status = $this->response->getStatus();

        return $status == 0;
    }

    public function isTemporary(): bool
    {
        return !$this->isPermanent();
    }

    public function isPermanent(): bool
    {
        if (!$this->verbose && !$this->response->getResults()) {
            return false;
        }

        $results = $this->response->getResults();
        foreach ($results as $result) {
            /**
             * @var CertificationResults $result
             */
            if ($result->getValue() == 1 && in_array($result->getName(), self::PERMANENT_RESULTS)) {
                return true;
            }
        }

        return false;
    }

    public function cannotContact(): bool
    {
        return !$this->canContact();
    }

    public function response(): CertificationDetails
    {
        return $this->response;
    }
}
