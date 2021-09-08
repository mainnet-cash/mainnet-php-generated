# # SmartBchSendRequestOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query_balance** | **bool** | A boolean flag to include the wallet balance after the successful &#x60;send&#x60; operation to the returned result If set to false, the balance will not be queried and returned, making the &#x60;send&#x60; call faster | [optional] [default to true]
**await_transaction_propagation** | **bool** | A boolean flag to wait for transaction to propagate through the network. If set to false, the &#x60;send&#x60; call will be faster, but other subsequent operations might fail due to nonce number mismatch. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


