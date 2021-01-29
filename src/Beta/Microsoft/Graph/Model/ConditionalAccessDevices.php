<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessDevices File
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
* ConditionalAccessDevices class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessDevices extends Entity
{
    /**
    * Gets the excludeDeviceStates
    * States excluded from the scope of the policy. Possible values: Compliant, DomainJoined.
    *
    * @return string The excludeDeviceStates
    */
    public function getExcludeDeviceStates()
    {
        if (array_key_exists("excludeDeviceStates", $this->_propDict)) {
            return $this->_propDict["excludeDeviceStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeDeviceStates
    * States excluded from the scope of the policy. Possible values: Compliant, DomainJoined.
    *
    * @param string $val The value of the excludeDeviceStates
    *
    * @return ConditionalAccessDevices
    */
    public function setExcludeDeviceStates($val)
    {
        $this->_propDict["excludeDeviceStates"] = $val;
        return $this;
    }
    /**
    * Gets the includeDeviceStates
    * States in the scope of the policy. All is the only allowed value.
    *
    * @return string The includeDeviceStates
    */
    public function getIncludeDeviceStates()
    {
        if (array_key_exists("includeDeviceStates", $this->_propDict)) {
            return $this->_propDict["includeDeviceStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeDeviceStates
    * States in the scope of the policy. All is the only allowed value.
    *
    * @param string $val The value of the includeDeviceStates
    *
    * @return ConditionalAccessDevices
    */
    public function setIncludeDeviceStates($val)
    {
        $this->_propDict["includeDeviceStates"] = $val;
        return $this;
    }
}
