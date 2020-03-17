<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfferShiftRequest File
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
* OfferShiftRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OfferShiftRequest extends ScheduleChangeRequest
{
    /**
    * Gets the recipientActionMessage
    *
    * @return string The recipientActionMessage
    */
    public function getRecipientActionMessage()
    {
        if (array_key_exists("recipientActionMessage", $this->_propDict)) {
            return $this->_propDict["recipientActionMessage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recipientActionMessage
    *
    * @param string $val The recipientActionMessage
    *
    * @return OfferShiftRequest
    */
    public function setRecipientActionMessage($val)
    {
        $this->_propDict["recipientActionMessage"] = $val;
        return $this;
    }
    
    /**
    * Gets the recipientActionDateTime
    *
    * @return \DateTime The recipientActionDateTime
    */
    public function getRecipientActionDateTime()
    {
        if (array_key_exists("recipientActionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["recipientActionDateTime"], "\DateTime")) {
                return $this->_propDict["recipientActionDateTime"];
            } else {
                $this->_propDict["recipientActionDateTime"] = new \DateTime($this->_propDict["recipientActionDateTime"]);
                return $this->_propDict["recipientActionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recipientActionDateTime
    *
    * @param \DateTime $val The recipientActionDateTime
    *
    * @return OfferShiftRequest
    */
    public function setRecipientActionDateTime($val)
    {
        $this->_propDict["recipientActionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the senderShiftId
    *
    * @return string The senderShiftId
    */
    public function getSenderShiftId()
    {
        if (array_key_exists("senderShiftId", $this->_propDict)) {
            return $this->_propDict["senderShiftId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the senderShiftId
    *
    * @param string $val The senderShiftId
    *
    * @return OfferShiftRequest
    */
    public function setSenderShiftId($val)
    {
        $this->_propDict["senderShiftId"] = $val;
        return $this;
    }
    
    /**
    * Gets the recipientUserId
    *
    * @return string The recipientUserId
    */
    public function getRecipientUserId()
    {
        if (array_key_exists("recipientUserId", $this->_propDict)) {
            return $this->_propDict["recipientUserId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recipientUserId
    *
    * @param string $val The recipientUserId
    *
    * @return OfferShiftRequest
    */
    public function setRecipientUserId($val)
    {
        $this->_propDict["recipientUserId"] = $val;
        return $this;
    }
    
}