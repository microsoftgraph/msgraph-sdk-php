<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppAssignmentSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* Win32LobAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.win32LobAppAssignmentSettings");
    }


    /**
    * Gets the installTimeSettings
    * The install time settings to apply for this app assignment.
    *
    * @return MobileAppInstallTimeSettings The installTimeSettings
    */
    public function getInstallTimeSettings()
    {
        if (array_key_exists("installTimeSettings", $this->_propDict)) {
            if (is_a($this->_propDict["installTimeSettings"], "Microsoft\Graph\Model\MobileAppInstallTimeSettings")) {
                return $this->_propDict["installTimeSettings"];
            } else {
                $this->_propDict["installTimeSettings"] = new MobileAppInstallTimeSettings($this->_propDict["installTimeSettings"]);
                return $this->_propDict["installTimeSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the installTimeSettings
    * The install time settings to apply for this app assignment.
    *
    * @param MobileAppInstallTimeSettings $val The value to assign to the installTimeSettings
    *
    * @return Win32LobAppAssignmentSettings The Win32LobAppAssignmentSettings
    */
    public function setInstallTimeSettings($val)
    {
        $this->_propDict["installTimeSettings"] = $val;
         return $this;
    }

    /**
    * Gets the notifications
    * The notification status for this app assignment. Possible values are: showAll, showReboot, hideAll.
    *
    * @return Win32LobAppNotification The notifications
    */
    public function getNotifications()
    {
        if (array_key_exists("notifications", $this->_propDict)) {
            if (is_a($this->_propDict["notifications"], "Microsoft\Graph\Model\Win32LobAppNotification")) {
                return $this->_propDict["notifications"];
            } else {
                $this->_propDict["notifications"] = new Win32LobAppNotification($this->_propDict["notifications"]);
                return $this->_propDict["notifications"];
            }
        }
        return null;
    }

    /**
    * Sets the notifications
    * The notification status for this app assignment. Possible values are: showAll, showReboot, hideAll.
    *
    * @param Win32LobAppNotification $val The value to assign to the notifications
    *
    * @return Win32LobAppAssignmentSettings The Win32LobAppAssignmentSettings
    */
    public function setNotifications($val)
    {
        $this->_propDict["notifications"] = $val;
         return $this;
    }

    /**
    * Gets the restartSettings
    * The reboot settings to apply for this app assignment.
    *
    * @return Win32LobAppRestartSettings The restartSettings
    */
    public function getRestartSettings()
    {
        if (array_key_exists("restartSettings", $this->_propDict)) {
            if (is_a($this->_propDict["restartSettings"], "Microsoft\Graph\Model\Win32LobAppRestartSettings")) {
                return $this->_propDict["restartSettings"];
            } else {
                $this->_propDict["restartSettings"] = new Win32LobAppRestartSettings($this->_propDict["restartSettings"]);
                return $this->_propDict["restartSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the restartSettings
    * The reboot settings to apply for this app assignment.
    *
    * @param Win32LobAppRestartSettings $val The value to assign to the restartSettings
    *
    * @return Win32LobAppAssignmentSettings The Win32LobAppAssignmentSettings
    */
    public function setRestartSettings($val)
    {
        $this->_propDict["restartSettings"] = $val;
         return $this;
    }
}
