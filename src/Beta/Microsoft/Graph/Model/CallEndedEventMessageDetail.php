<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallEndedEventMessageDetail File
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
* CallEndedEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallEndedEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.callEndedEventMessageDetail");
    }


    /**
    * Gets the callDuration
    *
    * @return Duration|null The callDuration
    */
    public function getCallDuration()
    {
        if (array_key_exists("callDuration", $this->_propDict)) {
            if (is_a($this->_propDict["callDuration"], "\Beta\Microsoft\Graph\Model\Duration") || is_null($this->_propDict["callDuration"])) {
                return $this->_propDict["callDuration"];
            } else {
                $this->_propDict["callDuration"] = new Duration($this->_propDict["callDuration"]);
                return $this->_propDict["callDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the callDuration
    *
    * @param Duration $val The value to assign to the callDuration
    *
    * @return CallEndedEventMessageDetail The CallEndedEventMessageDetail
    */
    public function setCallDuration($val)
    {
        $this->_propDict["callDuration"] = $val;
         return $this;
    }
    /**
    * Gets the callId
    *
    * @return string|null The callId
    */
    public function getCallId()
    {
        if (array_key_exists("callId", $this->_propDict)) {
            return $this->_propDict["callId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callId
    *
    * @param string $val The value of the callId
    *
    * @return CallEndedEventMessageDetail
    */
    public function setCallId($val)
    {
        $this->_propDict["callId"] = $val;
        return $this;
    }

    /**
    * Gets the callParticipants
    *
    * @return CallParticipantInfo|null The callParticipants
    */
    public function getCallParticipants()
    {
        if (array_key_exists("callParticipants", $this->_propDict)) {
            if (is_a($this->_propDict["callParticipants"], "\Beta\Microsoft\Graph\Model\CallParticipantInfo") || is_null($this->_propDict["callParticipants"])) {
                return $this->_propDict["callParticipants"];
            } else {
                $this->_propDict["callParticipants"] = new CallParticipantInfo($this->_propDict["callParticipants"]);
                return $this->_propDict["callParticipants"];
            }
        }
        return null;
    }

    /**
    * Sets the callParticipants
    *
    * @param CallParticipantInfo $val The value to assign to the callParticipants
    *
    * @return CallEndedEventMessageDetail The CallEndedEventMessageDetail
    */
    public function setCallParticipants($val)
    {
        $this->_propDict["callParticipants"] = $val;
         return $this;
    }

    /**
    * Gets the initiator
    *
    * @return IdentitySet|null The initiator
    */
    public function getInitiator()
    {
        if (array_key_exists("initiator", $this->_propDict)) {
            if (is_a($this->_propDict["initiator"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["initiator"])) {
                return $this->_propDict["initiator"];
            } else {
                $this->_propDict["initiator"] = new IdentitySet($this->_propDict["initiator"]);
                return $this->_propDict["initiator"];
            }
        }
        return null;
    }

    /**
    * Sets the initiator
    *
    * @param IdentitySet $val The value to assign to the initiator
    *
    * @return CallEndedEventMessageDetail The CallEndedEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }
}
