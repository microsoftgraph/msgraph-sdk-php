<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChangeNotificationCollection File
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
* ChangeNotificationCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChangeNotificationCollection extends Entity
{

    /**
    * Gets the value
    * The set of notifications being sent to the notification URL. Required.
    *
    * @return ChangeNotification The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "Microsoft\Graph\Model\ChangeNotification")) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = new ChangeNotification($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    * The set of notifications being sent to the notification URL. Required.
    *
    * @param ChangeNotification $val The value to assign to the value
    *
    * @return ChangeNotificationCollection The ChangeNotificationCollection
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
