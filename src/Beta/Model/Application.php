<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Application File
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
* Application class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Application extends DirectoryObject
{
    /**
    * Gets the api
    *
    * @return Api The api
    */
    public function getApi()
    {
        if (array_key_exists("api", $this->_propDict)) {
            if (is_a($this->_propDict["api"], "Microsoft\Graph\Beta\Model\Api")) {
                return $this->_propDict["api"];
            } else {
                $this->_propDict["api"] = new Api($this->_propDict["api"]);
                return $this->_propDict["api"];
            }
        }
        return null;
    }
    
    /**
    * Sets the api
    *
    * @param Api $val The api
    *
    * @return Application
    */
    public function setApi($val)
    {
        $this->_propDict["api"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowPublicClient
    *
    * @return bool The allowPublicClient
    */
    public function getAllowPublicClient()
    {
        if (array_key_exists("allowPublicClient", $this->_propDict)) {
            return $this->_propDict["allowPublicClient"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowPublicClient
    *
    * @param bool $val The allowPublicClient
    *
    * @return Application
    */
    public function setAllowPublicClient($val)
    {
        $this->_propDict["allowPublicClient"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationAliases
    *
    * @return string The applicationAliases
    */
    public function getApplicationAliases()
    {
        if (array_key_exists("applicationAliases", $this->_propDict)) {
            return $this->_propDict["applicationAliases"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationAliases
    *
    * @param string $val The applicationAliases
    *
    * @return Application
    */
    public function setApplicationAliases($val)
    {
        $this->_propDict["applicationAliases"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appRoles
     *
     * @return array The appRoles
     */
    public function getAppRoles()
    {
        if (array_key_exists("appRoles", $this->_propDict)) {
           return $this->_propDict["appRoles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appRoles
    *
    * @param AppRole $val The appRoles
    *
    * @return Application
    */
    public function setAppRoles($val)
    {
		$this->_propDict["appRoles"] = $val;
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
    * @return Application
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the installedClients
    *
    * @return InstalledClient The installedClients
    */
    public function getInstalledClients()
    {
        if (array_key_exists("installedClients", $this->_propDict)) {
            if (is_a($this->_propDict["installedClients"], "Microsoft\Graph\Beta\Model\InstalledClient")) {
                return $this->_propDict["installedClients"];
            } else {
                $this->_propDict["installedClients"] = new InstalledClient($this->_propDict["installedClients"]);
                return $this->_propDict["installedClients"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installedClients
    *
    * @param InstalledClient $val The installedClients
    *
    * @return Application
    */
    public function setInstalledClients($val)
    {
        $this->_propDict["installedClients"] = $val;
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
    * @return Application
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the info
    *
    * @return InformationalUrl The info
    */
    public function getInfo()
    {
        if (array_key_exists("info", $this->_propDict)) {
            if (is_a($this->_propDict["info"], "Microsoft\Graph\Beta\Model\InformationalUrl")) {
                return $this->_propDict["info"];
            } else {
                $this->_propDict["info"] = new InformationalUrl($this->_propDict["info"]);
                return $this->_propDict["info"];
            }
        }
        return null;
    }
    
    /**
    * Sets the info
    *
    * @param InformationalUrl $val The info
    *
    * @return Application
    */
    public function setInfo($val)
    {
        $this->_propDict["info"] = $val;
        return $this;
    }
    

     /** 
     * Gets the keyCredentials
     *
     * @return array The keyCredentials
     */
    public function getKeyCredentials()
    {
        if (array_key_exists("keyCredentials", $this->_propDict)) {
           return $this->_propDict["keyCredentials"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the keyCredentials
    *
    * @param KeyCredential $val The keyCredentials
    *
    * @return Application
    */
    public function setKeyCredentials($val)
    {
		$this->_propDict["keyCredentials"] = $val;
        return $this;
    }
    
    /**
    * Gets the logo
    *
    * @return \GuzzleHttp\Psr7\Stream The logo
    */
    public function getLogo()
    {
        if (array_key_exists("logo", $this->_propDict)) {
            if (is_a($this->_propDict["logo"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["logo"];
            } else {
                $this->_propDict["logo"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["logo"]);
                return $this->_propDict["logo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the logo
    *
    * @param \GuzzleHttp\Psr7\Stream $val The logo
    *
    * @return Application
    */
    public function setLogo($val)
    {
        $this->_propDict["logo"] = $val;
        return $this;
    }
    
    /**
    * Gets the orgRestrictions
    *
    * @return string The orgRestrictions
    */
    public function getOrgRestrictions()
    {
        if (array_key_exists("orgRestrictions", $this->_propDict)) {
            return $this->_propDict["orgRestrictions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the orgRestrictions
    *
    * @param string $val The orgRestrictions
    *
    * @return Application
    */
    public function setOrgRestrictions($val)
    {
        $this->_propDict["orgRestrictions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the passwordCredentials
     *
     * @return array The passwordCredentials
     */
    public function getPasswordCredentials()
    {
        if (array_key_exists("passwordCredentials", $this->_propDict)) {
           return $this->_propDict["passwordCredentials"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the passwordCredentials
    *
    * @param PasswordCredential $val The passwordCredentials
    *
    * @return Application
    */
    public function setPasswordCredentials($val)
    {
		$this->_propDict["passwordCredentials"] = $val;
        return $this;
    }
    

     /** 
     * Gets the preAuthorizedApplications
     *
     * @return array The preAuthorizedApplications
     */
    public function getPreAuthorizedApplications()
    {
        if (array_key_exists("preAuthorizedApplications", $this->_propDict)) {
           return $this->_propDict["preAuthorizedApplications"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the preAuthorizedApplications
    *
    * @param PreAuthorizedApplication $val The preAuthorizedApplications
    *
    * @return Application
    */
    public function setPreAuthorizedApplications($val)
    {
		$this->_propDict["preAuthorizedApplications"] = $val;
        return $this;
    }
    

     /** 
     * Gets the requiredResourceAccess
     *
     * @return array The requiredResourceAccess
     */
    public function getRequiredResourceAccess()
    {
        if (array_key_exists("requiredResourceAccess", $this->_propDict)) {
           return $this->_propDict["requiredResourceAccess"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the requiredResourceAccess
    *
    * @param RequiredResourceAccess $val The requiredResourceAccess
    *
    * @return Application
    */
    public function setRequiredResourceAccess($val)
    {
		$this->_propDict["requiredResourceAccess"] = $val;
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
    * @return Application
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the web
    *
    * @return Web The web
    */
    public function getWeb()
    {
        if (array_key_exists("web", $this->_propDict)) {
            if (is_a($this->_propDict["web"], "Microsoft\Graph\Beta\Model\Web")) {
                return $this->_propDict["web"];
            } else {
                $this->_propDict["web"] = new Web($this->_propDict["web"]);
                return $this->_propDict["web"];
            }
        }
        return null;
    }
    
    /**
    * Sets the web
    *
    * @param Web $val The web
    *
    * @return Application
    */
    public function setWeb($val)
    {
        $this->_propDict["web"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensionProperties
     *
     * @return array The extensionProperties
     */
    public function getExtensionProperties()
    {
        if (array_key_exists("extensionProperties", $this->_propDict)) {
           return $this->_propDict["extensionProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extensionProperties
    *
    * @param ExtensionProperty $val The extensionProperties
    *
    * @return Application
    */
    public function setExtensionProperties($val)
    {
		$this->_propDict["extensionProperties"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdOnBehalfOf
    *
    * @return DirectoryObject The createdOnBehalfOf
    */
    public function getCreatedOnBehalfOf()
    {
        if (array_key_exists("createdOnBehalfOf", $this->_propDict)) {
            if (is_a($this->_propDict["createdOnBehalfOf"], "Microsoft\Graph\Beta\Model\DirectoryObject")) {
                return $this->_propDict["createdOnBehalfOf"];
            } else {
                $this->_propDict["createdOnBehalfOf"] = new DirectoryObject($this->_propDict["createdOnBehalfOf"]);
                return $this->_propDict["createdOnBehalfOf"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdOnBehalfOf
    *
    * @param DirectoryObject $val The createdOnBehalfOf
    *
    * @return Application
    */
    public function setCreatedOnBehalfOf($val)
    {
        $this->_propDict["createdOnBehalfOf"] = $val;
        return $this;
    }
    

     /** 
     * Gets the owners
     *
     * @return array The owners
     */
    public function getOwners()
    {
        if (array_key_exists("owners", $this->_propDict)) {
           return $this->_propDict["owners"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the owners
    *
    * @param DirectoryObject $val The owners
    *
    * @return Application
    */
    public function setOwners($val)
    {
		$this->_propDict["owners"] = $val;
        return $this;
    }
    

     /** 
     * Gets the policies
     *
     * @return array The policies
     */
    public function getPolicies()
    {
        if (array_key_exists("policies", $this->_propDict)) {
           return $this->_propDict["policies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the policies
    *
    * @param DirectoryObject $val The policies
    *
    * @return Application
    */
    public function setPolicies($val)
    {
		$this->_propDict["policies"] = $val;
        return $this;
    }
    
    /**
    * Gets the synchronization
    *
    * @return Synchronization The synchronization
    */
    public function getSynchronization()
    {
        if (array_key_exists("synchronization", $this->_propDict)) {
            if (is_a($this->_propDict["synchronization"], "Microsoft\Graph\Beta\Model\Synchronization")) {
                return $this->_propDict["synchronization"];
            } else {
                $this->_propDict["synchronization"] = new Synchronization($this->_propDict["synchronization"]);
                return $this->_propDict["synchronization"];
            }
        }
        return null;
    }
    
    /**
    * Sets the synchronization
    *
    * @param Synchronization $val The synchronization
    *
    * @return Application
    */
    public function setSynchronization($val)
    {
        $this->_propDict["synchronization"] = $val;
        return $this;
    }
    
}