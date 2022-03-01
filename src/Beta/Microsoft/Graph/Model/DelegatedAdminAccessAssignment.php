<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminAccessAssignment File
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
* DelegatedAdminAccessAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminAccessAssignment extends Entity
{
    /**
    * Gets the accessContainer
    *
    * @return DelegatedAdminAccessContainer|null The accessContainer
    */
    public function getAccessContainer()
    {
        if (array_key_exists("accessContainer", $this->_propDict)) {
            if (is_a($this->_propDict["accessContainer"], "\Beta\Microsoft\Graph\Model\DelegatedAdminAccessContainer") || is_null($this->_propDict["accessContainer"])) {
                return $this->_propDict["accessContainer"];
            } else {
                $this->_propDict["accessContainer"] = new DelegatedAdminAccessContainer($this->_propDict["accessContainer"]);
                return $this->_propDict["accessContainer"];
            }
        }
        return null;
    }

    /**
    * Sets the accessContainer
    *
    * @param DelegatedAdminAccessContainer $val The accessContainer
    *
    * @return DelegatedAdminAccessAssignment
    */
    public function setAccessContainer($val)
    {
        $this->_propDict["accessContainer"] = $val;
        return $this;
    }

    /**
    * Gets the accessDetails
    *
    * @return DelegatedAdminAccessDetails|null The accessDetails
    */
    public function getAccessDetails()
    {
        if (array_key_exists("accessDetails", $this->_propDict)) {
            if (is_a($this->_propDict["accessDetails"], "\Beta\Microsoft\Graph\Model\DelegatedAdminAccessDetails") || is_null($this->_propDict["accessDetails"])) {
                return $this->_propDict["accessDetails"];
            } else {
                $this->_propDict["accessDetails"] = new DelegatedAdminAccessDetails($this->_propDict["accessDetails"]);
                return $this->_propDict["accessDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the accessDetails
    *
    * @param DelegatedAdminAccessDetails $val The accessDetails
    *
    * @return DelegatedAdminAccessAssignment
    */
    public function setAccessDetails($val)
    {
        $this->_propDict["accessDetails"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DelegatedAdminAccessAssignment
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DelegatedAdminAccessAssignment
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return DelegatedAdminAccessAssignmentStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\DelegatedAdminAccessAssignmentStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DelegatedAdminAccessAssignmentStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param DelegatedAdminAccessAssignmentStatus $val The status
    *
    * @return DelegatedAdminAccessAssignment
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
