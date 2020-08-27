<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceScriptError File
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
* DeviceComplianceScriptError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceComplianceScriptError extends Entity
{

    /**
    * Gets the code
    * Error code.
    *
    * @return Code The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            if (is_a($this->_propDict["code"], "Beta\Microsoft\Graph\Model\Code")) {
                return $this->_propDict["code"];
            } else {
                $this->_propDict["code"] = new Code($this->_propDict["code"]);
                return $this->_propDict["code"];
            }
        }
        return null;
    }

    /**
    * Sets the code
    * Error code.
    *
    * @param Code $val The value to assign to the code
    *
    * @return DeviceComplianceScriptError The DeviceComplianceScriptError
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
         return $this;
    }
    /**
    * Gets the message
    * Error message.
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    * Error message.
    *
    * @param string $val The value of the message
    *
    * @return DeviceComplianceScriptError
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
}
