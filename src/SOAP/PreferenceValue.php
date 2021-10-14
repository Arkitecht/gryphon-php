<?php

namespace Arkitecht\Gryphon\SOAP;

class PreferenceValue
{

    /**
     * @var string[] $value
     */
    protected $value = null;

    /**
     * @var string[] $preferenceName
     */
    protected $preferenceName = null;

    /**
     * @var ContactDateTimeWithTimezone $preferenceDate
     */
    protected $preferenceDate = null;

    /**
     * @var int $preferenceRule
     */
    protected $preferenceRule = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $refKey
     */
    protected $refKey = null;

    /**
     * @var string $refData
     */
    protected $refData = null;

    /**
     * @var ConsumerInfo $consumerInfo
     */
    protected $consumerInfo = null;

    /**
     * @var int $status
     */
    protected $status = null;

    /**
     * @var string $statusText
     */
    protected $statusText = null;

    /**
     * @var int $valueType
     */
    protected $valueType = null;

    /**
     * @var string $valueSource
     */
    protected $valueSource = null;

    /**
     * @var string $shortCode
     */
    protected $shortCode = null;

    /**
     * @var string $userID
     */
    protected $userID = null;

    /**
     * @param string[] $value
     */
    public function __construct(array $value)
    {
        $this->value = $value;
    }

    /**
     * @return string[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string[] $value
     *
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
     */
    public function setValue(array $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getPreferenceName()
    {
        return $this->preferenceName;
    }

    /**
     * @param string[] $preferenceName
     *
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
     */
    public function setPreferenceName(array $preferenceName = null)
    {
        $this->preferenceName = $preferenceName;

        return $this;
    }

    /**
     * @return ContactDateTimeWithTimezone
     */
    public function getPreferenceDate()
    {
        return $this->preferenceDate;
    }

    /**
     * @param ContactDateTimeWithTimezone $preferenceDate
     *
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
     */
    public function setPreferenceDate($preferenceDate)
    {
        $this->preferenceDate = $preferenceDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreferenceRule()
    {
        return $this->preferenceRule;
    }

    /**
     * @param int $preferenceRule
     *
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
     */
    public function setPreferenceRule($preferenceRule)
    {
        $this->preferenceRule = $preferenceRule;

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
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
     */
    public function setCountry($country)
    {
        $this->country = $country;

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
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
     */
    public function setRefData($refData)
    {
        $this->refData = $refData;

        return $this;
    }

    /**
     * @return ConsumerInfo
     */
    public function getConsumerInfo()
    {
        return $this->consumerInfo;
    }

    /**
     * @param ConsumerInfo $consumerInfo
     *
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
     */
    public function setConsumerInfo($consumerInfo)
    {
        $this->consumerInfo = $consumerInfo;

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
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;

        return $this;
    }

    /**
     * @return int
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * @param int $valueType
     *
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;

        return $this;
    }

    /**
     * @return string
     */
    public function getValueSource()
    {
        return $this->valueSource;
    }

    /**
     * @param string $valueSource
     *
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
     */
    public function setValueSource($valueSource)
    {
        $this->valueSource = $valueSource;

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
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
     */
    public function setShortCode($shortCode)
    {
        $this->shortCode = $shortCode;

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
     * @return \Arkitecht\Gryphon\SOAP\PreferenceValue
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

}
