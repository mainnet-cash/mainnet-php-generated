# # VerifySignedMessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet_id** | **string** |  | [optional] 
**message** | **string** |  | [optional] 
**signature** | **mixed** | The base64 signature of the double sha265 hash of a bitcoin message formatted string signed using the private key associated with the related cashaddr | [optional] 
**public_key** | **string** | If the publicKey is not recoverable from the signature, the base64 encoded public key may be passed as instead of the walletId | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


