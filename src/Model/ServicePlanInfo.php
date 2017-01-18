<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServicePlanInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* ServicePlanInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ServicePlanInfo extends Entity
{
    /**
    * Gets the property dictionary of the ServicePlanInfo
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the servicePlanId
    *
    * @return string The servicePlanId
    */
    public function getServicePlanId()
    {
        if (array_key_exists("servicePlanId", $this->_propDict)) {
            return $this->_propDict["servicePlanId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePlanId
    *
    * @param string $val The value of the servicePlanId
    *
    * @return ServicePlanInfo
    */
    public function setServicePlanId($val)
    {
        $this->_propDict["service_plan_id"] = $val;
        return $this;
    }
    
    /**
    * Gets the servicePlanName
    *
    * @return string The servicePlanName
    */
    public function getServicePlanName()
    {
        if (array_key_exists("servicePlanName", $this->_propDict)) {
            return $this->_propDict["servicePlanName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePlanName
    *
    * @param string $val The value of the servicePlanName
    *
    * @return ServicePlanInfo
    */
    public function setServicePlanName($val)
    {
        $this->_propDict["service_plan_name"] = $val;
        return $this;
    }
    
    /**
    * Gets the provisioningStatus
    *
    * @return string The provisioningStatus
    */
    public function getProvisioningStatus()
    {
        if (array_key_exists("provisioningStatus", $this->_propDict)) {
            return $this->_propDict["provisioningStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the provisioningStatus
    *
    * @param string $val The value of the provisioningStatus
    *
    * @return ServicePlanInfo
    */
    public function setProvisioningStatus($val)
    {
        $this->_propDict["provisioning_status"] = $val;
        return $this;
    }
    
    /**
    * Gets the appliesTo
    *
    * @return string The appliesTo
    */
    public function getAppliesTo()
    {
        if (array_key_exists("appliesTo", $this->_propDict)) {
            return $this->_propDict["appliesTo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appliesTo
    *
    * @param string $val The value of the appliesTo
    *
    * @return ServicePlanInfo
    */
    public function setAppliesTo($val)
    {
        $this->_propDict["applies_to"] = $val;
        return $this;
    }
}
