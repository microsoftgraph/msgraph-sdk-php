<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class EducationAssignmentDefaults extends Entity implements Parsable 
{
    /**
     * Instantiates a new EducationAssignmentDefaults and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAssignmentDefaults
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAssignmentDefaults {
        return new EducationAssignmentDefaults();
    }

    /**
     * Gets the addedStudentAction property value. Class-level default behavior for handling students who are added after the assignment is published. The possible values are: none, assignIfOpen.
     * @return EducationAddedStudentAction|null
    */
    public function getAddedStudentAction(): ?EducationAddedStudentAction {
        $val = $this->getBackingStore()->get('addedStudentAction');
        if (is_null($val) || $val instanceof EducationAddedStudentAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addedStudentAction'");
    }

    /**
     * Gets the addToCalendarAction property value. Optional field to control adding assignments to students' and teachers' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Use the Prefer: include-unknown-enum-members request header to get the following members in this evolvable enum: studentsOnly. The default value is none.
     * @return EducationAddToCalendarOptions|null
    */
    public function getAddToCalendarAction(): ?EducationAddToCalendarOptions {
        $val = $this->getBackingStore()->get('addToCalendarAction');
        if (is_null($val) || $val instanceof EducationAddToCalendarOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addToCalendarAction'");
    }

    /**
     * Gets the dueTime property value. Class-level default value for due time field. Default value is 23:59:00.
     * @return Time|null
    */
    public function getDueTime(): ?Time {
        $val = $this->getBackingStore()->get('dueTime');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dueTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addedStudentAction' => fn(ParseNode $n) => $o->setAddedStudentAction($n->getEnumValue(EducationAddedStudentAction::class)),
            'addToCalendarAction' => fn(ParseNode $n) => $o->setAddToCalendarAction($n->getEnumValue(EducationAddToCalendarOptions::class)),
            'dueTime' => fn(ParseNode $n) => $o->setDueTime($n->getTimeValue()),
            'notificationChannelUrl' => fn(ParseNode $n) => $o->setNotificationChannelUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the notificationChannelUrl property value. Default Teams channel to which notifications are sent. Default value is null.
     * @return string|null
    */
    public function getNotificationChannelUrl(): ?string {
        $val = $this->getBackingStore()->get('notificationChannelUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationChannelUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('addedStudentAction', $this->getAddedStudentAction());
        $writer->writeEnumValue('addToCalendarAction', $this->getAddToCalendarAction());
        $writer->writeTimeValue('dueTime', $this->getDueTime());
        $writer->writeStringValue('notificationChannelUrl', $this->getNotificationChannelUrl());
    }

    /**
     * Sets the addedStudentAction property value. Class-level default behavior for handling students who are added after the assignment is published. The possible values are: none, assignIfOpen.
     * @param EducationAddedStudentAction|null $value Value to set for the addedStudentAction property.
    */
    public function setAddedStudentAction(?EducationAddedStudentAction $value): void {
        $this->getBackingStore()->set('addedStudentAction', $value);
    }

    /**
     * Sets the addToCalendarAction property value. Optional field to control adding assignments to students' and teachers' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Use the Prefer: include-unknown-enum-members request header to get the following members in this evolvable enum: studentsOnly. The default value is none.
     * @param EducationAddToCalendarOptions|null $value Value to set for the addToCalendarAction property.
    */
    public function setAddToCalendarAction(?EducationAddToCalendarOptions $value): void {
        $this->getBackingStore()->set('addToCalendarAction', $value);
    }

    /**
     * Sets the dueTime property value. Class-level default value for due time field. Default value is 23:59:00.
     * @param Time|null $value Value to set for the dueTime property.
    */
    public function setDueTime(?Time $value): void {
        $this->getBackingStore()->set('dueTime', $value);
    }

    /**
     * Sets the notificationChannelUrl property value. Default Teams channel to which notifications are sent. Default value is null.
     * @param string|null $value Value to set for the notificationChannelUrl property.
    */
    public function setNotificationChannelUrl(?string $value): void {
        $this->getBackingStore()->set('notificationChannelUrl', $value);
    }

}
