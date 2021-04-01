# Mainnet\ContractEscrowApi

All URIs are relative to *https://rest-unstable.mainnet.cash*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEscrow**](ContractEscrowApi.md#createEscrow) | **POST** /contract/escrow/create | Create an escrow contract
[**escrowFn**](ContractEscrowApi.md#escrowFn) | **POST** /contract/escrow/call | Finalize an escrow contract



## createEscrow

> \Mainnet\Model\ContractResponse createEscrow($escrow_request)

Create an escrow contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\ContractEscrowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$escrow_request = new \Mainnet\Model\EscrowRequest(); // \Mainnet\Model\EscrowRequest | Request a new escrow contract from a template

try {
    $result = $apiInstance->createEscrow($escrow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractEscrowApi->createEscrow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **escrow_request** | [**\Mainnet\Model\EscrowRequest**](../Model/EscrowRequest.md)| Request a new escrow contract from a template |

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

> \Mainnet\Model\ContractFnResponse escrowFn($escrow_fn_request)

Finalize an escrow contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Mainnet\Api\ContractEscrowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$escrow_fn_request = new \Mainnet\Model\EscrowFnRequest(); // \Mainnet\Model\EscrowFnRequest | 

try {
    $result = $apiInstance->escrowFn($escrow_fn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractEscrowApi->escrowFn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **escrow_fn_request** | [**\Mainnet\Model\EscrowFnRequest**](../Model/EscrowFnRequest.md)|  |

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

