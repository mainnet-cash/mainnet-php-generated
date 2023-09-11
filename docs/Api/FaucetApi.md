# Mainnet\FaucetApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddresses**](FaucetApi.md#getAddresses) | **POST** /faucet/get_addresses | Get addresses to return back or donate the testnet bch and tokens
[**getTestnetBch**](FaucetApi.md#getTestnetBch) | **POST** /faucet/get_testnet_bch | Get testnet bch



## getAddresses

> \Mainnet\Model\GetAddressesResponse getAddresses()

Get addresses to return back or donate the testnet bch and tokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\FaucetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAddresses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaucetApi->getAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Mainnet\Model\GetAddressesResponse**](../Model/GetAddressesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTestnetBch

> \Mainnet\Model\GetTestnetBchResponse getTestnetBch($get_testnet_bch_request)

Get testnet bch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\FaucetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_testnet_bch_request = new \Mainnet\Model\GetTestnetBchRequest(); // \Mainnet\Model\GetTestnetBchRequest | Request to bch faucet

try {
    $result = $apiInstance->getTestnetBch($get_testnet_bch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaucetApi->getTestnetBch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_testnet_bch_request** | [**\Mainnet\Model\GetTestnetBchRequest**](../Model/GetTestnetBchRequest.md)| Request to bch faucet |

### Return type

[**\Mainnet\Model\GetTestnetBchResponse**](../Model/GetTestnetBchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

