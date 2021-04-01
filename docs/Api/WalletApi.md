# Mainnet\WalletApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**balance**](WalletApi.md#balance) | **POST** /wallet/balance | Get total balance for wallet
[**createWallet**](WalletApi.md#createWallet) | **POST** /wallet/create | create a new wallet
[**depositAddress**](WalletApi.md#depositAddress) | **POST** /wallet/deposit_address | Get a deposit address in cash address format
[**depositQr**](WalletApi.md#depositQr) | **POST** /wallet/deposit_qr | Get receiving cash address as a qrcode
[**info**](WalletApi.md#info) | **POST** /wallet/info | Get information about a wallet
[**maxAmountToSend**](WalletApi.md#maxAmountToSend) | **POST** /wallet/max_amount_to_send | Get maximum spendable amount
[**send**](WalletApi.md#send) | **POST** /wallet/send | Send some amount to a given address
[**sendMax**](WalletApi.md#sendMax) | **POST** /wallet/send_max | Send all available funds to a given address
[**signedMessageSign**](WalletApi.md#signedMessageSign) | **POST** /wallet/signed/sign | Returns the message signature
[**signedMessageVerify**](WalletApi.md#signedMessageVerify) | **POST** /wallet/signed/verify | Returns a boolean indicating whether message was valid for a given address
[**utxos**](WalletApi.md#utxos) | **POST** /wallet/utxo | Get detailed information about unspent outputs (utxos)



## balance

> \Mainnet\Model\BalanceResponse balance($balance_request)

Get total balance for wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$balance_request = new \Mainnet\Model\BalanceRequest(); // \Mainnet\Model\BalanceRequest | Request for a wallet balance

try {
    $result = $apiInstance->balance($balance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->balance: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createWallet

> \Mainnet\Model\WalletResponse createWallet($wallet_request)

create a new wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_request = new \Mainnet\Model\WalletRequest(); // \Mainnet\Model\WalletRequest | Request a new random wallet

try {
    $result = $apiInstance->createWallet($wallet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->createWallet: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## depositAddress

> \Mainnet\Model\DepositAddressResponse depositAddress($serialized_wallet)

Get a deposit address in cash address format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request for a deposit address given a wallet

try {
    $result = $apiInstance->depositAddress($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->depositAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| Request for a deposit address given a wallet |

### Return type

[**\Mainnet\Model\DepositAddressResponse**](../Model/DepositAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## depositQr

> \Mainnet\Model\ScalableVectorGraphic depositQr($serialized_wallet)

Get receiving cash address as a qrcode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request for a deposit cash address as a Quick Response code (qrcode)

try {
    $result = $apiInstance->depositQr($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->depositQr: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## info

> \Mainnet\Model\WalletInfo info($serialized_wallet)

Get information about a wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | The wallet to request information about, in serialized form.

try {
    $result = $apiInstance->info($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->info: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| The wallet to request information about, in serialized form. |

### Return type

[**\Mainnet\Model\WalletInfo**](../Model/WalletInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## maxAmountToSend

> \Mainnet\Model\BalanceResponse maxAmountToSend($max_amount_to_send_request)

Get maximum spendable amount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$max_amount_to_send_request = new \Mainnet\Model\MaxAmountToSendRequest(); // \Mainnet\Model\MaxAmountToSendRequest | get amount that will be spend with a spend max request. If a unit type is specified, a numeric value will be returned.

try {
    $result = $apiInstance->maxAmountToSend($max_amount_to_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->maxAmountToSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_amount_to_send_request** | [**\Mainnet\Model\MaxAmountToSendRequest**](../Model/MaxAmountToSendRequest.md)| get amount that will be spend with a spend max request. If a unit type is specified, a numeric value will be returned. |

### Return type

[**\Mainnet\Model\BalanceResponse**](../Model/BalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## send

> \Mainnet\Model\SendResponse send($send_request)

Send some amount to a given address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$send_request = new \Mainnet\Model\SendRequest(); // \Mainnet\Model\SendRequest | place a send request

try {
    $result = $apiInstance->send($send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->send: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_request** | [**\Mainnet\Model\SendRequest**](../Model/SendRequest.md)| place a send request |

### Return type

[**\Mainnet\Model\SendResponse**](../Model/SendResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendMax

> \Mainnet\Model\SendMaxResponse sendMax($send_max_request)

Send all available funds to a given address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$send_max_request = new \Mainnet\Model\SendMaxRequest(); // \Mainnet\Model\SendMaxRequest | Request to send all available funds to a given address

try {
    $result = $apiInstance->sendMax($send_max_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->sendMax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_max_request** | [**\Mainnet\Model\SendMaxRequest**](../Model/SendMaxRequest.md)| Request to send all available funds to a given address |

### Return type

[**\Mainnet\Model\SendMaxResponse**](../Model/SendMaxResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## signedMessageSign

> \Mainnet\Model\SignedMessageResponse signedMessageSign($create_signed_message_request)

Returns the message signature

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_signed_message_request = new \Mainnet\Model\CreateSignedMessageRequest(); // \Mainnet\Model\CreateSignedMessageRequest | Sign a message

try {
    $result = $apiInstance->signedMessageSign($create_signed_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->signedMessageSign: ', $e->getMessage(), PHP_EOL;
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

No authorization required

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


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$verify_signed_message_request = new \Mainnet\Model\VerifySignedMessageRequest(); // \Mainnet\Model\VerifySignedMessageRequest | Sign a message

try {
    $result = $apiInstance->signedMessageVerify($verify_signed_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->signedMessageVerify: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## utxos

> \Mainnet\Model\UtxoResponse utxos($serialized_wallet)

Get detailed information about unspent outputs (utxos)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request detailed list of unspent transaction outputs

try {
    $result = $apiInstance->utxos($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->utxos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| Request detailed list of unspent transaction outputs |

### Return type

[**\Mainnet\Model\UtxoResponse**](../Model/UtxoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

