## Initialize subscription

### Method
`initSubscription`

### Parameters
`initSubscription($request, $raw = false)`

1. `$request` Order data
2. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
$client = Client::getInstance();

/** @var DigitalVirgo\MTSubscriptions\Model\InitSubscriptionResponse $respose */
$respose = $client->initSubscription([
    'partnerName' => 'YOUR_PARTNER_NAME',
    'serviceName' => 'YOUR_SERVICE_NALE',
    'successUrl' => 'http://success.url.com',
    'failureUrl' => 'http://failure.url.com',
    'clientIp' => '192.168.0.33', // client IP
]);
```

### Output
```text
object(DigitalVirgo\MTSubscriptions\Model\InitSubscriptionResponse)#28 (4) {
  ["_transactionId":protected]=>
  string(32) "1234567890qwertyuiopasdfghjklzxc"
  ["_subscriptionPageUrl":protected]=>
  string(67) "http://url.to.your.transaction.com/1234567890qwertyuiopasdfghjklzxc"
  ["_status":protected]=>
  string(7) "SUCCESS"
  ["_authorizationType":protected]=>
  string(3) "PIN"
}
```