<?php

namespace Arkitecht\Gryphon\SOAP;

class AddContactResponse
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
     * @var ChannelInfo $cInfo
     */
    protected $cInfo = null;

    /**
     * @param int         $statusCode
     * @param string      $statusText
     * @param ChannelInfo $cInfo
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
     * @return \Arkitecht\Gryphon\SOAP\AddContactResponse
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
     * @return \Arkitecht\Gryphon\SOAP\AddContactResponse
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;

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
     * @return \Arkitecht\Gryphon\SOAP\AddContactResponse
     */
    public function setCInfo($cInfo)
    {
        $this->cInfo = $cInfo;

        return $this;
    }

}
