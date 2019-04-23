<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateForBusinessConfiguration File
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
* WindowsUpdateForBusinessConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsUpdateForBusinessConfiguration extends DeviceConfiguration
{
    /**
    * Gets the deliveryOptimizationMode
    * Delivery Optimization Mode. Possible values are: userDefined, httpOnly, httpWithPeeringNat, httpWithPeeringPrivateGroup, httpWithInternetPeering, simpleDownload, bypassMode.
    *
    * @return WindowsDeliveryOptimizationMode The deliveryOptimizationMode
    */
    public function getDeliveryOptimizationMode()
    {
        if (array_key_exists("deliveryOptimizationMode", $this->_propDict)) {
            if (is_a($this->_propDict["deliveryOptimizationMode"], "Microsoft\Graph\Beta\Model\WindowsDeliveryOptimizationMode")) {
                return $this->_propDict["deliveryOptimizationMode"];
            } else {
                $this->_propDict["deliveryOptimizationMode"] = new WindowsDeliveryOptimizationMode($this->_propDict["deliveryOptimizationMode"]);
                return $this->_propDict["deliveryOptimizationMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deliveryOptimizationMode
    * Delivery Optimization Mode. Possible values are: userDefined, httpOnly, httpWithPeeringNat, httpWithPeeringPrivateGroup, httpWithInternetPeering, simpleDownload, bypassMode.
    *
    * @param WindowsDeliveryOptimizationMode $val The deliveryOptimizationMode
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setDeliveryOptimizationMode($val)
    {
        $this->_propDict["deliveryOptimizationMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the prereleaseFeatures
    * The pre-release features. Possible values are: userDefined, settingsOnly, settingsAndExperimentations, notAllowed.
    *
    * @return PrereleaseFeatures The prereleaseFeatures
    */
    public function getPrereleaseFeatures()
    {
        if (array_key_exists("prereleaseFeatures", $this->_propDict)) {
            if (is_a($this->_propDict["prereleaseFeatures"], "Microsoft\Graph\Beta\Model\PrereleaseFeatures")) {
                return $this->_propDict["prereleaseFeatures"];
            } else {
                $this->_propDict["prereleaseFeatures"] = new PrereleaseFeatures($this->_propDict["prereleaseFeatures"]);
                return $this->_propDict["prereleaseFeatures"];
            }
        }
        return null;
    }
    
    /**
    * Sets the prereleaseFeatures
    * The pre-release features. Possible values are: userDefined, settingsOnly, settingsAndExperimentations, notAllowed.
    *
    * @param PrereleaseFeatures $val The prereleaseFeatures
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setPrereleaseFeatures($val)
    {
        $this->_propDict["prereleaseFeatures"] = $val;
        return $this;
    }
    
    /**
    * Gets the automaticUpdateMode
    * Automatic update mode. Possible values are: userDefined, notifyDownload, autoInstallAtMaintenanceTime, autoInstallAndRebootAtMaintenanceTime, autoInstallAndRebootAtScheduledTime, autoInstallAndRebootWithoutEndUserControl.
    *
    * @return AutomaticUpdateMode The automaticUpdateMode
    */
    public function getAutomaticUpdateMode()
    {
        if (array_key_exists("automaticUpdateMode", $this->_propDict)) {
            if (is_a($this->_propDict["automaticUpdateMode"], "Microsoft\Graph\Beta\Model\AutomaticUpdateMode")) {
                return $this->_propDict["automaticUpdateMode"];
            } else {
                $this->_propDict["automaticUpdateMode"] = new AutomaticUpdateMode($this->_propDict["automaticUpdateMode"]);
                return $this->_propDict["automaticUpdateMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the automaticUpdateMode
    * Automatic update mode. Possible values are: userDefined, notifyDownload, autoInstallAtMaintenanceTime, autoInstallAndRebootAtMaintenanceTime, autoInstallAndRebootAtScheduledTime, autoInstallAndRebootWithoutEndUserControl.
    *
    * @param AutomaticUpdateMode $val The automaticUpdateMode
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setAutomaticUpdateMode($val)
    {
        $this->_propDict["automaticUpdateMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftUpdateServiceAllowed
    * Allow Microsoft Update Service
    *
    * @return bool The microsoftUpdateServiceAllowed
    */
    public function getMicrosoftUpdateServiceAllowed()
    {
        if (array_key_exists("microsoftUpdateServiceAllowed", $this->_propDict)) {
            return $this->_propDict["microsoftUpdateServiceAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the microsoftUpdateServiceAllowed
    * Allow Microsoft Update Service
    *
    * @param bool $val The microsoftUpdateServiceAllowed
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setMicrosoftUpdateServiceAllowed($val)
    {
        $this->_propDict["microsoftUpdateServiceAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the driversExcluded
    * Exclude Windows update Drivers
    *
    * @return bool The driversExcluded
    */
    public function getDriversExcluded()
    {
        if (array_key_exists("driversExcluded", $this->_propDict)) {
            return $this->_propDict["driversExcluded"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the driversExcluded
    * Exclude Windows update Drivers
    *
    * @param bool $val The driversExcluded
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setDriversExcluded($val)
    {
        $this->_propDict["driversExcluded"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the installationSchedule
    * Installation schedule
    *
    * @return WindowsUpdateInstallScheduleType The installationSchedule
    */
    public function getInstallationSchedule()
    {
        if (array_key_exists("installationSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["installationSchedule"], "Microsoft\Graph\Beta\Model\WindowsUpdateInstallScheduleType")) {
                return $this->_propDict["installationSchedule"];
            } else {
                $this->_propDict["installationSchedule"] = new WindowsUpdateInstallScheduleType($this->_propDict["installationSchedule"]);
                return $this->_propDict["installationSchedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installationSchedule
    * Installation schedule
    *
    * @param WindowsUpdateInstallScheduleType $val The installationSchedule
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setInstallationSchedule($val)
    {
        $this->_propDict["installationSchedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesDeferralPeriodInDays
    * Defer Quality Updates by these many days
    *
    * @return int The qualityUpdatesDeferralPeriodInDays
    */
    public function getQualityUpdatesDeferralPeriodInDays()
    {
        if (array_key_exists("qualityUpdatesDeferralPeriodInDays", $this->_propDict)) {
            return $this->_propDict["qualityUpdatesDeferralPeriodInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the qualityUpdatesDeferralPeriodInDays
    * Defer Quality Updates by these many days
    *
    * @param int $val The qualityUpdatesDeferralPeriodInDays
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesDeferralPeriodInDays($val)
    {
        $this->_propDict["qualityUpdatesDeferralPeriodInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the featureUpdatesDeferralPeriodInDays
    * Defer Feature Updates by these many days
    *
    * @return int The featureUpdatesDeferralPeriodInDays
    */
    public function getFeatureUpdatesDeferralPeriodInDays()
    {
        if (array_key_exists("featureUpdatesDeferralPeriodInDays", $this->_propDict)) {
            return $this->_propDict["featureUpdatesDeferralPeriodInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdatesDeferralPeriodInDays
    * Defer Feature Updates by these many days
    *
    * @param int $val The featureUpdatesDeferralPeriodInDays
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesDeferralPeriodInDays($val)
    {
        $this->_propDict["featureUpdatesDeferralPeriodInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesPaused
    * Pause Quality Updates
    *
    * @return bool The qualityUpdatesPaused
    */
    public function getQualityUpdatesPaused()
    {
        if (array_key_exists("qualityUpdatesPaused", $this->_propDict)) {
            return $this->_propDict["qualityUpdatesPaused"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the qualityUpdatesPaused
    * Pause Quality Updates
    *
    * @param bool $val The qualityUpdatesPaused
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesPaused($val)
    {
        $this->_propDict["qualityUpdatesPaused"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the featureUpdatesPaused
    * Pause Feature Updates
    *
    * @return bool The featureUpdatesPaused
    */
    public function getFeatureUpdatesPaused()
    {
        if (array_key_exists("featureUpdatesPaused", $this->_propDict)) {
            return $this->_propDict["featureUpdatesPaused"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdatesPaused
    * Pause Feature Updates
    *
    * @param bool $val The featureUpdatesPaused
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesPaused($val)
    {
        $this->_propDict["featureUpdatesPaused"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesPauseExpiryDateTime
    * Quality Updates Pause Expiry datetime
    *
    * @return \DateTime The qualityUpdatesPauseExpiryDateTime
    */
    public function getQualityUpdatesPauseExpiryDateTime()
    {
        if (array_key_exists("qualityUpdatesPauseExpiryDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["qualityUpdatesPauseExpiryDateTime"], "\DateTime")) {
                return $this->_propDict["qualityUpdatesPauseExpiryDateTime"];
            } else {
                $this->_propDict["qualityUpdatesPauseExpiryDateTime"] = new \DateTime($this->_propDict["qualityUpdatesPauseExpiryDateTime"]);
                return $this->_propDict["qualityUpdatesPauseExpiryDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the qualityUpdatesPauseExpiryDateTime
    * Quality Updates Pause Expiry datetime
    *
    * @param \DateTime $val The qualityUpdatesPauseExpiryDateTime
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesPauseExpiryDateTime($val)
    {
        $this->_propDict["qualityUpdatesPauseExpiryDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the featureUpdatesPauseExpiryDateTime
    * Feature Updates Pause Expiry datetime
    *
    * @return \DateTime The featureUpdatesPauseExpiryDateTime
    */
    public function getFeatureUpdatesPauseExpiryDateTime()
    {
        if (array_key_exists("featureUpdatesPauseExpiryDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["featureUpdatesPauseExpiryDateTime"], "\DateTime")) {
                return $this->_propDict["featureUpdatesPauseExpiryDateTime"];
            } else {
                $this->_propDict["featureUpdatesPauseExpiryDateTime"] = new \DateTime($this->_propDict["featureUpdatesPauseExpiryDateTime"]);
                return $this->_propDict["featureUpdatesPauseExpiryDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the featureUpdatesPauseExpiryDateTime
    * Feature Updates Pause Expiry datetime
    *
    * @param \DateTime $val The featureUpdatesPauseExpiryDateTime
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesPauseExpiryDateTime($val)
    {
        $this->_propDict["featureUpdatesPauseExpiryDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessReadyUpdatesOnly
    * Determines which branch devices will receive their updates from. Possible values are: userDefined, all, businessReadyOnly, windowsInsiderBuildFast, windowsInsiderBuildSlow, windowsInsiderBuildRelease.
    *
    * @return WindowsUpdateType The businessReadyUpdatesOnly
    */
    public function getBusinessReadyUpdatesOnly()
    {
        if (array_key_exists("businessReadyUpdatesOnly", $this->_propDict)) {
            if (is_a($this->_propDict["businessReadyUpdatesOnly"], "Microsoft\Graph\Beta\Model\WindowsUpdateType")) {
                return $this->_propDict["businessReadyUpdatesOnly"];
            } else {
                $this->_propDict["businessReadyUpdatesOnly"] = new WindowsUpdateType($this->_propDict["businessReadyUpdatesOnly"]);
                return $this->_propDict["businessReadyUpdatesOnly"];
            }
        }
        return null;
    }
    
    /**
    * Sets the businessReadyUpdatesOnly
    * Determines which branch devices will receive their updates from. Possible values are: userDefined, all, businessReadyOnly, windowsInsiderBuildFast, windowsInsiderBuildSlow, windowsInsiderBuildRelease.
    *
    * @param WindowsUpdateType $val The businessReadyUpdatesOnly
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setBusinessReadyUpdatesOnly($val)
    {
        $this->_propDict["businessReadyUpdatesOnly"] = $val;
        return $this;
    }
    
    /**
    * Gets the skipChecksBeforeRestart
    * Set to skip all check before restart: Battery level = 40%, User presence, Display Needed, Presentation mode, Full screen mode, phone call state, game mode etc. 
    *
    * @return bool The skipChecksBeforeRestart
    */
    public function getSkipChecksBeforeRestart()
    {
        if (array_key_exists("skipChecksBeforeRestart", $this->_propDict)) {
            return $this->_propDict["skipChecksBeforeRestart"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skipChecksBeforeRestart
    * Set to skip all check before restart: Battery level = 40%, User presence, Display Needed, Presentation mode, Full screen mode, phone call state, game mode etc. 
    *
    * @param bool $val The skipChecksBeforeRestart
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setSkipChecksBeforeRestart($val)
    {
        $this->_propDict["skipChecksBeforeRestart"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the updateWeeks
    * Scheduled the update installation on the weeks of the month
    *
    * @return WindowsUpdateForBusinessUpdateWeeks The updateWeeks
    */
    public function getUpdateWeeks()
    {
        if (array_key_exists("updateWeeks", $this->_propDict)) {
            if (is_a($this->_propDict["updateWeeks"], "Microsoft\Graph\Beta\Model\WindowsUpdateForBusinessUpdateWeeks")) {
                return $this->_propDict["updateWeeks"];
            } else {
                $this->_propDict["updateWeeks"] = new WindowsUpdateForBusinessUpdateWeeks($this->_propDict["updateWeeks"]);
                return $this->_propDict["updateWeeks"];
            }
        }
        return null;
    }
    
    /**
    * Sets the updateWeeks
    * Scheduled the update installation on the weeks of the month
    *
    * @param WindowsUpdateForBusinessUpdateWeeks $val The updateWeeks
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setUpdateWeeks($val)
    {
        $this->_propDict["updateWeeks"] = $val;
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesPauseStartDate
    * Quality Updates Pause start date. This property is read-only.
    *
    * @return \DateTime The qualityUpdatesPauseStartDate
    */
    public function getQualityUpdatesPauseStartDate()
    {
        if (array_key_exists("qualityUpdatesPauseStartDate", $this->_propDict)) {
            if (is_a($this->_propDict["qualityUpdatesPauseStartDate"], "\DateTime")) {
                return $this->_propDict["qualityUpdatesPauseStartDate"];
            } else {
                $this->_propDict["qualityUpdatesPauseStartDate"] = new \DateTime($this->_propDict["qualityUpdatesPauseStartDate"]);
                return $this->_propDict["qualityUpdatesPauseStartDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the qualityUpdatesPauseStartDate
    * Quality Updates Pause start date. This property is read-only.
    *
    * @param \DateTime $val The qualityUpdatesPauseStartDate
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesPauseStartDate($val)
    {
        $this->_propDict["qualityUpdatesPauseStartDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the featureUpdatesPauseStartDate
    * Feature Updates Pause start date. This property is read-only.
    *
    * @return \DateTime The featureUpdatesPauseStartDate
    */
    public function getFeatureUpdatesPauseStartDate()
    {
        if (array_key_exists("featureUpdatesPauseStartDate", $this->_propDict)) {
            if (is_a($this->_propDict["featureUpdatesPauseStartDate"], "\DateTime")) {
                return $this->_propDict["featureUpdatesPauseStartDate"];
            } else {
                $this->_propDict["featureUpdatesPauseStartDate"] = new \DateTime($this->_propDict["featureUpdatesPauseStartDate"]);
                return $this->_propDict["featureUpdatesPauseStartDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the featureUpdatesPauseStartDate
    * Feature Updates Pause start date. This property is read-only.
    *
    * @param \DateTime $val The featureUpdatesPauseStartDate
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesPauseStartDate($val)
    {
        $this->_propDict["featureUpdatesPauseStartDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the featureUpdatesRollbackWindowInDays
    * The number of days after a Feature Update for which a rollback is valid
    *
    * @return int The featureUpdatesRollbackWindowInDays
    */
    public function getFeatureUpdatesRollbackWindowInDays()
    {
        if (array_key_exists("featureUpdatesRollbackWindowInDays", $this->_propDict)) {
            return $this->_propDict["featureUpdatesRollbackWindowInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdatesRollbackWindowInDays
    * The number of days after a Feature Update for which a rollback is valid
    *
    * @param int $val The featureUpdatesRollbackWindowInDays
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesRollbackWindowInDays($val)
    {
        $this->_propDict["featureUpdatesRollbackWindowInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesWillBeRolledBack
    * Specifies whether to rollback Quality Updates on the next device check in
    *
    * @return bool The qualityUpdatesWillBeRolledBack
    */
    public function getQualityUpdatesWillBeRolledBack()
    {
        if (array_key_exists("qualityUpdatesWillBeRolledBack", $this->_propDict)) {
            return $this->_propDict["qualityUpdatesWillBeRolledBack"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the qualityUpdatesWillBeRolledBack
    * Specifies whether to rollback Quality Updates on the next device check in
    *
    * @param bool $val The qualityUpdatesWillBeRolledBack
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesWillBeRolledBack($val)
    {
        $this->_propDict["qualityUpdatesWillBeRolledBack"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the featureUpdatesWillBeRolledBack
    * Specifies whether to rollback Feature Updates on the next device check in
    *
    * @return bool The featureUpdatesWillBeRolledBack
    */
    public function getFeatureUpdatesWillBeRolledBack()
    {
        if (array_key_exists("featureUpdatesWillBeRolledBack", $this->_propDict)) {
            return $this->_propDict["featureUpdatesWillBeRolledBack"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdatesWillBeRolledBack
    * Specifies whether to rollback Feature Updates on the next device check in
    *
    * @param bool $val The featureUpdatesWillBeRolledBack
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesWillBeRolledBack($val)
    {
        $this->_propDict["featureUpdatesWillBeRolledBack"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesRollbackStartDateTime
    * Quality Updates Rollback Start datetime
    *
    * @return \DateTime The qualityUpdatesRollbackStartDateTime
    */
    public function getQualityUpdatesRollbackStartDateTime()
    {
        if (array_key_exists("qualityUpdatesRollbackStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["qualityUpdatesRollbackStartDateTime"], "\DateTime")) {
                return $this->_propDict["qualityUpdatesRollbackStartDateTime"];
            } else {
                $this->_propDict["qualityUpdatesRollbackStartDateTime"] = new \DateTime($this->_propDict["qualityUpdatesRollbackStartDateTime"]);
                return $this->_propDict["qualityUpdatesRollbackStartDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the qualityUpdatesRollbackStartDateTime
    * Quality Updates Rollback Start datetime
    *
    * @param \DateTime $val The qualityUpdatesRollbackStartDateTime
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesRollbackStartDateTime($val)
    {
        $this->_propDict["qualityUpdatesRollbackStartDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the featureUpdatesRollbackStartDateTime
    * Feature Updates Rollback Start datetime
    *
    * @return \DateTime The featureUpdatesRollbackStartDateTime
    */
    public function getFeatureUpdatesRollbackStartDateTime()
    {
        if (array_key_exists("featureUpdatesRollbackStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["featureUpdatesRollbackStartDateTime"], "\DateTime")) {
                return $this->_propDict["featureUpdatesRollbackStartDateTime"];
            } else {
                $this->_propDict["featureUpdatesRollbackStartDateTime"] = new \DateTime($this->_propDict["featureUpdatesRollbackStartDateTime"]);
                return $this->_propDict["featureUpdatesRollbackStartDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the featureUpdatesRollbackStartDateTime
    * Feature Updates Rollback Start datetime
    *
    * @param \DateTime $val The featureUpdatesRollbackStartDateTime
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesRollbackStartDateTime($val)
    {
        $this->_propDict["featureUpdatesRollbackStartDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the engagedRestartDeadlineInDays
    * Deadline in days before automatically scheduling and executing a pending restart outside of active hours, with valid range from 2 to 30 days
    *
    * @return int The engagedRestartDeadlineInDays
    */
    public function getEngagedRestartDeadlineInDays()
    {
        if (array_key_exists("engagedRestartDeadlineInDays", $this->_propDict)) {
            return $this->_propDict["engagedRestartDeadlineInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the engagedRestartDeadlineInDays
    * Deadline in days before automatically scheduling and executing a pending restart outside of active hours, with valid range from 2 to 30 days
    *
    * @param int $val The engagedRestartDeadlineInDays
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setEngagedRestartDeadlineInDays($val)
    {
        $this->_propDict["engagedRestartDeadlineInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the engagedRestartSnoozeScheduleInDays
    * Number of days a user can snooze Engaged Restart reminder notifications with valid range from 1 to 3 days
    *
    * @return int The engagedRestartSnoozeScheduleInDays
    */
    public function getEngagedRestartSnoozeScheduleInDays()
    {
        if (array_key_exists("engagedRestartSnoozeScheduleInDays", $this->_propDict)) {
            return $this->_propDict["engagedRestartSnoozeScheduleInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the engagedRestartSnoozeScheduleInDays
    * Number of days a user can snooze Engaged Restart reminder notifications with valid range from 1 to 3 days
    *
    * @param int $val The engagedRestartSnoozeScheduleInDays
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setEngagedRestartSnoozeScheduleInDays($val)
    {
        $this->_propDict["engagedRestartSnoozeScheduleInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the engagedRestartTransitionScheduleInDays
    * Number of days before transitioning from Auto Restarts scheduled outside of active hours to Engaged Restart, which requires the user to schedule, with valid range from 0 to 30 days
    *
    * @return int The engagedRestartTransitionScheduleInDays
    */
    public function getEngagedRestartTransitionScheduleInDays()
    {
        if (array_key_exists("engagedRestartTransitionScheduleInDays", $this->_propDict)) {
            return $this->_propDict["engagedRestartTransitionScheduleInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the engagedRestartTransitionScheduleInDays
    * Number of days before transitioning from Auto Restarts scheduled outside of active hours to Engaged Restart, which requires the user to schedule, with valid range from 0 to 30 days
    *
    * @param int $val The engagedRestartTransitionScheduleInDays
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setEngagedRestartTransitionScheduleInDays($val)
    {
        $this->_propDict["engagedRestartTransitionScheduleInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the autoRestartNotificationDismissal
    * Specify the method by which the auto-restart required notification is dismissed
    *
    * @return AutoRestartNotificationDismissalMethod The autoRestartNotificationDismissal
    */
    public function getAutoRestartNotificationDismissal()
    {
        if (array_key_exists("autoRestartNotificationDismissal", $this->_propDict)) {
            if (is_a($this->_propDict["autoRestartNotificationDismissal"], "Microsoft\Graph\Beta\Model\AutoRestartNotificationDismissalMethod")) {
                return $this->_propDict["autoRestartNotificationDismissal"];
            } else {
                $this->_propDict["autoRestartNotificationDismissal"] = new AutoRestartNotificationDismissalMethod($this->_propDict["autoRestartNotificationDismissal"]);
                return $this->_propDict["autoRestartNotificationDismissal"];
            }
        }
        return null;
    }
    
    /**
    * Sets the autoRestartNotificationDismissal
    * Specify the method by which the auto-restart required notification is dismissed
    *
    * @param AutoRestartNotificationDismissalMethod $val The autoRestartNotificationDismissal
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setAutoRestartNotificationDismissal($val)
    {
        $this->_propDict["autoRestartNotificationDismissal"] = $val;
        return $this;
    }
    
    /**
    * Gets the scheduleRestartWarningInHours
    * Specify the period for auto-restart warning reminder notifications. Supported values: 2, 4, 8, 12 or 24 (hours).
    *
    * @return int The scheduleRestartWarningInHours
    */
    public function getScheduleRestartWarningInHours()
    {
        if (array_key_exists("scheduleRestartWarningInHours", $this->_propDict)) {
            return $this->_propDict["scheduleRestartWarningInHours"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scheduleRestartWarningInHours
    * Specify the period for auto-restart warning reminder notifications. Supported values: 2, 4, 8, 12 or 24 (hours).
    *
    * @param int $val The scheduleRestartWarningInHours
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setScheduleRestartWarningInHours($val)
    {
        $this->_propDict["scheduleRestartWarningInHours"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the scheduleImminentRestartWarningInMinutes
    * Specify the period for auto-restart imminent warning notifications. Supported values: 15, 30 or 60 (minutes).
    *
    * @return int The scheduleImminentRestartWarningInMinutes
    */
    public function getScheduleImminentRestartWarningInMinutes()
    {
        if (array_key_exists("scheduleImminentRestartWarningInMinutes", $this->_propDict)) {
            return $this->_propDict["scheduleImminentRestartWarningInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scheduleImminentRestartWarningInMinutes
    * Specify the period for auto-restart imminent warning notifications. Supported values: 15, 30 or 60 (minutes).
    *
    * @param int $val The scheduleImminentRestartWarningInMinutes
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setScheduleImminentRestartWarningInMinutes($val)
    {
        $this->_propDict["scheduleImminentRestartWarningInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the userPauseAccess
    * Specifies whether to enable end userâ€™s access to pause software updates.
    *
    * @return Enablement The userPauseAccess
    */
    public function getUserPauseAccess()
    {
        if (array_key_exists("userPauseAccess", $this->_propDict)) {
            if (is_a($this->_propDict["userPauseAccess"], "Microsoft\Graph\Beta\Model\Enablement")) {
                return $this->_propDict["userPauseAccess"];
            } else {
                $this->_propDict["userPauseAccess"] = new Enablement($this->_propDict["userPauseAccess"]);
                return $this->_propDict["userPauseAccess"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userPauseAccess
    * Specifies whether to enable end userâ€™s access to pause software updates.
    *
    * @param Enablement $val The userPauseAccess
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setUserPauseAccess($val)
    {
        $this->_propDict["userPauseAccess"] = $val;
        return $this;
    }
    
    /**
    * Gets the userWindowsUpdateScanAccess
    * Specifies whether to disable userâ€™s access to scan Windows Update.
    *
    * @return Enablement The userWindowsUpdateScanAccess
    */
    public function getUserWindowsUpdateScanAccess()
    {
        if (array_key_exists("userWindowsUpdateScanAccess", $this->_propDict)) {
            if (is_a($this->_propDict["userWindowsUpdateScanAccess"], "Microsoft\Graph\Beta\Model\Enablement")) {
                return $this->_propDict["userWindowsUpdateScanAccess"];
            } else {
                $this->_propDict["userWindowsUpdateScanAccess"] = new Enablement($this->_propDict["userWindowsUpdateScanAccess"]);
                return $this->_propDict["userWindowsUpdateScanAccess"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userWindowsUpdateScanAccess
    * Specifies whether to disable userâ€™s access to scan Windows Update.
    *
    * @param Enablement $val The userWindowsUpdateScanAccess
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setUserWindowsUpdateScanAccess($val)
    {
        $this->_propDict["userWindowsUpdateScanAccess"] = $val;
        return $this;
    }
    
    /**
    * Gets the updateNotificationLevel
    * Specifies what Windows Update notifications users see.
    *
    * @return WindowsUpdateNotificationDisplayOption The updateNotificationLevel
    */
    public function getUpdateNotificationLevel()
    {
        if (array_key_exists("updateNotificationLevel", $this->_propDict)) {
            if (is_a($this->_propDict["updateNotificationLevel"], "Microsoft\Graph\Beta\Model\WindowsUpdateNotificationDisplayOption")) {
                return $this->_propDict["updateNotificationLevel"];
            } else {
                $this->_propDict["updateNotificationLevel"] = new WindowsUpdateNotificationDisplayOption($this->_propDict["updateNotificationLevel"]);
                return $this->_propDict["updateNotificationLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the updateNotificationLevel
    * Specifies what Windows Update notifications users see.
    *
    * @param WindowsUpdateNotificationDisplayOption $val The updateNotificationLevel
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setUpdateNotificationLevel($val)
    {
        $this->_propDict["updateNotificationLevel"] = $val;
        return $this;
    }
    
}