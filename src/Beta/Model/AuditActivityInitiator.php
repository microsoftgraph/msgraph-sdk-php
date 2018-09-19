<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditActivityInitiator File
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
* AuditActivityInitiator class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AuditActivityInitiator extends Entity
{

    /**
    * Gets the user
    *
    * @return UserIdentity The user
    */
    public function getUser()
    {
        if (array_key_exists("user", $this->_propDict)) {
            if (is_a($this->_propDict["user"], "Microsoft\Graph\Beta\Model\UserIdentity")) {
                return $this->_propDict["user"];
            } else {
                $this->_propDict["user"] = new UserIdentity($this->_propDict["user"]);
                return $this->_propDict["user"];
            }
        }
        return null;
    }

    /**
    * Sets the user
    *
    * @param UserIdentity $val The value to assign to the user
    *
    * @return AuditActivityInitiator The AuditActivityInitiator
    */
    public function setUser($val)
    {
        $this->_propDict["user"] = $val;
         return $this;
    }

    /**
    * Gets the app
    *
    * @return AppIdentity The app
    */
    public function getApp()
    {
        if (array_key_exists("app", $this->_propDict)) {
            if (is_a($this->_propDict["app"], "Microsoft\Graph\Beta\Model\AppIdentity")) {
                return $this->_propDict["app"];
            } else {
                $this->_propDict["app"] = new AppIdentity($this->_propDict["app"]);
                return $this->_propDict["app"];
            }
        }
        return null;
    }

    /**
    * Sets the app
    *
    * @param AppIdentity $val The value to assign to the app
    *
    * @return AuditActivityInitiator The AuditActivityInitiator
    */
    public function setApp($val)
    {
        $this->_propDict["app"] = $val;
         return $this;
    }
}
