<?php

namespace Arkitecht\Gryphon\SOAP;

class seperateWirelessContactResponse
{

    /**
     * @var int $statusCode
     */
    protected $statusCode = null;

    /**
     * @var string $statusText
     */
    protected $statusText = null;

    /**
     * @var \DateTime $certifyDate
     */
    protected $certifyDate = null;

    /**
     * @var WirelessContactResp $cInfo
     */
    protected $cInfo = null;

    /**
     * @param int                 $statusCode
     * @param string              $statusText
     * @param \DateTime           $certifyDate
     * @param WirelessContactResp $cInfo
     */
    public function __construct($statusCode, $statusText, \DateTime $certifyDate, $cInfo)
    {
        $this->statusCode = $statusCode;
        $this->statusText = $statusText;
        $this->certifyDate = $certifyDate->format(\DateTime::ATOM);
        $this->cInfo = $cInfo;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     *
     * @return \Arkitecht\Gryphon\SOAP\seperateWirelessContactResponse
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

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
     * @return \Arkitecht\Gryphon\SOAP\seperateWirelessContactResponse
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCertifyDate()
    {
        if ($this->certifyDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->certifyDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $certifyDate
     *
     * @return \Arkitecht\Gryphon\SOAP\seperateWirelessContactResponse
     */
    public function setCertifyDate(\DateTime $certifyDate)
    {
        $this->certifyDate = $certifyDate->format(\DateTime::ATOM);

        return $this;
    }

    /**
     * @return WirelessContactResp
     */
    public function getCInfo()
    {
        return $this->cInfo;
    }

    /**
     * @param WirelessContactResp $cInfo
     *
     * @return \Arkitecht\Gryphon\SOAP\seperateWirelessContactResponse
     */
    public function setCInfo($cInfo)
    {
        $this->cInfo = $cInfo;

        return $this;
    }

}
