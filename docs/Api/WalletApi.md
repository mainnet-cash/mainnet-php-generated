# Mainnet\WalletApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**balance**](WalletApi.md#balance) | **POST** /wallet/balance | Get total balance for wallet
[**createWallet**](WalletApi.md#createWallet) | **POST** /wallet/create | create a new wallet
[**depositAddress**](WalletApi.md#depositAddress) | **POST** /wallet/deposit_address | Get a deposit address in cash address format
[**encodeTransaction**](WalletApi.md#encodeTransaction) | **POST** /wallet/encode_transaction | Encode and sign a transaction given a list of sendRequests, options and estimate fees
[**getAllNftTokenBalances**](WalletApi.md#getAllNftTokenBalances) | **POST** /wallet/get_all_nft_token_balances | Get non-fungible token balance
[**getAllTokenBalances**](WalletApi.md#getAllTokenBalances) | **POST** /wallet/get_all_token_balances | Get non-fungible token balance
[**getHistory**](WalletApi.md#getHistory) | **POST** /wallet/get_history | Get a list of transactions related to a wallet
[**getNftTokenBalance**](WalletApi.md#getNftTokenBalance) | **POST** /wallet/get_nft_token_balance | Get non-fungible token balance
[**getTokenBalance**](WalletApi.md#getTokenBalance) | **POST** /wallet/get_token_balance | Get fungible token balance
[**getTokenUtxos**](WalletApi.md#getTokenUtxos) | **POST** /wallet/get_token_utxos | Get token utxos
[**info**](WalletApi.md#info) | **POST** /wallet/info | Get information about a wallet
[**maxAmountToSend**](WalletApi.md#maxAmountToSend) | **POST** /wallet/max_amount_to_send | Get maximum spendable amount
[**namedExists**](WalletApi.md#namedExists) | **POST** /wallet/named_exists | Check if a named wallet already exists
[**replaceNamed**](WalletApi.md#replaceNamed) | **POST** /wallet/replace_named | Replace (recover) named wallet with a new walletId. If wallet with a provided name does not exist yet, it will be creted with a &#x60;walletId&#x60; supplied If wallet exists it will be overwritten without exception
[**send**](WalletApi.md#send) | **POST** /wallet/send | Send some amount to a given address
[**sendMax**](WalletApi.md#sendMax) | **POST** /wallet/send_max | Send all available funds to a given address
[**submitTransaction**](WalletApi.md#submitTransaction) | **POST** /wallet/submit_transaction | submit an encoded and signed transaction to the network
[**tokenBurn**](WalletApi.md#tokenBurn) | **POST** /wallet/token_burn | Perform an explicit token burn
[**tokenDepositAddress**](WalletApi.md#tokenDepositAddress) | **POST** /wallet/token_deposit_address | Get a token aware deposit address in cash address format
[**tokenGenesis**](WalletApi.md#tokenGenesis) | **POST** /wallet/token_genesis | Create new token category
[**tokenMint**](WalletApi.md#tokenMint) | **POST** /wallet/token_mint | Mint new non-fungible tokens
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


## getAllNftTokenBalances

> map[string,float] getAllNftTokenBalances($inline_object4)

Get non-fungible token balance

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
$inline_object4 = new \Mainnet\Model\InlineObject4(); // \Mainnet\Model\InlineObject4 | 

try {
    $result = $apiInstance->getAllNftTokenBalances($inline_object4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getAllNftTokenBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object4** | [**\Mainnet\Model\InlineObject4**](../Model/InlineObject4.md)|  |

### Return type

**map[string,float]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllTokenBalances

> map[string,float] getAllTokenBalances($inline_object3)

Get non-fungible token balance

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
$inline_object3 = new \Mainnet\Model\InlineObject3(); // \Mainnet\Model\InlineObject3 | 

try {
    $result = $apiInstance->getAllTokenBalances($inline_object3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getAllTokenBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object3** | [**\Mainnet\Model\InlineObject3**](../Model/InlineObject3.md)|  |

### Return type

**map[string,float]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getHistory

> \Mainnet\Model\TransactionHistoryItem[] getHistory($history_request)

Get a list of transactions related to a wallet

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
$history_request = new \Mainnet\Model\HistoryRequest(); // \Mainnet\Model\HistoryRequest | Gets transaction history of this wallet with most data decoded and ready to present to user   Note: balance calculations are valid only if querying to the blockchain tip (`toHeight` === -1, `count` === -1)   Note: this method is heavy on network calls, if invoked in browser use of cache is advised, @see `Config.UseLocalStorageCache`   Note: this method tries to recreate the history tab view of Electron Cash wallet, however, it may not be 100% accurate if the tnransaction value changes are the same in the same block (ordering)

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
 **history_request** | [**\Mainnet\Model\HistoryRequest**](../Model/HistoryRequest.md)| Gets transaction history of this wallet with most data decoded and ready to present to user   Note: balance calculations are valid only if querying to the blockchain tip (&#x60;toHeight&#x60; &#x3D;&#x3D;&#x3D; -1, &#x60;count&#x60; &#x3D;&#x3D;&#x3D; -1)   Note: this method is heavy on network calls, if invoked in browser use of cache is advised, @see &#x60;Config.UseLocalStorageCache&#x60;   Note: this method tries to recreate the history tab view of Electron Cash wallet, however, it may not be 100% accurate if the tnransaction value changes are the same in the same block (ordering) |

### Return type

[**\Mainnet\Model\TransactionHistoryItem[]**](../Model/TransactionHistoryItem.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getNftTokenBalance

> object getNftTokenBalance($inline_object2)

Get non-fungible token balance

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
$inline_object2 = new \Mainnet\Model\InlineObject2(); // \Mainnet\Model\InlineObject2 | 

try {
    $result = $apiInstance->getNftTokenBalance($inline_object2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getNftTokenBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object2** | [**\Mainnet\Model\InlineObject2**](../Model/InlineObject2.md)|  |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTokenBalance

> object getTokenBalance($inline_object1)

Get fungible token balance

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
$inline_object1 = new \Mainnet\Model\InlineObject1(); // \Mainnet\Model\InlineObject1 | 

try {
    $result = $apiInstance->getTokenBalance($inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getTokenBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object1** | [**\Mainnet\Model\InlineObject1**](../Model/InlineObject1.md)|  |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTokenUtxos

> \Mainnet\Model\Utxo[] getTokenUtxos($inline_object)

Get token utxos

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
$inline_object = new \Mainnet\Model\InlineObject(); // \Mainnet\Model\InlineObject | 

try {
    $result = $apiInstance->getTokenUtxos($inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getTokenUtxos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object** | [**\Mainnet\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\Mainnet\Model\Utxo[]**](../Model/Utxo.md)

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


## tokenBurn

> \Mainnet\Model\SendResponse tokenBurn($token_burn_request)

Perform an explicit token burn

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
$token_burn_request = new \Mainnet\Model\TokenBurnRequest(); // \Mainnet\Model\TokenBurnRequest | Perform an explicit token burning by spending a token utxo to an OP_RETURN Behaves differently for fungible and non-fungible tokens:  * NFTs are always \"destroyed\"  * FTs' amount is reduced by the amount specified, if 0 FT amount is left and no NFT present, the token is \"destroyed\" Refer to spec https://github.com/bitjson/cashtokens

try {
    $result = $apiInstance->tokenBurn($token_burn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->tokenBurn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_burn_request** | [**\Mainnet\Model\TokenBurnRequest**](../Model/TokenBurnRequest.md)| Perform an explicit token burning by spending a token utxo to an OP_RETURN Behaves differently for fungible and non-fungible tokens:  * NFTs are always \&quot;destroyed\&quot;  * FTs&#39; amount is reduced by the amount specified, if 0 FT amount is left and no NFT present, the token is \&quot;destroyed\&quot; Refer to spec https://github.com/bitjson/cashtokens |

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


## tokenDepositAddress

> \Mainnet\Model\DepositAddressResponse tokenDepositAddress($serialized_wallet)

Get a token aware deposit address in cash address format

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
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request for a token aware deposit address given a wallet

try {
    $result = $apiInstance->tokenDepositAddress($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->tokenDepositAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| Request for a token aware deposit address given a wallet |

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


## tokenGenesis

> \Mainnet\Model\SendResponse tokenGenesis($token_genesis_request)

Create new token category

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
$token_genesis_request = new \Mainnet\Model\TokenGenesisRequest(); // \Mainnet\Model\TokenGenesisRequest | Create new cashtoken, both funglible and/or non-fungible (NFT) Refer to spec https://github.com/bitjson/cashtokens Newly created token identifier can be found in `tokenIds` field.

try {
    $result = $apiInstance->tokenGenesis($token_genesis_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->tokenGenesis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_genesis_request** | [**\Mainnet\Model\TokenGenesisRequest**](../Model/TokenGenesisRequest.md)| Create new cashtoken, both funglible and/or non-fungible (NFT) Refer to spec https://github.com/bitjson/cashtokens Newly created token identifier can be found in &#x60;tokenIds&#x60; field. |

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


## tokenMint

> \Mainnet\Model\SendResponse tokenMint($token_mint_request)

Mint new non-fungible tokens

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
$token_mint_request = new \Mainnet\Model\TokenMintRequest(); // \Mainnet\Model\TokenMintRequest | Mint new NFT cashtokens using an existing minting token Refer to spec https://github.com/bitjson/cashtokens Newly minted tokens will retain the parent's `tokenId`.

try {
    $result = $apiInstance->tokenMint($token_mint_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->tokenMint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_mint_request** | [**\Mainnet\Model\TokenMintRequest**](../Model/TokenMintRequest.md)| Mint new NFT cashtokens using an existing minting token Refer to spec https://github.com/bitjson/cashtokens Newly minted tokens will retain the parent&#39;s &#x60;tokenId&#x60;. |

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


## utxos

> \Mainnet\Model\Utxo[] utxos($serialized_wallet)

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

[**\Mainnet\Model\Utxo[]**](../Model/Utxo.md)

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

