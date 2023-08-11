<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAppSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* TeamsAppSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAppSettings extends Entity
{
    /**
    * Gets the allowUserRequestsForAppAccess
    *
    * @return bool|null The allowUserRequestsForAppAccess
    */
    public function getAllowUserRequestsForAppAccess()
    {
        if (array_key_exists("allowUserRequestsForAppAccess", $this->_propDict)) {
            return $this->_propDict["allowUserRequestsForAppAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowUserRequestsForAppAccess
    *
    * @param bool $val The allowUserRequestsForAppAccess
    *
    * @return TeamsAppSettings
    */
    public function setAllowUserRequestsForAppAccess($val)
    {
        $this->_propDict["allowUserRequestsForAppAccess"] = boolval($val);
        return $this;
    }

}
