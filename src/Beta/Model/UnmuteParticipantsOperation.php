<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnmuteParticipantsOperation File
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
* UnmuteParticipantsOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UnmuteParticipantsOperation extends CommsOperation
{
    /**
    * Gets the participants
    *
    * @return string The participants
    */
    public function getParticipants()
    {
        if (array_key_exists("participants", $this->_propDict)) {
            return $this->_propDict["participants"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the participants
    *
    * @param string $val The participants
    *
    * @return UnmuteParticipantsOperation
    */
    public function setParticipants($val)
    {
        $this->_propDict["participants"] = $val;
        return $this;
    }
    
}