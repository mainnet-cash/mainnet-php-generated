<?php
/**
 * SmartBchTransactionReceipt
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
 * The version of the OpenAPI document: 0.4.11
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
 * SmartBchTransactionReceipt Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SmartBchTransactionReceipt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SmartBchTransactionReceipt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'to' => 'string',
        'from' => 'string',
        'contract_address' => 'string',
        'transaction_index' => 'float',
        'root' => 'string',
        'gas_used' => 'string',
        'logs_bloom' => 'string',
        'block_hash' => 'string',
        'transaction_hash' => 'string',
        'logs' => 'mixed[]',
        'block_number' => 'float',
        'confirmations' => 'float',
        'cumulative_gas_used' => 'string',
        'effective_gas_price' => 'string',
        'byzantium' => 'bool',
        'type' => 'float',
        'status' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'to' => null,
        'from' => null,
        'contract_address' => null,
        'transaction_index' => null,
        'root' => null,
        'gas_used' => null,
        'logs_bloom' => null,
        'block_hash' => null,
        'transaction_hash' => null,
        'logs' => null,
        'block_number' => null,
        'confirmations' => null,
        'cumulative_gas_used' => null,
        'effective_gas_price' => null,
        'byzantium' => null,
        'type' => null,
        'status' => null
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
        'contract_address' => 'contractAddress',
        'transaction_index' => 'transactionIndex',
        'root' => 'root',
        'gas_used' => 'gasUsed',
        'logs_bloom' => 'logsBloom',
        'block_hash' => 'blockHash',
        'transaction_hash' => 'transactionHash',
        'logs' => 'logs',
        'block_number' => 'blockNumber',
        'confirmations' => 'confirmations',
        'cumulative_gas_used' => 'cumulativeGasUsed',
        'effective_gas_price' => 'effectiveGasPrice',
        'byzantium' => 'byzantium',
        'type' => 'type',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'to' => 'setTo',
        'from' => 'setFrom',
        'contract_address' => 'setContractAddress',
        'transaction_index' => 'setTransactionIndex',
        'root' => 'setRoot',
        'gas_used' => 'setGasUsed',
        'logs_bloom' => 'setLogsBloom',
        'block_hash' => 'setBlockHash',
        'transaction_hash' => 'setTransactionHash',
        'logs' => 'setLogs',
        'block_number' => 'setBlockNumber',
        'confirmations' => 'setConfirmations',
        'cumulative_gas_used' => 'setCumulativeGasUsed',
        'effective_gas_price' => 'setEffectiveGasPrice',
        'byzantium' => 'setByzantium',
        'type' => 'setType',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'to' => 'getTo',
        'from' => 'getFrom',
        'contract_address' => 'getContractAddress',
        'transaction_index' => 'getTransactionIndex',
        'root' => 'getRoot',
        'gas_used' => 'getGasUsed',
        'logs_bloom' => 'getLogsBloom',
        'block_hash' => 'getBlockHash',
        'transaction_hash' => 'getTransactionHash',
        'logs' => 'getLogs',
        'block_number' => 'getBlockNumber',
        'confirmations' => 'getConfirmations',
        'cumulative_gas_used' => 'getCumulativeGasUsed',
        'effective_gas_price' => 'getEffectiveGasPrice',
        'byzantium' => 'getByzantium',
        'type' => 'getType',
        'status' => 'getStatus'
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
        $this->container['contract_address'] = isset($data['contract_address']) ? $data['contract_address'] : null;
        $this->container['transaction_index'] = isset($data['transaction_index']) ? $data['transaction_index'] : null;
        $this->container['root'] = isset($data['root']) ? $data['root'] : null;
        $this->container['gas_used'] = isset($data['gas_used']) ? $data['gas_used'] : null;
        $this->container['logs_bloom'] = isset($data['logs_bloom']) ? $data['logs_bloom'] : null;
        $this->container['block_hash'] = isset($data['block_hash']) ? $data['block_hash'] : null;
        $this->container['transaction_hash'] = isset($data['transaction_hash']) ? $data['transaction_hash'] : null;
        $this->container['logs'] = isset($data['logs']) ? $data['logs'] : null;
        $this->container['block_number'] = isset($data['block_number']) ? $data['block_number'] : null;
        $this->container['confirmations'] = isset($data['confirmations']) ? $data['confirmations'] : null;
        $this->container['cumulative_gas_used'] = isset($data['cumulative_gas_used']) ? $data['cumulative_gas_used'] : null;
        $this->container['effective_gas_price'] = isset($data['effective_gas_price']) ? $data['effective_gas_price'] : null;
        $this->container['byzantium'] = isset($data['byzantium']) ? $data['byzantium'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['contract_address'] === null) {
            $invalidProperties[] = "'contract_address' can't be null";
        }
        if ($this->container['transaction_index'] === null) {
            $invalidProperties[] = "'transaction_index' can't be null";
        }
        if ($this->container['gas_used'] === null) {
            $invalidProperties[] = "'gas_used' can't be null";
        }
        if ($this->container['logs_bloom'] === null) {
            $invalidProperties[] = "'logs_bloom' can't be null";
        }
        if ($this->container['block_hash'] === null) {
            $invalidProperties[] = "'block_hash' can't be null";
        }
        if ($this->container['transaction_hash'] === null) {
            $invalidProperties[] = "'transaction_hash' can't be null";
        }
        if ($this->container['logs'] === null) {
            $invalidProperties[] = "'logs' can't be null";
        }
        if ($this->container['block_number'] === null) {
            $invalidProperties[] = "'block_number' can't be null";
        }
        if ($this->container['confirmations'] === null) {
            $invalidProperties[] = "'confirmations' can't be null";
        }
        if ($this->container['cumulative_gas_used'] === null) {
            $invalidProperties[] = "'cumulative_gas_used' can't be null";
        }
        if ($this->container['effective_gas_price'] === null) {
            $invalidProperties[] = "'effective_gas_price' can't be null";
        }
        if ($this->container['byzantium'] === null) {
            $invalidProperties[] = "'byzantium' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to to
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
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets contract_address
     *
     * @return string
     */
    public function getContractAddress()
    {
        return $this->container['contract_address'];
    }

    /**
     * Sets contract_address
     *
     * @param string $contract_address contract_address
     *
     * @return $this
     */
    public function setContractAddress($contract_address)
    {
        $this->container['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Gets transaction_index
     *
     * @return float
     */
    public function getTransactionIndex()
    {
        return $this->container['transaction_index'];
    }

    /**
     * Sets transaction_index
     *
     * @param float $transaction_index transaction_index
     *
     * @return $this
     */
    public function setTransactionIndex($transaction_index)
    {
        $this->container['transaction_index'] = $transaction_index;

        return $this;
    }

    /**
     * Gets root
     *
     * @return string|null
     */
    public function getRoot()
    {
        return $this->container['root'];
    }

    /**
     * Sets root
     *
     * @param string|null $root root
     *
     * @return $this
     */
    public function setRoot($root)
    {
        $this->container['root'] = $root;

        return $this;
    }

    /**
     * Gets gas_used
     *
     * @return string
     */
    public function getGasUsed()
    {
        return $this->container['gas_used'];
    }

    /**
     * Sets gas_used
     *
     * @param string $gas_used gas_used
     *
     * @return $this
     */
    public function setGasUsed($gas_used)
    {
        $this->container['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Gets logs_bloom
     *
     * @return string
     */
    public function getLogsBloom()
    {
        return $this->container['logs_bloom'];
    }

    /**
     * Sets logs_bloom
     *
     * @param string $logs_bloom logs_bloom
     *
     * @return $this
     */
    public function setLogsBloom($logs_bloom)
    {
        $this->container['logs_bloom'] = $logs_bloom;

        return $this;
    }

    /**
     * Gets block_hash
     *
     * @return string
     */
    public function getBlockHash()
    {
        return $this->container['block_hash'];
    }

    /**
     * Sets block_hash
     *
     * @param string $block_hash block_hash
     *
     * @return $this
     */
    public function setBlockHash($block_hash)
    {
        $this->container['block_hash'] = $block_hash;

        return $this;
    }

    /**
     * Gets transaction_hash
     *
     * @return string
     */
    public function getTransactionHash()
    {
        return $this->container['transaction_hash'];
    }

    /**
     * Sets transaction_hash
     *
     * @param string $transaction_hash transaction_hash
     *
     * @return $this
     */
    public function setTransactionHash($transaction_hash)
    {
        $this->container['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Gets logs
     *
     * @return mixed[]
     */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
     * Sets logs
     *
     * @param mixed[] $logs logs
     *
     * @return $this
     */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;

        return $this;
    }

    /**
     * Gets block_number
     *
     * @return float
     */
    public function getBlockNumber()
    {
        return $this->container['block_number'];
    }

    /**
     * Sets block_number
     *
     * @param float $block_number block_number
     *
     * @return $this
     */
    public function setBlockNumber($block_number)
    {
        $this->container['block_number'] = $block_number;

        return $this;
    }

    /**
     * Gets confirmations
     *
     * @return float
     */
    public function getConfirmations()
    {
        return $this->container['confirmations'];
    }

    /**
     * Sets confirmations
     *
     * @param float $confirmations confirmations
     *
     * @return $this
     */
    public function setConfirmations($confirmations)
    {
        $this->container['confirmations'] = $confirmations;

        return $this;
    }

    /**
     * Gets cumulative_gas_used
     *
     * @return string
     */
    public function getCumulativeGasUsed()
    {
        return $this->container['cumulative_gas_used'];
    }

    /**
     * Sets cumulative_gas_used
     *
     * @param string $cumulative_gas_used cumulative_gas_used
     *
     * @return $this
     */
    public function setCumulativeGasUsed($cumulative_gas_used)
    {
        $this->container['cumulative_gas_used'] = $cumulative_gas_used;

        return $this;
    }

    /**
     * Gets effective_gas_price
     *
     * @return string
     */
    public function getEffectiveGasPrice()
    {
        return $this->container['effective_gas_price'];
    }

    /**
     * Sets effective_gas_price
     *
     * @param string $effective_gas_price effective_gas_price
     *
     * @return $this
     */
    public function setEffectiveGasPrice($effective_gas_price)
    {
        $this->container['effective_gas_price'] = $effective_gas_price;

        return $this;
    }

    /**
     * Gets byzantium
     *
     * @return bool
     */
    public function getByzantium()
    {
        return $this->container['byzantium'];
    }

    /**
     * Sets byzantium
     *
     * @param bool $byzantium byzantium
     *
     * @return $this
     */
    public function setByzantium($byzantium)
    {
        $this->container['byzantium'] = $byzantium;

        return $this;
    }

    /**
     * Gets type
     *
     * @return float
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param float $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return float|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param float|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


