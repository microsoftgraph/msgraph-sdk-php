<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantApprovals File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* TenantApprovals class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantApprovals extends Entity
{
    /**
    * Gets the state
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    *
    * @param string $val The value of the state
    *
    * @return TenantApprovals
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    /**
    * Gets the tenantId
    *
    * @return string The tenantId
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
    * @return TenantApprovals
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
}
