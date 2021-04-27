<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeploymentState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* DeploymentState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeploymentState extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the reasons
    *
    * @return DeploymentStateReason The reasons
    */
    public function getReasons()
    {
        if (array_key_exists("reasons", $this->_propDict)) {
            if (is_a($this->_propDict["reasons"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\DeploymentStateReason")) {
                return $this->_propDict["reasons"];
            } else {
                $this->_propDict["reasons"] = new DeploymentStateReason($this->_propDict["reasons"]);
                return $this->_propDict["reasons"];
            }
        }
        return null;
    }

    /**
    * Sets the reasons
    *
    * @param DeploymentStateReason $val The value to assign to the reasons
    *
    * @return DeploymentState The DeploymentState
    */
    public function setReasons($val)
    {
        $this->_propDict["reasons"] = $val;
         return $this;
    }

    /**
    * Gets the requestedValue
    *
    * @return RequestedDeploymentStateValue The requestedValue
    */
    public function getRequestedValue()
    {
        if (array_key_exists("requestedValue", $this->_propDict)) {
            if (is_a($this->_propDict["requestedValue"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\RequestedDeploymentStateValue")) {
                return $this->_propDict["requestedValue"];
            } else {
                $this->_propDict["requestedValue"] = new RequestedDeploymentStateValue($this->_propDict["requestedValue"]);
                return $this->_propDict["requestedValue"];
            }
        }
        return null;
    }

    /**
    * Sets the requestedValue
    *
    * @param RequestedDeploymentStateValue $val The value to assign to the requestedValue
    *
    * @return DeploymentState The DeploymentState
    */
    public function setRequestedValue($val)
    {
        $this->_propDict["requestedValue"] = $val;
         return $this;
    }

    /**
    * Gets the value
    *
    * @return DeploymentStateValue The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\DeploymentStateValue")) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = new DeploymentStateValue($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    *
    * @param DeploymentStateValue $val The value to assign to the value
    *
    * @return DeploymentState The DeploymentState
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
