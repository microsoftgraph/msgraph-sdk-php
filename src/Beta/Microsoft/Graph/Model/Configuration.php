<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Configuration File
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
* Configuration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Configuration extends Entity
{
    /**
    * Gets the authorizedApps
    *
    * @return string The authorizedApps
    */
    public function getAuthorizedApps()
    {
        if (array_key_exists("authorizedApps", $this->_propDict)) {
            return $this->_propDict["authorizedApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authorizedApps
    *
    * @param string $val The value of the authorizedApps
    *
    * @return Configuration
    */
    public function setAuthorizedApps($val)
    {
        $this->_propDict["authorizedApps"] = $val;
        return $this;
    }
}
