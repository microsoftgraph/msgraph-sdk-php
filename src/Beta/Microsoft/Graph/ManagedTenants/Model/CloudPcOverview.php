<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcOverview File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* CloudPcOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcOverview implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;
    
    /**
    * Construct a new CloudPcOverview
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the CloudPcOverview
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the lastRefreshedDateTime
    *
    * @return \DateTime|null The lastRefreshedDateTime
    */
    public function getLastRefreshedDateTime()
    {
        if (array_key_exists("lastRefreshedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRefreshedDateTime"], "\DateTime") || is_null($this->_propDict["lastRefreshedDateTime"])) {
                return $this->_propDict["lastRefreshedDateTime"];
            } else {
                $this->_propDict["lastRefreshedDateTime"] = new \DateTime($this->_propDict["lastRefreshedDateTime"]);
                return $this->_propDict["lastRefreshedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastRefreshedDateTime
    *
    * @param \DateTime $val The lastRefreshedDateTime
    *
    * @return CloudPcOverview
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcConnectionStatusFailed
    *
    * @return int|null The numberOfCloudPcConnectionStatusFailed
    */
    public function getNumberOfCloudPcConnectionStatusFailed()
    {
        if (array_key_exists("numberOfCloudPcConnectionStatusFailed", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcConnectionStatusFailed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcConnectionStatusFailed
    *
    * @param int $val The numberOfCloudPcConnectionStatusFailed
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcConnectionStatusFailed($val)
    {
        $this->_propDict["numberOfCloudPcConnectionStatusFailed"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcConnectionStatusPassed
    *
    * @return int|null The numberOfCloudPcConnectionStatusPassed
    */
    public function getNumberOfCloudPcConnectionStatusPassed()
    {
        if (array_key_exists("numberOfCloudPcConnectionStatusPassed", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcConnectionStatusPassed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcConnectionStatusPassed
    *
    * @param int $val The numberOfCloudPcConnectionStatusPassed
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcConnectionStatusPassed($val)
    {
        $this->_propDict["numberOfCloudPcConnectionStatusPassed"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcConnectionStatusPending
    *
    * @return int|null The numberOfCloudPcConnectionStatusPending
    */
    public function getNumberOfCloudPcConnectionStatusPending()
    {
        if (array_key_exists("numberOfCloudPcConnectionStatusPending", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcConnectionStatusPending"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcConnectionStatusPending
    *
    * @param int $val The numberOfCloudPcConnectionStatusPending
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcConnectionStatusPending($val)
    {
        $this->_propDict["numberOfCloudPcConnectionStatusPending"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcConnectionStatusRunning
    *
    * @return int|null The numberOfCloudPcConnectionStatusRunning
    */
    public function getNumberOfCloudPcConnectionStatusRunning()
    {
        if (array_key_exists("numberOfCloudPcConnectionStatusRunning", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcConnectionStatusRunning"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcConnectionStatusRunning
    *
    * @param int $val The numberOfCloudPcConnectionStatusRunning
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcConnectionStatusRunning($val)
    {
        $this->_propDict["numberOfCloudPcConnectionStatusRunning"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcConnectionStatusUnkownFutureValue
    *
    * @return int|null The numberOfCloudPcConnectionStatusUnkownFutureValue
    */
    public function getNumberOfCloudPcConnectionStatusUnkownFutureValue()
    {
        if (array_key_exists("numberOfCloudPcConnectionStatusUnkownFutureValue", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcConnectionStatusUnkownFutureValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcConnectionStatusUnkownFutureValue
    *
    * @param int $val The numberOfCloudPcConnectionStatusUnkownFutureValue
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcConnectionStatusUnkownFutureValue($val)
    {
        $this->_propDict["numberOfCloudPcConnectionStatusUnkownFutureValue"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcStatusDeprovisioning
    *
    * @return int|null The numberOfCloudPcStatusDeprovisioning
    */
    public function getNumberOfCloudPcStatusDeprovisioning()
    {
        if (array_key_exists("numberOfCloudPcStatusDeprovisioning", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusDeprovisioning"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcStatusDeprovisioning
    *
    * @param int $val The numberOfCloudPcStatusDeprovisioning
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusDeprovisioning($val)
    {
        $this->_propDict["numberOfCloudPcStatusDeprovisioning"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcStatusFailed
    *
    * @return int|null The numberOfCloudPcStatusFailed
    */
    public function getNumberOfCloudPcStatusFailed()
    {
        if (array_key_exists("numberOfCloudPcStatusFailed", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusFailed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcStatusFailed
    *
    * @param int $val The numberOfCloudPcStatusFailed
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusFailed($val)
    {
        $this->_propDict["numberOfCloudPcStatusFailed"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcStatusInGracePeriod
    *
    * @return int|null The numberOfCloudPcStatusInGracePeriod
    */
    public function getNumberOfCloudPcStatusInGracePeriod()
    {
        if (array_key_exists("numberOfCloudPcStatusInGracePeriod", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusInGracePeriod"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcStatusInGracePeriod
    *
    * @param int $val The numberOfCloudPcStatusInGracePeriod
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusInGracePeriod($val)
    {
        $this->_propDict["numberOfCloudPcStatusInGracePeriod"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcStatusNotProvisioned
    *
    * @return int|null The numberOfCloudPcStatusNotProvisioned
    */
    public function getNumberOfCloudPcStatusNotProvisioned()
    {
        if (array_key_exists("numberOfCloudPcStatusNotProvisioned", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusNotProvisioned"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcStatusNotProvisioned
    *
    * @param int $val The numberOfCloudPcStatusNotProvisioned
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusNotProvisioned($val)
    {
        $this->_propDict["numberOfCloudPcStatusNotProvisioned"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcStatusProvisioned
    *
    * @return int|null The numberOfCloudPcStatusProvisioned
    */
    public function getNumberOfCloudPcStatusProvisioned()
    {
        if (array_key_exists("numberOfCloudPcStatusProvisioned", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusProvisioned"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcStatusProvisioned
    *
    * @param int $val The numberOfCloudPcStatusProvisioned
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusProvisioned($val)
    {
        $this->_propDict["numberOfCloudPcStatusProvisioned"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcStatusProvisioning
    *
    * @return int|null The numberOfCloudPcStatusProvisioning
    */
    public function getNumberOfCloudPcStatusProvisioning()
    {
        if (array_key_exists("numberOfCloudPcStatusProvisioning", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusProvisioning"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcStatusProvisioning
    *
    * @param int $val The numberOfCloudPcStatusProvisioning
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusProvisioning($val)
    {
        $this->_propDict["numberOfCloudPcStatusProvisioning"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcStatusUnknown
    *
    * @return int|null The numberOfCloudPcStatusUnknown
    */
    public function getNumberOfCloudPcStatusUnknown()
    {
        if (array_key_exists("numberOfCloudPcStatusUnknown", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusUnknown"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcStatusUnknown
    *
    * @param int $val The numberOfCloudPcStatusUnknown
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusUnknown($val)
    {
        $this->_propDict["numberOfCloudPcStatusUnknown"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfCloudPcStatusUpgrading
    *
    * @return int|null The numberOfCloudPcStatusUpgrading
    */
    public function getNumberOfCloudPcStatusUpgrading()
    {
        if (array_key_exists("numberOfCloudPcStatusUpgrading", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusUpgrading"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfCloudPcStatusUpgrading
    *
    * @param int $val The numberOfCloudPcStatusUpgrading
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusUpgrading($val)
    {
        $this->_propDict["numberOfCloudPcStatusUpgrading"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the tenantDisplayName
    *
    * @return string|null The tenantDisplayName
    */
    public function getTenantDisplayName()
    {
        if (array_key_exists("tenantDisplayName", $this->_propDict)) {
            return $this->_propDict["tenantDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantDisplayName
    *
    * @param string $val The tenantDisplayName
    *
    * @return CloudPcOverview
    */
    public function setTenantDisplayName($val)
    {
        $this->_propDict["tenantDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantId
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return CloudPcOverview
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalCloudPcConnectionStatus
    *
    * @return int|null The totalCloudPcConnectionStatus
    */
    public function getTotalCloudPcConnectionStatus()
    {
        if (array_key_exists("totalCloudPcConnectionStatus", $this->_propDict)) {
            return $this->_propDict["totalCloudPcConnectionStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalCloudPcConnectionStatus
    *
    * @param int $val The totalCloudPcConnectionStatus
    *
    * @return CloudPcOverview
    */
    public function setTotalCloudPcConnectionStatus($val)
    {
        $this->_propDict["totalCloudPcConnectionStatus"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalCloudPcStatus
    *
    * @return int|null The totalCloudPcStatus
    */
    public function getTotalCloudPcStatus()
    {
        if (array_key_exists("totalCloudPcStatus", $this->_propDict)) {
            return $this->_propDict["totalCloudPcStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalCloudPcStatus
    *
    * @param int $val The totalCloudPcStatus
    *
    * @return CloudPcOverview
    */
    public function setTotalCloudPcStatus($val)
    {
        $this->_propDict["totalCloudPcStatus"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the ODataType
    *
    * @return string The ODataType
    */
    public function getODataType()
    {
        return $this->_propDict["@odata.type"];
    }
    
    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return CloudPcOverview
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }
    
    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            }
        }
        return $serializableProperties;
    }
}
