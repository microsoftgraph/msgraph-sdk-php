<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUniversalAppXContainedApp File
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
* WindowsUniversalAppXContainedApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsUniversalAppXContainedApp extends MobileContainedApp
{
    /**
    * Gets the appUserModelId
    *
    * @return string The appUserModelId
    */
    public function getAppUserModelId()
    {
        if (array_key_exists("appUserModelId", $this->_propDict)) {
            return $this->_propDict["appUserModelId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appUserModelId
    *
    * @param string $val The appUserModelId
    *
    * @return WindowsUniversalAppXContainedApp
    */
    public function setAppUserModelId($val)
    {
        $this->_propDict["appUserModelId"] = $val;
        return $this;
    }
    
}