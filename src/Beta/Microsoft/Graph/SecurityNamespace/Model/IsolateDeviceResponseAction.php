<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IsolateDeviceResponseAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* IsolateDeviceResponseAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IsolateDeviceResponseAction extends ResponseAction
{

    /**
    * Gets the identifier
    *
    * @return DeviceIdEntityIdentifier|null The identifier
    */
    public function getIdentifier()
    {
        if (array_key_exists("identifier", $this->_propDict)) {
            if (is_a($this->_propDict["identifier"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\DeviceIdEntityIdentifier") || is_null($this->_propDict["identifier"])) {
                return $this->_propDict["identifier"];
            } else {
                $this->_propDict["identifier"] = new DeviceIdEntityIdentifier($this->_propDict["identifier"]);
                return $this->_propDict["identifier"];
            }
        }
        return null;
    }

    /**
    * Sets the identifier
    *
    * @param DeviceIdEntityIdentifier $val The value to assign to the identifier
    *
    * @return IsolateDeviceResponseAction The IsolateDeviceResponseAction
    */
    public function setIdentifier($val)
    {
        $this->_propDict["identifier"] = $val;
         return $this;
    }

    /**
    * Gets the isolationType
    *
    * @return IsolationType|null The isolationType
    */
    public function getIsolationType()
    {
        if (array_key_exists("isolationType", $this->_propDict)) {
            if (is_a($this->_propDict["isolationType"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\IsolationType") || is_null($this->_propDict["isolationType"])) {
                return $this->_propDict["isolationType"];
            } else {
                $this->_propDict["isolationType"] = new IsolationType($this->_propDict["isolationType"]);
                return $this->_propDict["isolationType"];
            }
        }
        return null;
    }

    /**
    * Sets the isolationType
    *
    * @param IsolationType $val The value to assign to the isolationType
    *
    * @return IsolateDeviceResponseAction The IsolateDeviceResponseAction
    */
    public function setIsolationType($val)
    {
        $this->_propDict["isolationType"] = $val;
         return $this;
    }
}
