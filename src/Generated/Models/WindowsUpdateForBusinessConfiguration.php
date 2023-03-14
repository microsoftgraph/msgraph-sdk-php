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
        return $this->getBackingStore()->get('allowWindows11Upgrade');
    }

    /**
     * Gets the automaticUpdateMode property value. Possible values for automatic update mode.
     * @return AutomaticUpdateMode|null
    */
    public function getAutomaticUpdateMode(): ?AutomaticUpdateMode {
        return $this->getBackingStore()->get('automaticUpdateMode');
    }

    /**
     * Gets the autoRestartNotificationDismissal property value. Auto restart required notification dismissal method
     * @return AutoRestartNotificationDismissalMethod|null
    */
    public function getAutoRestartNotificationDismissal(): ?AutoRestartNotificationDismissalMethod {
        return $this->getBackingStore()->get('autoRestartNotificationDismissal');
    }

    /**
     * Gets the businessReadyUpdatesOnly property value. Which branch devices will receive their updates from
     * @return WindowsUpdateType|null
    */
    public function getBusinessReadyUpdatesOnly(): ?WindowsUpdateType {
        return $this->getBackingStore()->get('businessReadyUpdatesOnly');
    }

    /**
     * Gets the deadlineForFeatureUpdatesInDays property value. Number of days before feature updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getDeadlineForFeatureUpdatesInDays(): ?int {
        return $this->getBackingStore()->get('deadlineForFeatureUpdatesInDays');
    }

    /**
     * Gets the deadlineForQualityUpdatesInDays property value. Number of days before quality updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getDeadlineForQualityUpdatesInDays(): ?int {
        return $this->getBackingStore()->get('deadlineForQualityUpdatesInDays');
    }

    /**
     * Gets the deadlineGracePeriodInDays property value. Number of days after deadline until restarts occur automatically with valid range from 0 to 7 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getDeadlineGracePeriodInDays(): ?int {
        return $this->getBackingStore()->get('deadlineGracePeriodInDays');
    }

    /**
     * Gets the deliveryOptimizationMode property value. Delivery optimization mode for peer distribution
     * @return WindowsDeliveryOptimizationMode|null
    */
    public function getDeliveryOptimizationMode(): ?WindowsDeliveryOptimizationMode {
        return $this->getBackingStore()->get('deliveryOptimizationMode');
    }

    /**
     * Gets the driversExcluded property value. When TRUE, excludes Windows update Drivers. When FALSE, does not exclude Windows update Drivers. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getDriversExcluded(): ?bool {
        return $this->getBackingStore()->get('driversExcluded');
    }

    /**
     * Gets the engagedRestartDeadlineInDays property value. Deadline in days before automatically scheduling and executing a pending restart outside of active hours, with valid range from 2 to 30 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getEngagedRestartDeadlineInDays(): ?int {
        return $this->getBackingStore()->get('engagedRestartDeadlineInDays');
    }

    /**
     * Gets the engagedRestartSnoozeScheduleInDays property value. Number of days a user can snooze Engaged Restart reminder notifications with valid range from 1 to 3 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getEngagedRestartSnoozeScheduleInDays(): ?int {
        return $this->getBackingStore()->get('engagedRestartSnoozeScheduleInDays');
    }

    /**
     * Gets the engagedRestartTransitionScheduleInDays property value. Number of days before transitioning from Auto Restarts scheduled outside of active hours to Engaged Restart, which requires the user to schedule, with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getEngagedRestartTransitionScheduleInDays(): ?int {
        return $this->getBackingStore()->get('engagedRestartTransitionScheduleInDays');
    }

    /**
     * Gets the featureUpdatesDeferralPeriodInDays property value. Defer Feature Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getFeatureUpdatesDeferralPeriodInDays(): ?int {
        return $this->getBackingStore()->get('featureUpdatesDeferralPeriodInDays');
    }

    /**
     * Gets the featureUpdatesPaused property value. When TRUE, assigned devices are paused from receiving feature updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Feature Updates. Returned by default. Query parameters are not supported.s
     * @return bool|null
    */
    public function getFeatureUpdatesPaused(): ?bool {
        return $this->getBackingStore()->get('featureUpdatesPaused');
    }

    /**
     * Gets the featureUpdatesPauseExpiryDateTime property value. The Feature Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported.
     * @return DateTime|null
    */
    public function getFeatureUpdatesPauseExpiryDateTime(): ?DateTime {
        return $this->getBackingStore()->get('featureUpdatesPauseExpiryDateTime');
    }

    /**
     * Gets the featureUpdatesPauseStartDate property value. The Feature Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only.
     * @return Date|null
    */
    public function getFeatureUpdatesPauseStartDate(): ?Date {
        return $this->getBackingStore()->get('featureUpdatesPauseStartDate');
    }

    /**
     * Gets the featureUpdatesRollbackStartDateTime property value. The Feature Updates Rollback Start datetime.This value is the time when the admin rolled back the Feature update for the ring.Returned by default.Query parameters are not supported.
     * @return DateTime|null
    */
    public function getFeatureUpdatesRollbackStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('featureUpdatesRollbackStartDateTime');
    }

    /**
     * Gets the featureUpdatesRollbackWindowInDays property value. The number of days after a Feature Update for which a rollback is valid with valid range from 2 to 60 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getFeatureUpdatesRollbackWindowInDays(): ?int {
        return $this->getBackingStore()->get('featureUpdatesRollbackWindowInDays');
    }

    /**
     * Gets the featureUpdatesWillBeRolledBack property value. When TRUE, rollback Feature Updates on the next device check in. When FALSE, do not rollback Feature Updates on the next device check in. Returned by default.Query parameters are not supported.
     * @return bool|null
    */
    public function getFeatureUpdatesWillBeRolledBack(): ?bool {
        return $this->getBackingStore()->get('featureUpdatesWillBeRolledBack');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowWindows11Upgrade' => fn(ParseNode $n) => $o->setAllowWindows11Upgrade($n->getBooleanValue()),
            'automaticUpdateMode' => fn(ParseNode $n) => $o->setAutomaticUpdateMode($n->getEnumValue(AutomaticUpdateMode::class)),
            'autoRestartNotificationDismissal' => fn(ParseNode $n) => $o->setAutoRestartNotificationDismissal($n->getEnumValue(AutoRestartNotificationDismissalMethod::class)),
            'businessReadyUpdatesOnly' => fn(ParseNode $n) => $o->setBusinessReadyUpdatesOnly($n->getEnumValue(WindowsUpdateType::class)),
            'deadlineForFeatureUpdatesInDays' => fn(ParseNode $n) => $o->setDeadlineForFeatureUpdatesInDays($n->getIntegerValue()),
            'deadlineForQualityUpdatesInDays' => fn(ParseNode $n) => $o->setDeadlineForQualityUpdatesInDays($n->getIntegerValue()),
            'deadlineGracePeriodInDays' => fn(ParseNode $n) => $o->setDeadlineGracePeriodInDays($n->getIntegerValue()),
            'deliveryOptimizationMode' => fn(ParseNode $n) => $o->setDeliveryOptimizationMode($n->getEnumValue(WindowsDeliveryOptimizationMode::class)),
            'driversExcluded' => fn(ParseNode $n) => $o->setDriversExcluded($n->getBooleanValue()),
            'engagedRestartDeadlineInDays' => fn(ParseNode $n) => $o->setEngagedRestartDeadlineInDays($n->getIntegerValue()),
            'engagedRestartSnoozeScheduleInDays' => fn(ParseNode $n) => $o->setEngagedRestartSnoozeScheduleInDays($n->getIntegerValue()),
            'engagedRestartTransitionScheduleInDays' => fn(ParseNode $n) => $o->setEngagedRestartTransitionScheduleInDays($n->getIntegerValue()),
            'featureUpdatesDeferralPeriodInDays' => fn(ParseNode $n) => $o->setFeatureUpdatesDeferralPeriodInDays($n->getIntegerValue()),
            'featureUpdatesPaused' => fn(ParseNode $n) => $o->setFeatureUpdatesPaused($n->getBooleanValue()),
            'featureUpdatesPauseExpiryDateTime' => fn(ParseNode $n) => $o->setFeatureUpdatesPauseExpiryDateTime($n->getDateTimeValue()),
            'featureUpdatesPauseStartDate' => fn(ParseNode $n) => $o->setFeatureUpdatesPauseStartDate($n->getDateValue()),
            'featureUpdatesRollbackStartDateTime' => fn(ParseNode $n) => $o->setFeatureUpdatesRollbackStartDateTime($n->getDateTimeValue()),
            'featureUpdatesRollbackWindowInDays' => fn(ParseNode $n) => $o->setFeatureUpdatesRollbackWindowInDays($n->getIntegerValue()),
            'featureUpdatesWillBeRolledBack' => fn(ParseNode $n) => $o->setFeatureUpdatesWillBeRolledBack($n->getBooleanValue()),
            'installationSchedule' => fn(ParseNode $n) => $o->setInstallationSchedule($n->getObjectValue([WindowsUpdateInstallScheduleType::class, 'createFromDiscriminatorValue'])),
            'microsoftUpdateServiceAllowed' => fn(ParseNode $n) => $o->setMicrosoftUpdateServiceAllowed($n->getBooleanValue()),
            'postponeRebootUntilAfterDeadline' => fn(ParseNode $n) => $o->setPostponeRebootUntilAfterDeadline($n->getBooleanValue()),
            'prereleaseFeatures' => fn(ParseNode $n) => $o->setPrereleaseFeatures($n->getEnumValue(PrereleaseFeatures::class)),
            'qualityUpdatesDeferralPeriodInDays' => fn(ParseNode $n) => $o->setQualityUpdatesDeferralPeriodInDays($n->getIntegerValue()),
            'qualityUpdatesPaused' => fn(ParseNode $n) => $o->setQualityUpdatesPaused($n->getBooleanValue()),
            'qualityUpdatesPauseExpiryDateTime' => fn(ParseNode $n) => $o->setQualityUpdatesPauseExpiryDateTime($n->getDateTimeValue()),
            'qualityUpdatesPauseStartDate' => fn(ParseNode $n) => $o->setQualityUpdatesPauseStartDate($n->getDateValue()),
            'qualityUpdatesRollbackStartDateTime' => fn(ParseNode $n) => $o->setQualityUpdatesRollbackStartDateTime($n->getDateTimeValue()),
            'qualityUpdatesWillBeRolledBack' => fn(ParseNode $n) => $o->setQualityUpdatesWillBeRolledBack($n->getBooleanValue()),
            'scheduleImminentRestartWarningInMinutes' => fn(ParseNode $n) => $o->setScheduleImminentRestartWarningInMinutes($n->getIntegerValue()),
            'scheduleRestartWarningInHours' => fn(ParseNode $n) => $o->setScheduleRestartWarningInHours($n->getIntegerValue()),
            'skipChecksBeforeRestart' => fn(ParseNode $n) => $o->setSkipChecksBeforeRestart($n->getBooleanValue()),
            'updateNotificationLevel' => fn(ParseNode $n) => $o->setUpdateNotificationLevel($n->getEnumValue(WindowsUpdateNotificationDisplayOption::class)),
            'updateWeeks' => fn(ParseNode $n) => $o->setUpdateWeeks($n->getEnumValue(WindowsUpdateForBusinessUpdateWeeks::class)),
            'userPauseAccess' => fn(ParseNode $n) => $o->setUserPauseAccess($n->getEnumValue(Enablement::class)),
            'userWindowsUpdateScanAccess' => fn(ParseNode $n) => $o->setUserWindowsUpdateScanAccess($n->getEnumValue(Enablement::class)),
        ]);
    }

    /**
     * Gets the installationSchedule property value. The Installation Schedule. Possible values are: ActiveHoursStart, ActiveHoursEnd, ScheduledInstallDay, ScheduledInstallTime. Returned by default. Query parameters are not supported.
     * @return WindowsUpdateInstallScheduleType|null
    */
    public function getInstallationSchedule(): ?WindowsUpdateInstallScheduleType {
        return $this->getBackingStore()->get('installationSchedule');
    }

    /**
     * Gets the microsoftUpdateServiceAllowed property value. When TRUE, allows Microsoft Update Service. When FALSE, does not allow Microsoft Update Service. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getMicrosoftUpdateServiceAllowed(): ?bool {
        return $this->getBackingStore()->get('microsoftUpdateServiceAllowed');
    }

    /**
     * Gets the postponeRebootUntilAfterDeadline property value. When TRUE the device should wait until deadline for rebooting outside of active hours. When FALSE the device should not wait until deadline for rebooting outside of active hours. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getPostponeRebootUntilAfterDeadline(): ?bool {
        return $this->getBackingStore()->get('postponeRebootUntilAfterDeadline');
    }

    /**
     * Gets the prereleaseFeatures property value. Possible values for pre-release features.
     * @return PrereleaseFeatures|null
    */
    public function getPrereleaseFeatures(): ?PrereleaseFeatures {
        return $this->getBackingStore()->get('prereleaseFeatures');
    }

    /**
     * Gets the qualityUpdatesDeferralPeriodInDays property value. Defer Quality Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getQualityUpdatesDeferralPeriodInDays(): ?int {
        return $this->getBackingStore()->get('qualityUpdatesDeferralPeriodInDays');
    }

    /**
     * Gets the qualityUpdatesPaused property value. When TRUE, assigned devices are paused from receiving quality updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Quality Updates. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getQualityUpdatesPaused(): ?bool {
        return $this->getBackingStore()->get('qualityUpdatesPaused');
    }

    /**
     * Gets the qualityUpdatesPauseExpiryDateTime property value. The Quality Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported.
     * @return DateTime|null
    */
    public function getQualityUpdatesPauseExpiryDateTime(): ?DateTime {
        return $this->getBackingStore()->get('qualityUpdatesPauseExpiryDateTime');
    }

    /**
     * Gets the qualityUpdatesPauseStartDate property value. The Quality Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only.
     * @return Date|null
    */
    public function getQualityUpdatesPauseStartDate(): ?Date {
        return $this->getBackingStore()->get('qualityUpdatesPauseStartDate');
    }

    /**
     * Gets the qualityUpdatesRollbackStartDateTime property value. The Quality Updates Rollback Start datetime. This value is the time when the admin rolled back the Quality update for the ring. Returned by default. Query parameters are not supported.
     * @return DateTime|null
    */
    public function getQualityUpdatesRollbackStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('qualityUpdatesRollbackStartDateTime');
    }

    /**
     * Gets the qualityUpdatesWillBeRolledBack property value. When TRUE, rollback Quality Updates on the next device check in. When FALSE, do not rollback Quality Updates on the next device check in. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getQualityUpdatesWillBeRolledBack(): ?bool {
        return $this->getBackingStore()->get('qualityUpdatesWillBeRolledBack');
    }

    /**
     * Gets the scheduleImminentRestartWarningInMinutes property value. Specify the period for auto-restart imminent warning notifications. Supported values: 15, 30 or 60 (minutes). Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getScheduleImminentRestartWarningInMinutes(): ?int {
        return $this->getBackingStore()->get('scheduleImminentRestartWarningInMinutes');
    }

    /**
     * Gets the scheduleRestartWarningInHours property value. Specify the period for auto-restart warning reminder notifications. Supported values: 2, 4, 8, 12 or 24 (hours). Returned by default. Query parameters are not supported.
     * @return int|null
    */
    public function getScheduleRestartWarningInHours(): ?int {
        return $this->getBackingStore()->get('scheduleRestartWarningInHours');
    }

    /**
     * Gets the skipChecksBeforeRestart property value. When TRUE, skips all checks before restart: Battery level = 40%, User presence, Display Needed, Presentation mode, Full screen mode, phone call state, game mode etc. When FALSE, does not skip all checks before restart. Returned by default. Query parameters are not supported.
     * @return bool|null
    */
    public function getSkipChecksBeforeRestart(): ?bool {
        return $this->getBackingStore()->get('skipChecksBeforeRestart');
    }

    /**
     * Gets the updateNotificationLevel property value. Windows Update Notification Display Options
     * @return WindowsUpdateNotificationDisplayOption|null
    */
    public function getUpdateNotificationLevel(): ?WindowsUpdateNotificationDisplayOption {
        return $this->getBackingStore()->get('updateNotificationLevel');
    }

    /**
     * Gets the updateWeeks property value. Schedule the update installation on the weeks of the month. Possible values are: UserDefined, FirstWeek, SecondWeek, ThirdWeek, FourthWeek, EveryWeek. Returned by default. Query parameters are not supported. Possible values are: userDefined, firstWeek, secondWeek, thirdWeek, fourthWeek, everyWeek, unknownFutureValue.
     * @return WindowsUpdateForBusinessUpdateWeeks|null
    */
    public function getUpdateWeeks(): ?WindowsUpdateForBusinessUpdateWeeks {
        return $this->getBackingStore()->get('updateWeeks');
    }

    /**
     * Gets the userPauseAccess property value. Possible values of a property
     * @return Enablement|null
    */
    public function getUserPauseAccess(): ?Enablement {
        return $this->getBackingStore()->get('userPauseAccess');
    }

    /**
     * Gets the userWindowsUpdateScanAccess property value. Possible values of a property
     * @return Enablement|null
    */
    public function getUserWindowsUpdateScanAccess(): ?Enablement {
        return $this->getBackingStore()->get('userWindowsUpdateScanAccess');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowWindows11Upgrade', $this->getAllowWindows11Upgrade());
        $writer->writeEnumValue('automaticUpdateMode', $this->getAutomaticUpdateMode());
        $writer->writeEnumValue('autoRestartNotificationDismissal', $this->getAutoRestartNotificationDismissal());
        $writer->writeEnumValue('businessReadyUpdatesOnly', $this->getBusinessReadyUpdatesOnly());
        $writer->writeIntegerValue('deadlineForFeatureUpdatesInDays', $this->getDeadlineForFeatureUpdatesInDays());
        $writer->writeIntegerValue('deadlineForQualityUpdatesInDays', $this->getDeadlineForQualityUpdatesInDays());
        $writer->writeIntegerValue('deadlineGracePeriodInDays', $this->getDeadlineGracePeriodInDays());
        $writer->writeEnumValue('deliveryOptimizationMode', $this->getDeliveryOptimizationMode());
        $writer->writeBooleanValue('driversExcluded', $this->getDriversExcluded());
        $writer->writeIntegerValue('engagedRestartDeadlineInDays', $this->getEngagedRestartDeadlineInDays());
        $writer->writeIntegerValue('engagedRestartSnoozeScheduleInDays', $this->getEngagedRestartSnoozeScheduleInDays());
        $writer->writeIntegerValue('engagedRestartTransitionScheduleInDays', $this->getEngagedRestartTransitionScheduleInDays());
        $writer->writeIntegerValue('featureUpdatesDeferralPeriodInDays', $this->getFeatureUpdatesDeferralPeriodInDays());
        $writer->writeBooleanValue('featureUpdatesPaused', $this->getFeatureUpdatesPaused());
        $writer->writeDateTimeValue('featureUpdatesPauseExpiryDateTime', $this->getFeatureUpdatesPauseExpiryDateTime());
        $writer->writeDateTimeValue('featureUpdatesRollbackStartDateTime', $this->getFeatureUpdatesRollbackStartDateTime());
        $writer->writeIntegerValue('featureUpdatesRollbackWindowInDays', $this->getFeatureUpdatesRollbackWindowInDays());
        $writer->writeBooleanValue('featureUpdatesWillBeRolledBack', $this->getFeatureUpdatesWillBeRolledBack());
        $writer->writeObjectValue('installationSchedule', $this->getInstallationSchedule());
        $writer->writeBooleanValue('microsoftUpdateServiceAllowed', $this->getMicrosoftUpdateServiceAllowed());
        $writer->writeBooleanValue('postponeRebootUntilAfterDeadline', $this->getPostponeRebootUntilAfterDeadline());
        $writer->writeEnumValue('prereleaseFeatures', $this->getPrereleaseFeatures());
        $writer->writeIntegerValue('qualityUpdatesDeferralPeriodInDays', $this->getQualityUpdatesDeferralPeriodInDays());
        $writer->writeBooleanValue('qualityUpdatesPaused', $this->getQualityUpdatesPaused());
        $writer->writeDateTimeValue('qualityUpdatesPauseExpiryDateTime', $this->getQualityUpdatesPauseExpiryDateTime());
        $writer->writeDateTimeValue('qualityUpdatesRollbackStartDateTime', $this->getQualityUpdatesRollbackStartDateTime());
        $writer->writeBooleanValue('qualityUpdatesWillBeRolledBack', $this->getQualityUpdatesWillBeRolledBack());
        $writer->writeIntegerValue('scheduleImminentRestartWarningInMinutes', $this->getScheduleImminentRestartWarningInMinutes());
        $writer->writeIntegerValue('scheduleRestartWarningInHours', $this->getScheduleRestartWarningInHours());
        $writer->writeBooleanValue('skipChecksBeforeRestart', $this->getSkipChecksBeforeRestart());
        $writer->writeEnumValue('updateNotificationLevel', $this->getUpdateNotificationLevel());
        $writer->writeEnumValue('updateWeeks', $this->getUpdateWeeks());
        $writer->writeEnumValue('userPauseAccess', $this->getUserPauseAccess());
        $writer->writeEnumValue('userWindowsUpdateScanAccess', $this->getUserWindowsUpdateScanAccess());
    }

    /**
     * Sets the allowWindows11Upgrade property value. When TRUE, allows eligible Windows 10 devices to upgrade to Windows 11. When FALSE, implies the device stays on the existing operating system. Returned by default. Query parameters are not supported.
     * @param bool|null $value Value to set for the allowWindows11Upgrade property.
    */
    public function setAllowWindows11Upgrade(?bool $value): void {
        $this->getBackingStore()->set('allowWindows11Upgrade', $value);
    }

    /**
     * Sets the automaticUpdateMode property value. Possible values for automatic update mode.
     * @param AutomaticUpdateMode|null $value Value to set for the automaticUpdateMode property.
    */
    public function setAutomaticUpdateMode(?AutomaticUpdateMode $value): void {
        $this->getBackingStore()->set('automaticUpdateMode', $value);
    }

    /**
     * Sets the autoRestartNotificationDismissal property value. Auto restart required notification dismissal method
     * @param AutoRestartNotificationDismissalMethod|null $value Value to set for the autoRestartNotificationDismissal property.
    */
    public function setAutoRestartNotificationDismissal(?AutoRestartNotificationDismissalMethod $value): void {
        $this->getBackingStore()->set('autoRestartNotificationDismissal', $value);
    }

    /**
     * Sets the businessReadyUpdatesOnly property value. Which branch devices will receive their updates from
     * @param WindowsUpdateType|null $value Value to set for the businessReadyUpdatesOnly property.
    */
    public function setBusinessReadyUpdatesOnly(?WindowsUpdateType $value): void {
        $this->getBackingStore()->set('businessReadyUpdatesOnly', $value);
    }

    /**
     * Sets the deadlineForFeatureUpdatesInDays property value. Number of days before feature updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @param int|null $value Value to set for the deadlineForFeatureUpdatesInDays property.
    */
    public function setDeadlineForFeatureUpdatesInDays(?int $value): void {
        $this->getBackingStore()->set('deadlineForFeatureUpdatesInDays', $value);
    }

    /**
     * Sets the deadlineForQualityUpdatesInDays property value. Number of days before quality updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @param int|null $value Value to set for the deadlineForQualityUpdatesInDays property.
    */
    public function setDeadlineForQualityUpdatesInDays(?int $value): void {
        $this->getBackingStore()->set('deadlineForQualityUpdatesInDays', $value);
    }

    /**
     * Sets the deadlineGracePeriodInDays property value. Number of days after deadline until restarts occur automatically with valid range from 0 to 7 days. Returned by default. Query parameters are not supported.
     * @param int|null $value Value to set for the deadlineGracePeriodInDays property.
    */
    public function setDeadlineGracePeriodInDays(?int $value): void {
        $this->getBackingStore()->set('deadlineGracePeriodInDays', $value);
    }

    /**
     * Sets the deliveryOptimizationMode property value. Delivery optimization mode for peer distribution
     * @param WindowsDeliveryOptimizationMode|null $value Value to set for the deliveryOptimizationMode property.
    */
    public function setDeliveryOptimizationMode(?WindowsDeliveryOptimizationMode $value): void {
        $this->getBackingStore()->set('deliveryOptimizationMode', $value);
    }

    /**
     * Sets the driversExcluded property value. When TRUE, excludes Windows update Drivers. When FALSE, does not exclude Windows update Drivers. Returned by default. Query parameters are not supported.
     * @param bool|null $value Value to set for the driversExcluded property.
    */
    public function setDriversExcluded(?bool $value): void {
        $this->getBackingStore()->set('driversExcluded', $value);
    }

    /**
     * Sets the engagedRestartDeadlineInDays property value. Deadline in days before automatically scheduling and executing a pending restart outside of active hours, with valid range from 2 to 30 days. Returned by default. Query parameters are not supported.
     * @param int|null $value Value to set for the engagedRestartDeadlineInDays property.
    */
    public function setEngagedRestartDeadlineInDays(?int $value): void {
        $this->getBackingStore()->set('engagedRestartDeadlineInDays', $value);
    }

    /**
     * Sets the engagedRestartSnoozeScheduleInDays property value. Number of days a user can snooze Engaged Restart reminder notifications with valid range from 1 to 3 days. Returned by default. Query parameters are not supported.
     * @param int|null $value Value to set for the engagedRestartSnoozeScheduleInDays property.
    */
    public function setEngagedRestartSnoozeScheduleInDays(?int $value): void {
        $this->getBackingStore()->set('engagedRestartSnoozeScheduleInDays', $value);
    }

    /**
     * Sets the engagedRestartTransitionScheduleInDays property value. Number of days before transitioning from Auto Restarts scheduled outside of active hours to Engaged Restart, which requires the user to schedule, with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @param int|null $value Value to set for the engagedRestartTransitionScheduleInDays property.
    */
    public function setEngagedRestartTransitionScheduleInDays(?int $value): void {
        $this->getBackingStore()->set('engagedRestartTransitionScheduleInDays', $value);
    }

    /**
     * Sets the featureUpdatesDeferralPeriodInDays property value. Defer Feature Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @param int|null $value Value to set for the featureUpdatesDeferralPeriodInDays property.
    */
    public function setFeatureUpdatesDeferralPeriodInDays(?int $value): void {
        $this->getBackingStore()->set('featureUpdatesDeferralPeriodInDays', $value);
    }

    /**
     * Sets the featureUpdatesPaused property value. When TRUE, assigned devices are paused from receiving feature updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Feature Updates. Returned by default. Query parameters are not supported.s
     * @param bool|null $value Value to set for the featureUpdatesPaused property.
    */
    public function setFeatureUpdatesPaused(?bool $value): void {
        $this->getBackingStore()->set('featureUpdatesPaused', $value);
    }

    /**
     * Sets the featureUpdatesPauseExpiryDateTime property value. The Feature Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported.
     * @param DateTime|null $value Value to set for the featureUpdatesPauseExpiryDateTime property.
    */
    public function setFeatureUpdatesPauseExpiryDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('featureUpdatesPauseExpiryDateTime', $value);
    }

    /**
     * Sets the featureUpdatesPauseStartDate property value. The Feature Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only.
     * @param Date|null $value Value to set for the featureUpdatesPauseStartDate property.
    */
    public function setFeatureUpdatesPauseStartDate(?Date $value): void {
        $this->getBackingStore()->set('featureUpdatesPauseStartDate', $value);
    }

    /**
     * Sets the featureUpdatesRollbackStartDateTime property value. The Feature Updates Rollback Start datetime.This value is the time when the admin rolled back the Feature update for the ring.Returned by default.Query parameters are not supported.
     * @param DateTime|null $value Value to set for the featureUpdatesRollbackStartDateTime property.
    */
    public function setFeatureUpdatesRollbackStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('featureUpdatesRollbackStartDateTime', $value);
    }

    /**
     * Sets the featureUpdatesRollbackWindowInDays property value. The number of days after a Feature Update for which a rollback is valid with valid range from 2 to 60 days. Returned by default. Query parameters are not supported.
     * @param int|null $value Value to set for the featureUpdatesRollbackWindowInDays property.
    */
    public function setFeatureUpdatesRollbackWindowInDays(?int $value): void {
        $this->getBackingStore()->set('featureUpdatesRollbackWindowInDays', $value);
    }

    /**
     * Sets the featureUpdatesWillBeRolledBack property value. When TRUE, rollback Feature Updates on the next device check in. When FALSE, do not rollback Feature Updates on the next device check in. Returned by default.Query parameters are not supported.
     * @param bool|null $value Value to set for the featureUpdatesWillBeRolledBack property.
    */
    public function setFeatureUpdatesWillBeRolledBack(?bool $value): void {
        $this->getBackingStore()->set('featureUpdatesWillBeRolledBack', $value);
    }

    /**
     * Sets the installationSchedule property value. The Installation Schedule. Possible values are: ActiveHoursStart, ActiveHoursEnd, ScheduledInstallDay, ScheduledInstallTime. Returned by default. Query parameters are not supported.
     * @param WindowsUpdateInstallScheduleType|null $value Value to set for the installationSchedule property.
    */
    public function setInstallationSchedule(?WindowsUpdateInstallScheduleType $value): void {
        $this->getBackingStore()->set('installationSchedule', $value);
    }

    /**
     * Sets the microsoftUpdateServiceAllowed property value. When TRUE, allows Microsoft Update Service. When FALSE, does not allow Microsoft Update Service. Returned by default. Query parameters are not supported.
     * @param bool|null $value Value to set for the microsoftUpdateServiceAllowed property.
    */
    public function setMicrosoftUpdateServiceAllowed(?bool $value): void {
        $this->getBackingStore()->set('microsoftUpdateServiceAllowed', $value);
    }

    /**
     * Sets the postponeRebootUntilAfterDeadline property value. When TRUE the device should wait until deadline for rebooting outside of active hours. When FALSE the device should not wait until deadline for rebooting outside of active hours. Returned by default. Query parameters are not supported.
     * @param bool|null $value Value to set for the postponeRebootUntilAfterDeadline property.
    */
    public function setPostponeRebootUntilAfterDeadline(?bool $value): void {
        $this->getBackingStore()->set('postponeRebootUntilAfterDeadline', $value);
    }

    /**
     * Sets the prereleaseFeatures property value. Possible values for pre-release features.
     * @param PrereleaseFeatures|null $value Value to set for the prereleaseFeatures property.
    */
    public function setPrereleaseFeatures(?PrereleaseFeatures $value): void {
        $this->getBackingStore()->set('prereleaseFeatures', $value);
    }

    /**
     * Sets the qualityUpdatesDeferralPeriodInDays property value. Defer Quality Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     * @param int|null $value Value to set for the qualityUpdatesDeferralPeriodInDays property.
    */
    public function setQualityUpdatesDeferralPeriodInDays(?int $value): void {
        $this->getBackingStore()->set('qualityUpdatesDeferralPeriodInDays', $value);
    }

    /**
     * Sets the qualityUpdatesPaused property value. When TRUE, assigned devices are paused from receiving quality updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Quality Updates. Returned by default. Query parameters are not supported.
     * @param bool|null $value Value to set for the qualityUpdatesPaused property.
    */
    public function setQualityUpdatesPaused(?bool $value): void {
        $this->getBackingStore()->set('qualityUpdatesPaused', $value);
    }

    /**
     * Sets the qualityUpdatesPauseExpiryDateTime property value. The Quality Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported.
     * @param DateTime|null $value Value to set for the qualityUpdatesPauseExpiryDateTime property.
    */
    public function setQualityUpdatesPauseExpiryDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('qualityUpdatesPauseExpiryDateTime', $value);
    }

    /**
     * Sets the qualityUpdatesPauseStartDate property value. The Quality Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only.
     * @param Date|null $value Value to set for the qualityUpdatesPauseStartDate property.
    */
    public function setQualityUpdatesPauseStartDate(?Date $value): void {
        $this->getBackingStore()->set('qualityUpdatesPauseStartDate', $value);
    }

    /**
     * Sets the qualityUpdatesRollbackStartDateTime property value. The Quality Updates Rollback Start datetime. This value is the time when the admin rolled back the Quality update for the ring. Returned by default. Query parameters are not supported.
     * @param DateTime|null $value Value to set for the qualityUpdatesRollbackStartDateTime property.
    */
    public function setQualityUpdatesRollbackStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('qualityUpdatesRollbackStartDateTime', $value);
    }

    /**
     * Sets the qualityUpdatesWillBeRolledBack property value. When TRUE, rollback Quality Updates on the next device check in. When FALSE, do not rollback Quality Updates on the next device check in. Returned by default. Query parameters are not supported.
     * @param bool|null $value Value to set for the qualityUpdatesWillBeRolledBack property.
    */
    public function setQualityUpdatesWillBeRolledBack(?bool $value): void {
        $this->getBackingStore()->set('qualityUpdatesWillBeRolledBack', $value);
    }

    /**
     * Sets the scheduleImminentRestartWarningInMinutes property value. Specify the period for auto-restart imminent warning notifications. Supported values: 15, 30 or 60 (minutes). Returned by default. Query parameters are not supported.
     * @param int|null $value Value to set for the scheduleImminentRestartWarningInMinutes property.
    */
    public function setScheduleImminentRestartWarningInMinutes(?int $value): void {
        $this->getBackingStore()->set('scheduleImminentRestartWarningInMinutes', $value);
    }

    /**
     * Sets the scheduleRestartWarningInHours property value. Specify the period for auto-restart warning reminder notifications. Supported values: 2, 4, 8, 12 or 24 (hours). Returned by default. Query parameters are not supported.
     * @param int|null $value Value to set for the scheduleRestartWarningInHours property.
    */
    public function setScheduleRestartWarningInHours(?int $value): void {
        $this->getBackingStore()->set('scheduleRestartWarningInHours', $value);
    }

    /**
     * Sets the skipChecksBeforeRestart property value. When TRUE, skips all checks before restart: Battery level = 40%, User presence, Display Needed, Presentation mode, Full screen mode, phone call state, game mode etc. When FALSE, does not skip all checks before restart. Returned by default. Query parameters are not supported.
     * @param bool|null $value Value to set for the skipChecksBeforeRestart property.
    */
    public function setSkipChecksBeforeRestart(?bool $value): void {
        $this->getBackingStore()->set('skipChecksBeforeRestart', $value);
    }

    /**
     * Sets the updateNotificationLevel property value. Windows Update Notification Display Options
     * @param WindowsUpdateNotificationDisplayOption|null $value Value to set for the updateNotificationLevel property.
    */
    public function setUpdateNotificationLevel(?WindowsUpdateNotificationDisplayOption $value): void {
        $this->getBackingStore()->set('updateNotificationLevel', $value);
    }

    /**
     * Sets the updateWeeks property value. Schedule the update installation on the weeks of the month. Possible values are: UserDefined, FirstWeek, SecondWeek, ThirdWeek, FourthWeek, EveryWeek. Returned by default. Query parameters are not supported. Possible values are: userDefined, firstWeek, secondWeek, thirdWeek, fourthWeek, everyWeek, unknownFutureValue.
     * @param WindowsUpdateForBusinessUpdateWeeks|null $value Value to set for the updateWeeks property.
    */
    public function setUpdateWeeks(?WindowsUpdateForBusinessUpdateWeeks $value): void {
        $this->getBackingStore()->set('updateWeeks', $value);
    }

    /**
     * Sets the userPauseAccess property value. Possible values of a property
     * @param Enablement|null $value Value to set for the userPauseAccess property.
    */
    public function setUserPauseAccess(?Enablement $value): void {
        $this->getBackingStore()->set('userPauseAccess', $value);
    }

    /**
     * Sets the userWindowsUpdateScanAccess property value. Possible values of a property
     * @param Enablement|null $value Value to set for the userWindowsUpdateScanAccess property.
    */
    public function setUserWindowsUpdateScanAccess(?Enablement $value): void {
        $this->getBackingStore()->set('userWindowsUpdateScanAccess', $value);
    }

}
