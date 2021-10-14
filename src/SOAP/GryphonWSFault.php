<?php

namespace Arkitecht\Gryphon\SOAP;

class GryphonWSFault
{

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @var int $errorCode
     */
    protected $errorCode = null;

    /**
     * @param string $errorMessage
     * @param int    $errorCode
     */
    public function __construct($errorMessage, $errorCode)
    {
        $this->errorMessage = $errorMessage;
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     *
     * @return \Arkitecht\Gryphon\SOAP\GryphonWSFault
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param int $errorCode
     *
     * @return \Arkitecht\Gryphon\SOAP\GryphonWSFault
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

}
