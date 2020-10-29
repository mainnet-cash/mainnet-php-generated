# Mainnet\MineApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mine**](MineApi.md#mine) | **POST** /mine | Mine regtest coins to a specified address



## mine

> string[] mine($mine_request)

Mine regtest coins to a specified address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\MineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mine_request = new \Mainnet\Model\MineRequest(); // \Mainnet\Model\MineRequest | 

try {
    $result = $apiInstance->mine($mine_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MineApi->mine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mine_request** | [**\Mainnet\Model\MineRequest**](../Model/MineRequest.md)|  | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

