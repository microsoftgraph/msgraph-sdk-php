<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ScheduleChangeRequest extends ChangeTrackedEntity implements Parsable 
{
    /**
     * Instantiates a new ScheduleChangeRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.scheduleChangeRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScheduleChangeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScheduleChangeRequest {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.offerShiftRequest': return new OfferShiftRequest();
                case '#microsoft.graph.openShiftChangeRequest': return new OpenShiftChangeRequest();
                case '#microsoft.graph.swapShiftsChangeRequest': return new SwapShiftsChangeRequest();
                case '#microsoft.graph.timeOffRequest': return new TimeOffRequest();
            }
        }
        return new ScheduleChangeRequest();
    }

    /**
     * Gets the assignedTo property value. 
     * @return ScheduleChangeRequestActor|null
    */
    public function getAssignedTo(): ?ScheduleChangeRequestActor {
        return $this->getBackingStore()->get('assignedTo');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getEnumValue(ScheduleChangeRequestActor::class)),
            'managerActionDateTime' => fn(ParseNode $n) => $o->setManagerActionDateTime($n->getDateTimeValue()),
            'managerActionMessage' => fn(ParseNode $n) => $o->setManagerActionMessage($n->getStringValue()),
            'managerUserId' => fn(ParseNode $n) => $o->setManagerUserId($n->getStringValue()),
            'senderDateTime' => fn(ParseNode $n) => $o->setSenderDateTime($n->getDateTimeValue()),
            'senderMessage' => fn(ParseNode $n) => $o->setSenderMessage($n->getStringValue()),
            'senderUserId' => fn(ParseNode $n) => $o->setSenderUserId($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ScheduleChangeState::class)),
        ]);
    }

    /**
     * Gets the managerActionDateTime property value. 
     * @return DateTime|null
    */
    public function getManagerActionDateTime(): ?DateTime {
        return $this->getBackingStore()->get('managerActionDateTime');
    }

    /**
     * Gets the managerActionMessage property value. 
     * @return string|null
    */
    public function getManagerActionMessage(): ?string {
        return $this->getBackingStore()->get('managerActionMessage');
    }

    /**
     * Gets the managerUserId property value. 
     * @return string|null
    */
    public function getManagerUserId(): ?string {
        return $this->getBackingStore()->get('managerUserId');
    }

    /**
     * Gets the senderDateTime property value. 
     * @return DateTime|null
    */
    public function getSenderDateTime(): ?DateTime {
        return $this->getBackingStore()->get('senderDateTime');
    }

    /**
     * Gets the senderMessage property value. 
     * @return string|null
    */
    public function getSenderMessage(): ?string {
        return $this->getBackingStore()->get('senderMessage');
    }

    /**
     * Gets the senderUserId property value. 
     * @return string|null
    */
    public function getSenderUserId(): ?string {
        return $this->getBackingStore()->get('senderUserId');
    }

    /**
     * Gets the state property value. 
     * @return ScheduleChangeState|null
    */
    public function getState(): ?ScheduleChangeState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('assignedTo', $this->getAssignedTo());
        $writer->writeStringValue('managerActionMessage', $this->getManagerActionMessage());
        $writer->writeStringValue('senderMessage', $this->getSenderMessage());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the assignedTo property value. 
     * @param ScheduleChangeRequestActor|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?ScheduleChangeRequestActor $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the managerActionDateTime property value. 
     * @param DateTime|null $value Value to set for the managerActionDateTime property.
    */
    public function setManagerActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('managerActionDateTime', $value);
    }

    /**
     * Sets the managerActionMessage property value. 
     * @param string|null $value Value to set for the managerActionMessage property.
    */
    public function setManagerActionMessage(?string $value): void {
        $this->getBackingStore()->set('managerActionMessage', $value);
    }

    /**
     * Sets the managerUserId property value. 
     * @param string|null $value Value to set for the managerUserId property.
    */
    public function setManagerUserId(?string $value): void {
        $this->getBackingStore()->set('managerUserId', $value);
    }

    /**
     * Sets the senderDateTime property value. 
     * @param DateTime|null $value Value to set for the senderDateTime property.
    */
    public function setSenderDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('senderDateTime', $value);
    }

    /**
     * Sets the senderMessage property value. 
     * @param string|null $value Value to set for the senderMessage property.
    */
    public function setSenderMessage(?string $value): void {
        $this->getBackingStore()->set('senderMessage', $value);
    }

    /**
     * Sets the senderUserId property value. 
     * @param string|null $value Value to set for the senderUserId property.
    */
    public function setSenderUserId(?string $value): void {
        $this->getBackingStore()->set('senderUserId', $value);
    }

    /**
     * Sets the state property value. 
     * @param ScheduleChangeState|null $value Value to set for the state property.
    */
    public function setState(?ScheduleChangeState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
