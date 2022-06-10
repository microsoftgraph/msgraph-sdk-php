<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ScheduleChangeRequest extends ChangeTrackedEntity implements Parsable 
{
    /**
     * @var ScheduleChangeRequestActor|null $assignedTo The assignedTo property
    */
    private ?ScheduleChangeRequestActor $assignedTo = null;
    
    /**
     * @var DateTime|null $managerActionDateTime The managerActionDateTime property
    */
    private ?DateTime $managerActionDateTime = null;
    
    /**
     * @var string|null $managerActionMessage The managerActionMessage property
    */
    private ?string $managerActionMessage = null;
    
    /**
     * @var string|null $managerUserId The managerUserId property
    */
    private ?string $managerUserId = null;
    
    /**
     * @var DateTime|null $senderDateTime The senderDateTime property
    */
    private ?DateTime $senderDateTime = null;
    
    /**
     * @var string|null $senderMessage The senderMessage property
    */
    private ?string $senderMessage = null;
    
    /**
     * @var string|null $senderUserId The senderUserId property
    */
    private ?string $senderUserId = null;
    
    /**
     * @var ScheduleChangeState|null $state The state property
    */
    private ?ScheduleChangeState $state = null;
    
    /**
     * Instantiates a new ScheduleChangeRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScheduleChangeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScheduleChangeRequest {
        return new ScheduleChangeRequest();
    }

    /**
     * Gets the assignedTo property value. The assignedTo property
     * @return ScheduleChangeRequestActor|null
    */
    public function getAssignedTo(): ?ScheduleChangeRequestActor {
        return $this->assignedTo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => function (ParseNode $n) use ($o) { $o->setAssignedTo($n->getEnumValue(ScheduleChangeRequestActor::class)); },
            'managerActionDateTime' => function (ParseNode $n) use ($o) { $o->setManagerActionDateTime($n->getDateTimeValue()); },
            'managerActionMessage' => function (ParseNode $n) use ($o) { $o->setManagerActionMessage($n->getStringValue()); },
            'managerUserId' => function (ParseNode $n) use ($o) { $o->setManagerUserId($n->getStringValue()); },
            'senderDateTime' => function (ParseNode $n) use ($o) { $o->setSenderDateTime($n->getDateTimeValue()); },
            'senderMessage' => function (ParseNode $n) use ($o) { $o->setSenderMessage($n->getStringValue()); },
            'senderUserId' => function (ParseNode $n) use ($o) { $o->setSenderUserId($n->getStringValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(ScheduleChangeState::class)); },
        ]);
    }

    /**
     * Gets the managerActionDateTime property value. The managerActionDateTime property
     * @return DateTime|null
    */
    public function getManagerActionDateTime(): ?DateTime {
        return $this->managerActionDateTime;
    }

    /**
     * Gets the managerActionMessage property value. The managerActionMessage property
     * @return string|null
    */
    public function getManagerActionMessage(): ?string {
        return $this->managerActionMessage;
    }

    /**
     * Gets the managerUserId property value. The managerUserId property
     * @return string|null
    */
    public function getManagerUserId(): ?string {
        return $this->managerUserId;
    }

    /**
     * Gets the senderDateTime property value. The senderDateTime property
     * @return DateTime|null
    */
    public function getSenderDateTime(): ?DateTime {
        return $this->senderDateTime;
    }

    /**
     * Gets the senderMessage property value. The senderMessage property
     * @return string|null
    */
    public function getSenderMessage(): ?string {
        return $this->senderMessage;
    }

    /**
     * Gets the senderUserId property value. The senderUserId property
     * @return string|null
    */
    public function getSenderUserId(): ?string {
        return $this->senderUserId;
    }

    /**
     * Gets the state property value. The state property
     * @return ScheduleChangeState|null
    */
    public function getState(): ?ScheduleChangeState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('assignedTo', $this->assignedTo);
        $writer->writeDateTimeValue('managerActionDateTime', $this->managerActionDateTime);
        $writer->writeStringValue('managerActionMessage', $this->managerActionMessage);
        $writer->writeStringValue('managerUserId', $this->managerUserId);
        $writer->writeDateTimeValue('senderDateTime', $this->senderDateTime);
        $writer->writeStringValue('senderMessage', $this->senderMessage);
        $writer->writeStringValue('senderUserId', $this->senderUserId);
        $writer->writeEnumValue('state', $this->state);
    }

    /**
     * Sets the assignedTo property value. The assignedTo property
     *  @param ScheduleChangeRequestActor|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?ScheduleChangeRequestActor $value ): void {
        $this->assignedTo = $value;
    }

    /**
     * Sets the managerActionDateTime property value. The managerActionDateTime property
     *  @param DateTime|null $value Value to set for the managerActionDateTime property.
    */
    public function setManagerActionDateTime(?DateTime $value ): void {
        $this->managerActionDateTime = $value;
    }

    /**
     * Sets the managerActionMessage property value. The managerActionMessage property
     *  @param string|null $value Value to set for the managerActionMessage property.
    */
    public function setManagerActionMessage(?string $value ): void {
        $this->managerActionMessage = $value;
    }

    /**
     * Sets the managerUserId property value. The managerUserId property
     *  @param string|null $value Value to set for the managerUserId property.
    */
    public function setManagerUserId(?string $value ): void {
        $this->managerUserId = $value;
    }

    /**
     * Sets the senderDateTime property value. The senderDateTime property
     *  @param DateTime|null $value Value to set for the senderDateTime property.
    */
    public function setSenderDateTime(?DateTime $value ): void {
        $this->senderDateTime = $value;
    }

    /**
     * Sets the senderMessage property value. The senderMessage property
     *  @param string|null $value Value to set for the senderMessage property.
    */
    public function setSenderMessage(?string $value ): void {
        $this->senderMessage = $value;
    }

    /**
     * Sets the senderUserId property value. The senderUserId property
     *  @param string|null $value Value to set for the senderUserId property.
    */
    public function setSenderUserId(?string $value ): void {
        $this->senderUserId = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param ScheduleChangeState|null $value Value to set for the state property.
    */
    public function setState(?ScheduleChangeState $value ): void {
        $this->state = $value;
    }

}
