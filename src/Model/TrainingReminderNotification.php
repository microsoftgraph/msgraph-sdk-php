<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrainingReminderNotification File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* TrainingReminderNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrainingReminderNotification extends BaseEndUserNotification
{

    /**
    * Gets the deliveryFrequency
    *
    * @return NotificationDeliveryFrequency|null The deliveryFrequency
    */
    public function getDeliveryFrequency()
    {
        if (array_key_exists("deliveryFrequency", $this->_propDict)) {
            if (is_a($this->_propDict["deliveryFrequency"], "\Microsoft\Graph\Model\NotificationDeliveryFrequency") || is_null($this->_propDict["deliveryFrequency"])) {
                return $this->_propDict["deliveryFrequency"];
            } else {
                $this->_propDict["deliveryFrequency"] = new NotificationDeliveryFrequency($this->_propDict["deliveryFrequency"]);
                return $this->_propDict["deliveryFrequency"];
            }
        }
        return null;
    }

    /**
    * Sets the deliveryFrequency
    *
    * @param NotificationDeliveryFrequency $val The value to assign to the deliveryFrequency
    *
    * @return TrainingReminderNotification The TrainingReminderNotification
    */
    public function setDeliveryFrequency($val)
    {
        $this->_propDict["deliveryFrequency"] = $val;
         return $this;
    }
}
