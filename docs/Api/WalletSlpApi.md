# Mainnet\WalletSlpApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**nftChildGenesis**](WalletSlpApi.md#nftChildGenesis) | **POST** /wallet/slp/nft_child_genesis | Get created tokenId back and new NFT child token balance of the wallet
[**nftParentGenesis**](WalletSlpApi.md#nftParentGenesis) | **POST** /wallet/slp/nft_parent_genesis | Get created tokenId back and new NFT token balance of the wallet
[**slpAllBalances**](WalletSlpApi.md#slpAllBalances) | **POST** /wallet/slp/all_balances | Get all slp balances of the wallet
[**slpBalance**](WalletSlpApi.md#slpBalance) | **POST** /wallet/slp/balance | Get total slp token balance of the wallet
[**slpCreateWallet**](WalletSlpApi.md#slpCreateWallet) | **POST** /wallet/slp/create | create a new SLP wallet
[**slpDepositAddress**](WalletSlpApi.md#slpDepositAddress) | **POST** /wallet/slp/deposit_address | Get an SLP deposit address in cash address format
[**slpDepositQr**](WalletSlpApi.md#slpDepositQr) | **POST** /wallet/slp/deposit_qr | Get an SLP receiving cash address as a qrcode
[**slpGenesis**](WalletSlpApi.md#slpGenesis) | **POST** /wallet/slp/genesis | Get created tokenId back and new slp token balance of the wallet
[**slpMint**](WalletSlpApi.md#slpMint) | **POST** /wallet/slp/mint | Get created tokenId back and new slp token balance of the wallet
[**slpOutpoints**](WalletSlpApi.md#slpOutpoints) | **POST** /wallet/slp/outpoints | Get list of unspent SLP outpoints.
[**slpSend**](WalletSlpApi.md#slpSend) | **POST** /wallet/slp/send | Send some SLP token amount to a given cash address
[**slpSendMax**](WalletSlpApi.md#slpSendMax) | **POST** /wallet/slp/send_max | Send all available SLP funds to a given address
[**slpTokenInfo**](WalletSlpApi.md#slpTokenInfo) | **POST** /wallet/slp/token_info | Get information about the token
[**slpUtxos**](WalletSlpApi.md#slpUtxos) | **POST** /wallet/slp/utxo | Get detailed information about unspent SLP outputs (utxos)



## nftChildGenesis

> \Mainnet\Model\SlpGenesisResponse nftChildGenesis($slp_genesis_request)

Get created tokenId back and new NFT child token balance of the wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slp_genesis_request = new \Mainnet\Model\SlpGenesisRequest(); // \Mainnet\Model\SlpGenesisRequest | Request to create a new NFT child token (genesis) by consuming a parent token

try {
    $result = $apiInstance->nftChildGenesis($slp_genesis_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->nftChildGenesis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slp_genesis_request** | [**\Mainnet\Model\SlpGenesisRequest**](../Model/SlpGenesisRequest.md)| Request to create a new NFT child token (genesis) by consuming a parent token |

### Return type

[**\Mainnet\Model\SlpGenesisResponse**](../Model/SlpGenesisResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## nftParentGenesis

> \Mainnet\Model\SlpGenesisResponse nftParentGenesis($slp_genesis_request)

Get created tokenId back and new NFT token balance of the wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slp_genesis_request = new \Mainnet\Model\SlpGenesisRequest(); // \Mainnet\Model\SlpGenesisRequest | Request to create a new NFT parent token (genesis)

try {
    $result = $apiInstance->nftParentGenesis($slp_genesis_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->nftParentGenesis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slp_genesis_request** | [**\Mainnet\Model\SlpGenesisRequest**](../Model/SlpGenesisRequest.md)| Request to create a new NFT parent token (genesis) |

### Return type

[**\Mainnet\Model\SlpGenesisResponse**](../Model/SlpGenesisResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## slpAllBalances

> \Mainnet\Model\SlpBalanceResponse[] slpAllBalances($serialized_wallet)

Get all slp balances of the wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request for a wallet slp balances

try {
    $result = $apiInstance->slpAllBalances($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->slpAllBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| Request for a wallet slp balances |

### Return type

[**\Mainnet\Model\SlpBalanceResponse[]**](../Model/SlpBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## slpBalance

> \Mainnet\Model\SlpBalanceResponse slpBalance($slp_balance_request)

Get total slp token balance of the wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slp_balance_request = new \Mainnet\Model\SlpBalanceRequest(); // \Mainnet\Model\SlpBalanceRequest | Request for a wallet slp token balance

try {
    $result = $apiInstance->slpBalance($slp_balance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->slpBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slp_balance_request** | [**\Mainnet\Model\SlpBalanceRequest**](../Model/SlpBalanceRequest.md)| Request for a wallet slp token balance |

### Return type

[**\Mainnet\Model\SlpBalanceResponse**](../Model/SlpBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## slpCreateWallet

> \Mainnet\Model\WalletResponse slpCreateWallet($wallet_request)

create a new SLP wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_request = new \Mainnet\Model\WalletRequest(); // \Mainnet\Model\WalletRequest | Request a new SLP wallet

try {
    $result = $apiInstance->slpCreateWallet($wallet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->slpCreateWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_request** | [**\Mainnet\Model\WalletRequest**](../Model/WalletRequest.md)| Request a new SLP wallet |

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


## slpDepositAddress

> \Mainnet\Model\SlpDepositAddressResponse slpDepositAddress($serialized_wallet)

Get an SLP deposit address in cash address format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request for an SLP deposit address given a wallet

try {
    $result = $apiInstance->slpDepositAddress($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->slpDepositAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| Request for an SLP deposit address given a wallet |

### Return type

[**\Mainnet\Model\SlpDepositAddressResponse**](../Model/SlpDepositAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## slpDepositQr

> \Mainnet\Model\ScalableVectorGraphic slpDepositQr($serialized_wallet)

Get an SLP receiving cash address as a qrcode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request for an SLP deposit cash address as a Quick Response code (qrcode)

try {
    $result = $apiInstance->slpDepositQr($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->slpDepositQr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| Request for an SLP deposit cash address as a Quick Response code (qrcode) |

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


## slpGenesis

> \Mainnet\Model\SlpGenesisResponse slpGenesis($slp_genesis_request)

Get created tokenId back and new slp token balance of the wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slp_genesis_request = new \Mainnet\Model\SlpGenesisRequest(); // \Mainnet\Model\SlpGenesisRequest | Request to create a new SLP token (genesis)

try {
    $result = $apiInstance->slpGenesis($slp_genesis_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->slpGenesis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slp_genesis_request** | [**\Mainnet\Model\SlpGenesisRequest**](../Model/SlpGenesisRequest.md)| Request to create a new SLP token (genesis) |

### Return type

[**\Mainnet\Model\SlpGenesisResponse**](../Model/SlpGenesisResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## slpMint

> \Mainnet\Model\SlpMintResponse slpMint($slp_mint_request)

Get created tokenId back and new slp token balance of the wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slp_mint_request = new \Mainnet\Model\SlpMintRequest(); // \Mainnet\Model\SlpMintRequest | Request to mint more of SLP tokens

try {
    $result = $apiInstance->slpMint($slp_mint_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->slpMint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slp_mint_request** | [**\Mainnet\Model\SlpMintRequest**](../Model/SlpMintRequest.md)| Request to mint more of SLP tokens |

### Return type

[**\Mainnet\Model\SlpMintResponse**](../Model/SlpMintResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## slpOutpoints

> \Mainnet\Model\SlpOutpointsResponse slpOutpoints($serialized_wallet)

Get list of unspent SLP outpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request of unspent SLP outpoints

try {
    $result = $apiInstance->slpOutpoints($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->slpOutpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| Request of unspent SLP outpoints |

### Return type

[**\Mainnet\Model\SlpOutpointsResponse**](../Model/SlpOutpointsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## slpSend

> \Mainnet\Model\SlpSendResponse slpSend($slp_send_request)

Send some SLP token amount to a given cash address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slp_send_request = new \Mainnet\Model\SlpSendRequest(); // \Mainnet\Model\SlpSendRequest | place an SLP send request

try {
    $result = $apiInstance->slpSend($slp_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->slpSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slp_send_request** | [**\Mainnet\Model\SlpSendRequest**](../Model/SlpSendRequest.md)| place an SLP send request |

### Return type

[**\Mainnet\Model\SlpSendResponse**](../Model/SlpSendResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## slpSendMax

> \Mainnet\Model\SlpSendResponse slpSendMax($slp_send_max_request)

Send all available SLP funds to a given address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slp_send_max_request = new \Mainnet\Model\SlpSendMaxRequest(); // \Mainnet\Model\SlpSendMaxRequest | Request to send all available SLP funds to a given address

try {
    $result = $apiInstance->slpSendMax($slp_send_max_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->slpSendMax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slp_send_max_request** | [**\Mainnet\Model\SlpSendMaxRequest**](../Model/SlpSendMaxRequest.md)| Request to send all available SLP funds to a given address |

### Return type

[**\Mainnet\Model\SlpSendResponse**](../Model/SlpSendResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## slpTokenInfo

> \Mainnet\Model\SlpTokenInfoResponseItem slpTokenInfo($slp_token_info_request)

Get information about the token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slp_token_info_request = new \Mainnet\Model\SlpTokenInfoRequest(); // \Mainnet\Model\SlpTokenInfoRequest | Request to get information about the token

try {
    $result = $apiInstance->slpTokenInfo($slp_token_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->slpTokenInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slp_token_info_request** | [**\Mainnet\Model\SlpTokenInfoRequest**](../Model/SlpTokenInfoRequest.md)| Request to get information about the token |

### Return type

[**\Mainnet\Model\SlpTokenInfoResponseItem**](../Model/SlpTokenInfoResponseItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## slpUtxos

> \Mainnet\Model\SlpUtxoResponse slpUtxos($serialized_wallet)

Get detailed information about unspent SLP outputs (utxos)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\WalletSlpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request detailed list of unspent SLP transaction outputs

try {
    $result = $apiInstance->slpUtxos($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletSlpApi->slpUtxos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| Request detailed list of unspent SLP transaction outputs |

### Return type

[**\Mainnet\Model\SlpUtxoResponse**](../Model/SlpUtxoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

