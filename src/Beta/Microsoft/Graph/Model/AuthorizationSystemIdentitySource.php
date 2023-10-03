<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthorizationSystemIdentitySource File
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
* AuthorizationSystemIdentitySource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthorizationSystemIdentitySource extends Entity
{
    /**
    * Gets the identityProviderType
    *
    * @return string|null The identityProviderType
    */
    public function getIdentityProviderType()
    {
        if (array_key_exists("identityProviderType", $this->_propDict)) {
            return $this->_propDict["identityProviderType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityProviderType
    *
    * @param string $val The value of the identityProviderType
    *
    * @return AuthorizationSystemIdentitySource
    */
    public function setIdentityProviderType($val)
    {
        $this->_propDict["identityProviderType"] = $val;
        return $this;
    }
}
