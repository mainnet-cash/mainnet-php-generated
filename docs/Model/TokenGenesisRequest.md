# # TokenGenesisRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet_id** | **string** | The walletId to make a request to. | 
**requests** | [**\Mainnet\Model\TokenGenesisItem[]**](TokenGenesisItem.md) | One or more genesis requests. Each consumes a distinct vout&#x3D;0 input and creates a new token category in the same transaction. | 
**send_requests** | [**AnyOfSendRequestItemArrayTokenSendRequestOpReturnData**](AnyOfSendRequestItemArrayTokenSendRequestOpReturnData.md) | Single or an array of extra send requests (OP_RETURN, value transfer, etc.) to include in genesis transaction. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


