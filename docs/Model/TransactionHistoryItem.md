# # TransactionHistoryItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | cashaddr of the receiving cash address. | [optional] 
**from** | **string** | cashaddr of the sending cash address. | [optional] 
**unit** | [**\Mainnet\Model\UnitType**](UnitType.md) |  | [optional] 
**index** | **float** | the index of the input or output in the transaction | [optional] 
**blockheight** | **float** | the blockheight of transaction | [optional] 
**txn** | **string** | The hash of the transaction | [optional] 
**tx_id** | **string** | a unique identifier for the sub-transaction | [optional] 
**value** | **float** | The amount of the transaction, in the unit provided, with respect to the wallet provided. | [optional] 
**fee** | **float** | The amount paid, if any, by the wallet for the transaction (incoming tranactions are \&quot;free\&quot;) | [optional] 
**balance** | **float** | A running balance | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


