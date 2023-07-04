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
