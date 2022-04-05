<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceHealthAttestationState implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $attestationIdentityKey TWhen an Attestation Identity Key (AIK) is present on a device, it indicates that the device has an endorsement key (EK) certificate. */
    private ?string $attestationIdentityKey = null;
    
    /** @var string|null $bitLockerStatus On or Off of BitLocker Drive Encryption */
    private ?string $bitLockerStatus = null;
    
    /** @var string|null $bootAppSecurityVersion The security version number of the Boot Application */
    private ?string $bootAppSecurityVersion = null;
    
    /** @var string|null $bootDebugging When bootDebugging is enabled, the device is used in development and testing */
    private ?string $bootDebugging = null;
    
    /** @var string|null $bootManagerSecurityVersion The security version number of the Boot Application */
    private ?string $bootManagerSecurityVersion = null;
    
    /** @var string|null $bootManagerVersion The version of the Boot Manager */
    private ?string $bootManagerVersion = null;
    
    /** @var string|null $bootRevisionListInfo The Boot Revision List that was loaded during initial boot on the attested device */
    private ?string $bootRevisionListInfo = null;
    
    /** @var string|null $codeIntegrity When code integrity is enabled, code execution is restricted to integrity verified code */
    private ?string $codeIntegrity = null;
    
    /** @var string|null $codeIntegrityCheckVersion The version of the Boot Manager */
    private ?string $codeIntegrityCheckVersion = null;
    
    /** @var string|null $codeIntegrityPolicy The Code Integrity policy that is controlling the security of the boot environment */
    private ?string $codeIntegrityPolicy = null;
    
    /** @var string|null $contentNamespaceUrl The DHA report version. (Namespace version) */
    private ?string $contentNamespaceUrl = null;
    
    /** @var string|null $contentVersion The HealthAttestation state schema version */
    private ?string $contentVersion = null;
    
    /** @var string|null $dataExcutionPolicy DEP Policy defines a set of hardware and software technologies that perform additional checks on memory */
    private ?string $dataExcutionPolicy = null;
    
    /** @var string|null $deviceHealthAttestationStatus The DHA report version. (Namespace version) */
    private ?string $deviceHealthAttestationStatus = null;
    
    /** @var string|null $earlyLaunchAntiMalwareDriverProtection ELAM provides protection for the computers in your network when they start up */
    private ?string $earlyLaunchAntiMalwareDriverProtection = null;
    
    /** @var string|null $healthAttestationSupportedStatus This attribute indicates if DHA is supported for the device */
    private ?string $healthAttestationSupportedStatus = null;
    
    /** @var string|null $healthStatusMismatchInfo This attribute appears if DHA-Service detects an integrity issue */
    private ?string $healthStatusMismatchInfo = null;
    
    /** @var DateTime|null $issuedDateTime The DateTime when device was evaluated or issued to MDM */
    private ?DateTime $issuedDateTime = null;
    
    /** @var string|null $lastUpdateDateTime The Timestamp of the last update. */
    private ?string $lastUpdateDateTime = null;
    
    /** @var string|null $operatingSystemKernelDebugging When operatingSystemKernelDebugging is enabled, the device is used in development and testing */
    private ?string $operatingSystemKernelDebugging = null;
    
    /** @var string|null $operatingSystemRevListInfo The Operating System Revision List that was loaded during initial boot on the attested device */
    private ?string $operatingSystemRevListInfo = null;
    
    /** @var string|null $pcr0 The measurement that is captured in PCR[0] */
    private ?string $pcr0 = null;
    
    /** @var string|null $pcrHashAlgorithm Informational attribute that identifies the HASH algorithm that was used by TPM */
    private ?string $pcrHashAlgorithm = null;
    
    /** @var int|null $resetCount The number of times a PC device has hibernated or resumed */
    private ?int $resetCount = null;
    
    /** @var int|null $restartCount The number of times a PC device has rebooted */
    private ?int $restartCount = null;
    
    /** @var string|null $safeMode Safe mode is a troubleshooting option for Windows that starts your computer in a limited state */
    private ?string $safeMode = null;
    
    /** @var string|null $secureBoot When Secure Boot is enabled, the core components must have the correct cryptographic signatures */
    private ?string $secureBoot = null;
    
    /** @var string|null $secureBootConfigurationPolicyFingerPrint Fingerprint of the Custom Secure Boot Configuration Policy */
    private ?string $secureBootConfigurationPolicyFingerPrint = null;
    
    /** @var string|null $testSigning When test signing is allowed, the device does not enforce signature validation during boot */
    private ?string $testSigning = null;
    
    /** @var string|null $tpmVersion The security version number of the Boot Application */
    private ?string $tpmVersion = null;
    
    /** @var string|null $virtualSecureMode VSM is a container that protects high value assets from a compromised kernel */
    private ?string $virtualSecureMode = null;
    
    /** @var string|null $windowsPE Operating system running with limited services that is used to prepare a computer for Windows */
    private ?string $windowsPE = null;
    
    /**
     * Instantiates a new deviceHealthAttestationState and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthAttestationState
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthAttestationState {
        return new DeviceHealthAttestationState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attestationIdentityKey property value. TWhen an Attestation Identity Key (AIK) is present on a device, it indicates that the device has an endorsement key (EK) certificate.
     * @return string|null
    */
    public function getAttestationIdentityKey(): ?string {
        return $this->attestationIdentityKey;
    }

    /**
     * Gets the bitLockerStatus property value. On or Off of BitLocker Drive Encryption
     * @return string|null
    */
    public function getBitLockerStatus(): ?string {
        return $this->bitLockerStatus;
    }

    /**
     * Gets the bootAppSecurityVersion property value. The security version number of the Boot Application
     * @return string|null
    */
    public function getBootAppSecurityVersion(): ?string {
        return $this->bootAppSecurityVersion;
    }

    /**
     * Gets the bootDebugging property value. When bootDebugging is enabled, the device is used in development and testing
     * @return string|null
    */
    public function getBootDebugging(): ?string {
        return $this->bootDebugging;
    }

    /**
     * Gets the bootManagerSecurityVersion property value. The security version number of the Boot Application
     * @return string|null
    */
    public function getBootManagerSecurityVersion(): ?string {
        return $this->bootManagerSecurityVersion;
    }

    /**
     * Gets the bootManagerVersion property value. The version of the Boot Manager
     * @return string|null
    */
    public function getBootManagerVersion(): ?string {
        return $this->bootManagerVersion;
    }

    /**
     * Gets the bootRevisionListInfo property value. The Boot Revision List that was loaded during initial boot on the attested device
     * @return string|null
    */
    public function getBootRevisionListInfo(): ?string {
        return $this->bootRevisionListInfo;
    }

    /**
     * Gets the codeIntegrity property value. When code integrity is enabled, code execution is restricted to integrity verified code
     * @return string|null
    */
    public function getCodeIntegrity(): ?string {
        return $this->codeIntegrity;
    }

    /**
     * Gets the codeIntegrityCheckVersion property value. The version of the Boot Manager
     * @return string|null
    */
    public function getCodeIntegrityCheckVersion(): ?string {
        return $this->codeIntegrityCheckVersion;
    }

    /**
     * Gets the codeIntegrityPolicy property value. The Code Integrity policy that is controlling the security of the boot environment
     * @return string|null
    */
    public function getCodeIntegrityPolicy(): ?string {
        return $this->codeIntegrityPolicy;
    }

    /**
     * Gets the contentNamespaceUrl property value. The DHA report version. (Namespace version)
     * @return string|null
    */
    public function getContentNamespaceUrl(): ?string {
        return $this->contentNamespaceUrl;
    }

    /**
     * Gets the contentVersion property value. The HealthAttestation state schema version
     * @return string|null
    */
    public function getContentVersion(): ?string {
        return $this->contentVersion;
    }

    /**
     * Gets the dataExcutionPolicy property value. DEP Policy defines a set of hardware and software technologies that perform additional checks on memory
     * @return string|null
    */
    public function getDataExcutionPolicy(): ?string {
        return $this->dataExcutionPolicy;
    }

    /**
     * Gets the deviceHealthAttestationStatus property value. The DHA report version. (Namespace version)
     * @return string|null
    */
    public function getDeviceHealthAttestationStatus(): ?string {
        return $this->deviceHealthAttestationStatus;
    }

    /**
     * Gets the earlyLaunchAntiMalwareDriverProtection property value. ELAM provides protection for the computers in your network when they start up
     * @return string|null
    */
    public function getEarlyLaunchAntiMalwareDriverProtection(): ?string {
        return $this->earlyLaunchAntiMalwareDriverProtection;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'attestationIdentityKey' => function (self $o, ParseNode $n) { $o->setAttestationIdentityKey($n->getStringValue()); },
            'bitLockerStatus' => function (self $o, ParseNode $n) { $o->setBitLockerStatus($n->getStringValue()); },
            'bootAppSecurityVersion' => function (self $o, ParseNode $n) { $o->setBootAppSecurityVersion($n->getStringValue()); },
            'bootDebugging' => function (self $o, ParseNode $n) { $o->setBootDebugging($n->getStringValue()); },
            'bootManagerSecurityVersion' => function (self $o, ParseNode $n) { $o->setBootManagerSecurityVersion($n->getStringValue()); },
            'bootManagerVersion' => function (self $o, ParseNode $n) { $o->setBootManagerVersion($n->getStringValue()); },
            'bootRevisionListInfo' => function (self $o, ParseNode $n) { $o->setBootRevisionListInfo($n->getStringValue()); },
            'codeIntegrity' => function (self $o, ParseNode $n) { $o->setCodeIntegrity($n->getStringValue()); },
            'codeIntegrityCheckVersion' => function (self $o, ParseNode $n) { $o->setCodeIntegrityCheckVersion($n->getStringValue()); },
            'codeIntegrityPolicy' => function (self $o, ParseNode $n) { $o->setCodeIntegrityPolicy($n->getStringValue()); },
            'contentNamespaceUrl' => function (self $o, ParseNode $n) { $o->setContentNamespaceUrl($n->getStringValue()); },
            'contentVersion' => function (self $o, ParseNode $n) { $o->setContentVersion($n->getStringValue()); },
            'dataExcutionPolicy' => function (self $o, ParseNode $n) { $o->setDataExcutionPolicy($n->getStringValue()); },
            'deviceHealthAttestationStatus' => function (self $o, ParseNode $n) { $o->setDeviceHealthAttestationStatus($n->getStringValue()); },
            'earlyLaunchAntiMalwareDriverProtection' => function (self $o, ParseNode $n) { $o->setEarlyLaunchAntiMalwareDriverProtection($n->getStringValue()); },
            'healthAttestationSupportedStatus' => function (self $o, ParseNode $n) { $o->setHealthAttestationSupportedStatus($n->getStringValue()); },
            'healthStatusMismatchInfo' => function (self $o, ParseNode $n) { $o->setHealthStatusMismatchInfo($n->getStringValue()); },
            'issuedDateTime' => function (self $o, ParseNode $n) { $o->setIssuedDateTime($n->getDateTimeValue()); },
            'lastUpdateDateTime' => function (self $o, ParseNode $n) { $o->setLastUpdateDateTime($n->getStringValue()); },
            'operatingSystemKernelDebugging' => function (self $o, ParseNode $n) { $o->setOperatingSystemKernelDebugging($n->getStringValue()); },
            'operatingSystemRevListInfo' => function (self $o, ParseNode $n) { $o->setOperatingSystemRevListInfo($n->getStringValue()); },
            'pcr0' => function (self $o, ParseNode $n) { $o->setPcr0($n->getStringValue()); },
            'pcrHashAlgorithm' => function (self $o, ParseNode $n) { $o->setPcrHashAlgorithm($n->getStringValue()); },
            'resetCount' => function (self $o, ParseNode $n) { $o->setResetCount($n->getIntegerValue()); },
            'restartCount' => function (self $o, ParseNode $n) { $o->setRestartCount($n->getIntegerValue()); },
            'safeMode' => function (self $o, ParseNode $n) { $o->setSafeMode($n->getStringValue()); },
            'secureBoot' => function (self $o, ParseNode $n) { $o->setSecureBoot($n->getStringValue()); },
            'secureBootConfigurationPolicyFingerPrint' => function (self $o, ParseNode $n) { $o->setSecureBootConfigurationPolicyFingerPrint($n->getStringValue()); },
            'testSigning' => function (self $o, ParseNode $n) { $o->setTestSigning($n->getStringValue()); },
            'tpmVersion' => function (self $o, ParseNode $n) { $o->setTpmVersion($n->getStringValue()); },
            'virtualSecureMode' => function (self $o, ParseNode $n) { $o->setVirtualSecureMode($n->getStringValue()); },
            'windowsPE' => function (self $o, ParseNode $n) { $o->setWindowsPE($n->getStringValue()); },
        ];
    }

    /**
     * Gets the healthAttestationSupportedStatus property value. This attribute indicates if DHA is supported for the device
     * @return string|null
    */
    public function getHealthAttestationSupportedStatus(): ?string {
        return $this->healthAttestationSupportedStatus;
    }

    /**
     * Gets the healthStatusMismatchInfo property value. This attribute appears if DHA-Service detects an integrity issue
     * @return string|null
    */
    public function getHealthStatusMismatchInfo(): ?string {
        return $this->healthStatusMismatchInfo;
    }

    /**
     * Gets the issuedDateTime property value. The DateTime when device was evaluated or issued to MDM
     * @return DateTime|null
    */
    public function getIssuedDateTime(): ?DateTime {
        return $this->issuedDateTime;
    }

    /**
     * Gets the lastUpdateDateTime property value. The Timestamp of the last update.
     * @return string|null
    */
    public function getLastUpdateDateTime(): ?string {
        return $this->lastUpdateDateTime;
    }

    /**
     * Gets the operatingSystemKernelDebugging property value. When operatingSystemKernelDebugging is enabled, the device is used in development and testing
     * @return string|null
    */
    public function getOperatingSystemKernelDebugging(): ?string {
        return $this->operatingSystemKernelDebugging;
    }

    /**
     * Gets the operatingSystemRevListInfo property value. The Operating System Revision List that was loaded during initial boot on the attested device
     * @return string|null
    */
    public function getOperatingSystemRevListInfo(): ?string {
        return $this->operatingSystemRevListInfo;
    }

    /**
     * Gets the pcr0 property value. The measurement that is captured in PCR[0]
     * @return string|null
    */
    public function getPcr0(): ?string {
        return $this->pcr0;
    }

    /**
     * Gets the pcrHashAlgorithm property value. Informational attribute that identifies the HASH algorithm that was used by TPM
     * @return string|null
    */
    public function getPcrHashAlgorithm(): ?string {
        return $this->pcrHashAlgorithm;
    }

    /**
     * Gets the resetCount property value. The number of times a PC device has hibernated or resumed
     * @return int|null
    */
    public function getResetCount(): ?int {
        return $this->resetCount;
    }

    /**
     * Gets the restartCount property value. The number of times a PC device has rebooted
     * @return int|null
    */
    public function getRestartCount(): ?int {
        return $this->restartCount;
    }

    /**
     * Gets the safeMode property value. Safe mode is a troubleshooting option for Windows that starts your computer in a limited state
     * @return string|null
    */
    public function getSafeMode(): ?string {
        return $this->safeMode;
    }

    /**
     * Gets the secureBoot property value. When Secure Boot is enabled, the core components must have the correct cryptographic signatures
     * @return string|null
    */
    public function getSecureBoot(): ?string {
        return $this->secureBoot;
    }

    /**
     * Gets the secureBootConfigurationPolicyFingerPrint property value. Fingerprint of the Custom Secure Boot Configuration Policy
     * @return string|null
    */
    public function getSecureBootConfigurationPolicyFingerPrint(): ?string {
        return $this->secureBootConfigurationPolicyFingerPrint;
    }

    /**
     * Gets the testSigning property value. When test signing is allowed, the device does not enforce signature validation during boot
     * @return string|null
    */
    public function getTestSigning(): ?string {
        return $this->testSigning;
    }

    /**
     * Gets the tpmVersion property value. The security version number of the Boot Application
     * @return string|null
    */
    public function getTpmVersion(): ?string {
        return $this->tpmVersion;
    }

    /**
     * Gets the virtualSecureMode property value. VSM is a container that protects high value assets from a compromised kernel
     * @return string|null
    */
    public function getVirtualSecureMode(): ?string {
        return $this->virtualSecureMode;
    }

    /**
     * Gets the windowsPE property value. Operating system running with limited services that is used to prepare a computer for Windows
     * @return string|null
    */
    public function getWindowsPE(): ?string {
        return $this->windowsPE;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('attestationIdentityKey', $this->attestationIdentityKey);
        $writer->writeStringValue('bitLockerStatus', $this->bitLockerStatus);
        $writer->writeStringValue('bootAppSecurityVersion', $this->bootAppSecurityVersion);
        $writer->writeStringValue('bootDebugging', $this->bootDebugging);
        $writer->writeStringValue('bootManagerSecurityVersion', $this->bootManagerSecurityVersion);
        $writer->writeStringValue('bootManagerVersion', $this->bootManagerVersion);
        $writer->writeStringValue('bootRevisionListInfo', $this->bootRevisionListInfo);
        $writer->writeStringValue('codeIntegrity', $this->codeIntegrity);
        $writer->writeStringValue('codeIntegrityCheckVersion', $this->codeIntegrityCheckVersion);
        $writer->writeStringValue('codeIntegrityPolicy', $this->codeIntegrityPolicy);
        $writer->writeStringValue('contentNamespaceUrl', $this->contentNamespaceUrl);
        $writer->writeStringValue('contentVersion', $this->contentVersion);
        $writer->writeStringValue('dataExcutionPolicy', $this->dataExcutionPolicy);
        $writer->writeStringValue('deviceHealthAttestationStatus', $this->deviceHealthAttestationStatus);
        $writer->writeStringValue('earlyLaunchAntiMalwareDriverProtection', $this->earlyLaunchAntiMalwareDriverProtection);
        $writer->writeStringValue('healthAttestationSupportedStatus', $this->healthAttestationSupportedStatus);
        $writer->writeStringValue('healthStatusMismatchInfo', $this->healthStatusMismatchInfo);
        $writer->writeDateTimeValue('issuedDateTime', $this->issuedDateTime);
        $writer->writeStringValue('lastUpdateDateTime', $this->lastUpdateDateTime);
        $writer->writeStringValue('operatingSystemKernelDebugging', $this->operatingSystemKernelDebugging);
        $writer->writeStringValue('operatingSystemRevListInfo', $this->operatingSystemRevListInfo);
        $writer->writeStringValue('pcr0', $this->pcr0);
        $writer->writeStringValue('pcrHashAlgorithm', $this->pcrHashAlgorithm);
        $writer->writeIntegerValue('resetCount', $this->resetCount);
        $writer->writeIntegerValue('restartCount', $this->restartCount);
        $writer->writeStringValue('safeMode', $this->safeMode);
        $writer->writeStringValue('secureBoot', $this->secureBoot);
        $writer->writeStringValue('secureBootConfigurationPolicyFingerPrint', $this->secureBootConfigurationPolicyFingerPrint);
        $writer->writeStringValue('testSigning', $this->testSigning);
        $writer->writeStringValue('tpmVersion', $this->tpmVersion);
        $writer->writeStringValue('virtualSecureMode', $this->virtualSecureMode);
        $writer->writeStringValue('windowsPE', $this->windowsPE);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the attestationIdentityKey property value. TWhen an Attestation Identity Key (AIK) is present on a device, it indicates that the device has an endorsement key (EK) certificate.
     *  @param string|null $value Value to set for the attestationIdentityKey property.
    */
    public function setAttestationIdentityKey(?string $value ): void {
        $this->attestationIdentityKey = $value;
    }

    /**
     * Sets the bitLockerStatus property value. On or Off of BitLocker Drive Encryption
     *  @param string|null $value Value to set for the bitLockerStatus property.
    */
    public function setBitLockerStatus(?string $value ): void {
        $this->bitLockerStatus = $value;
    }

    /**
     * Sets the bootAppSecurityVersion property value. The security version number of the Boot Application
     *  @param string|null $value Value to set for the bootAppSecurityVersion property.
    */
    public function setBootAppSecurityVersion(?string $value ): void {
        $this->bootAppSecurityVersion = $value;
    }

    /**
     * Sets the bootDebugging property value. When bootDebugging is enabled, the device is used in development and testing
     *  @param string|null $value Value to set for the bootDebugging property.
    */
    public function setBootDebugging(?string $value ): void {
        $this->bootDebugging = $value;
    }

    /**
     * Sets the bootManagerSecurityVersion property value. The security version number of the Boot Application
     *  @param string|null $value Value to set for the bootManagerSecurityVersion property.
    */
    public function setBootManagerSecurityVersion(?string $value ): void {
        $this->bootManagerSecurityVersion = $value;
    }

    /**
     * Sets the bootManagerVersion property value. The version of the Boot Manager
     *  @param string|null $value Value to set for the bootManagerVersion property.
    */
    public function setBootManagerVersion(?string $value ): void {
        $this->bootManagerVersion = $value;
    }

    /**
     * Sets the bootRevisionListInfo property value. The Boot Revision List that was loaded during initial boot on the attested device
     *  @param string|null $value Value to set for the bootRevisionListInfo property.
    */
    public function setBootRevisionListInfo(?string $value ): void {
        $this->bootRevisionListInfo = $value;
    }

    /**
     * Sets the codeIntegrity property value. When code integrity is enabled, code execution is restricted to integrity verified code
     *  @param string|null $value Value to set for the codeIntegrity property.
    */
    public function setCodeIntegrity(?string $value ): void {
        $this->codeIntegrity = $value;
    }

    /**
     * Sets the codeIntegrityCheckVersion property value. The version of the Boot Manager
     *  @param string|null $value Value to set for the codeIntegrityCheckVersion property.
    */
    public function setCodeIntegrityCheckVersion(?string $value ): void {
        $this->codeIntegrityCheckVersion = $value;
    }

    /**
     * Sets the codeIntegrityPolicy property value. The Code Integrity policy that is controlling the security of the boot environment
     *  @param string|null $value Value to set for the codeIntegrityPolicy property.
    */
    public function setCodeIntegrityPolicy(?string $value ): void {
        $this->codeIntegrityPolicy = $value;
    }

    /**
     * Sets the contentNamespaceUrl property value. The DHA report version. (Namespace version)
     *  @param string|null $value Value to set for the contentNamespaceUrl property.
    */
    public function setContentNamespaceUrl(?string $value ): void {
        $this->contentNamespaceUrl = $value;
    }

    /**
     * Sets the contentVersion property value. The HealthAttestation state schema version
     *  @param string|null $value Value to set for the contentVersion property.
    */
    public function setContentVersion(?string $value ): void {
        $this->contentVersion = $value;
    }

    /**
     * Sets the dataExcutionPolicy property value. DEP Policy defines a set of hardware and software technologies that perform additional checks on memory
     *  @param string|null $value Value to set for the dataExcutionPolicy property.
    */
    public function setDataExcutionPolicy(?string $value ): void {
        $this->dataExcutionPolicy = $value;
    }

    /**
     * Sets the deviceHealthAttestationStatus property value. The DHA report version. (Namespace version)
     *  @param string|null $value Value to set for the deviceHealthAttestationStatus property.
    */
    public function setDeviceHealthAttestationStatus(?string $value ): void {
        $this->deviceHealthAttestationStatus = $value;
    }

    /**
     * Sets the earlyLaunchAntiMalwareDriverProtection property value. ELAM provides protection for the computers in your network when they start up
     *  @param string|null $value Value to set for the earlyLaunchAntiMalwareDriverProtection property.
    */
    public function setEarlyLaunchAntiMalwareDriverProtection(?string $value ): void {
        $this->earlyLaunchAntiMalwareDriverProtection = $value;
    }

    /**
     * Sets the healthAttestationSupportedStatus property value. This attribute indicates if DHA is supported for the device
     *  @param string|null $value Value to set for the healthAttestationSupportedStatus property.
    */
    public function setHealthAttestationSupportedStatus(?string $value ): void {
        $this->healthAttestationSupportedStatus = $value;
    }

    /**
     * Sets the healthStatusMismatchInfo property value. This attribute appears if DHA-Service detects an integrity issue
     *  @param string|null $value Value to set for the healthStatusMismatchInfo property.
    */
    public function setHealthStatusMismatchInfo(?string $value ): void {
        $this->healthStatusMismatchInfo = $value;
    }

    /**
     * Sets the issuedDateTime property value. The DateTime when device was evaluated or issued to MDM
     *  @param DateTime|null $value Value to set for the issuedDateTime property.
    */
    public function setIssuedDateTime(?DateTime $value ): void {
        $this->issuedDateTime = $value;
    }

    /**
     * Sets the lastUpdateDateTime property value. The Timestamp of the last update.
     *  @param string|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?string $value ): void {
        $this->lastUpdateDateTime = $value;
    }

    /**
     * Sets the operatingSystemKernelDebugging property value. When operatingSystemKernelDebugging is enabled, the device is used in development and testing
     *  @param string|null $value Value to set for the operatingSystemKernelDebugging property.
    */
    public function setOperatingSystemKernelDebugging(?string $value ): void {
        $this->operatingSystemKernelDebugging = $value;
    }

    /**
     * Sets the operatingSystemRevListInfo property value. The Operating System Revision List that was loaded during initial boot on the attested device
     *  @param string|null $value Value to set for the operatingSystemRevListInfo property.
    */
    public function setOperatingSystemRevListInfo(?string $value ): void {
        $this->operatingSystemRevListInfo = $value;
    }

    /**
     * Sets the pcr0 property value. The measurement that is captured in PCR[0]
     *  @param string|null $value Value to set for the pcr0 property.
    */
    public function setPcr0(?string $value ): void {
        $this->pcr0 = $value;
    }

    /**
     * Sets the pcrHashAlgorithm property value. Informational attribute that identifies the HASH algorithm that was used by TPM
     *  @param string|null $value Value to set for the pcrHashAlgorithm property.
    */
    public function setPcrHashAlgorithm(?string $value ): void {
        $this->pcrHashAlgorithm = $value;
    }

    /**
     * Sets the resetCount property value. The number of times a PC device has hibernated or resumed
     *  @param int|null $value Value to set for the resetCount property.
    */
    public function setResetCount(?int $value ): void {
        $this->resetCount = $value;
    }

    /**
     * Sets the restartCount property value. The number of times a PC device has rebooted
     *  @param int|null $value Value to set for the restartCount property.
    */
    public function setRestartCount(?int $value ): void {
        $this->restartCount = $value;
    }

    /**
     * Sets the safeMode property value. Safe mode is a troubleshooting option for Windows that starts your computer in a limited state
     *  @param string|null $value Value to set for the safeMode property.
    */
    public function setSafeMode(?string $value ): void {
        $this->safeMode = $value;
    }

    /**
     * Sets the secureBoot property value. When Secure Boot is enabled, the core components must have the correct cryptographic signatures
     *  @param string|null $value Value to set for the secureBoot property.
    */
    public function setSecureBoot(?string $value ): void {
        $this->secureBoot = $value;
    }

    /**
     * Sets the secureBootConfigurationPolicyFingerPrint property value. Fingerprint of the Custom Secure Boot Configuration Policy
     *  @param string|null $value Value to set for the secureBootConfigurationPolicyFingerPrint property.
    */
    public function setSecureBootConfigurationPolicyFingerPrint(?string $value ): void {
        $this->secureBootConfigurationPolicyFingerPrint = $value;
    }

    /**
     * Sets the testSigning property value. When test signing is allowed, the device does not enforce signature validation during boot
     *  @param string|null $value Value to set for the testSigning property.
    */
    public function setTestSigning(?string $value ): void {
        $this->testSigning = $value;
    }

    /**
     * Sets the tpmVersion property value. The security version number of the Boot Application
     *  @param string|null $value Value to set for the tpmVersion property.
    */
    public function setTpmVersion(?string $value ): void {
        $this->tpmVersion = $value;
    }

    /**
     * Sets the virtualSecureMode property value. VSM is a container that protects high value assets from a compromised kernel
     *  @param string|null $value Value to set for the virtualSecureMode property.
    */
    public function setVirtualSecureMode(?string $value ): void {
        $this->virtualSecureMode = $value;
    }

    /**
     * Sets the windowsPE property value. Operating system running with limited services that is used to prepare a computer for Windows
     *  @param string|null $value Value to set for the windowsPE property.
    */
    public function setWindowsPE(?string $value ): void {
        $this->windowsPE = $value;
    }

}
