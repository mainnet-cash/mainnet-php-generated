# # TokenMintRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet_id** | **string** | The walletId to make a request to. | 
**category** | **string** | Token unique hexadecimal identifier, also the id of the token creation transaction | 
**requests** | [**\Mainnet\Model\TokenMintRequestRequests[]**](TokenMintRequestRequests.md) |  | [optional] 
**deduct_token_amount** | **bool** | if minting token contains fungible amount, deduct from it by amount of minted tokens | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


