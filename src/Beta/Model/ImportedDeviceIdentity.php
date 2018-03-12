<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImportedDeviceIdentity File
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
* ImportedDeviceIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ImportedDeviceIdentity extends Entity
{
    /**
    * Gets the importedDeviceIdentifier
    *
    * @return string The importedDeviceIdentifier
    */
    public function getImportedDeviceIdentifier()
    {
        if (array_key_exists("importedDeviceIdentifier", $this->_propDict)) {
            return $this->_propDict["importedDeviceIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the importedDeviceIdentifier
    *
    * @param string $val The importedDeviceIdentifier
    *
    * @return ImportedDeviceIdentity
    */
    public function setImportedDeviceIdentifier($val)
    {
        $this->_propDict["importedDeviceIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the importedDeviceIdentityType
    *
    * @return ImportedDeviceIdentityType The importedDeviceIdentityType
    */
    public function getImportedDeviceIdentityType()
    {
        if (array_key_exists("importedDeviceIdentityType", $this->_propDict)) {
            if (is_a($this->_propDict["importedDeviceIdentityType"], "Microsoft\Graph\Model\ImportedDeviceIdentityType")) {
                return $this->_propDict["importedDeviceIdentityType"];
            } else {
                $this->_propDict["importedDeviceIdentityType"] = new ImportedDeviceIdentityType($this->_propDict["importedDeviceIdentityType"]);
                return $this->_propDict["importedDeviceIdentityType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the importedDeviceIdentityType
    *
    * @param ImportedDeviceIdentityType $val The importedDeviceIdentityType
    *
    * @return ImportedDeviceIdentity
    */
    public function setImportedDeviceIdentityType($val)
    {
        $this->_propDict["importedDeviceIdentityType"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
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
    * @return ImportedDeviceIdentity
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
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
    * @return ImportedDeviceIdentity
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
    * @return ImportedDeviceIdentity
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
    * @return ImportedDeviceIdentity
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
    * @return ImportedDeviceIdentity
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
    * @return ImportedDeviceIdentity
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
        return $this;
    }
    
}