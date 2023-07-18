<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

/**
 * This topic provides descriptions of the declared methods, properties and relationships exposed by the windows10GeneralConfiguration resource.
*/
class Windows10GeneralConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new windows10GeneralConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10GeneralConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10GeneralConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10GeneralConfiguration {
        return new Windows10GeneralConfiguration();
    }

    /**
     * Gets the accountsBlockAddingNonMicrosoftAccountEmail property value. Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
     * @return bool|null
    */
    public function getAccountsBlockAddingNonMicrosoftAccountEmail(): ?bool {
        $val = $this->getBackingStore()->get('accountsBlockAddingNonMicrosoftAccountEmail');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountsBlockAddingNonMicrosoftAccountEmail'");
    }

    /**
     * Gets the antiTheftModeBlocked property value. Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
     * @return bool|null
    */
    public function getAntiTheftModeBlocked(): ?bool {
        $val = $this->getBackingStore()->get('antiTheftModeBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'antiTheftModeBlocked'");
    }

    /**
     * Gets the appsAllowTrustedAppsSideloading property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getAppsAllowTrustedAppsSideloading(): ?StateManagementSetting {
        $val = $this->getBackingStore()->get('appsAllowTrustedAppsSideloading');
        if (is_null($val) || $val instanceof StateManagementSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsAllowTrustedAppsSideloading'");
    }

    /**
     * Gets the appsBlockWindowsStoreOriginatedApps property value. Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
     * @return bool|null
    */
    public function getAppsBlockWindowsStoreOriginatedApps(): ?bool {
        $val = $this->getBackingStore()->get('appsBlockWindowsStoreOriginatedApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsBlockWindowsStoreOriginatedApps'");
    }

    /**
     * Gets the bluetoothAllowedServices property value. Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
     * @return array<string>|null
    */
    public function getBluetoothAllowedServices(): ?array {
        $val = $this->getBackingStore()->get('bluetoothAllowedServices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bluetoothAllowedServices'");
    }

    /**
     * Gets the bluetoothBlockAdvertising property value. Whether or not to Block the user from using bluetooth advertising.
     * @return bool|null
    */
    public function getBluetoothBlockAdvertising(): ?bool {
        $val = $this->getBackingStore()->get('bluetoothBlockAdvertising');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bluetoothBlockAdvertising'");
    }

    /**
     * Gets the bluetoothBlockDiscoverableMode property value. Whether or not to Block the user from using bluetooth discoverable mode.
     * @return bool|null
    */
    public function getBluetoothBlockDiscoverableMode(): ?bool {
        $val = $this->getBackingStore()->get('bluetoothBlockDiscoverableMode');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bluetoothBlockDiscoverableMode'");
    }

    /**
     * Gets the bluetoothBlocked property value. Whether or not to Block the user from using bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlocked(): ?bool {
        $val = $this->getBackingStore()->get('bluetoothBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bluetoothBlocked'");
    }

    /**
     * Gets the bluetoothBlockPrePairing property value. Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
     * @return bool|null
    */
    public function getBluetoothBlockPrePairing(): ?bool {
        $val = $this->getBackingStore()->get('bluetoothBlockPrePairing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bluetoothBlockPrePairing'");
    }

    /**
     * Gets the cameraBlocked property value. Whether or not to Block the user from accessing the camera of the device.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        $val = $this->getBackingStore()->get('cameraBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cameraBlocked'");
    }

    /**
     * Gets the cellularBlockDataWhenRoaming property value. Whether or not to Block the user from using data over cellular while roaming.
     * @return bool|null
    */
    public function getCellularBlockDataWhenRoaming(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockDataWhenRoaming');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockDataWhenRoaming'");
    }

    /**
     * Gets the cellularBlockVpn property value. Whether or not to Block the user from using VPN over cellular.
     * @return bool|null
    */
    public function getCellularBlockVpn(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockVpn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockVpn'");
    }

    /**
     * Gets the cellularBlockVpnWhenRoaming property value. Whether or not to Block the user from using VPN when roaming over cellular.
     * @return bool|null
    */
    public function getCellularBlockVpnWhenRoaming(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockVpnWhenRoaming');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockVpnWhenRoaming'");
    }

    /**
     * Gets the certificatesBlockManualRootCertificateInstallation property value. Whether or not to Block the user from doing manual root certificate installation.
     * @return bool|null
    */
    public function getCertificatesBlockManualRootCertificateInstallation(): ?bool {
        $val = $this->getBackingStore()->get('certificatesBlockManualRootCertificateInstallation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificatesBlockManualRootCertificateInstallation'");
    }

    /**
     * Gets the connectedDevicesServiceBlocked property value. Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
     * @return bool|null
    */
    public function getConnectedDevicesServiceBlocked(): ?bool {
        $val = $this->getBackingStore()->get('connectedDevicesServiceBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectedDevicesServiceBlocked'");
    }

    /**
     * Gets the copyPasteBlocked property value. Whether or not to Block the user from using copy paste.
     * @return bool|null
    */
    public function getCopyPasteBlocked(): ?bool {
        $val = $this->getBackingStore()->get('copyPasteBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'copyPasteBlocked'");
    }

    /**
     * Gets the cortanaBlocked property value. Whether or not to Block the user from using Cortana.
     * @return bool|null
    */
    public function getCortanaBlocked(): ?bool {
        $val = $this->getBackingStore()->get('cortanaBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cortanaBlocked'");
    }

    /**
     * Gets the defenderBlockEndUserAccess property value. Whether or not to block end user access to Defender.
     * @return bool|null
    */
    public function getDefenderBlockEndUserAccess(): ?bool {
        $val = $this->getBackingStore()->get('defenderBlockEndUserAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderBlockEndUserAccess'");
    }

    /**
     * Gets the defenderCloudBlockLevel property value. Possible values of Cloud Block Level
     * @return DefenderCloudBlockLevelType|null
    */
    public function getDefenderCloudBlockLevel(): ?DefenderCloudBlockLevelType {
        $val = $this->getBackingStore()->get('defenderCloudBlockLevel');
        if (is_null($val) || $val instanceof DefenderCloudBlockLevelType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderCloudBlockLevel'");
    }

    /**
     * Gets the defenderDaysBeforeDeletingQuarantinedMalware property value. Number of days before deleting quarantined malware. Valid values 0 to 90
     * @return int|null
    */
    public function getDefenderDaysBeforeDeletingQuarantinedMalware(): ?int {
        $val = $this->getBackingStore()->get('defenderDaysBeforeDeletingQuarantinedMalware');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDaysBeforeDeletingQuarantinedMalware'");
    }

    /**
     * Gets the defenderDetectedMalwareActions property value. Gets or sets Defender’s actions to take on detected Malware per threat level.
     * @return DefenderDetectedMalwareActions|null
    */
    public function getDefenderDetectedMalwareActions(): ?DefenderDetectedMalwareActions {
        $val = $this->getBackingStore()->get('defenderDetectedMalwareActions');
        if (is_null($val) || $val instanceof DefenderDetectedMalwareActions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDetectedMalwareActions'");
    }

    /**
     * Gets the defenderFileExtensionsToExclude property value. File extensions to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderFileExtensionsToExclude(): ?array {
        $val = $this->getBackingStore()->get('defenderFileExtensionsToExclude');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderFileExtensionsToExclude'");
    }

    /**
     * Gets the defenderFilesAndFoldersToExclude property value. Files and folder to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderFilesAndFoldersToExclude(): ?array {
        $val = $this->getBackingStore()->get('defenderFilesAndFoldersToExclude');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderFilesAndFoldersToExclude'");
    }

    /**
     * Gets the defenderMonitorFileActivity property value. Possible values for monitoring file activity.
     * @return DefenderMonitorFileActivity|null
    */
    public function getDefenderMonitorFileActivity(): ?DefenderMonitorFileActivity {
        $val = $this->getBackingStore()->get('defenderMonitorFileActivity');
        if (is_null($val) || $val instanceof DefenderMonitorFileActivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderMonitorFileActivity'");
    }

    /**
     * Gets the defenderProcessesToExclude property value. Processes to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderProcessesToExclude(): ?array {
        $val = $this->getBackingStore()->get('defenderProcessesToExclude');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderProcessesToExclude'");
    }

    /**
     * Gets the defenderPromptForSampleSubmission property value. Possible values for prompting user for samples submission.
     * @return DefenderPromptForSampleSubmission|null
    */
    public function getDefenderPromptForSampleSubmission(): ?DefenderPromptForSampleSubmission {
        $val = $this->getBackingStore()->get('defenderPromptForSampleSubmission');
        if (is_null($val) || $val instanceof DefenderPromptForSampleSubmission) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderPromptForSampleSubmission'");
    }

    /**
     * Gets the defenderRequireBehaviorMonitoring property value. Indicates whether or not to require behavior monitoring.
     * @return bool|null
    */
    public function getDefenderRequireBehaviorMonitoring(): ?bool {
        $val = $this->getBackingStore()->get('defenderRequireBehaviorMonitoring');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderRequireBehaviorMonitoring'");
    }

    /**
     * Gets the defenderRequireCloudProtection property value. Indicates whether or not to require cloud protection.
     * @return bool|null
    */
    public function getDefenderRequireCloudProtection(): ?bool {
        $val = $this->getBackingStore()->get('defenderRequireCloudProtection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderRequireCloudProtection'");
    }

    /**
     * Gets the defenderRequireNetworkInspectionSystem property value. Indicates whether or not to require network inspection system.
     * @return bool|null
    */
    public function getDefenderRequireNetworkInspectionSystem(): ?bool {
        $val = $this->getBackingStore()->get('defenderRequireNetworkInspectionSystem');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderRequireNetworkInspectionSystem'");
    }

    /**
     * Gets the defenderRequireRealTimeMonitoring property value. Indicates whether or not to require real time monitoring.
     * @return bool|null
    */
    public function getDefenderRequireRealTimeMonitoring(): ?bool {
        $val = $this->getBackingStore()->get('defenderRequireRealTimeMonitoring');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderRequireRealTimeMonitoring'");
    }

    /**
     * Gets the defenderScanArchiveFiles property value. Indicates whether or not to scan archive files.
     * @return bool|null
    */
    public function getDefenderScanArchiveFiles(): ?bool {
        $val = $this->getBackingStore()->get('defenderScanArchiveFiles');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScanArchiveFiles'");
    }

    /**
     * Gets the defenderScanDownloads property value. Indicates whether or not to scan downloads.
     * @return bool|null
    */
    public function getDefenderScanDownloads(): ?bool {
        $val = $this->getBackingStore()->get('defenderScanDownloads');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScanDownloads'");
    }

    /**
     * Gets the defenderScanIncomingMail property value. Indicates whether or not to scan incoming mail messages.
     * @return bool|null
    */
    public function getDefenderScanIncomingMail(): ?bool {
        $val = $this->getBackingStore()->get('defenderScanIncomingMail');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScanIncomingMail'");
    }

    /**
     * Gets the defenderScanMappedNetworkDrivesDuringFullScan property value. Indicates whether or not to scan mapped network drives during full scan.
     * @return bool|null
    */
    public function getDefenderScanMappedNetworkDrivesDuringFullScan(): ?bool {
        $val = $this->getBackingStore()->get('defenderScanMappedNetworkDrivesDuringFullScan');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScanMappedNetworkDrivesDuringFullScan'");
    }

    /**
     * Gets the defenderScanMaxCpu property value. Max CPU usage percentage during scan. Valid values 0 to 100
     * @return int|null
    */
    public function getDefenderScanMaxCpu(): ?int {
        $val = $this->getBackingStore()->get('defenderScanMaxCpu');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScanMaxCpu'");
    }

    /**
     * Gets the defenderScanNetworkFiles property value. Indicates whether or not to scan files opened from a network folder.
     * @return bool|null
    */
    public function getDefenderScanNetworkFiles(): ?bool {
        $val = $this->getBackingStore()->get('defenderScanNetworkFiles');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScanNetworkFiles'");
    }

    /**
     * Gets the defenderScanRemovableDrivesDuringFullScan property value. Indicates whether or not to scan removable drives during full scan.
     * @return bool|null
    */
    public function getDefenderScanRemovableDrivesDuringFullScan(): ?bool {
        $val = $this->getBackingStore()->get('defenderScanRemovableDrivesDuringFullScan');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScanRemovableDrivesDuringFullScan'");
    }

    /**
     * Gets the defenderScanScriptsLoadedInInternetExplorer property value. Indicates whether or not to scan scripts loaded in Internet Explorer browser.
     * @return bool|null
    */
    public function getDefenderScanScriptsLoadedInInternetExplorer(): ?bool {
        $val = $this->getBackingStore()->get('defenderScanScriptsLoadedInInternetExplorer');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScanScriptsLoadedInInternetExplorer'");
    }

    /**
     * Gets the defenderScanType property value. Possible values for system scan type.
     * @return DefenderScanType|null
    */
    public function getDefenderScanType(): ?DefenderScanType {
        $val = $this->getBackingStore()->get('defenderScanType');
        if (is_null($val) || $val instanceof DefenderScanType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScanType'");
    }

    /**
     * Gets the defenderScheduledQuickScanTime property value. The time to perform a daily quick scan.
     * @return Time|null
    */
    public function getDefenderScheduledQuickScanTime(): ?Time {
        $val = $this->getBackingStore()->get('defenderScheduledQuickScanTime');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScheduledQuickScanTime'");
    }

    /**
     * Gets the defenderScheduledScanTime property value. The defender time for the system scan.
     * @return Time|null
    */
    public function getDefenderScheduledScanTime(): ?Time {
        $val = $this->getBackingStore()->get('defenderScheduledScanTime');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScheduledScanTime'");
    }

    /**
     * Gets the defenderSignatureUpdateIntervalInHours property value. The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
     * @return int|null
    */
    public function getDefenderSignatureUpdateIntervalInHours(): ?int {
        $val = $this->getBackingStore()->get('defenderSignatureUpdateIntervalInHours');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSignatureUpdateIntervalInHours'");
    }

    /**
     * Gets the defenderSystemScanSchedule property value. Possible values for a weekly schedule.
     * @return WeeklySchedule|null
    */
    public function getDefenderSystemScanSchedule(): ?WeeklySchedule {
        $val = $this->getBackingStore()->get('defenderSystemScanSchedule');
        if (is_null($val) || $val instanceof WeeklySchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSystemScanSchedule'");
    }

    /**
     * Gets the developerUnlockSetting property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getDeveloperUnlockSetting(): ?StateManagementSetting {
        $val = $this->getBackingStore()->get('developerUnlockSetting');
        if (is_null($val) || $val instanceof StateManagementSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'developerUnlockSetting'");
    }

    /**
     * Gets the deviceManagementBlockFactoryResetOnMobile property value. Indicates whether or not to Block the user from resetting their phone.
     * @return bool|null
    */
    public function getDeviceManagementBlockFactoryResetOnMobile(): ?bool {
        $val = $this->getBackingStore()->get('deviceManagementBlockFactoryResetOnMobile');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManagementBlockFactoryResetOnMobile'");
    }

    /**
     * Gets the deviceManagementBlockManualUnenroll property value. Indicates whether or not to Block the user from doing manual un-enrollment from device management.
     * @return bool|null
    */
    public function getDeviceManagementBlockManualUnenroll(): ?bool {
        $val = $this->getBackingStore()->get('deviceManagementBlockManualUnenroll');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManagementBlockManualUnenroll'");
    }

    /**
     * Gets the diagnosticsDataSubmissionMode property value. Allow the device to send diagnostic and usage telemetry data, such as Watson.
     * @return DiagnosticDataSubmissionMode|null
    */
    public function getDiagnosticsDataSubmissionMode(): ?DiagnosticDataSubmissionMode {
        $val = $this->getBackingStore()->get('diagnosticsDataSubmissionMode');
        if (is_null($val) || $val instanceof DiagnosticDataSubmissionMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'diagnosticsDataSubmissionMode'");
    }

    /**
     * Gets the edgeAllowStartPagesModification property value. Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
     * @return bool|null
    */
    public function getEdgeAllowStartPagesModification(): ?bool {
        $val = $this->getBackingStore()->get('edgeAllowStartPagesModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeAllowStartPagesModification'");
    }

    /**
     * Gets the edgeBlockAccessToAboutFlags property value. Indicates whether or not to prevent access to about flags on Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockAccessToAboutFlags(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockAccessToAboutFlags');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockAccessToAboutFlags'");
    }

    /**
     * Gets the edgeBlockAddressBarDropdown property value. Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
     * @return bool|null
    */
    public function getEdgeBlockAddressBarDropdown(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockAddressBarDropdown');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockAddressBarDropdown'");
    }

    /**
     * Gets the edgeBlockAutofill property value. Indicates whether or not to block auto fill.
     * @return bool|null
    */
    public function getEdgeBlockAutofill(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockAutofill');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockAutofill'");
    }

    /**
     * Gets the edgeBlockCompatibilityList property value. Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
     * @return bool|null
    */
    public function getEdgeBlockCompatibilityList(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockCompatibilityList');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockCompatibilityList'");
    }

    /**
     * Gets the edgeBlockDeveloperTools property value. Indicates whether or not to block developer tools in the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockDeveloperTools(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockDeveloperTools');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockDeveloperTools'");
    }

    /**
     * Gets the edgeBlocked property value. Indicates whether or not to Block the user from using the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlocked(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlocked'");
    }

    /**
     * Gets the edgeBlockExtensions property value. Indicates whether or not to block extensions in the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockExtensions(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockExtensions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockExtensions'");
    }

    /**
     * Gets the edgeBlockInPrivateBrowsing property value. Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockInPrivateBrowsing(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockInPrivateBrowsing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockInPrivateBrowsing'");
    }

    /**
     * Gets the edgeBlockJavaScript property value. Indicates whether or not to Block the user from using JavaScript.
     * @return bool|null
    */
    public function getEdgeBlockJavaScript(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockJavaScript');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockJavaScript'");
    }

    /**
     * Gets the edgeBlockLiveTileDataCollection property value. Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
     * @return bool|null
    */
    public function getEdgeBlockLiveTileDataCollection(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockLiveTileDataCollection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockLiveTileDataCollection'");
    }

    /**
     * Gets the edgeBlockPasswordManager property value. Indicates whether or not to Block password manager.
     * @return bool|null
    */
    public function getEdgeBlockPasswordManager(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockPasswordManager');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockPasswordManager'");
    }

    /**
     * Gets the edgeBlockPopups property value. Indicates whether or not to block popups.
     * @return bool|null
    */
    public function getEdgeBlockPopups(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockPopups');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockPopups'");
    }

    /**
     * Gets the edgeBlockSearchSuggestions property value. Indicates whether or not to block the user from using the search suggestions in the address bar.
     * @return bool|null
    */
    public function getEdgeBlockSearchSuggestions(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockSearchSuggestions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockSearchSuggestions'");
    }

    /**
     * Gets the edgeBlockSendingDoNotTrackHeader property value. Indicates whether or not to Block the user from sending the do not track header.
     * @return bool|null
    */
    public function getEdgeBlockSendingDoNotTrackHeader(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockSendingDoNotTrackHeader');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockSendingDoNotTrackHeader'");
    }

    /**
     * Gets the edgeBlockSendingIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
     * @return bool|null
    */
    public function getEdgeBlockSendingIntranetTrafficToInternetExplorer(): ?bool {
        $val = $this->getBackingStore()->get('edgeBlockSendingIntranetTrafficToInternetExplorer');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeBlockSendingIntranetTrafficToInternetExplorer'");
    }

    /**
     * Gets the edgeClearBrowsingDataOnExit property value. Clear browsing data on exiting Microsoft Edge.
     * @return bool|null
    */
    public function getEdgeClearBrowsingDataOnExit(): ?bool {
        $val = $this->getBackingStore()->get('edgeClearBrowsingDataOnExit');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeClearBrowsingDataOnExit'");
    }

    /**
     * Gets the edgeCookiePolicy property value. Possible values to specify which cookies are allowed in Microsoft Edge.
     * @return EdgeCookiePolicy|null
    */
    public function getEdgeCookiePolicy(): ?EdgeCookiePolicy {
        $val = $this->getBackingStore()->get('edgeCookiePolicy');
        if (is_null($val) || $val instanceof EdgeCookiePolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeCookiePolicy'");
    }

    /**
     * Gets the edgeDisableFirstRunPage property value. Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
     * @return bool|null
    */
    public function getEdgeDisableFirstRunPage(): ?bool {
        $val = $this->getBackingStore()->get('edgeDisableFirstRunPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeDisableFirstRunPage'");
    }

    /**
     * Gets the edgeEnterpriseModeSiteListLocation property value. Indicates the enterprise mode site list location. Could be a local file, local network or http location.
     * @return string|null
    */
    public function getEdgeEnterpriseModeSiteListLocation(): ?string {
        $val = $this->getBackingStore()->get('edgeEnterpriseModeSiteListLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeEnterpriseModeSiteListLocation'");
    }

    /**
     * Gets the edgeFirstRunUrl property value. The first run URL for when Edge browser is opened for the first time.
     * @return string|null
    */
    public function getEdgeFirstRunUrl(): ?string {
        $val = $this->getBackingStore()->get('edgeFirstRunUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeFirstRunUrl'");
    }

    /**
     * Gets the edgeHomepageUrls property value. The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
     * @return array<string>|null
    */
    public function getEdgeHomepageUrls(): ?array {
        $val = $this->getBackingStore()->get('edgeHomepageUrls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeHomepageUrls'");
    }

    /**
     * Gets the edgeRequireSmartScreen property value. Indicates whether or not to Require the user to use the smart screen filter.
     * @return bool|null
    */
    public function getEdgeRequireSmartScreen(): ?bool {
        $val = $this->getBackingStore()->get('edgeRequireSmartScreen');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeRequireSmartScreen'");
    }

    /**
     * Gets the edgeSearchEngine property value. Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
     * @return EdgeSearchEngineBase|null
    */
    public function getEdgeSearchEngine(): ?EdgeSearchEngineBase {
        $val = $this->getBackingStore()->get('edgeSearchEngine');
        if (is_null($val) || $val instanceof EdgeSearchEngineBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeSearchEngine'");
    }

    /**
     * Gets the edgeSendIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
     * @return bool|null
    */
    public function getEdgeSendIntranetTrafficToInternetExplorer(): ?bool {
        $val = $this->getBackingStore()->get('edgeSendIntranetTrafficToInternetExplorer');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeSendIntranetTrafficToInternetExplorer'");
    }

    /**
     * Gets the edgeSyncFavoritesWithInternetExplorer property value. Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
     * @return bool|null
    */
    public function getEdgeSyncFavoritesWithInternetExplorer(): ?bool {
        $val = $this->getBackingStore()->get('edgeSyncFavoritesWithInternetExplorer');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeSyncFavoritesWithInternetExplorer'");
    }

    /**
     * Gets the enterpriseCloudPrintDiscoveryEndPoint property value. Endpoint for discovering cloud printers.
     * @return string|null
    */
    public function getEnterpriseCloudPrintDiscoveryEndPoint(): ?string {
        $val = $this->getBackingStore()->get('enterpriseCloudPrintDiscoveryEndPoint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseCloudPrintDiscoveryEndPoint'");
    }

    /**
     * Gets the enterpriseCloudPrintDiscoveryMaxLimit property value. Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
     * @return int|null
    */
    public function getEnterpriseCloudPrintDiscoveryMaxLimit(): ?int {
        $val = $this->getBackingStore()->get('enterpriseCloudPrintDiscoveryMaxLimit');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseCloudPrintDiscoveryMaxLimit'");
    }

    /**
     * Gets the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier property value. OAuth resource URI for printer discovery service as configured in Azure portal.
     * @return string|null
    */
    public function getEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier(): ?string {
        $val = $this->getBackingStore()->get('enterpriseCloudPrintMopriaDiscoveryResourceIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseCloudPrintMopriaDiscoveryResourceIdentifier'");
    }

    /**
     * Gets the enterpriseCloudPrintOAuthAuthority property value. Authentication endpoint for acquiring OAuth tokens.
     * @return string|null
    */
    public function getEnterpriseCloudPrintOAuthAuthority(): ?string {
        $val = $this->getBackingStore()->get('enterpriseCloudPrintOAuthAuthority');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseCloudPrintOAuthAuthority'");
    }

    /**
     * Gets the enterpriseCloudPrintOAuthClientIdentifier property value. GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
     * @return string|null
    */
    public function getEnterpriseCloudPrintOAuthClientIdentifier(): ?string {
        $val = $this->getBackingStore()->get('enterpriseCloudPrintOAuthClientIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseCloudPrintOAuthClientIdentifier'");
    }

    /**
     * Gets the enterpriseCloudPrintResourceIdentifier property value. OAuth resource URI for print service as configured in the Azure portal.
     * @return string|null
    */
    public function getEnterpriseCloudPrintResourceIdentifier(): ?string {
        $val = $this->getBackingStore()->get('enterpriseCloudPrintResourceIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseCloudPrintResourceIdentifier'");
    }

    /**
     * Gets the experienceBlockDeviceDiscovery property value. Indicates whether or not to enable device discovery UX.
     * @return bool|null
    */
    public function getExperienceBlockDeviceDiscovery(): ?bool {
        $val = $this->getBackingStore()->get('experienceBlockDeviceDiscovery');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'experienceBlockDeviceDiscovery'");
    }

    /**
     * Gets the experienceBlockErrorDialogWhenNoSIM property value. Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
     * @return bool|null
    */
    public function getExperienceBlockErrorDialogWhenNoSIM(): ?bool {
        $val = $this->getBackingStore()->get('experienceBlockErrorDialogWhenNoSIM');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'experienceBlockErrorDialogWhenNoSIM'");
    }

    /**
     * Gets the experienceBlockTaskSwitcher property value. Indicates whether or not to enable task switching on the device.
     * @return bool|null
    */
    public function getExperienceBlockTaskSwitcher(): ?bool {
        $val = $this->getBackingStore()->get('experienceBlockTaskSwitcher');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'experienceBlockTaskSwitcher'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountsBlockAddingNonMicrosoftAccountEmail' => fn(ParseNode $n) => $o->setAccountsBlockAddingNonMicrosoftAccountEmail($n->getBooleanValue()),
            'antiTheftModeBlocked' => fn(ParseNode $n) => $o->setAntiTheftModeBlocked($n->getBooleanValue()),
            'appsAllowTrustedAppsSideloading' => fn(ParseNode $n) => $o->setAppsAllowTrustedAppsSideloading($n->getEnumValue(StateManagementSetting::class)),
            'appsBlockWindowsStoreOriginatedApps' => fn(ParseNode $n) => $o->setAppsBlockWindowsStoreOriginatedApps($n->getBooleanValue()),
            'bluetoothAllowedServices' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBluetoothAllowedServices($val);
            },
            'bluetoothBlockAdvertising' => fn(ParseNode $n) => $o->setBluetoothBlockAdvertising($n->getBooleanValue()),
            'bluetoothBlockDiscoverableMode' => fn(ParseNode $n) => $o->setBluetoothBlockDiscoverableMode($n->getBooleanValue()),
            'bluetoothBlocked' => fn(ParseNode $n) => $o->setBluetoothBlocked($n->getBooleanValue()),
            'bluetoothBlockPrePairing' => fn(ParseNode $n) => $o->setBluetoothBlockPrePairing($n->getBooleanValue()),
            'cameraBlocked' => fn(ParseNode $n) => $o->setCameraBlocked($n->getBooleanValue()),
            'cellularBlockDataWhenRoaming' => fn(ParseNode $n) => $o->setCellularBlockDataWhenRoaming($n->getBooleanValue()),
            'cellularBlockVpn' => fn(ParseNode $n) => $o->setCellularBlockVpn($n->getBooleanValue()),
            'cellularBlockVpnWhenRoaming' => fn(ParseNode $n) => $o->setCellularBlockVpnWhenRoaming($n->getBooleanValue()),
            'certificatesBlockManualRootCertificateInstallation' => fn(ParseNode $n) => $o->setCertificatesBlockManualRootCertificateInstallation($n->getBooleanValue()),
            'connectedDevicesServiceBlocked' => fn(ParseNode $n) => $o->setConnectedDevicesServiceBlocked($n->getBooleanValue()),
            'copyPasteBlocked' => fn(ParseNode $n) => $o->setCopyPasteBlocked($n->getBooleanValue()),
            'cortanaBlocked' => fn(ParseNode $n) => $o->setCortanaBlocked($n->getBooleanValue()),
            'defenderBlockEndUserAccess' => fn(ParseNode $n) => $o->setDefenderBlockEndUserAccess($n->getBooleanValue()),
            'defenderCloudBlockLevel' => fn(ParseNode $n) => $o->setDefenderCloudBlockLevel($n->getEnumValue(DefenderCloudBlockLevelType::class)),
            'defenderDaysBeforeDeletingQuarantinedMalware' => fn(ParseNode $n) => $o->setDefenderDaysBeforeDeletingQuarantinedMalware($n->getIntegerValue()),
            'defenderDetectedMalwareActions' => fn(ParseNode $n) => $o->setDefenderDetectedMalwareActions($n->getObjectValue([DefenderDetectedMalwareActions::class, 'createFromDiscriminatorValue'])),
            'defenderFileExtensionsToExclude' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefenderFileExtensionsToExclude($val);
            },
            'defenderFilesAndFoldersToExclude' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefenderFilesAndFoldersToExclude($val);
            },
            'defenderMonitorFileActivity' => fn(ParseNode $n) => $o->setDefenderMonitorFileActivity($n->getEnumValue(DefenderMonitorFileActivity::class)),
            'defenderProcessesToExclude' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefenderProcessesToExclude($val);
            },
            'defenderPromptForSampleSubmission' => fn(ParseNode $n) => $o->setDefenderPromptForSampleSubmission($n->getEnumValue(DefenderPromptForSampleSubmission::class)),
            'defenderRequireBehaviorMonitoring' => fn(ParseNode $n) => $o->setDefenderRequireBehaviorMonitoring($n->getBooleanValue()),
            'defenderRequireCloudProtection' => fn(ParseNode $n) => $o->setDefenderRequireCloudProtection($n->getBooleanValue()),
            'defenderRequireNetworkInspectionSystem' => fn(ParseNode $n) => $o->setDefenderRequireNetworkInspectionSystem($n->getBooleanValue()),
            'defenderRequireRealTimeMonitoring' => fn(ParseNode $n) => $o->setDefenderRequireRealTimeMonitoring($n->getBooleanValue()),
            'defenderScanArchiveFiles' => fn(ParseNode $n) => $o->setDefenderScanArchiveFiles($n->getBooleanValue()),
            'defenderScanDownloads' => fn(ParseNode $n) => $o->setDefenderScanDownloads($n->getBooleanValue()),
            'defenderScanIncomingMail' => fn(ParseNode $n) => $o->setDefenderScanIncomingMail($n->getBooleanValue()),
            'defenderScanMappedNetworkDrivesDuringFullScan' => fn(ParseNode $n) => $o->setDefenderScanMappedNetworkDrivesDuringFullScan($n->getBooleanValue()),
            'defenderScanMaxCpu' => fn(ParseNode $n) => $o->setDefenderScanMaxCpu($n->getIntegerValue()),
            'defenderScanNetworkFiles' => fn(ParseNode $n) => $o->setDefenderScanNetworkFiles($n->getBooleanValue()),
            'defenderScanRemovableDrivesDuringFullScan' => fn(ParseNode $n) => $o->setDefenderScanRemovableDrivesDuringFullScan($n->getBooleanValue()),
            'defenderScanScriptsLoadedInInternetExplorer' => fn(ParseNode $n) => $o->setDefenderScanScriptsLoadedInInternetExplorer($n->getBooleanValue()),
            'defenderScanType' => fn(ParseNode $n) => $o->setDefenderScanType($n->getEnumValue(DefenderScanType::class)),
            'defenderScheduledQuickScanTime' => fn(ParseNode $n) => $o->setDefenderScheduledQuickScanTime($n->getTimeValue()),
            'defenderScheduledScanTime' => fn(ParseNode $n) => $o->setDefenderScheduledScanTime($n->getTimeValue()),
            'defenderSignatureUpdateIntervalInHours' => fn(ParseNode $n) => $o->setDefenderSignatureUpdateIntervalInHours($n->getIntegerValue()),
            'defenderSystemScanSchedule' => fn(ParseNode $n) => $o->setDefenderSystemScanSchedule($n->getEnumValue(WeeklySchedule::class)),
            'developerUnlockSetting' => fn(ParseNode $n) => $o->setDeveloperUnlockSetting($n->getEnumValue(StateManagementSetting::class)),
            'deviceManagementBlockFactoryResetOnMobile' => fn(ParseNode $n) => $o->setDeviceManagementBlockFactoryResetOnMobile($n->getBooleanValue()),
            'deviceManagementBlockManualUnenroll' => fn(ParseNode $n) => $o->setDeviceManagementBlockManualUnenroll($n->getBooleanValue()),
            'diagnosticsDataSubmissionMode' => fn(ParseNode $n) => $o->setDiagnosticsDataSubmissionMode($n->getEnumValue(DiagnosticDataSubmissionMode::class)),
            'edgeAllowStartPagesModification' => fn(ParseNode $n) => $o->setEdgeAllowStartPagesModification($n->getBooleanValue()),
            'edgeBlockAccessToAboutFlags' => fn(ParseNode $n) => $o->setEdgeBlockAccessToAboutFlags($n->getBooleanValue()),
            'edgeBlockAddressBarDropdown' => fn(ParseNode $n) => $o->setEdgeBlockAddressBarDropdown($n->getBooleanValue()),
            'edgeBlockAutofill' => fn(ParseNode $n) => $o->setEdgeBlockAutofill($n->getBooleanValue()),
            'edgeBlockCompatibilityList' => fn(ParseNode $n) => $o->setEdgeBlockCompatibilityList($n->getBooleanValue()),
            'edgeBlockDeveloperTools' => fn(ParseNode $n) => $o->setEdgeBlockDeveloperTools($n->getBooleanValue()),
            'edgeBlocked' => fn(ParseNode $n) => $o->setEdgeBlocked($n->getBooleanValue()),
            'edgeBlockExtensions' => fn(ParseNode $n) => $o->setEdgeBlockExtensions($n->getBooleanValue()),
            'edgeBlockInPrivateBrowsing' => fn(ParseNode $n) => $o->setEdgeBlockInPrivateBrowsing($n->getBooleanValue()),
            'edgeBlockJavaScript' => fn(ParseNode $n) => $o->setEdgeBlockJavaScript($n->getBooleanValue()),
            'edgeBlockLiveTileDataCollection' => fn(ParseNode $n) => $o->setEdgeBlockLiveTileDataCollection($n->getBooleanValue()),
            'edgeBlockPasswordManager' => fn(ParseNode $n) => $o->setEdgeBlockPasswordManager($n->getBooleanValue()),
            'edgeBlockPopups' => fn(ParseNode $n) => $o->setEdgeBlockPopups($n->getBooleanValue()),
            'edgeBlockSearchSuggestions' => fn(ParseNode $n) => $o->setEdgeBlockSearchSuggestions($n->getBooleanValue()),
            'edgeBlockSendingDoNotTrackHeader' => fn(ParseNode $n) => $o->setEdgeBlockSendingDoNotTrackHeader($n->getBooleanValue()),
            'edgeBlockSendingIntranetTrafficToInternetExplorer' => fn(ParseNode $n) => $o->setEdgeBlockSendingIntranetTrafficToInternetExplorer($n->getBooleanValue()),
            'edgeClearBrowsingDataOnExit' => fn(ParseNode $n) => $o->setEdgeClearBrowsingDataOnExit($n->getBooleanValue()),
            'edgeCookiePolicy' => fn(ParseNode $n) => $o->setEdgeCookiePolicy($n->getEnumValue(EdgeCookiePolicy::class)),
            'edgeDisableFirstRunPage' => fn(ParseNode $n) => $o->setEdgeDisableFirstRunPage($n->getBooleanValue()),
            'edgeEnterpriseModeSiteListLocation' => fn(ParseNode $n) => $o->setEdgeEnterpriseModeSiteListLocation($n->getStringValue()),
            'edgeFirstRunUrl' => fn(ParseNode $n) => $o->setEdgeFirstRunUrl($n->getStringValue()),
            'edgeHomepageUrls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEdgeHomepageUrls($val);
            },
            'edgeRequireSmartScreen' => fn(ParseNode $n) => $o->setEdgeRequireSmartScreen($n->getBooleanValue()),
            'edgeSearchEngine' => fn(ParseNode $n) => $o->setEdgeSearchEngine($n->getObjectValue([EdgeSearchEngineBase::class, 'createFromDiscriminatorValue'])),
            'edgeSendIntranetTrafficToInternetExplorer' => fn(ParseNode $n) => $o->setEdgeSendIntranetTrafficToInternetExplorer($n->getBooleanValue()),
            'edgeSyncFavoritesWithInternetExplorer' => fn(ParseNode $n) => $o->setEdgeSyncFavoritesWithInternetExplorer($n->getBooleanValue()),
            'enterpriseCloudPrintDiscoveryEndPoint' => fn(ParseNode $n) => $o->setEnterpriseCloudPrintDiscoveryEndPoint($n->getStringValue()),
            'enterpriseCloudPrintDiscoveryMaxLimit' => fn(ParseNode $n) => $o->setEnterpriseCloudPrintDiscoveryMaxLimit($n->getIntegerValue()),
            'enterpriseCloudPrintMopriaDiscoveryResourceIdentifier' => fn(ParseNode $n) => $o->setEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier($n->getStringValue()),
            'enterpriseCloudPrintOAuthAuthority' => fn(ParseNode $n) => $o->setEnterpriseCloudPrintOAuthAuthority($n->getStringValue()),
            'enterpriseCloudPrintOAuthClientIdentifier' => fn(ParseNode $n) => $o->setEnterpriseCloudPrintOAuthClientIdentifier($n->getStringValue()),
            'enterpriseCloudPrintResourceIdentifier' => fn(ParseNode $n) => $o->setEnterpriseCloudPrintResourceIdentifier($n->getStringValue()),
            'experienceBlockDeviceDiscovery' => fn(ParseNode $n) => $o->setExperienceBlockDeviceDiscovery($n->getBooleanValue()),
            'experienceBlockErrorDialogWhenNoSIM' => fn(ParseNode $n) => $o->setExperienceBlockErrorDialogWhenNoSIM($n->getBooleanValue()),
            'experienceBlockTaskSwitcher' => fn(ParseNode $n) => $o->setExperienceBlockTaskSwitcher($n->getBooleanValue()),
            'gameDvrBlocked' => fn(ParseNode $n) => $o->setGameDvrBlocked($n->getBooleanValue()),
            'internetSharingBlocked' => fn(ParseNode $n) => $o->setInternetSharingBlocked($n->getBooleanValue()),
            'locationServicesBlocked' => fn(ParseNode $n) => $o->setLocationServicesBlocked($n->getBooleanValue()),
            'lockScreenAllowTimeoutConfiguration' => fn(ParseNode $n) => $o->setLockScreenAllowTimeoutConfiguration($n->getBooleanValue()),
            'lockScreenBlockActionCenterNotifications' => fn(ParseNode $n) => $o->setLockScreenBlockActionCenterNotifications($n->getBooleanValue()),
            'lockScreenBlockCortana' => fn(ParseNode $n) => $o->setLockScreenBlockCortana($n->getBooleanValue()),
            'lockScreenBlockToastNotifications' => fn(ParseNode $n) => $o->setLockScreenBlockToastNotifications($n->getBooleanValue()),
            'lockScreenTimeoutInSeconds' => fn(ParseNode $n) => $o->setLockScreenTimeoutInSeconds($n->getIntegerValue()),
            'logonBlockFastUserSwitching' => fn(ParseNode $n) => $o->setLogonBlockFastUserSwitching($n->getBooleanValue()),
            'microsoftAccountBlocked' => fn(ParseNode $n) => $o->setMicrosoftAccountBlocked($n->getBooleanValue()),
            'microsoftAccountBlockSettingsSync' => fn(ParseNode $n) => $o->setMicrosoftAccountBlockSettingsSync($n->getBooleanValue()),
            'networkProxyApplySettingsDeviceWide' => fn(ParseNode $n) => $o->setNetworkProxyApplySettingsDeviceWide($n->getBooleanValue()),
            'networkProxyAutomaticConfigurationUrl' => fn(ParseNode $n) => $o->setNetworkProxyAutomaticConfigurationUrl($n->getStringValue()),
            'networkProxyDisableAutoDetect' => fn(ParseNode $n) => $o->setNetworkProxyDisableAutoDetect($n->getBooleanValue()),
            'networkProxyServer' => fn(ParseNode $n) => $o->setNetworkProxyServer($n->getObjectValue([Windows10NetworkProxyServer::class, 'createFromDiscriminatorValue'])),
            'nfcBlocked' => fn(ParseNode $n) => $o->setNfcBlocked($n->getBooleanValue()),
            'oneDriveDisableFileSync' => fn(ParseNode $n) => $o->setOneDriveDisableFileSync($n->getBooleanValue()),
            'passwordBlockSimple' => fn(ParseNode $n) => $o->setPasswordBlockSimple($n->getBooleanValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMinimumCharacterSetCount' => fn(ParseNode $n) => $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeScreenTimeout' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequired' => fn(ParseNode $n) => $o->setPasswordRequired($n->getBooleanValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)),
            'passwordRequireWhenResumeFromIdleState' => fn(ParseNode $n) => $o->setPasswordRequireWhenResumeFromIdleState($n->getBooleanValue()),
            'passwordSignInFailureCountBeforeFactoryReset' => fn(ParseNode $n) => $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()),
            'personalizationDesktopImageUrl' => fn(ParseNode $n) => $o->setPersonalizationDesktopImageUrl($n->getStringValue()),
            'personalizationLockScreenImageUrl' => fn(ParseNode $n) => $o->setPersonalizationLockScreenImageUrl($n->getStringValue()),
            'privacyAdvertisingId' => fn(ParseNode $n) => $o->setPrivacyAdvertisingId($n->getEnumValue(StateManagementSetting::class)),
            'privacyAutoAcceptPairingAndConsentPrompts' => fn(ParseNode $n) => $o->setPrivacyAutoAcceptPairingAndConsentPrompts($n->getBooleanValue()),
            'privacyBlockInputPersonalization' => fn(ParseNode $n) => $o->setPrivacyBlockInputPersonalization($n->getBooleanValue()),
            'resetProtectionModeBlocked' => fn(ParseNode $n) => $o->setResetProtectionModeBlocked($n->getBooleanValue()),
            'safeSearchFilter' => fn(ParseNode $n) => $o->setSafeSearchFilter($n->getEnumValue(SafeSearchFilterType::class)),
            'screenCaptureBlocked' => fn(ParseNode $n) => $o->setScreenCaptureBlocked($n->getBooleanValue()),
            'searchBlockDiacritics' => fn(ParseNode $n) => $o->setSearchBlockDiacritics($n->getBooleanValue()),
            'searchDisableAutoLanguageDetection' => fn(ParseNode $n) => $o->setSearchDisableAutoLanguageDetection($n->getBooleanValue()),
            'searchDisableIndexerBackoff' => fn(ParseNode $n) => $o->setSearchDisableIndexerBackoff($n->getBooleanValue()),
            'searchDisableIndexingEncryptedItems' => fn(ParseNode $n) => $o->setSearchDisableIndexingEncryptedItems($n->getBooleanValue()),
            'searchDisableIndexingRemovableDrive' => fn(ParseNode $n) => $o->setSearchDisableIndexingRemovableDrive($n->getBooleanValue()),
            'searchEnableAutomaticIndexSizeManangement' => fn(ParseNode $n) => $o->setSearchEnableAutomaticIndexSizeManangement($n->getBooleanValue()),
            'searchEnableRemoteQueries' => fn(ParseNode $n) => $o->setSearchEnableRemoteQueries($n->getBooleanValue()),
            'settingsBlockAccountsPage' => fn(ParseNode $n) => $o->setSettingsBlockAccountsPage($n->getBooleanValue()),
            'settingsBlockAddProvisioningPackage' => fn(ParseNode $n) => $o->setSettingsBlockAddProvisioningPackage($n->getBooleanValue()),
            'settingsBlockAppsPage' => fn(ParseNode $n) => $o->setSettingsBlockAppsPage($n->getBooleanValue()),
            'settingsBlockChangeLanguage' => fn(ParseNode $n) => $o->setSettingsBlockChangeLanguage($n->getBooleanValue()),
            'settingsBlockChangePowerSleep' => fn(ParseNode $n) => $o->setSettingsBlockChangePowerSleep($n->getBooleanValue()),
            'settingsBlockChangeRegion' => fn(ParseNode $n) => $o->setSettingsBlockChangeRegion($n->getBooleanValue()),
            'settingsBlockChangeSystemTime' => fn(ParseNode $n) => $o->setSettingsBlockChangeSystemTime($n->getBooleanValue()),
            'settingsBlockDevicesPage' => fn(ParseNode $n) => $o->setSettingsBlockDevicesPage($n->getBooleanValue()),
            'settingsBlockEaseOfAccessPage' => fn(ParseNode $n) => $o->setSettingsBlockEaseOfAccessPage($n->getBooleanValue()),
            'settingsBlockEditDeviceName' => fn(ParseNode $n) => $o->setSettingsBlockEditDeviceName($n->getBooleanValue()),
            'settingsBlockGamingPage' => fn(ParseNode $n) => $o->setSettingsBlockGamingPage($n->getBooleanValue()),
            'settingsBlockNetworkInternetPage' => fn(ParseNode $n) => $o->setSettingsBlockNetworkInternetPage($n->getBooleanValue()),
            'settingsBlockPersonalizationPage' => fn(ParseNode $n) => $o->setSettingsBlockPersonalizationPage($n->getBooleanValue()),
            'settingsBlockPrivacyPage' => fn(ParseNode $n) => $o->setSettingsBlockPrivacyPage($n->getBooleanValue()),
            'settingsBlockRemoveProvisioningPackage' => fn(ParseNode $n) => $o->setSettingsBlockRemoveProvisioningPackage($n->getBooleanValue()),
            'settingsBlockSettingsApp' => fn(ParseNode $n) => $o->setSettingsBlockSettingsApp($n->getBooleanValue()),
            'settingsBlockSystemPage' => fn(ParseNode $n) => $o->setSettingsBlockSystemPage($n->getBooleanValue()),
            'settingsBlockTimeLanguagePage' => fn(ParseNode $n) => $o->setSettingsBlockTimeLanguagePage($n->getBooleanValue()),
            'settingsBlockUpdateSecurityPage' => fn(ParseNode $n) => $o->setSettingsBlockUpdateSecurityPage($n->getBooleanValue()),
            'sharedUserAppDataAllowed' => fn(ParseNode $n) => $o->setSharedUserAppDataAllowed($n->getBooleanValue()),
            'smartScreenBlockPromptOverride' => fn(ParseNode $n) => $o->setSmartScreenBlockPromptOverride($n->getBooleanValue()),
            'smartScreenBlockPromptOverrideForFiles' => fn(ParseNode $n) => $o->setSmartScreenBlockPromptOverrideForFiles($n->getBooleanValue()),
            'smartScreenEnableAppInstallControl' => fn(ParseNode $n) => $o->setSmartScreenEnableAppInstallControl($n->getBooleanValue()),
            'startBlockUnpinningAppsFromTaskbar' => fn(ParseNode $n) => $o->setStartBlockUnpinningAppsFromTaskbar($n->getBooleanValue()),
            'startMenuAppListVisibility' => fn(ParseNode $n) => $o->setStartMenuAppListVisibility($n->getEnumValue(WindowsStartMenuAppListVisibilityType::class)),
            'startMenuHideChangeAccountSettings' => fn(ParseNode $n) => $o->setStartMenuHideChangeAccountSettings($n->getBooleanValue()),
            'startMenuHideFrequentlyUsedApps' => fn(ParseNode $n) => $o->setStartMenuHideFrequentlyUsedApps($n->getBooleanValue()),
            'startMenuHideHibernate' => fn(ParseNode $n) => $o->setStartMenuHideHibernate($n->getBooleanValue()),
            'startMenuHideLock' => fn(ParseNode $n) => $o->setStartMenuHideLock($n->getBooleanValue()),
            'startMenuHidePowerButton' => fn(ParseNode $n) => $o->setStartMenuHidePowerButton($n->getBooleanValue()),
            'startMenuHideRecentJumpLists' => fn(ParseNode $n) => $o->setStartMenuHideRecentJumpLists($n->getBooleanValue()),
            'startMenuHideRecentlyAddedApps' => fn(ParseNode $n) => $o->setStartMenuHideRecentlyAddedApps($n->getBooleanValue()),
            'startMenuHideRestartOptions' => fn(ParseNode $n) => $o->setStartMenuHideRestartOptions($n->getBooleanValue()),
            'startMenuHideShutDown' => fn(ParseNode $n) => $o->setStartMenuHideShutDown($n->getBooleanValue()),
            'startMenuHideSignOut' => fn(ParseNode $n) => $o->setStartMenuHideSignOut($n->getBooleanValue()),
            'startMenuHideSleep' => fn(ParseNode $n) => $o->setStartMenuHideSleep($n->getBooleanValue()),
            'startMenuHideSwitchAccount' => fn(ParseNode $n) => $o->setStartMenuHideSwitchAccount($n->getBooleanValue()),
            'startMenuHideUserTile' => fn(ParseNode $n) => $o->setStartMenuHideUserTile($n->getBooleanValue()),
            'startMenuLayoutEdgeAssetsXml' => fn(ParseNode $n) => $o->setStartMenuLayoutEdgeAssetsXml($n->getBinaryContent()),
            'startMenuLayoutXml' => fn(ParseNode $n) => $o->setStartMenuLayoutXml($n->getBinaryContent()),
            'startMenuMode' => fn(ParseNode $n) => $o->setStartMenuMode($n->getEnumValue(WindowsStartMenuModeType::class)),
            'startMenuPinnedFolderDocuments' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderDocuments($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderDownloads' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderDownloads($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderFileExplorer' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderFileExplorer($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderHomeGroup' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderHomeGroup($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderMusic' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderMusic($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderNetwork' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderNetwork($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderPersonalFolder' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderPersonalFolder($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderPictures' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderPictures($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderSettings' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderSettings($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderVideos' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderVideos($n->getEnumValue(VisibilitySetting::class)),
            'storageBlockRemovableStorage' => fn(ParseNode $n) => $o->setStorageBlockRemovableStorage($n->getBooleanValue()),
            'storageRequireMobileDeviceEncryption' => fn(ParseNode $n) => $o->setStorageRequireMobileDeviceEncryption($n->getBooleanValue()),
            'storageRestrictAppDataToSystemVolume' => fn(ParseNode $n) => $o->setStorageRestrictAppDataToSystemVolume($n->getBooleanValue()),
            'storageRestrictAppInstallToSystemVolume' => fn(ParseNode $n) => $o->setStorageRestrictAppInstallToSystemVolume($n->getBooleanValue()),
            'tenantLockdownRequireNetworkDuringOutOfBoxExperience' => fn(ParseNode $n) => $o->setTenantLockdownRequireNetworkDuringOutOfBoxExperience($n->getBooleanValue()),
            'usbBlocked' => fn(ParseNode $n) => $o->setUsbBlocked($n->getBooleanValue()),
            'voiceRecordingBlocked' => fn(ParseNode $n) => $o->setVoiceRecordingBlocked($n->getBooleanValue()),
            'webRtcBlockLocalhostIpAddress' => fn(ParseNode $n) => $o->setWebRtcBlockLocalhostIpAddress($n->getBooleanValue()),
            'wiFiBlockAutomaticConnectHotspots' => fn(ParseNode $n) => $o->setWiFiBlockAutomaticConnectHotspots($n->getBooleanValue()),
            'wiFiBlocked' => fn(ParseNode $n) => $o->setWiFiBlocked($n->getBooleanValue()),
            'wiFiBlockManualConfiguration' => fn(ParseNode $n) => $o->setWiFiBlockManualConfiguration($n->getBooleanValue()),
            'wiFiScanInterval' => fn(ParseNode $n) => $o->setWiFiScanInterval($n->getIntegerValue()),
            'windowsSpotlightBlockConsumerSpecificFeatures' => fn(ParseNode $n) => $o->setWindowsSpotlightBlockConsumerSpecificFeatures($n->getBooleanValue()),
            'windowsSpotlightBlocked' => fn(ParseNode $n) => $o->setWindowsSpotlightBlocked($n->getBooleanValue()),
            'windowsSpotlightBlockOnActionCenter' => fn(ParseNode $n) => $o->setWindowsSpotlightBlockOnActionCenter($n->getBooleanValue()),
            'windowsSpotlightBlockTailoredExperiences' => fn(ParseNode $n) => $o->setWindowsSpotlightBlockTailoredExperiences($n->getBooleanValue()),
            'windowsSpotlightBlockThirdPartyNotifications' => fn(ParseNode $n) => $o->setWindowsSpotlightBlockThirdPartyNotifications($n->getBooleanValue()),
            'windowsSpotlightBlockWelcomeExperience' => fn(ParseNode $n) => $o->setWindowsSpotlightBlockWelcomeExperience($n->getBooleanValue()),
            'windowsSpotlightBlockWindowsTips' => fn(ParseNode $n) => $o->setWindowsSpotlightBlockWindowsTips($n->getBooleanValue()),
            'windowsSpotlightConfigureOnLockScreen' => fn(ParseNode $n) => $o->setWindowsSpotlightConfigureOnLockScreen($n->getEnumValue(WindowsSpotlightEnablementSettings::class)),
            'windowsStoreBlockAutoUpdate' => fn(ParseNode $n) => $o->setWindowsStoreBlockAutoUpdate($n->getBooleanValue()),
            'windowsStoreBlocked' => fn(ParseNode $n) => $o->setWindowsStoreBlocked($n->getBooleanValue()),
            'windowsStoreEnablePrivateStoreOnly' => fn(ParseNode $n) => $o->setWindowsStoreEnablePrivateStoreOnly($n->getBooleanValue()),
            'wirelessDisplayBlockProjectionToThisDevice' => fn(ParseNode $n) => $o->setWirelessDisplayBlockProjectionToThisDevice($n->getBooleanValue()),
            'wirelessDisplayBlockUserInputFromReceiver' => fn(ParseNode $n) => $o->setWirelessDisplayBlockUserInputFromReceiver($n->getBooleanValue()),
            'wirelessDisplayRequirePinForPairing' => fn(ParseNode $n) => $o->setWirelessDisplayRequirePinForPairing($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the gameDvrBlocked property value. Indicates whether or not to block DVR and broadcasting.
     * @return bool|null
    */
    public function getGameDvrBlocked(): ?bool {
        $val = $this->getBackingStore()->get('gameDvrBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gameDvrBlocked'");
    }

    /**
     * Gets the internetSharingBlocked property value. Indicates whether or not to Block the user from using internet sharing.
     * @return bool|null
    */
    public function getInternetSharingBlocked(): ?bool {
        $val = $this->getBackingStore()->get('internetSharingBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internetSharingBlocked'");
    }

    /**
     * Gets the locationServicesBlocked property value. Indicates whether or not to Block the user from location services.
     * @return bool|null
    */
    public function getLocationServicesBlocked(): ?bool {
        $val = $this->getBackingStore()->get('locationServicesBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locationServicesBlocked'");
    }

    /**
     * Gets the lockScreenAllowTimeoutConfiguration property value. Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
     * @return bool|null
    */
    public function getLockScreenAllowTimeoutConfiguration(): ?bool {
        $val = $this->getBackingStore()->get('lockScreenAllowTimeoutConfiguration');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lockScreenAllowTimeoutConfiguration'");
    }

    /**
     * Gets the lockScreenBlockActionCenterNotifications property value. Indicates whether or not to block action center notifications over lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockActionCenterNotifications(): ?bool {
        $val = $this->getBackingStore()->get('lockScreenBlockActionCenterNotifications');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lockScreenBlockActionCenterNotifications'");
    }

    /**
     * Gets the lockScreenBlockCortana property value. Indicates whether or not the user can interact with Cortana using speech while the system is locked.
     * @return bool|null
    */
    public function getLockScreenBlockCortana(): ?bool {
        $val = $this->getBackingStore()->get('lockScreenBlockCortana');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lockScreenBlockCortana'");
    }

    /**
     * Gets the lockScreenBlockToastNotifications property value. Indicates whether to allow toast notifications above the device lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockToastNotifications(): ?bool {
        $val = $this->getBackingStore()->get('lockScreenBlockToastNotifications');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lockScreenBlockToastNotifications'");
    }

    /**
     * Gets the lockScreenTimeoutInSeconds property value. Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
     * @return int|null
    */
    public function getLockScreenTimeoutInSeconds(): ?int {
        $val = $this->getBackingStore()->get('lockScreenTimeoutInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lockScreenTimeoutInSeconds'");
    }

    /**
     * Gets the logonBlockFastUserSwitching property value. Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
     * @return bool|null
    */
    public function getLogonBlockFastUserSwitching(): ?bool {
        $val = $this->getBackingStore()->get('logonBlockFastUserSwitching');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'logonBlockFastUserSwitching'");
    }

    /**
     * Gets the microsoftAccountBlocked property value. Indicates whether or not to Block a Microsoft account.
     * @return bool|null
    */
    public function getMicrosoftAccountBlocked(): ?bool {
        $val = $this->getBackingStore()->get('microsoftAccountBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftAccountBlocked'");
    }

    /**
     * Gets the microsoftAccountBlockSettingsSync property value. Indicates whether or not to Block Microsoft account settings sync.
     * @return bool|null
    */
    public function getMicrosoftAccountBlockSettingsSync(): ?bool {
        $val = $this->getBackingStore()->get('microsoftAccountBlockSettingsSync');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftAccountBlockSettingsSync'");
    }

    /**
     * Gets the networkProxyApplySettingsDeviceWide property value. If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
     * @return bool|null
    */
    public function getNetworkProxyApplySettingsDeviceWide(): ?bool {
        $val = $this->getBackingStore()->get('networkProxyApplySettingsDeviceWide');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkProxyApplySettingsDeviceWide'");
    }

    /**
     * Gets the networkProxyAutomaticConfigurationUrl property value. Address to the proxy auto-config (PAC) script you want to use.
     * @return string|null
    */
    public function getNetworkProxyAutomaticConfigurationUrl(): ?string {
        $val = $this->getBackingStore()->get('networkProxyAutomaticConfigurationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkProxyAutomaticConfigurationUrl'");
    }

    /**
     * Gets the networkProxyDisableAutoDetect property value. Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
     * @return bool|null
    */
    public function getNetworkProxyDisableAutoDetect(): ?bool {
        $val = $this->getBackingStore()->get('networkProxyDisableAutoDetect');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkProxyDisableAutoDetect'");
    }

    /**
     * Gets the networkProxyServer property value. Specifies manual proxy server settings.
     * @return Windows10NetworkProxyServer|null
    */
    public function getNetworkProxyServer(): ?Windows10NetworkProxyServer {
        $val = $this->getBackingStore()->get('networkProxyServer');
        if (is_null($val) || $val instanceof Windows10NetworkProxyServer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkProxyServer'");
    }

    /**
     * Gets the nfcBlocked property value. Indicates whether or not to Block the user from using near field communication.
     * @return bool|null
    */
    public function getNfcBlocked(): ?bool {
        $val = $this->getBackingStore()->get('nfcBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nfcBlocked'");
    }

    /**
     * Gets the oneDriveDisableFileSync property value. Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
     * @return bool|null
    */
    public function getOneDriveDisableFileSync(): ?bool {
        $val = $this->getBackingStore()->get('oneDriveDisableFileSync');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oneDriveDisableFileSync'");
    }

    /**
     * Gets the passwordBlockSimple property value. Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockSimple');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockSimple'");
    }

    /**
     * Gets the passwordExpirationDays property value. The password expiration in days. Valid values 0 to 730
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        $val = $this->getBackingStore()->get('passwordExpirationDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordExpirationDays'");
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumCharacterSetCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumCharacterSetCount'");
    }

    /**
     * Gets the passwordMinimumLength property value. The minimum password length. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumLength'");
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. The minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        $val = $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeScreenTimeout');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinutesOfInactivityBeforeScreenTimeout'");
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent reuse of. Valid values 0 to 50
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        $val = $this->getBackingStore()->get('passwordPreviousPasswordBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordPreviousPasswordBlockCount'");
    }

    /**
     * Gets the passwordRequired property value. Indicates whether or not to require the user to have a password.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        $val = $this->getBackingStore()->get('passwordRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequired'");
    }

    /**
     * Gets the passwordRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        $val = $this->getBackingStore()->get('passwordRequiredType');
        if (is_null($val) || $val instanceof RequiredPasswordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequiredType'");
    }

    /**
     * Gets the passwordRequireWhenResumeFromIdleState property value. Indicates whether or not to require a password upon resuming from an idle state.
     * @return bool|null
    */
    public function getPasswordRequireWhenResumeFromIdleState(): ?bool {
        $val = $this->getBackingStore()->get('passwordRequireWhenResumeFromIdleState');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequireWhenResumeFromIdleState'");
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. The number of sign in failures before factory reset. Valid values 0 to 999
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        $val = $this->getBackingStore()->get('passwordSignInFailureCountBeforeFactoryReset');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordSignInFailureCountBeforeFactoryReset'");
    }

    /**
     * Gets the personalizationDesktopImageUrl property value. A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
     * @return string|null
    */
    public function getPersonalizationDesktopImageUrl(): ?string {
        $val = $this->getBackingStore()->get('personalizationDesktopImageUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'personalizationDesktopImageUrl'");
    }

    /**
     * Gets the personalizationLockScreenImageUrl property value. A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
     * @return string|null
    */
    public function getPersonalizationLockScreenImageUrl(): ?string {
        $val = $this->getBackingStore()->get('personalizationLockScreenImageUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'personalizationLockScreenImageUrl'");
    }

    /**
     * Gets the privacyAdvertisingId property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getPrivacyAdvertisingId(): ?StateManagementSetting {
        $val = $this->getBackingStore()->get('privacyAdvertisingId');
        if (is_null($val) || $val instanceof StateManagementSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacyAdvertisingId'");
    }

    /**
     * Gets the privacyAutoAcceptPairingAndConsentPrompts property value. Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
     * @return bool|null
    */
    public function getPrivacyAutoAcceptPairingAndConsentPrompts(): ?bool {
        $val = $this->getBackingStore()->get('privacyAutoAcceptPairingAndConsentPrompts');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacyAutoAcceptPairingAndConsentPrompts'");
    }

    /**
     * Gets the privacyBlockInputPersonalization property value. Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     * @return bool|null
    */
    public function getPrivacyBlockInputPersonalization(): ?bool {
        $val = $this->getBackingStore()->get('privacyBlockInputPersonalization');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacyBlockInputPersonalization'");
    }

    /**
     * Gets the resetProtectionModeBlocked property value. Indicates whether or not to Block the user from reset protection mode.
     * @return bool|null
    */
    public function getResetProtectionModeBlocked(): ?bool {
        $val = $this->getBackingStore()->get('resetProtectionModeBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resetProtectionModeBlocked'");
    }

    /**
     * Gets the safeSearchFilter property value. Specifies what level of safe search (filtering adult content) is required
     * @return SafeSearchFilterType|null
    */
    public function getSafeSearchFilter(): ?SafeSearchFilterType {
        $val = $this->getBackingStore()->get('safeSearchFilter');
        if (is_null($val) || $val instanceof SafeSearchFilterType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safeSearchFilter'");
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to Block the user from taking Screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        $val = $this->getBackingStore()->get('screenCaptureBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'screenCaptureBlocked'");
    }

    /**
     * Gets the searchBlockDiacritics property value. Specifies if search can use diacritics.
     * @return bool|null
    */
    public function getSearchBlockDiacritics(): ?bool {
        $val = $this->getBackingStore()->get('searchBlockDiacritics');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searchBlockDiacritics'");
    }

    /**
     * Gets the searchDisableAutoLanguageDetection property value. Specifies whether to use automatic language detection when indexing content and properties.
     * @return bool|null
    */
    public function getSearchDisableAutoLanguageDetection(): ?bool {
        $val = $this->getBackingStore()->get('searchDisableAutoLanguageDetection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searchDisableAutoLanguageDetection'");
    }

    /**
     * Gets the searchDisableIndexerBackoff property value. Indicates whether or not to disable the search indexer backoff feature.
     * @return bool|null
    */
    public function getSearchDisableIndexerBackoff(): ?bool {
        $val = $this->getBackingStore()->get('searchDisableIndexerBackoff');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searchDisableIndexerBackoff'");
    }

    /**
     * Gets the searchDisableIndexingEncryptedItems property value. Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
     * @return bool|null
    */
    public function getSearchDisableIndexingEncryptedItems(): ?bool {
        $val = $this->getBackingStore()->get('searchDisableIndexingEncryptedItems');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searchDisableIndexingEncryptedItems'");
    }

    /**
     * Gets the searchDisableIndexingRemovableDrive property value. Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
     * @return bool|null
    */
    public function getSearchDisableIndexingRemovableDrive(): ?bool {
        $val = $this->getBackingStore()->get('searchDisableIndexingRemovableDrive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searchDisableIndexingRemovableDrive'");
    }

    /**
     * Gets the searchEnableAutomaticIndexSizeManangement property value. Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
     * @return bool|null
    */
    public function getSearchEnableAutomaticIndexSizeManangement(): ?bool {
        $val = $this->getBackingStore()->get('searchEnableAutomaticIndexSizeManangement');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searchEnableAutomaticIndexSizeManangement'");
    }

    /**
     * Gets the searchEnableRemoteQueries property value. Indicates whether or not to block remote queries of this computer’s index.
     * @return bool|null
    */
    public function getSearchEnableRemoteQueries(): ?bool {
        $val = $this->getBackingStore()->get('searchEnableRemoteQueries');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searchEnableRemoteQueries'");
    }

    /**
     * Gets the settingsBlockAccountsPage property value. Indicates whether or not to block access to Accounts in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockAccountsPage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockAccountsPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockAccountsPage'");
    }

    /**
     * Gets the settingsBlockAddProvisioningPackage property value. Indicates whether or not to block the user from installing provisioning packages.
     * @return bool|null
    */
    public function getSettingsBlockAddProvisioningPackage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockAddProvisioningPackage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockAddProvisioningPackage'");
    }

    /**
     * Gets the settingsBlockAppsPage property value. Indicates whether or not to block access to Apps in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockAppsPage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockAppsPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockAppsPage'");
    }

    /**
     * Gets the settingsBlockChangeLanguage property value. Indicates whether or not to block the user from changing the language settings.
     * @return bool|null
    */
    public function getSettingsBlockChangeLanguage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockChangeLanguage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockChangeLanguage'");
    }

    /**
     * Gets the settingsBlockChangePowerSleep property value. Indicates whether or not to block the user from changing power and sleep settings.
     * @return bool|null
    */
    public function getSettingsBlockChangePowerSleep(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockChangePowerSleep');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockChangePowerSleep'");
    }

    /**
     * Gets the settingsBlockChangeRegion property value. Indicates whether or not to block the user from changing the region settings.
     * @return bool|null
    */
    public function getSettingsBlockChangeRegion(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockChangeRegion');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockChangeRegion'");
    }

    /**
     * Gets the settingsBlockChangeSystemTime property value. Indicates whether or not to block the user from changing date and time settings.
     * @return bool|null
    */
    public function getSettingsBlockChangeSystemTime(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockChangeSystemTime');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockChangeSystemTime'");
    }

    /**
     * Gets the settingsBlockDevicesPage property value. Indicates whether or not to block access to Devices in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockDevicesPage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockDevicesPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockDevicesPage'");
    }

    /**
     * Gets the settingsBlockEaseOfAccessPage property value. Indicates whether or not to block access to Ease of Access in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockEaseOfAccessPage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockEaseOfAccessPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockEaseOfAccessPage'");
    }

    /**
     * Gets the settingsBlockEditDeviceName property value. Indicates whether or not to block the user from editing the device name.
     * @return bool|null
    */
    public function getSettingsBlockEditDeviceName(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockEditDeviceName');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockEditDeviceName'");
    }

    /**
     * Gets the settingsBlockGamingPage property value. Indicates whether or not to block access to Gaming in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockGamingPage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockGamingPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockGamingPage'");
    }

    /**
     * Gets the settingsBlockNetworkInternetPage property value. Indicates whether or not to block access to Network & Internet in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockNetworkInternetPage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockNetworkInternetPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockNetworkInternetPage'");
    }

    /**
     * Gets the settingsBlockPersonalizationPage property value. Indicates whether or not to block access to Personalization in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockPersonalizationPage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockPersonalizationPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockPersonalizationPage'");
    }

    /**
     * Gets the settingsBlockPrivacyPage property value. Indicates whether or not to block access to Privacy in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockPrivacyPage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockPrivacyPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockPrivacyPage'");
    }

    /**
     * Gets the settingsBlockRemoveProvisioningPackage property value. Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
     * @return bool|null
    */
    public function getSettingsBlockRemoveProvisioningPackage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockRemoveProvisioningPackage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockRemoveProvisioningPackage'");
    }

    /**
     * Gets the settingsBlockSettingsApp property value. Indicates whether or not to block access to Settings app.
     * @return bool|null
    */
    public function getSettingsBlockSettingsApp(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockSettingsApp');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockSettingsApp'");
    }

    /**
     * Gets the settingsBlockSystemPage property value. Indicates whether or not to block access to System in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockSystemPage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockSystemPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockSystemPage'");
    }

    /**
     * Gets the settingsBlockTimeLanguagePage property value. Indicates whether or not to block access to Time & Language in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockTimeLanguagePage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockTimeLanguagePage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockTimeLanguagePage'");
    }

    /**
     * Gets the settingsBlockUpdateSecurityPage property value. Indicates whether or not to block access to Update & Security in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockUpdateSecurityPage(): ?bool {
        $val = $this->getBackingStore()->get('settingsBlockUpdateSecurityPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingsBlockUpdateSecurityPage'");
    }

    /**
     * Gets the sharedUserAppDataAllowed property value. Indicates whether or not to block multiple users of the same app to share data.
     * @return bool|null
    */
    public function getSharedUserAppDataAllowed(): ?bool {
        $val = $this->getBackingStore()->get('sharedUserAppDataAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedUserAppDataAllowed'");
    }

    /**
     * Gets the smartScreenBlockPromptOverride property value. Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
     * @return bool|null
    */
    public function getSmartScreenBlockPromptOverride(): ?bool {
        $val = $this->getBackingStore()->get('smartScreenBlockPromptOverride');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smartScreenBlockPromptOverride'");
    }

    /**
     * Gets the smartScreenBlockPromptOverrideForFiles property value. Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
     * @return bool|null
    */
    public function getSmartScreenBlockPromptOverrideForFiles(): ?bool {
        $val = $this->getBackingStore()->get('smartScreenBlockPromptOverrideForFiles');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smartScreenBlockPromptOverrideForFiles'");
    }

    /**
     * Gets the smartScreenEnableAppInstallControl property value. This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
     * @return bool|null
    */
    public function getSmartScreenEnableAppInstallControl(): ?bool {
        $val = $this->getBackingStore()->get('smartScreenEnableAppInstallControl');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smartScreenEnableAppInstallControl'");
    }

    /**
     * Gets the startBlockUnpinningAppsFromTaskbar property value. Indicates whether or not to block the user from unpinning apps from taskbar.
     * @return bool|null
    */
    public function getStartBlockUnpinningAppsFromTaskbar(): ?bool {
        $val = $this->getBackingStore()->get('startBlockUnpinningAppsFromTaskbar');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startBlockUnpinningAppsFromTaskbar'");
    }

    /**
     * Gets the startMenuAppListVisibility property value. Type of start menu app list visibility.
     * @return WindowsStartMenuAppListVisibilityType|null
    */
    public function getStartMenuAppListVisibility(): ?WindowsStartMenuAppListVisibilityType {
        $val = $this->getBackingStore()->get('startMenuAppListVisibility');
        if (is_null($val) || $val instanceof WindowsStartMenuAppListVisibilityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuAppListVisibility'");
    }

    /**
     * Gets the startMenuHideChangeAccountSettings property value. Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideChangeAccountSettings(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHideChangeAccountSettings');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHideChangeAccountSettings'");
    }

    /**
     * Gets the startMenuHideFrequentlyUsedApps property value. Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     * @return bool|null
    */
    public function getStartMenuHideFrequentlyUsedApps(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHideFrequentlyUsedApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHideFrequentlyUsedApps'");
    }

    /**
     * Gets the startMenuHideHibernate property value. Enabling this policy hides hibernate from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideHibernate(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHideHibernate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHideHibernate'");
    }

    /**
     * Gets the startMenuHideLock property value. Enabling this policy hides lock from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideLock(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHideLock');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHideLock'");
    }

    /**
     * Gets the startMenuHidePowerButton property value. Enabling this policy hides the power button from appearing in the start menu.
     * @return bool|null
    */
    public function getStartMenuHidePowerButton(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHidePowerButton');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHidePowerButton'");
    }

    /**
     * Gets the startMenuHideRecentJumpLists property value. Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
     * @return bool|null
    */
    public function getStartMenuHideRecentJumpLists(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHideRecentJumpLists');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHideRecentJumpLists'");
    }

    /**
     * Gets the startMenuHideRecentlyAddedApps property value. Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     * @return bool|null
    */
    public function getStartMenuHideRecentlyAddedApps(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHideRecentlyAddedApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHideRecentlyAddedApps'");
    }

    /**
     * Gets the startMenuHideRestartOptions property value. Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideRestartOptions(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHideRestartOptions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHideRestartOptions'");
    }

    /**
     * Gets the startMenuHideShutDown property value. Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideShutDown(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHideShutDown');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHideShutDown'");
    }

    /**
     * Gets the startMenuHideSignOut property value. Enabling this policy hides sign out from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideSignOut(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHideSignOut');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHideSignOut'");
    }

    /**
     * Gets the startMenuHideSleep property value. Enabling this policy hides sleep from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideSleep(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHideSleep');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHideSleep'");
    }

    /**
     * Gets the startMenuHideSwitchAccount property value. Enabling this policy hides switch account from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideSwitchAccount(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHideSwitchAccount');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHideSwitchAccount'");
    }

    /**
     * Gets the startMenuHideUserTile property value. Enabling this policy hides the user tile from appearing in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideUserTile(): ?bool {
        $val = $this->getBackingStore()->get('startMenuHideUserTile');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuHideUserTile'");
    }

    /**
     * Gets the startMenuLayoutEdgeAssetsXml property value. This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
     * @return StreamInterface|null
    */
    public function getStartMenuLayoutEdgeAssetsXml(): ?StreamInterface {
        $val = $this->getBackingStore()->get('startMenuLayoutEdgeAssetsXml');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuLayoutEdgeAssetsXml'");
    }

    /**
     * Gets the startMenuLayoutXml property value. Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
     * @return StreamInterface|null
    */
    public function getStartMenuLayoutXml(): ?StreamInterface {
        $val = $this->getBackingStore()->get('startMenuLayoutXml');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuLayoutXml'");
    }

    /**
     * Gets the startMenuMode property value. Type of display modes for the start menu.
     * @return WindowsStartMenuModeType|null
    */
    public function getStartMenuMode(): ?WindowsStartMenuModeType {
        $val = $this->getBackingStore()->get('startMenuMode');
        if (is_null($val) || $val instanceof WindowsStartMenuModeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuMode'");
    }

    /**
     * Gets the startMenuPinnedFolderDocuments property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderDocuments(): ?VisibilitySetting {
        $val = $this->getBackingStore()->get('startMenuPinnedFolderDocuments');
        if (is_null($val) || $val instanceof VisibilitySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuPinnedFolderDocuments'");
    }

    /**
     * Gets the startMenuPinnedFolderDownloads property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderDownloads(): ?VisibilitySetting {
        $val = $this->getBackingStore()->get('startMenuPinnedFolderDownloads');
        if (is_null($val) || $val instanceof VisibilitySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuPinnedFolderDownloads'");
    }

    /**
     * Gets the startMenuPinnedFolderFileExplorer property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderFileExplorer(): ?VisibilitySetting {
        $val = $this->getBackingStore()->get('startMenuPinnedFolderFileExplorer');
        if (is_null($val) || $val instanceof VisibilitySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuPinnedFolderFileExplorer'");
    }

    /**
     * Gets the startMenuPinnedFolderHomeGroup property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderHomeGroup(): ?VisibilitySetting {
        $val = $this->getBackingStore()->get('startMenuPinnedFolderHomeGroup');
        if (is_null($val) || $val instanceof VisibilitySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuPinnedFolderHomeGroup'");
    }

    /**
     * Gets the startMenuPinnedFolderMusic property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderMusic(): ?VisibilitySetting {
        $val = $this->getBackingStore()->get('startMenuPinnedFolderMusic');
        if (is_null($val) || $val instanceof VisibilitySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuPinnedFolderMusic'");
    }

    /**
     * Gets the startMenuPinnedFolderNetwork property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderNetwork(): ?VisibilitySetting {
        $val = $this->getBackingStore()->get('startMenuPinnedFolderNetwork');
        if (is_null($val) || $val instanceof VisibilitySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuPinnedFolderNetwork'");
    }

    /**
     * Gets the startMenuPinnedFolderPersonalFolder property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderPersonalFolder(): ?VisibilitySetting {
        $val = $this->getBackingStore()->get('startMenuPinnedFolderPersonalFolder');
        if (is_null($val) || $val instanceof VisibilitySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuPinnedFolderPersonalFolder'");
    }

    /**
     * Gets the startMenuPinnedFolderPictures property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderPictures(): ?VisibilitySetting {
        $val = $this->getBackingStore()->get('startMenuPinnedFolderPictures');
        if (is_null($val) || $val instanceof VisibilitySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuPinnedFolderPictures'");
    }

    /**
     * Gets the startMenuPinnedFolderSettings property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderSettings(): ?VisibilitySetting {
        $val = $this->getBackingStore()->get('startMenuPinnedFolderSettings');
        if (is_null($val) || $val instanceof VisibilitySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuPinnedFolderSettings'");
    }

    /**
     * Gets the startMenuPinnedFolderVideos property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderVideos(): ?VisibilitySetting {
        $val = $this->getBackingStore()->get('startMenuPinnedFolderVideos');
        if (is_null($val) || $val instanceof VisibilitySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuPinnedFolderVideos'");
    }

    /**
     * Gets the storageBlockRemovableStorage property value. Indicates whether or not to Block the user from using removable storage.
     * @return bool|null
    */
    public function getStorageBlockRemovableStorage(): ?bool {
        $val = $this->getBackingStore()->get('storageBlockRemovableStorage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageBlockRemovableStorage'");
    }

    /**
     * Gets the storageRequireMobileDeviceEncryption property value. Indicating whether or not to require encryption on a mobile device.
     * @return bool|null
    */
    public function getStorageRequireMobileDeviceEncryption(): ?bool {
        $val = $this->getBackingStore()->get('storageRequireMobileDeviceEncryption');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageRequireMobileDeviceEncryption'");
    }

    /**
     * Gets the storageRestrictAppDataToSystemVolume property value. Indicates whether application data is restricted to the system drive.
     * @return bool|null
    */
    public function getStorageRestrictAppDataToSystemVolume(): ?bool {
        $val = $this->getBackingStore()->get('storageRestrictAppDataToSystemVolume');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageRestrictAppDataToSystemVolume'");
    }

    /**
     * Gets the storageRestrictAppInstallToSystemVolume property value. Indicates whether the installation of applications is restricted to the system drive.
     * @return bool|null
    */
    public function getStorageRestrictAppInstallToSystemVolume(): ?bool {
        $val = $this->getBackingStore()->get('storageRestrictAppInstallToSystemVolume');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageRestrictAppInstallToSystemVolume'");
    }

    /**
     * Gets the tenantLockdownRequireNetworkDuringOutOfBoxExperience property value. Whether the device is required to connect to the network.
     * @return bool|null
    */
    public function getTenantLockdownRequireNetworkDuringOutOfBoxExperience(): ?bool {
        $val = $this->getBackingStore()->get('tenantLockdownRequireNetworkDuringOutOfBoxExperience');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantLockdownRequireNetworkDuringOutOfBoxExperience'");
    }

    /**
     * Gets the usbBlocked property value. Indicates whether or not to Block the user from USB connection.
     * @return bool|null
    */
    public function getUsbBlocked(): ?bool {
        $val = $this->getBackingStore()->get('usbBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usbBlocked'");
    }

    /**
     * Gets the voiceRecordingBlocked property value. Indicates whether or not to Block the user from voice recording.
     * @return bool|null
    */
    public function getVoiceRecordingBlocked(): ?bool {
        $val = $this->getBackingStore()->get('voiceRecordingBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'voiceRecordingBlocked'");
    }

    /**
     * Gets the webRtcBlockLocalhostIpAddress property value. Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
     * @return bool|null
    */
    public function getWebRtcBlockLocalhostIpAddress(): ?bool {
        $val = $this->getBackingStore()->get('webRtcBlockLocalhostIpAddress');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webRtcBlockLocalhostIpAddress'");
    }

    /**
     * Gets the wiFiBlockAutomaticConnectHotspots property value. Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     * @return bool|null
    */
    public function getWiFiBlockAutomaticConnectHotspots(): ?bool {
        $val = $this->getBackingStore()->get('wiFiBlockAutomaticConnectHotspots');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wiFiBlockAutomaticConnectHotspots'");
    }

    /**
     * Gets the wiFiBlocked property value. Indicates whether or not to Block the user from using Wi-Fi.
     * @return bool|null
    */
    public function getWiFiBlocked(): ?bool {
        $val = $this->getBackingStore()->get('wiFiBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wiFiBlocked'");
    }

    /**
     * Gets the wiFiBlockManualConfiguration property value. Indicates whether or not to Block the user from using Wi-Fi manual configuration.
     * @return bool|null
    */
    public function getWiFiBlockManualConfiguration(): ?bool {
        $val = $this->getBackingStore()->get('wiFiBlockManualConfiguration');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wiFiBlockManualConfiguration'");
    }

    /**
     * Gets the wiFiScanInterval property value. Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
     * @return int|null
    */
    public function getWiFiScanInterval(): ?int {
        $val = $this->getBackingStore()->get('wiFiScanInterval');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wiFiScanInterval'");
    }

    /**
     * Gets the windowsSpotlightBlockConsumerSpecificFeatures property value. Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
     * @return bool|null
    */
    public function getWindowsSpotlightBlockConsumerSpecificFeatures(): ?bool {
        $val = $this->getBackingStore()->get('windowsSpotlightBlockConsumerSpecificFeatures');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsSpotlightBlockConsumerSpecificFeatures'");
    }

    /**
     * Gets the windowsSpotlightBlocked property value. Allows IT admins to turn off all Windows Spotlight features
     * @return bool|null
    */
    public function getWindowsSpotlightBlocked(): ?bool {
        $val = $this->getBackingStore()->get('windowsSpotlightBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsSpotlightBlocked'");
    }

    /**
     * Gets the windowsSpotlightBlockOnActionCenter property value. Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
     * @return bool|null
    */
    public function getWindowsSpotlightBlockOnActionCenter(): ?bool {
        $val = $this->getBackingStore()->get('windowsSpotlightBlockOnActionCenter');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsSpotlightBlockOnActionCenter'");
    }

    /**
     * Gets the windowsSpotlightBlockTailoredExperiences property value. Block personalized content in Windows spotlight based on user’s device usage.
     * @return bool|null
    */
    public function getWindowsSpotlightBlockTailoredExperiences(): ?bool {
        $val = $this->getBackingStore()->get('windowsSpotlightBlockTailoredExperiences');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsSpotlightBlockTailoredExperiences'");
    }

    /**
     * Gets the windowsSpotlightBlockThirdPartyNotifications property value. Block third party content delivered via Windows Spotlight
     * @return bool|null
    */
    public function getWindowsSpotlightBlockThirdPartyNotifications(): ?bool {
        $val = $this->getBackingStore()->get('windowsSpotlightBlockThirdPartyNotifications');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsSpotlightBlockThirdPartyNotifications'");
    }

    /**
     * Gets the windowsSpotlightBlockWelcomeExperience property value. Block Windows Spotlight Windows welcome experience
     * @return bool|null
    */
    public function getWindowsSpotlightBlockWelcomeExperience(): ?bool {
        $val = $this->getBackingStore()->get('windowsSpotlightBlockWelcomeExperience');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsSpotlightBlockWelcomeExperience'");
    }

    /**
     * Gets the windowsSpotlightBlockWindowsTips property value. Allows IT admins to turn off the popup of Windows Tips.
     * @return bool|null
    */
    public function getWindowsSpotlightBlockWindowsTips(): ?bool {
        $val = $this->getBackingStore()->get('windowsSpotlightBlockWindowsTips');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsSpotlightBlockWindowsTips'");
    }

    /**
     * Gets the windowsSpotlightConfigureOnLockScreen property value. Allows IT admind to set a predefined default search engine for MDM-Controlled devices
     * @return WindowsSpotlightEnablementSettings|null
    */
    public function getWindowsSpotlightConfigureOnLockScreen(): ?WindowsSpotlightEnablementSettings {
        $val = $this->getBackingStore()->get('windowsSpotlightConfigureOnLockScreen');
        if (is_null($val) || $val instanceof WindowsSpotlightEnablementSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsSpotlightConfigureOnLockScreen'");
    }

    /**
     * Gets the windowsStoreBlockAutoUpdate property value. Indicates whether or not to block automatic update of apps from Windows Store.
     * @return bool|null
    */
    public function getWindowsStoreBlockAutoUpdate(): ?bool {
        $val = $this->getBackingStore()->get('windowsStoreBlockAutoUpdate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsStoreBlockAutoUpdate'");
    }

    /**
     * Gets the windowsStoreBlocked property value. Indicates whether or not to Block the user from using the Windows store.
     * @return bool|null
    */
    public function getWindowsStoreBlocked(): ?bool {
        $val = $this->getBackingStore()->get('windowsStoreBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsStoreBlocked'");
    }

    /**
     * Gets the windowsStoreEnablePrivateStoreOnly property value. Indicates whether or not to enable Private Store Only.
     * @return bool|null
    */
    public function getWindowsStoreEnablePrivateStoreOnly(): ?bool {
        $val = $this->getBackingStore()->get('windowsStoreEnablePrivateStoreOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsStoreEnablePrivateStoreOnly'");
    }

    /**
     * Gets the wirelessDisplayBlockProjectionToThisDevice property value. Indicates whether or not to allow other devices from discovering this PC for projection.
     * @return bool|null
    */
    public function getWirelessDisplayBlockProjectionToThisDevice(): ?bool {
        $val = $this->getBackingStore()->get('wirelessDisplayBlockProjectionToThisDevice');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wirelessDisplayBlockProjectionToThisDevice'");
    }

    /**
     * Gets the wirelessDisplayBlockUserInputFromReceiver property value. Indicates whether or not to allow user input from wireless display receiver.
     * @return bool|null
    */
    public function getWirelessDisplayBlockUserInputFromReceiver(): ?bool {
        $val = $this->getBackingStore()->get('wirelessDisplayBlockUserInputFromReceiver');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wirelessDisplayBlockUserInputFromReceiver'");
    }

    /**
     * Gets the wirelessDisplayRequirePinForPairing property value. Indicates whether or not to require a PIN for new devices to initiate pairing.
     * @return bool|null
    */
    public function getWirelessDisplayRequirePinForPairing(): ?bool {
        $val = $this->getBackingStore()->get('wirelessDisplayRequirePinForPairing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wirelessDisplayRequirePinForPairing'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountsBlockAddingNonMicrosoftAccountEmail', $this->getAccountsBlockAddingNonMicrosoftAccountEmail());
        $writer->writeBooleanValue('antiTheftModeBlocked', $this->getAntiTheftModeBlocked());
        $writer->writeEnumValue('appsAllowTrustedAppsSideloading', $this->getAppsAllowTrustedAppsSideloading());
        $writer->writeBooleanValue('appsBlockWindowsStoreOriginatedApps', $this->getAppsBlockWindowsStoreOriginatedApps());
        $writer->writeCollectionOfPrimitiveValues('bluetoothAllowedServices', $this->getBluetoothAllowedServices());
        $writer->writeBooleanValue('bluetoothBlockAdvertising', $this->getBluetoothBlockAdvertising());
        $writer->writeBooleanValue('bluetoothBlockDiscoverableMode', $this->getBluetoothBlockDiscoverableMode());
        $writer->writeBooleanValue('bluetoothBlocked', $this->getBluetoothBlocked());
        $writer->writeBooleanValue('bluetoothBlockPrePairing', $this->getBluetoothBlockPrePairing());
        $writer->writeBooleanValue('cameraBlocked', $this->getCameraBlocked());
        $writer->writeBooleanValue('cellularBlockDataWhenRoaming', $this->getCellularBlockDataWhenRoaming());
        $writer->writeBooleanValue('cellularBlockVpn', $this->getCellularBlockVpn());
        $writer->writeBooleanValue('cellularBlockVpnWhenRoaming', $this->getCellularBlockVpnWhenRoaming());
        $writer->writeBooleanValue('certificatesBlockManualRootCertificateInstallation', $this->getCertificatesBlockManualRootCertificateInstallation());
        $writer->writeBooleanValue('connectedDevicesServiceBlocked', $this->getConnectedDevicesServiceBlocked());
        $writer->writeBooleanValue('copyPasteBlocked', $this->getCopyPasteBlocked());
        $writer->writeBooleanValue('cortanaBlocked', $this->getCortanaBlocked());
        $writer->writeBooleanValue('defenderBlockEndUserAccess', $this->getDefenderBlockEndUserAccess());
        $writer->writeEnumValue('defenderCloudBlockLevel', $this->getDefenderCloudBlockLevel());
        $writer->writeIntegerValue('defenderDaysBeforeDeletingQuarantinedMalware', $this->getDefenderDaysBeforeDeletingQuarantinedMalware());
        $writer->writeObjectValue('defenderDetectedMalwareActions', $this->getDefenderDetectedMalwareActions());
        $writer->writeCollectionOfPrimitiveValues('defenderFileExtensionsToExclude', $this->getDefenderFileExtensionsToExclude());
        $writer->writeCollectionOfPrimitiveValues('defenderFilesAndFoldersToExclude', $this->getDefenderFilesAndFoldersToExclude());
        $writer->writeEnumValue('defenderMonitorFileActivity', $this->getDefenderMonitorFileActivity());
        $writer->writeCollectionOfPrimitiveValues('defenderProcessesToExclude', $this->getDefenderProcessesToExclude());
        $writer->writeEnumValue('defenderPromptForSampleSubmission', $this->getDefenderPromptForSampleSubmission());
        $writer->writeBooleanValue('defenderRequireBehaviorMonitoring', $this->getDefenderRequireBehaviorMonitoring());
        $writer->writeBooleanValue('defenderRequireCloudProtection', $this->getDefenderRequireCloudProtection());
        $writer->writeBooleanValue('defenderRequireNetworkInspectionSystem', $this->getDefenderRequireNetworkInspectionSystem());
        $writer->writeBooleanValue('defenderRequireRealTimeMonitoring', $this->getDefenderRequireRealTimeMonitoring());
        $writer->writeBooleanValue('defenderScanArchiveFiles', $this->getDefenderScanArchiveFiles());
        $writer->writeBooleanValue('defenderScanDownloads', $this->getDefenderScanDownloads());
        $writer->writeBooleanValue('defenderScanIncomingMail', $this->getDefenderScanIncomingMail());
        $writer->writeBooleanValue('defenderScanMappedNetworkDrivesDuringFullScan', $this->getDefenderScanMappedNetworkDrivesDuringFullScan());
        $writer->writeIntegerValue('defenderScanMaxCpu', $this->getDefenderScanMaxCpu());
        $writer->writeBooleanValue('defenderScanNetworkFiles', $this->getDefenderScanNetworkFiles());
        $writer->writeBooleanValue('defenderScanRemovableDrivesDuringFullScan', $this->getDefenderScanRemovableDrivesDuringFullScan());
        $writer->writeBooleanValue('defenderScanScriptsLoadedInInternetExplorer', $this->getDefenderScanScriptsLoadedInInternetExplorer());
        $writer->writeEnumValue('defenderScanType', $this->getDefenderScanType());
        $writer->writeTimeValue('defenderScheduledQuickScanTime', $this->getDefenderScheduledQuickScanTime());
        $writer->writeTimeValue('defenderScheduledScanTime', $this->getDefenderScheduledScanTime());
        $writer->writeIntegerValue('defenderSignatureUpdateIntervalInHours', $this->getDefenderSignatureUpdateIntervalInHours());
        $writer->writeEnumValue('defenderSystemScanSchedule', $this->getDefenderSystemScanSchedule());
        $writer->writeEnumValue('developerUnlockSetting', $this->getDeveloperUnlockSetting());
        $writer->writeBooleanValue('deviceManagementBlockFactoryResetOnMobile', $this->getDeviceManagementBlockFactoryResetOnMobile());
        $writer->writeBooleanValue('deviceManagementBlockManualUnenroll', $this->getDeviceManagementBlockManualUnenroll());
        $writer->writeEnumValue('diagnosticsDataSubmissionMode', $this->getDiagnosticsDataSubmissionMode());
        $writer->writeBooleanValue('edgeAllowStartPagesModification', $this->getEdgeAllowStartPagesModification());
        $writer->writeBooleanValue('edgeBlockAccessToAboutFlags', $this->getEdgeBlockAccessToAboutFlags());
        $writer->writeBooleanValue('edgeBlockAddressBarDropdown', $this->getEdgeBlockAddressBarDropdown());
        $writer->writeBooleanValue('edgeBlockAutofill', $this->getEdgeBlockAutofill());
        $writer->writeBooleanValue('edgeBlockCompatibilityList', $this->getEdgeBlockCompatibilityList());
        $writer->writeBooleanValue('edgeBlockDeveloperTools', $this->getEdgeBlockDeveloperTools());
        $writer->writeBooleanValue('edgeBlocked', $this->getEdgeBlocked());
        $writer->writeBooleanValue('edgeBlockExtensions', $this->getEdgeBlockExtensions());
        $writer->writeBooleanValue('edgeBlockInPrivateBrowsing', $this->getEdgeBlockInPrivateBrowsing());
        $writer->writeBooleanValue('edgeBlockJavaScript', $this->getEdgeBlockJavaScript());
        $writer->writeBooleanValue('edgeBlockLiveTileDataCollection', $this->getEdgeBlockLiveTileDataCollection());
        $writer->writeBooleanValue('edgeBlockPasswordManager', $this->getEdgeBlockPasswordManager());
        $writer->writeBooleanValue('edgeBlockPopups', $this->getEdgeBlockPopups());
        $writer->writeBooleanValue('edgeBlockSearchSuggestions', $this->getEdgeBlockSearchSuggestions());
        $writer->writeBooleanValue('edgeBlockSendingDoNotTrackHeader', $this->getEdgeBlockSendingDoNotTrackHeader());
        $writer->writeBooleanValue('edgeBlockSendingIntranetTrafficToInternetExplorer', $this->getEdgeBlockSendingIntranetTrafficToInternetExplorer());
        $writer->writeBooleanValue('edgeClearBrowsingDataOnExit', $this->getEdgeClearBrowsingDataOnExit());
        $writer->writeEnumValue('edgeCookiePolicy', $this->getEdgeCookiePolicy());
        $writer->writeBooleanValue('edgeDisableFirstRunPage', $this->getEdgeDisableFirstRunPage());
        $writer->writeStringValue('edgeEnterpriseModeSiteListLocation', $this->getEdgeEnterpriseModeSiteListLocation());
        $writer->writeStringValue('edgeFirstRunUrl', $this->getEdgeFirstRunUrl());
        $writer->writeCollectionOfPrimitiveValues('edgeHomepageUrls', $this->getEdgeHomepageUrls());
        $writer->writeBooleanValue('edgeRequireSmartScreen', $this->getEdgeRequireSmartScreen());
        $writer->writeObjectValue('edgeSearchEngine', $this->getEdgeSearchEngine());
        $writer->writeBooleanValue('edgeSendIntranetTrafficToInternetExplorer', $this->getEdgeSendIntranetTrafficToInternetExplorer());
        $writer->writeBooleanValue('edgeSyncFavoritesWithInternetExplorer', $this->getEdgeSyncFavoritesWithInternetExplorer());
        $writer->writeStringValue('enterpriseCloudPrintDiscoveryEndPoint', $this->getEnterpriseCloudPrintDiscoveryEndPoint());
        $writer->writeIntegerValue('enterpriseCloudPrintDiscoveryMaxLimit', $this->getEnterpriseCloudPrintDiscoveryMaxLimit());
        $writer->writeStringValue('enterpriseCloudPrintMopriaDiscoveryResourceIdentifier', $this->getEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier());
        $writer->writeStringValue('enterpriseCloudPrintOAuthAuthority', $this->getEnterpriseCloudPrintOAuthAuthority());
        $writer->writeStringValue('enterpriseCloudPrintOAuthClientIdentifier', $this->getEnterpriseCloudPrintOAuthClientIdentifier());
        $writer->writeStringValue('enterpriseCloudPrintResourceIdentifier', $this->getEnterpriseCloudPrintResourceIdentifier());
        $writer->writeBooleanValue('experienceBlockDeviceDiscovery', $this->getExperienceBlockDeviceDiscovery());
        $writer->writeBooleanValue('experienceBlockErrorDialogWhenNoSIM', $this->getExperienceBlockErrorDialogWhenNoSIM());
        $writer->writeBooleanValue('experienceBlockTaskSwitcher', $this->getExperienceBlockTaskSwitcher());
        $writer->writeBooleanValue('gameDvrBlocked', $this->getGameDvrBlocked());
        $writer->writeBooleanValue('internetSharingBlocked', $this->getInternetSharingBlocked());
        $writer->writeBooleanValue('locationServicesBlocked', $this->getLocationServicesBlocked());
        $writer->writeBooleanValue('lockScreenAllowTimeoutConfiguration', $this->getLockScreenAllowTimeoutConfiguration());
        $writer->writeBooleanValue('lockScreenBlockActionCenterNotifications', $this->getLockScreenBlockActionCenterNotifications());
        $writer->writeBooleanValue('lockScreenBlockCortana', $this->getLockScreenBlockCortana());
        $writer->writeBooleanValue('lockScreenBlockToastNotifications', $this->getLockScreenBlockToastNotifications());
        $writer->writeIntegerValue('lockScreenTimeoutInSeconds', $this->getLockScreenTimeoutInSeconds());
        $writer->writeBooleanValue('logonBlockFastUserSwitching', $this->getLogonBlockFastUserSwitching());
        $writer->writeBooleanValue('microsoftAccountBlocked', $this->getMicrosoftAccountBlocked());
        $writer->writeBooleanValue('microsoftAccountBlockSettingsSync', $this->getMicrosoftAccountBlockSettingsSync());
        $writer->writeBooleanValue('networkProxyApplySettingsDeviceWide', $this->getNetworkProxyApplySettingsDeviceWide());
        $writer->writeStringValue('networkProxyAutomaticConfigurationUrl', $this->getNetworkProxyAutomaticConfigurationUrl());
        $writer->writeBooleanValue('networkProxyDisableAutoDetect', $this->getNetworkProxyDisableAutoDetect());
        $writer->writeObjectValue('networkProxyServer', $this->getNetworkProxyServer());
        $writer->writeBooleanValue('nfcBlocked', $this->getNfcBlocked());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('oneDriveDisableFileSync', $this->getOneDriveDisableFileSync());
        $writer->writeBooleanValue('passwordBlockSimple', $this->getPasswordBlockSimple());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->getPasswordMinimumCharacterSetCount());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->getPasswordMinutesOfInactivityBeforeScreenTimeout());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeBooleanValue('passwordRequired', $this->getPasswordRequired());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeBooleanValue('passwordRequireWhenResumeFromIdleState', $this->getPasswordRequireWhenResumeFromIdleState());
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->getPasswordSignInFailureCountBeforeFactoryReset());
        $writer->writeStringValue('personalizationDesktopImageUrl', $this->getPersonalizationDesktopImageUrl());
        $writer->writeStringValue('personalizationLockScreenImageUrl', $this->getPersonalizationLockScreenImageUrl());
        $writer->writeEnumValue('privacyAdvertisingId', $this->getPrivacyAdvertisingId());
        $writer->writeBooleanValue('privacyAutoAcceptPairingAndConsentPrompts', $this->getPrivacyAutoAcceptPairingAndConsentPrompts());
        $writer->writeBooleanValue('privacyBlockInputPersonalization', $this->getPrivacyBlockInputPersonalization());
        $writer->writeBooleanValue('resetProtectionModeBlocked', $this->getResetProtectionModeBlocked());
        $writer->writeEnumValue('safeSearchFilter', $this->getSafeSearchFilter());
        $writer->writeBooleanValue('screenCaptureBlocked', $this->getScreenCaptureBlocked());
        $writer->writeBooleanValue('searchBlockDiacritics', $this->getSearchBlockDiacritics());
        $writer->writeBooleanValue('searchDisableAutoLanguageDetection', $this->getSearchDisableAutoLanguageDetection());
        $writer->writeBooleanValue('searchDisableIndexerBackoff', $this->getSearchDisableIndexerBackoff());
        $writer->writeBooleanValue('searchDisableIndexingEncryptedItems', $this->getSearchDisableIndexingEncryptedItems());
        $writer->writeBooleanValue('searchDisableIndexingRemovableDrive', $this->getSearchDisableIndexingRemovableDrive());
        $writer->writeBooleanValue('searchEnableAutomaticIndexSizeManangement', $this->getSearchEnableAutomaticIndexSizeManangement());
        $writer->writeBooleanValue('searchEnableRemoteQueries', $this->getSearchEnableRemoteQueries());
        $writer->writeBooleanValue('settingsBlockAccountsPage', $this->getSettingsBlockAccountsPage());
        $writer->writeBooleanValue('settingsBlockAddProvisioningPackage', $this->getSettingsBlockAddProvisioningPackage());
        $writer->writeBooleanValue('settingsBlockAppsPage', $this->getSettingsBlockAppsPage());
        $writer->writeBooleanValue('settingsBlockChangeLanguage', $this->getSettingsBlockChangeLanguage());
        $writer->writeBooleanValue('settingsBlockChangePowerSleep', $this->getSettingsBlockChangePowerSleep());
        $writer->writeBooleanValue('settingsBlockChangeRegion', $this->getSettingsBlockChangeRegion());
        $writer->writeBooleanValue('settingsBlockChangeSystemTime', $this->getSettingsBlockChangeSystemTime());
        $writer->writeBooleanValue('settingsBlockDevicesPage', $this->getSettingsBlockDevicesPage());
        $writer->writeBooleanValue('settingsBlockEaseOfAccessPage', $this->getSettingsBlockEaseOfAccessPage());
        $writer->writeBooleanValue('settingsBlockEditDeviceName', $this->getSettingsBlockEditDeviceName());
        $writer->writeBooleanValue('settingsBlockGamingPage', $this->getSettingsBlockGamingPage());
        $writer->writeBooleanValue('settingsBlockNetworkInternetPage', $this->getSettingsBlockNetworkInternetPage());
        $writer->writeBooleanValue('settingsBlockPersonalizationPage', $this->getSettingsBlockPersonalizationPage());
        $writer->writeBooleanValue('settingsBlockPrivacyPage', $this->getSettingsBlockPrivacyPage());
        $writer->writeBooleanValue('settingsBlockRemoveProvisioningPackage', $this->getSettingsBlockRemoveProvisioningPackage());
        $writer->writeBooleanValue('settingsBlockSettingsApp', $this->getSettingsBlockSettingsApp());
        $writer->writeBooleanValue('settingsBlockSystemPage', $this->getSettingsBlockSystemPage());
        $writer->writeBooleanValue('settingsBlockTimeLanguagePage', $this->getSettingsBlockTimeLanguagePage());
        $writer->writeBooleanValue('settingsBlockUpdateSecurityPage', $this->getSettingsBlockUpdateSecurityPage());
        $writer->writeBooleanValue('sharedUserAppDataAllowed', $this->getSharedUserAppDataAllowed());
        $writer->writeBooleanValue('smartScreenBlockPromptOverride', $this->getSmartScreenBlockPromptOverride());
        $writer->writeBooleanValue('smartScreenBlockPromptOverrideForFiles', $this->getSmartScreenBlockPromptOverrideForFiles());
        $writer->writeBooleanValue('smartScreenEnableAppInstallControl', $this->getSmartScreenEnableAppInstallControl());
        $writer->writeBooleanValue('startBlockUnpinningAppsFromTaskbar', $this->getStartBlockUnpinningAppsFromTaskbar());
        $writer->writeEnumValue('startMenuAppListVisibility', $this->getStartMenuAppListVisibility());
        $writer->writeBooleanValue('startMenuHideChangeAccountSettings', $this->getStartMenuHideChangeAccountSettings());
        $writer->writeBooleanValue('startMenuHideFrequentlyUsedApps', $this->getStartMenuHideFrequentlyUsedApps());
        $writer->writeBooleanValue('startMenuHideHibernate', $this->getStartMenuHideHibernate());
        $writer->writeBooleanValue('startMenuHideLock', $this->getStartMenuHideLock());
        $writer->writeBooleanValue('startMenuHidePowerButton', $this->getStartMenuHidePowerButton());
        $writer->writeBooleanValue('startMenuHideRecentJumpLists', $this->getStartMenuHideRecentJumpLists());
        $writer->writeBooleanValue('startMenuHideRecentlyAddedApps', $this->getStartMenuHideRecentlyAddedApps());
        $writer->writeBooleanValue('startMenuHideRestartOptions', $this->getStartMenuHideRestartOptions());
        $writer->writeBooleanValue('startMenuHideShutDown', $this->getStartMenuHideShutDown());
        $writer->writeBooleanValue('startMenuHideSignOut', $this->getStartMenuHideSignOut());
        $writer->writeBooleanValue('startMenuHideSleep', $this->getStartMenuHideSleep());
        $writer->writeBooleanValue('startMenuHideSwitchAccount', $this->getStartMenuHideSwitchAccount());
        $writer->writeBooleanValue('startMenuHideUserTile', $this->getStartMenuHideUserTile());
        $writer->writeBinaryContent('startMenuLayoutEdgeAssetsXml', $this->getStartMenuLayoutEdgeAssetsXml());
        $writer->writeBinaryContent('startMenuLayoutXml', $this->getStartMenuLayoutXml());
        $writer->writeEnumValue('startMenuMode', $this->getStartMenuMode());
        $writer->writeEnumValue('startMenuPinnedFolderDocuments', $this->getStartMenuPinnedFolderDocuments());
        $writer->writeEnumValue('startMenuPinnedFolderDownloads', $this->getStartMenuPinnedFolderDownloads());
        $writer->writeEnumValue('startMenuPinnedFolderFileExplorer', $this->getStartMenuPinnedFolderFileExplorer());
        $writer->writeEnumValue('startMenuPinnedFolderHomeGroup', $this->getStartMenuPinnedFolderHomeGroup());
        $writer->writeEnumValue('startMenuPinnedFolderMusic', $this->getStartMenuPinnedFolderMusic());
        $writer->writeEnumValue('startMenuPinnedFolderNetwork', $this->getStartMenuPinnedFolderNetwork());
        $writer->writeEnumValue('startMenuPinnedFolderPersonalFolder', $this->getStartMenuPinnedFolderPersonalFolder());
        $writer->writeEnumValue('startMenuPinnedFolderPictures', $this->getStartMenuPinnedFolderPictures());
        $writer->writeEnumValue('startMenuPinnedFolderSettings', $this->getStartMenuPinnedFolderSettings());
        $writer->writeEnumValue('startMenuPinnedFolderVideos', $this->getStartMenuPinnedFolderVideos());
        $writer->writeBooleanValue('storageBlockRemovableStorage', $this->getStorageBlockRemovableStorage());
        $writer->writeBooleanValue('storageRequireMobileDeviceEncryption', $this->getStorageRequireMobileDeviceEncryption());
        $writer->writeBooleanValue('storageRestrictAppDataToSystemVolume', $this->getStorageRestrictAppDataToSystemVolume());
        $writer->writeBooleanValue('storageRestrictAppInstallToSystemVolume', $this->getStorageRestrictAppInstallToSystemVolume());
        $writer->writeBooleanValue('tenantLockdownRequireNetworkDuringOutOfBoxExperience', $this->getTenantLockdownRequireNetworkDuringOutOfBoxExperience());
        $writer->writeBooleanValue('usbBlocked', $this->getUsbBlocked());
        $writer->writeBooleanValue('voiceRecordingBlocked', $this->getVoiceRecordingBlocked());
        $writer->writeBooleanValue('webRtcBlockLocalhostIpAddress', $this->getWebRtcBlockLocalhostIpAddress());
        $writer->writeBooleanValue('wiFiBlockAutomaticConnectHotspots', $this->getWiFiBlockAutomaticConnectHotspots());
        $writer->writeBooleanValue('wiFiBlocked', $this->getWiFiBlocked());
        $writer->writeBooleanValue('wiFiBlockManualConfiguration', $this->getWiFiBlockManualConfiguration());
        $writer->writeIntegerValue('wiFiScanInterval', $this->getWiFiScanInterval());
        $writer->writeBooleanValue('windowsSpotlightBlockConsumerSpecificFeatures', $this->getWindowsSpotlightBlockConsumerSpecificFeatures());
        $writer->writeBooleanValue('windowsSpotlightBlocked', $this->getWindowsSpotlightBlocked());
        $writer->writeBooleanValue('windowsSpotlightBlockOnActionCenter', $this->getWindowsSpotlightBlockOnActionCenter());
        $writer->writeBooleanValue('windowsSpotlightBlockTailoredExperiences', $this->getWindowsSpotlightBlockTailoredExperiences());
        $writer->writeBooleanValue('windowsSpotlightBlockThirdPartyNotifications', $this->getWindowsSpotlightBlockThirdPartyNotifications());
        $writer->writeBooleanValue('windowsSpotlightBlockWelcomeExperience', $this->getWindowsSpotlightBlockWelcomeExperience());
        $writer->writeBooleanValue('windowsSpotlightBlockWindowsTips', $this->getWindowsSpotlightBlockWindowsTips());
        $writer->writeEnumValue('windowsSpotlightConfigureOnLockScreen', $this->getWindowsSpotlightConfigureOnLockScreen());
        $writer->writeBooleanValue('windowsStoreBlockAutoUpdate', $this->getWindowsStoreBlockAutoUpdate());
        $writer->writeBooleanValue('windowsStoreBlocked', $this->getWindowsStoreBlocked());
        $writer->writeBooleanValue('windowsStoreEnablePrivateStoreOnly', $this->getWindowsStoreEnablePrivateStoreOnly());
        $writer->writeBooleanValue('wirelessDisplayBlockProjectionToThisDevice', $this->getWirelessDisplayBlockProjectionToThisDevice());
        $writer->writeBooleanValue('wirelessDisplayBlockUserInputFromReceiver', $this->getWirelessDisplayBlockUserInputFromReceiver());
        $writer->writeBooleanValue('wirelessDisplayRequirePinForPairing', $this->getWirelessDisplayRequirePinForPairing());
    }

    /**
     * Sets the accountsBlockAddingNonMicrosoftAccountEmail property value. Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
     * @param bool|null $value Value to set for the accountsBlockAddingNonMicrosoftAccountEmail property.
    */
    public function setAccountsBlockAddingNonMicrosoftAccountEmail(?bool $value): void {
        $this->getBackingStore()->set('accountsBlockAddingNonMicrosoftAccountEmail', $value);
    }

    /**
     * Sets the antiTheftModeBlocked property value. Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
     * @param bool|null $value Value to set for the antiTheftModeBlocked property.
    */
    public function setAntiTheftModeBlocked(?bool $value): void {
        $this->getBackingStore()->set('antiTheftModeBlocked', $value);
    }

    /**
     * Sets the appsAllowTrustedAppsSideloading property value. State Management Setting.
     * @param StateManagementSetting|null $value Value to set for the appsAllowTrustedAppsSideloading property.
    */
    public function setAppsAllowTrustedAppsSideloading(?StateManagementSetting $value): void {
        $this->getBackingStore()->set('appsAllowTrustedAppsSideloading', $value);
    }

    /**
     * Sets the appsBlockWindowsStoreOriginatedApps property value. Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
     * @param bool|null $value Value to set for the appsBlockWindowsStoreOriginatedApps property.
    */
    public function setAppsBlockWindowsStoreOriginatedApps(?bool $value): void {
        $this->getBackingStore()->set('appsBlockWindowsStoreOriginatedApps', $value);
    }

    /**
     * Sets the bluetoothAllowedServices property value. Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
     * @param array<string>|null $value Value to set for the bluetoothAllowedServices property.
    */
    public function setBluetoothAllowedServices(?array $value): void {
        $this->getBackingStore()->set('bluetoothAllowedServices', $value);
    }

    /**
     * Sets the bluetoothBlockAdvertising property value. Whether or not to Block the user from using bluetooth advertising.
     * @param bool|null $value Value to set for the bluetoothBlockAdvertising property.
    */
    public function setBluetoothBlockAdvertising(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlockAdvertising', $value);
    }

    /**
     * Sets the bluetoothBlockDiscoverableMode property value. Whether or not to Block the user from using bluetooth discoverable mode.
     * @param bool|null $value Value to set for the bluetoothBlockDiscoverableMode property.
    */
    public function setBluetoothBlockDiscoverableMode(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlockDiscoverableMode', $value);
    }

    /**
     * Sets the bluetoothBlocked property value. Whether or not to Block the user from using bluetooth.
     * @param bool|null $value Value to set for the bluetoothBlocked property.
    */
    public function setBluetoothBlocked(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlocked', $value);
    }

    /**
     * Sets the bluetoothBlockPrePairing property value. Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
     * @param bool|null $value Value to set for the bluetoothBlockPrePairing property.
    */
    public function setBluetoothBlockPrePairing(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlockPrePairing', $value);
    }

    /**
     * Sets the cameraBlocked property value. Whether or not to Block the user from accessing the camera of the device.
     * @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value): void {
        $this->getBackingStore()->set('cameraBlocked', $value);
    }

    /**
     * Sets the cellularBlockDataWhenRoaming property value. Whether or not to Block the user from using data over cellular while roaming.
     * @param bool|null $value Value to set for the cellularBlockDataWhenRoaming property.
    */
    public function setCellularBlockDataWhenRoaming(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockDataWhenRoaming', $value);
    }

    /**
     * Sets the cellularBlockVpn property value. Whether or not to Block the user from using VPN over cellular.
     * @param bool|null $value Value to set for the cellularBlockVpn property.
    */
    public function setCellularBlockVpn(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockVpn', $value);
    }

    /**
     * Sets the cellularBlockVpnWhenRoaming property value. Whether or not to Block the user from using VPN when roaming over cellular.
     * @param bool|null $value Value to set for the cellularBlockVpnWhenRoaming property.
    */
    public function setCellularBlockVpnWhenRoaming(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockVpnWhenRoaming', $value);
    }

    /**
     * Sets the certificatesBlockManualRootCertificateInstallation property value. Whether or not to Block the user from doing manual root certificate installation.
     * @param bool|null $value Value to set for the certificatesBlockManualRootCertificateInstallation property.
    */
    public function setCertificatesBlockManualRootCertificateInstallation(?bool $value): void {
        $this->getBackingStore()->set('certificatesBlockManualRootCertificateInstallation', $value);
    }

    /**
     * Sets the connectedDevicesServiceBlocked property value. Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
     * @param bool|null $value Value to set for the connectedDevicesServiceBlocked property.
    */
    public function setConnectedDevicesServiceBlocked(?bool $value): void {
        $this->getBackingStore()->set('connectedDevicesServiceBlocked', $value);
    }

    /**
     * Sets the copyPasteBlocked property value. Whether or not to Block the user from using copy paste.
     * @param bool|null $value Value to set for the copyPasteBlocked property.
    */
    public function setCopyPasteBlocked(?bool $value): void {
        $this->getBackingStore()->set('copyPasteBlocked', $value);
    }

    /**
     * Sets the cortanaBlocked property value. Whether or not to Block the user from using Cortana.
     * @param bool|null $value Value to set for the cortanaBlocked property.
    */
    public function setCortanaBlocked(?bool $value): void {
        $this->getBackingStore()->set('cortanaBlocked', $value);
    }

    /**
     * Sets the defenderBlockEndUserAccess property value. Whether or not to block end user access to Defender.
     * @param bool|null $value Value to set for the defenderBlockEndUserAccess property.
    */
    public function setDefenderBlockEndUserAccess(?bool $value): void {
        $this->getBackingStore()->set('defenderBlockEndUserAccess', $value);
    }

    /**
     * Sets the defenderCloudBlockLevel property value. Possible values of Cloud Block Level
     * @param DefenderCloudBlockLevelType|null $value Value to set for the defenderCloudBlockLevel property.
    */
    public function setDefenderCloudBlockLevel(?DefenderCloudBlockLevelType $value): void {
        $this->getBackingStore()->set('defenderCloudBlockLevel', $value);
    }

    /**
     * Sets the defenderDaysBeforeDeletingQuarantinedMalware property value. Number of days before deleting quarantined malware. Valid values 0 to 90
     * @param int|null $value Value to set for the defenderDaysBeforeDeletingQuarantinedMalware property.
    */
    public function setDefenderDaysBeforeDeletingQuarantinedMalware(?int $value): void {
        $this->getBackingStore()->set('defenderDaysBeforeDeletingQuarantinedMalware', $value);
    }

    /**
     * Sets the defenderDetectedMalwareActions property value. Gets or sets Defender’s actions to take on detected Malware per threat level.
     * @param DefenderDetectedMalwareActions|null $value Value to set for the defenderDetectedMalwareActions property.
    */
    public function setDefenderDetectedMalwareActions(?DefenderDetectedMalwareActions $value): void {
        $this->getBackingStore()->set('defenderDetectedMalwareActions', $value);
    }

    /**
     * Sets the defenderFileExtensionsToExclude property value. File extensions to exclude from scans and real time protection.
     * @param array<string>|null $value Value to set for the defenderFileExtensionsToExclude property.
    */
    public function setDefenderFileExtensionsToExclude(?array $value): void {
        $this->getBackingStore()->set('defenderFileExtensionsToExclude', $value);
    }

    /**
     * Sets the defenderFilesAndFoldersToExclude property value. Files and folder to exclude from scans and real time protection.
     * @param array<string>|null $value Value to set for the defenderFilesAndFoldersToExclude property.
    */
    public function setDefenderFilesAndFoldersToExclude(?array $value): void {
        $this->getBackingStore()->set('defenderFilesAndFoldersToExclude', $value);
    }

    /**
     * Sets the defenderMonitorFileActivity property value. Possible values for monitoring file activity.
     * @param DefenderMonitorFileActivity|null $value Value to set for the defenderMonitorFileActivity property.
    */
    public function setDefenderMonitorFileActivity(?DefenderMonitorFileActivity $value): void {
        $this->getBackingStore()->set('defenderMonitorFileActivity', $value);
    }

    /**
     * Sets the defenderProcessesToExclude property value. Processes to exclude from scans and real time protection.
     * @param array<string>|null $value Value to set for the defenderProcessesToExclude property.
    */
    public function setDefenderProcessesToExclude(?array $value): void {
        $this->getBackingStore()->set('defenderProcessesToExclude', $value);
    }

    /**
     * Sets the defenderPromptForSampleSubmission property value. Possible values for prompting user for samples submission.
     * @param DefenderPromptForSampleSubmission|null $value Value to set for the defenderPromptForSampleSubmission property.
    */
    public function setDefenderPromptForSampleSubmission(?DefenderPromptForSampleSubmission $value): void {
        $this->getBackingStore()->set('defenderPromptForSampleSubmission', $value);
    }

    /**
     * Sets the defenderRequireBehaviorMonitoring property value. Indicates whether or not to require behavior monitoring.
     * @param bool|null $value Value to set for the defenderRequireBehaviorMonitoring property.
    */
    public function setDefenderRequireBehaviorMonitoring(?bool $value): void {
        $this->getBackingStore()->set('defenderRequireBehaviorMonitoring', $value);
    }

    /**
     * Sets the defenderRequireCloudProtection property value. Indicates whether or not to require cloud protection.
     * @param bool|null $value Value to set for the defenderRequireCloudProtection property.
    */
    public function setDefenderRequireCloudProtection(?bool $value): void {
        $this->getBackingStore()->set('defenderRequireCloudProtection', $value);
    }

    /**
     * Sets the defenderRequireNetworkInspectionSystem property value. Indicates whether or not to require network inspection system.
     * @param bool|null $value Value to set for the defenderRequireNetworkInspectionSystem property.
    */
    public function setDefenderRequireNetworkInspectionSystem(?bool $value): void {
        $this->getBackingStore()->set('defenderRequireNetworkInspectionSystem', $value);
    }

    /**
     * Sets the defenderRequireRealTimeMonitoring property value. Indicates whether or not to require real time monitoring.
     * @param bool|null $value Value to set for the defenderRequireRealTimeMonitoring property.
    */
    public function setDefenderRequireRealTimeMonitoring(?bool $value): void {
        $this->getBackingStore()->set('defenderRequireRealTimeMonitoring', $value);
    }

    /**
     * Sets the defenderScanArchiveFiles property value. Indicates whether or not to scan archive files.
     * @param bool|null $value Value to set for the defenderScanArchiveFiles property.
    */
    public function setDefenderScanArchiveFiles(?bool $value): void {
        $this->getBackingStore()->set('defenderScanArchiveFiles', $value);
    }

    /**
     * Sets the defenderScanDownloads property value. Indicates whether or not to scan downloads.
     * @param bool|null $value Value to set for the defenderScanDownloads property.
    */
    public function setDefenderScanDownloads(?bool $value): void {
        $this->getBackingStore()->set('defenderScanDownloads', $value);
    }

    /**
     * Sets the defenderScanIncomingMail property value. Indicates whether or not to scan incoming mail messages.
     * @param bool|null $value Value to set for the defenderScanIncomingMail property.
    */
    public function setDefenderScanIncomingMail(?bool $value): void {
        $this->getBackingStore()->set('defenderScanIncomingMail', $value);
    }

    /**
     * Sets the defenderScanMappedNetworkDrivesDuringFullScan property value. Indicates whether or not to scan mapped network drives during full scan.
     * @param bool|null $value Value to set for the defenderScanMappedNetworkDrivesDuringFullScan property.
    */
    public function setDefenderScanMappedNetworkDrivesDuringFullScan(?bool $value): void {
        $this->getBackingStore()->set('defenderScanMappedNetworkDrivesDuringFullScan', $value);
    }

    /**
     * Sets the defenderScanMaxCpu property value. Max CPU usage percentage during scan. Valid values 0 to 100
     * @param int|null $value Value to set for the defenderScanMaxCpu property.
    */
    public function setDefenderScanMaxCpu(?int $value): void {
        $this->getBackingStore()->set('defenderScanMaxCpu', $value);
    }

    /**
     * Sets the defenderScanNetworkFiles property value. Indicates whether or not to scan files opened from a network folder.
     * @param bool|null $value Value to set for the defenderScanNetworkFiles property.
    */
    public function setDefenderScanNetworkFiles(?bool $value): void {
        $this->getBackingStore()->set('defenderScanNetworkFiles', $value);
    }

    /**
     * Sets the defenderScanRemovableDrivesDuringFullScan property value. Indicates whether or not to scan removable drives during full scan.
     * @param bool|null $value Value to set for the defenderScanRemovableDrivesDuringFullScan property.
    */
    public function setDefenderScanRemovableDrivesDuringFullScan(?bool $value): void {
        $this->getBackingStore()->set('defenderScanRemovableDrivesDuringFullScan', $value);
    }

    /**
     * Sets the defenderScanScriptsLoadedInInternetExplorer property value. Indicates whether or not to scan scripts loaded in Internet Explorer browser.
     * @param bool|null $value Value to set for the defenderScanScriptsLoadedInInternetExplorer property.
    */
    public function setDefenderScanScriptsLoadedInInternetExplorer(?bool $value): void {
        $this->getBackingStore()->set('defenderScanScriptsLoadedInInternetExplorer', $value);
    }

    /**
     * Sets the defenderScanType property value. Possible values for system scan type.
     * @param DefenderScanType|null $value Value to set for the defenderScanType property.
    */
    public function setDefenderScanType(?DefenderScanType $value): void {
        $this->getBackingStore()->set('defenderScanType', $value);
    }

    /**
     * Sets the defenderScheduledQuickScanTime property value. The time to perform a daily quick scan.
     * @param Time|null $value Value to set for the defenderScheduledQuickScanTime property.
    */
    public function setDefenderScheduledQuickScanTime(?Time $value): void {
        $this->getBackingStore()->set('defenderScheduledQuickScanTime', $value);
    }

    /**
     * Sets the defenderScheduledScanTime property value. The defender time for the system scan.
     * @param Time|null $value Value to set for the defenderScheduledScanTime property.
    */
    public function setDefenderScheduledScanTime(?Time $value): void {
        $this->getBackingStore()->set('defenderScheduledScanTime', $value);
    }

    /**
     * Sets the defenderSignatureUpdateIntervalInHours property value. The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
     * @param int|null $value Value to set for the defenderSignatureUpdateIntervalInHours property.
    */
    public function setDefenderSignatureUpdateIntervalInHours(?int $value): void {
        $this->getBackingStore()->set('defenderSignatureUpdateIntervalInHours', $value);
    }

    /**
     * Sets the defenderSystemScanSchedule property value. Possible values for a weekly schedule.
     * @param WeeklySchedule|null $value Value to set for the defenderSystemScanSchedule property.
    */
    public function setDefenderSystemScanSchedule(?WeeklySchedule $value): void {
        $this->getBackingStore()->set('defenderSystemScanSchedule', $value);
    }

    /**
     * Sets the developerUnlockSetting property value. State Management Setting.
     * @param StateManagementSetting|null $value Value to set for the developerUnlockSetting property.
    */
    public function setDeveloperUnlockSetting(?StateManagementSetting $value): void {
        $this->getBackingStore()->set('developerUnlockSetting', $value);
    }

    /**
     * Sets the deviceManagementBlockFactoryResetOnMobile property value. Indicates whether or not to Block the user from resetting their phone.
     * @param bool|null $value Value to set for the deviceManagementBlockFactoryResetOnMobile property.
    */
    public function setDeviceManagementBlockFactoryResetOnMobile(?bool $value): void {
        $this->getBackingStore()->set('deviceManagementBlockFactoryResetOnMobile', $value);
    }

    /**
     * Sets the deviceManagementBlockManualUnenroll property value. Indicates whether or not to Block the user from doing manual un-enrollment from device management.
     * @param bool|null $value Value to set for the deviceManagementBlockManualUnenroll property.
    */
    public function setDeviceManagementBlockManualUnenroll(?bool $value): void {
        $this->getBackingStore()->set('deviceManagementBlockManualUnenroll', $value);
    }

    /**
     * Sets the diagnosticsDataSubmissionMode property value. Allow the device to send diagnostic and usage telemetry data, such as Watson.
     * @param DiagnosticDataSubmissionMode|null $value Value to set for the diagnosticsDataSubmissionMode property.
    */
    public function setDiagnosticsDataSubmissionMode(?DiagnosticDataSubmissionMode $value): void {
        $this->getBackingStore()->set('diagnosticsDataSubmissionMode', $value);
    }

    /**
     * Sets the edgeAllowStartPagesModification property value. Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
     * @param bool|null $value Value to set for the edgeAllowStartPagesModification property.
    */
    public function setEdgeAllowStartPagesModification(?bool $value): void {
        $this->getBackingStore()->set('edgeAllowStartPagesModification', $value);
    }

    /**
     * Sets the edgeBlockAccessToAboutFlags property value. Indicates whether or not to prevent access to about flags on Edge browser.
     * @param bool|null $value Value to set for the edgeBlockAccessToAboutFlags property.
    */
    public function setEdgeBlockAccessToAboutFlags(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockAccessToAboutFlags', $value);
    }

    /**
     * Sets the edgeBlockAddressBarDropdown property value. Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
     * @param bool|null $value Value to set for the edgeBlockAddressBarDropdown property.
    */
    public function setEdgeBlockAddressBarDropdown(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockAddressBarDropdown', $value);
    }

    /**
     * Sets the edgeBlockAutofill property value. Indicates whether or not to block auto fill.
     * @param bool|null $value Value to set for the edgeBlockAutofill property.
    */
    public function setEdgeBlockAutofill(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockAutofill', $value);
    }

    /**
     * Sets the edgeBlockCompatibilityList property value. Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
     * @param bool|null $value Value to set for the edgeBlockCompatibilityList property.
    */
    public function setEdgeBlockCompatibilityList(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockCompatibilityList', $value);
    }

    /**
     * Sets the edgeBlockDeveloperTools property value. Indicates whether or not to block developer tools in the Edge browser.
     * @param bool|null $value Value to set for the edgeBlockDeveloperTools property.
    */
    public function setEdgeBlockDeveloperTools(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockDeveloperTools', $value);
    }

    /**
     * Sets the edgeBlocked property value. Indicates whether or not to Block the user from using the Edge browser.
     * @param bool|null $value Value to set for the edgeBlocked property.
    */
    public function setEdgeBlocked(?bool $value): void {
        $this->getBackingStore()->set('edgeBlocked', $value);
    }

    /**
     * Sets the edgeBlockExtensions property value. Indicates whether or not to block extensions in the Edge browser.
     * @param bool|null $value Value to set for the edgeBlockExtensions property.
    */
    public function setEdgeBlockExtensions(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockExtensions', $value);
    }

    /**
     * Sets the edgeBlockInPrivateBrowsing property value. Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
     * @param bool|null $value Value to set for the edgeBlockInPrivateBrowsing property.
    */
    public function setEdgeBlockInPrivateBrowsing(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockInPrivateBrowsing', $value);
    }

    /**
     * Sets the edgeBlockJavaScript property value. Indicates whether or not to Block the user from using JavaScript.
     * @param bool|null $value Value to set for the edgeBlockJavaScript property.
    */
    public function setEdgeBlockJavaScript(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockJavaScript', $value);
    }

    /**
     * Sets the edgeBlockLiveTileDataCollection property value. Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
     * @param bool|null $value Value to set for the edgeBlockLiveTileDataCollection property.
    */
    public function setEdgeBlockLiveTileDataCollection(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockLiveTileDataCollection', $value);
    }

    /**
     * Sets the edgeBlockPasswordManager property value. Indicates whether or not to Block password manager.
     * @param bool|null $value Value to set for the edgeBlockPasswordManager property.
    */
    public function setEdgeBlockPasswordManager(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockPasswordManager', $value);
    }

    /**
     * Sets the edgeBlockPopups property value. Indicates whether or not to block popups.
     * @param bool|null $value Value to set for the edgeBlockPopups property.
    */
    public function setEdgeBlockPopups(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockPopups', $value);
    }

    /**
     * Sets the edgeBlockSearchSuggestions property value. Indicates whether or not to block the user from using the search suggestions in the address bar.
     * @param bool|null $value Value to set for the edgeBlockSearchSuggestions property.
    */
    public function setEdgeBlockSearchSuggestions(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockSearchSuggestions', $value);
    }

    /**
     * Sets the edgeBlockSendingDoNotTrackHeader property value. Indicates whether or not to Block the user from sending the do not track header.
     * @param bool|null $value Value to set for the edgeBlockSendingDoNotTrackHeader property.
    */
    public function setEdgeBlockSendingDoNotTrackHeader(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockSendingDoNotTrackHeader', $value);
    }

    /**
     * Sets the edgeBlockSendingIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
     * @param bool|null $value Value to set for the edgeBlockSendingIntranetTrafficToInternetExplorer property.
    */
    public function setEdgeBlockSendingIntranetTrafficToInternetExplorer(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockSendingIntranetTrafficToInternetExplorer', $value);
    }

    /**
     * Sets the edgeClearBrowsingDataOnExit property value. Clear browsing data on exiting Microsoft Edge.
     * @param bool|null $value Value to set for the edgeClearBrowsingDataOnExit property.
    */
    public function setEdgeClearBrowsingDataOnExit(?bool $value): void {
        $this->getBackingStore()->set('edgeClearBrowsingDataOnExit', $value);
    }

    /**
     * Sets the edgeCookiePolicy property value. Possible values to specify which cookies are allowed in Microsoft Edge.
     * @param EdgeCookiePolicy|null $value Value to set for the edgeCookiePolicy property.
    */
    public function setEdgeCookiePolicy(?EdgeCookiePolicy $value): void {
        $this->getBackingStore()->set('edgeCookiePolicy', $value);
    }

    /**
     * Sets the edgeDisableFirstRunPage property value. Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
     * @param bool|null $value Value to set for the edgeDisableFirstRunPage property.
    */
    public function setEdgeDisableFirstRunPage(?bool $value): void {
        $this->getBackingStore()->set('edgeDisableFirstRunPage', $value);
    }

    /**
     * Sets the edgeEnterpriseModeSiteListLocation property value. Indicates the enterprise mode site list location. Could be a local file, local network or http location.
     * @param string|null $value Value to set for the edgeEnterpriseModeSiteListLocation property.
    */
    public function setEdgeEnterpriseModeSiteListLocation(?string $value): void {
        $this->getBackingStore()->set('edgeEnterpriseModeSiteListLocation', $value);
    }

    /**
     * Sets the edgeFirstRunUrl property value. The first run URL for when Edge browser is opened for the first time.
     * @param string|null $value Value to set for the edgeFirstRunUrl property.
    */
    public function setEdgeFirstRunUrl(?string $value): void {
        $this->getBackingStore()->set('edgeFirstRunUrl', $value);
    }

    /**
     * Sets the edgeHomepageUrls property value. The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
     * @param array<string>|null $value Value to set for the edgeHomepageUrls property.
    */
    public function setEdgeHomepageUrls(?array $value): void {
        $this->getBackingStore()->set('edgeHomepageUrls', $value);
    }

    /**
     * Sets the edgeRequireSmartScreen property value. Indicates whether or not to Require the user to use the smart screen filter.
     * @param bool|null $value Value to set for the edgeRequireSmartScreen property.
    */
    public function setEdgeRequireSmartScreen(?bool $value): void {
        $this->getBackingStore()->set('edgeRequireSmartScreen', $value);
    }

    /**
     * Sets the edgeSearchEngine property value. Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
     * @param EdgeSearchEngineBase|null $value Value to set for the edgeSearchEngine property.
    */
    public function setEdgeSearchEngine(?EdgeSearchEngineBase $value): void {
        $this->getBackingStore()->set('edgeSearchEngine', $value);
    }

    /**
     * Sets the edgeSendIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
     * @param bool|null $value Value to set for the edgeSendIntranetTrafficToInternetExplorer property.
    */
    public function setEdgeSendIntranetTrafficToInternetExplorer(?bool $value): void {
        $this->getBackingStore()->set('edgeSendIntranetTrafficToInternetExplorer', $value);
    }

    /**
     * Sets the edgeSyncFavoritesWithInternetExplorer property value. Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
     * @param bool|null $value Value to set for the edgeSyncFavoritesWithInternetExplorer property.
    */
    public function setEdgeSyncFavoritesWithInternetExplorer(?bool $value): void {
        $this->getBackingStore()->set('edgeSyncFavoritesWithInternetExplorer', $value);
    }

    /**
     * Sets the enterpriseCloudPrintDiscoveryEndPoint property value. Endpoint for discovering cloud printers.
     * @param string|null $value Value to set for the enterpriseCloudPrintDiscoveryEndPoint property.
    */
    public function setEnterpriseCloudPrintDiscoveryEndPoint(?string $value): void {
        $this->getBackingStore()->set('enterpriseCloudPrintDiscoveryEndPoint', $value);
    }

    /**
     * Sets the enterpriseCloudPrintDiscoveryMaxLimit property value. Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
     * @param int|null $value Value to set for the enterpriseCloudPrintDiscoveryMaxLimit property.
    */
    public function setEnterpriseCloudPrintDiscoveryMaxLimit(?int $value): void {
        $this->getBackingStore()->set('enterpriseCloudPrintDiscoveryMaxLimit', $value);
    }

    /**
     * Sets the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier property value. OAuth resource URI for printer discovery service as configured in Azure portal.
     * @param string|null $value Value to set for the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier property.
    */
    public function setEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier(?string $value): void {
        $this->getBackingStore()->set('enterpriseCloudPrintMopriaDiscoveryResourceIdentifier', $value);
    }

    /**
     * Sets the enterpriseCloudPrintOAuthAuthority property value. Authentication endpoint for acquiring OAuth tokens.
     * @param string|null $value Value to set for the enterpriseCloudPrintOAuthAuthority property.
    */
    public function setEnterpriseCloudPrintOAuthAuthority(?string $value): void {
        $this->getBackingStore()->set('enterpriseCloudPrintOAuthAuthority', $value);
    }

    /**
     * Sets the enterpriseCloudPrintOAuthClientIdentifier property value. GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
     * @param string|null $value Value to set for the enterpriseCloudPrintOAuthClientIdentifier property.
    */
    public function setEnterpriseCloudPrintOAuthClientIdentifier(?string $value): void {
        $this->getBackingStore()->set('enterpriseCloudPrintOAuthClientIdentifier', $value);
    }

    /**
     * Sets the enterpriseCloudPrintResourceIdentifier property value. OAuth resource URI for print service as configured in the Azure portal.
     * @param string|null $value Value to set for the enterpriseCloudPrintResourceIdentifier property.
    */
    public function setEnterpriseCloudPrintResourceIdentifier(?string $value): void {
        $this->getBackingStore()->set('enterpriseCloudPrintResourceIdentifier', $value);
    }

    /**
     * Sets the experienceBlockDeviceDiscovery property value. Indicates whether or not to enable device discovery UX.
     * @param bool|null $value Value to set for the experienceBlockDeviceDiscovery property.
    */
    public function setExperienceBlockDeviceDiscovery(?bool $value): void {
        $this->getBackingStore()->set('experienceBlockDeviceDiscovery', $value);
    }

    /**
     * Sets the experienceBlockErrorDialogWhenNoSIM property value. Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
     * @param bool|null $value Value to set for the experienceBlockErrorDialogWhenNoSIM property.
    */
    public function setExperienceBlockErrorDialogWhenNoSIM(?bool $value): void {
        $this->getBackingStore()->set('experienceBlockErrorDialogWhenNoSIM', $value);
    }

    /**
     * Sets the experienceBlockTaskSwitcher property value. Indicates whether or not to enable task switching on the device.
     * @param bool|null $value Value to set for the experienceBlockTaskSwitcher property.
    */
    public function setExperienceBlockTaskSwitcher(?bool $value): void {
        $this->getBackingStore()->set('experienceBlockTaskSwitcher', $value);
    }

    /**
     * Sets the gameDvrBlocked property value. Indicates whether or not to block DVR and broadcasting.
     * @param bool|null $value Value to set for the gameDvrBlocked property.
    */
    public function setGameDvrBlocked(?bool $value): void {
        $this->getBackingStore()->set('gameDvrBlocked', $value);
    }

    /**
     * Sets the internetSharingBlocked property value. Indicates whether or not to Block the user from using internet sharing.
     * @param bool|null $value Value to set for the internetSharingBlocked property.
    */
    public function setInternetSharingBlocked(?bool $value): void {
        $this->getBackingStore()->set('internetSharingBlocked', $value);
    }

    /**
     * Sets the locationServicesBlocked property value. Indicates whether or not to Block the user from location services.
     * @param bool|null $value Value to set for the locationServicesBlocked property.
    */
    public function setLocationServicesBlocked(?bool $value): void {
        $this->getBackingStore()->set('locationServicesBlocked', $value);
    }

    /**
     * Sets the lockScreenAllowTimeoutConfiguration property value. Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
     * @param bool|null $value Value to set for the lockScreenAllowTimeoutConfiguration property.
    */
    public function setLockScreenAllowTimeoutConfiguration(?bool $value): void {
        $this->getBackingStore()->set('lockScreenAllowTimeoutConfiguration', $value);
    }

    /**
     * Sets the lockScreenBlockActionCenterNotifications property value. Indicates whether or not to block action center notifications over lock screen.
     * @param bool|null $value Value to set for the lockScreenBlockActionCenterNotifications property.
    */
    public function setLockScreenBlockActionCenterNotifications(?bool $value): void {
        $this->getBackingStore()->set('lockScreenBlockActionCenterNotifications', $value);
    }

    /**
     * Sets the lockScreenBlockCortana property value. Indicates whether or not the user can interact with Cortana using speech while the system is locked.
     * @param bool|null $value Value to set for the lockScreenBlockCortana property.
    */
    public function setLockScreenBlockCortana(?bool $value): void {
        $this->getBackingStore()->set('lockScreenBlockCortana', $value);
    }

    /**
     * Sets the lockScreenBlockToastNotifications property value. Indicates whether to allow toast notifications above the device lock screen.
     * @param bool|null $value Value to set for the lockScreenBlockToastNotifications property.
    */
    public function setLockScreenBlockToastNotifications(?bool $value): void {
        $this->getBackingStore()->set('lockScreenBlockToastNotifications', $value);
    }

    /**
     * Sets the lockScreenTimeoutInSeconds property value. Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
     * @param int|null $value Value to set for the lockScreenTimeoutInSeconds property.
    */
    public function setLockScreenTimeoutInSeconds(?int $value): void {
        $this->getBackingStore()->set('lockScreenTimeoutInSeconds', $value);
    }

    /**
     * Sets the logonBlockFastUserSwitching property value. Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
     * @param bool|null $value Value to set for the logonBlockFastUserSwitching property.
    */
    public function setLogonBlockFastUserSwitching(?bool $value): void {
        $this->getBackingStore()->set('logonBlockFastUserSwitching', $value);
    }

    /**
     * Sets the microsoftAccountBlocked property value. Indicates whether or not to Block a Microsoft account.
     * @param bool|null $value Value to set for the microsoftAccountBlocked property.
    */
    public function setMicrosoftAccountBlocked(?bool $value): void {
        $this->getBackingStore()->set('microsoftAccountBlocked', $value);
    }

    /**
     * Sets the microsoftAccountBlockSettingsSync property value. Indicates whether or not to Block Microsoft account settings sync.
     * @param bool|null $value Value to set for the microsoftAccountBlockSettingsSync property.
    */
    public function setMicrosoftAccountBlockSettingsSync(?bool $value): void {
        $this->getBackingStore()->set('microsoftAccountBlockSettingsSync', $value);
    }

    /**
     * Sets the networkProxyApplySettingsDeviceWide property value. If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
     * @param bool|null $value Value to set for the networkProxyApplySettingsDeviceWide property.
    */
    public function setNetworkProxyApplySettingsDeviceWide(?bool $value): void {
        $this->getBackingStore()->set('networkProxyApplySettingsDeviceWide', $value);
    }

    /**
     * Sets the networkProxyAutomaticConfigurationUrl property value. Address to the proxy auto-config (PAC) script you want to use.
     * @param string|null $value Value to set for the networkProxyAutomaticConfigurationUrl property.
    */
    public function setNetworkProxyAutomaticConfigurationUrl(?string $value): void {
        $this->getBackingStore()->set('networkProxyAutomaticConfigurationUrl', $value);
    }

    /**
     * Sets the networkProxyDisableAutoDetect property value. Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
     * @param bool|null $value Value to set for the networkProxyDisableAutoDetect property.
    */
    public function setNetworkProxyDisableAutoDetect(?bool $value): void {
        $this->getBackingStore()->set('networkProxyDisableAutoDetect', $value);
    }

    /**
     * Sets the networkProxyServer property value. Specifies manual proxy server settings.
     * @param Windows10NetworkProxyServer|null $value Value to set for the networkProxyServer property.
    */
    public function setNetworkProxyServer(?Windows10NetworkProxyServer $value): void {
        $this->getBackingStore()->set('networkProxyServer', $value);
    }

    /**
     * Sets the nfcBlocked property value. Indicates whether or not to Block the user from using near field communication.
     * @param bool|null $value Value to set for the nfcBlocked property.
    */
    public function setNfcBlocked(?bool $value): void {
        $this->getBackingStore()->set('nfcBlocked', $value);
    }

    /**
     * Sets the oneDriveDisableFileSync property value. Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
     * @param bool|null $value Value to set for the oneDriveDisableFileSync property.
    */
    public function setOneDriveDisableFileSync(?bool $value): void {
        $this->getBackingStore()->set('oneDriveDisableFileSync', $value);
    }

    /**
     * Sets the passwordBlockSimple property value. Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
     * @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockSimple', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. The password expiration in days. Valid values 0 to 730
     * @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumCharacterSetCount', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. The minimum password length. Valid values 4 to 16
     * @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. The minutes of inactivity before the screen times out.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeScreenTimeout', $value);
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent reuse of. Valid values 0 to 50
     * @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the passwordRequired property value. Indicates whether or not to require the user to have a password.
     * @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value): void {
        $this->getBackingStore()->set('passwordRequired', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Possible values of required passwords.
     * @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the passwordRequireWhenResumeFromIdleState property value. Indicates whether or not to require a password upon resuming from an idle state.
     * @param bool|null $value Value to set for the passwordRequireWhenResumeFromIdleState property.
    */
    public function setPasswordRequireWhenResumeFromIdleState(?bool $value): void {
        $this->getBackingStore()->set('passwordRequireWhenResumeFromIdleState', $value);
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. The number of sign in failures before factory reset. Valid values 0 to 999
     * @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value): void {
        $this->getBackingStore()->set('passwordSignInFailureCountBeforeFactoryReset', $value);
    }

    /**
     * Sets the personalizationDesktopImageUrl property value. A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
     * @param string|null $value Value to set for the personalizationDesktopImageUrl property.
    */
    public function setPersonalizationDesktopImageUrl(?string $value): void {
        $this->getBackingStore()->set('personalizationDesktopImageUrl', $value);
    }

    /**
     * Sets the personalizationLockScreenImageUrl property value. A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
     * @param string|null $value Value to set for the personalizationLockScreenImageUrl property.
    */
    public function setPersonalizationLockScreenImageUrl(?string $value): void {
        $this->getBackingStore()->set('personalizationLockScreenImageUrl', $value);
    }

    /**
     * Sets the privacyAdvertisingId property value. State Management Setting.
     * @param StateManagementSetting|null $value Value to set for the privacyAdvertisingId property.
    */
    public function setPrivacyAdvertisingId(?StateManagementSetting $value): void {
        $this->getBackingStore()->set('privacyAdvertisingId', $value);
    }

    /**
     * Sets the privacyAutoAcceptPairingAndConsentPrompts property value. Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
     * @param bool|null $value Value to set for the privacyAutoAcceptPairingAndConsentPrompts property.
    */
    public function setPrivacyAutoAcceptPairingAndConsentPrompts(?bool $value): void {
        $this->getBackingStore()->set('privacyAutoAcceptPairingAndConsentPrompts', $value);
    }

    /**
     * Sets the privacyBlockInputPersonalization property value. Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     * @param bool|null $value Value to set for the privacyBlockInputPersonalization property.
    */
    public function setPrivacyBlockInputPersonalization(?bool $value): void {
        $this->getBackingStore()->set('privacyBlockInputPersonalization', $value);
    }

    /**
     * Sets the resetProtectionModeBlocked property value. Indicates whether or not to Block the user from reset protection mode.
     * @param bool|null $value Value to set for the resetProtectionModeBlocked property.
    */
    public function setResetProtectionModeBlocked(?bool $value): void {
        $this->getBackingStore()->set('resetProtectionModeBlocked', $value);
    }

    /**
     * Sets the safeSearchFilter property value. Specifies what level of safe search (filtering adult content) is required
     * @param SafeSearchFilterType|null $value Value to set for the safeSearchFilter property.
    */
    public function setSafeSearchFilter(?SafeSearchFilterType $value): void {
        $this->getBackingStore()->set('safeSearchFilter', $value);
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to Block the user from taking Screenshots.
     * @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('screenCaptureBlocked', $value);
    }

    /**
     * Sets the searchBlockDiacritics property value. Specifies if search can use diacritics.
     * @param bool|null $value Value to set for the searchBlockDiacritics property.
    */
    public function setSearchBlockDiacritics(?bool $value): void {
        $this->getBackingStore()->set('searchBlockDiacritics', $value);
    }

    /**
     * Sets the searchDisableAutoLanguageDetection property value. Specifies whether to use automatic language detection when indexing content and properties.
     * @param bool|null $value Value to set for the searchDisableAutoLanguageDetection property.
    */
    public function setSearchDisableAutoLanguageDetection(?bool $value): void {
        $this->getBackingStore()->set('searchDisableAutoLanguageDetection', $value);
    }

    /**
     * Sets the searchDisableIndexerBackoff property value. Indicates whether or not to disable the search indexer backoff feature.
     * @param bool|null $value Value to set for the searchDisableIndexerBackoff property.
    */
    public function setSearchDisableIndexerBackoff(?bool $value): void {
        $this->getBackingStore()->set('searchDisableIndexerBackoff', $value);
    }

    /**
     * Sets the searchDisableIndexingEncryptedItems property value. Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
     * @param bool|null $value Value to set for the searchDisableIndexingEncryptedItems property.
    */
    public function setSearchDisableIndexingEncryptedItems(?bool $value): void {
        $this->getBackingStore()->set('searchDisableIndexingEncryptedItems', $value);
    }

    /**
     * Sets the searchDisableIndexingRemovableDrive property value. Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
     * @param bool|null $value Value to set for the searchDisableIndexingRemovableDrive property.
    */
    public function setSearchDisableIndexingRemovableDrive(?bool $value): void {
        $this->getBackingStore()->set('searchDisableIndexingRemovableDrive', $value);
    }

    /**
     * Sets the searchEnableAutomaticIndexSizeManangement property value. Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
     * @param bool|null $value Value to set for the searchEnableAutomaticIndexSizeManangement property.
    */
    public function setSearchEnableAutomaticIndexSizeManangement(?bool $value): void {
        $this->getBackingStore()->set('searchEnableAutomaticIndexSizeManangement', $value);
    }

    /**
     * Sets the searchEnableRemoteQueries property value. Indicates whether or not to block remote queries of this computer’s index.
     * @param bool|null $value Value to set for the searchEnableRemoteQueries property.
    */
    public function setSearchEnableRemoteQueries(?bool $value): void {
        $this->getBackingStore()->set('searchEnableRemoteQueries', $value);
    }

    /**
     * Sets the settingsBlockAccountsPage property value. Indicates whether or not to block access to Accounts in Settings app.
     * @param bool|null $value Value to set for the settingsBlockAccountsPage property.
    */
    public function setSettingsBlockAccountsPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockAccountsPage', $value);
    }

    /**
     * Sets the settingsBlockAddProvisioningPackage property value. Indicates whether or not to block the user from installing provisioning packages.
     * @param bool|null $value Value to set for the settingsBlockAddProvisioningPackage property.
    */
    public function setSettingsBlockAddProvisioningPackage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockAddProvisioningPackage', $value);
    }

    /**
     * Sets the settingsBlockAppsPage property value. Indicates whether or not to block access to Apps in Settings app.
     * @param bool|null $value Value to set for the settingsBlockAppsPage property.
    */
    public function setSettingsBlockAppsPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockAppsPage', $value);
    }

    /**
     * Sets the settingsBlockChangeLanguage property value. Indicates whether or not to block the user from changing the language settings.
     * @param bool|null $value Value to set for the settingsBlockChangeLanguage property.
    */
    public function setSettingsBlockChangeLanguage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockChangeLanguage', $value);
    }

    /**
     * Sets the settingsBlockChangePowerSleep property value. Indicates whether or not to block the user from changing power and sleep settings.
     * @param bool|null $value Value to set for the settingsBlockChangePowerSleep property.
    */
    public function setSettingsBlockChangePowerSleep(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockChangePowerSleep', $value);
    }

    /**
     * Sets the settingsBlockChangeRegion property value. Indicates whether or not to block the user from changing the region settings.
     * @param bool|null $value Value to set for the settingsBlockChangeRegion property.
    */
    public function setSettingsBlockChangeRegion(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockChangeRegion', $value);
    }

    /**
     * Sets the settingsBlockChangeSystemTime property value. Indicates whether or not to block the user from changing date and time settings.
     * @param bool|null $value Value to set for the settingsBlockChangeSystemTime property.
    */
    public function setSettingsBlockChangeSystemTime(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockChangeSystemTime', $value);
    }

    /**
     * Sets the settingsBlockDevicesPage property value. Indicates whether or not to block access to Devices in Settings app.
     * @param bool|null $value Value to set for the settingsBlockDevicesPage property.
    */
    public function setSettingsBlockDevicesPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockDevicesPage', $value);
    }

    /**
     * Sets the settingsBlockEaseOfAccessPage property value. Indicates whether or not to block access to Ease of Access in Settings app.
     * @param bool|null $value Value to set for the settingsBlockEaseOfAccessPage property.
    */
    public function setSettingsBlockEaseOfAccessPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockEaseOfAccessPage', $value);
    }

    /**
     * Sets the settingsBlockEditDeviceName property value. Indicates whether or not to block the user from editing the device name.
     * @param bool|null $value Value to set for the settingsBlockEditDeviceName property.
    */
    public function setSettingsBlockEditDeviceName(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockEditDeviceName', $value);
    }

    /**
     * Sets the settingsBlockGamingPage property value. Indicates whether or not to block access to Gaming in Settings app.
     * @param bool|null $value Value to set for the settingsBlockGamingPage property.
    */
    public function setSettingsBlockGamingPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockGamingPage', $value);
    }

    /**
     * Sets the settingsBlockNetworkInternetPage property value. Indicates whether or not to block access to Network & Internet in Settings app.
     * @param bool|null $value Value to set for the settingsBlockNetworkInternetPage property.
    */
    public function setSettingsBlockNetworkInternetPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockNetworkInternetPage', $value);
    }

    /**
     * Sets the settingsBlockPersonalizationPage property value. Indicates whether or not to block access to Personalization in Settings app.
     * @param bool|null $value Value to set for the settingsBlockPersonalizationPage property.
    */
    public function setSettingsBlockPersonalizationPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockPersonalizationPage', $value);
    }

    /**
     * Sets the settingsBlockPrivacyPage property value. Indicates whether or not to block access to Privacy in Settings app.
     * @param bool|null $value Value to set for the settingsBlockPrivacyPage property.
    */
    public function setSettingsBlockPrivacyPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockPrivacyPage', $value);
    }

    /**
     * Sets the settingsBlockRemoveProvisioningPackage property value. Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
     * @param bool|null $value Value to set for the settingsBlockRemoveProvisioningPackage property.
    */
    public function setSettingsBlockRemoveProvisioningPackage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockRemoveProvisioningPackage', $value);
    }

    /**
     * Sets the settingsBlockSettingsApp property value. Indicates whether or not to block access to Settings app.
     * @param bool|null $value Value to set for the settingsBlockSettingsApp property.
    */
    public function setSettingsBlockSettingsApp(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockSettingsApp', $value);
    }

    /**
     * Sets the settingsBlockSystemPage property value. Indicates whether or not to block access to System in Settings app.
     * @param bool|null $value Value to set for the settingsBlockSystemPage property.
    */
    public function setSettingsBlockSystemPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockSystemPage', $value);
    }

    /**
     * Sets the settingsBlockTimeLanguagePage property value. Indicates whether or not to block access to Time & Language in Settings app.
     * @param bool|null $value Value to set for the settingsBlockTimeLanguagePage property.
    */
    public function setSettingsBlockTimeLanguagePage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockTimeLanguagePage', $value);
    }

    /**
     * Sets the settingsBlockUpdateSecurityPage property value. Indicates whether or not to block access to Update & Security in Settings app.
     * @param bool|null $value Value to set for the settingsBlockUpdateSecurityPage property.
    */
    public function setSettingsBlockUpdateSecurityPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockUpdateSecurityPage', $value);
    }

    /**
     * Sets the sharedUserAppDataAllowed property value. Indicates whether or not to block multiple users of the same app to share data.
     * @param bool|null $value Value to set for the sharedUserAppDataAllowed property.
    */
    public function setSharedUserAppDataAllowed(?bool $value): void {
        $this->getBackingStore()->set('sharedUserAppDataAllowed', $value);
    }

    /**
     * Sets the smartScreenBlockPromptOverride property value. Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
     * @param bool|null $value Value to set for the smartScreenBlockPromptOverride property.
    */
    public function setSmartScreenBlockPromptOverride(?bool $value): void {
        $this->getBackingStore()->set('smartScreenBlockPromptOverride', $value);
    }

    /**
     * Sets the smartScreenBlockPromptOverrideForFiles property value. Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
     * @param bool|null $value Value to set for the smartScreenBlockPromptOverrideForFiles property.
    */
    public function setSmartScreenBlockPromptOverrideForFiles(?bool $value): void {
        $this->getBackingStore()->set('smartScreenBlockPromptOverrideForFiles', $value);
    }

    /**
     * Sets the smartScreenEnableAppInstallControl property value. This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
     * @param bool|null $value Value to set for the smartScreenEnableAppInstallControl property.
    */
    public function setSmartScreenEnableAppInstallControl(?bool $value): void {
        $this->getBackingStore()->set('smartScreenEnableAppInstallControl', $value);
    }

    /**
     * Sets the startBlockUnpinningAppsFromTaskbar property value. Indicates whether or not to block the user from unpinning apps from taskbar.
     * @param bool|null $value Value to set for the startBlockUnpinningAppsFromTaskbar property.
    */
    public function setStartBlockUnpinningAppsFromTaskbar(?bool $value): void {
        $this->getBackingStore()->set('startBlockUnpinningAppsFromTaskbar', $value);
    }

    /**
     * Sets the startMenuAppListVisibility property value. Type of start menu app list visibility.
     * @param WindowsStartMenuAppListVisibilityType|null $value Value to set for the startMenuAppListVisibility property.
    */
    public function setStartMenuAppListVisibility(?WindowsStartMenuAppListVisibilityType $value): void {
        $this->getBackingStore()->set('startMenuAppListVisibility', $value);
    }

    /**
     * Sets the startMenuHideChangeAccountSettings property value. Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
     * @param bool|null $value Value to set for the startMenuHideChangeAccountSettings property.
    */
    public function setStartMenuHideChangeAccountSettings(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideChangeAccountSettings', $value);
    }

    /**
     * Sets the startMenuHideFrequentlyUsedApps property value. Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     * @param bool|null $value Value to set for the startMenuHideFrequentlyUsedApps property.
    */
    public function setStartMenuHideFrequentlyUsedApps(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideFrequentlyUsedApps', $value);
    }

    /**
     * Sets the startMenuHideHibernate property value. Enabling this policy hides hibernate from appearing in the power button in the start menu.
     * @param bool|null $value Value to set for the startMenuHideHibernate property.
    */
    public function setStartMenuHideHibernate(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideHibernate', $value);
    }

    /**
     * Sets the startMenuHideLock property value. Enabling this policy hides lock from appearing in the user tile in the start menu.
     * @param bool|null $value Value to set for the startMenuHideLock property.
    */
    public function setStartMenuHideLock(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideLock', $value);
    }

    /**
     * Sets the startMenuHidePowerButton property value. Enabling this policy hides the power button from appearing in the start menu.
     * @param bool|null $value Value to set for the startMenuHidePowerButton property.
    */
    public function setStartMenuHidePowerButton(?bool $value): void {
        $this->getBackingStore()->set('startMenuHidePowerButton', $value);
    }

    /**
     * Sets the startMenuHideRecentJumpLists property value. Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
     * @param bool|null $value Value to set for the startMenuHideRecentJumpLists property.
    */
    public function setStartMenuHideRecentJumpLists(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideRecentJumpLists', $value);
    }

    /**
     * Sets the startMenuHideRecentlyAddedApps property value. Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     * @param bool|null $value Value to set for the startMenuHideRecentlyAddedApps property.
    */
    public function setStartMenuHideRecentlyAddedApps(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideRecentlyAddedApps', $value);
    }

    /**
     * Sets the startMenuHideRestartOptions property value. Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
     * @param bool|null $value Value to set for the startMenuHideRestartOptions property.
    */
    public function setStartMenuHideRestartOptions(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideRestartOptions', $value);
    }

    /**
     * Sets the startMenuHideShutDown property value. Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
     * @param bool|null $value Value to set for the startMenuHideShutDown property.
    */
    public function setStartMenuHideShutDown(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideShutDown', $value);
    }

    /**
     * Sets the startMenuHideSignOut property value. Enabling this policy hides sign out from appearing in the user tile in the start menu.
     * @param bool|null $value Value to set for the startMenuHideSignOut property.
    */
    public function setStartMenuHideSignOut(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideSignOut', $value);
    }

    /**
     * Sets the startMenuHideSleep property value. Enabling this policy hides sleep from appearing in the power button in the start menu.
     * @param bool|null $value Value to set for the startMenuHideSleep property.
    */
    public function setStartMenuHideSleep(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideSleep', $value);
    }

    /**
     * Sets the startMenuHideSwitchAccount property value. Enabling this policy hides switch account from appearing in the user tile in the start menu.
     * @param bool|null $value Value to set for the startMenuHideSwitchAccount property.
    */
    public function setStartMenuHideSwitchAccount(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideSwitchAccount', $value);
    }

    /**
     * Sets the startMenuHideUserTile property value. Enabling this policy hides the user tile from appearing in the start menu.
     * @param bool|null $value Value to set for the startMenuHideUserTile property.
    */
    public function setStartMenuHideUserTile(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideUserTile', $value);
    }

    /**
     * Sets the startMenuLayoutEdgeAssetsXml property value. This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
     * @param StreamInterface|null $value Value to set for the startMenuLayoutEdgeAssetsXml property.
    */
    public function setStartMenuLayoutEdgeAssetsXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('startMenuLayoutEdgeAssetsXml', $value);
    }

    /**
     * Sets the startMenuLayoutXml property value. Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
     * @param StreamInterface|null $value Value to set for the startMenuLayoutXml property.
    */
    public function setStartMenuLayoutXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('startMenuLayoutXml', $value);
    }

    /**
     * Sets the startMenuMode property value. Type of display modes for the start menu.
     * @param WindowsStartMenuModeType|null $value Value to set for the startMenuMode property.
    */
    public function setStartMenuMode(?WindowsStartMenuModeType $value): void {
        $this->getBackingStore()->set('startMenuMode', $value);
    }

    /**
     * Sets the startMenuPinnedFolderDocuments property value. Generic visibility state.
     * @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderDocuments property.
    */
    public function setStartMenuPinnedFolderDocuments(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderDocuments', $value);
    }

    /**
     * Sets the startMenuPinnedFolderDownloads property value. Generic visibility state.
     * @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderDownloads property.
    */
    public function setStartMenuPinnedFolderDownloads(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderDownloads', $value);
    }

    /**
     * Sets the startMenuPinnedFolderFileExplorer property value. Generic visibility state.
     * @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderFileExplorer property.
    */
    public function setStartMenuPinnedFolderFileExplorer(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderFileExplorer', $value);
    }

    /**
     * Sets the startMenuPinnedFolderHomeGroup property value. Generic visibility state.
     * @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderHomeGroup property.
    */
    public function setStartMenuPinnedFolderHomeGroup(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderHomeGroup', $value);
    }

    /**
     * Sets the startMenuPinnedFolderMusic property value. Generic visibility state.
     * @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderMusic property.
    */
    public function setStartMenuPinnedFolderMusic(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderMusic', $value);
    }

    /**
     * Sets the startMenuPinnedFolderNetwork property value. Generic visibility state.
     * @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderNetwork property.
    */
    public function setStartMenuPinnedFolderNetwork(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderNetwork', $value);
    }

    /**
     * Sets the startMenuPinnedFolderPersonalFolder property value. Generic visibility state.
     * @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderPersonalFolder property.
    */
    public function setStartMenuPinnedFolderPersonalFolder(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderPersonalFolder', $value);
    }

    /**
     * Sets the startMenuPinnedFolderPictures property value. Generic visibility state.
     * @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderPictures property.
    */
    public function setStartMenuPinnedFolderPictures(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderPictures', $value);
    }

    /**
     * Sets the startMenuPinnedFolderSettings property value. Generic visibility state.
     * @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderSettings property.
    */
    public function setStartMenuPinnedFolderSettings(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderSettings', $value);
    }

    /**
     * Sets the startMenuPinnedFolderVideos property value. Generic visibility state.
     * @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderVideos property.
    */
    public function setStartMenuPinnedFolderVideos(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderVideos', $value);
    }

    /**
     * Sets the storageBlockRemovableStorage property value. Indicates whether or not to Block the user from using removable storage.
     * @param bool|null $value Value to set for the storageBlockRemovableStorage property.
    */
    public function setStorageBlockRemovableStorage(?bool $value): void {
        $this->getBackingStore()->set('storageBlockRemovableStorage', $value);
    }

    /**
     * Sets the storageRequireMobileDeviceEncryption property value. Indicating whether or not to require encryption on a mobile device.
     * @param bool|null $value Value to set for the storageRequireMobileDeviceEncryption property.
    */
    public function setStorageRequireMobileDeviceEncryption(?bool $value): void {
        $this->getBackingStore()->set('storageRequireMobileDeviceEncryption', $value);
    }

    /**
     * Sets the storageRestrictAppDataToSystemVolume property value. Indicates whether application data is restricted to the system drive.
     * @param bool|null $value Value to set for the storageRestrictAppDataToSystemVolume property.
    */
    public function setStorageRestrictAppDataToSystemVolume(?bool $value): void {
        $this->getBackingStore()->set('storageRestrictAppDataToSystemVolume', $value);
    }

    /**
     * Sets the storageRestrictAppInstallToSystemVolume property value. Indicates whether the installation of applications is restricted to the system drive.
     * @param bool|null $value Value to set for the storageRestrictAppInstallToSystemVolume property.
    */
    public function setStorageRestrictAppInstallToSystemVolume(?bool $value): void {
        $this->getBackingStore()->set('storageRestrictAppInstallToSystemVolume', $value);
    }

    /**
     * Sets the tenantLockdownRequireNetworkDuringOutOfBoxExperience property value. Whether the device is required to connect to the network.
     * @param bool|null $value Value to set for the tenantLockdownRequireNetworkDuringOutOfBoxExperience property.
    */
    public function setTenantLockdownRequireNetworkDuringOutOfBoxExperience(?bool $value): void {
        $this->getBackingStore()->set('tenantLockdownRequireNetworkDuringOutOfBoxExperience', $value);
    }

    /**
     * Sets the usbBlocked property value. Indicates whether or not to Block the user from USB connection.
     * @param bool|null $value Value to set for the usbBlocked property.
    */
    public function setUsbBlocked(?bool $value): void {
        $this->getBackingStore()->set('usbBlocked', $value);
    }

    /**
     * Sets the voiceRecordingBlocked property value. Indicates whether or not to Block the user from voice recording.
     * @param bool|null $value Value to set for the voiceRecordingBlocked property.
    */
    public function setVoiceRecordingBlocked(?bool $value): void {
        $this->getBackingStore()->set('voiceRecordingBlocked', $value);
    }

    /**
     * Sets the webRtcBlockLocalhostIpAddress property value. Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
     * @param bool|null $value Value to set for the webRtcBlockLocalhostIpAddress property.
    */
    public function setWebRtcBlockLocalhostIpAddress(?bool $value): void {
        $this->getBackingStore()->set('webRtcBlockLocalhostIpAddress', $value);
    }

    /**
     * Sets the wiFiBlockAutomaticConnectHotspots property value. Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     * @param bool|null $value Value to set for the wiFiBlockAutomaticConnectHotspots property.
    */
    public function setWiFiBlockAutomaticConnectHotspots(?bool $value): void {
        $this->getBackingStore()->set('wiFiBlockAutomaticConnectHotspots', $value);
    }

    /**
     * Sets the wiFiBlocked property value. Indicates whether or not to Block the user from using Wi-Fi.
     * @param bool|null $value Value to set for the wiFiBlocked property.
    */
    public function setWiFiBlocked(?bool $value): void {
        $this->getBackingStore()->set('wiFiBlocked', $value);
    }

    /**
     * Sets the wiFiBlockManualConfiguration property value. Indicates whether or not to Block the user from using Wi-Fi manual configuration.
     * @param bool|null $value Value to set for the wiFiBlockManualConfiguration property.
    */
    public function setWiFiBlockManualConfiguration(?bool $value): void {
        $this->getBackingStore()->set('wiFiBlockManualConfiguration', $value);
    }

    /**
     * Sets the wiFiScanInterval property value. Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
     * @param int|null $value Value to set for the wiFiScanInterval property.
    */
    public function setWiFiScanInterval(?int $value): void {
        $this->getBackingStore()->set('wiFiScanInterval', $value);
    }

    /**
     * Sets the windowsSpotlightBlockConsumerSpecificFeatures property value. Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
     * @param bool|null $value Value to set for the windowsSpotlightBlockConsumerSpecificFeatures property.
    */
    public function setWindowsSpotlightBlockConsumerSpecificFeatures(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlockConsumerSpecificFeatures', $value);
    }

    /**
     * Sets the windowsSpotlightBlocked property value. Allows IT admins to turn off all Windows Spotlight features
     * @param bool|null $value Value to set for the windowsSpotlightBlocked property.
    */
    public function setWindowsSpotlightBlocked(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlocked', $value);
    }

    /**
     * Sets the windowsSpotlightBlockOnActionCenter property value. Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
     * @param bool|null $value Value to set for the windowsSpotlightBlockOnActionCenter property.
    */
    public function setWindowsSpotlightBlockOnActionCenter(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlockOnActionCenter', $value);
    }

    /**
     * Sets the windowsSpotlightBlockTailoredExperiences property value. Block personalized content in Windows spotlight based on user’s device usage.
     * @param bool|null $value Value to set for the windowsSpotlightBlockTailoredExperiences property.
    */
    public function setWindowsSpotlightBlockTailoredExperiences(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlockTailoredExperiences', $value);
    }

    /**
     * Sets the windowsSpotlightBlockThirdPartyNotifications property value. Block third party content delivered via Windows Spotlight
     * @param bool|null $value Value to set for the windowsSpotlightBlockThirdPartyNotifications property.
    */
    public function setWindowsSpotlightBlockThirdPartyNotifications(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlockThirdPartyNotifications', $value);
    }

    /**
     * Sets the windowsSpotlightBlockWelcomeExperience property value. Block Windows Spotlight Windows welcome experience
     * @param bool|null $value Value to set for the windowsSpotlightBlockWelcomeExperience property.
    */
    public function setWindowsSpotlightBlockWelcomeExperience(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlockWelcomeExperience', $value);
    }

    /**
     * Sets the windowsSpotlightBlockWindowsTips property value. Allows IT admins to turn off the popup of Windows Tips.
     * @param bool|null $value Value to set for the windowsSpotlightBlockWindowsTips property.
    */
    public function setWindowsSpotlightBlockWindowsTips(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlockWindowsTips', $value);
    }

    /**
     * Sets the windowsSpotlightConfigureOnLockScreen property value. Allows IT admind to set a predefined default search engine for MDM-Controlled devices
     * @param WindowsSpotlightEnablementSettings|null $value Value to set for the windowsSpotlightConfigureOnLockScreen property.
    */
    public function setWindowsSpotlightConfigureOnLockScreen(?WindowsSpotlightEnablementSettings $value): void {
        $this->getBackingStore()->set('windowsSpotlightConfigureOnLockScreen', $value);
    }

    /**
     * Sets the windowsStoreBlockAutoUpdate property value. Indicates whether or not to block automatic update of apps from Windows Store.
     * @param bool|null $value Value to set for the windowsStoreBlockAutoUpdate property.
    */
    public function setWindowsStoreBlockAutoUpdate(?bool $value): void {
        $this->getBackingStore()->set('windowsStoreBlockAutoUpdate', $value);
    }

    /**
     * Sets the windowsStoreBlocked property value. Indicates whether or not to Block the user from using the Windows store.
     * @param bool|null $value Value to set for the windowsStoreBlocked property.
    */
    public function setWindowsStoreBlocked(?bool $value): void {
        $this->getBackingStore()->set('windowsStoreBlocked', $value);
    }

    /**
     * Sets the windowsStoreEnablePrivateStoreOnly property value. Indicates whether or not to enable Private Store Only.
     * @param bool|null $value Value to set for the windowsStoreEnablePrivateStoreOnly property.
    */
    public function setWindowsStoreEnablePrivateStoreOnly(?bool $value): void {
        $this->getBackingStore()->set('windowsStoreEnablePrivateStoreOnly', $value);
    }

    /**
     * Sets the wirelessDisplayBlockProjectionToThisDevice property value. Indicates whether or not to allow other devices from discovering this PC for projection.
     * @param bool|null $value Value to set for the wirelessDisplayBlockProjectionToThisDevice property.
    */
    public function setWirelessDisplayBlockProjectionToThisDevice(?bool $value): void {
        $this->getBackingStore()->set('wirelessDisplayBlockProjectionToThisDevice', $value);
    }

    /**
     * Sets the wirelessDisplayBlockUserInputFromReceiver property value. Indicates whether or not to allow user input from wireless display receiver.
     * @param bool|null $value Value to set for the wirelessDisplayBlockUserInputFromReceiver property.
    */
    public function setWirelessDisplayBlockUserInputFromReceiver(?bool $value): void {
        $this->getBackingStore()->set('wirelessDisplayBlockUserInputFromReceiver', $value);
    }

    /**
     * Sets the wirelessDisplayRequirePinForPairing property value. Indicates whether or not to require a PIN for new devices to initiate pairing.
     * @param bool|null $value Value to set for the wirelessDisplayRequirePinForPairing property.
    */
    public function setWirelessDisplayRequirePinForPairing(?bool $value): void {
        $this->getBackingStore()->set('wirelessDisplayRequirePinForPairing', $value);
    }

}
