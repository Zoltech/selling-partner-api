<?php
/**
 * OrderItemStatusOrderedQuantity
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorOrdersV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * OrderItemStatusOrderedQuantity Class Doc Comment
 *
 * @category Class
 * @description Ordered quantity information.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderItemStatusOrderedQuantity extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItemStatus_orderedQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ordered_quantity' => '\SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity',
        'ordered_quantity_details' => '\SellingPartnerApi\Model\VendorOrdersV1\OrderedQuantityDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ordered_quantity' => null,
        'ordered_quantity_details' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ordered_quantity' => 'orderedQuantity',
        'ordered_quantity_details' => 'orderedQuantityDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ordered_quantity' => 'setOrderedQuantity',
        'ordered_quantity_details' => 'setOrderedQuantityDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ordered_quantity' => 'getOrderedQuantity',
        'ordered_quantity_details' => 'getOrderedQuantityDetails'
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
        $this->container['ordered_quantity'] = $data['ordered_quantity'] ?? null;
        $this->container['ordered_quantity_details'] = $data['ordered_quantity_details'] ?? null;
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
     * Gets ordered_quantity
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity|null
     */
    public function getOrderedQuantity()
    {
        return $this->container['ordered_quantity'];
    }

    /**
     * Sets ordered_quantity
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity|null $ordered_quantity ordered_quantity
     *
     * @return self
     */
    public function setOrderedQuantity($ordered_quantity)
    {
        $this->container['ordered_quantity'] = $ordered_quantity;

        return $this;
    }
    /**
     * Gets ordered_quantity_details
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\OrderedQuantityDetails[]|null
     */
    public function getOrderedQuantityDetails()
    {
        return $this->container['ordered_quantity_details'];
    }

    /**
     * Sets ordered_quantity_details
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\OrderedQuantityDetails[]|null $ordered_quantity_details Details of item quantity ordered.
     *
     * @return self
     */
    public function setOrderedQuantityDetails($ordered_quantity_details)
    {
        $this->container['ordered_quantity_details'] = $ordered_quantity_details;

        return $this;
    }
}


