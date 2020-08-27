<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Office365ServicesUserCounts File
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
* Office365ServicesUserCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Office365ServicesUserCounts extends Entity
{
    /**
    * Gets the reportRefreshDate
    *
    * @return \DateTime The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime")) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \DateTime($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return Office365ServicesUserCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the exchangeActive
    *
    * @return int The exchangeActive
    */
    public function getExchangeActive()
    {
        if (array_key_exists("exchangeActive", $this->_propDict)) {
            return $this->_propDict["exchangeActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchangeActive
    *
    * @param int $val The exchangeActive
    *
    * @return Office365ServicesUserCounts
    */
    public function setExchangeActive($val)
    {
        $this->_propDict["exchangeActive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the exchangeInactive
    *
    * @return int The exchangeInactive
    */
    public function getExchangeInactive()
    {
        if (array_key_exists("exchangeInactive", $this->_propDict)) {
            return $this->_propDict["exchangeInactive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchangeInactive
    *
    * @param int $val The exchangeInactive
    *
    * @return Office365ServicesUserCounts
    */
    public function setExchangeInactive($val)
    {
        $this->_propDict["exchangeInactive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the oneDriveActive
    *
    * @return int The oneDriveActive
    */
    public function getOneDriveActive()
    {
        if (array_key_exists("oneDriveActive", $this->_propDict)) {
            return $this->_propDict["oneDriveActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the oneDriveActive
    *
    * @param int $val The oneDriveActive
    *
    * @return Office365ServicesUserCounts
    */
    public function setOneDriveActive($val)
    {
        $this->_propDict["oneDriveActive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the oneDriveInactive
    *
    * @return int The oneDriveInactive
    */
    public function getOneDriveInactive()
    {
        if (array_key_exists("oneDriveInactive", $this->_propDict)) {
            return $this->_propDict["oneDriveInactive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the oneDriveInactive
    *
    * @param int $val The oneDriveInactive
    *
    * @return Office365ServicesUserCounts
    */
    public function setOneDriveInactive($val)
    {
        $this->_propDict["oneDriveInactive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sharePointActive
    *
    * @return int The sharePointActive
    */
    public function getSharePointActive()
    {
        if (array_key_exists("sharePointActive", $this->_propDict)) {
            return $this->_propDict["sharePointActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharePointActive
    *
    * @param int $val The sharePointActive
    *
    * @return Office365ServicesUserCounts
    */
    public function setSharePointActive($val)
    {
        $this->_propDict["sharePointActive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sharePointInactive
    *
    * @return int The sharePointInactive
    */
    public function getSharePointInactive()
    {
        if (array_key_exists("sharePointInactive", $this->_propDict)) {
            return $this->_propDict["sharePointInactive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharePointInactive
    *
    * @param int $val The sharePointInactive
    *
    * @return Office365ServicesUserCounts
    */
    public function setSharePointInactive($val)
    {
        $this->_propDict["sharePointInactive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the skypeForBusinessActive
    *
    * @return int The skypeForBusinessActive
    */
    public function getSkypeForBusinessActive()
    {
        if (array_key_exists("skypeForBusinessActive", $this->_propDict)) {
            return $this->_propDict["skypeForBusinessActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skypeForBusinessActive
    *
    * @param int $val The skypeForBusinessActive
    *
    * @return Office365ServicesUserCounts
    */
    public function setSkypeForBusinessActive($val)
    {
        $this->_propDict["skypeForBusinessActive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the skypeForBusinessInactive
    *
    * @return int The skypeForBusinessInactive
    */
    public function getSkypeForBusinessInactive()
    {
        if (array_key_exists("skypeForBusinessInactive", $this->_propDict)) {
            return $this->_propDict["skypeForBusinessInactive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skypeForBusinessInactive
    *
    * @param int $val The skypeForBusinessInactive
    *
    * @return Office365ServicesUserCounts
    */
    public function setSkypeForBusinessInactive($val)
    {
        $this->_propDict["skypeForBusinessInactive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the yammerActive
    *
    * @return int The yammerActive
    */
    public function getYammerActive()
    {
        if (array_key_exists("yammerActive", $this->_propDict)) {
            return $this->_propDict["yammerActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammerActive
    *
    * @param int $val The yammerActive
    *
    * @return Office365ServicesUserCounts
    */
    public function setYammerActive($val)
    {
        $this->_propDict["yammerActive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the yammerInactive
    *
    * @return int The yammerInactive
    */
    public function getYammerInactive()
    {
        if (array_key_exists("yammerInactive", $this->_propDict)) {
            return $this->_propDict["yammerInactive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammerInactive
    *
    * @param int $val The yammerInactive
    *
    * @return Office365ServicesUserCounts
    */
    public function setYammerInactive($val)
    {
        $this->_propDict["yammerInactive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the teamsActive
    *
    * @return int The teamsActive
    */
    public function getTeamsActive()
    {
        if (array_key_exists("teamsActive", $this->_propDict)) {
            return $this->_propDict["teamsActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the teamsActive
    *
    * @param int $val The teamsActive
    *
    * @return Office365ServicesUserCounts
    */
    public function setTeamsActive($val)
    {
        $this->_propDict["teamsActive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the teamsInactive
    *
    * @return int The teamsInactive
    */
    public function getTeamsInactive()
    {
        if (array_key_exists("teamsInactive", $this->_propDict)) {
            return $this->_propDict["teamsInactive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the teamsInactive
    *
    * @param int $val The teamsInactive
    *
    * @return Office365ServicesUserCounts
    */
    public function setTeamsInactive($val)
    {
        $this->_propDict["teamsInactive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the office365Active
    *
    * @return int The office365Active
    */
    public function getOffice365Active()
    {
        if (array_key_exists("office365Active", $this->_propDict)) {
            return $this->_propDict["office365Active"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the office365Active
    *
    * @param int $val The office365Active
    *
    * @return Office365ServicesUserCounts
    */
    public function setOffice365Active($val)
    {
        $this->_propDict["office365Active"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the office365Inactive
    *
    * @return int The office365Inactive
    */
    public function getOffice365Inactive()
    {
        if (array_key_exists("office365Inactive", $this->_propDict)) {
            return $this->_propDict["office365Inactive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the office365Inactive
    *
    * @param int $val The office365Inactive
    *
    * @return Office365ServicesUserCounts
    */
    public function setOffice365Inactive($val)
    {
        $this->_propDict["office365Inactive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    *
    * @return string The reportPeriod
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
    * @return Office365ServicesUserCounts
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
}