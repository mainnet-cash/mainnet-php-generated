<?php
/**
 * WalletApiTest
 * PHP version 7.2
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Mainnet Cash
 *
 * A developer friendly bitcoin cash wallet api  This API is currently in *active* development, breaking changes may be made prior to official release of version 1.0.0.
 *
 * The version of the OpenAPI document: 1.1.27
 * Contact: hello@mainnet.cash
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Mainnet;

use \Mainnet\Configuration;
use \Mainnet\ApiException;
use \Mainnet\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * WalletApiTest Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WalletApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for balance
     *
     * Get total balance for wallet.
     *
     */
    public function testBalance()
    {
    }

    /**
     * Test case for createWallet
     *
     * create a new wallet.
     *
     */
    public function testCreateWallet()
    {
    }

    /**
     * Test case for depositAddress
     *
     * Get a deposit address in cash address format.
     *
     */
    public function testDepositAddress()
    {
    }

    /**
     * Test case for depositQr
     *
     * Get receiving cash address as a qrcode.
     *
     */
    public function testDepositQr()
    {
    }

    /**
     * Test case for encodeTransaction
     *
     * Encode and sign a transaction given a list of sendRequests, options and estimate fees.
     *
     */
    public function testEncodeTransaction()
    {
    }

    /**
     * Test case for getAllNftTokenBalances
     *
     * Get non-fungible token balance.
     *
     */
    public function testGetAllNftTokenBalances()
    {
    }

    /**
     * Test case for getAllTokenBalances
     *
     * Get non-fungible token balance.
     *
     */
    public function testGetAllTokenBalances()
    {
    }

    /**
     * Test case for getHistory
     *
     * Get a simplified list of transactions related to a wallet.
     *
     */
    public function testGetHistory()
    {
    }

    /**
     * Test case for getNftTokenBalance
     *
     * Get non-fungible token balance.
     *
     */
    public function testGetNftTokenBalance()
    {
    }

    /**
     * Test case for getTokenBalance
     *
     * Get fungible token balance.
     *
     */
    public function testGetTokenBalance()
    {
    }

    /**
     * Test case for getTokenUtxos
     *
     * Get token utxos.
     *
     */
    public function testGetTokenUtxos()
    {
    }

    /**
     * Test case for info
     *
     * Get information about a wallet.
     *
     */
    public function testInfo()
    {
    }

    /**
     * Test case for maxAmountToSend
     *
     * Get maximum spendable amount.
     *
     */
    public function testMaxAmountToSend()
    {
    }

    /**
     * Test case for namedExists
     *
     * Check if a named wallet already exists.
     *
     */
    public function testNamedExists()
    {
    }

    /**
     * Test case for replaceNamed
     *
     * Replace (recover) named wallet with a new walletId. If wallet with a provided name does not exist yet, it will be creted with a `walletId` supplied If wallet exists it will be overwritten without exception.
     *
     */
    public function testReplaceNamed()
    {
    }

    /**
     * Test case for send
     *
     * Send some amount to a given address.
     *
     */
    public function testSend()
    {
    }

    /**
     * Test case for sendMax
     *
     * Send all available funds to a given address.
     *
     */
    public function testSendMax()
    {
    }

    /**
     * Test case for submitTransaction
     *
     * submit an encoded and signed transaction to the network.
     *
     */
    public function testSubmitTransaction()
    {
    }

    /**
     * Test case for tokenBurn
     *
     * Perform an explicit token burn.
     *
     */
    public function testTokenBurn()
    {
    }

    /**
     * Test case for tokenDepositAddress
     *
     * Get a token aware deposit address in cash address format.
     *
     */
    public function testTokenDepositAddress()
    {
    }

    /**
     * Test case for tokenDepositQr
     *
     * Get receiving token aware cash address as a qrcode.
     *
     */
    public function testTokenDepositQr()
    {
    }

    /**
     * Test case for tokenGenesis
     *
     * Create new token category.
     *
     */
    public function testTokenGenesis()
    {
    }

    /**
     * Test case for tokenMint
     *
     * Mint new non-fungible tokens.
     *
     */
    public function testTokenMint()
    {
    }

    /**
     * Test case for utxos
     *
     * Get detailed information about unspent outputs (utxos).
     *
     */
    public function testUtxos()
    {
    }

    /**
     * Test case for xpubkeys
     *
     * A set of xpubkeys and paths for the wallet..
     *
     */
    public function testXpubkeys()
    {
    }
}
