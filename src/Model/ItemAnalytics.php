<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemAnalytics File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* ItemAnalytics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ItemAnalytics extends Entity
{

     /** 
     * Gets the itemActivityStats
     *
     * @return array The itemActivityStats
     */
    public function getItemActivityStats()
    {
        if (array_key_exists("itemActivityStats", $this->_propDict)) {
           return $this->_propDict["itemActivityStats"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the itemActivityStats
    *
    * @param ItemActivityStat $val The itemActivityStats
    *
    * @return ItemAnalytics
    */
    public function setItemActivityStats($val)
    {
		$this->_propDict["itemActivityStats"] = $val;
        return $this;
    }
    
    /**
    * Gets the allTime
    *
    * @return ItemActivityStat The allTime
    */
    public function getAllTime()
    {
        if (array_key_exists("allTime", $this->_propDict)) {
            if (is_a($this->_propDict["allTime"], "Microsoft\Graph\Model\ItemActivityStat")) {
                return $this->_propDict["allTime"];
            } else {
                $this->_propDict["allTime"] = new ItemActivityStat($this->_propDict["allTime"]);
                return $this->_propDict["allTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allTime
    *
    * @param ItemActivityStat $val The allTime
    *
    * @return ItemAnalytics
    */
    public function setAllTime($val)
    {
        $this->_propDict["allTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSevenDays
    *
    * @return ItemActivityStat The lastSevenDays
    */
    public function getLastSevenDays()
    {
        if (array_key_exists("lastSevenDays", $this->_propDict)) {
            if (is_a($this->_propDict["lastSevenDays"], "Microsoft\Graph\Model\ItemActivityStat")) {
                return $this->_propDict["lastSevenDays"];
            } else {
                $this->_propDict["lastSevenDays"] = new ItemActivityStat($this->_propDict["lastSevenDays"]);
                return $this->_propDict["lastSevenDays"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSevenDays
    *
    * @param ItemActivityStat $val The lastSevenDays
    *
    * @return ItemAnalytics
    */
    public function setLastSevenDays($val)
    {
        $this->_propDict["lastSevenDays"] = $val;
        return $this;
    }
    
}