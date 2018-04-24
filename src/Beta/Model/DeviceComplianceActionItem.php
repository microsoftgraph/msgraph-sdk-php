<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceActionItem File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* DeviceComplianceActionItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceComplianceActionItem extends Entity
{
    /**
    * Gets the gracePeriodHours
    *
    * @return int The gracePeriodHours
    */
    public function getGracePeriodHours()
    {
        if (array_key_exists("gracePeriodHours", $this->_propDict)) {
            return $this->_propDict["gracePeriodHours"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gracePeriodHours
    *
    * @param int $val The gracePeriodHours
    *
    * @return DeviceComplianceActionItem
    */
    public function setGracePeriodHours($val)
    {
        $this->_propDict["gracePeriodHours"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the actionType
    *
    * @return DeviceComplianceActionType The actionType
    */
    public function getActionType()
    {
        if (array_key_exists("actionType", $this->_propDict)) {
            if (is_a($this->_propDict["actionType"], "Microsoft\Graph\Beta\Model\DeviceComplianceActionType")) {
                return $this->_propDict["actionType"];
            } else {
                $this->_propDict["actionType"] = new DeviceComplianceActionType($this->_propDict["actionType"]);
                return $this->_propDict["actionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the actionType
    *
    * @param DeviceComplianceActionType $val The actionType
    *
    * @return DeviceComplianceActionItem
    */
    public function setActionType($val)
    {
        $this->_propDict["actionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationTemplateId
    *
    * @return string The notificationTemplateId
    */
    public function getNotificationTemplateId()
    {
        if (array_key_exists("notificationTemplateId", $this->_propDict)) {
            return $this->_propDict["notificationTemplateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationTemplateId
    *
    * @param string $val The notificationTemplateId
    *
    * @return DeviceComplianceActionItem
    */
    public function setNotificationTemplateId($val)
    {
        $this->_propDict["notificationTemplateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationMessageCCList
    *
    * @return string The notificationMessageCCList
    */
    public function getNotificationMessageCCList()
    {
        if (array_key_exists("notificationMessageCCList", $this->_propDict)) {
            return $this->_propDict["notificationMessageCCList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationMessageCCList
    *
    * @param string $val The notificationMessageCCList
    *
    * @return DeviceComplianceActionItem
    */
    public function setNotificationMessageCCList($val)
    {
        $this->_propDict["notificationMessageCCList"] = $val;
        return $this;
    }
    
}