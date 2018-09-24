## Deactivate subscription


    /**
     * Deactivate subscriptions order
     *
     * @param string $transactionIdOrDeactivationForm Transaction UID of subscription order
     * @param bool $raw return raw xml output
     * @return MtResponse|string
     */
    public function deactivate($transactionIdOrDeactivationForm, $raw = false)



### Method
`deactivate`

### Parameters
`deactivate($transactionIdOrDeactivationForm, $raw = false)`

1. `$transactionIdOrDeactivationForm` Transaction UID of subscription order
2. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
$client = Client::getInstance();

// Set authorization if required
$client->setAuth('YOUR LOGIN', 'YOUR PASSWORD');

/** @var DigitalVirgo\MTSubscriptions\Model\MtResponse $respose */
$respose = $client->deactivate('1234567890qwertyuiopasdfghjklzxc');

$respose = $client->deactivate([
    'transactionId' => '1234567890qwertyuiopasdfghjklzxc'
]);
```

### Output
```text
object(DigitalVirgo\MTSubscriptions\Model\MtResponse)#31 (9) {
  ["_transactionId":protected]=>
  string(32) "1234567890qwertyuiopasdfghjklzxc"
  ["_token":protected]=>
  NULL
  ["_responseStatus":protected]=>
  string(24) "SUBSCRIPTION_DEACTIVATED"
  ["_authChannel":protected]=>
  NULL
  ["_authURL":protected]=>
  NULL
  ["_smsTextCommand":protected]=>
  NULL
  ["_smsLargeAccount":protected]=>
  NULL
  ["_operatorError":protected]=>
  NULL
  ["_popupUrl":protected]=>
  NULL
}

```