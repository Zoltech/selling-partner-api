<?php
/**
 * TermsAndConditionsNotAcceptedCarrier
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
 * TermsAndConditionsNotAcceptedCarrier Class Doc Comment
 *
 * @category Class
 * @description A carrier whose terms and conditions have not been accepted by the seller.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TermsAndConditionsNotAcceptedCarrier extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TermsAndConditionsNotAcceptedCarrier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'carrier_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'carrier_name' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'carrier_name' => 'CarrierName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_name' => 'setCarrierName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_name' => 'getCarrierName'
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
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name The name of the carrier.
     *
     * @return self
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }
}


