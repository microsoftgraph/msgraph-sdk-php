<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSGeneralDeviceConfiguration File
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
* MacOSGeneralDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MacOSGeneralDeviceConfiguration extends DeviceConfiguration
{

     /** 
     * Gets the compliantAppsList
     *
     * @return array The compliantAppsList
     */
    public function getCompliantAppsList()
    {
        if (array_key_exists("compliantAppsList", $this->_propDict)) {
           return $this->_propDict["compliantAppsList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the compliantAppsList
    *
    * @param AppListItem $val The compliantAppsList
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setCompliantAppsList($val)
    {
		$this->_propDict["compliantAppsList"] = $val;
        return $this;
    }
    
    /**
    * Gets the compliantAppListType
    *
    * @return AppListType The compliantAppListType
    */
    public function getCompliantAppListType()
    {
        if (array_key_exists("compliantAppListType", $this->_propDict)) {
            if (is_a($this->_propDict["compliantAppListType"], "Microsoft\Graph\Beta\Model\AppListType")) {
                return $this->_propDict["compliantAppListType"];
            } else {
                $this->_propDict["compliantAppListType"] = new AppListType($this->_propDict["compliantAppListType"]);
                return $this->_propDict["compliantAppListType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the compliantAppListType
    *
    * @param AppListType $val The compliantAppListType
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setCompliantAppListType($val)
    {
        $this->_propDict["compliantAppListType"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailInDomainSuffixes
    *
    * @return string The emailInDomainSuffixes
    */
    public function getEmailInDomainSuffixes()
    {
        if (array_key_exists("emailInDomainSuffixes", $this->_propDict)) {
            return $this->_propDict["emailInDomainSuffixes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailInDomainSuffixes
    *
    * @param string $val The emailInDomainSuffixes
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setEmailInDomainSuffixes($val)
    {
        $this->_propDict["emailInDomainSuffixes"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordBlockSimple
    *
    * @return bool The passwordBlockSimple
    */
    public function getPasswordBlockSimple()
    {
        if (array_key_exists("passwordBlockSimple", $this->_propDict)) {
            return $this->_propDict["passwordBlockSimple"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockSimple
    *
    * @param bool $val The passwordBlockSimple
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordBlockSimple($val)
    {
        $this->_propDict["passwordBlockSimple"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordExpirationDays
    *
    * @return int The passwordExpirationDays
    */
    public function getPasswordExpirationDays()
    {
        if (array_key_exists("passwordExpirationDays", $this->_propDict)) {
            return $this->_propDict["passwordExpirationDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordExpirationDays
    *
    * @param int $val The passwordExpirationDays
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumCharacterSetCount
    *
    * @return int The passwordMinimumCharacterSetCount
    */
    public function getPasswordMinimumCharacterSetCount()
    {
        if (array_key_exists("passwordMinimumCharacterSetCount", $this->_propDict)) {
            return $this->_propDict["passwordMinimumCharacterSetCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumCharacterSetCount
    *
    * @param int $val The passwordMinimumCharacterSetCount
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordMinimumCharacterSetCount($val)
    {
        $this->_propDict["passwordMinimumCharacterSetCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLength
    *
    * @return int The passwordMinimumLength
    */
    public function getPasswordMinimumLength()
    {
        if (array_key_exists("passwordMinimumLength", $this->_propDict)) {
            return $this->_propDict["passwordMinimumLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumLength
    *
    * @param int $val The passwordMinimumLength
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeLock
    *
    * @return int The passwordMinutesOfInactivityBeforeLock
    */
    public function getPasswordMinutesOfInactivityBeforeLock()
    {
        if (array_key_exists("passwordMinutesOfInactivityBeforeLock", $this->_propDict)) {
            return $this->_propDict["passwordMinutesOfInactivityBeforeLock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinutesOfInactivityBeforeLock
    *
    * @param int $val The passwordMinutesOfInactivityBeforeLock
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeLock($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeLock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return int The passwordMinutesOfInactivityBeforeScreenTimeout
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout()
    {
        if (array_key_exists("passwordMinutesOfInactivityBeforeScreenTimeout", $this->_propDict)) {
            return $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @param int $val The passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordBlockCount
    *
    * @return int The passwordPreviousPasswordBlockCount
    */
    public function getPasswordPreviousPasswordBlockCount()
    {
        if (array_key_exists("passwordPreviousPasswordBlockCount", $this->_propDict)) {
            return $this->_propDict["passwordPreviousPasswordBlockCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordPreviousPasswordBlockCount
    *
    * @param int $val The passwordPreviousPasswordBlockCount
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
    *
    * @return RequiredPasswordType The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "Microsoft\Graph\Beta\Model\RequiredPasswordType")) {
                return $this->_propDict["passwordRequiredType"];
            } else {
                $this->_propDict["passwordRequiredType"] = new RequiredPasswordType($this->_propDict["passwordRequiredType"]);
                return $this->_propDict["passwordRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordRequiredType
    *
    * @param RequiredPasswordType $val The passwordRequiredType
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordRequired
    *
    * @return bool The passwordRequired
    */
    public function getPasswordRequired()
    {
        if (array_key_exists("passwordRequired", $this->_propDict)) {
            return $this->_propDict["passwordRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordRequired
    *
    * @param bool $val The passwordRequired
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safariBlockAutofill
    *
    * @return bool The safariBlockAutofill
    */
    public function getSafariBlockAutofill()
    {
        if (array_key_exists("safariBlockAutofill", $this->_propDict)) {
            return $this->_propDict["safariBlockAutofill"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariBlockAutofill
    *
    * @param bool $val The safariBlockAutofill
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setSafariBlockAutofill($val)
    {
        $this->_propDict["safariBlockAutofill"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cameraBlocked
    *
    * @return bool The cameraBlocked
    */
    public function getCameraBlocked()
    {
        if (array_key_exists("cameraBlocked", $this->_propDict)) {
            return $this->_propDict["cameraBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cameraBlocked
    *
    * @param bool $val The cameraBlocked
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setCameraBlocked($val)
    {
        $this->_propDict["cameraBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iTunesBlockMusicService
    *
    * @return bool The iTunesBlockMusicService
    */
    public function getITunesBlockMusicService()
    {
        if (array_key_exists("iTunesBlockMusicService", $this->_propDict)) {
            return $this->_propDict["iTunesBlockMusicService"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iTunesBlockMusicService
    *
    * @param bool $val The iTunesBlockMusicService
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setITunesBlockMusicService($val)
    {
        $this->_propDict["iTunesBlockMusicService"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the spotlightBlockInternetResults
    *
    * @return bool The spotlightBlockInternetResults
    */
    public function getSpotlightBlockInternetResults()
    {
        if (array_key_exists("spotlightBlockInternetResults", $this->_propDict)) {
            return $this->_propDict["spotlightBlockInternetResults"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the spotlightBlockInternetResults
    *
    * @param bool $val The spotlightBlockInternetResults
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setSpotlightBlockInternetResults($val)
    {
        $this->_propDict["spotlightBlockInternetResults"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyboardBlockDictation
    *
    * @return bool The keyboardBlockDictation
    */
    public function getKeyboardBlockDictation()
    {
        if (array_key_exists("keyboardBlockDictation", $this->_propDict)) {
            return $this->_propDict["keyboardBlockDictation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardBlockDictation
    *
    * @param bool $val The keyboardBlockDictation
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setKeyboardBlockDictation($val)
    {
        $this->_propDict["keyboardBlockDictation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the definitionLookupBlocked
    *
    * @return bool The definitionLookupBlocked
    */
    public function getDefinitionLookupBlocked()
    {
        if (array_key_exists("definitionLookupBlocked", $this->_propDict)) {
            return $this->_propDict["definitionLookupBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the definitionLookupBlocked
    *
    * @param bool $val The definitionLookupBlocked
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setDefinitionLookupBlocked($val)
    {
        $this->_propDict["definitionLookupBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appleWatchBlockAutoUnlock
    *
    * @return bool The appleWatchBlockAutoUnlock
    */
    public function getAppleWatchBlockAutoUnlock()
    {
        if (array_key_exists("appleWatchBlockAutoUnlock", $this->_propDict)) {
            return $this->_propDict["appleWatchBlockAutoUnlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleWatchBlockAutoUnlock
    *
    * @param bool $val The appleWatchBlockAutoUnlock
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setAppleWatchBlockAutoUnlock($val)
    {
        $this->_propDict["appleWatchBlockAutoUnlock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iTunesBlockFileSharing
    *
    * @return bool The iTunesBlockFileSharing
    */
    public function getITunesBlockFileSharing()
    {
        if (array_key_exists("iTunesBlockFileSharing", $this->_propDict)) {
            return $this->_propDict["iTunesBlockFileSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iTunesBlockFileSharing
    *
    * @param bool $val The iTunesBlockFileSharing
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setITunesBlockFileSharing($val)
    {
        $this->_propDict["iTunesBlockFileSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockDocumentSync
    *
    * @return bool The iCloudBlockDocumentSync
    */
    public function getICloudBlockDocumentSync()
    {
        if (array_key_exists("iCloudBlockDocumentSync", $this->_propDict)) {
            return $this->_propDict["iCloudBlockDocumentSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockDocumentSync
    *
    * @param bool $val The iCloudBlockDocumentSync
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockDocumentSync($val)
    {
        $this->_propDict["iCloudBlockDocumentSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockMail
    *
    * @return bool The iCloudBlockMail
    */
    public function getICloudBlockMail()
    {
        if (array_key_exists("iCloudBlockMail", $this->_propDict)) {
            return $this->_propDict["iCloudBlockMail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockMail
    *
    * @param bool $val The iCloudBlockMail
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockMail($val)
    {
        $this->_propDict["iCloudBlockMail"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockAddressBook
    *
    * @return bool The iCloudBlockAddressBook
    */
    public function getICloudBlockAddressBook()
    {
        if (array_key_exists("iCloudBlockAddressBook", $this->_propDict)) {
            return $this->_propDict["iCloudBlockAddressBook"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockAddressBook
    *
    * @param bool $val The iCloudBlockAddressBook
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockAddressBook($val)
    {
        $this->_propDict["iCloudBlockAddressBook"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockCalendar
    *
    * @return bool The iCloudBlockCalendar
    */
    public function getICloudBlockCalendar()
    {
        if (array_key_exists("iCloudBlockCalendar", $this->_propDict)) {
            return $this->_propDict["iCloudBlockCalendar"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockCalendar
    *
    * @param bool $val The iCloudBlockCalendar
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockCalendar($val)
    {
        $this->_propDict["iCloudBlockCalendar"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockReminders
    *
    * @return bool The iCloudBlockReminders
    */
    public function getICloudBlockReminders()
    {
        if (array_key_exists("iCloudBlockReminders", $this->_propDict)) {
            return $this->_propDict["iCloudBlockReminders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockReminders
    *
    * @param bool $val The iCloudBlockReminders
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockReminders($val)
    {
        $this->_propDict["iCloudBlockReminders"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockBookmarks
    *
    * @return bool The iCloudBlockBookmarks
    */
    public function getICloudBlockBookmarks()
    {
        if (array_key_exists("iCloudBlockBookmarks", $this->_propDict)) {
            return $this->_propDict["iCloudBlockBookmarks"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockBookmarks
    *
    * @param bool $val The iCloudBlockBookmarks
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockBookmarks($val)
    {
        $this->_propDict["iCloudBlockBookmarks"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockNotes
    *
    * @return bool The iCloudBlockNotes
    */
    public function getICloudBlockNotes()
    {
        if (array_key_exists("iCloudBlockNotes", $this->_propDict)) {
            return $this->_propDict["iCloudBlockNotes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockNotes
    *
    * @param bool $val The iCloudBlockNotes
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockNotes($val)
    {
        $this->_propDict["iCloudBlockNotes"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the airDropBlocked
    *
    * @return bool The airDropBlocked
    */
    public function getAirDropBlocked()
    {
        if (array_key_exists("airDropBlocked", $this->_propDict)) {
            return $this->_propDict["airDropBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the airDropBlocked
    *
    * @param bool $val The airDropBlocked
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setAirDropBlocked($val)
    {
        $this->_propDict["airDropBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockModification
    *
    * @return bool The passwordBlockModification
    */
    public function getPasswordBlockModification()
    {
        if (array_key_exists("passwordBlockModification", $this->_propDict)) {
            return $this->_propDict["passwordBlockModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockModification
    *
    * @param bool $val The passwordBlockModification
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordBlockModification($val)
    {
        $this->_propDict["passwordBlockModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockFingerprintUnlock
    *
    * @return bool The passwordBlockFingerprintUnlock
    */
    public function getPasswordBlockFingerprintUnlock()
    {
        if (array_key_exists("passwordBlockFingerprintUnlock", $this->_propDict)) {
            return $this->_propDict["passwordBlockFingerprintUnlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockFingerprintUnlock
    *
    * @param bool $val The passwordBlockFingerprintUnlock
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordBlockFingerprintUnlock($val)
    {
        $this->_propDict["passwordBlockFingerprintUnlock"] = boolval($val);
        return $this;
    }
    
}