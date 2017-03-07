<?php
/**
 * Class MtResponseStatus
 *
 * @package DigitalVirgo\MTSubscriptions\Model\Enum
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model\Enum;

/**
 * Class MtResponseStatus
 */
class MtResponseStatus extends EnumAbstract
{
    const TOKEN_SENT               = 'TOKEN_SENT';
    const SUBSCRIPTION_ACTIVATED   = 'SUBSCRIPTION_ACTIVATED';
    const SUBSCRIPTION_DEACTIVATED = 'SUBSCRIPTION_DEACTIVATED';
    const INVALID_TOKEN            = 'INVALID_TOKEN';
    const WRONG_OPERATOR           = 'WRONG_OPERATOR';
    const ERROR_INTERVAL_IP        = 'ERROR_INTERVAL_IP';
    const ERROR_COUNT_MSISDN       = 'ERROR_COUNT_MSISDN';
    const ERROR_VALIDATION         = 'ERROR_VALIDATION';
    const INFO_SENT                = 'INFO_SENT';
    const INCORRECT_MSISDN         = 'INCORRECT_MSISDN';
    const AUTH_REQUIRED            = 'AUTH_REQUIRED';
    const ALREADY_SUBSCRIBED       = 'ALREADY_SUBSCRIBED';
    const ORDER_SUBS_ACT           = 'ORDER_SUBS_ACT ';
    const INVALID_USER_TOKEN       = 'INVALID_USER_TOKEN';
    const ERROR                    = 'ERROR';
    const INITIALIZED              = 'INITIALIZED';
}
