<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcOnPremisesConnection File
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
* CloudPcOnPremisesConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcOnPremisesConnection extends Entity
{
    /**
    * Gets the adDomainName
    * The fully qualified domain name (FQDN) of the Active Directory domain you want to join. Optional.
    *
    * @return string|null The adDomainName
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
    * The fully qualified domain name (FQDN) of the Active Directory domain you want to join. Optional.
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
    * The password associated with adDomainUsername.
    *
    * @return string|null The adDomainPassword
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
    * The password associated with adDomainUsername.
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
    * The username of an Active Directory account (user or service account) that has permissions to create computer objects in Active Directory. Required format: admin@contoso.com. Optional.
    *
    * @return string|null The adDomainUsername
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
    * The username of an Active Directory account (user or service account) that has permissions to create computer objects in Active Directory. Required format: admin@contoso.com. Optional.
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
    * Gets the alternateResourceUrl
    * The interface URL of the partner service's resource that links to this Azure network connection. Returned only on $select.
    *
    * @return string|null The alternateResourceUrl
    */
    public function getAlternateResourceUrl()
    {
        if (array_key_exists("alternateResourceUrl", $this->_propDict)) {
            return $this->_propDict["alternateResourceUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alternateResourceUrl
    * The interface URL of the partner service's resource that links to this Azure network connection. Returned only on $select.
    *
    * @param string $val The alternateResourceUrl
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setAlternateResourceUrl($val)
    {
        $this->_propDict["alternateResourceUrl"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the Azure network connection.
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
    * The display name for the Azure network connection.
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
    * The status of the most recent health check done on the Azure network connection. For example, if status is passed, the Azure network connection has passed all checks run by the service. Possible values are: pending, running, passed, failed,  warning, informational, unknownFutureValue. Read-only.
    *
    * @return CloudPcOnPremisesConnectionStatus|null The healthCheckStatus
    */
    public function getHealthCheckStatus()
    {
        if (array_key_exists("healthCheckStatus", $this->_propDict)) {
            if (is_a($this->_propDict["healthCheckStatus"], "\Beta\Microsoft\Graph\Model\CloudPcOnPremisesConnectionStatus") || is_null($this->_propDict["healthCheckStatus"])) {
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
    * The status of the most recent health check done on the Azure network connection. For example, if status is passed, the Azure network connection has passed all checks run by the service. Possible values are: pending, running, passed, failed,  warning, informational, unknownFutureValue. Read-only.
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
    * The details of the connection's health checks and the corresponding results. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
    *
    * @return CloudPcOnPremisesConnectionStatusDetails|null The healthCheckStatusDetails
    */
    public function getHealthCheckStatusDetails()
    {
        if (array_key_exists("healthCheckStatusDetails", $this->_propDict)) {
            if (is_a($this->_propDict["healthCheckStatusDetails"], "\Beta\Microsoft\Graph\Model\CloudPcOnPremisesConnectionStatusDetails") || is_null($this->_propDict["healthCheckStatusDetails"])) {
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
    * The details of the connection's health checks and the corresponding results. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
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
    * When true, the Azure network connection is in use. When false, the connection isn't in use. You can't delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
    *
    * @return bool|null The inUse
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
    * When true, the Azure network connection is in use. When false, the connection isn't in use. You can't delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
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
    * Gets the managedBy
    * Specifies which services manage the Azure network connection. Possible values are: windows365, devBox, unknownFutureValue, rpaBox. You must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: rpaBox. Read-only.
    *
    * @return CloudPcManagementService|null The managedBy
    */
    public function getManagedBy()
    {
        if (array_key_exists("managedBy", $this->_propDict)) {
            if (is_a($this->_propDict["managedBy"], "\Beta\Microsoft\Graph\Model\CloudPcManagementService") || is_null($this->_propDict["managedBy"])) {
                return $this->_propDict["managedBy"];
            } else {
                $this->_propDict["managedBy"] = new CloudPcManagementService($this->_propDict["managedBy"]);
                return $this->_propDict["managedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the managedBy
    * Specifies which services manage the Azure network connection. Possible values are: windows365, devBox, unknownFutureValue, rpaBox. You must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: rpaBox. Read-only.
    *
    * @param CloudPcManagementService $val The managedBy
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setManagedBy($val)
    {
        $this->_propDict["managedBy"] = $val;
        return $this;
    }

    /**
    * Gets the organizationalUnit
    * The organizational unit (OU) in which the computer account is created. If left null, the OU that’s configured as the default (a well-known computer object container) in your Active Directory domain (OU) is used. Optional.
    *
    * @return string|null The organizationalUnit
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
    * The organizational unit (OU) in which the computer account is created. If left null, the OU that’s configured as the default (a well-known computer object container) in your Active Directory domain (OU) is used. Optional.
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
    * The ID of the target resource group. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}.
    *
    * @return string|null The resourceGroupId
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
    * The ID of the target resource group. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}.
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
    * The ID of the target subnet. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}.
    *
    * @return string|null The subnetId
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
    * The ID of the target subnet. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}.
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
    * The ID of the target Azure subscription that’s associated with your tenant.
    *
    * @return string|null The subscriptionId
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
    * The ID of the target Azure subscription that’s associated with your tenant.
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
    * The name of the target Azure subscription. Read-only.
    *
    * @return string|null The subscriptionName
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
    * The name of the target Azure subscription. Read-only.
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
    * Gets the type
    * Specifies how the provisioned Cloud PC is joined to Microsoft Entra ID. Default value is hybridAzureADJoin. Possible values are: azureADJoin, hybridAzureADJoin, unknownFutureValue.
    *
    * @return CloudPcOnPremisesConnectionType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\CloudPcOnPremisesConnectionType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new CloudPcOnPremisesConnectionType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * Specifies how the provisioned Cloud PC is joined to Microsoft Entra ID. Default value is hybridAzureADJoin. Possible values are: azureADJoin, hybridAzureADJoin, unknownFutureValue.
    *
    * @param CloudPcOnPremisesConnectionType $val The type
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

    /**
    * Gets the virtualNetworkId
    * The ID of the target virtual network. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}.
    *
    * @return string|null The virtualNetworkId
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
    * The ID of the target virtual network. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}.
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

    /**
    * Gets the virtualNetworkLocation
    * Indicates resource location of the virtual target network. Read-only, computed value.
    *
    * @return string|null The virtualNetworkLocation
    */
    public function getVirtualNetworkLocation()
    {
        if (array_key_exists("virtualNetworkLocation", $this->_propDict)) {
            return $this->_propDict["virtualNetworkLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the virtualNetworkLocation
    * Indicates resource location of the virtual target network. Read-only, computed value.
    *
    * @param string $val The virtualNetworkLocation
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setVirtualNetworkLocation($val)
    {
        $this->_propDict["virtualNetworkLocation"] = $val;
        return $this;
    }

}
