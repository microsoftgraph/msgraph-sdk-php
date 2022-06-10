<?php

namespace Microsoft\Graph\Models\CallRecords;

use DateTime;
use Microsoft\Graph\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Session extends Entity implements Parsable 
{
    /**
     * @var Endpoint|null $callee Endpoint that answered the session.
    */
    private ?Endpoint $callee = null;
    
    /**
     * @var Endpoint|null $caller Endpoint that initiated the session.
    */
    private ?Endpoint $caller = null;
    
    /**
     * @var DateTime|null $endDateTime UTC time when the last user left the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var FailureInfo|null $failureInfo Failure information associated with the session if the session failed.
    */
    private ?FailureInfo $failureInfo = null;
    
    /**
     * @var array<string>|null $modalities List of modalities present in the session. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
    */
    private ?array $modalities = null;
    
    /**
     * @var array<Segment>|null $segments The list of segments involved in the session. Read-only. Nullable.
    */
    private ?array $segments = null;
    
    /**
     * @var DateTime|null $startDateTime UTC fime when the first user joined the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $startDateTime = null;
    
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
        return $this->callee;
    }

    /**
     * Gets the caller property value. Endpoint that initiated the session.
     * @return Endpoint|null
    */
    public function getCaller(): ?Endpoint {
        return $this->caller;
    }

    /**
     * Gets the endDateTime property value. UTC time when the last user left the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * Gets the failureInfo property value. Failure information associated with the session if the session failed.
     * @return FailureInfo|null
    */
    public function getFailureInfo(): ?FailureInfo {
        return $this->failureInfo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callee' => function (ParseNode $n) use ($o) { $o->setCallee($n->getObjectValue(array(Endpoint::class, 'createFromDiscriminatorValue'))); },
            'caller' => function (ParseNode $n) use ($o) { $o->setCaller($n->getObjectValue(array(Endpoint::class, 'createFromDiscriminatorValue'))); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'failureInfo' => function (ParseNode $n) use ($o) { $o->setFailureInfo($n->getObjectValue(array(FailureInfo::class, 'createFromDiscriminatorValue'))); },
            'modalities' => function (ParseNode $n) use ($o) { $o->setModalities($n->getCollectionOfPrimitiveValues()); },
            'segments' => function (ParseNode $n) use ($o) { $o->setSegments($n->getCollectionOfObjectValues(array(Segment::class, 'createFromDiscriminatorValue'))); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the modalities property value. List of modalities present in the session. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
     * @return array<string>|null
    */
    public function getModalities(): ?array {
        return $this->modalities;
    }

    /**
     * Gets the segments property value. The list of segments involved in the session. Read-only. Nullable.
     * @return array<Segment>|null
    */
    public function getSegments(): ?array {
        return $this->segments;
    }

    /**
     * Gets the startDateTime property value. UTC fime when the first user joined the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('callee', $this->callee);
        $writer->writeObjectValue('caller', $this->caller);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeObjectValue('failureInfo', $this->failureInfo);
        $writer->writeCollectionOfPrimitiveValues('modalities', $this->modalities);
        $writer->writeCollectionOfObjectValues('segments', $this->segments);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
    }

    /**
     * Sets the callee property value. Endpoint that answered the session.
     *  @param Endpoint|null $value Value to set for the callee property.
    */
    public function setCallee(?Endpoint $value ): void {
        $this->callee = $value;
    }

    /**
     * Sets the caller property value. Endpoint that initiated the session.
     *  @param Endpoint|null $value Value to set for the caller property.
    */
    public function setCaller(?Endpoint $value ): void {
        $this->caller = $value;
    }

    /**
     * Sets the endDateTime property value. UTC time when the last user left the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the failureInfo property value. Failure information associated with the session if the session failed.
     *  @param FailureInfo|null $value Value to set for the failureInfo property.
    */
    public function setFailureInfo(?FailureInfo $value ): void {
        $this->failureInfo = $value;
    }

    /**
     * Sets the modalities property value. List of modalities present in the session. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
     *  @param array<string>|null $value Value to set for the modalities property.
    */
    public function setModalities(?array $value ): void {
        $this->modalities = $value;
    }

    /**
     * Sets the segments property value. The list of segments involved in the session. Read-only. Nullable.
     *  @param array<Segment>|null $value Value to set for the segments property.
    */
    public function setSegments(?array $value ): void {
        $this->segments = $value;
    }

    /**
     * Sets the startDateTime property value. UTC fime when the first user joined the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
