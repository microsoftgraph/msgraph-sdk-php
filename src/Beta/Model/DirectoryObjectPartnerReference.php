<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DirectoryObjectPartnerReference File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* DirectoryObjectPartnerReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DirectoryObjectPartnerReference extends DirectoryObject
{
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
    * @return DirectoryObjectPartnerReference
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
    * @return DirectoryObjectPartnerReference
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalPartnerTenantId
    *
    * @return string The externalPartnerTenantId
    */
    public function getExternalPartnerTenantId()
    {
        if (array_key_exists("externalPartnerTenantId", $this->_propDict)) {
            return $this->_propDict["externalPartnerTenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalPartnerTenantId
    *
    * @param string $val The externalPartnerTenantId
    *
    * @return DirectoryObjectPartnerReference
    */
    public function setExternalPartnerTenantId($val)
    {
        $this->_propDict["externalPartnerTenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the objectType
    *
    * @return string The objectType
    */
    public function getObjectType()
    {
        if (array_key_exists("objectType", $this->_propDict)) {
            return $this->_propDict["objectType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the objectType
    *
    * @param string $val The objectType
    *
    * @return DirectoryObjectPartnerReference
    */
    public function setObjectType($val)
    {
        $this->_propDict["objectType"] = $val;
        return $this;
    }
    
}