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
     * Gets the managementActions
     *
     * @return array|null The managementActions
     */
    public function getManagementActions()
    {
        if (array_key_exists("managementActions", $this->_propDict)) {
           return $this->_propDict["managementActions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managementActions
    *
    * @param ManagementAction $val The managementActions
    *
    * @return ManagedTenant
    */
    public function setManagementActions($val)
    {
        $this->_propDict["managementActions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementActionTenantDeploymentStatuses
     *
     * @return array|null The managementActionTenantDeploymentStatuses
     */
    public function getManagementActionTenantDeploymentStatuses()
    {
        if (array_key_exists("managementActionTenantDeploymentStatuses", $this->_propDict)) {
           return $this->_propDict["managementActionTenantDeploymentStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managementActionTenantDeploymentStatuses
    *
    * @param ManagementActionTenantDeploymentStatus $val The managementActionTenantDeploymentStatuses
    *
    * @return ManagedTenant
    */
    public function setManagementActionTenantDeploymentStatuses($val)
    {
        $this->_propDict["managementActionTenantDeploymentStatuses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementIntents
     *
     * @return array|null The managementIntents
     */
    public function getManagementIntents()
    {
        if (array_key_exists("managementIntents", $this->_propDict)) {
           return $this->_propDict["managementIntents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managementIntents
    *
    * @param ManagementIntent $val The managementIntents
    *
    * @return ManagedTenant
    */
    public function setManagementIntents($val)
    {
        $this->_propDict["managementIntents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementTemplates
     *
     * @return array|null The managementTemplates
     */
    public function getManagementTemplates()
    {
        if (array_key_exists("managementTemplates", $this->_propDict)) {
           return $this->_propDict["managementTemplates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managementTemplates
    *
    * @param ManagementTemplate $val The managementTemplates
    *
    * @return ManagedTenant
    */
    public function setManagementTemplates($val)
    {
        $this->_propDict["managementTemplates"] = $val;
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
     * Gets the tenantGroups
     *
     * @return array|null The tenantGroups
     */
    public function getTenantGroups()
    {
        if (array_key_exists("tenantGroups", $this->_propDict)) {
           return $this->_propDict["tenantGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tenantGroups
    *
    * @param TenantGroup $val The tenantGroups
    *
    * @return ManagedTenant
    */
    public function setTenantGroups($val)
    {
        $this->_propDict["tenantGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tenants
     *
     * @return array|null The tenants
     */
    public function getTenants()
    {
        if (array_key_exists("tenants", $this->_propDict)) {
           return $this->_propDict["tenants"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tenants
    *
    * @param Tenant $val The tenants
    *
    * @return ManagedTenant
    */
    public function setTenants($val)
    {
        $this->_propDict["tenants"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tenantsCustomizedInformation
     *
     * @return array|null The tenantsCustomizedInformation
     */
    public function getTenantsCustomizedInformation()
    {
        if (array_key_exists("tenantsCustomizedInformation", $this->_propDict)) {
           return $this->_propDict["tenantsCustomizedInformation"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tenantsCustomizedInformation
    *
    * @param TenantCustomizedInformation $val The tenantsCustomizedInformation
    *
    * @return ManagedTenant
    */
    public function setTenantsCustomizedInformation($val)
    {
        $this->_propDict["tenantsCustomizedInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tenantsDetailedInformation
     *
     * @return array|null The tenantsDetailedInformation
     */
    public function getTenantsDetailedInformation()
    {
        if (array_key_exists("tenantsDetailedInformation", $this->_propDict)) {
           return $this->_propDict["tenantsDetailedInformation"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tenantsDetailedInformation
    *
    * @param TenantDetailedInformation $val The tenantsDetailedInformation
    *
    * @return ManagedTenant
    */
    public function setTenantsDetailedInformation($val)
    {
        $this->_propDict["tenantsDetailedInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tenantTags
     *
     * @return array|null The tenantTags
     */
    public function getTenantTags()
    {
        if (array_key_exists("tenantTags", $this->_propDict)) {
           return $this->_propDict["tenantTags"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tenantTags
    *
    * @param TenantTag $val The tenantTags
    *
    * @return ManagedTenant
    */
    public function setTenantTags($val)
    {
        $this->_propDict["tenantTags"] = $val;
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
