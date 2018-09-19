<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDefenderAdvancedThreatProtectionConfiguration File
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
* WindowsDefenderAdvancedThreatProtectionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsDefenderAdvancedThreatProtectionConfiguration extends DeviceConfiguration
{
    /**
    * Gets the advancedThreatProtectionOnboardingBlob
    *
    * @return string The advancedThreatProtectionOnboardingBlob
    */
    public function getAdvancedThreatProtectionOnboardingBlob()
    {
        if (array_key_exists("advancedThreatProtectionOnboardingBlob", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionOnboardingBlob"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionOnboardingBlob
    *
    * @param string $val The advancedThreatProtectionOnboardingBlob
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setAdvancedThreatProtectionOnboardingBlob($val)
    {
        $this->_propDict["advancedThreatProtectionOnboardingBlob"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionOnboardingFilename
    *
    * @return string The advancedThreatProtectionOnboardingFilename
    */
    public function getAdvancedThreatProtectionOnboardingFilename()
    {
        if (array_key_exists("advancedThreatProtectionOnboardingFilename", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionOnboardingFilename"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionOnboardingFilename
    *
    * @param string $val The advancedThreatProtectionOnboardingFilename
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setAdvancedThreatProtectionOnboardingFilename($val)
    {
        $this->_propDict["advancedThreatProtectionOnboardingFilename"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionAutoPopulateOnboardingBlob
    *
    * @return bool The advancedThreatProtectionAutoPopulateOnboardingBlob
    */
    public function getAdvancedThreatProtectionAutoPopulateOnboardingBlob()
    {
        if (array_key_exists("advancedThreatProtectionAutoPopulateOnboardingBlob", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionAutoPopulateOnboardingBlob"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionAutoPopulateOnboardingBlob
    *
    * @param bool $val The advancedThreatProtectionAutoPopulateOnboardingBlob
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setAdvancedThreatProtectionAutoPopulateOnboardingBlob($val)
    {
        $this->_propDict["advancedThreatProtectionAutoPopulateOnboardingBlob"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowSampleSharing
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
    
    /**
    * Gets the advancedThreatProtectionOffboardingBlob
    *
    * @return string The advancedThreatProtectionOffboardingBlob
    */
    public function getAdvancedThreatProtectionOffboardingBlob()
    {
        if (array_key_exists("advancedThreatProtectionOffboardingBlob", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionOffboardingBlob"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionOffboardingBlob
    *
    * @param string $val The advancedThreatProtectionOffboardingBlob
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setAdvancedThreatProtectionOffboardingBlob($val)
    {
        $this->_propDict["advancedThreatProtectionOffboardingBlob"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionOffboardingFilename
    *
    * @return string The advancedThreatProtectionOffboardingFilename
    */
    public function getAdvancedThreatProtectionOffboardingFilename()
    {
        if (array_key_exists("advancedThreatProtectionOffboardingFilename", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionOffboardingFilename"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionOffboardingFilename
    *
    * @param string $val The advancedThreatProtectionOffboardingFilename
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setAdvancedThreatProtectionOffboardingFilename($val)
    {
        $this->_propDict["advancedThreatProtectionOffboardingFilename"] = $val;
        return $this;
    }
    
}