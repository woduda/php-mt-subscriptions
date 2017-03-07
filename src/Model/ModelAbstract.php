<?php
/**
 * Class ModelAbstract
 *
 * @package DigitalVirgo\MTSubscriptions\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Model;

/**
 * Class ModelAbstract - Abstract class for model providing xml serialization/deserialization
 */
abstract class ModelAbstract implements ModelAbstractTraitInterface
{
    use ModelAbstractTrait;

    /**
     * ModelAbstract constructor.
     * @param array $params
     */
    public function __construct($params = array())
    {
        if (!empty($params)) {
            $this->setParamsData($params);
        }
    }

}
