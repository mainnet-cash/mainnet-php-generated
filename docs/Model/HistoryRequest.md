# # HistoryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet_id** | **string** | The walletId to get a history for. | 
**unit** | **string** | Unit of account for running balance. | [optional] [default to 'sat']
**start** | **float** | The first record to return starting from zero | [optional] 
**count** | **float** | The number of records to return | [optional] 
**collapse_change** | **bool** | Exclude transactions returned to the wallet as change in response. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


