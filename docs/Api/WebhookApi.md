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


$apiInstance = new Mainnet\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$watch_address_request = new \Mainnet\Model\WatchAddressRequest(); // \Mainnet\Model\WatchAddressRequest | Based on the 'type' parameter the webhook will be triggered to either post balance or raw transactions to the 'url' - 'transaction:in' for incoming only, 'transaction:out' for outgoing only and 'transaction:in,out' both for incoming and outgoing transactions. 'balance' will post the object according to 'BalanceResponse' schema

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
 **watch_address_request** | [**\Mainnet\Model\WatchAddressRequest**](../Model/WatchAddressRequest.md)| Based on the &#39;type&#39; parameter the webhook will be triggered to either post balance or raw transactions to the &#39;url&#39; - &#39;transaction:in&#39; for incoming only, &#39;transaction:out&#39; for outgoing only and &#39;transaction:in,out&#39; both for incoming and outgoing transactions. &#39;balance&#39; will post the object according to &#39;BalanceResponse&#39; schema |

### Return type

[**\Mainnet\Model\WatchAddressResponse**](../Model/WatchAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

