<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VppToken File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* VppToken class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class VppToken extends Entity
{
    /**
    * Gets the organizationName
    *
    * @return string The organizationName
    */
    public function getOrganizationName()
    {
        if (array_key_exists("organizationName", $this->_propDict)) {
            return $this->_propDict["organizationName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizationName
    *
    * @param string $val The organizationName
    *
    * @return VppToken
    */
    public function setOrganizationName($val)
    {
        $this->_propDict["organizationName"] = $val;
        return $this;
    }
    
    /**
    * Gets the vppTokenAccountType
    *
    * @return VppTokenAccountType The vppTokenAccountType
    */
    public function getVppTokenAccountType()
    {
        if (array_key_exists("vppTokenAccountType", $this->_propDict)) {
            if (is_a($this->_propDict["vppTokenAccountType"], "Microsoft\Graph\Beta\Model\VppTokenAccountType")) {
                return $this->_propDict["vppTokenAccountType"];
            } else {
                $this->_propDict["vppTokenAccountType"] = new VppTokenAccountType($this->_propDict["vppTokenAccountType"]);
                return $this->_propDict["vppTokenAccountType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the vppTokenAccountType
    *
    * @param VppTokenAccountType $val The vppTokenAccountType
    *
    * @return VppToken
    */
    public function setVppTokenAccountType($val)
    {
        $this->_propDict["vppTokenAccountType"] = $val;
        return $this;
    }
    
    /**
    * Gets the appleId
    *
    * @return string The appleId
    */
    public function getAppleId()
    {
        if (array_key_exists("appleId", $this->_propDict)) {
            return $this->_propDict["appleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleId
    *
    * @param string $val The appleId
    *
    * @return VppToken
    */
    public function setAppleId($val)
    {
        $this->_propDict["appleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return VppToken
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncDateTime
    *
    * @return \DateTime The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncDateTime
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return VppToken
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the token
    *
    * @return string The token
    */
    public function getToken()
    {
        if (array_key_exists("token", $this->_propDict)) {
            return $this->_propDict["token"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the token
    *
    * @param string $val The token
    *
    * @return VppToken
    */
    public function setToken($val)
    {
        $this->_propDict["token"] = $val;
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
    * @return VppToken
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return VppTokenState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Beta\Model\VppTokenState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new VppTokenState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param VppTokenState $val The state
    *
    * @return VppToken
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tokenActionResults
     *
     * @return array The tokenActionResults
     */
    public function getTokenActionResults()
    {
        if (array_key_exists("tokenActionResults", $this->_propDict)) {
           return $this->_propDict["tokenActionResults"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tokenActionResults
    *
    * @param VppTokenActionResult $val The tokenActionResults
    *
    * @return VppToken
    */
    public function setTokenActionResults($val)
    {
		$this->_propDict["tokenActionResults"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncStatus
    *
    * @return VppTokenSyncStatus The lastSyncStatus
    */
    public function getLastSyncStatus()
    {
        if (array_key_exists("lastSyncStatus", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncStatus"], "Microsoft\Graph\Beta\Model\VppTokenSyncStatus")) {
                return $this->_propDict["lastSyncStatus"];
            } else {
                $this->_propDict["lastSyncStatus"] = new VppTokenSyncStatus($this->_propDict["lastSyncStatus"]);
                return $this->_propDict["lastSyncStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncStatus
    *
    * @param VppTokenSyncStatus $val The lastSyncStatus
    *
    * @return VppToken
    */
    public function setLastSyncStatus($val)
    {
        $this->_propDict["lastSyncStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the automaticallyUpdateApps
    *
    * @return bool The automaticallyUpdateApps
    */
    public function getAutomaticallyUpdateApps()
    {
        if (array_key_exists("automaticallyUpdateApps", $this->_propDict)) {
            return $this->_propDict["automaticallyUpdateApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the automaticallyUpdateApps
    *
    * @param bool $val The automaticallyUpdateApps
    *
    * @return VppToken
    */
    public function setAutomaticallyUpdateApps($val)
    {
        $this->_propDict["automaticallyUpdateApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the countryOrRegion
    *
    * @return string The countryOrRegion
    */
    public function getCountryOrRegion()
    {
        if (array_key_exists("countryOrRegion", $this->_propDict)) {
            return $this->_propDict["countryOrRegion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the countryOrRegion
    *
    * @param string $val The countryOrRegion
    *
    * @return VppToken
    */
    public function setCountryOrRegion($val)
    {
        $this->_propDict["countryOrRegion"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataSharingConsentGranted
    *
    * @return bool The dataSharingConsentGranted
    */
    public function getDataSharingConsentGranted()
    {
        if (array_key_exists("dataSharingConsentGranted", $this->_propDict)) {
            return $this->_propDict["dataSharingConsentGranted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dataSharingConsentGranted
    *
    * @param bool $val The dataSharingConsentGranted
    *
    * @return VppToken
    */
    public function setDataSharingConsentGranted($val)
    {
        $this->_propDict["dataSharingConsentGranted"] = boolval($val);
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
    * @return VppToken
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the locationName
    *
    * @return string The locationName
    */
    public function getLocationName()
    {
        if (array_key_exists("locationName", $this->_propDict)) {
            return $this->_propDict["locationName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the locationName
    *
    * @param string $val The locationName
    *
    * @return VppToken
    */
    public function setLocationName($val)
    {
        $this->_propDict["locationName"] = $val;
        return $this;
    }
    
}