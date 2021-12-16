<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HardwareConfigurationUserState File
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
* HardwareConfigurationUserState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HardwareConfigurationUserState extends Entity
{
    /**
    * Gets the errorDeviceCount
    * Error device count for specific user.
    *
    * @return int|null The errorDeviceCount
    */
    public function getErrorDeviceCount()
    {
        if (array_key_exists("errorDeviceCount", $this->_propDict)) {
            return $this->_propDict["errorDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorDeviceCount
    * Error device count for specific user.
    *
    * @param int $val The errorDeviceCount
    *
    * @return HardwareConfigurationUserState
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the failedDeviceCount
    * Failed device count for specific user
    *
    * @return int|null The failedDeviceCount
    */
    public function getFailedDeviceCount()
    {
        if (array_key_exists("failedDeviceCount", $this->_propDict)) {
            return $this->_propDict["failedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedDeviceCount
    * Failed device count for specific user
    *
    * @param int $val The failedDeviceCount
    *
    * @return HardwareConfigurationUserState
    */
    public function setFailedDeviceCount($val)
    {
        $this->_propDict["failedDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the lastStateUpdateDateTime
    * Last timestamp when the hardware configuration executed
    *
    * @return \DateTime|null The lastStateUpdateDateTime
    */
    public function getLastStateUpdateDateTime()
    {
        if (array_key_exists("lastStateUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastStateUpdateDateTime"], "\DateTime") || is_null($this->_propDict["lastStateUpdateDateTime"])) {
                return $this->_propDict["lastStateUpdateDateTime"];
            } else {
                $this->_propDict["lastStateUpdateDateTime"] = new \DateTime($this->_propDict["lastStateUpdateDateTime"]);
                return $this->_propDict["lastStateUpdateDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastStateUpdateDateTime
    * Last timestamp when the hardware configuration executed
    *
    * @param \DateTime $val The lastStateUpdateDateTime
    *
    * @return HardwareConfigurationUserState
    */
    public function setLastStateUpdateDateTime($val)
    {
        $this->_propDict["lastStateUpdateDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the notApplicableDeviceCount
    * Not applicable device count for specific user.
    *
    * @return int|null The notApplicableDeviceCount
    */
    public function getNotApplicableDeviceCount()
    {
        if (array_key_exists("notApplicableDeviceCount", $this->_propDict)) {
            return $this->_propDict["notApplicableDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notApplicableDeviceCount
    * Not applicable device count for specific user.
    *
    * @param int $val The notApplicableDeviceCount
    *
    * @return HardwareConfigurationUserState
    */
    public function setNotApplicableDeviceCount($val)
    {
        $this->_propDict["notApplicableDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the pendingDeviceCount
    * Pending device count for specific user.
    *
    * @return int|null The pendingDeviceCount
    */
    public function getPendingDeviceCount()
    {
        if (array_key_exists("pendingDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingDeviceCount
    * Pending device count for specific user.
    *
    * @param int $val The pendingDeviceCount
    *
    * @return HardwareConfigurationUserState
    */
    public function setPendingDeviceCount($val)
    {
        $this->_propDict["pendingDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the successfulDeviceCount
    * Success device count for specific user
    *
    * @return int|null The successfulDeviceCount
    */
    public function getSuccessfulDeviceCount()
    {
        if (array_key_exists("successfulDeviceCount", $this->_propDict)) {
            return $this->_propDict["successfulDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulDeviceCount
    * Success device count for specific user
    *
    * @param int $val The successfulDeviceCount
    *
    * @return HardwareConfigurationUserState
    */
    public function setSuccessfulDeviceCount($val)
    {
        $this->_propDict["successfulDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the unknownDeviceCount
    * Unknown device count for specific user.
    *
    * @return int|null The unknownDeviceCount
    */
    public function getUnknownDeviceCount()
    {
        if (array_key_exists("unknownDeviceCount", $this->_propDict)) {
            return $this->_propDict["unknownDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unknownDeviceCount
    * Unknown device count for specific user.
    *
    * @param int $val The unknownDeviceCount
    *
    * @return HardwareConfigurationUserState
    */
    public function setUnknownDeviceCount($val)
    {
        $this->_propDict["unknownDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the upn
    * User Principal Name (UPN)
    *
    * @return string|null The upn
    */
    public function getUpn()
    {
        if (array_key_exists("upn", $this->_propDict)) {
            return $this->_propDict["upn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upn
    * User Principal Name (UPN)
    *
    * @param string $val The upn
    *
    * @return HardwareConfigurationUserState
    */
    public function setUpn($val)
    {
        $this->_propDict["upn"] = $val;
        return $this;
    }

    /**
    * Gets the userEmail
    * User Email address
    *
    * @return string|null The userEmail
    */
    public function getUserEmail()
    {
        if (array_key_exists("userEmail", $this->_propDict)) {
            return $this->_propDict["userEmail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userEmail
    * User Email address
    *
    * @param string $val The userEmail
    *
    * @return HardwareConfigurationUserState
    */
    public function setUserEmail($val)
    {
        $this->_propDict["userEmail"] = $val;
        return $this;
    }

    /**
    * Gets the userName
    * User name
    *
    * @return string|null The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userName
    * User name
    *
    * @param string $val The userName
    *
    * @return HardwareConfigurationUserState
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }

}
