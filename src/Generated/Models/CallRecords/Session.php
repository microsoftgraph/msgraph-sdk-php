<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Session extends Entity implements Parsable 
{
    /**
     * Instantiates a new session and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Session
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Session {
        return new Session();
    }

    /**
     * Gets the callee property value. Endpoint that answered the session.
     * @return Endpoint|null
    */
    public function getCallee(): ?Endpoint {
        return $this->getBackingStore()->get('callee');
    }

    /**
     * Gets the caller property value. Endpoint that initiated the session.
     * @return Endpoint|null
    */
    public function getCaller(): ?Endpoint {
        return $this->getBackingStore()->get('caller');
    }

    /**
     * Gets the endDateTime property value. UTC time when the last user left the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * Gets the failureInfo property value. Failure information associated with the session if the session failed.
     * @return FailureInfo|null
    */
    public function getFailureInfo(): ?FailureInfo {
        return $this->getBackingStore()->get('failureInfo');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callee' => fn(ParseNode $n) => $o->setCallee($n->getObjectValue([Endpoint::class, 'createFromDiscriminatorValue'])),
            'caller' => fn(ParseNode $n) => $o->setCaller($n->getObjectValue([Endpoint::class, 'createFromDiscriminatorValue'])),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'failureInfo' => fn(ParseNode $n) => $o->setFailureInfo($n->getObjectValue([FailureInfo::class, 'createFromDiscriminatorValue'])),
            'modalities' => fn(ParseNode $n) => $o->setModalities($n->getCollectionOfEnumValues(Modality::class)),
            'segments' => fn(ParseNode $n) => $o->setSegments($n->getCollectionOfObjectValues([Segment::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the modalities property value. List of modalities present in the session. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
     * @return array<Modality>|null
    */
    public function getModalities(): ?array {
        return $this->getBackingStore()->get('modalities');
    }

    /**
     * Gets the segments property value. The list of segments involved in the session. Read-only. Nullable.
     * @return array<Segment>|null
    */
    public function getSegments(): ?array {
        return $this->getBackingStore()->get('segments');
    }

    /**
     * Gets the startDateTime property value. UTC time when the first user joined the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('callee', $this->getCallee());
        $writer->writeObjectValue('caller', $this->getCaller());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeObjectValue('failureInfo', $this->getFailureInfo());
        $writer->writeCollectionOfEnumValues('modalities', $this->getModalities());
        $writer->writeCollectionOfObjectValues('segments', $this->getSegments());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
    }

    /**
     * Sets the callee property value. Endpoint that answered the session.
     *  @param Endpoint|null $value Value to set for the callee property.
    */
    public function setCallee(?Endpoint $value): void {
        $this->getBackingStore()->set('callee', $value);
    }

    /**
     * Sets the caller property value. Endpoint that initiated the session.
     *  @param Endpoint|null $value Value to set for the caller property.
    */
    public function setCaller(?Endpoint $value): void {
        $this->getBackingStore()->set('caller', $value);
    }

    /**
     * Sets the endDateTime property value. UTC time when the last user left the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the failureInfo property value. Failure information associated with the session if the session failed.
     *  @param FailureInfo|null $value Value to set for the failureInfo property.
    */
    public function setFailureInfo(?FailureInfo $value): void {
        $this->getBackingStore()->set('failureInfo', $value);
    }

    /**
     * Sets the modalities property value. List of modalities present in the session. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
     *  @param array<Modality>|null $value Value to set for the modalities property.
    */
    public function setModalities(?array $value): void {
        $this->getBackingStore()->set('modalities', $value);
    }

    /**
     * Sets the segments property value. The list of segments involved in the session. Read-only. Nullable.
     *  @param array<Segment>|null $value Value to set for the segments property.
    */
    public function setSegments(?array $value): void {
        $this->getBackingStore()->set('segments', $value);
    }

    /**
     * Sets the startDateTime property value. UTC time when the first user joined the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
