<?php
/**
 * FaucetApiTest
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
 * The version of the OpenAPI document: 1.1.34-alpha.0
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
 * FaucetApiTest Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FaucetApiTest extends TestCase
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
     * Test case for getAddresses
     *
     * Get addresses to return back or donate the testnet bch and tokens.
     *
     */
    public function testGetAddresses()
    {
    }

    /**
     * Test case for getTestnetBch
     *
     * Get testnet bch.
     *
     */
    public function testGetTestnetBch()
    {
    }

    /**
     * Test case for getTestnetSbch
     *
     * Request testnet SmartBCH funds. The request is enqueued and served within 1-3 block confirmations. If the target address holds more that 0.1 BCH, the request will fail. Otherwise the address will be topped up to 0.1 BCH..
     *
     */
    public function testGetTestnetSbch()
    {
    }

    /**
     * Test case for getTestnetSep20
     *
     * Request testnet SmartBch SEP20 tokens. The request is enqueued and served within 1-3 block confirmations. If the target address holds more that 10 tokens of requested kind, the request will fail. Otherwise the address will be topped up to 10 tokens..
     *
     */
    public function testGetTestnetSep20()
    {
    }

    /**
     * Test case for getTestnetSlp
     *
     * Get testnet slp tokens.
     *
     */
    public function testGetTestnetSlp()
    {
    }
}
