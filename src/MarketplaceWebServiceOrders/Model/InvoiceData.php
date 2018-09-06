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
 * MarketplaceWebServiceOrders_Model_InvoiceData
 *
 * Properties:
 * <ul>
 *
 * <li>InvoiceRequirement: string</li>
 * <li>BuyerSelectedInvoiceCategory: string</li>
 * <li>InvoiceTitle: string</li>
 * <li>InvoiceInformation: string</li>
 *
 * </ul>
 * @property array _fields
 */
class MarketplaceWebServiceOrders_Model_InvoiceData extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'InvoiceRequirement' => array('FieldValue' => null, 'FieldType' => 'string'),
            'BuyerSelectedInvoiceCategory' => array('FieldValue' => null, 'FieldType' => 'string'),
            'InvoiceTitle' => array('FieldValue' => null, 'FieldType' => 'string'),
            'InvoiceInformation' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the InvoiceRequirement property.
     *
     * @return String InvoiceRequirement.
     */
    public function getInvoiceRequirement()
    {
        return $this->_fields['InvoiceRequirement']['FieldValue'];
    }

    /**
     * Check to see if InvoiceRequirement is set.
     *
     * @return true if InvoiceRequirement is set.
     */
    public function isSetInvoiceRequirement()
    {
        return !is_null($this->_fields['InvoiceRequirement']['FieldValue']);
    }

    /**
     * Set the value of InvoiceRequirement, return this.
     *
     * @param invoiceRequirement
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_InvoiceData|This
     */
    public function withInvoiceRequirement($value)
    {
        $this->setInvoiceRequirement($value);
        return $this;
    }

    /**
     * Set the value of the InvoiceRequirement property.
     *
     * @param string invoiceRequirement
     * @return MarketplaceWebServiceOrders_Model_InvoiceData|this
     */
    public function setInvoiceRequirement($value)
    {
        $this->_fields['InvoiceRequirement']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the BuyerSelectedInvoiceCategory property.
     *
     * @return String BuyerSelectedInvoiceCategory.
     */
    public function getBuyerSelectedInvoiceCategory()
    {
        return $this->_fields['BuyerSelectedInvoiceCategory']['FieldValue'];
    }

    /**
     * Check to see if BuyerSelectedInvoiceCategory is set.
     *
     * @return true if BuyerSelectedInvoiceCategory is set.
     */
    public function isSetBuyerSelectedInvoiceCategory()
    {
        return !is_null($this->_fields['BuyerSelectedInvoiceCategory']['FieldValue']);
    }

    /**
     * Set the value of BuyerSelectedInvoiceCategory, return this.
     *
     * @param buyerSelectedInvoiceCategory
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_InvoiceData|This
     */
    public function withBuyerSelectedInvoiceCategory($value)
    {
        $this->setBuyerSelectedInvoiceCategory($value);
        return $this;
    }

    /**
     * Set the value of the BuyerSelectedInvoiceCategory property.
     *
     * @param string buyerSelectedInvoiceCategory
     * @return MarketplaceWebServiceOrders_Model_InvoiceData|this
     */
    public function setBuyerSelectedInvoiceCategory($value)
    {
        $this->_fields['BuyerSelectedInvoiceCategory']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the InvoiceTitle property.
     *
     * @return String InvoiceTitle.
     */
    public function getInvoiceTitle()
    {
        return $this->_fields['InvoiceTitle']['FieldValue'];
    }

    /**
     * Check to see if InvoiceTitle is set.
     *
     * @return true if InvoiceTitle is set.
     */
    public function isSetInvoiceTitle()
    {
        return !is_null($this->_fields['InvoiceTitle']['FieldValue']);
    }

    /**
     * Set the value of InvoiceTitle, return this.
     *
     * @param invoiceTitle
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_InvoiceData|This
     */
    public function withInvoiceTitle($value)
    {
        $this->setInvoiceTitle($value);
        return $this;
    }

    /**
     * Set the value of the InvoiceTitle property.
     *
     * @param string invoiceTitle
     * @return MarketplaceWebServiceOrders_Model_InvoiceData|this
     */
    public function setInvoiceTitle($value)
    {
        $this->_fields['InvoiceTitle']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the InvoiceInformation property.
     *
     * @return String InvoiceInformation.
     */
    public function getInvoiceInformation()
    {
        return $this->_fields['InvoiceInformation']['FieldValue'];
    }

    /**
     * Check to see if InvoiceInformation is set.
     *
     * @return true if InvoiceInformation is set.
     */
    public function isSetInvoiceInformation()
    {
        return !is_null($this->_fields['InvoiceInformation']['FieldValue']);
    }

    /**
     * Set the value of InvoiceInformation, return this.
     *
     * @param invoiceInformation
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_InvoiceData|This
     */
    public function withInvoiceInformation($value)
    {
        $this->setInvoiceInformation($value);
        return $this;
    }

    /**
     * Set the value of the InvoiceInformation property.
     *
     * @param string invoiceInformation
     * @return MarketplaceWebServiceOrders_Model_InvoiceData|this
     */
    public function setInvoiceInformation($value)
    {
        $this->_fields['InvoiceInformation']['FieldValue'] = $value;
        return $this;
    }

}
