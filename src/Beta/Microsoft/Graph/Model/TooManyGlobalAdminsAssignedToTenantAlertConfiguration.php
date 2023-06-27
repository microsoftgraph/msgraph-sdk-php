<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TooManyGlobalAdminsAssignedToTenantAlertConfiguration File
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
* TooManyGlobalAdminsAssignedToTenantAlertConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TooManyGlobalAdminsAssignedToTenantAlertConfiguration extends UnifiedRoleManagementAlertConfiguration
{
    /**
    * Gets the globalAdminCountThreshold
    * The threshold for the number of accounts assigned the Global Administrator role in the tenant. Triggers an alert if the number of global administrators in the tenant reaches or crosses this threshold value.
    *
    * @return int|null The globalAdminCountThreshold
    */
    public function getGlobalAdminCountThreshold()
    {
        if (array_key_exists("globalAdminCountThreshold", $this->_propDict)) {
            return $this->_propDict["globalAdminCountThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the globalAdminCountThreshold
    * The threshold for the number of accounts assigned the Global Administrator role in the tenant. Triggers an alert if the number of global administrators in the tenant reaches or crosses this threshold value.
    *
    * @param int $val The globalAdminCountThreshold
    *
    * @return TooManyGlobalAdminsAssignedToTenantAlertConfiguration
    */
    public function setGlobalAdminCountThreshold($val)
    {
        $this->_propDict["globalAdminCountThreshold"] = intval($val);
        return $this;
    }

    /**
    * Gets the percentageOfGlobalAdminsOutOfRolesThreshold
    * Threshold of the percentage of global administrators out of all the role assignments in the tenant. Triggers an alert if the percentage in the tenant reaches or crosses this threshold value.
    *
    * @return int|null The percentageOfGlobalAdminsOutOfRolesThreshold
    */
    public function getPercentageOfGlobalAdminsOutOfRolesThreshold()
    {
        if (array_key_exists("percentageOfGlobalAdminsOutOfRolesThreshold", $this->_propDict)) {
            return $this->_propDict["percentageOfGlobalAdminsOutOfRolesThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the percentageOfGlobalAdminsOutOfRolesThreshold
    * Threshold of the percentage of global administrators out of all the role assignments in the tenant. Triggers an alert if the percentage in the tenant reaches or crosses this threshold value.
    *
    * @param int $val The percentageOfGlobalAdminsOutOfRolesThreshold
    *
    * @return TooManyGlobalAdminsAssignedToTenantAlertConfiguration
    */
    public function setPercentageOfGlobalAdminsOutOfRolesThreshold($val)
    {
        $this->_propDict["percentageOfGlobalAdminsOutOfRolesThreshold"] = intval($val);
        return $this;
    }

}
