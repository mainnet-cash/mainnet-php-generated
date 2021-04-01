# # SignedMessageResponseRaw

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ecdsa** | **string** | Elliptic Curve Digital messageHash encoded as a base64 string | [optional] 
**schnorr** | **string** | Schnorr signature of the messageHash encoded as a base64 string, Note from libauth: Nonces are generated using RFC6979, where the Section 3.6, 16-byte ASCII \&quot;additional data\&quot; is set to Schnorr+SHA256, see https://libauth.org/interfaces/secp256k1.html#signmessagehashschnorr | [optional] 
**der** | **string** | Signature of messageHash using DER (Distinguished Encoding Rules) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


