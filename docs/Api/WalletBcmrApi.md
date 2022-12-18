# Mainnet\WalletBcmrApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bcmrAddMetadataRegistryAuthChain**](WalletBcmrApi.md#bcmrAddMetadataRegistryAuthChain) | **POST** /wallet/bcmr/add_registry_authchain | Add BCMR metadata registry from autchain, returning the built chain
[**bcmrAddRegistry**](WalletBcmrApi.md#bcmrAddRegistry) | **POST** /wallet/bcmr/add_registry | Add BCMR registry from parameter
[**bcmrAddRegistryFromUri**](WalletBcmrApi.md#bcmrAddRegistryFromUri) | **POST** /wallet/bcmr/add_registry_from_uri | Reset tracked BCMR registries
[**bcmrBuildAuthChain**](WalletBcmrApi.md#bcmrBuildAuthChain) | **POST** /wallet/bcmr/build_authchain | Build a BCMR authchain
[**bcmrGetRegistries**](WalletBcmrApi.md#bcmrGetRegistries) | **POST** /wallet/bcmr/get_registries | Get tracked BCMR registries
[**bcmrGetTokenInfo**](WalletBcmrApi.md#bcmrGetTokenInfo) | **POST** /wallet/bcmr/get_token_info | Get token info
[**bcmrResetRegistries**](WalletBcmrApi.md#bcmrResetRegistries) | **POST** /wallet/bcmr/reset_registries | Reset tracked BCMR registries



## bcmrAddMetadataRegistryAuthChain

> \Mainnet\Model\AuthChainElement[] bcmrAddMetadataRegistryAuthChain($unknown_base_type)

Add BCMR metadata registry from autchain, returning the built chain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletBcmrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unknown_base_type = new \Mainnet\Model\UNKNOWN_BASE_TYPE(); // \Mainnet\Model\UNKNOWN_BASE_TYPE | Add BCMR metadata registry by resolving an authchain, allowing for token info lookup

try {
    $result = $apiInstance->bcmrAddMetadataRegistryAuthChain($unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletBcmrApi->bcmrAddMetadataRegistryAuthChain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unknown_base_type** | [**\Mainnet\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)| Add BCMR metadata registry by resolving an authchain, allowing for token info lookup |

### Return type

[**\Mainnet\Model\AuthChainElement[]**](../Model/AuthChainElement.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bcmrAddRegistry

> object bcmrAddRegistry($request_body)

Add BCMR registry from parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletBcmrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('key' => new \stdClass); // map[string,object] | Add a BCMR registry to the list of tracked, allowing for token info lookup

try {
    $result = $apiInstance->bcmrAddRegistry($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletBcmrApi->bcmrAddRegistry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**map[string,object]**](../Model/object.md)| Add a BCMR registry to the list of tracked, allowing for token info lookup |

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


## bcmrAddRegistryFromUri

> object bcmrAddRegistryFromUri($unknown_base_type)

Reset tracked BCMR registries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletBcmrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unknown_base_type = new \Mainnet\Model\UNKNOWN_BASE_TYPE(); // \Mainnet\Model\UNKNOWN_BASE_TYPE | Add a BCMR registry from remote URI to the list of tracked, allowing for token info lookup

try {
    $result = $apiInstance->bcmrAddRegistryFromUri($unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletBcmrApi->bcmrAddRegistryFromUri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unknown_base_type** | [**\Mainnet\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)| Add a BCMR registry from remote URI to the list of tracked, allowing for token info lookup |

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


## bcmrBuildAuthChain

> \Mainnet\Model\AuthChainElement[] bcmrBuildAuthChain($unknown_base_type)

Build a BCMR authchain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletBcmrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unknown_base_type = new \Mainnet\Model\UNKNOWN_BASE_TYPE(); // \Mainnet\Model\UNKNOWN_BASE_TYPE | Build an authchain - Zeroth-Descendant Transaction Chain, refer to https://github.com/bitjson/chip-bcmr#zeroth-descendant-transaction-chains The authchain in this implementation is specific to resolve to a valid metadata registy

try {
    $result = $apiInstance->bcmrBuildAuthChain($unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletBcmrApi->bcmrBuildAuthChain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unknown_base_type** | [**\Mainnet\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)| Build an authchain - Zeroth-Descendant Transaction Chain, refer to https://github.com/bitjson/chip-bcmr#zeroth-descendant-transaction-chains The authchain in this implementation is specific to resolve to a valid metadata registy |

### Return type

[**\Mainnet\Model\AuthChainElement[]**](../Model/AuthChainElement.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bcmrGetRegistries

> map[string,object][] bcmrGetRegistries($request_body)

Get tracked BCMR registries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletBcmrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('key' => new \stdClass); // map[string,object] | Get tracked BCMR registries.

try {
    $result = $apiInstance->bcmrGetRegistries($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletBcmrApi->bcmrGetRegistries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**map[string,object]**](../Model/object.md)| Get tracked BCMR registries. | [optional]

### Return type

[**map[string,object][]**](../Model/map.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bcmrGetTokenInfo

> object bcmrGetTokenInfo($unknown_base_type)

Get token info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletBcmrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unknown_base_type = new \Mainnet\Model\UNKNOWN_BASE_TYPE(); // \Mainnet\Model\UNKNOWN_BASE_TYPE | Return the token info (the identity snapshot as per BCMR spec)

try {
    $result = $apiInstance->bcmrGetTokenInfo($unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletBcmrApi->bcmrGetTokenInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unknown_base_type** | [**\Mainnet\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)| Return the token info (the identity snapshot as per BCMR spec) |

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


## bcmrResetRegistries

> object bcmrResetRegistries($body)

Reset tracked BCMR registries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\WalletBcmrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | Reset tracked BCMR registries, dropping all token info.

try {
    $result = $apiInstance->bcmrResetRegistries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletBcmrApi->bcmrResetRegistries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**| Reset tracked BCMR registries, dropping all token info. | [optional]

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

