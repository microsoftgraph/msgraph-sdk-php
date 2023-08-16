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
namespace Beta\Microsoft\Graph\Model;

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
    * Indicates whether users are allowed to request access to the unavailable Teams apps.
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
    * Indicates whether users are allowed to request access to the unavailable Teams apps.
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

    /**
    * Gets the isChatResourceSpecificConsentEnabled
    * Indicates whether resource-specific consent for chats/meetings has been enabled for the tenant. True indicates that Teams apps that are allowed in the tenant and require resource-specific permissions can be installed inside chats and meetings. False blocks the installation of any Teams app that requires resource-specific permissions in a chat or a meeting.
    *
    * @return bool|null The isChatResourceSpecificConsentEnabled
    */
    public function getIsChatResourceSpecificConsentEnabled()
    {
        if (array_key_exists("isChatResourceSpecificConsentEnabled", $this->_propDict)) {
            return $this->_propDict["isChatResourceSpecificConsentEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isChatResourceSpecificConsentEnabled
    * Indicates whether resource-specific consent for chats/meetings has been enabled for the tenant. True indicates that Teams apps that are allowed in the tenant and require resource-specific permissions can be installed inside chats and meetings. False blocks the installation of any Teams app that requires resource-specific permissions in a chat or a meeting.
    *
    * @param bool $val The isChatResourceSpecificConsentEnabled
    *
    * @return TeamsAppSettings
    */
    public function setIsChatResourceSpecificConsentEnabled($val)
    {
        $this->_propDict["isChatResourceSpecificConsentEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isUserPersonalScopeResourceSpecificConsentEnabled
    * Indicates whether resource-specific consent for personal scope in Teams apps has been enabled for the tenant. True indicates that Teams apps that are allowed in the tenant and require resource-specific permissions can be installed in the personal scope. False blocks the installation of any Teams app that requires resource-specific permissions in the personal scope.
    *
    * @return bool|null The isUserPersonalScopeResourceSpecificConsentEnabled
    */
    public function getIsUserPersonalScopeResourceSpecificConsentEnabled()
    {
        if (array_key_exists("isUserPersonalScopeResourceSpecificConsentEnabled", $this->_propDict)) {
            return $this->_propDict["isUserPersonalScopeResourceSpecificConsentEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isUserPersonalScopeResourceSpecificConsentEnabled
    * Indicates whether resource-specific consent for personal scope in Teams apps has been enabled for the tenant. True indicates that Teams apps that are allowed in the tenant and require resource-specific permissions can be installed in the personal scope. False blocks the installation of any Teams app that requires resource-specific permissions in the personal scope.
    *
    * @param bool $val The isUserPersonalScopeResourceSpecificConsentEnabled
    *
    * @return TeamsAppSettings
    */
    public function setIsUserPersonalScopeResourceSpecificConsentEnabled($val)
    {
        $this->_propDict["isUserPersonalScopeResourceSpecificConsentEnabled"] = boolval($val);
        return $this;
    }

}
