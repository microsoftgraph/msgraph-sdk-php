<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleVolumePurchaseProgramToken File
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
* AppleVolumePurchaseProgramToken class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AppleVolumePurchaseProgramToken extends Entity
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
    * @return AppleVolumePurchaseProgramToken
    */
    public function setOrganizationName($val)
    {
        $this->_propDict["organizationName"] = $val;
        return $this;
    }
    
    /**
    * Gets the volumePurchaseProgramTokenAccountType
    *
    * @return VolumePurchaseProgramTokenAccountType The volumePurchaseProgramTokenAccountType
    */
    public function getVolumePurchaseProgramTokenAccountType()
    {
        if (array_key_exists("volumePurchaseProgramTokenAccountType", $this->_propDict)) {
            if (is_a($this->_propDict["volumePurchaseProgramTokenAccountType"], "Microsoft\Graph\Beta\Model\VolumePurchaseProgramTokenAccountType")) {
                return $this->_propDict["volumePurchaseProgramTokenAccountType"];
            } else {
                $this->_propDict["volumePurchaseProgramTokenAccountType"] = new VolumePurchaseProgramTokenAccountType($this->_propDict["volumePurchaseProgramTokenAccountType"]);
                return $this->_propDict["volumePurchaseProgramTokenAccountType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the volumePurchaseProgramTokenAccountType
    *
    * @param VolumePurchaseProgramTokenAccountType $val The volumePurchaseProgramTokenAccountType
    *
    * @return AppleVolumePurchaseProgramToken
    */
    public function setVolumePurchaseProgramTokenAccountType($val)
    {
        $this->_propDict["volumePurchaseProgramTokenAccountType"] = $val;
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
    * @return AppleVolumePurchaseProgramToken
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
    * @return AppleVolumePurchaseProgramToken
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
    * @return AppleVolumePurchaseProgramToken
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
    * @return AppleVolumePurchaseProgramToken
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
    * @return AppleVolumePurchaseProgramToken
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return VolumePurchaseProgramTokenState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Beta\Model\VolumePurchaseProgramTokenState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new VolumePurchaseProgramTokenState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param VolumePurchaseProgramTokenState $val The state
    *
    * @return AppleVolumePurchaseProgramToken
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncStatus
    *
    * @return VolumePurchaseProgramTokenSyncStatus The lastSyncStatus
    */
    public function getLastSyncStatus()
    {
        if (array_key_exists("lastSyncStatus", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncStatus"], "Microsoft\Graph\Beta\Model\VolumePurchaseProgramTokenSyncStatus")) {
                return $this->_propDict["lastSyncStatus"];
            } else {
                $this->_propDict["lastSyncStatus"] = new VolumePurchaseProgramTokenSyncStatus($this->_propDict["lastSyncStatus"]);
                return $this->_propDict["lastSyncStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncStatus
    *
    * @param VolumePurchaseProgramTokenSyncStatus $val The lastSyncStatus
    *
    * @return AppleVolumePurchaseProgramToken
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
    * @return AppleVolumePurchaseProgramToken
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
    * @return AppleVolumePurchaseProgramToken
    */
    public function setCountryOrRegion($val)
    {
        $this->_propDict["countryOrRegion"] = $val;
        return $this;
    }
    
}