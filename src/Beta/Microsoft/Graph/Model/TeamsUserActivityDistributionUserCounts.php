<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsUserActivityDistributionUserCounts File
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
* TeamsUserActivityDistributionUserCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsUserActivityDistributionUserCounts extends Entity
{
    /**
    * Gets the calls
    * The number of unique 1:1 calls that users participated in.
    *
    * @return int|null The calls
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
    * The number of unique 1:1 calls that users participated in.
    *
    * @param int $val The calls
    *
    * @return TeamsUserActivityDistributionUserCounts
    */
    public function setCalls($val)
    {
        $this->_propDict["calls"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the meetings
    * The number of unique online meetings that users participated in.
    *
    * @return int|null The meetings
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
    * The number of unique online meetings that users participated in.
    *
    * @param int $val The meetings
    *
    * @return TeamsUserActivityDistributionUserCounts
    */
    public function setMeetings($val)
    {
        $this->_propDict["meetings"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the privateChatMessages
    * The number of unique messages that users posted in a private chat.
    *
    * @return int|null The privateChatMessages
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
    * The number of unique messages that users posted in a private chat.
    *
    * @param int $val The privateChatMessages
    *
    * @return TeamsUserActivityDistributionUserCounts
    */
    public function setPrivateChatMessages($val)
    {
        $this->_propDict["privateChatMessages"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    * The number of days the report covers.
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
    * The number of days the report covers.
    *
    * @param string $val The reportPeriod
    *
    * @return TeamsUserActivityDistributionUserCounts
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    * The latest date of the content.
    *
    * @return \DateTime|null The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime") || is_null($this->_propDict["reportRefreshDate"])) {
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
    * The latest date of the content.
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return TeamsUserActivityDistributionUserCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the teamChatMessages
    * The number of unique messages that users posted in a team chat.
    *
    * @return int|null The teamChatMessages
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
    * The number of unique messages that users posted in a team chat.
    *
    * @param int $val The teamChatMessages
    *
    * @return TeamsUserActivityDistributionUserCounts
    */
    public function setTeamChatMessages($val)
    {
        $this->_propDict["teamChatMessages"] = intval($val);
        return $this;
    }
    
}
