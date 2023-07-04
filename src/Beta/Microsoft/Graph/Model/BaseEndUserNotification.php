<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BaseEndUserNotification File
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
* BaseEndUserNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BaseEndUserNotification extends Entity
{
    /**
    * Gets the defaultLanguage
    *
    * @return string|null The defaultLanguage
    */
    public function getDefaultLanguage()
    {
        if (array_key_exists("defaultLanguage", $this->_propDict)) {
            return $this->_propDict["defaultLanguage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultLanguage
    *
    * @param string $val The value of the defaultLanguage
    *
    * @return BaseEndUserNotification
    */
    public function setDefaultLanguage($val)
    {
        $this->_propDict["defaultLanguage"] = $val;
        return $this;
    }

    /**
    * Gets the endUserNotification
    *
    * @return EndUserNotification|null The endUserNotification
    */
    public function getEndUserNotification()
    {
        if (array_key_exists("endUserNotification", $this->_propDict)) {
            if (is_a($this->_propDict["endUserNotification"], "\Beta\Microsoft\Graph\Model\EndUserNotification") || is_null($this->_propDict["endUserNotification"])) {
                return $this->_propDict["endUserNotification"];
            } else {
                $this->_propDict["endUserNotification"] = new EndUserNotification($this->_propDict["endUserNotification"]);
                return $this->_propDict["endUserNotification"];
            }
        }
        return null;
    }

    /**
    * Sets the endUserNotification
    *
    * @param EndUserNotification $val The value to assign to the endUserNotification
    *
    * @return BaseEndUserNotification The BaseEndUserNotification
    */
    public function setEndUserNotification($val)
    {
        $this->_propDict["endUserNotification"] = $val;
         return $this;
    }
}
