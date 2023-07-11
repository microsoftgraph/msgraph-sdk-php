<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* AccessPackageResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResource extends Entity
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
    * @return AccessPackageResource
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    *
    * @return string|null The description
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
    * @return AccessPackageResource
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return AccessPackageResource
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the modifiedDateTime
    *
    * @return \DateTime|null The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime") || is_null($this->_propDict["modifiedDateTime"])) {
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
    * @return AccessPackageResource
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the originId
    *
    * @return string|null The originId
    */
    public function getOriginId()
    {
        if (array_key_exists("originId", $this->_propDict)) {
            return $this->_propDict["originId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the originId
    *
    * @param string $val The originId
    *
    * @return AccessPackageResource
    */
    public function setOriginId($val)
    {
        $this->_propDict["originId"] = $val;
        return $this;
    }

    /**
    * Gets the originSystem
    *
    * @return string|null The originSystem
    */
    public function getOriginSystem()
    {
        if (array_key_exists("originSystem", $this->_propDict)) {
            return $this->_propDict["originSystem"];
        } else {
            return null;
        }
    }

    /**
    * Sets the originSystem
    *
    * @param string $val The originSystem
    *
    * @return AccessPackageResource
    */
    public function setOriginSystem($val)
    {
        $this->_propDict["originSystem"] = $val;
        return $this;
    }

    /**
    * Gets the environment
    *
    * @return AccessPackageResourceEnvironment|null The environment
    */
    public function getEnvironment()
    {
        if (array_key_exists("environment", $this->_propDict)) {
            if (is_a($this->_propDict["environment"], "\Microsoft\Graph\Model\AccessPackageResourceEnvironment") || is_null($this->_propDict["environment"])) {
                return $this->_propDict["environment"];
            } else {
                $this->_propDict["environment"] = new AccessPackageResourceEnvironment($this->_propDict["environment"]);
                return $this->_propDict["environment"];
            }
        }
        return null;
    }

    /**
    * Sets the environment
    *
    * @param AccessPackageResourceEnvironment $val The environment
    *
    * @return AccessPackageResource
    */
    public function setEnvironment($val)
    {
        $this->_propDict["environment"] = $val;
        return $this;
    }


     /**
     * Gets the roles
     *
     * @return array|null The roles
     */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
           return $this->_propDict["roles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roles
    *
    * @param AccessPackageResourceRole[] $val The roles
    *
    * @return AccessPackageResource
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
        return $this;
    }


     /**
     * Gets the scopes
     *
     * @return array|null The scopes
     */
    public function getScopes()
    {
        if (array_key_exists("scopes", $this->_propDict)) {
           return $this->_propDict["scopes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopes
    *
    * @param AccessPackageResourceScope[] $val The scopes
    *
    * @return AccessPackageResource
    */
    public function setScopes($val)
    {
        $this->_propDict["scopes"] = $val;
        return $this;
    }

}
