<?php

namespace Arkitecht\Gryphon\SOAP;

class RequestInfo
{

    /**
     * @var string $alternateLicenseID
     */
    protected $alternateLicenseID = null;

    /**
     * @var string $userID
     */
    protected $userID = null;

    /**
     * @var string $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @var int $verbose
     */
    protected $verbose = null;

    /**
     * @var int $certifyRule
     */
    protected $certifyRule = null;

    /**
     * @var string $providerName
     */
    protected $providerName = null;

    /**
     * @var string $recordID
     */
    protected $recordID = null;

    /**
     * @var string $certifyRuleName
     */
    protected $certifyRuleName = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAlternateLicenseID()
    {
        return $this->alternateLicenseID;
    }

    /**
     * @param string $alternateLicenseID
     *
     * @return \Arkitecht\Gryphon\SOAP\RequestInfo
     */
    public function setAlternateLicenseID($alternateLicenseID)
    {
        $this->alternateLicenseID = $alternateLicenseID;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param string $userID
     *
     * @return \Arkitecht\Gryphon\SOAP\RequestInfo
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     *
     * @return \Arkitecht\Gryphon\SOAP\RequestInfo
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }

    /**
     * @param string $campaignName
     *
     * @return \Arkitecht\Gryphon\SOAP\RequestInfo
     */
    public function setCampaignName($campaignName)
    {
        $this->campaignName = $campaignName;

        return $this;
    }

    /**
     * @return int
     */
    public function getVerbose()
    {
        return $this->verbose;
    }

    /**
     * @param int $verbose
     *
     * @return \Arkitecht\Gryphon\SOAP\RequestInfo
     */
    public function setVerbose($verbose)
    {
        $this->verbose = $verbose;

        return $this;
    }

    /**
     * @return int
     */
    public function getCertifyRule()
    {
        return $this->certifyRule;
    }

    /**
     * @param int $certifyRule
     *
     * @return \Arkitecht\Gryphon\SOAP\RequestInfo
     */
    public function setCertifyRule($certifyRule)
    {
        $this->certifyRule = $certifyRule;

        return $this;
    }

    /**
     * @return string
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * @param string $providerName
     *
     * @return \Arkitecht\Gryphon\SOAP\RequestInfo
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecordID()
    {
        return $this->recordID;
    }

    /**
     * @param string $recordID
     *
     * @return \Arkitecht\Gryphon\SOAP\RequestInfo
     */
    public function setRecordID($recordID)
    {
        $this->recordID = $recordID;

        return $this;
    }

    /**
     * @return string
     */
    public function getCertifyRuleName()
    {
        return $this->certifyRuleName;
    }

    /**
     * @param string $certifyRuleName
     *
     * @return \Arkitecht\Gryphon\SOAP\RequestInfo
     */
    public function setCertifyRuleName($certifyRuleName)
    {
        $this->certifyRuleName = $certifyRuleName;

        return $this;
    }

}
