<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSubmission extends Entity implements Parsable 
{
    /**
     * @var array<EducationOutcome>|null $outcomes The outcomes property
    */
    private ?array $outcomes = null;
    
    /**
     * @var IdentitySet|null $reassignedBy User who moved the status of this submission to reassigned.
    */
    private ?IdentitySet $reassignedBy = null;
    
    /**
     * @var DateTime|null $reassignedDateTime Moment in time when the submission was reassigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $reassignedDateTime = null;
    
    /**
     * @var EducationSubmissionRecipient|null $recipient Who this submission is assigned to.
    */
    private ?EducationSubmissionRecipient $recipient = null;
    
    /**
     * @var array<EducationSubmissionResource>|null $resources The resources property
    */
    private ?array $resources = null;
    
    /**
     * @var string|null $resourcesFolderUrl Folder where all file resources for this submission need to be stored.
    */
    private ?string $resourcesFolderUrl = null;
    
    /**
     * @var IdentitySet|null $returnedBy User who moved the status of this submission to returned.
    */
    private ?IdentitySet $returnedBy = null;
    
    /**
     * @var DateTime|null $returnedDateTime Moment in time when the submission was returned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $returnedDateTime = null;
    
    /**
     * @var EducationSubmissionStatus|null $status Read-only. Possible values are: working, submitted, released, returned, and reassigned. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: reassigned.
    */
    private ?EducationSubmissionStatus $status = null;
    
    /**
     * @var IdentitySet|null $submittedBy User who moved the resource into the submitted state.
    */
    private ?IdentitySet $submittedBy = null;
    
    /**
     * @var DateTime|null $submittedDateTime Moment in time when the submission was moved into the submitted state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $submittedDateTime = null;
    
    /**
     * @var array<EducationSubmissionResource>|null $submittedResources The submittedResources property
    */
    private ?array $submittedResources = null;
    
    /**
     * @var IdentitySet|null $unsubmittedBy User who moved the resource from submitted into the working state.
    */
    private ?IdentitySet $unsubmittedBy = null;
    
    /**
     * @var DateTime|null $unsubmittedDateTime Moment in time when the submission was moved from submitted into the working state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $unsubmittedDateTime = null;
    
    /**
     * Instantiates a new educationSubmission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationSubmission');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSubmission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSubmission {
        return new EducationSubmission();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'outcomes' => fn(ParseNode $n) => $o->setOutcomes($n->getCollectionOfObjectValues([EducationOutcome::class, 'createFromDiscriminatorValue'])),
            'reassignedBy' => fn(ParseNode $n) => $o->setReassignedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'reassignedDateTime' => fn(ParseNode $n) => $o->setReassignedDateTime($n->getDateTimeValue()),
            'recipient' => fn(ParseNode $n) => $o->setRecipient($n->getObjectValue([EducationSubmissionRecipient::class, 'createFromDiscriminatorValue'])),
            'resources' => fn(ParseNode $n) => $o->setResources($n->getCollectionOfObjectValues([EducationSubmissionResource::class, 'createFromDiscriminatorValue'])),
            'resourcesFolderUrl' => fn(ParseNode $n) => $o->setResourcesFolderUrl($n->getStringValue()),
            'returnedBy' => fn(ParseNode $n) => $o->setReturnedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'returnedDateTime' => fn(ParseNode $n) => $o->setReturnedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(EducationSubmissionStatus::class)),
            'submittedBy' => fn(ParseNode $n) => $o->setSubmittedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'submittedDateTime' => fn(ParseNode $n) => $o->setSubmittedDateTime($n->getDateTimeValue()),
            'submittedResources' => fn(ParseNode $n) => $o->setSubmittedResources($n->getCollectionOfObjectValues([EducationSubmissionResource::class, 'createFromDiscriminatorValue'])),
            'unsubmittedBy' => fn(ParseNode $n) => $o->setUnsubmittedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'unsubmittedDateTime' => fn(ParseNode $n) => $o->setUnsubmittedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the outcomes property value. The outcomes property
     * @return array<EducationOutcome>|null
    */
    public function getOutcomes(): ?array {
        return $this->outcomes;
    }

    /**
     * Gets the reassignedBy property value. User who moved the status of this submission to reassigned.
     * @return IdentitySet|null
    */
    public function getReassignedBy(): ?IdentitySet {
        return $this->reassignedBy;
    }

    /**
     * Gets the reassignedDateTime property value. Moment in time when the submission was reassigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getReassignedDateTime(): ?DateTime {
        return $this->reassignedDateTime;
    }

    /**
     * Gets the recipient property value. Who this submission is assigned to.
     * @return EducationSubmissionRecipient|null
    */
    public function getRecipient(): ?EducationSubmissionRecipient {
        return $this->recipient;
    }

    /**
     * Gets the resources property value. The resources property
     * @return array<EducationSubmissionResource>|null
    */
    public function getResources(): ?array {
        return $this->resources;
    }

    /**
     * Gets the resourcesFolderUrl property value. Folder where all file resources for this submission need to be stored.
     * @return string|null
    */
    public function getResourcesFolderUrl(): ?string {
        return $this->resourcesFolderUrl;
    }

    /**
     * Gets the returnedBy property value. User who moved the status of this submission to returned.
     * @return IdentitySet|null
    */
    public function getReturnedBy(): ?IdentitySet {
        return $this->returnedBy;
    }

    /**
     * Gets the returnedDateTime property value. Moment in time when the submission was returned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getReturnedDateTime(): ?DateTime {
        return $this->returnedDateTime;
    }

    /**
     * Gets the status property value. Read-only. Possible values are: working, submitted, released, returned, and reassigned. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: reassigned.
     * @return EducationSubmissionStatus|null
    */
    public function getStatus(): ?EducationSubmissionStatus {
        return $this->status;
    }

    /**
     * Gets the submittedBy property value. User who moved the resource into the submitted state.
     * @return IdentitySet|null
    */
    public function getSubmittedBy(): ?IdentitySet {
        return $this->submittedBy;
    }

    /**
     * Gets the submittedDateTime property value. Moment in time when the submission was moved into the submitted state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getSubmittedDateTime(): ?DateTime {
        return $this->submittedDateTime;
    }

    /**
     * Gets the submittedResources property value. The submittedResources property
     * @return array<EducationSubmissionResource>|null
    */
    public function getSubmittedResources(): ?array {
        return $this->submittedResources;
    }

    /**
     * Gets the unsubmittedBy property value. User who moved the resource from submitted into the working state.
     * @return IdentitySet|null
    */
    public function getUnsubmittedBy(): ?IdentitySet {
        return $this->unsubmittedBy;
    }

    /**
     * Gets the unsubmittedDateTime property value. Moment in time when the submission was moved from submitted into the working state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getUnsubmittedDateTime(): ?DateTime {
        return $this->unsubmittedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('outcomes', $this->outcomes);
        $writer->writeObjectValue('recipient', $this->recipient);
        $writer->writeCollectionOfObjectValues('resources', $this->resources);
        $writer->writeCollectionOfObjectValues('submittedResources', $this->submittedResources);
    }

    /**
     * Sets the outcomes property value. The outcomes property
     *  @param array<EducationOutcome>|null $value Value to set for the outcomes property.
    */
    public function setOutcomes(?array $value ): void {
        $this->outcomes = $value;
    }

    /**
     * Sets the reassignedBy property value. User who moved the status of this submission to reassigned.
     *  @param IdentitySet|null $value Value to set for the reassignedBy property.
    */
    public function setReassignedBy(?IdentitySet $value ): void {
        $this->reassignedBy = $value;
    }

    /**
     * Sets the reassignedDateTime property value. Moment in time when the submission was reassigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the reassignedDateTime property.
    */
    public function setReassignedDateTime(?DateTime $value ): void {
        $this->reassignedDateTime = $value;
    }

    /**
     * Sets the recipient property value. Who this submission is assigned to.
     *  @param EducationSubmissionRecipient|null $value Value to set for the recipient property.
    */
    public function setRecipient(?EducationSubmissionRecipient $value ): void {
        $this->recipient = $value;
    }

    /**
     * Sets the resources property value. The resources property
     *  @param array<EducationSubmissionResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value ): void {
        $this->resources = $value;
    }

    /**
     * Sets the resourcesFolderUrl property value. Folder where all file resources for this submission need to be stored.
     *  @param string|null $value Value to set for the resourcesFolderUrl property.
    */
    public function setResourcesFolderUrl(?string $value ): void {
        $this->resourcesFolderUrl = $value;
    }

    /**
     * Sets the returnedBy property value. User who moved the status of this submission to returned.
     *  @param IdentitySet|null $value Value to set for the returnedBy property.
    */
    public function setReturnedBy(?IdentitySet $value ): void {
        $this->returnedBy = $value;
    }

    /**
     * Sets the returnedDateTime property value. Moment in time when the submission was returned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the returnedDateTime property.
    */
    public function setReturnedDateTime(?DateTime $value ): void {
        $this->returnedDateTime = $value;
    }

    /**
     * Sets the status property value. Read-only. Possible values are: working, submitted, released, returned, and reassigned. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: reassigned.
     *  @param EducationSubmissionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?EducationSubmissionStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the submittedBy property value. User who moved the resource into the submitted state.
     *  @param IdentitySet|null $value Value to set for the submittedBy property.
    */
    public function setSubmittedBy(?IdentitySet $value ): void {
        $this->submittedBy = $value;
    }

    /**
     * Sets the submittedDateTime property value. Moment in time when the submission was moved into the submitted state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the submittedDateTime property.
    */
    public function setSubmittedDateTime(?DateTime $value ): void {
        $this->submittedDateTime = $value;
    }

    /**
     * Sets the submittedResources property value. The submittedResources property
     *  @param array<EducationSubmissionResource>|null $value Value to set for the submittedResources property.
    */
    public function setSubmittedResources(?array $value ): void {
        $this->submittedResources = $value;
    }

    /**
     * Sets the unsubmittedBy property value. User who moved the resource from submitted into the working state.
     *  @param IdentitySet|null $value Value to set for the unsubmittedBy property.
    */
    public function setUnsubmittedBy(?IdentitySet $value ): void {
        $this->unsubmittedBy = $value;
    }

    /**
     * Sets the unsubmittedDateTime property value. Moment in time when the submission was moved from submitted into the working state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the unsubmittedDateTime property.
    */
    public function setUnsubmittedDateTime(?DateTime $value ): void {
        $this->unsubmittedDateTime = $value;
    }

}
