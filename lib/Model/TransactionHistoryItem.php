<?php
/**
 * TransactionHistoryItem
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
 * The version of the OpenAPI document: 1.1.8
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
 * TransactionHistoryItem Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionHistoryItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionHistoryItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'to' => 'string',
        'from' => 'string',
        'unit' => '\Mainnet\Model\UnitType',
        'index' => 'float',
        'blockheight' => 'float',
        'txn' => 'string',
        'tx_id' => 'string',
        'value' => 'float',
        'fee' => 'float',
        'balance' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'to' => null,
        'from' => null,
        'unit' => null,
        'index' => null,
        'blockheight' => null,
        'txn' => null,
        'tx_id' => null,
        'value' => null,
        'fee' => null,
        'balance' => null
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
        'to' => 'to',
        'from' => 'from',
        'unit' => 'unit',
        'index' => 'index',
        'blockheight' => 'blockheight',
        'txn' => 'txn',
        'tx_id' => 'txId',
        'value' => 'value',
        'fee' => 'fee',
        'balance' => 'balance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'to' => 'setTo',
        'from' => 'setFrom',
        'unit' => 'setUnit',
        'index' => 'setIndex',
        'blockheight' => 'setBlockheight',
        'txn' => 'setTxn',
        'tx_id' => 'setTxId',
        'value' => 'setValue',
        'fee' => 'setFee',
        'balance' => 'setBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'to' => 'getTo',
        'from' => 'getFrom',
        'unit' => 'getUnit',
        'index' => 'getIndex',
        'blockheight' => 'getBlockheight',
        'txn' => 'getTxn',
        'tx_id' => 'getTxId',
        'value' => 'getValue',
        'fee' => 'getFee',
        'balance' => 'getBalance'
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
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['blockheight'] = isset($data['blockheight']) ? $data['blockheight'] : null;
        $this->container['txn'] = isset($data['txn']) ? $data['txn'] : null;
        $this->container['tx_id'] = isset($data['tx_id']) ? $data['tx_id'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
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
     * Gets to
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string|null $to cashaddr of the receiving cash address.
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from cashaddr of the sending cash address.
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return \Mainnet\Model\UnitType|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param \Mainnet\Model\UnitType|null $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets index
     *
     * @return float|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param float|null $index the index of the input or output in the transaction
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets blockheight
     *
     * @return float|null
     */
    public function getBlockheight()
    {
        return $this->container['blockheight'];
    }

    /**
     * Sets blockheight
     *
     * @param float|null $blockheight the blockheight of transaction
     *
     * @return $this
     */
    public function setBlockheight($blockheight)
    {
        $this->container['blockheight'] = $blockheight;

        return $this;
    }

    /**
     * Gets txn
     *
     * @return string|null
     */
    public function getTxn()
    {
        return $this->container['txn'];
    }

    /**
     * Sets txn
     *
     * @param string|null $txn The hash of the transaction
     *
     * @return $this
     */
    public function setTxn($txn)
    {
        $this->container['txn'] = $txn;

        return $this;
    }

    /**
     * Gets tx_id
     *
     * @return string|null
     */
    public function getTxId()
    {
        return $this->container['tx_id'];
    }

    /**
     * Sets tx_id
     *
     * @param string|null $tx_id a unique identifier for the sub-transaction
     *
     * @return $this
     */
    public function setTxId($tx_id)
    {
        $this->container['tx_id'] = $tx_id;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float|null $value The amount of the transaction, in the unit provided, with respect to the wallet provided.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return float|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param float|null $fee The amount paid, if any, by the wallet for the transaction (incoming tranactions are \"free\")
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance A running balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

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


