<?php

namespace Arkitecht\Gryphon\SOAP;

class CertifyChannelResp
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
     * @var CertificationDetails[] $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var CertificationDetails[] $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var CertificationDetails[] $textAddress
     */
    protected $textAddress = null;

    /**
     * @var CertificationMailDetails[] $mailAddress
     */
    protected $mailAddress = null;

    /**
     * @param int $channelStatus
     */
    public function __construct($channelStatus)
    {
        $this->channelStatus = $channelStatus;
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelResp
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelResp
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelResp
     */
    public function setChannelText($channelText)
    {
        $this->channelText = $channelText;

        return $this;
    }

    /**
     * @return CertificationDetails[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param CertificationDetails[] $phoneNumber
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelResp
     */
    public function setPhoneNumber(array $phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return CertificationDetails[]
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param CertificationDetails[] $emailAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelResp
     */
    public function setEmailAddress(array $emailAddress = null)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return CertificationDetails[]
     */
    public function getTextAddress()
    {
        return $this->textAddress;
    }

    /**
     * @param CertificationDetails[] $textAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelResp
     */
    public function setTextAddress(array $textAddress = null)
    {
        $this->textAddress = $textAddress;

        return $this;
    }

    /**
     * @return CertificationMailDetails[]
     */
    public function getMailAddress()
    {
        return $this->mailAddress;
    }

    /**
     * @param CertificationMailDetails[] $mailAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyChannelResp
     */
    public function setMailAddress(array $mailAddress = null)
    {
        $this->mailAddress = $mailAddress;

        return $this;
    }

}
