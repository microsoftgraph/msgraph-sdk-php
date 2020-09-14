<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsUserActivityUserDetail File
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
* TeamsUserActivityUserDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsUserActivityUserDetail extends Entity
{
    /**
    * Gets the assignedProducts
    *
    * @return string The assignedProducts
    */
    public function getAssignedProducts()
    {
        if (array_key_exists("assignedProducts", $this->_propDict)) {
            return $this->_propDict["assignedProducts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignedProducts
    *
    * @param string $val The assignedProducts
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setAssignedProducts($val)
    {
        $this->_propDict["assignedProducts"] = $val;
        return $this;
    }
    
    /**
    * Gets the callCount
    *
    * @return int The callCount
    */
    public function getCallCount()
    {
        if (array_key_exists("callCount", $this->_propDict)) {
            return $this->_propDict["callCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the callCount
    *
    * @param int $val The callCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setCallCount($val)
    {
        $this->_propDict["callCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the deletedDate
    *
    * @return \DateTime The deletedDate
    */
    public function getDeletedDate()
    {
        if (array_key_exists("deletedDate", $this->_propDict)) {
            if (is_a($this->_propDict["deletedDate"], "\DateTime")) {
                return $this->_propDict["deletedDate"];
            } else {
                $this->_propDict["deletedDate"] = new \DateTime($this->_propDict["deletedDate"]);
                return $this->_propDict["deletedDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deletedDate
    *
    * @param \DateTime $val The deletedDate
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setDeletedDate($val)
    {
        $this->_propDict["deletedDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the hasOtherAction
    *
    * @return bool The hasOtherAction
    */
    public function getHasOtherAction()
    {
        if (array_key_exists("hasOtherAction", $this->_propDict)) {
            return $this->_propDict["hasOtherAction"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasOtherAction
    *
    * @param bool $val The hasOtherAction
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setHasOtherAction($val)
    {
        $this->_propDict["hasOtherAction"] = boolval($val);
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
    * @return TeamsUserActivityUserDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
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
    * @return TeamsUserActivityUserDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the meetingCount
    *
    * @return int The meetingCount
    */
    public function getMeetingCount()
    {
        if (array_key_exists("meetingCount", $this->_propDict)) {
            return $this->_propDict["meetingCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the meetingCount
    *
    * @param int $val The meetingCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setMeetingCount($val)
    {
        $this->_propDict["meetingCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the privateChatMessageCount
    *
    * @return int The privateChatMessageCount
    */
    public function getPrivateChatMessageCount()
    {
        if (array_key_exists("privateChatMessageCount", $this->_propDict)) {
            return $this->_propDict["privateChatMessageCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the privateChatMessageCount
    *
    * @param int $val The privateChatMessageCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setPrivateChatMessageCount($val)
    {
        $this->_propDict["privateChatMessageCount"] = intval($val);
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
    * @return TeamsUserActivityUserDetail
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
    * @return TeamsUserActivityUserDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the teamChatMessageCount
    *
    * @return int The teamChatMessageCount
    */
    public function getTeamChatMessageCount()
    {
        if (array_key_exists("teamChatMessageCount", $this->_propDict)) {
            return $this->_propDict["teamChatMessageCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the teamChatMessageCount
    *
    * @param int $val The teamChatMessageCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setTeamChatMessageCount($val)
    {
        $this->_propDict["teamChatMessageCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    *
    * @param string $val The userPrincipalName
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}