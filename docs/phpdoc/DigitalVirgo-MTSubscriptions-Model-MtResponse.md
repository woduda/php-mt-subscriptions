DigitalVirgo\MTSubscriptions\Model\MtResponse
===============

Class MtResponse




* Class name: MtResponse
* Namespace: DigitalVirgo\MTSubscriptions\Model
* Parent class: [DigitalVirgo\MTSubscriptions\Model\ModelAbstract](DigitalVirgo-MTSubscriptions-Model-ModelAbstract.md)





Properties
----------


### $_transactionId

    protected string $_transactionId





* Visibility: **protected**


### $_token

    protected string $_token





* Visibility: **protected**


### $_responseStatus

    protected string $_responseStatus





* Visibility: **protected**


### $_authChannel

    protected string $_authChannel





* Visibility: **protected**


### $_authURL

    protected string $_authURL





* Visibility: **protected**


### $_smsTextCommand

    protected string $_smsTextCommand





* Visibility: **protected**


### $_smsLargeAccount

    protected string $_smsLargeAccount





* Visibility: **protected**


### $_operatorError

    protected string $_operatorError





* Visibility: **protected**


### $_popupUrl

    protected string $_popupUrl





* Visibility: **protected**


Methods
-------


### getTransactionId

    string DigitalVirgo\MTSubscriptions\Model\MtResponse::getTransactionId()





* Visibility: **public**




### setTransactionId

    \DigitalVirgo\MTSubscriptions\Model\MtResponse DigitalVirgo\MTSubscriptions\Model\MtResponse::setTransactionId(string $transactionId)





* Visibility: **public**


#### Arguments
* $transactionId **string**



### getToken

    string DigitalVirgo\MTSubscriptions\Model\MtResponse::getToken()





* Visibility: **public**




### setToken

    \DigitalVirgo\MTSubscriptions\Model\MtResponse DigitalVirgo\MTSubscriptions\Model\MtResponse::setToken(string $token)





* Visibility: **public**


#### Arguments
* $token **string**



### getResponseStatus

    string DigitalVirgo\MTSubscriptions\Model\MtResponse::getResponseStatus()





* Visibility: **public**




### setResponseStatus

    \DigitalVirgo\MTSubscriptions\Model\MtResponse DigitalVirgo\MTSubscriptions\Model\MtResponse::setResponseStatus(string $responseStatus)





* Visibility: **public**


#### Arguments
* $responseStatus **string**



### getAuthChannel

    string DigitalVirgo\MTSubscriptions\Model\MtResponse::getAuthChannel()





* Visibility: **public**




### setAuthChannel

    \DigitalVirgo\MTSubscriptions\Model\MtResponse DigitalVirgo\MTSubscriptions\Model\MtResponse::setAuthChannel(string $authChannel)





* Visibility: **public**


#### Arguments
* $authChannel **string**



### getAuthURL

    string DigitalVirgo\MTSubscriptions\Model\MtResponse::getAuthURL()





* Visibility: **public**




### setAuthURL

    \DigitalVirgo\MTSubscriptions\Model\MtResponse DigitalVirgo\MTSubscriptions\Model\MtResponse::setAuthURL(string $authURL)





* Visibility: **public**


#### Arguments
* $authURL **string**



### getSmsTextCommand

    string DigitalVirgo\MTSubscriptions\Model\MtResponse::getSmsTextCommand()





* Visibility: **public**




### setSmsTextCommand

    \DigitalVirgo\MTSubscriptions\Model\MtResponse DigitalVirgo\MTSubscriptions\Model\MtResponse::setSmsTextCommand(string $smsTextCommand)





* Visibility: **public**


#### Arguments
* $smsTextCommand **string**



### getSmsLargeAccount

    string DigitalVirgo\MTSubscriptions\Model\MtResponse::getSmsLargeAccount()





* Visibility: **public**




### setSmsLargeAccount

    \DigitalVirgo\MTSubscriptions\Model\MtResponse DigitalVirgo\MTSubscriptions\Model\MtResponse::setSmsLargeAccount(string $smsLargeAccount)





* Visibility: **public**


#### Arguments
* $smsLargeAccount **string**



### getOperatorError

    string DigitalVirgo\MTSubscriptions\Model\MtResponse::getOperatorError()





* Visibility: **public**




### setOperatorError

    \DigitalVirgo\MTSubscriptions\Model\MtResponse DigitalVirgo\MTSubscriptions\Model\MtResponse::setOperatorError(string $operatorError)





* Visibility: **public**


#### Arguments
* $operatorError **string**



### getPopupUrl

    string DigitalVirgo\MTSubscriptions\Model\MtResponse::getPopupUrl()





* Visibility: **public**




### setPopupUrl

    \DigitalVirgo\MTSubscriptions\Model\MtResponse DigitalVirgo\MTSubscriptions\Model\MtResponse::setPopupUrl(string $popupUrl)





* Visibility: **public**


#### Arguments
* $popupUrl **string**



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


