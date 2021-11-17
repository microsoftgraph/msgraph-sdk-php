<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SiteUsageStorage File
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
* SiteUsageStorage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SiteUsageStorage extends Entity
{
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
    * @return SiteUsageStorage
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
    * @return SiteUsageStorage
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
    * @return SiteUsageStorage
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the siteType
    *
    * @return string|null The siteType
    */
    public function getSiteType()
    {
        if (array_key_exists("siteType", $this->_propDict)) {
            return $this->_propDict["siteType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siteType
    *
    * @param string $val The siteType
    *
    * @return SiteUsageStorage
    */
    public function setSiteType($val)
    {
        $this->_propDict["siteType"] = $val;
        return $this;
    }
    
    /**
    * Gets the storageUsedInBytes
    *
    * @return int|null The storageUsedInBytes
    */
    public function getStorageUsedInBytes()
    {
        if (array_key_exists("storageUsedInBytes", $this->_propDict)) {
            return $this->_propDict["storageUsedInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageUsedInBytes
    *
    * @param int $val The storageUsedInBytes
    *
    * @return SiteUsageStorage
    */
    public function setStorageUsedInBytes($val)
    {
        $this->_propDict["storageUsedInBytes"] = intval($val);
        return $this;
    }
    
}
