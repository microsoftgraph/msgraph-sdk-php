<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class FileStorageContainerTypeRegistration extends Entity implements Parsable 
{
    /**
     * Instantiates a new FileStorageContainerTypeRegistration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileStorageContainerTypeRegistration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileStorageContainerTypeRegistration {
        return new FileStorageContainerTypeRegistration();
    }

    /**
     * Gets the applicationPermissionGrants property value. Access privileges of applications on containers.
     * @return array<FileStorageContainerTypeAppPermissionGrant>|null
    */
    public function getApplicationPermissionGrants(): ?array {
        $val = $this->getBackingStore()->get('applicationPermissionGrants');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FileStorageContainerTypeAppPermissionGrant::class);
            /** @var array<FileStorageContainerTypeAppPermissionGrant>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationPermissionGrants'");
    }

    /**
     * Gets the billingClassification property value. The billingClassification property
     * @return FileStorageContainerBillingClassification|null
    */
    public function getBillingClassification(): ?FileStorageContainerBillingClassification {
        $val = $this->getBackingStore()->get('billingClassification');
        if (is_null($val) || $val instanceof FileStorageContainerBillingClassification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'billingClassification'");
    }

    /**
     * Gets the billingStatus property value. The billingStatus property
     * @return FileStorageContainerBillingStatus|null
    */
    public function getBillingStatus(): ?FileStorageContainerBillingStatus {
        $val = $this->getBackingStore()->get('billingStatus');
        if (is_null($val) || $val instanceof FileStorageContainerBillingStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'billingStatus'");
    }

    /**
     * Gets the etag property value. Used in update scenarios for optimistic concurrency control. Read-only.
     * @return string|null
    */
    public function getEtag(): ?string {
        $val = $this->getBackingStore()->get('etag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'etag'");
    }

    /**
     * Gets the expirationDateTime property value. The expiration date. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationPermissionGrants' => fn(ParseNode $n) => $o->setApplicationPermissionGrants($n->getCollectionOfObjectValues([FileStorageContainerTypeAppPermissionGrant::class, 'createFromDiscriminatorValue'])),
            'billingClassification' => fn(ParseNode $n) => $o->setBillingClassification($n->getEnumValue(FileStorageContainerBillingClassification::class)),
            'billingStatus' => fn(ParseNode $n) => $o->setBillingStatus($n->getEnumValue(FileStorageContainerBillingStatus::class)),
            'etag' => fn(ParseNode $n) => $o->setEtag($n->getStringValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'owningAppId' => fn(ParseNode $n) => $o->setOwningAppId($n->getStringValue()),
            'registeredDateTime' => fn(ParseNode $n) => $o->setRegisteredDateTime($n->getDateTimeValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([FileStorageContainerTypeRegistrationSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the name property value. The name of the fileStorageContainerTypeRegistration. Read-only.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the owningAppId property value. ID of the application that owns the fileStorageContainerType. Read-only.
     * @return string|null
    */
    public function getOwningAppId(): ?string {
        $val = $this->getBackingStore()->get('owningAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owningAppId'");
    }

    /**
     * Gets the registeredDateTime property value. The registration date. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getRegisteredDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('registeredDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registeredDateTime'");
    }

    /**
     * Gets the settings property value. The settings property
     * @return FileStorageContainerTypeRegistrationSettings|null
    */
    public function getSettings(): ?FileStorageContainerTypeRegistrationSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof FileStorageContainerTypeRegistrationSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('applicationPermissionGrants', $this->getApplicationPermissionGrants());
        $writer->writeEnumValue('billingClassification', $this->getBillingClassification());
        $writer->writeEnumValue('billingStatus', $this->getBillingStatus());
        $writer->writeStringValue('etag', $this->getEtag());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('owningAppId', $this->getOwningAppId());
        $writer->writeDateTimeValue('registeredDateTime', $this->getRegisteredDateTime());
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the applicationPermissionGrants property value. Access privileges of applications on containers.
     * @param array<FileStorageContainerTypeAppPermissionGrant>|null $value Value to set for the applicationPermissionGrants property.
    */
    public function setApplicationPermissionGrants(?array $value): void {
        $this->getBackingStore()->set('applicationPermissionGrants', $value);
    }

    /**
     * Sets the billingClassification property value. The billingClassification property
     * @param FileStorageContainerBillingClassification|null $value Value to set for the billingClassification property.
    */
    public function setBillingClassification(?FileStorageContainerBillingClassification $value): void {
        $this->getBackingStore()->set('billingClassification', $value);
    }

    /**
     * Sets the billingStatus property value. The billingStatus property
     * @param FileStorageContainerBillingStatus|null $value Value to set for the billingStatus property.
    */
    public function setBillingStatus(?FileStorageContainerBillingStatus $value): void {
        $this->getBackingStore()->set('billingStatus', $value);
    }

    /**
     * Sets the etag property value. Used in update scenarios for optimistic concurrency control. Read-only.
     * @param string|null $value Value to set for the etag property.
    */
    public function setEtag(?string $value): void {
        $this->getBackingStore()->set('etag', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expiration date. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the name property value. The name of the fileStorageContainerTypeRegistration. Read-only.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the owningAppId property value. ID of the application that owns the fileStorageContainerType. Read-only.
     * @param string|null $value Value to set for the owningAppId property.
    */
    public function setOwningAppId(?string $value): void {
        $this->getBackingStore()->set('owningAppId', $value);
    }

    /**
     * Sets the registeredDateTime property value. The registration date. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the registeredDateTime property.
    */
    public function setRegisteredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('registeredDateTime', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param FileStorageContainerTypeRegistrationSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?FileStorageContainerTypeRegistrationSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
