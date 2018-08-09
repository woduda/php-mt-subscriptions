<?php
/**
 * Class InitSubscriptionResponse
 *
 * @package DigitalVirgo\MTSubscriptions\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model;
use DigitalVirgo\MTSubscriptions\Model\Enum\WebResponseStatus;

/**
 * Class InitSubscriptionResponse
 */
class InitSubscriptionResponse extends RwdResponse
{

    /**
     * @var string
     */
    protected $_transactionId;

    /**
     * @var string
     */
    protected $_subscriptionPageUrl;

    /**
     * @var string
     */
    protected $_status;

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->_transactionId;
    }

    /**
     * @param string $transactionId
     * @return InitSubscriptionResponse
     */
    public function setTransactionId($transactionId)
    {
        $this->_transactionId = $transactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionPageUrl()
    {
        return $this->_subscriptionPageUrl;
    }

    /**
     * @param string $subscriptionPageUrl
     * @return InitSubscriptionResponse
     */
    public function setSubscriptionPageUrl($subscriptionPageUrl)
    {
        $this->_subscriptionPageUrl = $subscriptionPageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param string $status
     * @return InitSubscriptionResponse
     * @throws \Exception
     */
    public function setStatus($status)
    {

        if ($status && !in_array($status, WebResponseStatus::getConstants())) {
            throw new \Exception('Invalid Status value. Accepted: ' . implode(', ', WebResponseStatus::getConstants()));
        }

        $this->_status = $status;
        return $this;
    }

    /**
     * Return Dom Map for parser
     *
     * @return array
     */
    protected function _getDomMap()
    {
        $domMap = parent::_getDomMap();
        $domMap = reset($domMap);

        return [
            'initSubscriptionResponse' => array_merge([
                'transactionId' => 'transactionId',
                'subscriptionPageUrl' => 'subscriptionPageUrl',
                'status' => 'status',
            ], reset($domMap))
        ];
    }

}
