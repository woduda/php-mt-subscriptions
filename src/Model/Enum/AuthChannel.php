<?php
/**
 * Class AuthChannel
 *
 * @package DigitalVirgo\MTSubscriptions\Model\Enum
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model\Enum;

/**
 * Class AuthChannel
 */
class AuthChannel extends EnumAbstract
{
    const SMS_PIN   = 'SMS_PIN';
    const USSD      = 'USSD';
    const SMS       = 'SMS';
    const AUTH_PAGE = 'AUTH_PAGE';

}
