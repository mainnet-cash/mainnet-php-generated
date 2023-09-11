# # SendRequestOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**utxo_ids** | **string[]** |  | [optional] 
**change_address** | **string** | Cash address to receive change to | [optional] 
**slp_semi_aware** | **bool** | This flag requires an utxo to have more than 546 sats to be spendable and counted in the balance This option is not switched on by default | [optional] [default to false]
**query_balance** | **bool** | A boolean flag to include the wallet balance after the successful &#x60;send&#x60; operation to the returned result If set to false, the balance will not be queried and returned, making the &#x60;send&#x60; call faster | [optional] [default to true]
**await_transaction_propagation** | **bool** | A boolean flag to wait for transaction to propagate through the network and be registered in the bitcoind and indexer. If set to false, the &#x60;send&#x60; call will be very fast, but the wallet UTXO state might be invalid for some 500ms. | [optional] [default to true]
**fee_paid_by** | **string** | Fee allocation stragety. Convenience option to subtract fees from outputs if change is not sufficent to cover transaction costs.   * &#x60;change&#x60; - Change, pay the fees from change or error   * &#x60;firstOutput&#x60; - First Output, pay the fee from the first output or error   * &#x60;lastOutput&#x60; - Last Output, pay the fee from the last output or error   * &#x60;anyOutput&#x60; - Any Output, pay the fee from dust outputs or divide across all remaining non-dust outputs.   * &#x60;changeThenFirst&#x60; - Use change then first output or error.   * &#x60;changeThenLast&#x60; - Use change then last output or error.   * &#x60;changeThenAny&#x60; - Use change then any output stragety or error. | [optional] [default to 'change']
**check_token_quantities** | **bool** | Check that sum of input amounts and output amount for each token category matches. Prevents accidental burns. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


