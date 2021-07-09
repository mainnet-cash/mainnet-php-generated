# Mainnet\ContractApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contractFn**](ContractApi.md#contractFn) | **POST** /contract/call | Call a method on a contract
[**contractInfo**](ContractApi.md#contractInfo) | **POST** /contract/info | Get information about a contract from the contractId
[**contractUtxos**](ContractApi.md#contractUtxos) | **POST** /contract/utxos | List specific utxos on any contract
[**createContract**](ContractApi.md#createContract) | **POST** /contract/create | Create a cashscript contract



## contractFn

> \Mainnet\Model\ContractFnResponse contractFn($contract_fn_request)

Call a method on a contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_fn_request = {"contractId":"testnet:TURNME1UQmxaakEwT0dJelpHRXpOVEUzT1RObU5tVmtNVFJqWXpKbVpHVTBOakJpWldOak5XSTJOVGhrT1RFek9EUTBNMkk1WVRNd01EQTNNRGRoTm1FMzpNRE0wT1RjNFlXTTBOalJtTXpVNFlqSXpOV1l4TVRJeE1tVmlObVV3TVRkaFpqa3dNakUxWWprd1lqRm1aamMwTnpGa09XRmxNbUZpWWpWbE1Ea3lOak5pOk1qRTE=:Y29udHJhY3QgVHJhbnNmZXJXaXRoVGltZW91dChwdWJrZXkgc2VuZGVyLCBwdWJrZXkgcmVjaXBpZW50LCBpbnQgdGltZW91dCkgewogICAgZnVuY3Rpb24gdHJhbnNmZXIoc2lnIHJlY2lwaWVudFNpZykgewogICAgICAgIHJlcXVpcmUoY2hlY2tTaWcocmVjaXBpZW50U2lnLCByZWNpcGllbnQpKTsKICAgIH0KCiAgICBmdW5jdGlvbiB0aW1lb3V0KHNpZyBzZW5kZXJTaWcpIHsKICAgICAgICByZXF1aXJlKGNoZWNrU2lnKHNlbmRlclNpZywgc2VuZGVyKSk7CiAgICAgICAgcmVxdWlyZSh0eC50aW1lID49IHRpbWVvdXQpOwogICAgfQp9Cg==:1996128042","action":"send","function":"timeout","to":{"unit":"sat","cashaddr":"bchtest:qpalhxhl05mlhms3ys43u76rn0ttdv3qg2usm4nm7t","value":2000},"feePerByte":1}; // \Mainnet\Model\ContractFnRequest | Request a new cashscript contract

try {
    $result = $apiInstance->contractFn($contract_fn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->contractFn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_fn_request** | [**\Mainnet\Model\ContractFnRequest**](../Model/ContractFnRequest.md)| Request a new cashscript contract |

### Return type

[**\Mainnet\Model\ContractFnResponse**](../Model/ContractFnResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## contractInfo

> \Mainnet\Model\ContractInfoResponse contractInfo($contract_info_request)

Get information about a contract from the contractId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_info_request = {"contractId":"testnet:TURNME1UQmxaakEwT0dJelpHRXpOVEUzT1RObU5tVmtNVFJqWXpKbVpHVTBOakJpWldOak5XSTJOVGhrT1RFek9EUTBNMkk1WVRNd01EQTNNRGRoTm1FMzpNRE0wT1RjNFlXTTBOalJtTXpVNFlqSXpOV1l4TVRJeE1tVmlObVV3TVRkaFpqa3dNakUxWWprd1lqRm1aamMwTnpGa09XRmxNbUZpWWpWbE1Ea3lOak5pOk1qRTE=:Y29udHJhY3QgVHJhbnNmZXJXaXRoVGltZW91dChwdWJrZXkgc2VuZGVyLCBwdWJrZXkgcmVjaXBpZW50LCBpbnQgdGltZW91dCkgewogICAgZnVuY3Rpb24gdHJhbnNmZXIoc2lnIHJlY2lwaWVudFNpZykgewogICAgICAgIHJlcXVpcmUoY2hlY2tTaWcocmVjaXBpZW50U2lnLCByZWNpcGllbnQpKTsKICAgIH0KCiAgICBmdW5jdGlvbiB0aW1lb3V0KHNpZyBzZW5kZXJTaWcpIHsKICAgICAgICByZXF1aXJlKGNoZWNrU2lnKHNlbmRlclNpZywgc2VuZGVyKSk7CiAgICAgICAgcmVxdWlyZSh0eC50aW1lID49IHRpbWVvdXQpOwogICAgfQp9Cg==:1996128042"}; // \Mainnet\Model\ContractInfoRequest | Request parsed information regarding a contract from the contractId

try {
    $result = $apiInstance->contractInfo($contract_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->contractInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_info_request** | [**\Mainnet\Model\ContractInfoRequest**](../Model/ContractInfoRequest.md)| Request parsed information regarding a contract from the contractId |

### Return type

[**\Mainnet\Model\ContractInfoResponse**](../Model/ContractInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## contractUtxos

> \Mainnet\Model\UtxoResponse contractUtxos($contract)

List specific utxos on any contract

Returns all UTXOs that can be spent by the contract. Both confirmed and unconfirmed UTXOs are included. The endpoint works with contracts generated from templates (i.e. escrow).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract = new \Mainnet\Model\Contract(); // \Mainnet\Model\Contract | 

try {
    $result = $apiInstance->contractUtxos($contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->contractUtxos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | [**\Mainnet\Model\Contract**](../Model/Contract.md)|  |

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


## createContract

> \Mainnet\Model\ContractResponse createContract($contract_request)

Create a cashscript contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_request = new \Mainnet\Model\ContractRequest(); // \Mainnet\Model\ContractRequest | Request a new cashscript contract

try {
    $result = $apiInstance->createContract($contract_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->createContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_request** | [**\Mainnet\Model\ContractRequest**](../Model/ContractRequest.md)| Request a new cashscript contract |

### Return type

[**\Mainnet\Model\ContractResponse**](../Model/ContractResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

