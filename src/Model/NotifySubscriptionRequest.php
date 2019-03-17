<?php
/**
 * Class NotifySubscriptionRequest
 *
 * @package DigitalVirgo\MTSubscriptions\Model
 * @author Wojciech Duda <wduda@wojciechduda.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model;

/**
 * Class InitSubscriptionRequest
 */
class NotifySubscriptionRequest extends ModelAbstract
{
    /**
     * @var string
     */
    protected $_msisdn;

    /**
     * @var string
     */
    protected $_oldMsisdn = null;

    /**
     * @var string
     */
    protected $_operator;

    /**
     * @var string
     */
    protected $_serviceName​;

    /**
     * @var int
     */
    protected $_status;

    /**
     * @var \DateTime
     */
    protected $_updateDate;

    /**
     * @var string
     */
    protected $_source;

    /**
     * @var string
     */
    protected $_lastTransactionId​;

    /**
     * Return Dom Map for parser
     *
     * @return array
     */
    protected function _getDomMap()
    {
        return [
            'subscriber' => [
                'msisdn'     => 'msisdn',
                'oldMsisdn'  => 'oldMsisdn',
                'serviceName'  => 'serviceName',
                ''   => 'successUrl',
                'failureUrl'   => 'failureUrl',
                'clientIp'     => 'clientIp',
                'tryAvailable' => 'tryAvailable',
                'msisdn'       => 'msisdn',
                'extClientId'  => 'extClientId',
                'layoutId'     => 'layoutId'
            ]
        ];
    }

    /**
     * Get the value of msisdn
     *
     * @return  string
     */
    public function getMsisdn()
    {
        return $this->_msisdn;
    }

    /**
     * Set the value of msisdn
     *
     * @param  string  $msisdn
     *
     * @return  self
     */
    public function setMsisdn(string $msisdn)
    {
        $this->_msisdn = $msisdn;

        return $this;
    }

    /**
     * Get the value of oldMsisdn
     *
     * @return  string
     */
    public function getOldMsisdn()
    {
        return $this->_oldMsisdn;
    }

    /**
     * Set the value of oldMsisdn
     *
     * @param  string  $oldMsisdn
     *
     * @return  self
     */
    public function setOldMsisdn(string $oldMsisdn)
    {
        $this->_oldMsisdn = $oldMsisdn;

        return $this;
    }

    /**
     * Get the value of operator
     *
     * @return  string
     */
    public function getOperator()
    {
        return $this->_operator;
    }

    /**
     * Set the value of operator
     *
     * @param  string  $operator
     *
     * @return  self
     */
    public function setOperator(string $operator)
    {
        $this->_operator = $operator;

        return $this;
    }

    /**
     * Get the value of serviceName​
     *
     * @return  string
     */
    public function getServiceName​()
    {
        return $this->_serviceName​;
    }

    /**
     * Set the value of serviceName​
     *
     * @param  string  $serviceName​
     *
     * @return  self
     */
    public function setServiceName​(string $serviceName​)
    {
        $this->_serviceName​ = $serviceName​;

        return $this;
    }

    /**
     * Get the value of status
     *
     * @return  int
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * Set the value of status
     *
     * @param  int  $status
     *
     * @return  self
     */
    public function setStatus(int $status)
    {
        $this->_status = $status;

        return $this;
    }

    /**
     * Get the value of updateDate
     *
     * @return  \DateTime
     */
    public function getUpdateDate()
    {
        return $this->_updateDate;
    }

    /**
     * Set the value of updateDate
     *
     * @param  \DateTime|string  $updateDate
     *
     * @return  self
     */
    public function setUpdateDate($updateDate)
    {
        if (is_string($updateDate)) {
            $updateDate = new \DateTime($updateDate);
        }

        $this->_updateDate = $updateDate;

        return $this;
    }

    /**
     * Get the value of source
     *
     * @return  string
     */
    public function getSource()
    {
        return $this->_source;
    }

    /**
     * Set the value of source
     *
     * @param  string  $source
     *
     * @return  self
     */
    public function setSource(string $source)
    {
        $this->_source = $source;

        return $this;
    }

    /**
     * Get the value of lastTransactionId​
     *
     * @return  string
     */
    public function getLastTransactionId​()
    {
        return $this->_lastTransactionId​;
    }

    /**
     * Set the value of lastTransactionId​
     *
     * @param  string  $lastTransactionId​
     *
     * @return  self
     */
    public function setLastTransactionId​(string $lastTransactionId​)
    {
        $this->_lastTransactionId​ = $lastTransactionId​;

        return $this;
    }
}
