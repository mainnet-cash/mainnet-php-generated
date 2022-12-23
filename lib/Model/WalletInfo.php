<?php
/**
 * WalletInfo
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
 * The version of the OpenAPI document: 1.0.3
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
use \Mainnet\ObjectSerializer;

/**
 * WalletInfo Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WalletInfo extends NetworkEnum 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WalletInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cashaddr' => 'string',
        'tokenaddr' => 'string',
        'is_testnet' => 'bool',
        'name' => 'string',
        'public_key' => 'string',
        'public_key_hash' => 'string',
        'private_key' => 'string',
        'private_key_wif' => 'string',
        'seed' => 'string',
        'derivation_path' => 'string',
        'wallet_id' => 'string',
        'wallet_db_entry' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cashaddr' => null,
        'tokenaddr' => null,
        'is_testnet' => null,
        'name' => null,
        'public_key' => null,
        'public_key_hash' => null,
        'private_key' => null,
        'private_key_wif' => null,
        'seed' => null,
        'derivation_path' => null,
        'wallet_id' => null,
        'wallet_db_entry' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cashaddr' => 'cashaddr',
        'tokenaddr' => 'tokenaddr',
        'is_testnet' => 'isTestnet',
        'name' => 'name',
        'public_key' => 'publicKey',
        'public_key_hash' => 'publicKeyHash',
        'private_key' => 'privateKey',
        'private_key_wif' => 'privateKeyWif',
        'seed' => 'seed',
        'derivation_path' => 'derivationPath',
        'wallet_id' => 'walletId',
        'wallet_db_entry' => 'walletDbEntry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cashaddr' => 'setCashaddr',
        'tokenaddr' => 'setTokenaddr',
        'is_testnet' => 'setIsTestnet',
        'name' => 'setName',
        'public_key' => 'setPublicKey',
        'public_key_hash' => 'setPublicKeyHash',
        'private_key' => 'setPrivateKey',
        'private_key_wif' => 'setPrivateKeyWif',
        'seed' => 'setSeed',
        'derivation_path' => 'setDerivationPath',
        'wallet_id' => 'setWalletId',
        'wallet_db_entry' => 'setWalletDbEntry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cashaddr' => 'getCashaddr',
        'tokenaddr' => 'getTokenaddr',
        'is_testnet' => 'getIsTestnet',
        'name' => 'getName',
        'public_key' => 'getPublicKey',
        'public_key_hash' => 'getPublicKeyHash',
        'private_key' => 'getPrivateKey',
        'private_key_wif' => 'getPrivateKeyWif',
        'seed' => 'getSeed',
        'derivation_path' => 'getDerivationPath',
        'wallet_id' => 'getWalletId',
        'wallet_db_entry' => 'getWalletDbEntry'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['cashaddr'] = isset($data['cashaddr']) ? $data['cashaddr'] : null;
        $this->container['tokenaddr'] = isset($data['tokenaddr']) ? $data['tokenaddr'] : null;
        $this->container['is_testnet'] = isset($data['is_testnet']) ? $data['is_testnet'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['public_key'] = isset($data['public_key']) ? $data['public_key'] : null;
        $this->container['public_key_hash'] = isset($data['public_key_hash']) ? $data['public_key_hash'] : null;
        $this->container['private_key'] = isset($data['private_key']) ? $data['private_key'] : null;
        $this->container['private_key_wif'] = isset($data['private_key_wif']) ? $data['private_key_wif'] : null;
        $this->container['seed'] = isset($data['seed']) ? $data['seed'] : null;
        $this->container['derivation_path'] = isset($data['derivation_path']) ? $data['derivation_path'] : null;
        $this->container['wallet_id'] = isset($data['wallet_id']) ? $data['wallet_id'] : null;
        $this->container['wallet_db_entry'] = isset($data['wallet_db_entry']) ? $data['wallet_db_entry'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * @return string|null
     */
    public function getCashaddr()
    {
        return $this->container['cashaddr'];
    }

    /**
     * Sets cashaddr
     *
     * @param string|null $cashaddr cashaddr
     *
     * @return $this
     */
    public function setCashaddr($cashaddr)
    {
        $this->container['cashaddr'] = $cashaddr;

        return $this;
    }

    /**
     * Gets tokenaddr
     *
     * @return string|null
     */
    public function getTokenaddr()
    {
        return $this->container['tokenaddr'];
    }

    /**
     * Sets tokenaddr
     *
     * @param string|null $tokenaddr tokenaddr
     *
     * @return $this
     */
    public function setTokenaddr($tokenaddr)
    {
        $this->container['tokenaddr'] = $tokenaddr;

        return $this;
    }

    /**
     * Gets is_testnet
     *
     * @return bool|null
     */
    public function getIsTestnet()
    {
        return $this->container['is_testnet'];
    }

    /**
     * Sets is_testnet
     *
     * @param bool|null $is_testnet Whether the agreed value of the network is zero. True for all non-mainnet networks.
     *
     * @return $this
     */
    public function setIsTestnet($is_testnet)
    {
        $this->container['is_testnet'] = $is_testnet;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return string|null
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string|null $public_key public_key
     *
     * @return $this
     */
    public function setPublicKey($public_key)
    {
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets public_key_hash
     *
     * @return string|null
     */
    public function getPublicKeyHash()
    {
        return $this->container['public_key_hash'];
    }

    /**
     * Sets public_key_hash
     *
     * @param string|null $public_key_hash public_key_hash
     *
     * @return $this
     */
    public function setPublicKeyHash($public_key_hash)
    {
        $this->container['public_key_hash'] = $public_key_hash;

        return $this;
    }

    /**
     * Gets private_key
     *
     * @return string|null
     */
    public function getPrivateKey()
    {
        return $this->container['private_key'];
    }

    /**
     * Sets private_key
     *
     * @param string|null $private_key private_key
     *
     * @return $this
     */
    public function setPrivateKey($private_key)
    {
        $this->container['private_key'] = $private_key;

        return $this;
    }

    /**
     * Gets private_key_wif
     *
     * @return string|null
     */
    public function getPrivateKeyWif()
    {
        return $this->container['private_key_wif'];
    }

    /**
     * Sets private_key_wif
     *
     * @param string|null $private_key_wif private_key_wif
     *
     * @return $this
     */
    public function setPrivateKeyWif($private_key_wif)
    {
        $this->container['private_key_wif'] = $private_key_wif;

        return $this;
    }

    /**
     * Gets seed
     *
     * @return string|null
     */
    public function getSeed()
    {
        return $this->container['seed'];
    }

    /**
     * Sets seed
     *
     * @param string|null $seed seed
     *
     * @return $this
     */
    public function setSeed($seed)
    {
        $this->container['seed'] = $seed;

        return $this;
    }

    /**
     * Gets derivation_path
     *
     * @return string|null
     */
    public function getDerivationPath()
    {
        return $this->container['derivation_path'];
    }

    /**
     * Sets derivation_path
     *
     * @param string|null $derivation_path derivation_path
     *
     * @return $this
     */
    public function setDerivationPath($derivation_path)
    {
        $this->container['derivation_path'] = $derivation_path;

        return $this;
    }

    /**
     * Gets wallet_id
     *
     * @return string|null
     */
    public function getWalletId()
    {
        return $this->container['wallet_id'];
    }

    /**
     * Sets wallet_id
     *
     * @param string|null $wallet_id wallet_id
     *
     * @return $this
     */
    public function setWalletId($wallet_id)
    {
        $this->container['wallet_id'] = $wallet_id;

        return $this;
    }

    /**
     * Gets wallet_db_entry
     *
     * @return string|null
     */
    public function getWalletDbEntry()
    {
        return $this->container['wallet_db_entry'];
    }

    /**
     * Sets wallet_db_entry
     *
     * @param string|null $wallet_db_entry The serialized form with private information
     *
     * @return $this
     */
    public function setWalletDbEntry($wallet_db_entry)
    {
        $this->container['wallet_db_entry'] = $wallet_db_entry;

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


