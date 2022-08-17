<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAutopilotDeviceIdentity File
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
* WindowsAutopilotDeviceIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsAutopilotDeviceIdentity extends Entity
{
    /**
    * Gets the addressableUserName
    * Addressable user name.
    *
    * @return string|null The addressableUserName
    */
    public function getAddressableUserName()
    {
        if (array_key_exists("addressableUserName", $this->_propDict)) {
            return $this->_propDict["addressableUserName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the addressableUserName
    * Addressable user name.
    *
    * @param string $val The addressableUserName
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setAddressableUserName($val)
    {
        $this->_propDict["addressableUserName"] = $val;
        return $this;
    }

    /**
    * Gets the azureActiveDirectoryDeviceId
    * AAD Device ID - to be deprecated
    *
    * @return string|null The azureActiveDirectoryDeviceId
    */
    public function getAzureActiveDirectoryDeviceId()
    {
        if (array_key_exists("azureActiveDirectoryDeviceId", $this->_propDict)) {
            return $this->_propDict["azureActiveDirectoryDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureActiveDirectoryDeviceId
    * AAD Device ID - to be deprecated
    *
    * @param string $val The azureActiveDirectoryDeviceId
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setAzureActiveDirectoryDeviceId($val)
    {
        $this->_propDict["azureActiveDirectoryDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display Name
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display Name
    *
    * @param string $val The displayName
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the enrollmentState
    * Intune enrollment state of the Windows autopilot device. Possible values are: unknown, enrolled, pendingReset, failed, notContacted.
    *
    * @return EnrollmentState|null The enrollmentState
    */
    public function getEnrollmentState()
    {
        if (array_key_exists("enrollmentState", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentState"], "\Microsoft\Graph\Model\EnrollmentState") || is_null($this->_propDict["enrollmentState"])) {
                return $this->_propDict["enrollmentState"];
            } else {
                $this->_propDict["enrollmentState"] = new EnrollmentState($this->_propDict["enrollmentState"]);
                return $this->_propDict["enrollmentState"];
            }
        }
        return null;
    }

    /**
    * Sets the enrollmentState
    * Intune enrollment state of the Windows autopilot device. Possible values are: unknown, enrolled, pendingReset, failed, notContacted.
    *
    * @param EnrollmentState $val The enrollmentState
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setEnrollmentState($val)
    {
        $this->_propDict["enrollmentState"] = $val;
        return $this;
    }

    /**
    * Gets the groupTag
    * Group Tag of the Windows autopilot device.
    *
    * @return string|null The groupTag
    */
    public function getGroupTag()
    {
        if (array_key_exists("groupTag", $this->_propDict)) {
            return $this->_propDict["groupTag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupTag
    * Group Tag of the Windows autopilot device.
    *
    * @param string $val The groupTag
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setGroupTag($val)
    {
        $this->_propDict["groupTag"] = $val;
        return $this;
    }

    /**
    * Gets the lastContactedDateTime
    * Intune Last Contacted Date Time of the Windows autopilot device.
    *
    * @return \DateTime|null The lastContactedDateTime
    */
    public function getLastContactedDateTime()
    {
        if (array_key_exists("lastContactedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastContactedDateTime"], "\DateTime") || is_null($this->_propDict["lastContactedDateTime"])) {
                return $this->_propDict["lastContactedDateTime"];
            } else {
                $this->_propDict["lastContactedDateTime"] = new \DateTime($this->_propDict["lastContactedDateTime"]);
                return $this->_propDict["lastContactedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastContactedDateTime
    * Intune Last Contacted Date Time of the Windows autopilot device.
    *
    * @param \DateTime $val The lastContactedDateTime
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setLastContactedDateTime($val)
    {
        $this->_propDict["lastContactedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the managedDeviceId
    * Managed Device ID
    *
    * @return string|null The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceId
    * Managed Device ID
    *
    * @param string $val The managedDeviceId
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the manufacturer
    * Oem manufacturer of the Windows autopilot device.
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
    * Oem manufacturer of the Windows autopilot device.
    *
    * @param string $val The manufacturer
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the model
    * Model name of the Windows autopilot device.
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
    * Model name of the Windows autopilot device.
    *
    * @param string $val The model
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }

    /**
    * Gets the productKey
    * Product Key of the Windows autopilot device.
    *
    * @return string|null The productKey
    */
    public function getProductKey()
    {
        if (array_key_exists("productKey", $this->_propDict)) {
            return $this->_propDict["productKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productKey
    * Product Key of the Windows autopilot device.
    *
    * @param string $val The productKey
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setProductKey($val)
    {
        $this->_propDict["productKey"] = $val;
        return $this;
    }

    /**
    * Gets the purchaseOrderIdentifier
    * Purchase Order Identifier of the Windows autopilot device.
    *
    * @return string|null The purchaseOrderIdentifier
    */
    public function getPurchaseOrderIdentifier()
    {
        if (array_key_exists("purchaseOrderIdentifier", $this->_propDict)) {
            return $this->_propDict["purchaseOrderIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the purchaseOrderIdentifier
    * Purchase Order Identifier of the Windows autopilot device.
    *
    * @param string $val The purchaseOrderIdentifier
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setPurchaseOrderIdentifier($val)
    {
        $this->_propDict["purchaseOrderIdentifier"] = $val;
        return $this;
    }

    /**
    * Gets the resourceName
    * Resource Name.
    *
    * @return string|null The resourceName
    */
    public function getResourceName()
    {
        if (array_key_exists("resourceName", $this->_propDict)) {
            return $this->_propDict["resourceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceName
    * Resource Name.
    *
    * @param string $val The resourceName
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setResourceName($val)
    {
        $this->_propDict["resourceName"] = $val;
        return $this;
    }

    /**
    * Gets the serialNumber
    * Serial number of the Windows autopilot device.
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
    * Serial number of the Windows autopilot device.
    *
    * @param string $val The serialNumber
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }

    /**
    * Gets the skuNumber
    * SKU Number
    *
    * @return string|null The skuNumber
    */
    public function getSkuNumber()
    {
        if (array_key_exists("skuNumber", $this->_propDict)) {
            return $this->_propDict["skuNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skuNumber
    * SKU Number
    *
    * @param string $val The skuNumber
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setSkuNumber($val)
    {
        $this->_propDict["skuNumber"] = $val;
        return $this;
    }

    /**
    * Gets the systemFamily
    * System Family
    *
    * @return string|null The systemFamily
    */
    public function getSystemFamily()
    {
        if (array_key_exists("systemFamily", $this->_propDict)) {
            return $this->_propDict["systemFamily"];
        } else {
            return null;
        }
    }

    /**
    * Sets the systemFamily
    * System Family
    *
    * @param string $val The systemFamily
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setSystemFamily($val)
    {
        $this->_propDict["systemFamily"] = $val;
        return $this;
    }

    /**
    * Gets the userPrincipalName
    * User Principal Name.
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * User Principal Name.
    *
    * @param string $val The userPrincipalName
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

}
