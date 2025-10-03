<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TimeCardBreak implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TimeCardBreak and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeCardBreak
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeCardBreak {
        return new TimeCardBreak();
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
     * Gets the breakId property value. ID of the timeCardBreak.
     * @return string|null
    */
    public function getBreakId(): ?string {
        $val = $this->getBackingStore()->get('breakId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'breakId'");
    }

    /**
     * Gets the end property value. The start event of the timeCardBreak.
     * @return TimeCardEvent|null
    */
    public function getEnd(): ?TimeCardEvent {
        $val = $this->getBackingStore()->get('end');
        if (is_null($val) || $val instanceof TimeCardEvent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'end'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'breakId' => fn(ParseNode $n) => $o->setBreakId($n->getStringValue()),
            'end' => fn(ParseNode $n) => $o->setEnd($n->getObjectValue([TimeCardEvent::class, 'createFromDiscriminatorValue'])),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'start' => fn(ParseNode $n) => $o->setStart($n->getObjectValue([TimeCardEvent::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the notes property value. Notes about the timeCardBreak.
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
     * Gets the start property value. The start property
     * @return TimeCardEvent|null
    */
    public function getStart(): ?TimeCardEvent {
        $val = $this->getBackingStore()->get('start');
        if (is_null($val) || $val instanceof TimeCardEvent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'start'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('breakId', $this->getBreakId());
        $writer->writeObjectValue('end', $this->getEnd());
        $writer->writeObjectValue('notes', $this->getNotes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('start', $this->getStart());
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
     * Sets the breakId property value. ID of the timeCardBreak.
     * @param string|null $value Value to set for the breakId property.
    */
    public function setBreakId(?string $value): void {
        $this->getBackingStore()->set('breakId', $value);
    }

    /**
     * Sets the end property value. The start event of the timeCardBreak.
     * @param TimeCardEvent|null $value Value to set for the end property.
    */
    public function setEnd(?TimeCardEvent $value): void {
        $this->getBackingStore()->set('end', $value);
    }

    /**
     * Sets the notes property value. Notes about the timeCardBreak.
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

    /**
     * Sets the start property value. The start property
     * @param TimeCardEvent|null $value Value to set for the start property.
    */
    public function setStart(?TimeCardEvent $value): void {
        $this->getBackingStore()->set('start', $value);
    }

}
