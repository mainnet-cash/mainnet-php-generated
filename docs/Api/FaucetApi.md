# Mainnet\FaucetApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddresses**](FaucetApi.md#getAddresses) | **POST** /faucet/get_addresses | Get addresses to return back or donate the testnet bch and tokens
[**getTestnetBch**](FaucetApi.md#getTestnetBch) | **POST** /faucet/get_testnet_bch | Get testnet bch
[**getTestnetSbch**](FaucetApi.md#getTestnetSbch) | **POST** /faucet/get_testnet_sbch | Request testnet SmartBCH funds. The request is enqueued and served within 1-3 block confirmations. If the target address holds more that 0.1 BCH, the request will fail. Otherwise the address will be topped up to 0.1 BCH.
[**getTestnetSep20**](FaucetApi.md#getTestnetSep20) | **POST** /faucet/get_testnet_sep20 | Request testnet SmartBch SEP20 tokens. The request is enqueued and served within 1-3 block confirmations. If the target address holds more that 10 tokens of requested kind, the request will fail. Otherwise the address will be topped up to 10 tokens.
[**getTestnetSlp**](FaucetApi.md#getTestnetSlp) | **POST** /faucet/get_testnet_slp | Get testnet slp tokens



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


## getTestnetSbch

> \Mainnet\Model\GetTestnetSbchResponse getTestnetSbch($get_testnet_sbch_request)

Request testnet SmartBCH funds. The request is enqueued and served within 1-3 block confirmations. If the target address holds more that 0.1 BCH, the request will fail. Otherwise the address will be topped up to 0.1 BCH.

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
$get_testnet_sbch_request = new \Mainnet\Model\GetTestnetSbchRequest(); // \Mainnet\Model\GetTestnetSbchRequest | Request to bch faucet

try {
    $result = $apiInstance->getTestnetSbch($get_testnet_sbch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaucetApi->getTestnetSbch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_testnet_sbch_request** | [**\Mainnet\Model\GetTestnetSbchRequest**](../Model/GetTestnetSbchRequest.md)| Request to bch faucet |

### Return type

[**\Mainnet\Model\GetTestnetSbchResponse**](../Model/GetTestnetSbchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTestnetSep20

> \Mainnet\Model\GetTestnetSep20Response getTestnetSep20($get_testnet_sep20_request)

Request testnet SmartBch SEP20 tokens. The request is enqueued and served within 1-3 block confirmations. If the target address holds more that 10 tokens of requested kind, the request will fail. Otherwise the address will be topped up to 10 tokens.

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
$get_testnet_sep20_request = new \Mainnet\Model\GetTestnetSep20Request(); // \Mainnet\Model\GetTestnetSep20Request | Request to SEP20 faucet

try {
    $result = $apiInstance->getTestnetSep20($get_testnet_sep20_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaucetApi->getTestnetSep20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_testnet_sep20_request** | [**\Mainnet\Model\GetTestnetSep20Request**](../Model/GetTestnetSep20Request.md)| Request to SEP20 faucet |

### Return type

[**\Mainnet\Model\GetTestnetSep20Response**](../Model/GetTestnetSep20Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTestnetSlp

> \Mainnet\Model\GetTestnetSlpResponse getTestnetSlp($get_testnet_slp_request)

Get testnet slp tokens

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
$get_testnet_slp_request = new \Mainnet\Model\GetTestnetSlpRequest(); // \Mainnet\Model\GetTestnetSlpRequest | Request to slp faucet

try {
    $result = $apiInstance->getTestnetSlp($get_testnet_slp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaucetApi->getTestnetSlp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_testnet_slp_request** | [**\Mainnet\Model\GetTestnetSlpRequest**](../Model/GetTestnetSlpRequest.md)| Request to slp faucet |

### Return type

[**\Mainnet\Model\GetTestnetSlpResponse**](../Model/GetTestnetSlpResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

