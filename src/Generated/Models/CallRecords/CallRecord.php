<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallRecord extends Entity implements Parsable 
{
    /**
     * Instantiates a new CallRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallRecord {
        return new CallRecord();
    }

    /**
     * Gets the endDateTime property value. UTC time when the last user left the call. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'joinWebUrl' => fn(ParseNode $n) => $o->setJoinWebUrl($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'modalities' => fn(ParseNode $n) => $o->setModalities($n->getCollectionOfEnumValues(Modality::class)),
            'organizer' => fn(ParseNode $n) => $o->setOrganizer($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'participants' => fn(ParseNode $n) => $o->setParticipants($n->getCollectionOfObjectValues([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'sessions' => fn(ParseNode $n) => $o->setSessions($n->getCollectionOfObjectValues([Session::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(CallType::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the joinWebUrl property value. Meeting URL associated to the call. May not be available for a peerToPeer call record type.
     * @return string|null
    */
    public function getJoinWebUrl(): ?string {
        return $this->getBackingStore()->get('joinWebUrl');
    }

    /**
     * Gets the lastModifiedDateTime property value. UTC time when the call record was created. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the modalities property value. List of all the modalities used in the call. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
     * @return array<Modality>|null
    */
    public function getModalities(): ?array {
        return $this->getBackingStore()->get('modalities');
    }

    /**
     * Gets the organizer property value. The organizing party's identity.
     * @return IdentitySet|null
    */
    public function getOrganizer(): ?IdentitySet {
        return $this->getBackingStore()->get('organizer');
    }

    /**
     * Gets the participants property value. List of distinct identities involved in the call.
     * @return array<IdentitySet>|null
    */
    public function getParticipants(): ?array {
        return $this->getBackingStore()->get('participants');
    }

    /**
     * Gets the sessions property value. List of sessions involved in the call. Peer-to-peer calls typically only have one session, whereas group calls typically have at least one session per participant. Read-only. Nullable.
     * @return array<Session>|null
    */
    public function getSessions(): ?array {
        return $this->getBackingStore()->get('sessions');
    }

    /**
     * Gets the startDateTime property value. UTC time when the first user joined the call. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the type property value. The type property
     * @return CallType|null
    */
    public function getType(): ?CallType {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Gets the version property value. Monotonically increasing version of the call record. Higher version call records with the same id includes additional data compared to the lower version.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('joinWebUrl', $this->getJoinWebUrl());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfEnumValues('modalities', $this->getModalities());
        $writer->writeObjectValue('organizer', $this->getOrganizer());
        $writer->writeCollectionOfObjectValues('participants', $this->getParticipants());
        $writer->writeCollectionOfObjectValues('sessions', $this->getSessions());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the endDateTime property value. UTC time when the last user left the call. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the joinWebUrl property value. Meeting URL associated to the call. May not be available for a peerToPeer call record type.
     * @param string|null $value Value to set for the joinWebUrl property.
    */
    public function setJoinWebUrl(?string $value): void {
        $this->getBackingStore()->set('joinWebUrl', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. UTC time when the call record was created. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the modalities property value. List of all the modalities used in the call. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
     * @param array<Modality>|null $value Value to set for the modalities property.
    */
    public function setModalities(?array $value): void {
        $this->getBackingStore()->set('modalities', $value);
    }

    /**
     * Sets the organizer property value. The organizing party's identity.
     * @param IdentitySet|null $value Value to set for the organizer property.
    */
    public function setOrganizer(?IdentitySet $value): void {
        $this->getBackingStore()->set('organizer', $value);
    }

    /**
     * Sets the participants property value. List of distinct identities involved in the call.
     * @param array<IdentitySet>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value): void {
        $this->getBackingStore()->set('participants', $value);
    }

    /**
     * Sets the sessions property value. List of sessions involved in the call. Peer-to-peer calls typically only have one session, whereas group calls typically have at least one session per participant. Read-only. Nullable.
     * @param array<Session>|null $value Value to set for the sessions property.
    */
    public function setSessions(?array $value): void {
        $this->getBackingStore()->set('sessions', $value);
    }

    /**
     * Sets the startDateTime property value. UTC time when the first user joined the call. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param CallType|null $value Value to set for the type property.
    */
    public function setType(?CallType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the version property value. Monotonically increasing version of the call record. Higher version call records with the same id includes additional data compared to the lower version.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
