DigitalVirgo\MTSubscriptions\Model\ModelAbstract
===============

Class ModelAbstract - Abstract class for model providing xml serialization/deserialization




* Class name: ModelAbstract
* Namespace: DigitalVirgo\MTSubscriptions\Model
* This is an **abstract** class
* This class implements: [DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface](DigitalVirgo-MTSubscriptions-Model-ModelAbstractTraitInterface.md)






Methods
-------


### __construct

    mixed DigitalVirgo\MTSubscriptions\Model\ModelAbstract::__construct(array $params)

ModelAbstract constructor.



* Visibility: **public**


#### Arguments
* $params **array**



### setParamsData

    mixed DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface::setParamsData(array $params)

Set class data using setters methods



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface](DigitalVirgo-MTSubscriptions-Model-ModelAbstractTraitInterface.md)


#### Arguments
* $params **array**



### _getDomMap

    array DigitalVirgo\MTSubscriptions\Model\ModelAbstract::_getDomMap()

Return array structure od DOM document



* Visibility: **protected**
* This method is **abstract**.




### toDomElement

    \DOMElement DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface::toDomElement()

Convert object into DOMElement based on _getDomMap method



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface](DigitalVirgo-MTSubscriptions-Model-ModelAbstractTraitInterface.md)




### _appendElement

    mixed DigitalVirgo\MTSubscriptions\Model\ModelAbstract::_appendElement($name, $element, \DOMDocument $dom, $root)

Converts basic type to string and append it to DomElement



* Visibility: **protected**


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




### fromXml

    \DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface::fromXml($xml)

Set object parameters by xml string



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface](DigitalVirgo-MTSubscriptions-Model-ModelAbstractTraitInterface.md)


#### Arguments
* $xml **mixed** - &lt;p&gt;string&lt;/p&gt;


