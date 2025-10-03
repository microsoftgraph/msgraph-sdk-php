<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Reminder implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Reminder and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Reminder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Reminder {
        return new Reminder();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the changeKey property value. Identifies the version of the reminder. Every time the reminder is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object.
     * @return string|null
    */
    public function getChangeKey(): ?string {
        $val = $this->getBackingStore()->get('changeKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'changeKey'");
    }

    /**
     * Gets the eventEndTime property value. The date, time and time zone that the event ends.
     * @return DateTimeTimeZone|null
    */
    public function getEventEndTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('eventEndTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventEndTime'");
    }

    /**
     * Gets the eventId property value. The unique ID of the event. Read only.
     * @return string|null
    */
    public function getEventId(): ?string {
        $val = $this->getBackingStore()->get('eventId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventId'");
    }

    /**
     * Gets the eventLocation property value. The location of the event.
     * @return Location|null
    */
    public function getEventLocation(): ?Location {
        $val = $this->getBackingStore()->get('eventLocation');
        if (is_null($val) || $val instanceof Location) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventLocation'");
    }

    /**
     * Gets the eventStartTime property value. The date, time, and time zone that the event starts.
     * @return DateTimeTimeZone|null
    */
    public function getEventStartTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('eventStartTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventStartTime'");
    }

    /**
     * Gets the eventSubject property value. The text of the event's subject line.
     * @return string|null
    */
    public function getEventSubject(): ?string {
        $val = $this->getBackingStore()->get('eventSubject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventSubject'");
    }

    /**
     * Gets the eventWebLink property value. The URL to open the event in Outlook on the web.The event opens in the browser if you're logged in to your mailbox via Outlook on the web. You're prompted to log in if you aren't already logged in with the browser.This URL can't be accessed from within an iFrame.
     * @return string|null
    */
    public function getEventWebLink(): ?string {
        $val = $this->getBackingStore()->get('eventWebLink');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventWebLink'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'changeKey' => fn(ParseNode $n) => $o->setChangeKey($n->getStringValue()),
            'eventEndTime' => fn(ParseNode $n) => $o->setEventEndTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'eventId' => fn(ParseNode $n) => $o->setEventId($n->getStringValue()),
            'eventLocation' => fn(ParseNode $n) => $o->setEventLocation($n->getObjectValue([Location::class, 'createFromDiscriminatorValue'])),
            'eventStartTime' => fn(ParseNode $n) => $o->setEventStartTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'eventSubject' => fn(ParseNode $n) => $o->setEventSubject($n->getStringValue()),
            'eventWebLink' => fn(ParseNode $n) => $o->setEventWebLink($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reminderFireTime' => fn(ParseNode $n) => $o->setReminderFireTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the reminderFireTime property value. The date, time, and time zone that the reminder is set to occur.
     * @return DateTimeTimeZone|null
    */
    public function getReminderFireTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('reminderFireTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reminderFireTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('changeKey', $this->getChangeKey());
        $writer->writeObjectValue('eventEndTime', $this->getEventEndTime());
        $writer->writeStringValue('eventId', $this->getEventId());
        $writer->writeObjectValue('eventLocation', $this->getEventLocation());
        $writer->writeObjectValue('eventStartTime', $this->getEventStartTime());
        $writer->writeStringValue('eventSubject', $this->getEventSubject());
        $writer->writeStringValue('eventWebLink', $this->getEventWebLink());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('reminderFireTime', $this->getReminderFireTime());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the changeKey property value. Identifies the version of the reminder. Every time the reminder is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object.
     * @param string|null $value Value to set for the changeKey property.
    */
    public function setChangeKey(?string $value): void {
        $this->getBackingStore()->set('changeKey', $value);
    }

    /**
     * Sets the eventEndTime property value. The date, time and time zone that the event ends.
     * @param DateTimeTimeZone|null $value Value to set for the eventEndTime property.
    */
    public function setEventEndTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('eventEndTime', $value);
    }

    /**
     * Sets the eventId property value. The unique ID of the event. Read only.
     * @param string|null $value Value to set for the eventId property.
    */
    public function setEventId(?string $value): void {
        $this->getBackingStore()->set('eventId', $value);
    }

    /**
     * Sets the eventLocation property value. The location of the event.
     * @param Location|null $value Value to set for the eventLocation property.
    */
    public function setEventLocation(?Location $value): void {
        $this->getBackingStore()->set('eventLocation', $value);
    }

    /**
     * Sets the eventStartTime property value. The date, time, and time zone that the event starts.
     * @param DateTimeTimeZone|null $value Value to set for the eventStartTime property.
    */
    public function setEventStartTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('eventStartTime', $value);
    }

    /**
     * Sets the eventSubject property value. The text of the event's subject line.
     * @param string|null $value Value to set for the eventSubject property.
    */
    public function setEventSubject(?string $value): void {
        $this->getBackingStore()->set('eventSubject', $value);
    }

    /**
     * Sets the eventWebLink property value. The URL to open the event in Outlook on the web.The event opens in the browser if you're logged in to your mailbox via Outlook on the web. You're prompted to log in if you aren't already logged in with the browser.This URL can't be accessed from within an iFrame.
     * @param string|null $value Value to set for the eventWebLink property.
    */
    public function setEventWebLink(?string $value): void {
        $this->getBackingStore()->set('eventWebLink', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the reminderFireTime property value. The date, time, and time zone that the reminder is set to occur.
     * @param DateTimeTimeZone|null $value Value to set for the reminderFireTime property.
    */
    public function setReminderFireTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('reminderFireTime', $value);
    }

}
