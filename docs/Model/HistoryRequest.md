# # HistoryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet_id** | **string** | The walletId to get a history for. | 
**unit** | **string** | Unit of account for running balance. | [optional] [default to 'sat']
**from_height** | **float** | optional, if set, history will be limited. Default 0 | [optional] [default to 0]
**to_height** | **float** | optional, if set, history will be limited. Default -1, meaning that all history items will be returned, including mempool | [optional] [default to -1]
**start** | **float** | optional, if set, the result set will be paginated with offset &#x60;start&#x60;. Default 0 | [optional] [default to 0]
**count** | **float** | optional, if set, the result set will be paginated with &#x60;count&#x60;. Default -1, meaning that all history items will be returned | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


