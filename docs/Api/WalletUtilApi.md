# Mainnet\WalletUtilApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**utilDecodeTransaction**](WalletUtilApi.md#utilDecodeTransaction) | **POST** /wallet/util/decode_transaction | Decode a bitcoin transaction. Accepts both transaction hash or raw transaction in hex format.



## utilDecodeTransaction

> \Mainnet\Model\ElectrumRawTransaction utilDecodeTransaction($util_decode_transaction_request)

Decode a bitcoin transaction. Accepts both transaction hash or raw transaction in hex format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletUtilApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$util_decode_transaction_request = new \Mainnet\Model\UtilDecodeTransactionRequest(); // \Mainnet\Model\UtilDecodeTransactionRequest | Request to decode a transaction

try {
    $result = $apiInstance->utilDecodeTransaction($util_decode_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletUtilApi->utilDecodeTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **util_decode_transaction_request** | [**\Mainnet\Model\UtilDecodeTransactionRequest**](../Model/UtilDecodeTransactionRequest.md)| Request to decode a transaction |

### Return type

[**\Mainnet\Model\ElectrumRawTransaction**](../Model/ElectrumRawTransaction.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

