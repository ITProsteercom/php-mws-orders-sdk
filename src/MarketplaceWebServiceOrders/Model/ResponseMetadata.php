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
 * MarketplaceWebServiceOrders_Model_ResponseMetadata
 *
 * Properties:
 * <ul>
 *
 * <li>RequestId: string</li>
 *
 * </ul>
 * @property array _fields
 */
class MarketplaceWebServiceOrders_Model_ResponseMetadata extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'RequestId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the RequestId property.
     *
     * @return String RequestId.
     */
    public function getRequestId()
    {
        return $this->_fields['RequestId']['FieldValue'];
    }

    /**
     * Check to see if RequestId is set.
     *
     * @return true if RequestId is set.
     */
    public function isSetRequestId()
    {
        return !is_null($this->_fields['RequestId']['FieldValue']);
    }

    /**
     * Set the value of RequestId, return this.
     *
     * @param requestId
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_ResponseMetadata|This
     */
    public function withRequestId($value)
    {
        $this->setRequestId($value);
        return $this;
    }

    /**
     * Set the value of the RequestId property.
     *
     * @param string requestId
     * @return MarketplaceWebServiceOrders_Model_ResponseMetadata|this
     */
    public function setRequestId($value)
    {
        $this->_fields['RequestId']['FieldValue'] = $value;
        return $this;
    }

}
