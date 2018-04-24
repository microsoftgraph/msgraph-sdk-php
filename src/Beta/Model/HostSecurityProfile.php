<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostSecurityProfile File
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
* HostSecurityProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class HostSecurityProfile extends Entity
{
    /**
    * Gets the azureSubscriptionId
    *
    * @return string The azureSubscriptionId
    */
    public function getAzureSubscriptionId()
    {
        if (array_key_exists("azureSubscriptionId", $this->_propDict)) {
            return $this->_propDict["azureSubscriptionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureSubscriptionId
    *
    * @param string $val The azureSubscriptionId
    *
    * @return HostSecurityProfile
    */
    public function setAzureSubscriptionId($val)
    {
        $this->_propDict["azureSubscriptionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureTenantId
    *
    * @return string The azureTenantId
    */
    public function getAzureTenantId()
    {
        if (array_key_exists("azureTenantId", $this->_propDict)) {
            return $this->_propDict["azureTenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureTenantId
    *
    * @param string $val The azureTenantId
    *
    * @return HostSecurityProfile
    */
    public function setAzureTenantId($val)
    {
        $this->_propDict["azureTenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return HostSecurityProfile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the fqdn
    *
    * @return string The fqdn
    */
    public function getFqdn()
    {
        if (array_key_exists("fqdn", $this->_propDict)) {
            return $this->_propDict["fqdn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fqdn
    *
    * @param string $val The fqdn
    *
    * @return HostSecurityProfile
    */
    public function setFqdn($val)
    {
        $this->_propDict["fqdn"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAzureAdJoined
    *
    * @return bool The isAzureAdJoined
    */
    public function getIsAzureAdJoined()
    {
        if (array_key_exists("isAzureAdJoined", $this->_propDict)) {
            return $this->_propDict["isAzureAdJoined"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAzureAdJoined
    *
    * @param bool $val The isAzureAdJoined
    *
    * @return HostSecurityProfile
    */
    public function setIsAzureAdJoined($val)
    {
        $this->_propDict["isAzureAdJoined"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isAzureAdRegistered
    *
    * @return bool The isAzureAdRegistered
    */
    public function getIsAzureAdRegistered()
    {
        if (array_key_exists("isAzureAdRegistered", $this->_propDict)) {
            return $this->_propDict["isAzureAdRegistered"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAzureAdRegistered
    *
    * @param bool $val The isAzureAdRegistered
    *
    * @return HostSecurityProfile
    */
    public function setIsAzureAdRegistered($val)
    {
        $this->_propDict["isAzureAdRegistered"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isHybridAzureDomainJoined
    *
    * @return bool The isHybridAzureDomainJoined
    */
    public function getIsHybridAzureDomainJoined()
    {
        if (array_key_exists("isHybridAzureDomainJoined", $this->_propDict)) {
            return $this->_propDict["isHybridAzureDomainJoined"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isHybridAzureDomainJoined
    *
    * @param bool $val The isHybridAzureDomainJoined
    *
    * @return HostSecurityProfile
    */
    public function setIsHybridAzureDomainJoined($val)
    {
        $this->_propDict["isHybridAzureDomainJoined"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return HostSecurityProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the logicalName
    *
    * @return string The logicalName
    */
    public function getLogicalName()
    {
        if (array_key_exists("logicalName", $this->_propDict)) {
            return $this->_propDict["logicalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the logicalName
    *
    * @param string $val The logicalName
    *
    * @return HostSecurityProfile
    */
    public function setLogicalName($val)
    {
        $this->_propDict["logicalName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the logonUsers
     *
     * @return array The logonUsers
     */
    public function getLogonUsers()
    {
        if (array_key_exists("logonUsers", $this->_propDict)) {
           return $this->_propDict["logonUsers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the logonUsers
    *
    * @param LogonUser $val The logonUsers
    *
    * @return HostSecurityProfile
    */
    public function setLogonUsers($val)
    {
		$this->_propDict["logonUsers"] = $val;
        return $this;
    }
    
    /**
    * Gets the netBiosName
    *
    * @return string The netBiosName
    */
    public function getNetBiosName()
    {
        if (array_key_exists("netBiosName", $this->_propDict)) {
            return $this->_propDict["netBiosName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the netBiosName
    *
    * @param string $val The netBiosName
    *
    * @return HostSecurityProfile
    */
    public function setNetBiosName($val)
    {
        $this->_propDict["netBiosName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the networkInterfaces
     *
     * @return array The networkInterfaces
     */
    public function getNetworkInterfaces()
    {
        if (array_key_exists("networkInterfaces", $this->_propDict)) {
           return $this->_propDict["networkInterfaces"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the networkInterfaces
    *
    * @param NetworkInterface $val The networkInterfaces
    *
    * @return HostSecurityProfile
    */
    public function setNetworkInterfaces($val)
    {
		$this->_propDict["networkInterfaces"] = $val;
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
    * @return HostSecurityProfile
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentHost
    *
    * @return string The parentHost
    */
    public function getParentHost()
    {
        if (array_key_exists("parentHost", $this->_propDict)) {
            return $this->_propDict["parentHost"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentHost
    *
    * @param string $val The parentHost
    *
    * @return HostSecurityProfile
    */
    public function setParentHost($val)
    {
        $this->_propDict["parentHost"] = $val;
        return $this;
    }
    
    /**
    * Gets the platform
    *
    * @return string The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            return $this->_propDict["platform"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the platform
    *
    * @param string $val The platform
    *
    * @return HostSecurityProfile
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskScore
    *
    * @return string The riskScore
    */
    public function getRiskScore()
    {
        if (array_key_exists("riskScore", $this->_propDict)) {
            return $this->_propDict["riskScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the riskScore
    *
    * @param string $val The riskScore
    *
    * @return HostSecurityProfile
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }
    
    /**
    * Gets the tags
    *
    * @return string The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tags
    *
    * @param string $val The tags
    *
    * @return HostSecurityProfile
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the vendorInformation
    *
    * @return SecurityVendorInformation The vendorInformation
    */
    public function getVendorInformation()
    {
        if (array_key_exists("vendorInformation", $this->_propDict)) {
            if (is_a($this->_propDict["vendorInformation"], "Microsoft\Graph\Beta\Model\SecurityVendorInformation")) {
                return $this->_propDict["vendorInformation"];
            } else {
                $this->_propDict["vendorInformation"] = new SecurityVendorInformation($this->_propDict["vendorInformation"]);
                return $this->_propDict["vendorInformation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the vendorInformation
    *
    * @param SecurityVendorInformation $val The vendorInformation
    *
    * @return HostSecurityProfile
    */
    public function setVendorInformation($val)
    {
        $this->_propDict["vendorInformation"] = $val;
        return $this;
    }
    
}