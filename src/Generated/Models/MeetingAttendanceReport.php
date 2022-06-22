<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingAttendanceReport extends Entity implements Parsable 
{
    /**
     * @var array<AttendanceRecord>|null $attendanceRecords List of attendance records of an attendance report. Read-only.
    */
    private ?array $attendanceRecords = null;
    
    /**
     * @var DateTime|null $meetingEndDateTime UTC time when the meeting ended. Read-only.
    */
    private ?DateTime $meetingEndDateTime = null;
    
    /**
     * @var DateTime|null $meetingStartDateTime UTC time when the meeting started. Read-only.
    */
    private ?DateTime $meetingStartDateTime = null;
    
    /**
     * @var int|null $totalParticipantCount Total number of participants. Read-only.
    */
    private ?int $totalParticipantCount = null;
    
    /**
     * Instantiates a new meetingAttendanceReport and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->attendanceRecords;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attendanceRecords' => function (ParseNode $n) use ($o) { $o->setAttendanceRecords($n->getCollectionOfObjectValues(array(AttendanceRecord::class, 'createFromDiscriminatorValue'))); },
            'meetingEndDateTime' => function (ParseNode $n) use ($o) { $o->setMeetingEndDateTime($n->getDateTimeValue()); },
            'meetingStartDateTime' => function (ParseNode $n) use ($o) { $o->setMeetingStartDateTime($n->getDateTimeValue()); },
            'totalParticipantCount' => function (ParseNode $n) use ($o) { $o->setTotalParticipantCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the meetingEndDateTime property value. UTC time when the meeting ended. Read-only.
     * @return DateTime|null
    */
    public function getMeetingEndDateTime(): ?DateTime {
        return $this->meetingEndDateTime;
    }

    /**
     * Gets the meetingStartDateTime property value. UTC time when the meeting started. Read-only.
     * @return DateTime|null
    */
    public function getMeetingStartDateTime(): ?DateTime {
        return $this->meetingStartDateTime;
    }

    /**
     * Gets the totalParticipantCount property value. Total number of participants. Read-only.
     * @return int|null
    */
    public function getTotalParticipantCount(): ?int {
        return $this->totalParticipantCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attendanceRecords', $this->attendanceRecords);
        $writer->writeDateTimeValue('meetingEndDateTime', $this->meetingEndDateTime);
        $writer->writeDateTimeValue('meetingStartDateTime', $this->meetingStartDateTime);
        $writer->writeIntegerValue('totalParticipantCount', $this->totalParticipantCount);
    }

    /**
     * Sets the attendanceRecords property value. List of attendance records of an attendance report. Read-only.
     *  @param array<AttendanceRecord>|null $value Value to set for the attendanceRecords property.
    */
    public function setAttendanceRecords(?array $value ): void {
        $this->attendanceRecords = $value;
    }

    /**
     * Sets the meetingEndDateTime property value. UTC time when the meeting ended. Read-only.
     *  @param DateTime|null $value Value to set for the meetingEndDateTime property.
    */
    public function setMeetingEndDateTime(?DateTime $value ): void {
        $this->meetingEndDateTime = $value;
    }

    /**
     * Sets the meetingStartDateTime property value. UTC time when the meeting started. Read-only.
     *  @param DateTime|null $value Value to set for the meetingStartDateTime property.
    */
    public function setMeetingStartDateTime(?DateTime $value ): void {
        $this->meetingStartDateTime = $value;
    }

    /**
     * Sets the totalParticipantCount property value. Total number of participants. Read-only.
     *  @param int|null $value Value to set for the totalParticipantCount property.
    */
    public function setTotalParticipantCount(?int $value ): void {
        $this->totalParticipantCount = $value;
    }

}
