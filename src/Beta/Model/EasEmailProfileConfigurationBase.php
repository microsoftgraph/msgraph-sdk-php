<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EasEmailProfileConfigurationBase File
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
* EasEmailProfileConfigurationBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EasEmailProfileConfigurationBase extends DeviceConfiguration
{
    /**
    * Gets the usernameSource
    * Username attribute that is picked from AAD and injected into this profile before installing on the device.
    *
    * @return UserEmailSource The usernameSource
    */
    public function getUsernameSource()
    {
        if (array_key_exists("usernameSource", $this->_propDict)) {
            if (is_a($this->_propDict["usernameSource"], "Microsoft\Graph\Model\UserEmailSource")) {
                return $this->_propDict["usernameSource"];
            } else {
                $this->_propDict["usernameSource"] = new UserEmailSource($this->_propDict["usernameSource"]);
                return $this->_propDict["usernameSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the usernameSource
    * Username attribute that is picked from AAD and injected into this profile before installing on the device.
    *
    * @param UserEmailSource $val The usernameSource
    *
    * @return EasEmailProfileConfigurationBase
    */
    public function setUsernameSource($val)
    {
        $this->_propDict["usernameSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the usernameAADSource
    * Name of the AAD field, that will be used to retrieve UserName for email profile.
    *
    * @return UsernameSource The usernameAADSource
    */
    public function getUsernameAADSource()
    {
        if (array_key_exists("usernameAADSource", $this->_propDict)) {
            if (is_a($this->_propDict["usernameAADSource"], "Microsoft\Graph\Model\UsernameSource")) {
                return $this->_propDict["usernameAADSource"];
            } else {
                $this->_propDict["usernameAADSource"] = new UsernameSource($this->_propDict["usernameAADSource"]);
                return $this->_propDict["usernameAADSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the usernameAADSource
    * Name of the AAD field, that will be used to retrieve UserName for email profile.
    *
    * @param UsernameSource $val The usernameAADSource
    *
    * @return EasEmailProfileConfigurationBase
    */
    public function setUsernameAADSource($val)
    {
        $this->_propDict["usernameAADSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the userDomainNameSource
    * UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device.
    *
    * @return DomainNameSource The userDomainNameSource
    */
    public function getUserDomainNameSource()
    {
        if (array_key_exists("userDomainNameSource", $this->_propDict)) {
            if (is_a($this->_propDict["userDomainNameSource"], "Microsoft\Graph\Model\DomainNameSource")) {
                return $this->_propDict["userDomainNameSource"];
            } else {
                $this->_propDict["userDomainNameSource"] = new DomainNameSource($this->_propDict["userDomainNameSource"]);
                return $this->_propDict["userDomainNameSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userDomainNameSource
    * UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device.
    *
    * @param DomainNameSource $val The userDomainNameSource
    *
    * @return EasEmailProfileConfigurationBase
    */
    public function setUserDomainNameSource($val)
    {
        $this->_propDict["userDomainNameSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the customDomainName
    * Custom domain name value used while generating an email profile before installing on the device.
    *
    * @return string The customDomainName
    */
    public function getCustomDomainName()
    {
        if (array_key_exists("customDomainName", $this->_propDict)) {
            return $this->_propDict["customDomainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customDomainName
    * Custom domain name value used while generating an email profile before installing on the device.
    *
    * @param string $val The customDomainName
    *
    * @return EasEmailProfileConfigurationBase
    */
    public function setCustomDomainName($val)
    {
        $this->_propDict["customDomainName"] = $val;
        return $this;
    }
    
}