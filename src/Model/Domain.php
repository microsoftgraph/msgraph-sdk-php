<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Domain File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Domain class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Domain extends Entity
{
    /**
    * Gets the authenticationType
    *
    * @return string The authenticationType
    */
    public function getAuthenticationType()
    {
        if (array_key_exists("authenticationType", $this->_propDict)) {
            return $this->_propDict["authenticationType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authenticationType
    *
    * @param string $val The authenticationType
    *
    * @return Domain
    */
    public function setAuthenticationType($val)
    {
        $this->_propDict["authenticationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the availabilityStatus
    *
    * @return string The availabilityStatus
    */
    public function getAvailabilityStatus()
    {
        if (array_key_exists("availabilityStatus", $this->_propDict)) {
            return $this->_propDict["availabilityStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the availabilityStatus
    *
    * @param string $val The availabilityStatus
    *
    * @return Domain
    */
    public function setAvailabilityStatus($val)
    {
        $this->_propDict["availabilityStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAdminManaged
    *
    * @return bool The isAdminManaged
    */
    public function getIsAdminManaged()
    {
        if (array_key_exists("isAdminManaged", $this->_propDict)) {
            return $this->_propDict["isAdminManaged"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAdminManaged
    *
    * @param bool $val The isAdminManaged
    *
    * @return Domain
    */
    public function setIsAdminManaged($val)
    {
        $this->_propDict["isAdminManaged"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isDefault
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    *
    * @param bool $val The isDefault
    *
    * @return Domain
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isInitial
    *
    * @return bool The isInitial
    */
    public function getIsInitial()
    {
        if (array_key_exists("isInitial", $this->_propDict)) {
            return $this->_propDict["isInitial"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isInitial
    *
    * @param bool $val The isInitial
    *
    * @return Domain
    */
    public function setIsInitial($val)
    {
        $this->_propDict["isInitial"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isRoot
    *
    * @return bool The isRoot
    */
    public function getIsRoot()
    {
        if (array_key_exists("isRoot", $this->_propDict)) {
            return $this->_propDict["isRoot"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRoot
    *
    * @param bool $val The isRoot
    *
    * @return Domain
    */
    public function setIsRoot($val)
    {
        $this->_propDict["isRoot"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isVerified
    *
    * @return bool The isVerified
    */
    public function getIsVerified()
    {
        if (array_key_exists("isVerified", $this->_propDict)) {
            return $this->_propDict["isVerified"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isVerified
    *
    * @param bool $val The isVerified
    *
    * @return Domain
    */
    public function setIsVerified($val)
    {
        $this->_propDict["isVerified"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the supportedServices
    *
    * @return string The supportedServices
    */
    public function getSupportedServices()
    {
        if (array_key_exists("supportedServices", $this->_propDict)) {
            return $this->_propDict["supportedServices"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportedServices
    *
    * @param string $val The supportedServices
    *
    * @return Domain
    */
    public function setSupportedServices($val)
    {
        $this->_propDict["supportedServices"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return DomainState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Model\DomainState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new DomainState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param DomainState $val The state
    *
    * @return Domain
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    

     /** 
     * Gets the serviceConfigurationRecords
     *
     * @return array The serviceConfigurationRecords
     */
    public function getServiceConfigurationRecords()
    {
        if (array_key_exists("serviceConfigurationRecords", $this->_propDict)) {
           return $this->_propDict["serviceConfigurationRecords"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the serviceConfigurationRecords
    *
    * @param DomainDnsRecord $val The serviceConfigurationRecords
    *
    * @return Domain
    */
    public function setServiceConfigurationRecords($val)
    {
		$this->_propDict["serviceConfigurationRecords"] = $val;
        return $this;
    }
    

     /** 
     * Gets the verificationDnsRecords
     *
     * @return array The verificationDnsRecords
     */
    public function getVerificationDnsRecords()
    {
        if (array_key_exists("verificationDnsRecords", $this->_propDict)) {
           return $this->_propDict["verificationDnsRecords"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the verificationDnsRecords
    *
    * @param DomainDnsRecord $val The verificationDnsRecords
    *
    * @return Domain
    */
    public function setVerificationDnsRecords($val)
    {
		$this->_propDict["verificationDnsRecords"] = $val;
        return $this;
    }
    

     /** 
     * Gets the domainNameReferences
     *
     * @return array The domainNameReferences
     */
    public function getDomainNameReferences()
    {
        if (array_key_exists("domainNameReferences", $this->_propDict)) {
           return $this->_propDict["domainNameReferences"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the domainNameReferences
    *
    * @param DirectoryObject $val The domainNameReferences
    *
    * @return Domain
    */
    public function setDomainNameReferences($val)
    {
		$this->_propDict["domainNameReferences"] = $val;
        return $this;
    }
    
}