<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PolicyLink File
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
* PolicyLink class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PolicyLink extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the state
    * Link status. The possible values are: enabled, disabled.
    *
    * @return Status|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Networkaccess\Model\Status") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new Status($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Link status. The possible values are: enabled, disabled.
    *
    * @param Status $val The state
    *
    * @return PolicyLink
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
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
    * @return PolicyLink
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }

    /**
    * Gets the policy
    * Policy.
    *
    * @return Policy|null The policy
    */
    public function getPolicy()
    {
        if (array_key_exists("policy", $this->_propDict)) {
            if (is_a($this->_propDict["policy"], "\Beta\Microsoft\Graph\Networkaccess\Model\Policy") || is_null($this->_propDict["policy"])) {
                return $this->_propDict["policy"];
            } else {
                $this->_propDict["policy"] = new Policy($this->_propDict["policy"]);
                return $this->_propDict["policy"];
            }
        }
        return null;
    }

    /**
    * Sets the policy
    * Policy.
    *
    * @param Policy $val The policy
    *
    * @return PolicyLink
    */
    public function setPolicy($val)
    {
        $this->_propDict["policy"] = $val;
        return $this;
    }

}
