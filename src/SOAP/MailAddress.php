<?php

namespace Arkitecht\Gryphon\SOAP;

class MailAddress
{

    /**
     * @var string $prefix
     */
    protected $prefix = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $middleName
     */
    protected $middleName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $suffix
     */
    protected $suffix = null;

    /**
     * @var string $businessName
     */
    protected $businessName = null;

    /**
     * @var string $address1
     */
    protected $address1 = null;

    /**
     * @var string $address2
     */
    protected $address2 = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $zipCode
     */
    protected $zipCode = null;

    /**
     * @var string $zipCode4
     */
    protected $zipCode4 = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @param string $address1
     * @param string $city
     * @param string $state
     * @param string $zipCode
     */
    public function __construct($address1, $city, $state, $zipCode)
    {
        $this->address1 = $address1;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     *
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     *
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     *
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessName()
    {
        return $this->businessName;
    }

    /**
     * @param string $businessName
     *
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     *
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     *
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     *
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode4()
    {
        return $this->zipCode4;
    }

    /**
     * @param string $zipCode4
     *
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setZipCode4($zipCode4)
    {
        $this->zipCode4 = $zipCode4;

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
     * @return \Arkitecht\Gryphon\SOAP\MailAddress
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

}
