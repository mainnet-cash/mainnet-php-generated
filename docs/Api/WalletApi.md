# Mainnet\WalletApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**balance**](WalletApi.md#balance) | **POST** /wallet/balance | Get total balance for wallet
[**createWallet**](WalletApi.md#createWallet) | **POST** /wallet/create | create a new wallet
[**depositAddress**](WalletApi.md#depositAddress) | **POST** /wallet/deposit_address | Get a deposit address in cash address format
[**depositQr**](WalletApi.md#depositQr) | **POST** /wallet/deposit_qr | Get receiving cash address as a qrcode
[**encodeTransaction**](WalletApi.md#encodeTransaction) | **POST** /wallet/encode_transaction | Encode and sign a transaction given a list of sendRequests, options and estimate fees
[**getHistory**](WalletApi.md#getHistory) | **POST** /wallet/get_history | Get a simplified list of transactions related to a wallet
[**info**](WalletApi.md#info) | **POST** /wallet/info | Get information about a wallet
[**maxAmountToSend**](WalletApi.md#maxAmountToSend) | **POST** /wallet/max_amount_to_send | Get maximum spendable amount
[**namedExists**](WalletApi.md#namedExists) | **POST** /wallet/named_exists | Check if a named wallet already exists
[**replaceNamed**](WalletApi.md#replaceNamed) | **POST** /wallet/replace_named | Replace (recover) named wallet with a new walletId. If wallet with a provided name does not exist yet, it will be creted with a &#x60;walletId&#x60; supplied If wallet exists it will be overwritten without exception
[**send**](WalletApi.md#send) | **POST** /wallet/send | Send some amount to a given address
[**sendMax**](WalletApi.md#sendMax) | **POST** /wallet/send_max | Send all available funds to a given address
[**submitTransaction**](WalletApi.md#submitTransaction) | **POST** /wallet/submit_transaction | submit an encoded and signed transaction to the network
[**utxos**](WalletApi.md#utxos) | **POST** /wallet/utxo | Get detailed information about unspent outputs (utxos)
[**xpubkeys**](WalletApi.md#xpubkeys) | **POST** /wallet/xpubkeys | A set of xpubkeys and paths for the wallet.



## balance

> \Mainnet\Model\BalanceResponse balance($balance_request)

Get total balance for wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## encodeTransaction

> \Mainnet\Model\EncodeTransactionResponse encodeTransaction($encode_transaction_request)

Encode and sign a transaction given a list of sendRequests, options and estimate fees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encode_transaction_request = new \Mainnet\Model\EncodeTransactionRequest(); // \Mainnet\Model\EncodeTransactionRequest | encode a transaction

try {
    $result = $apiInstance->encodeTransaction($encode_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->encodeTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encode_transaction_request** | [**\Mainnet\Model\EncodeTransactionRequest**](../Model/EncodeTransactionRequest.md)| encode a transaction |

### Return type

[**\Mainnet\Model\EncodeTransactionResponse**](../Model/EncodeTransactionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getHistory

> \Mainnet\Model\HistoryResponse getHistory($history_request)

Get a simplified list of transactions related to a wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$history_request = new \Mainnet\Model\HistoryRequest(); // \Mainnet\Model\HistoryRequest | Request for a wallet history

try {
    $result = $apiInstance->getHistory($history_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **history_request** | [**\Mainnet\Model\HistoryRequest**](../Model/HistoryRequest.md)| Request for a wallet history |

### Return type

[**\Mainnet\Model\HistoryResponse**](../Model/HistoryResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## namedExists

> bool namedExists($wallet_named_exists_request)

Check if a named wallet already exists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_named_exists_request = new \Mainnet\Model\WalletNamedExistsRequest(); // \Mainnet\Model\WalletNamedExistsRequest | Request parameters

try {
    $result = $apiInstance->namedExists($wallet_named_exists_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->namedExists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_named_exists_request** | [**\Mainnet\Model\WalletNamedExistsRequest**](../Model/WalletNamedExistsRequest.md)| Request parameters |

### Return type

**bool**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## replaceNamed

> bool replaceNamed($wallet_replace_named_request)

Replace (recover) named wallet with a new walletId. If wallet with a provided name does not exist yet, it will be creted with a `walletId` supplied If wallet exists it will be overwritten without exception

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_replace_named_request = new \Mainnet\Model\WalletReplaceNamedRequest(); // \Mainnet\Model\WalletReplaceNamedRequest | Request parameters

try {
    $result = $apiInstance->replaceNamed($wallet_replace_named_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->replaceNamed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_replace_named_request** | [**\Mainnet\Model\WalletReplaceNamedRequest**](../Model/WalletReplaceNamedRequest.md)| Request parameters |

### Return type

**bool**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## submitTransaction

> \Mainnet\Model\SubmitTransactionResponse submitTransaction($submit_transaction_request)

submit an encoded and signed transaction to the network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submit_transaction_request = new \Mainnet\Model\SubmitTransactionRequest(); // \Mainnet\Model\SubmitTransactionRequest | submit an encoded and signed transaction to the network

try {
    $result = $apiInstance->submitTransaction($submit_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->submitTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **submit_transaction_request** | [**\Mainnet\Model\SubmitTransactionRequest**](../Model/SubmitTransactionRequest.md)| submit an encoded and signed transaction to the network |

### Return type

[**\Mainnet\Model\SubmitTransactionResponse**](../Model/SubmitTransactionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## xpubkeys

> \Mainnet\Model\XPubKeyResponse xpubkeys($x_pub_key_request)

A set of xpubkeys and paths for the wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_pub_key_request = new \Mainnet\Model\XPubKeyRequest(); // \Mainnet\Model\XPubKeyRequest | x

try {
    $result = $apiInstance->xpubkeys($x_pub_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->xpubkeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_pub_key_request** | [**\Mainnet\Model\XPubKeyRequest**](../Model/XPubKeyRequest.md)| x |

### Return type

[**\Mainnet\Model\XPubKeyResponse**](../Model/XPubKeyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

