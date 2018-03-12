<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Api File
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
* Api class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Api extends Entity
{
    /**
    * Gets the acceptedAccessTokenVersion
    *
    * @return int The acceptedAccessTokenVersion
    */
    public function getAcceptedAccessTokenVersion()
    {
        if (array_key_exists("acceptedAccessTokenVersion", $this->_propDict)) {
            return $this->_propDict["acceptedAccessTokenVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acceptedAccessTokenVersion
    *
    * @param int $val The value of the acceptedAccessTokenVersion
    *
    * @return Api
    */
    public function setAcceptedAccessTokenVersion($val)
    {
        $this->_propDict["acceptedAccessTokenVersion"] = $val;
        return $this;
    }

    /**
    * Gets the publishedPermissionScopes
    *
    * @return PermissionScope The publishedPermissionScopes
    */
    public function getPublishedPermissionScopes()
    {
        if (array_key_exists("publishedPermissionScopes", $this->_propDict)) {
            if (is_a($this->_propDict["publishedPermissionScopes"], "Microsoft\Graph\Model\PermissionScope")) {
                return $this->_propDict["publishedPermissionScopes"];
            } else {
                $this->_propDict["publishedPermissionScopes"] = new PermissionScope($this->_propDict["publishedPermissionScopes"]);
                return $this->_propDict["publishedPermissionScopes"];
            }
        }
        return null;
    }

    /**
    * Sets the publishedPermissionScopes
    *
    * @param PermissionScope $val The value to assign to the publishedPermissionScopes
    *
    * @return Api The Api
    */
    public function setPublishedPermissionScopes($val)
    {
        $this->_propDict["publishedPermissionScopes"] = $val;
         return $this;
    }
}
