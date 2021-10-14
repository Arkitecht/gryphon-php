<?php

namespace Arkitecht\Gryphon\SOAP;

class ChannelInfo
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
     * @var PreferenceValue[] $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var PreferenceValue[] $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var PreferenceValue[] $textAddress
     */
    protected $textAddress = null;

    /**
     * @var MailPreferenceValue[] $mailAddress
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
     * @return \Arkitecht\Gryphon\SOAP\ChannelInfo
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
     * @return \Arkitecht\Gryphon\SOAP\ChannelInfo
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
     * @return \Arkitecht\Gryphon\SOAP\ChannelInfo
     */
    public function setChannelText($channelText)
    {
        $this->channelText = $channelText;

        return $this;
    }

    /**
     * @return PreferenceValue[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param PreferenceValue[] $phoneNumber
     *
     * @return \Arkitecht\Gryphon\SOAP\ChannelInfo
     */
    public function setPhoneNumber(array $phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return PreferenceValue[]
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param PreferenceValue[] $emailAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\ChannelInfo
     */
    public function setEmailAddress(array $emailAddress = null)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return PreferenceValue[]
     */
    public function getTextAddress()
    {
        return $this->textAddress;
    }

    /**
     * @param PreferenceValue[] $textAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\ChannelInfo
     */
    public function setTextAddress(array $textAddress = null)
    {
        $this->textAddress = $textAddress;

        return $this;
    }

    /**
     * @return MailPreferenceValue[]
     */
    public function getMailAddress()
    {
        return $this->mailAddress;
    }

    /**
     * @param MailPreferenceValue[] $mailAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\ChannelInfo
     */
    public function setMailAddress(array $mailAddress = null)
    {
        $this->mailAddress = $mailAddress;

        return $this;
    }

}
