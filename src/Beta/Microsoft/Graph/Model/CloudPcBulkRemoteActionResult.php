<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcBulkRemoteActionResult File
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
* CloudPcBulkRemoteActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcBulkRemoteActionResult extends Entity
{
    /**
    * Gets the failedDeviceIds
    *
    * @return string|null The failedDeviceIds
    */
    public function getFailedDeviceIds()
    {
        if (array_key_exists("failedDeviceIds", $this->_propDict)) {
            return $this->_propDict["failedDeviceIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedDeviceIds
    *
    * @param string $val The value of the failedDeviceIds
    *
    * @return CloudPcBulkRemoteActionResult
    */
    public function setFailedDeviceIds($val)
    {
        $this->_propDict["failedDeviceIds"] = $val;
        return $this;
    }
    /**
    * Gets the notFoundDeviceIds
    *
    * @return string|null The notFoundDeviceIds
    */
    public function getNotFoundDeviceIds()
    {
        if (array_key_exists("notFoundDeviceIds", $this->_propDict)) {
            return $this->_propDict["notFoundDeviceIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notFoundDeviceIds
    *
    * @param string $val The value of the notFoundDeviceIds
    *
    * @return CloudPcBulkRemoteActionResult
    */
    public function setNotFoundDeviceIds($val)
    {
        $this->_propDict["notFoundDeviceIds"] = $val;
        return $this;
    }
    /**
    * Gets the notSupportedDeviceIds
    *
    * @return string|null The notSupportedDeviceIds
    */
    public function getNotSupportedDeviceIds()
    {
        if (array_key_exists("notSupportedDeviceIds", $this->_propDict)) {
            return $this->_propDict["notSupportedDeviceIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notSupportedDeviceIds
    *
    * @param string $val The value of the notSupportedDeviceIds
    *
    * @return CloudPcBulkRemoteActionResult
    */
    public function setNotSupportedDeviceIds($val)
    {
        $this->_propDict["notSupportedDeviceIds"] = $val;
        return $this;
    }
    /**
    * Gets the successfulDeviceIds
    *
    * @return string|null The successfulDeviceIds
    */
    public function getSuccessfulDeviceIds()
    {
        if (array_key_exists("successfulDeviceIds", $this->_propDict)) {
            return $this->_propDict["successfulDeviceIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulDeviceIds
    *
    * @param string $val The value of the successfulDeviceIds
    *
    * @return CloudPcBulkRemoteActionResult
    */
    public function setSuccessfulDeviceIds($val)
    {
        $this->_propDict["successfulDeviceIds"] = $val;
        return $this;
    }
}
