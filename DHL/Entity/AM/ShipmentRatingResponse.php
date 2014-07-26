<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * ShipmentRatingResponse Request model for DHL API
 */
class ShipmentRatingResponse extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'ShipmentRatingResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentRatingResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Response' => array(
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
        ), 
        'Note' => array(
            'type' => 'Note',
            'required' => false,
            'subobject' => true,
        ), 
        'Rated' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ShippingCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ShippingCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
        'SaturdayDeliveryCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ProofOfDeliveryCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DutyPayCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'OnForwardCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'InsuranceCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PackageCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'PackageCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
        'ChargeableWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DimensionalWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'OriginServiceArea' => array(
            'type' => 'OriginServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'DestinationServiceArea' => array(
            'type' => 'DestinationServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'CurrencyCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'WeightUnit' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'length' => '1',
            'enumeration' => 'K,L',
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'Surcharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ZoneID' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
