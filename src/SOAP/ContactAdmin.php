<?php

namespace Arkitecht\Gryphon\SOAP;

class ContactAdmin extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
        'ConsumerInfo'                 => 'Dish\\Gryphon\\ConsumerInfo',
        'MailAddress'                  => 'Dish\\Gryphon\\MailAddress',
        'PreferenceValue'              => 'Dish\\Gryphon\\PreferenceValue',
        'ExemptionPreferenceValue'     => 'Dish\\Gryphon\\ExemptionPreferenceValue',
        'MailPreferenceValue'          => 'Dish\\Gryphon\\MailPreferenceValue',
        'ExemptionMailPreferenceValue' => 'Dish\\Gryphon\\ExemptionMailPreferenceValue',
        'ChannelInfo'                  => 'Dish\\Gryphon\\ChannelInfo',
        'ExemptionChannelInfo'         => 'Dish\\Gryphon\\ExemptionChannelInfo',
        'GryphonWSFault'               => 'Dish\\Gryphon\\GryphonWSFault',
        'RequestInfo'                  => 'Dish\\Gryphon\\RequestInfo',
        'addContactRequest'            => 'Dish\\Gryphon\\addContactRequest',
        'addContactResponse'           => 'Dish\\Gryphon\\addContactResponse',
        'removeContactRequest'         => 'Dish\\Gryphon\\removeContactRequest',
        'removeContactResponse'        => 'Dish\\Gryphon\\removeContactResponse',
        'addExemptionRequest'          => 'Dish\\Gryphon\\addExemptionRequest',
        'addExemptionResponse'         => 'Dish\\Gryphon\\addExemptionResponse',
        'removeExemptionRequest'       => 'Dish\\Gryphon\\removeExemptionRequest',
        'removeExemptionResponse'      => 'Dish\\Gryphon\\removeExemptionResponse',
        'getContactRequest'            => 'Dish\\Gryphon\\getContactRequest',
        'getContactResponse'           => 'Dish\\Gryphon\\getContactResponse',
        'getExemptionRequest'          => 'Dish\\Gryphon\\getExemptionRequest',
        'getExemptionResponse'         => 'Dish\\Gryphon\\getExemptionResponse',
        'addVIPContactRequest'         => 'Dish\\Gryphon\\addVIPContactRequest',
        'addVIPContactResponse'        => 'Dish\\Gryphon\\addVIPContactResponse',
        'removeVIPContactRequest'      => 'Dish\\Gryphon\\removeVIPContactRequest',
        'removeVIPContactResponse'     => 'Dish\\Gryphon\\removeVIPContactResponse',
        'getVIPContactRequest'         => 'Dish\\Gryphon\\getVIPContactRequest',
        'getVIPContactResponse'        => 'Dish\\Gryphon\\getVIPContactResponse',
    ];

    /**
     * @param array  $options A array of config values
     * @param string $wsdl    The wsdl file to use
     */
    public function __construct(array $options = [], $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][ $key ])) {
                $options['classmap'][ $key ] = $value;
            }
        }
        $options = array_merge([
            'features' => 1,
        ], $options);
        if (!$wsdl) {
            $wsdl = 'https://websvcs.gryphonnetworks.com/CoreServices40/services/ContactAdmin?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param addContactRequest $part1
     *
     * @return addContactResponse
     */
    public function addContact(addContactRequest $part1)
    {
        return $this->__soapCall('addContact', [$part1]);
    }

    /**
     * @param removeExemptionRequest $part1
     *
     * @return removeExemptionResponse
     */
    public function removeExemption(removeExemptionRequest $part1)
    {
        return $this->__soapCall('removeExemption', [$part1]);
    }

    /**
     * @param addVIPContactRequest $part1
     *
     * @return addVIPContactResponse
     */
    public function addVIPContact(addVIPContactRequest $part1)
    {
        return $this->__soapCall('addVIPContact', [$part1]);
    }

    /**
     * @param removeVIPContactRequest $part1
     *
     * @return removeVIPContactResponse
     */
    public function removeVIPContact(removeVIPContactRequest $part1)
    {
        return $this->__soapCall('removeVIPContact', [$part1]);
    }

    /**
     * @param getContactRequest $part1
     *
     * @return getContactResponse
     */
    public function getContact(getContactRequest $part1)
    {
        return $this->__soapCall('getContact', [$part1]);
    }

    /**
     * @param getExemptionRequest $part1
     *
     * @return getExemptionResponse
     */
    public function getExemption(getExemptionRequest $part1)
    {
        return $this->__soapCall('getExemption', [$part1]);
    }

    /**
     * @param addExemptionRequest $part1
     *
     * @return addExemptionResponse
     */
    public function addExemption(addExemptionRequest $part1)
    {
        return $this->__soapCall('addExemption', [$part1]);
    }

    /**
     * @param getVIPContactRequest $part1
     *
     * @return getVIPContactResponse
     */
    public function getVIPContact(getVIPContactRequest $part1)
    {
        return $this->__soapCall('getVIPContact', [$part1]);
    }

    /**
     * @param removeContactRequest $part1
     *
     * @return removeContactResponse
     */
    public function removeContact(removeContactRequest $part1)
    {
        return $this->__soapCall('removeContact', array($part1));
    }

}
