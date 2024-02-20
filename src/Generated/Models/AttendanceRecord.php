<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AttendanceRecord extends Entity implements Parsable 
{
    /**
     * Instantiates a new AttendanceRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttendanceRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttendanceRecord {
        return new AttendanceRecord();
    }

    /**
     * Gets the attendanceIntervals property value. List of time periods between joining and leaving a meeting.
     * @return array<AttendanceInterval>|null
    */
    public function getAttendanceIntervals(): ?array {
        $val = $this->getBackingStore()->get('attendanceIntervals');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttendanceInterval::class);
            /** @var array<AttendanceInterval>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attendanceIntervals'");
    }

    /**
     * Gets the emailAddress property value. Email address of the user associated with this attendance record.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('emailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailAddress'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attendanceIntervals' => fn(ParseNode $n) => $o->setAttendanceIntervals($n->getCollectionOfObjectValues([AttendanceInterval::class, 'createFromDiscriminatorValue'])),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'identity' => fn(ParseNode $n) => $o->setIdentity($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'role' => fn(ParseNode $n) => $o->setRole($n->getStringValue()),
            'totalAttendanceInSeconds' => fn(ParseNode $n) => $o->setTotalAttendanceInSeconds($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the identity property value. Identity of the user associated with this attendance record.
     * @return Identity|null
    */
    public function getIdentity(): ?Identity {
        $val = $this->getBackingStore()->get('identity');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identity'");
    }

    /**
     * Gets the role property value. Role of the attendee. Possible values are: None, Attendee, Presenter, and Organizer.
     * @return string|null
    */
    public function getRole(): ?string {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Gets the totalAttendanceInSeconds property value. Total duration of the attendances in seconds.
     * @return int|null
    */
    public function getTotalAttendanceInSeconds(): ?int {
        $val = $this->getBackingStore()->get('totalAttendanceInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalAttendanceInSeconds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attendanceIntervals', $this->getAttendanceIntervals());
        $writer->writeStringValue('emailAddress', $this->getEmailAddress());
        $writer->writeObjectValue('identity', $this->getIdentity());
        $writer->writeStringValue('role', $this->getRole());
        $writer->writeIntegerValue('totalAttendanceInSeconds', $this->getTotalAttendanceInSeconds());
    }

    /**
     * Sets the attendanceIntervals property value. List of time periods between joining and leaving a meeting.
     * @param array<AttendanceInterval>|null $value Value to set for the attendanceIntervals property.
    */
    public function setAttendanceIntervals(?array $value): void {
        $this->getBackingStore()->set('attendanceIntervals', $value);
    }

    /**
     * Sets the emailAddress property value. Email address of the user associated with this attendance record.
     * @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value): void {
        $this->getBackingStore()->set('emailAddress', $value);
    }

    /**
     * Sets the identity property value. Identity of the user associated with this attendance record.
     * @param Identity|null $value Value to set for the identity property.
    */
    public function setIdentity(?Identity $value): void {
        $this->getBackingStore()->set('identity', $value);
    }

    /**
     * Sets the role property value. Role of the attendee. Possible values are: None, Attendee, Presenter, and Organizer.
     * @param string|null $value Value to set for the role property.
    */
    public function setRole(?string $value): void {
        $this->getBackingStore()->set('role', $value);
    }

    /**
     * Sets the totalAttendanceInSeconds property value. Total duration of the attendances in seconds.
     * @param int|null $value Value to set for the totalAttendanceInSeconds property.
    */
    public function setTotalAttendanceInSeconds(?int $value): void {
        $this->getBackingStore()->set('totalAttendanceInSeconds', $value);
    }

}
