<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUniversalAppXContainedApp File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* WindowsUniversalAppXContainedApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsUniversalAppXContainedApp extends MobileContainedApp
{
    /**
    * Gets the appUserModelId
    * The app user model ID of the contained app of a WindowsUniversalAppX app.
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
    * The app user model ID of the contained app of a WindowsUniversalAppX app.
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