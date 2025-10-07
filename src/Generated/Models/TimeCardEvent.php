<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TimeCardEvent implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TimeCardEvent and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeCardEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeCardEvent {
        return new TimeCardEvent();
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
     * Gets the dateTime property value. The time the entry is recorded.
     * @return DateTime|null
    */
    public function getDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('dateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dateTime' => fn(ParseNode $n) => $o->setDateTime($n->getDateTimeValue()),
            'isAtApprovedLocation' => fn(ParseNode $n) => $o->setIsAtApprovedLocation($n->getBooleanValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isAtApprovedLocation property value. Indicates whether this action happens at an approved location.
     * @return bool|null
    */
    public function getIsAtApprovedLocation(): ?bool {
        $val = $this->getBackingStore()->get('isAtApprovedLocation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAtApprovedLocation'");
    }

    /**
     * Gets the notes property value. Notes about the timeCardEvent.
     * @return ItemBody|null
    */
    public function getNotes(): ?ItemBody {
        $val = $this->getBackingStore()->get('notes');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('dateTime', $this->getDateTime());
        $writer->writeBooleanValue('isAtApprovedLocation', $this->getIsAtApprovedLocation());
        $writer->writeObjectValue('notes', $this->getNotes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the dateTime property value. The time the entry is recorded.
     * @param DateTime|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dateTime', $value);
    }

    /**
     * Sets the isAtApprovedLocation property value. Indicates whether this action happens at an approved location.
     * @param bool|null $value Value to set for the isAtApprovedLocation property.
    */
    public function setIsAtApprovedLocation(?bool $value): void {
        $this->getBackingStore()->set('isAtApprovedLocation', $value);
    }

    /**
     * Sets the notes property value. Notes about the timeCardEvent.
     * @param ItemBody|null $value Value to set for the notes property.
    */
    public function setNotes(?ItemBody $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
