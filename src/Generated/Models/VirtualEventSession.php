<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VirtualEventSession extends OnlineMeetingBase implements Parsable 
{
    /**
     * Instantiates a new VirtualEventSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.virtualEventSession');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventSession
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventSession {
        return new VirtualEventSession();
    }

    /**
     * Gets the endDateTime property value. The virtual event session end time.
     * @return DateTimeTimeZone|null
    */
    public function getEndDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'videoOnDemandWebUrl' => fn(ParseNode $n) => $o->setVideoOnDemandWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the startDateTime property value. The virtual event session start time.
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the videoOnDemandWebUrl property value. The URL of the video on demand (VOD) for Microsoft Teams events that allows webinar and town hall organizers to quickly publish and share event recordings.
     * @return string|null
    */
    public function getVideoOnDemandWebUrl(): ?string {
        $val = $this->getBackingStore()->get('videoOnDemandWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'videoOnDemandWebUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('endDateTime', $this->getEndDateTime());
        $writer->writeObjectValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('videoOnDemandWebUrl', $this->getVideoOnDemandWebUrl());
    }

    /**
     * Sets the endDateTime property value. The virtual event session end time.
     * @param DateTimeTimeZone|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the startDateTime property value. The virtual event session start time.
     * @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the videoOnDemandWebUrl property value. The URL of the video on demand (VOD) for Microsoft Teams events that allows webinar and town hall organizers to quickly publish and share event recordings.
     * @param string|null $value Value to set for the videoOnDemandWebUrl property.
    */
    public function setVideoOnDemandWebUrl(?string $value): void {
        $this->getBackingStore()->set('videoOnDemandWebUrl', $value);
    }

}
