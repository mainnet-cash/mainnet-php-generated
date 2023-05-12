<?php
/**
 * WatchAddressRequest
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
 * The version of the OpenAPI document: 1.1.14
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
 * WatchAddressRequest Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WatchAddressRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WatchAddressRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cashaddr' => 'string',
        'url' => 'string',
        'type' => 'string',
        'recurrence' => 'string',
        'token_id' => 'mixed',
        'duration_sec' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cashaddr' => null,
        'url' => null,
        'type' => null,
        'recurrence' => null,
        'token_id' => null,
        'duration_sec' => null
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
        'cashaddr' => 'cashaddr',
        'url' => 'url',
        'type' => 'type',
        'recurrence' => 'recurrence',
        'token_id' => 'tokenId',
        'duration_sec' => 'duration_sec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cashaddr' => 'setCashaddr',
        'url' => 'setUrl',
        'type' => 'setType',
        'recurrence' => 'setRecurrence',
        'token_id' => 'setTokenId',
        'duration_sec' => 'setDurationSec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cashaddr' => 'getCashaddr',
        'url' => 'getUrl',
        'type' => 'getType',
        'recurrence' => 'getRecurrence',
        'token_id' => 'getTokenId',
        'duration_sec' => 'getDurationSec'
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

    const TYPE_TRANSACTIONIN = 'transaction:in';
    const TYPE_TRANSACTIONOUT = 'transaction:out';
    const TYPE_TRANSACTIONINOUT = 'transaction:in,out';
    const TYPE_BALANCE = 'balance';
    const TYPE_SLPTRANSACTIONIN = 'slptransaction:in';
    const TYPE_SLPTRANSACTIONOUT = 'slptransaction:out';
    const TYPE_SLPTRANSACTIONINOUT = 'slptransaction:in,out';
    const TYPE_SLPBALANCE = 'slpbalance';
    const RECURRENCE_ONCE = 'once';
    const RECURRENCE_RECURRENT = 'recurrent';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TRANSACTIONIN,
            self::TYPE_TRANSACTIONOUT,
            self::TYPE_TRANSACTIONINOUT,
            self::TYPE_BALANCE,
            self::TYPE_SLPTRANSACTIONIN,
            self::TYPE_SLPTRANSACTIONOUT,
            self::TYPE_SLPTRANSACTIONINOUT,
            self::TYPE_SLPBALANCE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecurrenceAllowableValues()
    {
        return [
            self::RECURRENCE_ONCE,
            self::RECURRENCE_RECURRENT,
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
        $this->container['cashaddr'] = isset($data['cashaddr']) ? $data['cashaddr'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'transaction:in,out';
        $this->container['recurrence'] = isset($data['recurrence']) ? $data['recurrence'] : 'once';
        $this->container['token_id'] = isset($data['token_id']) ? $data['token_id'] : null;
        $this->container['duration_sec'] = isset($data['duration_sec']) ? $data['duration_sec'] : 86400;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cashaddr'] === null) {
            $invalidProperties[] = "'cashaddr' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRecurrenceAllowableValues();
        if (!is_null($this->container['recurrence']) && !in_array($this->container['recurrence'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recurrence', must be one of '%s'",
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
     * Gets cashaddr
     *
     * @return string
     */
    public function getCashaddr()
    {
        return $this->container['cashaddr'];
    }

    /**
     * Sets cashaddr
     *
     * @param string $cashaddr Cash address to watch
     *
     * @return $this
     */
    public function setCashaddr($cashaddr)
    {
        $this->container['cashaddr'] = $cashaddr;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Url to be called when configured action is triggered
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of watch operation
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets recurrence
     *
     * @return string|null
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param string|null $recurrence Action recurrence. Indicates if webhook should be triggered recurrently until expire or only once
     *
     * @return $this
     */
    public function setRecurrence($recurrence)
    {
        $allowedValues = $this->getRecurrenceAllowableValues();
        if (!is_null($recurrence) && !in_array($recurrence, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recurrence', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recurrence'] = $recurrence;

        return $this;
    }

    /**
     * Gets token_id
     *
     * @return mixed|null
     */
    public function getTokenId()
    {
        return $this->container['token_id'];
    }

    /**
     * Sets token_id
     *
     * @param mixed|null $token_id Token unique hexadecimal identifier to use. Mandatory in SLP webhooks.
     *
     * @return $this
     */
    public function setTokenId($token_id)
    {
        $this->container['token_id'] = $token_id;

        return $this;
    }

    /**
     * Gets duration_sec
     *
     * @return float|null
     */
    public function getDurationSec()
    {
        return $this->container['duration_sec'];
    }

    /**
     * Sets duration_sec
     *
     * @param float|null $duration_sec Duration of the webhook lifetime in seconds before it will expire.
     *
     * @return $this
     */
    public function setDurationSec($duration_sec)
    {
        $this->container['duration_sec'] = $duration_sec;

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


