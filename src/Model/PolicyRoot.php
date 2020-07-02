<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PolicyRoot File
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
* PolicyRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PolicyRoot extends Entity
{

     /** 
     * Gets the activityBasedTimeoutPolicies
     *
     * @return array The activityBasedTimeoutPolicies
     */
    public function getActivityBasedTimeoutPolicies()
    {
        if (array_key_exists("activityBasedTimeoutPolicies", $this->_propDict)) {
           return $this->_propDict["activityBasedTimeoutPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the activityBasedTimeoutPolicies
    *
    * @param ActivityBasedTimeoutPolicy $val The activityBasedTimeoutPolicies
    *
    * @return PolicyRoot
    */
    public function setActivityBasedTimeoutPolicies($val)
    {
		$this->_propDict["activityBasedTimeoutPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the claimsMappingPolicies
     *
     * @return array The claimsMappingPolicies
     */
    public function getClaimsMappingPolicies()
    {
        if (array_key_exists("claimsMappingPolicies", $this->_propDict)) {
           return $this->_propDict["claimsMappingPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the claimsMappingPolicies
    *
    * @param ClaimsMappingPolicy $val The claimsMappingPolicies
    *
    * @return PolicyRoot
    */
    public function setClaimsMappingPolicies($val)
    {
		$this->_propDict["claimsMappingPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the homeRealmDiscoveryPolicies
     *
     * @return array The homeRealmDiscoveryPolicies
     */
    public function getHomeRealmDiscoveryPolicies()
    {
        if (array_key_exists("homeRealmDiscoveryPolicies", $this->_propDict)) {
           return $this->_propDict["homeRealmDiscoveryPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the homeRealmDiscoveryPolicies
    *
    * @param HomeRealmDiscoveryPolicy $val The homeRealmDiscoveryPolicies
    *
    * @return PolicyRoot
    */
    public function setHomeRealmDiscoveryPolicies($val)
    {
		$this->_propDict["homeRealmDiscoveryPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tokenIssuancePolicies
     *
     * @return array The tokenIssuancePolicies
     */
    public function getTokenIssuancePolicies()
    {
        if (array_key_exists("tokenIssuancePolicies", $this->_propDict)) {
           return $this->_propDict["tokenIssuancePolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tokenIssuancePolicies
    *
    * @param TokenIssuancePolicy $val The tokenIssuancePolicies
    *
    * @return PolicyRoot
    */
    public function setTokenIssuancePolicies($val)
    {
		$this->_propDict["tokenIssuancePolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tokenLifetimePolicies
     *
     * @return array The tokenLifetimePolicies
     */
    public function getTokenLifetimePolicies()
    {
        if (array_key_exists("tokenLifetimePolicies", $this->_propDict)) {
           return $this->_propDict["tokenLifetimePolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tokenLifetimePolicies
    *
    * @param TokenLifetimePolicy $val The tokenLifetimePolicies
    *
    * @return PolicyRoot
    */
    public function setTokenLifetimePolicies($val)
    {
		$this->_propDict["tokenLifetimePolicies"] = $val;
        return $this;
    }
    
}