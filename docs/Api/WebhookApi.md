# Mainnet\WebhookApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**watchAddress**](WebhookApi.md#watchAddress) | **POST** /webhook/watch_address | Create a webhook to watch cashaddress balance and transactions.



## watchAddress

> \Mainnet\Model\WatchAddressResponse watchAddress($watch_address_request)

Create a webhook to watch cashaddress balance and transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$watch_address_request = new \Mainnet\Model\WatchAddressRequest(); // \Mainnet\Model\WatchAddressRequest | Based on the 'type' parameter the webhook will be triggered to either post balance or raw transactions to the 'url': - 'transaction:in' for incoming BCH transactions - 'transaction:out' for outgoing BCH transactions - 'transaction:in,out' both for incoming and outgoing BCH transactions - 'balance' will post the object according to 'BalanceResponse' schema - 'slptransaction:in' for incoming SLP transactions - 'slptransaction:out' for outgoing SLP transactions - 'slptransaction:in,out' both for incoming and outgoing SLP transactions - 'slpbalance' will post the object according to 'SlpBalanceResponse' schema  'tokenId' parameter is mandatory when using SLP webhooks.

try {
    $result = $apiInstance->watchAddress($watch_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->watchAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **watch_address_request** | [**\Mainnet\Model\WatchAddressRequest**](../Model/WatchAddressRequest.md)| Based on the &#39;type&#39; parameter the webhook will be triggered to either post balance or raw transactions to the &#39;url&#39;: - &#39;transaction:in&#39; for incoming BCH transactions - &#39;transaction:out&#39; for outgoing BCH transactions - &#39;transaction:in,out&#39; both for incoming and outgoing BCH transactions - &#39;balance&#39; will post the object according to &#39;BalanceResponse&#39; schema - &#39;slptransaction:in&#39; for incoming SLP transactions - &#39;slptransaction:out&#39; for outgoing SLP transactions - &#39;slptransaction:in,out&#39; both for incoming and outgoing SLP transactions - &#39;slpbalance&#39; will post the object according to &#39;SlpBalanceResponse&#39; schema  &#39;tokenId&#39; parameter is mandatory when using SLP webhooks. |

### Return type

[**\Mainnet\Model\WatchAddressResponse**](../Model/WatchAddressResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

