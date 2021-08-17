<?php
/**
 * ContractFnRequest
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
 * The version of the OpenAPI document: 0.3.41
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
 * ContractFnRequest Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContractFnRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContractFnRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contract_id' => 'string',
        'action' => 'string',
        'function' => 'string',
        'arguments' => 'string[]',
        'to' => 'AnyOfSendRequestItemArrayCashscriptReceiptArray',
        'utxo_ids' => 'string[]',
        'op_return' => 'string[]',
        'fee_per_byte' => 'float',
        'hardcoded_fee' => 'float',
        'min_change' => 'float',
        'without_change' => 'bool',
        'age' => 'float',
        'time' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contract_id' => null,
        'action' => null,
        'function' => null,
        'arguments' => null,
        'to' => null,
        'utxo_ids' => null,
        'op_return' => null,
        'fee_per_byte' => null,
        'hardcoded_fee' => null,
        'min_change' => null,
        'without_change' => null,
        'age' => null,
        'time' => null
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
        'contract_id' => 'contractId',
        'action' => 'action',
        'function' => 'function',
        'arguments' => 'arguments',
        'to' => 'to',
        'utxo_ids' => 'utxoIds',
        'op_return' => 'opReturn',
        'fee_per_byte' => 'feePerByte',
        'hardcoded_fee' => 'hardcodedFee',
        'min_change' => 'minChange',
        'without_change' => 'withoutChange',
        'age' => 'age',
        'time' => 'time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract_id' => 'setContractId',
        'action' => 'setAction',
        'function' => 'setFunction',
        'arguments' => 'setArguments',
        'to' => 'setTo',
        'utxo_ids' => 'setUtxoIds',
        'op_return' => 'setOpReturn',
        'fee_per_byte' => 'setFeePerByte',
        'hardcoded_fee' => 'setHardcodedFee',
        'min_change' => 'setMinChange',
        'without_change' => 'setWithoutChange',
        'age' => 'setAge',
        'time' => 'setTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract_id' => 'getContractId',
        'action' => 'getAction',
        'function' => 'getFunction',
        'arguments' => 'getArguments',
        'to' => 'getTo',
        'utxo_ids' => 'getUtxoIds',
        'op_return' => 'getOpReturn',
        'fee_per_byte' => 'getFeePerByte',
        'hardcoded_fee' => 'getHardcodedFee',
        'min_change' => 'getMinChange',
        'without_change' => 'getWithoutChange',
        'age' => 'getAge',
        'time' => 'getTime'
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

    const ACTION_BUILD = 'build';
    const ACTION_SEND = 'send';
    const ACTION_MEEP = 'meep';
    

    
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
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : 'send';
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['utxo_ids'] = isset($data['utxo_ids']) ? $data['utxo_ids'] : null;
        $this->container['op_return'] = isset($data['op_return']) ? $data['op_return'] : null;
        $this->container['fee_per_byte'] = isset($data['fee_per_byte']) ? $data['fee_per_byte'] : null;
        $this->container['hardcoded_fee'] = isset($data['hardcoded_fee']) ? $data['hardcoded_fee'] : null;
        $this->container['min_change'] = isset($data['min_change']) ? $data['min_change'] : null;
        $this->container['without_change'] = isset($data['without_change']) ? $data['without_change'] : false;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contract_id'] === null) {
            $invalidProperties[] = "'contract_id' can't be null";
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['function'] === null) {
            $invalidProperties[] = "'function' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
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
     * Gets contract_id
     *
     * @return string
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     *
     * @param string $contract_id serialized contract
     *
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

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
     * @param string|null $action In addition to `send`ing the built transaction, the built transaction hex may be returned (without broadcasting) with `build` action, or the [`meep 🔗`](https://github.com/gcash/meep) debugger command.
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
     * @param string $function Function to call on the cashscript contract.
     *
     * @return $this
     */
    public function setFunction($function)
    {
        $this->container['function'] = $function;

        return $this;
    }

    /**
     * Gets arguments
     *
     * @return string[]|null
     */
    public function getArguments()
    {
        return $this->container['arguments'];
    }

    /**
     * Sets arguments
     *
     * @param string[]|null $arguments Arguments for the contract function call as strings.  Binary data should be passed as hexidecimal.  Signatures may be passed as wallet import format (WIF) or wallet strings (walletId). Cashscript expects `pubkey`s to be compressed 35 byte values.
     *
     * @return $this
     */
    public function setArguments($arguments)
    {
        $this->container['arguments'] = $arguments;

        return $this;
    }

    /**
     * Gets to
     *
     * @return AnyOfSendRequestItemArrayCashscriptReceiptArray
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param AnyOfSendRequestItemArrayCashscriptReceiptArray $to The output destination, as a SendRequest, cashscript style output(s), array of either.
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

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
     * @param string[]|null $utxo_ids Serialized utxoId(s) to spend from
     *
     * @return $this
     */
    public function setUtxoIds($utxo_ids)
    {
        $this->container['utxo_ids'] = $utxo_ids;

        return $this;
    }

    /**
     * Gets op_return
     *
     * @return string[]|null
     */
    public function getOpReturn()
    {
        return $this->container['op_return'];
    }

    /**
     * Sets op_return
     *
     * @param string[]|null $op_return Add OP_RETURN outputs to the transaction. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withopreturn)
     *
     * @return $this
     */
    public function setOpReturn($op_return)
    {
        $this->container['op_return'] = $op_return;

        return $this;
    }

    /**
     * Gets fee_per_byte
     *
     * @return float|null
     */
    public function getFeePerByte()
    {
        return $this->container['fee_per_byte'];
    }

    /**
     * Sets fee_per_byte
     *
     * @param float|null $fee_per_byte The withFeePerByte() function allows you to specify the fee per per bytes for the transaction. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withfeeperbyte)
     *
     * @return $this
     */
    public function setFeePerByte($fee_per_byte)
    {
        $this->container['fee_per_byte'] = $fee_per_byte;

        return $this;
    }

    /**
     * Gets hardcoded_fee
     *
     * @return float|null
     */
    public function getHardcodedFee()
    {
        return $this->container['hardcoded_fee'];
    }

    /**
     * Sets hardcoded_fee
     *
     * @param float|null $hardcoded_fee Specify a hardcoded fee to the transaction. By default the transaction fee is automatically calculated by the CashScript SDK. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withhardcodedfee)
     *
     * @return $this
     */
    public function setHardcodedFee($hardcoded_fee)
    {
        $this->container['hardcoded_fee'] = $hardcoded_fee;

        return $this;
    }

    /**
     * Gets min_change
     *
     * @return float|null
     */
    public function getMinChange()
    {
        return $this->container['min_change'];
    }

    /**
     * Sets min_change
     *
     * @param float|null $min_change Set a threshold for including a change output. Any remaining amount under this threshold will be added to the transaction fee instead. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withminchange)
     *
     * @return $this
     */
    public function setMinChange($min_change)
    {
        $this->container['min_change'] = $min_change;

        return $this;
    }

    /**
     * Gets without_change
     *
     * @return bool|null
     */
    public function getWithoutChange()
    {
        return $this->container['without_change'];
    }

    /**
     * Sets without_change
     *
     * @param bool|null $without_change Disable the change output. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withoutchange)
     *
     * @return $this
     */
    public function setWithoutChange($without_change)
    {
        $this->container['without_change'] = $without_change;

        return $this;
    }

    /**
     * Gets age
     *
     * @return float|null
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param float|null $age Specify the minimum age of the transaction inputs. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withage)
     *
     * @return $this
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets time
     *
     * @return float|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param float|null $time Specify the minimum block number that the transaction can be included in. See [cashscript docs](https://cashscript.org/docs/sdk/transactions#withtime)
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

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


