<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppAutoUpdateSettings File
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
* Win32LobAppAutoUpdateSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppAutoUpdateSettings extends Entity
{

    /**
    * Gets the autoUpdateSupersededApps
    * The auto-update superseded apps setting for the app assignment. Possible values are notConfigured and enabled. Default value is notConfigured.
    *
    * @return Win32LobAppAutoUpdateSupersededApps|null The autoUpdateSupersededApps
    */
    public function getAutoUpdateSupersededApps()
    {
        if (array_key_exists("autoUpdateSupersededApps", $this->_propDict)) {
            if (is_a($this->_propDict["autoUpdateSupersededApps"], "\Beta\Microsoft\Graph\Model\Win32LobAppAutoUpdateSupersededApps") || is_null($this->_propDict["autoUpdateSupersededApps"])) {
                return $this->_propDict["autoUpdateSupersededApps"];
            } else {
                $this->_propDict["autoUpdateSupersededApps"] = new Win32LobAppAutoUpdateSupersededApps($this->_propDict["autoUpdateSupersededApps"]);
                return $this->_propDict["autoUpdateSupersededApps"];
            }
        }
        return null;
    }

    /**
    * Sets the autoUpdateSupersededApps
    * The auto-update superseded apps setting for the app assignment. Possible values are notConfigured and enabled. Default value is notConfigured.
    *
    * @param Win32LobAppAutoUpdateSupersededApps $val The value to assign to the autoUpdateSupersededApps
    *
    * @return Win32LobAppAutoUpdateSettings The Win32LobAppAutoUpdateSettings
    */
    public function setAutoUpdateSupersededApps($val)
    {
        $this->_propDict["autoUpdateSupersededApps"] = $val;
         return $this;
    }
}
