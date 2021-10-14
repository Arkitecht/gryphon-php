<?php

namespace Arkitecht\Gryphon\SOAP;

class ConsumerInfo
{

    /**
     * @var string $consumerID
     */
    protected $consumerID = null;

    /**
     * @var string $houseHoldID
     */
    protected $houseHoldID = null;

    /**
     * @var string $surrogateID
     */
    protected $surrogateID = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var string $zipCode
     */
    protected $zipCode = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getConsumerID()
    {
        return $this->consumerID;
    }

    /**
     * @param string $consumerID
     *
     * @return \Arkitecht\Gryphon\SOAP\ConsumerInfo
     */
    public function setConsumerID($consumerID)
    {
        $this->consumerID = $consumerID;

        return $this;
    }

    /**
     * @return string
     */
    public function getHouseHoldID()
    {
        return $this->houseHoldID;
    }

    /**
     * @param string $houseHoldID
     *
     * @return \Arkitecht\Gryphon\SOAP\ConsumerInfo
     */
    public function setHouseHoldID($houseHoldID)
    {
        $this->houseHoldID = $houseHoldID;

        return $this;
    }

    /**
     * @return string
     */
    public function getSurrogateID()
    {
        return $this->surrogateID;
    }

    /**
     * @param string $surrogateID
     *
     * @return \Arkitecht\Gryphon\SOAP\ConsumerInfo
     */
    public function setSurrogateID($surrogateID)
    {
        $this->surrogateID = $surrogateID;

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
     * @return \Arkitecht\Gryphon\SOAP\ConsumerInfo
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

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
     * @return \Arkitecht\Gryphon\SOAP\ConsumerInfo
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

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
     * @return \Arkitecht\Gryphon\SOAP\ConsumerInfo
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

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
     * @return \Arkitecht\Gryphon\SOAP\ConsumerInfo
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

}
