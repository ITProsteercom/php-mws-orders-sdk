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
 * MarketplaceWebServiceOrders_Model_TaxCollection
 *
 * Properties:
 * <ul>
 *
 * <li>Model: string</li>
 * <li>ResponsibleParty: string</li>
 *
 * </ul>
 * @property array _fields
 */
class MarketplaceWebServiceOrders_Model_TaxCollection extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Model' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ResponsibleParty' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Model property.
     *
     * @return String Model.
     */
    public function getModel()
    {
        return $this->_fields['Model']['FieldValue'];
    }

    /**
     * Check to see if Model is set.
     *
     * @return true if Model is set.
     */
    public function isSetModel()
    {
        return !is_null($this->_fields['Model']['FieldValue']);
    }

    /**
     * Set the value of Model, return this.
     *
     * @param model
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_TaxCollection|This
     */
    public function withModel($value)
    {
        $this->setModel($value);
        return $this;
    }

    /**
     * Set the value of the Model property.
     *
     * @param string model
     * @return MarketplaceWebServiceOrders_Model_TaxCollection|this
     */
    public function setModel($value)
    {
        $this->_fields['Model']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ResponsibleParty property.
     *
     * @return String ResponsibleParty.
     */
    public function getResponsibleParty()
    {
        return $this->_fields['ResponsibleParty']['FieldValue'];
    }

    /**
     * Check to see if ResponsibleParty is set.
     *
     * @return true if ResponsibleParty is set.
     */
    public function isSetResponsibleParty()
    {
        return !is_null($this->_fields['ResponsibleParty']['FieldValue']);
    }

    /**
     * Set the value of ResponsibleParty, return this.
     *
     * @param responsibleParty
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_TaxCollection|This
     */
    public function withResponsibleParty($value)
    {
        $this->setResponsibleParty($value);
        return $this;
    }

    /**
     * Set the value of the ResponsibleParty property.
     *
     * @param string responsibleParty
     * @return MarketplaceWebServiceOrders_Model_TaxCollection|this
     */
    public function setResponsibleParty($value)
    {
        $this->_fields['ResponsibleParty']['FieldValue'] = $value;
        return $this;
    }

}
