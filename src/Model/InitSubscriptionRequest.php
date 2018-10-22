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
     * @var boolean
     */
    protected $_tryAvailable;

    /**
     * @var string
     */
    protected $_msisdn;

    /**
     * @var string
     */
    protected $_extClientId;

    /**
     * @var string
     */
    protected $_layoutId;

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
     * @return bool
     */
    public function isTryAvailable()
    {
        return $this->_tryAvailable;
    }

    /**
     * @param bool $tryAvailable
     */
    public function setTryAvailable($tryAvailable)
    {
        $this->_tryAvailable = $tryAvailable;
    }

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->_msisdn;
    }

    /**
     * @param string $msisdn
     */
    public function setMsisdn($msisdn)
    {
        $this->_msisdn = $msisdn;
    }

    /**
     * @return string
     */
    public function getExtClientId()
    {
        return $this->_extClientId;
    }

    /**
     * @param string $extClientId
     */
    public function setExtClientId($extClientId)
    {
        $this->_extClientId = $extClientId;
    }

    /**
     * @return string
     */
    public function getLayoutId()
    {
        return $this->_layoutId;
    }

    /**
     * @param string $layoutId
     */
    public function setLayoutId($layoutId)
    {
        $this->_layoutId = $layoutId;
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
                'partnerName'  => 'partnerName',
                'serviceName'  => 'serviceName',
                'successUrl'   => 'successUrl',
                'failureUrl'   => 'failureUrl',
                'clientIp'     => 'clientIp',
                'tryAvailable' => 'tryAvailable',
                'msisdn'       => 'msisdn',
                'extClientId'  => 'extClientId',
                'layoutId'     => 'layoutId'
            ]
        ];

    }

}
