<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintUsageSummaryByPrinter File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* PrintUsageSummaryByPrinter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintUsageSummaryByPrinter extends Entity
{
    /**
    * Gets the completedBlackAndWhiteJobCount
    *
    * @return int The completedBlackAndWhiteJobCount
    */
    public function getCompletedBlackAndWhiteJobCount()
    {
        if (array_key_exists("completedBlackAndWhiteJobCount", $this->_propDict)) {
            return $this->_propDict["completedBlackAndWhiteJobCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the completedBlackAndWhiteJobCount
    *
    * @param int $val The completedBlackAndWhiteJobCount
    *
    * @return PrintUsageSummaryByPrinter
    */
    public function setCompletedBlackAndWhiteJobCount($val)
    {
        $this->_propDict["completedBlackAndWhiteJobCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the completedColorJobCount
    *
    * @return int The completedColorJobCount
    */
    public function getCompletedColorJobCount()
    {
        if (array_key_exists("completedColorJobCount", $this->_propDict)) {
            return $this->_propDict["completedColorJobCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the completedColorJobCount
    *
    * @param int $val The completedColorJobCount
    *
    * @return PrintUsageSummaryByPrinter
    */
    public function setCompletedColorJobCount($val)
    {
        $this->_propDict["completedColorJobCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the incompleteJobCount
    *
    * @return int The incompleteJobCount
    */
    public function getIncompleteJobCount()
    {
        if (array_key_exists("incompleteJobCount", $this->_propDict)) {
            return $this->_propDict["incompleteJobCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the incompleteJobCount
    *
    * @param int $val The incompleteJobCount
    *
    * @return PrintUsageSummaryByPrinter
    */
    public function setIncompleteJobCount($val)
    {
        $this->_propDict["incompleteJobCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the printerId
    *
    * @return string The printerId
    */
    public function getPrinterId()
    {
        if (array_key_exists("printerId", $this->_propDict)) {
            return $this->_propDict["printerId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the printerId
    *
    * @param string $val The printerId
    *
    * @return PrintUsageSummaryByPrinter
    */
    public function setPrinterId($val)
    {
        $this->_propDict["printerId"] = $val;
        return $this;
    }
    
    /**
    * Gets the usageDate
    *
    * @return \DateTime The usageDate
    */
    public function getUsageDate()
    {
        if (array_key_exists("usageDate", $this->_propDict)) {
            if (is_a($this->_propDict["usageDate"], "\DateTime")) {
                return $this->_propDict["usageDate"];
            } else {
                $this->_propDict["usageDate"] = new \DateTime($this->_propDict["usageDate"]);
                return $this->_propDict["usageDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the usageDate
    *
    * @param \DateTime $val The usageDate
    *
    * @return PrintUsageSummaryByPrinter
    */
    public function setUsageDate($val)
    {
        $this->_propDict["usageDate"] = $val;
        return $this;
    }
    
}