DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse
===============

Class GetOrderStatusResponse




* Class name: GetOrderStatusResponse
* Namespace: DigitalVirgo\MTSubscriptions\Model
* Parent class: [DigitalVirgo\MTSubscriptions\Model\RwdResponse](DigitalVirgo-MTSubscriptions-Model-RwdResponse.md)





Properties
----------


### $_status

    protected string $_status





* Visibility: **protected**


### $_operatorError

    protected string $_operatorError





* Visibility: **protected**


### $_successUrl

    protected string $_successUrl





* Visibility: **protected**


### $_failureUrl

    protected string $_failureUrl





* Visibility: **protected**


### $_authorizationType

    protected string $_authorizationType





* Visibility: **protected**


Methods
-------


### getStatus

    string DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse::getStatus()





* Visibility: **public**




### setStatus

    \DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse::setStatus(string $status)





* Visibility: **public**


#### Arguments
* $status **string**



### getOperatorError

    string DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse::getOperatorError()





* Visibility: **public**




### setOperatorError

    \DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse::setOperatorError(string $operatorError)





* Visibility: **public**


#### Arguments
* $operatorError **string**



### getSuccessUrl

    string DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse::getSuccessUrl()





* Visibility: **public**




### setSuccessUrl

    \DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse::setSuccessUrl(string $successUrl)





* Visibility: **public**


#### Arguments
* $successUrl **string**



### getFailureUrl

    string DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse::getFailureUrl()





* Visibility: **public**




### setFailureUrl

    \DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse::setFailureUrl(string $failureUrl)





* Visibility: **public**


#### Arguments
* $failureUrl **string**



### _getDomMap

    array DigitalVirgo\MTSubscriptions\Model\ModelAbstract::_getDomMap()

Return array structure od DOM document



* Visibility: **protected**
* This method is **abstract**.
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\ModelAbstract](DigitalVirgo-MTSubscriptions-Model-ModelAbstract.md)




### getAuthorizationType

    string DigitalVirgo\MTSubscriptions\Model\RwdResponse::getAuthorizationType()





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\RwdResponse](DigitalVirgo-MTSubscriptions-Model-RwdResponse.md)




### setAuthorizationType

    \DigitalVirgo\MTSubscriptions\Model\RwdResponse DigitalVirgo\MTSubscriptions\Model\RwdResponse::setAuthorizationType(string $authorizationType)





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSubscriptions\Model\RwdResponse](DigitalVirgo-MTSubscriptions-Model-RwdResponse.md)


#### Arguments
* $authorizationType **string**



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


