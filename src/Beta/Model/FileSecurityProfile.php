<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileSecurityProfile File
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
* FileSecurityProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class FileSecurityProfile extends Entity
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
    * @return FileSecurityProfile
    */
    public function setActivityGroupStates($val)
    {
		$this->_propDict["activityGroupStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticodeHash256
    *
    * @return string The authenticodeHash256
    */
    public function getAuthenticodeHash256()
    {
        if (array_key_exists("authenticodeHash256", $this->_propDict)) {
            return $this->_propDict["authenticodeHash256"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authenticodeHash256
    *
    * @param string $val The authenticodeHash256
    *
    * @return FileSecurityProfile
    */
    public function setAuthenticodeHash256($val)
    {
        $this->_propDict["authenticodeHash256"] = $val;
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
    * @return FileSecurityProfile
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
    * @return FileSecurityProfile
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
    * @return FileSecurityProfile
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
    * @return FileSecurityProfile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
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
    * @return FileSecurityProfile
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
    * @return FileSecurityProfile
    */
    public function setMalwareStates($val)
    {
		$this->_propDict["malwareStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the md5
    *
    * @return string The md5
    */
    public function getMd5()
    {
        if (array_key_exists("md5", $this->_propDict)) {
            return $this->_propDict["md5"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the md5
    *
    * @param string $val The md5
    *
    * @return FileSecurityProfile
    */
    public function setMd5($val)
    {
        $this->_propDict["md5"] = $val;
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
    * @return FileSecurityProfile
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the path
    *
    * @return string The path
    */
    public function getPath()
    {
        if (array_key_exists("path", $this->_propDict)) {
            return $this->_propDict["path"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the path
    *
    * @param string $val The path
    *
    * @return FileSecurityProfile
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
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
    * @return FileSecurityProfile
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }
    
    /**
    * Gets the sha1
    *
    * @return string The sha1
    */
    public function getSha1()
    {
        if (array_key_exists("sha1", $this->_propDict)) {
            return $this->_propDict["sha1"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sha1
    *
    * @param string $val The sha1
    *
    * @return FileSecurityProfile
    */
    public function setSha1($val)
    {
        $this->_propDict["sha1"] = $val;
        return $this;
    }
    
    /**
    * Gets the sha256
    *
    * @return string The sha256
    */
    public function getSha256()
    {
        if (array_key_exists("sha256", $this->_propDict)) {
            return $this->_propDict["sha256"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sha256
    *
    * @param string $val The sha256
    *
    * @return FileSecurityProfile
    */
    public function setSha256($val)
    {
        $this->_propDict["sha256"] = $val;
        return $this;
    }
    
    /**
    * Gets the size
    *
    * @return int The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the size
    *
    * @param int $val The size
    *
    * @return FileSecurityProfile
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = intval($val);
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
    * @return FileSecurityProfile
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
    * @return FileSecurityProfile
    */
    public function setVendorInformation($val)
    {
        $this->_propDict["vendorInformation"] = $val;
        return $this;
    }
    
}