# Mainnet\WalletSignedApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**signedMessageSign**](WalletSignedApi.md#signedMessageSign) | **POST** /wallet/signed/sign | Returns the message signature
[**signedMessageVerify**](WalletSignedApi.md#signedMessageVerify) | **POST** /wallet/signed/verify | Returns a boolean indicating whether message was valid for a given address



## signedMessageSign

> \Mainnet\Model\SignedMessageResponse signedMessageSign($create_signed_message_request)

Returns the message signature

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletSignedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_signed_message_request = new \Mainnet\Model\CreateSignedMessageRequest(); // \Mainnet\Model\CreateSignedMessageRequest | Sign a message

try {
    $result = $apiInstance->signedMessageSign($create_signed_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSignedApi->signedMessageSign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_signed_message_request** | [**\Mainnet\Model\CreateSignedMessageRequest**](../Model/CreateSignedMessageRequest.md)| Sign a message | [optional]

### Return type

[**\Mainnet\Model\SignedMessageResponse**](../Model/SignedMessageResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## signedMessageVerify

> \Mainnet\Model\VerifySignedMessageResponse signedMessageVerify($verify_signed_message_request)

Returns a boolean indicating whether message was valid for a given address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletSignedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verify_signed_message_request = new \Mainnet\Model\VerifySignedMessageRequest(); // \Mainnet\Model\VerifySignedMessageRequest | Sign a message

try {
    $result = $apiInstance->signedMessageVerify($verify_signed_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSignedApi->signedMessageVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verify_signed_message_request** | [**\Mainnet\Model\VerifySignedMessageRequest**](../Model/VerifySignedMessageRequest.md)| Sign a message | [optional]

### Return type

[**\Mainnet\Model\VerifySignedMessageResponse**](../Model/VerifySignedMessageResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

