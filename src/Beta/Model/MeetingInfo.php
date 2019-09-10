<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingInfo File
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
* MeetingInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MeetingInfo extends Entity
{
    /**
    * Gets the allowConversationWithoutHost
    *
    * @return bool The allowConversationWithoutHost
    */
    public function getAllowConversationWithoutHost()
    {
        if (array_key_exists("allowConversationWithoutHost", $this->_propDict)) {
            return $this->_propDict["allowConversationWithoutHost"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowConversationWithoutHost
    *
    * @param bool $val The value of the allowConversationWithoutHost
    *
    * @return MeetingInfo
    */
    public function setAllowConversationWithoutHost($val)
    {
        $this->_propDict["allowConversationWithoutHost"] = $val;
        return $this;
    }
}
