<?php
/**
 * EscrowInfoResponse
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
 * The version of the OpenAPI document: 0.3.32
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
 * EscrowInfoResponse Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EscrowInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EscrowInfoResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'escrow_contract_id' => 'string',
        'script' => 'string',
        'parameters' => 'string[]',
        'cashaddr' => 'string',
        'buyer_addr' => 'mixed',
        'arbiter_addr' => 'mixed',
        'seller_addr' => 'mixed',
        'amount' => 'float',
        'nonce' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'escrow_contract_id' => null,
        'script' => null,
        'parameters' => null,
        'cashaddr' => null,
        'buyer_addr' => null,
        'arbiter_addr' => null,
        'seller_addr' => null,
        'amount' => null,
        'nonce' => null
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
        'escrow_contract_id' => 'escrowContractId',
        'script' => 'script',
        'parameters' => 'parameters',
        'cashaddr' => 'cashaddr',
        'buyer_addr' => 'buyerAddr',
        'arbiter_addr' => 'arbiterAddr',
        'seller_addr' => 'sellerAddr',
        'amount' => 'amount',
        'nonce' => 'nonce'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'escrow_contract_id' => 'setEscrowContractId',
        'script' => 'setScript',
        'parameters' => 'setParameters',
        'cashaddr' => 'setCashaddr',
        'buyer_addr' => 'setBuyerAddr',
        'arbiter_addr' => 'setArbiterAddr',
        'seller_addr' => 'setSellerAddr',
        'amount' => 'setAmount',
        'nonce' => 'setNonce'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'escrow_contract_id' => 'getEscrowContractId',
        'script' => 'getScript',
        'parameters' => 'getParameters',
        'cashaddr' => 'getCashaddr',
        'buyer_addr' => 'getBuyerAddr',
        'arbiter_addr' => 'getArbiterAddr',
        'seller_addr' => 'getSellerAddr',
        'amount' => 'getAmount',
        'nonce' => 'getNonce'
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
        $this->container['escrow_contract_id'] = isset($data['escrow_contract_id']) ? $data['escrow_contract_id'] : null;
        $this->container['script'] = isset($data['script']) ? $data['script'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['cashaddr'] = isset($data['cashaddr']) ? $data['cashaddr'] : null;
        $this->container['buyer_addr'] = isset($data['buyer_addr']) ? $data['buyer_addr'] : null;
        $this->container['arbiter_addr'] = isset($data['arbiter_addr']) ? $data['arbiter_addr'] : null;
        $this->container['seller_addr'] = isset($data['seller_addr']) ? $data['seller_addr'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['nonce'] = isset($data['nonce']) ? $data['nonce'] : null;
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
     * Gets escrow_contract_id
     *
     * @return string|null
     */
    public function getEscrowContractId()
    {
        return $this->container['escrow_contract_id'];
    }

    /**
     * Sets escrow_contract_id
     *
     * @param string|null $escrow_contract_id serialized escrow contract
     *
     * @return $this
     */
    public function setEscrowContractId($escrow_contract_id)
    {
        $this->container['escrow_contract_id'] = $escrow_contract_id;

        return $this;
    }

    /**
     * Gets script
     *
     * @return string|null
     */
    public function getScript()
    {
        return $this->container['script'];
    }

    /**
     * Sets script
     *
     * @param string|null $script The escrow contract in cashscript syntax
     *
     * @return $this
     */
    public function setScript($script)
    {
        $this->container['script'] = $script;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return string[]|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param string[]|null $parameters Parameters passed when the contract was created
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets cashaddr
     *
     * @return string|null
     */
    public function getCashaddr()
    {
        return $this->container['cashaddr'];
    }

    /**
     * Sets cashaddr
     *
     * @param string|null $cashaddr cashaddr
     *
     * @return $this
     */
    public function setCashaddr($cashaddr)
    {
        $this->container['cashaddr'] = $cashaddr;

        return $this;
    }

    /**
     * Gets buyer_addr
     *
     * @return mixed|null
     */
    public function getBuyerAddr()
    {
        return $this->container['buyer_addr'];
    }

    /**
     * Sets buyer_addr
     *
     * @param mixed|null $buyer_addr The cashaddress of the buyer
     *
     * @return $this
     */
    public function setBuyerAddr($buyer_addr)
    {
        $this->container['buyer_addr'] = $buyer_addr;

        return $this;
    }

    /**
     * Gets arbiter_addr
     *
     * @return mixed|null
     */
    public function getArbiterAddr()
    {
        return $this->container['arbiter_addr'];
    }

    /**
     * Sets arbiter_addr
     *
     * @param mixed|null $arbiter_addr The cashaddress of the arbiter
     *
     * @return $this
     */
    public function setArbiterAddr($arbiter_addr)
    {
        $this->container['arbiter_addr'] = $arbiter_addr;

        return $this;
    }

    /**
     * Gets seller_addr
     *
     * @return mixed|null
     */
    public function getSellerAddr()
    {
        return $this->container['seller_addr'];
    }

    /**
     * Sets seller_addr
     *
     * @param mixed|null $seller_addr The cashaddress of the seller
     *
     * @return $this
     */
    public function setSellerAddr($seller_addr)
    {
        $this->container['seller_addr'] = $seller_addr;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount Numeric amount to be transferred by the contract in satoshi, amount must be less than 21 BCH.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return float|null
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param float|null $nonce A unique number used once for each instance of a contract.
     *
     * @return $this
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

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

