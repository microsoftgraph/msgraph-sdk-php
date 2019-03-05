<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskyUser File
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
* RiskyUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RiskyUser extends Entity
{
    /**
    * Gets the isDeleted
    *
    * @return bool The isDeleted
    */
    public function getIsDeleted()
    {
        if (array_key_exists("isDeleted", $this->_propDict)) {
            return $this->_propDict["isDeleted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeleted
    *
    * @param bool $val The isDeleted
    *
    * @return RiskyUser
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isGuest
    *
    * @return bool The isGuest
    */
    public function getIsGuest()
    {
        if (array_key_exists("isGuest", $this->_propDict)) {
            return $this->_propDict["isGuest"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isGuest
    *
    * @param bool $val The isGuest
    *
    * @return RiskyUser
    */
    public function setIsGuest($val)
    {
        $this->_propDict["isGuest"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the riskLastUpdatedDateTime
    *
    * @return \DateTime The riskLastUpdatedDateTime
    */
    public function getRiskLastUpdatedDateTime()
    {
        if (array_key_exists("riskLastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["riskLastUpdatedDateTime"], "\DateTime")) {
                return $this->_propDict["riskLastUpdatedDateTime"];
            } else {
                $this->_propDict["riskLastUpdatedDateTime"] = new \DateTime($this->_propDict["riskLastUpdatedDateTime"]);
                return $this->_propDict["riskLastUpdatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskLastUpdatedDateTime
    *
    * @param \DateTime $val The riskLastUpdatedDateTime
    *
    * @return RiskyUser
    */
    public function setRiskLastUpdatedDateTime($val)
    {
        $this->_propDict["riskLastUpdatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskLevel
    *
    * @return RiskLevel The riskLevel
    */
    public function getRiskLevel()
    {
        if (array_key_exists("riskLevel", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevel"], "Microsoft\Graph\Beta\Model\RiskLevel")) {
                return $this->_propDict["riskLevel"];
            } else {
                $this->_propDict["riskLevel"] = new RiskLevel($this->_propDict["riskLevel"]);
                return $this->_propDict["riskLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskLevel
    *
    * @param RiskLevel $val The riskLevel
    *
    * @return RiskyUser
    */
    public function setRiskLevel($val)
    {
        $this->_propDict["riskLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskState
    *
    * @return RiskState The riskState
    */
    public function getRiskState()
    {
        if (array_key_exists("riskState", $this->_propDict)) {
            if (is_a($this->_propDict["riskState"], "Microsoft\Graph\Beta\Model\RiskState")) {
                return $this->_propDict["riskState"];
            } else {
                $this->_propDict["riskState"] = new RiskState($this->_propDict["riskState"]);
                return $this->_propDict["riskState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskState
    *
    * @param RiskState $val The riskState
    *
    * @return RiskyUser
    */
    public function setRiskState($val)
    {
        $this->_propDict["riskState"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskDetail
    *
    * @return RiskDetail The riskDetail
    */
    public function getRiskDetail()
    {
        if (array_key_exists("riskDetail", $this->_propDict)) {
            if (is_a($this->_propDict["riskDetail"], "Microsoft\Graph\Beta\Model\RiskDetail")) {
                return $this->_propDict["riskDetail"];
            } else {
                $this->_propDict["riskDetail"] = new RiskDetail($this->_propDict["riskDetail"]);
                return $this->_propDict["riskDetail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskDetail
    *
    * @param RiskDetail $val The riskDetail
    *
    * @return RiskyUser
    */
    public function setRiskDetail($val)
    {
        $this->_propDict["riskDetail"] = $val;
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
    * @return RiskyUser
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
    * @return RiskyUser
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}