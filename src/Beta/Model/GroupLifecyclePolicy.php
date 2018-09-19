<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupLifecyclePolicy File
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
* GroupLifecyclePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class GroupLifecyclePolicy extends Entity
{
    /**
    * Gets the groupLifetimeInDays
    *
    * @return int The groupLifetimeInDays
    */
    public function getGroupLifetimeInDays()
    {
        if (array_key_exists("groupLifetimeInDays", $this->_propDict)) {
            return $this->_propDict["groupLifetimeInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupLifetimeInDays
    *
    * @param int $val The groupLifetimeInDays
    *
    * @return GroupLifecyclePolicy
    */
    public function setGroupLifetimeInDays($val)
    {
        $this->_propDict["groupLifetimeInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the managedGroupTypes
    *
    * @return string The managedGroupTypes
    */
    public function getManagedGroupTypes()
    {
        if (array_key_exists("managedGroupTypes", $this->_propDict)) {
            return $this->_propDict["managedGroupTypes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedGroupTypes
    *
    * @param string $val The managedGroupTypes
    *
    * @return GroupLifecyclePolicy
    */
    public function setManagedGroupTypes($val)
    {
        $this->_propDict["managedGroupTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the alternateNotificationEmails
    *
    * @return string The alternateNotificationEmails
    */
    public function getAlternateNotificationEmails()
    {
        if (array_key_exists("alternateNotificationEmails", $this->_propDict)) {
            return $this->_propDict["alternateNotificationEmails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the alternateNotificationEmails
    *
    * @param string $val The alternateNotificationEmails
    *
    * @return GroupLifecyclePolicy
    */
    public function setAlternateNotificationEmails($val)
    {
        $this->_propDict["alternateNotificationEmails"] = $val;
        return $this;
    }
    
}