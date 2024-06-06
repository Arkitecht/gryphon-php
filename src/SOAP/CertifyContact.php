<?php

namespace Arkitecht\Gryphon\SOAP;

class CertifyContact extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
        'ConsumerInfo'                    => 'Arkitecht\\Gryphon\\SOAP\\ConsumerInfo',
        'MailAddress'                     => 'Arkitecht\\Gryphon\\SOAP\\MailAddress',
        'CertifyPreferenceValue'          => 'Arkitecht\\Gryphon\\SOAP\\CertifyPreferenceValue',
        'CertifyMailPreferenceValue'      => 'Arkitecht\\Gryphon\\SOAP\\CertifyMailPreferenceValue',
        'CertifyChannelInfo'              => 'Arkitecht\\Gryphon\\SOAP\\CertifyChannelInfo',
        'CertificationResults'            => 'Arkitecht\\Gryphon\\SOAP\\CertificationResults',
        'CertificationDetails'            => 'Arkitecht\\Gryphon\\SOAP\\CertificationDetails',
        'CertificationMailDetails'        => 'Arkitecht\\Gryphon\\SOAP\\CertificationMailDetails',
        'CertifyChannelResp'              => 'Arkitecht\\Gryphon\\SOAP\\CertifyChannelResp',
        'WirelessContactResp'             => 'Arkitecht\\Gryphon\\SOAP\\WirelessContactResp',
        'GryphonWSFault'                  => 'Arkitecht\\Gryphon\\SOAP\\GryphonWSFault',
        'RequestInfo'                     => 'Arkitecht\\Gryphon\\SOAP\\RequestInfo',
        'certifyContactRequest'           => 'Arkitecht\\Gryphon\\SOAP\\CertifyContactRequest',
        'certifyContactResponse'          => 'Arkitecht\\Gryphon\\SOAP\\CertifyContactResponse',
        'seperateWirelessContactRequest'  => 'Arkitecht\\Gryphon\\SOAP\\seperateWirelessContactRequest',
        'seperateWirelessContactResponse' => 'Arkitecht\\Gryphon\\SOAP\\seperateWirelessContactResponse',
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
        $options = array_merge(['features' => 1], $options);
        if (!$wsdl) {
            $wsdl = 'https://websvcs.gryphon.ai/CoreServices40/services/CertifyContact?wsdl';
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * @param CertifyContactRequest $part1
     *
     * @return CertifyContactResponse
     */
    public function certifyContact(CertifyContactRequest $part1)
    {
        return $this->__soapCall('certifyContact', [$part1]);
    }

    /**
     * @param seperateWirelessContactRequest $part1
     *
     * @return seperateWirelessContactResponse
     */
    public function seperateWirelessContact(seperateWirelessContactRequest $part1)
    {
        return $this->__soapCall('seperateWirelessContact', [$part1]);
    }

}
