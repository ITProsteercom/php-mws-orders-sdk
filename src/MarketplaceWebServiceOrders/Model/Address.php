<?php namespace MwsOrders\Model;
/*******************************************************************************
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2018-08-01
 * Generated: Wed Aug 29 10:45:11 PDT 2018
 */

use MwsOrders\MarketplaceWebServiceOrders_Model;

/**
 * @see MarketplaceWebServiceOrders_Model
 */


/**
 * MarketplaceWebServiceOrders_Model_Address
 *
 * Properties:
 * <ul>
 *
 * <li>Name: string</li>
 * <li>AddressLine1: string</li>
 * <li>AddressLine2: string</li>
 * <li>AddressLine3: string</li>
 * <li>City: string</li>
 * <li>County: string</li>
 * <li>District: string</li>
 * <li>StateOrRegion: string</li>
 * <li>Municipality: string</li>
 * <li>PostalCode: string</li>
 * <li>CountryCode: string</li>
 * <li>Phone: string</li>
 * <li>AddressType: string</li>
 *
 * </ul>
 * @property array _fields
 */
class MarketplaceWebServiceOrders_Model_Address extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Name' => array('FieldValue' => null, 'FieldType' => 'string'),
            'AddressLine1' => array('FieldValue' => null, 'FieldType' => 'string'),
            'AddressLine2' => array('FieldValue' => null, 'FieldType' => 'string'),
            'AddressLine3' => array('FieldValue' => null, 'FieldType' => 'string'),
            'City' => array('FieldValue' => null, 'FieldType' => 'string'),
            'County' => array('FieldValue' => null, 'FieldType' => 'string'),
            'District' => array('FieldValue' => null, 'FieldType' => 'string'),
            'StateOrRegion' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Municipality' => array('FieldValue' => null, 'FieldType' => 'string'),
            'PostalCode' => array('FieldValue' => null, 'FieldType' => 'string'),
            'CountryCode' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Phone' => array('FieldValue' => null, 'FieldType' => 'string'),
            'AddressType' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Name property.
     *
     * @return String Name.
     */
    public function getName()
    {
        return $this->_fields['Name']['FieldValue'];
    }

    /**
     * Check to see if Name is set.
     *
     * @return true if Name is set.
     */
    public function isSetName()
    {
        return !is_null($this->_fields['Name']['FieldValue']);
    }

    /**
     * Set the value of Name, return this.
     *
     * @param name
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withName($value)
    {
        $this->setName($value);
        return $this;
    }

    /**
     * Set the value of the Name property.
     *
     * @param string name
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setName($value)
    {
        $this->_fields['Name']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the AddressLine1 property.
     *
     * @return String AddressLine1.
     */
    public function getAddressLine1()
    {
        return $this->_fields['AddressLine1']['FieldValue'];
    }

    /**
     * Check to see if AddressLine1 is set.
     *
     * @return true if AddressLine1 is set.
     */
    public function isSetAddressLine1()
    {
        return !is_null($this->_fields['AddressLine1']['FieldValue']);
    }

    /**
     * Set the value of AddressLine1, return this.
     *
     * @param addressLine1
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withAddressLine1($value)
    {
        $this->setAddressLine1($value);
        return $this;
    }

    /**
     * Set the value of the AddressLine1 property.
     *
     * @param string addressLine1
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setAddressLine1($value)
    {
        $this->_fields['AddressLine1']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the AddressLine2 property.
     *
     * @return String AddressLine2.
     */
    public function getAddressLine2()
    {
        return $this->_fields['AddressLine2']['FieldValue'];
    }

    /**
     * Check to see if AddressLine2 is set.
     *
     * @return true if AddressLine2 is set.
     */
    public function isSetAddressLine2()
    {
        return !is_null($this->_fields['AddressLine2']['FieldValue']);
    }

    /**
     * Set the value of AddressLine2, return this.
     *
     * @param addressLine2
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withAddressLine2($value)
    {
        $this->setAddressLine2($value);
        return $this;
    }

    /**
     * Set the value of the AddressLine2 property.
     *
     * @param string addressLine2
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setAddressLine2($value)
    {
        $this->_fields['AddressLine2']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the AddressLine3 property.
     *
     * @return String AddressLine3.
     */
    public function getAddressLine3()
    {
        return $this->_fields['AddressLine3']['FieldValue'];
    }

    /**
     * Check to see if AddressLine3 is set.
     *
     * @return true if AddressLine3 is set.
     */
    public function isSetAddressLine3()
    {
        return !is_null($this->_fields['AddressLine3']['FieldValue']);
    }

    /**
     * Set the value of AddressLine3, return this.
     *
     * @param addressLine3
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withAddressLine3($value)
    {
        $this->setAddressLine3($value);
        return $this;
    }

    /**
     * Set the value of the AddressLine3 property.
     *
     * @param string addressLine3
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setAddressLine3($value)
    {
        $this->_fields['AddressLine3']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the City property.
     *
     * @return String City.
     */
    public function getCity()
    {
        return $this->_fields['City']['FieldValue'];
    }

    /**
     * Check to see if City is set.
     *
     * @return true if City is set.
     */
    public function isSetCity()
    {
        return !is_null($this->_fields['City']['FieldValue']);
    }

    /**
     * Set the value of City, return this.
     *
     * @param city
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withCity($value)
    {
        $this->setCity($value);
        return $this;
    }

    /**
     * Set the value of the City property.
     *
     * @param string city
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setCity($value)
    {
        $this->_fields['City']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the County property.
     *
     * @return String County.
     */
    public function getCounty()
    {
        return $this->_fields['County']['FieldValue'];
    }

    /**
     * Check to see if County is set.
     *
     * @return true if County is set.
     */
    public function isSetCounty()
    {
        return !is_null($this->_fields['County']['FieldValue']);
    }

    /**
     * Set the value of County, return this.
     *
     * @param county
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withCounty($value)
    {
        $this->setCounty($value);
        return $this;
    }

    /**
     * Set the value of the County property.
     *
     * @param string county
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setCounty($value)
    {
        $this->_fields['County']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the District property.
     *
     * @return String District.
     */
    public function getDistrict()
    {
        return $this->_fields['District']['FieldValue'];
    }

    /**
     * Check to see if District is set.
     *
     * @return true if District is set.
     */
    public function isSetDistrict()
    {
        return !is_null($this->_fields['District']['FieldValue']);
    }

    /**
     * Set the value of District, return this.
     *
     * @param district
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withDistrict($value)
    {
        $this->setDistrict($value);
        return $this;
    }

    /**
     * Set the value of the District property.
     *
     * @param string district
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setDistrict($value)
    {
        $this->_fields['District']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the StateOrRegion property.
     *
     * @return String StateOrRegion.
     */
    public function getStateOrRegion()
    {
        return $this->_fields['StateOrRegion']['FieldValue'];
    }

    /**
     * Check to see if StateOrRegion is set.
     *
     * @return true if StateOrRegion is set.
     */
    public function isSetStateOrRegion()
    {
        return !is_null($this->_fields['StateOrRegion']['FieldValue']);
    }

    /**
     * Set the value of StateOrRegion, return this.
     *
     * @param stateOrRegion
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withStateOrRegion($value)
    {
        $this->setStateOrRegion($value);
        return $this;
    }

    /**
     * Set the value of the StateOrRegion property.
     *
     * @param string stateOrRegion
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setStateOrRegion($value)
    {
        $this->_fields['StateOrRegion']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the Municipality property.
     *
     * @return String Municipality.
     */
    public function getMunicipality()
    {
        return $this->_fields['Municipality']['FieldValue'];
    }

    /**
     * Check to see if Municipality is set.
     *
     * @return true if Municipality is set.
     */
    public function isSetMunicipality()
    {
        return !is_null($this->_fields['Municipality']['FieldValue']);
    }

    /**
     * Set the value of Municipality, return this.
     *
     * @param municipality
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withMunicipality($value)
    {
        $this->setMunicipality($value);
        return $this;
    }

    /**
     * Set the value of the Municipality property.
     *
     * @param string municipality
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setMunicipality($value)
    {
        $this->_fields['Municipality']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the PostalCode property.
     *
     * @return String PostalCode.
     */
    public function getPostalCode()
    {
        return $this->_fields['PostalCode']['FieldValue'];
    }

    /**
     * Check to see if PostalCode is set.
     *
     * @return true if PostalCode is set.
     */
    public function isSetPostalCode()
    {
        return !is_null($this->_fields['PostalCode']['FieldValue']);
    }

    /**
     * Set the value of PostalCode, return this.
     *
     * @param postalCode
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withPostalCode($value)
    {
        $this->setPostalCode($value);
        return $this;
    }

    /**
     * Set the value of the PostalCode property.
     *
     * @param string postalCode
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setPostalCode($value)
    {
        $this->_fields['PostalCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the CountryCode property.
     *
     * @return String CountryCode.
     */
    public function getCountryCode()
    {
        return $this->_fields['CountryCode']['FieldValue'];
    }

    /**
     * Check to see if CountryCode is set.
     *
     * @return true if CountryCode is set.
     */
    public function isSetCountryCode()
    {
        return !is_null($this->_fields['CountryCode']['FieldValue']);
    }

    /**
     * Set the value of CountryCode, return this.
     *
     * @param countryCode
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withCountryCode($value)
    {
        $this->setCountryCode($value);
        return $this;
    }

    /**
     * Set the value of the CountryCode property.
     *
     * @param string countryCode
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setCountryCode($value)
    {
        $this->_fields['CountryCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the Phone property.
     *
     * @return String Phone.
     */
    public function getPhone()
    {
        return $this->_fields['Phone']['FieldValue'];
    }

    /**
     * Check to see if Phone is set.
     *
     * @return true if Phone is set.
     */
    public function isSetPhone()
    {
        return !is_null($this->_fields['Phone']['FieldValue']);
    }

    /**
     * Set the value of Phone, return this.
     *
     * @param phone
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withPhone($value)
    {
        $this->setPhone($value);
        return $this;
    }

    /**
     * Set the value of the Phone property.
     *
     * @param string phone
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setPhone($value)
    {
        $this->_fields['Phone']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the AddressType property.
     *
     * @return String AddressType.
     */
    public function getAddressType()
    {
        return $this->_fields['AddressType']['FieldValue'];
    }

    /**
     * Check to see if AddressType is set.
     *
     * @return true if AddressType is set.
     */
    public function isSetAddressType()
    {
        return !is_null($this->_fields['AddressType']['FieldValue']);
    }

    /**
     * Set the value of AddressType, return this.
     *
     * @param addressType
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_Address|This
     */
    public function withAddressType($value)
    {
        $this->setAddressType($value);
        return $this;
    }

    /**
     * Set the value of the AddressType property.
     *
     * @param string addressType
     * @return MarketplaceWebServiceOrders_Model_Address|this
     */
    public function setAddressType($value)
    {
        $this->_fields['AddressType']['FieldValue'] = $value;
        return $this;
    }

}
