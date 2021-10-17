<?php
/**
 * SmartBchOverrides
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
 * The version of the OpenAPI document: 0.4.23
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
 * SmartBchOverrides Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SmartBchOverrides implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SmartBchOverrides';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'gas_limit' => 'AnyOfNumberString',
        'gas_price' => 'AnyOfNumberString',
        'max_fee_per_gas' => 'AnyOfNumberString',
        'max_priority_fee_per_gas' => 'AnyOfNumberString',
        'nonce' => 'AnyOfNumberString',
        'value' => 'AnyOfNumberString',
        'block_tag' => 'AnyOfNumberString',
        'from' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'gas_limit' => null,
        'gas_price' => null,
        'max_fee_per_gas' => null,
        'max_priority_fee_per_gas' => null,
        'nonce' => null,
        'value' => null,
        'block_tag' => null,
        'from' => null
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
        'gas_limit' => 'gasLimit',
        'gas_price' => 'gasPrice',
        'max_fee_per_gas' => 'maxFeePerGas',
        'max_priority_fee_per_gas' => 'maxPriorityFeePerGas',
        'nonce' => 'nonce',
        'value' => 'value',
        'block_tag' => 'blockTag',
        'from' => 'from'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gas_limit' => 'setGasLimit',
        'gas_price' => 'setGasPrice',
        'max_fee_per_gas' => 'setMaxFeePerGas',
        'max_priority_fee_per_gas' => 'setMaxPriorityFeePerGas',
        'nonce' => 'setNonce',
        'value' => 'setValue',
        'block_tag' => 'setBlockTag',
        'from' => 'setFrom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gas_limit' => 'getGasLimit',
        'gas_price' => 'getGasPrice',
        'max_fee_per_gas' => 'getMaxFeePerGas',
        'max_priority_fee_per_gas' => 'getMaxPriorityFeePerGas',
        'nonce' => 'getNonce',
        'value' => 'getValue',
        'block_tag' => 'getBlockTag',
        'from' => 'getFrom'
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
        $this->container['gas_limit'] = isset($data['gas_limit']) ? $data['gas_limit'] : null;
        $this->container['gas_price'] = isset($data['gas_price']) ? $data['gas_price'] : null;
        $this->container['max_fee_per_gas'] = isset($data['max_fee_per_gas']) ? $data['max_fee_per_gas'] : null;
        $this->container['max_priority_fee_per_gas'] = isset($data['max_priority_fee_per_gas']) ? $data['max_priority_fee_per_gas'] : null;
        $this->container['nonce'] = isset($data['nonce']) ? $data['nonce'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['block_tag'] = isset($data['block_tag']) ? $data['block_tag'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
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
     * Gets gas_limit
     *
     * @return AnyOfNumberString|null
     */
    public function getGasLimit()
    {
        return $this->container['gas_limit'];
    }

    /**
     * Sets gas_limit
     *
     * @param AnyOfNumberString|null $gas_limit gas_limit
     *
     * @return $this
     */
    public function setGasLimit($gas_limit)
    {
        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_price
     *
     * @return AnyOfNumberString|null
     */
    public function getGasPrice()
    {
        return $this->container['gas_price'];
    }

    /**
     * Sets gas_price
     *
     * @param AnyOfNumberString|null $gas_price gas_price
     *
     * @return $this
     */
    public function setGasPrice($gas_price)
    {
        $this->container['gas_price'] = $gas_price;

        return $this;
    }

    /**
     * Gets max_fee_per_gas
     *
     * @return AnyOfNumberString|null
     */
    public function getMaxFeePerGas()
    {
        return $this->container['max_fee_per_gas'];
    }

    /**
     * Sets max_fee_per_gas
     *
     * @param AnyOfNumberString|null $max_fee_per_gas max_fee_per_gas
     *
     * @return $this
     */
    public function setMaxFeePerGas($max_fee_per_gas)
    {
        $this->container['max_fee_per_gas'] = $max_fee_per_gas;

        return $this;
    }

    /**
     * Gets max_priority_fee_per_gas
     *
     * @return AnyOfNumberString|null
     */
    public function getMaxPriorityFeePerGas()
    {
        return $this->container['max_priority_fee_per_gas'];
    }

    /**
     * Sets max_priority_fee_per_gas
     *
     * @param AnyOfNumberString|null $max_priority_fee_per_gas max_priority_fee_per_gas
     *
     * @return $this
     */
    public function setMaxPriorityFeePerGas($max_priority_fee_per_gas)
    {
        $this->container['max_priority_fee_per_gas'] = $max_priority_fee_per_gas;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return AnyOfNumberString|null
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param AnyOfNumberString|null $nonce nonce
     *
     * @return $this
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets value
     *
     * @return AnyOfNumberString|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param AnyOfNumberString|null $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets block_tag
     *
     * @return AnyOfNumberString|null
     */
    public function getBlockTag()
    {
        return $this->container['block_tag'];
    }

    /**
     * Sets block_tag
     *
     * @param AnyOfNumberString|null $block_tag block_tag
     *
     * @return $this
     */
    public function setBlockTag($block_tag)
    {
        $this->container['block_tag'] = $block_tag;

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
     * @param string|null $from from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

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


