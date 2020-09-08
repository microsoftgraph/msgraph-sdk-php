<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessDeviceStates File
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
* ConditionalAccessDeviceStates class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessDeviceStates extends Entity
{
    /**
    * Gets the excludeStates
    *
    * @return string The excludeStates
    */
    public function getExcludeStates()
    {
        if (array_key_exists("excludeStates", $this->_propDict)) {
            return $this->_propDict["excludeStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeStates
    *
    * @param string $val The value of the excludeStates
    *
    * @return ConditionalAccessDeviceStates
    */
    public function setExcludeStates($val)
    {
        $this->_propDict["excludeStates"] = $val;
        return $this;
    }
    /**
    * Gets the includeStates
    *
    * @return string The includeStates
    */
    public function getIncludeStates()
    {
        if (array_key_exists("includeStates", $this->_propDict)) {
            return $this->_propDict["includeStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeStates
    *
    * @param string $val The value of the includeStates
    *
    * @return ConditionalAccessDeviceStates
    */
    public function setIncludeStates($val)
    {
        $this->_propDict["includeStates"] = $val;
        return $this;
    }
}
