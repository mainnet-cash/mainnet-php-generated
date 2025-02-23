<?php
/**
 * TokenGenesisRequest
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
 * The version of the OpenAPI document: 2.6.3
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
 * TokenGenesisRequest Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TokenGenesisRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TokenGenesisRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'wallet_id' => 'string',
        'amount' => 'float',
        'capability' => 'string',
        'commitment' => 'string',
        'cashaddr' => 'string',
        'value' => 'float',
        'send_requests' => 'AnyOfSendRequestItemArrayTokenSendRequestOpReturnData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'wallet_id' => null,
        'amount' => null,
        'capability' => null,
        'commitment' => null,
        'cashaddr' => null,
        'value' => null,
        'send_requests' => null
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
        'amount' => 'amount',
        'capability' => 'capability',
        'commitment' => 'commitment',
        'cashaddr' => 'cashaddr',
        'value' => 'value',
        'send_requests' => 'sendRequests'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wallet_id' => 'setWalletId',
        'amount' => 'setAmount',
        'capability' => 'setCapability',
        'commitment' => 'setCommitment',
        'cashaddr' => 'setCashaddr',
        'value' => 'setValue',
        'send_requests' => 'setSendRequests'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wallet_id' => 'getWalletId',
        'amount' => 'getAmount',
        'capability' => 'getCapability',
        'commitment' => 'getCommitment',
        'cashaddr' => 'getCashaddr',
        'value' => 'getValue',
        'send_requests' => 'getSendRequests'
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

    const CAPABILITY_NONE = 'none';
    const CAPABILITY_MUTABLE = 'mutable';
    const CAPABILITY_MINTING = 'minting';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCapabilityAllowableValues()
    {
        return [
            self::CAPABILITY_NONE,
            self::CAPABILITY_MUTABLE,
            self::CAPABILITY_MINTING,
        ];
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['capability'] = isset($data['capability']) ? $data['capability'] : null;
        $this->container['commitment'] = isset($data['commitment']) ? $data['commitment'] : null;
        $this->container['cashaddr'] = isset($data['cashaddr']) ? $data['cashaddr'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : 1000;
        $this->container['send_requests'] = isset($data['send_requests']) ? $data['send_requests'] : null;
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
        $allowedValues = $this->getCapabilityAllowableValues();
        if (!is_null($this->container['capability']) && !in_array($this->container['capability'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'capability', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['commitment']) && (mb_strlen($this->container['commitment']) > 80)) {
            $invalidProperties[] = "invalid value for 'commitment', the character length must be smaller than or equal to 80.";
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
     * @param string $wallet_id The walletId to make a request to.
     *
     * @return $this
     */
    public function setWalletId($wallet_id)
    {
        $this->container['wallet_id'] = $wallet_id;

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
     * @param float|null $amount amount of *fungible* tokens to create
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets capability
     *
     * @return string|null
     */
    public function getCapability()
    {
        return $this->container['capability'];
    }

    /**
     * Sets capability
     *
     * @param string|null $capability Capability of the new NFT
     *
     * @return $this
     */
    public function setCapability($capability)
    {
        $allowedValues = $this->getCapabilityAllowableValues();
        if (!is_null($capability) && !in_array($capability, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'capability', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['capability'] = $capability;

        return $this;
    }

    /**
     * Gets commitment
     *
     * @return string|null
     */
    public function getCommitment()
    {
        return $this->container['commitment'];
    }

    /**
     * Sets commitment
     *
     * @param string|null $commitment Token commitment message, hexadecimal encoded, 40 bytes max length
     *
     * @return $this
     */
    public function setCommitment($commitment)
    {
        if (!is_null($commitment) && (mb_strlen($commitment) > 80)) {
            throw new \InvalidArgumentException('invalid length for $commitment when calling TokenGenesisRequest., must be smaller than or equal to 80.');
        }

        $this->container['commitment'] = $commitment;

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
     * @param string|null $cashaddr Cashaddress to send tokens to
     *
     * @return $this
     */
    public function setCashaddr($cashaddr)
    {
        $this->container['cashaddr'] = $cashaddr;

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
     * @param float|null $value Satoshi value to send alongside with tokens
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets send_requests
     *
     * @return AnyOfSendRequestItemArrayTokenSendRequestOpReturnData|null
     */
    public function getSendRequests()
    {
        return $this->container['send_requests'];
    }

    /**
     * Sets send_requests
     *
     * @param AnyOfSendRequestItemArrayTokenSendRequestOpReturnData|null $send_requests Single or an array of extra send requests (OP_RETURN, value transfer, etc.) to include in genesis transaction.
     *
     * @return $this
     */
    public function setSendRequests($send_requests)
    {
        $this->container['send_requests'] = $send_requests;

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


