<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlatformCredentialAuthenticationMethod File
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
* PlatformCredentialAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlatformCredentialAuthenticationMethod extends AuthenticationMethod
{
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
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
    * @return PlatformCredentialAuthenticationMethod
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    *
    * @return string|null The displayName
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
    * @return PlatformCredentialAuthenticationMethod
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the keyStrength
    *
    * @return AuthenticationMethodKeyStrength|null The keyStrength
    */
    public function getKeyStrength()
    {
        if (array_key_exists("keyStrength", $this->_propDict)) {
            if (is_a($this->_propDict["keyStrength"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodKeyStrength") || is_null($this->_propDict["keyStrength"])) {
                return $this->_propDict["keyStrength"];
            } else {
                $this->_propDict["keyStrength"] = new AuthenticationMethodKeyStrength($this->_propDict["keyStrength"]);
                return $this->_propDict["keyStrength"];
            }
        }
        return null;
    }

    /**
    * Sets the keyStrength
    *
    * @param AuthenticationMethodKeyStrength $val The keyStrength
    *
    * @return PlatformCredentialAuthenticationMethod
    */
    public function setKeyStrength($val)
    {
        $this->_propDict["keyStrength"] = $val;
        return $this;
    }

    /**
    * Gets the platform
    *
    * @return AuthenticationMethodPlatform|null The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            if (is_a($this->_propDict["platform"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodPlatform") || is_null($this->_propDict["platform"])) {
                return $this->_propDict["platform"];
            } else {
                $this->_propDict["platform"] = new AuthenticationMethodPlatform($this->_propDict["platform"]);
                return $this->_propDict["platform"];
            }
        }
        return null;
    }

    /**
    * Sets the platform
    *
    * @param AuthenticationMethodPlatform $val The platform
    *
    * @return PlatformCredentialAuthenticationMethod
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
        return $this;
    }

    /**
    * Gets the device
    *
    * @return Device|null The device
    */
    public function getDevice()
    {
        if (array_key_exists("device", $this->_propDict)) {
            if (is_a($this->_propDict["device"], "\Beta\Microsoft\Graph\Model\Device") || is_null($this->_propDict["device"])) {
                return $this->_propDict["device"];
            } else {
                $this->_propDict["device"] = new Device($this->_propDict["device"]);
                return $this->_propDict["device"];
            }
        }
        return null;
    }

    /**
    * Sets the device
    *
    * @param Device $val The device
    *
    * @return PlatformCredentialAuthenticationMethod
    */
    public function setDevice($val)
    {
        $this->_propDict["device"] = $val;
        return $this;
    }

}
