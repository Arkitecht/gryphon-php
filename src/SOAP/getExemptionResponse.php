<?php

namespace Arkitecht\Gryphon\SOAP;

class getExemptionResponse
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
     * @var string $campaignID
     */
    protected $campaignID = null;

    /**
     * @var ExemptionChannelInfo $cInfo
     */
    protected $cInfo = null;

    /**
     * @param int                  $statusCode
     * @param string               $statusText
     * @param string               $campaignID
     * @param ExemptionChannelInfo $cInfo
     */
    public function __construct($statusCode, $statusText, $campaignID, $cInfo)
    {
        $this->statusCode = $statusCode;
        $this->statusText = $statusText;
        $this->campaignID = $campaignID;
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
     * @return \Arkitecht\Gryphon\SOAP\getExemptionResponse
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
     * @return \Arkitecht\Gryphon\SOAP\getExemptionResponse
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;

        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignID()
    {
        return $this->campaignID;
    }

    /**
     * @param string $campaignID
     *
     * @return \Arkitecht\Gryphon\SOAP\getExemptionResponse
     */
    public function setCampaignID($campaignID)
    {
        $this->campaignID = $campaignID;

        return $this;
    }

    /**
     * @return ExemptionChannelInfo
     */
    public function getCInfo()
    {
        return $this->cInfo;
    }

    /**
     * @param ExemptionChannelInfo $cInfo
     *
     * @return \Arkitecht\Gryphon\SOAP\getExemptionResponse
     */
    public function setCInfo($cInfo)
    {
        $this->cInfo = $cInfo;

        return $this;
    }

}
