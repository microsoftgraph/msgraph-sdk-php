<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileStorageContainerType extends Entity implements Parsable 
{
    /**
     * Instantiates a new FileStorageContainerType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileStorageContainerType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileStorageContainerType {
        return new FileStorageContainerType();
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
     * Gets the createdDateTime property value. The creation date. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
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
            'billingClassification' => fn(ParseNode $n) => $o->setBillingClassification($n->getEnumValue(FileStorageContainerBillingClassification::class)),
            'billingStatus' => fn(ParseNode $n) => $o->setBillingStatus($n->getEnumValue(FileStorageContainerBillingStatus::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'etag' => fn(ParseNode $n) => $o->setEtag($n->getStringValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'owningAppId' => fn(ParseNode $n) => $o->setOwningAppId($n->getStringValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([FileStorageContainerTypeSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the name property value. The name of the fileStorageContainerType.
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
     * Gets the owningAppId property value. ID of the application that owns the fileStorageContainerType.
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
     * Gets the settings property value. The settings property
     * @return FileStorageContainerTypeSettings|null
    */
    public function getSettings(): ?FileStorageContainerTypeSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof FileStorageContainerTypeSettings) {
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
        $writer->writeEnumValue('billingClassification', $this->getBillingClassification());
        $writer->writeEnumValue('billingStatus', $this->getBillingStatus());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('etag', $this->getEtag());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('owningAppId', $this->getOwningAppId());
        $writer->writeObjectValue('settings', $this->getSettings());
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
     * Sets the createdDateTime property value. The creation date. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
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
     * Sets the name property value. The name of the fileStorageContainerType.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the owningAppId property value. ID of the application that owns the fileStorageContainerType.
     * @param string|null $value Value to set for the owningAppId property.
    */
    public function setOwningAppId(?string $value): void {
        $this->getBackingStore()->set('owningAppId', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param FileStorageContainerTypeSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?FileStorageContainerTypeSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
