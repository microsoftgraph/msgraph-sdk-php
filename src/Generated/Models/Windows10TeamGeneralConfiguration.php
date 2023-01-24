<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class Windows10TeamGeneralConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new Windows10TeamGeneralConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10TeamGeneralConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10TeamGeneralConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10TeamGeneralConfiguration {
        return new Windows10TeamGeneralConfiguration();
    }

    /**
     * Gets the azureOperationalInsightsBlockTelemetry property value. Indicates whether or not to Block Azure Operational Insights.
     * @return bool|null
    */
    public function getAzureOperationalInsightsBlockTelemetry(): ?bool {
        return $this->getBackingStore()->get('azureOperationalInsightsBlockTelemetry');
    }

    /**
     * Gets the azureOperationalInsightsWorkspaceId property value. The Azure Operational Insights workspace id.
     * @return string|null
    */
    public function getAzureOperationalInsightsWorkspaceId(): ?string {
        return $this->getBackingStore()->get('azureOperationalInsightsWorkspaceId');
    }

    /**
     * Gets the azureOperationalInsightsWorkspaceKey property value. The Azure Operational Insights Workspace key.
     * @return string|null
    */
    public function getAzureOperationalInsightsWorkspaceKey(): ?string {
        return $this->getBackingStore()->get('azureOperationalInsightsWorkspaceKey');
    }

    /**
     * Gets the connectAppBlockAutoLaunch property value. Specifies whether to automatically launch the Connect app whenever a projection is initiated.
     * @return bool|null
    */
    public function getConnectAppBlockAutoLaunch(): ?bool {
        return $this->getBackingStore()->get('connectAppBlockAutoLaunch');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureOperationalInsightsBlockTelemetry' => fn(ParseNode $n) => $o->setAzureOperationalInsightsBlockTelemetry($n->getBooleanValue()),
            'azureOperationalInsightsWorkspaceId' => fn(ParseNode $n) => $o->setAzureOperationalInsightsWorkspaceId($n->getStringValue()),
            'azureOperationalInsightsWorkspaceKey' => fn(ParseNode $n) => $o->setAzureOperationalInsightsWorkspaceKey($n->getStringValue()),
            'connectAppBlockAutoLaunch' => fn(ParseNode $n) => $o->setConnectAppBlockAutoLaunch($n->getBooleanValue()),
            'maintenanceWindowBlocked' => fn(ParseNode $n) => $o->setMaintenanceWindowBlocked($n->getBooleanValue()),
            'maintenanceWindowDurationInHours' => fn(ParseNode $n) => $o->setMaintenanceWindowDurationInHours($n->getIntegerValue()),
            'maintenanceWindowStartTime' => fn(ParseNode $n) => $o->setMaintenanceWindowStartTime($n->getTimeValue()),
            'miracastBlocked' => fn(ParseNode $n) => $o->setMiracastBlocked($n->getBooleanValue()),
            'miracastChannel' => fn(ParseNode $n) => $o->setMiracastChannel($n->getEnumValue(MiracastChannel::class)),
            'miracastRequirePin' => fn(ParseNode $n) => $o->setMiracastRequirePin($n->getBooleanValue()),
            'settingsBlockMyMeetingsAndFiles' => fn(ParseNode $n) => $o->setSettingsBlockMyMeetingsAndFiles($n->getBooleanValue()),
            'settingsBlockSessionResume' => fn(ParseNode $n) => $o->setSettingsBlockSessionResume($n->getBooleanValue()),
            'settingsBlockSigninSuggestions' => fn(ParseNode $n) => $o->setSettingsBlockSigninSuggestions($n->getBooleanValue()),
            'settingsDefaultVolume' => fn(ParseNode $n) => $o->setSettingsDefaultVolume($n->getIntegerValue()),
            'settingsScreenTimeoutInMinutes' => fn(ParseNode $n) => $o->setSettingsScreenTimeoutInMinutes($n->getIntegerValue()),
            'settingsSessionTimeoutInMinutes' => fn(ParseNode $n) => $o->setSettingsSessionTimeoutInMinutes($n->getIntegerValue()),
            'settingsSleepTimeoutInMinutes' => fn(ParseNode $n) => $o->setSettingsSleepTimeoutInMinutes($n->getIntegerValue()),
            'welcomeScreenBackgroundImageUrl' => fn(ParseNode $n) => $o->setWelcomeScreenBackgroundImageUrl($n->getStringValue()),
            'welcomeScreenBlockAutomaticWakeUp' => fn(ParseNode $n) => $o->setWelcomeScreenBlockAutomaticWakeUp($n->getBooleanValue()),
            'welcomeScreenMeetingInformation' => fn(ParseNode $n) => $o->setWelcomeScreenMeetingInformation($n->getEnumValue(WelcomeScreenMeetingInformation::class)),
        ]);
    }

    /**
     * Gets the maintenanceWindowBlocked property value. Indicates whether or not to Block setting a maintenance window for device updates.
     * @return bool|null
    */
    public function getMaintenanceWindowBlocked(): ?bool {
        return $this->getBackingStore()->get('maintenanceWindowBlocked');
    }

    /**
     * Gets the maintenanceWindowDurationInHours property value. Maintenance window duration for device updates. Valid values 0 to 5
     * @return int|null
    */
    public function getMaintenanceWindowDurationInHours(): ?int {
        return $this->getBackingStore()->get('maintenanceWindowDurationInHours');
    }

    /**
     * Gets the maintenanceWindowStartTime property value. Maintenance window start time for device updates.
     * @return Time|null
    */
    public function getMaintenanceWindowStartTime(): ?Time {
        return $this->getBackingStore()->get('maintenanceWindowStartTime');
    }

    /**
     * Gets the miracastBlocked property value. Indicates whether or not to Block wireless projection.
     * @return bool|null
    */
    public function getMiracastBlocked(): ?bool {
        return $this->getBackingStore()->get('miracastBlocked');
    }

    /**
     * Gets the miracastChannel property value. Possible values for Miracast channel.
     * @return MiracastChannel|null
    */
    public function getMiracastChannel(): ?MiracastChannel {
        return $this->getBackingStore()->get('miracastChannel');
    }

    /**
     * Gets the miracastRequirePin property value. Indicates whether or not to require a pin for wireless projection.
     * @return bool|null
    */
    public function getMiracastRequirePin(): ?bool {
        return $this->getBackingStore()->get('miracastRequirePin');
    }

    /**
     * Gets the settingsBlockMyMeetingsAndFiles property value. Specifies whether to disable the 'My meetings and files' feature in the Start menu, which shows the signed-in user's meetings and files from Office 365.
     * @return bool|null
    */
    public function getSettingsBlockMyMeetingsAndFiles(): ?bool {
        return $this->getBackingStore()->get('settingsBlockMyMeetingsAndFiles');
    }

    /**
     * Gets the settingsBlockSessionResume property value. Specifies whether to allow the ability to resume a session when the session times out.
     * @return bool|null
    */
    public function getSettingsBlockSessionResume(): ?bool {
        return $this->getBackingStore()->get('settingsBlockSessionResume');
    }

    /**
     * Gets the settingsBlockSigninSuggestions property value. Specifies whether to disable auto-populating of the sign-in dialog with invitees from scheduled meetings.
     * @return bool|null
    */
    public function getSettingsBlockSigninSuggestions(): ?bool {
        return $this->getBackingStore()->get('settingsBlockSigninSuggestions');
    }

    /**
     * Gets the settingsDefaultVolume property value. Specifies the default volume value for a new session. Permitted values are 0-100. The default is 45. Valid values 0 to 100
     * @return int|null
    */
    public function getSettingsDefaultVolume(): ?int {
        return $this->getBackingStore()->get('settingsDefaultVolume');
    }

    /**
     * Gets the settingsScreenTimeoutInMinutes property value. Specifies the number of minutes until the Hub screen turns off.
     * @return int|null
    */
    public function getSettingsScreenTimeoutInMinutes(): ?int {
        return $this->getBackingStore()->get('settingsScreenTimeoutInMinutes');
    }

    /**
     * Gets the settingsSessionTimeoutInMinutes property value. Specifies the number of minutes until the session times out.
     * @return int|null
    */
    public function getSettingsSessionTimeoutInMinutes(): ?int {
        return $this->getBackingStore()->get('settingsSessionTimeoutInMinutes');
    }

    /**
     * Gets the settingsSleepTimeoutInMinutes property value. Specifies the number of minutes until the Hub enters sleep mode.
     * @return int|null
    */
    public function getSettingsSleepTimeoutInMinutes(): ?int {
        return $this->getBackingStore()->get('settingsSleepTimeoutInMinutes');
    }

    /**
     * Gets the welcomeScreenBackgroundImageUrl property value. The welcome screen background image URL. The URL must use the HTTPS protocol and return a PNG image.
     * @return string|null
    */
    public function getWelcomeScreenBackgroundImageUrl(): ?string {
        return $this->getBackingStore()->get('welcomeScreenBackgroundImageUrl');
    }

    /**
     * Gets the welcomeScreenBlockAutomaticWakeUp property value. Indicates whether or not to Block the welcome screen from waking up automatically when someone enters the room.
     * @return bool|null
    */
    public function getWelcomeScreenBlockAutomaticWakeUp(): ?bool {
        return $this->getBackingStore()->get('welcomeScreenBlockAutomaticWakeUp');
    }

    /**
     * Gets the welcomeScreenMeetingInformation property value. Possible values for welcome screen meeting information.
     * @return WelcomeScreenMeetingInformation|null
    */
    public function getWelcomeScreenMeetingInformation(): ?WelcomeScreenMeetingInformation {
        return $this->getBackingStore()->get('welcomeScreenMeetingInformation');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('azureOperationalInsightsBlockTelemetry', $this->getAzureOperationalInsightsBlockTelemetry());
        $writer->writeStringValue('azureOperationalInsightsWorkspaceId', $this->getAzureOperationalInsightsWorkspaceId());
        $writer->writeStringValue('azureOperationalInsightsWorkspaceKey', $this->getAzureOperationalInsightsWorkspaceKey());
        $writer->writeBooleanValue('connectAppBlockAutoLaunch', $this->getConnectAppBlockAutoLaunch());
        $writer->writeBooleanValue('maintenanceWindowBlocked', $this->getMaintenanceWindowBlocked());
        $writer->writeIntegerValue('maintenanceWindowDurationInHours', $this->getMaintenanceWindowDurationInHours());
        $writer->writeTimeValue('maintenanceWindowStartTime', $this->getMaintenanceWindowStartTime());
        $writer->writeBooleanValue('miracastBlocked', $this->getMiracastBlocked());
        $writer->writeEnumValue('miracastChannel', $this->getMiracastChannel());
        $writer->writeBooleanValue('miracastRequirePin', $this->getMiracastRequirePin());
        $writer->writeBooleanValue('settingsBlockMyMeetingsAndFiles', $this->getSettingsBlockMyMeetingsAndFiles());
        $writer->writeBooleanValue('settingsBlockSessionResume', $this->getSettingsBlockSessionResume());
        $writer->writeBooleanValue('settingsBlockSigninSuggestions', $this->getSettingsBlockSigninSuggestions());
        $writer->writeIntegerValue('settingsDefaultVolume', $this->getSettingsDefaultVolume());
        $writer->writeIntegerValue('settingsScreenTimeoutInMinutes', $this->getSettingsScreenTimeoutInMinutes());
        $writer->writeIntegerValue('settingsSessionTimeoutInMinutes', $this->getSettingsSessionTimeoutInMinutes());
        $writer->writeIntegerValue('settingsSleepTimeoutInMinutes', $this->getSettingsSleepTimeoutInMinutes());
        $writer->writeStringValue('welcomeScreenBackgroundImageUrl', $this->getWelcomeScreenBackgroundImageUrl());
        $writer->writeBooleanValue('welcomeScreenBlockAutomaticWakeUp', $this->getWelcomeScreenBlockAutomaticWakeUp());
        $writer->writeEnumValue('welcomeScreenMeetingInformation', $this->getWelcomeScreenMeetingInformation());
    }

    /**
     * Sets the azureOperationalInsightsBlockTelemetry property value. Indicates whether or not to Block Azure Operational Insights.
     * @param bool|null $value Value to set for the azureOperationalInsightsBlockTelemetry property.
    */
    public function setAzureOperationalInsightsBlockTelemetry(?bool $value): void {
        $this->getBackingStore()->set('azureOperationalInsightsBlockTelemetry', $value);
    }

    /**
     * Sets the azureOperationalInsightsWorkspaceId property value. The Azure Operational Insights workspace id.
     * @param string|null $value Value to set for the azureOperationalInsightsWorkspaceId property.
    */
    public function setAzureOperationalInsightsWorkspaceId(?string $value): void {
        $this->getBackingStore()->set('azureOperationalInsightsWorkspaceId', $value);
    }

    /**
     * Sets the azureOperationalInsightsWorkspaceKey property value. The Azure Operational Insights Workspace key.
     * @param string|null $value Value to set for the azureOperationalInsightsWorkspaceKey property.
    */
    public function setAzureOperationalInsightsWorkspaceKey(?string $value): void {
        $this->getBackingStore()->set('azureOperationalInsightsWorkspaceKey', $value);
    }

    /**
     * Sets the connectAppBlockAutoLaunch property value. Specifies whether to automatically launch the Connect app whenever a projection is initiated.
     * @param bool|null $value Value to set for the connectAppBlockAutoLaunch property.
    */
    public function setConnectAppBlockAutoLaunch(?bool $value): void {
        $this->getBackingStore()->set('connectAppBlockAutoLaunch', $value);
    }

    /**
     * Sets the maintenanceWindowBlocked property value. Indicates whether or not to Block setting a maintenance window for device updates.
     * @param bool|null $value Value to set for the maintenanceWindowBlocked property.
    */
    public function setMaintenanceWindowBlocked(?bool $value): void {
        $this->getBackingStore()->set('maintenanceWindowBlocked', $value);
    }

    /**
     * Sets the maintenanceWindowDurationInHours property value. Maintenance window duration for device updates. Valid values 0 to 5
     * @param int|null $value Value to set for the maintenanceWindowDurationInHours property.
    */
    public function setMaintenanceWindowDurationInHours(?int $value): void {
        $this->getBackingStore()->set('maintenanceWindowDurationInHours', $value);
    }

    /**
     * Sets the maintenanceWindowStartTime property value. Maintenance window start time for device updates.
     * @param Time|null $value Value to set for the maintenanceWindowStartTime property.
    */
    public function setMaintenanceWindowStartTime(?Time $value): void {
        $this->getBackingStore()->set('maintenanceWindowStartTime', $value);
    }

    /**
     * Sets the miracastBlocked property value. Indicates whether or not to Block wireless projection.
     * @param bool|null $value Value to set for the miracastBlocked property.
    */
    public function setMiracastBlocked(?bool $value): void {
        $this->getBackingStore()->set('miracastBlocked', $value);
    }

    /**
     * Sets the miracastChannel property value. Possible values for Miracast channel.
     * @param MiracastChannel|null $value Value to set for the miracastChannel property.
    */
    public function setMiracastChannel(?MiracastChannel $value): void {
        $this->getBackingStore()->set('miracastChannel', $value);
    }

    /**
     * Sets the miracastRequirePin property value. Indicates whether or not to require a pin for wireless projection.
     * @param bool|null $value Value to set for the miracastRequirePin property.
    */
    public function setMiracastRequirePin(?bool $value): void {
        $this->getBackingStore()->set('miracastRequirePin', $value);
    }

    /**
     * Sets the settingsBlockMyMeetingsAndFiles property value. Specifies whether to disable the 'My meetings and files' feature in the Start menu, which shows the signed-in user's meetings and files from Office 365.
     * @param bool|null $value Value to set for the settingsBlockMyMeetingsAndFiles property.
    */
    public function setSettingsBlockMyMeetingsAndFiles(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockMyMeetingsAndFiles', $value);
    }

    /**
     * Sets the settingsBlockSessionResume property value. Specifies whether to allow the ability to resume a session when the session times out.
     * @param bool|null $value Value to set for the settingsBlockSessionResume property.
    */
    public function setSettingsBlockSessionResume(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockSessionResume', $value);
    }

    /**
     * Sets the settingsBlockSigninSuggestions property value. Specifies whether to disable auto-populating of the sign-in dialog with invitees from scheduled meetings.
     * @param bool|null $value Value to set for the settingsBlockSigninSuggestions property.
    */
    public function setSettingsBlockSigninSuggestions(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockSigninSuggestions', $value);
    }

    /**
     * Sets the settingsDefaultVolume property value. Specifies the default volume value for a new session. Permitted values are 0-100. The default is 45. Valid values 0 to 100
     * @param int|null $value Value to set for the settingsDefaultVolume property.
    */
    public function setSettingsDefaultVolume(?int $value): void {
        $this->getBackingStore()->set('settingsDefaultVolume', $value);
    }

    /**
     * Sets the settingsScreenTimeoutInMinutes property value. Specifies the number of minutes until the Hub screen turns off.
     * @param int|null $value Value to set for the settingsScreenTimeoutInMinutes property.
    */
    public function setSettingsScreenTimeoutInMinutes(?int $value): void {
        $this->getBackingStore()->set('settingsScreenTimeoutInMinutes', $value);
    }

    /**
     * Sets the settingsSessionTimeoutInMinutes property value. Specifies the number of minutes until the session times out.
     * @param int|null $value Value to set for the settingsSessionTimeoutInMinutes property.
    */
    public function setSettingsSessionTimeoutInMinutes(?int $value): void {
        $this->getBackingStore()->set('settingsSessionTimeoutInMinutes', $value);
    }

    /**
     * Sets the settingsSleepTimeoutInMinutes property value. Specifies the number of minutes until the Hub enters sleep mode.
     * @param int|null $value Value to set for the settingsSleepTimeoutInMinutes property.
    */
    public function setSettingsSleepTimeoutInMinutes(?int $value): void {
        $this->getBackingStore()->set('settingsSleepTimeoutInMinutes', $value);
    }

    /**
     * Sets the welcomeScreenBackgroundImageUrl property value. The welcome screen background image URL. The URL must use the HTTPS protocol and return a PNG image.
     * @param string|null $value Value to set for the welcomeScreenBackgroundImageUrl property.
    */
    public function setWelcomeScreenBackgroundImageUrl(?string $value): void {
        $this->getBackingStore()->set('welcomeScreenBackgroundImageUrl', $value);
    }

    /**
     * Sets the welcomeScreenBlockAutomaticWakeUp property value. Indicates whether or not to Block the welcome screen from waking up automatically when someone enters the room.
     * @param bool|null $value Value to set for the welcomeScreenBlockAutomaticWakeUp property.
    */
    public function setWelcomeScreenBlockAutomaticWakeUp(?bool $value): void {
        $this->getBackingStore()->set('welcomeScreenBlockAutomaticWakeUp', $value);
    }

    /**
     * Sets the welcomeScreenMeetingInformation property value. Possible values for welcome screen meeting information.
     * @param WelcomeScreenMeetingInformation|null $value Value to set for the welcomeScreenMeetingInformation property.
    */
    public function setWelcomeScreenMeetingInformation(?WelcomeScreenMeetingInformation $value): void {
        $this->getBackingStore()->set('welcomeScreenMeetingInformation', $value);
    }

}
