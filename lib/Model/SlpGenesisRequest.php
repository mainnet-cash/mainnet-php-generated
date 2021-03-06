<?php
/**
 * SlpGenesisRequest
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
 * SlpGenesisRequest Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SlpGenesisRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SlpGenesisRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'wallet_id' => 'string',
        'name' => 'string',
        'ticker' => 'string',
        'initial_amount' => 'string',
        'decimals' => 'float',
        'document_url' => 'string',
        'document_hash' => 'string',
        'end_baton' => 'bool',
        'type' => 'float',
        'token_receiver_slp_addr' => 'string',
        'baton_receiver_slp_addr' => 'string',
        'parent_token_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'wallet_id' => null,
        'name' => null,
        'ticker' => null,
        'initial_amount' => null,
        'decimals' => null,
        'document_url' => null,
        'document_hash' => null,
        'end_baton' => null,
        'type' => null,
        'token_receiver_slp_addr' => null,
        'baton_receiver_slp_addr' => null,
        'parent_token_id' => null
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
        'wallet_id' => 'walletId',
        'name' => 'name',
        'ticker' => 'ticker',
        'initial_amount' => 'initialAmount',
        'decimals' => 'decimals',
        'document_url' => 'documentUrl',
        'document_hash' => 'documentHash',
        'end_baton' => 'endBaton',
        'type' => 'type',
        'token_receiver_slp_addr' => 'tokenReceiverSlpAddr',
        'baton_receiver_slp_addr' => 'batonReceiverSlpAddr',
        'parent_token_id' => 'parentTokenId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wallet_id' => 'setWalletId',
        'name' => 'setName',
        'ticker' => 'setTicker',
        'initial_amount' => 'setInitialAmount',
        'decimals' => 'setDecimals',
        'document_url' => 'setDocumentUrl',
        'document_hash' => 'setDocumentHash',
        'end_baton' => 'setEndBaton',
        'type' => 'setType',
        'token_receiver_slp_addr' => 'setTokenReceiverSlpAddr',
        'baton_receiver_slp_addr' => 'setBatonReceiverSlpAddr',
        'parent_token_id' => 'setParentTokenId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wallet_id' => 'getWalletId',
        'name' => 'getName',
        'ticker' => 'getTicker',
        'initial_amount' => 'getInitialAmount',
        'decimals' => 'getDecimals',
        'document_url' => 'getDocumentUrl',
        'document_hash' => 'getDocumentHash',
        'end_baton' => 'getEndBaton',
        'type' => 'getType',
        'token_receiver_slp_addr' => 'getTokenReceiverSlpAddr',
        'baton_receiver_slp_addr' => 'getBatonReceiverSlpAddr',
        'parent_token_id' => 'getParentTokenId'
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
        $this->container['wallet_id'] = isset($data['wallet_id']) ? $data['wallet_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
        $this->container['initial_amount'] = isset($data['initial_amount']) ? $data['initial_amount'] : null;
        $this->container['decimals'] = isset($data['decimals']) ? $data['decimals'] : null;
        $this->container['document_url'] = isset($data['document_url']) ? $data['document_url'] : null;
        $this->container['document_hash'] = isset($data['document_hash']) ? $data['document_hash'] : null;
        $this->container['end_baton'] = isset($data['end_baton']) ? $data['end_baton'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['token_receiver_slp_addr'] = isset($data['token_receiver_slp_addr']) ? $data['token_receiver_slp_addr'] : null;
        $this->container['baton_receiver_slp_addr'] = isset($data['baton_receiver_slp_addr']) ? $data['baton_receiver_slp_addr'] : null;
        $this->container['parent_token_id'] = isset($data['parent_token_id']) ? $data['parent_token_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['wallet_id'] === null) {
            $invalidProperties[] = "'wallet_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['ticker'] === null) {
            $invalidProperties[] = "'ticker' can't be null";
        }
        if ($this->container['initial_amount'] === null) {
            $invalidProperties[] = "'initial_amount' can't be null";
        }
        if ($this->container['decimals'] === null) {
            $invalidProperties[] = "'decimals' can't be null";
        }
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
     * Gets wallet_id
     *
     * @return string
     */
    public function getWalletId()
    {
        return $this->container['wallet_id'];
    }

    /**
     * Sets wallet_id
     *
     * @param string $wallet_id ID that is returned in `wallet` field of /wallet call
     *
     * @return $this
     */
    public function setWalletId($wallet_id)
    {
        $this->container['wallet_id'] = $wallet_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
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
     * @return string
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     *
     * @param string $ticker Token ticker
     *
     * @return $this
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

        return $this;
    }

    /**
     * Gets initial_amount
     *
     * @return string
     */
    public function getInitialAmount()
    {
        return $this->container['initial_amount'];
    }

    /**
     * Sets initial_amount
     *
     * @param string $initial_amount Value is represented as a string to avoid precision loss
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
     * @return float
     */
    public function getDecimals()
    {
        return $this->container['decimals'];
    }

    /**
     * Sets decimals
     *
     * @param float $decimals Indicates that 1 token is divisible into 10^decimals base units
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
     * Gets end_baton
     *
     * @return bool|null
     */
    public function getEndBaton()
    {
        return $this->container['end_baton'];
    }

    /**
     * Sets end_baton
     *
     * @param bool|null $end_baton Indicates if token should not be 'mintable', e.g. total circulation amount increased
     *
     * @return $this
     */
    public function setEndBaton($end_baton)
    {
        $this->container['end_baton'] = $end_baton;

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
     * Gets token_receiver_slp_addr
     *
     * @return string|null
     */
    public function getTokenReceiverSlpAddr()
    {
        return $this->container['token_receiver_slp_addr'];
    }

    /**
     * Sets token_receiver_slp_addr
     *
     * @param string|null $token_receiver_slp_addr token_receiver_slp_addr
     *
     * @return $this
     */
    public function setTokenReceiverSlpAddr($token_receiver_slp_addr)
    {
        $this->container['token_receiver_slp_addr'] = $token_receiver_slp_addr;

        return $this;
    }

    /**
     * Gets baton_receiver_slp_addr
     *
     * @return string|null
     */
    public function getBatonReceiverSlpAddr()
    {
        return $this->container['baton_receiver_slp_addr'];
    }

    /**
     * Sets baton_receiver_slp_addr
     *
     * @param string|null $baton_receiver_slp_addr baton_receiver_slp_addr
     *
     * @return $this
     */
    public function setBatonReceiverSlpAddr($baton_receiver_slp_addr)
    {
        $this->container['baton_receiver_slp_addr'] = $baton_receiver_slp_addr;

        return $this;
    }

    /**
     * Gets parent_token_id
     *
     * @return string|null
     */
    public function getParentTokenId()
    {
        return $this->container['parent_token_id'];
    }

    /**
     * Sets parent_token_id
     *
     * @param string|null $parent_token_id Identifier of the NFT parent token
     *
     * @return $this
     */
    public function setParentTokenId($parent_token_id)
    {
        $this->container['parent_token_id'] = $parent_token_id;

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


