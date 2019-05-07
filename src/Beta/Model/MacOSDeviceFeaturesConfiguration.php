<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSDeviceFeaturesConfiguration File
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
* MacOSDeviceFeaturesConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MacOSDeviceFeaturesConfiguration extends AppleDeviceFeaturesConfigurationBase
{

     /** 
     * Gets the autoLaunchItems
    * List of applications, files, folders, and other items to launch when the user logs in. This collection can contain a maximum of 500 elements.
     *
     * @return array The autoLaunchItems
     */
    public function getAutoLaunchItems()
    {
        if (array_key_exists("autoLaunchItems", $this->_propDict)) {
           return $this->_propDict["autoLaunchItems"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the autoLaunchItems
    * List of applications, files, folders, and other items to launch when the user logs in. This collection can contain a maximum of 500 elements.
    *
    * @param MacOSLaunchItem $val The autoLaunchItems
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAutoLaunchItems($val)
    {
		$this->_propDict["autoLaunchItems"] = $val;
        return $this;
    }
    
    /**
    * Gets the adminShowHostInfo
    * Whether to show admin host information on the login window.
    *
    * @return bool The adminShowHostInfo
    */
    public function getAdminShowHostInfo()
    {
        if (array_key_exists("adminShowHostInfo", $this->_propDict)) {
            return $this->_propDict["adminShowHostInfo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the adminShowHostInfo
    * Whether to show admin host information on the login window.
    *
    * @param bool $val The adminShowHostInfo
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAdminShowHostInfo($val)
    {
        $this->_propDict["adminShowHostInfo"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the loginWindowText
    * Custom text to be displayed on the login window.
    *
    * @return string The loginWindowText
    */
    public function getLoginWindowText()
    {
        if (array_key_exists("loginWindowText", $this->_propDict)) {
            return $this->_propDict["loginWindowText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the loginWindowText
    * Custom text to be displayed on the login window.
    *
    * @param string $val The loginWindowText
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setLoginWindowText($val)
    {
        $this->_propDict["loginWindowText"] = $val;
        return $this;
    }
    
    /**
    * Gets the authorizedUsersListHidden
    * Whether to show the name and password dialog or a list of users on the login window.
    *
    * @return bool The authorizedUsersListHidden
    */
    public function getAuthorizedUsersListHidden()
    {
        if (array_key_exists("authorizedUsersListHidden", $this->_propDict)) {
            return $this->_propDict["authorizedUsersListHidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authorizedUsersListHidden
    * Whether to show the name and password dialog or a list of users on the login window.
    *
    * @param bool $val The authorizedUsersListHidden
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAuthorizedUsersListHidden($val)
    {
        $this->_propDict["authorizedUsersListHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authorizedUsersListHideLocalUsers
    * Whether to show only network and system users in the authorized users list on the login window.
    *
    * @return bool The authorizedUsersListHideLocalUsers
    */
    public function getAuthorizedUsersListHideLocalUsers()
    {
        if (array_key_exists("authorizedUsersListHideLocalUsers", $this->_propDict)) {
            return $this->_propDict["authorizedUsersListHideLocalUsers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authorizedUsersListHideLocalUsers
    * Whether to show only network and system users in the authorized users list on the login window.
    *
    * @param bool $val The authorizedUsersListHideLocalUsers
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAuthorizedUsersListHideLocalUsers($val)
    {
        $this->_propDict["authorizedUsersListHideLocalUsers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authorizedUsersListHideMobileAccounts
    * Whether to hide mobile users in the authorized users list on the login window.
    *
    * @return bool The authorizedUsersListHideMobileAccounts
    */
    public function getAuthorizedUsersListHideMobileAccounts()
    {
        if (array_key_exists("authorizedUsersListHideMobileAccounts", $this->_propDict)) {
            return $this->_propDict["authorizedUsersListHideMobileAccounts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authorizedUsersListHideMobileAccounts
    * Whether to hide mobile users in the authorized users list on the login window.
    *
    * @param bool $val The authorizedUsersListHideMobileAccounts
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAuthorizedUsersListHideMobileAccounts($val)
    {
        $this->_propDict["authorizedUsersListHideMobileAccounts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authorizedUsersListIncludeNetworkUsers
    * Whether to show network users in the authorized users list on the login window.
    *
    * @return bool The authorizedUsersListIncludeNetworkUsers
    */
    public function getAuthorizedUsersListIncludeNetworkUsers()
    {
        if (array_key_exists("authorizedUsersListIncludeNetworkUsers", $this->_propDict)) {
            return $this->_propDict["authorizedUsersListIncludeNetworkUsers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authorizedUsersListIncludeNetworkUsers
    * Whether to show network users in the authorized users list on the login window.
    *
    * @param bool $val The authorizedUsersListIncludeNetworkUsers
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAuthorizedUsersListIncludeNetworkUsers($val)
    {
        $this->_propDict["authorizedUsersListIncludeNetworkUsers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authorizedUsersListHideAdminUsers
    * Whether to hide admin users in the authorized users list on the login window.
    *
    * @return bool The authorizedUsersListHideAdminUsers
    */
    public function getAuthorizedUsersListHideAdminUsers()
    {
        if (array_key_exists("authorizedUsersListHideAdminUsers", $this->_propDict)) {
            return $this->_propDict["authorizedUsersListHideAdminUsers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authorizedUsersListHideAdminUsers
    * Whether to hide admin users in the authorized users list on the login window.
    *
    * @param bool $val The authorizedUsersListHideAdminUsers
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAuthorizedUsersListHideAdminUsers($val)
    {
        $this->_propDict["authorizedUsersListHideAdminUsers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authorizedUsersListShowOtherManagedUsers
    * Whether to show other users in the authorized users list on the login window.
    *
    * @return bool The authorizedUsersListShowOtherManagedUsers
    */
    public function getAuthorizedUsersListShowOtherManagedUsers()
    {
        if (array_key_exists("authorizedUsersListShowOtherManagedUsers", $this->_propDict)) {
            return $this->_propDict["authorizedUsersListShowOtherManagedUsers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authorizedUsersListShowOtherManagedUsers
    * Whether to show other users in the authorized users list on the login window.
    *
    * @param bool $val The authorizedUsersListShowOtherManagedUsers
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAuthorizedUsersListShowOtherManagedUsers($val)
    {
        $this->_propDict["authorizedUsersListShowOtherManagedUsers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the shutDownDisabled
    * Whether to hide the Shut Down button item on the login window.
    *
    * @return bool The shutDownDisabled
    */
    public function getShutDownDisabled()
    {
        if (array_key_exists("shutDownDisabled", $this->_propDict)) {
            return $this->_propDict["shutDownDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shutDownDisabled
    * Whether to hide the Shut Down button item on the login window.
    *
    * @param bool $val The shutDownDisabled
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setShutDownDisabled($val)
    {
        $this->_propDict["shutDownDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the restartDisabled
    * Whether to hide the Restart button item on the login window.
    *
    * @return bool The restartDisabled
    */
    public function getRestartDisabled()
    {
        if (array_key_exists("restartDisabled", $this->_propDict)) {
            return $this->_propDict["restartDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the restartDisabled
    * Whether to hide the Restart button item on the login window.
    *
    * @param bool $val The restartDisabled
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setRestartDisabled($val)
    {
        $this->_propDict["restartDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the sleepDisabled
    * Whether to hide the Sleep menu item on the login window.
    *
    * @return bool The sleepDisabled
    */
    public function getSleepDisabled()
    {
        if (array_key_exists("sleepDisabled", $this->_propDict)) {
            return $this->_propDict["sleepDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sleepDisabled
    * Whether to hide the Sleep menu item on the login window.
    *
    * @param bool $val The sleepDisabled
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setSleepDisabled($val)
    {
        $this->_propDict["sleepDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the consoleAccessDisabled
    * Whether the Other user will disregard use of the `&amp;gt;console&amp;gt; special user name.
    *
    * @return bool The consoleAccessDisabled
    */
    public function getConsoleAccessDisabled()
    {
        if (array_key_exists("consoleAccessDisabled", $this->_propDict)) {
            return $this->_propDict["consoleAccessDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the consoleAccessDisabled
    * Whether the Other user will disregard use of the `&amp;gt;console&amp;gt; special user name.
    *
    * @param bool $val The consoleAccessDisabled
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setConsoleAccessDisabled($val)
    {
        $this->_propDict["consoleAccessDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the shutDownDisabledWhileLoggedIn
    * Whether the Shut Down menu item on the login window will be disabled while the user is logged in.
    *
    * @return bool The shutDownDisabledWhileLoggedIn
    */
    public function getShutDownDisabledWhileLoggedIn()
    {
        if (array_key_exists("shutDownDisabledWhileLoggedIn", $this->_propDict)) {
            return $this->_propDict["shutDownDisabledWhileLoggedIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shutDownDisabledWhileLoggedIn
    * Whether the Shut Down menu item on the login window will be disabled while the user is logged in.
    *
    * @param bool $val The shutDownDisabledWhileLoggedIn
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setShutDownDisabledWhileLoggedIn($val)
    {
        $this->_propDict["shutDownDisabledWhileLoggedIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the restartDisabledWhileLoggedIn
    * Whether the Restart menu item on the login window will be disabled while the user is logged in.
    *
    * @return bool The restartDisabledWhileLoggedIn
    */
    public function getRestartDisabledWhileLoggedIn()
    {
        if (array_key_exists("restartDisabledWhileLoggedIn", $this->_propDict)) {
            return $this->_propDict["restartDisabledWhileLoggedIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the restartDisabledWhileLoggedIn
    * Whether the Restart menu item on the login window will be disabled while the user is logged in.
    *
    * @param bool $val The restartDisabledWhileLoggedIn
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setRestartDisabledWhileLoggedIn($val)
    {
        $this->_propDict["restartDisabledWhileLoggedIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the powerOffDisabledWhileLoggedIn
    * Whether the Power Off menu item on the login window will be disabled while the user is logged in.
    *
    * @return bool The powerOffDisabledWhileLoggedIn
    */
    public function getPowerOffDisabledWhileLoggedIn()
    {
        if (array_key_exists("powerOffDisabledWhileLoggedIn", $this->_propDict)) {
            return $this->_propDict["powerOffDisabledWhileLoggedIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the powerOffDisabledWhileLoggedIn
    * Whether the Power Off menu item on the login window will be disabled while the user is logged in.
    *
    * @param bool $val The powerOffDisabledWhileLoggedIn
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setPowerOffDisabledWhileLoggedIn($val)
    {
        $this->_propDict["powerOffDisabledWhileLoggedIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the logOutDisabledWhileLoggedIn
    * Whether the Log Out menu item on the login window will be disabled while the user is logged in.
    *
    * @return bool The logOutDisabledWhileLoggedIn
    */
    public function getLogOutDisabledWhileLoggedIn()
    {
        if (array_key_exists("logOutDisabledWhileLoggedIn", $this->_propDict)) {
            return $this->_propDict["logOutDisabledWhileLoggedIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the logOutDisabledWhileLoggedIn
    * Whether the Log Out menu item on the login window will be disabled while the user is logged in.
    *
    * @param bool $val The logOutDisabledWhileLoggedIn
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setLogOutDisabledWhileLoggedIn($val)
    {
        $this->_propDict["logOutDisabledWhileLoggedIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the screenLockDisableImmediate
    * Whether to disable the immediate screen lock functions.
    *
    * @return bool The screenLockDisableImmediate
    */
    public function getScreenLockDisableImmediate()
    {
        if (array_key_exists("screenLockDisableImmediate", $this->_propDict)) {
            return $this->_propDict["screenLockDisableImmediate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the screenLockDisableImmediate
    * Whether to disable the immediate screen lock functions.
    *
    * @param bool $val The screenLockDisableImmediate
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setScreenLockDisableImmediate($val)
    {
        $this->_propDict["screenLockDisableImmediate"] = boolval($val);
        return $this;
    }
    
}