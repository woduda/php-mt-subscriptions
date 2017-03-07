<?php
/**
 * Class DeactivationForm
 *
 * @package DigitalVirgo\MTSubscriptions\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model;

/**
 * Class DeactivationForm
 */
class DeactivationForm extends ModelAbstract
{

    /**
     * @var string
     */
    protected $_transactionId;

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->_transactionId;
    }

    /**
     * @param string $transactionId
     * @return DeactivationForm
     */
    public function setTransactionId($transactionId)
    {
        $this->_transactionId = $transactionId;
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
            'deactivationForm' => [
                'transactionId' => 'transactionId'
            ]
        ];

    }

}
