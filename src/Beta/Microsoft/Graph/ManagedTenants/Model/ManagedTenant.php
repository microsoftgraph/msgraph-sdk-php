<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedTenant File
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
* ManagedTenant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedTenant extends \Beta\Microsoft\Graph\Model\Entity
{

     /** 
     * Gets the aggregatedPolicyCompliances
     *
     * @return array|null The aggregatedPolicyCompliances
     */
    public function getAggregatedPolicyCompliances()
    {
        if (array_key_exists("aggregatedPolicyCompliances", $this->_propDict)) {
           return $this->_propDict["aggregatedPolicyCompliances"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the aggregatedPolicyCompliances
    *
    * @param AggregatedPolicyCompliance $val The aggregatedPolicyCompliances
    *
    * @return ManagedTenant
    */
    public function setAggregatedPolicyCompliances($val)
    {
        $this->_propDict["aggregatedPolicyCompliances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudPcConnections
     *
     * @return array|null The cloudPcConnections
     */
    public function getCloudPcConnections()
    {
        if (array_key_exists("cloudPcConnections", $this->_propDict)) {
           return $this->_propDict["cloudPcConnections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the cloudPcConnections
    *
    * @param CloudPcConnection $val The cloudPcConnections
    *
    * @return ManagedTenant
    */
    public function setCloudPcConnections($val)
    {
        $this->_propDict["cloudPcConnections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudPcDevices
     *
     * @return array|null The cloudPcDevices
     */
    public function getCloudPcDevices()
    {
        if (array_key_exists("cloudPcDevices", $this->_propDict)) {
           return $this->_propDict["cloudPcDevices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the cloudPcDevices
    *
    * @param CloudPcDevice $val The cloudPcDevices
    *
    * @return ManagedTenant
    */
    public function setCloudPcDevices($val)
    {
        $this->_propDict["cloudPcDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudPcsOverview
     *
     * @return array|null The cloudPcsOverview
     */
    public function getCloudPcsOverview()
    {
        if (array_key_exists("cloudPcsOverview", $this->_propDict)) {
           return $this->_propDict["cloudPcsOverview"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the cloudPcsOverview
    *
    * @param CloudPcOverview $val The cloudPcsOverview
    *
    * @return ManagedTenant
    */
    public function setCloudPcsOverview($val)
    {
        $this->_propDict["cloudPcsOverview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the conditionalAccessPolicyCoverages
     *
     * @return array|null The conditionalAccessPolicyCoverages
     */
    public function getConditionalAccessPolicyCoverages()
    {
        if (array_key_exists("conditionalAccessPolicyCoverages", $this->_propDict)) {
           return $this->_propDict["conditionalAccessPolicyCoverages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the conditionalAccessPolicyCoverages
    *
    * @param ConditionalAccessPolicyCoverage $val The conditionalAccessPolicyCoverages
    *
    * @return ManagedTenant
    */
    public function setConditionalAccessPolicyCoverages($val)
    {
        $this->_propDict["conditionalAccessPolicyCoverages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the credentialUserRegistrationsSummaries
     *
     * @return array|null The credentialUserRegistrationsSummaries
     */
    public function getCredentialUserRegistrationsSummaries()
    {
        if (array_key_exists("credentialUserRegistrationsSummaries", $this->_propDict)) {
           return $this->_propDict["credentialUserRegistrationsSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the credentialUserRegistrationsSummaries
    *
    * @param CredentialUserRegistrationsSummary $val The credentialUserRegistrationsSummaries
    *
    * @return ManagedTenant
    */
    public function setCredentialUserRegistrationsSummaries($val)
    {
        $this->_propDict["credentialUserRegistrationsSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCompliancePolicySettingStateSummaries
     *
     * @return array|null The deviceCompliancePolicySettingStateSummaries
     */
    public function getDeviceCompliancePolicySettingStateSummaries()
    {
        if (array_key_exists("deviceCompliancePolicySettingStateSummaries", $this->_propDict)) {
           return $this->_propDict["deviceCompliancePolicySettingStateSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceCompliancePolicySettingStateSummaries
    *
    * @param DeviceCompliancePolicySettingStateSummary $val The deviceCompliancePolicySettingStateSummaries
    *
    * @return ManagedTenant
    */
    public function setDeviceCompliancePolicySettingStateSummaries($val)
    {
        $this->_propDict["deviceCompliancePolicySettingStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceCompliances
     *
     * @return array|null The managedDeviceCompliances
     */
    public function getManagedDeviceCompliances()
    {
        if (array_key_exists("managedDeviceCompliances", $this->_propDict)) {
           return $this->_propDict["managedDeviceCompliances"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedDeviceCompliances
    *
    * @param ManagedDeviceCompliance $val The managedDeviceCompliances
    *
    * @return ManagedTenant
    */
    public function setManagedDeviceCompliances($val)
    {
        $this->_propDict["managedDeviceCompliances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceComplianceTrends
     *
     * @return array|null The managedDeviceComplianceTrends
     */
    public function getManagedDeviceComplianceTrends()
    {
        if (array_key_exists("managedDeviceComplianceTrends", $this->_propDict)) {
           return $this->_propDict["managedDeviceComplianceTrends"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedDeviceComplianceTrends
    *
    * @param ManagedDeviceComplianceTrend $val The managedDeviceComplianceTrends
    *
    * @return ManagedTenant
    */
    public function setManagedDeviceComplianceTrends($val)
    {
        $this->_propDict["managedDeviceComplianceTrends"] = $val;
        return $this;
    }
    

     /** 
     * Gets the riskyUsers
     *
     * @return array|null The riskyUsers
     */
    public function getRiskyUsers()
    {
        if (array_key_exists("riskyUsers", $this->_propDict)) {
           return $this->_propDict["riskyUsers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the riskyUsers
    *
    * @param RiskyUser $val The riskyUsers
    *
    * @return ManagedTenant
    */
    public function setRiskyUsers($val)
    {
        $this->_propDict["riskyUsers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsDeviceMalwareStates
     *
     * @return array|null The windowsDeviceMalwareStates
     */
    public function getWindowsDeviceMalwareStates()
    {
        if (array_key_exists("windowsDeviceMalwareStates", $this->_propDict)) {
           return $this->_propDict["windowsDeviceMalwareStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsDeviceMalwareStates
    *
    * @param WindowsDeviceMalwareState $val The windowsDeviceMalwareStates
    *
    * @return ManagedTenant
    */
    public function setWindowsDeviceMalwareStates($val)
    {
        $this->_propDict["windowsDeviceMalwareStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsProtectionStates
     *
     * @return array|null The windowsProtectionStates
     */
    public function getWindowsProtectionStates()
    {
        if (array_key_exists("windowsProtectionStates", $this->_propDict)) {
           return $this->_propDict["windowsProtectionStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsProtectionStates
    *
    * @param WindowsProtectionState $val The windowsProtectionStates
    *
    * @return ManagedTenant
    */
    public function setWindowsProtectionStates($val)
    {
        $this->_propDict["windowsProtectionStates"] = $val;
        return $this;
    }
    
}
