DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest
===============

Class InitSubscriptionRequest




* Class name: InitSubscriptionRequest
* Namespace: DigitalVirgo\MTSubscriptions\Model
* Parent class: [DigitalVirgo\MTSubscriptions\Model\ModelAbstract](DigitalVirgo-MTSubscriptions-Model-ModelAbstract.md)





Properties
----------


### $_partnerName

    protected string $_partnerName





* Visibility: **protected**


### $_serviceName

    protected string $_serviceName





* Visibility: **protected**


### $_successUrl

    protected string $_successUrl





* Visibility: **protected**


### $_failureUrl

    protected string $_failureUrl





* Visibility: **protected**


### $_clientIp

    protected string $_clientIp





* Visibility: **protected**


Methods
-------


### getPartnerName

    string DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest::getPartnerName()





* Visibility: **public**




### setPartnerName

    \DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest::setPartnerName(string $partnerName)





* Visibility: **public**


#### Arguments
* $partnerName **string**



### getServiceName

    string DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest::getServiceName()





* Visibility: **public**




### setServiceName

    \DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest::setServiceName(string $serviceName)





* Visibility: **public**


#### Arguments
* $serviceName **string**



### getSuccessUrl

    string DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest::getSuccessUrl()





* Visibility: **public**




### setSuccessUrl

    \DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest::setSuccessUrl(string $successUrl)





* Visibility: **public**


#### Arguments
* $successUrl **string**



### getFailureUrl

    string DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest::getFailureUrl()





* Visibility: **public**




### setFailureUrl

    \DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest::setFailureUrl(string $failureUrl)





* Visibility: **public**


#### Arguments
* $failureUrl **string**



### getClientIp

    string DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest::getClientIp()





* Visibility: **public**




### setClientIp

    \DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest::setClientIp(string $clientIp)





* Visibility: **public**


#### Arguments
* $clientIp **string**



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


