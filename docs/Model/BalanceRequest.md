# # BalanceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet_id** | **string** | The walletId to get a balance for. | 
**slp_aware** | **bool** | If you have any SLP tokens on the address, you should set &#x60;slpAware&#x60; to &#x60;true&#x60; to prevent accidental token burning This flag activates utxo checking against an external slp indexer So far this option is not switched on by default | [optional] [default to false]
**slp_semi_aware** | **bool** | This flag requires an utxo to have more than 546 sats to be spendable and counted in the balance This option is not switched on by default | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


