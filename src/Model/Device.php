<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Device File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Device class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Device extends DirectoryObject
{
    /**
    * Gets the accountEnabled
    *
    * @return bool The accountEnabled
    */
    public function getAccountEnabled()
    {
        if (array_key_exists("accountEnabled", $this->_propDict)) {
            return $this->_propDict["accountEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountEnabled
    *
    * @param bool $val The accountEnabled
    *
    * @return Device
    */
    public function setAccountEnabled($val)
    {
        $this->_propDict["accountEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the alternativeSecurityIds
     *
     * @return array The alternativeSecurityIds
     */
    public function getAlternativeSecurityIds()
    {
        if (array_key_exists("alternativeSecurityIds", $this->_propDict)) {
           return $this->_propDict["alternativeSecurityIds"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the alternativeSecurityIds
    *
    * @param AlternativeSecurityId $val The alternativeSecurityIds
    *
    * @return Device
    */
    public function setAlternativeSecurityIds($val)
    {
		$this->_propDict["alternativeSecurityIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the approximateLastSignInDateTime
    *
    * @return \DateTime The approximateLastSignInDateTime
    */
    public function getApproximateLastSignInDateTime()
    {
        if (array_key_exists("approximateLastSignInDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["approximateLastSignInDateTime"], "\DateTime")) {
                return $this->_propDict["approximateLastSignInDateTime"];
            } else {
                $this->_propDict["approximateLastSignInDateTime"] = new \DateTime($this->_propDict["approximateLastSignInDateTime"]);
                return $this->_propDict["approximateLastSignInDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the approximateLastSignInDateTime
    *
    * @param \DateTime $val The approximateLastSignInDateTime
    *
    * @return Device
    */
    public function setApproximateLastSignInDateTime($val)
    {
        $this->_propDict["approximateLastSignInDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceId
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceId
    *
    * @param string $val The deviceId
    *
    * @return Device
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceMetadata
    *
    * @return string The deviceMetadata
    */
    public function getDeviceMetadata()
    {
        if (array_key_exists("deviceMetadata", $this->_propDict)) {
            return $this->_propDict["deviceMetadata"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceMetadata
    *
    * @param string $val The deviceMetadata
    *
    * @return Device
    */
    public function setDeviceMetadata($val)
    {
        $this->_propDict["deviceMetadata"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceVersion
    *
    * @return int The deviceVersion
    */
    public function getDeviceVersion()
    {
        if (array_key_exists("deviceVersion", $this->_propDict)) {
            return $this->_propDict["deviceVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceVersion
    *
    * @param int $val The deviceVersion
    *
    * @return Device
    */
    public function setDeviceVersion($val)
    {
        $this->_propDict["deviceVersion"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
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
    * @return Device
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isCompliant
    *
    * @return bool The isCompliant
    */
    public function getIsCompliant()
    {
        if (array_key_exists("isCompliant", $this->_propDict)) {
            return $this->_propDict["isCompliant"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isCompliant
    *
    * @param bool $val The isCompliant
    *
    * @return Device
    */
    public function setIsCompliant($val)
    {
        $this->_propDict["isCompliant"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isManaged
    *
    * @return bool The isManaged
    */
    public function getIsManaged()
    {
        if (array_key_exists("isManaged", $this->_propDict)) {
            return $this->_propDict["isManaged"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isManaged
    *
    * @param bool $val The isManaged
    *
    * @return Device
    */
    public function setIsManaged($val)
    {
        $this->_propDict["isManaged"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the onPremisesLastSyncDateTime
    *
    * @return \DateTime The onPremisesLastSyncDateTime
    */
    public function getOnPremisesLastSyncDateTime()
    {
        if (array_key_exists("onPremisesLastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesLastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["onPremisesLastSyncDateTime"];
            } else {
                $this->_propDict["onPremisesLastSyncDateTime"] = new \DateTime($this->_propDict["onPremisesLastSyncDateTime"]);
                return $this->_propDict["onPremisesLastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onPremisesLastSyncDateTime
    *
    * @param \DateTime $val The onPremisesLastSyncDateTime
    *
    * @return Device
    */
    public function setOnPremisesLastSyncDateTime($val)
    {
        $this->_propDict["onPremisesLastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSyncEnabled
    *
    * @return bool The onPremisesSyncEnabled
    */
    public function getOnPremisesSyncEnabled()
    {
        if (array_key_exists("onPremisesSyncEnabled", $this->_propDict)) {
            return $this->_propDict["onPremisesSyncEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesSyncEnabled
    *
    * @param bool $val The onPremisesSyncEnabled
    *
    * @return Device
    */
    public function setOnPremisesSyncEnabled($val)
    {
        $this->_propDict["onPremisesSyncEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the operatingSystem
    *
    * @return string The operatingSystem
    */
    public function getOperatingSystem()
    {
        if (array_key_exists("operatingSystem", $this->_propDict)) {
            return $this->_propDict["operatingSystem"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the operatingSystem
    *
    * @param string $val The operatingSystem
    *
    * @return Device
    */
    public function setOperatingSystem($val)
    {
        $this->_propDict["operatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the operatingSystemVersion
    *
    * @return string The operatingSystemVersion
    */
    public function getOperatingSystemVersion()
    {
        if (array_key_exists("operatingSystemVersion", $this->_propDict)) {
            return $this->_propDict["operatingSystemVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the operatingSystemVersion
    *
    * @param string $val The operatingSystemVersion
    *
    * @return Device
    */
    public function setOperatingSystemVersion($val)
    {
        $this->_propDict["operatingSystemVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the physicalIds
    *
    * @return string The physicalIds
    */
    public function getPhysicalIds()
    {
        if (array_key_exists("physicalIds", $this->_propDict)) {
            return $this->_propDict["physicalIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the physicalIds
    *
    * @param string $val The physicalIds
    *
    * @return Device
    */
    public function setPhysicalIds($val)
    {
        $this->_propDict["physicalIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the trustType
    *
    * @return string The trustType
    */
    public function getTrustType()
    {
        if (array_key_exists("trustType", $this->_propDict)) {
            return $this->_propDict["trustType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the trustType
    *
    * @param string $val The trustType
    *
    * @return Device
    */
    public function setTrustType($val)
    {
        $this->_propDict["trustType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the registeredOwners
     *
     * @return array The registeredOwners
     */
    public function getRegisteredOwners()
    {
        if (array_key_exists("registeredOwners", $this->_propDict)) {
           return $this->_propDict["registeredOwners"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the registeredOwners
    *
    * @param DirectoryObject $val The registeredOwners
    *
    * @return Device
    */
    public function setRegisteredOwners($val)
    {
		$this->_propDict["registeredOwners"] = $val;
        return $this;
    }
    

     /** 
     * Gets the registeredUsers
     *
     * @return array The registeredUsers
     */
    public function getRegisteredUsers()
    {
        if (array_key_exists("registeredUsers", $this->_propDict)) {
           return $this->_propDict["registeredUsers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the registeredUsers
    *
    * @param DirectoryObject $val The registeredUsers
    *
    * @return Device
    */
    public function setRegisteredUsers($val)
    {
		$this->_propDict["registeredUsers"] = $val;
        return $this;
    }
    
}