<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EducationSubmission extends Entity implements Parsable 
{
    /**
     * Instantiates a new educationSubmission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the outcomes property value. The outcomes property
     * @return array<EducationOutcome>|null
    */
    public function getOutcomes(): ?array {
        $val = $this->getBackingStore()->get('outcomes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationOutcome::class);
            /** @var array<EducationOutcome>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outcomes'");
    }

    /**
     * Gets the reassignedBy property value. User who moved the status of this submission to reassigned.
     * @return IdentitySet|null
    */
    public function getReassignedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('reassignedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reassignedBy'");
    }

    /**
     * Gets the reassignedDateTime property value. Moment in time when the submission was reassigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getReassignedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('reassignedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reassignedDateTime'");
    }

    /**
     * Gets the recipient property value. Who this submission is assigned to.
     * @return EducationSubmissionRecipient|null
    */
    public function getRecipient(): ?EducationSubmissionRecipient {
        $val = $this->getBackingStore()->get('recipient');
        if (is_null($val) || $val instanceof EducationSubmissionRecipient) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipient'");
    }

    /**
     * Gets the resources property value. The resources property
     * @return array<EducationSubmissionResource>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationSubmissionResource::class);
            /** @var array<EducationSubmissionResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Gets the resourcesFolderUrl property value. Folder where all file resources for this submission need to be stored.
     * @return string|null
    */
    public function getResourcesFolderUrl(): ?string {
        $val = $this->getBackingStore()->get('resourcesFolderUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourcesFolderUrl'");
    }

    /**
     * Gets the returnedBy property value. User who moved the status of this submission to returned.
     * @return IdentitySet|null
    */
    public function getReturnedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('returnedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'returnedBy'");
    }

    /**
     * Gets the returnedDateTime property value. Moment in time when the submission was returned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getReturnedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('returnedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'returnedDateTime'");
    }

    /**
     * Gets the status property value. Read-only. Possible values are: working, submitted, returned, and reassigned. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: reassigned.
     * @return EducationSubmissionStatus|null
    */
    public function getStatus(): ?EducationSubmissionStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof EducationSubmissionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the submittedBy property value. User who moved the resource into the submitted state.
     * @return IdentitySet|null
    */
    public function getSubmittedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('submittedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'submittedBy'");
    }

    /**
     * Gets the submittedDateTime property value. Moment in time when the submission was moved into the submitted state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getSubmittedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('submittedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'submittedDateTime'");
    }

    /**
     * Gets the submittedResources property value. The submittedResources property
     * @return array<EducationSubmissionResource>|null
    */
    public function getSubmittedResources(): ?array {
        $val = $this->getBackingStore()->get('submittedResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationSubmissionResource::class);
            /** @var array<EducationSubmissionResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'submittedResources'");
    }

    /**
     * Gets the unsubmittedBy property value. User who moved the resource from submitted into the working state.
     * @return IdentitySet|null
    */
    public function getUnsubmittedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('unsubmittedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unsubmittedBy'");
    }

    /**
     * Gets the unsubmittedDateTime property value. Moment in time when the submission was moved from submitted into the working state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getUnsubmittedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('unsubmittedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unsubmittedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('outcomes', $this->getOutcomes());
        $writer->writeObjectValue('recipient', $this->getRecipient());
        $writer->writeCollectionOfObjectValues('resources', $this->getResources());
        $writer->writeCollectionOfObjectValues('submittedResources', $this->getSubmittedResources());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the outcomes property value. The outcomes property
     * @param array<EducationOutcome>|null $value Value to set for the outcomes property.
    */
    public function setOutcomes(?array $value): void {
        $this->getBackingStore()->set('outcomes', $value);
    }

    /**
     * Sets the reassignedBy property value. User who moved the status of this submission to reassigned.
     * @param IdentitySet|null $value Value to set for the reassignedBy property.
    */
    public function setReassignedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('reassignedBy', $value);
    }

    /**
     * Sets the reassignedDateTime property value. Moment in time when the submission was reassigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the reassignedDateTime property.
    */
    public function setReassignedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reassignedDateTime', $value);
    }

    /**
     * Sets the recipient property value. Who this submission is assigned to.
     * @param EducationSubmissionRecipient|null $value Value to set for the recipient property.
    */
    public function setRecipient(?EducationSubmissionRecipient $value): void {
        $this->getBackingStore()->set('recipient', $value);
    }

    /**
     * Sets the resources property value. The resources property
     * @param array<EducationSubmissionResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

    /**
     * Sets the resourcesFolderUrl property value. Folder where all file resources for this submission need to be stored.
     * @param string|null $value Value to set for the resourcesFolderUrl property.
    */
    public function setResourcesFolderUrl(?string $value): void {
        $this->getBackingStore()->set('resourcesFolderUrl', $value);
    }

    /**
     * Sets the returnedBy property value. User who moved the status of this submission to returned.
     * @param IdentitySet|null $value Value to set for the returnedBy property.
    */
    public function setReturnedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('returnedBy', $value);
    }

    /**
     * Sets the returnedDateTime property value. Moment in time when the submission was returned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the returnedDateTime property.
    */
    public function setReturnedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('returnedDateTime', $value);
    }

    /**
     * Sets the status property value. Read-only. Possible values are: working, submitted, returned, and reassigned. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: reassigned.
     * @param EducationSubmissionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?EducationSubmissionStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the submittedBy property value. User who moved the resource into the submitted state.
     * @param IdentitySet|null $value Value to set for the submittedBy property.
    */
    public function setSubmittedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('submittedBy', $value);
    }

    /**
     * Sets the submittedDateTime property value. Moment in time when the submission was moved into the submitted state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the submittedDateTime property.
    */
    public function setSubmittedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('submittedDateTime', $value);
    }

    /**
     * Sets the submittedResources property value. The submittedResources property
     * @param array<EducationSubmissionResource>|null $value Value to set for the submittedResources property.
    */
    public function setSubmittedResources(?array $value): void {
        $this->getBackingStore()->set('submittedResources', $value);
    }

    /**
     * Sets the unsubmittedBy property value. User who moved the resource from submitted into the working state.
     * @param IdentitySet|null $value Value to set for the unsubmittedBy property.
    */
    public function setUnsubmittedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('unsubmittedBy', $value);
    }

    /**
     * Sets the unsubmittedDateTime property value. Moment in time when the submission was moved from submitted into the working state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the unsubmittedDateTime property.
    */
    public function setUnsubmittedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('unsubmittedDateTime', $value);
    }

}
