<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeviceHealthAttestationState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceHealthAttestationState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthAttestationState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthAttestationState {
        return new DeviceHealthAttestationState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the attestationIdentityKey property value. TWhen an Attestation Identity Key (AIK) is present on a device, it indicates that the device has an endorsement key (EK) certificate.
     * @return string|null
    */
    public function getAttestationIdentityKey(): ?string {
        return $this->getBackingStore()->get('attestationIdentityKey');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bitLockerStatus property value. On or Off of BitLocker Drive Encryption
     * @return string|null
    */
    public function getBitLockerStatus(): ?string {
        return $this->getBackingStore()->get('bitLockerStatus');
    }

    /**
     * Gets the bootAppSecurityVersion property value. The security version number of the Boot Application
     * @return string|null
    */
    public function getBootAppSecurityVersion(): ?string {
        return $this->getBackingStore()->get('bootAppSecurityVersion');
    }

    /**
     * Gets the bootDebugging property value. When bootDebugging is enabled, the device is used in development and testing
     * @return string|null
    */
    public function getBootDebugging(): ?string {
        return $this->getBackingStore()->get('bootDebugging');
    }

    /**
     * Gets the bootManagerSecurityVersion property value. The security version number of the Boot Application
     * @return string|null
    */
    public function getBootManagerSecurityVersion(): ?string {
        return $this->getBackingStore()->get('bootManagerSecurityVersion');
    }

    /**
     * Gets the bootManagerVersion property value. The version of the Boot Manager
     * @return string|null
    */
    public function getBootManagerVersion(): ?string {
        return $this->getBackingStore()->get('bootManagerVersion');
    }

    /**
     * Gets the bootRevisionListInfo property value. The Boot Revision List that was loaded during initial boot on the attested device
     * @return string|null
    */
    public function getBootRevisionListInfo(): ?string {
        return $this->getBackingStore()->get('bootRevisionListInfo');
    }

    /**
     * Gets the codeIntegrity property value. When code integrity is enabled, code execution is restricted to integrity verified code
     * @return string|null
    */
    public function getCodeIntegrity(): ?string {
        return $this->getBackingStore()->get('codeIntegrity');
    }

    /**
     * Gets the codeIntegrityCheckVersion property value. The version of the Boot Manager
     * @return string|null
    */
    public function getCodeIntegrityCheckVersion(): ?string {
        return $this->getBackingStore()->get('codeIntegrityCheckVersion');
    }

    /**
     * Gets the codeIntegrityPolicy property value. The Code Integrity policy that is controlling the security of the boot environment
     * @return string|null
    */
    public function getCodeIntegrityPolicy(): ?string {
        return $this->getBackingStore()->get('codeIntegrityPolicy');
    }

    /**
     * Gets the contentNamespaceUrl property value. The DHA report version. (Namespace version)
     * @return string|null
    */
    public function getContentNamespaceUrl(): ?string {
        return $this->getBackingStore()->get('contentNamespaceUrl');
    }

    /**
     * Gets the contentVersion property value. The HealthAttestation state schema version
     * @return string|null
    */
    public function getContentVersion(): ?string {
        return $this->getBackingStore()->get('contentVersion');
    }

    /**
     * Gets the dataExcutionPolicy property value. DEP Policy defines a set of hardware and software technologies that perform additional checks on memory
     * @return string|null
    */
    public function getDataExcutionPolicy(): ?string {
        return $this->getBackingStore()->get('dataExcutionPolicy');
    }

    /**
     * Gets the deviceHealthAttestationStatus property value. The DHA report version. (Namespace version)
     * @return string|null
    */
    public function getDeviceHealthAttestationStatus(): ?string {
        return $this->getBackingStore()->get('deviceHealthAttestationStatus');
    }

    /**
     * Gets the earlyLaunchAntiMalwareDriverProtection property value. ELAM provides protection for the computers in your network when they start up
     * @return string|null
    */
    public function getEarlyLaunchAntiMalwareDriverProtection(): ?string {
        return $this->getBackingStore()->get('earlyLaunchAntiMalwareDriverProtection');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attestationIdentityKey' => fn(ParseNode $n) => $o->setAttestationIdentityKey($n->getStringValue()),
            'bitLockerStatus' => fn(ParseNode $n) => $o->setBitLockerStatus($n->getStringValue()),
            'bootAppSecurityVersion' => fn(ParseNode $n) => $o->setBootAppSecurityVersion($n->getStringValue()),
            'bootDebugging' => fn(ParseNode $n) => $o->setBootDebugging($n->getStringValue()),
            'bootManagerSecurityVersion' => fn(ParseNode $n) => $o->setBootManagerSecurityVersion($n->getStringValue()),
            'bootManagerVersion' => fn(ParseNode $n) => $o->setBootManagerVersion($n->getStringValue()),
            'bootRevisionListInfo' => fn(ParseNode $n) => $o->setBootRevisionListInfo($n->getStringValue()),
            'codeIntegrity' => fn(ParseNode $n) => $o->setCodeIntegrity($n->getStringValue()),
            'codeIntegrityCheckVersion' => fn(ParseNode $n) => $o->setCodeIntegrityCheckVersion($n->getStringValue()),
            'codeIntegrityPolicy' => fn(ParseNode $n) => $o->setCodeIntegrityPolicy($n->getStringValue()),
            'contentNamespaceUrl' => fn(ParseNode $n) => $o->setContentNamespaceUrl($n->getStringValue()),
            'contentVersion' => fn(ParseNode $n) => $o->setContentVersion($n->getStringValue()),
            'dataExcutionPolicy' => fn(ParseNode $n) => $o->setDataExcutionPolicy($n->getStringValue()),
            'deviceHealthAttestationStatus' => fn(ParseNode $n) => $o->setDeviceHealthAttestationStatus($n->getStringValue()),
            'earlyLaunchAntiMalwareDriverProtection' => fn(ParseNode $n) => $o->setEarlyLaunchAntiMalwareDriverProtection($n->getStringValue()),
            'healthAttestationSupportedStatus' => fn(ParseNode $n) => $o->setHealthAttestationSupportedStatus($n->getStringValue()),
            'healthStatusMismatchInfo' => fn(ParseNode $n) => $o->setHealthStatusMismatchInfo($n->getStringValue()),
            'issuedDateTime' => fn(ParseNode $n) => $o->setIssuedDateTime($n->getDateTimeValue()),
            'lastUpdateDateTime' => fn(ParseNode $n) => $o->setLastUpdateDateTime($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operatingSystemKernelDebugging' => fn(ParseNode $n) => $o->setOperatingSystemKernelDebugging($n->getStringValue()),
            'operatingSystemRevListInfo' => fn(ParseNode $n) => $o->setOperatingSystemRevListInfo($n->getStringValue()),
            'pcr0' => fn(ParseNode $n) => $o->setPcr0($n->getStringValue()),
            'pcrHashAlgorithm' => fn(ParseNode $n) => $o->setPcrHashAlgorithm($n->getStringValue()),
            'resetCount' => fn(ParseNode $n) => $o->setResetCount($n->getIntegerValue()),
            'restartCount' => fn(ParseNode $n) => $o->setRestartCount($n->getIntegerValue()),
            'safeMode' => fn(ParseNode $n) => $o->setSafeMode($n->getStringValue()),
            'secureBoot' => fn(ParseNode $n) => $o->setSecureBoot($n->getStringValue()),
            'secureBootConfigurationPolicyFingerPrint' => fn(ParseNode $n) => $o->setSecureBootConfigurationPolicyFingerPrint($n->getStringValue()),
            'testSigning' => fn(ParseNode $n) => $o->setTestSigning($n->getStringValue()),
            'tpmVersion' => fn(ParseNode $n) => $o->setTpmVersion($n->getStringValue()),
            'virtualSecureMode' => fn(ParseNode $n) => $o->setVirtualSecureMode($n->getStringValue()),
            'windowsPE' => fn(ParseNode $n) => $o->setWindowsPE($n->getStringValue()),
        ];
    }

    /**
     * Gets the healthAttestationSupportedStatus property value. This attribute indicates if DHA is supported for the device
     * @return string|null
    */
    public function getHealthAttestationSupportedStatus(): ?string {
        return $this->getBackingStore()->get('healthAttestationSupportedStatus');
    }

    /**
     * Gets the healthStatusMismatchInfo property value. This attribute appears if DHA-Service detects an integrity issue
     * @return string|null
    */
    public function getHealthStatusMismatchInfo(): ?string {
        return $this->getBackingStore()->get('healthStatusMismatchInfo');
    }

    /**
     * Gets the issuedDateTime property value. The DateTime when device was evaluated or issued to MDM
     * @return DateTime|null
    */
    public function getIssuedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('issuedDateTime');
    }

    /**
     * Gets the lastUpdateDateTime property value. The Timestamp of the last update.
     * @return string|null
    */
    public function getLastUpdateDateTime(): ?string {
        return $this->getBackingStore()->get('lastUpdateDateTime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the operatingSystemKernelDebugging property value. When operatingSystemKernelDebugging is enabled, the device is used in development and testing
     * @return string|null
    */
    public function getOperatingSystemKernelDebugging(): ?string {
        return $this->getBackingStore()->get('operatingSystemKernelDebugging');
    }

    /**
     * Gets the operatingSystemRevListInfo property value. The Operating System Revision List that was loaded during initial boot on the attested device
     * @return string|null
    */
    public function getOperatingSystemRevListInfo(): ?string {
        return $this->getBackingStore()->get('operatingSystemRevListInfo');
    }

    /**
     * Gets the pcr0 property value. The measurement that is captured in PCR[0]
     * @return string|null
    */
    public function getPcr0(): ?string {
        return $this->getBackingStore()->get('pcr0');
    }

    /**
     * Gets the pcrHashAlgorithm property value. Informational attribute that identifies the HASH algorithm that was used by TPM
     * @return string|null
    */
    public function getPcrHashAlgorithm(): ?string {
        return $this->getBackingStore()->get('pcrHashAlgorithm');
    }

    /**
     * Gets the resetCount property value. The number of times a PC device has hibernated or resumed
     * @return int|null
    */
    public function getResetCount(): ?int {
        return $this->getBackingStore()->get('resetCount');
    }

    /**
     * Gets the restartCount property value. The number of times a PC device has rebooted
     * @return int|null
    */
    public function getRestartCount(): ?int {
        return $this->getBackingStore()->get('restartCount');
    }

    /**
     * Gets the safeMode property value. Safe mode is a troubleshooting option for Windows that starts your computer in a limited state
     * @return string|null
    */
    public function getSafeMode(): ?string {
        return $this->getBackingStore()->get('safeMode');
    }

    /**
     * Gets the secureBoot property value. When Secure Boot is enabled, the core components must have the correct cryptographic signatures
     * @return string|null
    */
    public function getSecureBoot(): ?string {
        return $this->getBackingStore()->get('secureBoot');
    }

    /**
     * Gets the secureBootConfigurationPolicyFingerPrint property value. Fingerprint of the Custom Secure Boot Configuration Policy
     * @return string|null
    */
    public function getSecureBootConfigurationPolicyFingerPrint(): ?string {
        return $this->getBackingStore()->get('secureBootConfigurationPolicyFingerPrint');
    }

    /**
     * Gets the testSigning property value. When test signing is allowed, the device does not enforce signature validation during boot
     * @return string|null
    */
    public function getTestSigning(): ?string {
        return $this->getBackingStore()->get('testSigning');
    }

    /**
     * Gets the tpmVersion property value. The security version number of the Boot Application
     * @return string|null
    */
    public function getTpmVersion(): ?string {
        return $this->getBackingStore()->get('tpmVersion');
    }

    /**
     * Gets the virtualSecureMode property value. VSM is a container that protects high value assets from a compromised kernel
     * @return string|null
    */
    public function getVirtualSecureMode(): ?string {
        return $this->getBackingStore()->get('virtualSecureMode');
    }

    /**
     * Gets the windowsPE property value. Operating system running with limited services that is used to prepare a computer for Windows
     * @return string|null
    */
    public function getWindowsPE(): ?string {
        return $this->getBackingStore()->get('windowsPE');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('attestationIdentityKey', $this->getAttestationIdentityKey());
        $writer->writeStringValue('bitLockerStatus', $this->getBitLockerStatus());
        $writer->writeStringValue('bootAppSecurityVersion', $this->getBootAppSecurityVersion());
        $writer->writeStringValue('bootDebugging', $this->getBootDebugging());
        $writer->writeStringValue('bootManagerSecurityVersion', $this->getBootManagerSecurityVersion());
        $writer->writeStringValue('bootManagerVersion', $this->getBootManagerVersion());
        $writer->writeStringValue('bootRevisionListInfo', $this->getBootRevisionListInfo());
        $writer->writeStringValue('codeIntegrity', $this->getCodeIntegrity());
        $writer->writeStringValue('codeIntegrityCheckVersion', $this->getCodeIntegrityCheckVersion());
        $writer->writeStringValue('codeIntegrityPolicy', $this->getCodeIntegrityPolicy());
        $writer->writeStringValue('contentNamespaceUrl', $this->getContentNamespaceUrl());
        $writer->writeStringValue('contentVersion', $this->getContentVersion());
        $writer->writeStringValue('dataExcutionPolicy', $this->getDataExcutionPolicy());
        $writer->writeStringValue('deviceHealthAttestationStatus', $this->getDeviceHealthAttestationStatus());
        $writer->writeStringValue('earlyLaunchAntiMalwareDriverProtection', $this->getEarlyLaunchAntiMalwareDriverProtection());
        $writer->writeStringValue('healthAttestationSupportedStatus', $this->getHealthAttestationSupportedStatus());
        $writer->writeStringValue('healthStatusMismatchInfo', $this->getHealthStatusMismatchInfo());
        $writer->writeDateTimeValue('issuedDateTime', $this->getIssuedDateTime());
        $writer->writeStringValue('lastUpdateDateTime', $this->getLastUpdateDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operatingSystemKernelDebugging', $this->getOperatingSystemKernelDebugging());
        $writer->writeStringValue('operatingSystemRevListInfo', $this->getOperatingSystemRevListInfo());
        $writer->writeStringValue('pcr0', $this->getPcr0());
        $writer->writeStringValue('pcrHashAlgorithm', $this->getPcrHashAlgorithm());
        $writer->writeIntegerValue('resetCount', $this->getResetCount());
        $writer->writeIntegerValue('restartCount', $this->getRestartCount());
        $writer->writeStringValue('safeMode', $this->getSafeMode());
        $writer->writeStringValue('secureBoot', $this->getSecureBoot());
        $writer->writeStringValue('secureBootConfigurationPolicyFingerPrint', $this->getSecureBootConfigurationPolicyFingerPrint());
        $writer->writeStringValue('testSigning', $this->getTestSigning());
        $writer->writeStringValue('tpmVersion', $this->getTpmVersion());
        $writer->writeStringValue('virtualSecureMode', $this->getVirtualSecureMode());
        $writer->writeStringValue('windowsPE', $this->getWindowsPE());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the attestationIdentityKey property value. TWhen an Attestation Identity Key (AIK) is present on a device, it indicates that the device has an endorsement key (EK) certificate.
     * @param string|null $value Value to set for the attestationIdentityKey property.
    */
    public function setAttestationIdentityKey(?string $value): void {
        $this->getBackingStore()->set('attestationIdentityKey', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bitLockerStatus property value. On or Off of BitLocker Drive Encryption
     * @param string|null $value Value to set for the bitLockerStatus property.
    */
    public function setBitLockerStatus(?string $value): void {
        $this->getBackingStore()->set('bitLockerStatus', $value);
    }

    /**
     * Sets the bootAppSecurityVersion property value. The security version number of the Boot Application
     * @param string|null $value Value to set for the bootAppSecurityVersion property.
    */
    public function setBootAppSecurityVersion(?string $value): void {
        $this->getBackingStore()->set('bootAppSecurityVersion', $value);
    }

    /**
     * Sets the bootDebugging property value. When bootDebugging is enabled, the device is used in development and testing
     * @param string|null $value Value to set for the bootDebugging property.
    */
    public function setBootDebugging(?string $value): void {
        $this->getBackingStore()->set('bootDebugging', $value);
    }

    /**
     * Sets the bootManagerSecurityVersion property value. The security version number of the Boot Application
     * @param string|null $value Value to set for the bootManagerSecurityVersion property.
    */
    public function setBootManagerSecurityVersion(?string $value): void {
        $this->getBackingStore()->set('bootManagerSecurityVersion', $value);
    }

    /**
     * Sets the bootManagerVersion property value. The version of the Boot Manager
     * @param string|null $value Value to set for the bootManagerVersion property.
    */
    public function setBootManagerVersion(?string $value): void {
        $this->getBackingStore()->set('bootManagerVersion', $value);
    }

    /**
     * Sets the bootRevisionListInfo property value. The Boot Revision List that was loaded during initial boot on the attested device
     * @param string|null $value Value to set for the bootRevisionListInfo property.
    */
    public function setBootRevisionListInfo(?string $value): void {
        $this->getBackingStore()->set('bootRevisionListInfo', $value);
    }

    /**
     * Sets the codeIntegrity property value. When code integrity is enabled, code execution is restricted to integrity verified code
     * @param string|null $value Value to set for the codeIntegrity property.
    */
    public function setCodeIntegrity(?string $value): void {
        $this->getBackingStore()->set('codeIntegrity', $value);
    }

    /**
     * Sets the codeIntegrityCheckVersion property value. The version of the Boot Manager
     * @param string|null $value Value to set for the codeIntegrityCheckVersion property.
    */
    public function setCodeIntegrityCheckVersion(?string $value): void {
        $this->getBackingStore()->set('codeIntegrityCheckVersion', $value);
    }

    /**
     * Sets the codeIntegrityPolicy property value. The Code Integrity policy that is controlling the security of the boot environment
     * @param string|null $value Value to set for the codeIntegrityPolicy property.
    */
    public function setCodeIntegrityPolicy(?string $value): void {
        $this->getBackingStore()->set('codeIntegrityPolicy', $value);
    }

    /**
     * Sets the contentNamespaceUrl property value. The DHA report version. (Namespace version)
     * @param string|null $value Value to set for the contentNamespaceUrl property.
    */
    public function setContentNamespaceUrl(?string $value): void {
        $this->getBackingStore()->set('contentNamespaceUrl', $value);
    }

    /**
     * Sets the contentVersion property value. The HealthAttestation state schema version
     * @param string|null $value Value to set for the contentVersion property.
    */
    public function setContentVersion(?string $value): void {
        $this->getBackingStore()->set('contentVersion', $value);
    }

    /**
     * Sets the dataExcutionPolicy property value. DEP Policy defines a set of hardware and software technologies that perform additional checks on memory
     * @param string|null $value Value to set for the dataExcutionPolicy property.
    */
    public function setDataExcutionPolicy(?string $value): void {
        $this->getBackingStore()->set('dataExcutionPolicy', $value);
    }

    /**
     * Sets the deviceHealthAttestationStatus property value. The DHA report version. (Namespace version)
     * @param string|null $value Value to set for the deviceHealthAttestationStatus property.
    */
    public function setDeviceHealthAttestationStatus(?string $value): void {
        $this->getBackingStore()->set('deviceHealthAttestationStatus', $value);
    }

    /**
     * Sets the earlyLaunchAntiMalwareDriverProtection property value. ELAM provides protection for the computers in your network when they start up
     * @param string|null $value Value to set for the earlyLaunchAntiMalwareDriverProtection property.
    */
    public function setEarlyLaunchAntiMalwareDriverProtection(?string $value): void {
        $this->getBackingStore()->set('earlyLaunchAntiMalwareDriverProtection', $value);
    }

    /**
     * Sets the healthAttestationSupportedStatus property value. This attribute indicates if DHA is supported for the device
     * @param string|null $value Value to set for the healthAttestationSupportedStatus property.
    */
    public function setHealthAttestationSupportedStatus(?string $value): void {
        $this->getBackingStore()->set('healthAttestationSupportedStatus', $value);
    }

    /**
     * Sets the healthStatusMismatchInfo property value. This attribute appears if DHA-Service detects an integrity issue
     * @param string|null $value Value to set for the healthStatusMismatchInfo property.
    */
    public function setHealthStatusMismatchInfo(?string $value): void {
        $this->getBackingStore()->set('healthStatusMismatchInfo', $value);
    }

    /**
     * Sets the issuedDateTime property value. The DateTime when device was evaluated or issued to MDM
     * @param DateTime|null $value Value to set for the issuedDateTime property.
    */
    public function setIssuedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('issuedDateTime', $value);
    }

    /**
     * Sets the lastUpdateDateTime property value. The Timestamp of the last update.
     * @param string|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?string $value): void {
        $this->getBackingStore()->set('lastUpdateDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operatingSystemKernelDebugging property value. When operatingSystemKernelDebugging is enabled, the device is used in development and testing
     * @param string|null $value Value to set for the operatingSystemKernelDebugging property.
    */
    public function setOperatingSystemKernelDebugging(?string $value): void {
        $this->getBackingStore()->set('operatingSystemKernelDebugging', $value);
    }

    /**
     * Sets the operatingSystemRevListInfo property value. The Operating System Revision List that was loaded during initial boot on the attested device
     * @param string|null $value Value to set for the operatingSystemRevListInfo property.
    */
    public function setOperatingSystemRevListInfo(?string $value): void {
        $this->getBackingStore()->set('operatingSystemRevListInfo', $value);
    }

    /**
     * Sets the pcr0 property value. The measurement that is captured in PCR[0]
     * @param string|null $value Value to set for the pcr0 property.
    */
    public function setPcr0(?string $value): void {
        $this->getBackingStore()->set('pcr0', $value);
    }

    /**
     * Sets the pcrHashAlgorithm property value. Informational attribute that identifies the HASH algorithm that was used by TPM
     * @param string|null $value Value to set for the pcrHashAlgorithm property.
    */
    public function setPcrHashAlgorithm(?string $value): void {
        $this->getBackingStore()->set('pcrHashAlgorithm', $value);
    }

    /**
     * Sets the resetCount property value. The number of times a PC device has hibernated or resumed
     * @param int|null $value Value to set for the resetCount property.
    */
    public function setResetCount(?int $value): void {
        $this->getBackingStore()->set('resetCount', $value);
    }

    /**
     * Sets the restartCount property value. The number of times a PC device has rebooted
     * @param int|null $value Value to set for the restartCount property.
    */
    public function setRestartCount(?int $value): void {
        $this->getBackingStore()->set('restartCount', $value);
    }

    /**
     * Sets the safeMode property value. Safe mode is a troubleshooting option for Windows that starts your computer in a limited state
     * @param string|null $value Value to set for the safeMode property.
    */
    public function setSafeMode(?string $value): void {
        $this->getBackingStore()->set('safeMode', $value);
    }

    /**
     * Sets the secureBoot property value. When Secure Boot is enabled, the core components must have the correct cryptographic signatures
     * @param string|null $value Value to set for the secureBoot property.
    */
    public function setSecureBoot(?string $value): void {
        $this->getBackingStore()->set('secureBoot', $value);
    }

    /**
     * Sets the secureBootConfigurationPolicyFingerPrint property value. Fingerprint of the Custom Secure Boot Configuration Policy
     * @param string|null $value Value to set for the secureBootConfigurationPolicyFingerPrint property.
    */
    public function setSecureBootConfigurationPolicyFingerPrint(?string $value): void {
        $this->getBackingStore()->set('secureBootConfigurationPolicyFingerPrint', $value);
    }

    /**
     * Sets the testSigning property value. When test signing is allowed, the device does not enforce signature validation during boot
     * @param string|null $value Value to set for the testSigning property.
    */
    public function setTestSigning(?string $value): void {
        $this->getBackingStore()->set('testSigning', $value);
    }

    /**
     * Sets the tpmVersion property value. The security version number of the Boot Application
     * @param string|null $value Value to set for the tpmVersion property.
    */
    public function setTpmVersion(?string $value): void {
        $this->getBackingStore()->set('tpmVersion', $value);
    }

    /**
     * Sets the virtualSecureMode property value. VSM is a container that protects high value assets from a compromised kernel
     * @param string|null $value Value to set for the virtualSecureMode property.
    */
    public function setVirtualSecureMode(?string $value): void {
        $this->getBackingStore()->set('virtualSecureMode', $value);
    }

    /**
     * Sets the windowsPE property value. Operating system running with limited services that is used to prepare a computer for Windows
     * @param string|null $value Value to set for the windowsPE property.
    */
    public function setWindowsPE(?string $value): void {
        $this->getBackingStore()->set('windowsPE', $value);
    }

}
