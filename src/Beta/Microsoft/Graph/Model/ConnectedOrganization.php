<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectedOrganization File
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
* ConnectedOrganization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConnectedOrganization extends Entity
{
    /**
    * Gets the createdBy
    *
    * @return string The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            return $this->_propDict["createdBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the createdBy
    *
    * @param string $val The createdBy
    *
    * @return ConnectedOrganization
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
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
    * @return ConnectedOrganization
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return ConnectedOrganization
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return ConnectedOrganization
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the identitySources
     *
     * @return array The identitySources
     */
    public function getIdentitySources()
    {
        if (array_key_exists("identitySources", $this->_propDict)) {
           return $this->_propDict["identitySources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the identitySources
    *
    * @param IdentitySource $val The identitySources
    *
    * @return ConnectedOrganization
    */
    public function setIdentitySources($val)
    {
		$this->_propDict["identitySources"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedBy
    *
    * @return string The modifiedBy
    */
    public function getModifiedBy()
    {
        if (array_key_exists("modifiedBy", $this->_propDict)) {
            return $this->_propDict["modifiedBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the modifiedBy
    *
    * @param string $val The modifiedBy
    *
    * @return ConnectedOrganization
    */
    public function setModifiedBy($val)
    {
        $this->_propDict["modifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    *
    * @return \DateTime The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modifiedDateTime
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return ConnectedOrganization
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return ConnectedOrganizationState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Beta\Microsoft\Graph\Model\ConnectedOrganizationState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ConnectedOrganizationState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param ConnectedOrganizationState $val The state
    *
    * @return ConnectedOrganization
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    

     /** 
     * Gets the externalSponsors
     *
     * @return array The externalSponsors
     */
    public function getExternalSponsors()
    {
        if (array_key_exists("externalSponsors", $this->_propDict)) {
           return $this->_propDict["externalSponsors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the externalSponsors
    *
    * @param DirectoryObject $val The externalSponsors
    *
    * @return ConnectedOrganization
    */
    public function setExternalSponsors($val)
    {
		$this->_propDict["externalSponsors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the internalSponsors
     *
     * @return array The internalSponsors
     */
    public function getInternalSponsors()
    {
        if (array_key_exists("internalSponsors", $this->_propDict)) {
           return $this->_propDict["internalSponsors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the internalSponsors
    *
    * @param DirectoryObject $val The internalSponsors
    *
    * @return ConnectedOrganization
    */
    public function setInternalSponsors($val)
    {
		$this->_propDict["internalSponsors"] = $val;
        return $this;
    }
    
}