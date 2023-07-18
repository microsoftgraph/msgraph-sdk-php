<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantInformation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* TenantInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantInformation extends Entity
{
    /**
    * Gets the defaultDomainName
    *
    * @return string|null The defaultDomainName
    */
    public function getDefaultDomainName()
    {
        if (array_key_exists("defaultDomainName", $this->_propDict)) {
            return $this->_propDict["defaultDomainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultDomainName
    *
    * @param string $val The value of the defaultDomainName
    *
    * @return TenantInformation
    */
    public function setDefaultDomainName($val)
    {
        $this->_propDict["defaultDomainName"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return TenantInformation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the federationBrandName
    *
    * @return string|null The federationBrandName
    */
    public function getFederationBrandName()
    {
        if (array_key_exists("federationBrandName", $this->_propDict)) {
            return $this->_propDict["federationBrandName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the federationBrandName
    *
    * @param string $val The value of the federationBrandName
    *
    * @return TenantInformation
    */
    public function setFederationBrandName($val)
    {
        $this->_propDict["federationBrandName"] = $val;
        return $this;
    }
    /**
    * Gets the tenantId
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
    *
    * @param string $val The value of the tenantId
    *
    * @return TenantInformation
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
}
