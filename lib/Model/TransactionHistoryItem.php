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
 * The version of the OpenAPI document: 2.4.2
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
        'inputs' => '\Mainnet\Model\InOutput[]',
        'outputs' => '\Mainnet\Model\InOutput[]',
        'blockheight' => 'float',
        'timestamp' => 'string',
        'hash' => 'string',
        'size' => 'float',
        'fee' => 'float',
        'balance' => 'float',
        'value_change' => 'float',
        'token_amount_changes' => '\Mainnet\Model\TokenAmountChange[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'inputs' => null,
        'outputs' => null,
        'blockheight' => null,
        'timestamp' => null,
        'hash' => null,
        'size' => null,
        'fee' => null,
        'balance' => null,
        'value_change' => null,
        'token_amount_changes' => null
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
        'inputs' => 'inputs',
        'outputs' => 'outputs',
        'blockheight' => 'blockheight',
        'timestamp' => 'timestamp',
        'hash' => 'hash',
        'size' => 'size',
        'fee' => 'fee',
        'balance' => 'balance',
        'value_change' => 'valueChange',
        'token_amount_changes' => 'tokenAmountChanges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inputs' => 'setInputs',
        'outputs' => 'setOutputs',
        'blockheight' => 'setBlockheight',
        'timestamp' => 'setTimestamp',
        'hash' => 'setHash',
        'size' => 'setSize',
        'fee' => 'setFee',
        'balance' => 'setBalance',
        'value_change' => 'setValueChange',
        'token_amount_changes' => 'setTokenAmountChanges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inputs' => 'getInputs',
        'outputs' => 'getOutputs',
        'blockheight' => 'getBlockheight',
        'timestamp' => 'getTimestamp',
        'hash' => 'getHash',
        'size' => 'getSize',
        'fee' => 'getFee',
        'balance' => 'getBalance',
        'value_change' => 'getValueChange',
        'token_amount_changes' => 'getTokenAmountChanges'
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
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['blockheight'] = isset($data['blockheight']) ? $data['blockheight'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['value_change'] = isset($data['value_change']) ? $data['value_change'] : null;
        $this->container['token_amount_changes'] = isset($data['token_amount_changes']) ? $data['token_amount_changes'] : null;
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
     * Gets inputs
     *
     * @return \Mainnet\Model\InOutput[]|null
     */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
     * Sets inputs
     *
     * @param \Mainnet\Model\InOutput[]|null $inputs inputs
     *
     * @return $this
     */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;

        return $this;
    }

    /**
     * Gets outputs
     *
     * @return \Mainnet\Model\InOutput[]|null
     */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
     * Sets outputs
     *
     * @param \Mainnet\Model\InOutput[]|null $outputs outputs
     *
     * @return $this
     */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;

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
     * @param float|null $blockheight The blockheight of transaction
     *
     * @return $this
     */
    public function setBlockheight($blockheight)
    {
        $this->container['blockheight'] = $blockheight;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string|null $timestamp The timestamp of transaction, undefined if unconfirmed
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash The hash of the transaction
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets size
     *
     * @return float|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param float|null $size The size of the transaction
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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
     * @param float|null $fee Transaction fee
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
     * @param float|null $balance A running balance, in units
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets value_change
     *
     * @return float|null
     */
    public function getValueChange()
    {
        return $this->container['value_change'];
    }

    /**
     * Sets value_change
     *
     * @param float|null $value_change Change of value in the transaction, in units
     *
     * @return $this
     */
    public function setValueChange($value_change)
    {
        $this->container['value_change'] = $value_change;

        return $this;
    }

    /**
     * Gets token_amount_changes
     *
     * @return \Mainnet\Model\TokenAmountChange[]|null
     */
    public function getTokenAmountChanges()
    {
        return $this->container['token_amount_changes'];
    }

    /**
     * Sets token_amount_changes
     *
     * @param \Mainnet\Model\TokenAmountChange[]|null $token_amount_changes token_amount_changes
     *
     * @return $this
     */
    public function setTokenAmountChanges($token_amount_changes)
    {
        $this->container['token_amount_changes'] = $token_amount_changes;

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


