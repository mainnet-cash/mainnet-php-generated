# Mainnet

A developer friendly bitcoin cash wallet api

This API is currently in *active* development, breaking changes may
be made prior to official release of version 1.0.0.


This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 0.3.9
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



$apiInstance = new Mainnet\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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
*ContractApi* | [**contractUtxos**](docs/Api/ContractApi.md#contractutxos) | **POST** /contract/utxos | List specific utxos on any contract
*ContractApi* | [**createContract**](docs/Api/ContractApi.md#createcontract) | **POST** /contract/create | Create a cashscript contract
*ContractEscrowApi* | [**createEscrow**](docs/Api/ContractEscrowApi.md#createescrow) | **POST** /contract/escrow/create | Create an escrow contract
*ContractEscrowApi* | [**escrowFn**](docs/Api/ContractEscrowApi.md#escrowfn) | **POST** /contract/escrow/call | Finalize an escrow contract
*FaucetApi* | [**getAddresses**](docs/Api/FaucetApi.md#getaddresses) | **POST** /faucet/get_addresses | Get addresses to return back or donate the testnet bch and tokens
*FaucetApi* | [**getTestnetBch**](docs/Api/FaucetApi.md#gettestnetbch) | **POST** /faucet/get_testnet_bch | Get testnet bch
*FaucetApi* | [**getTestnetSlp**](docs/Api/FaucetApi.md#gettestnetslp) | **POST** /faucet/get_testnet_slp | Get testnet slp tokens
*MineApi* | [**mine**](docs/Api/MineApi.md#mine) | **POST** /mine | Mine regtest coins to a specified address
*UtilApi* | [**convert**](docs/Api/UtilApi.md#convert) | **POST** /util/convert | convert between units
*WalletApi* | [**balance**](docs/Api/WalletApi.md#balance) | **POST** /wallet/balance | Get total balance for wallet
*WalletApi* | [**createWallet**](docs/Api/WalletApi.md#createwallet) | **POST** /wallet/create | create a new wallet
*WalletApi* | [**depositAddress**](docs/Api/WalletApi.md#depositaddress) | **POST** /wallet/deposit_address | Get a deposit address in cash address format
*WalletApi* | [**depositQr**](docs/Api/WalletApi.md#depositqr) | **POST** /wallet/deposit_qr | Get receiving cash address as a qrcode
*WalletApi* | [**info**](docs/Api/WalletApi.md#info) | **POST** /wallet/info | Get information about a wallet
*WalletApi* | [**maxAmountToSend**](docs/Api/WalletApi.md#maxamounttosend) | **POST** /wallet/max_amount_to_send | Get maximum spendable amount
*WalletApi* | [**send**](docs/Api/WalletApi.md#send) | **POST** /wallet/send | Send some amount to a given address
*WalletApi* | [**sendMax**](docs/Api/WalletApi.md#sendmax) | **POST** /wallet/send_max | Send all available funds to a given address
*WalletApi* | [**signedMessageSign**](docs/Api/WalletApi.md#signedmessagesign) | **POST** /wallet/signed/sign | Returns the message signature
*WalletApi* | [**signedMessageVerify**](docs/Api/WalletApi.md#signedmessageverify) | **POST** /wallet/signed/verify | Returns a boolean indicating whether message was valid for a given address
*WalletApi* | [**utxos**](docs/Api/WalletApi.md#utxos) | **POST** /wallet/utxo | Get detailed information about unspent outputs (utxos)
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
*WebhookApi* | [**watchAddress**](docs/Api/WebhookApi.md#watchaddress) | **POST** /webhook/watch_address | Create a webhook to watch cashaddress balance and transactions.


## Documentation For Models

 - [BalanceRequest](docs/Model/BalanceRequest.md)
 - [BalanceResponse](docs/Model/BalanceResponse.md)
 - [CashscriptReceipt](docs/Model/CashscriptReceipt.md)
 - [Contract](docs/Model/Contract.md)
 - [ContractFnRequest](docs/Model/ContractFnRequest.md)
 - [ContractFnResponse](docs/Model/ContractFnResponse.md)
 - [ContractRequest](docs/Model/ContractRequest.md)
 - [ContractResponse](docs/Model/ContractResponse.md)
 - [ConvertRequest](docs/Model/ConvertRequest.md)
 - [CreateSignedMessageRequest](docs/Model/CreateSignedMessageRequest.md)
 - [DepositAddressResponse](docs/Model/DepositAddressResponse.md)
 - [Error](docs/Model/Error.md)
 - [EscrowFnRequest](docs/Model/EscrowFnRequest.md)
 - [EscrowRequest](docs/Model/EscrowRequest.md)
 - [GetAddressesResponse](docs/Model/GetAddressesResponse.md)
 - [GetTestnetBchRequest](docs/Model/GetTestnetBchRequest.md)
 - [GetTestnetBchResponse](docs/Model/GetTestnetBchResponse.md)
 - [GetTestnetSlpRequest](docs/Model/GetTestnetSlpRequest.md)
 - [GetTestnetSlpResponse](docs/Model/GetTestnetSlpResponse.md)
 - [MaxAmountToSendRequest](docs/Model/MaxAmountToSendRequest.md)
 - [MineRequest](docs/Model/MineRequest.md)
 - [NetworkEnum](docs/Model/NetworkEnum.md)
 - [ScalableVectorGraphic](docs/Model/ScalableVectorGraphic.md)
 - [SendMaxRequest](docs/Model/SendMaxRequest.md)
 - [SendMaxResponse](docs/Model/SendMaxResponse.md)
 - [SendRequest](docs/Model/SendRequest.md)
 - [SendRequestItem](docs/Model/SendRequestItem.md)
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
 - [SlpTokenInfoResponseItem](docs/Model/SlpTokenInfoResponseItem.md)
 - [SlpUtxo](docs/Model/SlpUtxo.md)
 - [SlpUtxoResponse](docs/Model/SlpUtxoResponse.md)
 - [UnitType](docs/Model/UnitType.md)
 - [Utxo](docs/Model/Utxo.md)
 - [UtxoResponse](docs/Model/UtxoResponse.md)
 - [VerifySignedMessageRequest](docs/Model/VerifySignedMessageRequest.md)
 - [VerifySignedMessageResponse](docs/Model/VerifySignedMessageResponse.md)
 - [VerifySignedMessageResponseDetails](docs/Model/VerifySignedMessageResponseDetails.md)
 - [WalletInfo](docs/Model/WalletInfo.md)
 - [WalletMnemonic](docs/Model/WalletMnemonic.md)
 - [WalletRequest](docs/Model/WalletRequest.md)
 - [WalletResponse](docs/Model/WalletResponse.md)
 - [WalletType](docs/Model/WalletType.md)
 - [WatchAddressRequest](docs/Model/WatchAddressRequest.md)
 - [WatchAddressResponse](docs/Model/WatchAddressResponse.md)
 - [Wif](docs/Model/Wif.md)
 - [ZeroBalanceResponse](docs/Model/ZeroBalanceResponse.md)


## Documentation For Authorization

All endpoints do not require authorization.

## Author

hello@mainnet.cash

