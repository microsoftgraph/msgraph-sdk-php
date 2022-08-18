<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Device extends DirectoryObject implements Parsable 
{
    /**
     * @var bool|null $accountEnabled true if the account is enabled; otherwise, false. Required. Default is true.  Supports $filter (eq, ne, not, in). Only callers in Global Administrator and Cloud Device Administrator roles can set this property.
    */
    private ?bool $accountEnabled = null;
    
    /**
     * @var array<AlternativeSecurityId>|null $alternativeSecurityIds For internal use only. Not nullable. Supports $filter (eq, not, ge, le).
    */
    private ?array $alternativeSecurityIds = null;
    
    /**
     * @var DateTime|null $approximateLastSignInDateTime The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, and eq on null values) and $orderBy.
    */
    private ?DateTime $approximateLastSignInDateTime = null;
    
    /**
     * @var DateTime|null $complianceExpirationDateTime The timestamp when the device is no longer deemed compliant. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $complianceExpirationDateTime = null;
    
    /**
     * @var string|null $deviceId Unique identifier set by Azure Device Registration Service at the time of registration. Supports $filter (eq, ne, not, startsWith).
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $deviceMetadata For internal use only. Set to null.
    */
    private ?string $deviceMetadata = null;
    
    /**
     * @var int|null $deviceVersion For internal use only.
    */
    private ?int $deviceVersion = null;
    
    /**
     * @var string|null $displayName The display name for the device. Required. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<Extension>|null $extensions The collection of open extensions defined for the device. Read-only. Nullable.
    */
    private ?array $extensions = null;
    
    /**
     * @var bool|null $isCompliant true if the device complies with Mobile Device Management (MDM) policies; otherwise, false. Read-only. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
    */
    private ?bool $isCompliant = null;
    
    /**
     * @var bool|null $isManaged true if the device is managed by a Mobile Device Management (MDM) app; otherwise, false. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
    */
    private ?bool $isManaged = null;
    
    /**
     * @var string|null $mdmAppId Application identifier used to register device into MDM. Read-only. Supports $filter (eq, ne, not, startsWith).
    */
    private ?string $mdmAppId = null;
    
    /**
     * @var array<DirectoryObject>|null $memberOf Groups and administrative units that this device is a member of. Read-only. Nullable. Supports $expand.
    */
    private ?array $memberOf = null;
    
    /**
     * @var DateTime|null $onPremisesLastSyncDateTime The last time at which the object was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Read-only. Supports $filter (eq, ne, not, ge, le, in).
    */
    private ?DateTime $onPremisesLastSyncDateTime = null;
    
    /**
     * @var bool|null $onPremisesSyncEnabled true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
    */
    private ?bool $onPremisesSyncEnabled = null;
    
    /**
     * @var string|null $operatingSystem The type of operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
    */
    private ?string $operatingSystem = null;
    
    /**
     * @var string|null $operatingSystemVersion The version of the operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
    */
    private ?string $operatingSystemVersion = null;
    
    /**
     * @var array<string>|null $physicalIds For internal use only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, and counting empty collections).
    */
    private ?array $physicalIds = null;
    
    /**
     * @var string|null $profileType The profile type of the device. Possible values: RegisteredDevice (default), SecureVM, Printer, Shared, IoT.
    */
    private ?string $profileType = null;
    
    /**
     * @var array<DirectoryObject>|null $registeredOwners The user that cloud joined the device or registered their personal device. The registered owner is set at the time of registration. Currently, there can be only one owner. Read-only. Nullable. Supports $expand.
    */
    private ?array $registeredOwners = null;
    
    /**
     * @var array<DirectoryObject>|null $registeredUsers Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable. Supports $expand.
    */
    private ?array $registeredUsers = null;
    
    /**
     * @var array<string>|null $systemLabels List of labels applied to the device by the system. Supports $filter (eq when counting empty collections).
    */
    private ?array $systemLabels = null;
    
    /**
     * @var array<DirectoryObject>|null $transitiveMemberOf Groups and administrative units that the device is a member of. This operation is transitive. Supports $expand.
    */
    private ?array $transitiveMemberOf = null;
    
    /**
     * @var string|null $trustType Type of trust for the joined device. Read-only. Possible values:  Workplace (indicates bring your own personal devices), AzureAd (Cloud only joined devices), ServerAd (on-premises domain joined devices joined to Azure AD). For more details, see Introduction to device management in Azure Active Directory
    */
    private ?string $trustType = null;
    
    /**
     * Instantiates a new device and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.device');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Device
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Device {
        return new Device();
    }

    /**
     * Gets the accountEnabled property value. true if the account is enabled; otherwise, false. Required. Default is true.  Supports $filter (eq, ne, not, in). Only callers in Global Administrator and Cloud Device Administrator roles can set this property.
     * @return bool|null
    */
    public function getAccountEnabled(): ?bool {
        return $this->accountEnabled;
    }

    /**
     * Gets the alternativeSecurityIds property value. For internal use only. Not nullable. Supports $filter (eq, not, ge, le).
     * @return array<AlternativeSecurityId>|null
    */
    public function getAlternativeSecurityIds(): ?array {
        return $this->alternativeSecurityIds;
    }

    /**
     * Gets the approximateLastSignInDateTime property value. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, and eq on null values) and $orderBy.
     * @return DateTime|null
    */
    public function getApproximateLastSignInDateTime(): ?DateTime {
        return $this->approximateLastSignInDateTime;
    }

    /**
     * Gets the complianceExpirationDateTime property value. The timestamp when the device is no longer deemed compliant. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getComplianceExpirationDateTime(): ?DateTime {
        return $this->complianceExpirationDateTime;
    }

    /**
     * Gets the deviceId property value. Unique identifier set by Azure Device Registration Service at the time of registration. Supports $filter (eq, ne, not, startsWith).
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceMetadata property value. For internal use only. Set to null.
     * @return string|null
    */
    public function getDeviceMetadata(): ?string {
        return $this->deviceMetadata;
    }

    /**
     * Gets the deviceVersion property value. For internal use only.
     * @return int|null
    */
    public function getDeviceVersion(): ?int {
        return $this->deviceVersion;
    }

    /**
     * Gets the displayName property value. The display name for the device. Required. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the device. Read-only. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountEnabled' => function (ParseNode $n) use ($o) { $o->setAccountEnabled($n->getBooleanValue()); },
            'alternativeSecurityIds' => function (ParseNode $n) use ($o) { $o->setAlternativeSecurityIds($n->getCollectionOfObjectValues(array(AlternativeSecurityId::class, 'createFromDiscriminatorValue'))); },
            'approximateLastSignInDateTime' => function (ParseNode $n) use ($o) { $o->setApproximateLastSignInDateTime($n->getDateTimeValue()); },
            'complianceExpirationDateTime' => function (ParseNode $n) use ($o) { $o->setComplianceExpirationDateTime($n->getDateTimeValue()); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'deviceMetadata' => function (ParseNode $n) use ($o) { $o->setDeviceMetadata($n->getStringValue()); },
            'deviceVersion' => function (ParseNode $n) use ($o) { $o->setDeviceVersion($n->getIntegerValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'extensions' => function (ParseNode $n) use ($o) { $o->setExtensions($n->getCollectionOfObjectValues(array(Extension::class, 'createFromDiscriminatorValue'))); },
            'isCompliant' => function (ParseNode $n) use ($o) { $o->setIsCompliant($n->getBooleanValue()); },
            'isManaged' => function (ParseNode $n) use ($o) { $o->setIsManaged($n->getBooleanValue()); },
            'mdmAppId' => function (ParseNode $n) use ($o) { $o->setMdmAppId($n->getStringValue()); },
            'memberOf' => function (ParseNode $n) use ($o) { $o->setMemberOf($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'onPremisesLastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()); },
            'onPremisesSyncEnabled' => function (ParseNode $n) use ($o) { $o->setOnPremisesSyncEnabled($n->getBooleanValue()); },
            'operatingSystem' => function (ParseNode $n) use ($o) { $o->setOperatingSystem($n->getStringValue()); },
            'operatingSystemVersion' => function (ParseNode $n) use ($o) { $o->setOperatingSystemVersion($n->getStringValue()); },
            'physicalIds' => function (ParseNode $n) use ($o) { $o->setPhysicalIds($n->getCollectionOfPrimitiveValues()); },
            'profileType' => function (ParseNode $n) use ($o) { $o->setProfileType($n->getStringValue()); },
            'registeredOwners' => function (ParseNode $n) use ($o) { $o->setRegisteredOwners($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'registeredUsers' => function (ParseNode $n) use ($o) { $o->setRegisteredUsers($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'systemLabels' => function (ParseNode $n) use ($o) { $o->setSystemLabels($n->getCollectionOfPrimitiveValues()); },
            'transitiveMemberOf' => function (ParseNode $n) use ($o) { $o->setTransitiveMemberOf($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'trustType' => function (ParseNode $n) use ($o) { $o->setTrustType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isCompliant property value. true if the device complies with Mobile Device Management (MDM) policies; otherwise, false. Read-only. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
     * @return bool|null
    */
    public function getIsCompliant(): ?bool {
        return $this->isCompliant;
    }

    /**
     * Gets the isManaged property value. true if the device is managed by a Mobile Device Management (MDM) app; otherwise, false. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
     * @return bool|null
    */
    public function getIsManaged(): ?bool {
        return $this->isManaged;
    }

    /**
     * Gets the mdmAppId property value. Application identifier used to register device into MDM. Read-only. Supports $filter (eq, ne, not, startsWith).
     * @return string|null
    */
    public function getMdmAppId(): ?string {
        return $this->mdmAppId;
    }

    /**
     * Gets the memberOf property value. Groups and administrative units that this device is a member of. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getMemberOf(): ?array {
        return $this->memberOf;
    }

    /**
     * Gets the onPremisesLastSyncDateTime property value. The last time at which the object was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Read-only. Supports $filter (eq, ne, not, ge, le, in).
     * @return DateTime|null
    */
    public function getOnPremisesLastSyncDateTime(): ?DateTime {
        return $this->onPremisesLastSyncDateTime;
    }

    /**
     * Gets the onPremisesSyncEnabled property value. true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     * @return bool|null
    */
    public function getOnPremisesSyncEnabled(): ?bool {
        return $this->onPremisesSyncEnabled;
    }

    /**
     * Gets the operatingSystem property value. The type of operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->operatingSystem;
    }

    /**
     * Gets the operatingSystemVersion property value. The version of the operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
     * @return string|null
    */
    public function getOperatingSystemVersion(): ?string {
        return $this->operatingSystemVersion;
    }

    /**
     * Gets the physicalIds property value. For internal use only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, and counting empty collections).
     * @return array<string>|null
    */
    public function getPhysicalIds(): ?array {
        return $this->physicalIds;
    }

    /**
     * Gets the profileType property value. The profile type of the device. Possible values: RegisteredDevice (default), SecureVM, Printer, Shared, IoT.
     * @return string|null
    */
    public function getProfileType(): ?string {
        return $this->profileType;
    }

    /**
     * Gets the registeredOwners property value. The user that cloud joined the device or registered their personal device. The registered owner is set at the time of registration. Currently, there can be only one owner. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getRegisteredOwners(): ?array {
        return $this->registeredOwners;
    }

    /**
     * Gets the registeredUsers property value. Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getRegisteredUsers(): ?array {
        return $this->registeredUsers;
    }

    /**
     * Gets the systemLabels property value. List of labels applied to the device by the system. Supports $filter (eq when counting empty collections).
     * @return array<string>|null
    */
    public function getSystemLabels(): ?array {
        return $this->systemLabels;
    }

    /**
     * Gets the transitiveMemberOf property value. Groups and administrative units that the device is a member of. This operation is transitive. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMemberOf(): ?array {
        return $this->transitiveMemberOf;
    }

    /**
     * Gets the trustType property value. Type of trust for the joined device. Read-only. Possible values:  Workplace (indicates bring your own personal devices), AzureAd (Cloud only joined devices), ServerAd (on-premises domain joined devices joined to Azure AD). For more details, see Introduction to device management in Azure Active Directory
     * @return string|null
    */
    public function getTrustType(): ?string {
        return $this->trustType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountEnabled', $this->accountEnabled);
        $writer->writeCollectionOfObjectValues('alternativeSecurityIds', $this->alternativeSecurityIds);
        $writer->writeDateTimeValue('approximateLastSignInDateTime', $this->approximateLastSignInDateTime);
        $writer->writeDateTimeValue('complianceExpirationDateTime', $this->complianceExpirationDateTime);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceMetadata', $this->deviceMetadata);
        $writer->writeIntegerValue('deviceVersion', $this->deviceVersion);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeBooleanValue('isCompliant', $this->isCompliant);
        $writer->writeBooleanValue('isManaged', $this->isManaged);
        $writer->writeStringValue('mdmAppId', $this->mdmAppId);
        $writer->writeCollectionOfObjectValues('memberOf', $this->memberOf);
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->onPremisesLastSyncDateTime);
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->onPremisesSyncEnabled);
        $writer->writeStringValue('operatingSystem', $this->operatingSystem);
        $writer->writeStringValue('operatingSystemVersion', $this->operatingSystemVersion);
        $writer->writeCollectionOfPrimitiveValues('physicalIds', $this->physicalIds);
        $writer->writeStringValue('profileType', $this->profileType);
        $writer->writeCollectionOfObjectValues('registeredOwners', $this->registeredOwners);
        $writer->writeCollectionOfObjectValues('registeredUsers', $this->registeredUsers);
        $writer->writeCollectionOfPrimitiveValues('systemLabels', $this->systemLabels);
        $writer->writeCollectionOfObjectValues('transitiveMemberOf', $this->transitiveMemberOf);
        $writer->writeStringValue('trustType', $this->trustType);
    }

    /**
     * Sets the accountEnabled property value. true if the account is enabled; otherwise, false. Required. Default is true.  Supports $filter (eq, ne, not, in). Only callers in Global Administrator and Cloud Device Administrator roles can set this property.
     *  @param bool|null $value Value to set for the accountEnabled property.
    */
    public function setAccountEnabled(?bool $value ): void {
        $this->accountEnabled = $value;
    }

    /**
     * Sets the alternativeSecurityIds property value. For internal use only. Not nullable. Supports $filter (eq, not, ge, le).
     *  @param array<AlternativeSecurityId>|null $value Value to set for the alternativeSecurityIds property.
    */
    public function setAlternativeSecurityIds(?array $value ): void {
        $this->alternativeSecurityIds = $value;
    }

    /**
     * Sets the approximateLastSignInDateTime property value. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, and eq on null values) and $orderBy.
     *  @param DateTime|null $value Value to set for the approximateLastSignInDateTime property.
    */
    public function setApproximateLastSignInDateTime(?DateTime $value ): void {
        $this->approximateLastSignInDateTime = $value;
    }

    /**
     * Sets the complianceExpirationDateTime property value. The timestamp when the device is no longer deemed compliant. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the complianceExpirationDateTime property.
    */
    public function setComplianceExpirationDateTime(?DateTime $value ): void {
        $this->complianceExpirationDateTime = $value;
    }

    /**
     * Sets the deviceId property value. Unique identifier set by Azure Device Registration Service at the time of registration. Supports $filter (eq, ne, not, startsWith).
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceMetadata property value. For internal use only. Set to null.
     *  @param string|null $value Value to set for the deviceMetadata property.
    */
    public function setDeviceMetadata(?string $value ): void {
        $this->deviceMetadata = $value;
    }

    /**
     * Sets the deviceVersion property value. For internal use only.
     *  @param int|null $value Value to set for the deviceVersion property.
    */
    public function setDeviceVersion(?int $value ): void {
        $this->deviceVersion = $value;
    }

    /**
     * Sets the displayName property value. The display name for the device. Required. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the device. Read-only. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the isCompliant property value. true if the device complies with Mobile Device Management (MDM) policies; otherwise, false. Read-only. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
     *  @param bool|null $value Value to set for the isCompliant property.
    */
    public function setIsCompliant(?bool $value ): void {
        $this->isCompliant = $value;
    }

    /**
     * Sets the isManaged property value. true if the device is managed by a Mobile Device Management (MDM) app; otherwise, false. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
     *  @param bool|null $value Value to set for the isManaged property.
    */
    public function setIsManaged(?bool $value ): void {
        $this->isManaged = $value;
    }

    /**
     * Sets the mdmAppId property value. Application identifier used to register device into MDM. Read-only. Supports $filter (eq, ne, not, startsWith).
     *  @param string|null $value Value to set for the mdmAppId property.
    */
    public function setMdmAppId(?string $value ): void {
        $this->mdmAppId = $value;
    }

    /**
     * Sets the memberOf property value. Groups and administrative units that this device is a member of. Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value ): void {
        $this->memberOf = $value;
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. The last time at which the object was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Read-only. Supports $filter (eq, ne, not, ge, le, in).
     *  @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value ): void {
        $this->onPremisesLastSyncDateTime = $value;
    }

    /**
     * Sets the onPremisesSyncEnabled property value. true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     *  @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value ): void {
        $this->onPremisesSyncEnabled = $value;
    }

    /**
     * Sets the operatingSystem property value. The type of operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value ): void {
        $this->operatingSystem = $value;
    }

    /**
     * Sets the operatingSystemVersion property value. The version of the operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the operatingSystemVersion property.
    */
    public function setOperatingSystemVersion(?string $value ): void {
        $this->operatingSystemVersion = $value;
    }

    /**
     * Sets the physicalIds property value. For internal use only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, and counting empty collections).
     *  @param array<string>|null $value Value to set for the physicalIds property.
    */
    public function setPhysicalIds(?array $value ): void {
        $this->physicalIds = $value;
    }

    /**
     * Sets the profileType property value. The profile type of the device. Possible values: RegisteredDevice (default), SecureVM, Printer, Shared, IoT.
     *  @param string|null $value Value to set for the profileType property.
    */
    public function setProfileType(?string $value ): void {
        $this->profileType = $value;
    }

    /**
     * Sets the registeredOwners property value. The user that cloud joined the device or registered their personal device. The registered owner is set at the time of registration. Currently, there can be only one owner. Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the registeredOwners property.
    */
    public function setRegisteredOwners(?array $value ): void {
        $this->registeredOwners = $value;
    }

    /**
     * Sets the registeredUsers property value. Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the registeredUsers property.
    */
    public function setRegisteredUsers(?array $value ): void {
        $this->registeredUsers = $value;
    }

    /**
     * Sets the systemLabels property value. List of labels applied to the device by the system. Supports $filter (eq when counting empty collections).
     *  @param array<string>|null $value Value to set for the systemLabels property.
    */
    public function setSystemLabels(?array $value ): void {
        $this->systemLabels = $value;
    }

    /**
     * Sets the transitiveMemberOf property value. Groups and administrative units that the device is a member of. This operation is transitive. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the transitiveMemberOf property.
    */
    public function setTransitiveMemberOf(?array $value ): void {
        $this->transitiveMemberOf = $value;
    }

    /**
     * Sets the trustType property value. Type of trust for the joined device. Read-only. Possible values:  Workplace (indicates bring your own personal devices), AzureAd (Cloud only joined devices), ServerAd (on-premises domain joined devices joined to Azure AD). For more details, see Introduction to device management in Azure Active Directory
     *  @param string|null $value Value to set for the trustType property.
    */
    public function setTrustType(?string $value ): void {
        $this->trustType = $value;
    }

}
