<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CreateRemoteHelpSessionResponse File
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
* CreateRemoteHelpSessionResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CreateRemoteHelpSessionResponse extends Entity
{
    /**
    * Gets the sessionKey
    * The unique identifier for a session
    *
    * @return string|null The sessionKey
    */
    public function getSessionKey()
    {
        if (array_key_exists("sessionKey", $this->_propDict)) {
            return $this->_propDict["sessionKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sessionKey
    * The unique identifier for a session
    *
    * @param string $val The value of the sessionKey
    *
    * @return CreateRemoteHelpSessionResponse
    */
    public function setSessionKey($val)
    {
        $this->_propDict["sessionKey"] = $val;
        return $this;
    }
}
