<?php
/**
 * Class RegistrationStatus
 *
 * @package DigitalVirgo\MTSubscriptions\Model\Enum
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model\Enum;

/**
 * Class RegistrationStatus
 */
class RegistrationStatus extends EnumAbstract
{
    const REGISTERED     = 'REGISTERED';
    const UNREGISTERED   = 'UNREGISTERED';
    const PENDING        = 'PENDING';
    const FAILED         = 'FAILED';
    const WAIT_FOR_TOKEN = 'WAIT_FOR_TOKEN';
}
