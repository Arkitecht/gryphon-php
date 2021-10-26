<?php

namespace Arkitecht\Gryphon\Tests;

class CertificationTestRunner extends BaseTestRunner
{
    /**
     * @test
     * @dataProvider getCallTests
     */
    function does_get_correct_responses_for_call_certifications($number, $canContact)
    {
        $response = $this->service->certify($this->getCampaign())->canCall($number);
        $this->assertEquals($canContact, $response->canContact());
    }

    function getCallTests()
    {
        $this->setUp();

        return $this->getCertificationTests('call');
    }

    /**
     * @test
     * @dataProvider getTextTests
     */
    function does_get_correct_responses_for_text_certifications($number, $canContact)
    {
        $response = $this->service->certify()->canText($number);
        $this->assertEquals($canContact, $response->canContact());
    }

    function getTextTests()
    {
        $this->setUp();

        return $this->getCertificationTests('text');
    }

    /**
     * @test
     * @dataProvider getEmailTests
     */
    function does_get_correct_responses_for_email_certifications($emailAddress, $canContact)
    {
        $response = $this->service->certify()->canEmail($emailAddress);
        $this->assertEquals($canContact, $response->canContact());
    }

    function getEmailTests()
    {
        $this->setUp();

        return $this->getCertificationTests('email');
    }
}
