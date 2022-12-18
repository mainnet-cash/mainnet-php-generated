<?php
/**
 * EscrowFnRequest
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
 * The version of the OpenAPI document: 1.0.0
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
 * EscrowFnRequest Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EscrowFnRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EscrowFnRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'escrow_contract_id' => 'string',
        'wallet_id' => 'string',
        'function' => 'string',
        'to' => 'string',
        'action' => 'string',
        'utxo_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'escrow_contract_id' => null,
        'wallet_id' => null,
        'function' => null,
        'to' => null,
        'action' => null,
        'utxo_ids' => null
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
        'wallet_id' => 'walletId',
        'function' => 'function',
        'to' => 'to',
        'action' => 'action',
        'utxo_ids' => 'utxoIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'escrow_contract_id' => 'setEscrowContractId',
        'wallet_id' => 'setWalletId',
        'function' => 'setFunction',
        'to' => 'setTo',
        'action' => 'setAction',
        'utxo_ids' => 'setUtxoIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'escrow_contract_id' => 'getEscrowContractId',
        'wallet_id' => 'getWalletId',
        'function' => 'getFunction',
        'to' => 'getTo',
        'action' => 'getAction',
        'utxo_ids' => 'getUtxoIds'
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

    const MODEL_FUNCTION_SPEND = 'spend';
    const MODEL_FUNCTION_REFUND = 'refund';
    const ACTION_BUILD = 'build';
    const ACTION_SEND = 'send';
    const ACTION_MEEP = 'meep';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFunctionAllowableValues()
    {
        return [
            self::MODEL_FUNCTION_SPEND,
            self::MODEL_FUNCTION_REFUND,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_BUILD,
            self::ACTION_SEND,
            self::ACTION_MEEP,
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
        $this->container['escrow_contract_id'] = isset($data['escrow_contract_id']) ? $data['escrow_contract_id'] : null;
        $this->container['wallet_id'] = isset($data['wallet_id']) ? $data['wallet_id'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['utxo_ids'] = isset($data['utxo_ids']) ? $data['utxo_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['escrow_contract_id'] === null) {
            $invalidProperties[] = "'escrow_contract_id' can't be null";
        }
        if ($this->container['wallet_id'] === null) {
            $invalidProperties[] = "'wallet_id' can't be null";
        }
        if ($this->container['function'] === null) {
            $invalidProperties[] = "'function' can't be null";
        }
        $allowedValues = $this->getFunctionAllowableValues();
        if (!is_null($this->container['function']) && !in_array($this->container['function'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'function', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets escrow_contract_id
     *
     * @return string
     */
    public function getEscrowContractId()
    {
        return $this->container['escrow_contract_id'];
    }

    /**
     * Sets escrow_contract_id
     *
     * @param string $escrow_contract_id serialized contract
     *
     * @return $this
     */
    public function setEscrowContractId($escrow_contract_id)
    {
        $this->container['escrow_contract_id'] = $escrow_contract_id;

        return $this;
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
     * @param string $wallet_id The walletId of the transaction signer.
     *
     * @return $this
     */
    public function setWalletId($wallet_id)
    {
        $this->container['wallet_id'] = $wallet_id;

        return $this;
    }

    /**
     * Gets function
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function
     *
     * @param string $function Function to call on the escrow contract.
     *
     * @return $this
     */
    public function setFunction($function)
    {
        $allowedValues = $this->getFunctionAllowableValues();
        if (!in_array($function, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'function', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['function'] = $function;

        return $this;
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
     * @param string|null $to Output address for the transaction
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action In addition to `send`ing the built transaction, the built transaction hex may be returned (without broadcasting) with `build` action, or the [`meep 🔗`](https://github.com/gcash/meep) debugger command
     *
     * @return $this
     */
    public function setAction($action)
    {
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($action) && !in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

        return $this;
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


