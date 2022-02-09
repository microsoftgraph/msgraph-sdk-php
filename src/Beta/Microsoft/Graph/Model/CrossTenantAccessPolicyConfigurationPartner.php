<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantAccessPolicyConfigurationPartner File
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
* CrossTenantAccessPolicyConfigurationPartner class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantAccessPolicyConfigurationPartner extends CrossTenantAccessPolicyConfigurationBase
{
    /**
    * Gets the isServiceProvider
    * Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization.
    *
    * @return bool|null The isServiceProvider
    */
    public function getIsServiceProvider()
    {
        if (array_key_exists("isServiceProvider", $this->_propDict)) {
            return $this->_propDict["isServiceProvider"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isServiceProvider
    * Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization.
    *
    * @param bool $val The isServiceProvider
    *
    * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public function setIsServiceProvider($val)
    {
        $this->_propDict["isServiceProvider"] = boolval($val);
        return $this;
    }

    /**
    * Gets the tenantId
    * The tenant identifier for the partner Azure AD organization. Read-only.
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
    * The tenant identifier for the partner Azure AD organization. Read-only.
    *
    * @param string $val The tenantId
    *
    * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

}
