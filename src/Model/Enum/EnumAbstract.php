<?php
/**
 * Class EnumAbstract
 *
 * @package DigitalVirgo\MTSubscriptions\Model\Enum
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model\Enum;

/**
 * Class EnumAbstract
 */
abstract class EnumAbstract
{

    /**
     * Get array of constants in current class
     *
     * @return array
     */
    static function getConstants() {
        $oClass = new \ReflectionClass(get_called_class());
        return $oClass->getConstants();
    }

}
