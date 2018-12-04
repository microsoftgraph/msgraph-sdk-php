<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LicenseDetails File
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
* LicenseDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class LicenseDetails extends Entity
{

     /** 
     * Gets the servicePlans
     *
     * @return array The servicePlans
     */
    public function getServicePlans()
    {
        if (array_key_exists("servicePlans", $this->_propDict)) {
           return $this->_propDict["servicePlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the servicePlans
    *
    * @param ServicePlanInfo $val The servicePlans
    *
    * @return LicenseDetails
    */
    public function setServicePlans($val)
    {
		$this->_propDict["servicePlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the skuId
    *
    * @return string The skuId
    */
    public function getSkuId()
    {
        if (array_key_exists("skuId", $this->_propDict)) {
            return $this->_propDict["skuId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skuId
    *
    * @param string $val The skuId
    *
    * @return LicenseDetails
    */
    public function setSkuId($val)
    {
        $this->_propDict["skuId"] = $val;
        return $this;
    }
    
    /**
    * Gets the skuPartNumber
    *
    * @return string The skuPartNumber
    */
    public function getSkuPartNumber()
    {
        if (array_key_exists("skuPartNumber", $this->_propDict)) {
            return $this->_propDict["skuPartNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skuPartNumber
    *
    * @param string $val The skuPartNumber
    *
    * @return LicenseDetails
    */
    public function setSkuPartNumber($val)
    {
        $this->_propDict["skuPartNumber"] = $val;
        return $this;
    }
    
}