DigitalVirgo\MTSubscriptions\Model\DeactivationForm
===============

Class DeactivationForm




* Class name: DeactivationForm
* Namespace: DigitalVirgo\MTSubscriptions\Model
* Parent class: [DigitalVirgo\MTSubscriptions\Model\ModelAbstract](DigitalVirgo-MTSubscriptions-Model-ModelAbstract.md)





Properties
----------


### $_transactionId

    protected string $_transactionId





* Visibility: **protected**


Methods
-------


### getTransactionId

    string DigitalVirgo\MTSubscriptions\Model\DeactivationForm::getTransactionId()





* Visibility: **public**




### setTransactionId

    \DigitalVirgo\MTSubscriptions\Model\DeactivationForm DigitalVirgo\MTSubscriptions\Model\DeactivationForm::setTransactionId(string $transactionId)





* Visibility: **public**


#### Arguments
* $transactionId **string**



### _getDomMap

    array DigitalVirgo\MTSubscriptions\Model\ModelAbstract::_getDomMap()

Return array structure od DOM document



* Visibility: **protected**
* This method is **abstract**.
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\ModelAbstract](DigitalVirgo-MTSubscriptions-Model-ModelAbstract.md)




### __construct

    mixed DigitalVirgo\MTSubscriptions\Model\ModelAbstract::__construct(array $params)

ModelAbstract constructor.



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\ModelAbstract](DigitalVirgo-MTSubscriptions-Model-ModelAbstract.md)


#### Arguments
* $params **array**



### setParamsData

    mixed DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface::setParamsData(array $params)

Set class data using setters methods



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface](DigitalVirgo-MTSubscriptions-Model-ModelAbstractTraitInterface.md)


#### Arguments
* $params **array**



### toDomElement

    \DOMElement DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface::toDomElement()

Convert object into DOMElement based on _getDomMap method



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface](DigitalVirgo-MTSubscriptions-Model-ModelAbstractTraitInterface.md)




### _appendElement

    mixed DigitalVirgo\MTSubscriptions\Model\ModelAbstract::_appendElement($name, $element, \DOMDocument $dom, $root)

Converts basic type to string and append it to DomElement



* Visibility: **protected**
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\ModelAbstract](DigitalVirgo-MTSubscriptions-Model-ModelAbstract.md)


#### Arguments
* $name **mixed**
* $element **mixed**
* $dom **DOMDocument**
* $root **mixed**



### toXml

    string DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface::toXml(boolean $prettyFormat)

Convert object info XML string



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface](DigitalVirgo-MTSubscriptions-Model-ModelAbstractTraitInterface.md)


#### Arguments
* $prettyFormat **boolean** - &lt;p&gt;Render Xml with new lines and indentation, default false&lt;/p&gt;



### __toString

    mixed DigitalVirgo\MTSubscriptions\Model\ModelAbstract::__toString()

Alias for toXml



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\ModelAbstract](DigitalVirgo-MTSubscriptions-Model-ModelAbstract.md)




### fromXml

    \DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface::fromXml($xml)

Set object parameters by xml string



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface](DigitalVirgo-MTSubscriptions-Model-ModelAbstractTraitInterface.md)


#### Arguments
* $xml **mixed** - &lt;p&gt;string&lt;/p&gt;


