<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TicketInfo File
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
* TicketInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TicketInfo extends Entity
{
    /**
    * Gets the ticketApproverIdentityId
    *
    * @return string|null The ticketApproverIdentityId
    */
    public function getTicketApproverIdentityId()
    {
        if (array_key_exists("ticketApproverIdentityId", $this->_propDict)) {
            return $this->_propDict["ticketApproverIdentityId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ticketApproverIdentityId
    *
    * @param string $val The value of the ticketApproverIdentityId
    *
    * @return TicketInfo
    */
    public function setTicketApproverIdentityId($val)
    {
        $this->_propDict["ticketApproverIdentityId"] = $val;
        return $this;
    }
    /**
    * Gets the ticketNumber
    * The ticket number.
    *
    * @return string|null The ticketNumber
    */
    public function getTicketNumber()
    {
        if (array_key_exists("ticketNumber", $this->_propDict)) {
            return $this->_propDict["ticketNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ticketNumber
    * The ticket number.
    *
    * @param string $val The value of the ticketNumber
    *
    * @return TicketInfo
    */
    public function setTicketNumber($val)
    {
        $this->_propDict["ticketNumber"] = $val;
        return $this;
    }
    /**
    * Gets the ticketSubmitterIdentityId
    *
    * @return string|null The ticketSubmitterIdentityId
    */
    public function getTicketSubmitterIdentityId()
    {
        if (array_key_exists("ticketSubmitterIdentityId", $this->_propDict)) {
            return $this->_propDict["ticketSubmitterIdentityId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ticketSubmitterIdentityId
    *
    * @param string $val The value of the ticketSubmitterIdentityId
    *
    * @return TicketInfo
    */
    public function setTicketSubmitterIdentityId($val)
    {
        $this->_propDict["ticketSubmitterIdentityId"] = $val;
        return $this;
    }
    /**
    * Gets the ticketSystem
    * The description of the ticket system.
    *
    * @return string|null The ticketSystem
    */
    public function getTicketSystem()
    {
        if (array_key_exists("ticketSystem", $this->_propDict)) {
            return $this->_propDict["ticketSystem"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ticketSystem
    * The description of the ticket system.
    *
    * @param string $val The value of the ticketSystem
    *
    * @return TicketInfo
    */
    public function setTicketSystem($val)
    {
        $this->_propDict["ticketSystem"] = $val;
        return $this;
    }
}
