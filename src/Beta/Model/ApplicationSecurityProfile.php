<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationSecurityProfile File
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
* ApplicationSecurityProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ApplicationSecurityProfile extends Entity
{

     /** 
     * Gets the activityGroupStates
     *
     * @return array The activityGroupStates
     */
    public function getActivityGroupStates()
    {
        if (array_key_exists("activityGroupStates", $this->_propDict)) {
           return $this->_propDict["activityGroupStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the activityGroupStates
    *
    * @param ActivityGroupState $val The activityGroupStates
    *
    * @return ApplicationSecurityProfile
    */
    public function setActivityGroupStates($val)
    {
		$this->_propDict["activityGroupStates"] = $val;
        return $this;
    }
    
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
    * @return ApplicationSecurityProfile
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
    * @return ApplicationSecurityProfile
    */
    public function setAzureTenantId($val)
    {
        $this->_propDict["azureTenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateThumbprint
    *
    * @return string The certificateThumbprint
    */
    public function getCertificateThumbprint()
    {
        if (array_key_exists("certificateThumbprint", $this->_propDict)) {
            return $this->_propDict["certificateThumbprint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateThumbprint
    *
    * @param string $val The certificateThumbprint
    *
    * @return ApplicationSecurityProfile
    */
    public function setCertificateThumbprint($val)
    {
        $this->_propDict["certificateThumbprint"] = $val;
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
    * @return ApplicationSecurityProfile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deploymentPackageUrl
    *
    * @return string The deploymentPackageUrl
    */
    public function getDeploymentPackageUrl()
    {
        if (array_key_exists("deploymentPackageUrl", $this->_propDict)) {
            return $this->_propDict["deploymentPackageUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deploymentPackageUrl
    *
    * @param string $val The deploymentPackageUrl
    *
    * @return ApplicationSecurityProfile
    */
    public function setDeploymentPackageUrl($val)
    {
        $this->_propDict["deploymentPackageUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the isSigned
    *
    * @return bool The isSigned
    */
    public function getIsSigned()
    {
        if (array_key_exists("isSigned", $this->_propDict)) {
            return $this->_propDict["isSigned"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSigned
    *
    * @param bool $val The isSigned
    *
    * @return ApplicationSecurityProfile
    */
    public function setIsSigned($val)
    {
        $this->_propDict["isSigned"] = boolval($val);
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
    * @return ApplicationSecurityProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the malwareStates
     *
     * @return array The malwareStates
     */
    public function getMalwareStates()
    {
        if (array_key_exists("malwareStates", $this->_propDict)) {
           return $this->_propDict["malwareStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the malwareStates
    *
    * @param MalwareState $val The malwareStates
    *
    * @return ApplicationSecurityProfile
    */
    public function setMalwareStates($val)
    {
		$this->_propDict["malwareStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the manifest
    *
    * @return string The manifest
    */
    public function getManifest()
    {
        if (array_key_exists("manifest", $this->_propDict)) {
            return $this->_propDict["manifest"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the manifest
    *
    * @param string $val The manifest
    *
    * @return ApplicationSecurityProfile
    */
    public function setManifest($val)
    {
        $this->_propDict["manifest"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return ApplicationSecurityProfile
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissionsRequired
    *
    * @return ApplicationPermissionsRequired The permissionsRequired
    */
    public function getPermissionsRequired()
    {
        if (array_key_exists("permissionsRequired", $this->_propDict)) {
            if (is_a($this->_propDict["permissionsRequired"], "Microsoft\Graph\Beta\Model\ApplicationPermissionsRequired")) {
                return $this->_propDict["permissionsRequired"];
            } else {
                $this->_propDict["permissionsRequired"] = new ApplicationPermissionsRequired($this->_propDict["permissionsRequired"]);
                return $this->_propDict["permissionsRequired"];
            }
        }
        return null;
    }
    
    /**
    * Sets the permissionsRequired
    *
    * @param ApplicationPermissionsRequired $val The permissionsRequired
    *
    * @return ApplicationSecurityProfile
    */
    public function setPermissionsRequired($val)
    {
        $this->_propDict["permissionsRequired"] = $val;
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
    * @return ApplicationSecurityProfile
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisher
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publisher
    *
    * @param string $val The publisher
    *
    * @return ApplicationSecurityProfile
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
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
    * @return ApplicationSecurityProfile
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
    * @return ApplicationSecurityProfile
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the type
    *
    * @param string $val The type
    *
    * @return ApplicationSecurityProfile
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
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
    * @return ApplicationSecurityProfile
    */
    public function setVendorInformation($val)
    {
        $this->_propDict["vendorInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the vulnerabilityStates
     *
     * @return array The vulnerabilityStates
     */
    public function getVulnerabilityStates()
    {
        if (array_key_exists("vulnerabilityStates", $this->_propDict)) {
           return $this->_propDict["vulnerabilityStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the vulnerabilityStates
    *
    * @param VulnerabilityState $val The vulnerabilityStates
    *
    * @return ApplicationSecurityProfile
    */
    public function setVulnerabilityStates($val)
    {
		$this->_propDict["vulnerabilityStates"] = $val;
        return $this;
    }
    
}