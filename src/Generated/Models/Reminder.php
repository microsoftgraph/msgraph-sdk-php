<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Reminder implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $changeKey Identifies the version of the reminder. Every time the reminder is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object.
    */
    private ?string $changeKey = null;
    
    /**
     * @var DateTimeTimeZone|null $eventEndTime The date, time and time zone that the event ends.
    */
    private ?DateTimeTimeZone $eventEndTime = null;
    
    /**
     * @var string|null $eventId The unique ID of the event. Read only.
    */
    private ?string $eventId = null;
    
    /**
     * @var Location|null $eventLocation The location of the event.
    */
    private ?Location $eventLocation = null;
    
    /**
     * @var DateTimeTimeZone|null $eventStartTime The date, time, and time zone that the event starts.
    */
    private ?DateTimeTimeZone $eventStartTime = null;
    
    /**
     * @var string|null $eventSubject The text of the event's subject line.
    */
    private ?string $eventSubject = null;
    
    /**
     * @var string|null $eventWebLink The URL to open the event in Outlook on the web.The event will open in the browser if you are logged in to your mailbox via Outlook on the web. You will be prompted to login if you are not already logged in with the browser.This URL cannot be accessed from within an iFrame.
    */
    private ?string $eventWebLink = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTimeTimeZone|null $reminderFireTime The date, time, and time zone that the reminder is set to occur.
    */
    private ?DateTimeTimeZone $reminderFireTime = null;
    
    /**
     * Instantiates a new reminder and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.reminder');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the changeKey property value. Identifies the version of the reminder. Every time the reminder is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object.
     * @return string|null
    */
    public function getChangeKey(): ?string {
        return $this->changeKey;
    }

    /**
     * Gets the eventEndTime property value. The date, time and time zone that the event ends.
     * @return DateTimeTimeZone|null
    */
    public function getEventEndTime(): ?DateTimeTimeZone {
        return $this->eventEndTime;
    }

    /**
     * Gets the eventId property value. The unique ID of the event. Read only.
     * @return string|null
    */
    public function getEventId(): ?string {
        return $this->eventId;
    }

    /**
     * Gets the eventLocation property value. The location of the event.
     * @return Location|null
    */
    public function getEventLocation(): ?Location {
        return $this->eventLocation;
    }

    /**
     * Gets the eventStartTime property value. The date, time, and time zone that the event starts.
     * @return DateTimeTimeZone|null
    */
    public function getEventStartTime(): ?DateTimeTimeZone {
        return $this->eventStartTime;
    }

    /**
     * Gets the eventSubject property value. The text of the event's subject line.
     * @return string|null
    */
    public function getEventSubject(): ?string {
        return $this->eventSubject;
    }

    /**
     * Gets the eventWebLink property value. The URL to open the event in Outlook on the web.The event will open in the browser if you are logged in to your mailbox via Outlook on the web. You will be prompted to login if you are not already logged in with the browser.This URL cannot be accessed from within an iFrame.
     * @return string|null
    */
    public function getEventWebLink(): ?string {
        return $this->eventWebLink;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->odataType;
    }

    /**
     * Gets the reminderFireTime property value. The date, time, and time zone that the reminder is set to occur.
     * @return DateTimeTimeZone|null
    */
    public function getReminderFireTime(): ?DateTimeTimeZone {
        return $this->reminderFireTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('changeKey', $this->changeKey);
        $writer->writeObjectValue('eventEndTime', $this->eventEndTime);
        $writer->writeStringValue('eventId', $this->eventId);
        $writer->writeObjectValue('eventLocation', $this->eventLocation);
        $writer->writeObjectValue('eventStartTime', $this->eventStartTime);
        $writer->writeStringValue('eventSubject', $this->eventSubject);
        $writer->writeStringValue('eventWebLink', $this->eventWebLink);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('reminderFireTime', $this->reminderFireTime);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the changeKey property value. Identifies the version of the reminder. Every time the reminder is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object.
     *  @param string|null $value Value to set for the changeKey property.
    */
    public function setChangeKey(?string $value ): void {
        $this->changeKey = $value;
    }

    /**
     * Sets the eventEndTime property value. The date, time and time zone that the event ends.
     *  @param DateTimeTimeZone|null $value Value to set for the eventEndTime property.
    */
    public function setEventEndTime(?DateTimeTimeZone $value ): void {
        $this->eventEndTime = $value;
    }

    /**
     * Sets the eventId property value. The unique ID of the event. Read only.
     *  @param string|null $value Value to set for the eventId property.
    */
    public function setEventId(?string $value ): void {
        $this->eventId = $value;
    }

    /**
     * Sets the eventLocation property value. The location of the event.
     *  @param Location|null $value Value to set for the eventLocation property.
    */
    public function setEventLocation(?Location $value ): void {
        $this->eventLocation = $value;
    }

    /**
     * Sets the eventStartTime property value. The date, time, and time zone that the event starts.
     *  @param DateTimeTimeZone|null $value Value to set for the eventStartTime property.
    */
    public function setEventStartTime(?DateTimeTimeZone $value ): void {
        $this->eventStartTime = $value;
    }

    /**
     * Sets the eventSubject property value. The text of the event's subject line.
     *  @param string|null $value Value to set for the eventSubject property.
    */
    public function setEventSubject(?string $value ): void {
        $this->eventSubject = $value;
    }

    /**
     * Sets the eventWebLink property value. The URL to open the event in Outlook on the web.The event will open in the browser if you are logged in to your mailbox via Outlook on the web. You will be prompted to login if you are not already logged in with the browser.This URL cannot be accessed from within an iFrame.
     *  @param string|null $value Value to set for the eventWebLink property.
    */
    public function setEventWebLink(?string $value ): void {
        $this->eventWebLink = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the reminderFireTime property value. The date, time, and time zone that the reminder is set to occur.
     *  @param DateTimeTimeZone|null $value Value to set for the reminderFireTime property.
    */
    public function setReminderFireTime(?DateTimeTimeZone $value ): void {
        $this->reminderFireTime = $value;
    }

}
