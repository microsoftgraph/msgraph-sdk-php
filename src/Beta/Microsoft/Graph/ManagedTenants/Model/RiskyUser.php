<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskyUser File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* RiskyUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RiskyUser extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the isDeleted
    *
    * @return bool|null The isDeleted
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
    * Gets the lastRefreshedDateTime
    *
    * @return \DateTime|null The lastRefreshedDateTime
    */
    public function getLastRefreshedDateTime()
    {
        if (array_key_exists("lastRefreshedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRefreshedDateTime"], "\DateTime") || is_null($this->_propDict["lastRefreshedDateTime"])) {
                return $this->_propDict["lastRefreshedDateTime"];
            } else {
                $this->_propDict["lastRefreshedDateTime"] = new \DateTime($this->_propDict["lastRefreshedDateTime"]);
                return $this->_propDict["lastRefreshedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastRefreshedDateTime
    *
    * @param \DateTime $val The lastRefreshedDateTime
    *
    * @return RiskyUser
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskDetail
    *
    * @return string|null The riskDetail
    */
    public function getRiskDetail()
    {
        if (array_key_exists("riskDetail", $this->_propDict)) {
            return $this->_propDict["riskDetail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the riskDetail
    *
    * @param string $val The riskDetail
    *
    * @return RiskyUser
    */
    public function setRiskDetail($val)
    {
        $this->_propDict["riskDetail"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskLastUpdatedDateTime
    *
    * @return \DateTime|null The riskLastUpdatedDateTime
    */
    public function getRiskLastUpdatedDateTime()
    {
        if (array_key_exists("riskLastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["riskLastUpdatedDateTime"], "\DateTime") || is_null($this->_propDict["riskLastUpdatedDateTime"])) {
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
    * @return string|null The riskLevel
    */
    public function getRiskLevel()
    {
        if (array_key_exists("riskLevel", $this->_propDict)) {
            return $this->_propDict["riskLevel"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the riskLevel
    *
    * @param string $val The riskLevel
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
    * @return string|null The riskState
    */
    public function getRiskState()
    {
        if (array_key_exists("riskState", $this->_propDict)) {
            return $this->_propDict["riskState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the riskState
    *
    * @param string $val The riskState
    *
    * @return RiskyUser
    */
    public function setRiskState($val)
    {
        $this->_propDict["riskState"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantDisplayName
    *
    * @return string|null The tenantDisplayName
    */
    public function getTenantDisplayName()
    {
        if (array_key_exists("tenantDisplayName", $this->_propDict)) {
            return $this->_propDict["tenantDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantDisplayName
    *
    * @param string $val The tenantDisplayName
    *
    * @return RiskyUser
    */
    public function setTenantDisplayName($val)
    {
        $this->_propDict["tenantDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantId
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return RiskyUser
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userDisplayName
    *
    * @return string|null The userDisplayName
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
    * Gets the userId
    *
    * @return string|null The userId
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
    * @return RiskyUser
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    *
    * @return string|null The userPrincipalName
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
