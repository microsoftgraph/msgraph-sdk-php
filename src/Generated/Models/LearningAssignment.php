<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LearningAssignment extends LearningCourseActivity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new learningAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LearningAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LearningAssignment {
        return new LearningAssignment();
    }

    /**
     * Gets the assignedDateTime property value. Assigned date for the course activity. Optional.
     * @return DateTime|null
    */
    public function getAssignedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('assignedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedDateTime'");
    }

    /**
     * Gets the assignerUserId property value. The user ID of the assigner. Optional.
     * @return string|null
    */
    public function getAssignerUserId(): ?string {
        $val = $this->getBackingStore()->get('assignerUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignerUserId'");
    }

    /**
     * Gets the assignmentType property value. The assignmentType property
     * @return AssignmentType|null
    */
    public function getAssignmentType(): ?AssignmentType {
        $val = $this->getBackingStore()->get('assignmentType');
        if (is_null($val) || $val instanceof AssignmentType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentType'");
    }

    /**
     * Gets the dueDateTime property value. Due date for the course activity. Optional.
     * @return DateTimeTimeZone|null
    */
    public function getDueDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('dueDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dueDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedDateTime' => fn(ParseNode $n) => $o->setAssignedDateTime($n->getDateTimeValue()),
            'assignerUserId' => fn(ParseNode $n) => $o->setAssignerUserId($n->getStringValue()),
            'assignmentType' => fn(ParseNode $n) => $o->setAssignmentType($n->getEnumValue(AssignmentType::class)),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the notes property value. Notes for the course activity. Optional.
     * @return ItemBody|null
    */
    public function getNotes(): ?ItemBody {
        $val = $this->getBackingStore()->get('notes');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('assignedDateTime', $this->getAssignedDateTime());
        $writer->writeStringValue('assignerUserId', $this->getAssignerUserId());
        $writer->writeEnumValue('assignmentType', $this->getAssignmentType());
        $writer->writeObjectValue('dueDateTime', $this->getDueDateTime());
        $writer->writeObjectValue('notes', $this->getNotes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the assignedDateTime property value. Assigned date for the course activity. Optional.
     * @param DateTime|null $value Value to set for the assignedDateTime property.
    */
    public function setAssignedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('assignedDateTime', $value);
    }

    /**
     * Sets the assignerUserId property value. The user ID of the assigner. Optional.
     * @param string|null $value Value to set for the assignerUserId property.
    */
    public function setAssignerUserId(?string $value): void {
        $this->getBackingStore()->set('assignerUserId', $value);
    }

    /**
     * Sets the assignmentType property value. The assignmentType property
     * @param AssignmentType|null $value Value to set for the assignmentType property.
    */
    public function setAssignmentType(?AssignmentType $value): void {
        $this->getBackingStore()->set('assignmentType', $value);
    }

    /**
     * Sets the dueDateTime property value. Due date for the course activity. Optional.
     * @param DateTimeTimeZone|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the notes property value. Notes for the course activity. Optional.
     * @param ItemBody|null $value Value to set for the notes property.
    */
    public function setNotes(?ItemBody $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

}
