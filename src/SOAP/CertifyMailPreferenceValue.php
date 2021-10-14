<?php

namespace Arkitecht\Gryphon\SOAP;

class CertifyMailPreferenceValue
{

    /**
     * @var MailAddress[] $value
     */
    protected $value = null;

    /**
     * @var string[] $preferenceName
     */
    protected $preferenceName = null;

    /**
     * @var certifyDateTimeWithTimezone $preferenceDate
     */
    protected $preferenceDate = null;

    /**
     * @var int $preferenceRule
     */
    protected $preferenceRule = null;

    /**
     * @var string $exemptionName
     */
    protected $exemptionName = null;

    /**
     * @var certifyDateTimeWithTimezone $exemptionDate
     */
    protected $exemptionDate = null;

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
     * @var certifyDateTimeWithTimezone $doNotContactDate
     */
    protected $doNotContactDate = null;

    /**
     * @param MailAddress[] $value
     */
    public function __construct(array $value)
    {
        $this->value = $value;
    }

    /**
     * @return MailAddress[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param MailAddress[] $value
     *
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
     */
    public function setExemptionDate($exemptionDate)
    {
        $this->exemptionDate = $exemptionDate;

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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
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
     * @return \Arkitecht\Gryphon\SOAP\CertifyMailPreferenceValue
     */
    public function setDoNotContactDate($doNotContactDate)
    {
        $this->doNotContactDate = $doNotContactDate;

        return $this;
    }

}
