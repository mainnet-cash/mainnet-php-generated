<?php
/**
 * SendRequestOptions
 *
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
 * The version of the OpenAPI document: 0.3.33
 * Contact: hello@mainnet.cash
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Mainnet\Model;

use \ArrayAccess;
use \Mainnet\ObjectSerializer;

/**
 * SendRequestOptions Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SendRequestOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SendRequestOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'utxo_ids' => 'string[]',
        'change_address' => 'string',
        'slp_aware' => 'bool',
        'query_balance' => 'bool',
        'await_transaction_propagation' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'utxo_ids' => null,
        'change_address' => null,
        'slp_aware' => null,
        'query_balance' => null,
        'await_transaction_propagation' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'utxo_ids' => 'utxoIds',
        'change_address' => 'changeAddress',
        'slp_aware' => 'slpAware',
        'query_balance' => 'queryBalance',
        'await_transaction_propagation' => 'awaitTransactionPropagation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'utxo_ids' => 'setUtxoIds',
        'change_address' => 'setChangeAddress',
        'slp_aware' => 'setSlpAware',
        'query_balance' => 'setQueryBalance',
        'await_transaction_propagation' => 'setAwaitTransactionPropagation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'utxo_ids' => 'getUtxoIds',
        'change_address' => 'getChangeAddress',
        'slp_aware' => 'getSlpAware',
        'query_balance' => 'getQueryBalance',
        'await_transaction_propagation' => 'getAwaitTransactionPropagation'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['utxo_ids'] = isset($data['utxo_ids']) ? $data['utxo_ids'] : null;
        $this->container['change_address'] = isset($data['change_address']) ? $data['change_address'] : null;
        $this->container['slp_aware'] = isset($data['slp_aware']) ? $data['slp_aware'] : false;
        $this->container['query_balance'] = isset($data['query_balance']) ? $data['query_balance'] : true;
        $this->container['await_transaction_propagation'] = isset($data['await_transaction_propagation']) ? $data['await_transaction_propagation'] : true;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets utxo_ids
     *
     * @return string[]|null
     */
    public function getUtxoIds()
    {
        return $this->container['utxo_ids'];
    }

    /**
     * Sets utxo_ids
     *
     * @param string[]|null $utxo_ids utxo_ids
     *
     * @return $this
     */
    public function setUtxoIds($utxo_ids)
    {
        $this->container['utxo_ids'] = $utxo_ids;

        return $this;
    }

    /**
     * Gets change_address
     *
     * @return string|null
     */
    public function getChangeAddress()
    {
        return $this->container['change_address'];
    }

    /**
     * Sets change_address
     *
     * @param string|null $change_address Cash address to receive change to
     *
     * @return $this
     */
    public function setChangeAddress($change_address)
    {
        $this->container['change_address'] = $change_address;

        return $this;
    }

    /**
     * Gets slp_aware
     *
     * @return bool|null
     */
    public function getSlpAware()
    {
        return $this->container['slp_aware'];
    }

    /**
     * Sets slp_aware
     *
     * @param bool|null $slp_aware If you have any SLP tokens on the address, you should set `slpAware` to `true` to prevent accidental token burning So far this option is not switched on by default
     *
     * @return $this
     */
    public function setSlpAware($slp_aware)
    {
        $this->container['slp_aware'] = $slp_aware;

        return $this;
    }

    /**
     * Gets query_balance
     *
     * @return bool|null
     */
    public function getQueryBalance()
    {
        return $this->container['query_balance'];
    }

    /**
     * Sets query_balance
     *
     * @param bool|null $query_balance A boolean flag to include the wallet balance after the successful `send` operation to the returned result If set to false, the balance will not be queried and returned, making the `send` call faster
     *
     * @return $this
     */
    public function setQueryBalance($query_balance)
    {
        $this->container['query_balance'] = $query_balance;

        return $this;
    }

    /**
     * Gets await_transaction_propagation
     *
     * @return bool|null
     */
    public function getAwaitTransactionPropagation()
    {
        return $this->container['await_transaction_propagation'];
    }

    /**
     * Sets await_transaction_propagation
     *
     * @param bool|null $await_transaction_propagation A boolean flag to wait for transaction to propagate through the network and be registered in the bitcoind and indexer. If set to false, the `send` call will be very fast, but the wallet UTXO state might be invalid for some 500ms.
     *
     * @return $this
     */
    public function setAwaitTransactionPropagation($await_transaction_propagation)
    {
        $this->container['await_transaction_propagation'] = $await_transaction_propagation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


