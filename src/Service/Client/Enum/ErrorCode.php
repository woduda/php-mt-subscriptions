<?php
/**
 * Class ErrorCode
 *
 * @package DigitalVirgo\MTSubscriptions\Model\Enum
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Service\Client\Enum;

use DigitalVirgo\MTSubscriptions\Model\Enum\EnumAbstract;

/**
 * Class WebResponseStatus
 */
class ErrorCode extends EnumAbstract
{
    const CONFIGURATION_NOT_FOUND                  = 'CONFIGURATION_NOT_FOUND';
    const ORDER_NOT_FOUND                          = 'ORDER_NOT_FOUND';
    const ALREADY_INITIALIZED                      = 'ALREADY_INITIALIZED';
    const INTERNAL_ERROR                           = 'INTERNAL_ERROR';
    const ORDER_TOKEN_ERROR                        = 'ORDER_TOKEN_ERROR';
    const ACTIVATE_ORDER_ERROR                     = 'ACTIVATE_ORDER_ERROR';
    const INVALID_TOKEN                            = 'INVALID_TOKEN';
    const ALREADY_ACTIVATED                        = 'ALREADY_ACTIVATED';
    const INVALID_STATE                            = 'INVALID_STATE';
    const WRONG_SERVICE_CONFIGURATION              = 'WRONG_SERVICE_CONFIGURATION';
    const UNRECOGNIZED_OPERATOR                    = 'UNRECOGNIZED_OPERATOR';
    const IP_LIMIT_REACHED                         = 'IP_LIMIT_REACHED';
    const MSISDN_LIMIT_REACHED                     = 'MSISDN_LIMIT_REACHED';
    const NO_MSISDN                                = 'NO_MSISDN ';
    const WRONG_MSISDN                             = 'WRONG_MSISDN';
    const SERVICE_OPERATOR_CONFIGURATION_NOT_FOUND = 'SERVICE_OPERATOR_CONFIGURATION_NOT_FOUND';
    const OPERATOR_ERROR                           = 'OPERATOR_ERROR';
    const UNSUPPORTED_OPERATOR                     = 'UNSUPPORTED_OPERATOR';

}
