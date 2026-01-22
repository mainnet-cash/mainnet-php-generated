# Mainnet\UtilApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**convert**](UtilApi.md#convert) | **POST** /util/convert | convert between units
[**exchangeRate**](UtilApi.md#exchangeRate) | **POST** /util/exchange_rate | convert between units
[**getAddrsByXpubKey**](UtilApi.md#getAddrsByXpubKey) | **POST** /util/get_addrs_by_xpubkey | Derive heristic determined addresses from an extended public key, per BIP32
[**getXpubKeyInfo**](UtilApi.md#getXpubKeyInfo) | **POST** /util/get_xpubkey_info | Decode information about an extended public key, per BIP32



## convert

> \Mainnet\Model\ConvertResponse convert($convert_request)

convert between units

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\UtilApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$convert_request = new \Mainnet\Model\ConvertRequest(); // \Mainnet\Model\ConvertRequest | 

try {
    $result = $apiInstance->convert($convert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilApi->convert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **convert_request** | [**\Mainnet\Model\ConvertRequest**](../Model/ConvertRequest.md)|  | [optional]

### Return type

[**\Mainnet\Model\ConvertResponse**](../Model/ConvertResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exchangeRate

> \Mainnet\Model\InlineResponse200 exchangeRate($inline_object)

convert between units

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\UtilApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object = new \Mainnet\Model\InlineObject(); // \Mainnet\Model\InlineObject | 

try {
    $result = $apiInstance->exchangeRate($inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilApi->exchangeRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object** | [**\Mainnet\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\Mainnet\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAddrsByXpubKey

> AnyOfString[] getAddrsByXpubKey($get_addrs_by_xpub_key_request)

Derive heristic determined addresses from an extended public key, per BIP32

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\UtilApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_addrs_by_xpub_key_request = new \Mainnet\Model\GetAddrsByXpubKeyRequest(); // \Mainnet\Model\GetAddrsByXpubKeyRequest | 

try {
    $result = $apiInstance->getAddrsByXpubKey($get_addrs_by_xpub_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilApi->getAddrsByXpubKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_addrs_by_xpub_key_request** | [**\Mainnet\Model\GetAddrsByXpubKeyRequest**](../Model/GetAddrsByXpubKeyRequest.md)|  | [optional]

### Return type

[**AnyOfString[]**](../Model/AnyOfString.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getXpubKeyInfo

> \Mainnet\Model\GetXpubKeyInfoResponse getXpubKeyInfo($get_xpub_key_info_request)

Decode information about an extended public key, per BIP32

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\UtilApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_xpub_key_info_request = new \Mainnet\Model\GetXpubKeyInfoRequest(); // \Mainnet\Model\GetXpubKeyInfoRequest | Decode information about an extended public key, per BIP32

try {
    $result = $apiInstance->getXpubKeyInfo($get_xpub_key_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilApi->getXpubKeyInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_xpub_key_info_request** | [**\Mainnet\Model\GetXpubKeyInfoRequest**](../Model/GetXpubKeyInfoRequest.md)| Decode information about an extended public key, per BIP32 |

### Return type

[**\Mainnet\Model\GetXpubKeyInfoResponse**](../Model/GetXpubKeyInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

