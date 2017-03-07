<?php
/**
 * Class MtResponse
 *
 * @package DigitalVirgo\MTSubscriptions\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model;

use DigitalVirgo\MTSubscriptions\Model\Enum\AuthChannel;
use DigitalVirgo\MTSubscriptions\Model\Enum\MtResponseStatus;

/**
 * Class MtResponse
 */
class MtResponse extends ModelAbstract
{

    /**
     * @var string
     */
    protected $_transactionId;

    /**
     * @var string
     */
    protected $_token;

    /**
     * @var string
     */
    protected $_responseStatus;

    /**
     * @var string
     */
    protected $_authChannel;

    /**
     * @var string
     */
    protected $_authURL;

    /**
     * @var string
     */
    protected $_smsTextCommand;

    /**
     * @var string
     */
    protected $_smsLargeAccount;

    /**
     * @var string
     */
    protected $_operatorError;

    /**
     * @var string
     */
    protected $_popupUrl;

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->_transactionId;
    }

    /**
     * @param string $transactionId
     * @return MtResponse
     */
    public function setTransactionId($transactionId)
    {
        $this->_transactionId = $transactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->_token;
    }

    /**
     * @param string $token
     * @return MtResponse
     */
    public function setToken($token)
    {
        $this->_token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseStatus()
    {
        return $this->_responseStatus;
    }

    /**
     * @param string $responseStatus
     * @return MtResponse
     */
    public function setResponseStatus($responseStatus)
    {
        if ($responseStatus && !in_array($responseStatus, MtResponseStatus::getConstants())) {
            throw new \Exception('Invalid responseStatus value. Accepted: ' . implode(', ', MtResponseStatus::getConstants()));
        }

        $this->_responseStatus = $responseStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthChannel()
    {
        return $this->_authChannel;
    }

    /**
     * @param string $authChannel
     * @return MtResponse
     * @throws \Exception
     */
    public function setAuthChannel($authChannel)
    {
        if ($authChannel && !in_array($authChannel, AuthChannel::getConstants())) {
            throw new \Exception('Invalid authChannel value. Accepted: ' . implode(', ', AuthChannel::getConstants()));
        }

        $this->_authChannel = $authChannel;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthURL()
    {
        return $this->_authURL;
    }

    /**
     * @param string $authURL
     * @return MtResponse
     */
    public function setAuthURL($authURL)
    {
        $this->_authURL = $authURL;
        return $this;
    }

    /**
     * @return string
     */
    public function getSmsTextCommand()
    {
        return $this->_smsTextCommand;
    }

    /**
     * @param string $smsTextCommand
     * @return MtResponse
     */
    public function setSmsTextCommand($smsTextCommand)
    {
        $this->_smsTextCommand = $smsTextCommand;
        return $this;
    }

    /**
     * @return string
     */
    public function getSmsLargeAccount()
    {
        return $this->_smsLargeAccount;
    }

    /**
     * @param string $smsLargeAccount
     * @return MtResponse
     */
    public function setSmsLargeAccount($smsLargeAccount)
    {
        $this->_smsLargeAccount = $smsLargeAccount;
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
     * @return MtResponse
     */
    public function setOperatorError($operatorError)
    {
        $this->_operatorError = $operatorError;
        return $this;
    }

    /**
     * @return string
     */
    public function getPopupUrl()
    {
        return $this->_popupUrl;
    }

    /**
     * @param string $popupUrl
     * @return MtResponse
     */
    public function setPopupUrl($popupUrl)
    {
        $this->_popupUrl = $popupUrl;
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
            'response' => [
                'transactionId'   => 'transactionId',
                'token'           => 'token',
                'responseStatus'  => 'responseStatus',
                'authChannel'     => 'authChannel',
                'authURL'         => 'authURL',
                'smsTextCommand'  => 'smsTextCommand',
                'smsLargeAccount' => 'smsLargeAccount',
                'operatorError'   => 'operatorError',
                'popupUrl'        => 'popupUrl',
            ]
        ];

    }

}
