<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPhoneEASEmailProfileConfiguration File
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
* WindowsPhoneEASEmailProfileConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsPhoneEASEmailProfileConfiguration extends EasEmailProfileConfigurationBase
{
    /**
    * Gets the accountName
    * Account name.
    *
    * @return string The accountName
    */
    public function getAccountName()
    {
        if (array_key_exists("accountName", $this->_propDict)) {
            return $this->_propDict["accountName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountName
    * Account name.
    *
    * @param string $val The accountName
    *
    * @return WindowsPhoneEASEmailProfileConfiguration
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }
    
    /**
    * Gets the applyOnlyToWindowsPhone81
    * Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
    *
    * @return bool The applyOnlyToWindowsPhone81
    */
    public function getApplyOnlyToWindowsPhone81()
    {
        if (array_key_exists("applyOnlyToWindowsPhone81", $this->_propDict)) {
            return $this->_propDict["applyOnlyToWindowsPhone81"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applyOnlyToWindowsPhone81
    * Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
    *
    * @param bool $val The applyOnlyToWindowsPhone81
    *
    * @return WindowsPhoneEASEmailProfileConfiguration
    */
    public function setApplyOnlyToWindowsPhone81($val)
    {
        $this->_propDict["applyOnlyToWindowsPhone81"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the durationOfEmailToSync
    * Duration of email to sync.
    *
    * @return EmailSyncDuration The durationOfEmailToSync
    */
    public function getDurationOfEmailToSync()
    {
        if (array_key_exists("durationOfEmailToSync", $this->_propDict)) {
            if (is_a($this->_propDict["durationOfEmailToSync"], "Beta\Microsoft\Graph\Model\EmailSyncDuration")) {
                return $this->_propDict["durationOfEmailToSync"];
            } else {
                $this->_propDict["durationOfEmailToSync"] = new EmailSyncDuration($this->_propDict["durationOfEmailToSync"]);
                return $this->_propDict["durationOfEmailToSync"];
            }
        }
        return null;
    }
    
    /**
    * Sets the durationOfEmailToSync
    * Duration of email to sync.
    *
    * @param EmailSyncDuration $val The durationOfEmailToSync
    *
    * @return WindowsPhoneEASEmailProfileConfiguration
    */
    public function setDurationOfEmailToSync($val)
    {
        $this->_propDict["durationOfEmailToSync"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailAddressSource
    * Email attribute that is picked from AAD and injected into this profile before installing on the device.
    *
    * @return UserEmailSource The emailAddressSource
    */
    public function getEmailAddressSource()
    {
        if (array_key_exists("emailAddressSource", $this->_propDict)) {
            if (is_a($this->_propDict["emailAddressSource"], "Beta\Microsoft\Graph\Model\UserEmailSource")) {
                return $this->_propDict["emailAddressSource"];
            } else {
                $this->_propDict["emailAddressSource"] = new UserEmailSource($this->_propDict["emailAddressSource"]);
                return $this->_propDict["emailAddressSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the emailAddressSource
    * Email attribute that is picked from AAD and injected into this profile before installing on the device.
    *
    * @param UserEmailSource $val The emailAddressSource
    *
    * @return WindowsPhoneEASEmailProfileConfiguration
    */
    public function setEmailAddressSource($val)
    {
        $this->_propDict["emailAddressSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailSyncSchedule
    * Email sync schedule.
    *
    * @return EmailSyncSchedule The emailSyncSchedule
    */
    public function getEmailSyncSchedule()
    {
        if (array_key_exists("emailSyncSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["emailSyncSchedule"], "Beta\Microsoft\Graph\Model\EmailSyncSchedule")) {
                return $this->_propDict["emailSyncSchedule"];
            } else {
                $this->_propDict["emailSyncSchedule"] = new EmailSyncSchedule($this->_propDict["emailSyncSchedule"]);
                return $this->_propDict["emailSyncSchedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the emailSyncSchedule
    * Email sync schedule.
    *
    * @param EmailSyncSchedule $val The emailSyncSchedule
    *
    * @return WindowsPhoneEASEmailProfileConfiguration
    */
    public function setEmailSyncSchedule($val)
    {
        $this->_propDict["emailSyncSchedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the hostName
    * Exchange location that (URL) that the native mail app connects to.
    *
    * @return string The hostName
    */
    public function getHostName()
    {
        if (array_key_exists("hostName", $this->_propDict)) {
            return $this->_propDict["hostName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hostName
    * Exchange location that (URL) that the native mail app connects to.
    *
    * @param string $val The hostName
    *
    * @return WindowsPhoneEASEmailProfileConfiguration
    */
    public function setHostName($val)
    {
        $this->_propDict["hostName"] = $val;
        return $this;
    }
    
    /**
    * Gets the requireSsl
    * Indicates whether or not to use SSL.
    *
    * @return bool The requireSsl
    */
    public function getRequireSsl()
    {
        if (array_key_exists("requireSsl", $this->_propDict)) {
            return $this->_propDict["requireSsl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requireSsl
    * Indicates whether or not to use SSL.
    *
    * @param bool $val The requireSsl
    *
    * @return WindowsPhoneEASEmailProfileConfiguration
    */
    public function setRequireSsl($val)
    {
        $this->_propDict["requireSsl"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncCalendar
    * Whether or not to sync the calendar.
    *
    * @return bool The syncCalendar
    */
    public function getSyncCalendar()
    {
        if (array_key_exists("syncCalendar", $this->_propDict)) {
            return $this->_propDict["syncCalendar"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncCalendar
    * Whether or not to sync the calendar.
    *
    * @param bool $val The syncCalendar
    *
    * @return WindowsPhoneEASEmailProfileConfiguration
    */
    public function setSyncCalendar($val)
    {
        $this->_propDict["syncCalendar"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncContacts
    * Whether or not to sync contacts.
    *
    * @return bool The syncContacts
    */
    public function getSyncContacts()
    {
        if (array_key_exists("syncContacts", $this->_propDict)) {
            return $this->_propDict["syncContacts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncContacts
    * Whether or not to sync contacts.
    *
    * @param bool $val The syncContacts
    *
    * @return WindowsPhoneEASEmailProfileConfiguration
    */
    public function setSyncContacts($val)
    {
        $this->_propDict["syncContacts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncTasks
    * Whether or not to sync tasks.
    *
    * @return bool The syncTasks
    */
    public function getSyncTasks()
    {
        if (array_key_exists("syncTasks", $this->_propDict)) {
            return $this->_propDict["syncTasks"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncTasks
    * Whether or not to sync tasks.
    *
    * @param bool $val The syncTasks
    *
    * @return WindowsPhoneEASEmailProfileConfiguration
    */
    public function setSyncTasks($val)
    {
        $this->_propDict["syncTasks"] = boolval($val);
        return $this;
    }
    
}