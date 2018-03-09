<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDefenderAdvancedThreatProtectionConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* WindowsDefenderAdvancedThreatProtectionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsDefenderAdvancedThreatProtectionConfiguration extends DeviceConfiguration
{
    /**
    * Gets the allowSampleSharing
    * Windows Defender AdvancedThreatProtection "Allow Sample Sharing" Rule
    *
    * @return bool The allowSampleSharing
    */
    public function getAllowSampleSharing()
    {
        if (array_key_exists("allowSampleSharing", $this->_propDict)) {
            return $this->_propDict["allowSampleSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowSampleSharing
    * Windows Defender AdvancedThreatProtection "Allow Sample Sharing" Rule
    *
    * @param bool $val The allowSampleSharing
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setAllowSampleSharing($val)
    {
        $this->_propDict["allowSampleSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableExpeditedTelemetryReporting
    * Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
    *
    * @return bool The enableExpeditedTelemetryReporting
    */
    public function getEnableExpeditedTelemetryReporting()
    {
        if (array_key_exists("enableExpeditedTelemetryReporting", $this->_propDict)) {
            return $this->_propDict["enableExpeditedTelemetryReporting"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableExpeditedTelemetryReporting
    * Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
    *
    * @param bool $val The enableExpeditedTelemetryReporting
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setEnableExpeditedTelemetryReporting($val)
    {
        $this->_propDict["enableExpeditedTelemetryReporting"] = boolval($val);
        return $this;
    }
    
}