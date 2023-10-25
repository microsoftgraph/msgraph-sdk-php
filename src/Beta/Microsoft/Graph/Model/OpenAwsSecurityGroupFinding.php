<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenAwsSecurityGroupFinding File
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
* OpenAwsSecurityGroupFinding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OpenAwsSecurityGroupFinding extends Finding
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
    * @return OpenAwsSecurityGroupFinding
    */
    public function setInboundPorts($val)
    {
        $this->_propDict["inboundPorts"] = $val;
        return $this;
    }

    /**
    * Gets the totalStorageBucketCount
    *
    * @return int|null The totalStorageBucketCount
    */
    public function getTotalStorageBucketCount()
    {
        if (array_key_exists("totalStorageBucketCount", $this->_propDict)) {
            return $this->_propDict["totalStorageBucketCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalStorageBucketCount
    *
    * @param int $val The totalStorageBucketCount
    *
    * @return OpenAwsSecurityGroupFinding
    */
    public function setTotalStorageBucketCount($val)
    {
        $this->_propDict["totalStorageBucketCount"] = intval($val);
        return $this;
    }


     /**
     * Gets the assignedComputeInstancesDetails
     *
     * @return array|null The assignedComputeInstancesDetails
     */
    public function getAssignedComputeInstancesDetails()
    {
        if (array_key_exists("assignedComputeInstancesDetails", $this->_propDict)) {
           return $this->_propDict["assignedComputeInstancesDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedComputeInstancesDetails
    *
    * @param AssignedComputeInstanceDetails[] $val The assignedComputeInstancesDetails
    *
    * @return OpenAwsSecurityGroupFinding
    */
    public function setAssignedComputeInstancesDetails($val)
    {
        $this->_propDict["assignedComputeInstancesDetails"] = $val;
        return $this;
    }

    /**
    * Gets the securityGroup
    *
    * @return AwsAuthorizationSystemResource|null The securityGroup
    */
    public function getSecurityGroup()
    {
        if (array_key_exists("securityGroup", $this->_propDict)) {
            if (is_a($this->_propDict["securityGroup"], "\Beta\Microsoft\Graph\Model\AwsAuthorizationSystemResource") || is_null($this->_propDict["securityGroup"])) {
                return $this->_propDict["securityGroup"];
            } else {
                $this->_propDict["securityGroup"] = new AwsAuthorizationSystemResource($this->_propDict["securityGroup"]);
                return $this->_propDict["securityGroup"];
            }
        }
        return null;
    }

    /**
    * Sets the securityGroup
    *
    * @param AwsAuthorizationSystemResource $val The securityGroup
    *
    * @return OpenAwsSecurityGroupFinding
    */
    public function setSecurityGroup($val)
    {
        $this->_propDict["securityGroup"] = $val;
        return $this;
    }

}
