<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApiApplication File
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
* ApiApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ApiApplication extends Entity
{
    /**
    * Gets the requestedAccessTokenVersion
    *
    * @return int The requestedAccessTokenVersion
    */
    public function getRequestedAccessTokenVersion()
    {
        if (array_key_exists("requestedAccessTokenVersion", $this->_propDict)) {
            return $this->_propDict["requestedAccessTokenVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestedAccessTokenVersion
    *
    * @param int $val The value of the requestedAccessTokenVersion
    *
    * @return ApiApplication
    */
    public function setRequestedAccessTokenVersion($val)
    {
        $this->_propDict["requestedAccessTokenVersion"] = $val;
        return $this;
    }

    /**
    * Gets the oauth2PermissionScopes
    *
    * @return PermissionScope The oauth2PermissionScopes
    */
    public function getOauth2PermissionScopes()
    {
        if (array_key_exists("oauth2PermissionScopes", $this->_propDict)) {
            if (is_a($this->_propDict["oauth2PermissionScopes"], "Microsoft\Graph\Beta\Model\PermissionScope")) {
                return $this->_propDict["oauth2PermissionScopes"];
            } else {
                $this->_propDict["oauth2PermissionScopes"] = new PermissionScope($this->_propDict["oauth2PermissionScopes"]);
                return $this->_propDict["oauth2PermissionScopes"];
            }
        }
        return null;
    }

    /**
    * Sets the oauth2PermissionScopes
    *
    * @param PermissionScope $val The value to assign to the oauth2PermissionScopes
    *
    * @return ApiApplication The ApiApplication
    */
    public function setOauth2PermissionScopes($val)
    {
        $this->_propDict["oauth2PermissionScopes"] = $val;
         return $this;
    }
}
