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
 * The version of the OpenAPI document: 0.4.30
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
     * Test case for signedMessageSign
     *
     * Returns the message signature.
     *
     */
    public function testSignedMessageSign()
    {
    }

    /**
     * Test case for signedMessageVerify
     *
     * Returns a boolean indicating whether message was valid for a given address.
     *
     */
    public function testSignedMessageVerify()
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
}
