<?php
/**
 * GetAddressesResponse
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
 * The version of the OpenAPI document: 1.1.22
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
 * GetAddressesResponse Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetAddressesResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetAddressesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bchtest' => 'string',
        'slptest' => 'string',
        'sbchtest' => 'string',
        'sbchcontract' => 'string',
        'sbchtoken' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bchtest' => null,
        'slptest' => null,
        'sbchtest' => null,
        'sbchcontract' => null,
        'sbchtoken' => null
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
        'bchtest' => 'bchtest',
        'slptest' => 'slptest',
        'sbchtest' => 'sbchtest',
        'sbchcontract' => 'sbchcontract',
        'sbchtoken' => 'sbchtoken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bchtest' => 'setBchtest',
        'slptest' => 'setSlptest',
        'sbchtest' => 'setSbchtest',
        'sbchcontract' => 'setSbchcontract',
        'sbchtoken' => 'setSbchtoken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bchtest' => 'getBchtest',
        'slptest' => 'getSlptest',
        'sbchtest' => 'getSbchtest',
        'sbchcontract' => 'getSbchcontract',
        'sbchtoken' => 'getSbchtoken'
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
        $this->container['bchtest'] = isset($data['bchtest']) ? $data['bchtest'] : null;
        $this->container['slptest'] = isset($data['slptest']) ? $data['slptest'] : null;
        $this->container['sbchtest'] = isset($data['sbchtest']) ? $data['sbchtest'] : null;
        $this->container['sbchcontract'] = isset($data['sbchcontract']) ? $data['sbchcontract'] : null;
        $this->container['sbchtoken'] = isset($data['sbchtoken']) ? $data['sbchtoken'] : null;
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
     * Gets bchtest
     *
     * @return string|null
     */
    public function getBchtest()
    {
        return $this->container['bchtest'];
    }

    /**
     * Sets bchtest
     *
     * @param string|null $bchtest Cashaddr to return testnet BCH
     *
     * @return $this
     */
    public function setBchtest($bchtest)
    {
        $this->container['bchtest'] = $bchtest;

        return $this;
    }

    /**
     * Gets slptest
     *
     * @return string|null
     */
    public function getSlptest()
    {
        return $this->container['slptest'];
    }

    /**
     * Sets slptest
     *
     * @param string|null $slptest Slpaddr to return testnet SLP tokens
     *
     * @return $this
     */
    public function setSlptest($slptest)
    {
        $this->container['slptest'] = $slptest;

        return $this;
    }

    /**
     * Gets sbchtest
     *
     * @return string|null
     */
    public function getSbchtest()
    {
        return $this->container['sbchtest'];
    }

    /**
     * Sets sbchtest
     *
     * @param string|null $sbchtest SmartBch testnet faucet contract owner address
     *
     * @return $this
     */
    public function setSbchtest($sbchtest)
    {
        $this->container['sbchtest'] = $sbchtest;

        return $this;
    }

    /**
     * Gets sbchcontract
     *
     * @return string|null
     */
    public function getSbchcontract()
    {
        return $this->container['sbchcontract'];
    }

    /**
     * Sets sbchcontract
     *
     * @param string|null $sbchcontract SmartBch testnet contract address to return BCH and SEP20 tokens
     *
     * @return $this
     */
    public function setSbchcontract($sbchcontract)
    {
        $this->container['sbchcontract'] = $sbchcontract;

        return $this;
    }

    /**
     * Gets sbchtoken
     *
     * @return string|null
     */
    public function getSbchtoken()
    {
        return $this->container['sbchtoken'];
    }

    /**
     * Sets sbchtoken
     *
     * @param string|null $sbchtoken SmartBch testnet sample SEP20 token address
     *
     * @return $this
     */
    public function setSbchtoken($sbchtoken)
    {
        $this->container['sbchtoken'] = $sbchtoken;

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


