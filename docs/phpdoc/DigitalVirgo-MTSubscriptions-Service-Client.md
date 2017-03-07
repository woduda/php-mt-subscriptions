DigitalVirgo\MTSubscriptions\Service\Client
===============

Class Client - Provice api methods




* Class name: Client
* Namespace: DigitalVirgo\MTSubscriptions\Service
* Parent class: GuzzleHttp\Client



Constants
----------


### API_URL

    const API_URL = 'http://testsrv.avantis.pl/mtsubscriber/'





Properties
----------


### $_instance

    private \DigitalVirgo\MTSubscriptions\Service\Client $_instance = null

Instance for singleton



* Visibility: **private**
* This property is **static**.


Methods
-------


### getInstance

    \DigitalVirgo\MTSubscriptions\Service\Client DigitalVirgo\MTSubscriptions\Service\Client::getInstance()

Get new instance of client



* Visibility: **public**
* This method is **static**.




### _request

    \GuzzleHttp\Message\ResponseInterface DigitalVirgo\MTSubscriptions\Service\Client::_request(string $url, string $method, mixed $payload, array $options)

Send http request



* Visibility: **protected**


#### Arguments
* $url **string** - &lt;p&gt;Request path&lt;/p&gt;
* $method **string** - &lt;p&gt;Http method&lt;/p&gt;
* $payload **mixed** - &lt;p&gt;Data to send with request&lt;/p&gt;
* $options **array** - &lt;p&gt;Request addtional options&lt;/p&gt;



### initSubscription

    \DigitalVirgo\MTSubscriptions\Model\InitSubscriptionResponse|string DigitalVirgo\MTSubscriptions\Service\Client::initSubscription(\DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest|array $request, boolean $raw)

Create new subscription order



* Visibility: **public**


#### Arguments
* $request **[DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest](DigitalVirgo-MTSubscriptions-Model-InitSubscriptionRequest.md)|array** - &lt;p&gt;Order data&lt;/p&gt;
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



### deactivate

    \DigitalVirgo\MTSubscriptions\Model\MtResponse|string DigitalVirgo\MTSubscriptions\Service\Client::deactivate(string $transactionIdOrDeactivationForm, boolean $raw)

Deactivate subscriptions order



* Visibility: **public**


#### Arguments
* $transactionIdOrDeactivationForm **string** - &lt;p&gt;Transaction UID of subscription order&lt;/p&gt;
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



### getStatus

    mixed DigitalVirgo\MTSubscriptions\Service\Client::getStatus(string $transactionId, boolean $raw)

Get current status of subscription order



* Visibility: **public**


#### Arguments
* $transactionId **string** - &lt;p&gt;Transaction UID of subscription order&lt;/p&gt;
* $raw **boolean** - &lt;p&gt;return raw json output&lt;/p&gt;


