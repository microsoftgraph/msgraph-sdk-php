<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivateLinkResourcePolicy File
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
* PrivateLinkResourcePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivateLinkResourcePolicy extends Entity
{
    /**
    * Gets the externalPrivateLinkId
    *
    * @return string The externalPrivateLinkId
    */
    public function getExternalPrivateLinkId()
    {
        if (array_key_exists("externalPrivateLinkId", $this->_propDict)) {
            return $this->_propDict["externalPrivateLinkId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalPrivateLinkId
    *
    * @param string $val The externalPrivateLinkId
    *
    * @return PrivateLinkResourcePolicy
    */
    public function setExternalPrivateLinkId($val)
    {
        $this->_propDict["externalPrivateLinkId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tenantApprovals
     *
     * @return array The tenantApprovals
     */
    public function getTenantApprovals()
    {
        if (array_key_exists("tenantApprovals", $this->_propDict)) {
           return $this->_propDict["tenantApprovals"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tenantApprovals
    *
    * @param TenantApprovals $val The tenantApprovals
    *
    * @return PrivateLinkResourcePolicy
    */
    public function setTenantApprovals($val)
    {
		$this->_propDict["tenantApprovals"] = $val;
        return $this;
    }
    
}