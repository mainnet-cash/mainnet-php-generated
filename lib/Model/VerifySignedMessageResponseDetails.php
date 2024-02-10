<?php
/**
 * VerifySignedMessageResponseDetails
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
 * The version of the OpenAPI document: 2.3.8
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
 * VerifySignedMessageResponseDetails Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VerifySignedMessageResponseDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VerifySignedMessageResponseDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'signature_type' => 'string',
        'message_hash' => 'string',
        'signature_valid' => 'bool',
        'public_key_hash_match' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'signature_type' => null,
        'message_hash' => null,
        'signature_valid' => null,
        'public_key_hash_match' => null
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
        'signature_type' => 'signatureType',
        'message_hash' => 'messageHash',
        'signature_valid' => 'signatureValid',
        'public_key_hash_match' => 'publicKeyHashMatch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signature_type' => 'setSignatureType',
        'message_hash' => 'setMessageHash',
        'signature_valid' => 'setSignatureValid',
        'public_key_hash_match' => 'setPublicKeyHashMatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signature_type' => 'getSignatureType',
        'message_hash' => 'getMessageHash',
        'signature_valid' => 'getSignatureValid',
        'public_key_hash_match' => 'getPublicKeyHashMatch'
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
        $this->container['signature_type'] = isset($data['signature_type']) ? $data['signature_type'] : null;
        $this->container['message_hash'] = isset($data['message_hash']) ? $data['message_hash'] : null;
        $this->container['signature_valid'] = isset($data['signature_valid']) ? $data['signature_valid'] : null;
        $this->container['public_key_hash_match'] = isset($data['public_key_hash_match']) ? $data['public_key_hash_match'] : null;
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
     * Gets signature_type
     *
     * @return string|null
     */
    public function getSignatureType()
    {
        return $this->container['signature_type'];
    }

    /**
     * Sets signature_type
     *
     * @param string|null $signature_type The type of signature passed
     *
     * @return $this
     */
    public function setSignatureType($signature_type)
    {
        $this->container['signature_type'] = $signature_type;

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
     * Gets signature_valid
     *
     * @return bool|null
     */
    public function getSignatureValid()
    {
        return $this->container['signature_valid'];
    }

    /**
     * Sets signature_valid
     *
     * @param bool|null $signature_valid A boolean indicating whether the signature is valid for the message
     *
     * @return $this
     */
    public function setSignatureValid($signature_valid)
    {
        $this->container['signature_valid'] = $signature_valid;

        return $this;
    }

    /**
     * Gets public_key_hash_match
     *
     * @return bool|null
     */
    public function getPublicKeyHashMatch()
    {
        return $this->container['public_key_hash_match'];
    }

    /**
     * Sets public_key_hash_match
     *
     * @param bool|null $public_key_hash_match A boolean indicating whether the publicKeyHash of a recoverable signature matches the provided cashaddr, false otherwise
     *
     * @return $this
     */
    public function setPublicKeyHashMatch($public_key_hash_match)
    {
        $this->container['public_key_hash_match'] = $public_key_hash_match;

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


