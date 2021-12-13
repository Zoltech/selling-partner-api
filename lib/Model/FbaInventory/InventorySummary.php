<?php
/**
 * InventorySummary
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network. Today this API is available only in the North America region. In 2021 we plan to release this API in the Europe and Far East regions.
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

namespace SellingPartnerApi\Model\FbaInventory;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * InventorySummary Class Doc Comment
 *
 * @category Class
 * @description Inventory summary for a specific item.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InventorySummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventorySummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asin' => 'string',
        'fn_sku' => 'string',
        'seller_sku' => 'string',
        'condition' => 'string',
        'inventory_details' => '\SellingPartnerApi\Model\FbaInventory\InventoryDetails',
        'last_updated_time' => 'string',
        'product_name' => 'string',
        'total_quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asin' => null,
        'fn_sku' => null,
        'seller_sku' => null,
        'condition' => null,
        'inventory_details' => null,
        'last_updated_time' => null,
        'product_name' => null,
        'total_quantity' => null
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
        'asin' => 'asin',
        'fn_sku' => 'fnSku',
        'seller_sku' => 'sellerSku',
        'condition' => 'condition',
        'inventory_details' => 'inventoryDetails',
        'last_updated_time' => 'lastUpdatedTime',
        'product_name' => 'productName',
        'total_quantity' => 'totalQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'fn_sku' => 'setFnSku',
        'seller_sku' => 'setSellerSku',
        'condition' => 'setCondition',
        'inventory_details' => 'setInventoryDetails',
        'last_updated_time' => 'setLastUpdatedTime',
        'product_name' => 'setProductName',
        'total_quantity' => 'setTotalQuantity',
        'headers' => 'setHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'fn_sku' => 'getFnSku',
        'seller_sku' => 'getSellerSku',
        'condition' => 'getCondition',
        'inventory_details' => 'getInventoryDetails',
        'last_updated_time' => 'getLastUpdatedTime',
        'product_name' => 'getProductName',
        'total_quantity' => 'getTotalQuantity',
        'headers' => 'getHeaders'
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['fn_sku'] = $data['fn_sku'] ?? null;
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['inventory_details'] = $data['inventory_details'] ?? null;
        $this->container['last_updated_time'] = $data['last_updated_time'] ?? null;
        $this->container['product_name'] = $data['product_name'] ?? null;
        $this->container['total_quantity'] = $data['total_quantity'] ?? null;
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
     * Gets headers, if this is a top-level response model
     *
     * @return array[string]|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers (only relevant to response models)
     *
     * @param array[string => string]|null $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }


    /**
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN) of an item.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets fn_sku
     *
     * @return string|null
     */
    public function getFnSku()
    {
        return $this->container['fn_sku'];
    }

    /**
     * Sets fn_sku
     *
     * @param string|null $fn_sku Amazon's fulfillment network SKU identifier.
     *
     * @return self
     */
    public function setFnSku($fn_sku)
    {
        $this->container['fn_sku'] = $fn_sku;

        return $this;
    }

    /**
     * Gets seller_sku
     *
     * @return string|null
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string|null $seller_sku The seller SKU of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition The condition of the item as described by the seller (for example, New Item).
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets inventory_details
     *
     * @return \SellingPartnerApi\Model\FbaInventory\InventoryDetails|null
     */
    public function getInventoryDetails()
    {
        return $this->container['inventory_details'];
    }

    /**
     * Sets inventory_details
     *
     * @param \SellingPartnerApi\Model\FbaInventory\InventoryDetails|null $inventory_details inventory_details
     *
     * @return self
     */
    public function setInventoryDetails($inventory_details)
    {
        $this->container['inventory_details'] = $inventory_details;

        return $this;
    }

    /**
     * Gets last_updated_time
     *
     * @return string|null
     */
    public function getLastUpdatedTime()
    {
        return $this->container['last_updated_time'];
    }

    /**
     * Sets last_updated_time
     *
     * @param string|null $last_updated_time The date and time that any quantity was last updated in ISO8601 format.
     *
     * @return self
     */
    public function setLastUpdatedTime($last_updated_time)
    {
        $this->container['last_updated_time'] = $last_updated_time;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string|null $product_name The localized language product title of the item within the specific marketplace.
     *
     * @return self
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets total_quantity
     *
     * @return int|null
     */
    public function getTotalQuantity()
    {
        return $this->container['total_quantity'];
    }

    /**
     * Sets total_quantity
     *
     * @param int|null $total_quantity The total number of units in an inbound shipment or in Amazon fulfillment centers.
     *
     * @return self
     */
    public function setTotalQuantity($total_quantity)
    {
        $this->container['total_quantity'] = $total_quantity;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


