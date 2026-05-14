# # TokenMintRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet_id** | **string** | The walletId to make a request to. | 
**requests** | [**\Mainnet\Model\TokenMintItem[]**](TokenMintItem.md) | One or more mint requests. Requests can span multiple categories; minting NFTs of each category are spent and recreated within the same transaction. | 
**deduct_token_amount** | **bool** | If the minting NFT for a category contains a fungible amount, deduct from it by the number of mints requested for that category. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


