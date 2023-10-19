<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignedComputeInstanceDetails File
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
* AssignedComputeInstanceDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignedComputeInstanceDetails extends Entity
{

     /**
     * Gets the accessedStorageBuckets
     *
     * @return array|null The accessedStorageBuckets
     */
    public function getAccessedStorageBuckets()
    {
        if (array_key_exists("accessedStorageBuckets", $this->_propDict)) {
           return $this->_propDict["accessedStorageBuckets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessedStorageBuckets
    *
    * @param AuthorizationSystemResource[] $val The accessedStorageBuckets
    *
    * @return AssignedComputeInstanceDetails
    */
    public function setAccessedStorageBuckets($val)
    {
        $this->_propDict["accessedStorageBuckets"] = $val;
        return $this;
    }

    /**
    * Gets the assignedComputeInstance
    *
    * @return AuthorizationSystemResource|null The assignedComputeInstance
    */
    public function getAssignedComputeInstance()
    {
        if (array_key_exists("assignedComputeInstance", $this->_propDict)) {
            if (is_a($this->_propDict["assignedComputeInstance"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemResource") || is_null($this->_propDict["assignedComputeInstance"])) {
                return $this->_propDict["assignedComputeInstance"];
            } else {
                $this->_propDict["assignedComputeInstance"] = new AuthorizationSystemResource($this->_propDict["assignedComputeInstance"]);
                return $this->_propDict["assignedComputeInstance"];
            }
        }
        return null;
    }

    /**
    * Sets the assignedComputeInstance
    *
    * @param AuthorizationSystemResource $val The assignedComputeInstance
    *
    * @return AssignedComputeInstanceDetails
    */
    public function setAssignedComputeInstance($val)
    {
        $this->_propDict["assignedComputeInstance"] = $val;
        return $this;
    }

}
