<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SubjectRightsRequest extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new subjectRightsRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubjectRightsRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubjectRightsRequest {
        return new SubjectRightsRequest();
    }

    /**
     * Gets the assignedTo property value. Identity that the request is assigned to.
     * @return Identity|null
    */
    public function getAssignedTo(): ?Identity {
        $val = $this->getBackingStore()->get('assignedTo');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTo'");
    }

    /**
     * Gets the closedDateTime property value. The date and time when the request was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getClosedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('closedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'closedDateTime'");
    }

    /**
     * Gets the createdBy property value. Identity information for the entity that created the request.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the request was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the dataSubject property value. Information about the data subject.
     * @return DataSubject|null
    */
    public function getDataSubject(): ?DataSubject {
        $val = $this->getBackingStore()->get('dataSubject');
        if (is_null($val) || $val instanceof DataSubject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataSubject'");
    }

    /**
     * Gets the dataSubjectType property value. The type of the data subject. Possible values are: customer, currentEmployee, formerEmployee, prospectiveEmployee, student, teacher, faculty, other, unknownFutureValue.
     * @return DataSubjectType|null
    */
    public function getDataSubjectType(): ?DataSubjectType {
        $val = $this->getBackingStore()->get('dataSubjectType');
        if (is_null($val) || $val instanceof DataSubjectType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataSubjectType'");
    }

    /**
     * Gets the description property value. Description for the request.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The name of the request.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'closedDateTime' => fn(ParseNode $n) => $o->setClosedDateTime($n->getDateTimeValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'dataSubject' => fn(ParseNode $n) => $o->setDataSubject($n->getObjectValue([DataSubject::class, 'createFromDiscriminatorValue'])),
            'dataSubjectType' => fn(ParseNode $n) => $o->setDataSubjectType($n->getEnumValue(DataSubjectType::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'history' => fn(ParseNode $n) => $o->setHistory($n->getCollectionOfObjectValues([SubjectRightsRequestHistory::class, 'createFromDiscriminatorValue'])),
            'insight' => fn(ParseNode $n) => $o->setInsight($n->getObjectValue([SubjectRightsRequestDetail::class, 'createFromDiscriminatorValue'])),
            'internalDueDateTime' => fn(ParseNode $n) => $o->setInternalDueDateTime($n->getDateTimeValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getCollectionOfObjectValues([AuthoredNote::class, 'createFromDiscriminatorValue'])),
            'regulations' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRegulations($val);
            },
            'stages' => fn(ParseNode $n) => $o->setStages($n->getCollectionOfObjectValues([SubjectRightsRequestStageDetail::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SubjectRightsRequestStatus::class)),
            'team' => fn(ParseNode $n) => $o->setTeam($n->getObjectValue([Team::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(SubjectRightsRequestType::class)),
        ]);
    }

    /**
     * Gets the history property value. Collection of history change events.
     * @return array<SubjectRightsRequestHistory>|null
    */
    public function getHistory(): ?array {
        $val = $this->getBackingStore()->get('history');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SubjectRightsRequestHistory::class);
            /** @var array<SubjectRightsRequestHistory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'history'");
    }

    /**
     * Gets the insight property value. Insight about the request.
     * @return SubjectRightsRequestDetail|null
    */
    public function getInsight(): ?SubjectRightsRequestDetail {
        $val = $this->getBackingStore()->get('insight');
        if (is_null($val) || $val instanceof SubjectRightsRequestDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'insight'");
    }

    /**
     * Gets the internalDueDateTime property value. The date and time when the request is internally due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getInternalDueDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('internalDueDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internalDueDateTime'");
    }

    /**
     * Gets the lastModifiedBy property value. Identity information for the entity that last modified the request.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the request was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the notes property value. List of notes associcated with the request.
     * @return array<AuthoredNote>|null
    */
    public function getNotes(): ?array {
        $val = $this->getBackingStore()->get('notes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthoredNote::class);
            /** @var array<AuthoredNote>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
    }

    /**
     * Gets the regulations property value. List of regulations that this request will fulfill.
     * @return array<string>|null
    */
    public function getRegulations(): ?array {
        $val = $this->getBackingStore()->get('regulations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regulations'");
    }

    /**
     * Gets the stages property value. Information about the different stages for the request.
     * @return array<SubjectRightsRequestStageDetail>|null
    */
    public function getStages(): ?array {
        $val = $this->getBackingStore()->get('stages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SubjectRightsRequestStageDetail::class);
            /** @var array<SubjectRightsRequestStageDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stages'");
    }

    /**
     * Gets the status property value. The status of the request.. Possible values are: active, closed, unknownFutureValue.
     * @return SubjectRightsRequestStatus|null
    */
    public function getStatus(): ?SubjectRightsRequestStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SubjectRightsRequestStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the team property value. Information about the Microsoft Teams team that was created for the request.
     * @return Team|null
    */
    public function getTeam(): ?Team {
        $val = $this->getBackingStore()->get('team');
        if (is_null($val) || $val instanceof Team) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'team'");
    }

    /**
     * Gets the type property value. The type of the request. Possible values are: export, delete,  access, tagForAction, unknownFutureValue.
     * @return SubjectRightsRequestType|null
    */
    public function getType(): ?SubjectRightsRequestType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof SubjectRightsRequestType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('assignedTo', $this->getAssignedTo());
        $writer->writeDateTimeValue('closedDateTime', $this->getClosedDateTime());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('dataSubject', $this->getDataSubject());
        $writer->writeEnumValue('dataSubjectType', $this->getDataSubjectType());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('history', $this->getHistory());
        $writer->writeObjectValue('insight', $this->getInsight());
        $writer->writeDateTimeValue('internalDueDateTime', $this->getInternalDueDateTime());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('notes', $this->getNotes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('regulations', $this->getRegulations());
        $writer->writeCollectionOfObjectValues('stages', $this->getStages());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeObjectValue('team', $this->getTeam());
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the assignedTo property value. Identity that the request is assigned to.
     * @param Identity|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?Identity $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the closedDateTime property value. The date and time when the request was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the closedDateTime property.
    */
    public function setClosedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('closedDateTime', $value);
    }

    /**
     * Sets the createdBy property value. Identity information for the entity that created the request.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the request was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the dataSubject property value. Information about the data subject.
     * @param DataSubject|null $value Value to set for the dataSubject property.
    */
    public function setDataSubject(?DataSubject $value): void {
        $this->getBackingStore()->set('dataSubject', $value);
    }

    /**
     * Sets the dataSubjectType property value. The type of the data subject. Possible values are: customer, currentEmployee, formerEmployee, prospectiveEmployee, student, teacher, faculty, other, unknownFutureValue.
     * @param DataSubjectType|null $value Value to set for the dataSubjectType property.
    */
    public function setDataSubjectType(?DataSubjectType $value): void {
        $this->getBackingStore()->set('dataSubjectType', $value);
    }

    /**
     * Sets the description property value. Description for the request.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of the request.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the history property value. Collection of history change events.
     * @param array<SubjectRightsRequestHistory>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value): void {
        $this->getBackingStore()->set('history', $value);
    }

    /**
     * Sets the insight property value. Insight about the request.
     * @param SubjectRightsRequestDetail|null $value Value to set for the insight property.
    */
    public function setInsight(?SubjectRightsRequestDetail $value): void {
        $this->getBackingStore()->set('insight', $value);
    }

    /**
     * Sets the internalDueDateTime property value. The date and time when the request is internally due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the internalDueDateTime property.
    */
    public function setInternalDueDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('internalDueDateTime', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity information for the entity that last modified the request.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the request was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the notes property value. List of notes associcated with the request.
     * @param array<AuthoredNote>|null $value Value to set for the notes property.
    */
    public function setNotes(?array $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the regulations property value. List of regulations that this request will fulfill.
     * @param array<string>|null $value Value to set for the regulations property.
    */
    public function setRegulations(?array $value): void {
        $this->getBackingStore()->set('regulations', $value);
    }

    /**
     * Sets the stages property value. Information about the different stages for the request.
     * @param array<SubjectRightsRequestStageDetail>|null $value Value to set for the stages property.
    */
    public function setStages(?array $value): void {
        $this->getBackingStore()->set('stages', $value);
    }

    /**
     * Sets the status property value. The status of the request.. Possible values are: active, closed, unknownFutureValue.
     * @param SubjectRightsRequestStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SubjectRightsRequestStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the team property value. Information about the Microsoft Teams team that was created for the request.
     * @param Team|null $value Value to set for the team property.
    */
    public function setTeam(?Team $value): void {
        $this->getBackingStore()->set('team', $value);
    }

    /**
     * Sets the type property value. The type of the request. Possible values are: export, delete,  access, tagForAction, unknownFutureValue.
     * @param SubjectRightsRequestType|null $value Value to set for the type property.
    */
    public function setType(?SubjectRightsRequestType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
