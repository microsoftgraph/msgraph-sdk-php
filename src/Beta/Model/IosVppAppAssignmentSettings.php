<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosVppAppAssignmentSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* IosVppAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IosVppAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Gets the useDeviceLicensing
    *
    * @return bool The useDeviceLicensing
    */
    public function getUseDeviceLicensing()
    {
        if (array_key_exists("useDeviceLicensing", $this->_propDict)) {
            return $this->_propDict["useDeviceLicensing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useDeviceLicensing
    *
    * @param bool $val The value of the useDeviceLicensing
    *
    * @return IosVppAppAssignmentSettings
    */
    public function setUseDeviceLicensing($val)
    {
        $this->_propDict["useDeviceLicensing"] = $val;
        return $this;
    }
    /**
    * Gets the vpnConfigurationId
    *
    * @return string The vpnConfigurationId
    */
    public function getVpnConfigurationId()
    {
        if (array_key_exists("vpnConfigurationId", $this->_propDict)) {
            return $this->_propDict["vpnConfigurationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vpnConfigurationId
    *
    * @param string $val The value of the vpnConfigurationId
    *
    * @return IosVppAppAssignmentSettings
    */
    public function setVpnConfigurationId($val)
    {
        $this->_propDict["vpnConfigurationId"] = $val;
        return $this;
    }
}
