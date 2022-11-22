<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Request extends Entity implements Parsable 
{
    /**
     * Instantiates a new request and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Request
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Request {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.unifiedRoleAssignmentScheduleRequest': return new UnifiedRoleAssignmentScheduleRequest();
                case '#microsoft.graph.unifiedRoleEligibilityScheduleRequest': return new UnifiedRoleEligibilityScheduleRequest();
                case '#microsoft.graph.userConsentRequest': return new UserConsentRequest();
            }
        }
        return new Request();
    }

    /**
     * Gets the approvalId property value. The identifier of the approval of the request.
     * @return string|null
    */
    public function getApprovalId(): ?string {
        return $this->getBackingStore()->get('approvalId');
    }

    /**
     * Gets the completedDateTime property value. The request completion date time.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('completedDateTime');
    }

    /**
     * Gets the createdBy property value. The principal that created the request.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The request creation date time.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the customData property value. Free text field to define any custom data for the request. Not used.
     * @return string|null
    */
    public function getCustomData(): ?string {
        return $this->getBackingStore()->get('customData');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approvalId' => fn(ParseNode $n) => $o->setApprovalId($n->getStringValue()),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customData' => fn(ParseNode $n) => $o->setCustomData($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ]);
    }

    /**
     * Gets the status property value. The status of the request. Not nullable. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable.
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
        $writer->writeStringValue('approvalId', $this->getApprovalId());
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('customData', $this->getCustomData());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the approvalId property value. The identifier of the approval of the request.
     *  @param string|null $value Value to set for the approvalId property.
    */
    public function setApprovalId(?string $value): void {
        $this->getBackingStore()->set('approvalId', $value);
    }

    /**
     * Sets the completedDateTime property value. The request completion date time.
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdBy property value. The principal that created the request.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The request creation date time.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customData property value. Free text field to define any custom data for the request. Not used.
     *  @param string|null $value Value to set for the customData property.
    */
    public function setCustomData(?string $value): void {
        $this->getBackingStore()->set('customData', $value);
    }

    /**
     * Sets the status property value. The status of the request. Not nullable. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
