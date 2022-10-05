<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServicePrincipalLockConfiguration File
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
* ServicePrincipalLockConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServicePrincipalLockConfiguration extends Entity
{
    /**
    * Gets the allProperties
    *
    * @return bool|null The allProperties
    */
    public function getAllProperties()
    {
        if (array_key_exists("allProperties", $this->_propDict)) {
            return $this->_propDict["allProperties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allProperties
    *
    * @param bool $val The value of the allProperties
    *
    * @return ServicePrincipalLockConfiguration
    */
    public function setAllProperties($val)
    {
        $this->_propDict["allProperties"] = $val;
        return $this;
    }
    /**
    * Gets the credentialsWithUsageSign
    *
    * @return bool|null The credentialsWithUsageSign
    */
    public function getCredentialsWithUsageSign()
    {
        if (array_key_exists("credentialsWithUsageSign", $this->_propDict)) {
            return $this->_propDict["credentialsWithUsageSign"];
        } else {
            return null;
        }
    }

    /**
    * Sets the credentialsWithUsageSign
    *
    * @param bool $val The value of the credentialsWithUsageSign
    *
    * @return ServicePrincipalLockConfiguration
    */
    public function setCredentialsWithUsageSign($val)
    {
        $this->_propDict["credentialsWithUsageSign"] = $val;
        return $this;
    }
    /**
    * Gets the credentialsWithUsageVerify
    *
    * @return bool|null The credentialsWithUsageVerify
    */
    public function getCredentialsWithUsageVerify()
    {
        if (array_key_exists("credentialsWithUsageVerify", $this->_propDict)) {
            return $this->_propDict["credentialsWithUsageVerify"];
        } else {
            return null;
        }
    }

    /**
    * Sets the credentialsWithUsageVerify
    *
    * @param bool $val The value of the credentialsWithUsageVerify
    *
    * @return ServicePrincipalLockConfiguration
    */
    public function setCredentialsWithUsageVerify($val)
    {
        $this->_propDict["credentialsWithUsageVerify"] = $val;
        return $this;
    }
    /**
    * Gets the isEnabled
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    *
    * @param bool $val The value of the isEnabled
    *
    * @return ServicePrincipalLockConfiguration
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the tokenEncryptionKeyId
    *
    * @return bool|null The tokenEncryptionKeyId
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
    * @param bool $val The value of the tokenEncryptionKeyId
    *
    * @return ServicePrincipalLockConfiguration
    */
    public function setTokenEncryptionKeyId($val)
    {
        $this->_propDict["tokenEncryptionKeyId"] = $val;
        return $this;
    }
}
