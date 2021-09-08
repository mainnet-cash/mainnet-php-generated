# Mainnet\SmartbchWalletApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**smartbchBalance**](SmartbchWalletApi.md#smartbchBalance) | **POST** /smartbch/wallet/balance | Get total balance for wallet
[**smartbchCreateWallet**](SmartbchWalletApi.md#smartbchCreateWallet) | **POST** /smartbch/wallet/create | create a new wallet
[**smartbchDepositAddress**](SmartbchWalletApi.md#smartbchDepositAddress) | **POST** /smartbch/wallet/deposit_address | Get a deposit address
[**smartbchDepositQr**](SmartbchWalletApi.md#smartbchDepositQr) | **POST** /smartbch/wallet/deposit_qr | Get receiving cash address as a qrcode
[**smartbchMaxAmountToSend**](SmartbchWalletApi.md#smartbchMaxAmountToSend) | **POST** /smartbch/wallet/max_amount_to_send | Get maximum spendable amount
[**smartbchSend**](SmartbchWalletApi.md#smartbchSend) | **POST** /smartbch/wallet/send | Send some amount to a given address
[**smartbchSendMax**](SmartbchWalletApi.md#smartbchSendMax) | **POST** /smartbch/wallet/send_max | Send all available funds to a given address
[**smartbchSignedMessageSign**](SmartbchWalletApi.md#smartbchSignedMessageSign) | **POST** /smartbch/wallet/signed/sign | Returns the message signature
[**smartbchSignedMessageVerify**](SmartbchWalletApi.md#smartbchSignedMessageVerify) | **POST** /smartbch/wallet/signed/verify | Returns a boolean indicating whether message was valid for a given address



## smartbchBalance

> \Mainnet\Model\BalanceResponse smartbchBalance($balance_request)

Get total balance for wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_request = new \Mainnet\Model\BalanceRequest(); // \Mainnet\Model\BalanceRequest | Request for a wallet balance

try {
    $result = $apiInstance->smartbchBalance($balance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchWalletApi->smartbchBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **balance_request** | [**\Mainnet\Model\BalanceRequest**](../Model/BalanceRequest.md)| Request for a wallet balance |

### Return type

[**\Mainnet\Model\BalanceResponse**](../Model/BalanceResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartbchCreateWallet

> \Mainnet\Model\WalletResponse smartbchCreateWallet($wallet_request)

create a new wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_request = new \Mainnet\Model\WalletRequest(); // \Mainnet\Model\WalletRequest | Request a new random wallet

try {
    $result = $apiInstance->smartbchCreateWallet($wallet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchWalletApi->smartbchCreateWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_request** | [**\Mainnet\Model\WalletRequest**](../Model/WalletRequest.md)| Request a new random wallet |

### Return type

[**\Mainnet\Model\WalletResponse**](../Model/WalletResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartbchDepositAddress

> \Mainnet\Model\SmartBchDepositAddressResponse smartbchDepositAddress($serialized_wallet)

Get a deposit address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request for a deposit address given a wallet

try {
    $result = $apiInstance->smartbchDepositAddress($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchWalletApi->smartbchDepositAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| Request for a deposit address given a wallet |

### Return type

[**\Mainnet\Model\SmartBchDepositAddressResponse**](../Model/SmartBchDepositAddressResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartbchDepositQr

> \Mainnet\Model\ScalableVectorGraphic smartbchDepositQr($serialized_wallet)

Get receiving cash address as a qrcode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request for a deposit cash address as a Quick Response code (qrcode)

try {
    $result = $apiInstance->smartbchDepositQr($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchWalletApi->smartbchDepositQr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| Request for a deposit cash address as a Quick Response code (qrcode) |

### Return type

[**\Mainnet\Model\ScalableVectorGraphic**](../Model/ScalableVectorGraphic.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartbchMaxAmountToSend

> \Mainnet\Model\BalanceResponse smartbchMaxAmountToSend($smart_bch_max_amount_to_send_request)

Get maximum spendable amount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_max_amount_to_send_request = new \Mainnet\Model\SmartBchMaxAmountToSendRequest(); // \Mainnet\Model\SmartBchMaxAmountToSendRequest | get amount that will be spend with a spend max request. If a unit type is specified, a numeric value will be returned.

try {
    $result = $apiInstance->smartbchMaxAmountToSend($smart_bch_max_amount_to_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchWalletApi->smartbchMaxAmountToSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_max_amount_to_send_request** | [**\Mainnet\Model\SmartBchMaxAmountToSendRequest**](../Model/SmartBchMaxAmountToSendRequest.md)| get amount that will be spend with a spend max request. If a unit type is specified, a numeric value will be returned. |

### Return type

[**\Mainnet\Model\BalanceResponse**](../Model/BalanceResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartbchSend

> \Mainnet\Model\SmartBchSendResponseItem[] smartbchSend($smart_bch_send_request)

Send some amount to a given address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_send_request = new \Mainnet\Model\SmartBchSendRequest(); // \Mainnet\Model\SmartBchSendRequest | place a send request

try {
    $result = $apiInstance->smartbchSend($smart_bch_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchWalletApi->smartbchSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_send_request** | [**\Mainnet\Model\SmartBchSendRequest**](../Model/SmartBchSendRequest.md)| place a send request |

### Return type

[**\Mainnet\Model\SmartBchSendResponseItem[]**](../Model/SmartBchSendResponseItem.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartbchSendMax

> \Mainnet\Model\SmartBchSendResponseItem smartbchSendMax($smart_bch_send_max_request)

Send all available funds to a given address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_send_max_request = new \Mainnet\Model\SmartBchSendMaxRequest(); // \Mainnet\Model\SmartBchSendMaxRequest | Request to send all available funds to a given address

try {
    $result = $apiInstance->smartbchSendMax($smart_bch_send_max_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchWalletApi->smartbchSendMax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_send_max_request** | [**\Mainnet\Model\SmartBchSendMaxRequest**](../Model/SmartBchSendMaxRequest.md)| Request to send all available funds to a given address |

### Return type

[**\Mainnet\Model\SmartBchSendResponseItem**](../Model/SmartBchSendResponseItem.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartbchSignedMessageSign

> \Mainnet\Model\SignedMessageResponse smartbchSignedMessageSign($create_signed_message_request)

Returns the message signature

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_signed_message_request = new \Mainnet\Model\CreateSignedMessageRequest(); // \Mainnet\Model\CreateSignedMessageRequest | Sign a message

try {
    $result = $apiInstance->smartbchSignedMessageSign($create_signed_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchWalletApi->smartbchSignedMessageSign: ', $e->getMessage(), PHP_EOL;
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


## smartbchSignedMessageVerify

> \Mainnet\Model\VerifySignedMessageResponse smartbchSignedMessageVerify($verify_signed_message_request)

Returns a boolean indicating whether message was valid for a given address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verify_signed_message_request = new \Mainnet\Model\VerifySignedMessageRequest(); // \Mainnet\Model\VerifySignedMessageRequest | Sign a message

try {
    $result = $apiInstance->smartbchSignedMessageVerify($verify_signed_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchWalletApi->smartbchSignedMessageVerify: ', $e->getMessage(), PHP_EOL;
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

