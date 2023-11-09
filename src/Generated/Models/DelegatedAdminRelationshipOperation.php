<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminRelationshipOperation extends Entity implements Parsable 
{
    /**
     * Instantiates a new delegatedAdminRelationshipOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminRelationshipOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminRelationshipOperation {
        return new DelegatedAdminRelationshipOperation();
    }

    /**
     * Gets the createdDateTime property value. The time in ISO 8601 format and in UTC time when the long-running operation was created. Read-only.
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
     * Gets the data property value. The data (payload) for the operation. Read-only.
     * @return string|null
    */
    public function getData(): ?string {
        $val = $this->getBackingStore()->get('data');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'data'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'data' => fn(ParseNode $n) => $o->setData($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'operationType' => fn(ParseNode $n) => $o->setOperationType($n->getEnumValue(DelegatedAdminRelationshipOperationType::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(LongRunningOperationStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The time in ISO 8601 format and in UTC time when the long-running operation was last modified. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the operationType property value. The operationType property
     * @return DelegatedAdminRelationshipOperationType|null
    */
    public function getOperationType(): ?DelegatedAdminRelationshipOperationType {
        $val = $this->getBackingStore()->get('operationType');
        if (is_null($val) || $val instanceof DelegatedAdminRelationshipOperationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationType'");
    }

    /**
     * Gets the status property value. The status property
     * @return LongRunningOperationStatus|null
    */
    public function getStatus(): ?LongRunningOperationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof LongRunningOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('data', $this->getData());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('operationType', $this->getOperationType());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the createdDateTime property value. The time in ISO 8601 format and in UTC time when the long-running operation was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the data property value. The data (payload) for the operation. Read-only.
     * @param string|null $value Value to set for the data property.
    */
    public function setData(?string $value): void {
        $this->getBackingStore()->set('data', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The time in ISO 8601 format and in UTC time when the long-running operation was last modified. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the operationType property value. The operationType property
     * @param DelegatedAdminRelationshipOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?DelegatedAdminRelationshipOperationType $value): void {
        $this->getBackingStore()->set('operationType', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param LongRunningOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?LongRunningOperationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
