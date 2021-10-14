<?php

namespace Arkitecht\Gryphon\SOAP;

class CertifyPreferenceValue
{

    /**
     * @var string[] $value
     */
    protected $value = null;

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
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
     */
    public function setPreferenceName(array $preferenceName = null)
    {
        $this->preferenceName = $preferenceName;

        return $this;
    }

    /**
     * @return certifyDateTimeWithTimezone
     */
    public function getPreferenceDate()
    {
        return $this->preferenceDate;
    }

    /**
     * @param certifyDateTimeWithTimezone $preferenceDate
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
     */
    public function setPreferenceRule($preferenceRule)
    {
        $this->preferenceRule = $preferenceRule;

        return $this;
    }

    /**
     * @return string
     */
    public function getExemptionName()
    {
        return $this->exemptionName;
    }

    /**
     * @param string $exemptionName
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
     */
    public function setExemptionName($exemptionName)
    {
        $this->exemptionName = $exemptionName;

        return $this;
    }

    /**
     * @return certifyDateTimeWithTimezone
     */
    public function getExemptionDate()
    {
        return $this->exemptionDate;
    }

    /**
     * @param certifyDateTimeWithTimezone $exemptionDate
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
     */
    public function setExemptionDate($exemptionDate)
    {
        $this->exemptionDate = $exemptionDate;

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
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

    /**
     * @return certifyDateTimeWithTimezone
     */
    public function getDoNotContactDate()
    {
        return $this->doNotContactDate;
    }

    /**
     * @param certifyDateTimeWithTimezone $doNotContactDate
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyPreferenceValue
     */
    public function setDoNotContactDate($doNotContactDate)
    {
        $this->doNotContactDate = $doNotContactDate;

        return $this;
    }

}
