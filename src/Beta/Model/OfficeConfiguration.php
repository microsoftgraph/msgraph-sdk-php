<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeConfiguration File
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
* OfficeConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OfficeConfiguration extends Entity
{

     /** 
     * Gets the tenantCheckinStatuses
     *
     * @return array The tenantCheckinStatuses
     */
    public function getTenantCheckinStatuses()
    {
        if (array_key_exists("tenantCheckinStatuses", $this->_propDict)) {
           return $this->_propDict["tenantCheckinStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tenantCheckinStatuses
    *
    * @param OfficeClientCheckinStatus $val The tenantCheckinStatuses
    *
    * @return OfficeConfiguration
    */
    public function setTenantCheckinStatuses($val)
    {
		$this->_propDict["tenantCheckinStatuses"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantUserCheckinSummary
    *
    * @return OfficeUserCheckinSummary The tenantUserCheckinSummary
    */
    public function getTenantUserCheckinSummary()
    {
        if (array_key_exists("tenantUserCheckinSummary", $this->_propDict)) {
            if (is_a($this->_propDict["tenantUserCheckinSummary"], "Microsoft\Graph\Model\OfficeUserCheckinSummary")) {
                return $this->_propDict["tenantUserCheckinSummary"];
            } else {
                $this->_propDict["tenantUserCheckinSummary"] = new OfficeUserCheckinSummary($this->_propDict["tenantUserCheckinSummary"]);
                return $this->_propDict["tenantUserCheckinSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tenantUserCheckinSummary
    *
    * @param OfficeUserCheckinSummary $val The tenantUserCheckinSummary
    *
    * @return OfficeConfiguration
    */
    public function setTenantUserCheckinSummary($val)
    {
        $this->_propDict["tenantUserCheckinSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the clientConfigurations
     *
     * @return array The clientConfigurations
     */
    public function getClientConfigurations()
    {
        if (array_key_exists("clientConfigurations", $this->_propDict)) {
           return $this->_propDict["clientConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the clientConfigurations
    *
    * @param OfficeClientConfiguration $val The clientConfigurations
    *
    * @return OfficeConfiguration
    */
    public function setClientConfigurations($val)
    {
		$this->_propDict["clientConfigurations"] = $val;
        return $this;
    }
    
}