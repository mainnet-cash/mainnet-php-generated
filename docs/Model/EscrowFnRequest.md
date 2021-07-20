# # EscrowFnRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**escrow_contract_id** | **string** | serialized contract | 
**wallet_id** | **string** | The walletId of the transaction signer. | 
**function** | **string** | Function to call on the escrow contract. | 
**to** | **string** | Output address for the transaction | [optional] 
**action** | **string** | In addition to &#x60;send&#x60;ing the built transaction, the built transaction hex may be returned (without broadcasting) with &#x60;build&#x60; action, or the [&#x60;meep 🔗&#x60;](https://github.com/gcash/meep) debugger command | [optional] 
**utxo_ids** | **string[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


