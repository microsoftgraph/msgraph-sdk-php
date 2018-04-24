<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUniversalAppXAppAssignmentSettings File
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
* WindowsUniversalAppXAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsUniversalAppXAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Gets the useDeviceContext
    *
    * @return bool The useDeviceContext
    */
    public function getUseDeviceContext()
    {
        if (array_key_exists("useDeviceContext", $this->_propDict)) {
            return $this->_propDict["useDeviceContext"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useDeviceContext
    *
    * @param bool $val The value of the useDeviceContext
    *
    * @return WindowsUniversalAppXAppAssignmentSettings
    */
    public function setUseDeviceContext($val)
    {
        $this->_propDict["useDeviceContext"] = $val;
        return $this;
    }
}
