# # SmartBchSep20GenesisRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet_id** | **string** | serialized wallet | 
**name** | **string** | Token name | 
**ticker** | **string** | Token ticker | 
**initial_amount** | [**AnyOfNumberString**](AnyOfNumberString.md) | Value is represented as number or string to avoid precision loss | 
**decimals** | **float** | Indicates that 1 token is divisible into 10^decimals base units | 
**end_baton** | **bool** | Indicates if token should not be &#39;mintable&#39;, e.g. total circulation amount increased | [optional] 
**token_receiver_address** | **string** |  | [optional] 
**baton_receiver_address** | **string** |  | [optional] 
**overrides** | [**\Mainnet\Model\SmartBchOverrides**](SmartBchOverrides.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


