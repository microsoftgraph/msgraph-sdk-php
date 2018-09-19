<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailboxSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* MailboxSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MailboxSettings extends Entity
{

    /**
    * Gets the automaticRepliesSetting
    *
    * @return AutomaticRepliesSetting The automaticRepliesSetting
    */
    public function getAutomaticRepliesSetting()
    {
        if (array_key_exists("automaticRepliesSetting", $this->_propDict)) {
            if (is_a($this->_propDict["automaticRepliesSetting"], "Microsoft\Graph\Beta\Model\AutomaticRepliesSetting")) {
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
    * Gets the archiveFolder
    *
    * @return string The archiveFolder
    */
    public function getArchiveFolder()
    {
        if (array_key_exists("archiveFolder", $this->_propDict)) {
            return $this->_propDict["archiveFolder"];
        } else {
            return null;
        }
    }

    /**
    * Sets the archiveFolder
    *
    * @param string $val The value of the archiveFolder
    *
    * @return MailboxSettings
    */
    public function setArchiveFolder($val)
    {
        $this->_propDict["archiveFolder"] = $val;
        return $this;
    }
    /**
    * Gets the timeZone
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
    *
    * @param string $val The value of the timeZone
    *
    * @return MailboxSettings
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }

    /**
    * Gets the language
    *
    * @return LocaleInfo The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            if (is_a($this->_propDict["language"], "Microsoft\Graph\Beta\Model\LocaleInfo")) {
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
    * Gets the workingHours
    *
    * @return WorkingHours The workingHours
    */
    public function getWorkingHours()
    {
        if (array_key_exists("workingHours", $this->_propDict)) {
            if (is_a($this->_propDict["workingHours"], "Microsoft\Graph\Beta\Model\WorkingHours")) {
                return $this->_propDict["workingHours"];
            } else {
                $this->_propDict["workingHours"] = new WorkingHours($this->_propDict["workingHours"]);
                return $this->_propDict["workingHours"];
            }
        }
        return null;
    }

    /**
    * Sets the workingHours
    *
    * @param WorkingHours $val The value to assign to the workingHours
    *
    * @return MailboxSettings The MailboxSettings
    */
    public function setWorkingHours($val)
    {
        $this->_propDict["workingHours"] = $val;
         return $this;
    }
}
