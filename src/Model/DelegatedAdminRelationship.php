<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminRelationship File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* DelegatedAdminRelationship class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminRelationship extends Entity
{
    /**
    * Gets the accessDetails
    *
    * @return DelegatedAdminAccessDetails|null The accessDetails
    */
    public function getAccessDetails()
    {
        if (array_key_exists("accessDetails", $this->_propDict)) {
            if (is_a($this->_propDict["accessDetails"], "\Microsoft\Graph\Model\DelegatedAdminAccessDetails") || is_null($this->_propDict["accessDetails"])) {
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
    * @return DelegatedAdminRelationship
    */
    public function setAccessDetails($val)
    {
        $this->_propDict["accessDetails"] = $val;
        return $this;
    }

    /**
    * Gets the activatedDateTime
    *
    * @return \DateTime|null The activatedDateTime
    */
    public function getActivatedDateTime()
    {
        if (array_key_exists("activatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activatedDateTime"], "\DateTime") || is_null($this->_propDict["activatedDateTime"])) {
                return $this->_propDict["activatedDateTime"];
            } else {
                $this->_propDict["activatedDateTime"] = new \DateTime($this->_propDict["activatedDateTime"]);
                return $this->_propDict["activatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the activatedDateTime
    *
    * @param \DateTime $val The activatedDateTime
    *
    * @return DelegatedAdminRelationship
    */
    public function setActivatedDateTime($val)
    {
        $this->_propDict["activatedDateTime"] = $val;
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
    * @return DelegatedAdminRelationship
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the customer
    *
    * @return DelegatedAdminRelationshipCustomerParticipant|null The customer
    */
    public function getCustomer()
    {
        if (array_key_exists("customer", $this->_propDict)) {
            if (is_a($this->_propDict["customer"], "\Microsoft\Graph\Model\DelegatedAdminRelationshipCustomerParticipant") || is_null($this->_propDict["customer"])) {
                return $this->_propDict["customer"];
            } else {
                $this->_propDict["customer"] = new DelegatedAdminRelationshipCustomerParticipant($this->_propDict["customer"]);
                return $this->_propDict["customer"];
            }
        }
        return null;
    }

    /**
    * Sets the customer
    *
    * @param DelegatedAdminRelationshipCustomerParticipant $val The customer
    *
    * @return DelegatedAdminRelationship
    */
    public function setCustomer($val)
    {
        $this->_propDict["customer"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return DelegatedAdminRelationship
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the duration
    *
    * @return \DateInterval|null The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            if (is_a($this->_propDict["duration"], "\DateInterval") || is_null($this->_propDict["duration"])) {
                return $this->_propDict["duration"];
            } else {
                $this->_propDict["duration"] = new \DateInterval($this->_propDict["duration"]);
                return $this->_propDict["duration"];
            }
        }
        return null;
    }

    /**
    * Sets the duration
    *
    * @param \DateInterval $val The duration
    *
    * @return DelegatedAdminRelationship
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    *
    * @param \DateTime $val The endDateTime
    *
    * @return DelegatedAdminRelationship
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
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
    * @return DelegatedAdminRelationship
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return DelegatedAdminRelationshipStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\DelegatedAdminRelationshipStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DelegatedAdminRelationshipStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param DelegatedAdminRelationshipStatus $val The status
    *
    * @return DelegatedAdminRelationship
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the accessAssignments
     *
     * @return array|null The accessAssignments
     */
    public function getAccessAssignments()
    {
        if (array_key_exists("accessAssignments", $this->_propDict)) {
           return $this->_propDict["accessAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessAssignments
    *
    * @param DelegatedAdminAccessAssignment[] $val The accessAssignments
    *
    * @return DelegatedAdminRelationship
    */
    public function setAccessAssignments($val)
    {
        $this->_propDict["accessAssignments"] = $val;
        return $this;
    }


     /**
     * Gets the operations
     *
     * @return array|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operations
    *
    * @param DelegatedAdminRelationshipOperation[] $val The operations
    *
    * @return DelegatedAdminRelationship
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }


     /**
     * Gets the requests
     *
     * @return array|null The requests
     */
    public function getRequests()
    {
        if (array_key_exists("requests", $this->_propDict)) {
           return $this->_propDict["requests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requests
    *
    * @param DelegatedAdminRelationshipRequest[] $val The requests
    *
    * @return DelegatedAdminRelationship
    */
    public function setRequests($val)
    {
        $this->_propDict["requests"] = $val;
        return $this;
    }

}
