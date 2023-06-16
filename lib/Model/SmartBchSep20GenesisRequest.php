<?php
/**
 * SmartBchSep20GenesisRequest
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
 * The version of the OpenAPI document: 1.1.29
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
 * SmartBchSep20GenesisRequest Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SmartBchSep20GenesisRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SmartBchSep20GenesisRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'wallet_id' => 'string',
        'name' => 'string',
        'ticker' => 'string',
        'initial_amount' => 'AnyOfNumberString',
        'decimals' => 'float',
        'end_baton' => 'bool',
        'token_receiver_address' => 'string',
        'baton_receiver_address' => 'string',
        'overrides' => '\Mainnet\Model\SmartBchOverrides'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'wallet_id' => null,
        'name' => null,
        'ticker' => null,
        'initial_amount' => null,
        'decimals' => null,
        'end_baton' => null,
        'token_receiver_address' => null,
        'baton_receiver_address' => null,
        'overrides' => null
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
        'name' => 'name',
        'ticker' => 'ticker',
        'initial_amount' => 'initialAmount',
        'decimals' => 'decimals',
        'end_baton' => 'endBaton',
        'token_receiver_address' => 'tokenReceiverAddress',
        'baton_receiver_address' => 'batonReceiverAddress',
        'overrides' => 'overrides'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wallet_id' => 'setWalletId',
        'name' => 'setName',
        'ticker' => 'setTicker',
        'initial_amount' => 'setInitialAmount',
        'decimals' => 'setDecimals',
        'end_baton' => 'setEndBaton',
        'token_receiver_address' => 'setTokenReceiverAddress',
        'baton_receiver_address' => 'setBatonReceiverAddress',
        'overrides' => 'setOverrides'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wallet_id' => 'getWalletId',
        'name' => 'getName',
        'ticker' => 'getTicker',
        'initial_amount' => 'getInitialAmount',
        'decimals' => 'getDecimals',
        'end_baton' => 'getEndBaton',
        'token_receiver_address' => 'getTokenReceiverAddress',
        'baton_receiver_address' => 'getBatonReceiverAddress',
        'overrides' => 'getOverrides'
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
        $this->container['wallet_id'] = isset($data['wallet_id']) ? $data['wallet_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
        $this->container['initial_amount'] = isset($data['initial_amount']) ? $data['initial_amount'] : null;
        $this->container['decimals'] = isset($data['decimals']) ? $data['decimals'] : null;
        $this->container['end_baton'] = isset($data['end_baton']) ? $data['end_baton'] : null;
        $this->container['token_receiver_address'] = isset($data['token_receiver_address']) ? $data['token_receiver_address'] : null;
        $this->container['baton_receiver_address'] = isset($data['baton_receiver_address']) ? $data['baton_receiver_address'] : null;
        $this->container['overrides'] = isset($data['overrides']) ? $data['overrides'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['ticker'] === null) {
            $invalidProperties[] = "'ticker' can't be null";
        }
        if ($this->container['initial_amount'] === null) {
            $invalidProperties[] = "'initial_amount' can't be null";
        }
        if ($this->container['decimals'] === null) {
            $invalidProperties[] = "'decimals' can't be null";
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
     * @param string $wallet_id serialized wallet
     *
     * @return $this
     */
    public function setWalletId($wallet_id)
    {
        $this->container['wallet_id'] = $wallet_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Token name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ticker
     *
     * @return string
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     *
     * @param string $ticker Token ticker
     *
     * @return $this
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

        return $this;
    }

    /**
     * Gets initial_amount
     *
     * @return AnyOfNumberString
     */
    public function getInitialAmount()
    {
        return $this->container['initial_amount'];
    }

    /**
     * Sets initial_amount
     *
     * @param AnyOfNumberString $initial_amount Value is represented as number or string to avoid precision loss
     *
     * @return $this
     */
    public function setInitialAmount($initial_amount)
    {
        $this->container['initial_amount'] = $initial_amount;

        return $this;
    }

    /**
     * Gets decimals
     *
     * @return float
     */
    public function getDecimals()
    {
        return $this->container['decimals'];
    }

    /**
     * Sets decimals
     *
     * @param float $decimals Indicates that 1 token is divisible into 10^decimals base units
     *
     * @return $this
     */
    public function setDecimals($decimals)
    {
        $this->container['decimals'] = $decimals;

        return $this;
    }

    /**
     * Gets end_baton
     *
     * @return bool|null
     */
    public function getEndBaton()
    {
        return $this->container['end_baton'];
    }

    /**
     * Sets end_baton
     *
     * @param bool|null $end_baton Indicates if token should not be 'mintable', e.g. total circulation amount increased
     *
     * @return $this
     */
    public function setEndBaton($end_baton)
    {
        $this->container['end_baton'] = $end_baton;

        return $this;
    }

    /**
     * Gets token_receiver_address
     *
     * @return string|null
     */
    public function getTokenReceiverAddress()
    {
        return $this->container['token_receiver_address'];
    }

    /**
     * Sets token_receiver_address
     *
     * @param string|null $token_receiver_address token_receiver_address
     *
     * @return $this
     */
    public function setTokenReceiverAddress($token_receiver_address)
    {
        $this->container['token_receiver_address'] = $token_receiver_address;

        return $this;
    }

    /**
     * Gets baton_receiver_address
     *
     * @return string|null
     */
    public function getBatonReceiverAddress()
    {
        return $this->container['baton_receiver_address'];
    }

    /**
     * Sets baton_receiver_address
     *
     * @param string|null $baton_receiver_address baton_receiver_address
     *
     * @return $this
     */
    public function setBatonReceiverAddress($baton_receiver_address)
    {
        $this->container['baton_receiver_address'] = $baton_receiver_address;

        return $this;
    }

    /**
     * Gets overrides
     *
     * @return \Mainnet\Model\SmartBchOverrides|null
     */
    public function getOverrides()
    {
        return $this->container['overrides'];
    }

    /**
     * Sets overrides
     *
     * @param \Mainnet\Model\SmartBchOverrides|null $overrides overrides
     *
     * @return $this
     */
    public function setOverrides($overrides)
    {
        $this->container['overrides'] = $overrides;

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


