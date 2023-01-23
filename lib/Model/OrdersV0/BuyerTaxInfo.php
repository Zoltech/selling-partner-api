<?php
/**
 * BuyerTaxInfo
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
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

namespace SellingPartnerApi\Model\OrdersV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * BuyerTaxInfo Class Doc Comment
 *
 * @category Class
 * @description Tax information about the buyer.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class BuyerTaxInfo extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BuyerTaxInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_legal_name' => 'string',
        'taxing_region' => 'string',
        'tax_classifications' => '\SellingPartnerApi\Model\OrdersV0\TaxClassification[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'company_legal_name' => null,
        'taxing_region' => null,
        'tax_classifications' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'company_legal_name' => 'CompanyLegalName',
        'taxing_region' => 'TaxingRegion',
        'tax_classifications' => 'TaxClassifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_legal_name' => 'setCompanyLegalName',
        'taxing_region' => 'setTaxingRegion',
        'tax_classifications' => 'setTaxClassifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_legal_name' => 'getCompanyLegalName',
        'taxing_region' => 'getTaxingRegion',
        'tax_classifications' => 'getTaxClassifications'
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
        $this->container['company_legal_name'] = $data['company_legal_name'] ?? null;
        $this->container['taxing_region'] = $data['taxing_region'] ?? null;
        $this->container['tax_classifications'] = $data['tax_classifications'] ?? null;
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
     * Gets company_legal_name
     *
     * @return string|null
     */
    public function getCompanyLegalName()
    {
        return $this->container['company_legal_name'];
    }

    /**
     * Sets company_legal_name
     *
     * @param string|null $company_legal_name The legal name of the company.
     *
     * @return self
     */
    public function setCompanyLegalName($company_legal_name)
    {
        $this->container['company_legal_name'] = $company_legal_name;

        return $this;
    }
    /**
     * Gets taxing_region
     *
     * @return string|null
     */
    public function getTaxingRegion()
    {
        return $this->container['taxing_region'];
    }

    /**
     * Sets taxing_region
     *
     * @param string|null $taxing_region The country or region imposing the tax.
     *
     * @return self
     */
    public function setTaxingRegion($taxing_region)
    {
        $this->container['taxing_region'] = $taxing_region;

        return $this;
    }
    /**
     * Gets tax_classifications
     *
     * @return \SellingPartnerApi\Model\OrdersV0\TaxClassification[]|null
     */
    public function getTaxClassifications()
    {
        return $this->container['tax_classifications'];
    }

    /**
     * Sets tax_classifications
     *
     * @param \SellingPartnerApi\Model\OrdersV0\TaxClassification[]|null $tax_classifications A list of tax classifications that apply to the order.
     *
     * @return self
     */
    public function setTaxClassifications($tax_classifications)
    {
        $this->container['tax_classifications'] = $tax_classifications;

        return $this;
    }
}


