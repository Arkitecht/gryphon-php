<?php

namespace Arkitecht\Gryphon\SOAP;

class ExemptionChannelInfo
{

    /**
     * @var string $channelType
     */
    protected $channelType = null;

    /**
     * @var int $channelStatus
     */
    protected $channelStatus = null;

    /**
     * @var string $channelText
     */
    protected $channelText = null;

    /**
     * @var ExemptionPreferenceValue[] $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var ExemptionPreferenceValue[] $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var ExemptionPreferenceValue[] $textAddress
     */
    protected $textAddress = null;

    /**
     * @var ExemptionMailPreferenceValue[] $mailAddress
     */
    protected $mailAddress = null;

    /**
     * @param string $channelType
     */
    public function __construct($channelType)
    {
        $this->channelType = $channelType;
    }

    /**
     * @return string
     */
    public function getChannelType()
    {
        return $this->channelType;
    }

    /**
     * @param string $channelType
     *
     * @return \Arkitecht\Gryphon\SOAP\ExemptionChannelInfo
     */
    public function setChannelType($channelType)
    {
        $this->channelType = $channelType;

        return $this;
    }

    /**
     * @return int
     */
    public function getChannelStatus()
    {
        return $this->channelStatus;
    }

    /**
     * @param int $channelStatus
     *
     * @return \Arkitecht\Gryphon\SOAP\ExemptionChannelInfo
     */
    public function setChannelStatus($channelStatus)
    {
        $this->channelStatus = $channelStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getChannelText()
    {
        return $this->channelText;
    }

    /**
     * @param string $channelText
     *
     * @return \Arkitecht\Gryphon\SOAP\ExemptionChannelInfo
     */
    public function setChannelText($channelText)
    {
        $this->channelText = $channelText;

        return $this;
    }

    /**
     * @return ExemptionPreferenceValue[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param ExemptionPreferenceValue[] $phoneNumber
     *
     * @return \Arkitecht\Gryphon\SOAP\ExemptionChannelInfo
     */
    public function setPhoneNumber(array $phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return ExemptionPreferenceValue[]
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param ExemptionPreferenceValue[] $emailAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\ExemptionChannelInfo
     */
    public function setEmailAddress(array $emailAddress = null)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return ExemptionPreferenceValue[]
     */
    public function getTextAddress()
    {
        return $this->textAddress;
    }

    /**
     * @param ExemptionPreferenceValue[] $textAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\ExemptionChannelInfo
     */
    public function setTextAddress(array $textAddress = null)
    {
        $this->textAddress = $textAddress;

        return $this;
    }

    /**
     * @return ExemptionMailPreferenceValue[]
     */
    public function getMailAddress()
    {
        return $this->mailAddress;
    }

    /**
     * @param ExemptionMailPreferenceValue[] $mailAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\ExemptionChannelInfo
     */
    public function setMailAddress(array $mailAddress = null)
    {
        $this->mailAddress = $mailAddress;

        return $this;
    }

}
