# Mainnet\ContractApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEscrow**](ContractApi.md#createEscrow) | **POST** /contract/escrow/create | Create an escrow contract
[**escrowFn**](ContractApi.md#escrowFn) | **POST** /contract/escrow/call | Finalize an escrow contract
[**escrowUtxos**](ContractApi.md#escrowUtxos) | **POST** /contract/escrow/utxos | List specific utxos in a contract



## createEscrow

> \Mainnet\Model\ContractResponse createEscrow($escrow_request)

Create an escrow contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$escrow_request = new \Mainnet\Model\EscrowRequest(); // \Mainnet\Model\EscrowRequest | Request a new escrow contract

try {
    $result = $apiInstance->createEscrow($escrow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->createEscrow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **escrow_request** | [**\Mainnet\Model\EscrowRequest**](../Model/EscrowRequest.md)| Request a new escrow contract |

### Return type

[**\Mainnet\Model\ContractResponse**](../Model/ContractResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## escrowFn

> \Mainnet\Model\ContractFnResponse escrowFn($contract_fn_request)

Finalize an escrow contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_fn_request = new \Mainnet\Model\ContractFnRequest(); // \Mainnet\Model\ContractFnRequest | null

try {
    $result = $apiInstance->escrowFn($contract_fn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->escrowFn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_fn_request** | [**\Mainnet\Model\ContractFnRequest**](../Model/ContractFnRequest.md)| null |

### Return type

[**\Mainnet\Model\ContractFnResponse**](../Model/ContractFnResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## escrowUtxos

> \Mainnet\Model\UtxoResponse escrowUtxos($contract)

List specific utxos in a contract

Returns all UTXOs that can be spent by the  contract. Both confirmed and unconfirmed UTXOs are included.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract = new \Mainnet\Model\Contract(); // \Mainnet\Model\Contract | 

try {
    $result = $apiInstance->escrowUtxos($contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->escrowUtxos: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

