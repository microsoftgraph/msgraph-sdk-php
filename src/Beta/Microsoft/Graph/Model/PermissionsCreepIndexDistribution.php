<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsCreepIndexDistribution File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* PermissionsCreepIndexDistribution class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsCreepIndexDistribution extends Entity
{
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
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
    * @return PermissionsCreepIndexDistribution
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the highRiskProfile
    *
    * @return RiskProfile|null The highRiskProfile
    */
    public function getHighRiskProfile()
    {
        if (array_key_exists("highRiskProfile", $this->_propDict)) {
            if (is_a($this->_propDict["highRiskProfile"], "\Beta\Microsoft\Graph\Model\RiskProfile") || is_null($this->_propDict["highRiskProfile"])) {
                return $this->_propDict["highRiskProfile"];
            } else {
                $this->_propDict["highRiskProfile"] = new RiskProfile($this->_propDict["highRiskProfile"]);
                return $this->_propDict["highRiskProfile"];
            }
        }
        return null;
    }

    /**
    * Sets the highRiskProfile
    *
    * @param RiskProfile $val The highRiskProfile
    *
    * @return PermissionsCreepIndexDistribution
    */
    public function setHighRiskProfile($val)
    {
        $this->_propDict["highRiskProfile"] = $val;
        return $this;
    }

    /**
    * Gets the lowRiskProfile
    *
    * @return RiskProfile|null The lowRiskProfile
    */
    public function getLowRiskProfile()
    {
        if (array_key_exists("lowRiskProfile", $this->_propDict)) {
            if (is_a($this->_propDict["lowRiskProfile"], "\Beta\Microsoft\Graph\Model\RiskProfile") || is_null($this->_propDict["lowRiskProfile"])) {
                return $this->_propDict["lowRiskProfile"];
            } else {
                $this->_propDict["lowRiskProfile"] = new RiskProfile($this->_propDict["lowRiskProfile"]);
                return $this->_propDict["lowRiskProfile"];
            }
        }
        return null;
    }

    /**
    * Sets the lowRiskProfile
    *
    * @param RiskProfile $val The lowRiskProfile
    *
    * @return PermissionsCreepIndexDistribution
    */
    public function setLowRiskProfile($val)
    {
        $this->_propDict["lowRiskProfile"] = $val;
        return $this;
    }

    /**
    * Gets the mediumRiskProfile
    *
    * @return RiskProfile|null The mediumRiskProfile
    */
    public function getMediumRiskProfile()
    {
        if (array_key_exists("mediumRiskProfile", $this->_propDict)) {
            if (is_a($this->_propDict["mediumRiskProfile"], "\Beta\Microsoft\Graph\Model\RiskProfile") || is_null($this->_propDict["mediumRiskProfile"])) {
                return $this->_propDict["mediumRiskProfile"];
            } else {
                $this->_propDict["mediumRiskProfile"] = new RiskProfile($this->_propDict["mediumRiskProfile"]);
                return $this->_propDict["mediumRiskProfile"];
            }
        }
        return null;
    }

    /**
    * Sets the mediumRiskProfile
    *
    * @param RiskProfile $val The mediumRiskProfile
    *
    * @return PermissionsCreepIndexDistribution
    */
    public function setMediumRiskProfile($val)
    {
        $this->_propDict["mediumRiskProfile"] = $val;
        return $this;
    }

    /**
    * Gets the authorizationSystem
    *
    * @return AuthorizationSystem|null The authorizationSystem
    */
    public function getAuthorizationSystem()
    {
        if (array_key_exists("authorizationSystem", $this->_propDict)) {
            if (is_a($this->_propDict["authorizationSystem"], "\Beta\Microsoft\Graph\Model\AuthorizationSystem") || is_null($this->_propDict["authorizationSystem"])) {
                return $this->_propDict["authorizationSystem"];
            } else {
                $this->_propDict["authorizationSystem"] = new AuthorizationSystem($this->_propDict["authorizationSystem"]);
                return $this->_propDict["authorizationSystem"];
            }
        }
        return null;
    }

    /**
    * Sets the authorizationSystem
    *
    * @param AuthorizationSystem $val The authorizationSystem
    *
    * @return PermissionsCreepIndexDistribution
    */
    public function setAuthorizationSystem($val)
    {
        $this->_propDict["authorizationSystem"] = $val;
        return $this;
    }

}
