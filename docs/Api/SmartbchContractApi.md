# Mainnet\SmartbchContractApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**smartBchContractCall**](SmartbchContractApi.md#smartBchContractCall) | **POST** /smartbch/contract/call | Call a SmartBch contract function
[**smartBchContractCreate**](SmartbchContractApi.md#smartBchContractCreate) | **POST** /smartbch/contract/create | Create a SmartBch contractId
[**smartBchContractDeploy**](SmartbchContractApi.md#smartBchContractDeploy) | **POST** /smartbch/contract/deploy | Request to deploy a SmartBch contract
[**smartBchContractEstimateGas**](SmartbchContractApi.md#smartBchContractEstimateGas) | **POST** /smartbch/contract/estimate_gas | Estimate the gas for a contract interaction function given the arguments
[**smartBchContractInfo**](SmartbchContractApi.md#smartBchContractInfo) | **POST** /smartbch/contract/info | Get information about a SmartBch contract from the contractId



## smartBchContractCall

> \Mainnet\Model\SmartBchContractFnCallResponse smartBchContractCall($smart_bch_contract_fn_call_request)

Call a SmartBch contract function

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_contract_fn_call_request = new \Mainnet\Model\SmartBchContractFnCallRequest(); // \Mainnet\Model\SmartBchContractFnCallRequest | 

try {
    $result = $apiInstance->smartBchContractCall($smart_bch_contract_fn_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchContractApi->smartBchContractCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_contract_fn_call_request** | [**\Mainnet\Model\SmartBchContractFnCallRequest**](../Model/SmartBchContractFnCallRequest.md)|  |

### Return type

[**\Mainnet\Model\SmartBchContractFnCallResponse**](../Model/SmartBchContractFnCallResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartBchContractCreate

> \Mainnet\Model\SmartBchContractResponse smartBchContractCreate($smart_bch_contract_request)

Create a SmartBch contractId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_contract_request = new \Mainnet\Model\SmartBchContractRequest(); // \Mainnet\Model\SmartBchContractRequest | Create a SmartBch contractId

try {
    $result = $apiInstance->smartBchContractCreate($smart_bch_contract_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchContractApi->smartBchContractCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_contract_request** | [**\Mainnet\Model\SmartBchContractRequest**](../Model/SmartBchContractRequest.md)| Create a SmartBch contractId |

### Return type

[**\Mainnet\Model\SmartBchContractResponse**](../Model/SmartBchContractResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartBchContractDeploy

> \Mainnet\Model\SmartBchContractDeployResponse smartBchContractDeploy($smart_bch_contract_deploy_request)

Request to deploy a SmartBch contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_contract_deploy_request = new \Mainnet\Model\SmartBchContractDeployRequest(); // \Mainnet\Model\SmartBchContractDeployRequest | Request to deploy a SmartBch contract

try {
    $result = $apiInstance->smartBchContractDeploy($smart_bch_contract_deploy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchContractApi->smartBchContractDeploy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_contract_deploy_request** | [**\Mainnet\Model\SmartBchContractDeployRequest**](../Model/SmartBchContractDeployRequest.md)| Request to deploy a SmartBch contract |

### Return type

[**\Mainnet\Model\SmartBchContractDeployResponse**](../Model/SmartBchContractDeployResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartBchContractEstimateGas

> \Mainnet\Model\SmartBchContractEstimateGasResponse smartBchContractEstimateGas($smart_bch_contract_estimate_gas_request)

Estimate the gas for a contract interaction function given the arguments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_contract_estimate_gas_request = new \Mainnet\Model\SmartBchContractEstimateGasRequest(); // \Mainnet\Model\SmartBchContractEstimateGasRequest | 

try {
    $result = $apiInstance->smartBchContractEstimateGas($smart_bch_contract_estimate_gas_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchContractApi->smartBchContractEstimateGas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_contract_estimate_gas_request** | [**\Mainnet\Model\SmartBchContractEstimateGasRequest**](../Model/SmartBchContractEstimateGasRequest.md)|  |

### Return type

[**\Mainnet\Model\SmartBchContractEstimateGasResponse**](../Model/SmartBchContractEstimateGasResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## smartBchContractInfo

> \Mainnet\Model\SmartBchContractInfoResponse smartBchContractInfo($smart_bch_contract_info_request)

Get information about a SmartBch contract from the contractId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\SmartbchContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_bch_contract_info_request = new \Mainnet\Model\SmartBchContractInfoRequest(); // \Mainnet\Model\SmartBchContractInfoRequest | Request parsed information regarding a SmartBch contract from the smartBchContractId

try {
    $result = $apiInstance->smartBchContractInfo($smart_bch_contract_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartbchContractApi->smartBchContractInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_bch_contract_info_request** | [**\Mainnet\Model\SmartBchContractInfoRequest**](../Model/SmartBchContractInfoRequest.md)| Request parsed information regarding a SmartBch contract from the smartBchContractId |

### Return type

[**\Mainnet\Model\SmartBchContractInfoResponse**](../Model/SmartBchContractInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

