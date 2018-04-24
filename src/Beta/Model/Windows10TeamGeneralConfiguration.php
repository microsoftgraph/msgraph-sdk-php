<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10TeamGeneralConfiguration File
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
* Windows10TeamGeneralConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows10TeamGeneralConfiguration extends DeviceConfiguration
{
    /**
    * Gets the azureOperationalInsightsBlockTelemetry
    *
    * @return bool The azureOperationalInsightsBlockTelemetry
    */
    public function getAzureOperationalInsightsBlockTelemetry()
    {
        if (array_key_exists("azureOperationalInsightsBlockTelemetry", $this->_propDict)) {
            return $this->_propDict["azureOperationalInsightsBlockTelemetry"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureOperationalInsightsBlockTelemetry
    *
    * @param bool $val The azureOperationalInsightsBlockTelemetry
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setAzureOperationalInsightsBlockTelemetry($val)
    {
        $this->_propDict["azureOperationalInsightsBlockTelemetry"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the azureOperationalInsightsWorkspaceId
    *
    * @return string The azureOperationalInsightsWorkspaceId
    */
    public function getAzureOperationalInsightsWorkspaceId()
    {
        if (array_key_exists("azureOperationalInsightsWorkspaceId", $this->_propDict)) {
            return $this->_propDict["azureOperationalInsightsWorkspaceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureOperationalInsightsWorkspaceId
    *
    * @param string $val The azureOperationalInsightsWorkspaceId
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setAzureOperationalInsightsWorkspaceId($val)
    {
        $this->_propDict["azureOperationalInsightsWorkspaceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureOperationalInsightsWorkspaceKey
    *
    * @return string The azureOperationalInsightsWorkspaceKey
    */
    public function getAzureOperationalInsightsWorkspaceKey()
    {
        if (array_key_exists("azureOperationalInsightsWorkspaceKey", $this->_propDict)) {
            return $this->_propDict["azureOperationalInsightsWorkspaceKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureOperationalInsightsWorkspaceKey
    *
    * @param string $val The azureOperationalInsightsWorkspaceKey
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setAzureOperationalInsightsWorkspaceKey($val)
    {
        $this->_propDict["azureOperationalInsightsWorkspaceKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectAppBlockAutoLaunch
    *
    * @return bool The connectAppBlockAutoLaunch
    */
    public function getConnectAppBlockAutoLaunch()
    {
        if (array_key_exists("connectAppBlockAutoLaunch", $this->_propDict)) {
            return $this->_propDict["connectAppBlockAutoLaunch"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectAppBlockAutoLaunch
    *
    * @param bool $val The connectAppBlockAutoLaunch
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setConnectAppBlockAutoLaunch($val)
    {
        $this->_propDict["connectAppBlockAutoLaunch"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the maintenanceWindowBlocked
    *
    * @return bool The maintenanceWindowBlocked
    */
    public function getMaintenanceWindowBlocked()
    {
        if (array_key_exists("maintenanceWindowBlocked", $this->_propDict)) {
            return $this->_propDict["maintenanceWindowBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maintenanceWindowBlocked
    *
    * @param bool $val The maintenanceWindowBlocked
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setMaintenanceWindowBlocked($val)
    {
        $this->_propDict["maintenanceWindowBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the maintenanceWindowDurationInHours
    *
    * @return int The maintenanceWindowDurationInHours
    */
    public function getMaintenanceWindowDurationInHours()
    {
        if (array_key_exists("maintenanceWindowDurationInHours", $this->_propDict)) {
            return $this->_propDict["maintenanceWindowDurationInHours"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maintenanceWindowDurationInHours
    *
    * @param int $val The maintenanceWindowDurationInHours
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setMaintenanceWindowDurationInHours($val)
    {
        $this->_propDict["maintenanceWindowDurationInHours"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the maintenanceWindowStartTime
    *
    * @return TimeOfDay The maintenanceWindowStartTime
    */
    public function getMaintenanceWindowStartTime()
    {
        if (array_key_exists("maintenanceWindowStartTime", $this->_propDict)) {
            if (is_a($this->_propDict["maintenanceWindowStartTime"], "Microsoft\Graph\Beta\Model\TimeOfDay")) {
                return $this->_propDict["maintenanceWindowStartTime"];
            } else {
                $this->_propDict["maintenanceWindowStartTime"] = new TimeOfDay($this->_propDict["maintenanceWindowStartTime"]);
                return $this->_propDict["maintenanceWindowStartTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the maintenanceWindowStartTime
    *
    * @param TimeOfDay $val The maintenanceWindowStartTime
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setMaintenanceWindowStartTime($val)
    {
        $this->_propDict["maintenanceWindowStartTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the miracastChannel
    *
    * @return MiracastChannel The miracastChannel
    */
    public function getMiracastChannel()
    {
        if (array_key_exists("miracastChannel", $this->_propDict)) {
            if (is_a($this->_propDict["miracastChannel"], "Microsoft\Graph\Beta\Model\MiracastChannel")) {
                return $this->_propDict["miracastChannel"];
            } else {
                $this->_propDict["miracastChannel"] = new MiracastChannel($this->_propDict["miracastChannel"]);
                return $this->_propDict["miracastChannel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the miracastChannel
    *
    * @param MiracastChannel $val The miracastChannel
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setMiracastChannel($val)
    {
        $this->_propDict["miracastChannel"] = $val;
        return $this;
    }
    
    /**
    * Gets the miracastBlocked
    *
    * @return bool The miracastBlocked
    */
    public function getMiracastBlocked()
    {
        if (array_key_exists("miracastBlocked", $this->_propDict)) {
            return $this->_propDict["miracastBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the miracastBlocked
    *
    * @param bool $val The miracastBlocked
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setMiracastBlocked($val)
    {
        $this->_propDict["miracastBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the miracastRequirePin
    *
    * @return bool The miracastRequirePin
    */
    public function getMiracastRequirePin()
    {
        if (array_key_exists("miracastRequirePin", $this->_propDict)) {
            return $this->_propDict["miracastRequirePin"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the miracastRequirePin
    *
    * @param bool $val The miracastRequirePin
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setMiracastRequirePin($val)
    {
        $this->_propDict["miracastRequirePin"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockMyMeetingsAndFiles
    *
    * @return bool The settingsBlockMyMeetingsAndFiles
    */
    public function getSettingsBlockMyMeetingsAndFiles()
    {
        if (array_key_exists("settingsBlockMyMeetingsAndFiles", $this->_propDict)) {
            return $this->_propDict["settingsBlockMyMeetingsAndFiles"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockMyMeetingsAndFiles
    *
    * @param bool $val The settingsBlockMyMeetingsAndFiles
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setSettingsBlockMyMeetingsAndFiles($val)
    {
        $this->_propDict["settingsBlockMyMeetingsAndFiles"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockSessionResume
    *
    * @return bool The settingsBlockSessionResume
    */
    public function getSettingsBlockSessionResume()
    {
        if (array_key_exists("settingsBlockSessionResume", $this->_propDict)) {
            return $this->_propDict["settingsBlockSessionResume"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockSessionResume
    *
    * @param bool $val The settingsBlockSessionResume
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setSettingsBlockSessionResume($val)
    {
        $this->_propDict["settingsBlockSessionResume"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockSigninSuggestions
    *
    * @return bool The settingsBlockSigninSuggestions
    */
    public function getSettingsBlockSigninSuggestions()
    {
        if (array_key_exists("settingsBlockSigninSuggestions", $this->_propDict)) {
            return $this->_propDict["settingsBlockSigninSuggestions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockSigninSuggestions
    *
    * @param bool $val The settingsBlockSigninSuggestions
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setSettingsBlockSigninSuggestions($val)
    {
        $this->_propDict["settingsBlockSigninSuggestions"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsDefaultVolume
    *
    * @return int The settingsDefaultVolume
    */
    public function getSettingsDefaultVolume()
    {
        if (array_key_exists("settingsDefaultVolume", $this->_propDict)) {
            return $this->_propDict["settingsDefaultVolume"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsDefaultVolume
    *
    * @param int $val The settingsDefaultVolume
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setSettingsDefaultVolume($val)
    {
        $this->_propDict["settingsDefaultVolume"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the settingsScreenTimeoutInMinutes
    *
    * @return int The settingsScreenTimeoutInMinutes
    */
    public function getSettingsScreenTimeoutInMinutes()
    {
        if (array_key_exists("settingsScreenTimeoutInMinutes", $this->_propDict)) {
            return $this->_propDict["settingsScreenTimeoutInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsScreenTimeoutInMinutes
    *
    * @param int $val The settingsScreenTimeoutInMinutes
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setSettingsScreenTimeoutInMinutes($val)
    {
        $this->_propDict["settingsScreenTimeoutInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the settingsSessionTimeoutInMinutes
    *
    * @return int The settingsSessionTimeoutInMinutes
    */
    public function getSettingsSessionTimeoutInMinutes()
    {
        if (array_key_exists("settingsSessionTimeoutInMinutes", $this->_propDict)) {
            return $this->_propDict["settingsSessionTimeoutInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsSessionTimeoutInMinutes
    *
    * @param int $val The settingsSessionTimeoutInMinutes
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setSettingsSessionTimeoutInMinutes($val)
    {
        $this->_propDict["settingsSessionTimeoutInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the settingsSleepTimeoutInMinutes
    *
    * @return int The settingsSleepTimeoutInMinutes
    */
    public function getSettingsSleepTimeoutInMinutes()
    {
        if (array_key_exists("settingsSleepTimeoutInMinutes", $this->_propDict)) {
            return $this->_propDict["settingsSleepTimeoutInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsSleepTimeoutInMinutes
    *
    * @param int $val The settingsSleepTimeoutInMinutes
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setSettingsSleepTimeoutInMinutes($val)
    {
        $this->_propDict["settingsSleepTimeoutInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the welcomeScreenBlockAutomaticWakeUp
    *
    * @return bool The welcomeScreenBlockAutomaticWakeUp
    */
    public function getWelcomeScreenBlockAutomaticWakeUp()
    {
        if (array_key_exists("welcomeScreenBlockAutomaticWakeUp", $this->_propDict)) {
            return $this->_propDict["welcomeScreenBlockAutomaticWakeUp"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the welcomeScreenBlockAutomaticWakeUp
    *
    * @param bool $val The welcomeScreenBlockAutomaticWakeUp
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setWelcomeScreenBlockAutomaticWakeUp($val)
    {
        $this->_propDict["welcomeScreenBlockAutomaticWakeUp"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the welcomeScreenBackgroundImageUrl
    *
    * @return string The welcomeScreenBackgroundImageUrl
    */
    public function getWelcomeScreenBackgroundImageUrl()
    {
        if (array_key_exists("welcomeScreenBackgroundImageUrl", $this->_propDict)) {
            return $this->_propDict["welcomeScreenBackgroundImageUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the welcomeScreenBackgroundImageUrl
    *
    * @param string $val The welcomeScreenBackgroundImageUrl
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setWelcomeScreenBackgroundImageUrl($val)
    {
        $this->_propDict["welcomeScreenBackgroundImageUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the welcomeScreenMeetingInformation
    *
    * @return WelcomeScreenMeetingInformation The welcomeScreenMeetingInformation
    */
    public function getWelcomeScreenMeetingInformation()
    {
        if (array_key_exists("welcomeScreenMeetingInformation", $this->_propDict)) {
            if (is_a($this->_propDict["welcomeScreenMeetingInformation"], "Microsoft\Graph\Beta\Model\WelcomeScreenMeetingInformation")) {
                return $this->_propDict["welcomeScreenMeetingInformation"];
            } else {
                $this->_propDict["welcomeScreenMeetingInformation"] = new WelcomeScreenMeetingInformation($this->_propDict["welcomeScreenMeetingInformation"]);
                return $this->_propDict["welcomeScreenMeetingInformation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the welcomeScreenMeetingInformation
    *
    * @param WelcomeScreenMeetingInformation $val The welcomeScreenMeetingInformation
    *
    * @return Windows10TeamGeneralConfiguration
    */
    public function setWelcomeScreenMeetingInformation($val)
    {
        $this->_propDict["welcomeScreenMeetingInformation"] = $val;
        return $this;
    }
    
}