<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDevice extends Entity implements Parsable 
{
    /**
     * Instantiates a new managedDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('activationLockBypassCode');
    }

    /**
     * Gets the androidSecurityPatchLevel property value. Android security patch level. This property is read-only.
     * @return string|null
    */
    public function getAndroidSecurityPatchLevel(): ?string {
        return $this->getBackingStore()->get('androidSecurityPatchLevel');
    }

    /**
     * Gets the azureADDeviceId property value. The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
     * @return string|null
    */
    public function getAzureADDeviceId(): ?string {
        return $this->getBackingStore()->get('azureADDeviceId');
    }

    /**
     * Gets the azureADRegistered property value. Whether the device is Azure Active Directory registered. This property is read-only.
     * @return bool|null
    */
    public function getAzureADRegistered(): ?bool {
        return $this->getBackingStore()->get('azureADRegistered');
    }

    /**
     * Gets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires. This property is read-only.
     * @return DateTime|null
    */
    public function getComplianceGracePeriodExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('complianceGracePeriodExpirationDateTime');
    }

    /**
     * Gets the complianceState property value. Compliance state.
     * @return ComplianceState|null
    */
    public function getComplianceState(): ?ComplianceState {
        return $this->getBackingStore()->get('complianceState');
    }

    /**
     * Gets the configurationManagerClientEnabledFeatures property value. ConfigrMgr client enabled features. This property is read-only.
     * @return ConfigurationManagerClientEnabledFeatures|null
    */
    public function getConfigurationManagerClientEnabledFeatures(): ?ConfigurationManagerClientEnabledFeatures {
        return $this->getBackingStore()->get('configurationManagerClientEnabledFeatures');
    }

    /**
     * Gets the deviceActionResults property value. List of ComplexType deviceActionResult objects. This property is read-only.
     * @return array<DeviceActionResult>|null
    */
    public function getDeviceActionResults(): ?array {
        return $this->getBackingStore()->get('deviceActionResults');
    }

    /**
     * Gets the deviceCategory property value. Device category
     * @return DeviceCategory|null
    */
    public function getDeviceCategory(): ?DeviceCategory {
        return $this->getBackingStore()->get('deviceCategory');
    }

    /**
     * Gets the deviceCategoryDisplayName property value. Device category display name. This property is read-only.
     * @return string|null
    */
    public function getDeviceCategoryDisplayName(): ?string {
        return $this->getBackingStore()->get('deviceCategoryDisplayName');
    }

    /**
     * Gets the deviceCompliancePolicyStates property value. Device compliance policy states for this device.
     * @return array<DeviceCompliancePolicyState>|null
    */
    public function getDeviceCompliancePolicyStates(): ?array {
        return $this->getBackingStore()->get('deviceCompliancePolicyStates');
    }

    /**
     * Gets the deviceConfigurationStates property value. Device configuration states for this device.
     * @return array<DeviceConfigurationState>|null
    */
    public function getDeviceConfigurationStates(): ?array {
        return $this->getBackingStore()->get('deviceConfigurationStates');
    }

    /**
     * Gets the deviceEnrollmentType property value. Possible ways of adding a mobile device to management.
     * @return DeviceEnrollmentType|null
    */
    public function getDeviceEnrollmentType(): ?DeviceEnrollmentType {
        return $this->getBackingStore()->get('deviceEnrollmentType');
    }

    /**
     * Gets the deviceHealthAttestationState property value. The device health attestation state. This property is read-only.
     * @return DeviceHealthAttestationState|null
    */
    public function getDeviceHealthAttestationState(): ?DeviceHealthAttestationState {
        return $this->getBackingStore()->get('deviceHealthAttestationState');
    }

    /**
     * Gets the deviceName property value. Name of the device. This property is read-only.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * Gets the deviceRegistrationState property value. Device registration status.
     * @return DeviceRegistrationState|null
    */
    public function getDeviceRegistrationState(): ?DeviceRegistrationState {
        return $this->getBackingStore()->get('deviceRegistrationState');
    }

    /**
     * Gets the easActivated property value. Whether the device is Exchange ActiveSync activated. This property is read-only.
     * @return bool|null
    */
    public function getEasActivated(): ?bool {
        return $this->getBackingStore()->get('easActivated');
    }

    /**
     * Gets the easActivationDateTime property value. Exchange ActivationSync activation time of the device. This property is read-only.
     * @return DateTime|null
    */
    public function getEasActivationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('easActivationDateTime');
    }

    /**
     * Gets the easDeviceId property value. Exchange ActiveSync Id of the device. This property is read-only.
     * @return string|null
    */
    public function getEasDeviceId(): ?string {
        return $this->getBackingStore()->get('easDeviceId');
    }

    /**
     * Gets the emailAddress property value. Email(s) for the user associated with the device. This property is read-only.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->getBackingStore()->get('emailAddress');
    }

    /**
     * Gets the enrolledDateTime property value. Enrollment time of the device. This property is read-only.
     * @return DateTime|null
    */
    public function getEnrolledDateTime(): ?DateTime {
        return $this->getBackingStore()->get('enrolledDateTime');
    }

    /**
     * Gets the ethernetMacAddress property value. Ethernet MAC. This property is read-only.
     * @return string|null
    */
    public function getEthernetMacAddress(): ?string {
        return $this->getBackingStore()->get('ethernetMacAddress');
    }

    /**
     * Gets the exchangeAccessState property value. Device Exchange Access State.
     * @return DeviceManagementExchangeAccessState|null
    */
    public function getExchangeAccessState(): ?DeviceManagementExchangeAccessState {
        return $this->getBackingStore()->get('exchangeAccessState');
    }

    /**
     * Gets the exchangeAccessStateReason property value. Device Exchange Access State Reason.
     * @return DeviceManagementExchangeAccessStateReason|null
    */
    public function getExchangeAccessStateReason(): ?DeviceManagementExchangeAccessStateReason {
        return $this->getBackingStore()->get('exchangeAccessStateReason');
    }

    /**
     * Gets the exchangeLastSuccessfulSyncDateTime property value. Last time the device contacted Exchange. This property is read-only.
     * @return DateTime|null
    */
    public function getExchangeLastSuccessfulSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('exchangeLastSuccessfulSyncDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activationLockBypassCode' => fn(ParseNode $n) => $o->setActivationLockBypassCode($n->getStringValue()),
            'androidSecurityPatchLevel' => fn(ParseNode $n) => $o->setAndroidSecurityPatchLevel($n->getStringValue()),
            'azureADDeviceId' => fn(ParseNode $n) => $o->setAzureADDeviceId($n->getStringValue()),
            'azureADRegistered' => fn(ParseNode $n) => $o->setAzureADRegistered($n->getBooleanValue()),
            'complianceGracePeriodExpirationDateTime' => fn(ParseNode $n) => $o->setComplianceGracePeriodExpirationDateTime($n->getDateTimeValue()),
            'complianceState' => fn(ParseNode $n) => $o->setComplianceState($n->getEnumValue(ComplianceState::class)),
            'configurationManagerClientEnabledFeatures' => fn(ParseNode $n) => $o->setConfigurationManagerClientEnabledFeatures($n->getObjectValue([ConfigurationManagerClientEnabledFeatures::class, 'createFromDiscriminatorValue'])),
            'deviceActionResults' => fn(ParseNode $n) => $o->setDeviceActionResults($n->getCollectionOfObjectValues([DeviceActionResult::class, 'createFromDiscriminatorValue'])),
            'deviceCategory' => fn(ParseNode $n) => $o->setDeviceCategory($n->getObjectValue([DeviceCategory::class, 'createFromDiscriminatorValue'])),
            'deviceCategoryDisplayName' => fn(ParseNode $n) => $o->setDeviceCategoryDisplayName($n->getStringValue()),
            'deviceCompliancePolicyStates' => fn(ParseNode $n) => $o->setDeviceCompliancePolicyStates($n->getCollectionOfObjectValues([DeviceCompliancePolicyState::class, 'createFromDiscriminatorValue'])),
            'deviceConfigurationStates' => fn(ParseNode $n) => $o->setDeviceConfigurationStates($n->getCollectionOfObjectValues([DeviceConfigurationState::class, 'createFromDiscriminatorValue'])),
            'deviceEnrollmentType' => fn(ParseNode $n) => $o->setDeviceEnrollmentType($n->getEnumValue(DeviceEnrollmentType::class)),
            'deviceHealthAttestationState' => fn(ParseNode $n) => $o->setDeviceHealthAttestationState($n->getObjectValue([DeviceHealthAttestationState::class, 'createFromDiscriminatorValue'])),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'deviceRegistrationState' => fn(ParseNode $n) => $o->setDeviceRegistrationState($n->getEnumValue(DeviceRegistrationState::class)),
            'easActivated' => fn(ParseNode $n) => $o->setEasActivated($n->getBooleanValue()),
            'easActivationDateTime' => fn(ParseNode $n) => $o->setEasActivationDateTime($n->getDateTimeValue()),
            'easDeviceId' => fn(ParseNode $n) => $o->setEasDeviceId($n->getStringValue()),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'enrolledDateTime' => fn(ParseNode $n) => $o->setEnrolledDateTime($n->getDateTimeValue()),
            'ethernetMacAddress' => fn(ParseNode $n) => $o->setEthernetMacAddress($n->getStringValue()),
            'exchangeAccessState' => fn(ParseNode $n) => $o->setExchangeAccessState($n->getEnumValue(DeviceManagementExchangeAccessState::class)),
            'exchangeAccessStateReason' => fn(ParseNode $n) => $o->setExchangeAccessStateReason($n->getEnumValue(DeviceManagementExchangeAccessStateReason::class)),
            'exchangeLastSuccessfulSyncDateTime' => fn(ParseNode $n) => $o->setExchangeLastSuccessfulSyncDateTime($n->getDateTimeValue()),
            'freeStorageSpaceInBytes' => fn(ParseNode $n) => $o->setFreeStorageSpaceInBytes($n->getIntegerValue()),
            'iccid' => fn(ParseNode $n) => $o->setIccid($n->getStringValue()),
            'imei' => fn(ParseNode $n) => $o->setImei($n->getStringValue()),
            'isEncrypted' => fn(ParseNode $n) => $o->setIsEncrypted($n->getBooleanValue()),
            'isSupervised' => fn(ParseNode $n) => $o->setIsSupervised($n->getBooleanValue()),
            'jailBroken' => fn(ParseNode $n) => $o->setJailBroken($n->getStringValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'managedDeviceName' => fn(ParseNode $n) => $o->setManagedDeviceName($n->getStringValue()),
            'managedDeviceOwnerType' => fn(ParseNode $n) => $o->setManagedDeviceOwnerType($n->getEnumValue(ManagedDeviceOwnerType::class)),
            'managementAgent' => fn(ParseNode $n) => $o->setManagementAgent($n->getEnumValue(ManagementAgentType::class)),
            'managementCertificateExpirationDate' => fn(ParseNode $n) => $o->setManagementCertificateExpirationDate($n->getDateTimeValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'meid' => fn(ParseNode $n) => $o->setMeid($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'partnerReportedThreatState' => fn(ParseNode $n) => $o->setPartnerReportedThreatState($n->getEnumValue(ManagedDevicePartnerReportedHealthState::class)),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'physicalMemoryInBytes' => fn(ParseNode $n) => $o->setPhysicalMemoryInBytes($n->getIntegerValue()),
            'remoteAssistanceSessionErrorDetails' => fn(ParseNode $n) => $o->setRemoteAssistanceSessionErrorDetails($n->getStringValue()),
            'remoteAssistanceSessionUrl' => fn(ParseNode $n) => $o->setRemoteAssistanceSessionUrl($n->getStringValue()),
            'requireUserEnrollmentApproval' => fn(ParseNode $n) => $o->setRequireUserEnrollmentApproval($n->getBooleanValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'subscriberCarrier' => fn(ParseNode $n) => $o->setSubscriberCarrier($n->getStringValue()),
            'totalStorageSpaceInBytes' => fn(ParseNode $n) => $o->setTotalStorageSpaceInBytes($n->getIntegerValue()),
            'udid' => fn(ParseNode $n) => $o->setUdid($n->getStringValue()),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'users' => fn(ParseNode $n) => $o->setUsers($n->getCollectionOfObjectValues([User::class, 'createFromDiscriminatorValue'])),
            'wiFiMacAddress' => fn(ParseNode $n) => $o->setWiFiMacAddress($n->getStringValue()),
        ]);
    }

    /**
     * Gets the freeStorageSpaceInBytes property value. Free Storage in Bytes. Default value is 0. Read-only. This property is read-only.
     * @return int|null
    */
    public function getFreeStorageSpaceInBytes(): ?int {
        return $this->getBackingStore()->get('freeStorageSpaceInBytes');
    }

    /**
     * Gets the iccid property value. Integrated Circuit Card Identifier, it is A SIM card's unique identification number. Return default value null in LIST managedDevices. Real value only returned in singel device GET call with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     * @return string|null
    */
    public function getIccid(): ?string {
        return $this->getBackingStore()->get('iccid');
    }

    /**
     * Gets the imei property value. IMEI. This property is read-only.
     * @return string|null
    */
    public function getImei(): ?string {
        return $this->getBackingStore()->get('imei');
    }

    /**
     * Gets the isEncrypted property value. Device encryption status. This property is read-only.
     * @return bool|null
    */
    public function getIsEncrypted(): ?bool {
        return $this->getBackingStore()->get('isEncrypted');
    }

    /**
     * Gets the isSupervised property value. Device supervised status. This property is read-only.
     * @return bool|null
    */
    public function getIsSupervised(): ?bool {
        return $this->getBackingStore()->get('isSupervised');
    }

    /**
     * Gets the jailBroken property value. whether the device is jail broken or rooted. This property is read-only.
     * @return string|null
    */
    public function getJailBroken(): ?string {
        return $this->getBackingStore()->get('jailBroken');
    }

    /**
     * Gets the lastSyncDateTime property value. The date and time that the device last completed a successful sync with Intune. This property is read-only.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSyncDateTime');
    }

    /**
     * Gets the managedDeviceName property value. Automatically generated name to identify a device. Can be overwritten to a user friendly name.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->getBackingStore()->get('managedDeviceName');
    }

    /**
     * Gets the managedDeviceOwnerType property value. Owner type of device.
     * @return ManagedDeviceOwnerType|null
    */
    public function getManagedDeviceOwnerType(): ?ManagedDeviceOwnerType {
        return $this->getBackingStore()->get('managedDeviceOwnerType');
    }

    /**
     * Gets the managementAgent property value. The managementAgent property
     * @return ManagementAgentType|null
    */
    public function getManagementAgent(): ?ManagementAgentType {
        return $this->getBackingStore()->get('managementAgent');
    }

    /**
     * Gets the managementCertificateExpirationDate property value. Reports device management certificate expiration date. This property is read-only.
     * @return DateTime|null
    */
    public function getManagementCertificateExpirationDate(): ?DateTime {
        return $this->getBackingStore()->get('managementCertificateExpirationDate');
    }

    /**
     * Gets the manufacturer property value. Manufacturer of the device. This property is read-only.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the meid property value. MEID. This property is read-only.
     * @return string|null
    */
    public function getMeid(): ?string {
        return $this->getBackingStore()->get('meid');
    }

    /**
     * Gets the model property value. Model of the device. This property is read-only.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->getBackingStore()->get('model');
    }

    /**
     * Gets the notes property value. Notes on the device created by IT Admin. Return default value null in LIST managedDevices. Real value only returned in singel device GET call with device id and included in select parameter. Supports: $select.  $Search is not supported.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->getBackingStore()->get('notes');
    }

    /**
     * Gets the operatingSystem property value. Operating system of the device. Windows, iOS, etc. This property is read-only.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->getBackingStore()->get('operatingSystem');
    }

    /**
     * Gets the osVersion property value. Operating system version of the device. This property is read-only.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->getBackingStore()->get('osVersion');
    }

    /**
     * Gets the partnerReportedThreatState property value. Available health states for the Device Health API
     * @return ManagedDevicePartnerReportedHealthState|null
    */
    public function getPartnerReportedThreatState(): ?ManagedDevicePartnerReportedHealthState {
        return $this->getBackingStore()->get('partnerReportedThreatState');
    }

    /**
     * Gets the phoneNumber property value. Phone number of the device. This property is read-only.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->getBackingStore()->get('phoneNumber');
    }

    /**
     * Gets the physicalMemoryInBytes property value. Total Memory in Bytes. Return default value 0 in LIST managedDevices. Real value only returned in singel device GET call with device id and included in select parameter. Supports: $select. Default value is 0. Read-only. This property is read-only.
     * @return int|null
    */
    public function getPhysicalMemoryInBytes(): ?int {
        return $this->getBackingStore()->get('physicalMemoryInBytes');
    }

    /**
     * Gets the remoteAssistanceSessionErrorDetails property value. An error string that identifies issues when creating Remote Assistance session objects. This property is read-only.
     * @return string|null
    */
    public function getRemoteAssistanceSessionErrorDetails(): ?string {
        return $this->getBackingStore()->get('remoteAssistanceSessionErrorDetails');
    }

    /**
     * Gets the remoteAssistanceSessionUrl property value. Url that allows a Remote Assistance session to be established with the device. This property is read-only.
     * @return string|null
    */
    public function getRemoteAssistanceSessionUrl(): ?string {
        return $this->getBackingStore()->get('remoteAssistanceSessionUrl');
    }

    /**
     * Gets the requireUserEnrollmentApproval property value. Reports if the managed iOS device is user approval enrollment. This property is read-only.
     * @return bool|null
    */
    public function getRequireUserEnrollmentApproval(): ?bool {
        return $this->getBackingStore()->get('requireUserEnrollmentApproval');
    }

    /**
     * Gets the serialNumber property value. SerialNumber. This property is read-only.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->getBackingStore()->get('serialNumber');
    }

    /**
     * Gets the subscriberCarrier property value. Subscriber Carrier. This property is read-only.
     * @return string|null
    */
    public function getSubscriberCarrier(): ?string {
        return $this->getBackingStore()->get('subscriberCarrier');
    }

    /**
     * Gets the totalStorageSpaceInBytes property value. Total Storage in Bytes. This property is read-only.
     * @return int|null
    */
    public function getTotalStorageSpaceInBytes(): ?int {
        return $this->getBackingStore()->get('totalStorageSpaceInBytes');
    }

    /**
     * Gets the udid property value. Unique Device Identifier for iOS and macOS devices. Return default value null in LIST managedDevices. Real value only returned in singel device GET call with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     * @return string|null
    */
    public function getUdid(): ?string {
        return $this->getBackingStore()->get('udid');
    }

    /**
     * Gets the userDisplayName property value. User display name. This property is read-only.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->getBackingStore()->get('userDisplayName');
    }

    /**
     * Gets the userId property value. Unique Identifier for the user associated with the device. This property is read-only.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userPrincipalName property value. Device user principal name. This property is read-only.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Gets the users property value. The primary users associated with the managed device.
     * @return array<User>|null
    */
    public function getUsers(): ?array {
        return $this->getBackingStore()->get('users');
    }

    /**
     * Gets the wiFiMacAddress property value. Wi-Fi MAC. This property is read-only.
     * @return string|null
    */
    public function getWiFiMacAddress(): ?string {
        return $this->getBackingStore()->get('wiFiMacAddress');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('complianceState', $this->getComplianceState());
        $writer->writeObjectValue('deviceCategory', $this->getDeviceCategory());
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicyStates', $this->getDeviceCompliancePolicyStates());
        $writer->writeCollectionOfObjectValues('deviceConfigurationStates', $this->getDeviceConfigurationStates());
        $writer->writeEnumValue('deviceEnrollmentType', $this->getDeviceEnrollmentType());
        $writer->writeEnumValue('deviceRegistrationState', $this->getDeviceRegistrationState());
        $writer->writeEnumValue('exchangeAccessState', $this->getExchangeAccessState());
        $writer->writeEnumValue('exchangeAccessStateReason', $this->getExchangeAccessStateReason());
        $writer->writeStringValue('managedDeviceName', $this->getManagedDeviceName());
        $writer->writeEnumValue('managedDeviceOwnerType', $this->getManagedDeviceOwnerType());
        $writer->writeEnumValue('managementAgent', $this->getManagementAgent());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeEnumValue('partnerReportedThreatState', $this->getPartnerReportedThreatState());
        $writer->writeCollectionOfObjectValues('users', $this->getUsers());
    }

    /**
     * Sets the activationLockBypassCode property value. Code that allows the Activation Lock on a device to be bypassed. This property is read-only.
     *  @param string|null $value Value to set for the activationLockBypassCode property.
    */
    public function setActivationLockBypassCode(?string $value): void {
        $this->getBackingStore()->set('activationLockBypassCode', $value);
    }

    /**
     * Sets the androidSecurityPatchLevel property value. Android security patch level. This property is read-only.
     *  @param string|null $value Value to set for the androidSecurityPatchLevel property.
    */
    public function setAndroidSecurityPatchLevel(?string $value): void {
        $this->getBackingStore()->set('androidSecurityPatchLevel', $value);
    }

    /**
     * Sets the azureADDeviceId property value. The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
     *  @param string|null $value Value to set for the azureADDeviceId property.
    */
    public function setAzureADDeviceId(?string $value): void {
        $this->getBackingStore()->set('azureADDeviceId', $value);
    }

    /**
     * Sets the azureADRegistered property value. Whether the device is Azure Active Directory registered. This property is read-only.
     *  @param bool|null $value Value to set for the azureADRegistered property.
    */
    public function setAzureADRegistered(?bool $value): void {
        $this->getBackingStore()->set('azureADRegistered', $value);
    }

    /**
     * Sets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires. This property is read-only.
     *  @param DateTime|null $value Value to set for the complianceGracePeriodExpirationDateTime property.
    */
    public function setComplianceGracePeriodExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('complianceGracePeriodExpirationDateTime', $value);
    }

    /**
     * Sets the complianceState property value. Compliance state.
     *  @param ComplianceState|null $value Value to set for the complianceState property.
    */
    public function setComplianceState(?ComplianceState $value): void {
        $this->getBackingStore()->set('complianceState', $value);
    }

    /**
     * Sets the configurationManagerClientEnabledFeatures property value. ConfigrMgr client enabled features. This property is read-only.
     *  @param ConfigurationManagerClientEnabledFeatures|null $value Value to set for the configurationManagerClientEnabledFeatures property.
    */
    public function setConfigurationManagerClientEnabledFeatures(?ConfigurationManagerClientEnabledFeatures $value): void {
        $this->getBackingStore()->set('configurationManagerClientEnabledFeatures', $value);
    }

    /**
     * Sets the deviceActionResults property value. List of ComplexType deviceActionResult objects. This property is read-only.
     *  @param array<DeviceActionResult>|null $value Value to set for the deviceActionResults property.
    */
    public function setDeviceActionResults(?array $value): void {
        $this->getBackingStore()->set('deviceActionResults', $value);
    }

    /**
     * Sets the deviceCategory property value. Device category
     *  @param DeviceCategory|null $value Value to set for the deviceCategory property.
    */
    public function setDeviceCategory(?DeviceCategory $value): void {
        $this->getBackingStore()->set('deviceCategory', $value);
    }

    /**
     * Sets the deviceCategoryDisplayName property value. Device category display name. This property is read-only.
     *  @param string|null $value Value to set for the deviceCategoryDisplayName property.
    */
    public function setDeviceCategoryDisplayName(?string $value): void {
        $this->getBackingStore()->set('deviceCategoryDisplayName', $value);
    }

    /**
     * Sets the deviceCompliancePolicyStates property value. Device compliance policy states for this device.
     *  @param array<DeviceCompliancePolicyState>|null $value Value to set for the deviceCompliancePolicyStates property.
    */
    public function setDeviceCompliancePolicyStates(?array $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicyStates', $value);
    }

    /**
     * Sets the deviceConfigurationStates property value. Device configuration states for this device.
     *  @param array<DeviceConfigurationState>|null $value Value to set for the deviceConfigurationStates property.
    */
    public function setDeviceConfigurationStates(?array $value): void {
        $this->getBackingStore()->set('deviceConfigurationStates', $value);
    }

    /**
     * Sets the deviceEnrollmentType property value. Possible ways of adding a mobile device to management.
     *  @param DeviceEnrollmentType|null $value Value to set for the deviceEnrollmentType property.
    */
    public function setDeviceEnrollmentType(?DeviceEnrollmentType $value): void {
        $this->getBackingStore()->set('deviceEnrollmentType', $value);
    }

    /**
     * Sets the deviceHealthAttestationState property value. The device health attestation state. This property is read-only.
     *  @param DeviceHealthAttestationState|null $value Value to set for the deviceHealthAttestationState property.
    */
    public function setDeviceHealthAttestationState(?DeviceHealthAttestationState $value): void {
        $this->getBackingStore()->set('deviceHealthAttestationState', $value);
    }

    /**
     * Sets the deviceName property value. Name of the device. This property is read-only.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the deviceRegistrationState property value. Device registration status.
     *  @param DeviceRegistrationState|null $value Value to set for the deviceRegistrationState property.
    */
    public function setDeviceRegistrationState(?DeviceRegistrationState $value): void {
        $this->getBackingStore()->set('deviceRegistrationState', $value);
    }

    /**
     * Sets the easActivated property value. Whether the device is Exchange ActiveSync activated. This property is read-only.
     *  @param bool|null $value Value to set for the easActivated property.
    */
    public function setEasActivated(?bool $value): void {
        $this->getBackingStore()->set('easActivated', $value);
    }

    /**
     * Sets the easActivationDateTime property value. Exchange ActivationSync activation time of the device. This property is read-only.
     *  @param DateTime|null $value Value to set for the easActivationDateTime property.
    */
    public function setEasActivationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('easActivationDateTime', $value);
    }

    /**
     * Sets the easDeviceId property value. Exchange ActiveSync Id of the device. This property is read-only.
     *  @param string|null $value Value to set for the easDeviceId property.
    */
    public function setEasDeviceId(?string $value): void {
        $this->getBackingStore()->set('easDeviceId', $value);
    }

    /**
     * Sets the emailAddress property value. Email(s) for the user associated with the device. This property is read-only.
     *  @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value): void {
        $this->getBackingStore()->set('emailAddress', $value);
    }

    /**
     * Sets the enrolledDateTime property value. Enrollment time of the device. This property is read-only.
     *  @param DateTime|null $value Value to set for the enrolledDateTime property.
    */
    public function setEnrolledDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('enrolledDateTime', $value);
    }

    /**
     * Sets the ethernetMacAddress property value. Ethernet MAC. This property is read-only.
     *  @param string|null $value Value to set for the ethernetMacAddress property.
    */
    public function setEthernetMacAddress(?string $value): void {
        $this->getBackingStore()->set('ethernetMacAddress', $value);
    }

    /**
     * Sets the exchangeAccessState property value. Device Exchange Access State.
     *  @param DeviceManagementExchangeAccessState|null $value Value to set for the exchangeAccessState property.
    */
    public function setExchangeAccessState(?DeviceManagementExchangeAccessState $value): void {
        $this->getBackingStore()->set('exchangeAccessState', $value);
    }

    /**
     * Sets the exchangeAccessStateReason property value. Device Exchange Access State Reason.
     *  @param DeviceManagementExchangeAccessStateReason|null $value Value to set for the exchangeAccessStateReason property.
    */
    public function setExchangeAccessStateReason(?DeviceManagementExchangeAccessStateReason $value): void {
        $this->getBackingStore()->set('exchangeAccessStateReason', $value);
    }

    /**
     * Sets the exchangeLastSuccessfulSyncDateTime property value. Last time the device contacted Exchange. This property is read-only.
     *  @param DateTime|null $value Value to set for the exchangeLastSuccessfulSyncDateTime property.
    */
    public function setExchangeLastSuccessfulSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('exchangeLastSuccessfulSyncDateTime', $value);
    }

    /**
     * Sets the freeStorageSpaceInBytes property value. Free Storage in Bytes. Default value is 0. Read-only. This property is read-only.
     *  @param int|null $value Value to set for the freeStorageSpaceInBytes property.
    */
    public function setFreeStorageSpaceInBytes(?int $value): void {
        $this->getBackingStore()->set('freeStorageSpaceInBytes', $value);
    }

    /**
     * Sets the iccid property value. Integrated Circuit Card Identifier, it is A SIM card's unique identification number. Return default value null in LIST managedDevices. Real value only returned in singel device GET call with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     *  @param string|null $value Value to set for the iccid property.
    */
    public function setIccid(?string $value): void {
        $this->getBackingStore()->set('iccid', $value);
    }

    /**
     * Sets the imei property value. IMEI. This property is read-only.
     *  @param string|null $value Value to set for the imei property.
    */
    public function setImei(?string $value): void {
        $this->getBackingStore()->set('imei', $value);
    }

    /**
     * Sets the isEncrypted property value. Device encryption status. This property is read-only.
     *  @param bool|null $value Value to set for the isEncrypted property.
    */
    public function setIsEncrypted(?bool $value): void {
        $this->getBackingStore()->set('isEncrypted', $value);
    }

    /**
     * Sets the isSupervised property value. Device supervised status. This property is read-only.
     *  @param bool|null $value Value to set for the isSupervised property.
    */
    public function setIsSupervised(?bool $value): void {
        $this->getBackingStore()->set('isSupervised', $value);
    }

    /**
     * Sets the jailBroken property value. whether the device is jail broken or rooted. This property is read-only.
     *  @param string|null $value Value to set for the jailBroken property.
    */
    public function setJailBroken(?string $value): void {
        $this->getBackingStore()->set('jailBroken', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. The date and time that the device last completed a successful sync with Intune. This property is read-only.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the managedDeviceName property value. Automatically generated name to identify a device. Can be overwritten to a user friendly name.
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value): void {
        $this->getBackingStore()->set('managedDeviceName', $value);
    }

    /**
     * Sets the managedDeviceOwnerType property value. Owner type of device.
     *  @param ManagedDeviceOwnerType|null $value Value to set for the managedDeviceOwnerType property.
    */
    public function setManagedDeviceOwnerType(?ManagedDeviceOwnerType $value): void {
        $this->getBackingStore()->set('managedDeviceOwnerType', $value);
    }

    /**
     * Sets the managementAgent property value. The managementAgent property
     *  @param ManagementAgentType|null $value Value to set for the managementAgent property.
    */
    public function setManagementAgent(?ManagementAgentType $value): void {
        $this->getBackingStore()->set('managementAgent', $value);
    }

    /**
     * Sets the managementCertificateExpirationDate property value. Reports device management certificate expiration date. This property is read-only.
     *  @param DateTime|null $value Value to set for the managementCertificateExpirationDate property.
    */
    public function setManagementCertificateExpirationDate(?DateTime $value): void {
        $this->getBackingStore()->set('managementCertificateExpirationDate', $value);
    }

    /**
     * Sets the manufacturer property value. Manufacturer of the device. This property is read-only.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the meid property value. MEID. This property is read-only.
     *  @param string|null $value Value to set for the meid property.
    */
    public function setMeid(?string $value): void {
        $this->getBackingStore()->set('meid', $value);
    }

    /**
     * Sets the model property value. Model of the device. This property is read-only.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the notes property value. Notes on the device created by IT Admin. Return default value null in LIST managedDevices. Real value only returned in singel device GET call with device id and included in select parameter. Supports: $select.  $Search is not supported.
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the operatingSystem property value. Operating system of the device. Windows, iOS, etc. This property is read-only.
     *  @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the osVersion property value. Operating system version of the device. This property is read-only.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the partnerReportedThreatState property value. Available health states for the Device Health API
     *  @param ManagedDevicePartnerReportedHealthState|null $value Value to set for the partnerReportedThreatState property.
    */
    public function setPartnerReportedThreatState(?ManagedDevicePartnerReportedHealthState $value): void {
        $this->getBackingStore()->set('partnerReportedThreatState', $value);
    }

    /**
     * Sets the phoneNumber property value. Phone number of the device. This property is read-only.
     *  @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('phoneNumber', $value);
    }

    /**
     * Sets the physicalMemoryInBytes property value. Total Memory in Bytes. Return default value 0 in LIST managedDevices. Real value only returned in singel device GET call with device id and included in select parameter. Supports: $select. Default value is 0. Read-only. This property is read-only.
     *  @param int|null $value Value to set for the physicalMemoryInBytes property.
    */
    public function setPhysicalMemoryInBytes(?int $value): void {
        $this->getBackingStore()->set('physicalMemoryInBytes', $value);
    }

    /**
     * Sets the remoteAssistanceSessionErrorDetails property value. An error string that identifies issues when creating Remote Assistance session objects. This property is read-only.
     *  @param string|null $value Value to set for the remoteAssistanceSessionErrorDetails property.
    */
    public function setRemoteAssistanceSessionErrorDetails(?string $value): void {
        $this->getBackingStore()->set('remoteAssistanceSessionErrorDetails', $value);
    }

    /**
     * Sets the remoteAssistanceSessionUrl property value. Url that allows a Remote Assistance session to be established with the device. This property is read-only.
     *  @param string|null $value Value to set for the remoteAssistanceSessionUrl property.
    */
    public function setRemoteAssistanceSessionUrl(?string $value): void {
        $this->getBackingStore()->set('remoteAssistanceSessionUrl', $value);
    }

    /**
     * Sets the requireUserEnrollmentApproval property value. Reports if the managed iOS device is user approval enrollment. This property is read-only.
     *  @param bool|null $value Value to set for the requireUserEnrollmentApproval property.
    */
    public function setRequireUserEnrollmentApproval(?bool $value): void {
        $this->getBackingStore()->set('requireUserEnrollmentApproval', $value);
    }

    /**
     * Sets the serialNumber property value. SerialNumber. This property is read-only.
     *  @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the subscriberCarrier property value. Subscriber Carrier. This property is read-only.
     *  @param string|null $value Value to set for the subscriberCarrier property.
    */
    public function setSubscriberCarrier(?string $value): void {
        $this->getBackingStore()->set('subscriberCarrier', $value);
    }

    /**
     * Sets the totalStorageSpaceInBytes property value. Total Storage in Bytes. This property is read-only.
     *  @param int|null $value Value to set for the totalStorageSpaceInBytes property.
    */
    public function setTotalStorageSpaceInBytes(?int $value): void {
        $this->getBackingStore()->set('totalStorageSpaceInBytes', $value);
    }

    /**
     * Sets the udid property value. Unique Device Identifier for iOS and macOS devices. Return default value null in LIST managedDevices. Real value only returned in singel device GET call with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     *  @param string|null $value Value to set for the udid property.
    */
    public function setUdid(?string $value): void {
        $this->getBackingStore()->set('udid', $value);
    }

    /**
     * Sets the userDisplayName property value. User display name. This property is read-only.
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userId property value. Unique Identifier for the user associated with the device. This property is read-only.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. Device user principal name. This property is read-only.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the users property value. The primary users associated with the managed device.
     *  @param array<User>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value): void {
        $this->getBackingStore()->set('users', $value);
    }

    /**
     * Sets the wiFiMacAddress property value. Wi-Fi MAC. This property is read-only.
     *  @param string|null $value Value to set for the wiFiMacAddress property.
    */
    public function setWiFiMacAddress(?string $value): void {
        $this->getBackingStore()->set('wiFiMacAddress', $value);
    }

}
