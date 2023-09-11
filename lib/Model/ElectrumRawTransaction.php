<?php
/**
 * ElectrumRawTransaction
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
 * The version of the OpenAPI document: 1.1.34-alpha.1
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
 * ElectrumRawTransaction Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ElectrumRawTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ElectrumRawTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'blockhash' => 'string',
        'blocktime' => 'float',
        'confirmations' => 'float',
        'hash' => 'string',
        'hex' => 'string',
        'locktime' => 'float',
        'size' => 'float',
        'time' => 'float',
        'txid' => 'string',
        'version' => 'float',
        'vin' => '\Mainnet\Model\ElectrumRawTransactionVin[]',
        'vout' => '\Mainnet\Model\ElectrumRawTransactionVout[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'blockhash' => null,
        'blocktime' => null,
        'confirmations' => null,
        'hash' => null,
        'hex' => null,
        'locktime' => null,
        'size' => null,
        'time' => null,
        'txid' => null,
        'version' => null,
        'vin' => null,
        'vout' => null
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
        'blockhash' => 'blockhash',
        'blocktime' => 'blocktime',
        'confirmations' => 'confirmations',
        'hash' => 'hash',
        'hex' => 'hex',
        'locktime' => 'locktime',
        'size' => 'size',
        'time' => 'time',
        'txid' => 'txid',
        'version' => 'version',
        'vin' => 'vin',
        'vout' => 'vout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blockhash' => 'setBlockhash',
        'blocktime' => 'setBlocktime',
        'confirmations' => 'setConfirmations',
        'hash' => 'setHash',
        'hex' => 'setHex',
        'locktime' => 'setLocktime',
        'size' => 'setSize',
        'time' => 'setTime',
        'txid' => 'setTxid',
        'version' => 'setVersion',
        'vin' => 'setVin',
        'vout' => 'setVout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blockhash' => 'getBlockhash',
        'blocktime' => 'getBlocktime',
        'confirmations' => 'getConfirmations',
        'hash' => 'getHash',
        'hex' => 'getHex',
        'locktime' => 'getLocktime',
        'size' => 'getSize',
        'time' => 'getTime',
        'txid' => 'getTxid',
        'version' => 'getVersion',
        'vin' => 'getVin',
        'vout' => 'getVout'
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
        $this->container['blockhash'] = isset($data['blockhash']) ? $data['blockhash'] : null;
        $this->container['blocktime'] = isset($data['blocktime']) ? $data['blocktime'] : null;
        $this->container['confirmations'] = isset($data['confirmations']) ? $data['confirmations'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['hex'] = isset($data['hex']) ? $data['hex'] : null;
        $this->container['locktime'] = isset($data['locktime']) ? $data['locktime'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['txid'] = isset($data['txid']) ? $data['txid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['vin'] = isset($data['vin']) ? $data['vin'] : null;
        $this->container['vout'] = isset($data['vout']) ? $data['vout'] : null;
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
     * Gets blockhash
     *
     * @return string|null
     */
    public function getBlockhash()
    {
        return $this->container['blockhash'];
    }

    /**
     * Sets blockhash
     *
     * @param string|null $blockhash blockhash
     *
     * @return $this
     */
    public function setBlockhash($blockhash)
    {
        $this->container['blockhash'] = $blockhash;

        return $this;
    }

    /**
     * Gets blocktime
     *
     * @return float|null
     */
    public function getBlocktime()
    {
        return $this->container['blocktime'];
    }

    /**
     * Sets blocktime
     *
     * @param float|null $blocktime blocktime
     *
     * @return $this
     */
    public function setBlocktime($blocktime)
    {
        $this->container['blocktime'] = $blocktime;

        return $this;
    }

    /**
     * Gets confirmations
     *
     * @return float|null
     */
    public function getConfirmations()
    {
        return $this->container['confirmations'];
    }

    /**
     * Sets confirmations
     *
     * @param float|null $confirmations confirmations
     *
     * @return $this
     */
    public function setConfirmations($confirmations)
    {
        $this->container['confirmations'] = $confirmations;

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
     * @param string|null $hash hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets hex
     *
     * @return string|null
     */
    public function getHex()
    {
        return $this->container['hex'];
    }

    /**
     * Sets hex
     *
     * @param string|null $hex hex
     *
     * @return $this
     */
    public function setHex($hex)
    {
        $this->container['hex'] = $hex;

        return $this;
    }

    /**
     * Gets locktime
     *
     * @return float|null
     */
    public function getLocktime()
    {
        return $this->container['locktime'];
    }

    /**
     * Sets locktime
     *
     * @param float|null $locktime locktime
     *
     * @return $this
     */
    public function setLocktime($locktime)
    {
        $this->container['locktime'] = $locktime;

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
     * @param float|null $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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
     * @param float|null $time time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets txid
     *
     * @return string|null
     */
    public function getTxid()
    {
        return $this->container['txid'];
    }

    /**
     * Sets txid
     *
     * @param string|null $txid txid
     *
     * @return $this
     */
    public function setTxid($txid)
    {
        $this->container['txid'] = $txid;

        return $this;
    }

    /**
     * Gets version
     *
     * @return float|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param float|null $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets vin
     *
     * @return \Mainnet\Model\ElectrumRawTransactionVin[]|null
     */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
     * Sets vin
     *
     * @param \Mainnet\Model\ElectrumRawTransactionVin[]|null $vin vin
     *
     * @return $this
     */
    public function setVin($vin)
    {
        $this->container['vin'] = $vin;

        return $this;
    }

    /**
     * Gets vout
     *
     * @return \Mainnet\Model\ElectrumRawTransactionVout[]|null
     */
    public function getVout()
    {
        return $this->container['vout'];
    }

    /**
     * Sets vout
     *
     * @param \Mainnet\Model\ElectrumRawTransactionVout[]|null $vout vout
     *
     * @return $this
     */
    public function setVout($vout)
    {
        $this->container['vout'] = $vout;

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


