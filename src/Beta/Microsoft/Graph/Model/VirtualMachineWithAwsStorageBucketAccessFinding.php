<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualMachineWithAwsStorageBucketAccessFinding File
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
* VirtualMachineWithAwsStorageBucketAccessFinding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualMachineWithAwsStorageBucketAccessFinding extends Finding
{
    /**
    * Gets the accessibleCount
    * The total number of storage buckets that the EC2 instance can access using the role
    *
    * @return int|null The accessibleCount
    */
    public function getAccessibleCount()
    {
        if (array_key_exists("accessibleCount", $this->_propDict)) {
            return $this->_propDict["accessibleCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessibleCount
    * The total number of storage buckets that the EC2 instance can access using the role
    *
    * @param int $val The accessibleCount
    *
    * @return VirtualMachineWithAwsStorageBucketAccessFinding
    */
    public function setAccessibleCount($val)
    {
        $this->_propDict["accessibleCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the bucketCount
    * The total number of storage buckets in the authorization system that host the EC2 instance
    *
    * @return int|null The bucketCount
    */
    public function getBucketCount()
    {
        if (array_key_exists("bucketCount", $this->_propDict)) {
            return $this->_propDict["bucketCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bucketCount
    * The total number of storage buckets in the authorization system that host the EC2 instance
    *
    * @param int $val The bucketCount
    *
    * @return VirtualMachineWithAwsStorageBucketAccessFinding
    */
    public function setBucketCount($val)
    {
        $this->_propDict["bucketCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the permissionsCreepIndex
    *
    * @return PermissionsCreepIndex|null The permissionsCreepIndex
    */
    public function getPermissionsCreepIndex()
    {
        if (array_key_exists("permissionsCreepIndex", $this->_propDict)) {
            if (is_a($this->_propDict["permissionsCreepIndex"], "\Beta\Microsoft\Graph\Model\PermissionsCreepIndex") || is_null($this->_propDict["permissionsCreepIndex"])) {
                return $this->_propDict["permissionsCreepIndex"];
            } else {
                $this->_propDict["permissionsCreepIndex"] = new PermissionsCreepIndex($this->_propDict["permissionsCreepIndex"]);
                return $this->_propDict["permissionsCreepIndex"];
            }
        }
        return null;
    }

    /**
    * Sets the permissionsCreepIndex
    *
    * @param PermissionsCreepIndex $val The permissionsCreepIndex
    *
    * @return VirtualMachineWithAwsStorageBucketAccessFinding
    */
    public function setPermissionsCreepIndex($val)
    {
        $this->_propDict["permissionsCreepIndex"] = $val;
        return $this;
    }

    /**
    * Gets the ec2Instance
    *
    * @return AuthorizationSystemResource|null The ec2Instance
    */
    public function getEc2Instance()
    {
        if (array_key_exists("ec2Instance", $this->_propDict)) {
            if (is_a($this->_propDict["ec2Instance"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemResource") || is_null($this->_propDict["ec2Instance"])) {
                return $this->_propDict["ec2Instance"];
            } else {
                $this->_propDict["ec2Instance"] = new AuthorizationSystemResource($this->_propDict["ec2Instance"]);
                return $this->_propDict["ec2Instance"];
            }
        }
        return null;
    }

    /**
    * Sets the ec2Instance
    *
    * @param AuthorizationSystemResource $val The ec2Instance
    *
    * @return VirtualMachineWithAwsStorageBucketAccessFinding
    */
    public function setEc2Instance($val)
    {
        $this->_propDict["ec2Instance"] = $val;
        return $this;
    }

    /**
    * Gets the role
    *
    * @return AwsRole|null The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            if (is_a($this->_propDict["role"], "\Beta\Microsoft\Graph\Model\AwsRole") || is_null($this->_propDict["role"])) {
                return $this->_propDict["role"];
            } else {
                $this->_propDict["role"] = new AwsRole($this->_propDict["role"]);
                return $this->_propDict["role"];
            }
        }
        return null;
    }

    /**
    * Sets the role
    *
    * @param AwsRole $val The role
    *
    * @return VirtualMachineWithAwsStorageBucketAccessFinding
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }

}
