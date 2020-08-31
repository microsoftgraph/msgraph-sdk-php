<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RelyingPartyDetailedSummary File
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
* RelyingPartyDetailedSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RelyingPartyDetailedSummary extends Entity
{
    /**
    * Gets the relyingPartyId
    *
    * @return string The relyingPartyId
    */
    public function getRelyingPartyId()
    {
        if (array_key_exists("relyingPartyId", $this->_propDict)) {
            return $this->_propDict["relyingPartyId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the relyingPartyId
    *
    * @param string $val The relyingPartyId
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setRelyingPartyId($val)
    {
        $this->_propDict["relyingPartyId"] = $val;
        return $this;
    }
    
    /**
    * Gets the serviceId
    *
    * @return string The serviceId
    */
    public function getServiceId()
    {
        if (array_key_exists("serviceId", $this->_propDict)) {
            return $this->_propDict["serviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serviceId
    *
    * @param string $val The serviceId
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setServiceId($val)
    {
        $this->_propDict["serviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the relyingPartyName
    *
    * @return string The relyingPartyName
    */
    public function getRelyingPartyName()
    {
        if (array_key_exists("relyingPartyName", $this->_propDict)) {
            return $this->_propDict["relyingPartyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the relyingPartyName
    *
    * @param string $val The relyingPartyName
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setRelyingPartyName($val)
    {
        $this->_propDict["relyingPartyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the successfulSignInCount
    *
    * @return int The successfulSignInCount
    */
    public function getSuccessfulSignInCount()
    {
        if (array_key_exists("successfulSignInCount", $this->_propDict)) {
            return $this->_propDict["successfulSignInCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successfulSignInCount
    *
    * @param int $val The successfulSignInCount
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setSuccessfulSignInCount($val)
    {
        $this->_propDict["successfulSignInCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the failedSignInCount
    *
    * @return int The failedSignInCount
    */
    public function getFailedSignInCount()
    {
        if (array_key_exists("failedSignInCount", $this->_propDict)) {
            return $this->_propDict["failedSignInCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedSignInCount
    *
    * @param int $val The failedSignInCount
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setFailedSignInCount($val)
    {
        $this->_propDict["failedSignInCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalSignInCount
    *
    * @return int The totalSignInCount
    */
    public function getTotalSignInCount()
    {
        if (array_key_exists("totalSignInCount", $this->_propDict)) {
            return $this->_propDict["totalSignInCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalSignInCount
    *
    * @param int $val The totalSignInCount
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setTotalSignInCount($val)
    {
        $this->_propDict["totalSignInCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the signInSuccessRate
    *
    * @return float The signInSuccessRate
    */
    public function getSignInSuccessRate()
    {
        if (array_key_exists("signInSuccessRate", $this->_propDict)) {
            return $this->_propDict["signInSuccessRate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signInSuccessRate
    *
    * @param float $val The signInSuccessRate
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setSignInSuccessRate($val)
    {
        $this->_propDict["signInSuccessRate"] = $val;
        return $this;
    }
    
    /**
    * Gets the uniqueUserCount
    *
    * @return int The uniqueUserCount
    */
    public function getUniqueUserCount()
    {
        if (array_key_exists("uniqueUserCount", $this->_propDict)) {
            return $this->_propDict["uniqueUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uniqueUserCount
    *
    * @param int $val The uniqueUserCount
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setUniqueUserCount($val)
    {
        $this->_propDict["uniqueUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the migrationStatus
    *
    * @return MigrationStatus The migrationStatus
    */
    public function getMigrationStatus()
    {
        if (array_key_exists("migrationStatus", $this->_propDict)) {
            if (is_a($this->_propDict["migrationStatus"], "Beta\Microsoft\Graph\Model\MigrationStatus")) {
                return $this->_propDict["migrationStatus"];
            } else {
                $this->_propDict["migrationStatus"] = new MigrationStatus($this->_propDict["migrationStatus"]);
                return $this->_propDict["migrationStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the migrationStatus
    *
    * @param MigrationStatus $val The migrationStatus
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setMigrationStatus($val)
    {
        $this->_propDict["migrationStatus"] = $val;
        return $this;
    }
    

     /** 
     * Gets the migrationValidationDetails
     *
     * @return array The migrationValidationDetails
     */
    public function getMigrationValidationDetails()
    {
        if (array_key_exists("migrationValidationDetails", $this->_propDict)) {
           return $this->_propDict["migrationValidationDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the migrationValidationDetails
    *
    * @param KeyValuePair $val The migrationValidationDetails
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setMigrationValidationDetails($val)
    {
		$this->_propDict["migrationValidationDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the replyUrls
    *
    * @return string The replyUrls
    */
    public function getReplyUrls()
    {
        if (array_key_exists("replyUrls", $this->_propDict)) {
            return $this->_propDict["replyUrls"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the replyUrls
    *
    * @param string $val The replyUrls
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setReplyUrls($val)
    {
        $this->_propDict["replyUrls"] = $val;
        return $this;
    }
    
}