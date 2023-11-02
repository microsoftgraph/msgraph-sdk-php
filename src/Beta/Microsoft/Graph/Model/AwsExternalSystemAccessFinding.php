<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsExternalSystemAccessFinding File
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
* AwsExternalSystemAccessFinding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsExternalSystemAccessFinding extends Finding
{
    /**
    * Gets the accessMethods
    *
    * @return ExternalSystemAccessMethods|null The accessMethods
    */
    public function getAccessMethods()
    {
        if (array_key_exists("accessMethods", $this->_propDict)) {
            if (is_a($this->_propDict["accessMethods"], "\Beta\Microsoft\Graph\Model\ExternalSystemAccessMethods") || is_null($this->_propDict["accessMethods"])) {
                return $this->_propDict["accessMethods"];
            } else {
                $this->_propDict["accessMethods"] = new ExternalSystemAccessMethods($this->_propDict["accessMethods"]);
                return $this->_propDict["accessMethods"];
            }
        }
        return null;
    }

    /**
    * Sets the accessMethods
    *
    * @param ExternalSystemAccessMethods $val The accessMethods
    *
    * @return AwsExternalSystemAccessFinding
    */
    public function setAccessMethods($val)
    {
        $this->_propDict["accessMethods"] = $val;
        return $this;
    }

    /**
    * Gets the systemWithAccess
    *
    * @return AuthorizationSystemInfo|null The systemWithAccess
    */
    public function getSystemWithAccess()
    {
        if (array_key_exists("systemWithAccess", $this->_propDict)) {
            if (is_a($this->_propDict["systemWithAccess"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemInfo") || is_null($this->_propDict["systemWithAccess"])) {
                return $this->_propDict["systemWithAccess"];
            } else {
                $this->_propDict["systemWithAccess"] = new AuthorizationSystemInfo($this->_propDict["systemWithAccess"]);
                return $this->_propDict["systemWithAccess"];
            }
        }
        return null;
    }

    /**
    * Sets the systemWithAccess
    *
    * @param AuthorizationSystemInfo $val The systemWithAccess
    *
    * @return AwsExternalSystemAccessFinding
    */
    public function setSystemWithAccess($val)
    {
        $this->_propDict["systemWithAccess"] = $val;
        return $this;
    }

    /**
    * Gets the trustedIdentityCount
    *
    * @return int|null The trustedIdentityCount
    */
    public function getTrustedIdentityCount()
    {
        if (array_key_exists("trustedIdentityCount", $this->_propDict)) {
            return $this->_propDict["trustedIdentityCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trustedIdentityCount
    *
    * @param int $val The trustedIdentityCount
    *
    * @return AwsExternalSystemAccessFinding
    */
    public function setTrustedIdentityCount($val)
    {
        $this->_propDict["trustedIdentityCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the trustsAllIdentities
    *
    * @return bool|null The trustsAllIdentities
    */
    public function getTrustsAllIdentities()
    {
        if (array_key_exists("trustsAllIdentities", $this->_propDict)) {
            return $this->_propDict["trustsAllIdentities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trustsAllIdentities
    *
    * @param bool $val The trustsAllIdentities
    *
    * @return AwsExternalSystemAccessFinding
    */
    public function setTrustsAllIdentities($val)
    {
        $this->_propDict["trustsAllIdentities"] = boolval($val);
        return $this;
    }

    /**
    * Gets the affectedSystem
    *
    * @return AuthorizationSystem|null The affectedSystem
    */
    public function getAffectedSystem()
    {
        if (array_key_exists("affectedSystem", $this->_propDict)) {
            if (is_a($this->_propDict["affectedSystem"], "\Beta\Microsoft\Graph\Model\AuthorizationSystem") || is_null($this->_propDict["affectedSystem"])) {
                return $this->_propDict["affectedSystem"];
            } else {
                $this->_propDict["affectedSystem"] = new AuthorizationSystem($this->_propDict["affectedSystem"]);
                return $this->_propDict["affectedSystem"];
            }
        }
        return null;
    }

    /**
    * Sets the affectedSystem
    *
    * @param AuthorizationSystem $val The affectedSystem
    *
    * @return AwsExternalSystemAccessFinding
    */
    public function setAffectedSystem($val)
    {
        $this->_propDict["affectedSystem"] = $val;
        return $this;
    }

}
