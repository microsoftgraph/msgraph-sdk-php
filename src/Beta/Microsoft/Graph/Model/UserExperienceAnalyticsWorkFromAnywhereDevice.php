<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsWorkFromAnywhereDevice File
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
* UserExperienceAnalyticsWorkFromAnywhereDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsWorkFromAnywhereDevice extends Entity
{
    /**
    * Gets the autoPilotProfileAssigned
    * The user experience analytics work from anywhere intune device's autopilotProfileAssigned.
    *
    * @return bool|null The autoPilotProfileAssigned
    */
    public function getAutoPilotProfileAssigned()
    {
        if (array_key_exists("autoPilotProfileAssigned", $this->_propDict)) {
            return $this->_propDict["autoPilotProfileAssigned"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the autoPilotProfileAssigned
    * The user experience analytics work from anywhere intune device's autopilotProfileAssigned.
    *
    * @param bool $val The autoPilotProfileAssigned
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setAutoPilotProfileAssigned($val)
    {
        $this->_propDict["autoPilotProfileAssigned"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the autoPilotRegistered
    * The user experience work from anywhere intune device's autopilotRegistered.
    *
    * @return bool|null The autoPilotRegistered
    */
    public function getAutoPilotRegistered()
    {
        if (array_key_exists("autoPilotRegistered", $this->_propDict)) {
            return $this->_propDict["autoPilotRegistered"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the autoPilotRegistered
    * The user experience work from anywhere intune device's autopilotRegistered.
    *
    * @param bool $val The autoPilotRegistered
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setAutoPilotRegistered($val)
    {
        $this->_propDict["autoPilotRegistered"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the azureAdDeviceId
    * The user experience work from anywhere azure Ad device Id.
    *
    * @return string|null The azureAdDeviceId
    */
    public function getAzureAdDeviceId()
    {
        if (array_key_exists("azureAdDeviceId", $this->_propDict)) {
            return $this->_propDict["azureAdDeviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureAdDeviceId
    * The user experience work from anywhere azure Ad device Id.
    *
    * @param string $val The azureAdDeviceId
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setAzureAdDeviceId($val)
    {
        $this->_propDict["azureAdDeviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureAdJoinType
    * The user experience work from anywhere device's azure Ad joinType.
    *
    * @return string|null The azureAdJoinType
    */
    public function getAzureAdJoinType()
    {
        if (array_key_exists("azureAdJoinType", $this->_propDict)) {
            return $this->_propDict["azureAdJoinType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureAdJoinType
    * The user experience work from anywhere device's azure Ad joinType.
    *
    * @param string $val The azureAdJoinType
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setAzureAdJoinType($val)
    {
        $this->_propDict["azureAdJoinType"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureAdRegistered
    * The user experience work from anywhere device's azureAdRegistered.
    *
    * @return bool|null The azureAdRegistered
    */
    public function getAzureAdRegistered()
    {
        if (array_key_exists("azureAdRegistered", $this->_propDict)) {
            return $this->_propDict["azureAdRegistered"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureAdRegistered
    * The user experience work from anywhere device's azureAdRegistered.
    *
    * @param bool $val The azureAdRegistered
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setAzureAdRegistered($val)
    {
        $this->_propDict["azureAdRegistered"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceName
    * The work from anywhere device's name.
    *
    * @return string|null The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceName
    * The work from anywhere device's name.
    *
    * @param string $val The deviceName
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedBy
    * The user experience work from anywhere management agent of the device.
    *
    * @return string|null The managedBy
    */
    public function getManagedBy()
    {
        if (array_key_exists("managedBy", $this->_propDict)) {
            return $this->_propDict["managedBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedBy
    * The user experience work from anywhere management agent of the device.
    *
    * @param string $val The managedBy
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setManagedBy($val)
    {
        $this->_propDict["managedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the manufacturer
    * The user experience work from anywhere device's manufacturer.
    *
    * @return string|null The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the manufacturer
    * The user experience work from anywhere device's manufacturer.
    *
    * @param string $val The manufacturer
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }
    
    /**
    * Gets the model
    * The user experience work from anywhere device's model.
    *
    * @return string|null The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the model
    * The user experience work from anywhere device's model.
    *
    * @param string $val The model
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }
    
    /**
    * Gets the ownership
    * The user experience work from anywhere device's ownership.
    *
    * @return string|null The ownership
    */
    public function getOwnership()
    {
        if (array_key_exists("ownership", $this->_propDict)) {
            return $this->_propDict["ownership"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ownership
    * The user experience work from anywhere device's ownership.
    *
    * @param string $val The ownership
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setOwnership($val)
    {
        $this->_propDict["ownership"] = $val;
        return $this;
    }
    
    /**
    * Gets the serialNumber
    * The user experience work from anywhere device's serial number.
    *
    * @return string|null The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serialNumber
    * The user experience work from anywhere device's serial number.
    *
    * @param string $val The serialNumber
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }
    
}
