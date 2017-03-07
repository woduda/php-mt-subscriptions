<?php
/**
 * Class InitSubscriptionRequest
 *
 * @package DigitalVirgo\MTSubscriptions\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model;

/**
 * Class InitSubscriptionRequest
 */
class InitSubscriptionRequest extends ModelAbstract
{

    /**
     * @var string
     */
    protected $_partnerName;

    /**
     * @var string
     */
    protected $_serviceName;

    /**
     * @var string
     */
    protected $_successUrl;

    /**
     * @var string
     */
    protected $_failureUrl;

    /**
     * @var string
     */
    protected $_clientIp;

    /**
     * @return string
     */
    public function getPartnerName()
    {
        return $this->_partnerName;
    }

    /**
     * @param string $partnerName
     * @return InitSubscriptionRequest
     */
    public function setPartnerName($partnerName)
    {
        $this->_partnerName = $partnerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->_serviceName;
    }

    /**
     * @param string $serviceName
     * @return InitSubscriptionRequest
     */
    public function setServiceName($serviceName)
    {
        $this->_serviceName = $serviceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->_successUrl;
    }

    /**
     * @param string $successUrl
     * @return InitSubscriptionRequest
     */
    public function setSuccessUrl($successUrl)
    {
        $this->_successUrl = $successUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailureUrl()
    {
        return $this->_failureUrl;
    }

    /**
     * @param string $failureUrl
     * @return InitSubscriptionRequest
     */
    public function setFailureUrl($failureUrl)
    {
        $this->_failureUrl = $failureUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientIp()
    {
        return $this->_clientIp;
    }

    /**
     * @param string $clientIp
     * @return InitSubscriptionRequest
     */
    public function setClientIp($clientIp)
    {
        $this->_clientIp = $clientIp;
        return $this;
    }

    /**
     * Return Dom Map for parser
     *
     * @return array
     */
    protected function _getDomMap()
    {
        return [
            'initSubscriptionRequest' => [
                'partnerName' => 'partnerName',
                'serviceName' => 'serviceName',
                'successUrl' => 'successUrl',
                'failureUrl' => 'failureUrl',
                'clientIp' => 'clientIp'
            ]
        ];

    }

}
