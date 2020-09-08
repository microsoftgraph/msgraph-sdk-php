<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsUserActivityCounts File
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
* TeamsUserActivityCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsUserActivityCounts extends Entity
{
    /**
    * Gets the calls
    *
    * @return int The calls
    */
    public function getCalls()
    {
        if (array_key_exists("calls", $this->_propDict)) {
            return $this->_propDict["calls"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the calls
    *
    * @param int $val The calls
    *
    * @return TeamsUserActivityCounts
    */
    public function setCalls($val)
    {
        $this->_propDict["calls"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the meetings
    *
    * @return int The meetings
    */
    public function getMeetings()
    {
        if (array_key_exists("meetings", $this->_propDict)) {
            return $this->_propDict["meetings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the meetings
    *
    * @param int $val The meetings
    *
    * @return TeamsUserActivityCounts
    */
    public function setMeetings($val)
    {
        $this->_propDict["meetings"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the privateChatMessages
    *
    * @return int The privateChatMessages
    */
    public function getPrivateChatMessages()
    {
        if (array_key_exists("privateChatMessages", $this->_propDict)) {
            return $this->_propDict["privateChatMessages"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the privateChatMessages
    *
    * @param int $val The privateChatMessages
    *
    * @return TeamsUserActivityCounts
    */
    public function setPrivateChatMessages($val)
    {
        $this->_propDict["privateChatMessages"] = intval($val);
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
    * @return TeamsUserActivityCounts
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
    * @return TeamsUserActivityCounts
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
    * @return TeamsUserActivityCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the teamChatMessages
    *
    * @return int The teamChatMessages
    */
    public function getTeamChatMessages()
    {
        if (array_key_exists("teamChatMessages", $this->_propDict)) {
            return $this->_propDict["teamChatMessages"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the teamChatMessages
    *
    * @param int $val The teamChatMessages
    *
    * @return TeamsUserActivityCounts
    */
    public function setTeamChatMessages($val)
    {
        $this->_propDict["teamChatMessages"] = intval($val);
        return $this;
    }
    
}