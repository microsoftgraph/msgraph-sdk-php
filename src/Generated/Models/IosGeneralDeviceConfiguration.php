<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosGeneralDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $accountBlockModification Indicates whether or not to allow account modification when the device is in supervised mode.
    */
    private ?bool $accountBlockModification = null;
    
    /**
     * @var bool|null $activationLockAllowWhenSupervised Indicates whether or not to allow activation lock when the device is in the supervised mode.
    */
    private ?bool $activationLockAllowWhenSupervised = null;
    
    /**
     * @var bool|null $airDropBlocked Indicates whether or not to allow AirDrop when the device is in supervised mode.
    */
    private ?bool $airDropBlocked = null;
    
    /**
     * @var bool|null $airDropForceUnmanagedDropTarget Indicates whether or not to cause AirDrop to be considered an unmanaged drop target (iOS 9.0 and later).
    */
    private ?bool $airDropForceUnmanagedDropTarget = null;
    
    /**
     * @var bool|null $airPlayForcePairingPasswordForOutgoingRequests Indicates whether or not to enforce all devices receiving AirPlay requests from this device to use a pairing password.
    */
    private ?bool $airPlayForcePairingPasswordForOutgoingRequests = null;
    
    /**
     * @var bool|null $appleNewsBlocked Indicates whether or not to block the user from using News when the device is in supervised mode (iOS 9.0 and later).
    */
    private ?bool $appleNewsBlocked = null;
    
    /**
     * @var bool|null $appleWatchBlockPairing Indicates whether or not to allow Apple Watch pairing when the device is in supervised mode (iOS 9.0 and later).
    */
    private ?bool $appleWatchBlockPairing = null;
    
    /**
     * @var bool|null $appleWatchForceWristDetection Indicates whether or not to force a paired Apple Watch to use Wrist Detection (iOS 8.2 and later).
    */
    private ?bool $appleWatchForceWristDetection = null;
    
    /**
     * @var array<AppListItem>|null $appsSingleAppModeList Gets or sets the list of iOS apps allowed to autonomously enter Single App Mode. Supervised only. iOS 7.0 and later. This collection can contain a maximum of 500 elements.
    */
    private ?array $appsSingleAppModeList = null;
    
    /**
     * @var bool|null $appStoreBlockAutomaticDownloads Indicates whether or not to block the automatic downloading of apps purchased on other devices when the device is in supervised mode (iOS 9.0 and later).
    */
    private ?bool $appStoreBlockAutomaticDownloads = null;
    
    /**
     * @var bool|null $appStoreBlocked Indicates whether or not to block the user from using the App Store. Requires a supervised device for iOS 13 and later.
    */
    private ?bool $appStoreBlocked = null;
    
    /**
     * @var bool|null $appStoreBlockInAppPurchases Indicates whether or not to block the user from making in app purchases.
    */
    private ?bool $appStoreBlockInAppPurchases = null;
    
    /**
     * @var bool|null $appStoreBlockUIAppInstallation Indicates whether or not to block the App Store app, not restricting installation through Host apps. Applies to supervised mode only (iOS 9.0 and later).
    */
    private ?bool $appStoreBlockUIAppInstallation = null;
    
    /**
     * @var bool|null $appStoreRequirePassword Indicates whether or not to require a password when using the app store.
    */
    private ?bool $appStoreRequirePassword = null;
    
    /**
     * @var array<AppListItem>|null $appsVisibilityList List of apps in the visibility list (either visible/launchable apps list or hidden/unlaunchable apps list, controlled by AppsVisibilityListType) (iOS 9.3 and later). This collection can contain a maximum of 10000 elements.
    */
    private ?array $appsVisibilityList = null;
    
    /**
     * @var AppListType|null $appsVisibilityListType Possible values of the compliance app list.
    */
    private ?AppListType $appsVisibilityListType = null;
    
    /**
     * @var bool|null $bluetoothBlockModification Indicates whether or not to allow modification of Bluetooth settings when the device is in supervised mode (iOS 10.0 and later).
    */
    private ?bool $bluetoothBlockModification = null;
    
    /**
     * @var bool|null $cameraBlocked Indicates whether or not to block the user from accessing the camera of the device. Requires a supervised device for iOS 13 and later.
    */
    private ?bool $cameraBlocked = null;
    
    /**
     * @var bool|null $cellularBlockDataRoaming Indicates whether or not to block data roaming.
    */
    private ?bool $cellularBlockDataRoaming = null;
    
    /**
     * @var bool|null $cellularBlockGlobalBackgroundFetchWhileRoaming Indicates whether or not to block global background fetch while roaming.
    */
    private ?bool $cellularBlockGlobalBackgroundFetchWhileRoaming = null;
    
    /**
     * @var bool|null $cellularBlockPerAppDataModification Indicates whether or not to allow changes to cellular app data usage settings when the device is in supervised mode.
    */
    private ?bool $cellularBlockPerAppDataModification = null;
    
    /**
     * @var bool|null $cellularBlockPersonalHotspot Indicates whether or not to block Personal Hotspot.
    */
    private ?bool $cellularBlockPersonalHotspot = null;
    
    /**
     * @var bool|null $cellularBlockVoiceRoaming Indicates whether or not to block voice roaming.
    */
    private ?bool $cellularBlockVoiceRoaming = null;
    
    /**
     * @var bool|null $certificatesBlockUntrustedTlsCertificates Indicates whether or not to block untrusted TLS certificates.
    */
    private ?bool $certificatesBlockUntrustedTlsCertificates = null;
    
    /**
     * @var bool|null $classroomAppBlockRemoteScreenObservation Indicates whether or not to allow remote screen observation by Classroom app when the device is in supervised mode (iOS 9.3 and later).
    */
    private ?bool $classroomAppBlockRemoteScreenObservation = null;
    
    /**
     * @var bool|null $classroomAppForceUnpromptedScreenObservation Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting when the device is in supervised mode.
    */
    private ?bool $classroomAppForceUnpromptedScreenObservation = null;
    
    /**
     * @var AppListType|null $compliantAppListType Possible values of the compliance app list.
    */
    private ?AppListType $compliantAppListType = null;
    
    /**
     * @var array<AppListItem>|null $compliantAppsList List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
    */
    private ?array $compliantAppsList = null;
    
    /**
     * @var bool|null $configurationProfileBlockChanges Indicates whether or not to block the user from installing configuration profiles and certificates interactively when the device is in supervised mode.
    */
    private ?bool $configurationProfileBlockChanges = null;
    
    /**
     * @var bool|null $definitionLookupBlocked Indicates whether or not to block definition lookup when the device is in supervised mode (iOS 8.1.3 and later ).
    */
    private ?bool $definitionLookupBlocked = null;
    
    /**
     * @var bool|null $deviceBlockEnableRestrictions Indicates whether or not to allow the user to enables restrictions in the device settings when the device is in supervised mode.
    */
    private ?bool $deviceBlockEnableRestrictions = null;
    
    /**
     * @var bool|null $deviceBlockEraseContentAndSettings Indicates whether or not to allow the use of the 'Erase all content and settings' option on the device when the device is in supervised mode.
    */
    private ?bool $deviceBlockEraseContentAndSettings = null;
    
    /**
     * @var bool|null $deviceBlockNameModification Indicates whether or not to allow device name modification when the device is in supervised mode (iOS 9.0 and later).
    */
    private ?bool $deviceBlockNameModification = null;
    
    /**
     * @var bool|null $diagnosticDataBlockSubmission Indicates whether or not to block diagnostic data submission.
    */
    private ?bool $diagnosticDataBlockSubmission = null;
    
    /**
     * @var bool|null $diagnosticDataBlockSubmissionModification Indicates whether or not to allow diagnostics submission settings modification when the device is in supervised mode (iOS 9.3.2 and later).
    */
    private ?bool $diagnosticDataBlockSubmissionModification = null;
    
    /**
     * @var bool|null $documentsBlockManagedDocumentsInUnmanagedApps Indicates whether or not to block the user from viewing managed documents in unmanaged apps.
    */
    private ?bool $documentsBlockManagedDocumentsInUnmanagedApps = null;
    
    /**
     * @var bool|null $documentsBlockUnmanagedDocumentsInManagedApps Indicates whether or not to block the user from viewing unmanaged documents in managed apps.
    */
    private ?bool $documentsBlockUnmanagedDocumentsInManagedApps = null;
    
    /**
     * @var array<string>|null $emailInDomainSuffixes An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
    */
    private ?array $emailInDomainSuffixes = null;
    
    /**
     * @var bool|null $enterpriseAppBlockTrust Indicates whether or not to block the user from trusting an enterprise app.
    */
    private ?bool $enterpriseAppBlockTrust = null;
    
    /**
     * @var bool|null $enterpriseAppBlockTrustModification [Deprecated] Configuring this setting and setting the value to 'true' has no effect on the device.
    */
    private ?bool $enterpriseAppBlockTrustModification = null;
    
    /**
     * @var bool|null $faceTimeBlocked Indicates whether or not to block the user from using FaceTime. Requires a supervised device for iOS 13 and later.
    */
    private ?bool $faceTimeBlocked = null;
    
    /**
     * @var bool|null $findMyFriendsBlocked Indicates whether or not to block changes to Find My Friends when the device is in supervised mode.
    */
    private ?bool $findMyFriendsBlocked = null;
    
    /**
     * @var bool|null $gameCenterBlocked Indicates whether or not to block the user from using Game Center when the device is in supervised mode.
    */
    private ?bool $gameCenterBlocked = null;
    
    /**
     * @var bool|null $gamingBlockGameCenterFriends Indicates whether or not to block the user from having friends in Game Center. Requires a supervised device for iOS 13 and later.
    */
    private ?bool $gamingBlockGameCenterFriends = null;
    
    /**
     * @var bool|null $gamingBlockMultiplayer Indicates whether or not to block the user from using multiplayer gaming. Requires a supervised device for iOS 13 and later.
    */
    private ?bool $gamingBlockMultiplayer = null;
    
    /**
     * @var bool|null $hostPairingBlocked indicates whether or not to allow host pairing to control the devices an iOS device can pair with when the iOS device is in supervised mode.
    */
    private ?bool $hostPairingBlocked = null;
    
    /**
     * @var bool|null $iBooksStoreBlocked Indicates whether or not to block the user from using the iBooks Store when the device is in supervised mode.
    */
    private ?bool $iBooksStoreBlocked = null;
    
    /**
     * @var bool|null $iBooksStoreBlockErotica Indicates whether or not to block the user from downloading media from the iBookstore that has been tagged as erotica.
    */
    private ?bool $iBooksStoreBlockErotica = null;
    
    /**
     * @var bool|null $iCloudBlockActivityContinuation Indicates whether or not to block the user from continuing work they started on iOS device to another iOS or macOS device.
    */
    private ?bool $iCloudBlockActivityContinuation = null;
    
    /**
     * @var bool|null $iCloudBlockBackup Indicates whether or not to block iCloud backup. Requires a supervised device for iOS 13 and later.
    */
    private ?bool $iCloudBlockBackup = null;
    
    /**
     * @var bool|null $iCloudBlockDocumentSync Indicates whether or not to block iCloud document sync. Requires a supervised device for iOS 13 and later.
    */
    private ?bool $iCloudBlockDocumentSync = null;
    
    /**
     * @var bool|null $iCloudBlockManagedAppsSync Indicates whether or not to block Managed Apps Cloud Sync.
    */
    private ?bool $iCloudBlockManagedAppsSync = null;
    
    /**
     * @var bool|null $iCloudBlockPhotoLibrary Indicates whether or not to block iCloud Photo Library.
    */
    private ?bool $iCloudBlockPhotoLibrary = null;
    
    /**
     * @var bool|null $iCloudBlockPhotoStreamSync Indicates whether or not to block iCloud Photo Stream Sync.
    */
    private ?bool $iCloudBlockPhotoStreamSync = null;
    
    /**
     * @var bool|null $iCloudBlockSharedPhotoStream Indicates whether or not to block Shared Photo Stream.
    */
    private ?bool $iCloudBlockSharedPhotoStream = null;
    
    /**
     * @var bool|null $iCloudRequireEncryptedBackup Indicates whether or not to require backups to iCloud be encrypted.
    */
    private ?bool $iCloudRequireEncryptedBackup = null;
    
    /**
     * @var bool|null $iTunesBlockExplicitContent Indicates whether or not to block the user from accessing explicit content in iTunes and the App Store. Requires a supervised device for iOS 13 and later.
    */
    private ?bool $iTunesBlockExplicitContent = null;
    
    /**
     * @var bool|null $iTunesBlockMusicService Indicates whether or not to block Music service and revert Music app to classic mode when the device is in supervised mode (iOS 9.3 and later and macOS 10.12 and later).
    */
    private ?bool $iTunesBlockMusicService = null;
    
    /**
     * @var bool|null $iTunesBlockRadio Indicates whether or not to block the user from using iTunes Radio when the device is in supervised mode (iOS 9.3 and later).
    */
    private ?bool $iTunesBlockRadio = null;
    
    /**
     * @var bool|null $keyboardBlockAutoCorrect Indicates whether or not to block keyboard auto-correction when the device is in supervised mode (iOS 8.1.3 and later).
    */
    private ?bool $keyboardBlockAutoCorrect = null;
    
    /**
     * @var bool|null $keyboardBlockDictation Indicates whether or not to block the user from using dictation input when the device is in supervised mode.
    */
    private ?bool $keyboardBlockDictation = null;
    
    /**
     * @var bool|null $keyboardBlockPredictive Indicates whether or not to block predictive keyboards when device is in supervised mode (iOS 8.1.3 and later).
    */
    private ?bool $keyboardBlockPredictive = null;
    
    /**
     * @var bool|null $keyboardBlockShortcuts Indicates whether or not to block keyboard shortcuts when the device is in supervised mode (iOS 9.0 and later).
    */
    private ?bool $keyboardBlockShortcuts = null;
    
    /**
     * @var bool|null $keyboardBlockSpellCheck Indicates whether or not to block keyboard spell-checking when the device is in supervised mode (iOS 8.1.3 and later).
    */
    private ?bool $keyboardBlockSpellCheck = null;
    
    /**
     * @var bool|null $kioskModeAllowAssistiveSpeak Indicates whether or not to allow assistive speak while in kiosk mode.
    */
    private ?bool $kioskModeAllowAssistiveSpeak = null;
    
    /**
     * @var bool|null $kioskModeAllowAssistiveTouchSettings Indicates whether or not to allow access to the Assistive Touch Settings while in kiosk mode.
    */
    private ?bool $kioskModeAllowAssistiveTouchSettings = null;
    
    /**
     * @var bool|null $kioskModeAllowAutoLock Indicates whether or not to allow device auto lock while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockAutoLock instead.
    */
    private ?bool $kioskModeAllowAutoLock = null;
    
    /**
     * @var bool|null $kioskModeAllowColorInversionSettings Indicates whether or not to allow access to the Color Inversion Settings while in kiosk mode.
    */
    private ?bool $kioskModeAllowColorInversionSettings = null;
    
    /**
     * @var bool|null $kioskModeAllowRingerSwitch Indicates whether or not to allow use of the ringer switch while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockRingerSwitch instead.
    */
    private ?bool $kioskModeAllowRingerSwitch = null;
    
    /**
     * @var bool|null $kioskModeAllowScreenRotation Indicates whether or not to allow screen rotation while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockScreenRotation instead.
    */
    private ?bool $kioskModeAllowScreenRotation = null;
    
    /**
     * @var bool|null $kioskModeAllowSleepButton Indicates whether or not to allow use of the sleep button while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockSleepButton instead.
    */
    private ?bool $kioskModeAllowSleepButton = null;
    
    /**
     * @var bool|null $kioskModeAllowTouchscreen Indicates whether or not to allow use of the touchscreen while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockTouchscreen instead.
    */
    private ?bool $kioskModeAllowTouchscreen = null;
    
    /**
     * @var bool|null $kioskModeAllowVoiceOverSettings Indicates whether or not to allow access to the voice over settings while in kiosk mode.
    */
    private ?bool $kioskModeAllowVoiceOverSettings = null;
    
    /**
     * @var bool|null $kioskModeAllowVolumeButtons Indicates whether or not to allow use of the volume buttons while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockVolumeButtons instead.
    */
    private ?bool $kioskModeAllowVolumeButtons = null;
    
    /**
     * @var bool|null $kioskModeAllowZoomSettings Indicates whether or not to allow access to the zoom settings while in kiosk mode.
    */
    private ?bool $kioskModeAllowZoomSettings = null;
    
    /**
     * @var string|null $kioskModeAppStoreUrl URL in the app store to the app to use for kiosk mode. Use if KioskModeManagedAppId is not known.
    */
    private ?string $kioskModeAppStoreUrl = null;
    
    /**
     * @var string|null $kioskModeBuiltInAppId ID for built-in apps to use for kiosk mode. Used when KioskModeManagedAppId and KioskModeAppStoreUrl are not set.
    */
    private ?string $kioskModeBuiltInAppId = null;
    
    /**
     * @var string|null $kioskModeManagedAppId Managed app id of the app to use for kiosk mode. If KioskModeManagedAppId is specified then KioskModeAppStoreUrl will be ignored.
    */
    private ?string $kioskModeManagedAppId = null;
    
    /**
     * @var bool|null $kioskModeRequireAssistiveTouch Indicates whether or not to require assistive touch while in kiosk mode.
    */
    private ?bool $kioskModeRequireAssistiveTouch = null;
    
    /**
     * @var bool|null $kioskModeRequireColorInversion Indicates whether or not to require color inversion while in kiosk mode.
    */
    private ?bool $kioskModeRequireColorInversion = null;
    
    /**
     * @var bool|null $kioskModeRequireMonoAudio Indicates whether or not to require mono audio while in kiosk mode.
    */
    private ?bool $kioskModeRequireMonoAudio = null;
    
    /**
     * @var bool|null $kioskModeRequireVoiceOver Indicates whether or not to require voice over while in kiosk mode.
    */
    private ?bool $kioskModeRequireVoiceOver = null;
    
    /**
     * @var bool|null $kioskModeRequireZoom Indicates whether or not to require zoom while in kiosk mode.
    */
    private ?bool $kioskModeRequireZoom = null;
    
    /**
     * @var bool|null $lockScreenBlockControlCenter Indicates whether or not to block the user from using control center on the lock screen.
    */
    private ?bool $lockScreenBlockControlCenter = null;
    
    /**
     * @var bool|null $lockScreenBlockNotificationView Indicates whether or not to block the user from using the notification view on the lock screen.
    */
    private ?bool $lockScreenBlockNotificationView = null;
    
    /**
     * @var bool|null $lockScreenBlockPassbook Indicates whether or not to block the user from using passbook when the device is locked.
    */
    private ?bool $lockScreenBlockPassbook = null;
    
    /**
     * @var bool|null $lockScreenBlockTodayView Indicates whether or not to block the user from using the Today View on the lock screen.
    */
    private ?bool $lockScreenBlockTodayView = null;
    
    /**
     * @var RatingAppsType|null $mediaContentRatingApps Apps rating as in media content
    */
    private ?RatingAppsType $mediaContentRatingApps = null;
    
    /**
     * @var MediaContentRatingAustralia|null $mediaContentRatingAustralia Media content rating settings for Australia
    */
    private ?MediaContentRatingAustralia $mediaContentRatingAustralia = null;
    
    /**
     * @var MediaContentRatingCanada|null $mediaContentRatingCanada Media content rating settings for Canada
    */
    private ?MediaContentRatingCanada $mediaContentRatingCanada = null;
    
    /**
     * @var MediaContentRatingFrance|null $mediaContentRatingFrance Media content rating settings for France
    */
    private ?MediaContentRatingFrance $mediaContentRatingFrance = null;
    
    /**
     * @var MediaContentRatingGermany|null $mediaContentRatingGermany Media content rating settings for Germany
    */
    private ?MediaContentRatingGermany $mediaContentRatingGermany = null;
    
    /**
     * @var MediaContentRatingIreland|null $mediaContentRatingIreland Media content rating settings for Ireland
    */
    private ?MediaContentRatingIreland $mediaContentRatingIreland = null;
    
    /**
     * @var MediaContentRatingJapan|null $mediaContentRatingJapan Media content rating settings for Japan
    */
    private ?MediaContentRatingJapan $mediaContentRatingJapan = null;
    
    /**
     * @var MediaContentRatingNewZealand|null $mediaContentRatingNewZealand Media content rating settings for New Zealand
    */
    private ?MediaContentRatingNewZealand $mediaContentRatingNewZealand = null;
    
    /**
     * @var MediaContentRatingUnitedKingdom|null $mediaContentRatingUnitedKingdom Media content rating settings for United Kingdom
    */
    private ?MediaContentRatingUnitedKingdom $mediaContentRatingUnitedKingdom = null;
    
    /**
     * @var MediaContentRatingUnitedStates|null $mediaContentRatingUnitedStates Media content rating settings for United States
    */
    private ?MediaContentRatingUnitedStates $mediaContentRatingUnitedStates = null;
    
    /**
     * @var bool|null $messagesBlocked Indicates whether or not to block the user from using the Messages app on the supervised device.
    */
    private ?bool $messagesBlocked = null;
    
    /**
     * @var array<IosNetworkUsageRule>|null $networkUsageRules List of managed apps and the network rules that applies to them. This collection can contain a maximum of 1000 elements.
    */
    private ?array $networkUsageRules = null;
    
    /**
     * @var bool|null $notificationsBlockSettingsModification Indicates whether or not to allow notifications settings modification (iOS 9.3 and later).
    */
    private ?bool $notificationsBlockSettingsModification = null;
    
    /**
     * @var bool|null $passcodeBlockFingerprintModification Block modification of registered Touch ID fingerprints when in supervised mode.
    */
    private ?bool $passcodeBlockFingerprintModification = null;
    
    /**
     * @var bool|null $passcodeBlockFingerprintUnlock Indicates whether or not to block fingerprint unlock.
    */
    private ?bool $passcodeBlockFingerprintUnlock = null;
    
    /**
     * @var bool|null $passcodeBlockModification Indicates whether or not to allow passcode modification on the supervised device (iOS 9.0 and later).
    */
    private ?bool $passcodeBlockModification = null;
    
    /**
     * @var bool|null $passcodeBlockSimple Indicates whether or not to block simple passcodes.
    */
    private ?bool $passcodeBlockSimple = null;
    
    /**
     * @var int|null $passcodeExpirationDays Number of days before the passcode expires. Valid values 1 to 65535
    */
    private ?int $passcodeExpirationDays = null;
    
    /**
     * @var int|null $passcodeMinimumCharacterSetCount Number of character sets a passcode must contain. Valid values 0 to 4
    */
    private ?int $passcodeMinimumCharacterSetCount = null;
    
    /**
     * @var int|null $passcodeMinimumLength Minimum length of passcode. Valid values 4 to 14
    */
    private ?int $passcodeMinimumLength = null;
    
    /**
     * @var int|null $passcodeMinutesOfInactivityBeforeLock Minutes of inactivity before a passcode is required.
    */
    private ?int $passcodeMinutesOfInactivityBeforeLock = null;
    
    /**
     * @var int|null $passcodeMinutesOfInactivityBeforeScreenTimeout Minutes of inactivity before the screen times out.
    */
    private ?int $passcodeMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var int|null $passcodePreviousPasscodeBlockCount Number of previous passcodes to block. Valid values 1 to 24
    */
    private ?int $passcodePreviousPasscodeBlockCount = null;
    
    /**
     * @var bool|null $passcodeRequired Indicates whether or not to require a passcode.
    */
    private ?bool $passcodeRequired = null;
    
    /**
     * @var RequiredPasswordType|null $passcodeRequiredType Possible values of required passwords.
    */
    private ?RequiredPasswordType $passcodeRequiredType = null;
    
    /**
     * @var int|null $passcodeSignInFailureCountBeforeWipe Number of sign in failures allowed before wiping the device. Valid values 2 to 11
    */
    private ?int $passcodeSignInFailureCountBeforeWipe = null;
    
    /**
     * @var bool|null $podcastsBlocked Indicates whether or not to block the user from using podcasts on the supervised device (iOS 8.0 and later).
    */
    private ?bool $podcastsBlocked = null;
    
    /**
     * @var bool|null $safariBlockAutofill Indicates whether or not to block the user from using Auto fill in Safari. Requires a supervised device for iOS 13 and later.
    */
    private ?bool $safariBlockAutofill = null;
    
    /**
     * @var bool|null $safariBlocked Indicates whether or not to block the user from using Safari. Requires a supervised device for iOS 13 and later.
    */
    private ?bool $safariBlocked = null;
    
    /**
     * @var bool|null $safariBlockJavaScript Indicates whether or not to block JavaScript in Safari.
    */
    private ?bool $safariBlockJavaScript = null;
    
    /**
     * @var bool|null $safariBlockPopups Indicates whether or not to block popups in Safari.
    */
    private ?bool $safariBlockPopups = null;
    
    /**
     * @var WebBrowserCookieSettings|null $safariCookieSettings Web Browser Cookie Settings.
    */
    private ?WebBrowserCookieSettings $safariCookieSettings = null;
    
    /**
     * @var array<string>|null $safariManagedDomains URLs matching the patterns listed here will be considered managed.
    */
    private ?array $safariManagedDomains = null;
    
    /**
     * @var array<string>|null $safariPasswordAutoFillDomains Users can save passwords in Safari only from URLs matching the patterns listed here. Applies to devices in supervised mode (iOS 9.3 and later).
    */
    private ?array $safariPasswordAutoFillDomains = null;
    
    /**
     * @var bool|null $safariRequireFraudWarning Indicates whether or not to require fraud warning in Safari.
    */
    private ?bool $safariRequireFraudWarning = null;
    
    /**
     * @var bool|null $screenCaptureBlocked Indicates whether or not to block the user from taking Screenshots.
    */
    private ?bool $screenCaptureBlocked = null;
    
    /**
     * @var bool|null $siriBlocked Indicates whether or not to block the user from using Siri.
    */
    private ?bool $siriBlocked = null;
    
    /**
     * @var bool|null $siriBlockedWhenLocked Indicates whether or not to block the user from using Siri when locked.
    */
    private ?bool $siriBlockedWhenLocked = null;
    
    /**
     * @var bool|null $siriBlockUserGeneratedContent Indicates whether or not to block Siri from querying user-generated content when used on a supervised device.
    */
    private ?bool $siriBlockUserGeneratedContent = null;
    
    /**
     * @var bool|null $siriRequireProfanityFilter Indicates whether or not to prevent Siri from dictating, or speaking profane language on supervised device.
    */
    private ?bool $siriRequireProfanityFilter = null;
    
    /**
     * @var bool|null $spotlightBlockInternetResults Indicates whether or not to block Spotlight search from returning internet results on supervised device.
    */
    private ?bool $spotlightBlockInternetResults = null;
    
    /**
     * @var bool|null $voiceDialingBlocked Indicates whether or not to block voice dialing.
    */
    private ?bool $voiceDialingBlocked = null;
    
    /**
     * @var bool|null $wallpaperBlockModification Indicates whether or not to allow wallpaper modification on supervised device (iOS 9.0 and later) .
    */
    private ?bool $wallpaperBlockModification = null;
    
    /**
     * @var bool|null $wiFiConnectOnlyToConfiguredNetworks Indicates whether or not to force the device to use only Wi-Fi networks from configuration profiles when the device is in supervised mode. Available for devices running iOS and iPadOS versions 14.4 and earlier. Devices running 14.5+ should use the setting, 'WiFiConnectToAllowedNetworksOnlyForced.
    */
    private ?bool $wiFiConnectOnlyToConfiguredNetworks = null;
    
    /**
     * Instantiates a new IosGeneralDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosGeneralDeviceConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosGeneralDeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosGeneralDeviceConfiguration {
        return new IosGeneralDeviceConfiguration();
    }

    /**
     * Gets the accountBlockModification property value. Indicates whether or not to allow account modification when the device is in supervised mode.
     * @return bool|null
    */
    public function getAccountBlockModification(): ?bool {
        return $this->accountBlockModification;
    }

    /**
     * Gets the activationLockAllowWhenSupervised property value. Indicates whether or not to allow activation lock when the device is in the supervised mode.
     * @return bool|null
    */
    public function getActivationLockAllowWhenSupervised(): ?bool {
        return $this->activationLockAllowWhenSupervised;
    }

    /**
     * Gets the airDropBlocked property value. Indicates whether or not to allow AirDrop when the device is in supervised mode.
     * @return bool|null
    */
    public function getAirDropBlocked(): ?bool {
        return $this->airDropBlocked;
    }

    /**
     * Gets the airDropForceUnmanagedDropTarget property value. Indicates whether or not to cause AirDrop to be considered an unmanaged drop target (iOS 9.0 and later).
     * @return bool|null
    */
    public function getAirDropForceUnmanagedDropTarget(): ?bool {
        return $this->airDropForceUnmanagedDropTarget;
    }

    /**
     * Gets the airPlayForcePairingPasswordForOutgoingRequests property value. Indicates whether or not to enforce all devices receiving AirPlay requests from this device to use a pairing password.
     * @return bool|null
    */
    public function getAirPlayForcePairingPasswordForOutgoingRequests(): ?bool {
        return $this->airPlayForcePairingPasswordForOutgoingRequests;
    }

    /**
     * Gets the appleNewsBlocked property value. Indicates whether or not to block the user from using News when the device is in supervised mode (iOS 9.0 and later).
     * @return bool|null
    */
    public function getAppleNewsBlocked(): ?bool {
        return $this->appleNewsBlocked;
    }

    /**
     * Gets the appleWatchBlockPairing property value. Indicates whether or not to allow Apple Watch pairing when the device is in supervised mode (iOS 9.0 and later).
     * @return bool|null
    */
    public function getAppleWatchBlockPairing(): ?bool {
        return $this->appleWatchBlockPairing;
    }

    /**
     * Gets the appleWatchForceWristDetection property value. Indicates whether or not to force a paired Apple Watch to use Wrist Detection (iOS 8.2 and later).
     * @return bool|null
    */
    public function getAppleWatchForceWristDetection(): ?bool {
        return $this->appleWatchForceWristDetection;
    }

    /**
     * Gets the appsSingleAppModeList property value. Gets or sets the list of iOS apps allowed to autonomously enter Single App Mode. Supervised only. iOS 7.0 and later. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getAppsSingleAppModeList(): ?array {
        return $this->appsSingleAppModeList;
    }

    /**
     * Gets the appStoreBlockAutomaticDownloads property value. Indicates whether or not to block the automatic downloading of apps purchased on other devices when the device is in supervised mode (iOS 9.0 and later).
     * @return bool|null
    */
    public function getAppStoreBlockAutomaticDownloads(): ?bool {
        return $this->appStoreBlockAutomaticDownloads;
    }

    /**
     * Gets the appStoreBlocked property value. Indicates whether or not to block the user from using the App Store. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getAppStoreBlocked(): ?bool {
        return $this->appStoreBlocked;
    }

    /**
     * Gets the appStoreBlockInAppPurchases property value. Indicates whether or not to block the user from making in app purchases.
     * @return bool|null
    */
    public function getAppStoreBlockInAppPurchases(): ?bool {
        return $this->appStoreBlockInAppPurchases;
    }

    /**
     * Gets the appStoreBlockUIAppInstallation property value. Indicates whether or not to block the App Store app, not restricting installation through Host apps. Applies to supervised mode only (iOS 9.0 and later).
     * @return bool|null
    */
    public function getAppStoreBlockUIAppInstallation(): ?bool {
        return $this->appStoreBlockUIAppInstallation;
    }

    /**
     * Gets the appStoreRequirePassword property value. Indicates whether or not to require a password when using the app store.
     * @return bool|null
    */
    public function getAppStoreRequirePassword(): ?bool {
        return $this->appStoreRequirePassword;
    }

    /**
     * Gets the appsVisibilityList property value. List of apps in the visibility list (either visible/launchable apps list or hidden/unlaunchable apps list, controlled by AppsVisibilityListType) (iOS 9.3 and later). This collection can contain a maximum of 10000 elements.
     * @return array<AppListItem>|null
    */
    public function getAppsVisibilityList(): ?array {
        return $this->appsVisibilityList;
    }

    /**
     * Gets the appsVisibilityListType property value. Possible values of the compliance app list.
     * @return AppListType|null
    */
    public function getAppsVisibilityListType(): ?AppListType {
        return $this->appsVisibilityListType;
    }

    /**
     * Gets the bluetoothBlockModification property value. Indicates whether or not to allow modification of Bluetooth settings when the device is in supervised mode (iOS 10.0 and later).
     * @return bool|null
    */
    public function getBluetoothBlockModification(): ?bool {
        return $this->bluetoothBlockModification;
    }

    /**
     * Gets the cameraBlocked property value. Indicates whether or not to block the user from accessing the camera of the device. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        return $this->cameraBlocked;
    }

    /**
     * Gets the cellularBlockDataRoaming property value. Indicates whether or not to block data roaming.
     * @return bool|null
    */
    public function getCellularBlockDataRoaming(): ?bool {
        return $this->cellularBlockDataRoaming;
    }

    /**
     * Gets the cellularBlockGlobalBackgroundFetchWhileRoaming property value. Indicates whether or not to block global background fetch while roaming.
     * @return bool|null
    */
    public function getCellularBlockGlobalBackgroundFetchWhileRoaming(): ?bool {
        return $this->cellularBlockGlobalBackgroundFetchWhileRoaming;
    }

    /**
     * Gets the cellularBlockPerAppDataModification property value. Indicates whether or not to allow changes to cellular app data usage settings when the device is in supervised mode.
     * @return bool|null
    */
    public function getCellularBlockPerAppDataModification(): ?bool {
        return $this->cellularBlockPerAppDataModification;
    }

    /**
     * Gets the cellularBlockPersonalHotspot property value. Indicates whether or not to block Personal Hotspot.
     * @return bool|null
    */
    public function getCellularBlockPersonalHotspot(): ?bool {
        return $this->cellularBlockPersonalHotspot;
    }

    /**
     * Gets the cellularBlockVoiceRoaming property value. Indicates whether or not to block voice roaming.
     * @return bool|null
    */
    public function getCellularBlockVoiceRoaming(): ?bool {
        return $this->cellularBlockVoiceRoaming;
    }

    /**
     * Gets the certificatesBlockUntrustedTlsCertificates property value. Indicates whether or not to block untrusted TLS certificates.
     * @return bool|null
    */
    public function getCertificatesBlockUntrustedTlsCertificates(): ?bool {
        return $this->certificatesBlockUntrustedTlsCertificates;
    }

    /**
     * Gets the classroomAppBlockRemoteScreenObservation property value. Indicates whether or not to allow remote screen observation by Classroom app when the device is in supervised mode (iOS 9.3 and later).
     * @return bool|null
    */
    public function getClassroomAppBlockRemoteScreenObservation(): ?bool {
        return $this->classroomAppBlockRemoteScreenObservation;
    }

    /**
     * Gets the classroomAppForceUnpromptedScreenObservation property value. Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting when the device is in supervised mode.
     * @return bool|null
    */
    public function getClassroomAppForceUnpromptedScreenObservation(): ?bool {
        return $this->classroomAppForceUnpromptedScreenObservation;
    }

    /**
     * Gets the compliantAppListType property value. Possible values of the compliance app list.
     * @return AppListType|null
    */
    public function getCompliantAppListType(): ?AppListType {
        return $this->compliantAppListType;
    }

    /**
     * Gets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @return array<AppListItem>|null
    */
    public function getCompliantAppsList(): ?array {
        return $this->compliantAppsList;
    }

    /**
     * Gets the configurationProfileBlockChanges property value. Indicates whether or not to block the user from installing configuration profiles and certificates interactively when the device is in supervised mode.
     * @return bool|null
    */
    public function getConfigurationProfileBlockChanges(): ?bool {
        return $this->configurationProfileBlockChanges;
    }

    /**
     * Gets the definitionLookupBlocked property value. Indicates whether or not to block definition lookup when the device is in supervised mode (iOS 8.1.3 and later ).
     * @return bool|null
    */
    public function getDefinitionLookupBlocked(): ?bool {
        return $this->definitionLookupBlocked;
    }

    /**
     * Gets the deviceBlockEnableRestrictions property value. Indicates whether or not to allow the user to enables restrictions in the device settings when the device is in supervised mode.
     * @return bool|null
    */
    public function getDeviceBlockEnableRestrictions(): ?bool {
        return $this->deviceBlockEnableRestrictions;
    }

    /**
     * Gets the deviceBlockEraseContentAndSettings property value. Indicates whether or not to allow the use of the 'Erase all content and settings' option on the device when the device is in supervised mode.
     * @return bool|null
    */
    public function getDeviceBlockEraseContentAndSettings(): ?bool {
        return $this->deviceBlockEraseContentAndSettings;
    }

    /**
     * Gets the deviceBlockNameModification property value. Indicates whether or not to allow device name modification when the device is in supervised mode (iOS 9.0 and later).
     * @return bool|null
    */
    public function getDeviceBlockNameModification(): ?bool {
        return $this->deviceBlockNameModification;
    }

    /**
     * Gets the diagnosticDataBlockSubmission property value. Indicates whether or not to block diagnostic data submission.
     * @return bool|null
    */
    public function getDiagnosticDataBlockSubmission(): ?bool {
        return $this->diagnosticDataBlockSubmission;
    }

    /**
     * Gets the diagnosticDataBlockSubmissionModification property value. Indicates whether or not to allow diagnostics submission settings modification when the device is in supervised mode (iOS 9.3.2 and later).
     * @return bool|null
    */
    public function getDiagnosticDataBlockSubmissionModification(): ?bool {
        return $this->diagnosticDataBlockSubmissionModification;
    }

    /**
     * Gets the documentsBlockManagedDocumentsInUnmanagedApps property value. Indicates whether or not to block the user from viewing managed documents in unmanaged apps.
     * @return bool|null
    */
    public function getDocumentsBlockManagedDocumentsInUnmanagedApps(): ?bool {
        return $this->documentsBlockManagedDocumentsInUnmanagedApps;
    }

    /**
     * Gets the documentsBlockUnmanagedDocumentsInManagedApps property value. Indicates whether or not to block the user from viewing unmanaged documents in managed apps.
     * @return bool|null
    */
    public function getDocumentsBlockUnmanagedDocumentsInManagedApps(): ?bool {
        return $this->documentsBlockUnmanagedDocumentsInManagedApps;
    }

    /**
     * Gets the emailInDomainSuffixes property value. An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     * @return array<string>|null
    */
    public function getEmailInDomainSuffixes(): ?array {
        return $this->emailInDomainSuffixes;
    }

    /**
     * Gets the enterpriseAppBlockTrust property value. Indicates whether or not to block the user from trusting an enterprise app.
     * @return bool|null
    */
    public function getEnterpriseAppBlockTrust(): ?bool {
        return $this->enterpriseAppBlockTrust;
    }

    /**
     * Gets the enterpriseAppBlockTrustModification property value. [Deprecated] Configuring this setting and setting the value to 'true' has no effect on the device.
     * @return bool|null
    */
    public function getEnterpriseAppBlockTrustModification(): ?bool {
        return $this->enterpriseAppBlockTrustModification;
    }

    /**
     * Gets the faceTimeBlocked property value. Indicates whether or not to block the user from using FaceTime. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getFaceTimeBlocked(): ?bool {
        return $this->faceTimeBlocked;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountBlockModification' => function (ParseNode $n) use ($o) { $o->setAccountBlockModification($n->getBooleanValue()); },
            'activationLockAllowWhenSupervised' => function (ParseNode $n) use ($o) { $o->setActivationLockAllowWhenSupervised($n->getBooleanValue()); },
            'airDropBlocked' => function (ParseNode $n) use ($o) { $o->setAirDropBlocked($n->getBooleanValue()); },
            'airDropForceUnmanagedDropTarget' => function (ParseNode $n) use ($o) { $o->setAirDropForceUnmanagedDropTarget($n->getBooleanValue()); },
            'airPlayForcePairingPasswordForOutgoingRequests' => function (ParseNode $n) use ($o) { $o->setAirPlayForcePairingPasswordForOutgoingRequests($n->getBooleanValue()); },
            'appleNewsBlocked' => function (ParseNode $n) use ($o) { $o->setAppleNewsBlocked($n->getBooleanValue()); },
            'appleWatchBlockPairing' => function (ParseNode $n) use ($o) { $o->setAppleWatchBlockPairing($n->getBooleanValue()); },
            'appleWatchForceWristDetection' => function (ParseNode $n) use ($o) { $o->setAppleWatchForceWristDetection($n->getBooleanValue()); },
            'appsSingleAppModeList' => function (ParseNode $n) use ($o) { $o->setAppsSingleAppModeList($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'appStoreBlockAutomaticDownloads' => function (ParseNode $n) use ($o) { $o->setAppStoreBlockAutomaticDownloads($n->getBooleanValue()); },
            'appStoreBlocked' => function (ParseNode $n) use ($o) { $o->setAppStoreBlocked($n->getBooleanValue()); },
            'appStoreBlockInAppPurchases' => function (ParseNode $n) use ($o) { $o->setAppStoreBlockInAppPurchases($n->getBooleanValue()); },
            'appStoreBlockUIAppInstallation' => function (ParseNode $n) use ($o) { $o->setAppStoreBlockUIAppInstallation($n->getBooleanValue()); },
            'appStoreRequirePassword' => function (ParseNode $n) use ($o) { $o->setAppStoreRequirePassword($n->getBooleanValue()); },
            'appsVisibilityList' => function (ParseNode $n) use ($o) { $o->setAppsVisibilityList($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'appsVisibilityListType' => function (ParseNode $n) use ($o) { $o->setAppsVisibilityListType($n->getEnumValue(AppListType::class)); },
            'bluetoothBlockModification' => function (ParseNode $n) use ($o) { $o->setBluetoothBlockModification($n->getBooleanValue()); },
            'cameraBlocked' => function (ParseNode $n) use ($o) { $o->setCameraBlocked($n->getBooleanValue()); },
            'cellularBlockDataRoaming' => function (ParseNode $n) use ($o) { $o->setCellularBlockDataRoaming($n->getBooleanValue()); },
            'cellularBlockGlobalBackgroundFetchWhileRoaming' => function (ParseNode $n) use ($o) { $o->setCellularBlockGlobalBackgroundFetchWhileRoaming($n->getBooleanValue()); },
            'cellularBlockPerAppDataModification' => function (ParseNode $n) use ($o) { $o->setCellularBlockPerAppDataModification($n->getBooleanValue()); },
            'cellularBlockPersonalHotspot' => function (ParseNode $n) use ($o) { $o->setCellularBlockPersonalHotspot($n->getBooleanValue()); },
            'cellularBlockVoiceRoaming' => function (ParseNode $n) use ($o) { $o->setCellularBlockVoiceRoaming($n->getBooleanValue()); },
            'certificatesBlockUntrustedTlsCertificates' => function (ParseNode $n) use ($o) { $o->setCertificatesBlockUntrustedTlsCertificates($n->getBooleanValue()); },
            'classroomAppBlockRemoteScreenObservation' => function (ParseNode $n) use ($o) { $o->setClassroomAppBlockRemoteScreenObservation($n->getBooleanValue()); },
            'classroomAppForceUnpromptedScreenObservation' => function (ParseNode $n) use ($o) { $o->setClassroomAppForceUnpromptedScreenObservation($n->getBooleanValue()); },
            'compliantAppListType' => function (ParseNode $n) use ($o) { $o->setCompliantAppListType($n->getEnumValue(AppListType::class)); },
            'compliantAppsList' => function (ParseNode $n) use ($o) { $o->setCompliantAppsList($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'configurationProfileBlockChanges' => function (ParseNode $n) use ($o) { $o->setConfigurationProfileBlockChanges($n->getBooleanValue()); },
            'definitionLookupBlocked' => function (ParseNode $n) use ($o) { $o->setDefinitionLookupBlocked($n->getBooleanValue()); },
            'deviceBlockEnableRestrictions' => function (ParseNode $n) use ($o) { $o->setDeviceBlockEnableRestrictions($n->getBooleanValue()); },
            'deviceBlockEraseContentAndSettings' => function (ParseNode $n) use ($o) { $o->setDeviceBlockEraseContentAndSettings($n->getBooleanValue()); },
            'deviceBlockNameModification' => function (ParseNode $n) use ($o) { $o->setDeviceBlockNameModification($n->getBooleanValue()); },
            'diagnosticDataBlockSubmission' => function (ParseNode $n) use ($o) { $o->setDiagnosticDataBlockSubmission($n->getBooleanValue()); },
            'diagnosticDataBlockSubmissionModification' => function (ParseNode $n) use ($o) { $o->setDiagnosticDataBlockSubmissionModification($n->getBooleanValue()); },
            'documentsBlockManagedDocumentsInUnmanagedApps' => function (ParseNode $n) use ($o) { $o->setDocumentsBlockManagedDocumentsInUnmanagedApps($n->getBooleanValue()); },
            'documentsBlockUnmanagedDocumentsInManagedApps' => function (ParseNode $n) use ($o) { $o->setDocumentsBlockUnmanagedDocumentsInManagedApps($n->getBooleanValue()); },
            'emailInDomainSuffixes' => function (ParseNode $n) use ($o) { $o->setEmailInDomainSuffixes($n->getCollectionOfPrimitiveValues()); },
            'enterpriseAppBlockTrust' => function (ParseNode $n) use ($o) { $o->setEnterpriseAppBlockTrust($n->getBooleanValue()); },
            'enterpriseAppBlockTrustModification' => function (ParseNode $n) use ($o) { $o->setEnterpriseAppBlockTrustModification($n->getBooleanValue()); },
            'faceTimeBlocked' => function (ParseNode $n) use ($o) { $o->setFaceTimeBlocked($n->getBooleanValue()); },
            'findMyFriendsBlocked' => function (ParseNode $n) use ($o) { $o->setFindMyFriendsBlocked($n->getBooleanValue()); },
            'gameCenterBlocked' => function (ParseNode $n) use ($o) { $o->setGameCenterBlocked($n->getBooleanValue()); },
            'gamingBlockGameCenterFriends' => function (ParseNode $n) use ($o) { $o->setGamingBlockGameCenterFriends($n->getBooleanValue()); },
            'gamingBlockMultiplayer' => function (ParseNode $n) use ($o) { $o->setGamingBlockMultiplayer($n->getBooleanValue()); },
            'hostPairingBlocked' => function (ParseNode $n) use ($o) { $o->setHostPairingBlocked($n->getBooleanValue()); },
            'iBooksStoreBlocked' => function (ParseNode $n) use ($o) { $o->setIBooksStoreBlocked($n->getBooleanValue()); },
            'iBooksStoreBlockErotica' => function (ParseNode $n) use ($o) { $o->setIBooksStoreBlockErotica($n->getBooleanValue()); },
            'iCloudBlockActivityContinuation' => function (ParseNode $n) use ($o) { $o->setICloudBlockActivityContinuation($n->getBooleanValue()); },
            'iCloudBlockBackup' => function (ParseNode $n) use ($o) { $o->setICloudBlockBackup($n->getBooleanValue()); },
            'iCloudBlockDocumentSync' => function (ParseNode $n) use ($o) { $o->setICloudBlockDocumentSync($n->getBooleanValue()); },
            'iCloudBlockManagedAppsSync' => function (ParseNode $n) use ($o) { $o->setICloudBlockManagedAppsSync($n->getBooleanValue()); },
            'iCloudBlockPhotoLibrary' => function (ParseNode $n) use ($o) { $o->setICloudBlockPhotoLibrary($n->getBooleanValue()); },
            'iCloudBlockPhotoStreamSync' => function (ParseNode $n) use ($o) { $o->setICloudBlockPhotoStreamSync($n->getBooleanValue()); },
            'iCloudBlockSharedPhotoStream' => function (ParseNode $n) use ($o) { $o->setICloudBlockSharedPhotoStream($n->getBooleanValue()); },
            'iCloudRequireEncryptedBackup' => function (ParseNode $n) use ($o) { $o->setICloudRequireEncryptedBackup($n->getBooleanValue()); },
            'iTunesBlockExplicitContent' => function (ParseNode $n) use ($o) { $o->setITunesBlockExplicitContent($n->getBooleanValue()); },
            'iTunesBlockMusicService' => function (ParseNode $n) use ($o) { $o->setITunesBlockMusicService($n->getBooleanValue()); },
            'iTunesBlockRadio' => function (ParseNode $n) use ($o) { $o->setITunesBlockRadio($n->getBooleanValue()); },
            'keyboardBlockAutoCorrect' => function (ParseNode $n) use ($o) { $o->setKeyboardBlockAutoCorrect($n->getBooleanValue()); },
            'keyboardBlockDictation' => function (ParseNode $n) use ($o) { $o->setKeyboardBlockDictation($n->getBooleanValue()); },
            'keyboardBlockPredictive' => function (ParseNode $n) use ($o) { $o->setKeyboardBlockPredictive($n->getBooleanValue()); },
            'keyboardBlockShortcuts' => function (ParseNode $n) use ($o) { $o->setKeyboardBlockShortcuts($n->getBooleanValue()); },
            'keyboardBlockSpellCheck' => function (ParseNode $n) use ($o) { $o->setKeyboardBlockSpellCheck($n->getBooleanValue()); },
            'kioskModeAllowAssistiveSpeak' => function (ParseNode $n) use ($o) { $o->setKioskModeAllowAssistiveSpeak($n->getBooleanValue()); },
            'kioskModeAllowAssistiveTouchSettings' => function (ParseNode $n) use ($o) { $o->setKioskModeAllowAssistiveTouchSettings($n->getBooleanValue()); },
            'kioskModeAllowAutoLock' => function (ParseNode $n) use ($o) { $o->setKioskModeAllowAutoLock($n->getBooleanValue()); },
            'kioskModeAllowColorInversionSettings' => function (ParseNode $n) use ($o) { $o->setKioskModeAllowColorInversionSettings($n->getBooleanValue()); },
            'kioskModeAllowRingerSwitch' => function (ParseNode $n) use ($o) { $o->setKioskModeAllowRingerSwitch($n->getBooleanValue()); },
            'kioskModeAllowScreenRotation' => function (ParseNode $n) use ($o) { $o->setKioskModeAllowScreenRotation($n->getBooleanValue()); },
            'kioskModeAllowSleepButton' => function (ParseNode $n) use ($o) { $o->setKioskModeAllowSleepButton($n->getBooleanValue()); },
            'kioskModeAllowTouchscreen' => function (ParseNode $n) use ($o) { $o->setKioskModeAllowTouchscreen($n->getBooleanValue()); },
            'kioskModeAllowVoiceOverSettings' => function (ParseNode $n) use ($o) { $o->setKioskModeAllowVoiceOverSettings($n->getBooleanValue()); },
            'kioskModeAllowVolumeButtons' => function (ParseNode $n) use ($o) { $o->setKioskModeAllowVolumeButtons($n->getBooleanValue()); },
            'kioskModeAllowZoomSettings' => function (ParseNode $n) use ($o) { $o->setKioskModeAllowZoomSettings($n->getBooleanValue()); },
            'kioskModeAppStoreUrl' => function (ParseNode $n) use ($o) { $o->setKioskModeAppStoreUrl($n->getStringValue()); },
            'kioskModeBuiltInAppId' => function (ParseNode $n) use ($o) { $o->setKioskModeBuiltInAppId($n->getStringValue()); },
            'kioskModeManagedAppId' => function (ParseNode $n) use ($o) { $o->setKioskModeManagedAppId($n->getStringValue()); },
            'kioskModeRequireAssistiveTouch' => function (ParseNode $n) use ($o) { $o->setKioskModeRequireAssistiveTouch($n->getBooleanValue()); },
            'kioskModeRequireColorInversion' => function (ParseNode $n) use ($o) { $o->setKioskModeRequireColorInversion($n->getBooleanValue()); },
            'kioskModeRequireMonoAudio' => function (ParseNode $n) use ($o) { $o->setKioskModeRequireMonoAudio($n->getBooleanValue()); },
            'kioskModeRequireVoiceOver' => function (ParseNode $n) use ($o) { $o->setKioskModeRequireVoiceOver($n->getBooleanValue()); },
            'kioskModeRequireZoom' => function (ParseNode $n) use ($o) { $o->setKioskModeRequireZoom($n->getBooleanValue()); },
            'lockScreenBlockControlCenter' => function (ParseNode $n) use ($o) { $o->setLockScreenBlockControlCenter($n->getBooleanValue()); },
            'lockScreenBlockNotificationView' => function (ParseNode $n) use ($o) { $o->setLockScreenBlockNotificationView($n->getBooleanValue()); },
            'lockScreenBlockPassbook' => function (ParseNode $n) use ($o) { $o->setLockScreenBlockPassbook($n->getBooleanValue()); },
            'lockScreenBlockTodayView' => function (ParseNode $n) use ($o) { $o->setLockScreenBlockTodayView($n->getBooleanValue()); },
            'mediaContentRatingApps' => function (ParseNode $n) use ($o) { $o->setMediaContentRatingApps($n->getEnumValue(RatingAppsType::class)); },
            'mediaContentRatingAustralia' => function (ParseNode $n) use ($o) { $o->setMediaContentRatingAustralia($n->getObjectValue(array(MediaContentRatingAustralia::class, 'createFromDiscriminatorValue'))); },
            'mediaContentRatingCanada' => function (ParseNode $n) use ($o) { $o->setMediaContentRatingCanada($n->getObjectValue(array(MediaContentRatingCanada::class, 'createFromDiscriminatorValue'))); },
            'mediaContentRatingFrance' => function (ParseNode $n) use ($o) { $o->setMediaContentRatingFrance($n->getObjectValue(array(MediaContentRatingFrance::class, 'createFromDiscriminatorValue'))); },
            'mediaContentRatingGermany' => function (ParseNode $n) use ($o) { $o->setMediaContentRatingGermany($n->getObjectValue(array(MediaContentRatingGermany::class, 'createFromDiscriminatorValue'))); },
            'mediaContentRatingIreland' => function (ParseNode $n) use ($o) { $o->setMediaContentRatingIreland($n->getObjectValue(array(MediaContentRatingIreland::class, 'createFromDiscriminatorValue'))); },
            'mediaContentRatingJapan' => function (ParseNode $n) use ($o) { $o->setMediaContentRatingJapan($n->getObjectValue(array(MediaContentRatingJapan::class, 'createFromDiscriminatorValue'))); },
            'mediaContentRatingNewZealand' => function (ParseNode $n) use ($o) { $o->setMediaContentRatingNewZealand($n->getObjectValue(array(MediaContentRatingNewZealand::class, 'createFromDiscriminatorValue'))); },
            'mediaContentRatingUnitedKingdom' => function (ParseNode $n) use ($o) { $o->setMediaContentRatingUnitedKingdom($n->getObjectValue(array(MediaContentRatingUnitedKingdom::class, 'createFromDiscriminatorValue'))); },
            'mediaContentRatingUnitedStates' => function (ParseNode $n) use ($o) { $o->setMediaContentRatingUnitedStates($n->getObjectValue(array(MediaContentRatingUnitedStates::class, 'createFromDiscriminatorValue'))); },
            'messagesBlocked' => function (ParseNode $n) use ($o) { $o->setMessagesBlocked($n->getBooleanValue()); },
            'networkUsageRules' => function (ParseNode $n) use ($o) { $o->setNetworkUsageRules($n->getCollectionOfObjectValues(array(IosNetworkUsageRule::class, 'createFromDiscriminatorValue'))); },
            'notificationsBlockSettingsModification' => function (ParseNode $n) use ($o) { $o->setNotificationsBlockSettingsModification($n->getBooleanValue()); },
            'passcodeBlockFingerprintModification' => function (ParseNode $n) use ($o) { $o->setPasscodeBlockFingerprintModification($n->getBooleanValue()); },
            'passcodeBlockFingerprintUnlock' => function (ParseNode $n) use ($o) { $o->setPasscodeBlockFingerprintUnlock($n->getBooleanValue()); },
            'passcodeBlockModification' => function (ParseNode $n) use ($o) { $o->setPasscodeBlockModification($n->getBooleanValue()); },
            'passcodeBlockSimple' => function (ParseNode $n) use ($o) { $o->setPasscodeBlockSimple($n->getBooleanValue()); },
            'passcodeExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasscodeExpirationDays($n->getIntegerValue()); },
            'passcodeMinimumCharacterSetCount' => function (ParseNode $n) use ($o) { $o->setPasscodeMinimumCharacterSetCount($n->getIntegerValue()); },
            'passcodeMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasscodeMinimumLength($n->getIntegerValue()); },
            'passcodeMinutesOfInactivityBeforeLock' => function (ParseNode $n) use ($o) { $o->setPasscodeMinutesOfInactivityBeforeLock($n->getIntegerValue()); },
            'passcodeMinutesOfInactivityBeforeScreenTimeout' => function (ParseNode $n) use ($o) { $o->setPasscodeMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()); },
            'passcodePreviousPasscodeBlockCount' => function (ParseNode $n) use ($o) { $o->setPasscodePreviousPasscodeBlockCount($n->getIntegerValue()); },
            'passcodeRequired' => function (ParseNode $n) use ($o) { $o->setPasscodeRequired($n->getBooleanValue()); },
            'passcodeRequiredType' => function (ParseNode $n) use ($o) { $o->setPasscodeRequiredType($n->getEnumValue(RequiredPasswordType::class)); },
            'passcodeSignInFailureCountBeforeWipe' => function (ParseNode $n) use ($o) { $o->setPasscodeSignInFailureCountBeforeWipe($n->getIntegerValue()); },
            'podcastsBlocked' => function (ParseNode $n) use ($o) { $o->setPodcastsBlocked($n->getBooleanValue()); },
            'safariBlockAutofill' => function (ParseNode $n) use ($o) { $o->setSafariBlockAutofill($n->getBooleanValue()); },
            'safariBlocked' => function (ParseNode $n) use ($o) { $o->setSafariBlocked($n->getBooleanValue()); },
            'safariBlockJavaScript' => function (ParseNode $n) use ($o) { $o->setSafariBlockJavaScript($n->getBooleanValue()); },
            'safariBlockPopups' => function (ParseNode $n) use ($o) { $o->setSafariBlockPopups($n->getBooleanValue()); },
            'safariCookieSettings' => function (ParseNode $n) use ($o) { $o->setSafariCookieSettings($n->getEnumValue(WebBrowserCookieSettings::class)); },
            'safariManagedDomains' => function (ParseNode $n) use ($o) { $o->setSafariManagedDomains($n->getCollectionOfPrimitiveValues()); },
            'safariPasswordAutoFillDomains' => function (ParseNode $n) use ($o) { $o->setSafariPasswordAutoFillDomains($n->getCollectionOfPrimitiveValues()); },
            'safariRequireFraudWarning' => function (ParseNode $n) use ($o) { $o->setSafariRequireFraudWarning($n->getBooleanValue()); },
            'screenCaptureBlocked' => function (ParseNode $n) use ($o) { $o->setScreenCaptureBlocked($n->getBooleanValue()); },
            'siriBlocked' => function (ParseNode $n) use ($o) { $o->setSiriBlocked($n->getBooleanValue()); },
            'siriBlockedWhenLocked' => function (ParseNode $n) use ($o) { $o->setSiriBlockedWhenLocked($n->getBooleanValue()); },
            'siriBlockUserGeneratedContent' => function (ParseNode $n) use ($o) { $o->setSiriBlockUserGeneratedContent($n->getBooleanValue()); },
            'siriRequireProfanityFilter' => function (ParseNode $n) use ($o) { $o->setSiriRequireProfanityFilter($n->getBooleanValue()); },
            'spotlightBlockInternetResults' => function (ParseNode $n) use ($o) { $o->setSpotlightBlockInternetResults($n->getBooleanValue()); },
            'voiceDialingBlocked' => function (ParseNode $n) use ($o) { $o->setVoiceDialingBlocked($n->getBooleanValue()); },
            'wallpaperBlockModification' => function (ParseNode $n) use ($o) { $o->setWallpaperBlockModification($n->getBooleanValue()); },
            'wiFiConnectOnlyToConfiguredNetworks' => function (ParseNode $n) use ($o) { $o->setWiFiConnectOnlyToConfiguredNetworks($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the findMyFriendsBlocked property value. Indicates whether or not to block changes to Find My Friends when the device is in supervised mode.
     * @return bool|null
    */
    public function getFindMyFriendsBlocked(): ?bool {
        return $this->findMyFriendsBlocked;
    }

    /**
     * Gets the gameCenterBlocked property value. Indicates whether or not to block the user from using Game Center when the device is in supervised mode.
     * @return bool|null
    */
    public function getGameCenterBlocked(): ?bool {
        return $this->gameCenterBlocked;
    }

    /**
     * Gets the gamingBlockGameCenterFriends property value. Indicates whether or not to block the user from having friends in Game Center. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getGamingBlockGameCenterFriends(): ?bool {
        return $this->gamingBlockGameCenterFriends;
    }

    /**
     * Gets the gamingBlockMultiplayer property value. Indicates whether or not to block the user from using multiplayer gaming. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getGamingBlockMultiplayer(): ?bool {
        return $this->gamingBlockMultiplayer;
    }

    /**
     * Gets the hostPairingBlocked property value. indicates whether or not to allow host pairing to control the devices an iOS device can pair with when the iOS device is in supervised mode.
     * @return bool|null
    */
    public function getHostPairingBlocked(): ?bool {
        return $this->hostPairingBlocked;
    }

    /**
     * Gets the iBooksStoreBlocked property value. Indicates whether or not to block the user from using the iBooks Store when the device is in supervised mode.
     * @return bool|null
    */
    public function getIBooksStoreBlocked(): ?bool {
        return $this->iBooksStoreBlocked;
    }

    /**
     * Gets the iBooksStoreBlockErotica property value. Indicates whether or not to block the user from downloading media from the iBookstore that has been tagged as erotica.
     * @return bool|null
    */
    public function getIBooksStoreBlockErotica(): ?bool {
        return $this->iBooksStoreBlockErotica;
    }

    /**
     * Gets the iCloudBlockActivityContinuation property value. Indicates whether or not to block the user from continuing work they started on iOS device to another iOS or macOS device.
     * @return bool|null
    */
    public function getICloudBlockActivityContinuation(): ?bool {
        return $this->iCloudBlockActivityContinuation;
    }

    /**
     * Gets the iCloudBlockBackup property value. Indicates whether or not to block iCloud backup. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getICloudBlockBackup(): ?bool {
        return $this->iCloudBlockBackup;
    }

    /**
     * Gets the iCloudBlockDocumentSync property value. Indicates whether or not to block iCloud document sync. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getICloudBlockDocumentSync(): ?bool {
        return $this->iCloudBlockDocumentSync;
    }

    /**
     * Gets the iCloudBlockManagedAppsSync property value. Indicates whether or not to block Managed Apps Cloud Sync.
     * @return bool|null
    */
    public function getICloudBlockManagedAppsSync(): ?bool {
        return $this->iCloudBlockManagedAppsSync;
    }

    /**
     * Gets the iCloudBlockPhotoLibrary property value. Indicates whether or not to block iCloud Photo Library.
     * @return bool|null
    */
    public function getICloudBlockPhotoLibrary(): ?bool {
        return $this->iCloudBlockPhotoLibrary;
    }

    /**
     * Gets the iCloudBlockPhotoStreamSync property value. Indicates whether or not to block iCloud Photo Stream Sync.
     * @return bool|null
    */
    public function getICloudBlockPhotoStreamSync(): ?bool {
        return $this->iCloudBlockPhotoStreamSync;
    }

    /**
     * Gets the iCloudBlockSharedPhotoStream property value. Indicates whether or not to block Shared Photo Stream.
     * @return bool|null
    */
    public function getICloudBlockSharedPhotoStream(): ?bool {
        return $this->iCloudBlockSharedPhotoStream;
    }

    /**
     * Gets the iCloudRequireEncryptedBackup property value. Indicates whether or not to require backups to iCloud be encrypted.
     * @return bool|null
    */
    public function getICloudRequireEncryptedBackup(): ?bool {
        return $this->iCloudRequireEncryptedBackup;
    }

    /**
     * Gets the iTunesBlockExplicitContent property value. Indicates whether or not to block the user from accessing explicit content in iTunes and the App Store. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getITunesBlockExplicitContent(): ?bool {
        return $this->iTunesBlockExplicitContent;
    }

    /**
     * Gets the iTunesBlockMusicService property value. Indicates whether or not to block Music service and revert Music app to classic mode when the device is in supervised mode (iOS 9.3 and later and macOS 10.12 and later).
     * @return bool|null
    */
    public function getITunesBlockMusicService(): ?bool {
        return $this->iTunesBlockMusicService;
    }

    /**
     * Gets the iTunesBlockRadio property value. Indicates whether or not to block the user from using iTunes Radio when the device is in supervised mode (iOS 9.3 and later).
     * @return bool|null
    */
    public function getITunesBlockRadio(): ?bool {
        return $this->iTunesBlockRadio;
    }

    /**
     * Gets the keyboardBlockAutoCorrect property value. Indicates whether or not to block keyboard auto-correction when the device is in supervised mode (iOS 8.1.3 and later).
     * @return bool|null
    */
    public function getKeyboardBlockAutoCorrect(): ?bool {
        return $this->keyboardBlockAutoCorrect;
    }

    /**
     * Gets the keyboardBlockDictation property value. Indicates whether or not to block the user from using dictation input when the device is in supervised mode.
     * @return bool|null
    */
    public function getKeyboardBlockDictation(): ?bool {
        return $this->keyboardBlockDictation;
    }

    /**
     * Gets the keyboardBlockPredictive property value. Indicates whether or not to block predictive keyboards when device is in supervised mode (iOS 8.1.3 and later).
     * @return bool|null
    */
    public function getKeyboardBlockPredictive(): ?bool {
        return $this->keyboardBlockPredictive;
    }

    /**
     * Gets the keyboardBlockShortcuts property value. Indicates whether or not to block keyboard shortcuts when the device is in supervised mode (iOS 9.0 and later).
     * @return bool|null
    */
    public function getKeyboardBlockShortcuts(): ?bool {
        return $this->keyboardBlockShortcuts;
    }

    /**
     * Gets the keyboardBlockSpellCheck property value. Indicates whether or not to block keyboard spell-checking when the device is in supervised mode (iOS 8.1.3 and later).
     * @return bool|null
    */
    public function getKeyboardBlockSpellCheck(): ?bool {
        return $this->keyboardBlockSpellCheck;
    }

    /**
     * Gets the kioskModeAllowAssistiveSpeak property value. Indicates whether or not to allow assistive speak while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeAllowAssistiveSpeak(): ?bool {
        return $this->kioskModeAllowAssistiveSpeak;
    }

    /**
     * Gets the kioskModeAllowAssistiveTouchSettings property value. Indicates whether or not to allow access to the Assistive Touch Settings while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeAllowAssistiveTouchSettings(): ?bool {
        return $this->kioskModeAllowAssistiveTouchSettings;
    }

    /**
     * Gets the kioskModeAllowAutoLock property value. Indicates whether or not to allow device auto lock while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockAutoLock instead.
     * @return bool|null
    */
    public function getKioskModeAllowAutoLock(): ?bool {
        return $this->kioskModeAllowAutoLock;
    }

    /**
     * Gets the kioskModeAllowColorInversionSettings property value. Indicates whether or not to allow access to the Color Inversion Settings while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeAllowColorInversionSettings(): ?bool {
        return $this->kioskModeAllowColorInversionSettings;
    }

    /**
     * Gets the kioskModeAllowRingerSwitch property value. Indicates whether or not to allow use of the ringer switch while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockRingerSwitch instead.
     * @return bool|null
    */
    public function getKioskModeAllowRingerSwitch(): ?bool {
        return $this->kioskModeAllowRingerSwitch;
    }

    /**
     * Gets the kioskModeAllowScreenRotation property value. Indicates whether or not to allow screen rotation while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockScreenRotation instead.
     * @return bool|null
    */
    public function getKioskModeAllowScreenRotation(): ?bool {
        return $this->kioskModeAllowScreenRotation;
    }

    /**
     * Gets the kioskModeAllowSleepButton property value. Indicates whether or not to allow use of the sleep button while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockSleepButton instead.
     * @return bool|null
    */
    public function getKioskModeAllowSleepButton(): ?bool {
        return $this->kioskModeAllowSleepButton;
    }

    /**
     * Gets the kioskModeAllowTouchscreen property value. Indicates whether or not to allow use of the touchscreen while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockTouchscreen instead.
     * @return bool|null
    */
    public function getKioskModeAllowTouchscreen(): ?bool {
        return $this->kioskModeAllowTouchscreen;
    }

    /**
     * Gets the kioskModeAllowVoiceOverSettings property value. Indicates whether or not to allow access to the voice over settings while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeAllowVoiceOverSettings(): ?bool {
        return $this->kioskModeAllowVoiceOverSettings;
    }

    /**
     * Gets the kioskModeAllowVolumeButtons property value. Indicates whether or not to allow use of the volume buttons while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockVolumeButtons instead.
     * @return bool|null
    */
    public function getKioskModeAllowVolumeButtons(): ?bool {
        return $this->kioskModeAllowVolumeButtons;
    }

    /**
     * Gets the kioskModeAllowZoomSettings property value. Indicates whether or not to allow access to the zoom settings while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeAllowZoomSettings(): ?bool {
        return $this->kioskModeAllowZoomSettings;
    }

    /**
     * Gets the kioskModeAppStoreUrl property value. URL in the app store to the app to use for kiosk mode. Use if KioskModeManagedAppId is not known.
     * @return string|null
    */
    public function getKioskModeAppStoreUrl(): ?string {
        return $this->kioskModeAppStoreUrl;
    }

    /**
     * Gets the kioskModeBuiltInAppId property value. ID for built-in apps to use for kiosk mode. Used when KioskModeManagedAppId and KioskModeAppStoreUrl are not set.
     * @return string|null
    */
    public function getKioskModeBuiltInAppId(): ?string {
        return $this->kioskModeBuiltInAppId;
    }

    /**
     * Gets the kioskModeManagedAppId property value. Managed app id of the app to use for kiosk mode. If KioskModeManagedAppId is specified then KioskModeAppStoreUrl will be ignored.
     * @return string|null
    */
    public function getKioskModeManagedAppId(): ?string {
        return $this->kioskModeManagedAppId;
    }

    /**
     * Gets the kioskModeRequireAssistiveTouch property value. Indicates whether or not to require assistive touch while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeRequireAssistiveTouch(): ?bool {
        return $this->kioskModeRequireAssistiveTouch;
    }

    /**
     * Gets the kioskModeRequireColorInversion property value. Indicates whether or not to require color inversion while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeRequireColorInversion(): ?bool {
        return $this->kioskModeRequireColorInversion;
    }

    /**
     * Gets the kioskModeRequireMonoAudio property value. Indicates whether or not to require mono audio while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeRequireMonoAudio(): ?bool {
        return $this->kioskModeRequireMonoAudio;
    }

    /**
     * Gets the kioskModeRequireVoiceOver property value. Indicates whether or not to require voice over while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeRequireVoiceOver(): ?bool {
        return $this->kioskModeRequireVoiceOver;
    }

    /**
     * Gets the kioskModeRequireZoom property value. Indicates whether or not to require zoom while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeRequireZoom(): ?bool {
        return $this->kioskModeRequireZoom;
    }

    /**
     * Gets the lockScreenBlockControlCenter property value. Indicates whether or not to block the user from using control center on the lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockControlCenter(): ?bool {
        return $this->lockScreenBlockControlCenter;
    }

    /**
     * Gets the lockScreenBlockNotificationView property value. Indicates whether or not to block the user from using the notification view on the lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockNotificationView(): ?bool {
        return $this->lockScreenBlockNotificationView;
    }

    /**
     * Gets the lockScreenBlockPassbook property value. Indicates whether or not to block the user from using passbook when the device is locked.
     * @return bool|null
    */
    public function getLockScreenBlockPassbook(): ?bool {
        return $this->lockScreenBlockPassbook;
    }

    /**
     * Gets the lockScreenBlockTodayView property value. Indicates whether or not to block the user from using the Today View on the lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockTodayView(): ?bool {
        return $this->lockScreenBlockTodayView;
    }

    /**
     * Gets the mediaContentRatingApps property value. Apps rating as in media content
     * @return RatingAppsType|null
    */
    public function getMediaContentRatingApps(): ?RatingAppsType {
        return $this->mediaContentRatingApps;
    }

    /**
     * Gets the mediaContentRatingAustralia property value. Media content rating settings for Australia
     * @return MediaContentRatingAustralia|null
    */
    public function getMediaContentRatingAustralia(): ?MediaContentRatingAustralia {
        return $this->mediaContentRatingAustralia;
    }

    /**
     * Gets the mediaContentRatingCanada property value. Media content rating settings for Canada
     * @return MediaContentRatingCanada|null
    */
    public function getMediaContentRatingCanada(): ?MediaContentRatingCanada {
        return $this->mediaContentRatingCanada;
    }

    /**
     * Gets the mediaContentRatingFrance property value. Media content rating settings for France
     * @return MediaContentRatingFrance|null
    */
    public function getMediaContentRatingFrance(): ?MediaContentRatingFrance {
        return $this->mediaContentRatingFrance;
    }

    /**
     * Gets the mediaContentRatingGermany property value. Media content rating settings for Germany
     * @return MediaContentRatingGermany|null
    */
    public function getMediaContentRatingGermany(): ?MediaContentRatingGermany {
        return $this->mediaContentRatingGermany;
    }

    /**
     * Gets the mediaContentRatingIreland property value. Media content rating settings for Ireland
     * @return MediaContentRatingIreland|null
    */
    public function getMediaContentRatingIreland(): ?MediaContentRatingIreland {
        return $this->mediaContentRatingIreland;
    }

    /**
     * Gets the mediaContentRatingJapan property value. Media content rating settings for Japan
     * @return MediaContentRatingJapan|null
    */
    public function getMediaContentRatingJapan(): ?MediaContentRatingJapan {
        return $this->mediaContentRatingJapan;
    }

    /**
     * Gets the mediaContentRatingNewZealand property value. Media content rating settings for New Zealand
     * @return MediaContentRatingNewZealand|null
    */
    public function getMediaContentRatingNewZealand(): ?MediaContentRatingNewZealand {
        return $this->mediaContentRatingNewZealand;
    }

    /**
     * Gets the mediaContentRatingUnitedKingdom property value. Media content rating settings for United Kingdom
     * @return MediaContentRatingUnitedKingdom|null
    */
    public function getMediaContentRatingUnitedKingdom(): ?MediaContentRatingUnitedKingdom {
        return $this->mediaContentRatingUnitedKingdom;
    }

    /**
     * Gets the mediaContentRatingUnitedStates property value. Media content rating settings for United States
     * @return MediaContentRatingUnitedStates|null
    */
    public function getMediaContentRatingUnitedStates(): ?MediaContentRatingUnitedStates {
        return $this->mediaContentRatingUnitedStates;
    }

    /**
     * Gets the messagesBlocked property value. Indicates whether or not to block the user from using the Messages app on the supervised device.
     * @return bool|null
    */
    public function getMessagesBlocked(): ?bool {
        return $this->messagesBlocked;
    }

    /**
     * Gets the networkUsageRules property value. List of managed apps and the network rules that applies to them. This collection can contain a maximum of 1000 elements.
     * @return array<IosNetworkUsageRule>|null
    */
    public function getNetworkUsageRules(): ?array {
        return $this->networkUsageRules;
    }

    /**
     * Gets the notificationsBlockSettingsModification property value. Indicates whether or not to allow notifications settings modification (iOS 9.3 and later).
     * @return bool|null
    */
    public function getNotificationsBlockSettingsModification(): ?bool {
        return $this->notificationsBlockSettingsModification;
    }

    /**
     * Gets the passcodeBlockFingerprintModification property value. Block modification of registered Touch ID fingerprints when in supervised mode.
     * @return bool|null
    */
    public function getPasscodeBlockFingerprintModification(): ?bool {
        return $this->passcodeBlockFingerprintModification;
    }

    /**
     * Gets the passcodeBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     * @return bool|null
    */
    public function getPasscodeBlockFingerprintUnlock(): ?bool {
        return $this->passcodeBlockFingerprintUnlock;
    }

    /**
     * Gets the passcodeBlockModification property value. Indicates whether or not to allow passcode modification on the supervised device (iOS 9.0 and later).
     * @return bool|null
    */
    public function getPasscodeBlockModification(): ?bool {
        return $this->passcodeBlockModification;
    }

    /**
     * Gets the passcodeBlockSimple property value. Indicates whether or not to block simple passcodes.
     * @return bool|null
    */
    public function getPasscodeBlockSimple(): ?bool {
        return $this->passcodeBlockSimple;
    }

    /**
     * Gets the passcodeExpirationDays property value. Number of days before the passcode expires. Valid values 1 to 65535
     * @return int|null
    */
    public function getPasscodeExpirationDays(): ?int {
        return $this->passcodeExpirationDays;
    }

    /**
     * Gets the passcodeMinimumCharacterSetCount property value. Number of character sets a passcode must contain. Valid values 0 to 4
     * @return int|null
    */
    public function getPasscodeMinimumCharacterSetCount(): ?int {
        return $this->passcodeMinimumCharacterSetCount;
    }

    /**
     * Gets the passcodeMinimumLength property value. Minimum length of passcode. Valid values 4 to 14
     * @return int|null
    */
    public function getPasscodeMinimumLength(): ?int {
        return $this->passcodeMinimumLength;
    }

    /**
     * Gets the passcodeMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a passcode is required.
     * @return int|null
    */
    public function getPasscodeMinutesOfInactivityBeforeLock(): ?int {
        return $this->passcodeMinutesOfInactivityBeforeLock;
    }

    /**
     * Gets the passcodeMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasscodeMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->passcodeMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the passcodePreviousPasscodeBlockCount property value. Number of previous passcodes to block. Valid values 1 to 24
     * @return int|null
    */
    public function getPasscodePreviousPasscodeBlockCount(): ?int {
        return $this->passcodePreviousPasscodeBlockCount;
    }

    /**
     * Gets the passcodeRequired property value. Indicates whether or not to require a passcode.
     * @return bool|null
    */
    public function getPasscodeRequired(): ?bool {
        return $this->passcodeRequired;
    }

    /**
     * Gets the passcodeRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasscodeRequiredType(): ?RequiredPasswordType {
        return $this->passcodeRequiredType;
    }

    /**
     * Gets the passcodeSignInFailureCountBeforeWipe property value. Number of sign in failures allowed before wiping the device. Valid values 2 to 11
     * @return int|null
    */
    public function getPasscodeSignInFailureCountBeforeWipe(): ?int {
        return $this->passcodeSignInFailureCountBeforeWipe;
    }

    /**
     * Gets the podcastsBlocked property value. Indicates whether or not to block the user from using podcasts on the supervised device (iOS 8.0 and later).
     * @return bool|null
    */
    public function getPodcastsBlocked(): ?bool {
        return $this->podcastsBlocked;
    }

    /**
     * Gets the safariBlockAutofill property value. Indicates whether or not to block the user from using Auto fill in Safari. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getSafariBlockAutofill(): ?bool {
        return $this->safariBlockAutofill;
    }

    /**
     * Gets the safariBlocked property value. Indicates whether or not to block the user from using Safari. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getSafariBlocked(): ?bool {
        return $this->safariBlocked;
    }

    /**
     * Gets the safariBlockJavaScript property value. Indicates whether or not to block JavaScript in Safari.
     * @return bool|null
    */
    public function getSafariBlockJavaScript(): ?bool {
        return $this->safariBlockJavaScript;
    }

    /**
     * Gets the safariBlockPopups property value. Indicates whether or not to block popups in Safari.
     * @return bool|null
    */
    public function getSafariBlockPopups(): ?bool {
        return $this->safariBlockPopups;
    }

    /**
     * Gets the safariCookieSettings property value. Web Browser Cookie Settings.
     * @return WebBrowserCookieSettings|null
    */
    public function getSafariCookieSettings(): ?WebBrowserCookieSettings {
        return $this->safariCookieSettings;
    }

    /**
     * Gets the safariManagedDomains property value. URLs matching the patterns listed here will be considered managed.
     * @return array<string>|null
    */
    public function getSafariManagedDomains(): ?array {
        return $this->safariManagedDomains;
    }

    /**
     * Gets the safariPasswordAutoFillDomains property value. Users can save passwords in Safari only from URLs matching the patterns listed here. Applies to devices in supervised mode (iOS 9.3 and later).
     * @return array<string>|null
    */
    public function getSafariPasswordAutoFillDomains(): ?array {
        return $this->safariPasswordAutoFillDomains;
    }

    /**
     * Gets the safariRequireFraudWarning property value. Indicates whether or not to require fraud warning in Safari.
     * @return bool|null
    */
    public function getSafariRequireFraudWarning(): ?bool {
        return $this->safariRequireFraudWarning;
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to block the user from taking Screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->screenCaptureBlocked;
    }

    /**
     * Gets the siriBlocked property value. Indicates whether or not to block the user from using Siri.
     * @return bool|null
    */
    public function getSiriBlocked(): ?bool {
        return $this->siriBlocked;
    }

    /**
     * Gets the siriBlockedWhenLocked property value. Indicates whether or not to block the user from using Siri when locked.
     * @return bool|null
    */
    public function getSiriBlockedWhenLocked(): ?bool {
        return $this->siriBlockedWhenLocked;
    }

    /**
     * Gets the siriBlockUserGeneratedContent property value. Indicates whether or not to block Siri from querying user-generated content when used on a supervised device.
     * @return bool|null
    */
    public function getSiriBlockUserGeneratedContent(): ?bool {
        return $this->siriBlockUserGeneratedContent;
    }

    /**
     * Gets the siriRequireProfanityFilter property value. Indicates whether or not to prevent Siri from dictating, or speaking profane language on supervised device.
     * @return bool|null
    */
    public function getSiriRequireProfanityFilter(): ?bool {
        return $this->siriRequireProfanityFilter;
    }

    /**
     * Gets the spotlightBlockInternetResults property value. Indicates whether or not to block Spotlight search from returning internet results on supervised device.
     * @return bool|null
    */
    public function getSpotlightBlockInternetResults(): ?bool {
        return $this->spotlightBlockInternetResults;
    }

    /**
     * Gets the voiceDialingBlocked property value. Indicates whether or not to block voice dialing.
     * @return bool|null
    */
    public function getVoiceDialingBlocked(): ?bool {
        return $this->voiceDialingBlocked;
    }

    /**
     * Gets the wallpaperBlockModification property value. Indicates whether or not to allow wallpaper modification on supervised device (iOS 9.0 and later) .
     * @return bool|null
    */
    public function getWallpaperBlockModification(): ?bool {
        return $this->wallpaperBlockModification;
    }

    /**
     * Gets the wiFiConnectOnlyToConfiguredNetworks property value. Indicates whether or not to force the device to use only Wi-Fi networks from configuration profiles when the device is in supervised mode. Available for devices running iOS and iPadOS versions 14.4 and earlier. Devices running 14.5+ should use the setting, 'WiFiConnectToAllowedNetworksOnlyForced.
     * @return bool|null
    */
    public function getWiFiConnectOnlyToConfiguredNetworks(): ?bool {
        return $this->wiFiConnectOnlyToConfiguredNetworks;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountBlockModification', $this->accountBlockModification);
        $writer->writeBooleanValue('activationLockAllowWhenSupervised', $this->activationLockAllowWhenSupervised);
        $writer->writeBooleanValue('airDropBlocked', $this->airDropBlocked);
        $writer->writeBooleanValue('airDropForceUnmanagedDropTarget', $this->airDropForceUnmanagedDropTarget);
        $writer->writeBooleanValue('airPlayForcePairingPasswordForOutgoingRequests', $this->airPlayForcePairingPasswordForOutgoingRequests);
        $writer->writeBooleanValue('appleNewsBlocked', $this->appleNewsBlocked);
        $writer->writeBooleanValue('appleWatchBlockPairing', $this->appleWatchBlockPairing);
        $writer->writeBooleanValue('appleWatchForceWristDetection', $this->appleWatchForceWristDetection);
        $writer->writeCollectionOfObjectValues('appsSingleAppModeList', $this->appsSingleAppModeList);
        $writer->writeBooleanValue('appStoreBlockAutomaticDownloads', $this->appStoreBlockAutomaticDownloads);
        $writer->writeBooleanValue('appStoreBlocked', $this->appStoreBlocked);
        $writer->writeBooleanValue('appStoreBlockInAppPurchases', $this->appStoreBlockInAppPurchases);
        $writer->writeBooleanValue('appStoreBlockUIAppInstallation', $this->appStoreBlockUIAppInstallation);
        $writer->writeBooleanValue('appStoreRequirePassword', $this->appStoreRequirePassword);
        $writer->writeCollectionOfObjectValues('appsVisibilityList', $this->appsVisibilityList);
        $writer->writeEnumValue('appsVisibilityListType', $this->appsVisibilityListType);
        $writer->writeBooleanValue('bluetoothBlockModification', $this->bluetoothBlockModification);
        $writer->writeBooleanValue('cameraBlocked', $this->cameraBlocked);
        $writer->writeBooleanValue('cellularBlockDataRoaming', $this->cellularBlockDataRoaming);
        $writer->writeBooleanValue('cellularBlockGlobalBackgroundFetchWhileRoaming', $this->cellularBlockGlobalBackgroundFetchWhileRoaming);
        $writer->writeBooleanValue('cellularBlockPerAppDataModification', $this->cellularBlockPerAppDataModification);
        $writer->writeBooleanValue('cellularBlockPersonalHotspot', $this->cellularBlockPersonalHotspot);
        $writer->writeBooleanValue('cellularBlockVoiceRoaming', $this->cellularBlockVoiceRoaming);
        $writer->writeBooleanValue('certificatesBlockUntrustedTlsCertificates', $this->certificatesBlockUntrustedTlsCertificates);
        $writer->writeBooleanValue('classroomAppBlockRemoteScreenObservation', $this->classroomAppBlockRemoteScreenObservation);
        $writer->writeBooleanValue('classroomAppForceUnpromptedScreenObservation', $this->classroomAppForceUnpromptedScreenObservation);
        $writer->writeEnumValue('compliantAppListType', $this->compliantAppListType);
        $writer->writeCollectionOfObjectValues('compliantAppsList', $this->compliantAppsList);
        $writer->writeBooleanValue('configurationProfileBlockChanges', $this->configurationProfileBlockChanges);
        $writer->writeBooleanValue('definitionLookupBlocked', $this->definitionLookupBlocked);
        $writer->writeBooleanValue('deviceBlockEnableRestrictions', $this->deviceBlockEnableRestrictions);
        $writer->writeBooleanValue('deviceBlockEraseContentAndSettings', $this->deviceBlockEraseContentAndSettings);
        $writer->writeBooleanValue('deviceBlockNameModification', $this->deviceBlockNameModification);
        $writer->writeBooleanValue('diagnosticDataBlockSubmission', $this->diagnosticDataBlockSubmission);
        $writer->writeBooleanValue('diagnosticDataBlockSubmissionModification', $this->diagnosticDataBlockSubmissionModification);
        $writer->writeBooleanValue('documentsBlockManagedDocumentsInUnmanagedApps', $this->documentsBlockManagedDocumentsInUnmanagedApps);
        $writer->writeBooleanValue('documentsBlockUnmanagedDocumentsInManagedApps', $this->documentsBlockUnmanagedDocumentsInManagedApps);
        $writer->writeCollectionOfPrimitiveValues('emailInDomainSuffixes', $this->emailInDomainSuffixes);
        $writer->writeBooleanValue('enterpriseAppBlockTrust', $this->enterpriseAppBlockTrust);
        $writer->writeBooleanValue('enterpriseAppBlockTrustModification', $this->enterpriseAppBlockTrustModification);
        $writer->writeBooleanValue('faceTimeBlocked', $this->faceTimeBlocked);
        $writer->writeBooleanValue('findMyFriendsBlocked', $this->findMyFriendsBlocked);
        $writer->writeBooleanValue('gameCenterBlocked', $this->gameCenterBlocked);
        $writer->writeBooleanValue('gamingBlockGameCenterFriends', $this->gamingBlockGameCenterFriends);
        $writer->writeBooleanValue('gamingBlockMultiplayer', $this->gamingBlockMultiplayer);
        $writer->writeBooleanValue('hostPairingBlocked', $this->hostPairingBlocked);
        $writer->writeBooleanValue('iBooksStoreBlocked', $this->iBooksStoreBlocked);
        $writer->writeBooleanValue('iBooksStoreBlockErotica', $this->iBooksStoreBlockErotica);
        $writer->writeBooleanValue('iCloudBlockActivityContinuation', $this->iCloudBlockActivityContinuation);
        $writer->writeBooleanValue('iCloudBlockBackup', $this->iCloudBlockBackup);
        $writer->writeBooleanValue('iCloudBlockDocumentSync', $this->iCloudBlockDocumentSync);
        $writer->writeBooleanValue('iCloudBlockManagedAppsSync', $this->iCloudBlockManagedAppsSync);
        $writer->writeBooleanValue('iCloudBlockPhotoLibrary', $this->iCloudBlockPhotoLibrary);
        $writer->writeBooleanValue('iCloudBlockPhotoStreamSync', $this->iCloudBlockPhotoStreamSync);
        $writer->writeBooleanValue('iCloudBlockSharedPhotoStream', $this->iCloudBlockSharedPhotoStream);
        $writer->writeBooleanValue('iCloudRequireEncryptedBackup', $this->iCloudRequireEncryptedBackup);
        $writer->writeBooleanValue('iTunesBlockExplicitContent', $this->iTunesBlockExplicitContent);
        $writer->writeBooleanValue('iTunesBlockMusicService', $this->iTunesBlockMusicService);
        $writer->writeBooleanValue('iTunesBlockRadio', $this->iTunesBlockRadio);
        $writer->writeBooleanValue('keyboardBlockAutoCorrect', $this->keyboardBlockAutoCorrect);
        $writer->writeBooleanValue('keyboardBlockDictation', $this->keyboardBlockDictation);
        $writer->writeBooleanValue('keyboardBlockPredictive', $this->keyboardBlockPredictive);
        $writer->writeBooleanValue('keyboardBlockShortcuts', $this->keyboardBlockShortcuts);
        $writer->writeBooleanValue('keyboardBlockSpellCheck', $this->keyboardBlockSpellCheck);
        $writer->writeBooleanValue('kioskModeAllowAssistiveSpeak', $this->kioskModeAllowAssistiveSpeak);
        $writer->writeBooleanValue('kioskModeAllowAssistiveTouchSettings', $this->kioskModeAllowAssistiveTouchSettings);
        $writer->writeBooleanValue('kioskModeAllowAutoLock', $this->kioskModeAllowAutoLock);
        $writer->writeBooleanValue('kioskModeAllowColorInversionSettings', $this->kioskModeAllowColorInversionSettings);
        $writer->writeBooleanValue('kioskModeAllowRingerSwitch', $this->kioskModeAllowRingerSwitch);
        $writer->writeBooleanValue('kioskModeAllowScreenRotation', $this->kioskModeAllowScreenRotation);
        $writer->writeBooleanValue('kioskModeAllowSleepButton', $this->kioskModeAllowSleepButton);
        $writer->writeBooleanValue('kioskModeAllowTouchscreen', $this->kioskModeAllowTouchscreen);
        $writer->writeBooleanValue('kioskModeAllowVoiceOverSettings', $this->kioskModeAllowVoiceOverSettings);
        $writer->writeBooleanValue('kioskModeAllowVolumeButtons', $this->kioskModeAllowVolumeButtons);
        $writer->writeBooleanValue('kioskModeAllowZoomSettings', $this->kioskModeAllowZoomSettings);
        $writer->writeStringValue('kioskModeAppStoreUrl', $this->kioskModeAppStoreUrl);
        $writer->writeStringValue('kioskModeBuiltInAppId', $this->kioskModeBuiltInAppId);
        $writer->writeStringValue('kioskModeManagedAppId', $this->kioskModeManagedAppId);
        $writer->writeBooleanValue('kioskModeRequireAssistiveTouch', $this->kioskModeRequireAssistiveTouch);
        $writer->writeBooleanValue('kioskModeRequireColorInversion', $this->kioskModeRequireColorInversion);
        $writer->writeBooleanValue('kioskModeRequireMonoAudio', $this->kioskModeRequireMonoAudio);
        $writer->writeBooleanValue('kioskModeRequireVoiceOver', $this->kioskModeRequireVoiceOver);
        $writer->writeBooleanValue('kioskModeRequireZoom', $this->kioskModeRequireZoom);
        $writer->writeBooleanValue('lockScreenBlockControlCenter', $this->lockScreenBlockControlCenter);
        $writer->writeBooleanValue('lockScreenBlockNotificationView', $this->lockScreenBlockNotificationView);
        $writer->writeBooleanValue('lockScreenBlockPassbook', $this->lockScreenBlockPassbook);
        $writer->writeBooleanValue('lockScreenBlockTodayView', $this->lockScreenBlockTodayView);
        $writer->writeEnumValue('mediaContentRatingApps', $this->mediaContentRatingApps);
        $writer->writeObjectValue('mediaContentRatingAustralia', $this->mediaContentRatingAustralia);
        $writer->writeObjectValue('mediaContentRatingCanada', $this->mediaContentRatingCanada);
        $writer->writeObjectValue('mediaContentRatingFrance', $this->mediaContentRatingFrance);
        $writer->writeObjectValue('mediaContentRatingGermany', $this->mediaContentRatingGermany);
        $writer->writeObjectValue('mediaContentRatingIreland', $this->mediaContentRatingIreland);
        $writer->writeObjectValue('mediaContentRatingJapan', $this->mediaContentRatingJapan);
        $writer->writeObjectValue('mediaContentRatingNewZealand', $this->mediaContentRatingNewZealand);
        $writer->writeObjectValue('mediaContentRatingUnitedKingdom', $this->mediaContentRatingUnitedKingdom);
        $writer->writeObjectValue('mediaContentRatingUnitedStates', $this->mediaContentRatingUnitedStates);
        $writer->writeBooleanValue('messagesBlocked', $this->messagesBlocked);
        $writer->writeCollectionOfObjectValues('networkUsageRules', $this->networkUsageRules);
        $writer->writeBooleanValue('notificationsBlockSettingsModification', $this->notificationsBlockSettingsModification);
        $writer->writeBooleanValue('passcodeBlockFingerprintModification', $this->passcodeBlockFingerprintModification);
        $writer->writeBooleanValue('passcodeBlockFingerprintUnlock', $this->passcodeBlockFingerprintUnlock);
        $writer->writeBooleanValue('passcodeBlockModification', $this->passcodeBlockModification);
        $writer->writeBooleanValue('passcodeBlockSimple', $this->passcodeBlockSimple);
        $writer->writeIntegerValue('passcodeExpirationDays', $this->passcodeExpirationDays);
        $writer->writeIntegerValue('passcodeMinimumCharacterSetCount', $this->passcodeMinimumCharacterSetCount);
        $writer->writeIntegerValue('passcodeMinimumLength', $this->passcodeMinimumLength);
        $writer->writeIntegerValue('passcodeMinutesOfInactivityBeforeLock', $this->passcodeMinutesOfInactivityBeforeLock);
        $writer->writeIntegerValue('passcodeMinutesOfInactivityBeforeScreenTimeout', $this->passcodeMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('passcodePreviousPasscodeBlockCount', $this->passcodePreviousPasscodeBlockCount);
        $writer->writeBooleanValue('passcodeRequired', $this->passcodeRequired);
        $writer->writeEnumValue('passcodeRequiredType', $this->passcodeRequiredType);
        $writer->writeIntegerValue('passcodeSignInFailureCountBeforeWipe', $this->passcodeSignInFailureCountBeforeWipe);
        $writer->writeBooleanValue('podcastsBlocked', $this->podcastsBlocked);
        $writer->writeBooleanValue('safariBlockAutofill', $this->safariBlockAutofill);
        $writer->writeBooleanValue('safariBlocked', $this->safariBlocked);
        $writer->writeBooleanValue('safariBlockJavaScript', $this->safariBlockJavaScript);
        $writer->writeBooleanValue('safariBlockPopups', $this->safariBlockPopups);
        $writer->writeEnumValue('safariCookieSettings', $this->safariCookieSettings);
        $writer->writeCollectionOfPrimitiveValues('safariManagedDomains', $this->safariManagedDomains);
        $writer->writeCollectionOfPrimitiveValues('safariPasswordAutoFillDomains', $this->safariPasswordAutoFillDomains);
        $writer->writeBooleanValue('safariRequireFraudWarning', $this->safariRequireFraudWarning);
        $writer->writeBooleanValue('screenCaptureBlocked', $this->screenCaptureBlocked);
        $writer->writeBooleanValue('siriBlocked', $this->siriBlocked);
        $writer->writeBooleanValue('siriBlockedWhenLocked', $this->siriBlockedWhenLocked);
        $writer->writeBooleanValue('siriBlockUserGeneratedContent', $this->siriBlockUserGeneratedContent);
        $writer->writeBooleanValue('siriRequireProfanityFilter', $this->siriRequireProfanityFilter);
        $writer->writeBooleanValue('spotlightBlockInternetResults', $this->spotlightBlockInternetResults);
        $writer->writeBooleanValue('voiceDialingBlocked', $this->voiceDialingBlocked);
        $writer->writeBooleanValue('wallpaperBlockModification', $this->wallpaperBlockModification);
        $writer->writeBooleanValue('wiFiConnectOnlyToConfiguredNetworks', $this->wiFiConnectOnlyToConfiguredNetworks);
    }

    /**
     * Sets the accountBlockModification property value. Indicates whether or not to allow account modification when the device is in supervised mode.
     *  @param bool|null $value Value to set for the accountBlockModification property.
    */
    public function setAccountBlockModification(?bool $value ): void {
        $this->accountBlockModification = $value;
    }

    /**
     * Sets the activationLockAllowWhenSupervised property value. Indicates whether or not to allow activation lock when the device is in the supervised mode.
     *  @param bool|null $value Value to set for the activationLockAllowWhenSupervised property.
    */
    public function setActivationLockAllowWhenSupervised(?bool $value ): void {
        $this->activationLockAllowWhenSupervised = $value;
    }

    /**
     * Sets the airDropBlocked property value. Indicates whether or not to allow AirDrop when the device is in supervised mode.
     *  @param bool|null $value Value to set for the airDropBlocked property.
    */
    public function setAirDropBlocked(?bool $value ): void {
        $this->airDropBlocked = $value;
    }

    /**
     * Sets the airDropForceUnmanagedDropTarget property value. Indicates whether or not to cause AirDrop to be considered an unmanaged drop target (iOS 9.0 and later).
     *  @param bool|null $value Value to set for the airDropForceUnmanagedDropTarget property.
    */
    public function setAirDropForceUnmanagedDropTarget(?bool $value ): void {
        $this->airDropForceUnmanagedDropTarget = $value;
    }

    /**
     * Sets the airPlayForcePairingPasswordForOutgoingRequests property value. Indicates whether or not to enforce all devices receiving AirPlay requests from this device to use a pairing password.
     *  @param bool|null $value Value to set for the airPlayForcePairingPasswordForOutgoingRequests property.
    */
    public function setAirPlayForcePairingPasswordForOutgoingRequests(?bool $value ): void {
        $this->airPlayForcePairingPasswordForOutgoingRequests = $value;
    }

    /**
     * Sets the appleNewsBlocked property value. Indicates whether or not to block the user from using News when the device is in supervised mode (iOS 9.0 and later).
     *  @param bool|null $value Value to set for the appleNewsBlocked property.
    */
    public function setAppleNewsBlocked(?bool $value ): void {
        $this->appleNewsBlocked = $value;
    }

    /**
     * Sets the appleWatchBlockPairing property value. Indicates whether or not to allow Apple Watch pairing when the device is in supervised mode (iOS 9.0 and later).
     *  @param bool|null $value Value to set for the appleWatchBlockPairing property.
    */
    public function setAppleWatchBlockPairing(?bool $value ): void {
        $this->appleWatchBlockPairing = $value;
    }

    /**
     * Sets the appleWatchForceWristDetection property value. Indicates whether or not to force a paired Apple Watch to use Wrist Detection (iOS 8.2 and later).
     *  @param bool|null $value Value to set for the appleWatchForceWristDetection property.
    */
    public function setAppleWatchForceWristDetection(?bool $value ): void {
        $this->appleWatchForceWristDetection = $value;
    }

    /**
     * Sets the appsSingleAppModeList property value. Gets or sets the list of iOS apps allowed to autonomously enter Single App Mode. Supervised only. iOS 7.0 and later. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the appsSingleAppModeList property.
    */
    public function setAppsSingleAppModeList(?array $value ): void {
        $this->appsSingleAppModeList = $value;
    }

    /**
     * Sets the appStoreBlockAutomaticDownloads property value. Indicates whether or not to block the automatic downloading of apps purchased on other devices when the device is in supervised mode (iOS 9.0 and later).
     *  @param bool|null $value Value to set for the appStoreBlockAutomaticDownloads property.
    */
    public function setAppStoreBlockAutomaticDownloads(?bool $value ): void {
        $this->appStoreBlockAutomaticDownloads = $value;
    }

    /**
     * Sets the appStoreBlocked property value. Indicates whether or not to block the user from using the App Store. Requires a supervised device for iOS 13 and later.
     *  @param bool|null $value Value to set for the appStoreBlocked property.
    */
    public function setAppStoreBlocked(?bool $value ): void {
        $this->appStoreBlocked = $value;
    }

    /**
     * Sets the appStoreBlockInAppPurchases property value. Indicates whether or not to block the user from making in app purchases.
     *  @param bool|null $value Value to set for the appStoreBlockInAppPurchases property.
    */
    public function setAppStoreBlockInAppPurchases(?bool $value ): void {
        $this->appStoreBlockInAppPurchases = $value;
    }

    /**
     * Sets the appStoreBlockUIAppInstallation property value. Indicates whether or not to block the App Store app, not restricting installation through Host apps. Applies to supervised mode only (iOS 9.0 and later).
     *  @param bool|null $value Value to set for the appStoreBlockUIAppInstallation property.
    */
    public function setAppStoreBlockUIAppInstallation(?bool $value ): void {
        $this->appStoreBlockUIAppInstallation = $value;
    }

    /**
     * Sets the appStoreRequirePassword property value. Indicates whether or not to require a password when using the app store.
     *  @param bool|null $value Value to set for the appStoreRequirePassword property.
    */
    public function setAppStoreRequirePassword(?bool $value ): void {
        $this->appStoreRequirePassword = $value;
    }

    /**
     * Sets the appsVisibilityList property value. List of apps in the visibility list (either visible/launchable apps list or hidden/unlaunchable apps list, controlled by AppsVisibilityListType) (iOS 9.3 and later). This collection can contain a maximum of 10000 elements.
     *  @param array<AppListItem>|null $value Value to set for the appsVisibilityList property.
    */
    public function setAppsVisibilityList(?array $value ): void {
        $this->appsVisibilityList = $value;
    }

    /**
     * Sets the appsVisibilityListType property value. Possible values of the compliance app list.
     *  @param AppListType|null $value Value to set for the appsVisibilityListType property.
    */
    public function setAppsVisibilityListType(?AppListType $value ): void {
        $this->appsVisibilityListType = $value;
    }

    /**
     * Sets the bluetoothBlockModification property value. Indicates whether or not to allow modification of Bluetooth settings when the device is in supervised mode (iOS 10.0 and later).
     *  @param bool|null $value Value to set for the bluetoothBlockModification property.
    */
    public function setBluetoothBlockModification(?bool $value ): void {
        $this->bluetoothBlockModification = $value;
    }

    /**
     * Sets the cameraBlocked property value. Indicates whether or not to block the user from accessing the camera of the device. Requires a supervised device for iOS 13 and later.
     *  @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value ): void {
        $this->cameraBlocked = $value;
    }

    /**
     * Sets the cellularBlockDataRoaming property value. Indicates whether or not to block data roaming.
     *  @param bool|null $value Value to set for the cellularBlockDataRoaming property.
    */
    public function setCellularBlockDataRoaming(?bool $value ): void {
        $this->cellularBlockDataRoaming = $value;
    }

    /**
     * Sets the cellularBlockGlobalBackgroundFetchWhileRoaming property value. Indicates whether or not to block global background fetch while roaming.
     *  @param bool|null $value Value to set for the cellularBlockGlobalBackgroundFetchWhileRoaming property.
    */
    public function setCellularBlockGlobalBackgroundFetchWhileRoaming(?bool $value ): void {
        $this->cellularBlockGlobalBackgroundFetchWhileRoaming = $value;
    }

    /**
     * Sets the cellularBlockPerAppDataModification property value. Indicates whether or not to allow changes to cellular app data usage settings when the device is in supervised mode.
     *  @param bool|null $value Value to set for the cellularBlockPerAppDataModification property.
    */
    public function setCellularBlockPerAppDataModification(?bool $value ): void {
        $this->cellularBlockPerAppDataModification = $value;
    }

    /**
     * Sets the cellularBlockPersonalHotspot property value. Indicates whether or not to block Personal Hotspot.
     *  @param bool|null $value Value to set for the cellularBlockPersonalHotspot property.
    */
    public function setCellularBlockPersonalHotspot(?bool $value ): void {
        $this->cellularBlockPersonalHotspot = $value;
    }

    /**
     * Sets the cellularBlockVoiceRoaming property value. Indicates whether or not to block voice roaming.
     *  @param bool|null $value Value to set for the cellularBlockVoiceRoaming property.
    */
    public function setCellularBlockVoiceRoaming(?bool $value ): void {
        $this->cellularBlockVoiceRoaming = $value;
    }

    /**
     * Sets the certificatesBlockUntrustedTlsCertificates property value. Indicates whether or not to block untrusted TLS certificates.
     *  @param bool|null $value Value to set for the certificatesBlockUntrustedTlsCertificates property.
    */
    public function setCertificatesBlockUntrustedTlsCertificates(?bool $value ): void {
        $this->certificatesBlockUntrustedTlsCertificates = $value;
    }

    /**
     * Sets the classroomAppBlockRemoteScreenObservation property value. Indicates whether or not to allow remote screen observation by Classroom app when the device is in supervised mode (iOS 9.3 and later).
     *  @param bool|null $value Value to set for the classroomAppBlockRemoteScreenObservation property.
    */
    public function setClassroomAppBlockRemoteScreenObservation(?bool $value ): void {
        $this->classroomAppBlockRemoteScreenObservation = $value;
    }

    /**
     * Sets the classroomAppForceUnpromptedScreenObservation property value. Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting when the device is in supervised mode.
     *  @param bool|null $value Value to set for the classroomAppForceUnpromptedScreenObservation property.
    */
    public function setClassroomAppForceUnpromptedScreenObservation(?bool $value ): void {
        $this->classroomAppForceUnpromptedScreenObservation = $value;
    }

    /**
     * Sets the compliantAppListType property value. Possible values of the compliance app list.
     *  @param AppListType|null $value Value to set for the compliantAppListType property.
    */
    public function setCompliantAppListType(?AppListType $value ): void {
        $this->compliantAppListType = $value;
    }

    /**
     * Sets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     *  @param array<AppListItem>|null $value Value to set for the compliantAppsList property.
    */
    public function setCompliantAppsList(?array $value ): void {
        $this->compliantAppsList = $value;
    }

    /**
     * Sets the configurationProfileBlockChanges property value. Indicates whether or not to block the user from installing configuration profiles and certificates interactively when the device is in supervised mode.
     *  @param bool|null $value Value to set for the configurationProfileBlockChanges property.
    */
    public function setConfigurationProfileBlockChanges(?bool $value ): void {
        $this->configurationProfileBlockChanges = $value;
    }

    /**
     * Sets the definitionLookupBlocked property value. Indicates whether or not to block definition lookup when the device is in supervised mode (iOS 8.1.3 and later ).
     *  @param bool|null $value Value to set for the definitionLookupBlocked property.
    */
    public function setDefinitionLookupBlocked(?bool $value ): void {
        $this->definitionLookupBlocked = $value;
    }

    /**
     * Sets the deviceBlockEnableRestrictions property value. Indicates whether or not to allow the user to enables restrictions in the device settings when the device is in supervised mode.
     *  @param bool|null $value Value to set for the deviceBlockEnableRestrictions property.
    */
    public function setDeviceBlockEnableRestrictions(?bool $value ): void {
        $this->deviceBlockEnableRestrictions = $value;
    }

    /**
     * Sets the deviceBlockEraseContentAndSettings property value. Indicates whether or not to allow the use of the 'Erase all content and settings' option on the device when the device is in supervised mode.
     *  @param bool|null $value Value to set for the deviceBlockEraseContentAndSettings property.
    */
    public function setDeviceBlockEraseContentAndSettings(?bool $value ): void {
        $this->deviceBlockEraseContentAndSettings = $value;
    }

    /**
     * Sets the deviceBlockNameModification property value. Indicates whether or not to allow device name modification when the device is in supervised mode (iOS 9.0 and later).
     *  @param bool|null $value Value to set for the deviceBlockNameModification property.
    */
    public function setDeviceBlockNameModification(?bool $value ): void {
        $this->deviceBlockNameModification = $value;
    }

    /**
     * Sets the diagnosticDataBlockSubmission property value. Indicates whether or not to block diagnostic data submission.
     *  @param bool|null $value Value to set for the diagnosticDataBlockSubmission property.
    */
    public function setDiagnosticDataBlockSubmission(?bool $value ): void {
        $this->diagnosticDataBlockSubmission = $value;
    }

    /**
     * Sets the diagnosticDataBlockSubmissionModification property value. Indicates whether or not to allow diagnostics submission settings modification when the device is in supervised mode (iOS 9.3.2 and later).
     *  @param bool|null $value Value to set for the diagnosticDataBlockSubmissionModification property.
    */
    public function setDiagnosticDataBlockSubmissionModification(?bool $value ): void {
        $this->diagnosticDataBlockSubmissionModification = $value;
    }

    /**
     * Sets the documentsBlockManagedDocumentsInUnmanagedApps property value. Indicates whether or not to block the user from viewing managed documents in unmanaged apps.
     *  @param bool|null $value Value to set for the documentsBlockManagedDocumentsInUnmanagedApps property.
    */
    public function setDocumentsBlockManagedDocumentsInUnmanagedApps(?bool $value ): void {
        $this->documentsBlockManagedDocumentsInUnmanagedApps = $value;
    }

    /**
     * Sets the documentsBlockUnmanagedDocumentsInManagedApps property value. Indicates whether or not to block the user from viewing unmanaged documents in managed apps.
     *  @param bool|null $value Value to set for the documentsBlockUnmanagedDocumentsInManagedApps property.
    */
    public function setDocumentsBlockUnmanagedDocumentsInManagedApps(?bool $value ): void {
        $this->documentsBlockUnmanagedDocumentsInManagedApps = $value;
    }

    /**
     * Sets the emailInDomainSuffixes property value. An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     *  @param array<string>|null $value Value to set for the emailInDomainSuffixes property.
    */
    public function setEmailInDomainSuffixes(?array $value ): void {
        $this->emailInDomainSuffixes = $value;
    }

    /**
     * Sets the enterpriseAppBlockTrust property value. Indicates whether or not to block the user from trusting an enterprise app.
     *  @param bool|null $value Value to set for the enterpriseAppBlockTrust property.
    */
    public function setEnterpriseAppBlockTrust(?bool $value ): void {
        $this->enterpriseAppBlockTrust = $value;
    }

    /**
     * Sets the enterpriseAppBlockTrustModification property value. [Deprecated] Configuring this setting and setting the value to 'true' has no effect on the device.
     *  @param bool|null $value Value to set for the enterpriseAppBlockTrustModification property.
    */
    public function setEnterpriseAppBlockTrustModification(?bool $value ): void {
        $this->enterpriseAppBlockTrustModification = $value;
    }

    /**
     * Sets the faceTimeBlocked property value. Indicates whether or not to block the user from using FaceTime. Requires a supervised device for iOS 13 and later.
     *  @param bool|null $value Value to set for the faceTimeBlocked property.
    */
    public function setFaceTimeBlocked(?bool $value ): void {
        $this->faceTimeBlocked = $value;
    }

    /**
     * Sets the findMyFriendsBlocked property value. Indicates whether or not to block changes to Find My Friends when the device is in supervised mode.
     *  @param bool|null $value Value to set for the findMyFriendsBlocked property.
    */
    public function setFindMyFriendsBlocked(?bool $value ): void {
        $this->findMyFriendsBlocked = $value;
    }

    /**
     * Sets the gameCenterBlocked property value. Indicates whether or not to block the user from using Game Center when the device is in supervised mode.
     *  @param bool|null $value Value to set for the gameCenterBlocked property.
    */
    public function setGameCenterBlocked(?bool $value ): void {
        $this->gameCenterBlocked = $value;
    }

    /**
     * Sets the gamingBlockGameCenterFriends property value. Indicates whether or not to block the user from having friends in Game Center. Requires a supervised device for iOS 13 and later.
     *  @param bool|null $value Value to set for the gamingBlockGameCenterFriends property.
    */
    public function setGamingBlockGameCenterFriends(?bool $value ): void {
        $this->gamingBlockGameCenterFriends = $value;
    }

    /**
     * Sets the gamingBlockMultiplayer property value. Indicates whether or not to block the user from using multiplayer gaming. Requires a supervised device for iOS 13 and later.
     *  @param bool|null $value Value to set for the gamingBlockMultiplayer property.
    */
    public function setGamingBlockMultiplayer(?bool $value ): void {
        $this->gamingBlockMultiplayer = $value;
    }

    /**
     * Sets the hostPairingBlocked property value. indicates whether or not to allow host pairing to control the devices an iOS device can pair with when the iOS device is in supervised mode.
     *  @param bool|null $value Value to set for the hostPairingBlocked property.
    */
    public function setHostPairingBlocked(?bool $value ): void {
        $this->hostPairingBlocked = $value;
    }

    /**
     * Sets the iBooksStoreBlocked property value. Indicates whether or not to block the user from using the iBooks Store when the device is in supervised mode.
     *  @param bool|null $value Value to set for the iBooksStoreBlocked property.
    */
    public function setIBooksStoreBlocked(?bool $value ): void {
        $this->iBooksStoreBlocked = $value;
    }

    /**
     * Sets the iBooksStoreBlockErotica property value. Indicates whether or not to block the user from downloading media from the iBookstore that has been tagged as erotica.
     *  @param bool|null $value Value to set for the iBooksStoreBlockErotica property.
    */
    public function setIBooksStoreBlockErotica(?bool $value ): void {
        $this->iBooksStoreBlockErotica = $value;
    }

    /**
     * Sets the iCloudBlockActivityContinuation property value. Indicates whether or not to block the user from continuing work they started on iOS device to another iOS or macOS device.
     *  @param bool|null $value Value to set for the iCloudBlockActivityContinuation property.
    */
    public function setICloudBlockActivityContinuation(?bool $value ): void {
        $this->iCloudBlockActivityContinuation = $value;
    }

    /**
     * Sets the iCloudBlockBackup property value. Indicates whether or not to block iCloud backup. Requires a supervised device for iOS 13 and later.
     *  @param bool|null $value Value to set for the iCloudBlockBackup property.
    */
    public function setICloudBlockBackup(?bool $value ): void {
        $this->iCloudBlockBackup = $value;
    }

    /**
     * Sets the iCloudBlockDocumentSync property value. Indicates whether or not to block iCloud document sync. Requires a supervised device for iOS 13 and later.
     *  @param bool|null $value Value to set for the iCloudBlockDocumentSync property.
    */
    public function setICloudBlockDocumentSync(?bool $value ): void {
        $this->iCloudBlockDocumentSync = $value;
    }

    /**
     * Sets the iCloudBlockManagedAppsSync property value. Indicates whether or not to block Managed Apps Cloud Sync.
     *  @param bool|null $value Value to set for the iCloudBlockManagedAppsSync property.
    */
    public function setICloudBlockManagedAppsSync(?bool $value ): void {
        $this->iCloudBlockManagedAppsSync = $value;
    }

    /**
     * Sets the iCloudBlockPhotoLibrary property value. Indicates whether or not to block iCloud Photo Library.
     *  @param bool|null $value Value to set for the iCloudBlockPhotoLibrary property.
    */
    public function setICloudBlockPhotoLibrary(?bool $value ): void {
        $this->iCloudBlockPhotoLibrary = $value;
    }

    /**
     * Sets the iCloudBlockPhotoStreamSync property value. Indicates whether or not to block iCloud Photo Stream Sync.
     *  @param bool|null $value Value to set for the iCloudBlockPhotoStreamSync property.
    */
    public function setICloudBlockPhotoStreamSync(?bool $value ): void {
        $this->iCloudBlockPhotoStreamSync = $value;
    }

    /**
     * Sets the iCloudBlockSharedPhotoStream property value. Indicates whether or not to block Shared Photo Stream.
     *  @param bool|null $value Value to set for the iCloudBlockSharedPhotoStream property.
    */
    public function setICloudBlockSharedPhotoStream(?bool $value ): void {
        $this->iCloudBlockSharedPhotoStream = $value;
    }

    /**
     * Sets the iCloudRequireEncryptedBackup property value. Indicates whether or not to require backups to iCloud be encrypted.
     *  @param bool|null $value Value to set for the iCloudRequireEncryptedBackup property.
    */
    public function setICloudRequireEncryptedBackup(?bool $value ): void {
        $this->iCloudRequireEncryptedBackup = $value;
    }

    /**
     * Sets the iTunesBlockExplicitContent property value. Indicates whether or not to block the user from accessing explicit content in iTunes and the App Store. Requires a supervised device for iOS 13 and later.
     *  @param bool|null $value Value to set for the iTunesBlockExplicitContent property.
    */
    public function setITunesBlockExplicitContent(?bool $value ): void {
        $this->iTunesBlockExplicitContent = $value;
    }

    /**
     * Sets the iTunesBlockMusicService property value. Indicates whether or not to block Music service and revert Music app to classic mode when the device is in supervised mode (iOS 9.3 and later and macOS 10.12 and later).
     *  @param bool|null $value Value to set for the iTunesBlockMusicService property.
    */
    public function setITunesBlockMusicService(?bool $value ): void {
        $this->iTunesBlockMusicService = $value;
    }

    /**
     * Sets the iTunesBlockRadio property value. Indicates whether or not to block the user from using iTunes Radio when the device is in supervised mode (iOS 9.3 and later).
     *  @param bool|null $value Value to set for the iTunesBlockRadio property.
    */
    public function setITunesBlockRadio(?bool $value ): void {
        $this->iTunesBlockRadio = $value;
    }

    /**
     * Sets the keyboardBlockAutoCorrect property value. Indicates whether or not to block keyboard auto-correction when the device is in supervised mode (iOS 8.1.3 and later).
     *  @param bool|null $value Value to set for the keyboardBlockAutoCorrect property.
    */
    public function setKeyboardBlockAutoCorrect(?bool $value ): void {
        $this->keyboardBlockAutoCorrect = $value;
    }

    /**
     * Sets the keyboardBlockDictation property value. Indicates whether or not to block the user from using dictation input when the device is in supervised mode.
     *  @param bool|null $value Value to set for the keyboardBlockDictation property.
    */
    public function setKeyboardBlockDictation(?bool $value ): void {
        $this->keyboardBlockDictation = $value;
    }

    /**
     * Sets the keyboardBlockPredictive property value. Indicates whether or not to block predictive keyboards when device is in supervised mode (iOS 8.1.3 and later).
     *  @param bool|null $value Value to set for the keyboardBlockPredictive property.
    */
    public function setKeyboardBlockPredictive(?bool $value ): void {
        $this->keyboardBlockPredictive = $value;
    }

    /**
     * Sets the keyboardBlockShortcuts property value. Indicates whether or not to block keyboard shortcuts when the device is in supervised mode (iOS 9.0 and later).
     *  @param bool|null $value Value to set for the keyboardBlockShortcuts property.
    */
    public function setKeyboardBlockShortcuts(?bool $value ): void {
        $this->keyboardBlockShortcuts = $value;
    }

    /**
     * Sets the keyboardBlockSpellCheck property value. Indicates whether or not to block keyboard spell-checking when the device is in supervised mode (iOS 8.1.3 and later).
     *  @param bool|null $value Value to set for the keyboardBlockSpellCheck property.
    */
    public function setKeyboardBlockSpellCheck(?bool $value ): void {
        $this->keyboardBlockSpellCheck = $value;
    }

    /**
     * Sets the kioskModeAllowAssistiveSpeak property value. Indicates whether or not to allow assistive speak while in kiosk mode.
     *  @param bool|null $value Value to set for the kioskModeAllowAssistiveSpeak property.
    */
    public function setKioskModeAllowAssistiveSpeak(?bool $value ): void {
        $this->kioskModeAllowAssistiveSpeak = $value;
    }

    /**
     * Sets the kioskModeAllowAssistiveTouchSettings property value. Indicates whether or not to allow access to the Assistive Touch Settings while in kiosk mode.
     *  @param bool|null $value Value to set for the kioskModeAllowAssistiveTouchSettings property.
    */
    public function setKioskModeAllowAssistiveTouchSettings(?bool $value ): void {
        $this->kioskModeAllowAssistiveTouchSettings = $value;
    }

    /**
     * Sets the kioskModeAllowAutoLock property value. Indicates whether or not to allow device auto lock while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockAutoLock instead.
     *  @param bool|null $value Value to set for the kioskModeAllowAutoLock property.
    */
    public function setKioskModeAllowAutoLock(?bool $value ): void {
        $this->kioskModeAllowAutoLock = $value;
    }

    /**
     * Sets the kioskModeAllowColorInversionSettings property value. Indicates whether or not to allow access to the Color Inversion Settings while in kiosk mode.
     *  @param bool|null $value Value to set for the kioskModeAllowColorInversionSettings property.
    */
    public function setKioskModeAllowColorInversionSettings(?bool $value ): void {
        $this->kioskModeAllowColorInversionSettings = $value;
    }

    /**
     * Sets the kioskModeAllowRingerSwitch property value. Indicates whether or not to allow use of the ringer switch while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockRingerSwitch instead.
     *  @param bool|null $value Value to set for the kioskModeAllowRingerSwitch property.
    */
    public function setKioskModeAllowRingerSwitch(?bool $value ): void {
        $this->kioskModeAllowRingerSwitch = $value;
    }

    /**
     * Sets the kioskModeAllowScreenRotation property value. Indicates whether or not to allow screen rotation while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockScreenRotation instead.
     *  @param bool|null $value Value to set for the kioskModeAllowScreenRotation property.
    */
    public function setKioskModeAllowScreenRotation(?bool $value ): void {
        $this->kioskModeAllowScreenRotation = $value;
    }

    /**
     * Sets the kioskModeAllowSleepButton property value. Indicates whether or not to allow use of the sleep button while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockSleepButton instead.
     *  @param bool|null $value Value to set for the kioskModeAllowSleepButton property.
    */
    public function setKioskModeAllowSleepButton(?bool $value ): void {
        $this->kioskModeAllowSleepButton = $value;
    }

    /**
     * Sets the kioskModeAllowTouchscreen property value. Indicates whether or not to allow use of the touchscreen while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockTouchscreen instead.
     *  @param bool|null $value Value to set for the kioskModeAllowTouchscreen property.
    */
    public function setKioskModeAllowTouchscreen(?bool $value ): void {
        $this->kioskModeAllowTouchscreen = $value;
    }

    /**
     * Sets the kioskModeAllowVoiceOverSettings property value. Indicates whether or not to allow access to the voice over settings while in kiosk mode.
     *  @param bool|null $value Value to set for the kioskModeAllowVoiceOverSettings property.
    */
    public function setKioskModeAllowVoiceOverSettings(?bool $value ): void {
        $this->kioskModeAllowVoiceOverSettings = $value;
    }

    /**
     * Sets the kioskModeAllowVolumeButtons property value. Indicates whether or not to allow use of the volume buttons while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockVolumeButtons instead.
     *  @param bool|null $value Value to set for the kioskModeAllowVolumeButtons property.
    */
    public function setKioskModeAllowVolumeButtons(?bool $value ): void {
        $this->kioskModeAllowVolumeButtons = $value;
    }

    /**
     * Sets the kioskModeAllowZoomSettings property value. Indicates whether or not to allow access to the zoom settings while in kiosk mode.
     *  @param bool|null $value Value to set for the kioskModeAllowZoomSettings property.
    */
    public function setKioskModeAllowZoomSettings(?bool $value ): void {
        $this->kioskModeAllowZoomSettings = $value;
    }

    /**
     * Sets the kioskModeAppStoreUrl property value. URL in the app store to the app to use for kiosk mode. Use if KioskModeManagedAppId is not known.
     *  @param string|null $value Value to set for the kioskModeAppStoreUrl property.
    */
    public function setKioskModeAppStoreUrl(?string $value ): void {
        $this->kioskModeAppStoreUrl = $value;
    }

    /**
     * Sets the kioskModeBuiltInAppId property value. ID for built-in apps to use for kiosk mode. Used when KioskModeManagedAppId and KioskModeAppStoreUrl are not set.
     *  @param string|null $value Value to set for the kioskModeBuiltInAppId property.
    */
    public function setKioskModeBuiltInAppId(?string $value ): void {
        $this->kioskModeBuiltInAppId = $value;
    }

    /**
     * Sets the kioskModeManagedAppId property value. Managed app id of the app to use for kiosk mode. If KioskModeManagedAppId is specified then KioskModeAppStoreUrl will be ignored.
     *  @param string|null $value Value to set for the kioskModeManagedAppId property.
    */
    public function setKioskModeManagedAppId(?string $value ): void {
        $this->kioskModeManagedAppId = $value;
    }

    /**
     * Sets the kioskModeRequireAssistiveTouch property value. Indicates whether or not to require assistive touch while in kiosk mode.
     *  @param bool|null $value Value to set for the kioskModeRequireAssistiveTouch property.
    */
    public function setKioskModeRequireAssistiveTouch(?bool $value ): void {
        $this->kioskModeRequireAssistiveTouch = $value;
    }

    /**
     * Sets the kioskModeRequireColorInversion property value. Indicates whether or not to require color inversion while in kiosk mode.
     *  @param bool|null $value Value to set for the kioskModeRequireColorInversion property.
    */
    public function setKioskModeRequireColorInversion(?bool $value ): void {
        $this->kioskModeRequireColorInversion = $value;
    }

    /**
     * Sets the kioskModeRequireMonoAudio property value. Indicates whether or not to require mono audio while in kiosk mode.
     *  @param bool|null $value Value to set for the kioskModeRequireMonoAudio property.
    */
    public function setKioskModeRequireMonoAudio(?bool $value ): void {
        $this->kioskModeRequireMonoAudio = $value;
    }

    /**
     * Sets the kioskModeRequireVoiceOver property value. Indicates whether or not to require voice over while in kiosk mode.
     *  @param bool|null $value Value to set for the kioskModeRequireVoiceOver property.
    */
    public function setKioskModeRequireVoiceOver(?bool $value ): void {
        $this->kioskModeRequireVoiceOver = $value;
    }

    /**
     * Sets the kioskModeRequireZoom property value. Indicates whether or not to require zoom while in kiosk mode.
     *  @param bool|null $value Value to set for the kioskModeRequireZoom property.
    */
    public function setKioskModeRequireZoom(?bool $value ): void {
        $this->kioskModeRequireZoom = $value;
    }

    /**
     * Sets the lockScreenBlockControlCenter property value. Indicates whether or not to block the user from using control center on the lock screen.
     *  @param bool|null $value Value to set for the lockScreenBlockControlCenter property.
    */
    public function setLockScreenBlockControlCenter(?bool $value ): void {
        $this->lockScreenBlockControlCenter = $value;
    }

    /**
     * Sets the lockScreenBlockNotificationView property value. Indicates whether or not to block the user from using the notification view on the lock screen.
     *  @param bool|null $value Value to set for the lockScreenBlockNotificationView property.
    */
    public function setLockScreenBlockNotificationView(?bool $value ): void {
        $this->lockScreenBlockNotificationView = $value;
    }

    /**
     * Sets the lockScreenBlockPassbook property value. Indicates whether or not to block the user from using passbook when the device is locked.
     *  @param bool|null $value Value to set for the lockScreenBlockPassbook property.
    */
    public function setLockScreenBlockPassbook(?bool $value ): void {
        $this->lockScreenBlockPassbook = $value;
    }

    /**
     * Sets the lockScreenBlockTodayView property value. Indicates whether or not to block the user from using the Today View on the lock screen.
     *  @param bool|null $value Value to set for the lockScreenBlockTodayView property.
    */
    public function setLockScreenBlockTodayView(?bool $value ): void {
        $this->lockScreenBlockTodayView = $value;
    }

    /**
     * Sets the mediaContentRatingApps property value. Apps rating as in media content
     *  @param RatingAppsType|null $value Value to set for the mediaContentRatingApps property.
    */
    public function setMediaContentRatingApps(?RatingAppsType $value ): void {
        $this->mediaContentRatingApps = $value;
    }

    /**
     * Sets the mediaContentRatingAustralia property value. Media content rating settings for Australia
     *  @param MediaContentRatingAustralia|null $value Value to set for the mediaContentRatingAustralia property.
    */
    public function setMediaContentRatingAustralia(?MediaContentRatingAustralia $value ): void {
        $this->mediaContentRatingAustralia = $value;
    }

    /**
     * Sets the mediaContentRatingCanada property value. Media content rating settings for Canada
     *  @param MediaContentRatingCanada|null $value Value to set for the mediaContentRatingCanada property.
    */
    public function setMediaContentRatingCanada(?MediaContentRatingCanada $value ): void {
        $this->mediaContentRatingCanada = $value;
    }

    /**
     * Sets the mediaContentRatingFrance property value. Media content rating settings for France
     *  @param MediaContentRatingFrance|null $value Value to set for the mediaContentRatingFrance property.
    */
    public function setMediaContentRatingFrance(?MediaContentRatingFrance $value ): void {
        $this->mediaContentRatingFrance = $value;
    }

    /**
     * Sets the mediaContentRatingGermany property value. Media content rating settings for Germany
     *  @param MediaContentRatingGermany|null $value Value to set for the mediaContentRatingGermany property.
    */
    public function setMediaContentRatingGermany(?MediaContentRatingGermany $value ): void {
        $this->mediaContentRatingGermany = $value;
    }

    /**
     * Sets the mediaContentRatingIreland property value. Media content rating settings for Ireland
     *  @param MediaContentRatingIreland|null $value Value to set for the mediaContentRatingIreland property.
    */
    public function setMediaContentRatingIreland(?MediaContentRatingIreland $value ): void {
        $this->mediaContentRatingIreland = $value;
    }

    /**
     * Sets the mediaContentRatingJapan property value. Media content rating settings for Japan
     *  @param MediaContentRatingJapan|null $value Value to set for the mediaContentRatingJapan property.
    */
    public function setMediaContentRatingJapan(?MediaContentRatingJapan $value ): void {
        $this->mediaContentRatingJapan = $value;
    }

    /**
     * Sets the mediaContentRatingNewZealand property value. Media content rating settings for New Zealand
     *  @param MediaContentRatingNewZealand|null $value Value to set for the mediaContentRatingNewZealand property.
    */
    public function setMediaContentRatingNewZealand(?MediaContentRatingNewZealand $value ): void {
        $this->mediaContentRatingNewZealand = $value;
    }

    /**
     * Sets the mediaContentRatingUnitedKingdom property value. Media content rating settings for United Kingdom
     *  @param MediaContentRatingUnitedKingdom|null $value Value to set for the mediaContentRatingUnitedKingdom property.
    */
    public function setMediaContentRatingUnitedKingdom(?MediaContentRatingUnitedKingdom $value ): void {
        $this->mediaContentRatingUnitedKingdom = $value;
    }

    /**
     * Sets the mediaContentRatingUnitedStates property value. Media content rating settings for United States
     *  @param MediaContentRatingUnitedStates|null $value Value to set for the mediaContentRatingUnitedStates property.
    */
    public function setMediaContentRatingUnitedStates(?MediaContentRatingUnitedStates $value ): void {
        $this->mediaContentRatingUnitedStates = $value;
    }

    /**
     * Sets the messagesBlocked property value. Indicates whether or not to block the user from using the Messages app on the supervised device.
     *  @param bool|null $value Value to set for the messagesBlocked property.
    */
    public function setMessagesBlocked(?bool $value ): void {
        $this->messagesBlocked = $value;
    }

    /**
     * Sets the networkUsageRules property value. List of managed apps and the network rules that applies to them. This collection can contain a maximum of 1000 elements.
     *  @param array<IosNetworkUsageRule>|null $value Value to set for the networkUsageRules property.
    */
    public function setNetworkUsageRules(?array $value ): void {
        $this->networkUsageRules = $value;
    }

    /**
     * Sets the notificationsBlockSettingsModification property value. Indicates whether or not to allow notifications settings modification (iOS 9.3 and later).
     *  @param bool|null $value Value to set for the notificationsBlockSettingsModification property.
    */
    public function setNotificationsBlockSettingsModification(?bool $value ): void {
        $this->notificationsBlockSettingsModification = $value;
    }

    /**
     * Sets the passcodeBlockFingerprintModification property value. Block modification of registered Touch ID fingerprints when in supervised mode.
     *  @param bool|null $value Value to set for the passcodeBlockFingerprintModification property.
    */
    public function setPasscodeBlockFingerprintModification(?bool $value ): void {
        $this->passcodeBlockFingerprintModification = $value;
    }

    /**
     * Sets the passcodeBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     *  @param bool|null $value Value to set for the passcodeBlockFingerprintUnlock property.
    */
    public function setPasscodeBlockFingerprintUnlock(?bool $value ): void {
        $this->passcodeBlockFingerprintUnlock = $value;
    }

    /**
     * Sets the passcodeBlockModification property value. Indicates whether or not to allow passcode modification on the supervised device (iOS 9.0 and later).
     *  @param bool|null $value Value to set for the passcodeBlockModification property.
    */
    public function setPasscodeBlockModification(?bool $value ): void {
        $this->passcodeBlockModification = $value;
    }

    /**
     * Sets the passcodeBlockSimple property value. Indicates whether or not to block simple passcodes.
     *  @param bool|null $value Value to set for the passcodeBlockSimple property.
    */
    public function setPasscodeBlockSimple(?bool $value ): void {
        $this->passcodeBlockSimple = $value;
    }

    /**
     * Sets the passcodeExpirationDays property value. Number of days before the passcode expires. Valid values 1 to 65535
     *  @param int|null $value Value to set for the passcodeExpirationDays property.
    */
    public function setPasscodeExpirationDays(?int $value ): void {
        $this->passcodeExpirationDays = $value;
    }

    /**
     * Sets the passcodeMinimumCharacterSetCount property value. Number of character sets a passcode must contain. Valid values 0 to 4
     *  @param int|null $value Value to set for the passcodeMinimumCharacterSetCount property.
    */
    public function setPasscodeMinimumCharacterSetCount(?int $value ): void {
        $this->passcodeMinimumCharacterSetCount = $value;
    }

    /**
     * Sets the passcodeMinimumLength property value. Minimum length of passcode. Valid values 4 to 14
     *  @param int|null $value Value to set for the passcodeMinimumLength property.
    */
    public function setPasscodeMinimumLength(?int $value ): void {
        $this->passcodeMinimumLength = $value;
    }

    /**
     * Sets the passcodeMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a passcode is required.
     *  @param int|null $value Value to set for the passcodeMinutesOfInactivityBeforeLock property.
    */
    public function setPasscodeMinutesOfInactivityBeforeLock(?int $value ): void {
        $this->passcodeMinutesOfInactivityBeforeLock = $value;
    }

    /**
     * Sets the passcodeMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passcodeMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasscodeMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->passcodeMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the passcodePreviousPasscodeBlockCount property value. Number of previous passcodes to block. Valid values 1 to 24
     *  @param int|null $value Value to set for the passcodePreviousPasscodeBlockCount property.
    */
    public function setPasscodePreviousPasscodeBlockCount(?int $value ): void {
        $this->passcodePreviousPasscodeBlockCount = $value;
    }

    /**
     * Sets the passcodeRequired property value. Indicates whether or not to require a passcode.
     *  @param bool|null $value Value to set for the passcodeRequired property.
    */
    public function setPasscodeRequired(?bool $value ): void {
        $this->passcodeRequired = $value;
    }

    /**
     * Sets the passcodeRequiredType property value. Possible values of required passwords.
     *  @param RequiredPasswordType|null $value Value to set for the passcodeRequiredType property.
    */
    public function setPasscodeRequiredType(?RequiredPasswordType $value ): void {
        $this->passcodeRequiredType = $value;
    }

    /**
     * Sets the passcodeSignInFailureCountBeforeWipe property value. Number of sign in failures allowed before wiping the device. Valid values 2 to 11
     *  @param int|null $value Value to set for the passcodeSignInFailureCountBeforeWipe property.
    */
    public function setPasscodeSignInFailureCountBeforeWipe(?int $value ): void {
        $this->passcodeSignInFailureCountBeforeWipe = $value;
    }

    /**
     * Sets the podcastsBlocked property value. Indicates whether or not to block the user from using podcasts on the supervised device (iOS 8.0 and later).
     *  @param bool|null $value Value to set for the podcastsBlocked property.
    */
    public function setPodcastsBlocked(?bool $value ): void {
        $this->podcastsBlocked = $value;
    }

    /**
     * Sets the safariBlockAutofill property value. Indicates whether or not to block the user from using Auto fill in Safari. Requires a supervised device for iOS 13 and later.
     *  @param bool|null $value Value to set for the safariBlockAutofill property.
    */
    public function setSafariBlockAutofill(?bool $value ): void {
        $this->safariBlockAutofill = $value;
    }

    /**
     * Sets the safariBlocked property value. Indicates whether or not to block the user from using Safari. Requires a supervised device for iOS 13 and later.
     *  @param bool|null $value Value to set for the safariBlocked property.
    */
    public function setSafariBlocked(?bool $value ): void {
        $this->safariBlocked = $value;
    }

    /**
     * Sets the safariBlockJavaScript property value. Indicates whether or not to block JavaScript in Safari.
     *  @param bool|null $value Value to set for the safariBlockJavaScript property.
    */
    public function setSafariBlockJavaScript(?bool $value ): void {
        $this->safariBlockJavaScript = $value;
    }

    /**
     * Sets the safariBlockPopups property value. Indicates whether or not to block popups in Safari.
     *  @param bool|null $value Value to set for the safariBlockPopups property.
    */
    public function setSafariBlockPopups(?bool $value ): void {
        $this->safariBlockPopups = $value;
    }

    /**
     * Sets the safariCookieSettings property value. Web Browser Cookie Settings.
     *  @param WebBrowserCookieSettings|null $value Value to set for the safariCookieSettings property.
    */
    public function setSafariCookieSettings(?WebBrowserCookieSettings $value ): void {
        $this->safariCookieSettings = $value;
    }

    /**
     * Sets the safariManagedDomains property value. URLs matching the patterns listed here will be considered managed.
     *  @param array<string>|null $value Value to set for the safariManagedDomains property.
    */
    public function setSafariManagedDomains(?array $value ): void {
        $this->safariManagedDomains = $value;
    }

    /**
     * Sets the safariPasswordAutoFillDomains property value. Users can save passwords in Safari only from URLs matching the patterns listed here. Applies to devices in supervised mode (iOS 9.3 and later).
     *  @param array<string>|null $value Value to set for the safariPasswordAutoFillDomains property.
    */
    public function setSafariPasswordAutoFillDomains(?array $value ): void {
        $this->safariPasswordAutoFillDomains = $value;
    }

    /**
     * Sets the safariRequireFraudWarning property value. Indicates whether or not to require fraud warning in Safari.
     *  @param bool|null $value Value to set for the safariRequireFraudWarning property.
    */
    public function setSafariRequireFraudWarning(?bool $value ): void {
        $this->safariRequireFraudWarning = $value;
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to block the user from taking Screenshots.
     *  @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value ): void {
        $this->screenCaptureBlocked = $value;
    }

    /**
     * Sets the siriBlocked property value. Indicates whether or not to block the user from using Siri.
     *  @param bool|null $value Value to set for the siriBlocked property.
    */
    public function setSiriBlocked(?bool $value ): void {
        $this->siriBlocked = $value;
    }

    /**
     * Sets the siriBlockedWhenLocked property value. Indicates whether or not to block the user from using Siri when locked.
     *  @param bool|null $value Value to set for the siriBlockedWhenLocked property.
    */
    public function setSiriBlockedWhenLocked(?bool $value ): void {
        $this->siriBlockedWhenLocked = $value;
    }

    /**
     * Sets the siriBlockUserGeneratedContent property value. Indicates whether or not to block Siri from querying user-generated content when used on a supervised device.
     *  @param bool|null $value Value to set for the siriBlockUserGeneratedContent property.
    */
    public function setSiriBlockUserGeneratedContent(?bool $value ): void {
        $this->siriBlockUserGeneratedContent = $value;
    }

    /**
     * Sets the siriRequireProfanityFilter property value. Indicates whether or not to prevent Siri from dictating, or speaking profane language on supervised device.
     *  @param bool|null $value Value to set for the siriRequireProfanityFilter property.
    */
    public function setSiriRequireProfanityFilter(?bool $value ): void {
        $this->siriRequireProfanityFilter = $value;
    }

    /**
     * Sets the spotlightBlockInternetResults property value. Indicates whether or not to block Spotlight search from returning internet results on supervised device.
     *  @param bool|null $value Value to set for the spotlightBlockInternetResults property.
    */
    public function setSpotlightBlockInternetResults(?bool $value ): void {
        $this->spotlightBlockInternetResults = $value;
    }

    /**
     * Sets the voiceDialingBlocked property value. Indicates whether or not to block voice dialing.
     *  @param bool|null $value Value to set for the voiceDialingBlocked property.
    */
    public function setVoiceDialingBlocked(?bool $value ): void {
        $this->voiceDialingBlocked = $value;
    }

    /**
     * Sets the wallpaperBlockModification property value. Indicates whether or not to allow wallpaper modification on supervised device (iOS 9.0 and later) .
     *  @param bool|null $value Value to set for the wallpaperBlockModification property.
    */
    public function setWallpaperBlockModification(?bool $value ): void {
        $this->wallpaperBlockModification = $value;
    }

    /**
     * Sets the wiFiConnectOnlyToConfiguredNetworks property value. Indicates whether or not to force the device to use only Wi-Fi networks from configuration profiles when the device is in supervised mode. Available for devices running iOS and iPadOS versions 14.4 and earlier. Devices running 14.5+ should use the setting, 'WiFiConnectToAllowedNetworksOnlyForced.
     *  @param bool|null $value Value to set for the wiFiConnectOnlyToConfiguredNetworks property.
    */
    public function setWiFiConnectOnlyToConfiguredNetworks(?bool $value ): void {
        $this->wiFiConnectOnlyToConfiguredNetworks = $value;
    }

}
