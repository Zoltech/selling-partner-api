<?php
/**
 * PartyIdentification
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Orders
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * PartyIdentification Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PartyIdentification extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PartyIdentification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'party_id' => 'string',
        'address' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\Address',
        'tax_info' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\TaxRegistrationDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'party_id' => null,
        'address' => null,
        'tax_info' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'party_id' => 'partyId',
        'address' => 'address',
        'tax_info' => 'taxInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'party_id' => 'setPartyId',
        'address' => 'setAddress',
        'tax_info' => 'setTaxInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'party_id' => 'getPartyId',
        'address' => 'getAddress',
        'tax_info' => 'getTaxInfo'
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
        $this->container['party_id'] = $data['party_id'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['tax_info'] = $data['tax_info'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['party_id'] === null) {
            $invalidProperties[] = "'party_id' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets party_id
     *
     * @return string
     */
    public function getPartyId()
    {
        return $this->container['party_id'];
    }

    /**
     * Sets party_id
     *
     * @param string $party_id Assigned identification for the party. For example, warehouse code or vendor code. Please refer to specific party for more details.
     *
     * @return self
     */
    public function setPartyId($party_id)
    {
        $this->container['party_id'] = $party_id;

        return $this;
    }
    /**
     * Gets address
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }
    /**
     * Gets tax_info
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\TaxRegistrationDetails|null
     */
    public function getTaxInfo()
    {
        return $this->container['tax_info'];
    }

    /**
     * Sets tax_info
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\TaxRegistrationDetails|null $tax_info tax_info
     *
     * @return self
     */
    public function setTaxInfo($tax_info)
    {
        $this->container['tax_info'] = $tax_info;

        return $this;
    }
}


