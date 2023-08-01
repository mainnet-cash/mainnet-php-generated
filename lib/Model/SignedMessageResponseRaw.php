<?php
/**
 * SignedMessageResponseRaw
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
 * The version of the OpenAPI document: 1.1.32
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
 * SignedMessageResponseRaw Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SignedMessageResponseRaw implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SignedMessageResponseRaw';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ecdsa' => 'string',
        'schnorr' => 'string',
        'der' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ecdsa' => null,
        'schnorr' => null,
        'der' => null
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
        'ecdsa' => 'ecdsa',
        'schnorr' => 'schnorr',
        'der' => 'der'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ecdsa' => 'setEcdsa',
        'schnorr' => 'setSchnorr',
        'der' => 'setDer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ecdsa' => 'getEcdsa',
        'schnorr' => 'getSchnorr',
        'der' => 'getDer'
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
        $this->container['ecdsa'] = isset($data['ecdsa']) ? $data['ecdsa'] : null;
        $this->container['schnorr'] = isset($data['schnorr']) ? $data['schnorr'] : null;
        $this->container['der'] = isset($data['der']) ? $data['der'] : null;
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
     * Gets ecdsa
     *
     * @return string|null
     */
    public function getEcdsa()
    {
        return $this->container['ecdsa'];
    }

    /**
     * Sets ecdsa
     *
     * @param string|null $ecdsa Elliptic Curve Digital messageHash encoded as a base64 string
     *
     * @return $this
     */
    public function setEcdsa($ecdsa)
    {
        $this->container['ecdsa'] = $ecdsa;

        return $this;
    }

    /**
     * Gets schnorr
     *
     * @return string|null
     */
    public function getSchnorr()
    {
        return $this->container['schnorr'];
    }

    /**
     * Sets schnorr
     *
     * @param string|null $schnorr Schnorr signature of the messageHash encoded as a base64 string, Note from libauth: Nonces are generated using RFC6979, where the Section 3.6, 16-byte ASCII \"additional data\" is set to Schnorr+SHA256, see https://libauth.org/interfaces/secp256k1.html#signmessagehashschnorr
     *
     * @return $this
     */
    public function setSchnorr($schnorr)
    {
        $this->container['schnorr'] = $schnorr;

        return $this;
    }

    /**
     * Gets der
     *
     * @return string|null
     */
    public function getDer()
    {
        return $this->container['der'];
    }

    /**
     * Sets der
     *
     * @param string|null $der Signature of messageHash using DER (Distinguished Encoding Rules)
     *
     * @return $this
     */
    public function setDer($der)
    {
        $this->container['der'] = $der;

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


