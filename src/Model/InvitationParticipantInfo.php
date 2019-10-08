<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InvitationParticipantInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* InvitationParticipantInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class InvitationParticipantInfo extends ParticipantInfo
{
    /**
    * Gets the replacesCallId
    *
    * @return string The replacesCallId
    */
    public function getReplacesCallId()
    {
        if (array_key_exists("replacesCallId", $this->_propDict)) {
            return $this->_propDict["replacesCallId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the replacesCallId
    *
    * @param string $val The value of the replacesCallId
    *
    * @return InvitationParticipantInfo
    */
    public function setReplacesCallId($val)
    {
        $this->_propDict["replacesCallId"] = $val;
        return $this;
    }
}
