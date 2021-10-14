<?php

namespace Arkitecht\Gryphon\SOAP;

class WirelessContactResp
{

    /**
     * @var int $status
     */
    protected $status = null;

    /**
     * @var string $statusText
     */
    protected $statusText = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var int $wireless
     */
    protected $wireless = null;

    /**
     * @var string $refKey
     */
    protected $refKey = null;

    /**
     * @var string $refData
     */
    protected $refData = null;

    /**
     * @var int $error
     */
    protected $error = null;

    /**
     * @param int    $status
     * @param string $value
     * @param string $country
     * @param int    $error
     */
    public function __construct($status, $value, $country, $error)
    {
        $this->status = $status;
        $this->value = $value;
        $this->country = $country;
        $this->error = $error;
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
     * @return \Arkitecht\Gryphon\SOAP\WirelessContactResp
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
     * @return \Arkitecht\Gryphon\SOAP\WirelessContactResp
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return \Arkitecht\Gryphon\SOAP\WirelessContactResp
     */
    public function setValue($value)
    {
        $this->value = $value;

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
     * @return \Arkitecht\Gryphon\SOAP\WirelessContactResp
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return int
     */
    public function getWireless()
    {
        return $this->wireless;
    }

    /**
     * @param int $wireless
     *
     * @return \Arkitecht\Gryphon\SOAP\WirelessContactResp
     */
    public function setWireless($wireless)
    {
        $this->wireless = $wireless;

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
     * @return \Arkitecht\Gryphon\SOAP\WirelessContactResp
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
     * @return \Arkitecht\Gryphon\SOAP\WirelessContactResp
     */
    public function setRefData($refData)
    {
        $this->refData = $refData;

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
     * @return \Arkitecht\Gryphon\SOAP\WirelessContactResp
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

}
