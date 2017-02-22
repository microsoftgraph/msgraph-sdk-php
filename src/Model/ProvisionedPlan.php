<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProvisionedPlan File
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
* ProvisionedPlan class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ProvisionedPlan extends Entity
{
    /**
    * Gets the capabilityStatus
    *
    * @return string The capabilityStatus
    */
    public function getCapabilityStatus()
    {
        if (array_key_exists("capabilityStatus", $this->_propDict)) {
            return $this->_propDict["capabilityStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the capabilityStatus
    *
    * @param string $val The value of the capabilityStatus
    *
    * @return ProvisionedPlan
    */
    public function setCapabilityStatus($val)
    {
        $this->_propDict["capability_status"] = $val;
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
    * @return ProvisionedPlan
    */
    public function setProvisioningStatus($val)
    {
        $this->_propDict["provisioning_status"] = $val;
        return $this;
    }
    /**
    * Gets the service
    *
    * @return string The service
    */
    public function getService()
    {
        if (array_key_exists("service", $this->_propDict)) {
            return $this->_propDict["service"];
        } else {
            return null;
        }
    }

    /**
    * Sets the service
    *
    * @param string $val The value of the service
    *
    * @return ProvisionedPlan
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }
}
