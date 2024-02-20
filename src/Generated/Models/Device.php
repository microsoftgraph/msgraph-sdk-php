<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Device extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new Device and sets the default values.
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
        $val = $this->getBackingStore()->get('accountEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountEnabled'");
    }

    /**
     * Gets the alternativeSecurityIds property value. For internal use only. Not nullable. Supports $filter (eq, not, ge, le).
     * @return array<AlternativeSecurityId>|null
    */
    public function getAlternativeSecurityIds(): ?array {
        $val = $this->getBackingStore()->get('alternativeSecurityIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AlternativeSecurityId::class);
            /** @var array<AlternativeSecurityId>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alternativeSecurityIds'");
    }

    /**
     * Gets the approximateLastSignInDateTime property value. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, and eq on null values) and $orderby.
     * @return DateTime|null
    */
    public function getApproximateLastSignInDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('approximateLastSignInDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approximateLastSignInDateTime'");
    }

    /**
     * Gets the complianceExpirationDateTime property value. The timestamp when the device is no longer deemed compliant. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getComplianceExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('complianceExpirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceExpirationDateTime'");
    }

    /**
     * Gets the deviceCategory property value. User-defined property set by Intune to automatically add devices to groups and simplify managing devices.
     * @return string|null
    */
    public function getDeviceCategory(): ?string {
        $val = $this->getBackingStore()->get('deviceCategory');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCategory'");
    }

    /**
     * Gets the deviceId property value. Unique identifier set by Azure Device Registration Service at the time of registration. This is an alternate key that can be used to reference the device object. Supports $filter (eq, ne, not, startsWith).
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the deviceMetadata property value. For internal use only. Set to null.
     * @return string|null
    */
    public function getDeviceMetadata(): ?string {
        $val = $this->getBackingStore()->get('deviceMetadata');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceMetadata'");
    }

    /**
     * Gets the deviceOwnership property value. Ownership of the device. This property is set by Intune. Possible values are: unknown, company, personal.
     * @return string|null
    */
    public function getDeviceOwnership(): ?string {
        $val = $this->getBackingStore()->get('deviceOwnership');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceOwnership'");
    }

    /**
     * Gets the deviceVersion property value. For internal use only.
     * @return int|null
    */
    public function getDeviceVersion(): ?int {
        $val = $this->getBackingStore()->get('deviceVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceVersion'");
    }

    /**
     * Gets the displayName property value. The display name for the device. Required. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the enrollmentProfileName property value. Enrollment profile applied to the device. For example, Apple Device Enrollment Profile, Device enrollment - Corporate device identifiers, or Windows Autopilot profile name. This property is set by Intune.
     * @return string|null
    */
    public function getEnrollmentProfileName(): ?string {
        $val = $this->getBackingStore()->get('enrollmentProfileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentProfileName'");
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the device. Read-only. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        $val = $this->getBackingStore()->get('extensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Extension::class);
            /** @var array<Extension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountEnabled' => fn(ParseNode $n) => $o->setAccountEnabled($n->getBooleanValue()),
            'alternativeSecurityIds' => fn(ParseNode $n) => $o->setAlternativeSecurityIds($n->getCollectionOfObjectValues([AlternativeSecurityId::class, 'createFromDiscriminatorValue'])),
            'approximateLastSignInDateTime' => fn(ParseNode $n) => $o->setApproximateLastSignInDateTime($n->getDateTimeValue()),
            'complianceExpirationDateTime' => fn(ParseNode $n) => $o->setComplianceExpirationDateTime($n->getDateTimeValue()),
            'deviceCategory' => fn(ParseNode $n) => $o->setDeviceCategory($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceMetadata' => fn(ParseNode $n) => $o->setDeviceMetadata($n->getStringValue()),
            'deviceOwnership' => fn(ParseNode $n) => $o->setDeviceOwnership($n->getStringValue()),
            'deviceVersion' => fn(ParseNode $n) => $o->setDeviceVersion($n->getIntegerValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enrollmentProfileName' => fn(ParseNode $n) => $o->setEnrollmentProfileName($n->getStringValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'isCompliant' => fn(ParseNode $n) => $o->setIsCompliant($n->getBooleanValue()),
            'isManaged' => fn(ParseNode $n) => $o->setIsManaged($n->getBooleanValue()),
            'mdmAppId' => fn(ParseNode $n) => $o->setMdmAppId($n->getStringValue()),
            'memberOf' => fn(ParseNode $n) => $o->setMemberOf($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'onPremisesLastSyncDateTime' => fn(ParseNode $n) => $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()),
            'onPremisesSecurityIdentifier' => fn(ParseNode $n) => $o->setOnPremisesSecurityIdentifier($n->getStringValue()),
            'onPremisesSyncEnabled' => fn(ParseNode $n) => $o->setOnPremisesSyncEnabled($n->getBooleanValue()),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'operatingSystemVersion' => fn(ParseNode $n) => $o->setOperatingSystemVersion($n->getStringValue()),
            'physicalIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPhysicalIds($val);
            },
            'profileType' => fn(ParseNode $n) => $o->setProfileType($n->getStringValue()),
            'registeredOwners' => fn(ParseNode $n) => $o->setRegisteredOwners($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'registeredUsers' => fn(ParseNode $n) => $o->setRegisteredUsers($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'registrationDateTime' => fn(ParseNode $n) => $o->setRegistrationDateTime($n->getDateTimeValue()),
            'systemLabels' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSystemLabels($val);
            },
            'transitiveMemberOf' => fn(ParseNode $n) => $o->setTransitiveMemberOf($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'trustType' => fn(ParseNode $n) => $o->setTrustType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isCompliant property value. true if the device complies with Mobile Device Management (MDM) policies; otherwise, false. Read-only. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
     * @return bool|null
    */
    public function getIsCompliant(): ?bool {
        $val = $this->getBackingStore()->get('isCompliant');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCompliant'");
    }

    /**
     * Gets the isManaged property value. true if the device is managed by a Mobile Device Management (MDM) app; otherwise, false. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
     * @return bool|null
    */
    public function getIsManaged(): ?bool {
        $val = $this->getBackingStore()->get('isManaged');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isManaged'");
    }

    /**
     * Gets the mdmAppId property value. Application identifier used to register device into MDM. Read-only. Supports $filter (eq, ne, not, startsWith).
     * @return string|null
    */
    public function getMdmAppId(): ?string {
        $val = $this->getBackingStore()->get('mdmAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mdmAppId'");
    }

    /**
     * Gets the memberOf property value. Groups and administrative units that this device is a member of. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getMemberOf(): ?array {
        $val = $this->getBackingStore()->get('memberOf');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberOf'");
    }

    /**
     * Gets the onPremisesLastSyncDateTime property value. The last time at which the object was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Read-only. Supports $filter (eq, ne, not, ge, le, in).
     * @return DateTime|null
    */
    public function getOnPremisesLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('onPremisesLastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesLastSyncDateTime'");
    }

    /**
     * Gets the onPremisesSecurityIdentifier property value. The onPremisesSecurityIdentifier property
     * @return string|null
    */
    public function getOnPremisesSecurityIdentifier(): ?string {
        $val = $this->getBackingStore()->get('onPremisesSecurityIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesSecurityIdentifier'");
    }

    /**
     * Gets the onPremisesSyncEnabled property value. true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     * @return bool|null
    */
    public function getOnPremisesSyncEnabled(): ?bool {
        $val = $this->getBackingStore()->get('onPremisesSyncEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesSyncEnabled'");
    }

    /**
     * Gets the operatingSystem property value. The type of operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        $val = $this->getBackingStore()->get('operatingSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystem'");
    }

    /**
     * Gets the operatingSystemVersion property value. The version of the operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
     * @return string|null
    */
    public function getOperatingSystemVersion(): ?string {
        $val = $this->getBackingStore()->get('operatingSystemVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystemVersion'");
    }

    /**
     * Gets the physicalIds property value. For internal use only. Not nullable. Supports $filter (eq, not, ge, le, startsWith,/$count eq 0, /$count ne 0).
     * @return array<string>|null
    */
    public function getPhysicalIds(): ?array {
        $val = $this->getBackingStore()->get('physicalIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'physicalIds'");
    }

    /**
     * Gets the profileType property value. The profile type of the device. Possible values: RegisteredDevice (default), SecureVM, Printer, Shared, IoT.
     * @return string|null
    */
    public function getProfileType(): ?string {
        $val = $this->getBackingStore()->get('profileType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileType'");
    }

    /**
     * Gets the registeredOwners property value. The user that cloud joined the device or registered their personal device. The registered owner is set at the time of registration. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getRegisteredOwners(): ?array {
        $val = $this->getBackingStore()->get('registeredOwners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registeredOwners'");
    }

    /**
     * Gets the registeredUsers property value. Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getRegisteredUsers(): ?array {
        $val = $this->getBackingStore()->get('registeredUsers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registeredUsers'");
    }

    /**
     * Gets the registrationDateTime property value. Date and time of when the device was registered. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getRegistrationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('registrationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationDateTime'");
    }

    /**
     * Gets the systemLabels property value. List of labels applied to the device by the system. Supports $filter (/$count eq 0, /$count ne 0).
     * @return array<string>|null
    */
    public function getSystemLabels(): ?array {
        $val = $this->getBackingStore()->get('systemLabels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemLabels'");
    }

    /**
     * Gets the transitiveMemberOf property value. Groups and administrative units that the device is a member of. This operation is transitive. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMemberOf(): ?array {
        $val = $this->getBackingStore()->get('transitiveMemberOf');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transitiveMemberOf'");
    }

    /**
     * Gets the trustType property value. Type of trust for the joined device. Read-only. Possible values:  Workplace (indicates bring your own personal devices), AzureAd (Cloud only joined devices), ServerAd (on-premises domain joined devices joined to Microsoft Entra ID). For more details, see Introduction to device management in Microsoft Entra ID.
     * @return string|null
    */
    public function getTrustType(): ?string {
        $val = $this->getBackingStore()->get('trustType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trustType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountEnabled', $this->getAccountEnabled());
        $writer->writeCollectionOfObjectValues('alternativeSecurityIds', $this->getAlternativeSecurityIds());
        $writer->writeDateTimeValue('approximateLastSignInDateTime', $this->getApproximateLastSignInDateTime());
        $writer->writeDateTimeValue('complianceExpirationDateTime', $this->getComplianceExpirationDateTime());
        $writer->writeStringValue('deviceCategory', $this->getDeviceCategory());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceMetadata', $this->getDeviceMetadata());
        $writer->writeStringValue('deviceOwnership', $this->getDeviceOwnership());
        $writer->writeIntegerValue('deviceVersion', $this->getDeviceVersion());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('enrollmentProfileName', $this->getEnrollmentProfileName());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeBooleanValue('isCompliant', $this->getIsCompliant());
        $writer->writeBooleanValue('isManaged', $this->getIsManaged());
        $writer->writeStringValue('mdmAppId', $this->getMdmAppId());
        $writer->writeCollectionOfObjectValues('memberOf', $this->getMemberOf());
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->getOnPremisesLastSyncDateTime());
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->getOnPremisesSecurityIdentifier());
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->getOnPremisesSyncEnabled());
        $writer->writeStringValue('operatingSystem', $this->getOperatingSystem());
        $writer->writeStringValue('operatingSystemVersion', $this->getOperatingSystemVersion());
        $writer->writeCollectionOfPrimitiveValues('physicalIds', $this->getPhysicalIds());
        $writer->writeStringValue('profileType', $this->getProfileType());
        $writer->writeCollectionOfObjectValues('registeredOwners', $this->getRegisteredOwners());
        $writer->writeCollectionOfObjectValues('registeredUsers', $this->getRegisteredUsers());
        $writer->writeDateTimeValue('registrationDateTime', $this->getRegistrationDateTime());
        $writer->writeCollectionOfPrimitiveValues('systemLabels', $this->getSystemLabels());
        $writer->writeCollectionOfObjectValues('transitiveMemberOf', $this->getTransitiveMemberOf());
        $writer->writeStringValue('trustType', $this->getTrustType());
    }

    /**
     * Sets the accountEnabled property value. true if the account is enabled; otherwise, false. Required. Default is true.  Supports $filter (eq, ne, not, in). Only callers in Global Administrator and Cloud Device Administrator roles can set this property.
     * @param bool|null $value Value to set for the accountEnabled property.
    */
    public function setAccountEnabled(?bool $value): void {
        $this->getBackingStore()->set('accountEnabled', $value);
    }

    /**
     * Sets the alternativeSecurityIds property value. For internal use only. Not nullable. Supports $filter (eq, not, ge, le).
     * @param array<AlternativeSecurityId>|null $value Value to set for the alternativeSecurityIds property.
    */
    public function setAlternativeSecurityIds(?array $value): void {
        $this->getBackingStore()->set('alternativeSecurityIds', $value);
    }

    /**
     * Sets the approximateLastSignInDateTime property value. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, and eq on null values) and $orderby.
     * @param DateTime|null $value Value to set for the approximateLastSignInDateTime property.
    */
    public function setApproximateLastSignInDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('approximateLastSignInDateTime', $value);
    }

    /**
     * Sets the complianceExpirationDateTime property value. The timestamp when the device is no longer deemed compliant. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the complianceExpirationDateTime property.
    */
    public function setComplianceExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('complianceExpirationDateTime', $value);
    }

    /**
     * Sets the deviceCategory property value. User-defined property set by Intune to automatically add devices to groups and simplify managing devices.
     * @param string|null $value Value to set for the deviceCategory property.
    */
    public function setDeviceCategory(?string $value): void {
        $this->getBackingStore()->set('deviceCategory', $value);
    }

    /**
     * Sets the deviceId property value. Unique identifier set by Azure Device Registration Service at the time of registration. This is an alternate key that can be used to reference the device object. Supports $filter (eq, ne, not, startsWith).
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceMetadata property value. For internal use only. Set to null.
     * @param string|null $value Value to set for the deviceMetadata property.
    */
    public function setDeviceMetadata(?string $value): void {
        $this->getBackingStore()->set('deviceMetadata', $value);
    }

    /**
     * Sets the deviceOwnership property value. Ownership of the device. This property is set by Intune. Possible values are: unknown, company, personal.
     * @param string|null $value Value to set for the deviceOwnership property.
    */
    public function setDeviceOwnership(?string $value): void {
        $this->getBackingStore()->set('deviceOwnership', $value);
    }

    /**
     * Sets the deviceVersion property value. For internal use only.
     * @param int|null $value Value to set for the deviceVersion property.
    */
    public function setDeviceVersion(?int $value): void {
        $this->getBackingStore()->set('deviceVersion', $value);
    }

    /**
     * Sets the displayName property value. The display name for the device. Required. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enrollmentProfileName property value. Enrollment profile applied to the device. For example, Apple Device Enrollment Profile, Device enrollment - Corporate device identifiers, or Windows Autopilot profile name. This property is set by Intune.
     * @param string|null $value Value to set for the enrollmentProfileName property.
    */
    public function setEnrollmentProfileName(?string $value): void {
        $this->getBackingStore()->set('enrollmentProfileName', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the device. Read-only. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the isCompliant property value. true if the device complies with Mobile Device Management (MDM) policies; otherwise, false. Read-only. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
     * @param bool|null $value Value to set for the isCompliant property.
    */
    public function setIsCompliant(?bool $value): void {
        $this->getBackingStore()->set('isCompliant', $value);
    }

    /**
     * Sets the isManaged property value. true if the device is managed by a Mobile Device Management (MDM) app; otherwise, false. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
     * @param bool|null $value Value to set for the isManaged property.
    */
    public function setIsManaged(?bool $value): void {
        $this->getBackingStore()->set('isManaged', $value);
    }

    /**
     * Sets the mdmAppId property value. Application identifier used to register device into MDM. Read-only. Supports $filter (eq, ne, not, startsWith).
     * @param string|null $value Value to set for the mdmAppId property.
    */
    public function setMdmAppId(?string $value): void {
        $this->getBackingStore()->set('mdmAppId', $value);
    }

    /**
     * Sets the memberOf property value. Groups and administrative units that this device is a member of. Read-only. Nullable. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value): void {
        $this->getBackingStore()->set('memberOf', $value);
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. The last time at which the object was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Read-only. Supports $filter (eq, ne, not, ge, le, in).
     * @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('onPremisesLastSyncDateTime', $value);
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. The onPremisesSecurityIdentifier property
     * @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value): void {
        $this->getBackingStore()->set('onPremisesSecurityIdentifier', $value);
    }

    /**
     * Sets the onPremisesSyncEnabled property value. true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     * @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value): void {
        $this->getBackingStore()->set('onPremisesSyncEnabled', $value);
    }

    /**
     * Sets the operatingSystem property value. The type of operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
     * @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the operatingSystemVersion property value. The version of the operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
     * @param string|null $value Value to set for the operatingSystemVersion property.
    */
    public function setOperatingSystemVersion(?string $value): void {
        $this->getBackingStore()->set('operatingSystemVersion', $value);
    }

    /**
     * Sets the physicalIds property value. For internal use only. Not nullable. Supports $filter (eq, not, ge, le, startsWith,/$count eq 0, /$count ne 0).
     * @param array<string>|null $value Value to set for the physicalIds property.
    */
    public function setPhysicalIds(?array $value): void {
        $this->getBackingStore()->set('physicalIds', $value);
    }

    /**
     * Sets the profileType property value. The profile type of the device. Possible values: RegisteredDevice (default), SecureVM, Printer, Shared, IoT.
     * @param string|null $value Value to set for the profileType property.
    */
    public function setProfileType(?string $value): void {
        $this->getBackingStore()->set('profileType', $value);
    }

    /**
     * Sets the registeredOwners property value. The user that cloud joined the device or registered their personal device. The registered owner is set at the time of registration. Read-only. Nullable. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the registeredOwners property.
    */
    public function setRegisteredOwners(?array $value): void {
        $this->getBackingStore()->set('registeredOwners', $value);
    }

    /**
     * Sets the registeredUsers property value. Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the registeredUsers property.
    */
    public function setRegisteredUsers(?array $value): void {
        $this->getBackingStore()->set('registeredUsers', $value);
    }

    /**
     * Sets the registrationDateTime property value. Date and time of when the device was registered. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the registrationDateTime property.
    */
    public function setRegistrationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('registrationDateTime', $value);
    }

    /**
     * Sets the systemLabels property value. List of labels applied to the device by the system. Supports $filter (/$count eq 0, /$count ne 0).
     * @param array<string>|null $value Value to set for the systemLabels property.
    */
    public function setSystemLabels(?array $value): void {
        $this->getBackingStore()->set('systemLabels', $value);
    }

    /**
     * Sets the transitiveMemberOf property value. Groups and administrative units that the device is a member of. This operation is transitive. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the transitiveMemberOf property.
    */
    public function setTransitiveMemberOf(?array $value): void {
        $this->getBackingStore()->set('transitiveMemberOf', $value);
    }

    /**
     * Sets the trustType property value. Type of trust for the joined device. Read-only. Possible values:  Workplace (indicates bring your own personal devices), AzureAd (Cloud only joined devices), ServerAd (on-premises domain joined devices joined to Microsoft Entra ID). For more details, see Introduction to device management in Microsoft Entra ID.
     * @param string|null $value Value to set for the trustType property.
    */
    public function setTrustType(?string $value): void {
        $this->getBackingStore()->set('trustType', $value);
    }

}
