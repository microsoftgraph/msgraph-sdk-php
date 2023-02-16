<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkOnlineMeetingInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkOnlineMeetingInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkOnlineMeetingInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkOnlineMeetingInfo {
        return new TeamworkOnlineMeetingInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the calendarEventId property value. The identifier of the calendar event associated with the meeting.
     * @return string|null
    */
    public function getCalendarEventId(): ?string {
        return $this->getBackingStore()->get('calendarEventId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calendarEventId' => fn(ParseNode $n) => $o->setCalendarEventId($n->getStringValue()),
            'joinWebUrl' => fn(ParseNode $n) => $o->setJoinWebUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'organizer' => fn(ParseNode $n) => $o->setOrganizer($n->getObjectValue([TeamworkUserIdentity::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the joinWebUrl property value. The URL that users click to join or uniquely identify the meeting.
     * @return string|null
    */
    public function getJoinWebUrl(): ?string {
        return $this->getBackingStore()->get('joinWebUrl');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the organizer property value. The organizer of the meeting.
     * @return TeamworkUserIdentity|null
    */
    public function getOrganizer(): ?TeamworkUserIdentity {
        return $this->getBackingStore()->get('organizer');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('calendarEventId', $this->getCalendarEventId());
        $writer->writeStringValue('joinWebUrl', $this->getJoinWebUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('organizer', $this->getOrganizer());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the calendarEventId property value. The identifier of the calendar event associated with the meeting.
     * @param string|null $value Value to set for the calendarEventId property.
    */
    public function setCalendarEventId(?string $value): void {
        $this->getBackingStore()->set('calendarEventId', $value);
    }

    /**
     * Sets the joinWebUrl property value. The URL that users click to join or uniquely identify the meeting.
     * @param string|null $value Value to set for the joinWebUrl property.
    */
    public function setJoinWebUrl(?string $value): void {
        $this->getBackingStore()->set('joinWebUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the organizer property value. The organizer of the meeting.
     * @param TeamworkUserIdentity|null $value Value to set for the organizer property.
    */
    public function setOrganizer(?TeamworkUserIdentity $value): void {
        $this->getBackingStore()->set('organizer', $value);
    }

}
