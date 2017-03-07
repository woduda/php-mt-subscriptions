<?php
/**
 * Class GetOrderStatusResponse
 *
 * @package DigitalVirgo\MTSubscriptions\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model;

use DigitalVirgo\MTSubscriptions\Model\Enum\OperatorError;
use DigitalVirgo\MTSubscriptions\Model\Enum\RegistrationStatus;

/**
 * Class GetOrderStatusResponse
 */
class GetOrderStatusResponse extends RwdResponse
{

    /**
     * @var string
     */
    protected $_status;

    /**
     * @var string
     */
    protected $_operatorError;

    /**
     * @var string
     */
    protected $_successUrl;

    /**
     * @var string
     */
    protected $_failureUrl;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param string $status
     * @return GetOrderStatusResponse
     */
    public function setStatus($status)
    {
        if ($status && !in_array($status, RegistrationStatus::getConstants())) {
            throw new \Exception('Invalid status value. Accepted: ' . implode(', ', RegistrationStatus::getConstants()));
        }

        $this->_status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperatorError()
    {
        return $this->_operatorError;
    }

    /**
     * @param string $operatorError
     * @return GetOrderStatusResponse
     */
    public function setOperatorError($operatorError)
    {
        if ($operatorError && !in_array($operatorError, OperatorError::getConstants())) {
            throw new \Exception('Invalid operatorError value. Accepted: ' . implode(', ', OperatorError::getConstants()));
        }

        $this->_operatorError = $operatorError;
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
     * @return GetOrderStatusResponse
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
     * @return GetOrderStatusResponse
     */
    public function setFailureUrl($failureUrl)
    {
        $this->_failureUrl = $failureUrl;
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
            'initSubscriptionResponse' => array_merge([
                'transactionId' => 'transactionId',
                'subscriptionPageUrl' => 'subscriptionPageUrl',
                'status' => 'status',
            ], reset(parent::_getDomMap()))
        ];
    }

}
