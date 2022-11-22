<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApprovalStage extends Entity implements Parsable 
{
    /**
     * Instantiates a new approvalStage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApprovalStage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApprovalStage {
        return new ApprovalStage();
    }

    /**
     * Gets the assignedToMe property value. Indicates whether the stage is assigned to the calling user to review. Read-only.
     * @return bool|null
    */
    public function getAssignedToMe(): ?bool {
        return $this->getBackingStore()->get('assignedToMe');
    }

    /**
     * Gets the displayName property value. The label provided by the policy creator to identify an approval stage. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedToMe' => fn(ParseNode $n) => $o->setAssignedToMe($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'reviewedBy' => fn(ParseNode $n) => $o->setReviewedBy($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'reviewedDateTime' => fn(ParseNode $n) => $o->setReviewedDateTime($n->getDateTimeValue()),
            'reviewResult' => fn(ParseNode $n) => $o->setReviewResult($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ]);
    }

    /**
     * Gets the justification property value. The justification associated with the approval stage decision.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->getBackingStore()->get('justification');
    }

    /**
     * Gets the reviewedBy property value. The identifier of the reviewer. 00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't reviewed. Read-only.
     * @return Identity|null
    */
    public function getReviewedBy(): ?Identity {
        return $this->getBackingStore()->get('reviewedBy');
    }

    /**
     * Gets the reviewedDateTime property value. The date and time when a decision was recorded. The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getReviewedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('reviewedDateTime');
    }

    /**
     * Gets the reviewResult property value. The result of this approval record. Possible values include: NotReviewed, Approved, Denied.
     * @return string|null
    */
    public function getReviewResult(): ?string {
        return $this->getBackingStore()->get('reviewResult');
    }

    /**
     * Gets the status property value. The stage status. Possible values: InProgress, Initializing, Completed, Expired. Read-only.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('assignedToMe', $this->getAssignedToMe());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('justification', $this->getJustification());
        $writer->writeObjectValue('reviewedBy', $this->getReviewedBy());
        $writer->writeDateTimeValue('reviewedDateTime', $this->getReviewedDateTime());
        $writer->writeStringValue('reviewResult', $this->getReviewResult());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the assignedToMe property value. Indicates whether the stage is assigned to the calling user to review. Read-only.
     *  @param bool|null $value Value to set for the assignedToMe property.
    */
    public function setAssignedToMe(?bool $value): void {
        $this->getBackingStore()->set('assignedToMe', $value);
    }

    /**
     * Sets the displayName property value. The label provided by the policy creator to identify an approval stage. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the justification property value. The justification associated with the approval stage decision.
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the reviewedBy property value. The identifier of the reviewer. 00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't reviewed. Read-only.
     *  @param Identity|null $value Value to set for the reviewedBy property.
    */
    public function setReviewedBy(?Identity $value): void {
        $this->getBackingStore()->set('reviewedBy', $value);
    }

    /**
     * Sets the reviewedDateTime property value. The date and time when a decision was recorded. The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the reviewedDateTime property.
    */
    public function setReviewedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reviewedDateTime', $value);
    }

    /**
     * Sets the reviewResult property value. The result of this approval record. Possible values include: NotReviewed, Approved, Denied.
     *  @param string|null $value Value to set for the reviewResult property.
    */
    public function setReviewResult(?string $value): void {
        $this->getBackingStore()->set('reviewResult', $value);
    }

    /**
     * Sets the status property value. The stage status. Possible values: InProgress, Initializing, Completed, Expired. Read-only.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
