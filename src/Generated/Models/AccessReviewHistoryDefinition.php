<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewHistoryDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessReviewHistoryDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewHistoryDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewHistoryDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewHistoryDefinition {
        return new AccessReviewHistoryDefinition();
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. Timestamp when the access review definition was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the decisions property value. Determines which review decisions will be included in the fetched review history data if specified. Optional on create. All decisions will be included by default if no decisions are provided on create. Possible values are: approve, deny, dontKnow, notReviewed, and notNotified.
     * @return array<AccessReviewHistoryDecisionFilter>|null
    */
    public function getDecisions(): ?array {
        return $this->getBackingStore()->get('decisions');
    }

    /**
     * Gets the displayName property value. Name for the access review history data collection. Required.
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
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'decisions' => fn(ParseNode $n) => $o->setDecisions($n->getCollectionOfEnumValues(AccessReviewHistoryDecisionFilter::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'instances' => fn(ParseNode $n) => $o->setInstances($n->getCollectionOfObjectValues([AccessReviewHistoryInstance::class, 'createFromDiscriminatorValue'])),
            'reviewHistoryPeriodEndDateTime' => fn(ParseNode $n) => $o->setReviewHistoryPeriodEndDateTime($n->getDateTimeValue()),
            'reviewHistoryPeriodStartDateTime' => fn(ParseNode $n) => $o->setReviewHistoryPeriodStartDateTime($n->getDateTimeValue()),
            'scheduleSettings' => fn(ParseNode $n) => $o->setScheduleSettings($n->getObjectValue([AccessReviewHistoryScheduleSettings::class, 'createFromDiscriminatorValue'])),
            'scopes' => fn(ParseNode $n) => $o->setScopes($n->getCollectionOfObjectValues([AccessReviewScope::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AccessReviewHistoryStatus::class)),
        ]);
    }

    /**
     * Gets the instances property value. If the accessReviewHistoryDefinition is a recurring definition, instances represent each recurrence. A definition that does not recur will have exactly one instance.
     * @return array<AccessReviewHistoryInstance>|null
    */
    public function getInstances(): ?array {
        return $this->getBackingStore()->get('instances');
    }

    /**
     * Gets the reviewHistoryPeriodEndDateTime property value. A timestamp. Reviews ending on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
     * @return DateTime|null
    */
    public function getReviewHistoryPeriodEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('reviewHistoryPeriodEndDateTime');
    }

    /**
     * Gets the reviewHistoryPeriodStartDateTime property value. A timestamp. Reviews starting on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
     * @return DateTime|null
    */
    public function getReviewHistoryPeriodStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('reviewHistoryPeriodStartDateTime');
    }

    /**
     * Gets the scheduleSettings property value. The settings for a recurring access review history definition series. Only required if reviewHistoryPeriodStartDateTime or reviewHistoryPeriodEndDateTime are not defined. Not supported yet.
     * @return AccessReviewHistoryScheduleSettings|null
    */
    public function getScheduleSettings(): ?AccessReviewHistoryScheduleSettings {
        return $this->getBackingStore()->get('scheduleSettings');
    }

    /**
     * Gets the scopes property value. Used to scope what reviews are included in the fetched history data. Fetches reviews whose scope matches with this provided scope. Required.
     * @return array<AccessReviewScope>|null
    */
    public function getScopes(): ?array {
        return $this->getBackingStore()->get('scopes');
    }

    /**
     * Gets the status property value. Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue.
     * @return AccessReviewHistoryStatus|null
    */
    public function getStatus(): ?AccessReviewHistoryStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfEnumValues('decisions', $this->getDecisions());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('instances', $this->getInstances());
        $writer->writeDateTimeValue('reviewHistoryPeriodEndDateTime', $this->getReviewHistoryPeriodEndDateTime());
        $writer->writeDateTimeValue('reviewHistoryPeriodStartDateTime', $this->getReviewHistoryPeriodStartDateTime());
        $writer->writeObjectValue('scheduleSettings', $this->getScheduleSettings());
        $writer->writeCollectionOfObjectValues('scopes', $this->getScopes());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the createdBy property value. The createdBy property
     *  @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp when the access review definition was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the decisions property value. Determines which review decisions will be included in the fetched review history data if specified. Optional on create. All decisions will be included by default if no decisions are provided on create. Possible values are: approve, deny, dontKnow, notReviewed, and notNotified.
     *  @param array<AccessReviewHistoryDecisionFilter>|null $value Value to set for the decisions property.
    */
    public function setDecisions(?array $value): void {
        $this->getBackingStore()->set('decisions', $value);
    }

    /**
     * Sets the displayName property value. Name for the access review history data collection. Required.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the instances property value. If the accessReviewHistoryDefinition is a recurring definition, instances represent each recurrence. A definition that does not recur will have exactly one instance.
     *  @param array<AccessReviewHistoryInstance>|null $value Value to set for the instances property.
    */
    public function setInstances(?array $value): void {
        $this->getBackingStore()->set('instances', $value);
    }

    /**
     * Sets the reviewHistoryPeriodEndDateTime property value. A timestamp. Reviews ending on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
     *  @param DateTime|null $value Value to set for the reviewHistoryPeriodEndDateTime property.
    */
    public function setReviewHistoryPeriodEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reviewHistoryPeriodEndDateTime', $value);
    }

    /**
     * Sets the reviewHistoryPeriodStartDateTime property value. A timestamp. Reviews starting on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
     *  @param DateTime|null $value Value to set for the reviewHistoryPeriodStartDateTime property.
    */
    public function setReviewHistoryPeriodStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reviewHistoryPeriodStartDateTime', $value);
    }

    /**
     * Sets the scheduleSettings property value. The settings for a recurring access review history definition series. Only required if reviewHistoryPeriodStartDateTime or reviewHistoryPeriodEndDateTime are not defined. Not supported yet.
     *  @param AccessReviewHistoryScheduleSettings|null $value Value to set for the scheduleSettings property.
    */
    public function setScheduleSettings(?AccessReviewHistoryScheduleSettings $value): void {
        $this->getBackingStore()->set('scheduleSettings', $value);
    }

    /**
     * Sets the scopes property value. Used to scope what reviews are included in the fetched history data. Fetches reviews whose scope matches with this provided scope. Required.
     *  @param array<AccessReviewScope>|null $value Value to set for the scopes property.
    */
    public function setScopes(?array $value): void {
        $this->getBackingStore()->set('scopes', $value);
    }

    /**
     * Sets the status property value. Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue.
     *  @param AccessReviewHistoryStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AccessReviewHistoryStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
