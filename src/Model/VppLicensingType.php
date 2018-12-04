<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VppLicensingType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* VppLicensingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class VppLicensingType extends Entity
{
    /**
    * Gets the supportsUserLicensing
    *
    * @return bool The supportsUserLicensing
    */
    public function getSupportsUserLicensing()
    {
        if (array_key_exists("supportsUserLicensing", $this->_propDict)) {
            return $this->_propDict["supportsUserLicensing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportsUserLicensing
    *
    * @param bool $val The value of the supportsUserLicensing
    *
    * @return VppLicensingType
    */
    public function setSupportsUserLicensing($val)
    {
        $this->_propDict["supportsUserLicensing"] = $val;
        return $this;
    }
    /**
    * Gets the supportsDeviceLicensing
    *
    * @return bool The supportsDeviceLicensing
    */
    public function getSupportsDeviceLicensing()
    {
        if (array_key_exists("supportsDeviceLicensing", $this->_propDict)) {
            return $this->_propDict["supportsDeviceLicensing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportsDeviceLicensing
    *
    * @param bool $val The value of the supportsDeviceLicensing
    *
    * @return VppLicensingType
    */
    public function setSupportsDeviceLicensing($val)
    {
        $this->_propDict["supportsDeviceLicensing"] = $val;
        return $this;
    }
}
