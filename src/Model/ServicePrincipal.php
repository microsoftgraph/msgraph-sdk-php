<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServicePrincipal File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* ServicePrincipal class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ServicePrincipal extends DirectoryObject
{
    /**
    * Gets the accountEnabled
    *
    * @return bool The accountEnabled
    */
    public function getAccountEnabled()
    {
        if (array_key_exists("accountEnabled", $this->_propDict)) {
            return $this->_propDict["accountEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountEnabled
    *
    * @param bool $val The accountEnabled
    *
    * @return ServicePrincipal
    */
    public function setAccountEnabled($val)
    {
        $this->_propDict["accountEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the addIns
     *
     * @return array The addIns
     */
    public function getAddIns()
    {
        if (array_key_exists("addIns", $this->_propDict)) {
           return $this->_propDict["addIns"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the addIns
    *
    * @param AddIn $val The addIns
    *
    * @return ServicePrincipal
    */
    public function setAddIns($val)
    {
		$this->_propDict["addIns"] = $val;
        return $this;
    }
    
    /**
    * Gets the alternativeNames
    *
    * @return string The alternativeNames
    */
    public function getAlternativeNames()
    {
        if (array_key_exists("alternativeNames", $this->_propDict)) {
            return $this->_propDict["alternativeNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the alternativeNames
    *
    * @param string $val The alternativeNames
    *
    * @return ServicePrincipal
    */
    public function setAlternativeNames($val)
    {
        $this->_propDict["alternativeNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the appDisplayName
    *
    * @return string The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDisplayName
    *
    * @param string $val The appDisplayName
    *
    * @return ServicePrincipal
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the appId
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appId
    *
    * @param string $val The appId
    *
    * @return ServicePrincipal
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appOwnerOrganizationId
    *
    * @return string The appOwnerOrganizationId
    */
    public function getAppOwnerOrganizationId()
    {
        if (array_key_exists("appOwnerOrganizationId", $this->_propDict)) {
            return $this->_propDict["appOwnerOrganizationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appOwnerOrganizationId
    *
    * @param string $val The appOwnerOrganizationId
    *
    * @return ServicePrincipal
    */
    public function setAppOwnerOrganizationId($val)
    {
        $this->_propDict["appOwnerOrganizationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appRoleAssignmentRequired
    *
    * @return bool The appRoleAssignmentRequired
    */
    public function getAppRoleAssignmentRequired()
    {
        if (array_key_exists("appRoleAssignmentRequired", $this->_propDict)) {
            return $this->_propDict["appRoleAssignmentRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appRoleAssignmentRequired
    *
    * @param bool $val The appRoleAssignmentRequired
    *
    * @return ServicePrincipal
    */
    public function setAppRoleAssignmentRequired($val)
    {
        $this->_propDict["appRoleAssignmentRequired"] = boolval($val);
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
    * @return ServicePrincipal
    */
    public function setAppRoles($val)
    {
		$this->_propDict["appRoles"] = $val;
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
    * @return ServicePrincipal
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the homepage
    *
    * @return string The homepage
    */
    public function getHomepage()
    {
        if (array_key_exists("homepage", $this->_propDict)) {
            return $this->_propDict["homepage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the homepage
    *
    * @param string $val The homepage
    *
    * @return ServicePrincipal
    */
    public function setHomepage($val)
    {
        $this->_propDict["homepage"] = $val;
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
            if (is_a($this->_propDict["info"], "Microsoft\Graph\Model\InformationalUrl")) {
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
    * @return ServicePrincipal
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
    * @return ServicePrincipal
    */
    public function setKeyCredentials($val)
    {
		$this->_propDict["keyCredentials"] = $val;
        return $this;
    }
    
    /**
    * Gets the logoutUrl
    *
    * @return string The logoutUrl
    */
    public function getLogoutUrl()
    {
        if (array_key_exists("logoutUrl", $this->_propDict)) {
            return $this->_propDict["logoutUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the logoutUrl
    *
    * @param string $val The logoutUrl
    *
    * @return ServicePrincipal
    */
    public function setLogoutUrl($val)
    {
        $this->_propDict["logoutUrl"] = $val;
        return $this;
    }
    

     /** 
     * Gets the oauth2PermissionScopes
     *
     * @return array The oauth2PermissionScopes
     */
    public function getOauth2PermissionScopes()
    {
        if (array_key_exists("oauth2PermissionScopes", $this->_propDict)) {
           return $this->_propDict["oauth2PermissionScopes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the oauth2PermissionScopes
    *
    * @param PermissionScope $val The oauth2PermissionScopes
    *
    * @return ServicePrincipal
    */
    public function setOauth2PermissionScopes($val)
    {
		$this->_propDict["oauth2PermissionScopes"] = $val;
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
    * @return ServicePrincipal
    */
    public function setPasswordCredentials($val)
    {
		$this->_propDict["passwordCredentials"] = $val;
        return $this;
    }
    
    /**
    * Gets the replyUrls
    *
    * @return string The replyUrls
    */
    public function getReplyUrls()
    {
        if (array_key_exists("replyUrls", $this->_propDict)) {
            return $this->_propDict["replyUrls"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the replyUrls
    *
    * @param string $val The replyUrls
    *
    * @return ServicePrincipal
    */
    public function setReplyUrls($val)
    {
        $this->_propDict["replyUrls"] = $val;
        return $this;
    }
    
    /**
    * Gets the servicePrincipalNames
    *
    * @return string The servicePrincipalNames
    */
    public function getServicePrincipalNames()
    {
        if (array_key_exists("servicePrincipalNames", $this->_propDict)) {
            return $this->_propDict["servicePrincipalNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the servicePrincipalNames
    *
    * @param string $val The servicePrincipalNames
    *
    * @return ServicePrincipal
    */
    public function setServicePrincipalNames($val)
    {
        $this->_propDict["servicePrincipalNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the servicePrincipalType
    *
    * @return string The servicePrincipalType
    */
    public function getServicePrincipalType()
    {
        if (array_key_exists("servicePrincipalType", $this->_propDict)) {
            return $this->_propDict["servicePrincipalType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the servicePrincipalType
    *
    * @param string $val The servicePrincipalType
    *
    * @return ServicePrincipal
    */
    public function setServicePrincipalType($val)
    {
        $this->_propDict["servicePrincipalType"] = $val;
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
    * @return ServicePrincipal
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenEncryptionKeyId
    *
    * @return string The tokenEncryptionKeyId
    */
    public function getTokenEncryptionKeyId()
    {
        if (array_key_exists("tokenEncryptionKeyId", $this->_propDict)) {
            return $this->_propDict["tokenEncryptionKeyId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tokenEncryptionKeyId
    *
    * @param string $val The tokenEncryptionKeyId
    *
    * @return ServicePrincipal
    */
    public function setTokenEncryptionKeyId($val)
    {
        $this->_propDict["tokenEncryptionKeyId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appRoleAssignedTo
     *
     * @return array The appRoleAssignedTo
     */
    public function getAppRoleAssignedTo()
    {
        if (array_key_exists("appRoleAssignedTo", $this->_propDict)) {
           return $this->_propDict["appRoleAssignedTo"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appRoleAssignedTo
    *
    * @param AppRoleAssignment $val The appRoleAssignedTo
    *
    * @return ServicePrincipal
    */
    public function setAppRoleAssignedTo($val)
    {
		$this->_propDict["appRoleAssignedTo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appRoleAssignments
     *
     * @return array The appRoleAssignments
     */
    public function getAppRoleAssignments()
    {
        if (array_key_exists("appRoleAssignments", $this->_propDict)) {
           return $this->_propDict["appRoleAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appRoleAssignments
    *
    * @param AppRoleAssignment $val The appRoleAssignments
    *
    * @return ServicePrincipal
    */
    public function setAppRoleAssignments($val)
    {
		$this->_propDict["appRoleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the endpoints
     *
     * @return array The endpoints
     */
    public function getEndpoints()
    {
        if (array_key_exists("endpoints", $this->_propDict)) {
           return $this->_propDict["endpoints"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the endpoints
    *
    * @param Endpoint $val The endpoints
    *
    * @return ServicePrincipal
    */
    public function setEndpoints($val)
    {
		$this->_propDict["endpoints"] = $val;
        return $this;
    }
    

     /** 
     * Gets the oauth2PermissionGrants
     *
     * @return array The oauth2PermissionGrants
     */
    public function getOauth2PermissionGrants()
    {
        if (array_key_exists("oauth2PermissionGrants", $this->_propDict)) {
           return $this->_propDict["oauth2PermissionGrants"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the oauth2PermissionGrants
    *
    * @param OAuth2PermissionGrant $val The oauth2PermissionGrants
    *
    * @return ServicePrincipal
    */
    public function setOauth2PermissionGrants($val)
    {
		$this->_propDict["oauth2PermissionGrants"] = $val;
        return $this;
    }
    

     /** 
     * Gets the memberOf
     *
     * @return array The memberOf
     */
    public function getMemberOf()
    {
        if (array_key_exists("memberOf", $this->_propDict)) {
           return $this->_propDict["memberOf"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the memberOf
    *
    * @param DirectoryObject $val The memberOf
    *
    * @return ServicePrincipal
    */
    public function setMemberOf($val)
    {
		$this->_propDict["memberOf"] = $val;
        return $this;
    }
    

     /** 
     * Gets the transitiveMemberOf
     *
     * @return array The transitiveMemberOf
     */
    public function getTransitiveMemberOf()
    {
        if (array_key_exists("transitiveMemberOf", $this->_propDict)) {
           return $this->_propDict["transitiveMemberOf"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the transitiveMemberOf
    *
    * @param DirectoryObject $val The transitiveMemberOf
    *
    * @return ServicePrincipal
    */
    public function setTransitiveMemberOf($val)
    {
		$this->_propDict["transitiveMemberOf"] = $val;
        return $this;
    }
    

     /** 
     * Gets the createdObjects
     *
     * @return array The createdObjects
     */
    public function getCreatedObjects()
    {
        if (array_key_exists("createdObjects", $this->_propDict)) {
           return $this->_propDict["createdObjects"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the createdObjects
    *
    * @param DirectoryObject $val The createdObjects
    *
    * @return ServicePrincipal
    */
    public function setCreatedObjects($val)
    {
		$this->_propDict["createdObjects"] = $val;
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
    * @return ServicePrincipal
    */
    public function setOwners($val)
    {
		$this->_propDict["owners"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ownedObjects
     *
     * @return array The ownedObjects
     */
    public function getOwnedObjects()
    {
        if (array_key_exists("ownedObjects", $this->_propDict)) {
           return $this->_propDict["ownedObjects"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the ownedObjects
    *
    * @param DirectoryObject $val The ownedObjects
    *
    * @return ServicePrincipal
    */
    public function setOwnedObjects($val)
    {
		$this->_propDict["ownedObjects"] = $val;
        return $this;
    }
    
}