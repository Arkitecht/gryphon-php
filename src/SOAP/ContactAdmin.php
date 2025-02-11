<?php

namespace Arkitecht\Gryphon\SOAP;

use PHPUnit\Util\Xml;

class ContactAdmin extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
        'ConsumerInfo'                 => 'Arkitecht\\Gryphon\\SOAP\\ConsumerInfo',
        'MailAddress'                  => 'Arkitecht\\Gryphon\\SOAP\\MailAddress',
        'PreferenceValue'              => 'Arkitecht\\Gryphon\\SOAP\\PreferenceValue',
        'ExemptionPreferenceValue'     => 'Arkitecht\\Gryphon\\SOAP\\ExemptionPreferenceValue',
        'MailPreferenceValue'          => 'Arkitecht\\Gryphon\\SOAP\\MailPreferenceValue',
        'ExemptionMailPreferenceValue' => 'Arkitecht\\Gryphon\\SOAP\\ExemptionMailPreferenceValue',
        'ChannelInfo'                  => 'Arkitecht\\Gryphon\\SOAP\\ChannelInfo',
        'ExemptionChannelInfo'         => 'Arkitecht\\Gryphon\\SOAP\\ExemptionChannelInfo',
        'GryphonWSFault'               => 'Arkitecht\\Gryphon\\SOAP\\GryphonWSFault',
        'RequestInfo'                  => 'Arkitecht\\Gryphon\\SOAP\\RequestInfo',
        'addContactRequest'            => 'Arkitecht\\Gryphon\\SOAP\\AddContactRequest',
        'addContactResponse'           => 'Arkitecht\\Gryphon\\SOAP\\AddContactResponse',
        'removeContactRequest'         => 'Arkitecht\\Gryphon\\SOAP\\removeContactRequest',
        'removeContactResponse'        => 'Arkitecht\\Gryphon\\SOAP\\removeContactResponse',
        'addExemptionRequest'          => 'Arkitecht\\Gryphon\\SOAP\\addExemptionRequest',
        'addExemptionResponse'         => 'Arkitecht\\Gryphon\\SOAP\\addExemptionResponse',
        'removeExemptionRequest'       => 'Arkitecht\\Gryphon\\SOAP\\removeExemptionRequest',
        'removeExemptionResponse'      => 'Arkitecht\\Gryphon\\SOAP\\removeExemptionResponse',
        'getContactRequest'            => 'Arkitecht\\Gryphon\\SOAP\\getContactRequest',
        'getContactResponse'           => 'Arkitecht\\Gryphon\\SOAP\\getContactResponse',
        'getExemptionRequest'          => 'Arkitecht\\Gryphon\\SOAP\\getExemptionRequest',
        'getExemptionResponse'         => 'Arkitecht\\Gryphon\\SOAP\\getExemptionResponse',
        'addVIPContactRequest'         => 'Arkitecht\\Gryphon\\SOAP\\addVIPContactRequest',
        'addVIPContactResponse'        => 'Arkitecht\\Gryphon\\SOAP\\addVIPContactResponse',
        'removeVIPContactRequest'      => 'Arkitecht\\Gryphon\\SOAP\\removeVIPContactRequest',
        'removeVIPContactResponse'     => 'Arkitecht\\Gryphon\\SOAP\\removeVIPContactResponse',
        'getVIPContactRequest'         => 'Arkitecht\\Gryphon\\SOAP\\getVIPContactRequest',
        'getVIPContactResponse'        => 'Arkitecht\\Gryphon\\SOAP\\getVIPContactResponse',
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
            $wsdl = 'https://websvcs.gryphon.ai/CoreServices40/services/ContactAdmin?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    public function __doRequest($request, $location, $action, $version, $one_way = false,): ?string
    {
        dump($request);
        $xml = simplexml_load_string($request);

        foreach ($xml->xpath('//*[not(node())]') as $remove) {
            $name = $remove->getName();
            if ($name !== 'rInfo') {
                unset($remove[0]);
            }
        }

        $request = $xml->asXML();

        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }

    /**
     * @param AddContactRequest $part1
     *
     * @return AddContactResponse
     */
    public function addContact(AddContactRequest $part1)
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
        return $this->__soapCall('removeContact', [$part1]);
    }

}
