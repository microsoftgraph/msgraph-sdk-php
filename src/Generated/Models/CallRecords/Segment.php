<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Segment extends Entity implements Parsable 
{
    /**
     * Instantiates a new segment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('callee');
        if (is_null($val) || $val instanceof Endpoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callee'");
    }

    /**
     * Gets the caller property value. Endpoint that initiated this segment.
     * @return Endpoint|null
    */
    public function getCaller(): ?Endpoint {
        $val = $this->getBackingStore()->get('caller');
        if (is_null($val) || $val instanceof Endpoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'caller'");
    }

    /**
     * Gets the endDateTime property value. UTC time when the segment ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * Gets the failureInfo property value. Failure information associated with the segment if it failed.
     * @return FailureInfo|null
    */
    public function getFailureInfo(): ?FailureInfo {
        $val = $this->getBackingStore()->get('failureInfo');
        if (is_null($val) || $val instanceof FailureInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failureInfo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callee' => fn(ParseNode $n) => $o->setCallee($n->getObjectValue([Endpoint::class, 'createFromDiscriminatorValue'])),
            'caller' => fn(ParseNode $n) => $o->setCaller($n->getObjectValue([Endpoint::class, 'createFromDiscriminatorValue'])),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'failureInfo' => fn(ParseNode $n) => $o->setFailureInfo($n->getObjectValue([FailureInfo::class, 'createFromDiscriminatorValue'])),
            'media' => fn(ParseNode $n) => $o->setMedia($n->getCollectionOfObjectValues([Media::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the media property value. Media associated with this segment.
     * @return array<Media>|null
    */
    public function getMedia(): ?array {
        $val = $this->getBackingStore()->get('media');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Media::class);
            /** @var array<Media>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'media'");
    }

    /**
     * Gets the startDateTime property value. UTC time when the segment started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
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
        $writer->writeCollectionOfObjectValues('media', $this->getMedia());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
    }

    /**
     * Sets the callee property value. Endpoint that answered this segment.
     * @param Endpoint|null $value Value to set for the callee property.
    */
    public function setCallee(?Endpoint $value): void {
        $this->getBackingStore()->set('callee', $value);
    }

    /**
     * Sets the caller property value. Endpoint that initiated this segment.
     * @param Endpoint|null $value Value to set for the caller property.
    */
    public function setCaller(?Endpoint $value): void {
        $this->getBackingStore()->set('caller', $value);
    }

    /**
     * Sets the endDateTime property value. UTC time when the segment ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the failureInfo property value. Failure information associated with the segment if it failed.
     * @param FailureInfo|null $value Value to set for the failureInfo property.
    */
    public function setFailureInfo(?FailureInfo $value): void {
        $this->getBackingStore()->set('failureInfo', $value);
    }

    /**
     * Sets the media property value. Media associated with this segment.
     * @param array<Media>|null $value Value to set for the media property.
    */
    public function setMedia(?array $value): void {
        $this->getBackingStore()->set('media', $value);
    }

    /**
     * Sets the startDateTime property value. UTC time when the segment started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
