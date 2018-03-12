<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnrollmentProfile File
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
* EnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EnrollmentProfile extends Entity
{
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
    * @return EnrollmentProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @return EnrollmentProfile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the requiresUserAuthentication
    *
    * @return bool The requiresUserAuthentication
    */
    public function getRequiresUserAuthentication()
    {
        if (array_key_exists("requiresUserAuthentication", $this->_propDict)) {
            return $this->_propDict["requiresUserAuthentication"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requiresUserAuthentication
    *
    * @param bool $val The requiresUserAuthentication
    *
    * @return EnrollmentProfile
    */
    public function setRequiresUserAuthentication($val)
    {
        $this->_propDict["requiresUserAuthentication"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the configurationEndpointUrl
    *
    * @return string The configurationEndpointUrl
    */
    public function getConfigurationEndpointUrl()
    {
        if (array_key_exists("configurationEndpointUrl", $this->_propDict)) {
            return $this->_propDict["configurationEndpointUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configurationEndpointUrl
    *
    * @param string $val The configurationEndpointUrl
    *
    * @return EnrollmentProfile
    */
    public function setConfigurationEndpointUrl($val)
    {
        $this->_propDict["configurationEndpointUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the enableAuthenticationViaCompanyPortal
    *
    * @return bool The enableAuthenticationViaCompanyPortal
    */
    public function getEnableAuthenticationViaCompanyPortal()
    {
        if (array_key_exists("enableAuthenticationViaCompanyPortal", $this->_propDict)) {
            return $this->_propDict["enableAuthenticationViaCompanyPortal"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableAuthenticationViaCompanyPortal
    *
    * @param bool $val The enableAuthenticationViaCompanyPortal
    *
    * @return EnrollmentProfile
    */
    public function setEnableAuthenticationViaCompanyPortal($val)
    {
        $this->_propDict["enableAuthenticationViaCompanyPortal"] = boolval($val);
        return $this;
    }
    
}