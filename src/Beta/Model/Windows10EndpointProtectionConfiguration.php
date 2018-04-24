<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10EndpointProtectionConfiguration File
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
* Windows10EndpointProtectionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows10EndpointProtectionConfiguration extends DeviceConfiguration
{
    /**
    * Gets the localSecurityOptionsBlockMicrosoftAccounts
    *
    * @return bool The localSecurityOptionsBlockMicrosoftAccounts
    */
    public function getLocalSecurityOptionsBlockMicrosoftAccounts()
    {
        if (array_key_exists("localSecurityOptionsBlockMicrosoftAccounts", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsBlockMicrosoftAccounts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsBlockMicrosoftAccounts
    *
    * @param bool $val The localSecurityOptionsBlockMicrosoftAccounts
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsBlockMicrosoftAccounts($val)
    {
        $this->_propDict["localSecurityOptionsBlockMicrosoftAccounts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsBlockRemoteLogonWithBlankPassword
    *
    * @return bool The localSecurityOptionsBlockRemoteLogonWithBlankPassword
    */
    public function getLocalSecurityOptionsBlockRemoteLogonWithBlankPassword()
    {
        if (array_key_exists("localSecurityOptionsBlockRemoteLogonWithBlankPassword", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsBlockRemoteLogonWithBlankPassword"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsBlockRemoteLogonWithBlankPassword
    *
    * @param bool $val The localSecurityOptionsBlockRemoteLogonWithBlankPassword
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsBlockRemoteLogonWithBlankPassword($val)
    {
        $this->_propDict["localSecurityOptionsBlockRemoteLogonWithBlankPassword"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsEnableAdministratorAccount
    *
    * @return bool The localSecurityOptionsEnableAdministratorAccount
    */
    public function getLocalSecurityOptionsEnableAdministratorAccount()
    {
        if (array_key_exists("localSecurityOptionsEnableAdministratorAccount", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsEnableAdministratorAccount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsEnableAdministratorAccount
    *
    * @param bool $val The localSecurityOptionsEnableAdministratorAccount
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsEnableAdministratorAccount($val)
    {
        $this->_propDict["localSecurityOptionsEnableAdministratorAccount"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAdministratorAccountName
    *
    * @return string The localSecurityOptionsAdministratorAccountName
    */
    public function getLocalSecurityOptionsAdministratorAccountName()
    {
        if (array_key_exists("localSecurityOptionsAdministratorAccountName", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAdministratorAccountName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAdministratorAccountName
    *
    * @param string $val The localSecurityOptionsAdministratorAccountName
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAdministratorAccountName($val)
    {
        $this->_propDict["localSecurityOptionsAdministratorAccountName"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsEnableGuestAccount
    *
    * @return bool The localSecurityOptionsEnableGuestAccount
    */
    public function getLocalSecurityOptionsEnableGuestAccount()
    {
        if (array_key_exists("localSecurityOptionsEnableGuestAccount", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsEnableGuestAccount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsEnableGuestAccount
    *
    * @param bool $val The localSecurityOptionsEnableGuestAccount
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsEnableGuestAccount($val)
    {
        $this->_propDict["localSecurityOptionsEnableGuestAccount"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsGuestAccountName
    *
    * @return string The localSecurityOptionsGuestAccountName
    */
    public function getLocalSecurityOptionsGuestAccountName()
    {
        if (array_key_exists("localSecurityOptionsGuestAccountName", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsGuestAccountName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsGuestAccountName
    *
    * @param string $val The localSecurityOptionsGuestAccountName
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsGuestAccountName($val)
    {
        $this->_propDict["localSecurityOptionsGuestAccountName"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowUndockWithoutHavingToLogon
    *
    * @return bool The localSecurityOptionsAllowUndockWithoutHavingToLogon
    */
    public function getLocalSecurityOptionsAllowUndockWithoutHavingToLogon()
    {
        if (array_key_exists("localSecurityOptionsAllowUndockWithoutHavingToLogon", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowUndockWithoutHavingToLogon"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowUndockWithoutHavingToLogon
    *
    * @param bool $val The localSecurityOptionsAllowUndockWithoutHavingToLogon
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowUndockWithoutHavingToLogon($val)
    {
        $this->_propDict["localSecurityOptionsAllowUndockWithoutHavingToLogon"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsBlockUsersInstallingPrinterDrivers
    *
    * @return bool The localSecurityOptionsBlockUsersInstallingPrinterDrivers
    */
    public function getLocalSecurityOptionsBlockUsersInstallingPrinterDrivers()
    {
        if (array_key_exists("localSecurityOptionsBlockUsersInstallingPrinterDrivers", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsBlockUsersInstallingPrinterDrivers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsBlockUsersInstallingPrinterDrivers
    *
    * @param bool $val The localSecurityOptionsBlockUsersInstallingPrinterDrivers
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsBlockUsersInstallingPrinterDrivers($val)
    {
        $this->_propDict["localSecurityOptionsBlockUsersInstallingPrinterDrivers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsBlockRemoteOpticalDriveAccess
    *
    * @return bool The localSecurityOptionsBlockRemoteOpticalDriveAccess
    */
    public function getLocalSecurityOptionsBlockRemoteOpticalDriveAccess()
    {
        if (array_key_exists("localSecurityOptionsBlockRemoteOpticalDriveAccess", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsBlockRemoteOpticalDriveAccess"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsBlockRemoteOpticalDriveAccess
    *
    * @param bool $val The localSecurityOptionsBlockRemoteOpticalDriveAccess
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsBlockRemoteOpticalDriveAccess($val)
    {
        $this->_propDict["localSecurityOptionsBlockRemoteOpticalDriveAccess"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
    *
    * @return LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType The localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
    */
    public function getLocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser()
    {
        if (array_key_exists("localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser", $this->_propDict)) {
            if (is_a($this->_propDict["localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser"], "Microsoft\Graph\Beta\Model\LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType")) {
                return $this->_propDict["localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser"];
            } else {
                $this->_propDict["localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser"] = new LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType($this->_propDict["localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser"]);
                return $this->_propDict["localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
    *
    * @param LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType $val The localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser($val)
    {
        $this->_propDict["localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsMachineInactivityLimit
    *
    * @return int The localSecurityOptionsMachineInactivityLimit
    */
    public function getLocalSecurityOptionsMachineInactivityLimit()
    {
        if (array_key_exists("localSecurityOptionsMachineInactivityLimit", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsMachineInactivityLimit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsMachineInactivityLimit
    *
    * @param int $val The localSecurityOptionsMachineInactivityLimit
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsMachineInactivityLimit($val)
    {
        $this->_propDict["localSecurityOptionsMachineInactivityLimit"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsDoNotRequireCtrlAltDel
    *
    * @return bool The localSecurityOptionsDoNotRequireCtrlAltDel
    */
    public function getLocalSecurityOptionsDoNotRequireCtrlAltDel()
    {
        if (array_key_exists("localSecurityOptionsDoNotRequireCtrlAltDel", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsDoNotRequireCtrlAltDel"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsDoNotRequireCtrlAltDel
    *
    * @param bool $val The localSecurityOptionsDoNotRequireCtrlAltDel
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsDoNotRequireCtrlAltDel($val)
    {
        $this->_propDict["localSecurityOptionsDoNotRequireCtrlAltDel"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsInformationDisplayedOnLockScreen
    *
    * @return LocalSecurityOptionsInformationDisplayedOnLockScreenType The localSecurityOptionsInformationDisplayedOnLockScreen
    */
    public function getLocalSecurityOptionsInformationDisplayedOnLockScreen()
    {
        if (array_key_exists("localSecurityOptionsInformationDisplayedOnLockScreen", $this->_propDict)) {
            if (is_a($this->_propDict["localSecurityOptionsInformationDisplayedOnLockScreen"], "Microsoft\Graph\Beta\Model\LocalSecurityOptionsInformationDisplayedOnLockScreenType")) {
                return $this->_propDict["localSecurityOptionsInformationDisplayedOnLockScreen"];
            } else {
                $this->_propDict["localSecurityOptionsInformationDisplayedOnLockScreen"] = new LocalSecurityOptionsInformationDisplayedOnLockScreenType($this->_propDict["localSecurityOptionsInformationDisplayedOnLockScreen"]);
                return $this->_propDict["localSecurityOptionsInformationDisplayedOnLockScreen"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localSecurityOptionsInformationDisplayedOnLockScreen
    *
    * @param LocalSecurityOptionsInformationDisplayedOnLockScreenType $val The localSecurityOptionsInformationDisplayedOnLockScreen
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsInformationDisplayedOnLockScreen($val)
    {
        $this->_propDict["localSecurityOptionsInformationDisplayedOnLockScreen"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsHideLastSignedInUser
    *
    * @return bool The localSecurityOptionsHideLastSignedInUser
    */
    public function getLocalSecurityOptionsHideLastSignedInUser()
    {
        if (array_key_exists("localSecurityOptionsHideLastSignedInUser", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsHideLastSignedInUser"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsHideLastSignedInUser
    *
    * @param bool $val The localSecurityOptionsHideLastSignedInUser
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsHideLastSignedInUser($val)
    {
        $this->_propDict["localSecurityOptionsHideLastSignedInUser"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsHideUsernameAtSignIn
    *
    * @return bool The localSecurityOptionsHideUsernameAtSignIn
    */
    public function getLocalSecurityOptionsHideUsernameAtSignIn()
    {
        if (array_key_exists("localSecurityOptionsHideUsernameAtSignIn", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsHideUsernameAtSignIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsHideUsernameAtSignIn
    *
    * @param bool $val The localSecurityOptionsHideUsernameAtSignIn
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsHideUsernameAtSignIn($val)
    {
        $this->_propDict["localSecurityOptionsHideUsernameAtSignIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsLogOnMessageTitle
    *
    * @return string The localSecurityOptionsLogOnMessageTitle
    */
    public function getLocalSecurityOptionsLogOnMessageTitle()
    {
        if (array_key_exists("localSecurityOptionsLogOnMessageTitle", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsLogOnMessageTitle"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsLogOnMessageTitle
    *
    * @param string $val The localSecurityOptionsLogOnMessageTitle
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsLogOnMessageTitle($val)
    {
        $this->_propDict["localSecurityOptionsLogOnMessageTitle"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsLogOnMessageText
    *
    * @return string The localSecurityOptionsLogOnMessageText
    */
    public function getLocalSecurityOptionsLogOnMessageText()
    {
        if (array_key_exists("localSecurityOptionsLogOnMessageText", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsLogOnMessageText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsLogOnMessageText
    *
    * @param string $val The localSecurityOptionsLogOnMessageText
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsLogOnMessageText($val)
    {
        $this->_propDict["localSecurityOptionsLogOnMessageText"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowPKU2UAuthenticationRequests
    *
    * @return bool The localSecurityOptionsAllowPKU2UAuthenticationRequests
    */
    public function getLocalSecurityOptionsAllowPKU2UAuthenticationRequests()
    {
        if (array_key_exists("localSecurityOptionsAllowPKU2UAuthenticationRequests", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowPKU2UAuthenticationRequests"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowPKU2UAuthenticationRequests
    *
    * @param bool $val The localSecurityOptionsAllowPKU2UAuthenticationRequests
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowPKU2UAuthenticationRequests($val)
    {
        $this->_propDict["localSecurityOptionsAllowPKU2UAuthenticationRequests"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager
    *
    * @return string The localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager
    */
    public function getLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager()
    {
        if (array_key_exists("localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager
    *
    * @param string $val The localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager($val)
    {
        $this->_propDict["localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsClearVirtualMemoryPageFile
    *
    * @return bool The localSecurityOptionsClearVirtualMemoryPageFile
    */
    public function getLocalSecurityOptionsClearVirtualMemoryPageFile()
    {
        if (array_key_exists("localSecurityOptionsClearVirtualMemoryPageFile", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsClearVirtualMemoryPageFile"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsClearVirtualMemoryPageFile
    *
    * @param bool $val The localSecurityOptionsClearVirtualMemoryPageFile
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsClearVirtualMemoryPageFile($val)
    {
        $this->_propDict["localSecurityOptionsClearVirtualMemoryPageFile"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn
    *
    * @return bool The localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn
    */
    public function getLocalSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn()
    {
        if (array_key_exists("localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn
    *
    * @param bool $val The localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn($val)
    {
        $this->_propDict["localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowUIAccessApplicationElevation
    *
    * @return bool The localSecurityOptionsAllowUIAccessApplicationElevation
    */
    public function getLocalSecurityOptionsAllowUIAccessApplicationElevation()
    {
        if (array_key_exists("localSecurityOptionsAllowUIAccessApplicationElevation", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowUIAccessApplicationElevation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowUIAccessApplicationElevation
    *
    * @param bool $val The localSecurityOptionsAllowUIAccessApplicationElevation
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowUIAccessApplicationElevation($val)
    {
        $this->_propDict["localSecurityOptionsAllowUIAccessApplicationElevation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations
    *
    * @return bool The localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations
    */
    public function getLocalSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations()
    {
        if (array_key_exists("localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations
    *
    * @param bool $val The localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations($val)
    {
        $this->_propDict["localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsOnlyElevateSignedExecutables
    *
    * @return bool The localSecurityOptionsOnlyElevateSignedExecutables
    */
    public function getLocalSecurityOptionsOnlyElevateSignedExecutables()
    {
        if (array_key_exists("localSecurityOptionsOnlyElevateSignedExecutables", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsOnlyElevateSignedExecutables"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsOnlyElevateSignedExecutables
    *
    * @param bool $val The localSecurityOptionsOnlyElevateSignedExecutables
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsOnlyElevateSignedExecutables($val)
    {
        $this->_propDict["localSecurityOptionsOnlyElevateSignedExecutables"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAdministratorElevationPromptBehavior
    *
    * @return LocalSecurityOptionsAdministratorElevationPromptBehaviorType The localSecurityOptionsAdministratorElevationPromptBehavior
    */
    public function getLocalSecurityOptionsAdministratorElevationPromptBehavior()
    {
        if (array_key_exists("localSecurityOptionsAdministratorElevationPromptBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["localSecurityOptionsAdministratorElevationPromptBehavior"], "Microsoft\Graph\Beta\Model\LocalSecurityOptionsAdministratorElevationPromptBehaviorType")) {
                return $this->_propDict["localSecurityOptionsAdministratorElevationPromptBehavior"];
            } else {
                $this->_propDict["localSecurityOptionsAdministratorElevationPromptBehavior"] = new LocalSecurityOptionsAdministratorElevationPromptBehaviorType($this->_propDict["localSecurityOptionsAdministratorElevationPromptBehavior"]);
                return $this->_propDict["localSecurityOptionsAdministratorElevationPromptBehavior"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localSecurityOptionsAdministratorElevationPromptBehavior
    *
    * @param LocalSecurityOptionsAdministratorElevationPromptBehaviorType $val The localSecurityOptionsAdministratorElevationPromptBehavior
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAdministratorElevationPromptBehavior($val)
    {
        $this->_propDict["localSecurityOptionsAdministratorElevationPromptBehavior"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsStandardUserElevationPromptBehavior
    *
    * @return LocalSecurityOptionsStandardUserElevationPromptBehaviorType The localSecurityOptionsStandardUserElevationPromptBehavior
    */
    public function getLocalSecurityOptionsStandardUserElevationPromptBehavior()
    {
        if (array_key_exists("localSecurityOptionsStandardUserElevationPromptBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["localSecurityOptionsStandardUserElevationPromptBehavior"], "Microsoft\Graph\Beta\Model\LocalSecurityOptionsStandardUserElevationPromptBehaviorType")) {
                return $this->_propDict["localSecurityOptionsStandardUserElevationPromptBehavior"];
            } else {
                $this->_propDict["localSecurityOptionsStandardUserElevationPromptBehavior"] = new LocalSecurityOptionsStandardUserElevationPromptBehaviorType($this->_propDict["localSecurityOptionsStandardUserElevationPromptBehavior"]);
                return $this->_propDict["localSecurityOptionsStandardUserElevationPromptBehavior"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localSecurityOptionsStandardUserElevationPromptBehavior
    *
    * @param LocalSecurityOptionsStandardUserElevationPromptBehaviorType $val The localSecurityOptionsStandardUserElevationPromptBehavior
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsStandardUserElevationPromptBehavior($val)
    {
        $this->_propDict["localSecurityOptionsStandardUserElevationPromptBehavior"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation
    *
    * @return bool The localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation
    */
    public function getLocalSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation()
    {
        if (array_key_exists("localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation
    *
    * @param bool $val The localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation($val)
    {
        $this->_propDict["localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation
    *
    * @return bool The localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation
    */
    public function getLocalSecurityOptionsDetectApplicationInstallationsAndPromptForElevation()
    {
        if (array_key_exists("localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation
    *
    * @param bool $val The localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsDetectApplicationInstallationsAndPromptForElevation($val)
    {
        $this->_propDict["localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowUIAccessApplicationsForSecureLocations
    *
    * @return bool The localSecurityOptionsAllowUIAccessApplicationsForSecureLocations
    */
    public function getLocalSecurityOptionsAllowUIAccessApplicationsForSecureLocations()
    {
        if (array_key_exists("localSecurityOptionsAllowUIAccessApplicationsForSecureLocations", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowUIAccessApplicationsForSecureLocations"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowUIAccessApplicationsForSecureLocations
    *
    * @param bool $val The localSecurityOptionsAllowUIAccessApplicationsForSecureLocations
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowUIAccessApplicationsForSecureLocations($val)
    {
        $this->_propDict["localSecurityOptionsAllowUIAccessApplicationsForSecureLocations"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsUseAdminApprovalMode
    *
    * @return bool The localSecurityOptionsUseAdminApprovalMode
    */
    public function getLocalSecurityOptionsUseAdminApprovalMode()
    {
        if (array_key_exists("localSecurityOptionsUseAdminApprovalMode", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsUseAdminApprovalMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsUseAdminApprovalMode
    *
    * @param bool $val The localSecurityOptionsUseAdminApprovalMode
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsUseAdminApprovalMode($val)
    {
        $this->_propDict["localSecurityOptionsUseAdminApprovalMode"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsUseAdminApprovalModeForAdministrators
    *
    * @return bool The localSecurityOptionsUseAdminApprovalModeForAdministrators
    */
    public function getLocalSecurityOptionsUseAdminApprovalModeForAdministrators()
    {
        if (array_key_exists("localSecurityOptionsUseAdminApprovalModeForAdministrators", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsUseAdminApprovalModeForAdministrators"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsUseAdminApprovalModeForAdministrators
    *
    * @param bool $val The localSecurityOptionsUseAdminApprovalModeForAdministrators
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsUseAdminApprovalModeForAdministrators($val)
    {
        $this->_propDict["localSecurityOptionsUseAdminApprovalModeForAdministrators"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableAppBrowserUI
    *
    * @return bool The defenderSecurityCenterDisableAppBrowserUI
    */
    public function getDefenderSecurityCenterDisableAppBrowserUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableAppBrowserUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableAppBrowserUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableAppBrowserUI
    *
    * @param bool $val The defenderSecurityCenterDisableAppBrowserUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableAppBrowserUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableAppBrowserUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableFamilyUI
    *
    * @return bool The defenderSecurityCenterDisableFamilyUI
    */
    public function getDefenderSecurityCenterDisableFamilyUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableFamilyUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableFamilyUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableFamilyUI
    *
    * @param bool $val The defenderSecurityCenterDisableFamilyUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableFamilyUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableFamilyUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableHealthUI
    *
    * @return bool The defenderSecurityCenterDisableHealthUI
    */
    public function getDefenderSecurityCenterDisableHealthUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableHealthUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableHealthUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableHealthUI
    *
    * @param bool $val The defenderSecurityCenterDisableHealthUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableHealthUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableHealthUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableNetworkUI
    *
    * @return bool The defenderSecurityCenterDisableNetworkUI
    */
    public function getDefenderSecurityCenterDisableNetworkUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableNetworkUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableNetworkUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableNetworkUI
    *
    * @param bool $val The defenderSecurityCenterDisableNetworkUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableNetworkUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableNetworkUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableVirusUI
    *
    * @return bool The defenderSecurityCenterDisableVirusUI
    */
    public function getDefenderSecurityCenterDisableVirusUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableVirusUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableVirusUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableVirusUI
    *
    * @param bool $val The defenderSecurityCenterDisableVirusUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableVirusUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableVirusUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterOrganizationDisplayName
    *
    * @return string The defenderSecurityCenterOrganizationDisplayName
    */
    public function getDefenderSecurityCenterOrganizationDisplayName()
    {
        if (array_key_exists("defenderSecurityCenterOrganizationDisplayName", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterOrganizationDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterOrganizationDisplayName
    *
    * @param string $val The defenderSecurityCenterOrganizationDisplayName
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterOrganizationDisplayName($val)
    {
        $this->_propDict["defenderSecurityCenterOrganizationDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterHelpEmail
    *
    * @return string The defenderSecurityCenterHelpEmail
    */
    public function getDefenderSecurityCenterHelpEmail()
    {
        if (array_key_exists("defenderSecurityCenterHelpEmail", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterHelpEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterHelpEmail
    *
    * @param string $val The defenderSecurityCenterHelpEmail
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterHelpEmail($val)
    {
        $this->_propDict["defenderSecurityCenterHelpEmail"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterHelpPhone
    *
    * @return string The defenderSecurityCenterHelpPhone
    */
    public function getDefenderSecurityCenterHelpPhone()
    {
        if (array_key_exists("defenderSecurityCenterHelpPhone", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterHelpPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterHelpPhone
    *
    * @param string $val The defenderSecurityCenterHelpPhone
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterHelpPhone($val)
    {
        $this->_propDict["defenderSecurityCenterHelpPhone"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterHelpURL
    *
    * @return string The defenderSecurityCenterHelpURL
    */
    public function getDefenderSecurityCenterHelpURL()
    {
        if (array_key_exists("defenderSecurityCenterHelpURL", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterHelpURL"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterHelpURL
    *
    * @param string $val The defenderSecurityCenterHelpURL
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterHelpURL($val)
    {
        $this->_propDict["defenderSecurityCenterHelpURL"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterNotificationsFromApp
    *
    * @return DefenderSecurityCenterNotificationsFromAppType The defenderSecurityCenterNotificationsFromApp
    */
    public function getDefenderSecurityCenterNotificationsFromApp()
    {
        if (array_key_exists("defenderSecurityCenterNotificationsFromApp", $this->_propDict)) {
            if (is_a($this->_propDict["defenderSecurityCenterNotificationsFromApp"], "Microsoft\Graph\Beta\Model\DefenderSecurityCenterNotificationsFromAppType")) {
                return $this->_propDict["defenderSecurityCenterNotificationsFromApp"];
            } else {
                $this->_propDict["defenderSecurityCenterNotificationsFromApp"] = new DefenderSecurityCenterNotificationsFromAppType($this->_propDict["defenderSecurityCenterNotificationsFromApp"]);
                return $this->_propDict["defenderSecurityCenterNotificationsFromApp"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderSecurityCenterNotificationsFromApp
    *
    * @param DefenderSecurityCenterNotificationsFromAppType $val The defenderSecurityCenterNotificationsFromApp
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterNotificationsFromApp($val)
    {
        $this->_propDict["defenderSecurityCenterNotificationsFromApp"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterITContactDisplay
    *
    * @return DefenderSecurityCenterITContactDisplayType The defenderSecurityCenterITContactDisplay
    */
    public function getDefenderSecurityCenterITContactDisplay()
    {
        if (array_key_exists("defenderSecurityCenterITContactDisplay", $this->_propDict)) {
            if (is_a($this->_propDict["defenderSecurityCenterITContactDisplay"], "Microsoft\Graph\Beta\Model\DefenderSecurityCenterITContactDisplayType")) {
                return $this->_propDict["defenderSecurityCenterITContactDisplay"];
            } else {
                $this->_propDict["defenderSecurityCenterITContactDisplay"] = new DefenderSecurityCenterITContactDisplayType($this->_propDict["defenderSecurityCenterITContactDisplay"]);
                return $this->_propDict["defenderSecurityCenterITContactDisplay"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderSecurityCenterITContactDisplay
    *
    * @param DefenderSecurityCenterITContactDisplayType $val The defenderSecurityCenterITContactDisplay
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterITContactDisplay($val)
    {
        $this->_propDict["defenderSecurityCenterITContactDisplay"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallBlockStatefulFTP
    *
    * @return bool The firewallBlockStatefulFTP
    */
    public function getFirewallBlockStatefulFTP()
    {
        if (array_key_exists("firewallBlockStatefulFTP", $this->_propDict)) {
            return $this->_propDict["firewallBlockStatefulFTP"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallBlockStatefulFTP
    *
    * @param bool $val The firewallBlockStatefulFTP
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallBlockStatefulFTP($val)
    {
        $this->_propDict["firewallBlockStatefulFTP"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallIdleTimeoutForSecurityAssociationInSeconds
    *
    * @return int The firewallIdleTimeoutForSecurityAssociationInSeconds
    */
    public function getFirewallIdleTimeoutForSecurityAssociationInSeconds()
    {
        if (array_key_exists("firewallIdleTimeoutForSecurityAssociationInSeconds", $this->_propDict)) {
            return $this->_propDict["firewallIdleTimeoutForSecurityAssociationInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIdleTimeoutForSecurityAssociationInSeconds
    *
    * @param int $val The firewallIdleTimeoutForSecurityAssociationInSeconds
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIdleTimeoutForSecurityAssociationInSeconds($val)
    {
        $this->_propDict["firewallIdleTimeoutForSecurityAssociationInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the firewallPreSharedKeyEncodingMethod
    *
    * @return FirewallPreSharedKeyEncodingMethodType The firewallPreSharedKeyEncodingMethod
    */
    public function getFirewallPreSharedKeyEncodingMethod()
    {
        if (array_key_exists("firewallPreSharedKeyEncodingMethod", $this->_propDict)) {
            if (is_a($this->_propDict["firewallPreSharedKeyEncodingMethod"], "Microsoft\Graph\Beta\Model\FirewallPreSharedKeyEncodingMethodType")) {
                return $this->_propDict["firewallPreSharedKeyEncodingMethod"];
            } else {
                $this->_propDict["firewallPreSharedKeyEncodingMethod"] = new FirewallPreSharedKeyEncodingMethodType($this->_propDict["firewallPreSharedKeyEncodingMethod"]);
                return $this->_propDict["firewallPreSharedKeyEncodingMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallPreSharedKeyEncodingMethod
    *
    * @param FirewallPreSharedKeyEncodingMethodType $val The firewallPreSharedKeyEncodingMethod
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallPreSharedKeyEncodingMethod($val)
    {
        $this->_propDict["firewallPreSharedKeyEncodingMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallIPSecExemptionsAllowNeighborDiscovery
    *
    * @return bool The firewallIPSecExemptionsAllowNeighborDiscovery
    */
    public function getFirewallIPSecExemptionsAllowNeighborDiscovery()
    {
        if (array_key_exists("firewallIPSecExemptionsAllowNeighborDiscovery", $this->_propDict)) {
            return $this->_propDict["firewallIPSecExemptionsAllowNeighborDiscovery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIPSecExemptionsAllowNeighborDiscovery
    *
    * @param bool $val The firewallIPSecExemptionsAllowNeighborDiscovery
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIPSecExemptionsAllowNeighborDiscovery($val)
    {
        $this->_propDict["firewallIPSecExemptionsAllowNeighborDiscovery"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallIPSecExemptionsAllowICMP
    *
    * @return bool The firewallIPSecExemptionsAllowICMP
    */
    public function getFirewallIPSecExemptionsAllowICMP()
    {
        if (array_key_exists("firewallIPSecExemptionsAllowICMP", $this->_propDict)) {
            return $this->_propDict["firewallIPSecExemptionsAllowICMP"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIPSecExemptionsAllowICMP
    *
    * @param bool $val The firewallIPSecExemptionsAllowICMP
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIPSecExemptionsAllowICMP($val)
    {
        $this->_propDict["firewallIPSecExemptionsAllowICMP"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallIPSecExemptionsAllowRouterDiscovery
    *
    * @return bool The firewallIPSecExemptionsAllowRouterDiscovery
    */
    public function getFirewallIPSecExemptionsAllowRouterDiscovery()
    {
        if (array_key_exists("firewallIPSecExemptionsAllowRouterDiscovery", $this->_propDict)) {
            return $this->_propDict["firewallIPSecExemptionsAllowRouterDiscovery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIPSecExemptionsAllowRouterDiscovery
    *
    * @param bool $val The firewallIPSecExemptionsAllowRouterDiscovery
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIPSecExemptionsAllowRouterDiscovery($val)
    {
        $this->_propDict["firewallIPSecExemptionsAllowRouterDiscovery"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallIPSecExemptionsAllowDHCP
    *
    * @return bool The firewallIPSecExemptionsAllowDHCP
    */
    public function getFirewallIPSecExemptionsAllowDHCP()
    {
        if (array_key_exists("firewallIPSecExemptionsAllowDHCP", $this->_propDict)) {
            return $this->_propDict["firewallIPSecExemptionsAllowDHCP"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIPSecExemptionsAllowDHCP
    *
    * @param bool $val The firewallIPSecExemptionsAllowDHCP
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIPSecExemptionsAllowDHCP($val)
    {
        $this->_propDict["firewallIPSecExemptionsAllowDHCP"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallCertificateRevocationListCheckMethod
    *
    * @return FirewallCertificateRevocationListCheckMethodType The firewallCertificateRevocationListCheckMethod
    */
    public function getFirewallCertificateRevocationListCheckMethod()
    {
        if (array_key_exists("firewallCertificateRevocationListCheckMethod", $this->_propDict)) {
            if (is_a($this->_propDict["firewallCertificateRevocationListCheckMethod"], "Microsoft\Graph\Beta\Model\FirewallCertificateRevocationListCheckMethodType")) {
                return $this->_propDict["firewallCertificateRevocationListCheckMethod"];
            } else {
                $this->_propDict["firewallCertificateRevocationListCheckMethod"] = new FirewallCertificateRevocationListCheckMethodType($this->_propDict["firewallCertificateRevocationListCheckMethod"]);
                return $this->_propDict["firewallCertificateRevocationListCheckMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallCertificateRevocationListCheckMethod
    *
    * @param FirewallCertificateRevocationListCheckMethodType $val The firewallCertificateRevocationListCheckMethod
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallCertificateRevocationListCheckMethod($val)
    {
        $this->_propDict["firewallCertificateRevocationListCheckMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallMergeKeyingModuleSettings
    *
    * @return bool The firewallMergeKeyingModuleSettings
    */
    public function getFirewallMergeKeyingModuleSettings()
    {
        if (array_key_exists("firewallMergeKeyingModuleSettings", $this->_propDict)) {
            return $this->_propDict["firewallMergeKeyingModuleSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallMergeKeyingModuleSettings
    *
    * @param bool $val The firewallMergeKeyingModuleSettings
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallMergeKeyingModuleSettings($val)
    {
        $this->_propDict["firewallMergeKeyingModuleSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallPacketQueueingMethod
    *
    * @return FirewallPacketQueueingMethodType The firewallPacketQueueingMethod
    */
    public function getFirewallPacketQueueingMethod()
    {
        if (array_key_exists("firewallPacketQueueingMethod", $this->_propDict)) {
            if (is_a($this->_propDict["firewallPacketQueueingMethod"], "Microsoft\Graph\Beta\Model\FirewallPacketQueueingMethodType")) {
                return $this->_propDict["firewallPacketQueueingMethod"];
            } else {
                $this->_propDict["firewallPacketQueueingMethod"] = new FirewallPacketQueueingMethodType($this->_propDict["firewallPacketQueueingMethod"]);
                return $this->_propDict["firewallPacketQueueingMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallPacketQueueingMethod
    *
    * @param FirewallPacketQueueingMethodType $val The firewallPacketQueueingMethod
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallPacketQueueingMethod($val)
    {
        $this->_propDict["firewallPacketQueueingMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallProfileDomain
    *
    * @return WindowsFirewallNetworkProfile The firewallProfileDomain
    */
    public function getFirewallProfileDomain()
    {
        if (array_key_exists("firewallProfileDomain", $this->_propDict)) {
            if (is_a($this->_propDict["firewallProfileDomain"], "Microsoft\Graph\Beta\Model\WindowsFirewallNetworkProfile")) {
                return $this->_propDict["firewallProfileDomain"];
            } else {
                $this->_propDict["firewallProfileDomain"] = new WindowsFirewallNetworkProfile($this->_propDict["firewallProfileDomain"]);
                return $this->_propDict["firewallProfileDomain"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallProfileDomain
    *
    * @param WindowsFirewallNetworkProfile $val The firewallProfileDomain
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallProfileDomain($val)
    {
        $this->_propDict["firewallProfileDomain"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallProfilePublic
    *
    * @return WindowsFirewallNetworkProfile The firewallProfilePublic
    */
    public function getFirewallProfilePublic()
    {
        if (array_key_exists("firewallProfilePublic", $this->_propDict)) {
            if (is_a($this->_propDict["firewallProfilePublic"], "Microsoft\Graph\Beta\Model\WindowsFirewallNetworkProfile")) {
                return $this->_propDict["firewallProfilePublic"];
            } else {
                $this->_propDict["firewallProfilePublic"] = new WindowsFirewallNetworkProfile($this->_propDict["firewallProfilePublic"]);
                return $this->_propDict["firewallProfilePublic"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallProfilePublic
    *
    * @param WindowsFirewallNetworkProfile $val The firewallProfilePublic
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallProfilePublic($val)
    {
        $this->_propDict["firewallProfilePublic"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallProfilePrivate
    *
    * @return WindowsFirewallNetworkProfile The firewallProfilePrivate
    */
    public function getFirewallProfilePrivate()
    {
        if (array_key_exists("firewallProfilePrivate", $this->_propDict)) {
            if (is_a($this->_propDict["firewallProfilePrivate"], "Microsoft\Graph\Beta\Model\WindowsFirewallNetworkProfile")) {
                return $this->_propDict["firewallProfilePrivate"];
            } else {
                $this->_propDict["firewallProfilePrivate"] = new WindowsFirewallNetworkProfile($this->_propDict["firewallProfilePrivate"]);
                return $this->_propDict["firewallProfilePrivate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallProfilePrivate
    *
    * @param WindowsFirewallNetworkProfile $val The firewallProfilePrivate
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallProfilePrivate($val)
    {
        $this->_propDict["firewallProfilePrivate"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderAttackSurfaceReductionExcludedPaths
    *
    * @return string The defenderAttackSurfaceReductionExcludedPaths
    */
    public function getDefenderAttackSurfaceReductionExcludedPaths()
    {
        if (array_key_exists("defenderAttackSurfaceReductionExcludedPaths", $this->_propDict)) {
            return $this->_propDict["defenderAttackSurfaceReductionExcludedPaths"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderAttackSurfaceReductionExcludedPaths
    *
    * @param string $val The defenderAttackSurfaceReductionExcludedPaths
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderAttackSurfaceReductionExcludedPaths($val)
    {
        $this->_propDict["defenderAttackSurfaceReductionExcludedPaths"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderOfficeAppsOtherProcessInjectionType
    *
    * @return DefenderAttackSurfaceType The defenderOfficeAppsOtherProcessInjectionType
    */
    public function getDefenderOfficeAppsOtherProcessInjectionType()
    {
        if (array_key_exists("defenderOfficeAppsOtherProcessInjectionType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeAppsOtherProcessInjectionType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderOfficeAppsOtherProcessInjectionType"];
            } else {
                $this->_propDict["defenderOfficeAppsOtherProcessInjectionType"] = new DefenderAttackSurfaceType($this->_propDict["defenderOfficeAppsOtherProcessInjectionType"]);
                return $this->_propDict["defenderOfficeAppsOtherProcessInjectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeAppsOtherProcessInjectionType
    *
    * @param DefenderAttackSurfaceType $val The defenderOfficeAppsOtherProcessInjectionType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeAppsOtherProcessInjectionType($val)
    {
        $this->_propDict["defenderOfficeAppsOtherProcessInjectionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderOfficeAppsExecutableContentCreationOrLaunchType
    *
    * @return DefenderAttackSurfaceType The defenderOfficeAppsExecutableContentCreationOrLaunchType
    */
    public function getDefenderOfficeAppsExecutableContentCreationOrLaunchType()
    {
        if (array_key_exists("defenderOfficeAppsExecutableContentCreationOrLaunchType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunchType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunchType"];
            } else {
                $this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunchType"] = new DefenderAttackSurfaceType($this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunchType"]);
                return $this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunchType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeAppsExecutableContentCreationOrLaunchType
    *
    * @param DefenderAttackSurfaceType $val The defenderOfficeAppsExecutableContentCreationOrLaunchType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeAppsExecutableContentCreationOrLaunchType($val)
    {
        $this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunchType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderOfficeAppsLaunchChildProcessType
    *
    * @return DefenderAttackSurfaceType The defenderOfficeAppsLaunchChildProcessType
    */
    public function getDefenderOfficeAppsLaunchChildProcessType()
    {
        if (array_key_exists("defenderOfficeAppsLaunchChildProcessType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeAppsLaunchChildProcessType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderOfficeAppsLaunchChildProcessType"];
            } else {
                $this->_propDict["defenderOfficeAppsLaunchChildProcessType"] = new DefenderAttackSurfaceType($this->_propDict["defenderOfficeAppsLaunchChildProcessType"]);
                return $this->_propDict["defenderOfficeAppsLaunchChildProcessType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeAppsLaunchChildProcessType
    *
    * @param DefenderAttackSurfaceType $val The defenderOfficeAppsLaunchChildProcessType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeAppsLaunchChildProcessType($val)
    {
        $this->_propDict["defenderOfficeAppsLaunchChildProcessType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderOfficeMacroCodeAllowWin32ImportsType
    *
    * @return DefenderAttackSurfaceType The defenderOfficeMacroCodeAllowWin32ImportsType
    */
    public function getDefenderOfficeMacroCodeAllowWin32ImportsType()
    {
        if (array_key_exists("defenderOfficeMacroCodeAllowWin32ImportsType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeMacroCodeAllowWin32ImportsType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderOfficeMacroCodeAllowWin32ImportsType"];
            } else {
                $this->_propDict["defenderOfficeMacroCodeAllowWin32ImportsType"] = new DefenderAttackSurfaceType($this->_propDict["defenderOfficeMacroCodeAllowWin32ImportsType"]);
                return $this->_propDict["defenderOfficeMacroCodeAllowWin32ImportsType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeMacroCodeAllowWin32ImportsType
    *
    * @param DefenderAttackSurfaceType $val The defenderOfficeMacroCodeAllowWin32ImportsType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeMacroCodeAllowWin32ImportsType($val)
    {
        $this->_propDict["defenderOfficeMacroCodeAllowWin32ImportsType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderScriptObfuscatedMacroCodeType
    *
    * @return DefenderAttackSurfaceType The defenderScriptObfuscatedMacroCodeType
    */
    public function getDefenderScriptObfuscatedMacroCodeType()
    {
        if (array_key_exists("defenderScriptObfuscatedMacroCodeType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderScriptObfuscatedMacroCodeType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderScriptObfuscatedMacroCodeType"];
            } else {
                $this->_propDict["defenderScriptObfuscatedMacroCodeType"] = new DefenderAttackSurfaceType($this->_propDict["defenderScriptObfuscatedMacroCodeType"]);
                return $this->_propDict["defenderScriptObfuscatedMacroCodeType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderScriptObfuscatedMacroCodeType
    *
    * @param DefenderAttackSurfaceType $val The defenderScriptObfuscatedMacroCodeType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderScriptObfuscatedMacroCodeType($val)
    {
        $this->_propDict["defenderScriptObfuscatedMacroCodeType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderScriptDownloadedPayloadExecutionType
    *
    * @return DefenderAttackSurfaceType The defenderScriptDownloadedPayloadExecutionType
    */
    public function getDefenderScriptDownloadedPayloadExecutionType()
    {
        if (array_key_exists("defenderScriptDownloadedPayloadExecutionType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderScriptDownloadedPayloadExecutionType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderScriptDownloadedPayloadExecutionType"];
            } else {
                $this->_propDict["defenderScriptDownloadedPayloadExecutionType"] = new DefenderAttackSurfaceType($this->_propDict["defenderScriptDownloadedPayloadExecutionType"]);
                return $this->_propDict["defenderScriptDownloadedPayloadExecutionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderScriptDownloadedPayloadExecutionType
    *
    * @param DefenderAttackSurfaceType $val The defenderScriptDownloadedPayloadExecutionType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderScriptDownloadedPayloadExecutionType($val)
    {
        $this->_propDict["defenderScriptDownloadedPayloadExecutionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderPreventCredentialStealingType
    *
    * @return DefenderProtectionType The defenderPreventCredentialStealingType
    */
    public function getDefenderPreventCredentialStealingType()
    {
        if (array_key_exists("defenderPreventCredentialStealingType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderPreventCredentialStealingType"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderPreventCredentialStealingType"];
            } else {
                $this->_propDict["defenderPreventCredentialStealingType"] = new DefenderProtectionType($this->_propDict["defenderPreventCredentialStealingType"]);
                return $this->_propDict["defenderPreventCredentialStealingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderPreventCredentialStealingType
    *
    * @param DefenderProtectionType $val The defenderPreventCredentialStealingType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderPreventCredentialStealingType($val)
    {
        $this->_propDict["defenderPreventCredentialStealingType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderProcessCreationType
    *
    * @return DefenderAttackSurfaceType The defenderProcessCreationType
    */
    public function getDefenderProcessCreationType()
    {
        if (array_key_exists("defenderProcessCreationType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderProcessCreationType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderProcessCreationType"];
            } else {
                $this->_propDict["defenderProcessCreationType"] = new DefenderAttackSurfaceType($this->_propDict["defenderProcessCreationType"]);
                return $this->_propDict["defenderProcessCreationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderProcessCreationType
    *
    * @param DefenderAttackSurfaceType $val The defenderProcessCreationType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderProcessCreationType($val)
    {
        $this->_propDict["defenderProcessCreationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderUntrustedUSBProcessType
    *
    * @return DefenderAttackSurfaceType The defenderUntrustedUSBProcessType
    */
    public function getDefenderUntrustedUSBProcessType()
    {
        if (array_key_exists("defenderUntrustedUSBProcessType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderUntrustedUSBProcessType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderUntrustedUSBProcessType"];
            } else {
                $this->_propDict["defenderUntrustedUSBProcessType"] = new DefenderAttackSurfaceType($this->_propDict["defenderUntrustedUSBProcessType"]);
                return $this->_propDict["defenderUntrustedUSBProcessType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderUntrustedUSBProcessType
    *
    * @param DefenderAttackSurfaceType $val The defenderUntrustedUSBProcessType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderUntrustedUSBProcessType($val)
    {
        $this->_propDict["defenderUntrustedUSBProcessType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderUntrustedExecutableType
    *
    * @return DefenderAttackSurfaceType The defenderUntrustedExecutableType
    */
    public function getDefenderUntrustedExecutableType()
    {
        if (array_key_exists("defenderUntrustedExecutableType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderUntrustedExecutableType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderUntrustedExecutableType"];
            } else {
                $this->_propDict["defenderUntrustedExecutableType"] = new DefenderAttackSurfaceType($this->_propDict["defenderUntrustedExecutableType"]);
                return $this->_propDict["defenderUntrustedExecutableType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderUntrustedExecutableType
    *
    * @param DefenderAttackSurfaceType $val The defenderUntrustedExecutableType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderUntrustedExecutableType($val)
    {
        $this->_propDict["defenderUntrustedExecutableType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderEmailContentExecutionType
    *
    * @return DefenderAttackSurfaceType The defenderEmailContentExecutionType
    */
    public function getDefenderEmailContentExecutionType()
    {
        if (array_key_exists("defenderEmailContentExecutionType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderEmailContentExecutionType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderEmailContentExecutionType"];
            } else {
                $this->_propDict["defenderEmailContentExecutionType"] = new DefenderAttackSurfaceType($this->_propDict["defenderEmailContentExecutionType"]);
                return $this->_propDict["defenderEmailContentExecutionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderEmailContentExecutionType
    *
    * @param DefenderAttackSurfaceType $val The defenderEmailContentExecutionType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderEmailContentExecutionType($val)
    {
        $this->_propDict["defenderEmailContentExecutionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderAdvancedRansomewareProtectionType
    *
    * @return DefenderProtectionType The defenderAdvancedRansomewareProtectionType
    */
    public function getDefenderAdvancedRansomewareProtectionType()
    {
        if (array_key_exists("defenderAdvancedRansomewareProtectionType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderAdvancedRansomewareProtectionType"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderAdvancedRansomewareProtectionType"];
            } else {
                $this->_propDict["defenderAdvancedRansomewareProtectionType"] = new DefenderProtectionType($this->_propDict["defenderAdvancedRansomewareProtectionType"]);
                return $this->_propDict["defenderAdvancedRansomewareProtectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderAdvancedRansomewareProtectionType
    *
    * @param DefenderProtectionType $val The defenderAdvancedRansomewareProtectionType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderAdvancedRansomewareProtectionType($val)
    {
        $this->_propDict["defenderAdvancedRansomewareProtectionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderGuardMyFoldersType
    *
    * @return FolderProtectionType The defenderGuardMyFoldersType
    */
    public function getDefenderGuardMyFoldersType()
    {
        if (array_key_exists("defenderGuardMyFoldersType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderGuardMyFoldersType"], "Microsoft\Graph\Beta\Model\FolderProtectionType")) {
                return $this->_propDict["defenderGuardMyFoldersType"];
            } else {
                $this->_propDict["defenderGuardMyFoldersType"] = new FolderProtectionType($this->_propDict["defenderGuardMyFoldersType"]);
                return $this->_propDict["defenderGuardMyFoldersType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderGuardMyFoldersType
    *
    * @param FolderProtectionType $val The defenderGuardMyFoldersType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderGuardMyFoldersType($val)
    {
        $this->_propDict["defenderGuardMyFoldersType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderGuardedFoldersAllowedAppPaths
    *
    * @return string The defenderGuardedFoldersAllowedAppPaths
    */
    public function getDefenderGuardedFoldersAllowedAppPaths()
    {
        if (array_key_exists("defenderGuardedFoldersAllowedAppPaths", $this->_propDict)) {
            return $this->_propDict["defenderGuardedFoldersAllowedAppPaths"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderGuardedFoldersAllowedAppPaths
    *
    * @param string $val The defenderGuardedFoldersAllowedAppPaths
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderGuardedFoldersAllowedAppPaths($val)
    {
        $this->_propDict["defenderGuardedFoldersAllowedAppPaths"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderAdditionalGuardedFolders
    *
    * @return string The defenderAdditionalGuardedFolders
    */
    public function getDefenderAdditionalGuardedFolders()
    {
        if (array_key_exists("defenderAdditionalGuardedFolders", $this->_propDict)) {
            return $this->_propDict["defenderAdditionalGuardedFolders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderAdditionalGuardedFolders
    *
    * @param string $val The defenderAdditionalGuardedFolders
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderAdditionalGuardedFolders($val)
    {
        $this->_propDict["defenderAdditionalGuardedFolders"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderNetworkProtectionType
    *
    * @return DefenderProtectionType The defenderNetworkProtectionType
    */
    public function getDefenderNetworkProtectionType()
    {
        if (array_key_exists("defenderNetworkProtectionType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderNetworkProtectionType"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderNetworkProtectionType"];
            } else {
                $this->_propDict["defenderNetworkProtectionType"] = new DefenderProtectionType($this->_propDict["defenderNetworkProtectionType"]);
                return $this->_propDict["defenderNetworkProtectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderNetworkProtectionType
    *
    * @param DefenderProtectionType $val The defenderNetworkProtectionType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderNetworkProtectionType($val)
    {
        $this->_propDict["defenderNetworkProtectionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderExploitProtectionXml
    *
    * @return \GuzzleHttp\Psr7\Stream The defenderExploitProtectionXml
    */
    public function getDefenderExploitProtectionXml()
    {
        if (array_key_exists("defenderExploitProtectionXml", $this->_propDict)) {
            if (is_a($this->_propDict["defenderExploitProtectionXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["defenderExploitProtectionXml"];
            } else {
                $this->_propDict["defenderExploitProtectionXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["defenderExploitProtectionXml"]);
                return $this->_propDict["defenderExploitProtectionXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderExploitProtectionXml
    *
    * @param \GuzzleHttp\Psr7\Stream $val The defenderExploitProtectionXml
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderExploitProtectionXml($val)
    {
        $this->_propDict["defenderExploitProtectionXml"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderExploitProtectionXmlFileName
    *
    * @return string The defenderExploitProtectionXmlFileName
    */
    public function getDefenderExploitProtectionXmlFileName()
    {
        if (array_key_exists("defenderExploitProtectionXmlFileName", $this->_propDict)) {
            return $this->_propDict["defenderExploitProtectionXmlFileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderExploitProtectionXmlFileName
    *
    * @param string $val The defenderExploitProtectionXmlFileName
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderExploitProtectionXmlFileName($val)
    {
        $this->_propDict["defenderExploitProtectionXmlFileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterBlockExploitProtectionOverride
    *
    * @return bool The defenderSecurityCenterBlockExploitProtectionOverride
    */
    public function getDefenderSecurityCenterBlockExploitProtectionOverride()
    {
        if (array_key_exists("defenderSecurityCenterBlockExploitProtectionOverride", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterBlockExploitProtectionOverride"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterBlockExploitProtectionOverride
    *
    * @param bool $val The defenderSecurityCenterBlockExploitProtectionOverride
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterBlockExploitProtectionOverride($val)
    {
        $this->_propDict["defenderSecurityCenterBlockExploitProtectionOverride"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appLockerApplicationControl
    *
    * @return AppLockerApplicationControlType The appLockerApplicationControl
    */
    public function getAppLockerApplicationControl()
    {
        if (array_key_exists("appLockerApplicationControl", $this->_propDict)) {
            if (is_a($this->_propDict["appLockerApplicationControl"], "Microsoft\Graph\Beta\Model\AppLockerApplicationControlType")) {
                return $this->_propDict["appLockerApplicationControl"];
            } else {
                $this->_propDict["appLockerApplicationControl"] = new AppLockerApplicationControlType($this->_propDict["appLockerApplicationControl"]);
                return $this->_propDict["appLockerApplicationControl"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appLockerApplicationControl
    *
    * @param AppLockerApplicationControlType $val The appLockerApplicationControl
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setAppLockerApplicationControl($val)
    {
        $this->_propDict["appLockerApplicationControl"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceGuardLocalSystemAuthorityCredentialGuardSettings
    *
    * @return DeviceGuardLocalSystemAuthorityCredentialGuardType The deviceGuardLocalSystemAuthorityCredentialGuardSettings
    */
    public function getDeviceGuardLocalSystemAuthorityCredentialGuardSettings()
    {
        if (array_key_exists("deviceGuardLocalSystemAuthorityCredentialGuardSettings", $this->_propDict)) {
            if (is_a($this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardSettings"], "Microsoft\Graph\Beta\Model\DeviceGuardLocalSystemAuthorityCredentialGuardType")) {
                return $this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardSettings"];
            } else {
                $this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardSettings"] = new DeviceGuardLocalSystemAuthorityCredentialGuardType($this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardSettings"]);
                return $this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceGuardLocalSystemAuthorityCredentialGuardSettings
    *
    * @param DeviceGuardLocalSystemAuthorityCredentialGuardType $val The deviceGuardLocalSystemAuthorityCredentialGuardSettings
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDeviceGuardLocalSystemAuthorityCredentialGuardSettings($val)
    {
        $this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceGuardEnableVirtualizationBasedSecurity
    *
    * @return bool The deviceGuardEnableVirtualizationBasedSecurity
    */
    public function getDeviceGuardEnableVirtualizationBasedSecurity()
    {
        if (array_key_exists("deviceGuardEnableVirtualizationBasedSecurity", $this->_propDict)) {
            return $this->_propDict["deviceGuardEnableVirtualizationBasedSecurity"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceGuardEnableVirtualizationBasedSecurity
    *
    * @param bool $val The deviceGuardEnableVirtualizationBasedSecurity
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDeviceGuardEnableVirtualizationBasedSecurity($val)
    {
        $this->_propDict["deviceGuardEnableVirtualizationBasedSecurity"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceGuardEnableSecureBootWithDMA
    *
    * @return bool The deviceGuardEnableSecureBootWithDMA
    */
    public function getDeviceGuardEnableSecureBootWithDMA()
    {
        if (array_key_exists("deviceGuardEnableSecureBootWithDMA", $this->_propDict)) {
            return $this->_propDict["deviceGuardEnableSecureBootWithDMA"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceGuardEnableSecureBootWithDMA
    *
    * @param bool $val The deviceGuardEnableSecureBootWithDMA
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDeviceGuardEnableSecureBootWithDMA($val)
    {
        $this->_propDict["deviceGuardEnableSecureBootWithDMA"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smartScreenEnableInShell
    *
    * @return bool The smartScreenEnableInShell
    */
    public function getSmartScreenEnableInShell()
    {
        if (array_key_exists("smartScreenEnableInShell", $this->_propDict)) {
            return $this->_propDict["smartScreenEnableInShell"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smartScreenEnableInShell
    *
    * @param bool $val The smartScreenEnableInShell
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setSmartScreenEnableInShell($val)
    {
        $this->_propDict["smartScreenEnableInShell"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smartScreenBlockOverrideForFiles
    *
    * @return bool The smartScreenBlockOverrideForFiles
    */
    public function getSmartScreenBlockOverrideForFiles()
    {
        if (array_key_exists("smartScreenBlockOverrideForFiles", $this->_propDict)) {
            return $this->_propDict["smartScreenBlockOverrideForFiles"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smartScreenBlockOverrideForFiles
    *
    * @param bool $val The smartScreenBlockOverrideForFiles
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setSmartScreenBlockOverrideForFiles($val)
    {
        $this->_propDict["smartScreenBlockOverrideForFiles"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardEnabled
    *
    * @return bool The applicationGuardEnabled
    */
    public function getApplicationGuardEnabled()
    {
        if (array_key_exists("applicationGuardEnabled", $this->_propDict)) {
            return $this->_propDict["applicationGuardEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardEnabled
    *
    * @param bool $val The applicationGuardEnabled
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardEnabled($val)
    {
        $this->_propDict["applicationGuardEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardBlockFileTransfer
    *
    * @return ApplicationGuardBlockFileTransferType The applicationGuardBlockFileTransfer
    */
    public function getApplicationGuardBlockFileTransfer()
    {
        if (array_key_exists("applicationGuardBlockFileTransfer", $this->_propDict)) {
            if (is_a($this->_propDict["applicationGuardBlockFileTransfer"], "Microsoft\Graph\Beta\Model\ApplicationGuardBlockFileTransferType")) {
                return $this->_propDict["applicationGuardBlockFileTransfer"];
            } else {
                $this->_propDict["applicationGuardBlockFileTransfer"] = new ApplicationGuardBlockFileTransferType($this->_propDict["applicationGuardBlockFileTransfer"]);
                return $this->_propDict["applicationGuardBlockFileTransfer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicationGuardBlockFileTransfer
    *
    * @param ApplicationGuardBlockFileTransferType $val The applicationGuardBlockFileTransfer
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardBlockFileTransfer($val)
    {
        $this->_propDict["applicationGuardBlockFileTransfer"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationGuardBlockNonEnterpriseContent
    *
    * @return bool The applicationGuardBlockNonEnterpriseContent
    */
    public function getApplicationGuardBlockNonEnterpriseContent()
    {
        if (array_key_exists("applicationGuardBlockNonEnterpriseContent", $this->_propDict)) {
            return $this->_propDict["applicationGuardBlockNonEnterpriseContent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardBlockNonEnterpriseContent
    *
    * @param bool $val The applicationGuardBlockNonEnterpriseContent
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardBlockNonEnterpriseContent($val)
    {
        $this->_propDict["applicationGuardBlockNonEnterpriseContent"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPersistence
    *
    * @return bool The applicationGuardAllowPersistence
    */
    public function getApplicationGuardAllowPersistence()
    {
        if (array_key_exists("applicationGuardAllowPersistence", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPersistence"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPersistence
    *
    * @param bool $val The applicationGuardAllowPersistence
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPersistence($val)
    {
        $this->_propDict["applicationGuardAllowPersistence"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardForceAuditing
    *
    * @return bool The applicationGuardForceAuditing
    */
    public function getApplicationGuardForceAuditing()
    {
        if (array_key_exists("applicationGuardForceAuditing", $this->_propDict)) {
            return $this->_propDict["applicationGuardForceAuditing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardForceAuditing
    *
    * @param bool $val The applicationGuardForceAuditing
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardForceAuditing($val)
    {
        $this->_propDict["applicationGuardForceAuditing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardBlockClipboardSharing
    *
    * @return ApplicationGuardBlockClipboardSharingType The applicationGuardBlockClipboardSharing
    */
    public function getApplicationGuardBlockClipboardSharing()
    {
        if (array_key_exists("applicationGuardBlockClipboardSharing", $this->_propDict)) {
            if (is_a($this->_propDict["applicationGuardBlockClipboardSharing"], "Microsoft\Graph\Beta\Model\ApplicationGuardBlockClipboardSharingType")) {
                return $this->_propDict["applicationGuardBlockClipboardSharing"];
            } else {
                $this->_propDict["applicationGuardBlockClipboardSharing"] = new ApplicationGuardBlockClipboardSharingType($this->_propDict["applicationGuardBlockClipboardSharing"]);
                return $this->_propDict["applicationGuardBlockClipboardSharing"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicationGuardBlockClipboardSharing
    *
    * @param ApplicationGuardBlockClipboardSharingType $val The applicationGuardBlockClipboardSharing
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardBlockClipboardSharing($val)
    {
        $this->_propDict["applicationGuardBlockClipboardSharing"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPrintToPDF
    *
    * @return bool The applicationGuardAllowPrintToPDF
    */
    public function getApplicationGuardAllowPrintToPDF()
    {
        if (array_key_exists("applicationGuardAllowPrintToPDF", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPrintToPDF"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPrintToPDF
    *
    * @param bool $val The applicationGuardAllowPrintToPDF
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPrintToPDF($val)
    {
        $this->_propDict["applicationGuardAllowPrintToPDF"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPrintToXPS
    *
    * @return bool The applicationGuardAllowPrintToXPS
    */
    public function getApplicationGuardAllowPrintToXPS()
    {
        if (array_key_exists("applicationGuardAllowPrintToXPS", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPrintToXPS"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPrintToXPS
    *
    * @param bool $val The applicationGuardAllowPrintToXPS
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPrintToXPS($val)
    {
        $this->_propDict["applicationGuardAllowPrintToXPS"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPrintToLocalPrinters
    *
    * @return bool The applicationGuardAllowPrintToLocalPrinters
    */
    public function getApplicationGuardAllowPrintToLocalPrinters()
    {
        if (array_key_exists("applicationGuardAllowPrintToLocalPrinters", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPrintToLocalPrinters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPrintToLocalPrinters
    *
    * @param bool $val The applicationGuardAllowPrintToLocalPrinters
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPrintToLocalPrinters($val)
    {
        $this->_propDict["applicationGuardAllowPrintToLocalPrinters"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPrintToNetworkPrinters
    *
    * @return bool The applicationGuardAllowPrintToNetworkPrinters
    */
    public function getApplicationGuardAllowPrintToNetworkPrinters()
    {
        if (array_key_exists("applicationGuardAllowPrintToNetworkPrinters", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPrintToNetworkPrinters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPrintToNetworkPrinters
    *
    * @param bool $val The applicationGuardAllowPrintToNetworkPrinters
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPrintToNetworkPrinters($val)
    {
        $this->_propDict["applicationGuardAllowPrintToNetworkPrinters"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowVirtualGPU
    *
    * @return bool The applicationGuardAllowVirtualGPU
    */
    public function getApplicationGuardAllowVirtualGPU()
    {
        if (array_key_exists("applicationGuardAllowVirtualGPU", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowVirtualGPU"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowVirtualGPU
    *
    * @param bool $val The applicationGuardAllowVirtualGPU
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowVirtualGPU($val)
    {
        $this->_propDict["applicationGuardAllowVirtualGPU"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowFileSaveOnHost
    *
    * @return bool The applicationGuardAllowFileSaveOnHost
    */
    public function getApplicationGuardAllowFileSaveOnHost()
    {
        if (array_key_exists("applicationGuardAllowFileSaveOnHost", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowFileSaveOnHost"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowFileSaveOnHost
    *
    * @param bool $val The applicationGuardAllowFileSaveOnHost
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowFileSaveOnHost($val)
    {
        $this->_propDict["applicationGuardAllowFileSaveOnHost"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerDisableWarningForOtherDiskEncryption
    *
    * @return bool The bitLockerDisableWarningForOtherDiskEncryption
    */
    public function getBitLockerDisableWarningForOtherDiskEncryption()
    {
        if (array_key_exists("bitLockerDisableWarningForOtherDiskEncryption", $this->_propDict)) {
            return $this->_propDict["bitLockerDisableWarningForOtherDiskEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bitLockerDisableWarningForOtherDiskEncryption
    *
    * @param bool $val The bitLockerDisableWarningForOtherDiskEncryption
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerDisableWarningForOtherDiskEncryption($val)
    {
        $this->_propDict["bitLockerDisableWarningForOtherDiskEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerEnableStorageCardEncryptionOnMobile
    *
    * @return bool The bitLockerEnableStorageCardEncryptionOnMobile
    */
    public function getBitLockerEnableStorageCardEncryptionOnMobile()
    {
        if (array_key_exists("bitLockerEnableStorageCardEncryptionOnMobile", $this->_propDict)) {
            return $this->_propDict["bitLockerEnableStorageCardEncryptionOnMobile"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bitLockerEnableStorageCardEncryptionOnMobile
    *
    * @param bool $val The bitLockerEnableStorageCardEncryptionOnMobile
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerEnableStorageCardEncryptionOnMobile($val)
    {
        $this->_propDict["bitLockerEnableStorageCardEncryptionOnMobile"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerEncryptDevice
    *
    * @return bool The bitLockerEncryptDevice
    */
    public function getBitLockerEncryptDevice()
    {
        if (array_key_exists("bitLockerEncryptDevice", $this->_propDict)) {
            return $this->_propDict["bitLockerEncryptDevice"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bitLockerEncryptDevice
    *
    * @param bool $val The bitLockerEncryptDevice
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerEncryptDevice($val)
    {
        $this->_propDict["bitLockerEncryptDevice"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerSystemDrivePolicy
    *
    * @return BitLockerSystemDrivePolicy The bitLockerSystemDrivePolicy
    */
    public function getBitLockerSystemDrivePolicy()
    {
        if (array_key_exists("bitLockerSystemDrivePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["bitLockerSystemDrivePolicy"], "Microsoft\Graph\Beta\Model\BitLockerSystemDrivePolicy")) {
                return $this->_propDict["bitLockerSystemDrivePolicy"];
            } else {
                $this->_propDict["bitLockerSystemDrivePolicy"] = new BitLockerSystemDrivePolicy($this->_propDict["bitLockerSystemDrivePolicy"]);
                return $this->_propDict["bitLockerSystemDrivePolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bitLockerSystemDrivePolicy
    *
    * @param BitLockerSystemDrivePolicy $val The bitLockerSystemDrivePolicy
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerSystemDrivePolicy($val)
    {
        $this->_propDict["bitLockerSystemDrivePolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the bitLockerFixedDrivePolicy
    *
    * @return BitLockerFixedDrivePolicy The bitLockerFixedDrivePolicy
    */
    public function getBitLockerFixedDrivePolicy()
    {
        if (array_key_exists("bitLockerFixedDrivePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["bitLockerFixedDrivePolicy"], "Microsoft\Graph\Beta\Model\BitLockerFixedDrivePolicy")) {
                return $this->_propDict["bitLockerFixedDrivePolicy"];
            } else {
                $this->_propDict["bitLockerFixedDrivePolicy"] = new BitLockerFixedDrivePolicy($this->_propDict["bitLockerFixedDrivePolicy"]);
                return $this->_propDict["bitLockerFixedDrivePolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bitLockerFixedDrivePolicy
    *
    * @param BitLockerFixedDrivePolicy $val The bitLockerFixedDrivePolicy
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerFixedDrivePolicy($val)
    {
        $this->_propDict["bitLockerFixedDrivePolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the bitLockerRemovableDrivePolicy
    *
    * @return BitLockerRemovableDrivePolicy The bitLockerRemovableDrivePolicy
    */
    public function getBitLockerRemovableDrivePolicy()
    {
        if (array_key_exists("bitLockerRemovableDrivePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["bitLockerRemovableDrivePolicy"], "Microsoft\Graph\Beta\Model\BitLockerRemovableDrivePolicy")) {
                return $this->_propDict["bitLockerRemovableDrivePolicy"];
            } else {
                $this->_propDict["bitLockerRemovableDrivePolicy"] = new BitLockerRemovableDrivePolicy($this->_propDict["bitLockerRemovableDrivePolicy"]);
                return $this->_propDict["bitLockerRemovableDrivePolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bitLockerRemovableDrivePolicy
    *
    * @param BitLockerRemovableDrivePolicy $val The bitLockerRemovableDrivePolicy
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerRemovableDrivePolicy($val)
    {
        $this->_propDict["bitLockerRemovableDrivePolicy"] = $val;
        return $this;
    }
    
}