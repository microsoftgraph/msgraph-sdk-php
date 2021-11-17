<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OneDriveUsageAccountDetail File
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
* OneDriveUsageAccountDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OneDriveUsageAccountDetail extends Entity
{
    /**
    * Gets the activeFileCount
    *
    * @return int|null The activeFileCount
    */
    public function getActiveFileCount()
    {
        if (array_key_exists("activeFileCount", $this->_propDict)) {
            return $this->_propDict["activeFileCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activeFileCount
    *
    * @param int $val The activeFileCount
    *
    * @return OneDriveUsageAccountDetail
    */
    public function setActiveFileCount($val)
    {
        $this->_propDict["activeFileCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the fileCount
    *
    * @return int|null The fileCount
    */
    public function getFileCount()
    {
        if (array_key_exists("fileCount", $this->_propDict)) {
            return $this->_propDict["fileCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileCount
    *
    * @param int $val The fileCount
    *
    * @return OneDriveUsageAccountDetail
    */
    public function setFileCount($val)
    {
        $this->_propDict["fileCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the isDeleted
    *
    * @return bool|null The isDeleted
    */
    public function getIsDeleted()
    {
        if (array_key_exists("isDeleted", $this->_propDict)) {
            return $this->_propDict["isDeleted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeleted
    *
    * @param bool $val The isDeleted
    *
    * @return OneDriveUsageAccountDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastActivityDate
    *
    * @return \Microsoft\Graph\Core\Models\Date|null The lastActivityDate
    */
    public function getLastActivityDate()
    {
        if (array_key_exists("lastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivityDate"], "\Microsoft\Graph\Core\Models\Date") || is_null($this->_propDict["lastActivityDate"])) {
                return $this->_propDict["lastActivityDate"];
            } else {
                $this->_propDict["lastActivityDate"] = new \Microsoft\Graph\Core\Models\Date($this->_propDict["lastActivityDate"]);
                return $this->_propDict["lastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActivityDate
    *
    * @param \Microsoft\Graph\Core\Models\Date $val The lastActivityDate
    *
    * @return OneDriveUsageAccountDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the ownerDisplayName
    *
    * @return string|null The ownerDisplayName
    */
    public function getOwnerDisplayName()
    {
        if (array_key_exists("ownerDisplayName", $this->_propDict)) {
            return $this->_propDict["ownerDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ownerDisplayName
    *
    * @param string $val The ownerDisplayName
    *
    * @return OneDriveUsageAccountDetail
    */
    public function setOwnerDisplayName($val)
    {
        $this->_propDict["ownerDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the ownerPrincipalName
    *
    * @return string|null The ownerPrincipalName
    */
    public function getOwnerPrincipalName()
    {
        if (array_key_exists("ownerPrincipalName", $this->_propDict)) {
            return $this->_propDict["ownerPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ownerPrincipalName
    *
    * @param string $val The ownerPrincipalName
    *
    * @return OneDriveUsageAccountDetail
    */
    public function setOwnerPrincipalName($val)
    {
        $this->_propDict["ownerPrincipalName"] = $val;
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
    * @return OneDriveUsageAccountDetail
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
    * @return OneDriveUsageAccountDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the siteUrl
    *
    * @return string|null The siteUrl
    */
    public function getSiteUrl()
    {
        if (array_key_exists("siteUrl", $this->_propDict)) {
            return $this->_propDict["siteUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siteUrl
    *
    * @param string $val The siteUrl
    *
    * @return OneDriveUsageAccountDetail
    */
    public function setSiteUrl($val)
    {
        $this->_propDict["siteUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the storageAllocatedInBytes
    *
    * @return int|null The storageAllocatedInBytes
    */
    public function getStorageAllocatedInBytes()
    {
        if (array_key_exists("storageAllocatedInBytes", $this->_propDict)) {
            return $this->_propDict["storageAllocatedInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageAllocatedInBytes
    *
    * @param int $val The storageAllocatedInBytes
    *
    * @return OneDriveUsageAccountDetail
    */
    public function setStorageAllocatedInBytes($val)
    {
        $this->_propDict["storageAllocatedInBytes"] = intval($val);
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
    * @return OneDriveUsageAccountDetail
    */
    public function setStorageUsedInBytes($val)
    {
        $this->_propDict["storageUsedInBytes"] = intval($val);
        return $this;
    }
    
}
