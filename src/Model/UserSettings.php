<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* UserSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserSettings extends Entity
{
    /**
    * Gets the contributionToContentDiscoveryAsOrganizationDisabled
    *
    * @return bool The contributionToContentDiscoveryAsOrganizationDisabled
    */
    public function getContributionToContentDiscoveryAsOrganizationDisabled()
    {
        if (array_key_exists("contributionToContentDiscoveryAsOrganizationDisabled", $this->_propDict)) {
            return $this->_propDict["contributionToContentDiscoveryAsOrganizationDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contributionToContentDiscoveryAsOrganizationDisabled
    *
    * @param bool $val The contributionToContentDiscoveryAsOrganizationDisabled
    *
    * @return UserSettings
    */
    public function setContributionToContentDiscoveryAsOrganizationDisabled($val)
    {
        $this->_propDict["contributionToContentDiscoveryAsOrganizationDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the contributionToContentDiscoveryDisabled
    *
    * @return bool The contributionToContentDiscoveryDisabled
    */
    public function getContributionToContentDiscoveryDisabled()
    {
        if (array_key_exists("contributionToContentDiscoveryDisabled", $this->_propDict)) {
            return $this->_propDict["contributionToContentDiscoveryDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contributionToContentDiscoveryDisabled
    *
    * @param bool $val The contributionToContentDiscoveryDisabled
    *
    * @return UserSettings
    */
    public function setContributionToContentDiscoveryDisabled($val)
    {
        $this->_propDict["contributionToContentDiscoveryDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the shiftPreferences
    *
    * @return ShiftPreferences The shiftPreferences
    */
    public function getShiftPreferences()
    {
        if (array_key_exists("shiftPreferences", $this->_propDict)) {
            if (is_a($this->_propDict["shiftPreferences"], "Microsoft\Graph\Model\ShiftPreferences")) {
                return $this->_propDict["shiftPreferences"];
            } else {
                $this->_propDict["shiftPreferences"] = new ShiftPreferences($this->_propDict["shiftPreferences"]);
                return $this->_propDict["shiftPreferences"];
            }
        }
        return null;
    }
    
    /**
    * Sets the shiftPreferences
    *
    * @param ShiftPreferences $val The shiftPreferences
    *
    * @return UserSettings
    */
    public function setShiftPreferences($val)
    {
        $this->_propDict["shiftPreferences"] = $val;
        return $this;
    }
    
}