## Get status

### Method
`getStatus`

### Parameters
`getStatus($transactionId, $raw = false)`

1. `$transactionId` transaction UID
2. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
$client = Client::getInstance();

/** @var DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse $respose */
$respose = $client->getStatus('1234567890qwertyuiopasdfghjklzxc');
```

### Output
```text
object(DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse)#15 (5) {
  ["_status":protected]=>
  string(10) "REGISTERED"
  ["_operatorError":protected]=>
  NULL
  ["_successUrl":protected]=>
  NULL
  ["_failureUrl":protected]=>
  NULL
  ["_authorizationType":protected]=>
  string(3) "PIN"
}
```