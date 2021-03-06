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
 * MarketplaceWebServiceOrders_Model_OrderItem
 *
 * Properties:
 * <ul>
 *
 * <li>ASIN: string</li>
 * <li>SellerSKU: string</li>
 * <li>OrderItemId: string</li>
 * <li>Title: string</li>
 * <li>QuantityOrdered: int</li>
 * <li>QuantityShipped: int</li>
 * <li>ProductInfo: MarketplaceWebServiceOrders_Model_ProductInfoDetail</li>
 * <li>PointsGranted: MarketplaceWebServiceOrders_Model_PointsGrantedDetail</li>
 * <li>ItemPrice: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>ShippingPrice: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>GiftWrapPrice: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>ItemTax: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>ShippingTax: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>GiftWrapTax: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>ShippingDiscount: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>ShippingDiscountTax: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>PromotionDiscount: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>PromotionDiscountTax: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>PromotionIds: array</li>
 * <li>CODFee: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>CODFeeDiscount: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>IsGift: bool</li>
 * <li>GiftMessageText: string</li>
 * <li>GiftWrapLevel: string</li>
 * <li>InvoiceData: MarketplaceWebServiceOrders_Model_InvoiceData</li>
 * <li>ConditionNote: string</li>
 * <li>ConditionId: string</li>
 * <li>ConditionSubtypeId: string</li>
 * <li>ScheduledDeliveryStartDate: string</li>
 * <li>ScheduledDeliveryEndDate: string</li>
 * <li>PriceDesignation: string</li>
 * <li>BuyerCustomizedInfo: MarketplaceWebServiceOrders_Model_BuyerCustomizedInfoDetail</li>
 * <li>TaxCollection: MarketplaceWebServiceOrders_Model_TaxCollection</li>
 *
 * </ul>
 * @property array _fields
 */
class MarketplaceWebServiceOrders_Model_OrderItem extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'),
            'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
            'OrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Title' => array('FieldValue' => null, 'FieldType' => 'string'),
            'QuantityOrdered' => array('FieldValue' => null, 'FieldType' => 'int'),
            'QuantityShipped' => array('FieldValue' => null, 'FieldType' => 'int'),
            'ProductInfo' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_ProductInfoDetail'),
            'PointsGranted' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_PointsGrantedDetail'),
            'ItemPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
            'ShippingPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
            'GiftWrapPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
            'ItemTax' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
            'ShippingTax' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
            'GiftWrapTax' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
            'ShippingDiscount' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
            'ShippingDiscountTax' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
            'PromotionDiscount' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
            'PromotionDiscountTax' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
            'PromotionIds' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'PromotionId'),
            'CODFee' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
            'CODFeeDiscount' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
            'IsGift' => array('FieldValue' => null, 'FieldType' => 'bool'),
            'GiftMessageText' => array('FieldValue' => null, 'FieldType' => 'string'),
            'GiftWrapLevel' => array('FieldValue' => null, 'FieldType' => 'string'),
            'InvoiceData' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_InvoiceData'),
            'ConditionNote' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ConditionId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ConditionSubtypeId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ScheduledDeliveryStartDate' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ScheduledDeliveryEndDate' => array('FieldValue' => null, 'FieldType' => 'string'),
            'PriceDesignation' => array('FieldValue' => null, 'FieldType' => 'string'),
            'BuyerCustomizedInfo' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_BuyerCustomizedInfoDetail'),
            'TaxCollection' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_TaxCollection'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
        return !is_null($this->_fields['ASIN']['FieldValue']);
    }

    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the OrderItemId property.
     *
     * @return String OrderItemId.
     */
    public function getOrderItemId()
    {
        return $this->_fields['OrderItemId']['FieldValue'];
    }

    /**
     * Check to see if OrderItemId is set.
     *
     * @return true if OrderItemId is set.
     */
    public function isSetOrderItemId()
    {
        return !is_null($this->_fields['OrderItemId']['FieldValue']);
    }

    /**
     * Set the value of OrderItemId, return this.
     *
     * @param orderItemId
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withOrderItemId($value)
    {
        $this->setOrderItemId($value);
        return $this;
    }

    /**
     * Set the value of the OrderItemId property.
     *
     * @param string orderItemId
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setOrderItemId($value)
    {
        $this->_fields['OrderItemId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the Title property.
     *
     * @return String Title.
     */
    public function getTitle()
    {
        return $this->_fields['Title']['FieldValue'];
    }

    /**
     * Check to see if Title is set.
     *
     * @return true if Title is set.
     */
    public function isSetTitle()
    {
        return !is_null($this->_fields['Title']['FieldValue']);
    }

    /**
     * Set the value of Title, return this.
     *
     * @param title
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withTitle($value)
    {
        $this->setTitle($value);
        return $this;
    }

    /**
     * Set the value of the Title property.
     *
     * @param string title
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setTitle($value)
    {
        $this->_fields['Title']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the QuantityOrdered property.
     *
     * @return int QuantityOrdered.
     */
    public function getQuantityOrdered()
    {
        return $this->_fields['QuantityOrdered']['FieldValue'];
    }

    /**
     * Check to see if QuantityOrdered is set.
     *
     * @return true if QuantityOrdered is set.
     */
    public function isSetQuantityOrdered()
    {
        return !is_null($this->_fields['QuantityOrdered']['FieldValue']);
    }

    /**
     * Set the value of QuantityOrdered, return this.
     *
     * @param quantityOrdered
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withQuantityOrdered($value)
    {
        $this->setQuantityOrdered($value);
        return $this;
    }

    /**
     * Set the value of the QuantityOrdered property.
     *
     * @param int quantityOrdered
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setQuantityOrdered($value)
    {
        $this->_fields['QuantityOrdered']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the QuantityShipped property.
     *
     * @return Integer QuantityShipped.
     */
    public function getQuantityShipped()
    {
        return $this->_fields['QuantityShipped']['FieldValue'];
    }

    /**
     * Check to see if QuantityShipped is set.
     *
     * @return true if QuantityShipped is set.
     */
    public function isSetQuantityShipped()
    {
        return !is_null($this->_fields['QuantityShipped']['FieldValue']);
    }

    /**
     * Set the value of QuantityShipped, return this.
     *
     * @param quantityShipped
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withQuantityShipped($value)
    {
        $this->setQuantityShipped($value);
        return $this;
    }

    /**
     * Set the value of the QuantityShipped property.
     *
     * @param int quantityShipped
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setQuantityShipped($value)
    {
        $this->_fields['QuantityShipped']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ProductInfo property.
     *
     * @return ProductInfoDetail ProductInfo.
     */
    public function getProductInfo()
    {
        return $this->_fields['ProductInfo']['FieldValue'];
    }

    /**
     * Check to see if ProductInfo is set.
     *
     * @return true if ProductInfo is set.
     */
    public function isSetProductInfo()
    {
        return !is_null($this->_fields['ProductInfo']['FieldValue']);
    }

    /**
     * Set the value of ProductInfo, return this.
     *
     * @param productInfo
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withProductInfo($value)
    {
        $this->setProductInfo($value);
        return $this;
    }

    /**
     * Set the value of the ProductInfo property.
     *
     * @param MarketplaceWebServiceOrders_Model_ProductInfoDetail productInfo
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setProductInfo($value)
    {
        $this->_fields['ProductInfo']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the PointsGranted property.
     *
     * @return PointsGrantedDetail PointsGranted.
     */
    public function getPointsGranted()
    {
        return $this->_fields['PointsGranted']['FieldValue'];
    }

    /**
     * Check to see if PointsGranted is set.
     *
     * @return true if PointsGranted is set.
     */
    public function isSetPointsGranted()
    {
        return !is_null($this->_fields['PointsGranted']['FieldValue']);
    }

    /**
     * Set the value of PointsGranted, return this.
     *
     * @param pointsGranted
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withPointsGranted($value)
    {
        $this->setPointsGranted($value);
        return $this;
    }

    /**
     * Set the value of the PointsGranted property.
     *
     * @param MarketplaceWebServiceOrders_Model_PointsGrantedDetail pointsGranted
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setPointsGranted($value)
    {
        $this->_fields['PointsGranted']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ItemPrice property.
     *
     * @return Money ItemPrice.
     */
    public function getItemPrice()
    {
        return $this->_fields['ItemPrice']['FieldValue'];
    }

    /**
     * Check to see if ItemPrice is set.
     *
     * @return true if ItemPrice is set.
     */
    public function isSetItemPrice()
    {
        return !is_null($this->_fields['ItemPrice']['FieldValue']);
    }

    /**
     * Set the value of ItemPrice, return this.
     *
     * @param itemPrice
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withItemPrice($value)
    {
        $this->setItemPrice($value);
        return $this;
    }

    /**
     * Set the value of the ItemPrice property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money itemPrice
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setItemPrice($value)
    {
        $this->_fields['ItemPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ShippingPrice property.
     *
     * @return Money ShippingPrice.
     */
    public function getShippingPrice()
    {
        return $this->_fields['ShippingPrice']['FieldValue'];
    }

    /**
     * Check to see if ShippingPrice is set.
     *
     * @return true if ShippingPrice is set.
     */
    public function isSetShippingPrice()
    {
        return !is_null($this->_fields['ShippingPrice']['FieldValue']);
    }

    /**
     * Set the value of ShippingPrice, return this.
     *
     * @param shippingPrice
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withShippingPrice($value)
    {
        $this->setShippingPrice($value);
        return $this;
    }

    /**
     * Set the value of the ShippingPrice property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money shippingPrice
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setShippingPrice($value)
    {
        $this->_fields['ShippingPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the GiftWrapPrice property.
     *
     * @return Money GiftWrapPrice.
     */
    public function getGiftWrapPrice()
    {
        return $this->_fields['GiftWrapPrice']['FieldValue'];
    }

    /**
     * Check to see if GiftWrapPrice is set.
     *
     * @return true if GiftWrapPrice is set.
     */
    public function isSetGiftWrapPrice()
    {
        return !is_null($this->_fields['GiftWrapPrice']['FieldValue']);
    }

    /**
     * Set the value of GiftWrapPrice, return this.
     *
     * @param giftWrapPrice
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withGiftWrapPrice($value)
    {
        $this->setGiftWrapPrice($value);
        return $this;
    }

    /**
     * Set the value of the GiftWrapPrice property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money giftWrapPrice
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setGiftWrapPrice($value)
    {
        $this->_fields['GiftWrapPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ItemTax property.
     *
     * @return Money ItemTax.
     */
    public function getItemTax()
    {
        return $this->_fields['ItemTax']['FieldValue'];
    }

    /**
     * Check to see if ItemTax is set.
     *
     * @return true if ItemTax is set.
     */
    public function isSetItemTax()
    {
        return !is_null($this->_fields['ItemTax']['FieldValue']);
    }

    /**
     * Set the value of ItemTax, return this.
     *
     * @param itemTax
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withItemTax($value)
    {
        $this->setItemTax($value);
        return $this;
    }

    /**
     * Set the value of the ItemTax property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money itemTax
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setItemTax($value)
    {
        $this->_fields['ItemTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ShippingTax property.
     *
     * @return Money ShippingTax.
     */
    public function getShippingTax()
    {
        return $this->_fields['ShippingTax']['FieldValue'];
    }

    /**
     * Check to see if ShippingTax is set.
     *
     * @return true if ShippingTax is set.
     */
    public function isSetShippingTax()
    {
        return !is_null($this->_fields['ShippingTax']['FieldValue']);
    }

    /**
     * Set the value of ShippingTax, return this.
     *
     * @param shippingTax
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withShippingTax($value)
    {
        $this->setShippingTax($value);
        return $this;
    }

    /**
     * Set the value of the ShippingTax property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money shippingTax
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setShippingTax($value)
    {
        $this->_fields['ShippingTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the GiftWrapTax property.
     *
     * @return Money GiftWrapTax.
     */
    public function getGiftWrapTax()
    {
        return $this->_fields['GiftWrapTax']['FieldValue'];
    }

    /**
     * Check to see if GiftWrapTax is set.
     *
     * @return true if GiftWrapTax is set.
     */
    public function isSetGiftWrapTax()
    {
        return !is_null($this->_fields['GiftWrapTax']['FieldValue']);
    }

    /**
     * Set the value of GiftWrapTax, return this.
     *
     * @param giftWrapTax
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withGiftWrapTax($value)
    {
        $this->setGiftWrapTax($value);
        return $this;
    }

    /**
     * Set the value of the GiftWrapTax property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money giftWrapTax
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setGiftWrapTax($value)
    {
        $this->_fields['GiftWrapTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ShippingDiscount property.
     *
     * @return Money ShippingDiscount.
     */
    public function getShippingDiscount()
    {
        return $this->_fields['ShippingDiscount']['FieldValue'];
    }

    /**
     * Check to see if ShippingDiscount is set.
     *
     * @return true if ShippingDiscount is set.
     */
    public function isSetShippingDiscount()
    {
        return !is_null($this->_fields['ShippingDiscount']['FieldValue']);
    }

    /**
     * Set the value of ShippingDiscount, return this.
     *
     * @param shippingDiscount
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withShippingDiscount($value)
    {
        $this->setShippingDiscount($value);
        return $this;
    }

    /**
     * Set the value of the ShippingDiscount property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money shippingDiscount
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setShippingDiscount($value)
    {
        $this->_fields['ShippingDiscount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ShippingDiscountTax property.
     *
     * @return Money ShippingDiscountTax.
     */
    public function getShippingDiscountTax()
    {
        return $this->_fields['ShippingDiscountTax']['FieldValue'];
    }

    /**
     * Check to see if ShippingDiscountTax is set.
     *
     * @return true if ShippingDiscountTax is set.
     */
    public function isSetShippingDiscountTax()
    {
        return !is_null($this->_fields['ShippingDiscountTax']['FieldValue']);
    }

    /**
     * Set the value of ShippingDiscountTax, return this.
     *
     * @param shippingDiscountTax
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withShippingDiscountTax($value)
    {
        $this->setShippingDiscountTax($value);
        return $this;
    }

    /**
     * Set the value of the ShippingDiscountTax property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money shippingDiscountTax
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setShippingDiscountTax($value)
    {
        $this->_fields['ShippingDiscountTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the PromotionDiscount property.
     *
     * @return Money PromotionDiscount.
     */
    public function getPromotionDiscount()
    {
        return $this->_fields['PromotionDiscount']['FieldValue'];
    }

    /**
     * Check to see if PromotionDiscount is set.
     *
     * @return true if PromotionDiscount is set.
     */
    public function isSetPromotionDiscount()
    {
        return !is_null($this->_fields['PromotionDiscount']['FieldValue']);
    }

    /**
     * Set the value of PromotionDiscount, return this.
     *
     * @param promotionDiscount
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withPromotionDiscount($value)
    {
        $this->setPromotionDiscount($value);
        return $this;
    }

    /**
     * Set the value of the PromotionDiscount property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money promotionDiscount
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setPromotionDiscount($value)
    {
        $this->_fields['PromotionDiscount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the PromotionDiscountTax property.
     *
     * @return Money PromotionDiscountTax.
     */
    public function getPromotionDiscountTax()
    {
        return $this->_fields['PromotionDiscountTax']['FieldValue'];
    }

    /**
     * Check to see if PromotionDiscountTax is set.
     *
     * @return true if PromotionDiscountTax is set.
     */
    public function isSetPromotionDiscountTax()
    {
        return !is_null($this->_fields['PromotionDiscountTax']['FieldValue']);
    }

    /**
     * Set the value of PromotionDiscountTax, return this.
     *
     * @param promotionDiscountTax
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withPromotionDiscountTax($value)
    {
        $this->setPromotionDiscountTax($value);
        return $this;
    }

    /**
     * Set the value of the PromotionDiscountTax property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money promotionDiscountTax
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setPromotionDiscountTax($value)
    {
        $this->_fields['PromotionDiscountTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the PromotionIds property.
     *
     * @return List<String> PromotionIds.
     */
    public function getPromotionIds()
    {
        if ($this->_fields['PromotionIds']['FieldValue'] == null) {
            $this->_fields['PromotionIds']['FieldValue'] = array();
        }
        return $this->_fields['PromotionIds']['FieldValue'];
    }

    /**
     * Set the value of the PromotionIds property.
     *
     * @param array promotionIds
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setPromotionIds($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['PromotionIds']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PromotionIds.
     */
    public function unsetPromotionIds()
    {
        $this->_fields['PromotionIds']['FieldValue'] = array();
    }

    /**
     * Check to see if PromotionIds is set.
     *
     * @return true if PromotionIds is set.
     */
    public function isSetPromotionIds()
    {
        return !empty($this->_fields['PromotionIds']['FieldValue']);
    }

    /**
     * Add values for PromotionIds, return this.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withPromotionIds()
    {
        foreach (func_get_args() as $PromotionIds) {
            $this->_fields['PromotionIds']['FieldValue'][] = $PromotionIds;
        }
        return $this;
    }

    /**
     * Get the value of the CODFee property.
     *
     * @return Money CODFee.
     */
    public function getCODFee()
    {
        return $this->_fields['CODFee']['FieldValue'];
    }

    /**
     * Check to see if CODFee is set.
     *
     * @return true if CODFee is set.
     */
    public function isSetCODFee()
    {
        return !is_null($this->_fields['CODFee']['FieldValue']);
    }

    /**
     * Set the value of CODFee, return this.
     *
     * @param codFee
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withCODFee($value)
    {
        $this->setCODFee($value);
        return $this;
    }

    /**
     * Set the value of the CODFee property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money codFee
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setCODFee($value)
    {
        $this->_fields['CODFee']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the CODFeeDiscount property.
     *
     * @return Money CODFeeDiscount.
     */
    public function getCODFeeDiscount()
    {
        return $this->_fields['CODFeeDiscount']['FieldValue'];
    }

    /**
     * Check to see if CODFeeDiscount is set.
     *
     * @return true if CODFeeDiscount is set.
     */
    public function isSetCODFeeDiscount()
    {
        return !is_null($this->_fields['CODFeeDiscount']['FieldValue']);
    }

    /**
     * Set the value of CODFeeDiscount, return this.
     *
     * @param codFeeDiscount
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withCODFeeDiscount($value)
    {
        $this->setCODFeeDiscount($value);
        return $this;
    }

    /**
     * Set the value of the CODFeeDiscount property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money codFeeDiscount
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setCODFeeDiscount($value)
    {
        $this->_fields['CODFeeDiscount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check the value of IsGift.
     *
     * @return true if IsGift is set to true.
     */
    public function isIsGift()
    {
        return !is_null($this->_fields['IsGift']['FieldValue']) && $this->_fields['IsGift']['FieldValue'];
    }

    /**
     * Get the value of the IsGift property.
     *
     * @return Boolean IsGift.
     */
    public function getIsGift()
    {
        return $this->_fields['IsGift']['FieldValue'];
    }

    /**
     * Check to see if IsGift is set.
     *
     * @return true if IsGift is set.
     */
    public function isSetIsGift()
    {
        return !is_null($this->_fields['IsGift']['FieldValue']);
    }

    /**
     * Set the value of IsGift, return this.
     *
     * @param isGift
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withIsGift($value)
    {
        $this->setIsGift($value);
        return $this;
    }

    /**
     * Set the value of the IsGift property.
     *
     * @param bool isGift
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setIsGift($value)
    {
        $this->_fields['IsGift']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the GiftMessageText property.
     *
     * @return String GiftMessageText.
     */
    public function getGiftMessageText()
    {
        return $this->_fields['GiftMessageText']['FieldValue'];
    }

    /**
     * Check to see if GiftMessageText is set.
     *
     * @return true if GiftMessageText is set.
     */
    public function isSetGiftMessageText()
    {
        return !is_null($this->_fields['GiftMessageText']['FieldValue']);
    }

    /**
     * Set the value of GiftMessageText, return this.
     *
     * @param giftMessageText
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withGiftMessageText($value)
    {
        $this->setGiftMessageText($value);
        return $this;
    }

    /**
     * Set the value of the GiftMessageText property.
     *
     * @param string giftMessageText
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setGiftMessageText($value)
    {
        $this->_fields['GiftMessageText']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the GiftWrapLevel property.
     *
     * @return String GiftWrapLevel.
     */
    public function getGiftWrapLevel()
    {
        return $this->_fields['GiftWrapLevel']['FieldValue'];
    }

    /**
     * Check to see if GiftWrapLevel is set.
     *
     * @return true if GiftWrapLevel is set.
     */
    public function isSetGiftWrapLevel()
    {
        return !is_null($this->_fields['GiftWrapLevel']['FieldValue']);
    }

    /**
     * Set the value of GiftWrapLevel, return this.
     *
     * @param giftWrapLevel
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withGiftWrapLevel($value)
    {
        $this->setGiftWrapLevel($value);
        return $this;
    }

    /**
     * Set the value of the GiftWrapLevel property.
     *
     * @param string giftWrapLevel
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setGiftWrapLevel($value)
    {
        $this->_fields['GiftWrapLevel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the InvoiceData property.
     *
     * @return InvoiceData InvoiceData.
     */
    public function getInvoiceData()
    {
        return $this->_fields['InvoiceData']['FieldValue'];
    }

    /**
     * Check to see if InvoiceData is set.
     *
     * @return true if InvoiceData is set.
     */
    public function isSetInvoiceData()
    {
        return !is_null($this->_fields['InvoiceData']['FieldValue']);
    }

    /**
     * Set the value of InvoiceData, return this.
     *
     * @param invoiceData
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withInvoiceData($value)
    {
        $this->setInvoiceData($value);
        return $this;
    }

    /**
     * Set the value of the InvoiceData property.
     *
     * @param MarketplaceWebServiceOrders_Model_InvoiceData invoiceData
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setInvoiceData($value)
    {
        $this->_fields['InvoiceData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ConditionNote property.
     *
     * @return String ConditionNote.
     */
    public function getConditionNote()
    {
        return $this->_fields['ConditionNote']['FieldValue'];
    }

    /**
     * Check to see if ConditionNote is set.
     *
     * @return true if ConditionNote is set.
     */
    public function isSetConditionNote()
    {
        return !is_null($this->_fields['ConditionNote']['FieldValue']);
    }

    /**
     * Set the value of ConditionNote, return this.
     *
     * @param conditionNote
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withConditionNote($value)
    {
        $this->setConditionNote($value);
        return $this;
    }

    /**
     * Set the value of the ConditionNote property.
     *
     * @param string conditionNote
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setConditionNote($value)
    {
        $this->_fields['ConditionNote']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ConditionId property.
     *
     * @return String ConditionId.
     */
    public function getConditionId()
    {
        return $this->_fields['ConditionId']['FieldValue'];
    }

    /**
     * Check to see if ConditionId is set.
     *
     * @return true if ConditionId is set.
     */
    public function isSetConditionId()
    {
        return !is_null($this->_fields['ConditionId']['FieldValue']);
    }

    /**
     * Set the value of ConditionId, return this.
     *
     * @param conditionId
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withConditionId($value)
    {
        $this->setConditionId($value);
        return $this;
    }

    /**
     * Set the value of the ConditionId property.
     *
     * @param string conditionId
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setConditionId($value)
    {
        $this->_fields['ConditionId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ConditionSubtypeId property.
     *
     * @return String ConditionSubtypeId.
     */
    public function getConditionSubtypeId()
    {
        return $this->_fields['ConditionSubtypeId']['FieldValue'];
    }

    /**
     * Check to see if ConditionSubtypeId is set.
     *
     * @return true if ConditionSubtypeId is set.
     */
    public function isSetConditionSubtypeId()
    {
        return !is_null($this->_fields['ConditionSubtypeId']['FieldValue']);
    }

    /**
     * Set the value of ConditionSubtypeId, return this.
     *
     * @param conditionSubtypeId
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withConditionSubtypeId($value)
    {
        $this->setConditionSubtypeId($value);
        return $this;
    }

    /**
     * Set the value of the ConditionSubtypeId property.
     *
     * @param string conditionSubtypeId
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setConditionSubtypeId($value)
    {
        $this->_fields['ConditionSubtypeId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ScheduledDeliveryStartDate property.
     *
     * @return String ScheduledDeliveryStartDate.
     */
    public function getScheduledDeliveryStartDate()
    {
        return $this->_fields['ScheduledDeliveryStartDate']['FieldValue'];
    }

    /**
     * Check to see if ScheduledDeliveryStartDate is set.
     *
     * @return true if ScheduledDeliveryStartDate is set.
     */
    public function isSetScheduledDeliveryStartDate()
    {
        return !is_null($this->_fields['ScheduledDeliveryStartDate']['FieldValue']);
    }

    /**
     * Set the value of ScheduledDeliveryStartDate, return this.
     *
     * @param scheduledDeliveryStartDate
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withScheduledDeliveryStartDate($value)
    {
        $this->setScheduledDeliveryStartDate($value);
        return $this;
    }

    /**
     * Set the value of the ScheduledDeliveryStartDate property.
     *
     * @param string scheduledDeliveryStartDate
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setScheduledDeliveryStartDate($value)
    {
        $this->_fields['ScheduledDeliveryStartDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ScheduledDeliveryEndDate property.
     *
     * @return String ScheduledDeliveryEndDate.
     */
    public function getScheduledDeliveryEndDate()
    {
        return $this->_fields['ScheduledDeliveryEndDate']['FieldValue'];
    }

    /**
     * Check to see if ScheduledDeliveryEndDate is set.
     *
     * @return true if ScheduledDeliveryEndDate is set.
     */
    public function isSetScheduledDeliveryEndDate()
    {
        return !is_null($this->_fields['ScheduledDeliveryEndDate']['FieldValue']);
    }

    /**
     * Set the value of ScheduledDeliveryEndDate, return this.
     *
     * @param scheduledDeliveryEndDate
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withScheduledDeliveryEndDate($value)
    {
        $this->setScheduledDeliveryEndDate($value);
        return $this;
    }

    /**
     * Set the value of the ScheduledDeliveryEndDate property.
     *
     * @param string scheduledDeliveryEndDate
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setScheduledDeliveryEndDate($value)
    {
        $this->_fields['ScheduledDeliveryEndDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the PriceDesignation property.
     *
     * @return String PriceDesignation.
     */
    public function getPriceDesignation()
    {
        return $this->_fields['PriceDesignation']['FieldValue'];
    }

    /**
     * Check to see if PriceDesignation is set.
     *
     * @return true if PriceDesignation is set.
     */
    public function isSetPriceDesignation()
    {
        return !is_null($this->_fields['PriceDesignation']['FieldValue']);
    }

    /**
     * Set the value of PriceDesignation, return this.
     *
     * @param priceDesignation
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withPriceDesignation($value)
    {
        $this->setPriceDesignation($value);
        return $this;
    }

    /**
     * Set the value of the PriceDesignation property.
     *
     * @param string priceDesignation
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setPriceDesignation($value)
    {
        $this->_fields['PriceDesignation']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the BuyerCustomizedInfo property.
     *
     * @return BuyerCustomizedInfoDetail BuyerCustomizedInfo.
     */
    public function getBuyerCustomizedInfo()
    {
        return $this->_fields['BuyerCustomizedInfo']['FieldValue'];
    }

    /**
     * Check to see if BuyerCustomizedInfo is set.
     *
     * @return true if BuyerCustomizedInfo is set.
     */
    public function isSetBuyerCustomizedInfo()
    {
        return !is_null($this->_fields['BuyerCustomizedInfo']['FieldValue']);
    }

    /**
     * Set the value of BuyerCustomizedInfo, return this.
     *
     * @param buyerCustomizedInfo
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withBuyerCustomizedInfo($value)
    {
        $this->setBuyerCustomizedInfo($value);
        return $this;
    }

    /**
     * Set the value of the BuyerCustomizedInfo property.
     *
     * @param MarketplaceWebServiceOrders_Model_BuyerCustomizedInfoDetail buyerCustomizedInfo
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setBuyerCustomizedInfo($value)
    {
        $this->_fields['BuyerCustomizedInfo']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the TaxCollection property.
     *
     * @return TaxCollection TaxCollection.
     */
    public function getTaxCollection()
    {
        return $this->_fields['TaxCollection']['FieldValue'];
    }

    /**
     * Check to see if TaxCollection is set.
     *
     * @return true if TaxCollection is set.
     */
    public function isSetTaxCollection()
    {
        return !is_null($this->_fields['TaxCollection']['FieldValue']);
    }

    /**
     * Set the value of TaxCollection, return this.
     *
     * @param taxCollection
     *             The new value to set.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem|This
     */
    public function withTaxCollection($value)
    {
        $this->setTaxCollection($value);
        return $this;
    }

    /**
     * Set the value of the TaxCollection property.
     *
     * @param MarketplaceWebServiceOrders_Model_TaxCollection taxCollection
     * @return MarketplaceWebServiceOrders_Model_OrderItem|this
     */
    public function setTaxCollection($value)
    {
        $this->_fields['TaxCollection']['FieldValue'] = $value;
        return $this;
    }

}
