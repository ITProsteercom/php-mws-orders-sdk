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
 * MarketplaceWebServiceOrders_Model_ProductInfoDetail
 *
 * Properties:
 * <ul>
 *
 * <li>NumberOfItems: int</li>
 *
 * </ul>
 * @property array _fields
 */
class MarketplaceWebServiceOrders_Model_ProductInfoDetail extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'NumberOfItems' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the NumberOfItems property.
     *
     * @return Integer NumberOfItems.
     */
    public function getNumberOfItems()
    {
        return $this->_fields['NumberOfItems']['FieldValue'];
    }

    /**
     * Check to see if NumberOfItems is set.
     *
     * @return true if NumberOfItems is set.
     */
    public function isSetNumberOfItems()
    {
        return !is_null($this->_fields['NumberOfItems']['FieldValue']);
    }

    /**
     * Set the value of NumberOfItems, return this.
     *
     * @param numberOfItems
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_ProductInfoDetail|This
     */
    public function withNumberOfItems($value)
    {
        $this->setNumberOfItems($value);
        return $this;
    }

    /**
     * Set the value of the NumberOfItems property.
     *
     * @param int numberOfItems
     * @return MarketplaceWebServiceOrders_Model_ProductInfoDetail|this
     */
    public function setNumberOfItems($value)
    {
        $this->_fields['NumberOfItems']['FieldValue'] = $value;
        return $this;
    }

}
