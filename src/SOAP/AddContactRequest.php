<?php

namespace Arkitecht\Gryphon\SOAP;

class AddContactRequest
{

    /**
     * @var string $licenseID
     */
    protected $licenseID = null;

    /**
     * @var RequestInfo $rInfo
     */
    protected $rInfo = null;

    /**
     * @var ChannelInfo $cInfo
     */
    protected $cInfo = null;

    /**
     * @param string             $licenseID
     * @param RequestInfo|null   $rInfo
     * @param CertifyChannelInfo $cInfo
     */
    public function __construct($licenseID, $rInfo, $cInfo)
    {
        $this->licenseID = $licenseID;
        $this->rInfo = $rInfo;
        $this->cInfo = $cInfo;
    }

    /**
     * @return string
     */
    public function getLicenseID()
    {
        return $this->licenseID;
    }

    /**
     * @param string $licenseID
     *
     * @return \Arkitecht\Gryphon\SOAP\AddContactRequest
     */
    public function setLicenseID($licenseID)
    {
        $this->licenseID = $licenseID;

        return $this;
    }

    /**
     * @return RequestInfo
     */
    public function getRInfo()
    {
        return $this->rInfo;
    }

    /**
     * @param RequestInfo $rInfo
     *
     * @return \Arkitecht\Gryphon\SOAP\AddContactRequest
     */
    public function setRInfo($rInfo)
    {
        $this->rInfo = $rInfo;

        return $this;
    }

    /**
     * @return ChannelInfo
     */
    public function getCInfo()
    {
        return $this->cInfo;
    }

    /**
     * @param ChannelInfo $cInfo
     *
     * @return \Arkitecht\Gryphon\SOAP\AddContactRequest
     */
    public function setCInfo($cInfo)
    {
        $this->cInfo = $cInfo;

        return $this;
    }

}
