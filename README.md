# Mainnet

A developer friendly bitcoin cash wallet api

This API is currently in *active* development, breaking changes may
be made prior to official release of version 1.0.0.


This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.1.8
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 7.2 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/mainnet-cash/mainnet-php-generated.git"
    }
  ],
  "require": {
    "mainnet-cash/mainnet-php-generated": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/Mainnet/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: bearerAuth
$config = Mainnet\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mainnet\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_fn_request = {"contractId":"testnet:TURNME1UQmxaakEwT0dJelpHRXpOVEUzT1RObU5tVmtNVFJqWXpKbVpHVTBOakJpWldOak5XSTJOVGhrT1RFek9EUTBNMkk1WVRNd01EQTNNRGRoTm1FMzpNRE0wT1RjNFlXTTBOalJtTXpVNFlqSXpOV1l4TVRJeE1tVmlObVV3TVRkaFpqa3dNakUxWWprd1lqRm1aamMwTnpGa09XRmxNbUZpWWpWbE1Ea3lOak5pOk1qRTE=:Y29udHJhY3QgVHJhbnNmZXJXaXRoVGltZW91dChwdWJrZXkgc2VuZGVyLCBwdWJrZXkgcmVjaXBpZW50LCBpbnQgdGltZW91dCkgewogICAgZnVuY3Rpb24gdHJhbnNmZXIoc2lnIHJlY2lwaWVudFNpZykgewogICAgICAgIHJlcXVpcmUoY2hlY2tTaWcocmVjaXBpZW50U2lnLCByZWNpcGllbnQpKTsKICAgIH0KCiAgICBmdW5jdGlvbiB0aW1lb3V0KHNpZyBzZW5kZXJTaWcpIHsKICAgICAgICByZXF1aXJlKGNoZWNrU2lnKHNlbmRlclNpZywgc2VuZGVyKSk7CiAgICAgICAgcmVxdWlyZSh0eC50aW1lID49IHRpbWVvdXQpOwogICAgfQp9Cg==:1996128042","action":"send","function":"timeout","to":{"unit":"sat","cashaddr":"bchtest:qpalhxhl05mlhms3ys43u76rn0ttdv3qg2usm4nm7t","value":2000},"feePerByte":1}; // \Mainnet\Model\ContractFnRequest | Request a new cashscript contract

try {
    $result = $apiInstance->contractFn($contract_fn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->contractFn: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://rest-unstable.mainnet.cash*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContractApi* | [**contractFn**](docs/Api/ContractApi.md#contractfn) | **POST** /contract/call | Call a method on a contract
*ContractApi* | [**contractInfo**](docs/Api/ContractApi.md#contractinfo) | **POST** /contract/info | Get information about a contract from the contractId
*ContractApi* | [**contractUtxos**](docs/Api/ContractApi.md#contractutxos) | **POST** /contract/utxos | List specific utxos on any contract
*ContractApi* | [**createContract**](docs/Api/ContractApi.md#createcontract) | **POST** /contract/create | Create a cashscript contract
*ContractEscrowApi* | [**createEscrow**](docs/Api/ContractEscrowApi.md#createescrow) | **POST** /contract/escrow/create | Create an escrow contract
*ContractEscrowApi* | [**escrowFn**](docs/Api/ContractEscrowApi.md#escrowfn) | **POST** /contract/escrow/call | Finalize an escrow contract
*ContractEscrowApi* | [**escrowInfo**](docs/Api/ContractEscrowApi.md#escrowinfo) | **POST** /contract/escrow/info | Get information about an escrow contract from the escrowContractId
*ContractEscrowApi* | [**escrowUtxos**](docs/Api/ContractEscrowApi.md#escrowutxos) | **POST** /contract/escrow/utxos | List specific utxos on any escrow contract
*FaucetApi* | [**getAddresses**](docs/Api/FaucetApi.md#getaddresses) | **POST** /faucet/get_addresses | Get addresses to return back or donate the testnet bch and tokens
*FaucetApi* | [**getTestnetBch**](docs/Api/FaucetApi.md#gettestnetbch) | **POST** /faucet/get_testnet_bch | Get testnet bch
*FaucetApi* | [**getTestnetSbch**](docs/Api/FaucetApi.md#gettestnetsbch) | **POST** /faucet/get_testnet_sbch | Request testnet SmartBCH funds. The request is enqueued and served within 1-3 block confirmations. If the target address holds more that 0.1 BCH, the request will fail. Otherwise the address will be topped up to 0.1 BCH.
*FaucetApi* | [**getTestnetSep20**](docs/Api/FaucetApi.md#gettestnetsep20) | **POST** /faucet/get_testnet_sep20 | Request testnet SmartBch SEP20 tokens. The request is enqueued and served within 1-3 block confirmations. If the target address holds more that 10 tokens of requested kind, the request will fail. Otherwise the address will be topped up to 10 tokens.
*FaucetApi* | [**getTestnetSlp**](docs/Api/FaucetApi.md#gettestnetslp) | **POST** /faucet/get_testnet_slp | Get testnet slp tokens
*MineApi* | [**mine**](docs/Api/MineApi.md#mine) | **POST** /mine | Mine regtest coins to a specified address
*SmartbchContractApi* | [**smartBchContractCall**](docs/Api/SmartbchContractApi.md#smartbchcontractcall) | **POST** /smartbch/contract/call | Call a SmartBch contract function
*SmartbchContractApi* | [**smartBchContractCreate**](docs/Api/SmartbchContractApi.md#smartbchcontractcreate) | **POST** /smartbch/contract/create | Create a SmartBch contractId
*SmartbchContractApi* | [**smartBchContractDeploy**](docs/Api/SmartbchContractApi.md#smartbchcontractdeploy) | **POST** /smartbch/contract/deploy | Request to deploy a SmartBch contract
*SmartbchContractApi* | [**smartBchContractEstimateGas**](docs/Api/SmartbchContractApi.md#smartbchcontractestimategas) | **POST** /smartbch/contract/estimate_gas | Estimate the gas for a contract interaction function given the arguments
*SmartbchContractApi* | [**smartBchContractInfo**](docs/Api/SmartbchContractApi.md#smartbchcontractinfo) | **POST** /smartbch/contract/info | Get information about a SmartBch contract from the contractId
*SmartbchSep20Api* | [**smartBchSep20AllBalances**](docs/Api/SmartbchSep20Api.md#smartbchsep20allbalances) | **POST** /smartbch/sep20/all_balances | Get all SmartBch SEP20 balances of the wallet
*SmartbchSep20Api* | [**smartBchSep20Balance**](docs/Api/SmartbchSep20Api.md#smartbchsep20balance) | **POST** /smartbch/sep20/balance | Get total SmartBch SEP20 token balance of the wallet
*SmartbchSep20Api* | [**smartBchSep20DepositAddress**](docs/Api/SmartbchSep20Api.md#smartbchsep20depositaddress) | **POST** /smartbch/sep20/deposit_address | Get an SmartBch SEP20 deposit address
*SmartbchSep20Api* | [**smartBchSep20DepositQr**](docs/Api/SmartbchSep20Api.md#smartbchsep20depositqr) | **POST** /smartbch/sep20/deposit_qr | Get an SmartBch SEP20 receiving address as a qrcode
*SmartbchSep20Api* | [**smartBchSep20Genesis**](docs/Api/SmartbchSep20Api.md#smartbchsep20genesis) | **POST** /smartbch/sep20/genesis | Get created tokenId back and new SmartBch SEP20 token balance of the wallet
*SmartbchSep20Api* | [**smartBchSep20Mint**](docs/Api/SmartbchSep20Api.md#smartbchsep20mint) | **POST** /smartbch/sep20/mint | Get created tokenId back and new SmartBch SEP20 token balance of the wallet
*SmartbchSep20Api* | [**smartBchSep20Send**](docs/Api/SmartbchSep20Api.md#smartbchsep20send) | **POST** /smartbch/sep20/send | Send some SmartBch SEP20 token amount to a given address
*SmartbchSep20Api* | [**smartBchSep20SendMax**](docs/Api/SmartbchSep20Api.md#smartbchsep20sendmax) | **POST** /smartbch/sep20/send_max | Send all available SmartBch SEP20 token funds to a given address
*SmartbchSep20Api* | [**smartBchSep20TokenInfo**](docs/Api/SmartbchSep20Api.md#smartbchsep20tokeninfo) | **POST** /smartbch/sep20/token_info | Get information about the SmartBch SEP20 token
*SmartbchWalletApi* | [**smartbchBalance**](docs/Api/SmartbchWalletApi.md#smartbchbalance) | **POST** /smartbch/wallet/balance | Get total balance for wallet
*SmartbchWalletApi* | [**smartbchCreateWallet**](docs/Api/SmartbchWalletApi.md#smartbchcreatewallet) | **POST** /smartbch/wallet/create | create a new wallet
*SmartbchWalletApi* | [**smartbchDepositAddress**](docs/Api/SmartbchWalletApi.md#smartbchdepositaddress) | **POST** /smartbch/wallet/deposit_address | Get a deposit address
*SmartbchWalletApi* | [**smartbchDepositQr**](docs/Api/SmartbchWalletApi.md#smartbchdepositqr) | **POST** /smartbch/wallet/deposit_qr | Get receiving cash address as a qrcode
*SmartbchWalletApi* | [**smartbchMaxAmountToSend**](docs/Api/SmartbchWalletApi.md#smartbchmaxamounttosend) | **POST** /smartbch/wallet/max_amount_to_send | Get maximum spendable amount
*SmartbchWalletApi* | [**smartbchSend**](docs/Api/SmartbchWalletApi.md#smartbchsend) | **POST** /smartbch/wallet/send | Send some amount to a given address
*SmartbchWalletApi* | [**smartbchSendMax**](docs/Api/SmartbchWalletApi.md#smartbchsendmax) | **POST** /smartbch/wallet/send_max | Send all available funds to a given address
*SmartbchWalletApi* | [**smartbchSignedMessageSign**](docs/Api/SmartbchWalletApi.md#smartbchsignedmessagesign) | **POST** /smartbch/wallet/signed/sign | Returns the message signature
*SmartbchWalletApi* | [**smartbchSignedMessageVerify**](docs/Api/SmartbchWalletApi.md#smartbchsignedmessageverify) | **POST** /smartbch/wallet/signed/verify | Returns a boolean indicating whether message was valid for a given address
*UtilApi* | [**convert**](docs/Api/UtilApi.md#convert) | **POST** /util/convert | convert between units
*UtilApi* | [**getAddrsByXpubKey**](docs/Api/UtilApi.md#getaddrsbyxpubkey) | **POST** /util/get_addrs_by_xpubkey | Derive heristic determined addresses from an extended public key, per BIP32
*UtilApi* | [**getXpubKeyInfo**](docs/Api/UtilApi.md#getxpubkeyinfo) | **POST** /util/get_xpubkey_info | Decode information about an extended public key, per BIP32
*WalletApi* | [**balance**](docs/Api/WalletApi.md#balance) | **POST** /wallet/balance | Get total balance for wallet
*WalletApi* | [**createWallet**](docs/Api/WalletApi.md#createwallet) | **POST** /wallet/create | create a new wallet
*WalletApi* | [**depositAddress**](docs/Api/WalletApi.md#depositaddress) | **POST** /wallet/deposit_address | Get a deposit address in cash address format
*WalletApi* | [**depositQr**](docs/Api/WalletApi.md#depositqr) | **POST** /wallet/deposit_qr | Get receiving cash address as a qrcode
*WalletApi* | [**encodeTransaction**](docs/Api/WalletApi.md#encodetransaction) | **POST** /wallet/encode_transaction | Encode and sign a transaction given a list of sendRequests, options and estimate fees
*WalletApi* | [**getAllNftTokenBalances**](docs/Api/WalletApi.md#getallnfttokenbalances) | **POST** /wallet/get_all_nft_token_balances | Get non-fungible token balance
*WalletApi* | [**getAllTokenBalances**](docs/Api/WalletApi.md#getalltokenbalances) | **POST** /wallet/get_all_token_balances | Get non-fungible token balance
*WalletApi* | [**getHistory**](docs/Api/WalletApi.md#gethistory) | **POST** /wallet/get_history | Get a simplified list of transactions related to a wallet
*WalletApi* | [**getNftTokenBalance**](docs/Api/WalletApi.md#getnfttokenbalance) | **POST** /wallet/get_nft_token_balance | Get non-fungible token balance
*WalletApi* | [**getTokenBalance**](docs/Api/WalletApi.md#gettokenbalance) | **POST** /wallet/get_token_balance | Get fungible token balance
*WalletApi* | [**getTokenUtxos**](docs/Api/WalletApi.md#gettokenutxos) | **POST** /wallet/get_token_utxos | Get token utxos
*WalletApi* | [**info**](docs/Api/WalletApi.md#info) | **POST** /wallet/info | Get information about a wallet
*WalletApi* | [**maxAmountToSend**](docs/Api/WalletApi.md#maxamounttosend) | **POST** /wallet/max_amount_to_send | Get maximum spendable amount
*WalletApi* | [**namedExists**](docs/Api/WalletApi.md#namedexists) | **POST** /wallet/named_exists | Check if a named wallet already exists
*WalletApi* | [**replaceNamed**](docs/Api/WalletApi.md#replacenamed) | **POST** /wallet/replace_named | Replace (recover) named wallet with a new walletId. If wallet with a provided name does not exist yet, it will be creted with a &#x60;walletId&#x60; supplied If wallet exists it will be overwritten without exception
*WalletApi* | [**send**](docs/Api/WalletApi.md#send) | **POST** /wallet/send | Send some amount to a given address
*WalletApi* | [**sendMax**](docs/Api/WalletApi.md#sendmax) | **POST** /wallet/send_max | Send all available funds to a given address
*WalletApi* | [**submitTransaction**](docs/Api/WalletApi.md#submittransaction) | **POST** /wallet/submit_transaction | submit an encoded and signed transaction to the network
*WalletApi* | [**tokenBurn**](docs/Api/WalletApi.md#tokenburn) | **POST** /wallet/token_burn | Perform an explicit token burn
*WalletApi* | [**tokenDepositAddress**](docs/Api/WalletApi.md#tokendepositaddress) | **POST** /wallet/token_deposit_address | Get a token aware deposit address in cash address format
*WalletApi* | [**tokenDepositQr**](docs/Api/WalletApi.md#tokendepositqr) | **POST** /wallet/token_deposit_qr | Get receiving token aware cash address as a qrcode
*WalletApi* | [**tokenGenesis**](docs/Api/WalletApi.md#tokengenesis) | **POST** /wallet/token_genesis | Create new token category
*WalletApi* | [**tokenMint**](docs/Api/WalletApi.md#tokenmint) | **POST** /wallet/token_mint | Mint new non-fungible tokens
*WalletApi* | [**utxos**](docs/Api/WalletApi.md#utxos) | **POST** /wallet/utxo | Get detailed information about unspent outputs (utxos)
*WalletApi* | [**xpubkeys**](docs/Api/WalletApi.md#xpubkeys) | **POST** /wallet/xpubkeys | A set of xpubkeys and paths for the wallet.
*WalletBcmrApi* | [**bcmrAddMetadataRegistryAuthChain**](docs/Api/WalletBcmrApi.md#bcmraddmetadataregistryauthchain) | **POST** /wallet/bcmr/add_registry_authchain | Add BCMR metadata registry from autchain, returning the built chain
*WalletBcmrApi* | [**bcmrAddRegistry**](docs/Api/WalletBcmrApi.md#bcmraddregistry) | **POST** /wallet/bcmr/add_registry | Add BCMR registry from parameter
*WalletBcmrApi* | [**bcmrAddRegistryFromUri**](docs/Api/WalletBcmrApi.md#bcmraddregistryfromuri) | **POST** /wallet/bcmr/add_registry_from_uri | Reset tracked BCMR registries
*WalletBcmrApi* | [**bcmrBuildAuthChain**](docs/Api/WalletBcmrApi.md#bcmrbuildauthchain) | **POST** /wallet/bcmr/build_authchain | Build a BCMR authchain
*WalletBcmrApi* | [**bcmrGetRegistries**](docs/Api/WalletBcmrApi.md#bcmrgetregistries) | **POST** /wallet/bcmr/get_registries | Get tracked BCMR registries
*WalletBcmrApi* | [**bcmrGetTokenInfo**](docs/Api/WalletBcmrApi.md#bcmrgettokeninfo) | **POST** /wallet/bcmr/get_token_info | Get token info
*WalletBcmrApi* | [**bcmrResetRegistries**](docs/Api/WalletBcmrApi.md#bcmrresetregistries) | **POST** /wallet/bcmr/reset_registries | Reset tracked BCMR registries
*WalletSignedApi* | [**signedMessageSign**](docs/Api/WalletSignedApi.md#signedmessagesign) | **POST** /wallet/signed/sign | Returns the message signature
*WalletSignedApi* | [**signedMessageVerify**](docs/Api/WalletSignedApi.md#signedmessageverify) | **POST** /wallet/signed/verify | Returns a boolean indicating whether message was valid for a given address
*WalletSlpApi* | [**nftChildGenesis**](docs/Api/WalletSlpApi.md#nftchildgenesis) | **POST** /wallet/slp/nft_child_genesis | Get created tokenId back and new NFT child token balance of the wallet
*WalletSlpApi* | [**nftParentGenesis**](docs/Api/WalletSlpApi.md#nftparentgenesis) | **POST** /wallet/slp/nft_parent_genesis | Get created tokenId back and new NFT token balance of the wallet
*WalletSlpApi* | [**slpAllBalances**](docs/Api/WalletSlpApi.md#slpallbalances) | **POST** /wallet/slp/all_balances | Get all slp balances of the wallet
*WalletSlpApi* | [**slpBalance**](docs/Api/WalletSlpApi.md#slpbalance) | **POST** /wallet/slp/balance | Get total slp token balance of the wallet
*WalletSlpApi* | [**slpCreateWallet**](docs/Api/WalletSlpApi.md#slpcreatewallet) | **POST** /wallet/slp/create | create a new SLP wallet
*WalletSlpApi* | [**slpDepositAddress**](docs/Api/WalletSlpApi.md#slpdepositaddress) | **POST** /wallet/slp/deposit_address | Get an SLP deposit address in cash address format
*WalletSlpApi* | [**slpDepositQr**](docs/Api/WalletSlpApi.md#slpdepositqr) | **POST** /wallet/slp/deposit_qr | Get an SLP receiving cash address as a qrcode
*WalletSlpApi* | [**slpGenesis**](docs/Api/WalletSlpApi.md#slpgenesis) | **POST** /wallet/slp/genesis | Get created tokenId back and new slp token balance of the wallet
*WalletSlpApi* | [**slpMint**](docs/Api/WalletSlpApi.md#slpmint) | **POST** /wallet/slp/mint | Get created tokenId back and new slp token balance of the wallet
*WalletSlpApi* | [**slpOutpoints**](docs/Api/WalletSlpApi.md#slpoutpoints) | **POST** /wallet/slp/outpoints | Get list of unspent SLP outpoints.
*WalletSlpApi* | [**slpSend**](docs/Api/WalletSlpApi.md#slpsend) | **POST** /wallet/slp/send | Send some SLP token amount to a given cash address
*WalletSlpApi* | [**slpSendMax**](docs/Api/WalletSlpApi.md#slpsendmax) | **POST** /wallet/slp/send_max | Send all available SLP funds to a given address
*WalletSlpApi* | [**slpTokenInfo**](docs/Api/WalletSlpApi.md#slptokeninfo) | **POST** /wallet/slp/token_info | Get information about the token
*WalletSlpApi* | [**slpUtxos**](docs/Api/WalletSlpApi.md#slputxos) | **POST** /wallet/slp/utxo | Get detailed information about unspent SLP outputs (utxos)
*WalletUtilApi* | [**utilDecodeTransaction**](docs/Api/WalletUtilApi.md#utildecodetransaction) | **POST** /wallet/util/decode_transaction | Decode a bitcoin transaction. Accepts both transaction hash or raw transaction in hex format.
*WalletUtilApi* | [**utilGetRawTransaction**](docs/Api/WalletUtilApi.md#utilgetrawtransaction) | **POST** /wallet/util/get_raw_transaction | Get bitcoin raw transaction
*WebhookApi* | [**watchAddress**](docs/Api/WebhookApi.md#watchaddress) | **POST** /webhook/watch_address | Create a webhook to watch cashaddress balance and transactions.


## Documentation For Models

 - [AuthChainElement](docs/Model/AuthChainElement.md)
 - [BalanceRequest](docs/Model/BalanceRequest.md)
 - [BalanceResponse](docs/Model/BalanceResponse.md)
 - [CashscriptReceipt](docs/Model/CashscriptReceipt.md)
 - [Contract](docs/Model/Contract.md)
 - [ContractFnRequest](docs/Model/ContractFnRequest.md)
 - [ContractFnResponse](docs/Model/ContractFnResponse.md)
 - [ContractInfoRequest](docs/Model/ContractInfoRequest.md)
 - [ContractInfoResponse](docs/Model/ContractInfoResponse.md)
 - [ContractRequest](docs/Model/ContractRequest.md)
 - [ContractResponse](docs/Model/ContractResponse.md)
 - [ConvertRequest](docs/Model/ConvertRequest.md)
 - [CreateSignedMessageRequest](docs/Model/CreateSignedMessageRequest.md)
 - [DepositAddressResponse](docs/Model/DepositAddressResponse.md)
 - [ElectrumRawTransaction](docs/Model/ElectrumRawTransaction.md)
 - [ElectrumRawTransactionScriptPubKey](docs/Model/ElectrumRawTransactionScriptPubKey.md)
 - [ElectrumRawTransactionScriptSig](docs/Model/ElectrumRawTransactionScriptSig.md)
 - [ElectrumRawTransactionVin](docs/Model/ElectrumRawTransactionVin.md)
 - [ElectrumRawTransactionVout](docs/Model/ElectrumRawTransactionVout.md)
 - [EncodeTransactionRequest](docs/Model/EncodeTransactionRequest.md)
 - [EncodeTransactionResponse](docs/Model/EncodeTransactionResponse.md)
 - [Error](docs/Model/Error.md)
 - [EscrowContract](docs/Model/EscrowContract.md)
 - [EscrowFnRequest](docs/Model/EscrowFnRequest.md)
 - [EscrowInfoRequest](docs/Model/EscrowInfoRequest.md)
 - [EscrowInfoResponse](docs/Model/EscrowInfoResponse.md)
 - [EscrowRequest](docs/Model/EscrowRequest.md)
 - [EscrowResponse](docs/Model/EscrowResponse.md)
 - [GetAddressesResponse](docs/Model/GetAddressesResponse.md)
 - [GetAddrsByXpubKeyRequest](docs/Model/GetAddrsByXpubKeyRequest.md)
 - [GetTestnetBchRequest](docs/Model/GetTestnetBchRequest.md)
 - [GetTestnetBchResponse](docs/Model/GetTestnetBchResponse.md)
 - [GetTestnetSbchRequest](docs/Model/GetTestnetSbchRequest.md)
 - [GetTestnetSbchResponse](docs/Model/GetTestnetSbchResponse.md)
 - [GetTestnetSep20Request](docs/Model/GetTestnetSep20Request.md)
 - [GetTestnetSep20Response](docs/Model/GetTestnetSep20Response.md)
 - [GetTestnetSlpRequest](docs/Model/GetTestnetSlpRequest.md)
 - [GetTestnetSlpResponse](docs/Model/GetTestnetSlpResponse.md)
 - [GetXpubKeyInfoRequest](docs/Model/GetXpubKeyInfoRequest.md)
 - [GetXpubKeyInfoResponse](docs/Model/GetXpubKeyInfoResponse.md)
 - [HistoryRequest](docs/Model/HistoryRequest.md)
 - [HistoryResponse](docs/Model/HistoryResponse.md)
 - [InlineObject](docs/Model/InlineObject.md)
 - [InlineObject1](docs/Model/InlineObject1.md)
 - [InlineObject2](docs/Model/InlineObject2.md)
 - [InlineObject3](docs/Model/InlineObject3.md)
 - [InlineObject4](docs/Model/InlineObject4.md)
 - [MaxAmountToSendRequest](docs/Model/MaxAmountToSendRequest.md)
 - [MineRequest](docs/Model/MineRequest.md)
 - [NetworkEnum](docs/Model/NetworkEnum.md)
 - [OpReturnData](docs/Model/OpReturnData.md)
 - [ScalableVectorGraphic](docs/Model/ScalableVectorGraphic.md)
 - [SendMaxRequest](docs/Model/SendMaxRequest.md)
 - [SendMaxResponse](docs/Model/SendMaxResponse.md)
 - [SendRequest](docs/Model/SendRequest.md)
 - [SendRequestItem](docs/Model/SendRequestItem.md)
 - [SendRequestItemAnyOf](docs/Model/SendRequestItemAnyOf.md)
 - [SendRequestOptions](docs/Model/SendRequestOptions.md)
 - [SendResponse](docs/Model/SendResponse.md)
 - [SerializedWallet](docs/Model/SerializedWallet.md)
 - [SignedMessageResponse](docs/Model/SignedMessageResponse.md)
 - [SignedMessageResponseDetails](docs/Model/SignedMessageResponseDetails.md)
 - [SignedMessageResponseRaw](docs/Model/SignedMessageResponseRaw.md)
 - [SlpBalanceRequest](docs/Model/SlpBalanceRequest.md)
 - [SlpBalanceResponse](docs/Model/SlpBalanceResponse.md)
 - [SlpDepositAddressResponse](docs/Model/SlpDepositAddressResponse.md)
 - [SlpGenesisRequest](docs/Model/SlpGenesisRequest.md)
 - [SlpGenesisResponse](docs/Model/SlpGenesisResponse.md)
 - [SlpMintRequest](docs/Model/SlpMintRequest.md)
 - [SlpMintResponse](docs/Model/SlpMintResponse.md)
 - [SlpOutpointsResponse](docs/Model/SlpOutpointsResponse.md)
 - [SlpSendMaxRequest](docs/Model/SlpSendMaxRequest.md)
 - [SlpSendRequest](docs/Model/SlpSendRequest.md)
 - [SlpSendRequestItem](docs/Model/SlpSendRequestItem.md)
 - [SlpSendRequestOptions](docs/Model/SlpSendRequestOptions.md)
 - [SlpSendResponse](docs/Model/SlpSendResponse.md)
 - [SlpTokenInfoRequest](docs/Model/SlpTokenInfoRequest.md)
 - [SlpTokenInfoResponse](docs/Model/SlpTokenInfoResponse.md)
 - [SlpUtxo](docs/Model/SlpUtxo.md)
 - [SlpUtxoResponse](docs/Model/SlpUtxoResponse.md)
 - [SmartBchContractDeployRequest](docs/Model/SmartBchContractDeployRequest.md)
 - [SmartBchContractDeployResponse](docs/Model/SmartBchContractDeployResponse.md)
 - [SmartBchContractEstimateGasRequest](docs/Model/SmartBchContractEstimateGasRequest.md)
 - [SmartBchContractEstimateGasResponse](docs/Model/SmartBchContractEstimateGasResponse.md)
 - [SmartBchContractFnCallRequest](docs/Model/SmartBchContractFnCallRequest.md)
 - [SmartBchContractFnCallResponse](docs/Model/SmartBchContractFnCallResponse.md)
 - [SmartBchContractInfoRequest](docs/Model/SmartBchContractInfoRequest.md)
 - [SmartBchContractInfoResponse](docs/Model/SmartBchContractInfoResponse.md)
 - [SmartBchContractRequest](docs/Model/SmartBchContractRequest.md)
 - [SmartBchContractResponse](docs/Model/SmartBchContractResponse.md)
 - [SmartBchDepositAddressResponse](docs/Model/SmartBchDepositAddressResponse.md)
 - [SmartBchMaxAmountToSendRequest](docs/Model/SmartBchMaxAmountToSendRequest.md)
 - [SmartBchOverrides](docs/Model/SmartBchOverrides.md)
 - [SmartBchSendMaxRequest](docs/Model/SmartBchSendMaxRequest.md)
 - [SmartBchSendRequest](docs/Model/SmartBchSendRequest.md)
 - [SmartBchSendRequestItem](docs/Model/SmartBchSendRequestItem.md)
 - [SmartBchSendRequestItemAnyOf](docs/Model/SmartBchSendRequestItemAnyOf.md)
 - [SmartBchSendRequestOptions](docs/Model/SmartBchSendRequestOptions.md)
 - [SmartBchSendResponseItem](docs/Model/SmartBchSendResponseItem.md)
 - [SmartBchSep20AllBalancesRequest](docs/Model/SmartBchSep20AllBalancesRequest.md)
 - [SmartBchSep20BalanceRequest](docs/Model/SmartBchSep20BalanceRequest.md)
 - [SmartBchSep20BalanceResponse](docs/Model/SmartBchSep20BalanceResponse.md)
 - [SmartBchSep20GenesisRequest](docs/Model/SmartBchSep20GenesisRequest.md)
 - [SmartBchSep20GenesisResponse](docs/Model/SmartBchSep20GenesisResponse.md)
 - [SmartBchSep20MintRequest](docs/Model/SmartBchSep20MintRequest.md)
 - [SmartBchSep20MintResponse](docs/Model/SmartBchSep20MintResponse.md)
 - [SmartBchSep20SendMaxRequest](docs/Model/SmartBchSep20SendMaxRequest.md)
 - [SmartBchSep20SendRequest](docs/Model/SmartBchSep20SendRequest.md)
 - [SmartBchSep20SendRequestItem](docs/Model/SmartBchSep20SendRequestItem.md)
 - [SmartBchSep20TokenInfoRequest](docs/Model/SmartBchSep20TokenInfoRequest.md)
 - [SmartBchSep20TokenInfoResponse](docs/Model/SmartBchSep20TokenInfoResponse.md)
 - [SmartBchTransactionReceipt](docs/Model/SmartBchTransactionReceipt.md)
 - [SubmitTransactionRequest](docs/Model/SubmitTransactionRequest.md)
 - [SubmitTransactionResponse](docs/Model/SubmitTransactionResponse.md)
 - [TokenBurnRequest](docs/Model/TokenBurnRequest.md)
 - [TokenGenesisRequest](docs/Model/TokenGenesisRequest.md)
 - [TokenMintRequest](docs/Model/TokenMintRequest.md)
 - [TokenMintRequestRequests](docs/Model/TokenMintRequestRequests.md)
 - [TokenSendRequest](docs/Model/TokenSendRequest.md)
 - [TransactionHistoryItem](docs/Model/TransactionHistoryItem.md)
 - [UnitType](docs/Model/UnitType.md)
 - [UtilDecodeTransactionRequest](docs/Model/UtilDecodeTransactionRequest.md)
 - [Utxo](docs/Model/Utxo.md)
 - [UtxoToken](docs/Model/UtxoToken.md)
 - [VerifySignedMessageRequest](docs/Model/VerifySignedMessageRequest.md)
 - [VerifySignedMessageResponse](docs/Model/VerifySignedMessageResponse.md)
 - [VerifySignedMessageResponseDetails](docs/Model/VerifySignedMessageResponseDetails.md)
 - [WalletInfo](docs/Model/WalletInfo.md)
 - [WalletMnemonic](docs/Model/WalletMnemonic.md)
 - [WalletNamedExistsRequest](docs/Model/WalletNamedExistsRequest.md)
 - [WalletReplaceNamedRequest](docs/Model/WalletReplaceNamedRequest.md)
 - [WalletRequest](docs/Model/WalletRequest.md)
 - [WalletResponse](docs/Model/WalletResponse.md)
 - [WalletType](docs/Model/WalletType.md)
 - [WatchAddressRequest](docs/Model/WatchAddressRequest.md)
 - [WatchAddressResponse](docs/Model/WatchAddressResponse.md)
 - [Wif](docs/Model/Wif.md)
 - [XPubKey](docs/Model/XPubKey.md)
 - [XPubKeyRequest](docs/Model/XPubKeyRequest.md)
 - [XPubKeyResponse](docs/Model/XPubKeyResponse.md)
 - [ZeroBalanceResponse](docs/Model/ZeroBalanceResponse.md)


## Documentation For Authorization



## bearerAuth


- **Type**: Bearer authentication


## Author

hello@mainnet.cash

