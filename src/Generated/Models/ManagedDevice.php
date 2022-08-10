<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDevice extends Entity implements Parsable 
{
    /**
     * @var string|null $activationLockBypassCode Code that allows the Activation Lock on a device to be bypassed. This property is read-only.
    */
    private ?string $activationLockBypassCode = null;
    
    /**
     * @var string|null $androidSecurityPatchLevel Android security patch level. This property is read-only.
    */
    private ?string $androidSecurityPatchLevel = null;
    
    /**
     * @var string|null $azureADDeviceId The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
    */
    private ?string $azureADDeviceId = null;
    
    /**
     * @var bool|null $azureADRegistered Whether the device is Azure Active Directory registered. This property is read-only.
    */
    private ?bool $azureADRegistered = null;
    
    /**
     * @var DateTime|null $complianceGracePeriodExpirationDateTime The DateTime when device compliance grace period expires. This property is read-only.
    */
    private ?DateTime $complianceGracePeriodExpirationDateTime = null;
    
    /**
     * @var ComplianceState|null $complianceState Compliance state.
    */
    private ?ComplianceState $complianceState = null;
    
    /**
     * @var ConfigurationManagerClientEnabledFeatures|null $configurationManagerClientEnabledFeatures ConfigrMgr client enabled features. This property is read-only.
    */
    private ?ConfigurationManagerClientEnabledFeatures $configurationManagerClientEnabledFeatures = null;
    
    /**
     * @var array<DeviceActionResult>|null $deviceActionResults List of ComplexType deviceActionResult objects. This property is read-only.
    */
    private ?array $deviceActionResults = null;
    
    /**
     * @var DeviceCategory|null $deviceCategory Device category
    */
    private ?DeviceCategory $deviceCategory = null;
    
    /**
     * @var string|null $deviceCategoryDisplayName Device category display name. This property is read-only.
    */
    private ?string $deviceCategoryDisplayName = null;
    
    /**
     * @var array<DeviceCompliancePolicyState>|null $deviceCompliancePolicyStates Device compliance policy states for this device.
    */
    private ?array $deviceCompliancePolicyStates = null;
    
    /**
     * @var array<DeviceConfigurationState>|null $deviceConfigurationStates Device configuration states for this device.
    */
    private ?array $deviceConfigurationStates = null;
    
    /**
     * @var DeviceEnrollmentType|null $deviceEnrollmentType Possible ways of adding a mobile device to management.
    */
    private ?DeviceEnrollmentType $deviceEnrollmentType = null;
    
    /**
     * @var DeviceHealthAttestationState|null $deviceHealthAttestationState The device health attestation state. This property is read-only.
    */
    private ?DeviceHealthAttestationState $deviceHealthAttestationState = null;
    
    /**
     * @var string|null $deviceName Name of the device. This property is read-only.
    */
    private ?string $deviceName = null;
    
    /**
     * @var DeviceRegistrationState|null $deviceRegistrationState Device registration status.
    */
    private ?DeviceRegistrationState $deviceRegistrationState = null;
    
    /**
     * @var bool|null $easActivated Whether the device is Exchange ActiveSync activated. This property is read-only.
    */
    private ?bool $easActivated = null;
    
    /**
     * @var DateTime|null $easActivationDateTime Exchange ActivationSync activation time of the device. This property is read-only.
    */
    private ?DateTime $easActivationDateTime = null;
    
    /**
     * @var string|null $easDeviceId Exchange ActiveSync Id of the device. This property is read-only.
    */
    private ?string $easDeviceId = null;
    
    /**
     * @var string|null $emailAddress Email(s) for the user associated with the device. This property is read-only.
    */
    private ?string $emailAddress = null;
    
    /**
     * @var DateTime|null $enrolledDateTime Enrollment time of the device. This property is read-only.
    */
    private ?DateTime $enrolledDateTime = null;
    
    /**
     * @var string|null $ethernetMacAddress Ethernet MAC. This property is read-only.
    */
    private ?string $ethernetMacAddress = null;
    
    /**
     * @var DeviceManagementExchangeAccessState|null $exchangeAccessState Device Exchange Access State.
    */
    private ?DeviceManagementExchangeAccessState $exchangeAccessState = null;
    
    /**
     * @var DeviceManagementExchangeAccessStateReason|null $exchangeAccessStateReason Device Exchange Access State Reason.
    */
    private ?DeviceManagementExchangeAccessStateReason $exchangeAccessStateReason = null;
    
    /**
     * @var DateTime|null $exchangeLastSuccessfulSyncDateTime Last time the device contacted Exchange. This property is read-only.
    */
    private ?DateTime $exchangeLastSuccessfulSyncDateTime = null;
    
    /**
     * @var int|null $freeStorageSpaceInBytes Free Storage in Bytes. This property is read-only.
    */
    private ?int $freeStorageSpaceInBytes = null;
    
    /**
     * @var string|null $iccid Integrated Circuit Card Identifier, it is A SIM card's unique identification number. This property is read-only.
    */
    private ?string $iccid = null;
    
    /**
     * @var string|null $imei IMEI. This property is read-only.
    */
    private ?string $imei = null;
    
    /**
     * @var bool|null $isEncrypted Device encryption status. This property is read-only.
    */
    private ?bool $isEncrypted = null;
    
    /**
     * @var bool|null $isSupervised Device supervised status. This property is read-only.
    */
    private ?bool $isSupervised = null;
    
    /**
     * @var string|null $jailBroken whether the device is jail broken or rooted. This property is read-only.
    */
    private ?string $jailBroken = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime The date and time that the device last completed a successful sync with Intune. This property is read-only.
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var string|null $managedDeviceName Automatically generated name to identify a device. Can be overwritten to a user friendly name.
    */
    private ?string $managedDeviceName = null;
    
    /**
     * @var ManagedDeviceOwnerType|null $managedDeviceOwnerType Owner type of device.
    */
    private ?ManagedDeviceOwnerType $managedDeviceOwnerType = null;
    
    /**
     * @var ManagementAgentType|null $managementAgent The managementAgent property
    */
    private ?ManagementAgentType $managementAgent = null;
    
    /**
     * @var string|null $manufacturer Manufacturer of the device. This property is read-only.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $meid MEID. This property is read-only.
    */
    private ?string $meid = null;
    
    /**
     * @var string|null $model Model of the device. This property is read-only.
    */
    private ?string $model = null;
    
    /**
     * @var string|null $notes Notes on the device created by IT Admin
    */
    private ?string $notes = null;
    
    /**
     * @var string|null $operatingSystem Operating system of the device. Windows, iOS, etc. This property is read-only.
    */
    private ?string $operatingSystem = null;
    
    /**
     * @var string|null $osVersion Operating system version of the device. This property is read-only.
    */
    private ?string $osVersion = null;
    
    /**
     * @var ManagedDevicePartnerReportedHealthState|null $partnerReportedThreatState Available health states for the Device Health API
    */
    private ?ManagedDevicePartnerReportedHealthState $partnerReportedThreatState = null;
    
    /**
     * @var string|null $phoneNumber Phone number of the device. This property is read-only.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var int|null $physicalMemoryInBytes Total Memory in Bytes. This property is read-only.
    */
    private ?int $physicalMemoryInBytes = null;
    
    /**
     * @var string|null $remoteAssistanceSessionErrorDetails An error string that identifies issues when creating Remote Assistance session objects. This property is read-only.
    */
    private ?string $remoteAssistanceSessionErrorDetails = null;
    
    /**
     * @var string|null $remoteAssistanceSessionUrl Url that allows a Remote Assistance session to be established with the device. This property is read-only.
    */
    private ?string $remoteAssistanceSessionUrl = null;
    
    /**
     * @var string|null $serialNumber SerialNumber. This property is read-only.
    */
    private ?string $serialNumber = null;
    
    /**
     * @var string|null $subscriberCarrier Subscriber Carrier. This property is read-only.
    */
    private ?string $subscriberCarrier = null;
    
    /**
     * @var int|null $totalStorageSpaceInBytes Total Storage in Bytes. This property is read-only.
    */
    private ?int $totalStorageSpaceInBytes = null;
    
    /**
     * @var string|null $udid Unique Device Identifier for iOS and macOS devices. This property is read-only.
    */
    private ?string $udid = null;
    
    /**
     * @var string|null $userDisplayName User display name. This property is read-only.
    */
    private ?string $userDisplayName = null;
    
    /**
     * @var string|null $userId Unique Identifier for the user associated with the device. This property is read-only.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userPrincipalName Device user principal name. This property is read-only.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * @var string|null $wiFiMacAddress Wi-Fi MAC. This property is read-only.
    */
    private ?string $wiFiMacAddress = null;
    
    /**
     * Instantiates a new managedDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedDevice');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDevice {
        return new ManagedDevice();
    }

    /**
     * Gets the activationLockBypassCode property value. Code that allows the Activation Lock on a device to be bypassed. This property is read-only.
     * @return string|null
    */
    public function getActivationLockBypassCode(): ?string {
        return $this->activationLockBypassCode;
    }

    /**
     * Gets the androidSecurityPatchLevel property value. Android security patch level. This property is read-only.
     * @return string|null
    */
    public function getAndroidSecurityPatchLevel(): ?string {
        return $this->androidSecurityPatchLevel;
    }

    /**
     * Gets the azureADDeviceId property value. The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
     * @return string|null
    */
    public function getAzureADDeviceId(): ?string {
        return $this->azureADDeviceId;
    }

    /**
     * Gets the azureADRegistered property value. Whether the device is Azure Active Directory registered. This property is read-only.
     * @return bool|null
    */
    public function getAzureADRegistered(): ?bool {
        return $this->azureADRegistered;
    }

    /**
     * Gets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires. This property is read-only.
     * @return DateTime|null
    */
    public function getComplianceGracePeriodExpirationDateTime(): ?DateTime {
        return $this->complianceGracePeriodExpirationDateTime;
    }

    /**
     * Gets the complianceState property value. Compliance state.
     * @return ComplianceState|null
    */
    public function getComplianceState(): ?ComplianceState {
        return $this->complianceState;
    }

    /**
     * Gets the configurationManagerClientEnabledFeatures property value. ConfigrMgr client enabled features. This property is read-only.
     * @return ConfigurationManagerClientEnabledFeatures|null
    */
    public function getConfigurationManagerClientEnabledFeatures(): ?ConfigurationManagerClientEnabledFeatures {
        return $this->configurationManagerClientEnabledFeatures;
    }

    /**
     * Gets the deviceActionResults property value. List of ComplexType deviceActionResult objects. This property is read-only.
     * @return array<DeviceActionResult>|null
    */
    public function getDeviceActionResults(): ?array {
        return $this->deviceActionResults;
    }

    /**
     * Gets the deviceCategory property value. Device category
     * @return DeviceCategory|null
    */
    public function getDeviceCategory(): ?DeviceCategory {
        return $this->deviceCategory;
    }

    /**
     * Gets the deviceCategoryDisplayName property value. Device category display name. This property is read-only.
     * @return string|null
    */
    public function getDeviceCategoryDisplayName(): ?string {
        return $this->deviceCategoryDisplayName;
    }

    /**
     * Gets the deviceCompliancePolicyStates property value. Device compliance policy states for this device.
     * @return array<DeviceCompliancePolicyState>|null
    */
    public function getDeviceCompliancePolicyStates(): ?array {
        return $this->deviceCompliancePolicyStates;
    }

    /**
     * Gets the deviceConfigurationStates property value. Device configuration states for this device.
     * @return array<DeviceConfigurationState>|null
    */
    public function getDeviceConfigurationStates(): ?array {
        return $this->deviceConfigurationStates;
    }

    /**
     * Gets the deviceEnrollmentType property value. Possible ways of adding a mobile device to management.
     * @return DeviceEnrollmentType|null
    */
    public function getDeviceEnrollmentType(): ?DeviceEnrollmentType {
        return $this->deviceEnrollmentType;
    }

    /**
     * Gets the deviceHealthAttestationState property value. The device health attestation state. This property is read-only.
     * @return DeviceHealthAttestationState|null
    */
    public function getDeviceHealthAttestationState(): ?DeviceHealthAttestationState {
        return $this->deviceHealthAttestationState;
    }

    /**
     * Gets the deviceName property value. Name of the device. This property is read-only.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the deviceRegistrationState property value. Device registration status.
     * @return DeviceRegistrationState|null
    */
    public function getDeviceRegistrationState(): ?DeviceRegistrationState {
        return $this->deviceRegistrationState;
    }

    /**
     * Gets the easActivated property value. Whether the device is Exchange ActiveSync activated. This property is read-only.
     * @return bool|null
    */
    public function getEasActivated(): ?bool {
        return $this->easActivated;
    }

    /**
     * Gets the easActivationDateTime property value. Exchange ActivationSync activation time of the device. This property is read-only.
     * @return DateTime|null
    */
    public function getEasActivationDateTime(): ?DateTime {
        return $this->easActivationDateTime;
    }

    /**
     * Gets the easDeviceId property value. Exchange ActiveSync Id of the device. This property is read-only.
     * @return string|null
    */
    public function getEasDeviceId(): ?string {
        return $this->easDeviceId;
    }

    /**
     * Gets the emailAddress property value. Email(s) for the user associated with the device. This property is read-only.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->emailAddress;
    }

    /**
     * Gets the enrolledDateTime property value. Enrollment time of the device. This property is read-only.
     * @return DateTime|null
    */
    public function getEnrolledDateTime(): ?DateTime {
        return $this->enrolledDateTime;
    }

    /**
     * Gets the ethernetMacAddress property value. Ethernet MAC. This property is read-only.
     * @return string|null
    */
    public function getEthernetMacAddress(): ?string {
        return $this->ethernetMacAddress;
    }

    /**
     * Gets the exchangeAccessState property value. Device Exchange Access State.
     * @return DeviceManagementExchangeAccessState|null
    */
    public function getExchangeAccessState(): ?DeviceManagementExchangeAccessState {
        return $this->exchangeAccessState;
    }

    /**
     * Gets the exchangeAccessStateReason property value. Device Exchange Access State Reason.
     * @return DeviceManagementExchangeAccessStateReason|null
    */
    public function getExchangeAccessStateReason(): ?DeviceManagementExchangeAccessStateReason {
        return $this->exchangeAccessStateReason;
    }

    /**
     * Gets the exchangeLastSuccessfulSyncDateTime property value. Last time the device contacted Exchange. This property is read-only.
     * @return DateTime|null
    */
    public function getExchangeLastSuccessfulSyncDateTime(): ?DateTime {
        return $this->exchangeLastSuccessfulSyncDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activationLockBypassCode' => function (ParseNode $n) use ($o) { $o->setActivationLockBypassCode($n->getStringValue()); },
            'androidSecurityPatchLevel' => function (ParseNode $n) use ($o) { $o->setAndroidSecurityPatchLevel($n->getStringValue()); },
            'azureADDeviceId' => function (ParseNode $n) use ($o) { $o->setAzureADDeviceId($n->getStringValue()); },
            'azureADRegistered' => function (ParseNode $n) use ($o) { $o->setAzureADRegistered($n->getBooleanValue()); },
            'complianceGracePeriodExpirationDateTime' => function (ParseNode $n) use ($o) { $o->setComplianceGracePeriodExpirationDateTime($n->getDateTimeValue()); },
            'complianceState' => function (ParseNode $n) use ($o) { $o->setComplianceState($n->getEnumValue(ComplianceState::class)); },
            'configurationManagerClientEnabledFeatures' => function (ParseNode $n) use ($o) { $o->setConfigurationManagerClientEnabledFeatures($n->getObjectValue(array(ConfigurationManagerClientEnabledFeatures::class, 'createFromDiscriminatorValue'))); },
            'deviceActionResults' => function (ParseNode $n) use ($o) { $o->setDeviceActionResults($n->getCollectionOfObjectValues(array(DeviceActionResult::class, 'createFromDiscriminatorValue'))); },
            'deviceCategory' => function (ParseNode $n) use ($o) { $o->setDeviceCategory($n->getObjectValue(array(DeviceCategory::class, 'createFromDiscriminatorValue'))); },
            'deviceCategoryDisplayName' => function (ParseNode $n) use ($o) { $o->setDeviceCategoryDisplayName($n->getStringValue()); },
            'deviceCompliancePolicyStates' => function (ParseNode $n) use ($o) { $o->setDeviceCompliancePolicyStates($n->getCollectionOfObjectValues(array(DeviceCompliancePolicyState::class, 'createFromDiscriminatorValue'))); },
            'deviceConfigurationStates' => function (ParseNode $n) use ($o) { $o->setDeviceConfigurationStates($n->getCollectionOfObjectValues(array(DeviceConfigurationState::class, 'createFromDiscriminatorValue'))); },
            'deviceEnrollmentType' => function (ParseNode $n) use ($o) { $o->setDeviceEnrollmentType($n->getEnumValue(DeviceEnrollmentType::class)); },
            'deviceHealthAttestationState' => function (ParseNode $n) use ($o) { $o->setDeviceHealthAttestationState($n->getObjectValue(array(DeviceHealthAttestationState::class, 'createFromDiscriminatorValue'))); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'deviceRegistrationState' => function (ParseNode $n) use ($o) { $o->setDeviceRegistrationState($n->getEnumValue(DeviceRegistrationState::class)); },
            'easActivated' => function (ParseNode $n) use ($o) { $o->setEasActivated($n->getBooleanValue()); },
            'easActivationDateTime' => function (ParseNode $n) use ($o) { $o->setEasActivationDateTime($n->getDateTimeValue()); },
            'easDeviceId' => function (ParseNode $n) use ($o) { $o->setEasDeviceId($n->getStringValue()); },
            'emailAddress' => function (ParseNode $n) use ($o) { $o->setEmailAddress($n->getStringValue()); },
            'enrolledDateTime' => function (ParseNode $n) use ($o) { $o->setEnrolledDateTime($n->getDateTimeValue()); },
            'ethernetMacAddress' => function (ParseNode $n) use ($o) { $o->setEthernetMacAddress($n->getStringValue()); },
            'exchangeAccessState' => function (ParseNode $n) use ($o) { $o->setExchangeAccessState($n->getEnumValue(DeviceManagementExchangeAccessState::class)); },
            'exchangeAccessStateReason' => function (ParseNode $n) use ($o) { $o->setExchangeAccessStateReason($n->getEnumValue(DeviceManagementExchangeAccessStateReason::class)); },
            'exchangeLastSuccessfulSyncDateTime' => function (ParseNode $n) use ($o) { $o->setExchangeLastSuccessfulSyncDateTime($n->getDateTimeValue()); },
            'freeStorageSpaceInBytes' => function (ParseNode $n) use ($o) { $o->setFreeStorageSpaceInBytes($n->getIntegerValue()); },
            'iccid' => function (ParseNode $n) use ($o) { $o->setIccid($n->getStringValue()); },
            'imei' => function (ParseNode $n) use ($o) { $o->setImei($n->getStringValue()); },
            'isEncrypted' => function (ParseNode $n) use ($o) { $o->setIsEncrypted($n->getBooleanValue()); },
            'isSupervised' => function (ParseNode $n) use ($o) { $o->setIsSupervised($n->getBooleanValue()); },
            'jailBroken' => function (ParseNode $n) use ($o) { $o->setJailBroken($n->getStringValue()); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'managedDeviceName' => function (ParseNode $n) use ($o) { $o->setManagedDeviceName($n->getStringValue()); },
            'managedDeviceOwnerType' => function (ParseNode $n) use ($o) { $o->setManagedDeviceOwnerType($n->getEnumValue(ManagedDeviceOwnerType::class)); },
            'managementAgent' => function (ParseNode $n) use ($o) { $o->setManagementAgent($n->getEnumValue(ManagementAgentType::class)); },
            'manufacturer' => function (ParseNode $n) use ($o) { $o->setManufacturer($n->getStringValue()); },
            'meid' => function (ParseNode $n) use ($o) { $o->setMeid($n->getStringValue()); },
            'model' => function (ParseNode $n) use ($o) { $o->setModel($n->getStringValue()); },
            'notes' => function (ParseNode $n) use ($o) { $o->setNotes($n->getStringValue()); },
            'operatingSystem' => function (ParseNode $n) use ($o) { $o->setOperatingSystem($n->getStringValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
            'partnerReportedThreatState' => function (ParseNode $n) use ($o) { $o->setPartnerReportedThreatState($n->getEnumValue(ManagedDevicePartnerReportedHealthState::class)); },
            'phoneNumber' => function (ParseNode $n) use ($o) { $o->setPhoneNumber($n->getStringValue()); },
            'physicalMemoryInBytes' => function (ParseNode $n) use ($o) { $o->setPhysicalMemoryInBytes($n->getIntegerValue()); },
            'remoteAssistanceSessionErrorDetails' => function (ParseNode $n) use ($o) { $o->setRemoteAssistanceSessionErrorDetails($n->getStringValue()); },
            'remoteAssistanceSessionUrl' => function (ParseNode $n) use ($o) { $o->setRemoteAssistanceSessionUrl($n->getStringValue()); },
            'serialNumber' => function (ParseNode $n) use ($o) { $o->setSerialNumber($n->getStringValue()); },
            'subscriberCarrier' => function (ParseNode $n) use ($o) { $o->setSubscriberCarrier($n->getStringValue()); },
            'totalStorageSpaceInBytes' => function (ParseNode $n) use ($o) { $o->setTotalStorageSpaceInBytes($n->getIntegerValue()); },
            'udid' => function (ParseNode $n) use ($o) { $o->setUdid($n->getStringValue()); },
            'userDisplayName' => function (ParseNode $n) use ($o) { $o->setUserDisplayName($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
            'wiFiMacAddress' => function (ParseNode $n) use ($o) { $o->setWiFiMacAddress($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the freeStorageSpaceInBytes property value. Free Storage in Bytes. This property is read-only.
     * @return int|null
    */
    public function getFreeStorageSpaceInBytes(): ?int {
        return $this->freeStorageSpaceInBytes;
    }

    /**
     * Gets the iccid property value. Integrated Circuit Card Identifier, it is A SIM card's unique identification number. This property is read-only.
     * @return string|null
    */
    public function getIccid(): ?string {
        return $this->iccid;
    }

    /**
     * Gets the imei property value. IMEI. This property is read-only.
     * @return string|null
    */
    public function getImei(): ?string {
        return $this->imei;
    }

    /**
     * Gets the isEncrypted property value. Device encryption status. This property is read-only.
     * @return bool|null
    */
    public function getIsEncrypted(): ?bool {
        return $this->isEncrypted;
    }

    /**
     * Gets the isSupervised property value. Device supervised status. This property is read-only.
     * @return bool|null
    */
    public function getIsSupervised(): ?bool {
        return $this->isSupervised;
    }

    /**
     * Gets the jailBroken property value. whether the device is jail broken or rooted. This property is read-only.
     * @return string|null
    */
    public function getJailBroken(): ?string {
        return $this->jailBroken;
    }

    /**
     * Gets the lastSyncDateTime property value. The date and time that the device last completed a successful sync with Intune. This property is read-only.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the managedDeviceName property value. Automatically generated name to identify a device. Can be overwritten to a user friendly name.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->managedDeviceName;
    }

    /**
     * Gets the managedDeviceOwnerType property value. Owner type of device.
     * @return ManagedDeviceOwnerType|null
    */
    public function getManagedDeviceOwnerType(): ?ManagedDeviceOwnerType {
        return $this->managedDeviceOwnerType;
    }

    /**
     * Gets the managementAgent property value. The managementAgent property
     * @return ManagementAgentType|null
    */
    public function getManagementAgent(): ?ManagementAgentType {
        return $this->managementAgent;
    }

    /**
     * Gets the manufacturer property value. Manufacturer of the device. This property is read-only.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the meid property value. MEID. This property is read-only.
     * @return string|null
    */
    public function getMeid(): ?string {
        return $this->meid;
    }

    /**
     * Gets the model property value. Model of the device. This property is read-only.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the notes property value. Notes on the device created by IT Admin
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the operatingSystem property value. Operating system of the device. Windows, iOS, etc. This property is read-only.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->operatingSystem;
    }

    /**
     * Gets the osVersion property value. Operating system version of the device. This property is read-only.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the partnerReportedThreatState property value. Available health states for the Device Health API
     * @return ManagedDevicePartnerReportedHealthState|null
    */
    public function getPartnerReportedThreatState(): ?ManagedDevicePartnerReportedHealthState {
        return $this->partnerReportedThreatState;
    }

    /**
     * Gets the phoneNumber property value. Phone number of the device. This property is read-only.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the physicalMemoryInBytes property value. Total Memory in Bytes. This property is read-only.
     * @return int|null
    */
    public function getPhysicalMemoryInBytes(): ?int {
        return $this->physicalMemoryInBytes;
    }

    /**
     * Gets the remoteAssistanceSessionErrorDetails property value. An error string that identifies issues when creating Remote Assistance session objects. This property is read-only.
     * @return string|null
    */
    public function getRemoteAssistanceSessionErrorDetails(): ?string {
        return $this->remoteAssistanceSessionErrorDetails;
    }

    /**
     * Gets the remoteAssistanceSessionUrl property value. Url that allows a Remote Assistance session to be established with the device. This property is read-only.
     * @return string|null
    */
    public function getRemoteAssistanceSessionUrl(): ?string {
        return $this->remoteAssistanceSessionUrl;
    }

    /**
     * Gets the serialNumber property value. SerialNumber. This property is read-only.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->serialNumber;
    }

    /**
     * Gets the subscriberCarrier property value. Subscriber Carrier. This property is read-only.
     * @return string|null
    */
    public function getSubscriberCarrier(): ?string {
        return $this->subscriberCarrier;
    }

    /**
     * Gets the totalStorageSpaceInBytes property value. Total Storage in Bytes. This property is read-only.
     * @return int|null
    */
    public function getTotalStorageSpaceInBytes(): ?int {
        return $this->totalStorageSpaceInBytes;
    }

    /**
     * Gets the udid property value. Unique Device Identifier for iOS and macOS devices. This property is read-only.
     * @return string|null
    */
    public function getUdid(): ?string {
        return $this->udid;
    }

    /**
     * Gets the userDisplayName property value. User display name. This property is read-only.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userId property value. Unique Identifier for the user associated with the device. This property is read-only.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. Device user principal name. This property is read-only.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the wiFiMacAddress property value. Wi-Fi MAC. This property is read-only.
     * @return string|null
    */
    public function getWiFiMacAddress(): ?string {
        return $this->wiFiMacAddress;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activationLockBypassCode', $this->activationLockBypassCode);
        $writer->writeStringValue('androidSecurityPatchLevel', $this->androidSecurityPatchLevel);
        $writer->writeStringValue('azureADDeviceId', $this->azureADDeviceId);
        $writer->writeBooleanValue('azureADRegistered', $this->azureADRegistered);
        $writer->writeDateTimeValue('complianceGracePeriodExpirationDateTime', $this->complianceGracePeriodExpirationDateTime);
        $writer->writeEnumValue('complianceState', $this->complianceState);
        $writer->writeObjectValue('configurationManagerClientEnabledFeatures', $this->configurationManagerClientEnabledFeatures);
        $writer->writeCollectionOfObjectValues('deviceActionResults', $this->deviceActionResults);
        $writer->writeObjectValue('deviceCategory', $this->deviceCategory);
        $writer->writeStringValue('deviceCategoryDisplayName', $this->deviceCategoryDisplayName);
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicyStates', $this->deviceCompliancePolicyStates);
        $writer->writeCollectionOfObjectValues('deviceConfigurationStates', $this->deviceConfigurationStates);
        $writer->writeEnumValue('deviceEnrollmentType', $this->deviceEnrollmentType);
        $writer->writeObjectValue('deviceHealthAttestationState', $this->deviceHealthAttestationState);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeEnumValue('deviceRegistrationState', $this->deviceRegistrationState);
        $writer->writeBooleanValue('easActivated', $this->easActivated);
        $writer->writeDateTimeValue('easActivationDateTime', $this->easActivationDateTime);
        $writer->writeStringValue('easDeviceId', $this->easDeviceId);
        $writer->writeStringValue('emailAddress', $this->emailAddress);
        $writer->writeDateTimeValue('enrolledDateTime', $this->enrolledDateTime);
        $writer->writeStringValue('ethernetMacAddress', $this->ethernetMacAddress);
        $writer->writeEnumValue('exchangeAccessState', $this->exchangeAccessState);
        $writer->writeEnumValue('exchangeAccessStateReason', $this->exchangeAccessStateReason);
        $writer->writeDateTimeValue('exchangeLastSuccessfulSyncDateTime', $this->exchangeLastSuccessfulSyncDateTime);
        $writer->writeIntegerValue('freeStorageSpaceInBytes', $this->freeStorageSpaceInBytes);
        $writer->writeStringValue('iccid', $this->iccid);
        $writer->writeStringValue('imei', $this->imei);
        $writer->writeBooleanValue('isEncrypted', $this->isEncrypted);
        $writer->writeBooleanValue('isSupervised', $this->isSupervised);
        $writer->writeStringValue('jailBroken', $this->jailBroken);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeStringValue('managedDeviceName', $this->managedDeviceName);
        $writer->writeEnumValue('managedDeviceOwnerType', $this->managedDeviceOwnerType);
        $writer->writeEnumValue('managementAgent', $this->managementAgent);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('meid', $this->meid);
        $writer->writeStringValue('model', $this->model);
        $writer->writeStringValue('notes', $this->notes);
        $writer->writeStringValue('operatingSystem', $this->operatingSystem);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeEnumValue('partnerReportedThreatState', $this->partnerReportedThreatState);
        $writer->writeStringValue('phoneNumber', $this->phoneNumber);
        $writer->writeIntegerValue('physicalMemoryInBytes', $this->physicalMemoryInBytes);
        $writer->writeStringValue('remoteAssistanceSessionErrorDetails', $this->remoteAssistanceSessionErrorDetails);
        $writer->writeStringValue('remoteAssistanceSessionUrl', $this->remoteAssistanceSessionUrl);
        $writer->writeStringValue('serialNumber', $this->serialNumber);
        $writer->writeStringValue('subscriberCarrier', $this->subscriberCarrier);
        $writer->writeIntegerValue('totalStorageSpaceInBytes', $this->totalStorageSpaceInBytes);
        $writer->writeStringValue('udid', $this->udid);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeStringValue('wiFiMacAddress', $this->wiFiMacAddress);
    }

    /**
     * Sets the activationLockBypassCode property value. Code that allows the Activation Lock on a device to be bypassed. This property is read-only.
     *  @param string|null $value Value to set for the activationLockBypassCode property.
    */
    public function setActivationLockBypassCode(?string $value ): void {
        $this->activationLockBypassCode = $value;
    }

    /**
     * Sets the androidSecurityPatchLevel property value. Android security patch level. This property is read-only.
     *  @param string|null $value Value to set for the androidSecurityPatchLevel property.
    */
    public function setAndroidSecurityPatchLevel(?string $value ): void {
        $this->androidSecurityPatchLevel = $value;
    }

    /**
     * Sets the azureADDeviceId property value. The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
     *  @param string|null $value Value to set for the azureADDeviceId property.
    */
    public function setAzureADDeviceId(?string $value ): void {
        $this->azureADDeviceId = $value;
    }

    /**
     * Sets the azureADRegistered property value. Whether the device is Azure Active Directory registered. This property is read-only.
     *  @param bool|null $value Value to set for the azureADRegistered property.
    */
    public function setAzureADRegistered(?bool $value ): void {
        $this->azureADRegistered = $value;
    }

    /**
     * Sets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires. This property is read-only.
     *  @param DateTime|null $value Value to set for the complianceGracePeriodExpirationDateTime property.
    */
    public function setComplianceGracePeriodExpirationDateTime(?DateTime $value ): void {
        $this->complianceGracePeriodExpirationDateTime = $value;
    }

    /**
     * Sets the complianceState property value. Compliance state.
     *  @param ComplianceState|null $value Value to set for the complianceState property.
    */
    public function setComplianceState(?ComplianceState $value ): void {
        $this->complianceState = $value;
    }

    /**
     * Sets the configurationManagerClientEnabledFeatures property value. ConfigrMgr client enabled features. This property is read-only.
     *  @param ConfigurationManagerClientEnabledFeatures|null $value Value to set for the configurationManagerClientEnabledFeatures property.
    */
    public function setConfigurationManagerClientEnabledFeatures(?ConfigurationManagerClientEnabledFeatures $value ): void {
        $this->configurationManagerClientEnabledFeatures = $value;
    }

    /**
     * Sets the deviceActionResults property value. List of ComplexType deviceActionResult objects. This property is read-only.
     *  @param array<DeviceActionResult>|null $value Value to set for the deviceActionResults property.
    */
    public function setDeviceActionResults(?array $value ): void {
        $this->deviceActionResults = $value;
    }

    /**
     * Sets the deviceCategory property value. Device category
     *  @param DeviceCategory|null $value Value to set for the deviceCategory property.
    */
    public function setDeviceCategory(?DeviceCategory $value ): void {
        $this->deviceCategory = $value;
    }

    /**
     * Sets the deviceCategoryDisplayName property value. Device category display name. This property is read-only.
     *  @param string|null $value Value to set for the deviceCategoryDisplayName property.
    */
    public function setDeviceCategoryDisplayName(?string $value ): void {
        $this->deviceCategoryDisplayName = $value;
    }

    /**
     * Sets the deviceCompliancePolicyStates property value. Device compliance policy states for this device.
     *  @param array<DeviceCompliancePolicyState>|null $value Value to set for the deviceCompliancePolicyStates property.
    */
    public function setDeviceCompliancePolicyStates(?array $value ): void {
        $this->deviceCompliancePolicyStates = $value;
    }

    /**
     * Sets the deviceConfigurationStates property value. Device configuration states for this device.
     *  @param array<DeviceConfigurationState>|null $value Value to set for the deviceConfigurationStates property.
    */
    public function setDeviceConfigurationStates(?array $value ): void {
        $this->deviceConfigurationStates = $value;
    }

    /**
     * Sets the deviceEnrollmentType property value. Possible ways of adding a mobile device to management.
     *  @param DeviceEnrollmentType|null $value Value to set for the deviceEnrollmentType property.
    */
    public function setDeviceEnrollmentType(?DeviceEnrollmentType $value ): void {
        $this->deviceEnrollmentType = $value;
    }

    /**
     * Sets the deviceHealthAttestationState property value. The device health attestation state. This property is read-only.
     *  @param DeviceHealthAttestationState|null $value Value to set for the deviceHealthAttestationState property.
    */
    public function setDeviceHealthAttestationState(?DeviceHealthAttestationState $value ): void {
        $this->deviceHealthAttestationState = $value;
    }

    /**
     * Sets the deviceName property value. Name of the device. This property is read-only.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the deviceRegistrationState property value. Device registration status.
     *  @param DeviceRegistrationState|null $value Value to set for the deviceRegistrationState property.
    */
    public function setDeviceRegistrationState(?DeviceRegistrationState $value ): void {
        $this->deviceRegistrationState = $value;
    }

    /**
     * Sets the easActivated property value. Whether the device is Exchange ActiveSync activated. This property is read-only.
     *  @param bool|null $value Value to set for the easActivated property.
    */
    public function setEasActivated(?bool $value ): void {
        $this->easActivated = $value;
    }

    /**
     * Sets the easActivationDateTime property value. Exchange ActivationSync activation time of the device. This property is read-only.
     *  @param DateTime|null $value Value to set for the easActivationDateTime property.
    */
    public function setEasActivationDateTime(?DateTime $value ): void {
        $this->easActivationDateTime = $value;
    }

    /**
     * Sets the easDeviceId property value. Exchange ActiveSync Id of the device. This property is read-only.
     *  @param string|null $value Value to set for the easDeviceId property.
    */
    public function setEasDeviceId(?string $value ): void {
        $this->easDeviceId = $value;
    }

    /**
     * Sets the emailAddress property value. Email(s) for the user associated with the device. This property is read-only.
     *  @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value ): void {
        $this->emailAddress = $value;
    }

    /**
     * Sets the enrolledDateTime property value. Enrollment time of the device. This property is read-only.
     *  @param DateTime|null $value Value to set for the enrolledDateTime property.
    */
    public function setEnrolledDateTime(?DateTime $value ): void {
        $this->enrolledDateTime = $value;
    }

    /**
     * Sets the ethernetMacAddress property value. Ethernet MAC. This property is read-only.
     *  @param string|null $value Value to set for the ethernetMacAddress property.
    */
    public function setEthernetMacAddress(?string $value ): void {
        $this->ethernetMacAddress = $value;
    }

    /**
     * Sets the exchangeAccessState property value. Device Exchange Access State.
     *  @param DeviceManagementExchangeAccessState|null $value Value to set for the exchangeAccessState property.
    */
    public function setExchangeAccessState(?DeviceManagementExchangeAccessState $value ): void {
        $this->exchangeAccessState = $value;
    }

    /**
     * Sets the exchangeAccessStateReason property value. Device Exchange Access State Reason.
     *  @param DeviceManagementExchangeAccessStateReason|null $value Value to set for the exchangeAccessStateReason property.
    */
    public function setExchangeAccessStateReason(?DeviceManagementExchangeAccessStateReason $value ): void {
        $this->exchangeAccessStateReason = $value;
    }

    /**
     * Sets the exchangeLastSuccessfulSyncDateTime property value. Last time the device contacted Exchange. This property is read-only.
     *  @param DateTime|null $value Value to set for the exchangeLastSuccessfulSyncDateTime property.
    */
    public function setExchangeLastSuccessfulSyncDateTime(?DateTime $value ): void {
        $this->exchangeLastSuccessfulSyncDateTime = $value;
    }

    /**
     * Sets the freeStorageSpaceInBytes property value. Free Storage in Bytes. This property is read-only.
     *  @param int|null $value Value to set for the freeStorageSpaceInBytes property.
    */
    public function setFreeStorageSpaceInBytes(?int $value ): void {
        $this->freeStorageSpaceInBytes = $value;
    }

    /**
     * Sets the iccid property value. Integrated Circuit Card Identifier, it is A SIM card's unique identification number. This property is read-only.
     *  @param string|null $value Value to set for the iccid property.
    */
    public function setIccid(?string $value ): void {
        $this->iccid = $value;
    }

    /**
     * Sets the imei property value. IMEI. This property is read-only.
     *  @param string|null $value Value to set for the imei property.
    */
    public function setImei(?string $value ): void {
        $this->imei = $value;
    }

    /**
     * Sets the isEncrypted property value. Device encryption status. This property is read-only.
     *  @param bool|null $value Value to set for the isEncrypted property.
    */
    public function setIsEncrypted(?bool $value ): void {
        $this->isEncrypted = $value;
    }

    /**
     * Sets the isSupervised property value. Device supervised status. This property is read-only.
     *  @param bool|null $value Value to set for the isSupervised property.
    */
    public function setIsSupervised(?bool $value ): void {
        $this->isSupervised = $value;
    }

    /**
     * Sets the jailBroken property value. whether the device is jail broken or rooted. This property is read-only.
     *  @param string|null $value Value to set for the jailBroken property.
    */
    public function setJailBroken(?string $value ): void {
        $this->jailBroken = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. The date and time that the device last completed a successful sync with Intune. This property is read-only.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the managedDeviceName property value. Automatically generated name to identify a device. Can be overwritten to a user friendly name.
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value ): void {
        $this->managedDeviceName = $value;
    }

    /**
     * Sets the managedDeviceOwnerType property value. Owner type of device.
     *  @param ManagedDeviceOwnerType|null $value Value to set for the managedDeviceOwnerType property.
    */
    public function setManagedDeviceOwnerType(?ManagedDeviceOwnerType $value ): void {
        $this->managedDeviceOwnerType = $value;
    }

    /**
     * Sets the managementAgent property value. The managementAgent property
     *  @param ManagementAgentType|null $value Value to set for the managementAgent property.
    */
    public function setManagementAgent(?ManagementAgentType $value ): void {
        $this->managementAgent = $value;
    }

    /**
     * Sets the manufacturer property value. Manufacturer of the device. This property is read-only.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the meid property value. MEID. This property is read-only.
     *  @param string|null $value Value to set for the meid property.
    */
    public function setMeid(?string $value ): void {
        $this->meid = $value;
    }

    /**
     * Sets the model property value. Model of the device. This property is read-only.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the notes property value. Notes on the device created by IT Admin
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the operatingSystem property value. Operating system of the device. Windows, iOS, etc. This property is read-only.
     *  @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value ): void {
        $this->operatingSystem = $value;
    }

    /**
     * Sets the osVersion property value. Operating system version of the device. This property is read-only.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the partnerReportedThreatState property value. Available health states for the Device Health API
     *  @param ManagedDevicePartnerReportedHealthState|null $value Value to set for the partnerReportedThreatState property.
    */
    public function setPartnerReportedThreatState(?ManagedDevicePartnerReportedHealthState $value ): void {
        $this->partnerReportedThreatState = $value;
    }

    /**
     * Sets the phoneNumber property value. Phone number of the device. This property is read-only.
     *  @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value ): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the physicalMemoryInBytes property value. Total Memory in Bytes. This property is read-only.
     *  @param int|null $value Value to set for the physicalMemoryInBytes property.
    */
    public function setPhysicalMemoryInBytes(?int $value ): void {
        $this->physicalMemoryInBytes = $value;
    }

    /**
     * Sets the remoteAssistanceSessionErrorDetails property value. An error string that identifies issues when creating Remote Assistance session objects. This property is read-only.
     *  @param string|null $value Value to set for the remoteAssistanceSessionErrorDetails property.
    */
    public function setRemoteAssistanceSessionErrorDetails(?string $value ): void {
        $this->remoteAssistanceSessionErrorDetails = $value;
    }

    /**
     * Sets the remoteAssistanceSessionUrl property value. Url that allows a Remote Assistance session to be established with the device. This property is read-only.
     *  @param string|null $value Value to set for the remoteAssistanceSessionUrl property.
    */
    public function setRemoteAssistanceSessionUrl(?string $value ): void {
        $this->remoteAssistanceSessionUrl = $value;
    }

    /**
     * Sets the serialNumber property value. SerialNumber. This property is read-only.
     *  @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value ): void {
        $this->serialNumber = $value;
    }

    /**
     * Sets the subscriberCarrier property value. Subscriber Carrier. This property is read-only.
     *  @param string|null $value Value to set for the subscriberCarrier property.
    */
    public function setSubscriberCarrier(?string $value ): void {
        $this->subscriberCarrier = $value;
    }

    /**
     * Sets the totalStorageSpaceInBytes property value. Total Storage in Bytes. This property is read-only.
     *  @param int|null $value Value to set for the totalStorageSpaceInBytes property.
    */
    public function setTotalStorageSpaceInBytes(?int $value ): void {
        $this->totalStorageSpaceInBytes = $value;
    }

    /**
     * Sets the udid property value. Unique Device Identifier for iOS and macOS devices. This property is read-only.
     *  @param string|null $value Value to set for the udid property.
    */
    public function setUdid(?string $value ): void {
        $this->udid = $value;
    }

    /**
     * Sets the userDisplayName property value. User display name. This property is read-only.
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userId property value. Unique Identifier for the user associated with the device. This property is read-only.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. Device user principal name. This property is read-only.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the wiFiMacAddress property value. Wi-Fi MAC. This property is read-only.
     *  @param string|null $value Value to set for the wiFiMacAddress property.
    */
    public function setWiFiMacAddress(?string $value ): void {
        $this->wiFiMacAddress = $value;
    }

}
