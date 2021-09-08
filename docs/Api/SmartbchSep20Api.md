# Mainnet\SmartbchSep20Api

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**smartBchSep20Balance**](SmartbchSep20Api.md#smartBchSep20Balance) | **POST** /smartbch/sep20/balance | Get total SmartBch SEP20 token balance of the wallet
[**smartBchSep20DepositAddress**](SmartbchSep20Api.md#smartBchSep20DepositAddress) | **POST** /smartbch/sep20/deposit_address | Get an SmartBch SEP20 deposit address
[**smartBchSep20DepositQr**](SmartbchSep20Api.md#smartBchSep20DepositQr) | **POST** /smartbch/sep20/deposit_qr | Get an SmartBch SEP20 receiving address as a qrcode
[**smartBchSep20Genesis**](SmartbchSep20Api.md#smartBchSep20Genesis) | **POST** /smartbch/sep20/genesis | Get created tokenId back and new SmartBch SEP20 token balance of the wallet
[**smartBchSep20Mint**](SmartbchSep20Api.md#smartBchSep20Mint) | **POST** /smartbch/sep20/mint | Get created tokenId back and new SmartBch SEP20 token balance of the wallet
[**smartBchSep20Send**](SmartbchSep20Api.md#smartBchSep20Send) | **POST** /smartbch/sep20/send | Send some SmartBch SEP20 token amount to a given address
[**smartBchSep20SendMax**](SmartbchSep20Api.md#smartBchSep20SendMax) | **POST** /smartbch/sep20/send_max | Send all available SmartBch SEP20 token funds to a given address
[**smartBchSep20TokenInfo**](SmartbchSep20Api.md#smartBchSep20TokenInfo) | **POST** /smartbch/sep20/token_info | Get information about the SmartBch SEP20 token



## smartBchSep20Balance

> \Mainnet\Model\SmartBchSep20BalanceResponse smartBchSep20Balance($smart_bch_sep20_balance_request)

Get total SmartBch SEP20 token balance of the wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchSep20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_sep20_balance_request = new \Mainnet\Model\SmartBchSep20BalanceRequest(); // \Mainnet\Model\SmartBchSep20BalanceRequest | Request for a wallet SmartBch SEP20 token balance

try {
    $result = $apiInstance->smartBchSep20Balance($smart_bch_sep20_balance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchSep20Api->smartBchSep20Balance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_sep20_balance_request** | [**\Mainnet\Model\SmartBchSep20BalanceRequest**](../Model/SmartBchSep20BalanceRequest.md)| Request for a wallet SmartBch SEP20 token balance |

### Return type

[**\Mainnet\Model\SmartBchSep20BalanceResponse**](../Model/SmartBchSep20BalanceResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartBchSep20DepositAddress

> \Mainnet\Model\SmartBchDepositAddressResponse smartBchSep20DepositAddress($serialized_wallet)

Get an SmartBch SEP20 deposit address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchSep20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request for an SmartBch SEP20 deposit address given a wallet

try {
    $result = $apiInstance->smartBchSep20DepositAddress($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchSep20Api->smartBchSep20DepositAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| Request for an SmartBch SEP20 deposit address given a wallet |

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


## smartBchSep20DepositQr

> \Mainnet\Model\ScalableVectorGraphic smartBchSep20DepositQr($serialized_wallet)

Get an SmartBch SEP20 receiving address as a qrcode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchSep20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serialized_wallet = new \Mainnet\Model\SerializedWallet(); // \Mainnet\Model\SerializedWallet | Request for a SmartBch SEP20 deposit address as a Quick Response code (qrcode)

try {
    $result = $apiInstance->smartBchSep20DepositQr($serialized_wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchSep20Api->smartBchSep20DepositQr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serialized_wallet** | [**\Mainnet\Model\SerializedWallet**](../Model/SerializedWallet.md)| Request for a SmartBch SEP20 deposit address as a Quick Response code (qrcode) |

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


## smartBchSep20Genesis

> \Mainnet\Model\SmartBchSep20GenesisResponse smartBchSep20Genesis($smart_bch_sep20_genesis_request)

Get created tokenId back and new SmartBch SEP20 token balance of the wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchSep20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_sep20_genesis_request = new \Mainnet\Model\SmartBchSep20GenesisRequest(); // \Mainnet\Model\SmartBchSep20GenesisRequest | Request to create a new SmartBch SEP20 token (genesis)

try {
    $result = $apiInstance->smartBchSep20Genesis($smart_bch_sep20_genesis_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchSep20Api->smartBchSep20Genesis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_sep20_genesis_request** | [**\Mainnet\Model\SmartBchSep20GenesisRequest**](../Model/SmartBchSep20GenesisRequest.md)| Request to create a new SmartBch SEP20 token (genesis) |

### Return type

[**\Mainnet\Model\SmartBchSep20GenesisResponse**](../Model/SmartBchSep20GenesisResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartBchSep20Mint

> \Mainnet\Model\SmartBchSep20MintResponse smartBchSep20Mint($smart_bch_sep20_mint_request)

Get created tokenId back and new SmartBch SEP20 token balance of the wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchSep20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_sep20_mint_request = new \Mainnet\Model\SmartBchSep20MintRequest(); // \Mainnet\Model\SmartBchSep20MintRequest | Request to mint more of SmartBch SEP20 tokens

try {
    $result = $apiInstance->smartBchSep20Mint($smart_bch_sep20_mint_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchSep20Api->smartBchSep20Mint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_sep20_mint_request** | [**\Mainnet\Model\SmartBchSep20MintRequest**](../Model/SmartBchSep20MintRequest.md)| Request to mint more of SmartBch SEP20 tokens |

### Return type

[**\Mainnet\Model\SmartBchSep20MintResponse**](../Model/SmartBchSep20MintResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartBchSep20Send

> object[] smartBchSep20Send($smart_bch_sep20_send_request)

Send some SmartBch SEP20 token amount to a given address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchSep20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_sep20_send_request = new \Mainnet\Model\SmartBchSep20SendRequest(); // \Mainnet\Model\SmartBchSep20SendRequest | place a SmartBch SEP20 token send request

try {
    $result = $apiInstance->smartBchSep20Send($smart_bch_sep20_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchSep20Api->smartBchSep20Send: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_sep20_send_request** | [**\Mainnet\Model\SmartBchSep20SendRequest**](../Model/SmartBchSep20SendRequest.md)| place a SmartBch SEP20 token send request |

### Return type

**object[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartBchSep20SendMax

> object[] smartBchSep20SendMax($smart_bch_sep20_send_max_request)

Send all available SmartBch SEP20 token funds to a given address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchSep20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_sep20_send_max_request = new \Mainnet\Model\SmartBchSep20SendMaxRequest(); // \Mainnet\Model\SmartBchSep20SendMaxRequest | Request to send all available SmartBch SEP20 token funds to a given address

try {
    $result = $apiInstance->smartBchSep20SendMax($smart_bch_sep20_send_max_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchSep20Api->smartBchSep20SendMax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_sep20_send_max_request** | [**\Mainnet\Model\SmartBchSep20SendMaxRequest**](../Model/SmartBchSep20SendMaxRequest.md)| Request to send all available SmartBch SEP20 token funds to a given address |

### Return type

**object[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartBchSep20TokenInfo

> \Mainnet\Model\SmartBchSep20TokenInfoResponse smartBchSep20TokenInfo($smart_bch_sep20_token_info_request)

Get information about the SmartBch SEP20 token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchSep20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_sep20_token_info_request = new \Mainnet\Model\SmartBchSep20TokenInfoRequest(); // \Mainnet\Model\SmartBchSep20TokenInfoRequest | Request to get information about the SmartBch SEP20 token

try {
    $result = $apiInstance->smartBchSep20TokenInfo($smart_bch_sep20_token_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchSep20Api->smartBchSep20TokenInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_sep20_token_info_request** | [**\Mainnet\Model\SmartBchSep20TokenInfoRequest**](../Model/SmartBchSep20TokenInfoRequest.md)| Request to get information about the SmartBch SEP20 token |

### Return type

[**\Mainnet\Model\SmartBchSep20TokenInfoResponse**](../Model/SmartBchSep20TokenInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

