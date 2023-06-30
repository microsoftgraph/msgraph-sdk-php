<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IosGeneralDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
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
        $val = $this->getBackingStore()->get('accountBlockModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountBlockModification'");
    }

    /**
     * Gets the activationLockAllowWhenSupervised property value. Indicates whether or not to allow activation lock when the device is in the supervised mode.
     * @return bool|null
    */
    public function getActivationLockAllowWhenSupervised(): ?bool {
        $val = $this->getBackingStore()->get('activationLockAllowWhenSupervised');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activationLockAllowWhenSupervised'");
    }

    /**
     * Gets the airDropBlocked property value. Indicates whether or not to allow AirDrop when the device is in supervised mode.
     * @return bool|null
    */
    public function getAirDropBlocked(): ?bool {
        $val = $this->getBackingStore()->get('airDropBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'airDropBlocked'");
    }

    /**
     * Gets the airDropForceUnmanagedDropTarget property value. Indicates whether or not to cause AirDrop to be considered an unmanaged drop target (iOS 9.0 and later).
     * @return bool|null
    */
    public function getAirDropForceUnmanagedDropTarget(): ?bool {
        $val = $this->getBackingStore()->get('airDropForceUnmanagedDropTarget');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'airDropForceUnmanagedDropTarget'");
    }

    /**
     * Gets the airPlayForcePairingPasswordForOutgoingRequests property value. Indicates whether or not to enforce all devices receiving AirPlay requests from this device to use a pairing password.
     * @return bool|null
    */
    public function getAirPlayForcePairingPasswordForOutgoingRequests(): ?bool {
        $val = $this->getBackingStore()->get('airPlayForcePairingPasswordForOutgoingRequests');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'airPlayForcePairingPasswordForOutgoingRequests'");
    }

    /**
     * Gets the appleNewsBlocked property value. Indicates whether or not to block the user from using News when the device is in supervised mode (iOS 9.0 and later).
     * @return bool|null
    */
    public function getAppleNewsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('appleNewsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appleNewsBlocked'");
    }

    /**
     * Gets the appleWatchBlockPairing property value. Indicates whether or not to allow Apple Watch pairing when the device is in supervised mode (iOS 9.0 and later).
     * @return bool|null
    */
    public function getAppleWatchBlockPairing(): ?bool {
        $val = $this->getBackingStore()->get('appleWatchBlockPairing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appleWatchBlockPairing'");
    }

    /**
     * Gets the appleWatchForceWristDetection property value. Indicates whether or not to force a paired Apple Watch to use Wrist Detection (iOS 8.2 and later).
     * @return bool|null
    */
    public function getAppleWatchForceWristDetection(): ?bool {
        $val = $this->getBackingStore()->get('appleWatchForceWristDetection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appleWatchForceWristDetection'");
    }

    /**
     * Gets the appsSingleAppModeList property value. Gets or sets the list of iOS apps allowed to autonomously enter Single App Mode. Supervised only. iOS 7.0 and later. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getAppsSingleAppModeList(): ?array {
        $val = $this->getBackingStore()->get('appsSingleAppModeList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppListItem::class);
            /** @var array<AppListItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsSingleAppModeList'");
    }

    /**
     * Gets the appStoreBlockAutomaticDownloads property value. Indicates whether or not to block the automatic downloading of apps purchased on other devices when the device is in supervised mode (iOS 9.0 and later).
     * @return bool|null
    */
    public function getAppStoreBlockAutomaticDownloads(): ?bool {
        $val = $this->getBackingStore()->get('appStoreBlockAutomaticDownloads');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appStoreBlockAutomaticDownloads'");
    }

    /**
     * Gets the appStoreBlocked property value. Indicates whether or not to block the user from using the App Store. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getAppStoreBlocked(): ?bool {
        $val = $this->getBackingStore()->get('appStoreBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appStoreBlocked'");
    }

    /**
     * Gets the appStoreBlockInAppPurchases property value. Indicates whether or not to block the user from making in app purchases.
     * @return bool|null
    */
    public function getAppStoreBlockInAppPurchases(): ?bool {
        $val = $this->getBackingStore()->get('appStoreBlockInAppPurchases');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appStoreBlockInAppPurchases'");
    }

    /**
     * Gets the appStoreBlockUIAppInstallation property value. Indicates whether or not to block the App Store app, not restricting installation through Host apps. Applies to supervised mode only (iOS 9.0 and later).
     * @return bool|null
    */
    public function getAppStoreBlockUIAppInstallation(): ?bool {
        $val = $this->getBackingStore()->get('appStoreBlockUIAppInstallation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appStoreBlockUIAppInstallation'");
    }

    /**
     * Gets the appStoreRequirePassword property value. Indicates whether or not to require a password when using the app store.
     * @return bool|null
    */
    public function getAppStoreRequirePassword(): ?bool {
        $val = $this->getBackingStore()->get('appStoreRequirePassword');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appStoreRequirePassword'");
    }

    /**
     * Gets the appsVisibilityList property value. List of apps in the visibility list (either visible/launchable apps list or hidden/unlaunchable apps list, controlled by AppsVisibilityListType) (iOS 9.3 and later). This collection can contain a maximum of 10000 elements.
     * @return array<AppListItem>|null
    */
    public function getAppsVisibilityList(): ?array {
        $val = $this->getBackingStore()->get('appsVisibilityList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppListItem::class);
            /** @var array<AppListItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsVisibilityList'");
    }

    /**
     * Gets the appsVisibilityListType property value. Possible values of the compliance app list.
     * @return AppListType|null
    */
    public function getAppsVisibilityListType(): ?AppListType {
        $val = $this->getBackingStore()->get('appsVisibilityListType');
        if (is_null($val) || $val instanceof AppListType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsVisibilityListType'");
    }

    /**
     * Gets the bluetoothBlockModification property value. Indicates whether or not to allow modification of Bluetooth settings when the device is in supervised mode (iOS 10.0 and later).
     * @return bool|null
    */
    public function getBluetoothBlockModification(): ?bool {
        $val = $this->getBackingStore()->get('bluetoothBlockModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bluetoothBlockModification'");
    }

    /**
     * Gets the cameraBlocked property value. Indicates whether or not to block the user from accessing the camera of the device. Requires a supervised device for iOS 13 and later.
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
     * Gets the cellularBlockDataRoaming property value. Indicates whether or not to block data roaming.
     * @return bool|null
    */
    public function getCellularBlockDataRoaming(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockDataRoaming');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockDataRoaming'");
    }

    /**
     * Gets the cellularBlockGlobalBackgroundFetchWhileRoaming property value. Indicates whether or not to block global background fetch while roaming.
     * @return bool|null
    */
    public function getCellularBlockGlobalBackgroundFetchWhileRoaming(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockGlobalBackgroundFetchWhileRoaming');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockGlobalBackgroundFetchWhileRoaming'");
    }

    /**
     * Gets the cellularBlockPerAppDataModification property value. Indicates whether or not to allow changes to cellular app data usage settings when the device is in supervised mode.
     * @return bool|null
    */
    public function getCellularBlockPerAppDataModification(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockPerAppDataModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockPerAppDataModification'");
    }

    /**
     * Gets the cellularBlockPersonalHotspot property value. Indicates whether or not to block Personal Hotspot.
     * @return bool|null
    */
    public function getCellularBlockPersonalHotspot(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockPersonalHotspot');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockPersonalHotspot'");
    }

    /**
     * Gets the cellularBlockVoiceRoaming property value. Indicates whether or not to block voice roaming.
     * @return bool|null
    */
    public function getCellularBlockVoiceRoaming(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockVoiceRoaming');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockVoiceRoaming'");
    }

    /**
     * Gets the certificatesBlockUntrustedTlsCertificates property value. Indicates whether or not to block untrusted TLS certificates.
     * @return bool|null
    */
    public function getCertificatesBlockUntrustedTlsCertificates(): ?bool {
        $val = $this->getBackingStore()->get('certificatesBlockUntrustedTlsCertificates');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificatesBlockUntrustedTlsCertificates'");
    }

    /**
     * Gets the classroomAppBlockRemoteScreenObservation property value. Indicates whether or not to allow remote screen observation by Classroom app when the device is in supervised mode (iOS 9.3 and later).
     * @return bool|null
    */
    public function getClassroomAppBlockRemoteScreenObservation(): ?bool {
        $val = $this->getBackingStore()->get('classroomAppBlockRemoteScreenObservation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classroomAppBlockRemoteScreenObservation'");
    }

    /**
     * Gets the classroomAppForceUnpromptedScreenObservation property value. Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting when the device is in supervised mode.
     * @return bool|null
    */
    public function getClassroomAppForceUnpromptedScreenObservation(): ?bool {
        $val = $this->getBackingStore()->get('classroomAppForceUnpromptedScreenObservation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classroomAppForceUnpromptedScreenObservation'");
    }

    /**
     * Gets the compliantAppListType property value. Possible values of the compliance app list.
     * @return AppListType|null
    */
    public function getCompliantAppListType(): ?AppListType {
        $val = $this->getBackingStore()->get('compliantAppListType');
        if (is_null($val) || $val instanceof AppListType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantAppListType'");
    }

    /**
     * Gets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @return array<AppListItem>|null
    */
    public function getCompliantAppsList(): ?array {
        $val = $this->getBackingStore()->get('compliantAppsList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppListItem::class);
            /** @var array<AppListItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantAppsList'");
    }

    /**
     * Gets the configurationProfileBlockChanges property value. Indicates whether or not to block the user from installing configuration profiles and certificates interactively when the device is in supervised mode.
     * @return bool|null
    */
    public function getConfigurationProfileBlockChanges(): ?bool {
        $val = $this->getBackingStore()->get('configurationProfileBlockChanges');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationProfileBlockChanges'");
    }

    /**
     * Gets the definitionLookupBlocked property value. Indicates whether or not to block definition lookup when the device is in supervised mode (iOS 8.1.3 and later ).
     * @return bool|null
    */
    public function getDefinitionLookupBlocked(): ?bool {
        $val = $this->getBackingStore()->get('definitionLookupBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definitionLookupBlocked'");
    }

    /**
     * Gets the deviceBlockEnableRestrictions property value. Indicates whether or not to allow the user to enables restrictions in the device settings when the device is in supervised mode.
     * @return bool|null
    */
    public function getDeviceBlockEnableRestrictions(): ?bool {
        $val = $this->getBackingStore()->get('deviceBlockEnableRestrictions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceBlockEnableRestrictions'");
    }

    /**
     * Gets the deviceBlockEraseContentAndSettings property value. Indicates whether or not to allow the use of the 'Erase all content and settings' option on the device when the device is in supervised mode.
     * @return bool|null
    */
    public function getDeviceBlockEraseContentAndSettings(): ?bool {
        $val = $this->getBackingStore()->get('deviceBlockEraseContentAndSettings');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceBlockEraseContentAndSettings'");
    }

    /**
     * Gets the deviceBlockNameModification property value. Indicates whether or not to allow device name modification when the device is in supervised mode (iOS 9.0 and later).
     * @return bool|null
    */
    public function getDeviceBlockNameModification(): ?bool {
        $val = $this->getBackingStore()->get('deviceBlockNameModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceBlockNameModification'");
    }

    /**
     * Gets the diagnosticDataBlockSubmission property value. Indicates whether or not to block diagnostic data submission.
     * @return bool|null
    */
    public function getDiagnosticDataBlockSubmission(): ?bool {
        $val = $this->getBackingStore()->get('diagnosticDataBlockSubmission');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'diagnosticDataBlockSubmission'");
    }

    /**
     * Gets the diagnosticDataBlockSubmissionModification property value. Indicates whether or not to allow diagnostics submission settings modification when the device is in supervised mode (iOS 9.3.2 and later).
     * @return bool|null
    */
    public function getDiagnosticDataBlockSubmissionModification(): ?bool {
        $val = $this->getBackingStore()->get('diagnosticDataBlockSubmissionModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'diagnosticDataBlockSubmissionModification'");
    }

    /**
     * Gets the documentsBlockManagedDocumentsInUnmanagedApps property value. Indicates whether or not to block the user from viewing managed documents in unmanaged apps.
     * @return bool|null
    */
    public function getDocumentsBlockManagedDocumentsInUnmanagedApps(): ?bool {
        $val = $this->getBackingStore()->get('documentsBlockManagedDocumentsInUnmanagedApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentsBlockManagedDocumentsInUnmanagedApps'");
    }

    /**
     * Gets the documentsBlockUnmanagedDocumentsInManagedApps property value. Indicates whether or not to block the user from viewing unmanaged documents in managed apps.
     * @return bool|null
    */
    public function getDocumentsBlockUnmanagedDocumentsInManagedApps(): ?bool {
        $val = $this->getBackingStore()->get('documentsBlockUnmanagedDocumentsInManagedApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentsBlockUnmanagedDocumentsInManagedApps'");
    }

    /**
     * Gets the emailInDomainSuffixes property value. An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     * @return array<string>|null
    */
    public function getEmailInDomainSuffixes(): ?array {
        $val = $this->getBackingStore()->get('emailInDomainSuffixes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailInDomainSuffixes'");
    }

    /**
     * Gets the enterpriseAppBlockTrust property value. Indicates whether or not to block the user from trusting an enterprise app.
     * @return bool|null
    */
    public function getEnterpriseAppBlockTrust(): ?bool {
        $val = $this->getBackingStore()->get('enterpriseAppBlockTrust');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseAppBlockTrust'");
    }

    /**
     * Gets the enterpriseAppBlockTrustModification property value. [Deprecated] Configuring this setting and setting the value to 'true' has no effect on the device.
     * @return bool|null
    */
    public function getEnterpriseAppBlockTrustModification(): ?bool {
        $val = $this->getBackingStore()->get('enterpriseAppBlockTrustModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseAppBlockTrustModification'");
    }

    /**
     * Gets the faceTimeBlocked property value. Indicates whether or not to block the user from using FaceTime. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getFaceTimeBlocked(): ?bool {
        $val = $this->getBackingStore()->get('faceTimeBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'faceTimeBlocked'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountBlockModification' => fn(ParseNode $n) => $o->setAccountBlockModification($n->getBooleanValue()),
            'activationLockAllowWhenSupervised' => fn(ParseNode $n) => $o->setActivationLockAllowWhenSupervised($n->getBooleanValue()),
            'airDropBlocked' => fn(ParseNode $n) => $o->setAirDropBlocked($n->getBooleanValue()),
            'airDropForceUnmanagedDropTarget' => fn(ParseNode $n) => $o->setAirDropForceUnmanagedDropTarget($n->getBooleanValue()),
            'airPlayForcePairingPasswordForOutgoingRequests' => fn(ParseNode $n) => $o->setAirPlayForcePairingPasswordForOutgoingRequests($n->getBooleanValue()),
            'appleNewsBlocked' => fn(ParseNode $n) => $o->setAppleNewsBlocked($n->getBooleanValue()),
            'appleWatchBlockPairing' => fn(ParseNode $n) => $o->setAppleWatchBlockPairing($n->getBooleanValue()),
            'appleWatchForceWristDetection' => fn(ParseNode $n) => $o->setAppleWatchForceWristDetection($n->getBooleanValue()),
            'appsSingleAppModeList' => fn(ParseNode $n) => $o->setAppsSingleAppModeList($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'appStoreBlockAutomaticDownloads' => fn(ParseNode $n) => $o->setAppStoreBlockAutomaticDownloads($n->getBooleanValue()),
            'appStoreBlocked' => fn(ParseNode $n) => $o->setAppStoreBlocked($n->getBooleanValue()),
            'appStoreBlockInAppPurchases' => fn(ParseNode $n) => $o->setAppStoreBlockInAppPurchases($n->getBooleanValue()),
            'appStoreBlockUIAppInstallation' => fn(ParseNode $n) => $o->setAppStoreBlockUIAppInstallation($n->getBooleanValue()),
            'appStoreRequirePassword' => fn(ParseNode $n) => $o->setAppStoreRequirePassword($n->getBooleanValue()),
            'appsVisibilityList' => fn(ParseNode $n) => $o->setAppsVisibilityList($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'appsVisibilityListType' => fn(ParseNode $n) => $o->setAppsVisibilityListType($n->getEnumValue(AppListType::class)),
            'bluetoothBlockModification' => fn(ParseNode $n) => $o->setBluetoothBlockModification($n->getBooleanValue()),
            'cameraBlocked' => fn(ParseNode $n) => $o->setCameraBlocked($n->getBooleanValue()),
            'cellularBlockDataRoaming' => fn(ParseNode $n) => $o->setCellularBlockDataRoaming($n->getBooleanValue()),
            'cellularBlockGlobalBackgroundFetchWhileRoaming' => fn(ParseNode $n) => $o->setCellularBlockGlobalBackgroundFetchWhileRoaming($n->getBooleanValue()),
            'cellularBlockPerAppDataModification' => fn(ParseNode $n) => $o->setCellularBlockPerAppDataModification($n->getBooleanValue()),
            'cellularBlockPersonalHotspot' => fn(ParseNode $n) => $o->setCellularBlockPersonalHotspot($n->getBooleanValue()),
            'cellularBlockVoiceRoaming' => fn(ParseNode $n) => $o->setCellularBlockVoiceRoaming($n->getBooleanValue()),
            'certificatesBlockUntrustedTlsCertificates' => fn(ParseNode $n) => $o->setCertificatesBlockUntrustedTlsCertificates($n->getBooleanValue()),
            'classroomAppBlockRemoteScreenObservation' => fn(ParseNode $n) => $o->setClassroomAppBlockRemoteScreenObservation($n->getBooleanValue()),
            'classroomAppForceUnpromptedScreenObservation' => fn(ParseNode $n) => $o->setClassroomAppForceUnpromptedScreenObservation($n->getBooleanValue()),
            'compliantAppListType' => fn(ParseNode $n) => $o->setCompliantAppListType($n->getEnumValue(AppListType::class)),
            'compliantAppsList' => fn(ParseNode $n) => $o->setCompliantAppsList($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'configurationProfileBlockChanges' => fn(ParseNode $n) => $o->setConfigurationProfileBlockChanges($n->getBooleanValue()),
            'definitionLookupBlocked' => fn(ParseNode $n) => $o->setDefinitionLookupBlocked($n->getBooleanValue()),
            'deviceBlockEnableRestrictions' => fn(ParseNode $n) => $o->setDeviceBlockEnableRestrictions($n->getBooleanValue()),
            'deviceBlockEraseContentAndSettings' => fn(ParseNode $n) => $o->setDeviceBlockEraseContentAndSettings($n->getBooleanValue()),
            'deviceBlockNameModification' => fn(ParseNode $n) => $o->setDeviceBlockNameModification($n->getBooleanValue()),
            'diagnosticDataBlockSubmission' => fn(ParseNode $n) => $o->setDiagnosticDataBlockSubmission($n->getBooleanValue()),
            'diagnosticDataBlockSubmissionModification' => fn(ParseNode $n) => $o->setDiagnosticDataBlockSubmissionModification($n->getBooleanValue()),
            'documentsBlockManagedDocumentsInUnmanagedApps' => fn(ParseNode $n) => $o->setDocumentsBlockManagedDocumentsInUnmanagedApps($n->getBooleanValue()),
            'documentsBlockUnmanagedDocumentsInManagedApps' => fn(ParseNode $n) => $o->setDocumentsBlockUnmanagedDocumentsInManagedApps($n->getBooleanValue()),
            'emailInDomainSuffixes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEmailInDomainSuffixes($val);
            },
            'enterpriseAppBlockTrust' => fn(ParseNode $n) => $o->setEnterpriseAppBlockTrust($n->getBooleanValue()),
            'enterpriseAppBlockTrustModification' => fn(ParseNode $n) => $o->setEnterpriseAppBlockTrustModification($n->getBooleanValue()),
            'faceTimeBlocked' => fn(ParseNode $n) => $o->setFaceTimeBlocked($n->getBooleanValue()),
            'findMyFriendsBlocked' => fn(ParseNode $n) => $o->setFindMyFriendsBlocked($n->getBooleanValue()),
            'gameCenterBlocked' => fn(ParseNode $n) => $o->setGameCenterBlocked($n->getBooleanValue()),
            'gamingBlockGameCenterFriends' => fn(ParseNode $n) => $o->setGamingBlockGameCenterFriends($n->getBooleanValue()),
            'gamingBlockMultiplayer' => fn(ParseNode $n) => $o->setGamingBlockMultiplayer($n->getBooleanValue()),
            'hostPairingBlocked' => fn(ParseNode $n) => $o->setHostPairingBlocked($n->getBooleanValue()),
            'iBooksStoreBlocked' => fn(ParseNode $n) => $o->setIBooksStoreBlocked($n->getBooleanValue()),
            'iBooksStoreBlockErotica' => fn(ParseNode $n) => $o->setIBooksStoreBlockErotica($n->getBooleanValue()),
            'iCloudBlockActivityContinuation' => fn(ParseNode $n) => $o->setICloudBlockActivityContinuation($n->getBooleanValue()),
            'iCloudBlockBackup' => fn(ParseNode $n) => $o->setICloudBlockBackup($n->getBooleanValue()),
            'iCloudBlockDocumentSync' => fn(ParseNode $n) => $o->setICloudBlockDocumentSync($n->getBooleanValue()),
            'iCloudBlockManagedAppsSync' => fn(ParseNode $n) => $o->setICloudBlockManagedAppsSync($n->getBooleanValue()),
            'iCloudBlockPhotoLibrary' => fn(ParseNode $n) => $o->setICloudBlockPhotoLibrary($n->getBooleanValue()),
            'iCloudBlockPhotoStreamSync' => fn(ParseNode $n) => $o->setICloudBlockPhotoStreamSync($n->getBooleanValue()),
            'iCloudBlockSharedPhotoStream' => fn(ParseNode $n) => $o->setICloudBlockSharedPhotoStream($n->getBooleanValue()),
            'iCloudRequireEncryptedBackup' => fn(ParseNode $n) => $o->setICloudRequireEncryptedBackup($n->getBooleanValue()),
            'iTunesBlockExplicitContent' => fn(ParseNode $n) => $o->setITunesBlockExplicitContent($n->getBooleanValue()),
            'iTunesBlockMusicService' => fn(ParseNode $n) => $o->setITunesBlockMusicService($n->getBooleanValue()),
            'iTunesBlockRadio' => fn(ParseNode $n) => $o->setITunesBlockRadio($n->getBooleanValue()),
            'keyboardBlockAutoCorrect' => fn(ParseNode $n) => $o->setKeyboardBlockAutoCorrect($n->getBooleanValue()),
            'keyboardBlockDictation' => fn(ParseNode $n) => $o->setKeyboardBlockDictation($n->getBooleanValue()),
            'keyboardBlockPredictive' => fn(ParseNode $n) => $o->setKeyboardBlockPredictive($n->getBooleanValue()),
            'keyboardBlockShortcuts' => fn(ParseNode $n) => $o->setKeyboardBlockShortcuts($n->getBooleanValue()),
            'keyboardBlockSpellCheck' => fn(ParseNode $n) => $o->setKeyboardBlockSpellCheck($n->getBooleanValue()),
            'kioskModeAllowAssistiveSpeak' => fn(ParseNode $n) => $o->setKioskModeAllowAssistiveSpeak($n->getBooleanValue()),
            'kioskModeAllowAssistiveTouchSettings' => fn(ParseNode $n) => $o->setKioskModeAllowAssistiveTouchSettings($n->getBooleanValue()),
            'kioskModeAllowAutoLock' => fn(ParseNode $n) => $o->setKioskModeAllowAutoLock($n->getBooleanValue()),
            'kioskModeAllowColorInversionSettings' => fn(ParseNode $n) => $o->setKioskModeAllowColorInversionSettings($n->getBooleanValue()),
            'kioskModeAllowRingerSwitch' => fn(ParseNode $n) => $o->setKioskModeAllowRingerSwitch($n->getBooleanValue()),
            'kioskModeAllowScreenRotation' => fn(ParseNode $n) => $o->setKioskModeAllowScreenRotation($n->getBooleanValue()),
            'kioskModeAllowSleepButton' => fn(ParseNode $n) => $o->setKioskModeAllowSleepButton($n->getBooleanValue()),
            'kioskModeAllowTouchscreen' => fn(ParseNode $n) => $o->setKioskModeAllowTouchscreen($n->getBooleanValue()),
            'kioskModeAllowVoiceOverSettings' => fn(ParseNode $n) => $o->setKioskModeAllowVoiceOverSettings($n->getBooleanValue()),
            'kioskModeAllowVolumeButtons' => fn(ParseNode $n) => $o->setKioskModeAllowVolumeButtons($n->getBooleanValue()),
            'kioskModeAllowZoomSettings' => fn(ParseNode $n) => $o->setKioskModeAllowZoomSettings($n->getBooleanValue()),
            'kioskModeAppStoreUrl' => fn(ParseNode $n) => $o->setKioskModeAppStoreUrl($n->getStringValue()),
            'kioskModeBuiltInAppId' => fn(ParseNode $n) => $o->setKioskModeBuiltInAppId($n->getStringValue()),
            'kioskModeManagedAppId' => fn(ParseNode $n) => $o->setKioskModeManagedAppId($n->getStringValue()),
            'kioskModeRequireAssistiveTouch' => fn(ParseNode $n) => $o->setKioskModeRequireAssistiveTouch($n->getBooleanValue()),
            'kioskModeRequireColorInversion' => fn(ParseNode $n) => $o->setKioskModeRequireColorInversion($n->getBooleanValue()),
            'kioskModeRequireMonoAudio' => fn(ParseNode $n) => $o->setKioskModeRequireMonoAudio($n->getBooleanValue()),
            'kioskModeRequireVoiceOver' => fn(ParseNode $n) => $o->setKioskModeRequireVoiceOver($n->getBooleanValue()),
            'kioskModeRequireZoom' => fn(ParseNode $n) => $o->setKioskModeRequireZoom($n->getBooleanValue()),
            'lockScreenBlockControlCenter' => fn(ParseNode $n) => $o->setLockScreenBlockControlCenter($n->getBooleanValue()),
            'lockScreenBlockNotificationView' => fn(ParseNode $n) => $o->setLockScreenBlockNotificationView($n->getBooleanValue()),
            'lockScreenBlockPassbook' => fn(ParseNode $n) => $o->setLockScreenBlockPassbook($n->getBooleanValue()),
            'lockScreenBlockTodayView' => fn(ParseNode $n) => $o->setLockScreenBlockTodayView($n->getBooleanValue()),
            'mediaContentRatingApps' => fn(ParseNode $n) => $o->setMediaContentRatingApps($n->getEnumValue(RatingAppsType::class)),
            'mediaContentRatingAustralia' => fn(ParseNode $n) => $o->setMediaContentRatingAustralia($n->getObjectValue([MediaContentRatingAustralia::class, 'createFromDiscriminatorValue'])),
            'mediaContentRatingCanada' => fn(ParseNode $n) => $o->setMediaContentRatingCanada($n->getObjectValue([MediaContentRatingCanada::class, 'createFromDiscriminatorValue'])),
            'mediaContentRatingFrance' => fn(ParseNode $n) => $o->setMediaContentRatingFrance($n->getObjectValue([MediaContentRatingFrance::class, 'createFromDiscriminatorValue'])),
            'mediaContentRatingGermany' => fn(ParseNode $n) => $o->setMediaContentRatingGermany($n->getObjectValue([MediaContentRatingGermany::class, 'createFromDiscriminatorValue'])),
            'mediaContentRatingIreland' => fn(ParseNode $n) => $o->setMediaContentRatingIreland($n->getObjectValue([MediaContentRatingIreland::class, 'createFromDiscriminatorValue'])),
            'mediaContentRatingJapan' => fn(ParseNode $n) => $o->setMediaContentRatingJapan($n->getObjectValue([MediaContentRatingJapan::class, 'createFromDiscriminatorValue'])),
            'mediaContentRatingNewZealand' => fn(ParseNode $n) => $o->setMediaContentRatingNewZealand($n->getObjectValue([MediaContentRatingNewZealand::class, 'createFromDiscriminatorValue'])),
            'mediaContentRatingUnitedKingdom' => fn(ParseNode $n) => $o->setMediaContentRatingUnitedKingdom($n->getObjectValue([MediaContentRatingUnitedKingdom::class, 'createFromDiscriminatorValue'])),
            'mediaContentRatingUnitedStates' => fn(ParseNode $n) => $o->setMediaContentRatingUnitedStates($n->getObjectValue([MediaContentRatingUnitedStates::class, 'createFromDiscriminatorValue'])),
            'messagesBlocked' => fn(ParseNode $n) => $o->setMessagesBlocked($n->getBooleanValue()),
            'networkUsageRules' => fn(ParseNode $n) => $o->setNetworkUsageRules($n->getCollectionOfObjectValues([IosNetworkUsageRule::class, 'createFromDiscriminatorValue'])),
            'notificationsBlockSettingsModification' => fn(ParseNode $n) => $o->setNotificationsBlockSettingsModification($n->getBooleanValue()),
            'passcodeBlockFingerprintModification' => fn(ParseNode $n) => $o->setPasscodeBlockFingerprintModification($n->getBooleanValue()),
            'passcodeBlockFingerprintUnlock' => fn(ParseNode $n) => $o->setPasscodeBlockFingerprintUnlock($n->getBooleanValue()),
            'passcodeBlockModification' => fn(ParseNode $n) => $o->setPasscodeBlockModification($n->getBooleanValue()),
            'passcodeBlockSimple' => fn(ParseNode $n) => $o->setPasscodeBlockSimple($n->getBooleanValue()),
            'passcodeExpirationDays' => fn(ParseNode $n) => $o->setPasscodeExpirationDays($n->getIntegerValue()),
            'passcodeMinimumCharacterSetCount' => fn(ParseNode $n) => $o->setPasscodeMinimumCharacterSetCount($n->getIntegerValue()),
            'passcodeMinimumLength' => fn(ParseNode $n) => $o->setPasscodeMinimumLength($n->getIntegerValue()),
            'passcodeMinutesOfInactivityBeforeLock' => fn(ParseNode $n) => $o->setPasscodeMinutesOfInactivityBeforeLock($n->getIntegerValue()),
            'passcodeMinutesOfInactivityBeforeScreenTimeout' => fn(ParseNode $n) => $o->setPasscodeMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()),
            'passcodePreviousPasscodeBlockCount' => fn(ParseNode $n) => $o->setPasscodePreviousPasscodeBlockCount($n->getIntegerValue()),
            'passcodeRequired' => fn(ParseNode $n) => $o->setPasscodeRequired($n->getBooleanValue()),
            'passcodeRequiredType' => fn(ParseNode $n) => $o->setPasscodeRequiredType($n->getEnumValue(RequiredPasswordType::class)),
            'passcodeSignInFailureCountBeforeWipe' => fn(ParseNode $n) => $o->setPasscodeSignInFailureCountBeforeWipe($n->getIntegerValue()),
            'podcastsBlocked' => fn(ParseNode $n) => $o->setPodcastsBlocked($n->getBooleanValue()),
            'safariBlockAutofill' => fn(ParseNode $n) => $o->setSafariBlockAutofill($n->getBooleanValue()),
            'safariBlocked' => fn(ParseNode $n) => $o->setSafariBlocked($n->getBooleanValue()),
            'safariBlockJavaScript' => fn(ParseNode $n) => $o->setSafariBlockJavaScript($n->getBooleanValue()),
            'safariBlockPopups' => fn(ParseNode $n) => $o->setSafariBlockPopups($n->getBooleanValue()),
            'safariCookieSettings' => fn(ParseNode $n) => $o->setSafariCookieSettings($n->getEnumValue(WebBrowserCookieSettings::class)),
            'safariManagedDomains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSafariManagedDomains($val);
            },
            'safariPasswordAutoFillDomains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSafariPasswordAutoFillDomains($val);
            },
            'safariRequireFraudWarning' => fn(ParseNode $n) => $o->setSafariRequireFraudWarning($n->getBooleanValue()),
            'screenCaptureBlocked' => fn(ParseNode $n) => $o->setScreenCaptureBlocked($n->getBooleanValue()),
            'siriBlocked' => fn(ParseNode $n) => $o->setSiriBlocked($n->getBooleanValue()),
            'siriBlockedWhenLocked' => fn(ParseNode $n) => $o->setSiriBlockedWhenLocked($n->getBooleanValue()),
            'siriBlockUserGeneratedContent' => fn(ParseNode $n) => $o->setSiriBlockUserGeneratedContent($n->getBooleanValue()),
            'siriRequireProfanityFilter' => fn(ParseNode $n) => $o->setSiriRequireProfanityFilter($n->getBooleanValue()),
            'spotlightBlockInternetResults' => fn(ParseNode $n) => $o->setSpotlightBlockInternetResults($n->getBooleanValue()),
            'voiceDialingBlocked' => fn(ParseNode $n) => $o->setVoiceDialingBlocked($n->getBooleanValue()),
            'wallpaperBlockModification' => fn(ParseNode $n) => $o->setWallpaperBlockModification($n->getBooleanValue()),
            'wiFiConnectOnlyToConfiguredNetworks' => fn(ParseNode $n) => $o->setWiFiConnectOnlyToConfiguredNetworks($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the findMyFriendsBlocked property value. Indicates whether or not to block changes to Find My Friends when the device is in supervised mode.
     * @return bool|null
    */
    public function getFindMyFriendsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('findMyFriendsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'findMyFriendsBlocked'");
    }

    /**
     * Gets the gameCenterBlocked property value. Indicates whether or not to block the user from using Game Center when the device is in supervised mode.
     * @return bool|null
    */
    public function getGameCenterBlocked(): ?bool {
        $val = $this->getBackingStore()->get('gameCenterBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gameCenterBlocked'");
    }

    /**
     * Gets the gamingBlockGameCenterFriends property value. Indicates whether or not to block the user from having friends in Game Center. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getGamingBlockGameCenterFriends(): ?bool {
        $val = $this->getBackingStore()->get('gamingBlockGameCenterFriends');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gamingBlockGameCenterFriends'");
    }

    /**
     * Gets the gamingBlockMultiplayer property value. Indicates whether or not to block the user from using multiplayer gaming. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getGamingBlockMultiplayer(): ?bool {
        $val = $this->getBackingStore()->get('gamingBlockMultiplayer');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gamingBlockMultiplayer'");
    }

    /**
     * Gets the hostPairingBlocked property value. indicates whether or not to allow host pairing to control the devices an iOS device can pair with when the iOS device is in supervised mode.
     * @return bool|null
    */
    public function getHostPairingBlocked(): ?bool {
        $val = $this->getBackingStore()->get('hostPairingBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostPairingBlocked'");
    }

    /**
     * Gets the iBooksStoreBlocked property value. Indicates whether or not to block the user from using the iBooks Store when the device is in supervised mode.
     * @return bool|null
    */
    public function getIBooksStoreBlocked(): ?bool {
        $val = $this->getBackingStore()->get('iBooksStoreBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iBooksStoreBlocked'");
    }

    /**
     * Gets the iBooksStoreBlockErotica property value. Indicates whether or not to block the user from downloading media from the iBookstore that has been tagged as erotica.
     * @return bool|null
    */
    public function getIBooksStoreBlockErotica(): ?bool {
        $val = $this->getBackingStore()->get('iBooksStoreBlockErotica');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iBooksStoreBlockErotica'");
    }

    /**
     * Gets the iCloudBlockActivityContinuation property value. Indicates whether or not to block the user from continuing work they started on iOS device to another iOS or macOS device.
     * @return bool|null
    */
    public function getICloudBlockActivityContinuation(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockActivityContinuation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockActivityContinuation'");
    }

    /**
     * Gets the iCloudBlockBackup property value. Indicates whether or not to block iCloud backup. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getICloudBlockBackup(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockBackup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockBackup'");
    }

    /**
     * Gets the iCloudBlockDocumentSync property value. Indicates whether or not to block iCloud document sync. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getICloudBlockDocumentSync(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockDocumentSync');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockDocumentSync'");
    }

    /**
     * Gets the iCloudBlockManagedAppsSync property value. Indicates whether or not to block Managed Apps Cloud Sync.
     * @return bool|null
    */
    public function getICloudBlockManagedAppsSync(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockManagedAppsSync');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockManagedAppsSync'");
    }

    /**
     * Gets the iCloudBlockPhotoLibrary property value. Indicates whether or not to block iCloud Photo Library.
     * @return bool|null
    */
    public function getICloudBlockPhotoLibrary(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockPhotoLibrary');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockPhotoLibrary'");
    }

    /**
     * Gets the iCloudBlockPhotoStreamSync property value. Indicates whether or not to block iCloud Photo Stream Sync.
     * @return bool|null
    */
    public function getICloudBlockPhotoStreamSync(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockPhotoStreamSync');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockPhotoStreamSync'");
    }

    /**
     * Gets the iCloudBlockSharedPhotoStream property value. Indicates whether or not to block Shared Photo Stream.
     * @return bool|null
    */
    public function getICloudBlockSharedPhotoStream(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockSharedPhotoStream');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockSharedPhotoStream'");
    }

    /**
     * Gets the iCloudRequireEncryptedBackup property value. Indicates whether or not to require backups to iCloud be encrypted.
     * @return bool|null
    */
    public function getICloudRequireEncryptedBackup(): ?bool {
        $val = $this->getBackingStore()->get('iCloudRequireEncryptedBackup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudRequireEncryptedBackup'");
    }

    /**
     * Gets the iTunesBlockExplicitContent property value. Indicates whether or not to block the user from accessing explicit content in iTunes and the App Store. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getITunesBlockExplicitContent(): ?bool {
        $val = $this->getBackingStore()->get('iTunesBlockExplicitContent');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iTunesBlockExplicitContent'");
    }

    /**
     * Gets the iTunesBlockMusicService property value. Indicates whether or not to block Music service and revert Music app to classic mode when the device is in supervised mode (iOS 9.3 and later and macOS 10.12 and later).
     * @return bool|null
    */
    public function getITunesBlockMusicService(): ?bool {
        $val = $this->getBackingStore()->get('iTunesBlockMusicService');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iTunesBlockMusicService'");
    }

    /**
     * Gets the iTunesBlockRadio property value. Indicates whether or not to block the user from using iTunes Radio when the device is in supervised mode (iOS 9.3 and later).
     * @return bool|null
    */
    public function getITunesBlockRadio(): ?bool {
        $val = $this->getBackingStore()->get('iTunesBlockRadio');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iTunesBlockRadio'");
    }

    /**
     * Gets the keyboardBlockAutoCorrect property value. Indicates whether or not to block keyboard auto-correction when the device is in supervised mode (iOS 8.1.3 and later).
     * @return bool|null
    */
    public function getKeyboardBlockAutoCorrect(): ?bool {
        $val = $this->getBackingStore()->get('keyboardBlockAutoCorrect');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyboardBlockAutoCorrect'");
    }

    /**
     * Gets the keyboardBlockDictation property value. Indicates whether or not to block the user from using dictation input when the device is in supervised mode.
     * @return bool|null
    */
    public function getKeyboardBlockDictation(): ?bool {
        $val = $this->getBackingStore()->get('keyboardBlockDictation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyboardBlockDictation'");
    }

    /**
     * Gets the keyboardBlockPredictive property value. Indicates whether or not to block predictive keyboards when device is in supervised mode (iOS 8.1.3 and later).
     * @return bool|null
    */
    public function getKeyboardBlockPredictive(): ?bool {
        $val = $this->getBackingStore()->get('keyboardBlockPredictive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyboardBlockPredictive'");
    }

    /**
     * Gets the keyboardBlockShortcuts property value. Indicates whether or not to block keyboard shortcuts when the device is in supervised mode (iOS 9.0 and later).
     * @return bool|null
    */
    public function getKeyboardBlockShortcuts(): ?bool {
        $val = $this->getBackingStore()->get('keyboardBlockShortcuts');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyboardBlockShortcuts'");
    }

    /**
     * Gets the keyboardBlockSpellCheck property value. Indicates whether or not to block keyboard spell-checking when the device is in supervised mode (iOS 8.1.3 and later).
     * @return bool|null
    */
    public function getKeyboardBlockSpellCheck(): ?bool {
        $val = $this->getBackingStore()->get('keyboardBlockSpellCheck');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyboardBlockSpellCheck'");
    }

    /**
     * Gets the kioskModeAllowAssistiveSpeak property value. Indicates whether or not to allow assistive speak while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeAllowAssistiveSpeak(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeAllowAssistiveSpeak');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeAllowAssistiveSpeak'");
    }

    /**
     * Gets the kioskModeAllowAssistiveTouchSettings property value. Indicates whether or not to allow access to the Assistive Touch Settings while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeAllowAssistiveTouchSettings(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeAllowAssistiveTouchSettings');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeAllowAssistiveTouchSettings'");
    }

    /**
     * Gets the kioskModeAllowAutoLock property value. Indicates whether or not to allow device auto lock while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockAutoLock instead.
     * @return bool|null
    */
    public function getKioskModeAllowAutoLock(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeAllowAutoLock');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeAllowAutoLock'");
    }

    /**
     * Gets the kioskModeAllowColorInversionSettings property value. Indicates whether or not to allow access to the Color Inversion Settings while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeAllowColorInversionSettings(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeAllowColorInversionSettings');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeAllowColorInversionSettings'");
    }

    /**
     * Gets the kioskModeAllowRingerSwitch property value. Indicates whether or not to allow use of the ringer switch while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockRingerSwitch instead.
     * @return bool|null
    */
    public function getKioskModeAllowRingerSwitch(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeAllowRingerSwitch');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeAllowRingerSwitch'");
    }

    /**
     * Gets the kioskModeAllowScreenRotation property value. Indicates whether or not to allow screen rotation while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockScreenRotation instead.
     * @return bool|null
    */
    public function getKioskModeAllowScreenRotation(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeAllowScreenRotation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeAllowScreenRotation'");
    }

    /**
     * Gets the kioskModeAllowSleepButton property value. Indicates whether or not to allow use of the sleep button while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockSleepButton instead.
     * @return bool|null
    */
    public function getKioskModeAllowSleepButton(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeAllowSleepButton');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeAllowSleepButton'");
    }

    /**
     * Gets the kioskModeAllowTouchscreen property value. Indicates whether or not to allow use of the touchscreen while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockTouchscreen instead.
     * @return bool|null
    */
    public function getKioskModeAllowTouchscreen(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeAllowTouchscreen');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeAllowTouchscreen'");
    }

    /**
     * Gets the kioskModeAllowVoiceOverSettings property value. Indicates whether or not to allow access to the voice over settings while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeAllowVoiceOverSettings(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeAllowVoiceOverSettings');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeAllowVoiceOverSettings'");
    }

    /**
     * Gets the kioskModeAllowVolumeButtons property value. Indicates whether or not to allow use of the volume buttons while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockVolumeButtons instead.
     * @return bool|null
    */
    public function getKioskModeAllowVolumeButtons(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeAllowVolumeButtons');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeAllowVolumeButtons'");
    }

    /**
     * Gets the kioskModeAllowZoomSettings property value. Indicates whether or not to allow access to the zoom settings while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeAllowZoomSettings(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeAllowZoomSettings');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeAllowZoomSettings'");
    }

    /**
     * Gets the kioskModeAppStoreUrl property value. URL in the app store to the app to use for kiosk mode. Use if KioskModeManagedAppId is not known.
     * @return string|null
    */
    public function getKioskModeAppStoreUrl(): ?string {
        $val = $this->getBackingStore()->get('kioskModeAppStoreUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeAppStoreUrl'");
    }

    /**
     * Gets the kioskModeBuiltInAppId property value. ID for built-in apps to use for kiosk mode. Used when KioskModeManagedAppId and KioskModeAppStoreUrl are not set.
     * @return string|null
    */
    public function getKioskModeBuiltInAppId(): ?string {
        $val = $this->getBackingStore()->get('kioskModeBuiltInAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeBuiltInAppId'");
    }

    /**
     * Gets the kioskModeManagedAppId property value. Managed app id of the app to use for kiosk mode. If KioskModeManagedAppId is specified then KioskModeAppStoreUrl will be ignored.
     * @return string|null
    */
    public function getKioskModeManagedAppId(): ?string {
        $val = $this->getBackingStore()->get('kioskModeManagedAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeManagedAppId'");
    }

    /**
     * Gets the kioskModeRequireAssistiveTouch property value. Indicates whether or not to require assistive touch while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeRequireAssistiveTouch(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeRequireAssistiveTouch');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeRequireAssistiveTouch'");
    }

    /**
     * Gets the kioskModeRequireColorInversion property value. Indicates whether or not to require color inversion while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeRequireColorInversion(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeRequireColorInversion');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeRequireColorInversion'");
    }

    /**
     * Gets the kioskModeRequireMonoAudio property value. Indicates whether or not to require mono audio while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeRequireMonoAudio(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeRequireMonoAudio');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeRequireMonoAudio'");
    }

    /**
     * Gets the kioskModeRequireVoiceOver property value. Indicates whether or not to require voice over while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeRequireVoiceOver(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeRequireVoiceOver');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeRequireVoiceOver'");
    }

    /**
     * Gets the kioskModeRequireZoom property value. Indicates whether or not to require zoom while in kiosk mode.
     * @return bool|null
    */
    public function getKioskModeRequireZoom(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeRequireZoom');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeRequireZoom'");
    }

    /**
     * Gets the lockScreenBlockControlCenter property value. Indicates whether or not to block the user from using control center on the lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockControlCenter(): ?bool {
        $val = $this->getBackingStore()->get('lockScreenBlockControlCenter');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lockScreenBlockControlCenter'");
    }

    /**
     * Gets the lockScreenBlockNotificationView property value. Indicates whether or not to block the user from using the notification view on the lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockNotificationView(): ?bool {
        $val = $this->getBackingStore()->get('lockScreenBlockNotificationView');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lockScreenBlockNotificationView'");
    }

    /**
     * Gets the lockScreenBlockPassbook property value. Indicates whether or not to block the user from using passbook when the device is locked.
     * @return bool|null
    */
    public function getLockScreenBlockPassbook(): ?bool {
        $val = $this->getBackingStore()->get('lockScreenBlockPassbook');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lockScreenBlockPassbook'");
    }

    /**
     * Gets the lockScreenBlockTodayView property value. Indicates whether or not to block the user from using the Today View on the lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockTodayView(): ?bool {
        $val = $this->getBackingStore()->get('lockScreenBlockTodayView');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lockScreenBlockTodayView'");
    }

    /**
     * Gets the mediaContentRatingApps property value. Apps rating as in media content
     * @return RatingAppsType|null
    */
    public function getMediaContentRatingApps(): ?RatingAppsType {
        $val = $this->getBackingStore()->get('mediaContentRatingApps');
        if (is_null($val) || $val instanceof RatingAppsType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaContentRatingApps'");
    }

    /**
     * Gets the mediaContentRatingAustralia property value. Media content rating settings for Australia
     * @return MediaContentRatingAustralia|null
    */
    public function getMediaContentRatingAustralia(): ?MediaContentRatingAustralia {
        $val = $this->getBackingStore()->get('mediaContentRatingAustralia');
        if (is_null($val) || $val instanceof MediaContentRatingAustralia) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaContentRatingAustralia'");
    }

    /**
     * Gets the mediaContentRatingCanada property value. Media content rating settings for Canada
     * @return MediaContentRatingCanada|null
    */
    public function getMediaContentRatingCanada(): ?MediaContentRatingCanada {
        $val = $this->getBackingStore()->get('mediaContentRatingCanada');
        if (is_null($val) || $val instanceof MediaContentRatingCanada) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaContentRatingCanada'");
    }

    /**
     * Gets the mediaContentRatingFrance property value. Media content rating settings for France
     * @return MediaContentRatingFrance|null
    */
    public function getMediaContentRatingFrance(): ?MediaContentRatingFrance {
        $val = $this->getBackingStore()->get('mediaContentRatingFrance');
        if (is_null($val) || $val instanceof MediaContentRatingFrance) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaContentRatingFrance'");
    }

    /**
     * Gets the mediaContentRatingGermany property value. Media content rating settings for Germany
     * @return MediaContentRatingGermany|null
    */
    public function getMediaContentRatingGermany(): ?MediaContentRatingGermany {
        $val = $this->getBackingStore()->get('mediaContentRatingGermany');
        if (is_null($val) || $val instanceof MediaContentRatingGermany) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaContentRatingGermany'");
    }

    /**
     * Gets the mediaContentRatingIreland property value. Media content rating settings for Ireland
     * @return MediaContentRatingIreland|null
    */
    public function getMediaContentRatingIreland(): ?MediaContentRatingIreland {
        $val = $this->getBackingStore()->get('mediaContentRatingIreland');
        if (is_null($val) || $val instanceof MediaContentRatingIreland) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaContentRatingIreland'");
    }

    /**
     * Gets the mediaContentRatingJapan property value. Media content rating settings for Japan
     * @return MediaContentRatingJapan|null
    */
    public function getMediaContentRatingJapan(): ?MediaContentRatingJapan {
        $val = $this->getBackingStore()->get('mediaContentRatingJapan');
        if (is_null($val) || $val instanceof MediaContentRatingJapan) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaContentRatingJapan'");
    }

    /**
     * Gets the mediaContentRatingNewZealand property value. Media content rating settings for New Zealand
     * @return MediaContentRatingNewZealand|null
    */
    public function getMediaContentRatingNewZealand(): ?MediaContentRatingNewZealand {
        $val = $this->getBackingStore()->get('mediaContentRatingNewZealand');
        if (is_null($val) || $val instanceof MediaContentRatingNewZealand) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaContentRatingNewZealand'");
    }

    /**
     * Gets the mediaContentRatingUnitedKingdom property value. Media content rating settings for United Kingdom
     * @return MediaContentRatingUnitedKingdom|null
    */
    public function getMediaContentRatingUnitedKingdom(): ?MediaContentRatingUnitedKingdom {
        $val = $this->getBackingStore()->get('mediaContentRatingUnitedKingdom');
        if (is_null($val) || $val instanceof MediaContentRatingUnitedKingdom) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaContentRatingUnitedKingdom'");
    }

    /**
     * Gets the mediaContentRatingUnitedStates property value. Media content rating settings for United States
     * @return MediaContentRatingUnitedStates|null
    */
    public function getMediaContentRatingUnitedStates(): ?MediaContentRatingUnitedStates {
        $val = $this->getBackingStore()->get('mediaContentRatingUnitedStates');
        if (is_null($val) || $val instanceof MediaContentRatingUnitedStates) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaContentRatingUnitedStates'");
    }

    /**
     * Gets the messagesBlocked property value. Indicates whether or not to block the user from using the Messages app on the supervised device.
     * @return bool|null
    */
    public function getMessagesBlocked(): ?bool {
        $val = $this->getBackingStore()->get('messagesBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messagesBlocked'");
    }

    /**
     * Gets the networkUsageRules property value. List of managed apps and the network rules that applies to them. This collection can contain a maximum of 1000 elements.
     * @return array<IosNetworkUsageRule>|null
    */
    public function getNetworkUsageRules(): ?array {
        $val = $this->getBackingStore()->get('networkUsageRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosNetworkUsageRule::class);
            /** @var array<IosNetworkUsageRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkUsageRules'");
    }

    /**
     * Gets the notificationsBlockSettingsModification property value. Indicates whether or not to allow notifications settings modification (iOS 9.3 and later).
     * @return bool|null
    */
    public function getNotificationsBlockSettingsModification(): ?bool {
        $val = $this->getBackingStore()->get('notificationsBlockSettingsModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationsBlockSettingsModification'");
    }

    /**
     * Gets the passcodeBlockFingerprintModification property value. Block modification of registered Touch ID fingerprints when in supervised mode.
     * @return bool|null
    */
    public function getPasscodeBlockFingerprintModification(): ?bool {
        $val = $this->getBackingStore()->get('passcodeBlockFingerprintModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeBlockFingerprintModification'");
    }

    /**
     * Gets the passcodeBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     * @return bool|null
    */
    public function getPasscodeBlockFingerprintUnlock(): ?bool {
        $val = $this->getBackingStore()->get('passcodeBlockFingerprintUnlock');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeBlockFingerprintUnlock'");
    }

    /**
     * Gets the passcodeBlockModification property value. Indicates whether or not to allow passcode modification on the supervised device (iOS 9.0 and later).
     * @return bool|null
    */
    public function getPasscodeBlockModification(): ?bool {
        $val = $this->getBackingStore()->get('passcodeBlockModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeBlockModification'");
    }

    /**
     * Gets the passcodeBlockSimple property value. Indicates whether or not to block simple passcodes.
     * @return bool|null
    */
    public function getPasscodeBlockSimple(): ?bool {
        $val = $this->getBackingStore()->get('passcodeBlockSimple');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeBlockSimple'");
    }

    /**
     * Gets the passcodeExpirationDays property value. Number of days before the passcode expires. Valid values 1 to 65535
     * @return int|null
    */
    public function getPasscodeExpirationDays(): ?int {
        $val = $this->getBackingStore()->get('passcodeExpirationDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeExpirationDays'");
    }

    /**
     * Gets the passcodeMinimumCharacterSetCount property value. Number of character sets a passcode must contain. Valid values 0 to 4
     * @return int|null
    */
    public function getPasscodeMinimumCharacterSetCount(): ?int {
        $val = $this->getBackingStore()->get('passcodeMinimumCharacterSetCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeMinimumCharacterSetCount'");
    }

    /**
     * Gets the passcodeMinimumLength property value. Minimum length of passcode. Valid values 4 to 14
     * @return int|null
    */
    public function getPasscodeMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('passcodeMinimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeMinimumLength'");
    }

    /**
     * Gets the passcodeMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a passcode is required.
     * @return int|null
    */
    public function getPasscodeMinutesOfInactivityBeforeLock(): ?int {
        $val = $this->getBackingStore()->get('passcodeMinutesOfInactivityBeforeLock');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeMinutesOfInactivityBeforeLock'");
    }

    /**
     * Gets the passcodeMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasscodeMinutesOfInactivityBeforeScreenTimeout(): ?int {
        $val = $this->getBackingStore()->get('passcodeMinutesOfInactivityBeforeScreenTimeout');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeMinutesOfInactivityBeforeScreenTimeout'");
    }

    /**
     * Gets the passcodePreviousPasscodeBlockCount property value. Number of previous passcodes to block. Valid values 1 to 24
     * @return int|null
    */
    public function getPasscodePreviousPasscodeBlockCount(): ?int {
        $val = $this->getBackingStore()->get('passcodePreviousPasscodeBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodePreviousPasscodeBlockCount'");
    }

    /**
     * Gets the passcodeRequired property value. Indicates whether or not to require a passcode.
     * @return bool|null
    */
    public function getPasscodeRequired(): ?bool {
        $val = $this->getBackingStore()->get('passcodeRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeRequired'");
    }

    /**
     * Gets the passcodeRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasscodeRequiredType(): ?RequiredPasswordType {
        $val = $this->getBackingStore()->get('passcodeRequiredType');
        if (is_null($val) || $val instanceof RequiredPasswordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeRequiredType'");
    }

    /**
     * Gets the passcodeSignInFailureCountBeforeWipe property value. Number of sign in failures allowed before wiping the device. Valid values 2 to 11
     * @return int|null
    */
    public function getPasscodeSignInFailureCountBeforeWipe(): ?int {
        $val = $this->getBackingStore()->get('passcodeSignInFailureCountBeforeWipe');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeSignInFailureCountBeforeWipe'");
    }

    /**
     * Gets the podcastsBlocked property value. Indicates whether or not to block the user from using podcasts on the supervised device (iOS 8.0 and later).
     * @return bool|null
    */
    public function getPodcastsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('podcastsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'podcastsBlocked'");
    }

    /**
     * Gets the safariBlockAutofill property value. Indicates whether or not to block the user from using Auto fill in Safari. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getSafariBlockAutofill(): ?bool {
        $val = $this->getBackingStore()->get('safariBlockAutofill');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safariBlockAutofill'");
    }

    /**
     * Gets the safariBlocked property value. Indicates whether or not to block the user from using Safari. Requires a supervised device for iOS 13 and later.
     * @return bool|null
    */
    public function getSafariBlocked(): ?bool {
        $val = $this->getBackingStore()->get('safariBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safariBlocked'");
    }

    /**
     * Gets the safariBlockJavaScript property value. Indicates whether or not to block JavaScript in Safari.
     * @return bool|null
    */
    public function getSafariBlockJavaScript(): ?bool {
        $val = $this->getBackingStore()->get('safariBlockJavaScript');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safariBlockJavaScript'");
    }

    /**
     * Gets the safariBlockPopups property value. Indicates whether or not to block popups in Safari.
     * @return bool|null
    */
    public function getSafariBlockPopups(): ?bool {
        $val = $this->getBackingStore()->get('safariBlockPopups');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safariBlockPopups'");
    }

    /**
     * Gets the safariCookieSettings property value. Web Browser Cookie Settings.
     * @return WebBrowserCookieSettings|null
    */
    public function getSafariCookieSettings(): ?WebBrowserCookieSettings {
        $val = $this->getBackingStore()->get('safariCookieSettings');
        if (is_null($val) || $val instanceof WebBrowserCookieSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safariCookieSettings'");
    }

    /**
     * Gets the safariManagedDomains property value. URLs matching the patterns listed here will be considered managed.
     * @return array<string>|null
    */
    public function getSafariManagedDomains(): ?array {
        $val = $this->getBackingStore()->get('safariManagedDomains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safariManagedDomains'");
    }

    /**
     * Gets the safariPasswordAutoFillDomains property value. Users can save passwords in Safari only from URLs matching the patterns listed here. Applies to devices in supervised mode (iOS 9.3 and later).
     * @return array<string>|null
    */
    public function getSafariPasswordAutoFillDomains(): ?array {
        $val = $this->getBackingStore()->get('safariPasswordAutoFillDomains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safariPasswordAutoFillDomains'");
    }

    /**
     * Gets the safariRequireFraudWarning property value. Indicates whether or not to require fraud warning in Safari.
     * @return bool|null
    */
    public function getSafariRequireFraudWarning(): ?bool {
        $val = $this->getBackingStore()->get('safariRequireFraudWarning');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safariRequireFraudWarning'");
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to block the user from taking Screenshots.
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
     * Gets the siriBlocked property value. Indicates whether or not to block the user from using Siri.
     * @return bool|null
    */
    public function getSiriBlocked(): ?bool {
        $val = $this->getBackingStore()->get('siriBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siriBlocked'");
    }

    /**
     * Gets the siriBlockedWhenLocked property value. Indicates whether or not to block the user from using Siri when locked.
     * @return bool|null
    */
    public function getSiriBlockedWhenLocked(): ?bool {
        $val = $this->getBackingStore()->get('siriBlockedWhenLocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siriBlockedWhenLocked'");
    }

    /**
     * Gets the siriBlockUserGeneratedContent property value. Indicates whether or not to block Siri from querying user-generated content when used on a supervised device.
     * @return bool|null
    */
    public function getSiriBlockUserGeneratedContent(): ?bool {
        $val = $this->getBackingStore()->get('siriBlockUserGeneratedContent');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siriBlockUserGeneratedContent'");
    }

    /**
     * Gets the siriRequireProfanityFilter property value. Indicates whether or not to prevent Siri from dictating, or speaking profane language on supervised device.
     * @return bool|null
    */
    public function getSiriRequireProfanityFilter(): ?bool {
        $val = $this->getBackingStore()->get('siriRequireProfanityFilter');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siriRequireProfanityFilter'");
    }

    /**
     * Gets the spotlightBlockInternetResults property value. Indicates whether or not to block Spotlight search from returning internet results on supervised device.
     * @return bool|null
    */
    public function getSpotlightBlockInternetResults(): ?bool {
        $val = $this->getBackingStore()->get('spotlightBlockInternetResults');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'spotlightBlockInternetResults'");
    }

    /**
     * Gets the voiceDialingBlocked property value. Indicates whether or not to block voice dialing.
     * @return bool|null
    */
    public function getVoiceDialingBlocked(): ?bool {
        $val = $this->getBackingStore()->get('voiceDialingBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'voiceDialingBlocked'");
    }

    /**
     * Gets the wallpaperBlockModification property value. Indicates whether or not to allow wallpaper modification on supervised device (iOS 9.0 and later) .
     * @return bool|null
    */
    public function getWallpaperBlockModification(): ?bool {
        $val = $this->getBackingStore()->get('wallpaperBlockModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wallpaperBlockModification'");
    }

    /**
     * Gets the wiFiConnectOnlyToConfiguredNetworks property value. Indicates whether or not to force the device to use only Wi-Fi networks from configuration profiles when the device is in supervised mode. Available for devices running iOS and iPadOS versions 14.4 and earlier. Devices running 14.5+ should use the setting, 'WiFiConnectToAllowedNetworksOnlyForced.
     * @return bool|null
    */
    public function getWiFiConnectOnlyToConfiguredNetworks(): ?bool {
        $val = $this->getBackingStore()->get('wiFiConnectOnlyToConfiguredNetworks');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wiFiConnectOnlyToConfiguredNetworks'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountBlockModification', $this->getAccountBlockModification());
        $writer->writeBooleanValue('activationLockAllowWhenSupervised', $this->getActivationLockAllowWhenSupervised());
        $writer->writeBooleanValue('airDropBlocked', $this->getAirDropBlocked());
        $writer->writeBooleanValue('airDropForceUnmanagedDropTarget', $this->getAirDropForceUnmanagedDropTarget());
        $writer->writeBooleanValue('airPlayForcePairingPasswordForOutgoingRequests', $this->getAirPlayForcePairingPasswordForOutgoingRequests());
        $writer->writeBooleanValue('appleNewsBlocked', $this->getAppleNewsBlocked());
        $writer->writeBooleanValue('appleWatchBlockPairing', $this->getAppleWatchBlockPairing());
        $writer->writeBooleanValue('appleWatchForceWristDetection', $this->getAppleWatchForceWristDetection());
        $writer->writeCollectionOfObjectValues('appsSingleAppModeList', $this->getAppsSingleAppModeList());
        $writer->writeBooleanValue('appStoreBlockAutomaticDownloads', $this->getAppStoreBlockAutomaticDownloads());
        $writer->writeBooleanValue('appStoreBlocked', $this->getAppStoreBlocked());
        $writer->writeBooleanValue('appStoreBlockInAppPurchases', $this->getAppStoreBlockInAppPurchases());
        $writer->writeBooleanValue('appStoreBlockUIAppInstallation', $this->getAppStoreBlockUIAppInstallation());
        $writer->writeBooleanValue('appStoreRequirePassword', $this->getAppStoreRequirePassword());
        $writer->writeCollectionOfObjectValues('appsVisibilityList', $this->getAppsVisibilityList());
        $writer->writeEnumValue('appsVisibilityListType', $this->getAppsVisibilityListType());
        $writer->writeBooleanValue('bluetoothBlockModification', $this->getBluetoothBlockModification());
        $writer->writeBooleanValue('cameraBlocked', $this->getCameraBlocked());
        $writer->writeBooleanValue('cellularBlockDataRoaming', $this->getCellularBlockDataRoaming());
        $writer->writeBooleanValue('cellularBlockGlobalBackgroundFetchWhileRoaming', $this->getCellularBlockGlobalBackgroundFetchWhileRoaming());
        $writer->writeBooleanValue('cellularBlockPerAppDataModification', $this->getCellularBlockPerAppDataModification());
        $writer->writeBooleanValue('cellularBlockPersonalHotspot', $this->getCellularBlockPersonalHotspot());
        $writer->writeBooleanValue('cellularBlockVoiceRoaming', $this->getCellularBlockVoiceRoaming());
        $writer->writeBooleanValue('certificatesBlockUntrustedTlsCertificates', $this->getCertificatesBlockUntrustedTlsCertificates());
        $writer->writeBooleanValue('classroomAppBlockRemoteScreenObservation', $this->getClassroomAppBlockRemoteScreenObservation());
        $writer->writeBooleanValue('classroomAppForceUnpromptedScreenObservation', $this->getClassroomAppForceUnpromptedScreenObservation());
        $writer->writeEnumValue('compliantAppListType', $this->getCompliantAppListType());
        $writer->writeCollectionOfObjectValues('compliantAppsList', $this->getCompliantAppsList());
        $writer->writeBooleanValue('configurationProfileBlockChanges', $this->getConfigurationProfileBlockChanges());
        $writer->writeBooleanValue('definitionLookupBlocked', $this->getDefinitionLookupBlocked());
        $writer->writeBooleanValue('deviceBlockEnableRestrictions', $this->getDeviceBlockEnableRestrictions());
        $writer->writeBooleanValue('deviceBlockEraseContentAndSettings', $this->getDeviceBlockEraseContentAndSettings());
        $writer->writeBooleanValue('deviceBlockNameModification', $this->getDeviceBlockNameModification());
        $writer->writeBooleanValue('diagnosticDataBlockSubmission', $this->getDiagnosticDataBlockSubmission());
        $writer->writeBooleanValue('diagnosticDataBlockSubmissionModification', $this->getDiagnosticDataBlockSubmissionModification());
        $writer->writeBooleanValue('documentsBlockManagedDocumentsInUnmanagedApps', $this->getDocumentsBlockManagedDocumentsInUnmanagedApps());
        $writer->writeBooleanValue('documentsBlockUnmanagedDocumentsInManagedApps', $this->getDocumentsBlockUnmanagedDocumentsInManagedApps());
        $writer->writeCollectionOfPrimitiveValues('emailInDomainSuffixes', $this->getEmailInDomainSuffixes());
        $writer->writeBooleanValue('enterpriseAppBlockTrust', $this->getEnterpriseAppBlockTrust());
        $writer->writeBooleanValue('enterpriseAppBlockTrustModification', $this->getEnterpriseAppBlockTrustModification());
        $writer->writeBooleanValue('faceTimeBlocked', $this->getFaceTimeBlocked());
        $writer->writeBooleanValue('findMyFriendsBlocked', $this->getFindMyFriendsBlocked());
        $writer->writeBooleanValue('gameCenterBlocked', $this->getGameCenterBlocked());
        $writer->writeBooleanValue('gamingBlockGameCenterFriends', $this->getGamingBlockGameCenterFriends());
        $writer->writeBooleanValue('gamingBlockMultiplayer', $this->getGamingBlockMultiplayer());
        $writer->writeBooleanValue('hostPairingBlocked', $this->getHostPairingBlocked());
        $writer->writeBooleanValue('iBooksStoreBlocked', $this->getIBooksStoreBlocked());
        $writer->writeBooleanValue('iBooksStoreBlockErotica', $this->getIBooksStoreBlockErotica());
        $writer->writeBooleanValue('iCloudBlockActivityContinuation', $this->getICloudBlockActivityContinuation());
        $writer->writeBooleanValue('iCloudBlockBackup', $this->getICloudBlockBackup());
        $writer->writeBooleanValue('iCloudBlockDocumentSync', $this->getICloudBlockDocumentSync());
        $writer->writeBooleanValue('iCloudBlockManagedAppsSync', $this->getICloudBlockManagedAppsSync());
        $writer->writeBooleanValue('iCloudBlockPhotoLibrary', $this->getICloudBlockPhotoLibrary());
        $writer->writeBooleanValue('iCloudBlockPhotoStreamSync', $this->getICloudBlockPhotoStreamSync());
        $writer->writeBooleanValue('iCloudBlockSharedPhotoStream', $this->getICloudBlockSharedPhotoStream());
        $writer->writeBooleanValue('iCloudRequireEncryptedBackup', $this->getICloudRequireEncryptedBackup());
        $writer->writeBooleanValue('iTunesBlockExplicitContent', $this->getITunesBlockExplicitContent());
        $writer->writeBooleanValue('iTunesBlockMusicService', $this->getITunesBlockMusicService());
        $writer->writeBooleanValue('iTunesBlockRadio', $this->getITunesBlockRadio());
        $writer->writeBooleanValue('keyboardBlockAutoCorrect', $this->getKeyboardBlockAutoCorrect());
        $writer->writeBooleanValue('keyboardBlockDictation', $this->getKeyboardBlockDictation());
        $writer->writeBooleanValue('keyboardBlockPredictive', $this->getKeyboardBlockPredictive());
        $writer->writeBooleanValue('keyboardBlockShortcuts', $this->getKeyboardBlockShortcuts());
        $writer->writeBooleanValue('keyboardBlockSpellCheck', $this->getKeyboardBlockSpellCheck());
        $writer->writeBooleanValue('kioskModeAllowAssistiveSpeak', $this->getKioskModeAllowAssistiveSpeak());
        $writer->writeBooleanValue('kioskModeAllowAssistiveTouchSettings', $this->getKioskModeAllowAssistiveTouchSettings());
        $writer->writeBooleanValue('kioskModeAllowAutoLock', $this->getKioskModeAllowAutoLock());
        $writer->writeBooleanValue('kioskModeAllowColorInversionSettings', $this->getKioskModeAllowColorInversionSettings());
        $writer->writeBooleanValue('kioskModeAllowRingerSwitch', $this->getKioskModeAllowRingerSwitch());
        $writer->writeBooleanValue('kioskModeAllowScreenRotation', $this->getKioskModeAllowScreenRotation());
        $writer->writeBooleanValue('kioskModeAllowSleepButton', $this->getKioskModeAllowSleepButton());
        $writer->writeBooleanValue('kioskModeAllowTouchscreen', $this->getKioskModeAllowTouchscreen());
        $writer->writeBooleanValue('kioskModeAllowVoiceOverSettings', $this->getKioskModeAllowVoiceOverSettings());
        $writer->writeBooleanValue('kioskModeAllowVolumeButtons', $this->getKioskModeAllowVolumeButtons());
        $writer->writeBooleanValue('kioskModeAllowZoomSettings', $this->getKioskModeAllowZoomSettings());
        $writer->writeStringValue('kioskModeAppStoreUrl', $this->getKioskModeAppStoreUrl());
        $writer->writeStringValue('kioskModeBuiltInAppId', $this->getKioskModeBuiltInAppId());
        $writer->writeStringValue('kioskModeManagedAppId', $this->getKioskModeManagedAppId());
        $writer->writeBooleanValue('kioskModeRequireAssistiveTouch', $this->getKioskModeRequireAssistiveTouch());
        $writer->writeBooleanValue('kioskModeRequireColorInversion', $this->getKioskModeRequireColorInversion());
        $writer->writeBooleanValue('kioskModeRequireMonoAudio', $this->getKioskModeRequireMonoAudio());
        $writer->writeBooleanValue('kioskModeRequireVoiceOver', $this->getKioskModeRequireVoiceOver());
        $writer->writeBooleanValue('kioskModeRequireZoom', $this->getKioskModeRequireZoom());
        $writer->writeBooleanValue('lockScreenBlockControlCenter', $this->getLockScreenBlockControlCenter());
        $writer->writeBooleanValue('lockScreenBlockNotificationView', $this->getLockScreenBlockNotificationView());
        $writer->writeBooleanValue('lockScreenBlockPassbook', $this->getLockScreenBlockPassbook());
        $writer->writeBooleanValue('lockScreenBlockTodayView', $this->getLockScreenBlockTodayView());
        $writer->writeEnumValue('mediaContentRatingApps', $this->getMediaContentRatingApps());
        $writer->writeObjectValue('mediaContentRatingAustralia', $this->getMediaContentRatingAustralia());
        $writer->writeObjectValue('mediaContentRatingCanada', $this->getMediaContentRatingCanada());
        $writer->writeObjectValue('mediaContentRatingFrance', $this->getMediaContentRatingFrance());
        $writer->writeObjectValue('mediaContentRatingGermany', $this->getMediaContentRatingGermany());
        $writer->writeObjectValue('mediaContentRatingIreland', $this->getMediaContentRatingIreland());
        $writer->writeObjectValue('mediaContentRatingJapan', $this->getMediaContentRatingJapan());
        $writer->writeObjectValue('mediaContentRatingNewZealand', $this->getMediaContentRatingNewZealand());
        $writer->writeObjectValue('mediaContentRatingUnitedKingdom', $this->getMediaContentRatingUnitedKingdom());
        $writer->writeObjectValue('mediaContentRatingUnitedStates', $this->getMediaContentRatingUnitedStates());
        $writer->writeBooleanValue('messagesBlocked', $this->getMessagesBlocked());
        $writer->writeCollectionOfObjectValues('networkUsageRules', $this->getNetworkUsageRules());
        $writer->writeBooleanValue('notificationsBlockSettingsModification', $this->getNotificationsBlockSettingsModification());
        $writer->writeBooleanValue('passcodeBlockFingerprintModification', $this->getPasscodeBlockFingerprintModification());
        $writer->writeBooleanValue('passcodeBlockFingerprintUnlock', $this->getPasscodeBlockFingerprintUnlock());
        $writer->writeBooleanValue('passcodeBlockModification', $this->getPasscodeBlockModification());
        $writer->writeBooleanValue('passcodeBlockSimple', $this->getPasscodeBlockSimple());
        $writer->writeIntegerValue('passcodeExpirationDays', $this->getPasscodeExpirationDays());
        $writer->writeIntegerValue('passcodeMinimumCharacterSetCount', $this->getPasscodeMinimumCharacterSetCount());
        $writer->writeIntegerValue('passcodeMinimumLength', $this->getPasscodeMinimumLength());
        $writer->writeIntegerValue('passcodeMinutesOfInactivityBeforeLock', $this->getPasscodeMinutesOfInactivityBeforeLock());
        $writer->writeIntegerValue('passcodeMinutesOfInactivityBeforeScreenTimeout', $this->getPasscodeMinutesOfInactivityBeforeScreenTimeout());
        $writer->writeIntegerValue('passcodePreviousPasscodeBlockCount', $this->getPasscodePreviousPasscodeBlockCount());
        $writer->writeBooleanValue('passcodeRequired', $this->getPasscodeRequired());
        $writer->writeEnumValue('passcodeRequiredType', $this->getPasscodeRequiredType());
        $writer->writeIntegerValue('passcodeSignInFailureCountBeforeWipe', $this->getPasscodeSignInFailureCountBeforeWipe());
        $writer->writeBooleanValue('podcastsBlocked', $this->getPodcastsBlocked());
        $writer->writeBooleanValue('safariBlockAutofill', $this->getSafariBlockAutofill());
        $writer->writeBooleanValue('safariBlocked', $this->getSafariBlocked());
        $writer->writeBooleanValue('safariBlockJavaScript', $this->getSafariBlockJavaScript());
        $writer->writeBooleanValue('safariBlockPopups', $this->getSafariBlockPopups());
        $writer->writeEnumValue('safariCookieSettings', $this->getSafariCookieSettings());
        $writer->writeCollectionOfPrimitiveValues('safariManagedDomains', $this->getSafariManagedDomains());
        $writer->writeCollectionOfPrimitiveValues('safariPasswordAutoFillDomains', $this->getSafariPasswordAutoFillDomains());
        $writer->writeBooleanValue('safariRequireFraudWarning', $this->getSafariRequireFraudWarning());
        $writer->writeBooleanValue('screenCaptureBlocked', $this->getScreenCaptureBlocked());
        $writer->writeBooleanValue('siriBlocked', $this->getSiriBlocked());
        $writer->writeBooleanValue('siriBlockedWhenLocked', $this->getSiriBlockedWhenLocked());
        $writer->writeBooleanValue('siriBlockUserGeneratedContent', $this->getSiriBlockUserGeneratedContent());
        $writer->writeBooleanValue('siriRequireProfanityFilter', $this->getSiriRequireProfanityFilter());
        $writer->writeBooleanValue('spotlightBlockInternetResults', $this->getSpotlightBlockInternetResults());
        $writer->writeBooleanValue('voiceDialingBlocked', $this->getVoiceDialingBlocked());
        $writer->writeBooleanValue('wallpaperBlockModification', $this->getWallpaperBlockModification());
        $writer->writeBooleanValue('wiFiConnectOnlyToConfiguredNetworks', $this->getWiFiConnectOnlyToConfiguredNetworks());
    }

    /**
     * Sets the accountBlockModification property value. Indicates whether or not to allow account modification when the device is in supervised mode.
     * @param bool|null $value Value to set for the accountBlockModification property.
    */
    public function setAccountBlockModification(?bool $value): void {
        $this->getBackingStore()->set('accountBlockModification', $value);
    }

    /**
     * Sets the activationLockAllowWhenSupervised property value. Indicates whether or not to allow activation lock when the device is in the supervised mode.
     * @param bool|null $value Value to set for the activationLockAllowWhenSupervised property.
    */
    public function setActivationLockAllowWhenSupervised(?bool $value): void {
        $this->getBackingStore()->set('activationLockAllowWhenSupervised', $value);
    }

    /**
     * Sets the airDropBlocked property value. Indicates whether or not to allow AirDrop when the device is in supervised mode.
     * @param bool|null $value Value to set for the airDropBlocked property.
    */
    public function setAirDropBlocked(?bool $value): void {
        $this->getBackingStore()->set('airDropBlocked', $value);
    }

    /**
     * Sets the airDropForceUnmanagedDropTarget property value. Indicates whether or not to cause AirDrop to be considered an unmanaged drop target (iOS 9.0 and later).
     * @param bool|null $value Value to set for the airDropForceUnmanagedDropTarget property.
    */
    public function setAirDropForceUnmanagedDropTarget(?bool $value): void {
        $this->getBackingStore()->set('airDropForceUnmanagedDropTarget', $value);
    }

    /**
     * Sets the airPlayForcePairingPasswordForOutgoingRequests property value. Indicates whether or not to enforce all devices receiving AirPlay requests from this device to use a pairing password.
     * @param bool|null $value Value to set for the airPlayForcePairingPasswordForOutgoingRequests property.
    */
    public function setAirPlayForcePairingPasswordForOutgoingRequests(?bool $value): void {
        $this->getBackingStore()->set('airPlayForcePairingPasswordForOutgoingRequests', $value);
    }

    /**
     * Sets the appleNewsBlocked property value. Indicates whether or not to block the user from using News when the device is in supervised mode (iOS 9.0 and later).
     * @param bool|null $value Value to set for the appleNewsBlocked property.
    */
    public function setAppleNewsBlocked(?bool $value): void {
        $this->getBackingStore()->set('appleNewsBlocked', $value);
    }

    /**
     * Sets the appleWatchBlockPairing property value. Indicates whether or not to allow Apple Watch pairing when the device is in supervised mode (iOS 9.0 and later).
     * @param bool|null $value Value to set for the appleWatchBlockPairing property.
    */
    public function setAppleWatchBlockPairing(?bool $value): void {
        $this->getBackingStore()->set('appleWatchBlockPairing', $value);
    }

    /**
     * Sets the appleWatchForceWristDetection property value. Indicates whether or not to force a paired Apple Watch to use Wrist Detection (iOS 8.2 and later).
     * @param bool|null $value Value to set for the appleWatchForceWristDetection property.
    */
    public function setAppleWatchForceWristDetection(?bool $value): void {
        $this->getBackingStore()->set('appleWatchForceWristDetection', $value);
    }

    /**
     * Sets the appsSingleAppModeList property value. Gets or sets the list of iOS apps allowed to autonomously enter Single App Mode. Supervised only. iOS 7.0 and later. This collection can contain a maximum of 500 elements.
     * @param array<AppListItem>|null $value Value to set for the appsSingleAppModeList property.
    */
    public function setAppsSingleAppModeList(?array $value): void {
        $this->getBackingStore()->set('appsSingleAppModeList', $value);
    }

    /**
     * Sets the appStoreBlockAutomaticDownloads property value. Indicates whether or not to block the automatic downloading of apps purchased on other devices when the device is in supervised mode (iOS 9.0 and later).
     * @param bool|null $value Value to set for the appStoreBlockAutomaticDownloads property.
    */
    public function setAppStoreBlockAutomaticDownloads(?bool $value): void {
        $this->getBackingStore()->set('appStoreBlockAutomaticDownloads', $value);
    }

    /**
     * Sets the appStoreBlocked property value. Indicates whether or not to block the user from using the App Store. Requires a supervised device for iOS 13 and later.
     * @param bool|null $value Value to set for the appStoreBlocked property.
    */
    public function setAppStoreBlocked(?bool $value): void {
        $this->getBackingStore()->set('appStoreBlocked', $value);
    }

    /**
     * Sets the appStoreBlockInAppPurchases property value. Indicates whether or not to block the user from making in app purchases.
     * @param bool|null $value Value to set for the appStoreBlockInAppPurchases property.
    */
    public function setAppStoreBlockInAppPurchases(?bool $value): void {
        $this->getBackingStore()->set('appStoreBlockInAppPurchases', $value);
    }

    /**
     * Sets the appStoreBlockUIAppInstallation property value. Indicates whether or not to block the App Store app, not restricting installation through Host apps. Applies to supervised mode only (iOS 9.0 and later).
     * @param bool|null $value Value to set for the appStoreBlockUIAppInstallation property.
    */
    public function setAppStoreBlockUIAppInstallation(?bool $value): void {
        $this->getBackingStore()->set('appStoreBlockUIAppInstallation', $value);
    }

    /**
     * Sets the appStoreRequirePassword property value. Indicates whether or not to require a password when using the app store.
     * @param bool|null $value Value to set for the appStoreRequirePassword property.
    */
    public function setAppStoreRequirePassword(?bool $value): void {
        $this->getBackingStore()->set('appStoreRequirePassword', $value);
    }

    /**
     * Sets the appsVisibilityList property value. List of apps in the visibility list (either visible/launchable apps list or hidden/unlaunchable apps list, controlled by AppsVisibilityListType) (iOS 9.3 and later). This collection can contain a maximum of 10000 elements.
     * @param array<AppListItem>|null $value Value to set for the appsVisibilityList property.
    */
    public function setAppsVisibilityList(?array $value): void {
        $this->getBackingStore()->set('appsVisibilityList', $value);
    }

    /**
     * Sets the appsVisibilityListType property value. Possible values of the compliance app list.
     * @param AppListType|null $value Value to set for the appsVisibilityListType property.
    */
    public function setAppsVisibilityListType(?AppListType $value): void {
        $this->getBackingStore()->set('appsVisibilityListType', $value);
    }

    /**
     * Sets the bluetoothBlockModification property value. Indicates whether or not to allow modification of Bluetooth settings when the device is in supervised mode (iOS 10.0 and later).
     * @param bool|null $value Value to set for the bluetoothBlockModification property.
    */
    public function setBluetoothBlockModification(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlockModification', $value);
    }

    /**
     * Sets the cameraBlocked property value. Indicates whether or not to block the user from accessing the camera of the device. Requires a supervised device for iOS 13 and later.
     * @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value): void {
        $this->getBackingStore()->set('cameraBlocked', $value);
    }

    /**
     * Sets the cellularBlockDataRoaming property value. Indicates whether or not to block data roaming.
     * @param bool|null $value Value to set for the cellularBlockDataRoaming property.
    */
    public function setCellularBlockDataRoaming(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockDataRoaming', $value);
    }

    /**
     * Sets the cellularBlockGlobalBackgroundFetchWhileRoaming property value. Indicates whether or not to block global background fetch while roaming.
     * @param bool|null $value Value to set for the cellularBlockGlobalBackgroundFetchWhileRoaming property.
    */
    public function setCellularBlockGlobalBackgroundFetchWhileRoaming(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockGlobalBackgroundFetchWhileRoaming', $value);
    }

    /**
     * Sets the cellularBlockPerAppDataModification property value. Indicates whether or not to allow changes to cellular app data usage settings when the device is in supervised mode.
     * @param bool|null $value Value to set for the cellularBlockPerAppDataModification property.
    */
    public function setCellularBlockPerAppDataModification(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockPerAppDataModification', $value);
    }

    /**
     * Sets the cellularBlockPersonalHotspot property value. Indicates whether or not to block Personal Hotspot.
     * @param bool|null $value Value to set for the cellularBlockPersonalHotspot property.
    */
    public function setCellularBlockPersonalHotspot(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockPersonalHotspot', $value);
    }

    /**
     * Sets the cellularBlockVoiceRoaming property value. Indicates whether or not to block voice roaming.
     * @param bool|null $value Value to set for the cellularBlockVoiceRoaming property.
    */
    public function setCellularBlockVoiceRoaming(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockVoiceRoaming', $value);
    }

    /**
     * Sets the certificatesBlockUntrustedTlsCertificates property value. Indicates whether or not to block untrusted TLS certificates.
     * @param bool|null $value Value to set for the certificatesBlockUntrustedTlsCertificates property.
    */
    public function setCertificatesBlockUntrustedTlsCertificates(?bool $value): void {
        $this->getBackingStore()->set('certificatesBlockUntrustedTlsCertificates', $value);
    }

    /**
     * Sets the classroomAppBlockRemoteScreenObservation property value. Indicates whether or not to allow remote screen observation by Classroom app when the device is in supervised mode (iOS 9.3 and later).
     * @param bool|null $value Value to set for the classroomAppBlockRemoteScreenObservation property.
    */
    public function setClassroomAppBlockRemoteScreenObservation(?bool $value): void {
        $this->getBackingStore()->set('classroomAppBlockRemoteScreenObservation', $value);
    }

    /**
     * Sets the classroomAppForceUnpromptedScreenObservation property value. Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting when the device is in supervised mode.
     * @param bool|null $value Value to set for the classroomAppForceUnpromptedScreenObservation property.
    */
    public function setClassroomAppForceUnpromptedScreenObservation(?bool $value): void {
        $this->getBackingStore()->set('classroomAppForceUnpromptedScreenObservation', $value);
    }

    /**
     * Sets the compliantAppListType property value. Possible values of the compliance app list.
     * @param AppListType|null $value Value to set for the compliantAppListType property.
    */
    public function setCompliantAppListType(?AppListType $value): void {
        $this->getBackingStore()->set('compliantAppListType', $value);
    }

    /**
     * Sets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @param array<AppListItem>|null $value Value to set for the compliantAppsList property.
    */
    public function setCompliantAppsList(?array $value): void {
        $this->getBackingStore()->set('compliantAppsList', $value);
    }

    /**
     * Sets the configurationProfileBlockChanges property value. Indicates whether or not to block the user from installing configuration profiles and certificates interactively when the device is in supervised mode.
     * @param bool|null $value Value to set for the configurationProfileBlockChanges property.
    */
    public function setConfigurationProfileBlockChanges(?bool $value): void {
        $this->getBackingStore()->set('configurationProfileBlockChanges', $value);
    }

    /**
     * Sets the definitionLookupBlocked property value. Indicates whether or not to block definition lookup when the device is in supervised mode (iOS 8.1.3 and later ).
     * @param bool|null $value Value to set for the definitionLookupBlocked property.
    */
    public function setDefinitionLookupBlocked(?bool $value): void {
        $this->getBackingStore()->set('definitionLookupBlocked', $value);
    }

    /**
     * Sets the deviceBlockEnableRestrictions property value. Indicates whether or not to allow the user to enables restrictions in the device settings when the device is in supervised mode.
     * @param bool|null $value Value to set for the deviceBlockEnableRestrictions property.
    */
    public function setDeviceBlockEnableRestrictions(?bool $value): void {
        $this->getBackingStore()->set('deviceBlockEnableRestrictions', $value);
    }

    /**
     * Sets the deviceBlockEraseContentAndSettings property value. Indicates whether or not to allow the use of the 'Erase all content and settings' option on the device when the device is in supervised mode.
     * @param bool|null $value Value to set for the deviceBlockEraseContentAndSettings property.
    */
    public function setDeviceBlockEraseContentAndSettings(?bool $value): void {
        $this->getBackingStore()->set('deviceBlockEraseContentAndSettings', $value);
    }

    /**
     * Sets the deviceBlockNameModification property value. Indicates whether or not to allow device name modification when the device is in supervised mode (iOS 9.0 and later).
     * @param bool|null $value Value to set for the deviceBlockNameModification property.
    */
    public function setDeviceBlockNameModification(?bool $value): void {
        $this->getBackingStore()->set('deviceBlockNameModification', $value);
    }

    /**
     * Sets the diagnosticDataBlockSubmission property value. Indicates whether or not to block diagnostic data submission.
     * @param bool|null $value Value to set for the diagnosticDataBlockSubmission property.
    */
    public function setDiagnosticDataBlockSubmission(?bool $value): void {
        $this->getBackingStore()->set('diagnosticDataBlockSubmission', $value);
    }

    /**
     * Sets the diagnosticDataBlockSubmissionModification property value. Indicates whether or not to allow diagnostics submission settings modification when the device is in supervised mode (iOS 9.3.2 and later).
     * @param bool|null $value Value to set for the diagnosticDataBlockSubmissionModification property.
    */
    public function setDiagnosticDataBlockSubmissionModification(?bool $value): void {
        $this->getBackingStore()->set('diagnosticDataBlockSubmissionModification', $value);
    }

    /**
     * Sets the documentsBlockManagedDocumentsInUnmanagedApps property value. Indicates whether or not to block the user from viewing managed documents in unmanaged apps.
     * @param bool|null $value Value to set for the documentsBlockManagedDocumentsInUnmanagedApps property.
    */
    public function setDocumentsBlockManagedDocumentsInUnmanagedApps(?bool $value): void {
        $this->getBackingStore()->set('documentsBlockManagedDocumentsInUnmanagedApps', $value);
    }

    /**
     * Sets the documentsBlockUnmanagedDocumentsInManagedApps property value. Indicates whether or not to block the user from viewing unmanaged documents in managed apps.
     * @param bool|null $value Value to set for the documentsBlockUnmanagedDocumentsInManagedApps property.
    */
    public function setDocumentsBlockUnmanagedDocumentsInManagedApps(?bool $value): void {
        $this->getBackingStore()->set('documentsBlockUnmanagedDocumentsInManagedApps', $value);
    }

    /**
     * Sets the emailInDomainSuffixes property value. An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     * @param array<string>|null $value Value to set for the emailInDomainSuffixes property.
    */
    public function setEmailInDomainSuffixes(?array $value): void {
        $this->getBackingStore()->set('emailInDomainSuffixes', $value);
    }

    /**
     * Sets the enterpriseAppBlockTrust property value. Indicates whether or not to block the user from trusting an enterprise app.
     * @param bool|null $value Value to set for the enterpriseAppBlockTrust property.
    */
    public function setEnterpriseAppBlockTrust(?bool $value): void {
        $this->getBackingStore()->set('enterpriseAppBlockTrust', $value);
    }

    /**
     * Sets the enterpriseAppBlockTrustModification property value. [Deprecated] Configuring this setting and setting the value to 'true' has no effect on the device.
     * @param bool|null $value Value to set for the enterpriseAppBlockTrustModification property.
    */
    public function setEnterpriseAppBlockTrustModification(?bool $value): void {
        $this->getBackingStore()->set('enterpriseAppBlockTrustModification', $value);
    }

    /**
     * Sets the faceTimeBlocked property value. Indicates whether or not to block the user from using FaceTime. Requires a supervised device for iOS 13 and later.
     * @param bool|null $value Value to set for the faceTimeBlocked property.
    */
    public function setFaceTimeBlocked(?bool $value): void {
        $this->getBackingStore()->set('faceTimeBlocked', $value);
    }

    /**
     * Sets the findMyFriendsBlocked property value. Indicates whether or not to block changes to Find My Friends when the device is in supervised mode.
     * @param bool|null $value Value to set for the findMyFriendsBlocked property.
    */
    public function setFindMyFriendsBlocked(?bool $value): void {
        $this->getBackingStore()->set('findMyFriendsBlocked', $value);
    }

    /**
     * Sets the gameCenterBlocked property value. Indicates whether or not to block the user from using Game Center when the device is in supervised mode.
     * @param bool|null $value Value to set for the gameCenterBlocked property.
    */
    public function setGameCenterBlocked(?bool $value): void {
        $this->getBackingStore()->set('gameCenterBlocked', $value);
    }

    /**
     * Sets the gamingBlockGameCenterFriends property value. Indicates whether or not to block the user from having friends in Game Center. Requires a supervised device for iOS 13 and later.
     * @param bool|null $value Value to set for the gamingBlockGameCenterFriends property.
    */
    public function setGamingBlockGameCenterFriends(?bool $value): void {
        $this->getBackingStore()->set('gamingBlockGameCenterFriends', $value);
    }

    /**
     * Sets the gamingBlockMultiplayer property value. Indicates whether or not to block the user from using multiplayer gaming. Requires a supervised device for iOS 13 and later.
     * @param bool|null $value Value to set for the gamingBlockMultiplayer property.
    */
    public function setGamingBlockMultiplayer(?bool $value): void {
        $this->getBackingStore()->set('gamingBlockMultiplayer', $value);
    }

    /**
     * Sets the hostPairingBlocked property value. indicates whether or not to allow host pairing to control the devices an iOS device can pair with when the iOS device is in supervised mode.
     * @param bool|null $value Value to set for the hostPairingBlocked property.
    */
    public function setHostPairingBlocked(?bool $value): void {
        $this->getBackingStore()->set('hostPairingBlocked', $value);
    }

    /**
     * Sets the iBooksStoreBlocked property value. Indicates whether or not to block the user from using the iBooks Store when the device is in supervised mode.
     * @param bool|null $value Value to set for the iBooksStoreBlocked property.
    */
    public function setIBooksStoreBlocked(?bool $value): void {
        $this->getBackingStore()->set('iBooksStoreBlocked', $value);
    }

    /**
     * Sets the iBooksStoreBlockErotica property value. Indicates whether or not to block the user from downloading media from the iBookstore that has been tagged as erotica.
     * @param bool|null $value Value to set for the iBooksStoreBlockErotica property.
    */
    public function setIBooksStoreBlockErotica(?bool $value): void {
        $this->getBackingStore()->set('iBooksStoreBlockErotica', $value);
    }

    /**
     * Sets the iCloudBlockActivityContinuation property value. Indicates whether or not to block the user from continuing work they started on iOS device to another iOS or macOS device.
     * @param bool|null $value Value to set for the iCloudBlockActivityContinuation property.
    */
    public function setICloudBlockActivityContinuation(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockActivityContinuation', $value);
    }

    /**
     * Sets the iCloudBlockBackup property value. Indicates whether or not to block iCloud backup. Requires a supervised device for iOS 13 and later.
     * @param bool|null $value Value to set for the iCloudBlockBackup property.
    */
    public function setICloudBlockBackup(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockBackup', $value);
    }

    /**
     * Sets the iCloudBlockDocumentSync property value. Indicates whether or not to block iCloud document sync. Requires a supervised device for iOS 13 and later.
     * @param bool|null $value Value to set for the iCloudBlockDocumentSync property.
    */
    public function setICloudBlockDocumentSync(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockDocumentSync', $value);
    }

    /**
     * Sets the iCloudBlockManagedAppsSync property value. Indicates whether or not to block Managed Apps Cloud Sync.
     * @param bool|null $value Value to set for the iCloudBlockManagedAppsSync property.
    */
    public function setICloudBlockManagedAppsSync(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockManagedAppsSync', $value);
    }

    /**
     * Sets the iCloudBlockPhotoLibrary property value. Indicates whether or not to block iCloud Photo Library.
     * @param bool|null $value Value to set for the iCloudBlockPhotoLibrary property.
    */
    public function setICloudBlockPhotoLibrary(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockPhotoLibrary', $value);
    }

    /**
     * Sets the iCloudBlockPhotoStreamSync property value. Indicates whether or not to block iCloud Photo Stream Sync.
     * @param bool|null $value Value to set for the iCloudBlockPhotoStreamSync property.
    */
    public function setICloudBlockPhotoStreamSync(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockPhotoStreamSync', $value);
    }

    /**
     * Sets the iCloudBlockSharedPhotoStream property value. Indicates whether or not to block Shared Photo Stream.
     * @param bool|null $value Value to set for the iCloudBlockSharedPhotoStream property.
    */
    public function setICloudBlockSharedPhotoStream(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockSharedPhotoStream', $value);
    }

    /**
     * Sets the iCloudRequireEncryptedBackup property value. Indicates whether or not to require backups to iCloud be encrypted.
     * @param bool|null $value Value to set for the iCloudRequireEncryptedBackup property.
    */
    public function setICloudRequireEncryptedBackup(?bool $value): void {
        $this->getBackingStore()->set('iCloudRequireEncryptedBackup', $value);
    }

    /**
     * Sets the iTunesBlockExplicitContent property value. Indicates whether or not to block the user from accessing explicit content in iTunes and the App Store. Requires a supervised device for iOS 13 and later.
     * @param bool|null $value Value to set for the iTunesBlockExplicitContent property.
    */
    public function setITunesBlockExplicitContent(?bool $value): void {
        $this->getBackingStore()->set('iTunesBlockExplicitContent', $value);
    }

    /**
     * Sets the iTunesBlockMusicService property value. Indicates whether or not to block Music service and revert Music app to classic mode when the device is in supervised mode (iOS 9.3 and later and macOS 10.12 and later).
     * @param bool|null $value Value to set for the iTunesBlockMusicService property.
    */
    public function setITunesBlockMusicService(?bool $value): void {
        $this->getBackingStore()->set('iTunesBlockMusicService', $value);
    }

    /**
     * Sets the iTunesBlockRadio property value. Indicates whether or not to block the user from using iTunes Radio when the device is in supervised mode (iOS 9.3 and later).
     * @param bool|null $value Value to set for the iTunesBlockRadio property.
    */
    public function setITunesBlockRadio(?bool $value): void {
        $this->getBackingStore()->set('iTunesBlockRadio', $value);
    }

    /**
     * Sets the keyboardBlockAutoCorrect property value. Indicates whether or not to block keyboard auto-correction when the device is in supervised mode (iOS 8.1.3 and later).
     * @param bool|null $value Value to set for the keyboardBlockAutoCorrect property.
    */
    public function setKeyboardBlockAutoCorrect(?bool $value): void {
        $this->getBackingStore()->set('keyboardBlockAutoCorrect', $value);
    }

    /**
     * Sets the keyboardBlockDictation property value. Indicates whether or not to block the user from using dictation input when the device is in supervised mode.
     * @param bool|null $value Value to set for the keyboardBlockDictation property.
    */
    public function setKeyboardBlockDictation(?bool $value): void {
        $this->getBackingStore()->set('keyboardBlockDictation', $value);
    }

    /**
     * Sets the keyboardBlockPredictive property value. Indicates whether or not to block predictive keyboards when device is in supervised mode (iOS 8.1.3 and later).
     * @param bool|null $value Value to set for the keyboardBlockPredictive property.
    */
    public function setKeyboardBlockPredictive(?bool $value): void {
        $this->getBackingStore()->set('keyboardBlockPredictive', $value);
    }

    /**
     * Sets the keyboardBlockShortcuts property value. Indicates whether or not to block keyboard shortcuts when the device is in supervised mode (iOS 9.0 and later).
     * @param bool|null $value Value to set for the keyboardBlockShortcuts property.
    */
    public function setKeyboardBlockShortcuts(?bool $value): void {
        $this->getBackingStore()->set('keyboardBlockShortcuts', $value);
    }

    /**
     * Sets the keyboardBlockSpellCheck property value. Indicates whether or not to block keyboard spell-checking when the device is in supervised mode (iOS 8.1.3 and later).
     * @param bool|null $value Value to set for the keyboardBlockSpellCheck property.
    */
    public function setKeyboardBlockSpellCheck(?bool $value): void {
        $this->getBackingStore()->set('keyboardBlockSpellCheck', $value);
    }

    /**
     * Sets the kioskModeAllowAssistiveSpeak property value. Indicates whether or not to allow assistive speak while in kiosk mode.
     * @param bool|null $value Value to set for the kioskModeAllowAssistiveSpeak property.
    */
    public function setKioskModeAllowAssistiveSpeak(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAllowAssistiveSpeak', $value);
    }

    /**
     * Sets the kioskModeAllowAssistiveTouchSettings property value. Indicates whether or not to allow access to the Assistive Touch Settings while in kiosk mode.
     * @param bool|null $value Value to set for the kioskModeAllowAssistiveTouchSettings property.
    */
    public function setKioskModeAllowAssistiveTouchSettings(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAllowAssistiveTouchSettings', $value);
    }

    /**
     * Sets the kioskModeAllowAutoLock property value. Indicates whether or not to allow device auto lock while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockAutoLock instead.
     * @param bool|null $value Value to set for the kioskModeAllowAutoLock property.
    */
    public function setKioskModeAllowAutoLock(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAllowAutoLock', $value);
    }

    /**
     * Sets the kioskModeAllowColorInversionSettings property value. Indicates whether or not to allow access to the Color Inversion Settings while in kiosk mode.
     * @param bool|null $value Value to set for the kioskModeAllowColorInversionSettings property.
    */
    public function setKioskModeAllowColorInversionSettings(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAllowColorInversionSettings', $value);
    }

    /**
     * Sets the kioskModeAllowRingerSwitch property value. Indicates whether or not to allow use of the ringer switch while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockRingerSwitch instead.
     * @param bool|null $value Value to set for the kioskModeAllowRingerSwitch property.
    */
    public function setKioskModeAllowRingerSwitch(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAllowRingerSwitch', $value);
    }

    /**
     * Sets the kioskModeAllowScreenRotation property value. Indicates whether or not to allow screen rotation while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockScreenRotation instead.
     * @param bool|null $value Value to set for the kioskModeAllowScreenRotation property.
    */
    public function setKioskModeAllowScreenRotation(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAllowScreenRotation', $value);
    }

    /**
     * Sets the kioskModeAllowSleepButton property value. Indicates whether or not to allow use of the sleep button while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockSleepButton instead.
     * @param bool|null $value Value to set for the kioskModeAllowSleepButton property.
    */
    public function setKioskModeAllowSleepButton(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAllowSleepButton', $value);
    }

    /**
     * Sets the kioskModeAllowTouchscreen property value. Indicates whether or not to allow use of the touchscreen while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockTouchscreen instead.
     * @param bool|null $value Value to set for the kioskModeAllowTouchscreen property.
    */
    public function setKioskModeAllowTouchscreen(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAllowTouchscreen', $value);
    }

    /**
     * Sets the kioskModeAllowVoiceOverSettings property value. Indicates whether or not to allow access to the voice over settings while in kiosk mode.
     * @param bool|null $value Value to set for the kioskModeAllowVoiceOverSettings property.
    */
    public function setKioskModeAllowVoiceOverSettings(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAllowVoiceOverSettings', $value);
    }

    /**
     * Sets the kioskModeAllowVolumeButtons property value. Indicates whether or not to allow use of the volume buttons while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockVolumeButtons instead.
     * @param bool|null $value Value to set for the kioskModeAllowVolumeButtons property.
    */
    public function setKioskModeAllowVolumeButtons(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAllowVolumeButtons', $value);
    }

    /**
     * Sets the kioskModeAllowZoomSettings property value. Indicates whether or not to allow access to the zoom settings while in kiosk mode.
     * @param bool|null $value Value to set for the kioskModeAllowZoomSettings property.
    */
    public function setKioskModeAllowZoomSettings(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAllowZoomSettings', $value);
    }

    /**
     * Sets the kioskModeAppStoreUrl property value. URL in the app store to the app to use for kiosk mode. Use if KioskModeManagedAppId is not known.
     * @param string|null $value Value to set for the kioskModeAppStoreUrl property.
    */
    public function setKioskModeAppStoreUrl(?string $value): void {
        $this->getBackingStore()->set('kioskModeAppStoreUrl', $value);
    }

    /**
     * Sets the kioskModeBuiltInAppId property value. ID for built-in apps to use for kiosk mode. Used when KioskModeManagedAppId and KioskModeAppStoreUrl are not set.
     * @param string|null $value Value to set for the kioskModeBuiltInAppId property.
    */
    public function setKioskModeBuiltInAppId(?string $value): void {
        $this->getBackingStore()->set('kioskModeBuiltInAppId', $value);
    }

    /**
     * Sets the kioskModeManagedAppId property value. Managed app id of the app to use for kiosk mode. If KioskModeManagedAppId is specified then KioskModeAppStoreUrl will be ignored.
     * @param string|null $value Value to set for the kioskModeManagedAppId property.
    */
    public function setKioskModeManagedAppId(?string $value): void {
        $this->getBackingStore()->set('kioskModeManagedAppId', $value);
    }

    /**
     * Sets the kioskModeRequireAssistiveTouch property value. Indicates whether or not to require assistive touch while in kiosk mode.
     * @param bool|null $value Value to set for the kioskModeRequireAssistiveTouch property.
    */
    public function setKioskModeRequireAssistiveTouch(?bool $value): void {
        $this->getBackingStore()->set('kioskModeRequireAssistiveTouch', $value);
    }

    /**
     * Sets the kioskModeRequireColorInversion property value. Indicates whether or not to require color inversion while in kiosk mode.
     * @param bool|null $value Value to set for the kioskModeRequireColorInversion property.
    */
    public function setKioskModeRequireColorInversion(?bool $value): void {
        $this->getBackingStore()->set('kioskModeRequireColorInversion', $value);
    }

    /**
     * Sets the kioskModeRequireMonoAudio property value. Indicates whether or not to require mono audio while in kiosk mode.
     * @param bool|null $value Value to set for the kioskModeRequireMonoAudio property.
    */
    public function setKioskModeRequireMonoAudio(?bool $value): void {
        $this->getBackingStore()->set('kioskModeRequireMonoAudio', $value);
    }

    /**
     * Sets the kioskModeRequireVoiceOver property value. Indicates whether or not to require voice over while in kiosk mode.
     * @param bool|null $value Value to set for the kioskModeRequireVoiceOver property.
    */
    public function setKioskModeRequireVoiceOver(?bool $value): void {
        $this->getBackingStore()->set('kioskModeRequireVoiceOver', $value);
    }

    /**
     * Sets the kioskModeRequireZoom property value. Indicates whether or not to require zoom while in kiosk mode.
     * @param bool|null $value Value to set for the kioskModeRequireZoom property.
    */
    public function setKioskModeRequireZoom(?bool $value): void {
        $this->getBackingStore()->set('kioskModeRequireZoom', $value);
    }

    /**
     * Sets the lockScreenBlockControlCenter property value. Indicates whether or not to block the user from using control center on the lock screen.
     * @param bool|null $value Value to set for the lockScreenBlockControlCenter property.
    */
    public function setLockScreenBlockControlCenter(?bool $value): void {
        $this->getBackingStore()->set('lockScreenBlockControlCenter', $value);
    }

    /**
     * Sets the lockScreenBlockNotificationView property value. Indicates whether or not to block the user from using the notification view on the lock screen.
     * @param bool|null $value Value to set for the lockScreenBlockNotificationView property.
    */
    public function setLockScreenBlockNotificationView(?bool $value): void {
        $this->getBackingStore()->set('lockScreenBlockNotificationView', $value);
    }

    /**
     * Sets the lockScreenBlockPassbook property value. Indicates whether or not to block the user from using passbook when the device is locked.
     * @param bool|null $value Value to set for the lockScreenBlockPassbook property.
    */
    public function setLockScreenBlockPassbook(?bool $value): void {
        $this->getBackingStore()->set('lockScreenBlockPassbook', $value);
    }

    /**
     * Sets the lockScreenBlockTodayView property value. Indicates whether or not to block the user from using the Today View on the lock screen.
     * @param bool|null $value Value to set for the lockScreenBlockTodayView property.
    */
    public function setLockScreenBlockTodayView(?bool $value): void {
        $this->getBackingStore()->set('lockScreenBlockTodayView', $value);
    }

    /**
     * Sets the mediaContentRatingApps property value. Apps rating as in media content
     * @param RatingAppsType|null $value Value to set for the mediaContentRatingApps property.
    */
    public function setMediaContentRatingApps(?RatingAppsType $value): void {
        $this->getBackingStore()->set('mediaContentRatingApps', $value);
    }

    /**
     * Sets the mediaContentRatingAustralia property value. Media content rating settings for Australia
     * @param MediaContentRatingAustralia|null $value Value to set for the mediaContentRatingAustralia property.
    */
    public function setMediaContentRatingAustralia(?MediaContentRatingAustralia $value): void {
        $this->getBackingStore()->set('mediaContentRatingAustralia', $value);
    }

    /**
     * Sets the mediaContentRatingCanada property value. Media content rating settings for Canada
     * @param MediaContentRatingCanada|null $value Value to set for the mediaContentRatingCanada property.
    */
    public function setMediaContentRatingCanada(?MediaContentRatingCanada $value): void {
        $this->getBackingStore()->set('mediaContentRatingCanada', $value);
    }

    /**
     * Sets the mediaContentRatingFrance property value. Media content rating settings for France
     * @param MediaContentRatingFrance|null $value Value to set for the mediaContentRatingFrance property.
    */
    public function setMediaContentRatingFrance(?MediaContentRatingFrance $value): void {
        $this->getBackingStore()->set('mediaContentRatingFrance', $value);
    }

    /**
     * Sets the mediaContentRatingGermany property value. Media content rating settings for Germany
     * @param MediaContentRatingGermany|null $value Value to set for the mediaContentRatingGermany property.
    */
    public function setMediaContentRatingGermany(?MediaContentRatingGermany $value): void {
        $this->getBackingStore()->set('mediaContentRatingGermany', $value);
    }

    /**
     * Sets the mediaContentRatingIreland property value. Media content rating settings for Ireland
     * @param MediaContentRatingIreland|null $value Value to set for the mediaContentRatingIreland property.
    */
    public function setMediaContentRatingIreland(?MediaContentRatingIreland $value): void {
        $this->getBackingStore()->set('mediaContentRatingIreland', $value);
    }

    /**
     * Sets the mediaContentRatingJapan property value. Media content rating settings for Japan
     * @param MediaContentRatingJapan|null $value Value to set for the mediaContentRatingJapan property.
    */
    public function setMediaContentRatingJapan(?MediaContentRatingJapan $value): void {
        $this->getBackingStore()->set('mediaContentRatingJapan', $value);
    }

    /**
     * Sets the mediaContentRatingNewZealand property value. Media content rating settings for New Zealand
     * @param MediaContentRatingNewZealand|null $value Value to set for the mediaContentRatingNewZealand property.
    */
    public function setMediaContentRatingNewZealand(?MediaContentRatingNewZealand $value): void {
        $this->getBackingStore()->set('mediaContentRatingNewZealand', $value);
    }

    /**
     * Sets the mediaContentRatingUnitedKingdom property value. Media content rating settings for United Kingdom
     * @param MediaContentRatingUnitedKingdom|null $value Value to set for the mediaContentRatingUnitedKingdom property.
    */
    public function setMediaContentRatingUnitedKingdom(?MediaContentRatingUnitedKingdom $value): void {
        $this->getBackingStore()->set('mediaContentRatingUnitedKingdom', $value);
    }

    /**
     * Sets the mediaContentRatingUnitedStates property value. Media content rating settings for United States
     * @param MediaContentRatingUnitedStates|null $value Value to set for the mediaContentRatingUnitedStates property.
    */
    public function setMediaContentRatingUnitedStates(?MediaContentRatingUnitedStates $value): void {
        $this->getBackingStore()->set('mediaContentRatingUnitedStates', $value);
    }

    /**
     * Sets the messagesBlocked property value. Indicates whether or not to block the user from using the Messages app on the supervised device.
     * @param bool|null $value Value to set for the messagesBlocked property.
    */
    public function setMessagesBlocked(?bool $value): void {
        $this->getBackingStore()->set('messagesBlocked', $value);
    }

    /**
     * Sets the networkUsageRules property value. List of managed apps and the network rules that applies to them. This collection can contain a maximum of 1000 elements.
     * @param array<IosNetworkUsageRule>|null $value Value to set for the networkUsageRules property.
    */
    public function setNetworkUsageRules(?array $value): void {
        $this->getBackingStore()->set('networkUsageRules', $value);
    }

    /**
     * Sets the notificationsBlockSettingsModification property value. Indicates whether or not to allow notifications settings modification (iOS 9.3 and later).
     * @param bool|null $value Value to set for the notificationsBlockSettingsModification property.
    */
    public function setNotificationsBlockSettingsModification(?bool $value): void {
        $this->getBackingStore()->set('notificationsBlockSettingsModification', $value);
    }

    /**
     * Sets the passcodeBlockFingerprintModification property value. Block modification of registered Touch ID fingerprints when in supervised mode.
     * @param bool|null $value Value to set for the passcodeBlockFingerprintModification property.
    */
    public function setPasscodeBlockFingerprintModification(?bool $value): void {
        $this->getBackingStore()->set('passcodeBlockFingerprintModification', $value);
    }

    /**
     * Sets the passcodeBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     * @param bool|null $value Value to set for the passcodeBlockFingerprintUnlock property.
    */
    public function setPasscodeBlockFingerprintUnlock(?bool $value): void {
        $this->getBackingStore()->set('passcodeBlockFingerprintUnlock', $value);
    }

    /**
     * Sets the passcodeBlockModification property value. Indicates whether or not to allow passcode modification on the supervised device (iOS 9.0 and later).
     * @param bool|null $value Value to set for the passcodeBlockModification property.
    */
    public function setPasscodeBlockModification(?bool $value): void {
        $this->getBackingStore()->set('passcodeBlockModification', $value);
    }

    /**
     * Sets the passcodeBlockSimple property value. Indicates whether or not to block simple passcodes.
     * @param bool|null $value Value to set for the passcodeBlockSimple property.
    */
    public function setPasscodeBlockSimple(?bool $value): void {
        $this->getBackingStore()->set('passcodeBlockSimple', $value);
    }

    /**
     * Sets the passcodeExpirationDays property value. Number of days before the passcode expires. Valid values 1 to 65535
     * @param int|null $value Value to set for the passcodeExpirationDays property.
    */
    public function setPasscodeExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passcodeExpirationDays', $value);
    }

    /**
     * Sets the passcodeMinimumCharacterSetCount property value. Number of character sets a passcode must contain. Valid values 0 to 4
     * @param int|null $value Value to set for the passcodeMinimumCharacterSetCount property.
    */
    public function setPasscodeMinimumCharacterSetCount(?int $value): void {
        $this->getBackingStore()->set('passcodeMinimumCharacterSetCount', $value);
    }

    /**
     * Sets the passcodeMinimumLength property value. Minimum length of passcode. Valid values 4 to 14
     * @param int|null $value Value to set for the passcodeMinimumLength property.
    */
    public function setPasscodeMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passcodeMinimumLength', $value);
    }

    /**
     * Sets the passcodeMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a passcode is required.
     * @param int|null $value Value to set for the passcodeMinutesOfInactivityBeforeLock property.
    */
    public function setPasscodeMinutesOfInactivityBeforeLock(?int $value): void {
        $this->getBackingStore()->set('passcodeMinutesOfInactivityBeforeLock', $value);
    }

    /**
     * Sets the passcodeMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @param int|null $value Value to set for the passcodeMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasscodeMinutesOfInactivityBeforeScreenTimeout(?int $value): void {
        $this->getBackingStore()->set('passcodeMinutesOfInactivityBeforeScreenTimeout', $value);
    }

    /**
     * Sets the passcodePreviousPasscodeBlockCount property value. Number of previous passcodes to block. Valid values 1 to 24
     * @param int|null $value Value to set for the passcodePreviousPasscodeBlockCount property.
    */
    public function setPasscodePreviousPasscodeBlockCount(?int $value): void {
        $this->getBackingStore()->set('passcodePreviousPasscodeBlockCount', $value);
    }

    /**
     * Sets the passcodeRequired property value. Indicates whether or not to require a passcode.
     * @param bool|null $value Value to set for the passcodeRequired property.
    */
    public function setPasscodeRequired(?bool $value): void {
        $this->getBackingStore()->set('passcodeRequired', $value);
    }

    /**
     * Sets the passcodeRequiredType property value. Possible values of required passwords.
     * @param RequiredPasswordType|null $value Value to set for the passcodeRequiredType property.
    */
    public function setPasscodeRequiredType(?RequiredPasswordType $value): void {
        $this->getBackingStore()->set('passcodeRequiredType', $value);
    }

    /**
     * Sets the passcodeSignInFailureCountBeforeWipe property value. Number of sign in failures allowed before wiping the device. Valid values 2 to 11
     * @param int|null $value Value to set for the passcodeSignInFailureCountBeforeWipe property.
    */
    public function setPasscodeSignInFailureCountBeforeWipe(?int $value): void {
        $this->getBackingStore()->set('passcodeSignInFailureCountBeforeWipe', $value);
    }

    /**
     * Sets the podcastsBlocked property value. Indicates whether or not to block the user from using podcasts on the supervised device (iOS 8.0 and later).
     * @param bool|null $value Value to set for the podcastsBlocked property.
    */
    public function setPodcastsBlocked(?bool $value): void {
        $this->getBackingStore()->set('podcastsBlocked', $value);
    }

    /**
     * Sets the safariBlockAutofill property value. Indicates whether or not to block the user from using Auto fill in Safari. Requires a supervised device for iOS 13 and later.
     * @param bool|null $value Value to set for the safariBlockAutofill property.
    */
    public function setSafariBlockAutofill(?bool $value): void {
        $this->getBackingStore()->set('safariBlockAutofill', $value);
    }

    /**
     * Sets the safariBlocked property value. Indicates whether or not to block the user from using Safari. Requires a supervised device for iOS 13 and later.
     * @param bool|null $value Value to set for the safariBlocked property.
    */
    public function setSafariBlocked(?bool $value): void {
        $this->getBackingStore()->set('safariBlocked', $value);
    }

    /**
     * Sets the safariBlockJavaScript property value. Indicates whether or not to block JavaScript in Safari.
     * @param bool|null $value Value to set for the safariBlockJavaScript property.
    */
    public function setSafariBlockJavaScript(?bool $value): void {
        $this->getBackingStore()->set('safariBlockJavaScript', $value);
    }

    /**
     * Sets the safariBlockPopups property value. Indicates whether or not to block popups in Safari.
     * @param bool|null $value Value to set for the safariBlockPopups property.
    */
    public function setSafariBlockPopups(?bool $value): void {
        $this->getBackingStore()->set('safariBlockPopups', $value);
    }

    /**
     * Sets the safariCookieSettings property value. Web Browser Cookie Settings.
     * @param WebBrowserCookieSettings|null $value Value to set for the safariCookieSettings property.
    */
    public function setSafariCookieSettings(?WebBrowserCookieSettings $value): void {
        $this->getBackingStore()->set('safariCookieSettings', $value);
    }

    /**
     * Sets the safariManagedDomains property value. URLs matching the patterns listed here will be considered managed.
     * @param array<string>|null $value Value to set for the safariManagedDomains property.
    */
    public function setSafariManagedDomains(?array $value): void {
        $this->getBackingStore()->set('safariManagedDomains', $value);
    }

    /**
     * Sets the safariPasswordAutoFillDomains property value. Users can save passwords in Safari only from URLs matching the patterns listed here. Applies to devices in supervised mode (iOS 9.3 and later).
     * @param array<string>|null $value Value to set for the safariPasswordAutoFillDomains property.
    */
    public function setSafariPasswordAutoFillDomains(?array $value): void {
        $this->getBackingStore()->set('safariPasswordAutoFillDomains', $value);
    }

    /**
     * Sets the safariRequireFraudWarning property value. Indicates whether or not to require fraud warning in Safari.
     * @param bool|null $value Value to set for the safariRequireFraudWarning property.
    */
    public function setSafariRequireFraudWarning(?bool $value): void {
        $this->getBackingStore()->set('safariRequireFraudWarning', $value);
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to block the user from taking Screenshots.
     * @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('screenCaptureBlocked', $value);
    }

    /**
     * Sets the siriBlocked property value. Indicates whether or not to block the user from using Siri.
     * @param bool|null $value Value to set for the siriBlocked property.
    */
    public function setSiriBlocked(?bool $value): void {
        $this->getBackingStore()->set('siriBlocked', $value);
    }

    /**
     * Sets the siriBlockedWhenLocked property value. Indicates whether or not to block the user from using Siri when locked.
     * @param bool|null $value Value to set for the siriBlockedWhenLocked property.
    */
    public function setSiriBlockedWhenLocked(?bool $value): void {
        $this->getBackingStore()->set('siriBlockedWhenLocked', $value);
    }

    /**
     * Sets the siriBlockUserGeneratedContent property value. Indicates whether or not to block Siri from querying user-generated content when used on a supervised device.
     * @param bool|null $value Value to set for the siriBlockUserGeneratedContent property.
    */
    public function setSiriBlockUserGeneratedContent(?bool $value): void {
        $this->getBackingStore()->set('siriBlockUserGeneratedContent', $value);
    }

    /**
     * Sets the siriRequireProfanityFilter property value. Indicates whether or not to prevent Siri from dictating, or speaking profane language on supervised device.
     * @param bool|null $value Value to set for the siriRequireProfanityFilter property.
    */
    public function setSiriRequireProfanityFilter(?bool $value): void {
        $this->getBackingStore()->set('siriRequireProfanityFilter', $value);
    }

    /**
     * Sets the spotlightBlockInternetResults property value. Indicates whether or not to block Spotlight search from returning internet results on supervised device.
     * @param bool|null $value Value to set for the spotlightBlockInternetResults property.
    */
    public function setSpotlightBlockInternetResults(?bool $value): void {
        $this->getBackingStore()->set('spotlightBlockInternetResults', $value);
    }

    /**
     * Sets the voiceDialingBlocked property value. Indicates whether or not to block voice dialing.
     * @param bool|null $value Value to set for the voiceDialingBlocked property.
    */
    public function setVoiceDialingBlocked(?bool $value): void {
        $this->getBackingStore()->set('voiceDialingBlocked', $value);
    }

    /**
     * Sets the wallpaperBlockModification property value. Indicates whether or not to allow wallpaper modification on supervised device (iOS 9.0 and later) .
     * @param bool|null $value Value to set for the wallpaperBlockModification property.
    */
    public function setWallpaperBlockModification(?bool $value): void {
        $this->getBackingStore()->set('wallpaperBlockModification', $value);
    }

    /**
     * Sets the wiFiConnectOnlyToConfiguredNetworks property value. Indicates whether or not to force the device to use only Wi-Fi networks from configuration profiles when the device is in supervised mode. Available for devices running iOS and iPadOS versions 14.4 and earlier. Devices running 14.5+ should use the setting, 'WiFiConnectToAllowedNetworksOnlyForced.
     * @param bool|null $value Value to set for the wiFiConnectOnlyToConfiguredNetworks property.
    */
    public function setWiFiConnectOnlyToConfiguredNetworks(?bool $value): void {
        $this->getBackingStore()->set('wiFiConnectOnlyToConfiguredNetworks', $value);
    }

}
