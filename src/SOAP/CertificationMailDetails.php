<?php

namespace Arkitecht\Gryphon\SOAP;

class CertificationMailDetails
{

    /**
     * @var MailAddress $value
     */
    protected $value = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @var string $preferenceName
     */
    protected $preferenceName = null;

    /**
     * @var int $status
     */
    protected $status = null;

    /**
     * @var string $statusText
     */
    protected $statusText = null;

    /**
     * @var int $error
     */
    protected $error = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var CertificationResults[] $results
     */
    protected $results = null;

    /**
     * @var string $shortCode
     */
    protected $shortCode = null;

    /**
     * @var string $refKey
     */
    protected $refKey = null;

    /**
     * @var string $refData
     */
    protected $refData = null;

    /**
     * @param MailAddress $value
     * @param int         $status
     * @param int         $error
     * @param string      $country
     */
    public function __construct($value, $status, $error, $country)
    {
        $this->value = $value;
        $this->status = $status;
        $this->error = $error;
        $this->country = $country;
    }

    /**
     * @return MailAddress
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param MailAddress $value
     *
     * @return \Arkitecht\Gryphon\SOAP\CertificationMailDetails
     */
    public function setValue($value)
    {
        $this->value = $value;

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
     * @return \Arkitecht\Gryphon\SOAP\CertificationMailDetails
     */
    public function setCampaignName($campaignName)
    {
        $this->campaignName = $campaignName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPreferenceName()
    {
        return $this->preferenceName;
    }

    /**
     * @param string $preferenceName
     *
     * @return \Arkitecht\Gryphon\SOAP\CertificationMailDetails
     */
    public function setPreferenceName($preferenceName)
    {
        $this->preferenceName = $preferenceName;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     *
     * @return \Arkitecht\Gryphon\SOAP\CertificationMailDetails
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusText()
    {
        return $this->statusText;
    }

    /**
     * @param string $statusText
     *
     * @return \Arkitecht\Gryphon\SOAP\CertificationMailDetails
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;

        return $this;
    }

    /**
     * @return int
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param int $error
     *
     * @return \Arkitecht\Gryphon\SOAP\CertificationMailDetails
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return \Arkitecht\Gryphon\SOAP\CertificationMailDetails
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return CertificationResults[]
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param CertificationResults[] $results
     *
     * @return \Arkitecht\Gryphon\SOAP\CertificationMailDetails
     */
    public function setResults(array $results = null)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortCode()
    {
        return $this->shortCode;
    }

    /**
     * @param string $shortCode
     *
     * @return \Arkitecht\Gryphon\SOAP\CertificationMailDetails
     */
    public function setShortCode($shortCode)
    {
        $this->shortCode = $shortCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefKey()
    {
        return $this->refKey;
    }

    /**
     * @param string $refKey
     *
     * @return \Arkitecht\Gryphon\SOAP\CertificationMailDetails
     */
    public function setRefKey($refKey)
    {
        $this->refKey = $refKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefData()
    {
        return $this->refData;
    }

    /**
     * @param string $refData
     *
     * @return \Arkitecht\Gryphon\SOAP\CertificationMailDetails
     */
    public function setRefData($refData)
    {
        $this->refData = $refData;

        return $this;
    }

}
