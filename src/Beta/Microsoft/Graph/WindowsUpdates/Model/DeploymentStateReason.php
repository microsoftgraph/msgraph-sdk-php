<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeploymentStateReason File
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
* DeploymentStateReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeploymentStateReason extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the value
    *
    * @return DeploymentStateReasonValue The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\DeploymentStateReasonValue")) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = new DeploymentStateReasonValue($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    *
    * @param DeploymentStateReasonValue $val The value to assign to the value
    *
    * @return DeploymentStateReason The DeploymentStateReason
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
