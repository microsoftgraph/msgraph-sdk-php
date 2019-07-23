<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatThread File
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
* ChatThread class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ChatThread extends Entity
{
    /**
    * Gets the rootMessage
    *
    * @return ChatMessage The rootMessage
    */
    public function getRootMessage()
    {
        if (array_key_exists("rootMessage", $this->_propDict)) {
            if (is_a($this->_propDict["rootMessage"], "Microsoft\Graph\Beta\Model\ChatMessage")) {
                return $this->_propDict["rootMessage"];
            } else {
                $this->_propDict["rootMessage"] = new ChatMessage($this->_propDict["rootMessage"]);
                return $this->_propDict["rootMessage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the rootMessage
    *
    * @param ChatMessage $val The rootMessage
    *
    * @return ChatThread
    */
    public function setRootMessage($val)
    {
        $this->_propDict["rootMessage"] = $val;
        return $this;
    }
    
}