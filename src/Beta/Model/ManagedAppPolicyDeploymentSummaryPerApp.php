<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppPolicyDeploymentSummaryPerApp File
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
* ManagedAppPolicyDeploymentSummaryPerApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ManagedAppPolicyDeploymentSummaryPerApp extends Entity
{

    /**
    * Gets the mobileAppIdentifier
    *
    * @return MobileAppIdentifier The mobileAppIdentifier
    */
    public function getMobileAppIdentifier()
    {
        if (array_key_exists("mobileAppIdentifier", $this->_propDict)) {
            if (is_a($this->_propDict["mobileAppIdentifier"], "Microsoft\Graph\Beta\Model\MobileAppIdentifier")) {
                return $this->_propDict["mobileAppIdentifier"];
            } else {
                $this->_propDict["mobileAppIdentifier"] = new MobileAppIdentifier($this->_propDict["mobileAppIdentifier"]);
                return $this->_propDict["mobileAppIdentifier"];
            }
        }
        return null;
    }

    /**
    * Sets the mobileAppIdentifier
    *
    * @param MobileAppIdentifier $val The value to assign to the mobileAppIdentifier
    *
    * @return ManagedAppPolicyDeploymentSummaryPerApp The ManagedAppPolicyDeploymentSummaryPerApp
    */
    public function setMobileAppIdentifier($val)
    {
        $this->_propDict["mobileAppIdentifier"] = $val;
         return $this;
    }
    /**
    * Gets the configurationAppliedUserCount
    *
    * @return int The configurationAppliedUserCount
    */
    public function getConfigurationAppliedUserCount()
    {
        if (array_key_exists("configurationAppliedUserCount", $this->_propDict)) {
            return $this->_propDict["configurationAppliedUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the configurationAppliedUserCount
    *
    * @param int $val The value of the configurationAppliedUserCount
    *
    * @return ManagedAppPolicyDeploymentSummaryPerApp
    */
    public function setConfigurationAppliedUserCount($val)
    {
        $this->_propDict["configurationAppliedUserCount"] = $val;
        return $this;
    }
}
