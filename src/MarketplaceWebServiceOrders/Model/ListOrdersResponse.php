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
 * MarketplaceWebServiceOrders_Model_ListOrdersResponse
 *
 * Properties:
 * <ul>
 *
 * <li>ListOrdersResult: MarketplaceWebServiceOrders_Model_ListOrdersResult</li>
 * <li>ResponseMetadata: MarketplaceWebServiceOrders_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MarketplaceWebServiceOrders_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 * @property array _fields
 */
class MarketplaceWebServiceOrders_Model_ListOrdersResponse extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'ListOrdersResult' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_ListOrdersResult'),
            'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_ResponseMetadata'),
            'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Construct MarketplaceWebServiceOrders_Model_ListOrdersResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return MarketplaceWebServiceOrders_Model_ListOrdersResponse
     * @throws Exception
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListOrdersResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceOrders_Model_ListOrdersResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceOrders_Model_ListOrdersResponse from provided XML. 
                                  Make sure that ListOrdersResponse is a root element");
        }
    }

    /**
     * Get the value of the ListOrdersResult property.
     *
     * @return ListOrdersResult ListOrdersResult.
     */
    public function getListOrdersResult()
    {
        return $this->_fields['ListOrdersResult']['FieldValue'];
    }

    /**
     * Check to see if ListOrdersResult is set.
     *
     * @return true if ListOrdersResult is set.
     */
    public function isSetListOrdersResult()
    {
        return !is_null($this->_fields['ListOrdersResult']['FieldValue']);
    }

    /**
     * Set the value of ListOrdersResult, return this.
     *
     * @param listOrdersResult
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_ListOrdersResponse|This
     */
    public function withListOrdersResult($value)
    {
        $this->setListOrdersResult($value);
        return $this;
    }

    /**
     * Set the value of the ListOrdersResult property.
     *
     * @param MarketplaceWebServiceOrders_Model_ListOrdersResult listOrdersResult
     * @return MarketplaceWebServiceOrders_Model_ListOrdersResponse|this
     */
    public function setListOrdersResult($value)
    {
        $this->_fields['ListOrdersResult']['FieldValue'] = $value;
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
     * @return MarketplaceWebServiceOrders_Model_ListOrdersResponse|This
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
     * @return MarketplaceWebServiceOrders_Model_ListOrdersResponse|this
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
     * @return MarketplaceWebServiceOrders_Model_ListOrdersResponse|This
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
     * @return MarketplaceWebServiceOrders_Model_ListOrdersResponse|this
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
        $xml .= "<ListOrdersResponse xmlns=\"https://mws.amazonservices.com/Orders/2013-09-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListOrdersResponse>";
        return $xml;
    }

}
