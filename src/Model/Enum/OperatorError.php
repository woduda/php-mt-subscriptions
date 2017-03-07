<?php
/**
 * Class OperatorError
 *
 * @package DigitalVirgo\MTSubscriptions\Model\Enum
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model\Enum;

/**
 * Class OperatorError
 */
class OperatorError extends EnumAbstract
{
    const INSUFFICIENT_FOUNDS         = 'INSUFFICIENT_FOUNDS';
    const CHARGE_LIMIT_EXCEEDED       = 'CHARGE_LIMIT_EXCEEDED';
    const USER_RESTRICTED             = 'USER_RESTRICTED';
    const TOKEN_EXPIRED               = 'TOKEN_EXPIRED';
    const TOKEN_LIMIT_EXCEEDED        = 'TOKEN_LIMIT_EXCEEDED';
    const TOKEN_INVALID               = 'TOKEN_INVALID';
    const OPERATOR_NOT_ALLOWED        = 'OPERATOR_NOT_ALLOWED';
    const OPERATOR_INTERNAL_ERROR     = 'OPERATOR_INTERNAL_ERROR';
    const USER_BLOCKED                = 'USER_BLOCKED';
    const NETWORK_ERROR               = 'NETWORK_ERROR';
    const TOO_MANY_REQUESTS           = 'TOO_MANY_REQUESTS';
    const LOCK_PREMIUM                = 'LOCK_PREMIUM';
    const SUBSCRIPTION_ALREADY_EXISTS = 'SUBSCRIPTION_ALREADY_EXISTS';
    const OTHER_OPERATION_IN_PROGRESS = 'OTHER_OPERATION_IN_PROGRESS';
    const UNSPECIFIED_ERROR           = 'UNSPECIFIED_ERROR';
    const PARENTAL_CONTROL            = 'PARENTAL_CONTROL';
    const LOCK_DIRECTBILLING          = 'LOCK_DIRECTBILLING';
}
