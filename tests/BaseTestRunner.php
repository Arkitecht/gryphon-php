<?php

namespace Arkitecht\Gryphon\Tests;

use Arkitecht\Gryphon\GryphonService;
use PHPUnit\Framework\TestCase;

class BaseTestRunner extends TestCase
{
    protected $config;
    protected $service;

    public function setUp(): void
    {
        parent::setUp();
        if (!file_exists(__DIR__ . '/config.php')) {
            throw new \Exception('Please add a config.php file to your tests directory');
        }
        if (!$this->config) {
            $this->config = require __DIR__ . '/config.php';
            $this->service = new GryphonService($this->config['license'], false);
        }
    }

    protected function getLicense()
    {
        return $this->config['license'];
    }

    protected function getCampaign()
    {
        return $this->config['campaign'];
    }

    protected function getCertificationTests($type): array
    {
        return $this->config['certifications'][ $type ];
    }
}
