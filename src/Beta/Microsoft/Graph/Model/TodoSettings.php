<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TodoSettings File
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
* TodoSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TodoSettings extends Entity
{
    /**
    * Gets the isExternalJoinEnabled
    * Controls whether users can join lists from users external to your organization.
    *
    * @return bool|null The isExternalJoinEnabled
    */
    public function getIsExternalJoinEnabled()
    {
        if (array_key_exists("isExternalJoinEnabled", $this->_propDict)) {
            return $this->_propDict["isExternalJoinEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isExternalJoinEnabled
    * Controls whether users can join lists from users external to your organization.
    *
    * @param bool $val The value of the isExternalJoinEnabled
    *
    * @return TodoSettings
    */
    public function setIsExternalJoinEnabled($val)
    {
        $this->_propDict["isExternalJoinEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isExternalShareEnabled
    * Controls whether users can share lists with external users.
    *
    * @return bool|null The isExternalShareEnabled
    */
    public function getIsExternalShareEnabled()
    {
        if (array_key_exists("isExternalShareEnabled", $this->_propDict)) {
            return $this->_propDict["isExternalShareEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isExternalShareEnabled
    * Controls whether users can share lists with external users.
    *
    * @param bool $val The value of the isExternalShareEnabled
    *
    * @return TodoSettings
    */
    public function setIsExternalShareEnabled($val)
    {
        $this->_propDict["isExternalShareEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isPushNotificationEnabled
    * Controls whether push notifications are enabled for your users.
    *
    * @return bool|null The isPushNotificationEnabled
    */
    public function getIsPushNotificationEnabled()
    {
        if (array_key_exists("isPushNotificationEnabled", $this->_propDict)) {
            return $this->_propDict["isPushNotificationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPushNotificationEnabled
    * Controls whether push notifications are enabled for your users.
    *
    * @param bool $val The value of the isPushNotificationEnabled
    *
    * @return TodoSettings
    */
    public function setIsPushNotificationEnabled($val)
    {
        $this->_propDict["isPushNotificationEnabled"] = $val;
        return $this;
    }
}
