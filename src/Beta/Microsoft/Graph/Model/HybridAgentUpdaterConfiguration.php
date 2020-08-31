<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HybridAgentUpdaterConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* HybridAgentUpdaterConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HybridAgentUpdaterConfiguration extends Entity
{

    /**
    * Gets the deferUpdateDateTime
    *
    * @return \DateTime The deferUpdateDateTime
    */
    public function getDeferUpdateDateTime()
    {
        if (array_key_exists("deferUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deferUpdateDateTime"], "\DateTime")) {
                return $this->_propDict["deferUpdateDateTime"];
            } else {
                $this->_propDict["deferUpdateDateTime"] = new \DateTime($this->_propDict["deferUpdateDateTime"]);
                return $this->_propDict["deferUpdateDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the deferUpdateDateTime
    *
    * @param \DateTime $val The value to assign to the deferUpdateDateTime
    *
    * @return HybridAgentUpdaterConfiguration The HybridAgentUpdaterConfiguration
    */
    public function setDeferUpdateDateTime($val)
    {
        $this->_propDict["deferUpdateDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the updateWindow
    *
    * @return UpdateWindow The updateWindow
    */
    public function getUpdateWindow()
    {
        if (array_key_exists("updateWindow", $this->_propDict)) {
            if (is_a($this->_propDict["updateWindow"], "Beta\Microsoft\Graph\Model\UpdateWindow")) {
                return $this->_propDict["updateWindow"];
            } else {
                $this->_propDict["updateWindow"] = new UpdateWindow($this->_propDict["updateWindow"]);
                return $this->_propDict["updateWindow"];
            }
        }
        return null;
    }

    /**
    * Sets the updateWindow
    *
    * @param UpdateWindow $val The value to assign to the updateWindow
    *
    * @return HybridAgentUpdaterConfiguration The HybridAgentUpdaterConfiguration
    */
    public function setUpdateWindow($val)
    {
        $this->_propDict["updateWindow"] = $val;
         return $this;
    }
    /**
    * Gets the allowUpdateConfigurationOverride
    *
    * @return bool The allowUpdateConfigurationOverride
    */
    public function getAllowUpdateConfigurationOverride()
    {
        if (array_key_exists("allowUpdateConfigurationOverride", $this->_propDict)) {
            return $this->_propDict["allowUpdateConfigurationOverride"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowUpdateConfigurationOverride
    *
    * @param bool $val The value of the allowUpdateConfigurationOverride
    *
    * @return HybridAgentUpdaterConfiguration
    */
    public function setAllowUpdateConfigurationOverride($val)
    {
        $this->_propDict["allowUpdateConfigurationOverride"] = $val;
        return $this;
    }
}
