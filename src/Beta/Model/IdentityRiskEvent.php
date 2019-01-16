<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityRiskEvent File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* IdentityRiskEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IdentityRiskEvent extends Entity
{
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
    * @return IdentityRiskEvent
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
    * @return IdentityRiskEvent
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskEventDateTime
    *
    * @return \DateTime The riskEventDateTime
    */
    public function getRiskEventDateTime()
    {
        if (array_key_exists("riskEventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["riskEventDateTime"], "\DateTime")) {
                return $this->_propDict["riskEventDateTime"];
            } else {
                $this->_propDict["riskEventDateTime"] = new \DateTime($this->_propDict["riskEventDateTime"]);
                return $this->_propDict["riskEventDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskEventDateTime
    *
    * @param \DateTime $val The riskEventDateTime
    *
    * @return IdentityRiskEvent
    */
    public function setRiskEventDateTime($val)
    {
        $this->_propDict["riskEventDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskEventType
    *
    * @return string The riskEventType
    */
    public function getRiskEventType()
    {
        if (array_key_exists("riskEventType", $this->_propDict)) {
            return $this->_propDict["riskEventType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the riskEventType
    *
    * @param string $val The riskEventType
    *
    * @return IdentityRiskEvent
    */
    public function setRiskEventType($val)
    {
        $this->_propDict["riskEventType"] = $val;
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
            if (is_a($this->_propDict["riskLevel"], "Microsoft\Graph\Model\RiskLevel")) {
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
    * @return IdentityRiskEvent
    */
    public function setRiskLevel($val)
    {
        $this->_propDict["riskLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskEventStatus
    *
    * @return RiskEventStatus The riskEventStatus
    */
    public function getRiskEventStatus()
    {
        if (array_key_exists("riskEventStatus", $this->_propDict)) {
            if (is_a($this->_propDict["riskEventStatus"], "Microsoft\Graph\Model\RiskEventStatus")) {
                return $this->_propDict["riskEventStatus"];
            } else {
                $this->_propDict["riskEventStatus"] = new RiskEventStatus($this->_propDict["riskEventStatus"]);
                return $this->_propDict["riskEventStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskEventStatus
    *
    * @param RiskEventStatus $val The riskEventStatus
    *
    * @return IdentityRiskEvent
    */
    public function setRiskEventStatus($val)
    {
        $this->_propDict["riskEventStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the closedDateTime
    *
    * @return \DateTime The closedDateTime
    */
    public function getClosedDateTime()
    {
        if (array_key_exists("closedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["closedDateTime"], "\DateTime")) {
                return $this->_propDict["closedDateTime"];
            } else {
                $this->_propDict["closedDateTime"] = new \DateTime($this->_propDict["closedDateTime"]);
                return $this->_propDict["closedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the closedDateTime
    *
    * @param \DateTime $val The closedDateTime
    *
    * @return IdentityRiskEvent
    */
    public function setClosedDateTime($val)
    {
        $this->_propDict["closedDateTime"] = $val;
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
    * @return IdentityRiskEvent
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
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
    * @return IdentityRiskEvent
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the impactedUser
    *
    * @return User The impactedUser
    */
    public function getImpactedUser()
    {
        if (array_key_exists("impactedUser", $this->_propDict)) {
            if (is_a($this->_propDict["impactedUser"], "Microsoft\Graph\Model\User")) {
                return $this->_propDict["impactedUser"];
            } else {
                $this->_propDict["impactedUser"] = new User($this->_propDict["impactedUser"]);
                return $this->_propDict["impactedUser"];
            }
        }
        return null;
    }
    
    /**
    * Sets the impactedUser
    *
    * @param User $val The impactedUser
    *
    * @return IdentityRiskEvent
    */
    public function setImpactedUser($val)
    {
        $this->_propDict["impactedUser"] = $val;
        return $this;
    }
    
}