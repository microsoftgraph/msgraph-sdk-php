<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsRequestChange File
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
* PermissionsRequestChange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsRequestChange extends Entity
{
    /**
    * Gets the activeOccurrenceStatus
    *
    * @return PermissionsRequestOccurrenceStatus|null The activeOccurrenceStatus
    */
    public function getActiveOccurrenceStatus()
    {
        if (array_key_exists("activeOccurrenceStatus", $this->_propDict)) {
            if (is_a($this->_propDict["activeOccurrenceStatus"], "\Beta\Microsoft\Graph\Model\PermissionsRequestOccurrenceStatus") || is_null($this->_propDict["activeOccurrenceStatus"])) {
                return $this->_propDict["activeOccurrenceStatus"];
            } else {
                $this->_propDict["activeOccurrenceStatus"] = new PermissionsRequestOccurrenceStatus($this->_propDict["activeOccurrenceStatus"]);
                return $this->_propDict["activeOccurrenceStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the activeOccurrenceStatus
    *
    * @param PermissionsRequestOccurrenceStatus $val The activeOccurrenceStatus
    *
    * @return PermissionsRequestChange
    */
    public function setActiveOccurrenceStatus($val)
    {
        $this->_propDict["activeOccurrenceStatus"] = $val;
        return $this;
    }

    /**
    * Gets the modificationDateTime
    *
    * @return \DateTime|null The modificationDateTime
    */
    public function getModificationDateTime()
    {
        if (array_key_exists("modificationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modificationDateTime"], "\DateTime") || is_null($this->_propDict["modificationDateTime"])) {
                return $this->_propDict["modificationDateTime"];
            } else {
                $this->_propDict["modificationDateTime"] = new \DateTime($this->_propDict["modificationDateTime"]);
                return $this->_propDict["modificationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the modificationDateTime
    *
    * @param \DateTime $val The modificationDateTime
    *
    * @return PermissionsRequestChange
    */
    public function setModificationDateTime($val)
    {
        $this->_propDict["modificationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the permissionsRequestId
    *
    * @return string|null The permissionsRequestId
    */
    public function getPermissionsRequestId()
    {
        if (array_key_exists("permissionsRequestId", $this->_propDict)) {
            return $this->_propDict["permissionsRequestId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permissionsRequestId
    *
    * @param string $val The permissionsRequestId
    *
    * @return PermissionsRequestChange
    */
    public function setPermissionsRequestId($val)
    {
        $this->_propDict["permissionsRequestId"] = $val;
        return $this;
    }

    /**
    * Gets the statusDetail
    *
    * @return StatusDetail|null The statusDetail
    */
    public function getStatusDetail()
    {
        if (array_key_exists("statusDetail", $this->_propDict)) {
            if (is_a($this->_propDict["statusDetail"], "\Beta\Microsoft\Graph\Model\StatusDetail") || is_null($this->_propDict["statusDetail"])) {
                return $this->_propDict["statusDetail"];
            } else {
                $this->_propDict["statusDetail"] = new StatusDetail($this->_propDict["statusDetail"]);
                return $this->_propDict["statusDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the statusDetail
    *
    * @param StatusDetail $val The statusDetail
    *
    * @return PermissionsRequestChange
    */
    public function setStatusDetail($val)
    {
        $this->_propDict["statusDetail"] = $val;
        return $this;
    }

    /**
    * Gets the ticketId
    *
    * @return string|null The ticketId
    */
    public function getTicketId()
    {
        if (array_key_exists("ticketId", $this->_propDict)) {
            return $this->_propDict["ticketId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ticketId
    *
    * @param string $val The ticketId
    *
    * @return PermissionsRequestChange
    */
    public function setTicketId($val)
    {
        $this->_propDict["ticketId"] = $val;
        return $this;
    }

}
