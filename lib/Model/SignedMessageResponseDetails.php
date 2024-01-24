<?php
/**
 * SignedMessageResponseDetails
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
 * The version of the OpenAPI document: 2.3.2
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
 * SignedMessageResponseDetails Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SignedMessageResponseDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SignedMessageResponseDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recovery_id' => 'float',
        'compressed' => 'bool',
        'message_hash' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'recovery_id' => null,
        'compressed' => null,
        'message_hash' => null
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
        'recovery_id' => 'recoveryId',
        'compressed' => 'compressed',
        'message_hash' => 'messageHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recovery_id' => 'setRecoveryId',
        'compressed' => 'setCompressed',
        'message_hash' => 'setMessageHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recovery_id' => 'getRecoveryId',
        'compressed' => 'getCompressed',
        'message_hash' => 'getMessageHash'
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
        $this->container['recovery_id'] = isset($data['recovery_id']) ? $data['recovery_id'] : null;
        $this->container['compressed'] = isset($data['compressed']) ? $data['compressed'] : null;
        $this->container['message_hash'] = isset($data['message_hash']) ? $data['message_hash'] : null;
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
     * Gets recovery_id
     *
     * @return float|null
     */
    public function getRecoveryId()
    {
        return $this->container['recovery_id'];
    }

    /**
     * Sets recovery_id
     *
     * @param float|null $recovery_id A tag used for recovering the public key from a compact signature.
     *
     * @return $this
     */
    public function setRecoveryId($recovery_id)
    {
        $this->container['recovery_id'] = $recovery_id;

        return $this;
    }

    /**
     * Gets compressed
     *
     * @return bool|null
     */
    public function getCompressed()
    {
        return $this->container['compressed'];
    }

    /**
     * Sets compressed
     *
     * @param bool|null $compressed compressed
     *
     * @return $this
     */
    public function setCompressed($compressed)
    {
        $this->container['compressed'] = $compressed;

        return $this;
    }

    /**
     * Gets message_hash
     *
     * @return string|null
     */
    public function getMessageHash()
    {
        return $this->container['message_hash'];
    }

    /**
     * Sets message_hash
     *
     * @param string|null $message_hash The double sha256 hash of the string encoded as Bitcoin Message binary.
     *
     * @return $this
     */
    public function setMessageHash($message_hash)
    {
        $this->container['message_hash'] = $message_hash;

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


