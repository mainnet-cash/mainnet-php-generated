<?php
/**
 * SlpUtxo
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
 * The version of the OpenAPI document: 0.3.28
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
 * SlpUtxo Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SlpUtxo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SlpUtxo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'index' => 'float',
        'tx_id' => 'string',
        'satoshis' => 'float',
        'utxo_id' => 'string',
        'value' => 'string',
        'decimals' => 'float',
        'ticker' => 'string',
        'token_id' => 'string',
        'type' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'index' => null,
        'tx_id' => null,
        'satoshis' => null,
        'utxo_id' => null,
        'value' => null,
        'decimals' => null,
        'ticker' => null,
        'token_id' => null,
        'type' => null
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
        'index' => 'index',
        'tx_id' => 'txId',
        'satoshis' => 'satoshis',
        'utxo_id' => 'utxoId',
        'value' => 'value',
        'decimals' => 'decimals',
        'ticker' => 'ticker',
        'token_id' => 'tokenId',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'tx_id' => 'setTxId',
        'satoshis' => 'setSatoshis',
        'utxo_id' => 'setUtxoId',
        'value' => 'setValue',
        'decimals' => 'setDecimals',
        'ticker' => 'setTicker',
        'token_id' => 'setTokenId',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'tx_id' => 'getTxId',
        'satoshis' => 'getSatoshis',
        'utxo_id' => 'getUtxoId',
        'value' => 'getValue',
        'decimals' => 'getDecimals',
        'ticker' => 'getTicker',
        'token_id' => 'getTokenId',
        'type' => 'getType'
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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['tx_id'] = isset($data['tx_id']) ? $data['tx_id'] : null;
        $this->container['satoshis'] = isset($data['satoshis']) ? $data['satoshis'] : null;
        $this->container['utxo_id'] = isset($data['utxo_id']) ? $data['utxo_id'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['decimals'] = isset($data['decimals']) ? $data['decimals'] : null;
        $this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
        $this->container['token_id'] = isset($data['token_id']) ? $data['token_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * @param float|null $index index
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

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
     * @param string|null $tx_id The hash of a transaction
     *
     * @return $this
     */
    public function setTxId($tx_id)
    {
        $this->container['tx_id'] = $tx_id;

        return $this;
    }

    /**
     * Gets satoshis
     *
     * @return float|null
     */
    public function getSatoshis()
    {
        return $this->container['satoshis'];
    }

    /**
     * Sets satoshis
     *
     * @param float|null $satoshis Locked satoshi
     *
     * @return $this
     */
    public function setSatoshis($satoshis)
    {
        $this->container['satoshis'] = $satoshis;

        return $this;
    }

    /**
     * Gets utxo_id
     *
     * @return string|null
     */
    public function getUtxoId()
    {
        return $this->container['utxo_id'];
    }

    /**
     * Sets utxo_id
     *
     * @param string|null $utxo_id serialized outpoint
     *
     * @return $this
     */
    public function setUtxoId($utxo_id)
    {
        $this->container['utxo_id'] = $utxo_id;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value Token amount represented as a string to avoid precision loss
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets decimals
     *
     * @return float|null
     */
    public function getDecimals()
    {
        return $this->container['decimals'];
    }

    /**
     * Sets decimals
     *
     * @param float|null $decimals Indicates that 1 token is divisible into 10^decimals base units
     *
     * @return $this
     */
    public function setDecimals($decimals)
    {
        $this->container['decimals'] = $decimals;

        return $this;
    }

    /**
     * Gets ticker
     *
     * @return string|null
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     *
     * @param string|null $ticker Token ticker
     *
     * @return $this
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

        return $this;
    }

    /**
     * Gets token_id
     *
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->container['token_id'];
    }

    /**
     * Sets token_id
     *
     * @param string|null $token_id Token unique hexadecimal identifier, also the id of the token creation transaction
     *
     * @return $this
     */
    public function setTokenId($token_id)
    {
        $this->container['token_id'] = $token_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return float|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param float|null $type Token type. 0x01 Type1, 0x81 NFT Parent, 0x41 NFT Child
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


