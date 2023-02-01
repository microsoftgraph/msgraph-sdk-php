<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminAccessAssignment extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('accessContainer');
    }

    /**
     * Gets the accessDetails property value. The accessDetails property
     * @return DelegatedAdminAccessDetails|null
    */
    public function getAccessDetails(): ?DelegatedAdminAccessDetails {
        return $this->getBackingStore()->get('accessDetails');
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the status property value. The status property
     * @return DelegatedAdminAccessAssignmentStatus|null
    */
    public function getStatus(): ?DelegatedAdminAccessAssignmentStatus {
        return $this->getBackingStore()->get('status');
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
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param DelegatedAdminAccessAssignmentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DelegatedAdminAccessAssignmentStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
