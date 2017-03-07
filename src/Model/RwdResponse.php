<?php
/**
 * Class RwdResponse
 *
 * @package DigitalVirgo\MTSubscriptions\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model;

use DigitalVirgo\MTSubscriptions\Model\Enum\AuthorizationType;

/**
 * Class RwdResponse
 */
class RwdResponse extends ModelAbstract
{

    /**
     * @var string
     */
    protected $_authorizationType;

    /**
     * @return string
     */
    public function getAuthorizationType()
    {
        return $this->_authorizationType;
    }

    /**
     * @param string $authorizationType
     * @return RwdResponse
     * @throws \Exception
     */
    public function setAuthorizationType($authorizationType)
    {
        if ($authorizationType && !in_array($authorizationType, AuthorizationType::getConstants())) {
            throw new \Exception('Invalid authorizationType value. Accepted: ' . implode(', ', AuthorizationType::getConstants()));
        }

        $this->_authorizationType = $authorizationType;
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
            'rwdResponse' => [
                'authorizationType' => 'authorizationType'
            ]
        ];

    }

}
