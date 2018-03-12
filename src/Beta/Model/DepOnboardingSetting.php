<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DepOnboardingSetting File
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
* DepOnboardingSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DepOnboardingSetting extends Entity
{
    /**
    * Gets the appleIdentifier
    *
    * @return string The appleIdentifier
    */
    public function getAppleIdentifier()
    {
        if (array_key_exists("appleIdentifier", $this->_propDict)) {
            return $this->_propDict["appleIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleIdentifier
    *
    * @param string $val The appleIdentifier
    *
    * @return DepOnboardingSetting
    */
    public function setAppleIdentifier($val)
    {
        $this->_propDict["appleIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenExpirationDateTime
    *
    * @return \DateTime The tokenExpirationDateTime
    */
    public function getTokenExpirationDateTime()
    {
        if (array_key_exists("tokenExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["tokenExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["tokenExpirationDateTime"];
            } else {
                $this->_propDict["tokenExpirationDateTime"] = new \DateTime($this->_propDict["tokenExpirationDateTime"]);
                return $this->_propDict["tokenExpirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tokenExpirationDateTime
    *
    * @param \DateTime $val The tokenExpirationDateTime
    *
    * @return DepOnboardingSetting
    */
    public function setTokenExpirationDateTime($val)
    {
        $this->_propDict["tokenExpirationDateTime"] = $val;
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
    * @return DepOnboardingSetting
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSuccessfulSyncDateTime
    *
    * @return \DateTime The lastSuccessfulSyncDateTime
    */
    public function getLastSuccessfulSyncDateTime()
    {
        if (array_key_exists("lastSuccessfulSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSuccessfulSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSuccessfulSyncDateTime"];
            } else {
                $this->_propDict["lastSuccessfulSyncDateTime"] = new \DateTime($this->_propDict["lastSuccessfulSyncDateTime"]);
                return $this->_propDict["lastSuccessfulSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSuccessfulSyncDateTime
    *
    * @param \DateTime $val The lastSuccessfulSyncDateTime
    *
    * @return DepOnboardingSetting
    */
    public function setLastSuccessfulSyncDateTime($val)
    {
        $this->_propDict["lastSuccessfulSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncTriggeredDateTime
    *
    * @return \DateTime The lastSyncTriggeredDateTime
    */
    public function getLastSyncTriggeredDateTime()
    {
        if (array_key_exists("lastSyncTriggeredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncTriggeredDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncTriggeredDateTime"];
            } else {
                $this->_propDict["lastSyncTriggeredDateTime"] = new \DateTime($this->_propDict["lastSyncTriggeredDateTime"]);
                return $this->_propDict["lastSyncTriggeredDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncTriggeredDateTime
    *
    * @param \DateTime $val The lastSyncTriggeredDateTime
    *
    * @return DepOnboardingSetting
    */
    public function setLastSyncTriggeredDateTime($val)
    {
        $this->_propDict["lastSyncTriggeredDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the shareTokenWithSchoolDataSyncService
    *
    * @return bool The shareTokenWithSchoolDataSyncService
    */
    public function getShareTokenWithSchoolDataSyncService()
    {
        if (array_key_exists("shareTokenWithSchoolDataSyncService", $this->_propDict)) {
            return $this->_propDict["shareTokenWithSchoolDataSyncService"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shareTokenWithSchoolDataSyncService
    *
    * @param bool $val The shareTokenWithSchoolDataSyncService
    *
    * @return DepOnboardingSetting
    */
    public function setShareTokenWithSchoolDataSyncService($val)
    {
        $this->_propDict["shareTokenWithSchoolDataSyncService"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastSyncErrorCode
    *
    * @return int The lastSyncErrorCode
    */
    public function getLastSyncErrorCode()
    {
        if (array_key_exists("lastSyncErrorCode", $this->_propDict)) {
            return $this->_propDict["lastSyncErrorCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lastSyncErrorCode
    *
    * @param int $val The lastSyncErrorCode
    *
    * @return DepOnboardingSetting
    */
    public function setLastSyncErrorCode($val)
    {
        $this->_propDict["lastSyncErrorCode"] = intval($val);
        return $this;
    }
    
}