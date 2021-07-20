# # EscrowInfoResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**escrow_contract_id** | **string** | serialized escrow contract | [optional] 
**script** | **string** | The escrow contract in cashscript syntax | [optional] 
**parameters** | **string[]** | Parameters passed when the contract was created | [optional] 
**cashaddr** | **string** |  | [optional] 
**buyer_addr** | **mixed** | The cashaddress of the buyer | [optional] 
**arbiter_addr** | **mixed** | The cashaddress of the arbiter | [optional] 
**seller_addr** | **mixed** | The cashaddress of the seller | [optional] 
**amount** | **float** | Numeric amount to be transferred by the contract in satoshi, amount must be less than 21 BCH. | [optional] 
**nonce** | **float** | A unique number used once for each instance of a contract. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


