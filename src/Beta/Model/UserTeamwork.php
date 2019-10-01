<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserTeamwork File
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
* UserTeamwork class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserTeamwork extends Entity
{

     /** 
     * Gets the installedApps
     *
     * @return array The installedApps
     */
    public function getInstalledApps()
    {
        if (array_key_exists("installedApps", $this->_propDict)) {
           return $this->_propDict["installedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the installedApps
    *
    * @param TeamsAppInstallation $val The installedApps
    *
    * @return UserTeamwork
    */
    public function setInstalledApps($val)
    {
		$this->_propDict["installedApps"] = $val;
        return $this;
    }
    
}