<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BulkManagedDeviceActionResult File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* BulkManagedDeviceActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class BulkManagedDeviceActionResult extends Entity
{
    /**
    * Gets the successfulDeviceIds
    *
    * @return string The successfulDeviceIds
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
    * @return BulkManagedDeviceActionResult
    */
    public function setSuccessfulDeviceIds($val)
    {
        $this->_propDict["successfulDeviceIds"] = $val;
        return $this;
    }
    /**
    * Gets the failedDeviceIds
    *
    * @return string The failedDeviceIds
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
    * @return BulkManagedDeviceActionResult
    */
    public function setFailedDeviceIds($val)
    {
        $this->_propDict["failedDeviceIds"] = $val;
        return $this;
    }
    /**
    * Gets the notFoundDeviceIds
    *
    * @return string The notFoundDeviceIds
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
    * @return BulkManagedDeviceActionResult
    */
    public function setNotFoundDeviceIds($val)
    {
        $this->_propDict["notFoundDeviceIds"] = $val;
        return $this;
    }
    /**
    * Gets the notSupportedDeviceIds
    *
    * @return string The notSupportedDeviceIds
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
    * @return BulkManagedDeviceActionResult
    */
    public function setNotSupportedDeviceIds($val)
    {
        $this->_propDict["notSupportedDeviceIds"] = $val;
        return $this;
    }
}
