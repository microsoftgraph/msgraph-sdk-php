<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceIdentityAttestationDetail File
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
* DeviceIdentityAttestationDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceIdentityAttestationDetail extends Entity
{

    /**
    * Gets the deviceIdentityAttestationStatus
    * Indicates the attestation status of the managed device. And in which way. Default: Unknown. This property is read-only.
    *
    * @return DeviceIdentityAttestationStatus|null The deviceIdentityAttestationStatus
    */
    public function getDeviceIdentityAttestationStatus()
    {
        if (array_key_exists("deviceIdentityAttestationStatus", $this->_propDict)) {
            if (is_a($this->_propDict["deviceIdentityAttestationStatus"], "\Beta\Microsoft\Graph\Model\DeviceIdentityAttestationStatus") || is_null($this->_propDict["deviceIdentityAttestationStatus"])) {
                return $this->_propDict["deviceIdentityAttestationStatus"];
            } else {
                $this->_propDict["deviceIdentityAttestationStatus"] = new DeviceIdentityAttestationStatus($this->_propDict["deviceIdentityAttestationStatus"]);
                return $this->_propDict["deviceIdentityAttestationStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceIdentityAttestationStatus
    * Indicates the attestation status of the managed device. And in which way. Default: Unknown. This property is read-only.
    *
    * @param DeviceIdentityAttestationStatus $val The value to assign to the deviceIdentityAttestationStatus
    *
    * @return DeviceIdentityAttestationDetail The DeviceIdentityAttestationDetail
    */
    public function setDeviceIdentityAttestationStatus($val)
    {
        $this->_propDict["deviceIdentityAttestationStatus"] = $val;
         return $this;
    }
}
