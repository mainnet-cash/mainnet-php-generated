<?php
/**
 * SlpTokenInfoResponse
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
 * The version of the OpenAPI document: 0.3.35
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
 * SlpTokenInfoResponse Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SlpTokenInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SlpTokenInfoResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'ticker' => 'string',
        'token_id' => 'string',
        'initial_amount' => 'string',
        'decimals' => 'float',
        'document_url' => 'string',
        'document_hash' => 'string',
        'type' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'ticker' => null,
        'token_id' => null,
        'initial_amount' => null,
        'decimals' => null,
        'document_url' => null,
        'document_hash' => null,
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
        'name' => 'name',
        'ticker' => 'ticker',
        'token_id' => 'tokenId',
        'initial_amount' => 'initialAmount',
        'decimals' => 'decimals',
        'document_url' => 'documentUrl',
        'document_hash' => 'documentHash',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'ticker' => 'setTicker',
        'token_id' => 'setTokenId',
        'initial_amount' => 'setInitialAmount',
        'decimals' => 'setDecimals',
        'document_url' => 'setDocumentUrl',
        'document_hash' => 'setDocumentHash',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'ticker' => 'getTicker',
        'token_id' => 'getTokenId',
        'initial_amount' => 'getInitialAmount',
        'decimals' => 'getDecimals',
        'document_url' => 'getDocumentUrl',
        'document_hash' => 'getDocumentHash',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
        $this->container['token_id'] = isset($data['token_id']) ? $data['token_id'] : null;
        $this->container['initial_amount'] = isset($data['initial_amount']) ? $data['initial_amount'] : null;
        $this->container['decimals'] = isset($data['decimals']) ? $data['decimals'] : null;
        $this->container['document_url'] = isset($data['document_url']) ? $data['document_url'] : null;
        $this->container['document_hash'] = isset($data['document_hash']) ? $data['document_hash'] : null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $token_id token_id
     *
     * @return $this
     */
    public function setTokenId($token_id)
    {
        $this->container['token_id'] = $token_id;

        return $this;
    }

    /**
     * Gets initial_amount
     *
     * @return string|null
     */
    public function getInitialAmount()
    {
        return $this->container['initial_amount'];
    }

    /**
     * Sets initial_amount
     *
     * @param string|null $initial_amount Value is represented as a string to avoid precision loss
     *
     * @return $this
     */
    public function setInitialAmount($initial_amount)
    {
        $this->container['initial_amount'] = $initial_amount;

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
     * Gets document_url
     *
     * @return string|null
     */
    public function getDocumentUrl()
    {
        return $this->container['document_url'];
    }

    /**
     * Sets document_url
     *
     * @param string|null $document_url document_url
     *
     * @return $this
     */
    public function setDocumentUrl($document_url)
    {
        $this->container['document_url'] = $document_url;

        return $this;
    }

    /**
     * Gets document_hash
     *
     * @return string|null
     */
    public function getDocumentHash()
    {
        return $this->container['document_hash'];
    }

    /**
     * Sets document_hash
     *
     * @param string|null $document_hash Document hash of the token. Empty or 64 character long hex string.
     *
     * @return $this
     */
    public function setDocumentHash($document_hash)
    {
        $this->container['document_hash'] = $document_hash;

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


