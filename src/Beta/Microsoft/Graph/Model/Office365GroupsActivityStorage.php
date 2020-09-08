<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Office365GroupsActivityStorage File
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
* Office365GroupsActivityStorage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Office365GroupsActivityStorage extends Entity
{
    /**
    * Gets the mailboxStorageUsedInBytes
    *
    * @return int The mailboxStorageUsedInBytes
    */
    public function getMailboxStorageUsedInBytes()
    {
        if (array_key_exists("mailboxStorageUsedInBytes", $this->_propDict)) {
            return $this->_propDict["mailboxStorageUsedInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mailboxStorageUsedInBytes
    *
    * @param int $val The mailboxStorageUsedInBytes
    *
    * @return Office365GroupsActivityStorage
    */
    public function setMailboxStorageUsedInBytes($val)
    {
        $this->_propDict["mailboxStorageUsedInBytes"] = intval($val);
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
    * @return Office365GroupsActivityStorage
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
    * @return Office365GroupsActivityStorage
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
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
    * @return Office365GroupsActivityStorage
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the siteStorageUsedInBytes
    *
    * @return int The siteStorageUsedInBytes
    */
    public function getSiteStorageUsedInBytes()
    {
        if (array_key_exists("siteStorageUsedInBytes", $this->_propDict)) {
            return $this->_propDict["siteStorageUsedInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siteStorageUsedInBytes
    *
    * @param int $val The siteStorageUsedInBytes
    *
    * @return Office365GroupsActivityStorage
    */
    public function setSiteStorageUsedInBytes($val)
    {
        $this->_propDict["siteStorageUsedInBytes"] = intval($val);
        return $this;
    }
    
}