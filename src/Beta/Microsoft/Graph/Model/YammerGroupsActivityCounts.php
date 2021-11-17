<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* YammerGroupsActivityCounts File
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
* YammerGroupsActivityCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class YammerGroupsActivityCounts extends Entity
{
    /**
    * Gets the liked
    *
    * @return int|null The liked
    */
    public function getLiked()
    {
        if (array_key_exists("liked", $this->_propDict)) {
            return $this->_propDict["liked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the liked
    *
    * @param int $val The liked
    *
    * @return YammerGroupsActivityCounts
    */
    public function setLiked($val)
    {
        $this->_propDict["liked"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the posted
    *
    * @return int|null The posted
    */
    public function getPosted()
    {
        if (array_key_exists("posted", $this->_propDict)) {
            return $this->_propDict["posted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the posted
    *
    * @param int $val The posted
    *
    * @return YammerGroupsActivityCounts
    */
    public function setPosted($val)
    {
        $this->_propDict["posted"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the read
    *
    * @return int|null The read
    */
    public function getRead()
    {
        if (array_key_exists("read", $this->_propDict)) {
            return $this->_propDict["read"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the read
    *
    * @param int $val The read
    *
    * @return YammerGroupsActivityCounts
    */
    public function setRead($val)
    {
        $this->_propDict["read"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportDate
    *
    * @return \Microsoft\Graph\Core\Models\Date|null The reportDate
    */
    public function getReportDate()
    {
        if (array_key_exists("reportDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportDate"], "\Microsoft\Graph\Core\Models\Date") || is_null($this->_propDict["reportDate"])) {
                return $this->_propDict["reportDate"];
            } else {
                $this->_propDict["reportDate"] = new \Microsoft\Graph\Core\Models\Date($this->_propDict["reportDate"]);
                return $this->_propDict["reportDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportDate
    *
    * @param \Microsoft\Graph\Core\Models\Date $val The reportDate
    *
    * @return YammerGroupsActivityCounts
    */
    public function setReportDate($val)
    {
        $this->_propDict["reportDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    *
    * @return string|null The reportPeriod
    */
    public function getReportPeriod()
    {
        if (array_key_exists("reportPeriod", $this->_propDict)) {
            return $this->_propDict["reportPeriod"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportPeriod
    *
    * @param string $val The reportPeriod
    *
    * @return YammerGroupsActivityCounts
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    *
    * @return \Microsoft\Graph\Core\Models\Date|null The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\Microsoft\Graph\Core\Models\Date") || is_null($this->_propDict["reportRefreshDate"])) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \Microsoft\Graph\Core\Models\Date($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    *
    * @param \Microsoft\Graph\Core\Models\Date $val The reportRefreshDate
    *
    * @return YammerGroupsActivityCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
}
