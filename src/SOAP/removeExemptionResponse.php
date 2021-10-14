<?php

namespace Arkitecht\Gryphon\SOAP;

class removeExemptionResponse
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
     * @var ExemptionChannelInfo $cInfo
     */
    protected $cInfo = null;

    /**
     * @param int                  $statusCode
     * @param string               $statusText
     * @param ExemptionChannelInfo $cInfo
     */
    public function __construct($statusCode, $statusText, $cInfo)
    {
        $this->statusCode = $statusCode;
        $this->statusText = $statusText;
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
     * @return \Arkitecht\Gryphon\SOAP\removeExemptionResponse
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
     * @return \Arkitecht\Gryphon\SOAP\removeExemptionResponse
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;

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
     * @return \Arkitecht\Gryphon\SOAP\removeExemptionResponse
     */
    public function setCInfo($cInfo)
    {
        $this->cInfo = $cInfo;

        return $this;
    }

}
