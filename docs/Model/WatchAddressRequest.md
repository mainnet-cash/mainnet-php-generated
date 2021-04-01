# # WatchAddressRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cashaddr** | **string** | Cash address to watch | 
**url** | **string** | Url to be called when configured action is triggered | 
**type** | **string** | Type of watch operation | [default to 'transaction:in,out']
**recurrence** | **string** | Action recurrence. Indicates if webhook should be triggered recurrently until expire or only once | [optional] [default to 'once']
**duration_sec** | **float** | Duration of the webhook lifetime in seconds before it will expire. | [optional] [default to 86400]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


