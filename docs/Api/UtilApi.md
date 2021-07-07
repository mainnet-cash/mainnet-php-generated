# Mainnet\UtilApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**convert**](UtilApi.md#convert) | **POST** /util/convert | convert between units



## convert

> float convert($convert_request)

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

**float**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

