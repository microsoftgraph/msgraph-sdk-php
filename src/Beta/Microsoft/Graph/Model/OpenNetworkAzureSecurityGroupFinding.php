<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenNetworkAzureSecurityGroupFinding File
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
* OpenNetworkAzureSecurityGroupFinding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OpenNetworkAzureSecurityGroupFinding extends Finding
{
    /**
    * Gets the inboundPorts
    *
    * @return InboundPorts|null The inboundPorts
    */
    public function getInboundPorts()
    {
        if (array_key_exists("inboundPorts", $this->_propDict)) {
            if (is_a($this->_propDict["inboundPorts"], "\Beta\Microsoft\Graph\Model\InboundPorts") || is_null($this->_propDict["inboundPorts"])) {
                return $this->_propDict["inboundPorts"];
            } else {
                $this->_propDict["inboundPorts"] = new InboundPorts($this->_propDict["inboundPorts"]);
                return $this->_propDict["inboundPorts"];
            }
        }
        return null;
    }

    /**
    * Sets the inboundPorts
    *
    * @param InboundPorts $val The inboundPorts
    *
    * @return OpenNetworkAzureSecurityGroupFinding
    */
    public function setInboundPorts($val)
    {
        $this->_propDict["inboundPorts"] = $val;
        return $this;
    }

    /**
    * Gets the securityGroup
    *
    * @return AuthorizationSystemResource|null The securityGroup
    */
    public function getSecurityGroup()
    {
        if (array_key_exists("securityGroup", $this->_propDict)) {
            if (is_a($this->_propDict["securityGroup"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemResource") || is_null($this->_propDict["securityGroup"])) {
                return $this->_propDict["securityGroup"];
            } else {
                $this->_propDict["securityGroup"] = new AuthorizationSystemResource($this->_propDict["securityGroup"]);
                return $this->_propDict["securityGroup"];
            }
        }
        return null;
    }

    /**
    * Sets the securityGroup
    *
    * @param AuthorizationSystemResource $val The securityGroup
    *
    * @return OpenNetworkAzureSecurityGroupFinding
    */
    public function setSecurityGroup($val)
    {
        $this->_propDict["securityGroup"] = $val;
        return $this;
    }


     /**
     * Gets the virtualMachines
     *
     * @return array|null The virtualMachines
     */
    public function getVirtualMachines()
    {
        if (array_key_exists("virtualMachines", $this->_propDict)) {
           return $this->_propDict["virtualMachines"];
        } else {
            return null;
        }
    }

    /**
    * Sets the virtualMachines
    *
    * @param AuthorizationSystemResource[] $val The virtualMachines
    *
    * @return OpenNetworkAzureSecurityGroupFinding
    */
    public function setVirtualMachines($val)
    {
        $this->_propDict["virtualMachines"] = $val;
        return $this;
    }

}
