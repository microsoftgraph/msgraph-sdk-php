<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsRole File
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
* AwsRole class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsRole extends AwsIdentity
{
    /**
    * Gets the roleType
    *
    * @return AwsRoleType|null The roleType
    */
    public function getRoleType()
    {
        if (array_key_exists("roleType", $this->_propDict)) {
            if (is_a($this->_propDict["roleType"], "\Beta\Microsoft\Graph\Model\AwsRoleType") || is_null($this->_propDict["roleType"])) {
                return $this->_propDict["roleType"];
            } else {
                $this->_propDict["roleType"] = new AwsRoleType($this->_propDict["roleType"]);
                return $this->_propDict["roleType"];
            }
        }
        return null;
    }

    /**
    * Sets the roleType
    *
    * @param AwsRoleType $val The roleType
    *
    * @return AwsRole
    */
    public function setRoleType($val)
    {
        $this->_propDict["roleType"] = $val;
        return $this;
    }

    /**
    * Gets the trustEntityType
    *
    * @return AwsRoleTrustEntityType|null The trustEntityType
    */
    public function getTrustEntityType()
    {
        if (array_key_exists("trustEntityType", $this->_propDict)) {
            if (is_a($this->_propDict["trustEntityType"], "\Beta\Microsoft\Graph\Model\AwsRoleTrustEntityType") || is_null($this->_propDict["trustEntityType"])) {
                return $this->_propDict["trustEntityType"];
            } else {
                $this->_propDict["trustEntityType"] = new AwsRoleTrustEntityType($this->_propDict["trustEntityType"]);
                return $this->_propDict["trustEntityType"];
            }
        }
        return null;
    }

    /**
    * Sets the trustEntityType
    *
    * @param AwsRoleTrustEntityType $val The trustEntityType
    *
    * @return AwsRole
    */
    public function setTrustEntityType($val)
    {
        $this->_propDict["trustEntityType"] = $val;
        return $this;
    }

}
