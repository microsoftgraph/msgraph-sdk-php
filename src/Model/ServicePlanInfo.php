<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServicePlanInfo File
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
* ServicePlanInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ServicePlanInfo extends Entity
{
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
        $this->_propDict["servicePlanId"] = $val;
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
        $this->_propDict["servicePlanName"] = $val;
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
        $this->_propDict["provisioningStatus"] = $val;
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
        $this->_propDict["appliesTo"] = $val;
        return $this;
    }
}
