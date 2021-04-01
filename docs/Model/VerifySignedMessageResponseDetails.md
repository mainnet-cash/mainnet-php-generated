# # VerifySignedMessageResponseDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signature_type** | **string** | The type of signature passed | [optional] 
**message_hash** | **string** | The double sha256 hash of the string encoded as Bitcoin Message binary. | [optional] 
**signature_valid** | **bool** | A boolean indicating whether the signature is valid for the message | [optional] 
**public_key_hash_match** | **bool** | A boolean indicating whether the publicKeyHash of a recoverable signature matches the provided cashaddr, false otherwise | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


