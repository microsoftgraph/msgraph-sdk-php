<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VppLicensingType File
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
* VppLicensingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class VppLicensingType extends Entity
{
    /**
    * Gets the supportUserLicensing
    *
    * @return bool The supportUserLicensing
    */
    public function getSupportUserLicensing()
    {
        if (array_key_exists("supportUserLicensing", $this->_propDict)) {
            return $this->_propDict["supportUserLicensing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportUserLicensing
    *
    * @param bool $val The value of the supportUserLicensing
    *
    * @return VppLicensingType
    */
    public function setSupportUserLicensing($val)
    {
        $this->_propDict["supportUserLicensing"] = $val;
        return $this;
    }
    /**
    * Gets the supportDeviceLicensing
    *
    * @return bool The supportDeviceLicensing
    */
    public function getSupportDeviceLicensing()
    {
        if (array_key_exists("supportDeviceLicensing", $this->_propDict)) {
            return $this->_propDict["supportDeviceLicensing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportDeviceLicensing
    *
    * @param bool $val The value of the supportDeviceLicensing
    *
    * @return VppLicensingType
    */
    public function setSupportDeviceLicensing($val)
    {
        $this->_propDict["supportDeviceLicensing"] = $val;
        return $this;
    }
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
