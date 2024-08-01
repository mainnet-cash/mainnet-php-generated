<?php
/**
 * SendRequestOptions
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
 * The version of the OpenAPI document: 2.4.0
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
 * SendRequestOptions Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SendRequestOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SendRequestOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'utxo_ids' => 'string[]',
        'change_address' => 'string',
        'slp_semi_aware' => 'bool',
        'query_balance' => 'bool',
        'await_transaction_propagation' => 'bool',
        'fee_paid_by' => 'string',
        'check_token_quantities' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'utxo_ids' => null,
        'change_address' => null,
        'slp_semi_aware' => null,
        'query_balance' => null,
        'await_transaction_propagation' => null,
        'fee_paid_by' => null,
        'check_token_quantities' => null
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
        'utxo_ids' => 'utxoIds',
        'change_address' => 'changeAddress',
        'slp_semi_aware' => 'slpSemiAware',
        'query_balance' => 'queryBalance',
        'await_transaction_propagation' => 'awaitTransactionPropagation',
        'fee_paid_by' => 'feePaidBy',
        'check_token_quantities' => 'checkTokenQuantities'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'utxo_ids' => 'setUtxoIds',
        'change_address' => 'setChangeAddress',
        'slp_semi_aware' => 'setSlpSemiAware',
        'query_balance' => 'setQueryBalance',
        'await_transaction_propagation' => 'setAwaitTransactionPropagation',
        'fee_paid_by' => 'setFeePaidBy',
        'check_token_quantities' => 'setCheckTokenQuantities'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'utxo_ids' => 'getUtxoIds',
        'change_address' => 'getChangeAddress',
        'slp_semi_aware' => 'getSlpSemiAware',
        'query_balance' => 'getQueryBalance',
        'await_transaction_propagation' => 'getAwaitTransactionPropagation',
        'fee_paid_by' => 'getFeePaidBy',
        'check_token_quantities' => 'getCheckTokenQuantities'
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

    const FEE_PAID_BY_CHANGE = 'change';
    const FEE_PAID_BY_FIRST_OUTPUT = 'firstOutput';
    const FEE_PAID_BY_ANY_OUTPUTS = 'anyOutputs';
    const FEE_PAID_BY_LAST_OUTPUT = 'lastOutput';
    const FEE_PAID_BY_CHANGE_THEN_FIRST = 'changeThenFirst';
    const FEE_PAID_BY_CHANGE_THEN_ANY = 'changeThenAny';
    const FEE_PAID_BY_CHANGE_THEN_LAST = 'changeThenLast';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeePaidByAllowableValues()
    {
        return [
            self::FEE_PAID_BY_CHANGE,
            self::FEE_PAID_BY_FIRST_OUTPUT,
            self::FEE_PAID_BY_ANY_OUTPUTS,
            self::FEE_PAID_BY_LAST_OUTPUT,
            self::FEE_PAID_BY_CHANGE_THEN_FIRST,
            self::FEE_PAID_BY_CHANGE_THEN_ANY,
            self::FEE_PAID_BY_CHANGE_THEN_LAST,
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
        $this->container['utxo_ids'] = isset($data['utxo_ids']) ? $data['utxo_ids'] : null;
        $this->container['change_address'] = isset($data['change_address']) ? $data['change_address'] : null;
        $this->container['slp_semi_aware'] = isset($data['slp_semi_aware']) ? $data['slp_semi_aware'] : false;
        $this->container['query_balance'] = isset($data['query_balance']) ? $data['query_balance'] : true;
        $this->container['await_transaction_propagation'] = isset($data['await_transaction_propagation']) ? $data['await_transaction_propagation'] : true;
        $this->container['fee_paid_by'] = isset($data['fee_paid_by']) ? $data['fee_paid_by'] : 'change';
        $this->container['check_token_quantities'] = isset($data['check_token_quantities']) ? $data['check_token_quantities'] : true;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFeePaidByAllowableValues();
        if (!is_null($this->container['fee_paid_by']) && !in_array($this->container['fee_paid_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fee_paid_by', must be one of '%s'",
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
     * @param string[]|null $utxo_ids utxo_ids
     *
     * @return $this
     */
    public function setUtxoIds($utxo_ids)
    {
        $this->container['utxo_ids'] = $utxo_ids;

        return $this;
    }

    /**
     * Gets change_address
     *
     * @return string|null
     */
    public function getChangeAddress()
    {
        return $this->container['change_address'];
    }

    /**
     * Sets change_address
     *
     * @param string|null $change_address Cash address to receive change to
     *
     * @return $this
     */
    public function setChangeAddress($change_address)
    {
        $this->container['change_address'] = $change_address;

        return $this;
    }

    /**
     * Gets slp_semi_aware
     *
     * @return bool|null
     */
    public function getSlpSemiAware()
    {
        return $this->container['slp_semi_aware'];
    }

    /**
     * Sets slp_semi_aware
     *
     * @param bool|null $slp_semi_aware This flag requires an utxo to have more than 546 sats to be spendable and counted in the balance This option is not switched on by default
     *
     * @return $this
     */
    public function setSlpSemiAware($slp_semi_aware)
    {
        $this->container['slp_semi_aware'] = $slp_semi_aware;

        return $this;
    }

    /**
     * Gets query_balance
     *
     * @return bool|null
     */
    public function getQueryBalance()
    {
        return $this->container['query_balance'];
    }

    /**
     * Sets query_balance
     *
     * @param bool|null $query_balance A boolean flag to include the wallet balance after the successful `send` operation to the returned result If set to false, the balance will not be queried and returned, making the `send` call faster
     *
     * @return $this
     */
    public function setQueryBalance($query_balance)
    {
        $this->container['query_balance'] = $query_balance;

        return $this;
    }

    /**
     * Gets await_transaction_propagation
     *
     * @return bool|null
     */
    public function getAwaitTransactionPropagation()
    {
        return $this->container['await_transaction_propagation'];
    }

    /**
     * Sets await_transaction_propagation
     *
     * @param bool|null $await_transaction_propagation A boolean flag to wait for transaction to propagate through the network and be registered in the bitcoind and indexer. If set to false, the `send` call will be very fast, but the wallet UTXO state might be invalid for some 500ms.
     *
     * @return $this
     */
    public function setAwaitTransactionPropagation($await_transaction_propagation)
    {
        $this->container['await_transaction_propagation'] = $await_transaction_propagation;

        return $this;
    }

    /**
     * Gets fee_paid_by
     *
     * @return string|null
     */
    public function getFeePaidBy()
    {
        return $this->container['fee_paid_by'];
    }

    /**
     * Sets fee_paid_by
     *
     * @param string|null $fee_paid_by Fee allocation stragety. Convenience option to subtract fees from outputs if change is not sufficent to cover transaction costs.   * `change` - Change, pay the fees from change or error   * `firstOutput` - First Output, pay the fee from the first output or error   * `lastOutput` - Last Output, pay the fee from the last output or error   * `anyOutput` - Any Output, pay the fee from dust outputs or divide across all remaining non-dust outputs.   * `changeThenFirst` - Use change then first output or error.   * `changeThenLast` - Use change then last output or error.   * `changeThenAny` - Use change then any output stragety or error.
     *
     * @return $this
     */
    public function setFeePaidBy($fee_paid_by)
    {
        $allowedValues = $this->getFeePaidByAllowableValues();
        if (!is_null($fee_paid_by) && !in_array($fee_paid_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fee_paid_by', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fee_paid_by'] = $fee_paid_by;

        return $this;
    }

    /**
     * Gets check_token_quantities
     *
     * @return bool|null
     */
    public function getCheckTokenQuantities()
    {
        return $this->container['check_token_quantities'];
    }

    /**
     * Sets check_token_quantities
     *
     * @param bool|null $check_token_quantities Check that sum of input amounts and output amount for each token category matches. Prevents accidental burns.
     *
     * @return $this
     */
    public function setCheckTokenQuantities($check_token_quantities)
    {
        $this->container['check_token_quantities'] = $check_token_quantities;

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


