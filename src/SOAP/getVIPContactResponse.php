<?php

namespace Arkitecht\Gryphon\SOAP;

class getVIPContactResponse
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
     * @var ChannelInfo $cInfo
     */
    protected $cInfo = null;

    /**
     * @param int         $statusCode
     * @param string      $statusText
     * @param string      $campaignID
     * @param ChannelInfo $cInfo
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
     * @return \Arkitecht\Gryphon\SOAP\getVIPContactResponse
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
     * @return \Arkitecht\Gryphon\SOAP\getVIPContactResponse
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
     * @return \Arkitecht\Gryphon\SOAP\getVIPContactResponse
     */
    public function setCampaignID($campaignID)
    {
        $this->campaignID = $campaignID;

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
     * @return \Arkitecht\Gryphon\SOAP\getVIPContactResponse
     */
    public function setCInfo($cInfo)
    {
        $this->cInfo = $cInfo;

        return $this;
    }

}
