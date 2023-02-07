<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminRelationshipRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new delegatedAdminRelationshipRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminRelationshipRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminRelationshipRequest {
        return new DelegatedAdminRelationshipRequest();
    }

    /**
     * Gets the action property value. The action property
     * @return DelegatedAdminRelationshipRequestAction|null
    */
    public function getAction(): ?DelegatedAdminRelationshipRequestAction {
        return $this->getBackingStore()->get('action');
    }

    /**
     * Gets the createdDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship request was created. Read-only.
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
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(DelegatedAdminRelationshipRequestAction::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DelegatedAdminRelationshipRequestStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time in ISO 8601 format and UTC time when this relationship request was last modified. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the status property value. The status of the request. Read-only. The possible values are: created, pending, succeeded, failed, unknownFutureValue.
     * @return DelegatedAdminRelationshipRequestStatus|null
    */
    public function getStatus(): ?DelegatedAdminRelationshipRequestStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the action property value. The action property
     * @param DelegatedAdminRelationshipRequestAction|null $value Value to set for the action property.
    */
    public function setAction(?DelegatedAdminRelationshipRequestAction $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship request was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time in ISO 8601 format and UTC time when this relationship request was last modified. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the status property value. The status of the request. Read-only. The possible values are: created, pending, succeeded, failed, unknownFutureValue.
     * @param DelegatedAdminRelationshipRequestStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DelegatedAdminRelationshipRequestStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
