<?php
/**
 * CurrencyAmount
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\MerchantFulfillmentV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * CurrencyAmount Class Doc Comment
 *
 * @category Class
 * @description Currency type and amount.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CurrencyAmount extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CurrencyAmount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency_code' => 'string',
        'amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currency_code' => null,
        'amount' => 'double'
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'currency_code' => 'CurrencyCode',
        'amount' => 'Amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_code' => 'setCurrencyCode',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_code' => 'getCurrencyCode',
        'amount' => 'getAmount'
    ];


    
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
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ((mb_strlen($this->container['currency_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency_code', the character length must be smaller than or equal to 3.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Three-digit currency code in ISO 4217 format.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if ((mb_strlen($currency_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency_code when calling CurrencyAmount., must be smaller than or equal to 3.');
        }

        $this->container['currency_code'] = $currency_code;

        return $this;
    }
    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount The currency amount.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }
}


