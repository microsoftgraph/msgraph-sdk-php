<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDeviceAccount File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* WindowsDeviceAccount class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsDeviceAccount extends Entity
{
    /**
    * Gets the password
    * Not yet documented
    *
    * @return string The password
    */
    public function getPassword()
    {
        if (array_key_exists("password", $this->_propDict)) {
            return $this->_propDict["password"];
        } else {
            return null;
        }
    }

    /**
    * Sets the password
    * Not yet documented
    *
    * @param string $val The value of the password
    *
    * @return WindowsDeviceAccount
    */
    public function setPassword($val)
    {
        $this->_propDict["password"] = $val;
        return $this;
    }
}
