<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsIdentityAccessManagementKeyUsageFinding File
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
* AwsIdentityAccessManagementKeyUsageFinding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsIdentityAccessManagementKeyUsageFinding extends Finding
{
    /**
    * Gets the actionSummary
    *
    * @return ActionSummary|null The actionSummary
    */
    public function getActionSummary()
    {
        if (array_key_exists("actionSummary", $this->_propDict)) {
            if (is_a($this->_propDict["actionSummary"], "\Beta\Microsoft\Graph\Model\ActionSummary") || is_null($this->_propDict["actionSummary"])) {
                return $this->_propDict["actionSummary"];
            } else {
                $this->_propDict["actionSummary"] = new ActionSummary($this->_propDict["actionSummary"]);
                return $this->_propDict["actionSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the actionSummary
    *
    * @param ActionSummary $val The actionSummary
    *
    * @return AwsIdentityAccessManagementKeyUsageFinding
    */
    public function setActionSummary($val)
    {
        $this->_propDict["actionSummary"] = $val;
        return $this;
    }

    /**
    * Gets the awsAccessKeyDetails
    *
    * @return AwsAccessKeyDetails|null The awsAccessKeyDetails
    */
    public function getAwsAccessKeyDetails()
    {
        if (array_key_exists("awsAccessKeyDetails", $this->_propDict)) {
            if (is_a($this->_propDict["awsAccessKeyDetails"], "\Beta\Microsoft\Graph\Model\AwsAccessKeyDetails") || is_null($this->_propDict["awsAccessKeyDetails"])) {
                return $this->_propDict["awsAccessKeyDetails"];
            } else {
                $this->_propDict["awsAccessKeyDetails"] = new AwsAccessKeyDetails($this->_propDict["awsAccessKeyDetails"]);
                return $this->_propDict["awsAccessKeyDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the awsAccessKeyDetails
    *
    * @param AwsAccessKeyDetails $val The awsAccessKeyDetails
    *
    * @return AwsIdentityAccessManagementKeyUsageFinding
    */
    public function setAwsAccessKeyDetails($val)
    {
        $this->_propDict["awsAccessKeyDetails"] = $val;
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
    * @return AwsIdentityAccessManagementKeyUsageFinding
    */
    public function setPermissionsCreepIndex($val)
    {
        $this->_propDict["permissionsCreepIndex"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return IamStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\IamStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new IamStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param IamStatus $val The status
    *
    * @return AwsIdentityAccessManagementKeyUsageFinding
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the accessKey
    *
    * @return AwsAccessKey|null The accessKey
    */
    public function getAccessKey()
    {
        if (array_key_exists("accessKey", $this->_propDict)) {
            if (is_a($this->_propDict["accessKey"], "\Beta\Microsoft\Graph\Model\AwsAccessKey") || is_null($this->_propDict["accessKey"])) {
                return $this->_propDict["accessKey"];
            } else {
                $this->_propDict["accessKey"] = new AwsAccessKey($this->_propDict["accessKey"]);
                return $this->_propDict["accessKey"];
            }
        }
        return null;
    }

    /**
    * Sets the accessKey
    *
    * @param AwsAccessKey $val The accessKey
    *
    * @return AwsIdentityAccessManagementKeyUsageFinding
    */
    public function setAccessKey($val)
    {
        $this->_propDict["accessKey"] = $val;
        return $this;
    }

}
