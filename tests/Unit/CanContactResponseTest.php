<?php

namespace Arkitecht\Gryphon\Tests\Unit;

use Arkitecht\Gryphon\Classes\CanContactResponse;
use Arkitecht\Gryphon\SOAP\CertificationDetails;
use Arkitecht\Gryphon\SOAP\CertificationResults;
use Arkitecht\Gryphon\SOAP\ChannelType;
use PHPUnit\Framework\TestCase;

class CanContactResponseTest extends TestCase
{
    /** @test */
    function does_return_can_contact()
    {
        $response = new CertificationDetails('test@test.com', 0, 0, 'USA');

        $canContactResponse = new CanContactResponse('test@test.com', ChannelType::EMAIL, $response);
        $this->assertTrue($canContactResponse->canContact());
        $this->assertFalse($canContactResponse->cannotContact());
    }

    /** @test */
    function does_return_cannot_contact()
    {
        $response = new CertificationDetails('test@test.com', 1, 0, 'USA');

        $canContactResponse = new CanContactResponse('test@test.com', ChannelType::EMAIL, $response);
        $this->assertFalse($canContactResponse->canContact());
        $this->assertTrue($canContactResponse->cannotContact());
    }

    /** @test */
    function does_not_return_is_permanent_when_not_verbose()
    {
        $response = new CertificationDetails('test@test.com', 1, 0, 'USA');
        $response->setResults([
            new CertificationResults('certstatus', 1),
        ]);

        $canContactResponse = new CanContactResponse('test@test.com', ChannelType::EMAIL, $response, false);
        $this->assertFalse($canContactResponse->isVerbose());
        $this->assertFalse($canContactResponse->canContact());
        $this->assertFalse($canContactResponse->isPermanent());
        $this->assertTrue($canContactResponse->isTemporary());
    }

    /** @test */
    function does_return_is_permanent()
    {
        $response = new CertificationDetails('test@test.com', 1, 0, 'USA');
        $response->setResults([
            new CertificationResults('certstatus', 1),
        ]);

        $canContactResponse = new CanContactResponse('test@test.com', ChannelType::EMAIL, $response, true);
        $this->assertTrue($canContactResponse->isVerbose());
        $this->assertFalse($canContactResponse->canContact());
        $this->assertTrue($canContactResponse->isPermanent());
        $this->assertFalse($canContactResponse->isTemporary());
    }

    /** @test */
    function does_return_is_temporary()
    {
        $response = new CertificationDetails('test@test.com', 1, 0, 'USA');
        $response->setResults([
            new CertificationResults('certstatus', 0),
            new CertificationResults('curfew', 1),
            new CertificationResults('special', 1),
        ]);

        $canContactResponse = new CanContactResponse('test@test.com', ChannelType::EMAIL, $response, true);
        $this->assertTrue($canContactResponse->isVerbose());
        $this->assertFalse($canContactResponse->canContact());
        $this->assertFalse($canContactResponse->isPermanent());
        $this->assertTrue($canContactResponse->isTemporary());
    }

}
