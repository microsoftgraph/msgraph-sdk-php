<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtection File
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
* InformationProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class InformationProtection extends Entity
{
    /**
    * Gets the policy
    *
    * @return InformationProtectionPolicy The policy
    */
    public function getPolicy()
    {
        if (array_key_exists("policy", $this->_propDict)) {
            if (is_a($this->_propDict["policy"], "Microsoft\Graph\Beta\Model\InformationProtectionPolicy")) {
                return $this->_propDict["policy"];
            } else {
                $this->_propDict["policy"] = new InformationProtectionPolicy($this->_propDict["policy"]);
                return $this->_propDict["policy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the policy
    *
    * @param InformationProtectionPolicy $val The policy
    *
    * @return InformationProtection
    */
    public function setPolicy($val)
    {
        $this->_propDict["policy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sensitivityLabels
     *
     * @return array The sensitivityLabels
     */
    public function getSensitivityLabels()
    {
        if (array_key_exists("sensitivityLabels", $this->_propDict)) {
           return $this->_propDict["sensitivityLabels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sensitivityLabels
    *
    * @param SensitivityLabel $val The sensitivityLabels
    *
    * @return InformationProtection
    */
    public function setSensitivityLabels($val)
    {
		$this->_propDict["sensitivityLabels"] = $val;
        return $this;
    }
    
    /**
    * Gets the sensitivityPolicySettings
    *
    * @return SensitivityPolicySettings The sensitivityPolicySettings
    */
    public function getSensitivityPolicySettings()
    {
        if (array_key_exists("sensitivityPolicySettings", $this->_propDict)) {
            if (is_a($this->_propDict["sensitivityPolicySettings"], "Microsoft\Graph\Beta\Model\SensitivityPolicySettings")) {
                return $this->_propDict["sensitivityPolicySettings"];
            } else {
                $this->_propDict["sensitivityPolicySettings"] = new SensitivityPolicySettings($this->_propDict["sensitivityPolicySettings"]);
                return $this->_propDict["sensitivityPolicySettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sensitivityPolicySettings
    *
    * @param SensitivityPolicySettings $val The sensitivityPolicySettings
    *
    * @return InformationProtection
    */
    public function setSensitivityPolicySettings($val)
    {
        $this->_propDict["sensitivityPolicySettings"] = $val;
        return $this;
    }
    
}