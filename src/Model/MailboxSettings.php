<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailboxSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* MailboxSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MailboxSettings extends Entity
{

    /**
    * Gets the automaticRepliesSetting
    * Configuration settings to automatically notify the sender of an incoming email with a message from the signed-in user.
    *
    * @return AutomaticRepliesSetting The automaticRepliesSetting
    */
    public function getAutomaticRepliesSetting()
    {
        if (array_key_exists("automaticRepliesSetting", $this->_propDict)) {
            if (is_a($this->_propDict["automaticRepliesSetting"], "AutomaticRepliesSetting")) {
                return $this->_propDict["automaticRepliesSetting"];
            } else {
                $this->_propDict["automaticRepliesSetting"] = new AutomaticRepliesSetting($this->_propDict["automaticRepliesSetting"]);
                return $this->_propDict["automaticRepliesSetting"];
            }
        }
        return null;
    }

    /**
    * Sets the automaticRepliesSetting
    * Configuration settings to automatically notify the sender of an incoming email with a message from the signed-in user.
    *
    * @param AutomaticRepliesSetting $val The value to assign to the automaticRepliesSetting
    *
    * @return MailboxSettings The MailboxSettings
    */
    public function setAutomaticRepliesSetting($val)
    {
        $this->_propDict["automaticRepliesSetting"] = $val;
         return $this;
    }

    /**
    * Gets the language
    * The locale information for the user, including the preferred language and country/region.
    *
    * @return LocaleInfo The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            if (is_a($this->_propDict["language"], "LocaleInfo")) {
                return $this->_propDict["language"];
            } else {
                $this->_propDict["language"] = new LocaleInfo($this->_propDict["language"]);
                return $this->_propDict["language"];
            }
        }
        return null;
    }

    /**
    * Sets the language
    * The locale information for the user, including the preferred language and country/region.
    *
    * @param LocaleInfo $val The value to assign to the language
    *
    * @return MailboxSettings The MailboxSettings
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
         return $this;
    }
    /**
    * Gets the timeZone
    * The default time zone for the user's mailbox.
    *
    * @return string The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            return $this->_propDict["timeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeZone
    * The default time zone for the user's mailbox.
    *
    * @param string $val The value of the timeZone
    *
    * @return MailboxSettings
    */
    public function setTimeZone($val)
    {
        $this->_propDict["time_zone"] = $val;
        return $this;
    }
}
