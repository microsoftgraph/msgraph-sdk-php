<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingAttendanceReport extends Entity implements Parsable 
{
    /**
     * Instantiates a new meetingAttendanceReport and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.meetingAttendanceReport');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingAttendanceReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingAttendanceReport {
        return new MeetingAttendanceReport();
    }

    /**
     * Gets the attendanceRecords property value. List of attendance records of an attendance report. Read-only.
     * @return array<AttendanceRecord>|null
    */
    public function getAttendanceRecords(): ?array {
        return $this->getBackingStore()->get('attendanceRecords');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attendanceRecords' => fn(ParseNode $n) => $o->setAttendanceRecords($n->getCollectionOfObjectValues([AttendanceRecord::class, 'createFromDiscriminatorValue'])),
            'meetingEndDateTime' => fn(ParseNode $n) => $o->setMeetingEndDateTime($n->getDateTimeValue()),
            'meetingStartDateTime' => fn(ParseNode $n) => $o->setMeetingStartDateTime($n->getDateTimeValue()),
            'totalParticipantCount' => fn(ParseNode $n) => $o->setTotalParticipantCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the meetingEndDateTime property value. UTC time when the meeting ended. Read-only.
     * @return DateTime|null
    */
    public function getMeetingEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('meetingEndDateTime');
    }

    /**
     * Gets the meetingStartDateTime property value. UTC time when the meeting started. Read-only.
     * @return DateTime|null
    */
    public function getMeetingStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('meetingStartDateTime');
    }

    /**
     * Gets the totalParticipantCount property value. Total number of participants. Read-only.
     * @return int|null
    */
    public function getTotalParticipantCount(): ?int {
        return $this->getBackingStore()->get('totalParticipantCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attendanceRecords', $this->getAttendanceRecords());
        $writer->writeDateTimeValue('meetingEndDateTime', $this->getMeetingEndDateTime());
        $writer->writeDateTimeValue('meetingStartDateTime', $this->getMeetingStartDateTime());
        $writer->writeIntegerValue('totalParticipantCount', $this->getTotalParticipantCount());
    }

    /**
     * Sets the attendanceRecords property value. List of attendance records of an attendance report. Read-only.
     *  @param array<AttendanceRecord>|null $value Value to set for the attendanceRecords property.
    */
    public function setAttendanceRecords(?array $value): void {
        $this->getBackingStore()->set('attendanceRecords', $value);
    }

    /**
     * Sets the meetingEndDateTime property value. UTC time when the meeting ended. Read-only.
     *  @param DateTime|null $value Value to set for the meetingEndDateTime property.
    */
    public function setMeetingEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('meetingEndDateTime', $value);
    }

    /**
     * Sets the meetingStartDateTime property value. UTC time when the meeting started. Read-only.
     *  @param DateTime|null $value Value to set for the meetingStartDateTime property.
    */
    public function setMeetingStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('meetingStartDateTime', $value);
    }

    /**
     * Sets the totalParticipantCount property value. Total number of participants. Read-only.
     *  @param int|null $value Value to set for the totalParticipantCount property.
    */
    public function setTotalParticipantCount(?int $value): void {
        $this->getBackingStore()->set('totalParticipantCount', $value);
    }

}
