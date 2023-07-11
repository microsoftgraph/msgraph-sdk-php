<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminAccessAssignment extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new delegatedAdminAccessAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminAccessAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminAccessAssignment {
        return new DelegatedAdminAccessAssignment();
    }

    /**
     * Gets the accessContainer property value. The accessContainer property
     * @return DelegatedAdminAccessContainer|null
    */
    public function getAccessContainer(): ?DelegatedAdminAccessContainer {
        $val = $this->getBackingStore()->get('accessContainer');
        if (is_null($val) || $val instanceof DelegatedAdminAccessContainer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessContainer'");
    }

    /**
     * Gets the accessDetails property value. The accessDetails property
     * @return DelegatedAdminAccessDetails|null
    */
    public function getAccessDetails(): ?DelegatedAdminAccessDetails {
        $val = $this->getBackingStore()->get('accessDetails');
        if (is_null($val) || $val instanceof DelegatedAdminAccessDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessDetails'");
    }

    /**
     * Gets the createdDateTime property value. The date and time in ISO 8601 format and in UTC time when the access assignment was created. Read-only.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessContainer' => fn(ParseNode $n) => $o->setAccessContainer($n->getObjectValue([DelegatedAdminAccessContainer::class, 'createFromDiscriminatorValue'])),
            'accessDetails' => fn(ParseNode $n) => $o->setAccessDetails($n->getObjectValue([DelegatedAdminAccessDetails::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DelegatedAdminAccessAssignmentStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time in ISO 8601 and in UTC time when this access assignment was last modified. Read-only.
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
     * Gets the status property value. The status of the access assignment. Read-only. The possible values are: pending, active, deleting, deleted, error, unknownFutureValue.
     * @return DelegatedAdminAccessAssignmentStatus|null
    */
    public function getStatus(): ?DelegatedAdminAccessAssignmentStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof DelegatedAdminAccessAssignmentStatus) {
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
        $writer->writeObjectValue('accessContainer', $this->getAccessContainer());
        $writer->writeObjectValue('accessDetails', $this->getAccessDetails());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the accessContainer property value. The accessContainer property
     * @param DelegatedAdminAccessContainer|null $value Value to set for the accessContainer property.
    */
    public function setAccessContainer(?DelegatedAdminAccessContainer $value): void {
        $this->getBackingStore()->set('accessContainer', $value);
    }

    /**
     * Sets the accessDetails property value. The accessDetails property
     * @param DelegatedAdminAccessDetails|null $value Value to set for the accessDetails property.
    */
    public function setAccessDetails(?DelegatedAdminAccessDetails $value): void {
        $this->getBackingStore()->set('accessDetails', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time in ISO 8601 format and in UTC time when the access assignment was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time in ISO 8601 and in UTC time when this access assignment was last modified. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the status property value. The status of the access assignment. Read-only. The possible values are: pending, active, deleting, deleted, error, unknownFutureValue.
     * @param DelegatedAdminAccessAssignmentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DelegatedAdminAccessAssignmentStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
