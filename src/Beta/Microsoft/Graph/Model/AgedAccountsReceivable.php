<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AgedAccountsReceivable File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AgedAccountsReceivable class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AgedAccountsReceivable extends Entity
{
    /**
    * Gets the agedAsOfDate
    *
    * @return \Microsoft\Graph\Core\Models\Date|null The agedAsOfDate
    */
    public function getAgedAsOfDate()
    {
        if (array_key_exists("agedAsOfDate", $this->_propDict)) {
            if (is_a($this->_propDict["agedAsOfDate"], "\Microsoft\Graph\Core\Models\Date") || is_null($this->_propDict["agedAsOfDate"])) {
                return $this->_propDict["agedAsOfDate"];
            } else {
                $this->_propDict["agedAsOfDate"] = new \Microsoft\Graph\Core\Models\Date($this->_propDict["agedAsOfDate"]);
                return $this->_propDict["agedAsOfDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the agedAsOfDate
    *
    * @param \Microsoft\Graph\Core\Models\Date $val The agedAsOfDate
    *
    * @return AgedAccountsReceivable
    */
    public function setAgedAsOfDate($val)
    {
        $this->_propDict["agedAsOfDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the balanceDue
    *
    * @return float|null The balanceDue
    */
    public function getBalanceDue()
    {
        if (array_key_exists("balanceDue", $this->_propDict)) {
            return $this->_propDict["balanceDue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the balanceDue
    *
    * @param float $val The balanceDue
    *
    * @return AgedAccountsReceivable
    */
    public function setBalanceDue($val)
    {
        $this->_propDict["balanceDue"] = floatval($val);
        return $this;
    }
    
    /**
    * Gets the currencyCode
    *
    * @return string|null The currencyCode
    */
    public function getCurrencyCode()
    {
        if (array_key_exists("currencyCode", $this->_propDict)) {
            return $this->_propDict["currencyCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the currencyCode
    *
    * @param string $val The currencyCode
    *
    * @return AgedAccountsReceivable
    */
    public function setCurrencyCode($val)
    {
        $this->_propDict["currencyCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the currentAmount
    *
    * @return float|null The currentAmount
    */
    public function getCurrentAmount()
    {
        if (array_key_exists("currentAmount", $this->_propDict)) {
            return $this->_propDict["currentAmount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the currentAmount
    *
    * @param float $val The currentAmount
    *
    * @return AgedAccountsReceivable
    */
    public function setCurrentAmount($val)
    {
        $this->_propDict["currentAmount"] = floatval($val);
        return $this;
    }
    
    /**
    * Gets the customerNumber
    *
    * @return string|null The customerNumber
    */
    public function getCustomerNumber()
    {
        if (array_key_exists("customerNumber", $this->_propDict)) {
            return $this->_propDict["customerNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customerNumber
    *
    * @param string $val The customerNumber
    *
    * @return AgedAccountsReceivable
    */
    public function setCustomerNumber($val)
    {
        $this->_propDict["customerNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return AgedAccountsReceivable
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the period1Amount
    *
    * @return float|null The period1Amount
    */
    public function getPeriod1Amount()
    {
        if (array_key_exists("period1Amount", $this->_propDict)) {
            return $this->_propDict["period1Amount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the period1Amount
    *
    * @param float $val The period1Amount
    *
    * @return AgedAccountsReceivable
    */
    public function setPeriod1Amount($val)
    {
        $this->_propDict["period1Amount"] = floatval($val);
        return $this;
    }
    
    /**
    * Gets the period2Amount
    *
    * @return float|null The period2Amount
    */
    public function getPeriod2Amount()
    {
        if (array_key_exists("period2Amount", $this->_propDict)) {
            return $this->_propDict["period2Amount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the period2Amount
    *
    * @param float $val The period2Amount
    *
    * @return AgedAccountsReceivable
    */
    public function setPeriod2Amount($val)
    {
        $this->_propDict["period2Amount"] = floatval($val);
        return $this;
    }
    
    /**
    * Gets the period3Amount
    *
    * @return float|null The period3Amount
    */
    public function getPeriod3Amount()
    {
        if (array_key_exists("period3Amount", $this->_propDict)) {
            return $this->_propDict["period3Amount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the period3Amount
    *
    * @param float $val The period3Amount
    *
    * @return AgedAccountsReceivable
    */
    public function setPeriod3Amount($val)
    {
        $this->_propDict["period3Amount"] = floatval($val);
        return $this;
    }
    
    /**
    * Gets the periodLengthFilter
    *
    * @return string|null The periodLengthFilter
    */
    public function getPeriodLengthFilter()
    {
        if (array_key_exists("periodLengthFilter", $this->_propDict)) {
            return $this->_propDict["periodLengthFilter"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the periodLengthFilter
    *
    * @param string $val The periodLengthFilter
    *
    * @return AgedAccountsReceivable
    */
    public function setPeriodLengthFilter($val)
    {
        $this->_propDict["periodLengthFilter"] = $val;
        return $this;
    }
    
}
