<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessConditionSet File
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
* ConditionalAccessConditionSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConditionalAccessConditionSet extends Entity
{

    /**
    * Gets the applications
    *
    * @return ConditionalAccessApplications The applications
    */
    public function getApplications()
    {
        if (array_key_exists("applications", $this->_propDict)) {
            if (is_a($this->_propDict["applications"], "Microsoft\Graph\Beta\Model\ConditionalAccessApplications")) {
                return $this->_propDict["applications"];
            } else {
                $this->_propDict["applications"] = new ConditionalAccessApplications($this->_propDict["applications"]);
                return $this->_propDict["applications"];
            }
        }
        return null;
    }

    /**
    * Sets the applications
    *
    * @param ConditionalAccessApplications $val The value to assign to the applications
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setApplications($val)
    {
        $this->_propDict["applications"] = $val;
         return $this;
    }

    /**
    * Gets the users
    *
    * @return ConditionalAccessUsers The users
    */
    public function getUsers()
    {
        if (array_key_exists("users", $this->_propDict)) {
            if (is_a($this->_propDict["users"], "Microsoft\Graph\Beta\Model\ConditionalAccessUsers")) {
                return $this->_propDict["users"];
            } else {
                $this->_propDict["users"] = new ConditionalAccessUsers($this->_propDict["users"]);
                return $this->_propDict["users"];
            }
        }
        return null;
    }

    /**
    * Sets the users
    *
    * @param ConditionalAccessUsers $val The value to assign to the users
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setUsers($val)
    {
        $this->_propDict["users"] = $val;
         return $this;
    }

    /**
    * Gets the signInRiskLevels
    *
    * @return RiskLevel The signInRiskLevels
    */
    public function getSignInRiskLevels()
    {
        if (array_key_exists("signInRiskLevels", $this->_propDict)) {
            if (is_a($this->_propDict["signInRiskLevels"], "Microsoft\Graph\Beta\Model\RiskLevel")) {
                return $this->_propDict["signInRiskLevels"];
            } else {
                $this->_propDict["signInRiskLevels"] = new RiskLevel($this->_propDict["signInRiskLevels"]);
                return $this->_propDict["signInRiskLevels"];
            }
        }
        return null;
    }

    /**
    * Sets the signInRiskLevels
    *
    * @param RiskLevel $val The value to assign to the signInRiskLevels
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setSignInRiskLevels($val)
    {
        $this->_propDict["signInRiskLevels"] = $val;
         return $this;
    }

    /**
    * Gets the platforms
    *
    * @return ConditionalAccessPlatforms The platforms
    */
    public function getPlatforms()
    {
        if (array_key_exists("platforms", $this->_propDict)) {
            if (is_a($this->_propDict["platforms"], "Microsoft\Graph\Beta\Model\ConditionalAccessPlatforms")) {
                return $this->_propDict["platforms"];
            } else {
                $this->_propDict["platforms"] = new ConditionalAccessPlatforms($this->_propDict["platforms"]);
                return $this->_propDict["platforms"];
            }
        }
        return null;
    }

    /**
    * Sets the platforms
    *
    * @param ConditionalAccessPlatforms $val The value to assign to the platforms
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setPlatforms($val)
    {
        $this->_propDict["platforms"] = $val;
         return $this;
    }

    /**
    * Gets the locations
    *
    * @return ConditionalAccessLocations The locations
    */
    public function getLocations()
    {
        if (array_key_exists("locations", $this->_propDict)) {
            if (is_a($this->_propDict["locations"], "Microsoft\Graph\Beta\Model\ConditionalAccessLocations")) {
                return $this->_propDict["locations"];
            } else {
                $this->_propDict["locations"] = new ConditionalAccessLocations($this->_propDict["locations"]);
                return $this->_propDict["locations"];
            }
        }
        return null;
    }

    /**
    * Sets the locations
    *
    * @param ConditionalAccessLocations $val The value to assign to the locations
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setLocations($val)
    {
        $this->_propDict["locations"] = $val;
         return $this;
    }

    /**
    * Gets the clientAppTypes
    *
    * @return ConditionalAccessClientApp The clientAppTypes
    */
    public function getClientAppTypes()
    {
        if (array_key_exists("clientAppTypes", $this->_propDict)) {
            if (is_a($this->_propDict["clientAppTypes"], "Microsoft\Graph\Beta\Model\ConditionalAccessClientApp")) {
                return $this->_propDict["clientAppTypes"];
            } else {
                $this->_propDict["clientAppTypes"] = new ConditionalAccessClientApp($this->_propDict["clientAppTypes"]);
                return $this->_propDict["clientAppTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the clientAppTypes
    *
    * @param ConditionalAccessClientApp $val The value to assign to the clientAppTypes
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setClientAppTypes($val)
    {
        $this->_propDict["clientAppTypes"] = $val;
         return $this;
    }

    /**
    * Gets the deviceStates
    *
    * @return ConditionalAccessDeviceStates The deviceStates
    */
    public function getDeviceStates()
    {
        if (array_key_exists("deviceStates", $this->_propDict)) {
            if (is_a($this->_propDict["deviceStates"], "Microsoft\Graph\Beta\Model\ConditionalAccessDeviceStates")) {
                return $this->_propDict["deviceStates"];
            } else {
                $this->_propDict["deviceStates"] = new ConditionalAccessDeviceStates($this->_propDict["deviceStates"]);
                return $this->_propDict["deviceStates"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceStates
    *
    * @param ConditionalAccessDeviceStates $val The value to assign to the deviceStates
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setDeviceStates($val)
    {
        $this->_propDict["deviceStates"] = $val;
         return $this;
    }
}
