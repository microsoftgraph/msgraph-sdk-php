<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RetentionEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new retentionEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetentionEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetentionEvent {
        return new RetentionEvent();
    }

    /**
     * Gets the createdBy property value. The user who created the retentionEvent.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The date time when the retentionEvent was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. Optional information about the event.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Name of the event.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the eventPropagationResults property value. The eventPropagationResults property
     * @return array<EventPropagationResult>|null
    */
    public function getEventPropagationResults(): ?array {
        return $this->getBackingStore()->get('eventPropagationResults');
    }

    /**
     * Gets the eventQueries property value. Represents the workload (SharePoint Online, OneDrive for Business, Exchange Online) and identification information associated with a retention event.
     * @return array<EventQuery>|null
    */
    public function getEventQueries(): ?array {
        return $this->getBackingStore()->get('eventQueries');
    }

    /**
     * Gets the eventStatus property value. The eventStatus property
     * @return RetentionEventStatus|null
    */
    public function getEventStatus(): ?RetentionEventStatus {
        return $this->getBackingStore()->get('eventStatus');
    }

    /**
     * Gets the eventTriggerDateTime property value. Optional time when the event should be triggered.
     * @return DateTime|null
    */
    public function getEventTriggerDateTime(): ?DateTime {
        return $this->getBackingStore()->get('eventTriggerDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'eventPropagationResults' => fn(ParseNode $n) => $o->setEventPropagationResults($n->getCollectionOfObjectValues([EventPropagationResult::class, 'createFromDiscriminatorValue'])),
            'eventQueries' => fn(ParseNode $n) => $o->setEventQueries($n->getCollectionOfObjectValues([EventQuery::class, 'createFromDiscriminatorValue'])),
            'eventStatus' => fn(ParseNode $n) => $o->setEventStatus($n->getObjectValue([RetentionEventStatus::class, 'createFromDiscriminatorValue'])),
            'eventTriggerDateTime' => fn(ParseNode $n) => $o->setEventTriggerDateTime($n->getDateTimeValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'lastStatusUpdateDateTime' => fn(ParseNode $n) => $o->setLastStatusUpdateDateTime($n->getDateTimeValue()),
            'retentionEventType' => fn(ParseNode $n) => $o->setRetentionEventType($n->getObjectValue([RetentionEventType::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The user who last modified the retentionEvent.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. The latest date time when the retentionEvent was modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the lastStatusUpdateDateTime property value. Last time the status of the event was updated.
     * @return DateTime|null
    */
    public function getLastStatusUpdateDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastStatusUpdateDateTime');
    }

    /**
     * Gets the retentionEventType property value. Specifies the event that will start the retention period for labels that use this event type when an event is created.
     * @return RetentionEventType|null
    */
    public function getRetentionEventType(): ?RetentionEventType {
        return $this->getBackingStore()->get('retentionEventType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('eventPropagationResults', $this->getEventPropagationResults());
        $writer->writeCollectionOfObjectValues('eventQueries', $this->getEventQueries());
        $writer->writeObjectValue('eventStatus', $this->getEventStatus());
        $writer->writeDateTimeValue('eventTriggerDateTime', $this->getEventTriggerDateTime());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeDateTimeValue('lastStatusUpdateDateTime', $this->getLastStatusUpdateDateTime());
        $writer->writeObjectValue('retentionEventType', $this->getRetentionEventType());
    }

    /**
     * Sets the createdBy property value. The user who created the retentionEvent.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The date time when the retentionEvent was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Optional information about the event.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Name of the event.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the eventPropagationResults property value. The eventPropagationResults property
     * @param array<EventPropagationResult>|null $value Value to set for the eventPropagationResults property.
    */
    public function setEventPropagationResults(?array $value): void {
        $this->getBackingStore()->set('eventPropagationResults', $value);
    }

    /**
     * Sets the eventQueries property value. Represents the workload (SharePoint Online, OneDrive for Business, Exchange Online) and identification information associated with a retention event.
     * @param array<EventQuery>|null $value Value to set for the eventQueries property.
    */
    public function setEventQueries(?array $value): void {
        $this->getBackingStore()->set('eventQueries', $value);
    }

    /**
     * Sets the eventStatus property value. The eventStatus property
     * @param RetentionEventStatus|null $value Value to set for the eventStatus property.
    */
    public function setEventStatus(?RetentionEventStatus $value): void {
        $this->getBackingStore()->set('eventStatus', $value);
    }

    /**
     * Sets the eventTriggerDateTime property value. Optional time when the event should be triggered.
     * @param DateTime|null $value Value to set for the eventTriggerDateTime property.
    */
    public function setEventTriggerDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventTriggerDateTime', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The user who last modified the retentionEvent.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The latest date time when the retentionEvent was modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lastStatusUpdateDateTime property value. Last time the status of the event was updated.
     * @param DateTime|null $value Value to set for the lastStatusUpdateDateTime property.
    */
    public function setLastStatusUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastStatusUpdateDateTime', $value);
    }

    /**
     * Sets the retentionEventType property value. Specifies the event that will start the retention period for labels that use this event type when an event is created.
     * @param RetentionEventType|null $value Value to set for the retentionEventType property.
    */
    public function setRetentionEventType(?RetentionEventType $value): void {
        $this->getBackingStore()->set('retentionEventType', $value);
    }

}
