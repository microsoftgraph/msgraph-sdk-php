<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImportedAppleDeviceIdentity File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* ImportedAppleDeviceIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ImportedAppleDeviceIdentity extends Entity
{
    /**
    * Gets the serialNumber
    *
    * @return string The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serialNumber
    *
    * @param string $val The serialNumber
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestedEnrollmentProfileId
    *
    * @return string The requestedEnrollmentProfileId
    */
    public function getRequestedEnrollmentProfileId()
    {
        if (array_key_exists("requestedEnrollmentProfileId", $this->_propDict)) {
            return $this->_propDict["requestedEnrollmentProfileId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestedEnrollmentProfileId
    *
    * @param string $val The requestedEnrollmentProfileId
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setRequestedEnrollmentProfileId($val)
    {
        $this->_propDict["requestedEnrollmentProfileId"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestedEnrollmentProfileAssignmentDateTime
    *
    * @return \DateTime The requestedEnrollmentProfileAssignmentDateTime
    */
    public function getRequestedEnrollmentProfileAssignmentDateTime()
    {
        if (array_key_exists("requestedEnrollmentProfileAssignmentDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["requestedEnrollmentProfileAssignmentDateTime"], "\DateTime")) {
                return $this->_propDict["requestedEnrollmentProfileAssignmentDateTime"];
            } else {
                $this->_propDict["requestedEnrollmentProfileAssignmentDateTime"] = new \DateTime($this->_propDict["requestedEnrollmentProfileAssignmentDateTime"]);
                return $this->_propDict["requestedEnrollmentProfileAssignmentDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requestedEnrollmentProfileAssignmentDateTime
    *
    * @param \DateTime $val The requestedEnrollmentProfileAssignmentDateTime
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setRequestedEnrollmentProfileAssignmentDateTime($val)
    {
        $this->_propDict["requestedEnrollmentProfileAssignmentDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the isSupervised
    *
    * @return bool The isSupervised
    */
    public function getIsSupervised()
    {
        if (array_key_exists("isSupervised", $this->_propDict)) {
            return $this->_propDict["isSupervised"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSupervised
    *
    * @param bool $val The isSupervised
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setIsSupervised($val)
    {
        $this->_propDict["isSupervised"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the discoverySource
    *
    * @return DiscoverySource The discoverySource
    */
    public function getDiscoverySource()
    {
        if (array_key_exists("discoverySource", $this->_propDict)) {
            if (is_a($this->_propDict["discoverySource"], "Microsoft\Graph\Model\DiscoverySource")) {
                return $this->_propDict["discoverySource"];
            } else {
                $this->_propDict["discoverySource"] = new DiscoverySource($this->_propDict["discoverySource"]);
                return $this->_propDict["discoverySource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the discoverySource
    *
    * @param DiscoverySource $val The discoverySource
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setDiscoverySource($val)
    {
        $this->_propDict["discoverySource"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
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
    * @return ImportedAppleDeviceIdentity
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastContactedDateTime
    *
    * @return \DateTime The lastContactedDateTime
    */
    public function getLastContactedDateTime()
    {
        if (array_key_exists("lastContactedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastContactedDateTime"], "\DateTime")) {
                return $this->_propDict["lastContactedDateTime"];
            } else {
                $this->_propDict["lastContactedDateTime"] = new \DateTime($this->_propDict["lastContactedDateTime"]);
                return $this->_propDict["lastContactedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastContactedDateTime
    *
    * @param \DateTime $val The lastContactedDateTime
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setLastContactedDateTime($val)
    {
        $this->_propDict["lastContactedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the enrollmentState
    *
    * @return EnrollmentState The enrollmentState
    */
    public function getEnrollmentState()
    {
        if (array_key_exists("enrollmentState", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentState"], "Microsoft\Graph\Model\EnrollmentState")) {
                return $this->_propDict["enrollmentState"];
            } else {
                $this->_propDict["enrollmentState"] = new EnrollmentState($this->_propDict["enrollmentState"]);
                return $this->_propDict["enrollmentState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enrollmentState
    *
    * @param EnrollmentState $val The enrollmentState
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setEnrollmentState($val)
    {
        $this->_propDict["enrollmentState"] = $val;
        return $this;
    }
    
    /**
    * Gets the platform
    *
    * @return Platform The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            if (is_a($this->_propDict["platform"], "Microsoft\Graph\Model\Platform")) {
                return $this->_propDict["platform"];
            } else {
                $this->_propDict["platform"] = new Platform($this->_propDict["platform"]);
                return $this->_propDict["platform"];
            }
        }
        return null;
    }
    
    /**
    * Sets the platform
    *
    * @param Platform $val The platform
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
        return $this;
    }
    
}