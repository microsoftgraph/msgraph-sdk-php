<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsUserActivityUserDetail File
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
* TeamsUserActivityUserDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsUserActivityUserDetail extends Entity
{
    /**
    * Gets the adHocMeetingsAttendedCount
    * The number of ad hoc meetings a user participated in.
    *
    * @return int|null The adHocMeetingsAttendedCount
    */
    public function getAdHocMeetingsAttendedCount()
    {
        if (array_key_exists("adHocMeetingsAttendedCount", $this->_propDict)) {
            return $this->_propDict["adHocMeetingsAttendedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the adHocMeetingsAttendedCount
    * The number of ad hoc meetings a user participated in.
    *
    * @param int $val The adHocMeetingsAttendedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setAdHocMeetingsAttendedCount($val)
    {
        $this->_propDict["adHocMeetingsAttendedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the adHocMeetingsOrganizedCount
    * The number of ad hoc meetings a user organized.
    *
    * @return int|null The adHocMeetingsOrganizedCount
    */
    public function getAdHocMeetingsOrganizedCount()
    {
        if (array_key_exists("adHocMeetingsOrganizedCount", $this->_propDict)) {
            return $this->_propDict["adHocMeetingsOrganizedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the adHocMeetingsOrganizedCount
    * The number of ad hoc meetings a user organized.
    *
    * @param int $val The adHocMeetingsOrganizedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setAdHocMeetingsOrganizedCount($val)
    {
        $this->_propDict["adHocMeetingsOrganizedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the assignedProducts
    * Products the user assigned with.
    *
    * @return string|null The assignedProducts
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
    * Products the user assigned with.
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
    * Gets the audioDuration
    * Audio duration the user participated in.
    *
    * @return Duration|null The audioDuration
    */
    public function getAudioDuration()
    {
        if (array_key_exists("audioDuration", $this->_propDict)) {
            if (is_a($this->_propDict["audioDuration"], "\Beta\Microsoft\Graph\Model\Duration") || is_null($this->_propDict["audioDuration"])) {
                return $this->_propDict["audioDuration"];
            } else {
                $this->_propDict["audioDuration"] = new Duration($this->_propDict["audioDuration"]);
                return $this->_propDict["audioDuration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the audioDuration
    * Audio duration the user participated in.
    *
    * @param Duration $val The audioDuration
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setAudioDuration($val)
    {
        $this->_propDict["audioDuration"] = $val;
        return $this;
    }
    
    /**
    * Gets the callCount
    * The number of 1:1 calls that the user participated in.
    *
    * @return int|null The callCount
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
    * The number of 1:1 calls that the user participated in.
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
    * The date when the delete operation happened. Default value is 'null' when the user has not been deleted.
    *
    * @return \DateTime|null The deletedDate
    */
    public function getDeletedDate()
    {
        if (array_key_exists("deletedDate", $this->_propDict)) {
            if (is_a($this->_propDict["deletedDate"], "\DateTime") || is_null($this->_propDict["deletedDate"])) {
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
    * The date when the delete operation happened. Default value is 'null' when the user has not been deleted.
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
    * The User is active but has performed other activities than exposed action types offered in the report (sending or replying to channel messages and chat messages, scheduling or participating in 1:1 calls and meetings). Examples actions are when a user changes the Teams status or the Teams status message or opens a Channel Message post but does not reply.
    *
    * @return bool|null The hasOtherAction
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
    * The User is active but has performed other activities than exposed action types offered in the report (sending or replying to channel messages and chat messages, scheduling or participating in 1:1 calls and meetings). Examples actions are when a user changes the Teams status or the Teams status message or opens a Channel Message post but does not reply.
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
    * Whether this user has been deleted or soft deleted.
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
    * Whether this user has been deleted or soft deleted.
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
    * Gets the isLicensed
    * Whether the user has been assigned a Teams license.
    *
    * @return bool|null The isLicensed
    */
    public function getIsLicensed()
    {
        if (array_key_exists("isLicensed", $this->_propDict)) {
            return $this->_propDict["isLicensed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isLicensed
    * Whether the user has been assigned a Teams license.
    *
    * @param bool $val The isLicensed
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setIsLicensed($val)
    {
        $this->_propDict["isLicensed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastActivityDate
    * The last date that the user participated in a Microsoft Teams activity.
    *
    * @return \DateTime|null The lastActivityDate
    */
    public function getLastActivityDate()
    {
        if (array_key_exists("lastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivityDate"], "\DateTime") || is_null($this->_propDict["lastActivityDate"])) {
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
    * The last date that the user participated in a Microsoft Teams activity.
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
    * The number of online meetings that the user participated in.
    *
    * @return int|null The meetingCount
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
    * The number of online meetings that the user participated in.
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
    * Gets the meetingsAttendedCount
    * The sum of the one-time scheduled, recurring, ad hoc and unclassified meetings a user participated in.
    *
    * @return int|null The meetingsAttendedCount
    */
    public function getMeetingsAttendedCount()
    {
        if (array_key_exists("meetingsAttendedCount", $this->_propDict)) {
            return $this->_propDict["meetingsAttendedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the meetingsAttendedCount
    * The sum of the one-time scheduled, recurring, ad hoc and unclassified meetings a user participated in.
    *
    * @param int $val The meetingsAttendedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setMeetingsAttendedCount($val)
    {
        $this->_propDict["meetingsAttendedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the meetingsOrganizedCount
    * The sum of one-time scheduled, Recurring, ad hoc and unclassified meetings a user organized.
    *
    * @return int|null The meetingsOrganizedCount
    */
    public function getMeetingsOrganizedCount()
    {
        if (array_key_exists("meetingsOrganizedCount", $this->_propDict)) {
            return $this->_propDict["meetingsOrganizedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the meetingsOrganizedCount
    * The sum of one-time scheduled, Recurring, ad hoc and unclassified meetings a user organized.
    *
    * @param int $val The meetingsOrganizedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setMeetingsOrganizedCount($val)
    {
        $this->_propDict["meetingsOrganizedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the privateChatMessageCount
    * The number of unique messages that the user posted in a private chat.
    *
    * @return int|null The privateChatMessageCount
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
    * The number of unique messages that the user posted in a private chat.
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
    * @return TeamsUserActivityUserDetail
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
    * @return TeamsUserActivityUserDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the scheduledOneTimeMeetingsAttendedCount
    * The number of the one-time scheduled meetings a user participated in.
    *
    * @return int|null The scheduledOneTimeMeetingsAttendedCount
    */
    public function getScheduledOneTimeMeetingsAttendedCount()
    {
        if (array_key_exists("scheduledOneTimeMeetingsAttendedCount", $this->_propDict)) {
            return $this->_propDict["scheduledOneTimeMeetingsAttendedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scheduledOneTimeMeetingsAttendedCount
    * The number of the one-time scheduled meetings a user participated in.
    *
    * @param int $val The scheduledOneTimeMeetingsAttendedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setScheduledOneTimeMeetingsAttendedCount($val)
    {
        $this->_propDict["scheduledOneTimeMeetingsAttendedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the scheduledOneTimeMeetingsOrganizedCount
    * The number of one-time scheduled meetings a user organized.
    *
    * @return int|null The scheduledOneTimeMeetingsOrganizedCount
    */
    public function getScheduledOneTimeMeetingsOrganizedCount()
    {
        if (array_key_exists("scheduledOneTimeMeetingsOrganizedCount", $this->_propDict)) {
            return $this->_propDict["scheduledOneTimeMeetingsOrganizedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scheduledOneTimeMeetingsOrganizedCount
    * The number of one-time scheduled meetings a user organized.
    *
    * @param int $val The scheduledOneTimeMeetingsOrganizedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setScheduledOneTimeMeetingsOrganizedCount($val)
    {
        $this->_propDict["scheduledOneTimeMeetingsOrganizedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the scheduledRecurringMeetingsAttendedCount
    * The number of the recurring meetings a user participated in.
    *
    * @return int|null The scheduledRecurringMeetingsAttendedCount
    */
    public function getScheduledRecurringMeetingsAttendedCount()
    {
        if (array_key_exists("scheduledRecurringMeetingsAttendedCount", $this->_propDict)) {
            return $this->_propDict["scheduledRecurringMeetingsAttendedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scheduledRecurringMeetingsAttendedCount
    * The number of the recurring meetings a user participated in.
    *
    * @param int $val The scheduledRecurringMeetingsAttendedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setScheduledRecurringMeetingsAttendedCount($val)
    {
        $this->_propDict["scheduledRecurringMeetingsAttendedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the scheduledRecurringMeetingsOrganizedCount
    * The number of recurring meetings a user organized.
    *
    * @return int|null The scheduledRecurringMeetingsOrganizedCount
    */
    public function getScheduledRecurringMeetingsOrganizedCount()
    {
        if (array_key_exists("scheduledRecurringMeetingsOrganizedCount", $this->_propDict)) {
            return $this->_propDict["scheduledRecurringMeetingsOrganizedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scheduledRecurringMeetingsOrganizedCount
    * The number of recurring meetings a user organized.
    *
    * @param int $val The scheduledRecurringMeetingsOrganizedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setScheduledRecurringMeetingsOrganizedCount($val)
    {
        $this->_propDict["scheduledRecurringMeetingsOrganizedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the screenShareDuration
    * Screen sharing duration the user participated in.
    *
    * @return Duration|null The screenShareDuration
    */
    public function getScreenShareDuration()
    {
        if (array_key_exists("screenShareDuration", $this->_propDict)) {
            if (is_a($this->_propDict["screenShareDuration"], "\Beta\Microsoft\Graph\Model\Duration") || is_null($this->_propDict["screenShareDuration"])) {
                return $this->_propDict["screenShareDuration"];
            } else {
                $this->_propDict["screenShareDuration"] = new Duration($this->_propDict["screenShareDuration"]);
                return $this->_propDict["screenShareDuration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the screenShareDuration
    * Screen sharing duration the user participated in.
    *
    * @param Duration $val The screenShareDuration
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setScreenShareDuration($val)
    {
        $this->_propDict["screenShareDuration"] = $val;
        return $this;
    }
    
    /**
    * Gets the teamChatMessageCount
    * The number of unique messages that the user posted in a team chat.
    *
    * @return int|null The teamChatMessageCount
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
    * The number of unique messages that the user posted in a team chat.
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
    * The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created.
    *
    * @return string|null The userPrincipalName
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
    * The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created.
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
    
    /**
    * Gets the videoDuration
    * Video duration the user participated in.
    *
    * @return Duration|null The videoDuration
    */
    public function getVideoDuration()
    {
        if (array_key_exists("videoDuration", $this->_propDict)) {
            if (is_a($this->_propDict["videoDuration"], "\Beta\Microsoft\Graph\Model\Duration") || is_null($this->_propDict["videoDuration"])) {
                return $this->_propDict["videoDuration"];
            } else {
                $this->_propDict["videoDuration"] = new Duration($this->_propDict["videoDuration"]);
                return $this->_propDict["videoDuration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the videoDuration
    * Video duration the user participated in.
    *
    * @param Duration $val The videoDuration
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setVideoDuration($val)
    {
        $this->_propDict["videoDuration"] = $val;
        return $this;
    }
    
}
