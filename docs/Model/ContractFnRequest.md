# # ContractFnRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract_id** | **string** | serialized contract | 
**action** | **string** | In addition to &#x60;send&#x60;ing the built transaction, the built transaction hex may be returned (without broadcasting) with &#x60;build&#x60; action. | [optional] [default to 'send']
**function** | **string** | Function to call on the cashscript contract. | 
**arguments** | **string[]** | Arguments for the contract function call as strings.  Binary data should be passed as hexidecimal.  Signatures may be passed as wallet import format (WIF) or wallet strings (walletId). Cashscript expects &#x60;pubkey&#x60;s to be compressed 35 byte values. | [optional] 
**to** | [**AnyOfSendRequestItemArrayCashscriptReceiptArray**](AnyOfSendRequestItemArrayCashscriptReceiptArray.md) | The output destination, as a SendRequest, cashscript style output(s), array of either. | 
**utxo_ids** | **string[]** | Serialized utxoId(s) to spend from | [optional] 
**op_return** | **string[]** | Add OP_RETURN outputs to the transaction. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withopreturn) | [optional] 
**fee_per_byte** | **float** | The withFeePerByte() function allows you to specify the fee per per bytes for the transaction. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withfeeperbyte) | [optional] 
**hardcoded_fee** | **float** | Specify a hardcoded fee to the transaction. By default the transaction fee is automatically calculated by the CashScript SDK. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withhardcodedfee) | [optional] 
**min_change** | **float** | Set a threshold for including a change output. Any remaining amount under this threshold will be added to the transaction fee instead. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withminchange) | [optional] 
**without_change** | **bool** | Disable the change output. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withoutchange) | [optional] [default to false]
**age** | **float** | Specify the minimum age of the transaction inputs. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withage) | [optional] 
**time** | **float** | Specify the minimum block number that the transaction can be included in. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withtime) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


