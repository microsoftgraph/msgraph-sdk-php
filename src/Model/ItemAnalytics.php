<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemAnalytics File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* ItemAnalytics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemAnalytics extends Entity
{
    /**
    * Gets the allTime
    *
    * @return ItemActivityStat|null The allTime
    */
    public function getAllTime()
    {
        if (array_key_exists("allTime", $this->_propDict) && !is_null($this->_propDict["allTime"])) {
            if (is_a($this->_propDict["allTime"], "\Microsoft\Graph\Model\ItemActivityStat")) {
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
     * Gets the itemActivityStats
     *
     * @return ItemActivityStat[]|null The itemActivityStats
     */
    public function getItemActivityStats()
    {
        if (array_key_exists('itemActivityStats', $this->_propDict) && !is_null($this->_propDict['itemActivityStats'])) {
            $itemActivityStats = [];
            if (count($this->_propDict['itemActivityStats']) > 0 && is_a($this->_propDict['itemActivityStats'][0], 'ItemActivityStat')) {
                return $this->_propDict['itemActivityStats'];
            }
            foreach ($this->_propDict['itemActivityStats'] as $singleValue) {
                $itemActivityStats []= new ItemActivityStat($singleValue);
            }
            $this->_propDict['itemActivityStats'] = $itemActivityStats;
            return $this->_propDict['itemActivityStats'];
        }
        return null;
    }
    
    /** 
    * Sets the itemActivityStats
    *
    * @param ItemActivityStat[] $val The itemActivityStats
    *
    * @return ItemAnalytics
    */
    public function setItemActivityStats($val)
    {
        $this->_propDict["itemActivityStats"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSevenDays
    *
    * @return ItemActivityStat|null The lastSevenDays
    */
    public function getLastSevenDays()
    {
        if (array_key_exists("lastSevenDays", $this->_propDict) && !is_null($this->_propDict["lastSevenDays"])) {
            if (is_a($this->_propDict["lastSevenDays"], "\Microsoft\Graph\Model\ItemActivityStat")) {
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
