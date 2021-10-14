<?php

namespace Arkitecht\Gryphon\SOAP;

class CertifyChannelInfo
{

    /**
     * @var string $channelType
     */
    protected $channelType = null;

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
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelInfo
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelInfo
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelInfo
     */
    public function setChannelText($channelText)
    {
        $this->channelText = $channelText;

        return $this;
    }

    /**
     * @return CertifyPreferenceValue[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param CertifyPreferenceValue[] $phoneNumber
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelInfo
     */
    public function setPhoneNumber(CertifyPreferenceValue $phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return CertifyPreferenceValue[]
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param CertifyPreferenceValue[] $emailAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelInfo
     */
    public function setEmailAddress(CertifyPreferenceValue $emailAddress = null)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return CertifyPreferenceValue[]
     */
    public function getTextAddress()
    {
        return $this->textAddress;
    }

    /**
     * @param CertifyPreferenceValue[] $textAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelInfo
     */
    public function setTextAddress(CertifyPreferenceValue $textAddress = null)
    {
        $this->textAddress = $textAddress;

        return $this;
    }

    /**
     * @return CertifyMailPreferenceValue[]
     */
    public function getMailAddress()
    {
        return $this->mailAddress;
    }

    /**
     * @param CertifyMailPreferenceValue[] $mailAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelInfo
     */
    public function setMailAddress(array $mailAddress = null)
    {
        $this->mailAddress = $mailAddress;

        return $this;
    }

}
