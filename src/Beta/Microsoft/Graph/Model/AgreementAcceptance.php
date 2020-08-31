<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AgreementAcceptance File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AgreementAcceptance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AgreementAcceptance extends Entity
{
    /**
    * Gets the agreementId
    *
    * @return string The agreementId
    */
    public function getAgreementId()
    {
        if (array_key_exists("agreementId", $this->_propDict)) {
            return $this->_propDict["agreementId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the agreementId
    *
    * @param string $val The agreementId
    *
    * @return AgreementAcceptance
    */
    public function setAgreementId($val)
    {
        $this->_propDict["agreementId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return AgreementAcceptance
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
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
    * @return AgreementAcceptance
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceDisplayName
    *
    * @return string The deviceDisplayName
    */
    public function getDeviceDisplayName()
    {
        if (array_key_exists("deviceDisplayName", $this->_propDict)) {
            return $this->_propDict["deviceDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceDisplayName
    *
    * @param string $val The deviceDisplayName
    *
    * @return AgreementAcceptance
    */
    public function setDeviceDisplayName($val)
    {
        $this->_propDict["deviceDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceOSType
    *
    * @return string The deviceOSType
    */
    public function getDeviceOSType()
    {
        if (array_key_exists("deviceOSType", $this->_propDict)) {
            return $this->_propDict["deviceOSType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceOSType
    *
    * @param string $val The deviceOSType
    *
    * @return AgreementAcceptance
    */
    public function setDeviceOSType($val)
    {
        $this->_propDict["deviceOSType"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceOSVersion
    *
    * @return string The deviceOSVersion
    */
    public function getDeviceOSVersion()
    {
        if (array_key_exists("deviceOSVersion", $this->_propDict)) {
            return $this->_propDict["deviceOSVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceOSVersion
    *
    * @param string $val The deviceOSVersion
    *
    * @return AgreementAcceptance
    */
    public function setDeviceOSVersion($val)
    {
        $this->_propDict["deviceOSVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the agreementFileId
    *
    * @return string The agreementFileId
    */
    public function getAgreementFileId()
    {
        if (array_key_exists("agreementFileId", $this->_propDict)) {
            return $this->_propDict["agreementFileId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the agreementFileId
    *
    * @param string $val The agreementFileId
    *
    * @return AgreementAcceptance
    */
    public function setAgreementFileId($val)
    {
        $this->_propDict["agreementFileId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userDisplayName
    *
    * @return string The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userDisplayName
    *
    * @param string $val The userDisplayName
    *
    * @return AgreementAcceptance
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    *
    * @param string $val The userPrincipalName
    *
    * @return AgreementAcceptance
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userEmail
    *
    * @return string The userEmail
    */
    public function getUserEmail()
    {
        if (array_key_exists("userEmail", $this->_propDict)) {
            return $this->_propDict["userEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userEmail
    *
    * @param string $val The userEmail
    *
    * @return AgreementAcceptance
    */
    public function setUserEmail($val)
    {
        $this->_propDict["userEmail"] = $val;
        return $this;
    }
    
    /**
    * Gets the recordedDateTime
    *
    * @return \DateTime The recordedDateTime
    */
    public function getRecordedDateTime()
    {
        if (array_key_exists("recordedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["recordedDateTime"], "\DateTime")) {
                return $this->_propDict["recordedDateTime"];
            } else {
                $this->_propDict["recordedDateTime"] = new \DateTime($this->_propDict["recordedDateTime"]);
                return $this->_propDict["recordedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recordedDateTime
    *
    * @param \DateTime $val The recordedDateTime
    *
    * @return AgreementAcceptance
    */
    public function setRecordedDateTime($val)
    {
        $this->_propDict["recordedDateTime"] = $val;
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
    * @return AgreementAcceptance
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return AgreementAcceptanceState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Beta\Microsoft\Graph\Model\AgreementAcceptanceState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AgreementAcceptanceState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param AgreementAcceptanceState $val The state
    *
    * @return AgreementAcceptance
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
}