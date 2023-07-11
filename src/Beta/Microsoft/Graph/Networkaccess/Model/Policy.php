<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Policy File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

/**
* Policy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Policy extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the description
    * Description.
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
    * Description.
    *
    * @param string $val The description
    *
    * @return Policy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the name
    * Policy name.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Policy name.
    *
    * @param string $val The name
    *
    * @return Policy
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * Version.
    *
    * @return string|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * Version.
    *
    * @param string $val The version
    *
    * @return Policy
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }


     /**
     * Gets the policyRules
    * Represents the definition of the policy ruleset that makes up the core definition of a policy.
     *
     * @return array|null The policyRules
     */
    public function getPolicyRules()
    {
        if (array_key_exists("policyRules", $this->_propDict)) {
           return $this->_propDict["policyRules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyRules
    * Represents the definition of the policy ruleset that makes up the core definition of a policy.
    *
    * @param PolicyRule[] $val The policyRules
    *
    * @return Policy
    */
    public function setPolicyRules($val)
    {
        $this->_propDict["policyRules"] = $val;
        return $this;
    }

}
