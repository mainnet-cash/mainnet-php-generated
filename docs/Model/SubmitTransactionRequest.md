# # SubmitTransactionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet_id** | **string** |  | 
**transaction_hex** | **string** | encoded transaction in hex format | 
**await_propagation** | **bool** | A boolean flag to wait for transaction to propagate through the network and be registered in the bitcoind and indexer. If set to false, the &#x60;send&#x60; call will be very fast, but the wallet UTXO state might be invalid for some 500ms. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


