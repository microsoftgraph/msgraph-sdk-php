<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConversationMember File
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
* ConversationMember class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConversationMember extends Entity
{
    /**
    * Gets the displayName
    * The display name of the user.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The display name of the user.
    *
    * @param string $val The displayName
    *
    * @return ConversationMember
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the roles
    * The roles for that user.
    *
    * @return string The roles
    */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
            return $this->_propDict["roles"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roles
    * The roles for that user.
    *
    * @param string $val The roles
    *
    * @return ConversationMember
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
        return $this;
    }
    
}