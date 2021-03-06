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

use DOMDocument;
use DOMXPath;
use MwsOrders\MarketplaceWebServiceOrders_Model;

/**
 * @see MarketplaceWebServiceOrders_Model
 */


/**
 * MarketplaceWebServiceOrders_Model_ListOrderItemsResponse
 *
 * Properties:
 * <ul>
 *
 * <li>ListOrderItemsResult: MarketplaceWebServiceOrders_Model_ListOrderItemsResult</li>
 * <li>ResponseMetadata: MarketplaceWebServiceOrders_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MarketplaceWebServiceOrders_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 * @property array _fields
 */
class MarketplaceWebServiceOrders_Model_ListOrderItemsResponse extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'ListOrderItemsResult' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_ListOrderItemsResult'),
            'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_ResponseMetadata'),
            'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Construct MarketplaceWebServiceOrders_Model_ListOrderItemsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return MarketplaceWebServiceOrders_Model_ListOrderItemsResponse
     * @throws Exception
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListOrderItemsResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceOrders_Model_ListOrderItemsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceOrders_Model_ListOrderItemsResponse from provided XML. 
                                  Make sure that ListOrderItemsResponse is a root element");
        }
    }

    /**
     * Get the value of the ListOrderItemsResult property.
     *
     * @return ListOrderItemsResult ListOrderItemsResult.
     */
    public function getListOrderItemsResult()
    {
        return $this->_fields['ListOrderItemsResult']['FieldValue'];
    }

    /**
     * Check to see if ListOrderItemsResult is set.
     *
     * @return true if ListOrderItemsResult is set.
     */
    public function isSetListOrderItemsResult()
    {
        return !is_null($this->_fields['ListOrderItemsResult']['FieldValue']);
    }

    /**
     * Set the value of ListOrderItemsResult, return this.
     *
     * @param listOrderItemsResult
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_ListOrderItemsResponse|This
     */
    public function withListOrderItemsResult($value)
    {
        $this->setListOrderItemsResult($value);
        return $this;
    }

    /**
     * Set the value of the ListOrderItemsResult property.
     *
     * @param MarketplaceWebServiceOrders_Model_ListOrderItemsResult listOrderItemsResult
     * @return MarketplaceWebServiceOrders_Model_ListOrderItemsResponse|this
     */
    public function setListOrderItemsResult($value)
    {
        $this->_fields['ListOrderItemsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_ListOrderItemsResponse|This
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MarketplaceWebServiceOrders_Model_ResponseMetadata responseMetadata
     * @return MarketplaceWebServiceOrders_Model_ListOrderItemsResponse|this
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_ListOrderItemsResponse|This
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MarketplaceWebServiceOrders_Model_ResponseHeaderMetadata responseHeaderMetadata
     * @return MarketplaceWebServiceOrders_Model_ListOrderItemsResponse|this
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<ListOrderItemsResponse xmlns=\"https://mws.amazonservices.com/Orders/2013-09-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListOrderItemsResponse>";
        return $xml;
    }

}
