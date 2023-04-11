<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdleSessionSignOut File
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
* IdleSessionSignOut class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdleSessionSignOut extends Entity
{
    /**
    * Gets the isEnabled
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    *
    * @param bool $val The value of the isEnabled
    *
    * @return IdleSessionSignOut
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the signOutAfterInSeconds
    *
    * @return int|null The signOutAfterInSeconds
    */
    public function getSignOutAfterInSeconds()
    {
        if (array_key_exists("signOutAfterInSeconds", $this->_propDict)) {
            return $this->_propDict["signOutAfterInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signOutAfterInSeconds
    *
    * @param int $val The value of the signOutAfterInSeconds
    *
    * @return IdleSessionSignOut
    */
    public function setSignOutAfterInSeconds($val)
    {
        $this->_propDict["signOutAfterInSeconds"] = $val;
        return $this;
    }
    /**
    * Gets the warnAfterInSeconds
    *
    * @return int|null The warnAfterInSeconds
    */
    public function getWarnAfterInSeconds()
    {
        if (array_key_exists("warnAfterInSeconds", $this->_propDict)) {
            return $this->_propDict["warnAfterInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the warnAfterInSeconds
    *
    * @param int $val The value of the warnAfterInSeconds
    *
    * @return IdleSessionSignOut
    */
    public function setWarnAfterInSeconds($val)
    {
        $this->_propDict["warnAfterInSeconds"] = $val;
        return $this;
    }
}
