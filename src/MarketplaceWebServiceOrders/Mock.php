<?php namespace MwsOrders;

use MarketplaceWebServiceOrders_Model_GetOrderResponse;
use MarketplaceWebServiceOrders_Model_GetServiceStatusResponse;
use MarketplaceWebServiceOrders_Model_ListOrderItemsByNextTokenResponse;
use MarketplaceWebServiceOrders_Model_ListOrderItemsResponse;
use MarketplaceWebServiceOrders_Model_ListOrdersByNextTokenResponse;
use MarketplaceWebServiceOrders_Model_ListOrdersResponse;

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

/**
 * @see MarketplaceWebServiceOrders_Interface
 */

class MarketplaceWebServiceOrders_Mock implements MarketplaceWebServiceOrders_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Order
     * This operation takes up to 50 order ids and returns the corresponding orders.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceOrders_Model_GetOrder request or MarketplaceWebServiceOrders_Model_GetOrder object itself
     * @return MarketplaceWebServiceOrders_Model_GetOrderResponse
     *
     * @see MarketplaceWebServiceOrders_Model_GetOrder
     * @throws \Exception
     */
    public function getOrder($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetOrderResponse.php');
        return MarketplaceWebServiceOrders_Model_GetOrderResponse::fromXML($this->_invoke('GetOrder'));
    }

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */
            TRUE);
    }

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     *        takes no input.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceOrders_Model_GetServiceStatus request or MarketplaceWebServiceOrders_Model_GetServiceStatus object itself
     * @return MarketplaceWebServiceOrders_Model_GetServiceStatusResponse
     *
     * @see MarketplaceWebServiceOrders_Model_GetServiceStatus
     * @throws \Exception
     */
    public function getServiceStatus($request)
    {
        return MarketplaceWebServiceOrders_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    /**
     * List Order Items
     * This operation can be used to list the items of the order indicated by the
     *         given order id (only a single Amazon order id is allowed).
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceOrders_Model_ListOrderItems request or MarketplaceWebServiceOrders_Model_ListOrderItems object itself
     * @return MarketplaceWebServiceOrders_Model_ListOrderItemsResponse
     *
     * @see MarketplaceWebServiceOrders_Model_ListOrderItems
     * @throws \Exception
     */
    public function listOrderItems($request)
    {
        require_once(dirname(__FILE__) . '/Model/ListOrderItemsResponse.php');
        return MarketplaceWebServiceOrders_Model_ListOrderItemsResponse::fromXML($this->_invoke('ListOrderItems'));
    }

    /**
     * List Order Items By Next Token
     * If ListOrderItems cannot return all the order items in one go, it will
     *         provide a nextToken. That nextToken can be used with this operation to
     *         retrive the next batch of items for that order.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceOrders_Model_ListOrderItemsByNextToken request or MarketplaceWebServiceOrders_Model_ListOrderItemsByNextToken object itself
     * @return MarketplaceWebServiceOrders_Model_ListOrderItemsByNextTokenResponse
     *
     * @see MarketplaceWebServiceOrders_Model_ListOrderItemsByNextToken
     * @throws \Exception
     */
    public function listOrderItemsByNextToken($request)
    {
        return MarketplaceWebServiceOrders_Model_ListOrderItemsByNextTokenResponse::fromXML($this->_invoke('ListOrderItemsByNextToken'));
    }

    /**
     * List Orders
     * ListOrders can be used to find orders that meet the specified criteria.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceOrders_Model_ListOrders request or MarketplaceWebServiceOrders_Model_ListOrders object itself
     * @return MarketplaceWebServiceOrders_Model_ListOrdersResponse
     *
     * @see MarketplaceWebServiceOrders_Model_ListOrders
     * @throws \Exception
     */
    public function listOrders($request)
    {
        require_once(dirname(__FILE__) . '/Model/ListOrdersResponse.php');
        return MarketplaceWebServiceOrders_Model_ListOrdersResponse::fromXML($this->_invoke('ListOrders'));
    }

    // Private API ------------------------------------------------------------//

    /**
     * List Orders By Next Token
     * If ListOrders returns a nextToken, thus indicating that there are more orders
     *         than returned that matched the given filter criteria, ListOrdersByNextToken
     *         can be used to retrieve those other orders using that nextToken.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceOrders_Model_ListOrdersByNextToken request or MarketplaceWebServiceOrders_Model_ListOrdersByNextToken object itself
     * @return MarketplaceWebServiceOrders_Model_ListOrdersByNextTokenResponse
     *
     * @see MarketplaceWebServiceOrders_Model_ListOrdersByNextToken
     * @throws \Exception
     */
    public function listOrdersByNextToken($request)
    {
        return MarketplaceWebServiceOrders_Model_ListOrdersByNextTokenResponse::fromXML($this->_invoke('ListOrdersByNextToken'));
    }

}
