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
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* Win32LobAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
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
    * Gets the notifications
    * The notification status for this app assignment.
    *
    * @return Win32LobAppNotification The notifications
    */
    public function getNotifications()
    {
        if (array_key_exists("notifications", $this->_propDict)) {
            if (is_a($this->_propDict["notifications"], "Microsoft\Graph\Beta\Model\Win32LobAppNotification")) {
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
    * The notification status for this app assignment.
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
}
