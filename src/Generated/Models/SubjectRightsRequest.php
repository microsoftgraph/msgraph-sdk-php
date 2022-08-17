<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubjectRightsRequest extends Entity implements Parsable 
{
    /**
     * @var Identity|null $assignedTo Identity that the request is assigned to.
    */
    private ?Identity $assignedTo = null;
    
    /**
     * @var DateTime|null $closedDateTime The date and time when the request was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $closedDateTime = null;
    
    /**
     * @var IdentitySet|null $createdBy Identity information for the entity that created the request.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time when the request was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DataSubject|null $dataSubject Information about the data subject.
    */
    private ?DataSubject $dataSubject = null;
    
    /**
     * @var DataSubjectType|null $dataSubjectType The type of the data subject. Possible values are: customer, currentEmployee, formerEmployee, prospectiveEmployee, student, teacher, faculty, other, unknownFutureValue.
    */
    private ?DataSubjectType $dataSubjectType = null;
    
    /**
     * @var string|null $description Description for the request.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The name of the request.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<SubjectRightsRequestHistory>|null $history Collection of history change events.
    */
    private ?array $history = null;
    
    /**
     * @var SubjectRightsRequestDetail|null $insight Insight about the request.
    */
    private ?SubjectRightsRequestDetail $insight = null;
    
    /**
     * @var DateTime|null $internalDueDateTime The date and time when the request is internally due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $internalDueDateTime = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy Identity information for the entity that last modified the request.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time when the request was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<AuthoredNote>|null $notes List of notes associcated with the request.
    */
    private ?array $notes = null;
    
    /**
     * @var array<string>|null $regulations List of regulations that this request will fulfill.
    */
    private ?array $regulations = null;
    
    /**
     * @var array<SubjectRightsRequestStageDetail>|null $stages Information about the different stages for the request.
    */
    private ?array $stages = null;
    
    /**
     * @var SubjectRightsRequestStatus|null $status The status of the request.. Possible values are: active, closed, unknownFutureValue.
    */
    private ?SubjectRightsRequestStatus $status = null;
    
    /**
     * @var Team|null $team Information about the Microsoft Teams team that was created for the request.
    */
    private ?Team $team = null;
    
    /**
     * @var SubjectRightsRequestType|null $type The type of the request. Possible values are: export, delete,  access, tagForAction, unknownFutureValue.
    */
    private ?SubjectRightsRequestType $type = null;
    
    /**
     * Instantiates a new SubjectRightsRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.subjectRightsRequest');
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
        return $this->assignedTo;
    }

    /**
     * Gets the closedDateTime property value. The date and time when the request was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getClosedDateTime(): ?DateTime {
        return $this->closedDateTime;
    }

    /**
     * Gets the createdBy property value. Identity information for the entity that created the request.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The date and time when the request was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the dataSubject property value. Information about the data subject.
     * @return DataSubject|null
    */
    public function getDataSubject(): ?DataSubject {
        return $this->dataSubject;
    }

    /**
     * Gets the dataSubjectType property value. The type of the data subject. Possible values are: customer, currentEmployee, formerEmployee, prospectiveEmployee, student, teacher, faculty, other, unknownFutureValue.
     * @return DataSubjectType|null
    */
    public function getDataSubjectType(): ?DataSubjectType {
        return $this->dataSubjectType;
    }

    /**
     * Gets the description property value. Description for the request.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The name of the request.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => function (ParseNode $n) use ($o) { $o->setAssignedTo($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'closedDateTime' => function (ParseNode $n) use ($o) { $o->setClosedDateTime($n->getDateTimeValue()); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'dataSubject' => function (ParseNode $n) use ($o) { $o->setDataSubject($n->getObjectValue(array(DataSubject::class, 'createFromDiscriminatorValue'))); },
            'dataSubjectType' => function (ParseNode $n) use ($o) { $o->setDataSubjectType($n->getEnumValue(DataSubjectType::class)); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'history' => function (ParseNode $n) use ($o) { $o->setHistory($n->getCollectionOfObjectValues(array(SubjectRightsRequestHistory::class, 'createFromDiscriminatorValue'))); },
            'insight' => function (ParseNode $n) use ($o) { $o->setInsight($n->getObjectValue(array(SubjectRightsRequestDetail::class, 'createFromDiscriminatorValue'))); },
            'internalDueDateTime' => function (ParseNode $n) use ($o) { $o->setInternalDueDateTime($n->getDateTimeValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'notes' => function (ParseNode $n) use ($o) { $o->setNotes($n->getCollectionOfObjectValues(array(AuthoredNote::class, 'createFromDiscriminatorValue'))); },
            'regulations' => function (ParseNode $n) use ($o) { $o->setRegulations($n->getCollectionOfPrimitiveValues()); },
            'stages' => function (ParseNode $n) use ($o) { $o->setStages($n->getCollectionOfObjectValues(array(SubjectRightsRequestStageDetail::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(SubjectRightsRequestStatus::class)); },
            'team' => function (ParseNode $n) use ($o) { $o->setTeam($n->getObjectValue(array(Team::class, 'createFromDiscriminatorValue'))); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(SubjectRightsRequestType::class)); },
        ]);
    }

    /**
     * Gets the history property value. Collection of history change events.
     * @return array<SubjectRightsRequestHistory>|null
    */
    public function getHistory(): ?array {
        return $this->history;
    }

    /**
     * Gets the insight property value. Insight about the request.
     * @return SubjectRightsRequestDetail|null
    */
    public function getInsight(): ?SubjectRightsRequestDetail {
        return $this->insight;
    }

    /**
     * Gets the internalDueDateTime property value. The date and time when the request is internally due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getInternalDueDateTime(): ?DateTime {
        return $this->internalDueDateTime;
    }

    /**
     * Gets the lastModifiedBy property value. Identity information for the entity that last modified the request.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the request was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the notes property value. List of notes associcated with the request.
     * @return array<AuthoredNote>|null
    */
    public function getNotes(): ?array {
        return $this->notes;
    }

    /**
     * Gets the regulations property value. List of regulations that this request will fulfill.
     * @return array<string>|null
    */
    public function getRegulations(): ?array {
        return $this->regulations;
    }

    /**
     * Gets the stages property value. Information about the different stages for the request.
     * @return array<SubjectRightsRequestStageDetail>|null
    */
    public function getStages(): ?array {
        return $this->stages;
    }

    /**
     * Gets the status property value. The status of the request.. Possible values are: active, closed, unknownFutureValue.
     * @return SubjectRightsRequestStatus|null
    */
    public function getStatus(): ?SubjectRightsRequestStatus {
        return $this->status;
    }

    /**
     * Gets the team property value. Information about the Microsoft Teams team that was created for the request.
     * @return Team|null
    */
    public function getTeam(): ?Team {
        return $this->team;
    }

    /**
     * Gets the type property value. The type of the request. Possible values are: export, delete,  access, tagForAction, unknownFutureValue.
     * @return SubjectRightsRequestType|null
    */
    public function getType(): ?SubjectRightsRequestType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('assignedTo', $this->assignedTo);
        $writer->writeDateTimeValue('closedDateTime', $this->closedDateTime);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('dataSubject', $this->dataSubject);
        $writer->writeEnumValue('dataSubjectType', $this->dataSubjectType);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('history', $this->history);
        $writer->writeObjectValue('insight', $this->insight);
        $writer->writeDateTimeValue('internalDueDateTime', $this->internalDueDateTime);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('notes', $this->notes);
        $writer->writeCollectionOfPrimitiveValues('regulations', $this->regulations);
        $writer->writeCollectionOfObjectValues('stages', $this->stages);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeObjectValue('team', $this->team);
        $writer->writeEnumValue('type', $this->type);
    }

    /**
     * Sets the assignedTo property value. Identity that the request is assigned to.
     *  @param Identity|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?Identity $value ): void {
        $this->assignedTo = $value;
    }

    /**
     * Sets the closedDateTime property value. The date and time when the request was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the closedDateTime property.
    */
    public function setClosedDateTime(?DateTime $value ): void {
        $this->closedDateTime = $value;
    }

    /**
     * Sets the createdBy property value. Identity information for the entity that created the request.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time when the request was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the dataSubject property value. Information about the data subject.
     *  @param DataSubject|null $value Value to set for the dataSubject property.
    */
    public function setDataSubject(?DataSubject $value ): void {
        $this->dataSubject = $value;
    }

    /**
     * Sets the dataSubjectType property value. The type of the data subject. Possible values are: customer, currentEmployee, formerEmployee, prospectiveEmployee, student, teacher, faculty, other, unknownFutureValue.
     *  @param DataSubjectType|null $value Value to set for the dataSubjectType property.
    */
    public function setDataSubjectType(?DataSubjectType $value ): void {
        $this->dataSubjectType = $value;
    }

    /**
     * Sets the description property value. Description for the request.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The name of the request.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the history property value. Collection of history change events.
     *  @param array<SubjectRightsRequestHistory>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value ): void {
        $this->history = $value;
    }

    /**
     * Sets the insight property value. Insight about the request.
     *  @param SubjectRightsRequestDetail|null $value Value to set for the insight property.
    */
    public function setInsight(?SubjectRightsRequestDetail $value ): void {
        $this->insight = $value;
    }

    /**
     * Sets the internalDueDateTime property value. The date and time when the request is internally due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the internalDueDateTime property.
    */
    public function setInternalDueDateTime(?DateTime $value ): void {
        $this->internalDueDateTime = $value;
    }

    /**
     * Sets the lastModifiedBy property value. Identity information for the entity that last modified the request.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the request was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the notes property value. List of notes associcated with the request.
     *  @param array<AuthoredNote>|null $value Value to set for the notes property.
    */
    public function setNotes(?array $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the regulations property value. List of regulations that this request will fulfill.
     *  @param array<string>|null $value Value to set for the regulations property.
    */
    public function setRegulations(?array $value ): void {
        $this->regulations = $value;
    }

    /**
     * Sets the stages property value. Information about the different stages for the request.
     *  @param array<SubjectRightsRequestStageDetail>|null $value Value to set for the stages property.
    */
    public function setStages(?array $value ): void {
        $this->stages = $value;
    }

    /**
     * Sets the status property value. The status of the request.. Possible values are: active, closed, unknownFutureValue.
     *  @param SubjectRightsRequestStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SubjectRightsRequestStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the team property value. Information about the Microsoft Teams team that was created for the request.
     *  @param Team|null $value Value to set for the team property.
    */
    public function setTeam(?Team $value ): void {
        $this->team = $value;
    }

    /**
     * Sets the type property value. The type of the request. Possible values are: export, delete,  access, tagForAction, unknownFutureValue.
     *  @param SubjectRightsRequestType|null $value Value to set for the type property.
    */
    public function setType(?SubjectRightsRequestType $value ): void {
        $this->type = $value;
    }

}
