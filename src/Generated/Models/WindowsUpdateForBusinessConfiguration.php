<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class WindowsUpdateForBusinessConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $allowWindows11Upgrade When TRUE, allows eligible Windows 10 devices to upgrade to Windows 11. When FALSE, implies the device stays on the existing operating system. Returned by default. Query parameters are not supported.
    */
    private ?bool $allowWindows11Upgrade = null;
    
    /**
     * @var AutomaticUpdateMode|null $automaticUpdateMode Possible values for automatic update mode.
    */
    private ?AutomaticUpdateMode $automaticUpdateMode = null;
    
    /**
     * @var AutoRestartNotificationDismissalMethod|null $autoRestartNotificationDismissal Auto restart required notification dismissal method
    */
    private ?AutoRestartNotificationDismissalMethod $autoRestartNotificationDismissal = null;
    
    /**
     * @var WindowsUpdateType|null $businessReadyUpdatesOnly Which branch devices will receive their updates from
    */
    private ?WindowsUpdateType $businessReadyUpdatesOnly = null;
    
    /**
     * @var int|null $deadlineForFeatureUpdatesInDays Number of days before feature updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
    */
    private ?int $deadlineForFeatureUpdatesInDays = null;
    
    /**
     * @var int|null $deadlineForQualityUpdatesInDays Number of days before quality updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
    */
    private ?int $deadlineForQualityUpdatesInDays = null;
    
    /**
     * @var int|null $deadlineGracePeriodInDays Number of days after deadline until restarts occur automatically with valid range from 0 to 7 days. Returned by default. Query parameters are not supported.
    */
    private ?int $deadlineGracePeriodInDays = null;
    
    /**
     * @var WindowsDeliveryOptimizationMode|null $deliveryOptimizationMode Delivery optimization mode for peer distribution
    */
    private ?WindowsDeliveryOptimizationMode $deliveryOptimizationMode = null;
    
    /**
     * @var bool|null $driversExcluded When TRUE, excludes Windows update Drivers. When FALSE, does not exclude Windows update Drivers. Returned by default. Query parameters are not supported.
    */
    private ?bool $driversExcluded = null;
    
    /**
     * @var int|null $engagedRestartDeadlineInDays Deadline in days before automatically scheduling and executing a pending restart outside of active hours, with valid range from 2 to 30 days. Returned by default. Query parameters are not supported.
    */
    private ?int $engagedRestartDeadlineInDays = null;
    
    /**
     * @var int|null $engagedRestartSnoozeScheduleInDays Number of days a user can snooze Engaged Restart reminder notifications with valid range from 1 to 3 days. Returned by default. Query parameters are not supported.
    */
    private ?int $engagedRestartSnoozeScheduleInDays = null;
    
    /**
     * @var int|null $engagedRestartTransitionScheduleInDays Number of days before transitioning from Auto Restarts scheduled outside of active hours to Engaged Restart, which requires the user to schedule, with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
    */
    private ?int $engagedRestartTransitionScheduleInDays = null;
    
    /**
     * @var int|null $featureUpdatesDeferralPeriodInDays Defer Feature Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
    */
    private ?int $featureUpdatesDeferralPeriodInDays = null;
    
    /**
     * @var bool|null $featureUpdatesPaused When TRUE, assigned devices are paused from receiving feature updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Feature Updates. Returned by default. Query parameters are not supported.s
    */
    private ?bool $featureUpdatesPaused = null;
    
    /**
     * @var DateTime|null $featureUpdatesPauseExpiryDateTime The Feature Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported.
    */
    private ?DateTime $featureUpdatesPauseExpiryDateTime = null;
    
    /**
     * @var Date|null $featureUpdatesPauseStartDate The Feature Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only.
    */
    private ?Date $featureUpdatesPauseStartDate = null;
    
    /**
     * @var DateTime|null $featureUpdatesRollbackStartDateTime The Feature Updates Rollback Start datetime.This value is the time when the admin rolled back the Feature update for the ring.Returned by default.Query parameters are not supported.
    */
    private ?DateTime $featureUpdatesRollbackStartDateTime = null;
    
    /**
     * @var int|null $featureUpdatesRollbackWindowInDays The number of days after a Feature Update for which a rollback is valid with valid range from 2 to 60 days. Returned by default. Query parameters are not supported.
    */
    private ?int $featureUpdatesRollbackWindowInDays = null;
    
    /**
     * @var bool|null $featureUpdatesWillBeRolledBack When TRUE, rollback Feature Updates on the next device check in. When FALSE, do not rollback Feature Updates on the next device check in. Returned by default.Query parameters are not supported.
    */
    private ?bool $featureUpdatesWillBeRolledBack = null;
    
    /**
     * @var WindowsUpdateInstallScheduleType|null $installationSchedule The Installation Schedule. Possible values are: ActiveHoursStart, ActiveHoursEnd, ScheduledInstallDay, ScheduledInstallTime. Returned by default. Query parameters are not supported.
    */
    private ?WindowsUpdateInstallScheduleType $installationSchedule = null;
    
    /**
     * @var bool|null $microsoftUpdateServiceAllowed When TRUE, allows Microsoft Update Service. When FALSE, does not allow Microsoft Update Service. Returned by default. Query parameters are not supported.
    */
    private ?bool $microsoftUpdateServiceAllowed = null;
    
    /**
     * @var bool|null $postponeRebootUntilAfterDeadline When TRUE the device should wait until deadline for rebooting outside of active hours. When FALSE the device should not wait until deadline for rebooting outside of active hours. Returned by default. Query parameters are not supported.
    */
    private ?bool $postponeRebootUntilAfterDeadline = null;
    
    /**
     * @var PrereleaseFeatures|null $prereleaseFeatures Possible values for pre-release features.
    */
    private ?PrereleaseFeatures $prereleaseFeatures = null;
    
    /**
     * @var int|null $qualityUpdatesDeferralPeriodInDays Defer Quality Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
    */
    private ?int $qualityUpdatesDeferralPeriodInDays = null;
    
    /**
     * @var bool|null $qualityUpdatesPaused When TRUE, assigned devices are paused from receiving quality updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Quality Updates. Returned by default. Query parameters are not supported.
    */
    private ?bool $qualityUpdatesPaused = null;
    
    /**
     * @var DateTime|null $qualityUpdatesPauseExpiryDateTime The Quality Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported.
    */
    private ?DateTime $qualityUpdatesPauseExpiryDateTime = null;
    
    /**
     * @var Date|null $qualityUpdatesPauseStartDate The Quality Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only.
    */
    private ?Date $qualityUpdatesPauseStartDate = null;
    
    /**
     * @var DateTime|null $qualityUpdatesRollbackStartDateTime The Quality Updates Rollback Start datetime. This value is the time when the admin rolled back the Quality update for the ring. Returned by default. Query parameters are not supported.
    */
    private ?DateTime $qualityUpdatesRollbackStartDateTime = null;
    
    /**
     * @var bool|null $qualityUpdatesWillBeRolledBack When TRUE, rollback Quality Updates on the next device check in. When FALSE, do not rollback Quality Updates on the next device check in. Returned by default. Query parameters are not supported.
    */
    private ?bool $qualityUpdatesWillBeRolledBack = null;
    
    /**
     * @var int|null $scheduleImminentRestartWarningInMinutes Specify the period for auto-restart imminent warning notifications. Supported values: 15, 30 or 60 (minutes). Returned by default. Query parameters are not supported.
    */
    private ?int $scheduleImminentRestartWarningInMinutes = null;
    
    /**
     * @var int|null $scheduleRestartWarningInHours Specify the period for auto-restart warning reminder notifications. Supported values: 2, 4, 8, 12 or 24 (hours). Returned by default. Query parameters are not supported.
    */
    private ?int $scheduleRestartWarningInHours = null;
    
    /**
     * @var bool|null $skipChecksBeforeRestart When TRUE, skips all checks before restart: Battery level = 40%, User presence, Display Needed, Presentation mode, Full screen mode, phone call state, game mode etc. When FALSE, does not skip all checks before restart. Returned by default. Query parameters are not supported.
    */
    private ?bool $skipChecksBeforeRestart = null;
    
    /**
     * @var WindowsUpdateNotificationDisplayOption|null $updateNotificationLevel Windows Update Notification Display Options
    */
    private ?WindowsUpdateNotificationDisplayOption $updateNotificationLevel = null;
    
    /**
     * @var WindowsUpdateForBusinessUpdateWeeks|null $updateWeeks Schedule the update installation on the weeks of the month. Possible values are: UserDefined, FirstWeek, SecondWeek, ThirdWeek, FourthWeek, EveryWeek. Returned by default. Query parameters are not supported. Possible values are: userDefined, firstWeek, secondWeek, thirdWeek, fourthWeek, everyWeek, unknownFutureValue.
    */
    private ?WindowsUpdateForBusinessUpdateWeeks $updateWeeks = null;
    
    /**
     * @var Enablement|null $userPauseAccess Possible values of a property
    */
    private ?Enablement $userPauseAccess = null;
    
    /**
     * @var Enablement|null $userWindowsUpdateScanAccess Possible values of a property
    */
    private ?Enablement $userWindowsUpdateScanAccess = null;
    
    /**
     * Instantiates a new WindowsUpdateForBusinessConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdateForBusinessConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsUpdateForBusinessConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsUpdateForBusinessConfiguration {
        return new WindowsUpdateForBusinessConfiguration();
    }

    /**
     * Gets the allowWindows11Upgrade property value. When TRUE, allows eligible Windows 10 devices to upgrade to Windows 11. When FALSE, implies the device stays on the existing operating system. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getAllowWindows11Upgrade(): ?bool {
        return $this->allowWindows11Upgrade;
    }

    /**
     * Gets the automaticUpdateMode property value. Possible values for automatic update mode.
     * @return AutomaticUpdateMode|null
    */
    public function getAutomaticUpdateMode(): ?AutomaticUpdateMode {
        return $this->automaticUpdateMode;
    }

    /**
     * Gets the autoRestartNotificationDismissal property value. Auto restart required notification dismissal method
     * @return AutoRestartNotificationDismissalMethod|null
    */
    public function getAutoRestartNotificationDismissal(): ?AutoRestartNotificationDismissalMethod {
        return $this->autoRestartNotificationDismissal;
    }

    /**
     * Gets the businessReadyUpdatesOnly property value. Which branch devices will receive their updates from
     * @return WindowsUpdateType|null
    */
    public function getBusinessReadyUpdatesOnly(): ?WindowsUpdateType {
        return $this->businessReadyUpdatesOnly;
    }

    /**
     * Gets the deadlineForFeatureUpdatesInDays property value. Number of days before feature updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getDeadlineForFeatureUpdatesInDays(): ?int {
        return $this->deadlineForFeatureUpdatesInDays;
    }

    /**
     * Gets the deadlineForQualityUpdatesInDays property value. Number of days before quality updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getDeadlineForQualityUpdatesInDays(): ?int {
        return $this->deadlineForQualityUpdatesInDays;
    }

    /**
     * Gets the deadlineGracePeriodInDays property value. Number of days after deadline until restarts occur automatically with valid range from 0 to 7 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getDeadlineGracePeriodInDays(): ?int {
        return $this->deadlineGracePeriodInDays;
    }

    /**
     * Gets the deliveryOptimizationMode property value. Delivery optimization mode for peer distribution
     * @return WindowsDeliveryOptimizationMode|null
    */
    public function getDeliveryOptimizationMode(): ?WindowsDeliveryOptimizationMode {
        return $this->deliveryOptimizationMode;
    }

    /**
     * Gets the driversExcluded property value. When TRUE, excludes Windows update Drivers. When FALSE, does not exclude Windows update Drivers. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getDriversExcluded(): ?bool {
        return $this->driversExcluded;
    }

    /**
     * Gets the engagedRestartDeadlineInDays property value. Deadline in days before automatically scheduling and executing a pending restart outside of active hours, with valid range from 2 to 30 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getEngagedRestartDeadlineInDays(): ?int {
        return $this->engagedRestartDeadlineInDays;
    }

    /**
     * Gets the engagedRestartSnoozeScheduleInDays property value. Number of days a user can snooze Engaged Restart reminder notifications with valid range from 1 to 3 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getEngagedRestartSnoozeScheduleInDays(): ?int {
        return $this->engagedRestartSnoozeScheduleInDays;
    }

    /**
     * Gets the engagedRestartTransitionScheduleInDays property value. Number of days before transitioning from Auto Restarts scheduled outside of active hours to Engaged Restart, which requires the user to schedule, with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getEngagedRestartTransitionScheduleInDays(): ?int {
        return $this->engagedRestartTransitionScheduleInDays;
    }

    /**
     * Gets the featureUpdatesDeferralPeriodInDays property value. Defer Feature Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getFeatureUpdatesDeferralPeriodInDays(): ?int {
        return $this->featureUpdatesDeferralPeriodInDays;
    }

    /**
     * Gets the featureUpdatesPaused property value. When TRUE, assigned devices are paused from receiving feature updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Feature Updates. Returned by default. Query parameters are not supported.s
     * @return bool|null
    */
    public function getFeatureUpdatesPaused(): ?bool {
        return $this->featureUpdatesPaused;
    }

    /**
     * Gets the featureUpdatesPauseExpiryDateTime property value. The Feature Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported.
     * @return DateTime|null
    */
    public function getFeatureUpdatesPauseExpiryDateTime(): ?DateTime {
        return $this->featureUpdatesPauseExpiryDateTime;
    }

    /**
     * Gets the featureUpdatesPauseStartDate property value. The Feature Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only.
     * @return Date|null
    */
    public function getFeatureUpdatesPauseStartDate(): ?Date {
        return $this->featureUpdatesPauseStartDate;
    }

    /**
     * Gets the featureUpdatesRollbackStartDateTime property value. The Feature Updates Rollback Start datetime.This value is the time when the admin rolled back the Feature update for the ring.Returned by default.Query parameters are not supported.
     * @return DateTime|null
    */
    public function getFeatureUpdatesRollbackStartDateTime(): ?DateTime {
        return $this->featureUpdatesRollbackStartDateTime;
    }

    /**
     * Gets the featureUpdatesRollbackWindowInDays property value. The number of days after a Feature Update for which a rollback is valid with valid range from 2 to 60 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getFeatureUpdatesRollbackWindowInDays(): ?int {
        return $this->featureUpdatesRollbackWindowInDays;
    }

    /**
     * Gets the featureUpdatesWillBeRolledBack property value. When TRUE, rollback Feature Updates on the next device check in. When FALSE, do not rollback Feature Updates on the next device check in. Returned by default.Query parameters are not supported.
     * @return bool|null
    */
    public function getFeatureUpdatesWillBeRolledBack(): ?bool {
        return $this->featureUpdatesWillBeRolledBack;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowWindows11Upgrade' => function (ParseNode $n) use ($o) { $o->setAllowWindows11Upgrade($n->getBooleanValue()); },
            'automaticUpdateMode' => function (ParseNode $n) use ($o) { $o->setAutomaticUpdateMode($n->getEnumValue(AutomaticUpdateMode::class)); },
            'autoRestartNotificationDismissal' => function (ParseNode $n) use ($o) { $o->setAutoRestartNotificationDismissal($n->getEnumValue(AutoRestartNotificationDismissalMethod::class)); },
            'businessReadyUpdatesOnly' => function (ParseNode $n) use ($o) { $o->setBusinessReadyUpdatesOnly($n->getEnumValue(WindowsUpdateType::class)); },
            'deadlineForFeatureUpdatesInDays' => function (ParseNode $n) use ($o) { $o->setDeadlineForFeatureUpdatesInDays($n->getIntegerValue()); },
            'deadlineForQualityUpdatesInDays' => function (ParseNode $n) use ($o) { $o->setDeadlineForQualityUpdatesInDays($n->getIntegerValue()); },
            'deadlineGracePeriodInDays' => function (ParseNode $n) use ($o) { $o->setDeadlineGracePeriodInDays($n->getIntegerValue()); },
            'deliveryOptimizationMode' => function (ParseNode $n) use ($o) { $o->setDeliveryOptimizationMode($n->getEnumValue(WindowsDeliveryOptimizationMode::class)); },
            'driversExcluded' => function (ParseNode $n) use ($o) { $o->setDriversExcluded($n->getBooleanValue()); },
            'engagedRestartDeadlineInDays' => function (ParseNode $n) use ($o) { $o->setEngagedRestartDeadlineInDays($n->getIntegerValue()); },
            'engagedRestartSnoozeScheduleInDays' => function (ParseNode $n) use ($o) { $o->setEngagedRestartSnoozeScheduleInDays($n->getIntegerValue()); },
            'engagedRestartTransitionScheduleInDays' => function (ParseNode $n) use ($o) { $o->setEngagedRestartTransitionScheduleInDays($n->getIntegerValue()); },
            'featureUpdatesDeferralPeriodInDays' => function (ParseNode $n) use ($o) { $o->setFeatureUpdatesDeferralPeriodInDays($n->getIntegerValue()); },
            'featureUpdatesPaused' => function (ParseNode $n) use ($o) { $o->setFeatureUpdatesPaused($n->getBooleanValue()); },
            'featureUpdatesPauseExpiryDateTime' => function (ParseNode $n) use ($o) { $o->setFeatureUpdatesPauseExpiryDateTime($n->getDateTimeValue()); },
            'featureUpdatesPauseStartDate' => function (ParseNode $n) use ($o) { $o->setFeatureUpdatesPauseStartDate($n->getDateValue()); },
            'featureUpdatesRollbackStartDateTime' => function (ParseNode $n) use ($o) { $o->setFeatureUpdatesRollbackStartDateTime($n->getDateTimeValue()); },
            'featureUpdatesRollbackWindowInDays' => function (ParseNode $n) use ($o) { $o->setFeatureUpdatesRollbackWindowInDays($n->getIntegerValue()); },
            'featureUpdatesWillBeRolledBack' => function (ParseNode $n) use ($o) { $o->setFeatureUpdatesWillBeRolledBack($n->getBooleanValue()); },
            'installationSchedule' => function (ParseNode $n) use ($o) { $o->setInstallationSchedule($n->getObjectValue(array(WindowsUpdateInstallScheduleType::class, 'createFromDiscriminatorValue'))); },
            'microsoftUpdateServiceAllowed' => function (ParseNode $n) use ($o) { $o->setMicrosoftUpdateServiceAllowed($n->getBooleanValue()); },
            'postponeRebootUntilAfterDeadline' => function (ParseNode $n) use ($o) { $o->setPostponeRebootUntilAfterDeadline($n->getBooleanValue()); },
            'prereleaseFeatures' => function (ParseNode $n) use ($o) { $o->setPrereleaseFeatures($n->getEnumValue(PrereleaseFeatures::class)); },
            'qualityUpdatesDeferralPeriodInDays' => function (ParseNode $n) use ($o) { $o->setQualityUpdatesDeferralPeriodInDays($n->getIntegerValue()); },
            'qualityUpdatesPaused' => function (ParseNode $n) use ($o) { $o->setQualityUpdatesPaused($n->getBooleanValue()); },
            'qualityUpdatesPauseExpiryDateTime' => function (ParseNode $n) use ($o) { $o->setQualityUpdatesPauseExpiryDateTime($n->getDateTimeValue()); },
            'qualityUpdatesPauseStartDate' => function (ParseNode $n) use ($o) { $o->setQualityUpdatesPauseStartDate($n->getDateValue()); },
            'qualityUpdatesRollbackStartDateTime' => function (ParseNode $n) use ($o) { $o->setQualityUpdatesRollbackStartDateTime($n->getDateTimeValue()); },
            'qualityUpdatesWillBeRolledBack' => function (ParseNode $n) use ($o) { $o->setQualityUpdatesWillBeRolledBack($n->getBooleanValue()); },
            'scheduleImminentRestartWarningInMinutes' => function (ParseNode $n) use ($o) { $o->setScheduleImminentRestartWarningInMinutes($n->getIntegerValue()); },
            'scheduleRestartWarningInHours' => function (ParseNode $n) use ($o) { $o->setScheduleRestartWarningInHours($n->getIntegerValue()); },
            'skipChecksBeforeRestart' => function (ParseNode $n) use ($o) { $o->setSkipChecksBeforeRestart($n->getBooleanValue()); },
            'updateNotificationLevel' => function (ParseNode $n) use ($o) { $o->setUpdateNotificationLevel($n->getEnumValue(WindowsUpdateNotificationDisplayOption::class)); },
            'updateWeeks' => function (ParseNode $n) use ($o) { $o->setUpdateWeeks($n->getEnumValue(WindowsUpdateForBusinessUpdateWeeks::class)); },
            'userPauseAccess' => function (ParseNode $n) use ($o) { $o->setUserPauseAccess($n->getEnumValue(Enablement::class)); },
            'userWindowsUpdateScanAccess' => function (ParseNode $n) use ($o) { $o->setUserWindowsUpdateScanAccess($n->getEnumValue(Enablement::class)); },
        ]);
    }

    /**
     * Gets the installationSchedule property value. The Installation Schedule. Possible values are: ActiveHoursStart, ActiveHoursEnd, ScheduledInstallDay, ScheduledInstallTime. Returned by default. Query parameters are not supported.
     * @return WindowsUpdateInstallScheduleType|null
    */
    public function getInstallationSchedule(): ?WindowsUpdateInstallScheduleType {
        return $this->installationSchedule;
    }

    /**
     * Gets the microsoftUpdateServiceAllowed property value. When TRUE, allows Microsoft Update Service. When FALSE, does not allow Microsoft Update Service. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getMicrosoftUpdateServiceAllowed(): ?bool {
        return $this->microsoftUpdateServiceAllowed;
    }

    /**
     * Gets the postponeRebootUntilAfterDeadline property value. When TRUE the device should wait until deadline for rebooting outside of active hours. When FALSE the device should not wait until deadline for rebooting outside of active hours. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getPostponeRebootUntilAfterDeadline(): ?bool {
        return $this->postponeRebootUntilAfterDeadline;
    }

    /**
     * Gets the prereleaseFeatures property value. Possible values for pre-release features.
     * @return PrereleaseFeatures|null
    */
    public function getPrereleaseFeatures(): ?PrereleaseFeatures {
        return $this->prereleaseFeatures;
    }

    /**
     * Gets the qualityUpdatesDeferralPeriodInDays property value. Defer Quality Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getQualityUpdatesDeferralPeriodInDays(): ?int {
        return $this->qualityUpdatesDeferralPeriodInDays;
    }

    /**
     * Gets the qualityUpdatesPaused property value. When TRUE, assigned devices are paused from receiving quality updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Quality Updates. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getQualityUpdatesPaused(): ?bool {
        return $this->qualityUpdatesPaused;
    }

    /**
     * Gets the qualityUpdatesPauseExpiryDateTime property value. The Quality Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported.
     * @return DateTime|null
    */
    public function getQualityUpdatesPauseExpiryDateTime(): ?DateTime {
        return $this->qualityUpdatesPauseExpiryDateTime;
    }

    /**
     * Gets the qualityUpdatesPauseStartDate property value. The Quality Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only.
     * @return Date|null
    */
    public function getQualityUpdatesPauseStartDate(): ?Date {
        return $this->qualityUpdatesPauseStartDate;
    }

    /**
     * Gets the qualityUpdatesRollbackStartDateTime property value. The Quality Updates Rollback Start datetime. This value is the time when the admin rolled back the Quality update for the ring. Returned by default. Query parameters are not supported.
     * @return DateTime|null
    */
    public function getQualityUpdatesRollbackStartDateTime(): ?DateTime {
        return $this->qualityUpdatesRollbackStartDateTime;
    }

    /**
     * Gets the qualityUpdatesWillBeRolledBack property value. When TRUE, rollback Quality Updates on the next device check in. When FALSE, do not rollback Quality Updates on the next device check in. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getQualityUpdatesWillBeRolledBack(): ?bool {
        return $this->qualityUpdatesWillBeRolledBack;
    }

    /**
     * Gets the scheduleImminentRestartWarningInMinutes property value. Specify the period for auto-restart imminent warning notifications. Supported values: 15, 30 or 60 (minutes). Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getScheduleImminentRestartWarningInMinutes(): ?int {
        return $this->scheduleImminentRestartWarningInMinutes;
    }

    /**
     * Gets the scheduleRestartWarningInHours property value. Specify the period for auto-restart warning reminder notifications. Supported values: 2, 4, 8, 12 or 24 (hours). Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getScheduleRestartWarningInHours(): ?int {
        return $this->scheduleRestartWarningInHours;
    }

    /**
     * Gets the skipChecksBeforeRestart property value. When TRUE, skips all checks before restart: Battery level = 40%, User presence, Display Needed, Presentation mode, Full screen mode, phone call state, game mode etc. When FALSE, does not skip all checks before restart. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getSkipChecksBeforeRestart(): ?bool {
        return $this->skipChecksBeforeRestart;
    }

    /**
     * Gets the updateNotificationLevel property value. Windows Update Notification Display Options
     * @return WindowsUpdateNotificationDisplayOption|null
    */
    public function getUpdateNotificationLevel(): ?WindowsUpdateNotificationDisplayOption {
        return $this->updateNotificationLevel;
    }

    /**
     * Gets the updateWeeks property value. Schedule the update installation on the weeks of the month. Possible values are: UserDefined, FirstWeek, SecondWeek, ThirdWeek, FourthWeek, EveryWeek. Returned by default. Query parameters are not supported. Possible values are: userDefined, firstWeek, secondWeek, thirdWeek, fourthWeek, everyWeek, unknownFutureValue.
     * @return WindowsUpdateForBusinessUpdateWeeks|null
    */
    public function getUpdateWeeks(): ?WindowsUpdateForBusinessUpdateWeeks {
        return $this->updateWeeks;
    }

    /**
     * Gets the userPauseAccess property value. Possible values of a property
     * @return Enablement|null
    */
    public function getUserPauseAccess(): ?Enablement {
        return $this->userPauseAccess;
    }

    /**
     * Gets the userWindowsUpdateScanAccess property value. Possible values of a property
     * @return Enablement|null
    */
    public function getUserWindowsUpdateScanAccess(): ?Enablement {
        return $this->userWindowsUpdateScanAccess;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowWindows11Upgrade', $this->allowWindows11Upgrade);
        $writer->writeEnumValue('automaticUpdateMode', $this->automaticUpdateMode);
        $writer->writeEnumValue('autoRestartNotificationDismissal', $this->autoRestartNotificationDismissal);
        $writer->writeEnumValue('businessReadyUpdatesOnly', $this->businessReadyUpdatesOnly);
        $writer->writeIntegerValue('deadlineForFeatureUpdatesInDays', $this->deadlineForFeatureUpdatesInDays);
        $writer->writeIntegerValue('deadlineForQualityUpdatesInDays', $this->deadlineForQualityUpdatesInDays);
        $writer->writeIntegerValue('deadlineGracePeriodInDays', $this->deadlineGracePeriodInDays);
        $writer->writeEnumValue('deliveryOptimizationMode', $this->deliveryOptimizationMode);
        $writer->writeBooleanValue('driversExcluded', $this->driversExcluded);
        $writer->writeIntegerValue('engagedRestartDeadlineInDays', $this->engagedRestartDeadlineInDays);
        $writer->writeIntegerValue('engagedRestartSnoozeScheduleInDays', $this->engagedRestartSnoozeScheduleInDays);
        $writer->writeIntegerValue('engagedRestartTransitionScheduleInDays', $this->engagedRestartTransitionScheduleInDays);
        $writer->writeIntegerValue('featureUpdatesDeferralPeriodInDays', $this->featureUpdatesDeferralPeriodInDays);
        $writer->writeBooleanValue('featureUpdatesPaused', $this->featureUpdatesPaused);
        $writer->writeDateTimeValue('featureUpdatesPauseExpiryDateTime', $this->featureUpdatesPauseExpiryDateTime);
        $writer->writeDateTimeValue('featureUpdatesRollbackStartDateTime', $this->featureUpdatesRollbackStartDateTime);
        $writer->writeIntegerValue('featureUpdatesRollbackWindowInDays', $this->featureUpdatesRollbackWindowInDays);
        $writer->writeBooleanValue('featureUpdatesWillBeRolledBack', $this->featureUpdatesWillBeRolledBack);
        $writer->writeObjectValue('installationSchedule', $this->installationSchedule);
        $writer->writeBooleanValue('microsoftUpdateServiceAllowed', $this->microsoftUpdateServiceAllowed);
        $writer->writeBooleanValue('postponeRebootUntilAfterDeadline', $this->postponeRebootUntilAfterDeadline);
        $writer->writeEnumValue('prereleaseFeatures', $this->prereleaseFeatures);
        $writer->writeIntegerValue('qualityUpdatesDeferralPeriodInDays', $this->qualityUpdatesDeferralPeriodInDays);
        $writer->writeBooleanValue('qualityUpdatesPaused', $this->qualityUpdatesPaused);
        $writer->writeDateTimeValue('qualityUpdatesPauseExpiryDateTime', $this->qualityUpdatesPauseExpiryDateTime);
        $writer->writeDateTimeValue('qualityUpdatesRollbackStartDateTime', $this->qualityUpdatesRollbackStartDateTime);
        $writer->writeBooleanValue('qualityUpdatesWillBeRolledBack', $this->qualityUpdatesWillBeRolledBack);
        $writer->writeIntegerValue('scheduleImminentRestartWarningInMinutes', $this->scheduleImminentRestartWarningInMinutes);
        $writer->writeIntegerValue('scheduleRestartWarningInHours', $this->scheduleRestartWarningInHours);
        $writer->writeBooleanValue('skipChecksBeforeRestart', $this->skipChecksBeforeRestart);
        $writer->writeEnumValue('updateNotificationLevel', $this->updateNotificationLevel);
        $writer->writeEnumValue('updateWeeks', $this->updateWeeks);
        $writer->writeEnumValue('userPauseAccess', $this->userPauseAccess);
        $writer->writeEnumValue('userWindowsUpdateScanAccess', $this->userWindowsUpdateScanAccess);
    }

    /**
     * Sets the allowWindows11Upgrade property value. When TRUE, allows eligible Windows 10 devices to upgrade to Windows 11. When FALSE, implies the device stays on the existing operating system. Returned by default. Query parameters are not supported.
     *  @param bool|null $value Value to set for the allowWindows11Upgrade property.
    */
    public function setAllowWindows11Upgrade(?bool $value ): void {
        $this->allowWindows11Upgrade = $value;
    }

    /**
     * Sets the automaticUpdateMode property value. Possible values for automatic update mode.
     *  @param AutomaticUpdateMode|null $value Value to set for the automaticUpdateMode property.
    */
    public function setAutomaticUpdateMode(?AutomaticUpdateMode $value ): void {
        $this->automaticUpdateMode = $value;
    }

    /**
     * Sets the autoRestartNotificationDismissal property value. Auto restart required notification dismissal method
     *  @param AutoRestartNotificationDismissalMethod|null $value Value to set for the autoRestartNotificationDismissal property.
    */
    public function setAutoRestartNotificationDismissal(?AutoRestartNotificationDismissalMethod $value ): void {
        $this->autoRestartNotificationDismissal = $value;
    }

    /**
     * Sets the businessReadyUpdatesOnly property value. Which branch devices will receive their updates from
     *  @param WindowsUpdateType|null $value Value to set for the businessReadyUpdatesOnly property.
    */
    public function setBusinessReadyUpdatesOnly(?WindowsUpdateType $value ): void {
        $this->businessReadyUpdatesOnly = $value;
    }

    /**
     * Sets the deadlineForFeatureUpdatesInDays property value. Number of days before feature updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     *  @param int|null $value Value to set for the deadlineForFeatureUpdatesInDays property.
    */
    public function setDeadlineForFeatureUpdatesInDays(?int $value ): void {
        $this->deadlineForFeatureUpdatesInDays = $value;
    }

    /**
     * Sets the deadlineForQualityUpdatesInDays property value. Number of days before quality updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     *  @param int|null $value Value to set for the deadlineForQualityUpdatesInDays property.
    */
    public function setDeadlineForQualityUpdatesInDays(?int $value ): void {
        $this->deadlineForQualityUpdatesInDays = $value;
    }

    /**
     * Sets the deadlineGracePeriodInDays property value. Number of days after deadline until restarts occur automatically with valid range from 0 to 7 days. Returned by default. Query parameters are not supported.
     *  @param int|null $value Value to set for the deadlineGracePeriodInDays property.
    */
    public function setDeadlineGracePeriodInDays(?int $value ): void {
        $this->deadlineGracePeriodInDays = $value;
    }

    /**
     * Sets the deliveryOptimizationMode property value. Delivery optimization mode for peer distribution
     *  @param WindowsDeliveryOptimizationMode|null $value Value to set for the deliveryOptimizationMode property.
    */
    public function setDeliveryOptimizationMode(?WindowsDeliveryOptimizationMode $value ): void {
        $this->deliveryOptimizationMode = $value;
    }

    /**
     * Sets the driversExcluded property value. When TRUE, excludes Windows update Drivers. When FALSE, does not exclude Windows update Drivers. Returned by default. Query parameters are not supported.
     *  @param bool|null $value Value to set for the driversExcluded property.
    */
    public function setDriversExcluded(?bool $value ): void {
        $this->driversExcluded = $value;
    }

    /**
     * Sets the engagedRestartDeadlineInDays property value. Deadline in days before automatically scheduling and executing a pending restart outside of active hours, with valid range from 2 to 30 days. Returned by default. Query parameters are not supported.
     *  @param int|null $value Value to set for the engagedRestartDeadlineInDays property.
    */
    public function setEngagedRestartDeadlineInDays(?int $value ): void {
        $this->engagedRestartDeadlineInDays = $value;
    }

    /**
     * Sets the engagedRestartSnoozeScheduleInDays property value. Number of days a user can snooze Engaged Restart reminder notifications with valid range from 1 to 3 days. Returned by default. Query parameters are not supported.
     *  @param int|null $value Value to set for the engagedRestartSnoozeScheduleInDays property.
    */
    public function setEngagedRestartSnoozeScheduleInDays(?int $value ): void {
        $this->engagedRestartSnoozeScheduleInDays = $value;
    }

    /**
     * Sets the engagedRestartTransitionScheduleInDays property value. Number of days before transitioning from Auto Restarts scheduled outside of active hours to Engaged Restart, which requires the user to schedule, with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     *  @param int|null $value Value to set for the engagedRestartTransitionScheduleInDays property.
    */
    public function setEngagedRestartTransitionScheduleInDays(?int $value ): void {
        $this->engagedRestartTransitionScheduleInDays = $value;
    }

    /**
     * Sets the featureUpdatesDeferralPeriodInDays property value. Defer Feature Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     *  @param int|null $value Value to set for the featureUpdatesDeferralPeriodInDays property.
    */
    public function setFeatureUpdatesDeferralPeriodInDays(?int $value ): void {
        $this->featureUpdatesDeferralPeriodInDays = $value;
    }

    /**
     * Sets the featureUpdatesPaused property value. When TRUE, assigned devices are paused from receiving feature updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Feature Updates. Returned by default. Query parameters are not supported.s
     *  @param bool|null $value Value to set for the featureUpdatesPaused property.
    */
    public function setFeatureUpdatesPaused(?bool $value ): void {
        $this->featureUpdatesPaused = $value;
    }

    /**
     * Sets the featureUpdatesPauseExpiryDateTime property value. The Feature Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported.
     *  @param DateTime|null $value Value to set for the featureUpdatesPauseExpiryDateTime property.
    */
    public function setFeatureUpdatesPauseExpiryDateTime(?DateTime $value ): void {
        $this->featureUpdatesPauseExpiryDateTime = $value;
    }

    /**
     * Sets the featureUpdatesPauseStartDate property value. The Feature Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only.
     *  @param Date|null $value Value to set for the featureUpdatesPauseStartDate property.
    */
    public function setFeatureUpdatesPauseStartDate(?Date $value ): void {
        $this->featureUpdatesPauseStartDate = $value;
    }

    /**
     * Sets the featureUpdatesRollbackStartDateTime property value. The Feature Updates Rollback Start datetime.This value is the time when the admin rolled back the Feature update for the ring.Returned by default.Query parameters are not supported.
     *  @param DateTime|null $value Value to set for the featureUpdatesRollbackStartDateTime property.
    */
    public function setFeatureUpdatesRollbackStartDateTime(?DateTime $value ): void {
        $this->featureUpdatesRollbackStartDateTime = $value;
    }

    /**
     * Sets the featureUpdatesRollbackWindowInDays property value. The number of days after a Feature Update for which a rollback is valid with valid range from 2 to 60 days. Returned by default. Query parameters are not supported.
     *  @param int|null $value Value to set for the featureUpdatesRollbackWindowInDays property.
    */
    public function setFeatureUpdatesRollbackWindowInDays(?int $value ): void {
        $this->featureUpdatesRollbackWindowInDays = $value;
    }

    /**
     * Sets the featureUpdatesWillBeRolledBack property value. When TRUE, rollback Feature Updates on the next device check in. When FALSE, do not rollback Feature Updates on the next device check in. Returned by default.Query parameters are not supported.
     *  @param bool|null $value Value to set for the featureUpdatesWillBeRolledBack property.
    */
    public function setFeatureUpdatesWillBeRolledBack(?bool $value ): void {
        $this->featureUpdatesWillBeRolledBack = $value;
    }

    /**
     * Sets the installationSchedule property value. The Installation Schedule. Possible values are: ActiveHoursStart, ActiveHoursEnd, ScheduledInstallDay, ScheduledInstallTime. Returned by default. Query parameters are not supported.
     *  @param WindowsUpdateInstallScheduleType|null $value Value to set for the installationSchedule property.
    */
    public function setInstallationSchedule(?WindowsUpdateInstallScheduleType $value ): void {
        $this->installationSchedule = $value;
    }

    /**
     * Sets the microsoftUpdateServiceAllowed property value. When TRUE, allows Microsoft Update Service. When FALSE, does not allow Microsoft Update Service. Returned by default. Query parameters are not supported.
     *  @param bool|null $value Value to set for the microsoftUpdateServiceAllowed property.
    */
    public function setMicrosoftUpdateServiceAllowed(?bool $value ): void {
        $this->microsoftUpdateServiceAllowed = $value;
    }

    /**
     * Sets the postponeRebootUntilAfterDeadline property value. When TRUE the device should wait until deadline for rebooting outside of active hours. When FALSE the device should not wait until deadline for rebooting outside of active hours. Returned by default. Query parameters are not supported.
     *  @param bool|null $value Value to set for the postponeRebootUntilAfterDeadline property.
    */
    public function setPostponeRebootUntilAfterDeadline(?bool $value ): void {
        $this->postponeRebootUntilAfterDeadline = $value;
    }

    /**
     * Sets the prereleaseFeatures property value. Possible values for pre-release features.
     *  @param PrereleaseFeatures|null $value Value to set for the prereleaseFeatures property.
    */
    public function setPrereleaseFeatures(?PrereleaseFeatures $value ): void {
        $this->prereleaseFeatures = $value;
    }

    /**
     * Sets the qualityUpdatesDeferralPeriodInDays property value. Defer Quality Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     *  @param int|null $value Value to set for the qualityUpdatesDeferralPeriodInDays property.
    */
    public function setQualityUpdatesDeferralPeriodInDays(?int $value ): void {
        $this->qualityUpdatesDeferralPeriodInDays = $value;
    }

    /**
     * Sets the qualityUpdatesPaused property value. When TRUE, assigned devices are paused from receiving quality updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Quality Updates. Returned by default. Query parameters are not supported.
     *  @param bool|null $value Value to set for the qualityUpdatesPaused property.
    */
    public function setQualityUpdatesPaused(?bool $value ): void {
        $this->qualityUpdatesPaused = $value;
    }

    /**
     * Sets the qualityUpdatesPauseExpiryDateTime property value. The Quality Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported.
     *  @param DateTime|null $value Value to set for the qualityUpdatesPauseExpiryDateTime property.
    */
    public function setQualityUpdatesPauseExpiryDateTime(?DateTime $value ): void {
        $this->qualityUpdatesPauseExpiryDateTime = $value;
    }

    /**
     * Sets the qualityUpdatesPauseStartDate property value. The Quality Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only.
     *  @param Date|null $value Value to set for the qualityUpdatesPauseStartDate property.
    */
    public function setQualityUpdatesPauseStartDate(?Date $value ): void {
        $this->qualityUpdatesPauseStartDate = $value;
    }

    /**
     * Sets the qualityUpdatesRollbackStartDateTime property value. The Quality Updates Rollback Start datetime. This value is the time when the admin rolled back the Quality update for the ring. Returned by default. Query parameters are not supported.
     *  @param DateTime|null $value Value to set for the qualityUpdatesRollbackStartDateTime property.
    */
    public function setQualityUpdatesRollbackStartDateTime(?DateTime $value ): void {
        $this->qualityUpdatesRollbackStartDateTime = $value;
    }

    /**
     * Sets the qualityUpdatesWillBeRolledBack property value. When TRUE, rollback Quality Updates on the next device check in. When FALSE, do not rollback Quality Updates on the next device check in. Returned by default. Query parameters are not supported.
     *  @param bool|null $value Value to set for the qualityUpdatesWillBeRolledBack property.
    */
    public function setQualityUpdatesWillBeRolledBack(?bool $value ): void {
        $this->qualityUpdatesWillBeRolledBack = $value;
    }

    /**
     * Sets the scheduleImminentRestartWarningInMinutes property value. Specify the period for auto-restart imminent warning notifications. Supported values: 15, 30 or 60 (minutes). Returned by default. Query parameters are not supported.
     *  @param int|null $value Value to set for the scheduleImminentRestartWarningInMinutes property.
    */
    public function setScheduleImminentRestartWarningInMinutes(?int $value ): void {
        $this->scheduleImminentRestartWarningInMinutes = $value;
    }

    /**
     * Sets the scheduleRestartWarningInHours property value. Specify the period for auto-restart warning reminder notifications. Supported values: 2, 4, 8, 12 or 24 (hours). Returned by default. Query parameters are not supported.
     *  @param int|null $value Value to set for the scheduleRestartWarningInHours property.
    */
    public function setScheduleRestartWarningInHours(?int $value ): void {
        $this->scheduleRestartWarningInHours = $value;
    }

    /**
     * Sets the skipChecksBeforeRestart property value. When TRUE, skips all checks before restart: Battery level = 40%, User presence, Display Needed, Presentation mode, Full screen mode, phone call state, game mode etc. When FALSE, does not skip all checks before restart. Returned by default. Query parameters are not supported.
     *  @param bool|null $value Value to set for the skipChecksBeforeRestart property.
    */
    public function setSkipChecksBeforeRestart(?bool $value ): void {
        $this->skipChecksBeforeRestart = $value;
    }

    /**
     * Sets the updateNotificationLevel property value. Windows Update Notification Display Options
     *  @param WindowsUpdateNotificationDisplayOption|null $value Value to set for the updateNotificationLevel property.
    */
    public function setUpdateNotificationLevel(?WindowsUpdateNotificationDisplayOption $value ): void {
        $this->updateNotificationLevel = $value;
    }

    /**
     * Sets the updateWeeks property value. Schedule the update installation on the weeks of the month. Possible values are: UserDefined, FirstWeek, SecondWeek, ThirdWeek, FourthWeek, EveryWeek. Returned by default. Query parameters are not supported. Possible values are: userDefined, firstWeek, secondWeek, thirdWeek, fourthWeek, everyWeek, unknownFutureValue.
     *  @param WindowsUpdateForBusinessUpdateWeeks|null $value Value to set for the updateWeeks property.
    */
    public function setUpdateWeeks(?WindowsUpdateForBusinessUpdateWeeks $value ): void {
        $this->updateWeeks = $value;
    }

    /**
     * Sets the userPauseAccess property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the userPauseAccess property.
    */
    public function setUserPauseAccess(?Enablement $value ): void {
        $this->userPauseAccess = $value;
    }

    /**
     * Sets the userWindowsUpdateScanAccess property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the userWindowsUpdateScanAccess property.
    */
    public function setUserWindowsUpdateScanAccess(?Enablement $value ): void {
        $this->userWindowsUpdateScanAccess = $value;
    }

}
