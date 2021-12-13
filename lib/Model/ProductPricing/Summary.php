<?php
/**
 * Summary
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace SellingPartnerApi\Model\ProductPricing;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * Summary Class Doc Comment
 *
 * @category Class
 * @description Contains price information about the product, including the LowestPrices and BuyBoxPrices, the ListPrice, the SuggestedLowerPricePlusShipping, and NumberOfOffers and NumberOfBuyBoxEligibleOffers.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Summary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Summary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_offer_count' => 'int',
        'number_of_offers' => '\SellingPartnerApi\Model\ProductPricing\OfferCountType[]',
        'lowest_prices' => '\SellingPartnerApi\Model\ProductPricing\LowestPriceType[]',
        'buy_box_prices' => '\SellingPartnerApi\Model\ProductPricing\BuyBoxPriceType[]',
        'list_price' => '\SellingPartnerApi\Model\ProductPricing\MoneyType',
        'competitive_price_threshold' => '\SellingPartnerApi\Model\ProductPricing\MoneyType',
        'suggested_lower_price_plus_shipping' => '\SellingPartnerApi\Model\ProductPricing\MoneyType',
        'sales_rankings' => '\SellingPartnerApi\Model\ProductPricing\SalesRankType[]',
        'buy_box_eligible_offers' => '\SellingPartnerApi\Model\ProductPricing\OfferCountType[]',
        'offers_available_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total_offer_count' => 'int32',
        'number_of_offers' => null,
        'lowest_prices' => null,
        'buy_box_prices' => null,
        'list_price' => null,
        'competitive_price_threshold' => null,
        'suggested_lower_price_plus_shipping' => null,
        'sales_rankings' => null,
        'buy_box_eligible_offers' => null,
        'offers_available_time' => null
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
        'total_offer_count' => 'TotalOfferCount',
        'number_of_offers' => 'NumberOfOffers',
        'lowest_prices' => 'LowestPrices',
        'buy_box_prices' => 'BuyBoxPrices',
        'list_price' => 'ListPrice',
        'competitive_price_threshold' => 'CompetitivePriceThreshold',
        'suggested_lower_price_plus_shipping' => 'SuggestedLowerPricePlusShipping',
        'sales_rankings' => 'SalesRankings',
        'buy_box_eligible_offers' => 'BuyBoxEligibleOffers',
        'offers_available_time' => 'OffersAvailableTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_offer_count' => 'setTotalOfferCount',
        'number_of_offers' => 'setNumberOfOffers',
        'lowest_prices' => 'setLowestPrices',
        'buy_box_prices' => 'setBuyBoxPrices',
        'list_price' => 'setListPrice',
        'competitive_price_threshold' => 'setCompetitivePriceThreshold',
        'suggested_lower_price_plus_shipping' => 'setSuggestedLowerPricePlusShipping',
        'sales_rankings' => 'setSalesRankings',
        'buy_box_eligible_offers' => 'setBuyBoxEligibleOffers',
        'offers_available_time' => 'setOffersAvailableTime',
        'headers' => 'setHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_offer_count' => 'getTotalOfferCount',
        'number_of_offers' => 'getNumberOfOffers',
        'lowest_prices' => 'getLowestPrices',
        'buy_box_prices' => 'getBuyBoxPrices',
        'list_price' => 'getListPrice',
        'competitive_price_threshold' => 'getCompetitivePriceThreshold',
        'suggested_lower_price_plus_shipping' => 'getSuggestedLowerPricePlusShipping',
        'sales_rankings' => 'getSalesRankings',
        'buy_box_eligible_offers' => 'getBuyBoxEligibleOffers',
        'offers_available_time' => 'getOffersAvailableTime',
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
        $this->container['total_offer_count'] = $data['total_offer_count'] ?? null;
        $this->container['number_of_offers'] = $data['number_of_offers'] ?? null;
        $this->container['lowest_prices'] = $data['lowest_prices'] ?? null;
        $this->container['buy_box_prices'] = $data['buy_box_prices'] ?? null;
        $this->container['list_price'] = $data['list_price'] ?? null;
        $this->container['competitive_price_threshold'] = $data['competitive_price_threshold'] ?? null;
        $this->container['suggested_lower_price_plus_shipping'] = $data['suggested_lower_price_plus_shipping'] ?? null;
        $this->container['sales_rankings'] = $data['sales_rankings'] ?? null;
        $this->container['buy_box_eligible_offers'] = $data['buy_box_eligible_offers'] ?? null;
        $this->container['offers_available_time'] = $data['offers_available_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['total_offer_count'] === null) {
            $invalidProperties[] = "'total_offer_count' can't be null";
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
     * Gets total_offer_count
     *
     * @return int
     */
    public function getTotalOfferCount()
    {
        return $this->container['total_offer_count'];
    }

    /**
     * Sets total_offer_count
     *
     * @param int $total_offer_count The number of unique offers contained in NumberOfOffers.
     *
     * @return self
     */
    public function setTotalOfferCount($total_offer_count)
    {
        $this->container['total_offer_count'] = $total_offer_count;

        return $this;
    }

    /**
     * Gets number_of_offers
     *
     * @return \SellingPartnerApi\Model\ProductPricing\OfferCountType[]|null
     */
    public function getNumberOfOffers()
    {
        return $this->container['number_of_offers'];
    }

    /**
     * Sets number_of_offers
     *
     * @param \SellingPartnerApi\Model\ProductPricing\OfferCountType[]|null $number_of_offers number_of_offers
     *
     * @return self
     */
    public function setNumberOfOffers($number_of_offers)
    {
        $this->container['number_of_offers'] = $number_of_offers;

        return $this;
    }

    /**
     * Gets lowest_prices
     *
     * @return \SellingPartnerApi\Model\ProductPricing\LowestPriceType[]|null
     */
    public function getLowestPrices()
    {
        return $this->container['lowest_prices'];
    }

    /**
     * Sets lowest_prices
     *
     * @param \SellingPartnerApi\Model\ProductPricing\LowestPriceType[]|null $lowest_prices lowest_prices
     *
     * @return self
     */
    public function setLowestPrices($lowest_prices)
    {
        $this->container['lowest_prices'] = $lowest_prices;

        return $this;
    }

    /**
     * Gets buy_box_prices
     *
     * @return \SellingPartnerApi\Model\ProductPricing\BuyBoxPriceType[]|null
     */
    public function getBuyBoxPrices()
    {
        return $this->container['buy_box_prices'];
    }

    /**
     * Sets buy_box_prices
     *
     * @param \SellingPartnerApi\Model\ProductPricing\BuyBoxPriceType[]|null $buy_box_prices buy_box_prices
     *
     * @return self
     */
    public function setBuyBoxPrices($buy_box_prices)
    {
        $this->container['buy_box_prices'] = $buy_box_prices;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return \SellingPartnerApi\Model\ProductPricing\MoneyType|null
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param \SellingPartnerApi\Model\ProductPricing\MoneyType|null $list_price list_price
     *
     * @return self
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets competitive_price_threshold
     *
     * @return \SellingPartnerApi\Model\ProductPricing\MoneyType|null
     */
    public function getCompetitivePriceThreshold()
    {
        return $this->container['competitive_price_threshold'];
    }

    /**
     * Sets competitive_price_threshold
     *
     * @param \SellingPartnerApi\Model\ProductPricing\MoneyType|null $competitive_price_threshold competitive_price_threshold
     *
     * @return self
     */
    public function setCompetitivePriceThreshold($competitive_price_threshold)
    {
        $this->container['competitive_price_threshold'] = $competitive_price_threshold;

        return $this;
    }

    /**
     * Gets suggested_lower_price_plus_shipping
     *
     * @return \SellingPartnerApi\Model\ProductPricing\MoneyType|null
     */
    public function getSuggestedLowerPricePlusShipping()
    {
        return $this->container['suggested_lower_price_plus_shipping'];
    }

    /**
     * Sets suggested_lower_price_plus_shipping
     *
     * @param \SellingPartnerApi\Model\ProductPricing\MoneyType|null $suggested_lower_price_plus_shipping suggested_lower_price_plus_shipping
     *
     * @return self
     */
    public function setSuggestedLowerPricePlusShipping($suggested_lower_price_plus_shipping)
    {
        $this->container['suggested_lower_price_plus_shipping'] = $suggested_lower_price_plus_shipping;

        return $this;
    }

    /**
     * Gets sales_rankings
     *
     * @return \SellingPartnerApi\Model\ProductPricing\SalesRankType[]|null
     */
    public function getSalesRankings()
    {
        return $this->container['sales_rankings'];
    }

    /**
     * Sets sales_rankings
     *
     * @param \SellingPartnerApi\Model\ProductPricing\SalesRankType[]|null $sales_rankings A list of sales rank information for the item, by category.
     *
     * @return self
     */
    public function setSalesRankings($sales_rankings)
    {
        $this->container['sales_rankings'] = $sales_rankings;

        return $this;
    }

    /**
     * Gets buy_box_eligible_offers
     *
     * @return \SellingPartnerApi\Model\ProductPricing\OfferCountType[]|null
     */
    public function getBuyBoxEligibleOffers()
    {
        return $this->container['buy_box_eligible_offers'];
    }

    /**
     * Sets buy_box_eligible_offers
     *
     * @param \SellingPartnerApi\Model\ProductPricing\OfferCountType[]|null $buy_box_eligible_offers buy_box_eligible_offers
     *
     * @return self
     */
    public function setBuyBoxEligibleOffers($buy_box_eligible_offers)
    {
        $this->container['buy_box_eligible_offers'] = $buy_box_eligible_offers;

        return $this;
    }

    /**
     * Gets offers_available_time
     *
     * @return string|null
     */
    public function getOffersAvailableTime()
    {
        return $this->container['offers_available_time'];
    }

    /**
     * Sets offers_available_time
     *
     * @param string|null $offers_available_time When the status is ActiveButTooSoonForProcessing, this is the time when the offers will be available for processing. Must be in ISO 8601 format.
     *
     * @return self
     */
    public function setOffersAvailableTime($offers_available_time)
    {
        $this->container['offers_available_time'] = $offers_available_time;

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


