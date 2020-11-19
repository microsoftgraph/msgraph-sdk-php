<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcOnPremisesConnection File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* CloudPcOnPremisesConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcOnPremisesConnection extends Entity
{
    /**
    * Gets the adDomainName
    *
    * @return string The adDomainName
    */
    public function getAdDomainName()
    {
        if (array_key_exists("adDomainName", $this->_propDict)) {
            return $this->_propDict["adDomainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the adDomainName
    *
    * @param string $val The adDomainName
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setAdDomainName($val)
    {
        $this->_propDict["adDomainName"] = $val;
        return $this;
    }
    
    /**
    * Gets the adDomainPassword
    *
    * @return string The adDomainPassword
    */
    public function getAdDomainPassword()
    {
        if (array_key_exists("adDomainPassword", $this->_propDict)) {
            return $this->_propDict["adDomainPassword"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the adDomainPassword
    *
    * @param string $val The adDomainPassword
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setAdDomainPassword($val)
    {
        $this->_propDict["adDomainPassword"] = $val;
        return $this;
    }
    
    /**
    * Gets the adDomainUsername
    *
    * @return string The adDomainUsername
    */
    public function getAdDomainUsername()
    {
        if (array_key_exists("adDomainUsername", $this->_propDict)) {
            return $this->_propDict["adDomainUsername"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the adDomainUsername
    *
    * @param string $val The adDomainUsername
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setAdDomainUsername($val)
    {
        $this->_propDict["adDomainUsername"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
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
    *
    * @param string $val The displayName
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the healthCheckStatus
    *
    * @return CloudPcOnPremisesConnectionStatus The healthCheckStatus
    */
    public function getHealthCheckStatus()
    {
        if (array_key_exists("healthCheckStatus", $this->_propDict)) {
            if (is_a($this->_propDict["healthCheckStatus"], "Beta\Microsoft\Graph\Model\CloudPcOnPremisesConnectionStatus")) {
                return $this->_propDict["healthCheckStatus"];
            } else {
                $this->_propDict["healthCheckStatus"] = new CloudPcOnPremisesConnectionStatus($this->_propDict["healthCheckStatus"]);
                return $this->_propDict["healthCheckStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the healthCheckStatus
    *
    * @param CloudPcOnPremisesConnectionStatus $val The healthCheckStatus
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setHealthCheckStatus($val)
    {
        $this->_propDict["healthCheckStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the healthCheckStatusDetails
    *
    * @return CloudPcOnPremisesConnectionStatusDetails The healthCheckStatusDetails
    */
    public function getHealthCheckStatusDetails()
    {
        if (array_key_exists("healthCheckStatusDetails", $this->_propDict)) {
            if (is_a($this->_propDict["healthCheckStatusDetails"], "Beta\Microsoft\Graph\Model\CloudPcOnPremisesConnectionStatusDetails")) {
                return $this->_propDict["healthCheckStatusDetails"];
            } else {
                $this->_propDict["healthCheckStatusDetails"] = new CloudPcOnPremisesConnectionStatusDetails($this->_propDict["healthCheckStatusDetails"]);
                return $this->_propDict["healthCheckStatusDetails"];
            }
        }
        return null;
    }
    
    /**
    * Sets the healthCheckStatusDetails
    *
    * @param CloudPcOnPremisesConnectionStatusDetails $val The healthCheckStatusDetails
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setHealthCheckStatusDetails($val)
    {
        $this->_propDict["healthCheckStatusDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the inUse
    *
    * @return bool The inUse
    */
    public function getInUse()
    {
        if (array_key_exists("inUse", $this->_propDict)) {
            return $this->_propDict["inUse"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the inUse
    *
    * @param bool $val The inUse
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setInUse($val)
    {
        $this->_propDict["inUse"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the organizationalUnit
    *
    * @return string The organizationalUnit
    */
    public function getOrganizationalUnit()
    {
        if (array_key_exists("organizationalUnit", $this->_propDict)) {
            return $this->_propDict["organizationalUnit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizationalUnit
    *
    * @param string $val The organizationalUnit
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setOrganizationalUnit($val)
    {
        $this->_propDict["organizationalUnit"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceGroupId
    *
    * @return string The resourceGroupId
    */
    public function getResourceGroupId()
    {
        if (array_key_exists("resourceGroupId", $this->_propDict)) {
            return $this->_propDict["resourceGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceGroupId
    *
    * @param string $val The resourceGroupId
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setResourceGroupId($val)
    {
        $this->_propDict["resourceGroupId"] = $val;
        return $this;
    }
    
    /**
    * Gets the subnetId
    *
    * @return string The subnetId
    */
    public function getSubnetId()
    {
        if (array_key_exists("subnetId", $this->_propDict)) {
            return $this->_propDict["subnetId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subnetId
    *
    * @param string $val The subnetId
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setSubnetId($val)
    {
        $this->_propDict["subnetId"] = $val;
        return $this;
    }
    
    /**
    * Gets the subscriptionId
    *
    * @return string The subscriptionId
    */
    public function getSubscriptionId()
    {
        if (array_key_exists("subscriptionId", $this->_propDict)) {
            return $this->_propDict["subscriptionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subscriptionId
    *
    * @param string $val The subscriptionId
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setSubscriptionId($val)
    {
        $this->_propDict["subscriptionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the subscriptionName
    *
    * @return string The subscriptionName
    */
    public function getSubscriptionName()
    {
        if (array_key_exists("subscriptionName", $this->_propDict)) {
            return $this->_propDict["subscriptionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subscriptionName
    *
    * @param string $val The subscriptionName
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setSubscriptionName($val)
    {
        $this->_propDict["subscriptionName"] = $val;
        return $this;
    }
    
    /**
    * Gets the virtualNetworkId
    *
    * @return string The virtualNetworkId
    */
    public function getVirtualNetworkId()
    {
        if (array_key_exists("virtualNetworkId", $this->_propDict)) {
            return $this->_propDict["virtualNetworkId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the virtualNetworkId
    *
    * @param string $val The virtualNetworkId
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setVirtualNetworkId($val)
    {
        $this->_propDict["virtualNetworkId"] = $val;
        return $this;
    }
    
}