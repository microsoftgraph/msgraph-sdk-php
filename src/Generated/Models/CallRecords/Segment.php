<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Segment extends Entity implements Parsable 
{
    /**
     * @var Endpoint|null $callee Endpoint that answered this segment.
    */
    private ?Endpoint $callee = null;
    
    /**
     * @var Endpoint|null $caller Endpoint that initiated this segment.
    */
    private ?Endpoint $caller = null;
    
    /**
     * @var DateTime|null $endDateTime UTC time when the segment ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var FailureInfo|null $failureInfo Failure information associated with the segment if it failed.
    */
    private ?FailureInfo $failureInfo = null;
    
    /**
     * @var array<Media>|null $media Media associated with this segment.
    */
    private ?array $media = null;
    
    /**
     * @var DateTime|null $startDateTime UTC time when the segment started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new segment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.callRecords.segment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Segment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Segment {
        return new Segment();
    }

    /**
     * Gets the callee property value. Endpoint that answered this segment.
     * @return Endpoint|null
    */
    public function getCallee(): ?Endpoint {
        return $this->callee;
    }

    /**
     * Gets the caller property value. Endpoint that initiated this segment.
     * @return Endpoint|null
    */
    public function getCaller(): ?Endpoint {
        return $this->caller;
    }

    /**
     * Gets the endDateTime property value. UTC time when the segment ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * Gets the failureInfo property value. Failure information associated with the segment if it failed.
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
            'media' => function (ParseNode $n) use ($o) { $o->setMedia($n->getCollectionOfObjectValues(array(Media::class, 'createFromDiscriminatorValue'))); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the media property value. Media associated with this segment.
     * @return array<Media>|null
    */
    public function getMedia(): ?array {
        return $this->media;
    }

    /**
     * Gets the startDateTime property value. UTC time when the segment started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
        $writer->writeCollectionOfObjectValues('media', $this->media);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
    }

    /**
     * Sets the callee property value. Endpoint that answered this segment.
     *  @param Endpoint|null $value Value to set for the callee property.
    */
    public function setCallee(?Endpoint $value ): void {
        $this->callee = $value;
    }

    /**
     * Sets the caller property value. Endpoint that initiated this segment.
     *  @param Endpoint|null $value Value to set for the caller property.
    */
    public function setCaller(?Endpoint $value ): void {
        $this->caller = $value;
    }

    /**
     * Sets the endDateTime property value. UTC time when the segment ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the failureInfo property value. Failure information associated with the segment if it failed.
     *  @param FailureInfo|null $value Value to set for the failureInfo property.
    */
    public function setFailureInfo(?FailureInfo $value ): void {
        $this->failureInfo = $value;
    }

    /**
     * Sets the media property value. Media associated with this segment.
     *  @param array<Media>|null $value Value to set for the media property.
    */
    public function setMedia(?array $value ): void {
        $this->media = $value;
    }

    /**
     * Sets the startDateTime property value. UTC time when the segment started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
