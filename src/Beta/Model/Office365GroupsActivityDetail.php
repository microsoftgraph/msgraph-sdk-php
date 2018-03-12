<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Office365GroupsActivityDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* Office365GroupsActivityDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Office365GroupsActivityDetail extends Entity
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
    * @return Office365GroupsActivityDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupDisplayName
    *
    * @return string The groupDisplayName
    */
    public function getGroupDisplayName()
    {
        if (array_key_exists("groupDisplayName", $this->_propDict)) {
            return $this->_propDict["groupDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupDisplayName
    *
    * @param string $val The groupDisplayName
    *
    * @return Office365GroupsActivityDetail
    */
    public function setGroupDisplayName($val)
    {
        $this->_propDict["groupDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDeleted
    *
    * @return bool The isDeleted
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
    * @return Office365GroupsActivityDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the ownerPrincipalName
    *
    * @return string The ownerPrincipalName
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
    * @return Office365GroupsActivityDetail
    */
    public function setOwnerPrincipalName($val)
    {
        $this->_propDict["ownerPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastActivityDate
    *
    * @return \DateTime The lastActivityDate
    */
    public function getLastActivityDate()
    {
        if (array_key_exists("lastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivityDate"], "\DateTime")) {
                return $this->_propDict["lastActivityDate"];
            } else {
                $this->_propDict["lastActivityDate"] = new \DateTime($this->_propDict["lastActivityDate"]);
                return $this->_propDict["lastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActivityDate
    *
    * @param \DateTime $val The lastActivityDate
    *
    * @return Office365GroupsActivityDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupType
    *
    * @return string The groupType
    */
    public function getGroupType()
    {
        if (array_key_exists("groupType", $this->_propDict)) {
            return $this->_propDict["groupType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupType
    *
    * @param string $val The groupType
    *
    * @return Office365GroupsActivityDetail
    */
    public function setGroupType($val)
    {
        $this->_propDict["groupType"] = $val;
        return $this;
    }
    
    /**
    * Gets the memberCount
    *
    * @return int The memberCount
    */
    public function getMemberCount()
    {
        if (array_key_exists("memberCount", $this->_propDict)) {
            return $this->_propDict["memberCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the memberCount
    *
    * @param int $val The memberCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setMemberCount($val)
    {
        $this->_propDict["memberCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the externalMemberCount
    *
    * @return int The externalMemberCount
    */
    public function getExternalMemberCount()
    {
        if (array_key_exists("externalMemberCount", $this->_propDict)) {
            return $this->_propDict["externalMemberCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalMemberCount
    *
    * @param int $val The externalMemberCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setExternalMemberCount($val)
    {
        $this->_propDict["externalMemberCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the exchangeReceivedEmailCount
    *
    * @return int The exchangeReceivedEmailCount
    */
    public function getExchangeReceivedEmailCount()
    {
        if (array_key_exists("exchangeReceivedEmailCount", $this->_propDict)) {
            return $this->_propDict["exchangeReceivedEmailCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchangeReceivedEmailCount
    *
    * @param int $val The exchangeReceivedEmailCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setExchangeReceivedEmailCount($val)
    {
        $this->_propDict["exchangeReceivedEmailCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sharePointActiveFileCount
    *
    * @return int The sharePointActiveFileCount
    */
    public function getSharePointActiveFileCount()
    {
        if (array_key_exists("sharePointActiveFileCount", $this->_propDict)) {
            return $this->_propDict["sharePointActiveFileCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharePointActiveFileCount
    *
    * @param int $val The sharePointActiveFileCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setSharePointActiveFileCount($val)
    {
        $this->_propDict["sharePointActiveFileCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the yammerPostedMessageCount
    *
    * @return int The yammerPostedMessageCount
    */
    public function getYammerPostedMessageCount()
    {
        if (array_key_exists("yammerPostedMessageCount", $this->_propDict)) {
            return $this->_propDict["yammerPostedMessageCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammerPostedMessageCount
    *
    * @param int $val The yammerPostedMessageCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setYammerPostedMessageCount($val)
    {
        $this->_propDict["yammerPostedMessageCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the yammerReadMessageCount
    *
    * @return int The yammerReadMessageCount
    */
    public function getYammerReadMessageCount()
    {
        if (array_key_exists("yammerReadMessageCount", $this->_propDict)) {
            return $this->_propDict["yammerReadMessageCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammerReadMessageCount
    *
    * @param int $val The yammerReadMessageCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setYammerReadMessageCount($val)
    {
        $this->_propDict["yammerReadMessageCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the yammerLikedMessageCount
    *
    * @return int The yammerLikedMessageCount
    */
    public function getYammerLikedMessageCount()
    {
        if (array_key_exists("yammerLikedMessageCount", $this->_propDict)) {
            return $this->_propDict["yammerLikedMessageCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammerLikedMessageCount
    *
    * @param int $val The yammerLikedMessageCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setYammerLikedMessageCount($val)
    {
        $this->_propDict["yammerLikedMessageCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the exchangeMailboxTotalItemCount
    *
    * @return int The exchangeMailboxTotalItemCount
    */
    public function getExchangeMailboxTotalItemCount()
    {
        if (array_key_exists("exchangeMailboxTotalItemCount", $this->_propDict)) {
            return $this->_propDict["exchangeMailboxTotalItemCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchangeMailboxTotalItemCount
    *
    * @param int $val The exchangeMailboxTotalItemCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setExchangeMailboxTotalItemCount($val)
    {
        $this->_propDict["exchangeMailboxTotalItemCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the exchangeMailboxStorageUsedInBytes
    *
    * @return int The exchangeMailboxStorageUsedInBytes
    */
    public function getExchangeMailboxStorageUsedInBytes()
    {
        if (array_key_exists("exchangeMailboxStorageUsedInBytes", $this->_propDict)) {
            return $this->_propDict["exchangeMailboxStorageUsedInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchangeMailboxStorageUsedInBytes
    *
    * @param int $val The exchangeMailboxStorageUsedInBytes
    *
    * @return Office365GroupsActivityDetail
    */
    public function setExchangeMailboxStorageUsedInBytes($val)
    {
        $this->_propDict["exchangeMailboxStorageUsedInBytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sharePointTotalFileCount
    *
    * @return int The sharePointTotalFileCount
    */
    public function getSharePointTotalFileCount()
    {
        if (array_key_exists("sharePointTotalFileCount", $this->_propDict)) {
            return $this->_propDict["sharePointTotalFileCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharePointTotalFileCount
    *
    * @param int $val The sharePointTotalFileCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setSharePointTotalFileCount($val)
    {
        $this->_propDict["sharePointTotalFileCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sharePointSiteStorageUsedInBytes
    *
    * @return int The sharePointSiteStorageUsedInBytes
    */
    public function getSharePointSiteStorageUsedInBytes()
    {
        if (array_key_exists("sharePointSiteStorageUsedInBytes", $this->_propDict)) {
            return $this->_propDict["sharePointSiteStorageUsedInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharePointSiteStorageUsedInBytes
    *
    * @param int $val The sharePointSiteStorageUsedInBytes
    *
    * @return Office365GroupsActivityDetail
    */
    public function setSharePointSiteStorageUsedInBytes($val)
    {
        $this->_propDict["sharePointSiteStorageUsedInBytes"] = intval($val);
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
    * @return Office365GroupsActivityDetail
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
}