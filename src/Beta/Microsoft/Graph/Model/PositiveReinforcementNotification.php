<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PositiveReinforcementNotification File
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
* PositiveReinforcementNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PositiveReinforcementNotification extends BaseEndUserNotification
{

    /**
    * Gets the deliveryPreference
    *
    * @return NotificationDeliveryPreference|null The deliveryPreference
    */
    public function getDeliveryPreference()
    {
        if (array_key_exists("deliveryPreference", $this->_propDict)) {
            if (is_a($this->_propDict["deliveryPreference"], "\Beta\Microsoft\Graph\Model\NotificationDeliveryPreference") || is_null($this->_propDict["deliveryPreference"])) {
                return $this->_propDict["deliveryPreference"];
            } else {
                $this->_propDict["deliveryPreference"] = new NotificationDeliveryPreference($this->_propDict["deliveryPreference"]);
                return $this->_propDict["deliveryPreference"];
            }
        }
        return null;
    }

    /**
    * Sets the deliveryPreference
    *
    * @param NotificationDeliveryPreference $val The value to assign to the deliveryPreference
    *
    * @return PositiveReinforcementNotification The PositiveReinforcementNotification
    */
    public function setDeliveryPreference($val)
    {
        $this->_propDict["deliveryPreference"] = $val;
         return $this;
    }
}
