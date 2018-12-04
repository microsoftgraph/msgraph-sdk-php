<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnrollmentTroubleshootingEvent File
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
* EnrollmentTroubleshootingEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EnrollmentTroubleshootingEvent extends DeviceManagementTroubleshootingEvent
{
    /**
    * Gets the managedDeviceIdentifier
    *
    * @return string The managedDeviceIdentifier
    */
    public function getManagedDeviceIdentifier()
    {
        if (array_key_exists("managedDeviceIdentifier", $this->_propDict)) {
            return $this->_propDict["managedDeviceIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceIdentifier
    *
    * @param string $val The managedDeviceIdentifier
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setManagedDeviceIdentifier($val)
    {
        $this->_propDict["managedDeviceIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the operatingSystem
    *
    * @return string The operatingSystem
    */
    public function getOperatingSystem()
    {
        if (array_key_exists("operatingSystem", $this->_propDict)) {
            return $this->_propDict["operatingSystem"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the operatingSystem
    *
    * @param string $val The operatingSystem
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setOperatingSystem($val)
    {
        $this->_propDict["operatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersion
    *
    * @return string The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osVersion
    *
    * @param string $val The osVersion
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceId
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceId
    *
    * @param string $val The deviceId
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the enrollmentType
    *
    * @return DeviceEnrollmentType The enrollmentType
    */
    public function getEnrollmentType()
    {
        if (array_key_exists("enrollmentType", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentType"], "Microsoft\Graph\Model\DeviceEnrollmentType")) {
                return $this->_propDict["enrollmentType"];
            } else {
                $this->_propDict["enrollmentType"] = new DeviceEnrollmentType($this->_propDict["enrollmentType"]);
                return $this->_propDict["enrollmentType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enrollmentType
    *
    * @param DeviceEnrollmentType $val The enrollmentType
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setEnrollmentType($val)
    {
        $this->_propDict["enrollmentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the failureCategory
    *
    * @return DeviceEnrollmentFailureReason The failureCategory
    */
    public function getFailureCategory()
    {
        if (array_key_exists("failureCategory", $this->_propDict)) {
            if (is_a($this->_propDict["failureCategory"], "Microsoft\Graph\Model\DeviceEnrollmentFailureReason")) {
                return $this->_propDict["failureCategory"];
            } else {
                $this->_propDict["failureCategory"] = new DeviceEnrollmentFailureReason($this->_propDict["failureCategory"]);
                return $this->_propDict["failureCategory"];
            }
        }
        return null;
    }
    
    /**
    * Sets the failureCategory
    *
    * @param DeviceEnrollmentFailureReason $val The failureCategory
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setFailureCategory($val)
    {
        $this->_propDict["failureCategory"] = $val;
        return $this;
    }
    
    /**
    * Gets the failureReason
    *
    * @return string The failureReason
    */
    public function getFailureReason()
    {
        if (array_key_exists("failureReason", $this->_propDict)) {
            return $this->_propDict["failureReason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failureReason
    *
    * @param string $val The failureReason
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setFailureReason($val)
    {
        $this->_propDict["failureReason"] = $val;
        return $this;
    }
    
}