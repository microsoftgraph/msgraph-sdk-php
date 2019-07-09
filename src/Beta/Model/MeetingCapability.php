<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingCapability File
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
* MeetingCapability class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MeetingCapability extends Entity
{
    /**
    * Gets the allowAnonymousUsersToDialOut
    *
    * @return bool The allowAnonymousUsersToDialOut
    */
    public function getAllowAnonymousUsersToDialOut()
    {
        if (array_key_exists("allowAnonymousUsersToDialOut", $this->_propDict)) {
            return $this->_propDict["allowAnonymousUsersToDialOut"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowAnonymousUsersToDialOut
    *
    * @param bool $val The value of the allowAnonymousUsersToDialOut
    *
    * @return MeetingCapability
    */
    public function setAllowAnonymousUsersToDialOut($val)
    {
        $this->_propDict["allowAnonymousUsersToDialOut"] = $val;
        return $this;
    }

    /**
    * Gets the autoAdmittedUsers
    *
    * @return AutoAdmittedUsersType The autoAdmittedUsers
    */
    public function getAutoAdmittedUsers()
    {
        if (array_key_exists("autoAdmittedUsers", $this->_propDict)) {
            if (is_a($this->_propDict["autoAdmittedUsers"], "Microsoft\Graph\Beta\Model\AutoAdmittedUsersType")) {
                return $this->_propDict["autoAdmittedUsers"];
            } else {
                $this->_propDict["autoAdmittedUsers"] = new AutoAdmittedUsersType($this->_propDict["autoAdmittedUsers"]);
                return $this->_propDict["autoAdmittedUsers"];
            }
        }
        return null;
    }

    /**
    * Sets the autoAdmittedUsers
    *
    * @param AutoAdmittedUsersType $val The value to assign to the autoAdmittedUsers
    *
    * @return MeetingCapability The MeetingCapability
    */
    public function setAutoAdmittedUsers($val)
    {
        $this->_propDict["autoAdmittedUsers"] = $val;
         return $this;
    }
}
