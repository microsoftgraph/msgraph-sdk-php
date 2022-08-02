<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;
use Psr\Http\Message\StreamInterface;

class Windows10GeneralConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $accountsBlockAddingNonMicrosoftAccountEmail Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
    */
    private ?bool $accountsBlockAddingNonMicrosoftAccountEmail = null;
    
    /**
     * @var bool|null $antiTheftModeBlocked Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
    */
    private ?bool $antiTheftModeBlocked = null;
    
    /**
     * @var StateManagementSetting|null $appsAllowTrustedAppsSideloading State Management Setting.
    */
    private ?StateManagementSetting $appsAllowTrustedAppsSideloading = null;
    
    /**
     * @var bool|null $appsBlockWindowsStoreOriginatedApps Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
    */
    private ?bool $appsBlockWindowsStoreOriginatedApps = null;
    
    /**
     * @var array<string>|null $bluetoothAllowedServices Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
    */
    private ?array $bluetoothAllowedServices = null;
    
    /**
     * @var bool|null $bluetoothBlockAdvertising Whether or not to Block the user from using bluetooth advertising.
    */
    private ?bool $bluetoothBlockAdvertising = null;
    
    /**
     * @var bool|null $bluetoothBlockDiscoverableMode Whether or not to Block the user from using bluetooth discoverable mode.
    */
    private ?bool $bluetoothBlockDiscoverableMode = null;
    
    /**
     * @var bool|null $bluetoothBlocked Whether or not to Block the user from using bluetooth.
    */
    private ?bool $bluetoothBlocked = null;
    
    /**
     * @var bool|null $bluetoothBlockPrePairing Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
    */
    private ?bool $bluetoothBlockPrePairing = null;
    
    /**
     * @var bool|null $cameraBlocked Whether or not to Block the user from accessing the camera of the device.
    */
    private ?bool $cameraBlocked = null;
    
    /**
     * @var bool|null $cellularBlockDataWhenRoaming Whether or not to Block the user from using data over cellular while roaming.
    */
    private ?bool $cellularBlockDataWhenRoaming = null;
    
    /**
     * @var bool|null $cellularBlockVpn Whether or not to Block the user from using VPN over cellular.
    */
    private ?bool $cellularBlockVpn = null;
    
    /**
     * @var bool|null $cellularBlockVpnWhenRoaming Whether or not to Block the user from using VPN when roaming over cellular.
    */
    private ?bool $cellularBlockVpnWhenRoaming = null;
    
    /**
     * @var bool|null $certificatesBlockManualRootCertificateInstallation Whether or not to Block the user from doing manual root certificate installation.
    */
    private ?bool $certificatesBlockManualRootCertificateInstallation = null;
    
    /**
     * @var bool|null $connectedDevicesServiceBlocked Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
    */
    private ?bool $connectedDevicesServiceBlocked = null;
    
    /**
     * @var bool|null $copyPasteBlocked Whether or not to Block the user from using copy paste.
    */
    private ?bool $copyPasteBlocked = null;
    
    /**
     * @var bool|null $cortanaBlocked Whether or not to Block the user from using Cortana.
    */
    private ?bool $cortanaBlocked = null;
    
    /**
     * @var bool|null $defenderBlockEndUserAccess Whether or not to block end user access to Defender.
    */
    private ?bool $defenderBlockEndUserAccess = null;
    
    /**
     * @var DefenderCloudBlockLevelType|null $defenderCloudBlockLevel Possible values of Cloud Block Level
    */
    private ?DefenderCloudBlockLevelType $defenderCloudBlockLevel = null;
    
    /**
     * @var int|null $defenderDaysBeforeDeletingQuarantinedMalware Number of days before deleting quarantined malware. Valid values 0 to 90
    */
    private ?int $defenderDaysBeforeDeletingQuarantinedMalware = null;
    
    /**
     * @var DefenderDetectedMalwareActions|null $defenderDetectedMalwareActions Gets or sets Defender’s actions to take on detected Malware per threat level.
    */
    private ?DefenderDetectedMalwareActions $defenderDetectedMalwareActions = null;
    
    /**
     * @var array<string>|null $defenderFileExtensionsToExclude File extensions to exclude from scans and real time protection.
    */
    private ?array $defenderFileExtensionsToExclude = null;
    
    /**
     * @var array<string>|null $defenderFilesAndFoldersToExclude Files and folder to exclude from scans and real time protection.
    */
    private ?array $defenderFilesAndFoldersToExclude = null;
    
    /**
     * @var DefenderMonitorFileActivity|null $defenderMonitorFileActivity Possible values for monitoring file activity.
    */
    private ?DefenderMonitorFileActivity $defenderMonitorFileActivity = null;
    
    /**
     * @var array<string>|null $defenderProcessesToExclude Processes to exclude from scans and real time protection.
    */
    private ?array $defenderProcessesToExclude = null;
    
    /**
     * @var DefenderPromptForSampleSubmission|null $defenderPromptForSampleSubmission Possible values for prompting user for samples submission.
    */
    private ?DefenderPromptForSampleSubmission $defenderPromptForSampleSubmission = null;
    
    /**
     * @var bool|null $defenderRequireBehaviorMonitoring Indicates whether or not to require behavior monitoring.
    */
    private ?bool $defenderRequireBehaviorMonitoring = null;
    
    /**
     * @var bool|null $defenderRequireCloudProtection Indicates whether or not to require cloud protection.
    */
    private ?bool $defenderRequireCloudProtection = null;
    
    /**
     * @var bool|null $defenderRequireNetworkInspectionSystem Indicates whether or not to require network inspection system.
    */
    private ?bool $defenderRequireNetworkInspectionSystem = null;
    
    /**
     * @var bool|null $defenderRequireRealTimeMonitoring Indicates whether or not to require real time monitoring.
    */
    private ?bool $defenderRequireRealTimeMonitoring = null;
    
    /**
     * @var bool|null $defenderScanArchiveFiles Indicates whether or not to scan archive files.
    */
    private ?bool $defenderScanArchiveFiles = null;
    
    /**
     * @var bool|null $defenderScanDownloads Indicates whether or not to scan downloads.
    */
    private ?bool $defenderScanDownloads = null;
    
    /**
     * @var bool|null $defenderScanIncomingMail Indicates whether or not to scan incoming mail messages.
    */
    private ?bool $defenderScanIncomingMail = null;
    
    /**
     * @var bool|null $defenderScanMappedNetworkDrivesDuringFullScan Indicates whether or not to scan mapped network drives during full scan.
    */
    private ?bool $defenderScanMappedNetworkDrivesDuringFullScan = null;
    
    /**
     * @var int|null $defenderScanMaxCpu Max CPU usage percentage during scan. Valid values 0 to 100
    */
    private ?int $defenderScanMaxCpu = null;
    
    /**
     * @var bool|null $defenderScanNetworkFiles Indicates whether or not to scan files opened from a network folder.
    */
    private ?bool $defenderScanNetworkFiles = null;
    
    /**
     * @var bool|null $defenderScanRemovableDrivesDuringFullScan Indicates whether or not to scan removable drives during full scan.
    */
    private ?bool $defenderScanRemovableDrivesDuringFullScan = null;
    
    /**
     * @var bool|null $defenderScanScriptsLoadedInInternetExplorer Indicates whether or not to scan scripts loaded in Internet Explorer browser.
    */
    private ?bool $defenderScanScriptsLoadedInInternetExplorer = null;
    
    /**
     * @var DefenderScanType|null $defenderScanType Possible values for system scan type.
    */
    private ?DefenderScanType $defenderScanType = null;
    
    /**
     * @var Time|null $defenderScheduledQuickScanTime The time to perform a daily quick scan.
    */
    private ?Time $defenderScheduledQuickScanTime = null;
    
    /**
     * @var Time|null $defenderScheduledScanTime The defender time for the system scan.
    */
    private ?Time $defenderScheduledScanTime = null;
    
    /**
     * @var int|null $defenderSignatureUpdateIntervalInHours The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
    */
    private ?int $defenderSignatureUpdateIntervalInHours = null;
    
    /**
     * @var WeeklySchedule|null $defenderSystemScanSchedule Possible values for a weekly schedule.
    */
    private ?WeeklySchedule $defenderSystemScanSchedule = null;
    
    /**
     * @var StateManagementSetting|null $developerUnlockSetting State Management Setting.
    */
    private ?StateManagementSetting $developerUnlockSetting = null;
    
    /**
     * @var bool|null $deviceManagementBlockFactoryResetOnMobile Indicates whether or not to Block the user from resetting their phone.
    */
    private ?bool $deviceManagementBlockFactoryResetOnMobile = null;
    
    /**
     * @var bool|null $deviceManagementBlockManualUnenroll Indicates whether or not to Block the user from doing manual un-enrollment from device management.
    */
    private ?bool $deviceManagementBlockManualUnenroll = null;
    
    /**
     * @var DiagnosticDataSubmissionMode|null $diagnosticsDataSubmissionMode Allow the device to send diagnostic and usage telemetry data, such as Watson.
    */
    private ?DiagnosticDataSubmissionMode $diagnosticsDataSubmissionMode = null;
    
    /**
     * @var bool|null $edgeAllowStartPagesModification Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
    */
    private ?bool $edgeAllowStartPagesModification = null;
    
    /**
     * @var bool|null $edgeBlockAccessToAboutFlags Indicates whether or not to prevent access to about flags on Edge browser.
    */
    private ?bool $edgeBlockAccessToAboutFlags = null;
    
    /**
     * @var bool|null $edgeBlockAddressBarDropdown Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
    */
    private ?bool $edgeBlockAddressBarDropdown = null;
    
    /**
     * @var bool|null $edgeBlockAutofill Indicates whether or not to block auto fill.
    */
    private ?bool $edgeBlockAutofill = null;
    
    /**
     * @var bool|null $edgeBlockCompatibilityList Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
    */
    private ?bool $edgeBlockCompatibilityList = null;
    
    /**
     * @var bool|null $edgeBlockDeveloperTools Indicates whether or not to block developer tools in the Edge browser.
    */
    private ?bool $edgeBlockDeveloperTools = null;
    
    /**
     * @var bool|null $edgeBlocked Indicates whether or not to Block the user from using the Edge browser.
    */
    private ?bool $edgeBlocked = null;
    
    /**
     * @var bool|null $edgeBlockExtensions Indicates whether or not to block extensions in the Edge browser.
    */
    private ?bool $edgeBlockExtensions = null;
    
    /**
     * @var bool|null $edgeBlockInPrivateBrowsing Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
    */
    private ?bool $edgeBlockInPrivateBrowsing = null;
    
    /**
     * @var bool|null $edgeBlockJavaScript Indicates whether or not to Block the user from using JavaScript.
    */
    private ?bool $edgeBlockJavaScript = null;
    
    /**
     * @var bool|null $edgeBlockLiveTileDataCollection Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
    */
    private ?bool $edgeBlockLiveTileDataCollection = null;
    
    /**
     * @var bool|null $edgeBlockPasswordManager Indicates whether or not to Block password manager.
    */
    private ?bool $edgeBlockPasswordManager = null;
    
    /**
     * @var bool|null $edgeBlockPopups Indicates whether or not to block popups.
    */
    private ?bool $edgeBlockPopups = null;
    
    /**
     * @var bool|null $edgeBlockSearchSuggestions Indicates whether or not to block the user from using the search suggestions in the address bar.
    */
    private ?bool $edgeBlockSearchSuggestions = null;
    
    /**
     * @var bool|null $edgeBlockSendingDoNotTrackHeader Indicates whether or not to Block the user from sending the do not track header.
    */
    private ?bool $edgeBlockSendingDoNotTrackHeader = null;
    
    /**
     * @var bool|null $edgeBlockSendingIntranetTrafficToInternetExplorer Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
    */
    private ?bool $edgeBlockSendingIntranetTrafficToInternetExplorer = null;
    
    /**
     * @var bool|null $edgeClearBrowsingDataOnExit Clear browsing data on exiting Microsoft Edge.
    */
    private ?bool $edgeClearBrowsingDataOnExit = null;
    
    /**
     * @var EdgeCookiePolicy|null $edgeCookiePolicy Possible values to specify which cookies are allowed in Microsoft Edge.
    */
    private ?EdgeCookiePolicy $edgeCookiePolicy = null;
    
    /**
     * @var bool|null $edgeDisableFirstRunPage Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
    */
    private ?bool $edgeDisableFirstRunPage = null;
    
    /**
     * @var string|null $edgeEnterpriseModeSiteListLocation Indicates the enterprise mode site list location. Could be a local file, local network or http location.
    */
    private ?string $edgeEnterpriseModeSiteListLocation = null;
    
    /**
     * @var string|null $edgeFirstRunUrl The first run URL for when Edge browser is opened for the first time.
    */
    private ?string $edgeFirstRunUrl = null;
    
    /**
     * @var array<string>|null $edgeHomepageUrls The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
    */
    private ?array $edgeHomepageUrls = null;
    
    /**
     * @var bool|null $edgeRequireSmartScreen Indicates whether or not to Require the user to use the smart screen filter.
    */
    private ?bool $edgeRequireSmartScreen = null;
    
    /**
     * @var EdgeSearchEngineBase|null $edgeSearchEngine Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
    */
    private ?EdgeSearchEngineBase $edgeSearchEngine = null;
    
    /**
     * @var bool|null $edgeSendIntranetTrafficToInternetExplorer Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
    */
    private ?bool $edgeSendIntranetTrafficToInternetExplorer = null;
    
    /**
     * @var bool|null $edgeSyncFavoritesWithInternetExplorer Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
    */
    private ?bool $edgeSyncFavoritesWithInternetExplorer = null;
    
    /**
     * @var string|null $enterpriseCloudPrintDiscoveryEndPoint Endpoint for discovering cloud printers.
    */
    private ?string $enterpriseCloudPrintDiscoveryEndPoint = null;
    
    /**
     * @var int|null $enterpriseCloudPrintDiscoveryMaxLimit Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
    */
    private ?int $enterpriseCloudPrintDiscoveryMaxLimit = null;
    
    /**
     * @var string|null $enterpriseCloudPrintMopriaDiscoveryResourceIdentifier OAuth resource URI for printer discovery service as configured in Azure portal.
    */
    private ?string $enterpriseCloudPrintMopriaDiscoveryResourceIdentifier = null;
    
    /**
     * @var string|null $enterpriseCloudPrintOAuthAuthority Authentication endpoint for acquiring OAuth tokens.
    */
    private ?string $enterpriseCloudPrintOAuthAuthority = null;
    
    /**
     * @var string|null $enterpriseCloudPrintOAuthClientIdentifier GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
    */
    private ?string $enterpriseCloudPrintOAuthClientIdentifier = null;
    
    /**
     * @var string|null $enterpriseCloudPrintResourceIdentifier OAuth resource URI for print service as configured in the Azure portal.
    */
    private ?string $enterpriseCloudPrintResourceIdentifier = null;
    
    /**
     * @var bool|null $experienceBlockDeviceDiscovery Indicates whether or not to enable device discovery UX.
    */
    private ?bool $experienceBlockDeviceDiscovery = null;
    
    /**
     * @var bool|null $experienceBlockErrorDialogWhenNoSIM Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
    */
    private ?bool $experienceBlockErrorDialogWhenNoSIM = null;
    
    /**
     * @var bool|null $experienceBlockTaskSwitcher Indicates whether or not to enable task switching on the device.
    */
    private ?bool $experienceBlockTaskSwitcher = null;
    
    /**
     * @var bool|null $gameDvrBlocked Indicates whether or not to block DVR and broadcasting.
    */
    private ?bool $gameDvrBlocked = null;
    
    /**
     * @var bool|null $internetSharingBlocked Indicates whether or not to Block the user from using internet sharing.
    */
    private ?bool $internetSharingBlocked = null;
    
    /**
     * @var bool|null $locationServicesBlocked Indicates whether or not to Block the user from location services.
    */
    private ?bool $locationServicesBlocked = null;
    
    /**
     * @var bool|null $lockScreenAllowTimeoutConfiguration Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
    */
    private ?bool $lockScreenAllowTimeoutConfiguration = null;
    
    /**
     * @var bool|null $lockScreenBlockActionCenterNotifications Indicates whether or not to block action center notifications over lock screen.
    */
    private ?bool $lockScreenBlockActionCenterNotifications = null;
    
    /**
     * @var bool|null $lockScreenBlockCortana Indicates whether or not the user can interact with Cortana using speech while the system is locked.
    */
    private ?bool $lockScreenBlockCortana = null;
    
    /**
     * @var bool|null $lockScreenBlockToastNotifications Indicates whether to allow toast notifications above the device lock screen.
    */
    private ?bool $lockScreenBlockToastNotifications = null;
    
    /**
     * @var int|null $lockScreenTimeoutInSeconds Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
    */
    private ?int $lockScreenTimeoutInSeconds = null;
    
    /**
     * @var bool|null $logonBlockFastUserSwitching Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
    */
    private ?bool $logonBlockFastUserSwitching = null;
    
    /**
     * @var bool|null $microsoftAccountBlocked Indicates whether or not to Block a Microsoft account.
    */
    private ?bool $microsoftAccountBlocked = null;
    
    /**
     * @var bool|null $microsoftAccountBlockSettingsSync Indicates whether or not to Block Microsoft account settings sync.
    */
    private ?bool $microsoftAccountBlockSettingsSync = null;
    
    /**
     * @var bool|null $networkProxyApplySettingsDeviceWide If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
    */
    private ?bool $networkProxyApplySettingsDeviceWide = null;
    
    /**
     * @var string|null $networkProxyAutomaticConfigurationUrl Address to the proxy auto-config (PAC) script you want to use.
    */
    private ?string $networkProxyAutomaticConfigurationUrl = null;
    
    /**
     * @var bool|null $networkProxyDisableAutoDetect Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
    */
    private ?bool $networkProxyDisableAutoDetect = null;
    
    /**
     * @var Windows10NetworkProxyServer|null $networkProxyServer Specifies manual proxy server settings.
    */
    private ?Windows10NetworkProxyServer $networkProxyServer = null;
    
    /**
     * @var bool|null $nfcBlocked Indicates whether or not to Block the user from using near field communication.
    */
    private ?bool $nfcBlocked = null;
    
    /**
     * @var bool|null $oneDriveDisableFileSync Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
    */
    private ?bool $oneDriveDisableFileSync = null;
    
    /**
     * @var bool|null $passwordBlockSimple Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
    */
    private ?bool $passwordBlockSimple = null;
    
    /**
     * @var int|null $passwordExpirationDays The password expiration in days. Valid values 0 to 730
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumCharacterSetCount The number of character sets required in the password.
    */
    private ?int $passwordMinimumCharacterSetCount = null;
    
    /**
     * @var int|null $passwordMinimumLength The minimum password length. Valid values 4 to 16
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeScreenTimeout The minutes of inactivity before the screen times out.
    */
    private ?int $passwordMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var int|null $passwordPreviousPasswordBlockCount The number of previous passwords to prevent reuse of. Valid values 0 to 50
    */
    private ?int $passwordPreviousPasswordBlockCount = null;
    
    /**
     * @var bool|null $passwordRequired Indicates whether or not to require the user to have a password.
    */
    private ?bool $passwordRequired = null;
    
    /**
     * @var RequiredPasswordType|null $passwordRequiredType Possible values of required passwords.
    */
    private ?RequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var bool|null $passwordRequireWhenResumeFromIdleState Indicates whether or not to require a password upon resuming from an idle state.
    */
    private ?bool $passwordRequireWhenResumeFromIdleState = null;
    
    /**
     * @var int|null $passwordSignInFailureCountBeforeFactoryReset The number of sign in failures before factory reset. Valid values 0 to 999
    */
    private ?int $passwordSignInFailureCountBeforeFactoryReset = null;
    
    /**
     * @var string|null $personalizationDesktopImageUrl A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
    */
    private ?string $personalizationDesktopImageUrl = null;
    
    /**
     * @var string|null $personalizationLockScreenImageUrl A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
    */
    private ?string $personalizationLockScreenImageUrl = null;
    
    /**
     * @var StateManagementSetting|null $privacyAdvertisingId State Management Setting.
    */
    private ?StateManagementSetting $privacyAdvertisingId = null;
    
    /**
     * @var bool|null $privacyAutoAcceptPairingAndConsentPrompts Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
    */
    private ?bool $privacyAutoAcceptPairingAndConsentPrompts = null;
    
    /**
     * @var bool|null $privacyBlockInputPersonalization Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
    */
    private ?bool $privacyBlockInputPersonalization = null;
    
    /**
     * @var bool|null $resetProtectionModeBlocked Indicates whether or not to Block the user from reset protection mode.
    */
    private ?bool $resetProtectionModeBlocked = null;
    
    /**
     * @var SafeSearchFilterType|null $safeSearchFilter Specifies what level of safe search (filtering adult content) is required
    */
    private ?SafeSearchFilterType $safeSearchFilter = null;
    
    /**
     * @var bool|null $screenCaptureBlocked Indicates whether or not to Block the user from taking Screenshots.
    */
    private ?bool $screenCaptureBlocked = null;
    
    /**
     * @var bool|null $searchBlockDiacritics Specifies if search can use diacritics.
    */
    private ?bool $searchBlockDiacritics = null;
    
    /**
     * @var bool|null $searchDisableAutoLanguageDetection Specifies whether to use automatic language detection when indexing content and properties.
    */
    private ?bool $searchDisableAutoLanguageDetection = null;
    
    /**
     * @var bool|null $searchDisableIndexerBackoff Indicates whether or not to disable the search indexer backoff feature.
    */
    private ?bool $searchDisableIndexerBackoff = null;
    
    /**
     * @var bool|null $searchDisableIndexingEncryptedItems Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
    */
    private ?bool $searchDisableIndexingEncryptedItems = null;
    
    /**
     * @var bool|null $searchDisableIndexingRemovableDrive Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
    */
    private ?bool $searchDisableIndexingRemovableDrive = null;
    
    /**
     * @var bool|null $searchEnableAutomaticIndexSizeManangement Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
    */
    private ?bool $searchEnableAutomaticIndexSizeManangement = null;
    
    /**
     * @var bool|null $searchEnableRemoteQueries Indicates whether or not to block remote queries of this computer’s index.
    */
    private ?bool $searchEnableRemoteQueries = null;
    
    /**
     * @var bool|null $settingsBlockAccountsPage Indicates whether or not to block access to Accounts in Settings app.
    */
    private ?bool $settingsBlockAccountsPage = null;
    
    /**
     * @var bool|null $settingsBlockAddProvisioningPackage Indicates whether or not to block the user from installing provisioning packages.
    */
    private ?bool $settingsBlockAddProvisioningPackage = null;
    
    /**
     * @var bool|null $settingsBlockAppsPage Indicates whether or not to block access to Apps in Settings app.
    */
    private ?bool $settingsBlockAppsPage = null;
    
    /**
     * @var bool|null $settingsBlockChangeLanguage Indicates whether or not to block the user from changing the language settings.
    */
    private ?bool $settingsBlockChangeLanguage = null;
    
    /**
     * @var bool|null $settingsBlockChangePowerSleep Indicates whether or not to block the user from changing power and sleep settings.
    */
    private ?bool $settingsBlockChangePowerSleep = null;
    
    /**
     * @var bool|null $settingsBlockChangeRegion Indicates whether or not to block the user from changing the region settings.
    */
    private ?bool $settingsBlockChangeRegion = null;
    
    /**
     * @var bool|null $settingsBlockChangeSystemTime Indicates whether or not to block the user from changing date and time settings.
    */
    private ?bool $settingsBlockChangeSystemTime = null;
    
    /**
     * @var bool|null $settingsBlockDevicesPage Indicates whether or not to block access to Devices in Settings app.
    */
    private ?bool $settingsBlockDevicesPage = null;
    
    /**
     * @var bool|null $settingsBlockEaseOfAccessPage Indicates whether or not to block access to Ease of Access in Settings app.
    */
    private ?bool $settingsBlockEaseOfAccessPage = null;
    
    /**
     * @var bool|null $settingsBlockEditDeviceName Indicates whether or not to block the user from editing the device name.
    */
    private ?bool $settingsBlockEditDeviceName = null;
    
    /**
     * @var bool|null $settingsBlockGamingPage Indicates whether or not to block access to Gaming in Settings app.
    */
    private ?bool $settingsBlockGamingPage = null;
    
    /**
     * @var bool|null $settingsBlockNetworkInternetPage Indicates whether or not to block access to Network & Internet in Settings app.
    */
    private ?bool $settingsBlockNetworkInternetPage = null;
    
    /**
     * @var bool|null $settingsBlockPersonalizationPage Indicates whether or not to block access to Personalization in Settings app.
    */
    private ?bool $settingsBlockPersonalizationPage = null;
    
    /**
     * @var bool|null $settingsBlockPrivacyPage Indicates whether or not to block access to Privacy in Settings app.
    */
    private ?bool $settingsBlockPrivacyPage = null;
    
    /**
     * @var bool|null $settingsBlockRemoveProvisioningPackage Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
    */
    private ?bool $settingsBlockRemoveProvisioningPackage = null;
    
    /**
     * @var bool|null $settingsBlockSettingsApp Indicates whether or not to block access to Settings app.
    */
    private ?bool $settingsBlockSettingsApp = null;
    
    /**
     * @var bool|null $settingsBlockSystemPage Indicates whether or not to block access to System in Settings app.
    */
    private ?bool $settingsBlockSystemPage = null;
    
    /**
     * @var bool|null $settingsBlockTimeLanguagePage Indicates whether or not to block access to Time & Language in Settings app.
    */
    private ?bool $settingsBlockTimeLanguagePage = null;
    
    /**
     * @var bool|null $settingsBlockUpdateSecurityPage Indicates whether or not to block access to Update & Security in Settings app.
    */
    private ?bool $settingsBlockUpdateSecurityPage = null;
    
    /**
     * @var bool|null $sharedUserAppDataAllowed Indicates whether or not to block multiple users of the same app to share data.
    */
    private ?bool $sharedUserAppDataAllowed = null;
    
    /**
     * @var bool|null $smartScreenBlockPromptOverride Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
    */
    private ?bool $smartScreenBlockPromptOverride = null;
    
    /**
     * @var bool|null $smartScreenBlockPromptOverrideForFiles Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
    */
    private ?bool $smartScreenBlockPromptOverrideForFiles = null;
    
    /**
     * @var bool|null $smartScreenEnableAppInstallControl This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
    */
    private ?bool $smartScreenEnableAppInstallControl = null;
    
    /**
     * @var bool|null $startBlockUnpinningAppsFromTaskbar Indicates whether or not to block the user from unpinning apps from taskbar.
    */
    private ?bool $startBlockUnpinningAppsFromTaskbar = null;
    
    /**
     * @var WindowsStartMenuAppListVisibilityType|null $startMenuAppListVisibility Type of start menu app list visibility.
    */
    private ?WindowsStartMenuAppListVisibilityType $startMenuAppListVisibility = null;
    
    /**
     * @var bool|null $startMenuHideChangeAccountSettings Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
    */
    private ?bool $startMenuHideChangeAccountSettings = null;
    
    /**
     * @var bool|null $startMenuHideFrequentlyUsedApps Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
    */
    private ?bool $startMenuHideFrequentlyUsedApps = null;
    
    /**
     * @var bool|null $startMenuHideHibernate Enabling this policy hides hibernate from appearing in the power button in the start menu.
    */
    private ?bool $startMenuHideHibernate = null;
    
    /**
     * @var bool|null $startMenuHideLock Enabling this policy hides lock from appearing in the user tile in the start menu.
    */
    private ?bool $startMenuHideLock = null;
    
    /**
     * @var bool|null $startMenuHidePowerButton Enabling this policy hides the power button from appearing in the start menu.
    */
    private ?bool $startMenuHidePowerButton = null;
    
    /**
     * @var bool|null $startMenuHideRecentJumpLists Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
    */
    private ?bool $startMenuHideRecentJumpLists = null;
    
    /**
     * @var bool|null $startMenuHideRecentlyAddedApps Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
    */
    private ?bool $startMenuHideRecentlyAddedApps = null;
    
    /**
     * @var bool|null $startMenuHideRestartOptions Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
    */
    private ?bool $startMenuHideRestartOptions = null;
    
    /**
     * @var bool|null $startMenuHideShutDown Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
    */
    private ?bool $startMenuHideShutDown = null;
    
    /**
     * @var bool|null $startMenuHideSignOut Enabling this policy hides sign out from appearing in the user tile in the start menu.
    */
    private ?bool $startMenuHideSignOut = null;
    
    /**
     * @var bool|null $startMenuHideSleep Enabling this policy hides sleep from appearing in the power button in the start menu.
    */
    private ?bool $startMenuHideSleep = null;
    
    /**
     * @var bool|null $startMenuHideSwitchAccount Enabling this policy hides switch account from appearing in the user tile in the start menu.
    */
    private ?bool $startMenuHideSwitchAccount = null;
    
    /**
     * @var bool|null $startMenuHideUserTile Enabling this policy hides the user tile from appearing in the start menu.
    */
    private ?bool $startMenuHideUserTile = null;
    
    /**
     * @var StreamInterface|null $startMenuLayoutEdgeAssetsXml This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
    */
    private ?StreamInterface $startMenuLayoutEdgeAssetsXml = null;
    
    /**
     * @var StreamInterface|null $startMenuLayoutXml Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
    */
    private ?StreamInterface $startMenuLayoutXml = null;
    
    /**
     * @var WindowsStartMenuModeType|null $startMenuMode Type of display modes for the start menu.
    */
    private ?WindowsStartMenuModeType $startMenuMode = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderDocuments Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderDocuments = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderDownloads Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderDownloads = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderFileExplorer Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderFileExplorer = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderHomeGroup Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderHomeGroup = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderMusic Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderMusic = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderNetwork Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderNetwork = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderPersonalFolder Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderPersonalFolder = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderPictures Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderPictures = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderSettings Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderSettings = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderVideos Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderVideos = null;
    
    /**
     * @var bool|null $storageBlockRemovableStorage Indicates whether or not to Block the user from using removable storage.
    */
    private ?bool $storageBlockRemovableStorage = null;
    
    /**
     * @var bool|null $storageRequireMobileDeviceEncryption Indicating whether or not to require encryption on a mobile device.
    */
    private ?bool $storageRequireMobileDeviceEncryption = null;
    
    /**
     * @var bool|null $storageRestrictAppDataToSystemVolume Indicates whether application data is restricted to the system drive.
    */
    private ?bool $storageRestrictAppDataToSystemVolume = null;
    
    /**
     * @var bool|null $storageRestrictAppInstallToSystemVolume Indicates whether the installation of applications is restricted to the system drive.
    */
    private ?bool $storageRestrictAppInstallToSystemVolume = null;
    
    /**
     * @var bool|null $tenantLockdownRequireNetworkDuringOutOfBoxExperience Whether the device is required to connect to the network.
    */
    private ?bool $tenantLockdownRequireNetworkDuringOutOfBoxExperience = null;
    
    /**
     * @var bool|null $usbBlocked Indicates whether or not to Block the user from USB connection.
    */
    private ?bool $usbBlocked = null;
    
    /**
     * @var bool|null $voiceRecordingBlocked Indicates whether or not to Block the user from voice recording.
    */
    private ?bool $voiceRecordingBlocked = null;
    
    /**
     * @var bool|null $webRtcBlockLocalhostIpAddress Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
    */
    private ?bool $webRtcBlockLocalhostIpAddress = null;
    
    /**
     * @var bool|null $wiFiBlockAutomaticConnectHotspots Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
    */
    private ?bool $wiFiBlockAutomaticConnectHotspots = null;
    
    /**
     * @var bool|null $wiFiBlocked Indicates whether or not to Block the user from using Wi-Fi.
    */
    private ?bool $wiFiBlocked = null;
    
    /**
     * @var bool|null $wiFiBlockManualConfiguration Indicates whether or not to Block the user from using Wi-Fi manual configuration.
    */
    private ?bool $wiFiBlockManualConfiguration = null;
    
    /**
     * @var int|null $wiFiScanInterval Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
    */
    private ?int $wiFiScanInterval = null;
    
    /**
     * @var bool|null $windowsSpotlightBlockConsumerSpecificFeatures Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
    */
    private ?bool $windowsSpotlightBlockConsumerSpecificFeatures = null;
    
    /**
     * @var bool|null $windowsSpotlightBlocked Allows IT admins to turn off all Windows Spotlight features
    */
    private ?bool $windowsSpotlightBlocked = null;
    
    /**
     * @var bool|null $windowsSpotlightBlockOnActionCenter Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
    */
    private ?bool $windowsSpotlightBlockOnActionCenter = null;
    
    /**
     * @var bool|null $windowsSpotlightBlockTailoredExperiences Block personalized content in Windows spotlight based on user’s device usage.
    */
    private ?bool $windowsSpotlightBlockTailoredExperiences = null;
    
    /**
     * @var bool|null $windowsSpotlightBlockThirdPartyNotifications Block third party content delivered via Windows Spotlight
    */
    private ?bool $windowsSpotlightBlockThirdPartyNotifications = null;
    
    /**
     * @var bool|null $windowsSpotlightBlockWelcomeExperience Block Windows Spotlight Windows welcome experience
    */
    private ?bool $windowsSpotlightBlockWelcomeExperience = null;
    
    /**
     * @var bool|null $windowsSpotlightBlockWindowsTips Allows IT admins to turn off the popup of Windows Tips.
    */
    private ?bool $windowsSpotlightBlockWindowsTips = null;
    
    /**
     * @var WindowsSpotlightEnablementSettings|null $windowsSpotlightConfigureOnLockScreen Allows IT admind to set a predefined default search engine for MDM-Controlled devices
    */
    private ?WindowsSpotlightEnablementSettings $windowsSpotlightConfigureOnLockScreen = null;
    
    /**
     * @var bool|null $windowsStoreBlockAutoUpdate Indicates whether or not to block automatic update of apps from Windows Store.
    */
    private ?bool $windowsStoreBlockAutoUpdate = null;
    
    /**
     * @var bool|null $windowsStoreBlocked Indicates whether or not to Block the user from using the Windows store.
    */
    private ?bool $windowsStoreBlocked = null;
    
    /**
     * @var bool|null $windowsStoreEnablePrivateStoreOnly Indicates whether or not to enable Private Store Only.
    */
    private ?bool $windowsStoreEnablePrivateStoreOnly = null;
    
    /**
     * @var bool|null $wirelessDisplayBlockProjectionToThisDevice Indicates whether or not to allow other devices from discovering this PC for projection.
    */
    private ?bool $wirelessDisplayBlockProjectionToThisDevice = null;
    
    /**
     * @var bool|null $wirelessDisplayBlockUserInputFromReceiver Indicates whether or not to allow user input from wireless display receiver.
    */
    private ?bool $wirelessDisplayBlockUserInputFromReceiver = null;
    
    /**
     * @var bool|null $wirelessDisplayRequirePinForPairing Indicates whether or not to require a PIN for new devices to initiate pairing.
    */
    private ?bool $wirelessDisplayRequirePinForPairing = null;
    
    /**
     * Instantiates a new Windows10GeneralConfiguration and sets the default values.
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
        return $this->accountsBlockAddingNonMicrosoftAccountEmail;
    }

    /**
     * Gets the antiTheftModeBlocked property value. Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
     * @return bool|null
    */
    public function getAntiTheftModeBlocked(): ?bool {
        return $this->antiTheftModeBlocked;
    }

    /**
     * Gets the appsAllowTrustedAppsSideloading property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getAppsAllowTrustedAppsSideloading(): ?StateManagementSetting {
        return $this->appsAllowTrustedAppsSideloading;
    }

    /**
     * Gets the appsBlockWindowsStoreOriginatedApps property value. Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
     * @return bool|null
    */
    public function getAppsBlockWindowsStoreOriginatedApps(): ?bool {
        return $this->appsBlockWindowsStoreOriginatedApps;
    }

    /**
     * Gets the bluetoothAllowedServices property value. Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
     * @return array<string>|null
    */
    public function getBluetoothAllowedServices(): ?array {
        return $this->bluetoothAllowedServices;
    }

    /**
     * Gets the bluetoothBlockAdvertising property value. Whether or not to Block the user from using bluetooth advertising.
     * @return bool|null
    */
    public function getBluetoothBlockAdvertising(): ?bool {
        return $this->bluetoothBlockAdvertising;
    }

    /**
     * Gets the bluetoothBlockDiscoverableMode property value. Whether or not to Block the user from using bluetooth discoverable mode.
     * @return bool|null
    */
    public function getBluetoothBlockDiscoverableMode(): ?bool {
        return $this->bluetoothBlockDiscoverableMode;
    }

    /**
     * Gets the bluetoothBlocked property value. Whether or not to Block the user from using bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlocked(): ?bool {
        return $this->bluetoothBlocked;
    }

    /**
     * Gets the bluetoothBlockPrePairing property value. Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
     * @return bool|null
    */
    public function getBluetoothBlockPrePairing(): ?bool {
        return $this->bluetoothBlockPrePairing;
    }

    /**
     * Gets the cameraBlocked property value. Whether or not to Block the user from accessing the camera of the device.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        return $this->cameraBlocked;
    }

    /**
     * Gets the cellularBlockDataWhenRoaming property value. Whether or not to Block the user from using data over cellular while roaming.
     * @return bool|null
    */
    public function getCellularBlockDataWhenRoaming(): ?bool {
        return $this->cellularBlockDataWhenRoaming;
    }

    /**
     * Gets the cellularBlockVpn property value. Whether or not to Block the user from using VPN over cellular.
     * @return bool|null
    */
    public function getCellularBlockVpn(): ?bool {
        return $this->cellularBlockVpn;
    }

    /**
     * Gets the cellularBlockVpnWhenRoaming property value. Whether or not to Block the user from using VPN when roaming over cellular.
     * @return bool|null
    */
    public function getCellularBlockVpnWhenRoaming(): ?bool {
        return $this->cellularBlockVpnWhenRoaming;
    }

    /**
     * Gets the certificatesBlockManualRootCertificateInstallation property value. Whether or not to Block the user from doing manual root certificate installation.
     * @return bool|null
    */
    public function getCertificatesBlockManualRootCertificateInstallation(): ?bool {
        return $this->certificatesBlockManualRootCertificateInstallation;
    }

    /**
     * Gets the connectedDevicesServiceBlocked property value. Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
     * @return bool|null
    */
    public function getConnectedDevicesServiceBlocked(): ?bool {
        return $this->connectedDevicesServiceBlocked;
    }

    /**
     * Gets the copyPasteBlocked property value. Whether or not to Block the user from using copy paste.
     * @return bool|null
    */
    public function getCopyPasteBlocked(): ?bool {
        return $this->copyPasteBlocked;
    }

    /**
     * Gets the cortanaBlocked property value. Whether or not to Block the user from using Cortana.
     * @return bool|null
    */
    public function getCortanaBlocked(): ?bool {
        return $this->cortanaBlocked;
    }

    /**
     * Gets the defenderBlockEndUserAccess property value. Whether or not to block end user access to Defender.
     * @return bool|null
    */
    public function getDefenderBlockEndUserAccess(): ?bool {
        return $this->defenderBlockEndUserAccess;
    }

    /**
     * Gets the defenderCloudBlockLevel property value. Possible values of Cloud Block Level
     * @return DefenderCloudBlockLevelType|null
    */
    public function getDefenderCloudBlockLevel(): ?DefenderCloudBlockLevelType {
        return $this->defenderCloudBlockLevel;
    }

    /**
     * Gets the defenderDaysBeforeDeletingQuarantinedMalware property value. Number of days before deleting quarantined malware. Valid values 0 to 90
     * @return int|null
    */
    public function getDefenderDaysBeforeDeletingQuarantinedMalware(): ?int {
        return $this->defenderDaysBeforeDeletingQuarantinedMalware;
    }

    /**
     * Gets the defenderDetectedMalwareActions property value. Gets or sets Defender’s actions to take on detected Malware per threat level.
     * @return DefenderDetectedMalwareActions|null
    */
    public function getDefenderDetectedMalwareActions(): ?DefenderDetectedMalwareActions {
        return $this->defenderDetectedMalwareActions;
    }

    /**
     * Gets the defenderFileExtensionsToExclude property value. File extensions to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderFileExtensionsToExclude(): ?array {
        return $this->defenderFileExtensionsToExclude;
    }

    /**
     * Gets the defenderFilesAndFoldersToExclude property value. Files and folder to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderFilesAndFoldersToExclude(): ?array {
        return $this->defenderFilesAndFoldersToExclude;
    }

    /**
     * Gets the defenderMonitorFileActivity property value. Possible values for monitoring file activity.
     * @return DefenderMonitorFileActivity|null
    */
    public function getDefenderMonitorFileActivity(): ?DefenderMonitorFileActivity {
        return $this->defenderMonitorFileActivity;
    }

    /**
     * Gets the defenderProcessesToExclude property value. Processes to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderProcessesToExclude(): ?array {
        return $this->defenderProcessesToExclude;
    }

    /**
     * Gets the defenderPromptForSampleSubmission property value. Possible values for prompting user for samples submission.
     * @return DefenderPromptForSampleSubmission|null
    */
    public function getDefenderPromptForSampleSubmission(): ?DefenderPromptForSampleSubmission {
        return $this->defenderPromptForSampleSubmission;
    }

    /**
     * Gets the defenderRequireBehaviorMonitoring property value. Indicates whether or not to require behavior monitoring.
     * @return bool|null
    */
    public function getDefenderRequireBehaviorMonitoring(): ?bool {
        return $this->defenderRequireBehaviorMonitoring;
    }

    /**
     * Gets the defenderRequireCloudProtection property value. Indicates whether or not to require cloud protection.
     * @return bool|null
    */
    public function getDefenderRequireCloudProtection(): ?bool {
        return $this->defenderRequireCloudProtection;
    }

    /**
     * Gets the defenderRequireNetworkInspectionSystem property value. Indicates whether or not to require network inspection system.
     * @return bool|null
    */
    public function getDefenderRequireNetworkInspectionSystem(): ?bool {
        return $this->defenderRequireNetworkInspectionSystem;
    }

    /**
     * Gets the defenderRequireRealTimeMonitoring property value. Indicates whether or not to require real time monitoring.
     * @return bool|null
    */
    public function getDefenderRequireRealTimeMonitoring(): ?bool {
        return $this->defenderRequireRealTimeMonitoring;
    }

    /**
     * Gets the defenderScanArchiveFiles property value. Indicates whether or not to scan archive files.
     * @return bool|null
    */
    public function getDefenderScanArchiveFiles(): ?bool {
        return $this->defenderScanArchiveFiles;
    }

    /**
     * Gets the defenderScanDownloads property value. Indicates whether or not to scan downloads.
     * @return bool|null
    */
    public function getDefenderScanDownloads(): ?bool {
        return $this->defenderScanDownloads;
    }

    /**
     * Gets the defenderScanIncomingMail property value. Indicates whether or not to scan incoming mail messages.
     * @return bool|null
    */
    public function getDefenderScanIncomingMail(): ?bool {
        return $this->defenderScanIncomingMail;
    }

    /**
     * Gets the defenderScanMappedNetworkDrivesDuringFullScan property value. Indicates whether or not to scan mapped network drives during full scan.
     * @return bool|null
    */
    public function getDefenderScanMappedNetworkDrivesDuringFullScan(): ?bool {
        return $this->defenderScanMappedNetworkDrivesDuringFullScan;
    }

    /**
     * Gets the defenderScanMaxCpu property value. Max CPU usage percentage during scan. Valid values 0 to 100
     * @return int|null
    */
    public function getDefenderScanMaxCpu(): ?int {
        return $this->defenderScanMaxCpu;
    }

    /**
     * Gets the defenderScanNetworkFiles property value. Indicates whether or not to scan files opened from a network folder.
     * @return bool|null
    */
    public function getDefenderScanNetworkFiles(): ?bool {
        return $this->defenderScanNetworkFiles;
    }

    /**
     * Gets the defenderScanRemovableDrivesDuringFullScan property value. Indicates whether or not to scan removable drives during full scan.
     * @return bool|null
    */
    public function getDefenderScanRemovableDrivesDuringFullScan(): ?bool {
        return $this->defenderScanRemovableDrivesDuringFullScan;
    }

    /**
     * Gets the defenderScanScriptsLoadedInInternetExplorer property value. Indicates whether or not to scan scripts loaded in Internet Explorer browser.
     * @return bool|null
    */
    public function getDefenderScanScriptsLoadedInInternetExplorer(): ?bool {
        return $this->defenderScanScriptsLoadedInInternetExplorer;
    }

    /**
     * Gets the defenderScanType property value. Possible values for system scan type.
     * @return DefenderScanType|null
    */
    public function getDefenderScanType(): ?DefenderScanType {
        return $this->defenderScanType;
    }

    /**
     * Gets the defenderScheduledQuickScanTime property value. The time to perform a daily quick scan.
     * @return Time|null
    */
    public function getDefenderScheduledQuickScanTime(): ?Time {
        return $this->defenderScheduledQuickScanTime;
    }

    /**
     * Gets the defenderScheduledScanTime property value. The defender time for the system scan.
     * @return Time|null
    */
    public function getDefenderScheduledScanTime(): ?Time {
        return $this->defenderScheduledScanTime;
    }

    /**
     * Gets the defenderSignatureUpdateIntervalInHours property value. The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
     * @return int|null
    */
    public function getDefenderSignatureUpdateIntervalInHours(): ?int {
        return $this->defenderSignatureUpdateIntervalInHours;
    }

    /**
     * Gets the defenderSystemScanSchedule property value. Possible values for a weekly schedule.
     * @return WeeklySchedule|null
    */
    public function getDefenderSystemScanSchedule(): ?WeeklySchedule {
        return $this->defenderSystemScanSchedule;
    }

    /**
     * Gets the developerUnlockSetting property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getDeveloperUnlockSetting(): ?StateManagementSetting {
        return $this->developerUnlockSetting;
    }

    /**
     * Gets the deviceManagementBlockFactoryResetOnMobile property value. Indicates whether or not to Block the user from resetting their phone.
     * @return bool|null
    */
    public function getDeviceManagementBlockFactoryResetOnMobile(): ?bool {
        return $this->deviceManagementBlockFactoryResetOnMobile;
    }

    /**
     * Gets the deviceManagementBlockManualUnenroll property value. Indicates whether or not to Block the user from doing manual un-enrollment from device management.
     * @return bool|null
    */
    public function getDeviceManagementBlockManualUnenroll(): ?bool {
        return $this->deviceManagementBlockManualUnenroll;
    }

    /**
     * Gets the diagnosticsDataSubmissionMode property value. Allow the device to send diagnostic and usage telemetry data, such as Watson.
     * @return DiagnosticDataSubmissionMode|null
    */
    public function getDiagnosticsDataSubmissionMode(): ?DiagnosticDataSubmissionMode {
        return $this->diagnosticsDataSubmissionMode;
    }

    /**
     * Gets the edgeAllowStartPagesModification property value. Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
     * @return bool|null
    */
    public function getEdgeAllowStartPagesModification(): ?bool {
        return $this->edgeAllowStartPagesModification;
    }

    /**
     * Gets the edgeBlockAccessToAboutFlags property value. Indicates whether or not to prevent access to about flags on Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockAccessToAboutFlags(): ?bool {
        return $this->edgeBlockAccessToAboutFlags;
    }

    /**
     * Gets the edgeBlockAddressBarDropdown property value. Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
     * @return bool|null
    */
    public function getEdgeBlockAddressBarDropdown(): ?bool {
        return $this->edgeBlockAddressBarDropdown;
    }

    /**
     * Gets the edgeBlockAutofill property value. Indicates whether or not to block auto fill.
     * @return bool|null
    */
    public function getEdgeBlockAutofill(): ?bool {
        return $this->edgeBlockAutofill;
    }

    /**
     * Gets the edgeBlockCompatibilityList property value. Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
     * @return bool|null
    */
    public function getEdgeBlockCompatibilityList(): ?bool {
        return $this->edgeBlockCompatibilityList;
    }

    /**
     * Gets the edgeBlockDeveloperTools property value. Indicates whether or not to block developer tools in the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockDeveloperTools(): ?bool {
        return $this->edgeBlockDeveloperTools;
    }

    /**
     * Gets the edgeBlocked property value. Indicates whether or not to Block the user from using the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlocked(): ?bool {
        return $this->edgeBlocked;
    }

    /**
     * Gets the edgeBlockExtensions property value. Indicates whether or not to block extensions in the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockExtensions(): ?bool {
        return $this->edgeBlockExtensions;
    }

    /**
     * Gets the edgeBlockInPrivateBrowsing property value. Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockInPrivateBrowsing(): ?bool {
        return $this->edgeBlockInPrivateBrowsing;
    }

    /**
     * Gets the edgeBlockJavaScript property value. Indicates whether or not to Block the user from using JavaScript.
     * @return bool|null
    */
    public function getEdgeBlockJavaScript(): ?bool {
        return $this->edgeBlockJavaScript;
    }

    /**
     * Gets the edgeBlockLiveTileDataCollection property value. Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
     * @return bool|null
    */
    public function getEdgeBlockLiveTileDataCollection(): ?bool {
        return $this->edgeBlockLiveTileDataCollection;
    }

    /**
     * Gets the edgeBlockPasswordManager property value. Indicates whether or not to Block password manager.
     * @return bool|null
    */
    public function getEdgeBlockPasswordManager(): ?bool {
        return $this->edgeBlockPasswordManager;
    }

    /**
     * Gets the edgeBlockPopups property value. Indicates whether or not to block popups.
     * @return bool|null
    */
    public function getEdgeBlockPopups(): ?bool {
        return $this->edgeBlockPopups;
    }

    /**
     * Gets the edgeBlockSearchSuggestions property value. Indicates whether or not to block the user from using the search suggestions in the address bar.
     * @return bool|null
    */
    public function getEdgeBlockSearchSuggestions(): ?bool {
        return $this->edgeBlockSearchSuggestions;
    }

    /**
     * Gets the edgeBlockSendingDoNotTrackHeader property value. Indicates whether or not to Block the user from sending the do not track header.
     * @return bool|null
    */
    public function getEdgeBlockSendingDoNotTrackHeader(): ?bool {
        return $this->edgeBlockSendingDoNotTrackHeader;
    }

    /**
     * Gets the edgeBlockSendingIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
     * @return bool|null
    */
    public function getEdgeBlockSendingIntranetTrafficToInternetExplorer(): ?bool {
        return $this->edgeBlockSendingIntranetTrafficToInternetExplorer;
    }

    /**
     * Gets the edgeClearBrowsingDataOnExit property value. Clear browsing data on exiting Microsoft Edge.
     * @return bool|null
    */
    public function getEdgeClearBrowsingDataOnExit(): ?bool {
        return $this->edgeClearBrowsingDataOnExit;
    }

    /**
     * Gets the edgeCookiePolicy property value. Possible values to specify which cookies are allowed in Microsoft Edge.
     * @return EdgeCookiePolicy|null
    */
    public function getEdgeCookiePolicy(): ?EdgeCookiePolicy {
        return $this->edgeCookiePolicy;
    }

    /**
     * Gets the edgeDisableFirstRunPage property value. Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
     * @return bool|null
    */
    public function getEdgeDisableFirstRunPage(): ?bool {
        return $this->edgeDisableFirstRunPage;
    }

    /**
     * Gets the edgeEnterpriseModeSiteListLocation property value. Indicates the enterprise mode site list location. Could be a local file, local network or http location.
     * @return string|null
    */
    public function getEdgeEnterpriseModeSiteListLocation(): ?string {
        return $this->edgeEnterpriseModeSiteListLocation;
    }

    /**
     * Gets the edgeFirstRunUrl property value. The first run URL for when Edge browser is opened for the first time.
     * @return string|null
    */
    public function getEdgeFirstRunUrl(): ?string {
        return $this->edgeFirstRunUrl;
    }

    /**
     * Gets the edgeHomepageUrls property value. The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
     * @return array<string>|null
    */
    public function getEdgeHomepageUrls(): ?array {
        return $this->edgeHomepageUrls;
    }

    /**
     * Gets the edgeRequireSmartScreen property value. Indicates whether or not to Require the user to use the smart screen filter.
     * @return bool|null
    */
    public function getEdgeRequireSmartScreen(): ?bool {
        return $this->edgeRequireSmartScreen;
    }

    /**
     * Gets the edgeSearchEngine property value. Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
     * @return EdgeSearchEngineBase|null
    */
    public function getEdgeSearchEngine(): ?EdgeSearchEngineBase {
        return $this->edgeSearchEngine;
    }

    /**
     * Gets the edgeSendIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
     * @return bool|null
    */
    public function getEdgeSendIntranetTrafficToInternetExplorer(): ?bool {
        return $this->edgeSendIntranetTrafficToInternetExplorer;
    }

    /**
     * Gets the edgeSyncFavoritesWithInternetExplorer property value. Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
     * @return bool|null
    */
    public function getEdgeSyncFavoritesWithInternetExplorer(): ?bool {
        return $this->edgeSyncFavoritesWithInternetExplorer;
    }

    /**
     * Gets the enterpriseCloudPrintDiscoveryEndPoint property value. Endpoint for discovering cloud printers.
     * @return string|null
    */
    public function getEnterpriseCloudPrintDiscoveryEndPoint(): ?string {
        return $this->enterpriseCloudPrintDiscoveryEndPoint;
    }

    /**
     * Gets the enterpriseCloudPrintDiscoveryMaxLimit property value. Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
     * @return int|null
    */
    public function getEnterpriseCloudPrintDiscoveryMaxLimit(): ?int {
        return $this->enterpriseCloudPrintDiscoveryMaxLimit;
    }

    /**
     * Gets the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier property value. OAuth resource URI for printer discovery service as configured in Azure portal.
     * @return string|null
    */
    public function getEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier(): ?string {
        return $this->enterpriseCloudPrintMopriaDiscoveryResourceIdentifier;
    }

    /**
     * Gets the enterpriseCloudPrintOAuthAuthority property value. Authentication endpoint for acquiring OAuth tokens.
     * @return string|null
    */
    public function getEnterpriseCloudPrintOAuthAuthority(): ?string {
        return $this->enterpriseCloudPrintOAuthAuthority;
    }

    /**
     * Gets the enterpriseCloudPrintOAuthClientIdentifier property value. GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
     * @return string|null
    */
    public function getEnterpriseCloudPrintOAuthClientIdentifier(): ?string {
        return $this->enterpriseCloudPrintOAuthClientIdentifier;
    }

    /**
     * Gets the enterpriseCloudPrintResourceIdentifier property value. OAuth resource URI for print service as configured in the Azure portal.
     * @return string|null
    */
    public function getEnterpriseCloudPrintResourceIdentifier(): ?string {
        return $this->enterpriseCloudPrintResourceIdentifier;
    }

    /**
     * Gets the experienceBlockDeviceDiscovery property value. Indicates whether or not to enable device discovery UX.
     * @return bool|null
    */
    public function getExperienceBlockDeviceDiscovery(): ?bool {
        return $this->experienceBlockDeviceDiscovery;
    }

    /**
     * Gets the experienceBlockErrorDialogWhenNoSIM property value. Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
     * @return bool|null
    */
    public function getExperienceBlockErrorDialogWhenNoSIM(): ?bool {
        return $this->experienceBlockErrorDialogWhenNoSIM;
    }

    /**
     * Gets the experienceBlockTaskSwitcher property value. Indicates whether or not to enable task switching on the device.
     * @return bool|null
    */
    public function getExperienceBlockTaskSwitcher(): ?bool {
        return $this->experienceBlockTaskSwitcher;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountsBlockAddingNonMicrosoftAccountEmail' => function (ParseNode $n) use ($o) { $o->setAccountsBlockAddingNonMicrosoftAccountEmail($n->getBooleanValue()); },
            'antiTheftModeBlocked' => function (ParseNode $n) use ($o) { $o->setAntiTheftModeBlocked($n->getBooleanValue()); },
            'appsAllowTrustedAppsSideloading' => function (ParseNode $n) use ($o) { $o->setAppsAllowTrustedAppsSideloading($n->getEnumValue(StateManagementSetting::class)); },
            'appsBlockWindowsStoreOriginatedApps' => function (ParseNode $n) use ($o) { $o->setAppsBlockWindowsStoreOriginatedApps($n->getBooleanValue()); },
            'bluetoothAllowedServices' => function (ParseNode $n) use ($o) { $o->setBluetoothAllowedServices($n->getCollectionOfPrimitiveValues()); },
            'bluetoothBlockAdvertising' => function (ParseNode $n) use ($o) { $o->setBluetoothBlockAdvertising($n->getBooleanValue()); },
            'bluetoothBlockDiscoverableMode' => function (ParseNode $n) use ($o) { $o->setBluetoothBlockDiscoverableMode($n->getBooleanValue()); },
            'bluetoothBlocked' => function (ParseNode $n) use ($o) { $o->setBluetoothBlocked($n->getBooleanValue()); },
            'bluetoothBlockPrePairing' => function (ParseNode $n) use ($o) { $o->setBluetoothBlockPrePairing($n->getBooleanValue()); },
            'cameraBlocked' => function (ParseNode $n) use ($o) { $o->setCameraBlocked($n->getBooleanValue()); },
            'cellularBlockDataWhenRoaming' => function (ParseNode $n) use ($o) { $o->setCellularBlockDataWhenRoaming($n->getBooleanValue()); },
            'cellularBlockVpn' => function (ParseNode $n) use ($o) { $o->setCellularBlockVpn($n->getBooleanValue()); },
            'cellularBlockVpnWhenRoaming' => function (ParseNode $n) use ($o) { $o->setCellularBlockVpnWhenRoaming($n->getBooleanValue()); },
            'certificatesBlockManualRootCertificateInstallation' => function (ParseNode $n) use ($o) { $o->setCertificatesBlockManualRootCertificateInstallation($n->getBooleanValue()); },
            'connectedDevicesServiceBlocked' => function (ParseNode $n) use ($o) { $o->setConnectedDevicesServiceBlocked($n->getBooleanValue()); },
            'copyPasteBlocked' => function (ParseNode $n) use ($o) { $o->setCopyPasteBlocked($n->getBooleanValue()); },
            'cortanaBlocked' => function (ParseNode $n) use ($o) { $o->setCortanaBlocked($n->getBooleanValue()); },
            'defenderBlockEndUserAccess' => function (ParseNode $n) use ($o) { $o->setDefenderBlockEndUserAccess($n->getBooleanValue()); },
            'defenderCloudBlockLevel' => function (ParseNode $n) use ($o) { $o->setDefenderCloudBlockLevel($n->getEnumValue(DefenderCloudBlockLevelType::class)); },
            'defenderDaysBeforeDeletingQuarantinedMalware' => function (ParseNode $n) use ($o) { $o->setDefenderDaysBeforeDeletingQuarantinedMalware($n->getIntegerValue()); },
            'defenderDetectedMalwareActions' => function (ParseNode $n) use ($o) { $o->setDefenderDetectedMalwareActions($n->getObjectValue(array(DefenderDetectedMalwareActions::class, 'createFromDiscriminatorValue'))); },
            'defenderFileExtensionsToExclude' => function (ParseNode $n) use ($o) { $o->setDefenderFileExtensionsToExclude($n->getCollectionOfPrimitiveValues()); },
            'defenderFilesAndFoldersToExclude' => function (ParseNode $n) use ($o) { $o->setDefenderFilesAndFoldersToExclude($n->getCollectionOfPrimitiveValues()); },
            'defenderMonitorFileActivity' => function (ParseNode $n) use ($o) { $o->setDefenderMonitorFileActivity($n->getEnumValue(DefenderMonitorFileActivity::class)); },
            'defenderProcessesToExclude' => function (ParseNode $n) use ($o) { $o->setDefenderProcessesToExclude($n->getCollectionOfPrimitiveValues()); },
            'defenderPromptForSampleSubmission' => function (ParseNode $n) use ($o) { $o->setDefenderPromptForSampleSubmission($n->getEnumValue(DefenderPromptForSampleSubmission::class)); },
            'defenderRequireBehaviorMonitoring' => function (ParseNode $n) use ($o) { $o->setDefenderRequireBehaviorMonitoring($n->getBooleanValue()); },
            'defenderRequireCloudProtection' => function (ParseNode $n) use ($o) { $o->setDefenderRequireCloudProtection($n->getBooleanValue()); },
            'defenderRequireNetworkInspectionSystem' => function (ParseNode $n) use ($o) { $o->setDefenderRequireNetworkInspectionSystem($n->getBooleanValue()); },
            'defenderRequireRealTimeMonitoring' => function (ParseNode $n) use ($o) { $o->setDefenderRequireRealTimeMonitoring($n->getBooleanValue()); },
            'defenderScanArchiveFiles' => function (ParseNode $n) use ($o) { $o->setDefenderScanArchiveFiles($n->getBooleanValue()); },
            'defenderScanDownloads' => function (ParseNode $n) use ($o) { $o->setDefenderScanDownloads($n->getBooleanValue()); },
            'defenderScanIncomingMail' => function (ParseNode $n) use ($o) { $o->setDefenderScanIncomingMail($n->getBooleanValue()); },
            'defenderScanMappedNetworkDrivesDuringFullScan' => function (ParseNode $n) use ($o) { $o->setDefenderScanMappedNetworkDrivesDuringFullScan($n->getBooleanValue()); },
            'defenderScanMaxCpu' => function (ParseNode $n) use ($o) { $o->setDefenderScanMaxCpu($n->getIntegerValue()); },
            'defenderScanNetworkFiles' => function (ParseNode $n) use ($o) { $o->setDefenderScanNetworkFiles($n->getBooleanValue()); },
            'defenderScanRemovableDrivesDuringFullScan' => function (ParseNode $n) use ($o) { $o->setDefenderScanRemovableDrivesDuringFullScan($n->getBooleanValue()); },
            'defenderScanScriptsLoadedInInternetExplorer' => function (ParseNode $n) use ($o) { $o->setDefenderScanScriptsLoadedInInternetExplorer($n->getBooleanValue()); },
            'defenderScanType' => function (ParseNode $n) use ($o) { $o->setDefenderScanType($n->getEnumValue(DefenderScanType::class)); },
            'defenderScheduledQuickScanTime' => function (ParseNode $n) use ($o) { $o->setDefenderScheduledQuickScanTime($n->getTimeValue()); },
            'defenderScheduledScanTime' => function (ParseNode $n) use ($o) { $o->setDefenderScheduledScanTime($n->getTimeValue()); },
            'defenderSignatureUpdateIntervalInHours' => function (ParseNode $n) use ($o) { $o->setDefenderSignatureUpdateIntervalInHours($n->getIntegerValue()); },
            'defenderSystemScanSchedule' => function (ParseNode $n) use ($o) { $o->setDefenderSystemScanSchedule($n->getEnumValue(WeeklySchedule::class)); },
            'developerUnlockSetting' => function (ParseNode $n) use ($o) { $o->setDeveloperUnlockSetting($n->getEnumValue(StateManagementSetting::class)); },
            'deviceManagementBlockFactoryResetOnMobile' => function (ParseNode $n) use ($o) { $o->setDeviceManagementBlockFactoryResetOnMobile($n->getBooleanValue()); },
            'deviceManagementBlockManualUnenroll' => function (ParseNode $n) use ($o) { $o->setDeviceManagementBlockManualUnenroll($n->getBooleanValue()); },
            'diagnosticsDataSubmissionMode' => function (ParseNode $n) use ($o) { $o->setDiagnosticsDataSubmissionMode($n->getEnumValue(DiagnosticDataSubmissionMode::class)); },
            'edgeAllowStartPagesModification' => function (ParseNode $n) use ($o) { $o->setEdgeAllowStartPagesModification($n->getBooleanValue()); },
            'edgeBlockAccessToAboutFlags' => function (ParseNode $n) use ($o) { $o->setEdgeBlockAccessToAboutFlags($n->getBooleanValue()); },
            'edgeBlockAddressBarDropdown' => function (ParseNode $n) use ($o) { $o->setEdgeBlockAddressBarDropdown($n->getBooleanValue()); },
            'edgeBlockAutofill' => function (ParseNode $n) use ($o) { $o->setEdgeBlockAutofill($n->getBooleanValue()); },
            'edgeBlockCompatibilityList' => function (ParseNode $n) use ($o) { $o->setEdgeBlockCompatibilityList($n->getBooleanValue()); },
            'edgeBlockDeveloperTools' => function (ParseNode $n) use ($o) { $o->setEdgeBlockDeveloperTools($n->getBooleanValue()); },
            'edgeBlocked' => function (ParseNode $n) use ($o) { $o->setEdgeBlocked($n->getBooleanValue()); },
            'edgeBlockExtensions' => function (ParseNode $n) use ($o) { $o->setEdgeBlockExtensions($n->getBooleanValue()); },
            'edgeBlockInPrivateBrowsing' => function (ParseNode $n) use ($o) { $o->setEdgeBlockInPrivateBrowsing($n->getBooleanValue()); },
            'edgeBlockJavaScript' => function (ParseNode $n) use ($o) { $o->setEdgeBlockJavaScript($n->getBooleanValue()); },
            'edgeBlockLiveTileDataCollection' => function (ParseNode $n) use ($o) { $o->setEdgeBlockLiveTileDataCollection($n->getBooleanValue()); },
            'edgeBlockPasswordManager' => function (ParseNode $n) use ($o) { $o->setEdgeBlockPasswordManager($n->getBooleanValue()); },
            'edgeBlockPopups' => function (ParseNode $n) use ($o) { $o->setEdgeBlockPopups($n->getBooleanValue()); },
            'edgeBlockSearchSuggestions' => function (ParseNode $n) use ($o) { $o->setEdgeBlockSearchSuggestions($n->getBooleanValue()); },
            'edgeBlockSendingDoNotTrackHeader' => function (ParseNode $n) use ($o) { $o->setEdgeBlockSendingDoNotTrackHeader($n->getBooleanValue()); },
            'edgeBlockSendingIntranetTrafficToInternetExplorer' => function (ParseNode $n) use ($o) { $o->setEdgeBlockSendingIntranetTrafficToInternetExplorer($n->getBooleanValue()); },
            'edgeClearBrowsingDataOnExit' => function (ParseNode $n) use ($o) { $o->setEdgeClearBrowsingDataOnExit($n->getBooleanValue()); },
            'edgeCookiePolicy' => function (ParseNode $n) use ($o) { $o->setEdgeCookiePolicy($n->getEnumValue(EdgeCookiePolicy::class)); },
            'edgeDisableFirstRunPage' => function (ParseNode $n) use ($o) { $o->setEdgeDisableFirstRunPage($n->getBooleanValue()); },
            'edgeEnterpriseModeSiteListLocation' => function (ParseNode $n) use ($o) { $o->setEdgeEnterpriseModeSiteListLocation($n->getStringValue()); },
            'edgeFirstRunUrl' => function (ParseNode $n) use ($o) { $o->setEdgeFirstRunUrl($n->getStringValue()); },
            'edgeHomepageUrls' => function (ParseNode $n) use ($o) { $o->setEdgeHomepageUrls($n->getCollectionOfPrimitiveValues()); },
            'edgeRequireSmartScreen' => function (ParseNode $n) use ($o) { $o->setEdgeRequireSmartScreen($n->getBooleanValue()); },
            'edgeSearchEngine' => function (ParseNode $n) use ($o) { $o->setEdgeSearchEngine($n->getObjectValue(array(EdgeSearchEngineBase::class, 'createFromDiscriminatorValue'))); },
            'edgeSendIntranetTrafficToInternetExplorer' => function (ParseNode $n) use ($o) { $o->setEdgeSendIntranetTrafficToInternetExplorer($n->getBooleanValue()); },
            'edgeSyncFavoritesWithInternetExplorer' => function (ParseNode $n) use ($o) { $o->setEdgeSyncFavoritesWithInternetExplorer($n->getBooleanValue()); },
            'enterpriseCloudPrintDiscoveryEndPoint' => function (ParseNode $n) use ($o) { $o->setEnterpriseCloudPrintDiscoveryEndPoint($n->getStringValue()); },
            'enterpriseCloudPrintDiscoveryMaxLimit' => function (ParseNode $n) use ($o) { $o->setEnterpriseCloudPrintDiscoveryMaxLimit($n->getIntegerValue()); },
            'enterpriseCloudPrintMopriaDiscoveryResourceIdentifier' => function (ParseNode $n) use ($o) { $o->setEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier($n->getStringValue()); },
            'enterpriseCloudPrintOAuthAuthority' => function (ParseNode $n) use ($o) { $o->setEnterpriseCloudPrintOAuthAuthority($n->getStringValue()); },
            'enterpriseCloudPrintOAuthClientIdentifier' => function (ParseNode $n) use ($o) { $o->setEnterpriseCloudPrintOAuthClientIdentifier($n->getStringValue()); },
            'enterpriseCloudPrintResourceIdentifier' => function (ParseNode $n) use ($o) { $o->setEnterpriseCloudPrintResourceIdentifier($n->getStringValue()); },
            'experienceBlockDeviceDiscovery' => function (ParseNode $n) use ($o) { $o->setExperienceBlockDeviceDiscovery($n->getBooleanValue()); },
            'experienceBlockErrorDialogWhenNoSIM' => function (ParseNode $n) use ($o) { $o->setExperienceBlockErrorDialogWhenNoSIM($n->getBooleanValue()); },
            'experienceBlockTaskSwitcher' => function (ParseNode $n) use ($o) { $o->setExperienceBlockTaskSwitcher($n->getBooleanValue()); },
            'gameDvrBlocked' => function (ParseNode $n) use ($o) { $o->setGameDvrBlocked($n->getBooleanValue()); },
            'internetSharingBlocked' => function (ParseNode $n) use ($o) { $o->setInternetSharingBlocked($n->getBooleanValue()); },
            'locationServicesBlocked' => function (ParseNode $n) use ($o) { $o->setLocationServicesBlocked($n->getBooleanValue()); },
            'lockScreenAllowTimeoutConfiguration' => function (ParseNode $n) use ($o) { $o->setLockScreenAllowTimeoutConfiguration($n->getBooleanValue()); },
            'lockScreenBlockActionCenterNotifications' => function (ParseNode $n) use ($o) { $o->setLockScreenBlockActionCenterNotifications($n->getBooleanValue()); },
            'lockScreenBlockCortana' => function (ParseNode $n) use ($o) { $o->setLockScreenBlockCortana($n->getBooleanValue()); },
            'lockScreenBlockToastNotifications' => function (ParseNode $n) use ($o) { $o->setLockScreenBlockToastNotifications($n->getBooleanValue()); },
            'lockScreenTimeoutInSeconds' => function (ParseNode $n) use ($o) { $o->setLockScreenTimeoutInSeconds($n->getIntegerValue()); },
            'logonBlockFastUserSwitching' => function (ParseNode $n) use ($o) { $o->setLogonBlockFastUserSwitching($n->getBooleanValue()); },
            'microsoftAccountBlocked' => function (ParseNode $n) use ($o) { $o->setMicrosoftAccountBlocked($n->getBooleanValue()); },
            'microsoftAccountBlockSettingsSync' => function (ParseNode $n) use ($o) { $o->setMicrosoftAccountBlockSettingsSync($n->getBooleanValue()); },
            'networkProxyApplySettingsDeviceWide' => function (ParseNode $n) use ($o) { $o->setNetworkProxyApplySettingsDeviceWide($n->getBooleanValue()); },
            'networkProxyAutomaticConfigurationUrl' => function (ParseNode $n) use ($o) { $o->setNetworkProxyAutomaticConfigurationUrl($n->getStringValue()); },
            'networkProxyDisableAutoDetect' => function (ParseNode $n) use ($o) { $o->setNetworkProxyDisableAutoDetect($n->getBooleanValue()); },
            'networkProxyServer' => function (ParseNode $n) use ($o) { $o->setNetworkProxyServer($n->getObjectValue(array(Windows10NetworkProxyServer::class, 'createFromDiscriminatorValue'))); },
            'nfcBlocked' => function (ParseNode $n) use ($o) { $o->setNfcBlocked($n->getBooleanValue()); },
            'oneDriveDisableFileSync' => function (ParseNode $n) use ($o) { $o->setOneDriveDisableFileSync($n->getBooleanValue()); },
            'passwordBlockSimple' => function (ParseNode $n) use ($o) { $o->setPasswordBlockSimple($n->getBooleanValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMinimumCharacterSetCount' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeScreenTimeout' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()); },
            'passwordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'passwordRequired' => function (ParseNode $n) use ($o) { $o->setPasswordRequired($n->getBooleanValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)); },
            'passwordRequireWhenResumeFromIdleState' => function (ParseNode $n) use ($o) { $o->setPasswordRequireWhenResumeFromIdleState($n->getBooleanValue()); },
            'passwordSignInFailureCountBeforeFactoryReset' => function (ParseNode $n) use ($o) { $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()); },
            'personalizationDesktopImageUrl' => function (ParseNode $n) use ($o) { $o->setPersonalizationDesktopImageUrl($n->getStringValue()); },
            'personalizationLockScreenImageUrl' => function (ParseNode $n) use ($o) { $o->setPersonalizationLockScreenImageUrl($n->getStringValue()); },
            'privacyAdvertisingId' => function (ParseNode $n) use ($o) { $o->setPrivacyAdvertisingId($n->getEnumValue(StateManagementSetting::class)); },
            'privacyAutoAcceptPairingAndConsentPrompts' => function (ParseNode $n) use ($o) { $o->setPrivacyAutoAcceptPairingAndConsentPrompts($n->getBooleanValue()); },
            'privacyBlockInputPersonalization' => function (ParseNode $n) use ($o) { $o->setPrivacyBlockInputPersonalization($n->getBooleanValue()); },
            'resetProtectionModeBlocked' => function (ParseNode $n) use ($o) { $o->setResetProtectionModeBlocked($n->getBooleanValue()); },
            'safeSearchFilter' => function (ParseNode $n) use ($o) { $o->setSafeSearchFilter($n->getEnumValue(SafeSearchFilterType::class)); },
            'screenCaptureBlocked' => function (ParseNode $n) use ($o) { $o->setScreenCaptureBlocked($n->getBooleanValue()); },
            'searchBlockDiacritics' => function (ParseNode $n) use ($o) { $o->setSearchBlockDiacritics($n->getBooleanValue()); },
            'searchDisableAutoLanguageDetection' => function (ParseNode $n) use ($o) { $o->setSearchDisableAutoLanguageDetection($n->getBooleanValue()); },
            'searchDisableIndexerBackoff' => function (ParseNode $n) use ($o) { $o->setSearchDisableIndexerBackoff($n->getBooleanValue()); },
            'searchDisableIndexingEncryptedItems' => function (ParseNode $n) use ($o) { $o->setSearchDisableIndexingEncryptedItems($n->getBooleanValue()); },
            'searchDisableIndexingRemovableDrive' => function (ParseNode $n) use ($o) { $o->setSearchDisableIndexingRemovableDrive($n->getBooleanValue()); },
            'searchEnableAutomaticIndexSizeManangement' => function (ParseNode $n) use ($o) { $o->setSearchEnableAutomaticIndexSizeManangement($n->getBooleanValue()); },
            'searchEnableRemoteQueries' => function (ParseNode $n) use ($o) { $o->setSearchEnableRemoteQueries($n->getBooleanValue()); },
            'settingsBlockAccountsPage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockAccountsPage($n->getBooleanValue()); },
            'settingsBlockAddProvisioningPackage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockAddProvisioningPackage($n->getBooleanValue()); },
            'settingsBlockAppsPage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockAppsPage($n->getBooleanValue()); },
            'settingsBlockChangeLanguage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockChangeLanguage($n->getBooleanValue()); },
            'settingsBlockChangePowerSleep' => function (ParseNode $n) use ($o) { $o->setSettingsBlockChangePowerSleep($n->getBooleanValue()); },
            'settingsBlockChangeRegion' => function (ParseNode $n) use ($o) { $o->setSettingsBlockChangeRegion($n->getBooleanValue()); },
            'settingsBlockChangeSystemTime' => function (ParseNode $n) use ($o) { $o->setSettingsBlockChangeSystemTime($n->getBooleanValue()); },
            'settingsBlockDevicesPage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockDevicesPage($n->getBooleanValue()); },
            'settingsBlockEaseOfAccessPage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockEaseOfAccessPage($n->getBooleanValue()); },
            'settingsBlockEditDeviceName' => function (ParseNode $n) use ($o) { $o->setSettingsBlockEditDeviceName($n->getBooleanValue()); },
            'settingsBlockGamingPage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockGamingPage($n->getBooleanValue()); },
            'settingsBlockNetworkInternetPage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockNetworkInternetPage($n->getBooleanValue()); },
            'settingsBlockPersonalizationPage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockPersonalizationPage($n->getBooleanValue()); },
            'settingsBlockPrivacyPage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockPrivacyPage($n->getBooleanValue()); },
            'settingsBlockRemoveProvisioningPackage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockRemoveProvisioningPackage($n->getBooleanValue()); },
            'settingsBlockSettingsApp' => function (ParseNode $n) use ($o) { $o->setSettingsBlockSettingsApp($n->getBooleanValue()); },
            'settingsBlockSystemPage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockSystemPage($n->getBooleanValue()); },
            'settingsBlockTimeLanguagePage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockTimeLanguagePage($n->getBooleanValue()); },
            'settingsBlockUpdateSecurityPage' => function (ParseNode $n) use ($o) { $o->setSettingsBlockUpdateSecurityPage($n->getBooleanValue()); },
            'sharedUserAppDataAllowed' => function (ParseNode $n) use ($o) { $o->setSharedUserAppDataAllowed($n->getBooleanValue()); },
            'smartScreenBlockPromptOverride' => function (ParseNode $n) use ($o) { $o->setSmartScreenBlockPromptOverride($n->getBooleanValue()); },
            'smartScreenBlockPromptOverrideForFiles' => function (ParseNode $n) use ($o) { $o->setSmartScreenBlockPromptOverrideForFiles($n->getBooleanValue()); },
            'smartScreenEnableAppInstallControl' => function (ParseNode $n) use ($o) { $o->setSmartScreenEnableAppInstallControl($n->getBooleanValue()); },
            'startBlockUnpinningAppsFromTaskbar' => function (ParseNode $n) use ($o) { $o->setStartBlockUnpinningAppsFromTaskbar($n->getBooleanValue()); },
            'startMenuAppListVisibility' => function (ParseNode $n) use ($o) { $o->setStartMenuAppListVisibility($n->getEnumValue(WindowsStartMenuAppListVisibilityType::class)); },
            'startMenuHideChangeAccountSettings' => function (ParseNode $n) use ($o) { $o->setStartMenuHideChangeAccountSettings($n->getBooleanValue()); },
            'startMenuHideFrequentlyUsedApps' => function (ParseNode $n) use ($o) { $o->setStartMenuHideFrequentlyUsedApps($n->getBooleanValue()); },
            'startMenuHideHibernate' => function (ParseNode $n) use ($o) { $o->setStartMenuHideHibernate($n->getBooleanValue()); },
            'startMenuHideLock' => function (ParseNode $n) use ($o) { $o->setStartMenuHideLock($n->getBooleanValue()); },
            'startMenuHidePowerButton' => function (ParseNode $n) use ($o) { $o->setStartMenuHidePowerButton($n->getBooleanValue()); },
            'startMenuHideRecentJumpLists' => function (ParseNode $n) use ($o) { $o->setStartMenuHideRecentJumpLists($n->getBooleanValue()); },
            'startMenuHideRecentlyAddedApps' => function (ParseNode $n) use ($o) { $o->setStartMenuHideRecentlyAddedApps($n->getBooleanValue()); },
            'startMenuHideRestartOptions' => function (ParseNode $n) use ($o) { $o->setStartMenuHideRestartOptions($n->getBooleanValue()); },
            'startMenuHideShutDown' => function (ParseNode $n) use ($o) { $o->setStartMenuHideShutDown($n->getBooleanValue()); },
            'startMenuHideSignOut' => function (ParseNode $n) use ($o) { $o->setStartMenuHideSignOut($n->getBooleanValue()); },
            'startMenuHideSleep' => function (ParseNode $n) use ($o) { $o->setStartMenuHideSleep($n->getBooleanValue()); },
            'startMenuHideSwitchAccount' => function (ParseNode $n) use ($o) { $o->setStartMenuHideSwitchAccount($n->getBooleanValue()); },
            'startMenuHideUserTile' => function (ParseNode $n) use ($o) { $o->setStartMenuHideUserTile($n->getBooleanValue()); },
            'startMenuLayoutEdgeAssetsXml' => function (ParseNode $n) use ($o) { $o->setStartMenuLayoutEdgeAssetsXml($n->getBinaryContent()); },
            'startMenuLayoutXml' => function (ParseNode $n) use ($o) { $o->setStartMenuLayoutXml($n->getBinaryContent()); },
            'startMenuMode' => function (ParseNode $n) use ($o) { $o->setStartMenuMode($n->getEnumValue(WindowsStartMenuModeType::class)); },
            'startMenuPinnedFolderDocuments' => function (ParseNode $n) use ($o) { $o->setStartMenuPinnedFolderDocuments($n->getEnumValue(VisibilitySetting::class)); },
            'startMenuPinnedFolderDownloads' => function (ParseNode $n) use ($o) { $o->setStartMenuPinnedFolderDownloads($n->getEnumValue(VisibilitySetting::class)); },
            'startMenuPinnedFolderFileExplorer' => function (ParseNode $n) use ($o) { $o->setStartMenuPinnedFolderFileExplorer($n->getEnumValue(VisibilitySetting::class)); },
            'startMenuPinnedFolderHomeGroup' => function (ParseNode $n) use ($o) { $o->setStartMenuPinnedFolderHomeGroup($n->getEnumValue(VisibilitySetting::class)); },
            'startMenuPinnedFolderMusic' => function (ParseNode $n) use ($o) { $o->setStartMenuPinnedFolderMusic($n->getEnumValue(VisibilitySetting::class)); },
            'startMenuPinnedFolderNetwork' => function (ParseNode $n) use ($o) { $o->setStartMenuPinnedFolderNetwork($n->getEnumValue(VisibilitySetting::class)); },
            'startMenuPinnedFolderPersonalFolder' => function (ParseNode $n) use ($o) { $o->setStartMenuPinnedFolderPersonalFolder($n->getEnumValue(VisibilitySetting::class)); },
            'startMenuPinnedFolderPictures' => function (ParseNode $n) use ($o) { $o->setStartMenuPinnedFolderPictures($n->getEnumValue(VisibilitySetting::class)); },
            'startMenuPinnedFolderSettings' => function (ParseNode $n) use ($o) { $o->setStartMenuPinnedFolderSettings($n->getEnumValue(VisibilitySetting::class)); },
            'startMenuPinnedFolderVideos' => function (ParseNode $n) use ($o) { $o->setStartMenuPinnedFolderVideos($n->getEnumValue(VisibilitySetting::class)); },
            'storageBlockRemovableStorage' => function (ParseNode $n) use ($o) { $o->setStorageBlockRemovableStorage($n->getBooleanValue()); },
            'storageRequireMobileDeviceEncryption' => function (ParseNode $n) use ($o) { $o->setStorageRequireMobileDeviceEncryption($n->getBooleanValue()); },
            'storageRestrictAppDataToSystemVolume' => function (ParseNode $n) use ($o) { $o->setStorageRestrictAppDataToSystemVolume($n->getBooleanValue()); },
            'storageRestrictAppInstallToSystemVolume' => function (ParseNode $n) use ($o) { $o->setStorageRestrictAppInstallToSystemVolume($n->getBooleanValue()); },
            'tenantLockdownRequireNetworkDuringOutOfBoxExperience' => function (ParseNode $n) use ($o) { $o->setTenantLockdownRequireNetworkDuringOutOfBoxExperience($n->getBooleanValue()); },
            'usbBlocked' => function (ParseNode $n) use ($o) { $o->setUsbBlocked($n->getBooleanValue()); },
            'voiceRecordingBlocked' => function (ParseNode $n) use ($o) { $o->setVoiceRecordingBlocked($n->getBooleanValue()); },
            'webRtcBlockLocalhostIpAddress' => function (ParseNode $n) use ($o) { $o->setWebRtcBlockLocalhostIpAddress($n->getBooleanValue()); },
            'wiFiBlockAutomaticConnectHotspots' => function (ParseNode $n) use ($o) { $o->setWiFiBlockAutomaticConnectHotspots($n->getBooleanValue()); },
            'wiFiBlocked' => function (ParseNode $n) use ($o) { $o->setWiFiBlocked($n->getBooleanValue()); },
            'wiFiBlockManualConfiguration' => function (ParseNode $n) use ($o) { $o->setWiFiBlockManualConfiguration($n->getBooleanValue()); },
            'wiFiScanInterval' => function (ParseNode $n) use ($o) { $o->setWiFiScanInterval($n->getIntegerValue()); },
            'windowsSpotlightBlockConsumerSpecificFeatures' => function (ParseNode $n) use ($o) { $o->setWindowsSpotlightBlockConsumerSpecificFeatures($n->getBooleanValue()); },
            'windowsSpotlightBlocked' => function (ParseNode $n) use ($o) { $o->setWindowsSpotlightBlocked($n->getBooleanValue()); },
            'windowsSpotlightBlockOnActionCenter' => function (ParseNode $n) use ($o) { $o->setWindowsSpotlightBlockOnActionCenter($n->getBooleanValue()); },
            'windowsSpotlightBlockTailoredExperiences' => function (ParseNode $n) use ($o) { $o->setWindowsSpotlightBlockTailoredExperiences($n->getBooleanValue()); },
            'windowsSpotlightBlockThirdPartyNotifications' => function (ParseNode $n) use ($o) { $o->setWindowsSpotlightBlockThirdPartyNotifications($n->getBooleanValue()); },
            'windowsSpotlightBlockWelcomeExperience' => function (ParseNode $n) use ($o) { $o->setWindowsSpotlightBlockWelcomeExperience($n->getBooleanValue()); },
            'windowsSpotlightBlockWindowsTips' => function (ParseNode $n) use ($o) { $o->setWindowsSpotlightBlockWindowsTips($n->getBooleanValue()); },
            'windowsSpotlightConfigureOnLockScreen' => function (ParseNode $n) use ($o) { $o->setWindowsSpotlightConfigureOnLockScreen($n->getEnumValue(WindowsSpotlightEnablementSettings::class)); },
            'windowsStoreBlockAutoUpdate' => function (ParseNode $n) use ($o) { $o->setWindowsStoreBlockAutoUpdate($n->getBooleanValue()); },
            'windowsStoreBlocked' => function (ParseNode $n) use ($o) { $o->setWindowsStoreBlocked($n->getBooleanValue()); },
            'windowsStoreEnablePrivateStoreOnly' => function (ParseNode $n) use ($o) { $o->setWindowsStoreEnablePrivateStoreOnly($n->getBooleanValue()); },
            'wirelessDisplayBlockProjectionToThisDevice' => function (ParseNode $n) use ($o) { $o->setWirelessDisplayBlockProjectionToThisDevice($n->getBooleanValue()); },
            'wirelessDisplayBlockUserInputFromReceiver' => function (ParseNode $n) use ($o) { $o->setWirelessDisplayBlockUserInputFromReceiver($n->getBooleanValue()); },
            'wirelessDisplayRequirePinForPairing' => function (ParseNode $n) use ($o) { $o->setWirelessDisplayRequirePinForPairing($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the gameDvrBlocked property value. Indicates whether or not to block DVR and broadcasting.
     * @return bool|null
    */
    public function getGameDvrBlocked(): ?bool {
        return $this->gameDvrBlocked;
    }

    /**
     * Gets the internetSharingBlocked property value. Indicates whether or not to Block the user from using internet sharing.
     * @return bool|null
    */
    public function getInternetSharingBlocked(): ?bool {
        return $this->internetSharingBlocked;
    }

    /**
     * Gets the locationServicesBlocked property value. Indicates whether or not to Block the user from location services.
     * @return bool|null
    */
    public function getLocationServicesBlocked(): ?bool {
        return $this->locationServicesBlocked;
    }

    /**
     * Gets the lockScreenAllowTimeoutConfiguration property value. Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
     * @return bool|null
    */
    public function getLockScreenAllowTimeoutConfiguration(): ?bool {
        return $this->lockScreenAllowTimeoutConfiguration;
    }

    /**
     * Gets the lockScreenBlockActionCenterNotifications property value. Indicates whether or not to block action center notifications over lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockActionCenterNotifications(): ?bool {
        return $this->lockScreenBlockActionCenterNotifications;
    }

    /**
     * Gets the lockScreenBlockCortana property value. Indicates whether or not the user can interact with Cortana using speech while the system is locked.
     * @return bool|null
    */
    public function getLockScreenBlockCortana(): ?bool {
        return $this->lockScreenBlockCortana;
    }

    /**
     * Gets the lockScreenBlockToastNotifications property value. Indicates whether to allow toast notifications above the device lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockToastNotifications(): ?bool {
        return $this->lockScreenBlockToastNotifications;
    }

    /**
     * Gets the lockScreenTimeoutInSeconds property value. Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
     * @return int|null
    */
    public function getLockScreenTimeoutInSeconds(): ?int {
        return $this->lockScreenTimeoutInSeconds;
    }

    /**
     * Gets the logonBlockFastUserSwitching property value. Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
     * @return bool|null
    */
    public function getLogonBlockFastUserSwitching(): ?bool {
        return $this->logonBlockFastUserSwitching;
    }

    /**
     * Gets the microsoftAccountBlocked property value. Indicates whether or not to Block a Microsoft account.
     * @return bool|null
    */
    public function getMicrosoftAccountBlocked(): ?bool {
        return $this->microsoftAccountBlocked;
    }

    /**
     * Gets the microsoftAccountBlockSettingsSync property value. Indicates whether or not to Block Microsoft account settings sync.
     * @return bool|null
    */
    public function getMicrosoftAccountBlockSettingsSync(): ?bool {
        return $this->microsoftAccountBlockSettingsSync;
    }

    /**
     * Gets the networkProxyApplySettingsDeviceWide property value. If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
     * @return bool|null
    */
    public function getNetworkProxyApplySettingsDeviceWide(): ?bool {
        return $this->networkProxyApplySettingsDeviceWide;
    }

    /**
     * Gets the networkProxyAutomaticConfigurationUrl property value. Address to the proxy auto-config (PAC) script you want to use.
     * @return string|null
    */
    public function getNetworkProxyAutomaticConfigurationUrl(): ?string {
        return $this->networkProxyAutomaticConfigurationUrl;
    }

    /**
     * Gets the networkProxyDisableAutoDetect property value. Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
     * @return bool|null
    */
    public function getNetworkProxyDisableAutoDetect(): ?bool {
        return $this->networkProxyDisableAutoDetect;
    }

    /**
     * Gets the networkProxyServer property value. Specifies manual proxy server settings.
     * @return Windows10NetworkProxyServer|null
    */
    public function getNetworkProxyServer(): ?Windows10NetworkProxyServer {
        return $this->networkProxyServer;
    }

    /**
     * Gets the nfcBlocked property value. Indicates whether or not to Block the user from using near field communication.
     * @return bool|null
    */
    public function getNfcBlocked(): ?bool {
        return $this->nfcBlocked;
    }

    /**
     * Gets the oneDriveDisableFileSync property value. Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
     * @return bool|null
    */
    public function getOneDriveDisableFileSync(): ?bool {
        return $this->oneDriveDisableFileSync;
    }

    /**
     * Gets the passwordBlockSimple property value. Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        return $this->passwordBlockSimple;
    }

    /**
     * Gets the passwordExpirationDays property value. The password expiration in days. Valid values 0 to 730
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        return $this->passwordMinimumCharacterSetCount;
    }

    /**
     * Gets the passwordMinimumLength property value. The minimum password length. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. The minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->passwordMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent reuse of. Valid values 0 to 50
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->passwordPreviousPasswordBlockCount;
    }

    /**
     * Gets the passwordRequired property value. Indicates whether or not to require the user to have a password.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        return $this->passwordRequired;
    }

    /**
     * Gets the passwordRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the passwordRequireWhenResumeFromIdleState property value. Indicates whether or not to require a password upon resuming from an idle state.
     * @return bool|null
    */
    public function getPasswordRequireWhenResumeFromIdleState(): ?bool {
        return $this->passwordRequireWhenResumeFromIdleState;
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. The number of sign in failures before factory reset. Valid values 0 to 999
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->passwordSignInFailureCountBeforeFactoryReset;
    }

    /**
     * Gets the personalizationDesktopImageUrl property value. A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
     * @return string|null
    */
    public function getPersonalizationDesktopImageUrl(): ?string {
        return $this->personalizationDesktopImageUrl;
    }

    /**
     * Gets the personalizationLockScreenImageUrl property value. A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
     * @return string|null
    */
    public function getPersonalizationLockScreenImageUrl(): ?string {
        return $this->personalizationLockScreenImageUrl;
    }

    /**
     * Gets the privacyAdvertisingId property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getPrivacyAdvertisingId(): ?StateManagementSetting {
        return $this->privacyAdvertisingId;
    }

    /**
     * Gets the privacyAutoAcceptPairingAndConsentPrompts property value. Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
     * @return bool|null
    */
    public function getPrivacyAutoAcceptPairingAndConsentPrompts(): ?bool {
        return $this->privacyAutoAcceptPairingAndConsentPrompts;
    }

    /**
     * Gets the privacyBlockInputPersonalization property value. Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     * @return bool|null
    */
    public function getPrivacyBlockInputPersonalization(): ?bool {
        return $this->privacyBlockInputPersonalization;
    }

    /**
     * Gets the resetProtectionModeBlocked property value. Indicates whether or not to Block the user from reset protection mode.
     * @return bool|null
    */
    public function getResetProtectionModeBlocked(): ?bool {
        return $this->resetProtectionModeBlocked;
    }

    /**
     * Gets the safeSearchFilter property value. Specifies what level of safe search (filtering adult content) is required
     * @return SafeSearchFilterType|null
    */
    public function getSafeSearchFilter(): ?SafeSearchFilterType {
        return $this->safeSearchFilter;
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to Block the user from taking Screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->screenCaptureBlocked;
    }

    /**
     * Gets the searchBlockDiacritics property value. Specifies if search can use diacritics.
     * @return bool|null
    */
    public function getSearchBlockDiacritics(): ?bool {
        return $this->searchBlockDiacritics;
    }

    /**
     * Gets the searchDisableAutoLanguageDetection property value. Specifies whether to use automatic language detection when indexing content and properties.
     * @return bool|null
    */
    public function getSearchDisableAutoLanguageDetection(): ?bool {
        return $this->searchDisableAutoLanguageDetection;
    }

    /**
     * Gets the searchDisableIndexerBackoff property value. Indicates whether or not to disable the search indexer backoff feature.
     * @return bool|null
    */
    public function getSearchDisableIndexerBackoff(): ?bool {
        return $this->searchDisableIndexerBackoff;
    }

    /**
     * Gets the searchDisableIndexingEncryptedItems property value. Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
     * @return bool|null
    */
    public function getSearchDisableIndexingEncryptedItems(): ?bool {
        return $this->searchDisableIndexingEncryptedItems;
    }

    /**
     * Gets the searchDisableIndexingRemovableDrive property value. Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
     * @return bool|null
    */
    public function getSearchDisableIndexingRemovableDrive(): ?bool {
        return $this->searchDisableIndexingRemovableDrive;
    }

    /**
     * Gets the searchEnableAutomaticIndexSizeManangement property value. Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
     * @return bool|null
    */
    public function getSearchEnableAutomaticIndexSizeManangement(): ?bool {
        return $this->searchEnableAutomaticIndexSizeManangement;
    }

    /**
     * Gets the searchEnableRemoteQueries property value. Indicates whether or not to block remote queries of this computer’s index.
     * @return bool|null
    */
    public function getSearchEnableRemoteQueries(): ?bool {
        return $this->searchEnableRemoteQueries;
    }

    /**
     * Gets the settingsBlockAccountsPage property value. Indicates whether or not to block access to Accounts in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockAccountsPage(): ?bool {
        return $this->settingsBlockAccountsPage;
    }

    /**
     * Gets the settingsBlockAddProvisioningPackage property value. Indicates whether or not to block the user from installing provisioning packages.
     * @return bool|null
    */
    public function getSettingsBlockAddProvisioningPackage(): ?bool {
        return $this->settingsBlockAddProvisioningPackage;
    }

    /**
     * Gets the settingsBlockAppsPage property value. Indicates whether or not to block access to Apps in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockAppsPage(): ?bool {
        return $this->settingsBlockAppsPage;
    }

    /**
     * Gets the settingsBlockChangeLanguage property value. Indicates whether or not to block the user from changing the language settings.
     * @return bool|null
    */
    public function getSettingsBlockChangeLanguage(): ?bool {
        return $this->settingsBlockChangeLanguage;
    }

    /**
     * Gets the settingsBlockChangePowerSleep property value. Indicates whether or not to block the user from changing power and sleep settings.
     * @return bool|null
    */
    public function getSettingsBlockChangePowerSleep(): ?bool {
        return $this->settingsBlockChangePowerSleep;
    }

    /**
     * Gets the settingsBlockChangeRegion property value. Indicates whether or not to block the user from changing the region settings.
     * @return bool|null
    */
    public function getSettingsBlockChangeRegion(): ?bool {
        return $this->settingsBlockChangeRegion;
    }

    /**
     * Gets the settingsBlockChangeSystemTime property value. Indicates whether or not to block the user from changing date and time settings.
     * @return bool|null
    */
    public function getSettingsBlockChangeSystemTime(): ?bool {
        return $this->settingsBlockChangeSystemTime;
    }

    /**
     * Gets the settingsBlockDevicesPage property value. Indicates whether or not to block access to Devices in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockDevicesPage(): ?bool {
        return $this->settingsBlockDevicesPage;
    }

    /**
     * Gets the settingsBlockEaseOfAccessPage property value. Indicates whether or not to block access to Ease of Access in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockEaseOfAccessPage(): ?bool {
        return $this->settingsBlockEaseOfAccessPage;
    }

    /**
     * Gets the settingsBlockEditDeviceName property value. Indicates whether or not to block the user from editing the device name.
     * @return bool|null
    */
    public function getSettingsBlockEditDeviceName(): ?bool {
        return $this->settingsBlockEditDeviceName;
    }

    /**
     * Gets the settingsBlockGamingPage property value. Indicates whether or not to block access to Gaming in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockGamingPage(): ?bool {
        return $this->settingsBlockGamingPage;
    }

    /**
     * Gets the settingsBlockNetworkInternetPage property value. Indicates whether or not to block access to Network & Internet in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockNetworkInternetPage(): ?bool {
        return $this->settingsBlockNetworkInternetPage;
    }

    /**
     * Gets the settingsBlockPersonalizationPage property value. Indicates whether or not to block access to Personalization in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockPersonalizationPage(): ?bool {
        return $this->settingsBlockPersonalizationPage;
    }

    /**
     * Gets the settingsBlockPrivacyPage property value. Indicates whether or not to block access to Privacy in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockPrivacyPage(): ?bool {
        return $this->settingsBlockPrivacyPage;
    }

    /**
     * Gets the settingsBlockRemoveProvisioningPackage property value. Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
     * @return bool|null
    */
    public function getSettingsBlockRemoveProvisioningPackage(): ?bool {
        return $this->settingsBlockRemoveProvisioningPackage;
    }

    /**
     * Gets the settingsBlockSettingsApp property value. Indicates whether or not to block access to Settings app.
     * @return bool|null
    */
    public function getSettingsBlockSettingsApp(): ?bool {
        return $this->settingsBlockSettingsApp;
    }

    /**
     * Gets the settingsBlockSystemPage property value. Indicates whether or not to block access to System in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockSystemPage(): ?bool {
        return $this->settingsBlockSystemPage;
    }

    /**
     * Gets the settingsBlockTimeLanguagePage property value. Indicates whether or not to block access to Time & Language in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockTimeLanguagePage(): ?bool {
        return $this->settingsBlockTimeLanguagePage;
    }

    /**
     * Gets the settingsBlockUpdateSecurityPage property value. Indicates whether or not to block access to Update & Security in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockUpdateSecurityPage(): ?bool {
        return $this->settingsBlockUpdateSecurityPage;
    }

    /**
     * Gets the sharedUserAppDataAllowed property value. Indicates whether or not to block multiple users of the same app to share data.
     * @return bool|null
    */
    public function getSharedUserAppDataAllowed(): ?bool {
        return $this->sharedUserAppDataAllowed;
    }

    /**
     * Gets the smartScreenBlockPromptOverride property value. Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
     * @return bool|null
    */
    public function getSmartScreenBlockPromptOverride(): ?bool {
        return $this->smartScreenBlockPromptOverride;
    }

    /**
     * Gets the smartScreenBlockPromptOverrideForFiles property value. Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
     * @return bool|null
    */
    public function getSmartScreenBlockPromptOverrideForFiles(): ?bool {
        return $this->smartScreenBlockPromptOverrideForFiles;
    }

    /**
     * Gets the smartScreenEnableAppInstallControl property value. This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
     * @return bool|null
    */
    public function getSmartScreenEnableAppInstallControl(): ?bool {
        return $this->smartScreenEnableAppInstallControl;
    }

    /**
     * Gets the startBlockUnpinningAppsFromTaskbar property value. Indicates whether or not to block the user from unpinning apps from taskbar.
     * @return bool|null
    */
    public function getStartBlockUnpinningAppsFromTaskbar(): ?bool {
        return $this->startBlockUnpinningAppsFromTaskbar;
    }

    /**
     * Gets the startMenuAppListVisibility property value. Type of start menu app list visibility.
     * @return WindowsStartMenuAppListVisibilityType|null
    */
    public function getStartMenuAppListVisibility(): ?WindowsStartMenuAppListVisibilityType {
        return $this->startMenuAppListVisibility;
    }

    /**
     * Gets the startMenuHideChangeAccountSettings property value. Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideChangeAccountSettings(): ?bool {
        return $this->startMenuHideChangeAccountSettings;
    }

    /**
     * Gets the startMenuHideFrequentlyUsedApps property value. Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     * @return bool|null
    */
    public function getStartMenuHideFrequentlyUsedApps(): ?bool {
        return $this->startMenuHideFrequentlyUsedApps;
    }

    /**
     * Gets the startMenuHideHibernate property value. Enabling this policy hides hibernate from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideHibernate(): ?bool {
        return $this->startMenuHideHibernate;
    }

    /**
     * Gets the startMenuHideLock property value. Enabling this policy hides lock from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideLock(): ?bool {
        return $this->startMenuHideLock;
    }

    /**
     * Gets the startMenuHidePowerButton property value. Enabling this policy hides the power button from appearing in the start menu.
     * @return bool|null
    */
    public function getStartMenuHidePowerButton(): ?bool {
        return $this->startMenuHidePowerButton;
    }

    /**
     * Gets the startMenuHideRecentJumpLists property value. Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
     * @return bool|null
    */
    public function getStartMenuHideRecentJumpLists(): ?bool {
        return $this->startMenuHideRecentJumpLists;
    }

    /**
     * Gets the startMenuHideRecentlyAddedApps property value. Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     * @return bool|null
    */
    public function getStartMenuHideRecentlyAddedApps(): ?bool {
        return $this->startMenuHideRecentlyAddedApps;
    }

    /**
     * Gets the startMenuHideRestartOptions property value. Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideRestartOptions(): ?bool {
        return $this->startMenuHideRestartOptions;
    }

    /**
     * Gets the startMenuHideShutDown property value. Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideShutDown(): ?bool {
        return $this->startMenuHideShutDown;
    }

    /**
     * Gets the startMenuHideSignOut property value. Enabling this policy hides sign out from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideSignOut(): ?bool {
        return $this->startMenuHideSignOut;
    }

    /**
     * Gets the startMenuHideSleep property value. Enabling this policy hides sleep from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideSleep(): ?bool {
        return $this->startMenuHideSleep;
    }

    /**
     * Gets the startMenuHideSwitchAccount property value. Enabling this policy hides switch account from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideSwitchAccount(): ?bool {
        return $this->startMenuHideSwitchAccount;
    }

    /**
     * Gets the startMenuHideUserTile property value. Enabling this policy hides the user tile from appearing in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideUserTile(): ?bool {
        return $this->startMenuHideUserTile;
    }

    /**
     * Gets the startMenuLayoutEdgeAssetsXml property value. This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
     * @return StreamInterface|null
    */
    public function getStartMenuLayoutEdgeAssetsXml(): ?StreamInterface {
        return $this->startMenuLayoutEdgeAssetsXml;
    }

    /**
     * Gets the startMenuLayoutXml property value. Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
     * @return StreamInterface|null
    */
    public function getStartMenuLayoutXml(): ?StreamInterface {
        return $this->startMenuLayoutXml;
    }

    /**
     * Gets the startMenuMode property value. Type of display modes for the start menu.
     * @return WindowsStartMenuModeType|null
    */
    public function getStartMenuMode(): ?WindowsStartMenuModeType {
        return $this->startMenuMode;
    }

    /**
     * Gets the startMenuPinnedFolderDocuments property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderDocuments(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderDocuments;
    }

    /**
     * Gets the startMenuPinnedFolderDownloads property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderDownloads(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderDownloads;
    }

    /**
     * Gets the startMenuPinnedFolderFileExplorer property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderFileExplorer(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderFileExplorer;
    }

    /**
     * Gets the startMenuPinnedFolderHomeGroup property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderHomeGroup(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderHomeGroup;
    }

    /**
     * Gets the startMenuPinnedFolderMusic property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderMusic(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderMusic;
    }

    /**
     * Gets the startMenuPinnedFolderNetwork property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderNetwork(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderNetwork;
    }

    /**
     * Gets the startMenuPinnedFolderPersonalFolder property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderPersonalFolder(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderPersonalFolder;
    }

    /**
     * Gets the startMenuPinnedFolderPictures property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderPictures(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderPictures;
    }

    /**
     * Gets the startMenuPinnedFolderSettings property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderSettings(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderSettings;
    }

    /**
     * Gets the startMenuPinnedFolderVideos property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderVideos(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderVideos;
    }

    /**
     * Gets the storageBlockRemovableStorage property value. Indicates whether or not to Block the user from using removable storage.
     * @return bool|null
    */
    public function getStorageBlockRemovableStorage(): ?bool {
        return $this->storageBlockRemovableStorage;
    }

    /**
     * Gets the storageRequireMobileDeviceEncryption property value. Indicating whether or not to require encryption on a mobile device.
     * @return bool|null
    */
    public function getStorageRequireMobileDeviceEncryption(): ?bool {
        return $this->storageRequireMobileDeviceEncryption;
    }

    /**
     * Gets the storageRestrictAppDataToSystemVolume property value. Indicates whether application data is restricted to the system drive.
     * @return bool|null
    */
    public function getStorageRestrictAppDataToSystemVolume(): ?bool {
        return $this->storageRestrictAppDataToSystemVolume;
    }

    /**
     * Gets the storageRestrictAppInstallToSystemVolume property value. Indicates whether the installation of applications is restricted to the system drive.
     * @return bool|null
    */
    public function getStorageRestrictAppInstallToSystemVolume(): ?bool {
        return $this->storageRestrictAppInstallToSystemVolume;
    }

    /**
     * Gets the tenantLockdownRequireNetworkDuringOutOfBoxExperience property value. Whether the device is required to connect to the network.
     * @return bool|null
    */
    public function getTenantLockdownRequireNetworkDuringOutOfBoxExperience(): ?bool {
        return $this->tenantLockdownRequireNetworkDuringOutOfBoxExperience;
    }

    /**
     * Gets the usbBlocked property value. Indicates whether or not to Block the user from USB connection.
     * @return bool|null
    */
    public function getUsbBlocked(): ?bool {
        return $this->usbBlocked;
    }

    /**
     * Gets the voiceRecordingBlocked property value. Indicates whether or not to Block the user from voice recording.
     * @return bool|null
    */
    public function getVoiceRecordingBlocked(): ?bool {
        return $this->voiceRecordingBlocked;
    }

    /**
     * Gets the webRtcBlockLocalhostIpAddress property value. Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
     * @return bool|null
    */
    public function getWebRtcBlockLocalhostIpAddress(): ?bool {
        return $this->webRtcBlockLocalhostIpAddress;
    }

    /**
     * Gets the wiFiBlockAutomaticConnectHotspots property value. Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     * @return bool|null
    */
    public function getWiFiBlockAutomaticConnectHotspots(): ?bool {
        return $this->wiFiBlockAutomaticConnectHotspots;
    }

    /**
     * Gets the wiFiBlocked property value. Indicates whether or not to Block the user from using Wi-Fi.
     * @return bool|null
    */
    public function getWiFiBlocked(): ?bool {
        return $this->wiFiBlocked;
    }

    /**
     * Gets the wiFiBlockManualConfiguration property value. Indicates whether or not to Block the user from using Wi-Fi manual configuration.
     * @return bool|null
    */
    public function getWiFiBlockManualConfiguration(): ?bool {
        return $this->wiFiBlockManualConfiguration;
    }

    /**
     * Gets the wiFiScanInterval property value. Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
     * @return int|null
    */
    public function getWiFiScanInterval(): ?int {
        return $this->wiFiScanInterval;
    }

    /**
     * Gets the windowsSpotlightBlockConsumerSpecificFeatures property value. Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
     * @return bool|null
    */
    public function getWindowsSpotlightBlockConsumerSpecificFeatures(): ?bool {
        return $this->windowsSpotlightBlockConsumerSpecificFeatures;
    }

    /**
     * Gets the windowsSpotlightBlocked property value. Allows IT admins to turn off all Windows Spotlight features
     * @return bool|null
    */
    public function getWindowsSpotlightBlocked(): ?bool {
        return $this->windowsSpotlightBlocked;
    }

    /**
     * Gets the windowsSpotlightBlockOnActionCenter property value. Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
     * @return bool|null
    */
    public function getWindowsSpotlightBlockOnActionCenter(): ?bool {
        return $this->windowsSpotlightBlockOnActionCenter;
    }

    /**
     * Gets the windowsSpotlightBlockTailoredExperiences property value. Block personalized content in Windows spotlight based on user’s device usage.
     * @return bool|null
    */
    public function getWindowsSpotlightBlockTailoredExperiences(): ?bool {
        return $this->windowsSpotlightBlockTailoredExperiences;
    }

    /**
     * Gets the windowsSpotlightBlockThirdPartyNotifications property value. Block third party content delivered via Windows Spotlight
     * @return bool|null
    */
    public function getWindowsSpotlightBlockThirdPartyNotifications(): ?bool {
        return $this->windowsSpotlightBlockThirdPartyNotifications;
    }

    /**
     * Gets the windowsSpotlightBlockWelcomeExperience property value. Block Windows Spotlight Windows welcome experience
     * @return bool|null
    */
    public function getWindowsSpotlightBlockWelcomeExperience(): ?bool {
        return $this->windowsSpotlightBlockWelcomeExperience;
    }

    /**
     * Gets the windowsSpotlightBlockWindowsTips property value. Allows IT admins to turn off the popup of Windows Tips.
     * @return bool|null
    */
    public function getWindowsSpotlightBlockWindowsTips(): ?bool {
        return $this->windowsSpotlightBlockWindowsTips;
    }

    /**
     * Gets the windowsSpotlightConfigureOnLockScreen property value. Allows IT admind to set a predefined default search engine for MDM-Controlled devices
     * @return WindowsSpotlightEnablementSettings|null
    */
    public function getWindowsSpotlightConfigureOnLockScreen(): ?WindowsSpotlightEnablementSettings {
        return $this->windowsSpotlightConfigureOnLockScreen;
    }

    /**
     * Gets the windowsStoreBlockAutoUpdate property value. Indicates whether or not to block automatic update of apps from Windows Store.
     * @return bool|null
    */
    public function getWindowsStoreBlockAutoUpdate(): ?bool {
        return $this->windowsStoreBlockAutoUpdate;
    }

    /**
     * Gets the windowsStoreBlocked property value. Indicates whether or not to Block the user from using the Windows store.
     * @return bool|null
    */
    public function getWindowsStoreBlocked(): ?bool {
        return $this->windowsStoreBlocked;
    }

    /**
     * Gets the windowsStoreEnablePrivateStoreOnly property value. Indicates whether or not to enable Private Store Only.
     * @return bool|null
    */
    public function getWindowsStoreEnablePrivateStoreOnly(): ?bool {
        return $this->windowsStoreEnablePrivateStoreOnly;
    }

    /**
     * Gets the wirelessDisplayBlockProjectionToThisDevice property value. Indicates whether or not to allow other devices from discovering this PC for projection.
     * @return bool|null
    */
    public function getWirelessDisplayBlockProjectionToThisDevice(): ?bool {
        return $this->wirelessDisplayBlockProjectionToThisDevice;
    }

    /**
     * Gets the wirelessDisplayBlockUserInputFromReceiver property value. Indicates whether or not to allow user input from wireless display receiver.
     * @return bool|null
    */
    public function getWirelessDisplayBlockUserInputFromReceiver(): ?bool {
        return $this->wirelessDisplayBlockUserInputFromReceiver;
    }

    /**
     * Gets the wirelessDisplayRequirePinForPairing property value. Indicates whether or not to require a PIN for new devices to initiate pairing.
     * @return bool|null
    */
    public function getWirelessDisplayRequirePinForPairing(): ?bool {
        return $this->wirelessDisplayRequirePinForPairing;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountsBlockAddingNonMicrosoftAccountEmail', $this->accountsBlockAddingNonMicrosoftAccountEmail);
        $writer->writeBooleanValue('antiTheftModeBlocked', $this->antiTheftModeBlocked);
        $writer->writeEnumValue('appsAllowTrustedAppsSideloading', $this->appsAllowTrustedAppsSideloading);
        $writer->writeBooleanValue('appsBlockWindowsStoreOriginatedApps', $this->appsBlockWindowsStoreOriginatedApps);
        $writer->writeCollectionOfPrimitiveValues('bluetoothAllowedServices', $this->bluetoothAllowedServices);
        $writer->writeBooleanValue('bluetoothBlockAdvertising', $this->bluetoothBlockAdvertising);
        $writer->writeBooleanValue('bluetoothBlockDiscoverableMode', $this->bluetoothBlockDiscoverableMode);
        $writer->writeBooleanValue('bluetoothBlocked', $this->bluetoothBlocked);
        $writer->writeBooleanValue('bluetoothBlockPrePairing', $this->bluetoothBlockPrePairing);
        $writer->writeBooleanValue('cameraBlocked', $this->cameraBlocked);
        $writer->writeBooleanValue('cellularBlockDataWhenRoaming', $this->cellularBlockDataWhenRoaming);
        $writer->writeBooleanValue('cellularBlockVpn', $this->cellularBlockVpn);
        $writer->writeBooleanValue('cellularBlockVpnWhenRoaming', $this->cellularBlockVpnWhenRoaming);
        $writer->writeBooleanValue('certificatesBlockManualRootCertificateInstallation', $this->certificatesBlockManualRootCertificateInstallation);
        $writer->writeBooleanValue('connectedDevicesServiceBlocked', $this->connectedDevicesServiceBlocked);
        $writer->writeBooleanValue('copyPasteBlocked', $this->copyPasteBlocked);
        $writer->writeBooleanValue('cortanaBlocked', $this->cortanaBlocked);
        $writer->writeBooleanValue('defenderBlockEndUserAccess', $this->defenderBlockEndUserAccess);
        $writer->writeEnumValue('defenderCloudBlockLevel', $this->defenderCloudBlockLevel);
        $writer->writeIntegerValue('defenderDaysBeforeDeletingQuarantinedMalware', $this->defenderDaysBeforeDeletingQuarantinedMalware);
        $writer->writeObjectValue('defenderDetectedMalwareActions', $this->defenderDetectedMalwareActions);
        $writer->writeCollectionOfPrimitiveValues('defenderFileExtensionsToExclude', $this->defenderFileExtensionsToExclude);
        $writer->writeCollectionOfPrimitiveValues('defenderFilesAndFoldersToExclude', $this->defenderFilesAndFoldersToExclude);
        $writer->writeEnumValue('defenderMonitorFileActivity', $this->defenderMonitorFileActivity);
        $writer->writeCollectionOfPrimitiveValues('defenderProcessesToExclude', $this->defenderProcessesToExclude);
        $writer->writeEnumValue('defenderPromptForSampleSubmission', $this->defenderPromptForSampleSubmission);
        $writer->writeBooleanValue('defenderRequireBehaviorMonitoring', $this->defenderRequireBehaviorMonitoring);
        $writer->writeBooleanValue('defenderRequireCloudProtection', $this->defenderRequireCloudProtection);
        $writer->writeBooleanValue('defenderRequireNetworkInspectionSystem', $this->defenderRequireNetworkInspectionSystem);
        $writer->writeBooleanValue('defenderRequireRealTimeMonitoring', $this->defenderRequireRealTimeMonitoring);
        $writer->writeBooleanValue('defenderScanArchiveFiles', $this->defenderScanArchiveFiles);
        $writer->writeBooleanValue('defenderScanDownloads', $this->defenderScanDownloads);
        $writer->writeBooleanValue('defenderScanIncomingMail', $this->defenderScanIncomingMail);
        $writer->writeBooleanValue('defenderScanMappedNetworkDrivesDuringFullScan', $this->defenderScanMappedNetworkDrivesDuringFullScan);
        $writer->writeIntegerValue('defenderScanMaxCpu', $this->defenderScanMaxCpu);
        $writer->writeBooleanValue('defenderScanNetworkFiles', $this->defenderScanNetworkFiles);
        $writer->writeBooleanValue('defenderScanRemovableDrivesDuringFullScan', $this->defenderScanRemovableDrivesDuringFullScan);
        $writer->writeBooleanValue('defenderScanScriptsLoadedInInternetExplorer', $this->defenderScanScriptsLoadedInInternetExplorer);
        $writer->writeEnumValue('defenderScanType', $this->defenderScanType);
        $writer->writeTimeValue('defenderScheduledQuickScanTime', $this->defenderScheduledQuickScanTime);
        $writer->writeTimeValue('defenderScheduledScanTime', $this->defenderScheduledScanTime);
        $writer->writeIntegerValue('defenderSignatureUpdateIntervalInHours', $this->defenderSignatureUpdateIntervalInHours);
        $writer->writeEnumValue('defenderSystemScanSchedule', $this->defenderSystemScanSchedule);
        $writer->writeEnumValue('developerUnlockSetting', $this->developerUnlockSetting);
        $writer->writeBooleanValue('deviceManagementBlockFactoryResetOnMobile', $this->deviceManagementBlockFactoryResetOnMobile);
        $writer->writeBooleanValue('deviceManagementBlockManualUnenroll', $this->deviceManagementBlockManualUnenroll);
        $writer->writeEnumValue('diagnosticsDataSubmissionMode', $this->diagnosticsDataSubmissionMode);
        $writer->writeBooleanValue('edgeAllowStartPagesModification', $this->edgeAllowStartPagesModification);
        $writer->writeBooleanValue('edgeBlockAccessToAboutFlags', $this->edgeBlockAccessToAboutFlags);
        $writer->writeBooleanValue('edgeBlockAddressBarDropdown', $this->edgeBlockAddressBarDropdown);
        $writer->writeBooleanValue('edgeBlockAutofill', $this->edgeBlockAutofill);
        $writer->writeBooleanValue('edgeBlockCompatibilityList', $this->edgeBlockCompatibilityList);
        $writer->writeBooleanValue('edgeBlockDeveloperTools', $this->edgeBlockDeveloperTools);
        $writer->writeBooleanValue('edgeBlocked', $this->edgeBlocked);
        $writer->writeBooleanValue('edgeBlockExtensions', $this->edgeBlockExtensions);
        $writer->writeBooleanValue('edgeBlockInPrivateBrowsing', $this->edgeBlockInPrivateBrowsing);
        $writer->writeBooleanValue('edgeBlockJavaScript', $this->edgeBlockJavaScript);
        $writer->writeBooleanValue('edgeBlockLiveTileDataCollection', $this->edgeBlockLiveTileDataCollection);
        $writer->writeBooleanValue('edgeBlockPasswordManager', $this->edgeBlockPasswordManager);
        $writer->writeBooleanValue('edgeBlockPopups', $this->edgeBlockPopups);
        $writer->writeBooleanValue('edgeBlockSearchSuggestions', $this->edgeBlockSearchSuggestions);
        $writer->writeBooleanValue('edgeBlockSendingDoNotTrackHeader', $this->edgeBlockSendingDoNotTrackHeader);
        $writer->writeBooleanValue('edgeBlockSendingIntranetTrafficToInternetExplorer', $this->edgeBlockSendingIntranetTrafficToInternetExplorer);
        $writer->writeBooleanValue('edgeClearBrowsingDataOnExit', $this->edgeClearBrowsingDataOnExit);
        $writer->writeEnumValue('edgeCookiePolicy', $this->edgeCookiePolicy);
        $writer->writeBooleanValue('edgeDisableFirstRunPage', $this->edgeDisableFirstRunPage);
        $writer->writeStringValue('edgeEnterpriseModeSiteListLocation', $this->edgeEnterpriseModeSiteListLocation);
        $writer->writeStringValue('edgeFirstRunUrl', $this->edgeFirstRunUrl);
        $writer->writeCollectionOfPrimitiveValues('edgeHomepageUrls', $this->edgeHomepageUrls);
        $writer->writeBooleanValue('edgeRequireSmartScreen', $this->edgeRequireSmartScreen);
        $writer->writeObjectValue('edgeSearchEngine', $this->edgeSearchEngine);
        $writer->writeBooleanValue('edgeSendIntranetTrafficToInternetExplorer', $this->edgeSendIntranetTrafficToInternetExplorer);
        $writer->writeBooleanValue('edgeSyncFavoritesWithInternetExplorer', $this->edgeSyncFavoritesWithInternetExplorer);
        $writer->writeStringValue('enterpriseCloudPrintDiscoveryEndPoint', $this->enterpriseCloudPrintDiscoveryEndPoint);
        $writer->writeIntegerValue('enterpriseCloudPrintDiscoveryMaxLimit', $this->enterpriseCloudPrintDiscoveryMaxLimit);
        $writer->writeStringValue('enterpriseCloudPrintMopriaDiscoveryResourceIdentifier', $this->enterpriseCloudPrintMopriaDiscoveryResourceIdentifier);
        $writer->writeStringValue('enterpriseCloudPrintOAuthAuthority', $this->enterpriseCloudPrintOAuthAuthority);
        $writer->writeStringValue('enterpriseCloudPrintOAuthClientIdentifier', $this->enterpriseCloudPrintOAuthClientIdentifier);
        $writer->writeStringValue('enterpriseCloudPrintResourceIdentifier', $this->enterpriseCloudPrintResourceIdentifier);
        $writer->writeBooleanValue('experienceBlockDeviceDiscovery', $this->experienceBlockDeviceDiscovery);
        $writer->writeBooleanValue('experienceBlockErrorDialogWhenNoSIM', $this->experienceBlockErrorDialogWhenNoSIM);
        $writer->writeBooleanValue('experienceBlockTaskSwitcher', $this->experienceBlockTaskSwitcher);
        $writer->writeBooleanValue('gameDvrBlocked', $this->gameDvrBlocked);
        $writer->writeBooleanValue('internetSharingBlocked', $this->internetSharingBlocked);
        $writer->writeBooleanValue('locationServicesBlocked', $this->locationServicesBlocked);
        $writer->writeBooleanValue('lockScreenAllowTimeoutConfiguration', $this->lockScreenAllowTimeoutConfiguration);
        $writer->writeBooleanValue('lockScreenBlockActionCenterNotifications', $this->lockScreenBlockActionCenterNotifications);
        $writer->writeBooleanValue('lockScreenBlockCortana', $this->lockScreenBlockCortana);
        $writer->writeBooleanValue('lockScreenBlockToastNotifications', $this->lockScreenBlockToastNotifications);
        $writer->writeIntegerValue('lockScreenTimeoutInSeconds', $this->lockScreenTimeoutInSeconds);
        $writer->writeBooleanValue('logonBlockFastUserSwitching', $this->logonBlockFastUserSwitching);
        $writer->writeBooleanValue('microsoftAccountBlocked', $this->microsoftAccountBlocked);
        $writer->writeBooleanValue('microsoftAccountBlockSettingsSync', $this->microsoftAccountBlockSettingsSync);
        $writer->writeBooleanValue('networkProxyApplySettingsDeviceWide', $this->networkProxyApplySettingsDeviceWide);
        $writer->writeStringValue('networkProxyAutomaticConfigurationUrl', $this->networkProxyAutomaticConfigurationUrl);
        $writer->writeBooleanValue('networkProxyDisableAutoDetect', $this->networkProxyDisableAutoDetect);
        $writer->writeObjectValue('networkProxyServer', $this->networkProxyServer);
        $writer->writeBooleanValue('nfcBlocked', $this->nfcBlocked);
        $writer->writeBooleanValue('oneDriveDisableFileSync', $this->oneDriveDisableFileSync);
        $writer->writeBooleanValue('passwordBlockSimple', $this->passwordBlockSimple);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->passwordMinimumCharacterSetCount);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->passwordMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeBooleanValue('passwordRequired', $this->passwordRequired);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeBooleanValue('passwordRequireWhenResumeFromIdleState', $this->passwordRequireWhenResumeFromIdleState);
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->passwordSignInFailureCountBeforeFactoryReset);
        $writer->writeStringValue('personalizationDesktopImageUrl', $this->personalizationDesktopImageUrl);
        $writer->writeStringValue('personalizationLockScreenImageUrl', $this->personalizationLockScreenImageUrl);
        $writer->writeEnumValue('privacyAdvertisingId', $this->privacyAdvertisingId);
        $writer->writeBooleanValue('privacyAutoAcceptPairingAndConsentPrompts', $this->privacyAutoAcceptPairingAndConsentPrompts);
        $writer->writeBooleanValue('privacyBlockInputPersonalization', $this->privacyBlockInputPersonalization);
        $writer->writeBooleanValue('resetProtectionModeBlocked', $this->resetProtectionModeBlocked);
        $writer->writeEnumValue('safeSearchFilter', $this->safeSearchFilter);
        $writer->writeBooleanValue('screenCaptureBlocked', $this->screenCaptureBlocked);
        $writer->writeBooleanValue('searchBlockDiacritics', $this->searchBlockDiacritics);
        $writer->writeBooleanValue('searchDisableAutoLanguageDetection', $this->searchDisableAutoLanguageDetection);
        $writer->writeBooleanValue('searchDisableIndexerBackoff', $this->searchDisableIndexerBackoff);
        $writer->writeBooleanValue('searchDisableIndexingEncryptedItems', $this->searchDisableIndexingEncryptedItems);
        $writer->writeBooleanValue('searchDisableIndexingRemovableDrive', $this->searchDisableIndexingRemovableDrive);
        $writer->writeBooleanValue('searchEnableAutomaticIndexSizeManangement', $this->searchEnableAutomaticIndexSizeManangement);
        $writer->writeBooleanValue('searchEnableRemoteQueries', $this->searchEnableRemoteQueries);
        $writer->writeBooleanValue('settingsBlockAccountsPage', $this->settingsBlockAccountsPage);
        $writer->writeBooleanValue('settingsBlockAddProvisioningPackage', $this->settingsBlockAddProvisioningPackage);
        $writer->writeBooleanValue('settingsBlockAppsPage', $this->settingsBlockAppsPage);
        $writer->writeBooleanValue('settingsBlockChangeLanguage', $this->settingsBlockChangeLanguage);
        $writer->writeBooleanValue('settingsBlockChangePowerSleep', $this->settingsBlockChangePowerSleep);
        $writer->writeBooleanValue('settingsBlockChangeRegion', $this->settingsBlockChangeRegion);
        $writer->writeBooleanValue('settingsBlockChangeSystemTime', $this->settingsBlockChangeSystemTime);
        $writer->writeBooleanValue('settingsBlockDevicesPage', $this->settingsBlockDevicesPage);
        $writer->writeBooleanValue('settingsBlockEaseOfAccessPage', $this->settingsBlockEaseOfAccessPage);
        $writer->writeBooleanValue('settingsBlockEditDeviceName', $this->settingsBlockEditDeviceName);
        $writer->writeBooleanValue('settingsBlockGamingPage', $this->settingsBlockGamingPage);
        $writer->writeBooleanValue('settingsBlockNetworkInternetPage', $this->settingsBlockNetworkInternetPage);
        $writer->writeBooleanValue('settingsBlockPersonalizationPage', $this->settingsBlockPersonalizationPage);
        $writer->writeBooleanValue('settingsBlockPrivacyPage', $this->settingsBlockPrivacyPage);
        $writer->writeBooleanValue('settingsBlockRemoveProvisioningPackage', $this->settingsBlockRemoveProvisioningPackage);
        $writer->writeBooleanValue('settingsBlockSettingsApp', $this->settingsBlockSettingsApp);
        $writer->writeBooleanValue('settingsBlockSystemPage', $this->settingsBlockSystemPage);
        $writer->writeBooleanValue('settingsBlockTimeLanguagePage', $this->settingsBlockTimeLanguagePage);
        $writer->writeBooleanValue('settingsBlockUpdateSecurityPage', $this->settingsBlockUpdateSecurityPage);
        $writer->writeBooleanValue('sharedUserAppDataAllowed', $this->sharedUserAppDataAllowed);
        $writer->writeBooleanValue('smartScreenBlockPromptOverride', $this->smartScreenBlockPromptOverride);
        $writer->writeBooleanValue('smartScreenBlockPromptOverrideForFiles', $this->smartScreenBlockPromptOverrideForFiles);
        $writer->writeBooleanValue('smartScreenEnableAppInstallControl', $this->smartScreenEnableAppInstallControl);
        $writer->writeBooleanValue('startBlockUnpinningAppsFromTaskbar', $this->startBlockUnpinningAppsFromTaskbar);
        $writer->writeEnumValue('startMenuAppListVisibility', $this->startMenuAppListVisibility);
        $writer->writeBooleanValue('startMenuHideChangeAccountSettings', $this->startMenuHideChangeAccountSettings);
        $writer->writeBooleanValue('startMenuHideFrequentlyUsedApps', $this->startMenuHideFrequentlyUsedApps);
        $writer->writeBooleanValue('startMenuHideHibernate', $this->startMenuHideHibernate);
        $writer->writeBooleanValue('startMenuHideLock', $this->startMenuHideLock);
        $writer->writeBooleanValue('startMenuHidePowerButton', $this->startMenuHidePowerButton);
        $writer->writeBooleanValue('startMenuHideRecentJumpLists', $this->startMenuHideRecentJumpLists);
        $writer->writeBooleanValue('startMenuHideRecentlyAddedApps', $this->startMenuHideRecentlyAddedApps);
        $writer->writeBooleanValue('startMenuHideRestartOptions', $this->startMenuHideRestartOptions);
        $writer->writeBooleanValue('startMenuHideShutDown', $this->startMenuHideShutDown);
        $writer->writeBooleanValue('startMenuHideSignOut', $this->startMenuHideSignOut);
        $writer->writeBooleanValue('startMenuHideSleep', $this->startMenuHideSleep);
        $writer->writeBooleanValue('startMenuHideSwitchAccount', $this->startMenuHideSwitchAccount);
        $writer->writeBooleanValue('startMenuHideUserTile', $this->startMenuHideUserTile);
        $writer->writeBinaryContent('startMenuLayoutEdgeAssetsXml', $this->startMenuLayoutEdgeAssetsXml);
        $writer->writeBinaryContent('startMenuLayoutXml', $this->startMenuLayoutXml);
        $writer->writeEnumValue('startMenuMode', $this->startMenuMode);
        $writer->writeEnumValue('startMenuPinnedFolderDocuments', $this->startMenuPinnedFolderDocuments);
        $writer->writeEnumValue('startMenuPinnedFolderDownloads', $this->startMenuPinnedFolderDownloads);
        $writer->writeEnumValue('startMenuPinnedFolderFileExplorer', $this->startMenuPinnedFolderFileExplorer);
        $writer->writeEnumValue('startMenuPinnedFolderHomeGroup', $this->startMenuPinnedFolderHomeGroup);
        $writer->writeEnumValue('startMenuPinnedFolderMusic', $this->startMenuPinnedFolderMusic);
        $writer->writeEnumValue('startMenuPinnedFolderNetwork', $this->startMenuPinnedFolderNetwork);
        $writer->writeEnumValue('startMenuPinnedFolderPersonalFolder', $this->startMenuPinnedFolderPersonalFolder);
        $writer->writeEnumValue('startMenuPinnedFolderPictures', $this->startMenuPinnedFolderPictures);
        $writer->writeEnumValue('startMenuPinnedFolderSettings', $this->startMenuPinnedFolderSettings);
        $writer->writeEnumValue('startMenuPinnedFolderVideos', $this->startMenuPinnedFolderVideos);
        $writer->writeBooleanValue('storageBlockRemovableStorage', $this->storageBlockRemovableStorage);
        $writer->writeBooleanValue('storageRequireMobileDeviceEncryption', $this->storageRequireMobileDeviceEncryption);
        $writer->writeBooleanValue('storageRestrictAppDataToSystemVolume', $this->storageRestrictAppDataToSystemVolume);
        $writer->writeBooleanValue('storageRestrictAppInstallToSystemVolume', $this->storageRestrictAppInstallToSystemVolume);
        $writer->writeBooleanValue('tenantLockdownRequireNetworkDuringOutOfBoxExperience', $this->tenantLockdownRequireNetworkDuringOutOfBoxExperience);
        $writer->writeBooleanValue('usbBlocked', $this->usbBlocked);
        $writer->writeBooleanValue('voiceRecordingBlocked', $this->voiceRecordingBlocked);
        $writer->writeBooleanValue('webRtcBlockLocalhostIpAddress', $this->webRtcBlockLocalhostIpAddress);
        $writer->writeBooleanValue('wiFiBlockAutomaticConnectHotspots', $this->wiFiBlockAutomaticConnectHotspots);
        $writer->writeBooleanValue('wiFiBlocked', $this->wiFiBlocked);
        $writer->writeBooleanValue('wiFiBlockManualConfiguration', $this->wiFiBlockManualConfiguration);
        $writer->writeIntegerValue('wiFiScanInterval', $this->wiFiScanInterval);
        $writer->writeBooleanValue('windowsSpotlightBlockConsumerSpecificFeatures', $this->windowsSpotlightBlockConsumerSpecificFeatures);
        $writer->writeBooleanValue('windowsSpotlightBlocked', $this->windowsSpotlightBlocked);
        $writer->writeBooleanValue('windowsSpotlightBlockOnActionCenter', $this->windowsSpotlightBlockOnActionCenter);
        $writer->writeBooleanValue('windowsSpotlightBlockTailoredExperiences', $this->windowsSpotlightBlockTailoredExperiences);
        $writer->writeBooleanValue('windowsSpotlightBlockThirdPartyNotifications', $this->windowsSpotlightBlockThirdPartyNotifications);
        $writer->writeBooleanValue('windowsSpotlightBlockWelcomeExperience', $this->windowsSpotlightBlockWelcomeExperience);
        $writer->writeBooleanValue('windowsSpotlightBlockWindowsTips', $this->windowsSpotlightBlockWindowsTips);
        $writer->writeEnumValue('windowsSpotlightConfigureOnLockScreen', $this->windowsSpotlightConfigureOnLockScreen);
        $writer->writeBooleanValue('windowsStoreBlockAutoUpdate', $this->windowsStoreBlockAutoUpdate);
        $writer->writeBooleanValue('windowsStoreBlocked', $this->windowsStoreBlocked);
        $writer->writeBooleanValue('windowsStoreEnablePrivateStoreOnly', $this->windowsStoreEnablePrivateStoreOnly);
        $writer->writeBooleanValue('wirelessDisplayBlockProjectionToThisDevice', $this->wirelessDisplayBlockProjectionToThisDevice);
        $writer->writeBooleanValue('wirelessDisplayBlockUserInputFromReceiver', $this->wirelessDisplayBlockUserInputFromReceiver);
        $writer->writeBooleanValue('wirelessDisplayRequirePinForPairing', $this->wirelessDisplayRequirePinForPairing);
    }

    /**
     * Sets the accountsBlockAddingNonMicrosoftAccountEmail property value. Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
     *  @param bool|null $value Value to set for the accountsBlockAddingNonMicrosoftAccountEmail property.
    */
    public function setAccountsBlockAddingNonMicrosoftAccountEmail(?bool $value ): void {
        $this->accountsBlockAddingNonMicrosoftAccountEmail = $value;
    }

    /**
     * Sets the antiTheftModeBlocked property value. Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
     *  @param bool|null $value Value to set for the antiTheftModeBlocked property.
    */
    public function setAntiTheftModeBlocked(?bool $value ): void {
        $this->antiTheftModeBlocked = $value;
    }

    /**
     * Sets the appsAllowTrustedAppsSideloading property value. State Management Setting.
     *  @param StateManagementSetting|null $value Value to set for the appsAllowTrustedAppsSideloading property.
    */
    public function setAppsAllowTrustedAppsSideloading(?StateManagementSetting $value ): void {
        $this->appsAllowTrustedAppsSideloading = $value;
    }

    /**
     * Sets the appsBlockWindowsStoreOriginatedApps property value. Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
     *  @param bool|null $value Value to set for the appsBlockWindowsStoreOriginatedApps property.
    */
    public function setAppsBlockWindowsStoreOriginatedApps(?bool $value ): void {
        $this->appsBlockWindowsStoreOriginatedApps = $value;
    }

    /**
     * Sets the bluetoothAllowedServices property value. Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
     *  @param array<string>|null $value Value to set for the bluetoothAllowedServices property.
    */
    public function setBluetoothAllowedServices(?array $value ): void {
        $this->bluetoothAllowedServices = $value;
    }

    /**
     * Sets the bluetoothBlockAdvertising property value. Whether or not to Block the user from using bluetooth advertising.
     *  @param bool|null $value Value to set for the bluetoothBlockAdvertising property.
    */
    public function setBluetoothBlockAdvertising(?bool $value ): void {
        $this->bluetoothBlockAdvertising = $value;
    }

    /**
     * Sets the bluetoothBlockDiscoverableMode property value. Whether or not to Block the user from using bluetooth discoverable mode.
     *  @param bool|null $value Value to set for the bluetoothBlockDiscoverableMode property.
    */
    public function setBluetoothBlockDiscoverableMode(?bool $value ): void {
        $this->bluetoothBlockDiscoverableMode = $value;
    }

    /**
     * Sets the bluetoothBlocked property value. Whether or not to Block the user from using bluetooth.
     *  @param bool|null $value Value to set for the bluetoothBlocked property.
    */
    public function setBluetoothBlocked(?bool $value ): void {
        $this->bluetoothBlocked = $value;
    }

    /**
     * Sets the bluetoothBlockPrePairing property value. Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
     *  @param bool|null $value Value to set for the bluetoothBlockPrePairing property.
    */
    public function setBluetoothBlockPrePairing(?bool $value ): void {
        $this->bluetoothBlockPrePairing = $value;
    }

    /**
     * Sets the cameraBlocked property value. Whether or not to Block the user from accessing the camera of the device.
     *  @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value ): void {
        $this->cameraBlocked = $value;
    }

    /**
     * Sets the cellularBlockDataWhenRoaming property value. Whether or not to Block the user from using data over cellular while roaming.
     *  @param bool|null $value Value to set for the cellularBlockDataWhenRoaming property.
    */
    public function setCellularBlockDataWhenRoaming(?bool $value ): void {
        $this->cellularBlockDataWhenRoaming = $value;
    }

    /**
     * Sets the cellularBlockVpn property value. Whether or not to Block the user from using VPN over cellular.
     *  @param bool|null $value Value to set for the cellularBlockVpn property.
    */
    public function setCellularBlockVpn(?bool $value ): void {
        $this->cellularBlockVpn = $value;
    }

    /**
     * Sets the cellularBlockVpnWhenRoaming property value. Whether or not to Block the user from using VPN when roaming over cellular.
     *  @param bool|null $value Value to set for the cellularBlockVpnWhenRoaming property.
    */
    public function setCellularBlockVpnWhenRoaming(?bool $value ): void {
        $this->cellularBlockVpnWhenRoaming = $value;
    }

    /**
     * Sets the certificatesBlockManualRootCertificateInstallation property value. Whether or not to Block the user from doing manual root certificate installation.
     *  @param bool|null $value Value to set for the certificatesBlockManualRootCertificateInstallation property.
    */
    public function setCertificatesBlockManualRootCertificateInstallation(?bool $value ): void {
        $this->certificatesBlockManualRootCertificateInstallation = $value;
    }

    /**
     * Sets the connectedDevicesServiceBlocked property value. Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
     *  @param bool|null $value Value to set for the connectedDevicesServiceBlocked property.
    */
    public function setConnectedDevicesServiceBlocked(?bool $value ): void {
        $this->connectedDevicesServiceBlocked = $value;
    }

    /**
     * Sets the copyPasteBlocked property value. Whether or not to Block the user from using copy paste.
     *  @param bool|null $value Value to set for the copyPasteBlocked property.
    */
    public function setCopyPasteBlocked(?bool $value ): void {
        $this->copyPasteBlocked = $value;
    }

    /**
     * Sets the cortanaBlocked property value. Whether or not to Block the user from using Cortana.
     *  @param bool|null $value Value to set for the cortanaBlocked property.
    */
    public function setCortanaBlocked(?bool $value ): void {
        $this->cortanaBlocked = $value;
    }

    /**
     * Sets the defenderBlockEndUserAccess property value. Whether or not to block end user access to Defender.
     *  @param bool|null $value Value to set for the defenderBlockEndUserAccess property.
    */
    public function setDefenderBlockEndUserAccess(?bool $value ): void {
        $this->defenderBlockEndUserAccess = $value;
    }

    /**
     * Sets the defenderCloudBlockLevel property value. Possible values of Cloud Block Level
     *  @param DefenderCloudBlockLevelType|null $value Value to set for the defenderCloudBlockLevel property.
    */
    public function setDefenderCloudBlockLevel(?DefenderCloudBlockLevelType $value ): void {
        $this->defenderCloudBlockLevel = $value;
    }

    /**
     * Sets the defenderDaysBeforeDeletingQuarantinedMalware property value. Number of days before deleting quarantined malware. Valid values 0 to 90
     *  @param int|null $value Value to set for the defenderDaysBeforeDeletingQuarantinedMalware property.
    */
    public function setDefenderDaysBeforeDeletingQuarantinedMalware(?int $value ): void {
        $this->defenderDaysBeforeDeletingQuarantinedMalware = $value;
    }

    /**
     * Sets the defenderDetectedMalwareActions property value. Gets or sets Defender’s actions to take on detected Malware per threat level.
     *  @param DefenderDetectedMalwareActions|null $value Value to set for the defenderDetectedMalwareActions property.
    */
    public function setDefenderDetectedMalwareActions(?DefenderDetectedMalwareActions $value ): void {
        $this->defenderDetectedMalwareActions = $value;
    }

    /**
     * Sets the defenderFileExtensionsToExclude property value. File extensions to exclude from scans and real time protection.
     *  @param array<string>|null $value Value to set for the defenderFileExtensionsToExclude property.
    */
    public function setDefenderFileExtensionsToExclude(?array $value ): void {
        $this->defenderFileExtensionsToExclude = $value;
    }

    /**
     * Sets the defenderFilesAndFoldersToExclude property value. Files and folder to exclude from scans and real time protection.
     *  @param array<string>|null $value Value to set for the defenderFilesAndFoldersToExclude property.
    */
    public function setDefenderFilesAndFoldersToExclude(?array $value ): void {
        $this->defenderFilesAndFoldersToExclude = $value;
    }

    /**
     * Sets the defenderMonitorFileActivity property value. Possible values for monitoring file activity.
     *  @param DefenderMonitorFileActivity|null $value Value to set for the defenderMonitorFileActivity property.
    */
    public function setDefenderMonitorFileActivity(?DefenderMonitorFileActivity $value ): void {
        $this->defenderMonitorFileActivity = $value;
    }

    /**
     * Sets the defenderProcessesToExclude property value. Processes to exclude from scans and real time protection.
     *  @param array<string>|null $value Value to set for the defenderProcessesToExclude property.
    */
    public function setDefenderProcessesToExclude(?array $value ): void {
        $this->defenderProcessesToExclude = $value;
    }

    /**
     * Sets the defenderPromptForSampleSubmission property value. Possible values for prompting user for samples submission.
     *  @param DefenderPromptForSampleSubmission|null $value Value to set for the defenderPromptForSampleSubmission property.
    */
    public function setDefenderPromptForSampleSubmission(?DefenderPromptForSampleSubmission $value ): void {
        $this->defenderPromptForSampleSubmission = $value;
    }

    /**
     * Sets the defenderRequireBehaviorMonitoring property value. Indicates whether or not to require behavior monitoring.
     *  @param bool|null $value Value to set for the defenderRequireBehaviorMonitoring property.
    */
    public function setDefenderRequireBehaviorMonitoring(?bool $value ): void {
        $this->defenderRequireBehaviorMonitoring = $value;
    }

    /**
     * Sets the defenderRequireCloudProtection property value. Indicates whether or not to require cloud protection.
     *  @param bool|null $value Value to set for the defenderRequireCloudProtection property.
    */
    public function setDefenderRequireCloudProtection(?bool $value ): void {
        $this->defenderRequireCloudProtection = $value;
    }

    /**
     * Sets the defenderRequireNetworkInspectionSystem property value. Indicates whether or not to require network inspection system.
     *  @param bool|null $value Value to set for the defenderRequireNetworkInspectionSystem property.
    */
    public function setDefenderRequireNetworkInspectionSystem(?bool $value ): void {
        $this->defenderRequireNetworkInspectionSystem = $value;
    }

    /**
     * Sets the defenderRequireRealTimeMonitoring property value. Indicates whether or not to require real time monitoring.
     *  @param bool|null $value Value to set for the defenderRequireRealTimeMonitoring property.
    */
    public function setDefenderRequireRealTimeMonitoring(?bool $value ): void {
        $this->defenderRequireRealTimeMonitoring = $value;
    }

    /**
     * Sets the defenderScanArchiveFiles property value. Indicates whether or not to scan archive files.
     *  @param bool|null $value Value to set for the defenderScanArchiveFiles property.
    */
    public function setDefenderScanArchiveFiles(?bool $value ): void {
        $this->defenderScanArchiveFiles = $value;
    }

    /**
     * Sets the defenderScanDownloads property value. Indicates whether or not to scan downloads.
     *  @param bool|null $value Value to set for the defenderScanDownloads property.
    */
    public function setDefenderScanDownloads(?bool $value ): void {
        $this->defenderScanDownloads = $value;
    }

    /**
     * Sets the defenderScanIncomingMail property value. Indicates whether or not to scan incoming mail messages.
     *  @param bool|null $value Value to set for the defenderScanIncomingMail property.
    */
    public function setDefenderScanIncomingMail(?bool $value ): void {
        $this->defenderScanIncomingMail = $value;
    }

    /**
     * Sets the defenderScanMappedNetworkDrivesDuringFullScan property value. Indicates whether or not to scan mapped network drives during full scan.
     *  @param bool|null $value Value to set for the defenderScanMappedNetworkDrivesDuringFullScan property.
    */
    public function setDefenderScanMappedNetworkDrivesDuringFullScan(?bool $value ): void {
        $this->defenderScanMappedNetworkDrivesDuringFullScan = $value;
    }

    /**
     * Sets the defenderScanMaxCpu property value. Max CPU usage percentage during scan. Valid values 0 to 100
     *  @param int|null $value Value to set for the defenderScanMaxCpu property.
    */
    public function setDefenderScanMaxCpu(?int $value ): void {
        $this->defenderScanMaxCpu = $value;
    }

    /**
     * Sets the defenderScanNetworkFiles property value. Indicates whether or not to scan files opened from a network folder.
     *  @param bool|null $value Value to set for the defenderScanNetworkFiles property.
    */
    public function setDefenderScanNetworkFiles(?bool $value ): void {
        $this->defenderScanNetworkFiles = $value;
    }

    /**
     * Sets the defenderScanRemovableDrivesDuringFullScan property value. Indicates whether or not to scan removable drives during full scan.
     *  @param bool|null $value Value to set for the defenderScanRemovableDrivesDuringFullScan property.
    */
    public function setDefenderScanRemovableDrivesDuringFullScan(?bool $value ): void {
        $this->defenderScanRemovableDrivesDuringFullScan = $value;
    }

    /**
     * Sets the defenderScanScriptsLoadedInInternetExplorer property value. Indicates whether or not to scan scripts loaded in Internet Explorer browser.
     *  @param bool|null $value Value to set for the defenderScanScriptsLoadedInInternetExplorer property.
    */
    public function setDefenderScanScriptsLoadedInInternetExplorer(?bool $value ): void {
        $this->defenderScanScriptsLoadedInInternetExplorer = $value;
    }

    /**
     * Sets the defenderScanType property value. Possible values for system scan type.
     *  @param DefenderScanType|null $value Value to set for the defenderScanType property.
    */
    public function setDefenderScanType(?DefenderScanType $value ): void {
        $this->defenderScanType = $value;
    }

    /**
     * Sets the defenderScheduledQuickScanTime property value. The time to perform a daily quick scan.
     *  @param Time|null $value Value to set for the defenderScheduledQuickScanTime property.
    */
    public function setDefenderScheduledQuickScanTime(?Time $value ): void {
        $this->defenderScheduledQuickScanTime = $value;
    }

    /**
     * Sets the defenderScheduledScanTime property value. The defender time for the system scan.
     *  @param Time|null $value Value to set for the defenderScheduledScanTime property.
    */
    public function setDefenderScheduledScanTime(?Time $value ): void {
        $this->defenderScheduledScanTime = $value;
    }

    /**
     * Sets the defenderSignatureUpdateIntervalInHours property value. The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
     *  @param int|null $value Value to set for the defenderSignatureUpdateIntervalInHours property.
    */
    public function setDefenderSignatureUpdateIntervalInHours(?int $value ): void {
        $this->defenderSignatureUpdateIntervalInHours = $value;
    }

    /**
     * Sets the defenderSystemScanSchedule property value. Possible values for a weekly schedule.
     *  @param WeeklySchedule|null $value Value to set for the defenderSystemScanSchedule property.
    */
    public function setDefenderSystemScanSchedule(?WeeklySchedule $value ): void {
        $this->defenderSystemScanSchedule = $value;
    }

    /**
     * Sets the developerUnlockSetting property value. State Management Setting.
     *  @param StateManagementSetting|null $value Value to set for the developerUnlockSetting property.
    */
    public function setDeveloperUnlockSetting(?StateManagementSetting $value ): void {
        $this->developerUnlockSetting = $value;
    }

    /**
     * Sets the deviceManagementBlockFactoryResetOnMobile property value. Indicates whether or not to Block the user from resetting their phone.
     *  @param bool|null $value Value to set for the deviceManagementBlockFactoryResetOnMobile property.
    */
    public function setDeviceManagementBlockFactoryResetOnMobile(?bool $value ): void {
        $this->deviceManagementBlockFactoryResetOnMobile = $value;
    }

    /**
     * Sets the deviceManagementBlockManualUnenroll property value. Indicates whether or not to Block the user from doing manual un-enrollment from device management.
     *  @param bool|null $value Value to set for the deviceManagementBlockManualUnenroll property.
    */
    public function setDeviceManagementBlockManualUnenroll(?bool $value ): void {
        $this->deviceManagementBlockManualUnenroll = $value;
    }

    /**
     * Sets the diagnosticsDataSubmissionMode property value. Allow the device to send diagnostic and usage telemetry data, such as Watson.
     *  @param DiagnosticDataSubmissionMode|null $value Value to set for the diagnosticsDataSubmissionMode property.
    */
    public function setDiagnosticsDataSubmissionMode(?DiagnosticDataSubmissionMode $value ): void {
        $this->diagnosticsDataSubmissionMode = $value;
    }

    /**
     * Sets the edgeAllowStartPagesModification property value. Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
     *  @param bool|null $value Value to set for the edgeAllowStartPagesModification property.
    */
    public function setEdgeAllowStartPagesModification(?bool $value ): void {
        $this->edgeAllowStartPagesModification = $value;
    }

    /**
     * Sets the edgeBlockAccessToAboutFlags property value. Indicates whether or not to prevent access to about flags on Edge browser.
     *  @param bool|null $value Value to set for the edgeBlockAccessToAboutFlags property.
    */
    public function setEdgeBlockAccessToAboutFlags(?bool $value ): void {
        $this->edgeBlockAccessToAboutFlags = $value;
    }

    /**
     * Sets the edgeBlockAddressBarDropdown property value. Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
     *  @param bool|null $value Value to set for the edgeBlockAddressBarDropdown property.
    */
    public function setEdgeBlockAddressBarDropdown(?bool $value ): void {
        $this->edgeBlockAddressBarDropdown = $value;
    }

    /**
     * Sets the edgeBlockAutofill property value. Indicates whether or not to block auto fill.
     *  @param bool|null $value Value to set for the edgeBlockAutofill property.
    */
    public function setEdgeBlockAutofill(?bool $value ): void {
        $this->edgeBlockAutofill = $value;
    }

    /**
     * Sets the edgeBlockCompatibilityList property value. Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
     *  @param bool|null $value Value to set for the edgeBlockCompatibilityList property.
    */
    public function setEdgeBlockCompatibilityList(?bool $value ): void {
        $this->edgeBlockCompatibilityList = $value;
    }

    /**
     * Sets the edgeBlockDeveloperTools property value. Indicates whether or not to block developer tools in the Edge browser.
     *  @param bool|null $value Value to set for the edgeBlockDeveloperTools property.
    */
    public function setEdgeBlockDeveloperTools(?bool $value ): void {
        $this->edgeBlockDeveloperTools = $value;
    }

    /**
     * Sets the edgeBlocked property value. Indicates whether or not to Block the user from using the Edge browser.
     *  @param bool|null $value Value to set for the edgeBlocked property.
    */
    public function setEdgeBlocked(?bool $value ): void {
        $this->edgeBlocked = $value;
    }

    /**
     * Sets the edgeBlockExtensions property value. Indicates whether or not to block extensions in the Edge browser.
     *  @param bool|null $value Value to set for the edgeBlockExtensions property.
    */
    public function setEdgeBlockExtensions(?bool $value ): void {
        $this->edgeBlockExtensions = $value;
    }

    /**
     * Sets the edgeBlockInPrivateBrowsing property value. Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
     *  @param bool|null $value Value to set for the edgeBlockInPrivateBrowsing property.
    */
    public function setEdgeBlockInPrivateBrowsing(?bool $value ): void {
        $this->edgeBlockInPrivateBrowsing = $value;
    }

    /**
     * Sets the edgeBlockJavaScript property value. Indicates whether or not to Block the user from using JavaScript.
     *  @param bool|null $value Value to set for the edgeBlockJavaScript property.
    */
    public function setEdgeBlockJavaScript(?bool $value ): void {
        $this->edgeBlockJavaScript = $value;
    }

    /**
     * Sets the edgeBlockLiveTileDataCollection property value. Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
     *  @param bool|null $value Value to set for the edgeBlockLiveTileDataCollection property.
    */
    public function setEdgeBlockLiveTileDataCollection(?bool $value ): void {
        $this->edgeBlockLiveTileDataCollection = $value;
    }

    /**
     * Sets the edgeBlockPasswordManager property value. Indicates whether or not to Block password manager.
     *  @param bool|null $value Value to set for the edgeBlockPasswordManager property.
    */
    public function setEdgeBlockPasswordManager(?bool $value ): void {
        $this->edgeBlockPasswordManager = $value;
    }

    /**
     * Sets the edgeBlockPopups property value. Indicates whether or not to block popups.
     *  @param bool|null $value Value to set for the edgeBlockPopups property.
    */
    public function setEdgeBlockPopups(?bool $value ): void {
        $this->edgeBlockPopups = $value;
    }

    /**
     * Sets the edgeBlockSearchSuggestions property value. Indicates whether or not to block the user from using the search suggestions in the address bar.
     *  @param bool|null $value Value to set for the edgeBlockSearchSuggestions property.
    */
    public function setEdgeBlockSearchSuggestions(?bool $value ): void {
        $this->edgeBlockSearchSuggestions = $value;
    }

    /**
     * Sets the edgeBlockSendingDoNotTrackHeader property value. Indicates whether or not to Block the user from sending the do not track header.
     *  @param bool|null $value Value to set for the edgeBlockSendingDoNotTrackHeader property.
    */
    public function setEdgeBlockSendingDoNotTrackHeader(?bool $value ): void {
        $this->edgeBlockSendingDoNotTrackHeader = $value;
    }

    /**
     * Sets the edgeBlockSendingIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
     *  @param bool|null $value Value to set for the edgeBlockSendingIntranetTrafficToInternetExplorer property.
    */
    public function setEdgeBlockSendingIntranetTrafficToInternetExplorer(?bool $value ): void {
        $this->edgeBlockSendingIntranetTrafficToInternetExplorer = $value;
    }

    /**
     * Sets the edgeClearBrowsingDataOnExit property value. Clear browsing data on exiting Microsoft Edge.
     *  @param bool|null $value Value to set for the edgeClearBrowsingDataOnExit property.
    */
    public function setEdgeClearBrowsingDataOnExit(?bool $value ): void {
        $this->edgeClearBrowsingDataOnExit = $value;
    }

    /**
     * Sets the edgeCookiePolicy property value. Possible values to specify which cookies are allowed in Microsoft Edge.
     *  @param EdgeCookiePolicy|null $value Value to set for the edgeCookiePolicy property.
    */
    public function setEdgeCookiePolicy(?EdgeCookiePolicy $value ): void {
        $this->edgeCookiePolicy = $value;
    }

    /**
     * Sets the edgeDisableFirstRunPage property value. Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
     *  @param bool|null $value Value to set for the edgeDisableFirstRunPage property.
    */
    public function setEdgeDisableFirstRunPage(?bool $value ): void {
        $this->edgeDisableFirstRunPage = $value;
    }

    /**
     * Sets the edgeEnterpriseModeSiteListLocation property value. Indicates the enterprise mode site list location. Could be a local file, local network or http location.
     *  @param string|null $value Value to set for the edgeEnterpriseModeSiteListLocation property.
    */
    public function setEdgeEnterpriseModeSiteListLocation(?string $value ): void {
        $this->edgeEnterpriseModeSiteListLocation = $value;
    }

    /**
     * Sets the edgeFirstRunUrl property value. The first run URL for when Edge browser is opened for the first time.
     *  @param string|null $value Value to set for the edgeFirstRunUrl property.
    */
    public function setEdgeFirstRunUrl(?string $value ): void {
        $this->edgeFirstRunUrl = $value;
    }

    /**
     * Sets the edgeHomepageUrls property value. The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
     *  @param array<string>|null $value Value to set for the edgeHomepageUrls property.
    */
    public function setEdgeHomepageUrls(?array $value ): void {
        $this->edgeHomepageUrls = $value;
    }

    /**
     * Sets the edgeRequireSmartScreen property value. Indicates whether or not to Require the user to use the smart screen filter.
     *  @param bool|null $value Value to set for the edgeRequireSmartScreen property.
    */
    public function setEdgeRequireSmartScreen(?bool $value ): void {
        $this->edgeRequireSmartScreen = $value;
    }

    /**
     * Sets the edgeSearchEngine property value. Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
     *  @param EdgeSearchEngineBase|null $value Value to set for the edgeSearchEngine property.
    */
    public function setEdgeSearchEngine(?EdgeSearchEngineBase $value ): void {
        $this->edgeSearchEngine = $value;
    }

    /**
     * Sets the edgeSendIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
     *  @param bool|null $value Value to set for the edgeSendIntranetTrafficToInternetExplorer property.
    */
    public function setEdgeSendIntranetTrafficToInternetExplorer(?bool $value ): void {
        $this->edgeSendIntranetTrafficToInternetExplorer = $value;
    }

    /**
     * Sets the edgeSyncFavoritesWithInternetExplorer property value. Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
     *  @param bool|null $value Value to set for the edgeSyncFavoritesWithInternetExplorer property.
    */
    public function setEdgeSyncFavoritesWithInternetExplorer(?bool $value ): void {
        $this->edgeSyncFavoritesWithInternetExplorer = $value;
    }

    /**
     * Sets the enterpriseCloudPrintDiscoveryEndPoint property value. Endpoint for discovering cloud printers.
     *  @param string|null $value Value to set for the enterpriseCloudPrintDiscoveryEndPoint property.
    */
    public function setEnterpriseCloudPrintDiscoveryEndPoint(?string $value ): void {
        $this->enterpriseCloudPrintDiscoveryEndPoint = $value;
    }

    /**
     * Sets the enterpriseCloudPrintDiscoveryMaxLimit property value. Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
     *  @param int|null $value Value to set for the enterpriseCloudPrintDiscoveryMaxLimit property.
    */
    public function setEnterpriseCloudPrintDiscoveryMaxLimit(?int $value ): void {
        $this->enterpriseCloudPrintDiscoveryMaxLimit = $value;
    }

    /**
     * Sets the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier property value. OAuth resource URI for printer discovery service as configured in Azure portal.
     *  @param string|null $value Value to set for the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier property.
    */
    public function setEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier(?string $value ): void {
        $this->enterpriseCloudPrintMopriaDiscoveryResourceIdentifier = $value;
    }

    /**
     * Sets the enterpriseCloudPrintOAuthAuthority property value. Authentication endpoint for acquiring OAuth tokens.
     *  @param string|null $value Value to set for the enterpriseCloudPrintOAuthAuthority property.
    */
    public function setEnterpriseCloudPrintOAuthAuthority(?string $value ): void {
        $this->enterpriseCloudPrintOAuthAuthority = $value;
    }

    /**
     * Sets the enterpriseCloudPrintOAuthClientIdentifier property value. GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
     *  @param string|null $value Value to set for the enterpriseCloudPrintOAuthClientIdentifier property.
    */
    public function setEnterpriseCloudPrintOAuthClientIdentifier(?string $value ): void {
        $this->enterpriseCloudPrintOAuthClientIdentifier = $value;
    }

    /**
     * Sets the enterpriseCloudPrintResourceIdentifier property value. OAuth resource URI for print service as configured in the Azure portal.
     *  @param string|null $value Value to set for the enterpriseCloudPrintResourceIdentifier property.
    */
    public function setEnterpriseCloudPrintResourceIdentifier(?string $value ): void {
        $this->enterpriseCloudPrintResourceIdentifier = $value;
    }

    /**
     * Sets the experienceBlockDeviceDiscovery property value. Indicates whether or not to enable device discovery UX.
     *  @param bool|null $value Value to set for the experienceBlockDeviceDiscovery property.
    */
    public function setExperienceBlockDeviceDiscovery(?bool $value ): void {
        $this->experienceBlockDeviceDiscovery = $value;
    }

    /**
     * Sets the experienceBlockErrorDialogWhenNoSIM property value. Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
     *  @param bool|null $value Value to set for the experienceBlockErrorDialogWhenNoSIM property.
    */
    public function setExperienceBlockErrorDialogWhenNoSIM(?bool $value ): void {
        $this->experienceBlockErrorDialogWhenNoSIM = $value;
    }

    /**
     * Sets the experienceBlockTaskSwitcher property value. Indicates whether or not to enable task switching on the device.
     *  @param bool|null $value Value to set for the experienceBlockTaskSwitcher property.
    */
    public function setExperienceBlockTaskSwitcher(?bool $value ): void {
        $this->experienceBlockTaskSwitcher = $value;
    }

    /**
     * Sets the gameDvrBlocked property value. Indicates whether or not to block DVR and broadcasting.
     *  @param bool|null $value Value to set for the gameDvrBlocked property.
    */
    public function setGameDvrBlocked(?bool $value ): void {
        $this->gameDvrBlocked = $value;
    }

    /**
     * Sets the internetSharingBlocked property value. Indicates whether or not to Block the user from using internet sharing.
     *  @param bool|null $value Value to set for the internetSharingBlocked property.
    */
    public function setInternetSharingBlocked(?bool $value ): void {
        $this->internetSharingBlocked = $value;
    }

    /**
     * Sets the locationServicesBlocked property value. Indicates whether or not to Block the user from location services.
     *  @param bool|null $value Value to set for the locationServicesBlocked property.
    */
    public function setLocationServicesBlocked(?bool $value ): void {
        $this->locationServicesBlocked = $value;
    }

    /**
     * Sets the lockScreenAllowTimeoutConfiguration property value. Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
     *  @param bool|null $value Value to set for the lockScreenAllowTimeoutConfiguration property.
    */
    public function setLockScreenAllowTimeoutConfiguration(?bool $value ): void {
        $this->lockScreenAllowTimeoutConfiguration = $value;
    }

    /**
     * Sets the lockScreenBlockActionCenterNotifications property value. Indicates whether or not to block action center notifications over lock screen.
     *  @param bool|null $value Value to set for the lockScreenBlockActionCenterNotifications property.
    */
    public function setLockScreenBlockActionCenterNotifications(?bool $value ): void {
        $this->lockScreenBlockActionCenterNotifications = $value;
    }

    /**
     * Sets the lockScreenBlockCortana property value. Indicates whether or not the user can interact with Cortana using speech while the system is locked.
     *  @param bool|null $value Value to set for the lockScreenBlockCortana property.
    */
    public function setLockScreenBlockCortana(?bool $value ): void {
        $this->lockScreenBlockCortana = $value;
    }

    /**
     * Sets the lockScreenBlockToastNotifications property value. Indicates whether to allow toast notifications above the device lock screen.
     *  @param bool|null $value Value to set for the lockScreenBlockToastNotifications property.
    */
    public function setLockScreenBlockToastNotifications(?bool $value ): void {
        $this->lockScreenBlockToastNotifications = $value;
    }

    /**
     * Sets the lockScreenTimeoutInSeconds property value. Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
     *  @param int|null $value Value to set for the lockScreenTimeoutInSeconds property.
    */
    public function setLockScreenTimeoutInSeconds(?int $value ): void {
        $this->lockScreenTimeoutInSeconds = $value;
    }

    /**
     * Sets the logonBlockFastUserSwitching property value. Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
     *  @param bool|null $value Value to set for the logonBlockFastUserSwitching property.
    */
    public function setLogonBlockFastUserSwitching(?bool $value ): void {
        $this->logonBlockFastUserSwitching = $value;
    }

    /**
     * Sets the microsoftAccountBlocked property value. Indicates whether or not to Block a Microsoft account.
     *  @param bool|null $value Value to set for the microsoftAccountBlocked property.
    */
    public function setMicrosoftAccountBlocked(?bool $value ): void {
        $this->microsoftAccountBlocked = $value;
    }

    /**
     * Sets the microsoftAccountBlockSettingsSync property value. Indicates whether or not to Block Microsoft account settings sync.
     *  @param bool|null $value Value to set for the microsoftAccountBlockSettingsSync property.
    */
    public function setMicrosoftAccountBlockSettingsSync(?bool $value ): void {
        $this->microsoftAccountBlockSettingsSync = $value;
    }

    /**
     * Sets the networkProxyApplySettingsDeviceWide property value. If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
     *  @param bool|null $value Value to set for the networkProxyApplySettingsDeviceWide property.
    */
    public function setNetworkProxyApplySettingsDeviceWide(?bool $value ): void {
        $this->networkProxyApplySettingsDeviceWide = $value;
    }

    /**
     * Sets the networkProxyAutomaticConfigurationUrl property value. Address to the proxy auto-config (PAC) script you want to use.
     *  @param string|null $value Value to set for the networkProxyAutomaticConfigurationUrl property.
    */
    public function setNetworkProxyAutomaticConfigurationUrl(?string $value ): void {
        $this->networkProxyAutomaticConfigurationUrl = $value;
    }

    /**
     * Sets the networkProxyDisableAutoDetect property value. Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
     *  @param bool|null $value Value to set for the networkProxyDisableAutoDetect property.
    */
    public function setNetworkProxyDisableAutoDetect(?bool $value ): void {
        $this->networkProxyDisableAutoDetect = $value;
    }

    /**
     * Sets the networkProxyServer property value. Specifies manual proxy server settings.
     *  @param Windows10NetworkProxyServer|null $value Value to set for the networkProxyServer property.
    */
    public function setNetworkProxyServer(?Windows10NetworkProxyServer $value ): void {
        $this->networkProxyServer = $value;
    }

    /**
     * Sets the nfcBlocked property value. Indicates whether or not to Block the user from using near field communication.
     *  @param bool|null $value Value to set for the nfcBlocked property.
    */
    public function setNfcBlocked(?bool $value ): void {
        $this->nfcBlocked = $value;
    }

    /**
     * Sets the oneDriveDisableFileSync property value. Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
     *  @param bool|null $value Value to set for the oneDriveDisableFileSync property.
    */
    public function setOneDriveDisableFileSync(?bool $value ): void {
        $this->oneDriveDisableFileSync = $value;
    }

    /**
     * Sets the passwordBlockSimple property value. Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
     *  @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value ): void {
        $this->passwordBlockSimple = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. The password expiration in days. Valid values 0 to 730
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     *  @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value ): void {
        $this->passwordMinimumCharacterSetCount = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. The minimum password length. Valid values 4 to 16
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. The minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent reuse of. Valid values 0 to 50
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->passwordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the passwordRequired property value. Indicates whether or not to require the user to have a password.
     *  @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value ): void {
        $this->passwordRequired = $value;
    }

    /**
     * Sets the passwordRequiredType property value. Possible values of required passwords.
     *  @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the passwordRequireWhenResumeFromIdleState property value. Indicates whether or not to require a password upon resuming from an idle state.
     *  @param bool|null $value Value to set for the passwordRequireWhenResumeFromIdleState property.
    */
    public function setPasswordRequireWhenResumeFromIdleState(?bool $value ): void {
        $this->passwordRequireWhenResumeFromIdleState = $value;
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. The number of sign in failures before factory reset. Valid values 0 to 999
     *  @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value ): void {
        $this->passwordSignInFailureCountBeforeFactoryReset = $value;
    }

    /**
     * Sets the personalizationDesktopImageUrl property value. A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
     *  @param string|null $value Value to set for the personalizationDesktopImageUrl property.
    */
    public function setPersonalizationDesktopImageUrl(?string $value ): void {
        $this->personalizationDesktopImageUrl = $value;
    }

    /**
     * Sets the personalizationLockScreenImageUrl property value. A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
     *  @param string|null $value Value to set for the personalizationLockScreenImageUrl property.
    */
    public function setPersonalizationLockScreenImageUrl(?string $value ): void {
        $this->personalizationLockScreenImageUrl = $value;
    }

    /**
     * Sets the privacyAdvertisingId property value. State Management Setting.
     *  @param StateManagementSetting|null $value Value to set for the privacyAdvertisingId property.
    */
    public function setPrivacyAdvertisingId(?StateManagementSetting $value ): void {
        $this->privacyAdvertisingId = $value;
    }

    /**
     * Sets the privacyAutoAcceptPairingAndConsentPrompts property value. Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
     *  @param bool|null $value Value to set for the privacyAutoAcceptPairingAndConsentPrompts property.
    */
    public function setPrivacyAutoAcceptPairingAndConsentPrompts(?bool $value ): void {
        $this->privacyAutoAcceptPairingAndConsentPrompts = $value;
    }

    /**
     * Sets the privacyBlockInputPersonalization property value. Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     *  @param bool|null $value Value to set for the privacyBlockInputPersonalization property.
    */
    public function setPrivacyBlockInputPersonalization(?bool $value ): void {
        $this->privacyBlockInputPersonalization = $value;
    }

    /**
     * Sets the resetProtectionModeBlocked property value. Indicates whether or not to Block the user from reset protection mode.
     *  @param bool|null $value Value to set for the resetProtectionModeBlocked property.
    */
    public function setResetProtectionModeBlocked(?bool $value ): void {
        $this->resetProtectionModeBlocked = $value;
    }

    /**
     * Sets the safeSearchFilter property value. Specifies what level of safe search (filtering adult content) is required
     *  @param SafeSearchFilterType|null $value Value to set for the safeSearchFilter property.
    */
    public function setSafeSearchFilter(?SafeSearchFilterType $value ): void {
        $this->safeSearchFilter = $value;
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to Block the user from taking Screenshots.
     *  @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value ): void {
        $this->screenCaptureBlocked = $value;
    }

    /**
     * Sets the searchBlockDiacritics property value. Specifies if search can use diacritics.
     *  @param bool|null $value Value to set for the searchBlockDiacritics property.
    */
    public function setSearchBlockDiacritics(?bool $value ): void {
        $this->searchBlockDiacritics = $value;
    }

    /**
     * Sets the searchDisableAutoLanguageDetection property value. Specifies whether to use automatic language detection when indexing content and properties.
     *  @param bool|null $value Value to set for the searchDisableAutoLanguageDetection property.
    */
    public function setSearchDisableAutoLanguageDetection(?bool $value ): void {
        $this->searchDisableAutoLanguageDetection = $value;
    }

    /**
     * Sets the searchDisableIndexerBackoff property value. Indicates whether or not to disable the search indexer backoff feature.
     *  @param bool|null $value Value to set for the searchDisableIndexerBackoff property.
    */
    public function setSearchDisableIndexerBackoff(?bool $value ): void {
        $this->searchDisableIndexerBackoff = $value;
    }

    /**
     * Sets the searchDisableIndexingEncryptedItems property value. Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
     *  @param bool|null $value Value to set for the searchDisableIndexingEncryptedItems property.
    */
    public function setSearchDisableIndexingEncryptedItems(?bool $value ): void {
        $this->searchDisableIndexingEncryptedItems = $value;
    }

    /**
     * Sets the searchDisableIndexingRemovableDrive property value. Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
     *  @param bool|null $value Value to set for the searchDisableIndexingRemovableDrive property.
    */
    public function setSearchDisableIndexingRemovableDrive(?bool $value ): void {
        $this->searchDisableIndexingRemovableDrive = $value;
    }

    /**
     * Sets the searchEnableAutomaticIndexSizeManangement property value. Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
     *  @param bool|null $value Value to set for the searchEnableAutomaticIndexSizeManangement property.
    */
    public function setSearchEnableAutomaticIndexSizeManangement(?bool $value ): void {
        $this->searchEnableAutomaticIndexSizeManangement = $value;
    }

    /**
     * Sets the searchEnableRemoteQueries property value. Indicates whether or not to block remote queries of this computer’s index.
     *  @param bool|null $value Value to set for the searchEnableRemoteQueries property.
    */
    public function setSearchEnableRemoteQueries(?bool $value ): void {
        $this->searchEnableRemoteQueries = $value;
    }

    /**
     * Sets the settingsBlockAccountsPage property value. Indicates whether or not to block access to Accounts in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockAccountsPage property.
    */
    public function setSettingsBlockAccountsPage(?bool $value ): void {
        $this->settingsBlockAccountsPage = $value;
    }

    /**
     * Sets the settingsBlockAddProvisioningPackage property value. Indicates whether or not to block the user from installing provisioning packages.
     *  @param bool|null $value Value to set for the settingsBlockAddProvisioningPackage property.
    */
    public function setSettingsBlockAddProvisioningPackage(?bool $value ): void {
        $this->settingsBlockAddProvisioningPackage = $value;
    }

    /**
     * Sets the settingsBlockAppsPage property value. Indicates whether or not to block access to Apps in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockAppsPage property.
    */
    public function setSettingsBlockAppsPage(?bool $value ): void {
        $this->settingsBlockAppsPage = $value;
    }

    /**
     * Sets the settingsBlockChangeLanguage property value. Indicates whether or not to block the user from changing the language settings.
     *  @param bool|null $value Value to set for the settingsBlockChangeLanguage property.
    */
    public function setSettingsBlockChangeLanguage(?bool $value ): void {
        $this->settingsBlockChangeLanguage = $value;
    }

    /**
     * Sets the settingsBlockChangePowerSleep property value. Indicates whether or not to block the user from changing power and sleep settings.
     *  @param bool|null $value Value to set for the settingsBlockChangePowerSleep property.
    */
    public function setSettingsBlockChangePowerSleep(?bool $value ): void {
        $this->settingsBlockChangePowerSleep = $value;
    }

    /**
     * Sets the settingsBlockChangeRegion property value. Indicates whether or not to block the user from changing the region settings.
     *  @param bool|null $value Value to set for the settingsBlockChangeRegion property.
    */
    public function setSettingsBlockChangeRegion(?bool $value ): void {
        $this->settingsBlockChangeRegion = $value;
    }

    /**
     * Sets the settingsBlockChangeSystemTime property value. Indicates whether or not to block the user from changing date and time settings.
     *  @param bool|null $value Value to set for the settingsBlockChangeSystemTime property.
    */
    public function setSettingsBlockChangeSystemTime(?bool $value ): void {
        $this->settingsBlockChangeSystemTime = $value;
    }

    /**
     * Sets the settingsBlockDevicesPage property value. Indicates whether or not to block access to Devices in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockDevicesPage property.
    */
    public function setSettingsBlockDevicesPage(?bool $value ): void {
        $this->settingsBlockDevicesPage = $value;
    }

    /**
     * Sets the settingsBlockEaseOfAccessPage property value. Indicates whether or not to block access to Ease of Access in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockEaseOfAccessPage property.
    */
    public function setSettingsBlockEaseOfAccessPage(?bool $value ): void {
        $this->settingsBlockEaseOfAccessPage = $value;
    }

    /**
     * Sets the settingsBlockEditDeviceName property value. Indicates whether or not to block the user from editing the device name.
     *  @param bool|null $value Value to set for the settingsBlockEditDeviceName property.
    */
    public function setSettingsBlockEditDeviceName(?bool $value ): void {
        $this->settingsBlockEditDeviceName = $value;
    }

    /**
     * Sets the settingsBlockGamingPage property value. Indicates whether or not to block access to Gaming in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockGamingPage property.
    */
    public function setSettingsBlockGamingPage(?bool $value ): void {
        $this->settingsBlockGamingPage = $value;
    }

    /**
     * Sets the settingsBlockNetworkInternetPage property value. Indicates whether or not to block access to Network & Internet in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockNetworkInternetPage property.
    */
    public function setSettingsBlockNetworkInternetPage(?bool $value ): void {
        $this->settingsBlockNetworkInternetPage = $value;
    }

    /**
     * Sets the settingsBlockPersonalizationPage property value. Indicates whether or not to block access to Personalization in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockPersonalizationPage property.
    */
    public function setSettingsBlockPersonalizationPage(?bool $value ): void {
        $this->settingsBlockPersonalizationPage = $value;
    }

    /**
     * Sets the settingsBlockPrivacyPage property value. Indicates whether or not to block access to Privacy in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockPrivacyPage property.
    */
    public function setSettingsBlockPrivacyPage(?bool $value ): void {
        $this->settingsBlockPrivacyPage = $value;
    }

    /**
     * Sets the settingsBlockRemoveProvisioningPackage property value. Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
     *  @param bool|null $value Value to set for the settingsBlockRemoveProvisioningPackage property.
    */
    public function setSettingsBlockRemoveProvisioningPackage(?bool $value ): void {
        $this->settingsBlockRemoveProvisioningPackage = $value;
    }

    /**
     * Sets the settingsBlockSettingsApp property value. Indicates whether or not to block access to Settings app.
     *  @param bool|null $value Value to set for the settingsBlockSettingsApp property.
    */
    public function setSettingsBlockSettingsApp(?bool $value ): void {
        $this->settingsBlockSettingsApp = $value;
    }

    /**
     * Sets the settingsBlockSystemPage property value. Indicates whether or not to block access to System in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockSystemPage property.
    */
    public function setSettingsBlockSystemPage(?bool $value ): void {
        $this->settingsBlockSystemPage = $value;
    }

    /**
     * Sets the settingsBlockTimeLanguagePage property value. Indicates whether or not to block access to Time & Language in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockTimeLanguagePage property.
    */
    public function setSettingsBlockTimeLanguagePage(?bool $value ): void {
        $this->settingsBlockTimeLanguagePage = $value;
    }

    /**
     * Sets the settingsBlockUpdateSecurityPage property value. Indicates whether or not to block access to Update & Security in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockUpdateSecurityPage property.
    */
    public function setSettingsBlockUpdateSecurityPage(?bool $value ): void {
        $this->settingsBlockUpdateSecurityPage = $value;
    }

    /**
     * Sets the sharedUserAppDataAllowed property value. Indicates whether or not to block multiple users of the same app to share data.
     *  @param bool|null $value Value to set for the sharedUserAppDataAllowed property.
    */
    public function setSharedUserAppDataAllowed(?bool $value ): void {
        $this->sharedUserAppDataAllowed = $value;
    }

    /**
     * Sets the smartScreenBlockPromptOverride property value. Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
     *  @param bool|null $value Value to set for the smartScreenBlockPromptOverride property.
    */
    public function setSmartScreenBlockPromptOverride(?bool $value ): void {
        $this->smartScreenBlockPromptOverride = $value;
    }

    /**
     * Sets the smartScreenBlockPromptOverrideForFiles property value. Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
     *  @param bool|null $value Value to set for the smartScreenBlockPromptOverrideForFiles property.
    */
    public function setSmartScreenBlockPromptOverrideForFiles(?bool $value ): void {
        $this->smartScreenBlockPromptOverrideForFiles = $value;
    }

    /**
     * Sets the smartScreenEnableAppInstallControl property value. This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
     *  @param bool|null $value Value to set for the smartScreenEnableAppInstallControl property.
    */
    public function setSmartScreenEnableAppInstallControl(?bool $value ): void {
        $this->smartScreenEnableAppInstallControl = $value;
    }

    /**
     * Sets the startBlockUnpinningAppsFromTaskbar property value. Indicates whether or not to block the user from unpinning apps from taskbar.
     *  @param bool|null $value Value to set for the startBlockUnpinningAppsFromTaskbar property.
    */
    public function setStartBlockUnpinningAppsFromTaskbar(?bool $value ): void {
        $this->startBlockUnpinningAppsFromTaskbar = $value;
    }

    /**
     * Sets the startMenuAppListVisibility property value. Type of start menu app list visibility.
     *  @param WindowsStartMenuAppListVisibilityType|null $value Value to set for the startMenuAppListVisibility property.
    */
    public function setStartMenuAppListVisibility(?WindowsStartMenuAppListVisibilityType $value ): void {
        $this->startMenuAppListVisibility = $value;
    }

    /**
     * Sets the startMenuHideChangeAccountSettings property value. Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideChangeAccountSettings property.
    */
    public function setStartMenuHideChangeAccountSettings(?bool $value ): void {
        $this->startMenuHideChangeAccountSettings = $value;
    }

    /**
     * Sets the startMenuHideFrequentlyUsedApps property value. Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     *  @param bool|null $value Value to set for the startMenuHideFrequentlyUsedApps property.
    */
    public function setStartMenuHideFrequentlyUsedApps(?bool $value ): void {
        $this->startMenuHideFrequentlyUsedApps = $value;
    }

    /**
     * Sets the startMenuHideHibernate property value. Enabling this policy hides hibernate from appearing in the power button in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideHibernate property.
    */
    public function setStartMenuHideHibernate(?bool $value ): void {
        $this->startMenuHideHibernate = $value;
    }

    /**
     * Sets the startMenuHideLock property value. Enabling this policy hides lock from appearing in the user tile in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideLock property.
    */
    public function setStartMenuHideLock(?bool $value ): void {
        $this->startMenuHideLock = $value;
    }

    /**
     * Sets the startMenuHidePowerButton property value. Enabling this policy hides the power button from appearing in the start menu.
     *  @param bool|null $value Value to set for the startMenuHidePowerButton property.
    */
    public function setStartMenuHidePowerButton(?bool $value ): void {
        $this->startMenuHidePowerButton = $value;
    }

    /**
     * Sets the startMenuHideRecentJumpLists property value. Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
     *  @param bool|null $value Value to set for the startMenuHideRecentJumpLists property.
    */
    public function setStartMenuHideRecentJumpLists(?bool $value ): void {
        $this->startMenuHideRecentJumpLists = $value;
    }

    /**
     * Sets the startMenuHideRecentlyAddedApps property value. Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     *  @param bool|null $value Value to set for the startMenuHideRecentlyAddedApps property.
    */
    public function setStartMenuHideRecentlyAddedApps(?bool $value ): void {
        $this->startMenuHideRecentlyAddedApps = $value;
    }

    /**
     * Sets the startMenuHideRestartOptions property value. Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideRestartOptions property.
    */
    public function setStartMenuHideRestartOptions(?bool $value ): void {
        $this->startMenuHideRestartOptions = $value;
    }

    /**
     * Sets the startMenuHideShutDown property value. Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideShutDown property.
    */
    public function setStartMenuHideShutDown(?bool $value ): void {
        $this->startMenuHideShutDown = $value;
    }

    /**
     * Sets the startMenuHideSignOut property value. Enabling this policy hides sign out from appearing in the user tile in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideSignOut property.
    */
    public function setStartMenuHideSignOut(?bool $value ): void {
        $this->startMenuHideSignOut = $value;
    }

    /**
     * Sets the startMenuHideSleep property value. Enabling this policy hides sleep from appearing in the power button in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideSleep property.
    */
    public function setStartMenuHideSleep(?bool $value ): void {
        $this->startMenuHideSleep = $value;
    }

    /**
     * Sets the startMenuHideSwitchAccount property value. Enabling this policy hides switch account from appearing in the user tile in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideSwitchAccount property.
    */
    public function setStartMenuHideSwitchAccount(?bool $value ): void {
        $this->startMenuHideSwitchAccount = $value;
    }

    /**
     * Sets the startMenuHideUserTile property value. Enabling this policy hides the user tile from appearing in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideUserTile property.
    */
    public function setStartMenuHideUserTile(?bool $value ): void {
        $this->startMenuHideUserTile = $value;
    }

    /**
     * Sets the startMenuLayoutEdgeAssetsXml property value. This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
     *  @param StreamInterface|null $value Value to set for the startMenuLayoutEdgeAssetsXml property.
    */
    public function setStartMenuLayoutEdgeAssetsXml(?StreamInterface $value ): void {
        $this->startMenuLayoutEdgeAssetsXml = $value;
    }

    /**
     * Sets the startMenuLayoutXml property value. Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
     *  @param StreamInterface|null $value Value to set for the startMenuLayoutXml property.
    */
    public function setStartMenuLayoutXml(?StreamInterface $value ): void {
        $this->startMenuLayoutXml = $value;
    }

    /**
     * Sets the startMenuMode property value. Type of display modes for the start menu.
     *  @param WindowsStartMenuModeType|null $value Value to set for the startMenuMode property.
    */
    public function setStartMenuMode(?WindowsStartMenuModeType $value ): void {
        $this->startMenuMode = $value;
    }

    /**
     * Sets the startMenuPinnedFolderDocuments property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderDocuments property.
    */
    public function setStartMenuPinnedFolderDocuments(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderDocuments = $value;
    }

    /**
     * Sets the startMenuPinnedFolderDownloads property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderDownloads property.
    */
    public function setStartMenuPinnedFolderDownloads(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderDownloads = $value;
    }

    /**
     * Sets the startMenuPinnedFolderFileExplorer property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderFileExplorer property.
    */
    public function setStartMenuPinnedFolderFileExplorer(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderFileExplorer = $value;
    }

    /**
     * Sets the startMenuPinnedFolderHomeGroup property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderHomeGroup property.
    */
    public function setStartMenuPinnedFolderHomeGroup(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderHomeGroup = $value;
    }

    /**
     * Sets the startMenuPinnedFolderMusic property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderMusic property.
    */
    public function setStartMenuPinnedFolderMusic(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderMusic = $value;
    }

    /**
     * Sets the startMenuPinnedFolderNetwork property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderNetwork property.
    */
    public function setStartMenuPinnedFolderNetwork(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderNetwork = $value;
    }

    /**
     * Sets the startMenuPinnedFolderPersonalFolder property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderPersonalFolder property.
    */
    public function setStartMenuPinnedFolderPersonalFolder(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderPersonalFolder = $value;
    }

    /**
     * Sets the startMenuPinnedFolderPictures property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderPictures property.
    */
    public function setStartMenuPinnedFolderPictures(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderPictures = $value;
    }

    /**
     * Sets the startMenuPinnedFolderSettings property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderSettings property.
    */
    public function setStartMenuPinnedFolderSettings(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderSettings = $value;
    }

    /**
     * Sets the startMenuPinnedFolderVideos property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderVideos property.
    */
    public function setStartMenuPinnedFolderVideos(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderVideos = $value;
    }

    /**
     * Sets the storageBlockRemovableStorage property value. Indicates whether or not to Block the user from using removable storage.
     *  @param bool|null $value Value to set for the storageBlockRemovableStorage property.
    */
    public function setStorageBlockRemovableStorage(?bool $value ): void {
        $this->storageBlockRemovableStorage = $value;
    }

    /**
     * Sets the storageRequireMobileDeviceEncryption property value. Indicating whether or not to require encryption on a mobile device.
     *  @param bool|null $value Value to set for the storageRequireMobileDeviceEncryption property.
    */
    public function setStorageRequireMobileDeviceEncryption(?bool $value ): void {
        $this->storageRequireMobileDeviceEncryption = $value;
    }

    /**
     * Sets the storageRestrictAppDataToSystemVolume property value. Indicates whether application data is restricted to the system drive.
     *  @param bool|null $value Value to set for the storageRestrictAppDataToSystemVolume property.
    */
    public function setStorageRestrictAppDataToSystemVolume(?bool $value ): void {
        $this->storageRestrictAppDataToSystemVolume = $value;
    }

    /**
     * Sets the storageRestrictAppInstallToSystemVolume property value. Indicates whether the installation of applications is restricted to the system drive.
     *  @param bool|null $value Value to set for the storageRestrictAppInstallToSystemVolume property.
    */
    public function setStorageRestrictAppInstallToSystemVolume(?bool $value ): void {
        $this->storageRestrictAppInstallToSystemVolume = $value;
    }

    /**
     * Sets the tenantLockdownRequireNetworkDuringOutOfBoxExperience property value. Whether the device is required to connect to the network.
     *  @param bool|null $value Value to set for the tenantLockdownRequireNetworkDuringOutOfBoxExperience property.
    */
    public function setTenantLockdownRequireNetworkDuringOutOfBoxExperience(?bool $value ): void {
        $this->tenantLockdownRequireNetworkDuringOutOfBoxExperience = $value;
    }

    /**
     * Sets the usbBlocked property value. Indicates whether or not to Block the user from USB connection.
     *  @param bool|null $value Value to set for the usbBlocked property.
    */
    public function setUsbBlocked(?bool $value ): void {
        $this->usbBlocked = $value;
    }

    /**
     * Sets the voiceRecordingBlocked property value. Indicates whether or not to Block the user from voice recording.
     *  @param bool|null $value Value to set for the voiceRecordingBlocked property.
    */
    public function setVoiceRecordingBlocked(?bool $value ): void {
        $this->voiceRecordingBlocked = $value;
    }

    /**
     * Sets the webRtcBlockLocalhostIpAddress property value. Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
     *  @param bool|null $value Value to set for the webRtcBlockLocalhostIpAddress property.
    */
    public function setWebRtcBlockLocalhostIpAddress(?bool $value ): void {
        $this->webRtcBlockLocalhostIpAddress = $value;
    }

    /**
     * Sets the wiFiBlockAutomaticConnectHotspots property value. Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     *  @param bool|null $value Value to set for the wiFiBlockAutomaticConnectHotspots property.
    */
    public function setWiFiBlockAutomaticConnectHotspots(?bool $value ): void {
        $this->wiFiBlockAutomaticConnectHotspots = $value;
    }

    /**
     * Sets the wiFiBlocked property value. Indicates whether or not to Block the user from using Wi-Fi.
     *  @param bool|null $value Value to set for the wiFiBlocked property.
    */
    public function setWiFiBlocked(?bool $value ): void {
        $this->wiFiBlocked = $value;
    }

    /**
     * Sets the wiFiBlockManualConfiguration property value. Indicates whether or not to Block the user from using Wi-Fi manual configuration.
     *  @param bool|null $value Value to set for the wiFiBlockManualConfiguration property.
    */
    public function setWiFiBlockManualConfiguration(?bool $value ): void {
        $this->wiFiBlockManualConfiguration = $value;
    }

    /**
     * Sets the wiFiScanInterval property value. Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
     *  @param int|null $value Value to set for the wiFiScanInterval property.
    */
    public function setWiFiScanInterval(?int $value ): void {
        $this->wiFiScanInterval = $value;
    }

    /**
     * Sets the windowsSpotlightBlockConsumerSpecificFeatures property value. Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
     *  @param bool|null $value Value to set for the windowsSpotlightBlockConsumerSpecificFeatures property.
    */
    public function setWindowsSpotlightBlockConsumerSpecificFeatures(?bool $value ): void {
        $this->windowsSpotlightBlockConsumerSpecificFeatures = $value;
    }

    /**
     * Sets the windowsSpotlightBlocked property value. Allows IT admins to turn off all Windows Spotlight features
     *  @param bool|null $value Value to set for the windowsSpotlightBlocked property.
    */
    public function setWindowsSpotlightBlocked(?bool $value ): void {
        $this->windowsSpotlightBlocked = $value;
    }

    /**
     * Sets the windowsSpotlightBlockOnActionCenter property value. Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
     *  @param bool|null $value Value to set for the windowsSpotlightBlockOnActionCenter property.
    */
    public function setWindowsSpotlightBlockOnActionCenter(?bool $value ): void {
        $this->windowsSpotlightBlockOnActionCenter = $value;
    }

    /**
     * Sets the windowsSpotlightBlockTailoredExperiences property value. Block personalized content in Windows spotlight based on user’s device usage.
     *  @param bool|null $value Value to set for the windowsSpotlightBlockTailoredExperiences property.
    */
    public function setWindowsSpotlightBlockTailoredExperiences(?bool $value ): void {
        $this->windowsSpotlightBlockTailoredExperiences = $value;
    }

    /**
     * Sets the windowsSpotlightBlockThirdPartyNotifications property value. Block third party content delivered via Windows Spotlight
     *  @param bool|null $value Value to set for the windowsSpotlightBlockThirdPartyNotifications property.
    */
    public function setWindowsSpotlightBlockThirdPartyNotifications(?bool $value ): void {
        $this->windowsSpotlightBlockThirdPartyNotifications = $value;
    }

    /**
     * Sets the windowsSpotlightBlockWelcomeExperience property value. Block Windows Spotlight Windows welcome experience
     *  @param bool|null $value Value to set for the windowsSpotlightBlockWelcomeExperience property.
    */
    public function setWindowsSpotlightBlockWelcomeExperience(?bool $value ): void {
        $this->windowsSpotlightBlockWelcomeExperience = $value;
    }

    /**
     * Sets the windowsSpotlightBlockWindowsTips property value. Allows IT admins to turn off the popup of Windows Tips.
     *  @param bool|null $value Value to set for the windowsSpotlightBlockWindowsTips property.
    */
    public function setWindowsSpotlightBlockWindowsTips(?bool $value ): void {
        $this->windowsSpotlightBlockWindowsTips = $value;
    }

    /**
     * Sets the windowsSpotlightConfigureOnLockScreen property value. Allows IT admind to set a predefined default search engine for MDM-Controlled devices
     *  @param WindowsSpotlightEnablementSettings|null $value Value to set for the windowsSpotlightConfigureOnLockScreen property.
    */
    public function setWindowsSpotlightConfigureOnLockScreen(?WindowsSpotlightEnablementSettings $value ): void {
        $this->windowsSpotlightConfigureOnLockScreen = $value;
    }

    /**
     * Sets the windowsStoreBlockAutoUpdate property value. Indicates whether or not to block automatic update of apps from Windows Store.
     *  @param bool|null $value Value to set for the windowsStoreBlockAutoUpdate property.
    */
    public function setWindowsStoreBlockAutoUpdate(?bool $value ): void {
        $this->windowsStoreBlockAutoUpdate = $value;
    }

    /**
     * Sets the windowsStoreBlocked property value. Indicates whether or not to Block the user from using the Windows store.
     *  @param bool|null $value Value to set for the windowsStoreBlocked property.
    */
    public function setWindowsStoreBlocked(?bool $value ): void {
        $this->windowsStoreBlocked = $value;
    }

    /**
     * Sets the windowsStoreEnablePrivateStoreOnly property value. Indicates whether or not to enable Private Store Only.
     *  @param bool|null $value Value to set for the windowsStoreEnablePrivateStoreOnly property.
    */
    public function setWindowsStoreEnablePrivateStoreOnly(?bool $value ): void {
        $this->windowsStoreEnablePrivateStoreOnly = $value;
    }

    /**
     * Sets the wirelessDisplayBlockProjectionToThisDevice property value. Indicates whether or not to allow other devices from discovering this PC for projection.
     *  @param bool|null $value Value to set for the wirelessDisplayBlockProjectionToThisDevice property.
    */
    public function setWirelessDisplayBlockProjectionToThisDevice(?bool $value ): void {
        $this->wirelessDisplayBlockProjectionToThisDevice = $value;
    }

    /**
     * Sets the wirelessDisplayBlockUserInputFromReceiver property value. Indicates whether or not to allow user input from wireless display receiver.
     *  @param bool|null $value Value to set for the wirelessDisplayBlockUserInputFromReceiver property.
    */
    public function setWirelessDisplayBlockUserInputFromReceiver(?bool $value ): void {
        $this->wirelessDisplayBlockUserInputFromReceiver = $value;
    }

    /**
     * Sets the wirelessDisplayRequirePinForPairing property value. Indicates whether or not to require a PIN for new devices to initiate pairing.
     *  @param bool|null $value Value to set for the wirelessDisplayRequirePinForPairing property.
    */
    public function setWirelessDisplayRequirePinForPairing(?bool $value ): void {
        $this->wirelessDisplayRequirePinForPairing = $value;
    }

}
