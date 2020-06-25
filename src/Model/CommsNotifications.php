<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CommsNotifications File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* CommsNotifications class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CommsNotifications extends Entity
{

    /**
    * Gets the value
    * The notification of a change in the resource.
    *
    * @return CommsNotification The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "Microsoft\Graph\Model\CommsNotification")) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = new CommsNotification($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    * The notification of a change in the resource.
    *
    * @param CommsNotification $val The value to assign to the value
    *
    * @return CommsNotifications The CommsNotifications
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
