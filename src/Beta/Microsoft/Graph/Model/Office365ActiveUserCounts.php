<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Office365ActiveUserCounts File
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
* Office365ActiveUserCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Office365ActiveUserCounts extends Entity
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
    * @return Office365ActiveUserCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the office365
    *
    * @return int The office365
    */
    public function getOffice365()
    {
        if (array_key_exists("office365", $this->_propDict)) {
            return $this->_propDict["office365"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the office365
    *
    * @param int $val The office365
    *
    * @return Office365ActiveUserCounts
    */
    public function setOffice365($val)
    {
        $this->_propDict["office365"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the exchange
    *
    * @return int The exchange
    */
    public function getExchange()
    {
        if (array_key_exists("exchange", $this->_propDict)) {
            return $this->_propDict["exchange"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchange
    *
    * @param int $val The exchange
    *
    * @return Office365ActiveUserCounts
    */
    public function setExchange($val)
    {
        $this->_propDict["exchange"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the oneDrive
    *
    * @return int The oneDrive
    */
    public function getOneDrive()
    {
        if (array_key_exists("oneDrive", $this->_propDict)) {
            return $this->_propDict["oneDrive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the oneDrive
    *
    * @param int $val The oneDrive
    *
    * @return Office365ActiveUserCounts
    */
    public function setOneDrive($val)
    {
        $this->_propDict["oneDrive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sharePoint
    *
    * @return int The sharePoint
    */
    public function getSharePoint()
    {
        if (array_key_exists("sharePoint", $this->_propDict)) {
            return $this->_propDict["sharePoint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharePoint
    *
    * @param int $val The sharePoint
    *
    * @return Office365ActiveUserCounts
    */
    public function setSharePoint($val)
    {
        $this->_propDict["sharePoint"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the skypeForBusiness
    *
    * @return int The skypeForBusiness
    */
    public function getSkypeForBusiness()
    {
        if (array_key_exists("skypeForBusiness", $this->_propDict)) {
            return $this->_propDict["skypeForBusiness"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skypeForBusiness
    *
    * @param int $val The skypeForBusiness
    *
    * @return Office365ActiveUserCounts
    */
    public function setSkypeForBusiness($val)
    {
        $this->_propDict["skypeForBusiness"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the yammer
    *
    * @return int The yammer
    */
    public function getYammer()
    {
        if (array_key_exists("yammer", $this->_propDict)) {
            return $this->_propDict["yammer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammer
    *
    * @param int $val The yammer
    *
    * @return Office365ActiveUserCounts
    */
    public function setYammer($val)
    {
        $this->_propDict["yammer"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the teams
    *
    * @return int The teams
    */
    public function getTeams()
    {
        if (array_key_exists("teams", $this->_propDict)) {
            return $this->_propDict["teams"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the teams
    *
    * @param int $val The teams
    *
    * @return Office365ActiveUserCounts
    */
    public function setTeams($val)
    {
        $this->_propDict["teams"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportDate
    *
    * @return \DateTime The reportDate
    */
    public function getReportDate()
    {
        if (array_key_exists("reportDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportDate"], "\DateTime")) {
                return $this->_propDict["reportDate"];
            } else {
                $this->_propDict["reportDate"] = new \DateTime($this->_propDict["reportDate"]);
                return $this->_propDict["reportDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportDate
    *
    * @param \DateTime $val The reportDate
    *
    * @return Office365ActiveUserCounts
    */
    public function setReportDate($val)
    {
        $this->_propDict["reportDate"] = $val;
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
    * @return Office365ActiveUserCounts
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
}