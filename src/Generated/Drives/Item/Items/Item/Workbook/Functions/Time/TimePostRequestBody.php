<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Time;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TimePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new timePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimePostRequestBody {
        return new TimePostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'hour' => fn(ParseNode $n) => $o->setHour($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'minute' => fn(ParseNode $n) => $o->setMinute($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'second' => fn(ParseNode $n) => $o->setSecond($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the hour property value. The hour property
     * @return Json|null
    */
    public function getHour(): ?Json {
        $val = $this->getBackingStore()->get('hour');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hour'");
    }

    /**
     * Gets the minute property value. The minute property
     * @return Json|null
    */
    public function getMinute(): ?Json {
        $val = $this->getBackingStore()->get('minute');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minute'");
    }

    /**
     * Gets the second property value. The second property
     * @return Json|null
    */
    public function getSecond(): ?Json {
        $val = $this->getBackingStore()->get('second');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'second'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('hour', $this->getHour());
        $writer->writeObjectValue('minute', $this->getMinute());
        $writer->writeObjectValue('second', $this->getSecond());
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
     * Sets the hour property value. The hour property
     * @param Json|null $value Value to set for the hour property.
    */
    public function setHour(?Json $value): void {
        $this->getBackingStore()->set('hour', $value);
    }

    /**
     * Sets the minute property value. The minute property
     * @param Json|null $value Value to set for the minute property.
    */
    public function setMinute(?Json $value): void {
        $this->getBackingStore()->set('minute', $value);
    }

    /**
     * Sets the second property value. The second property
     * @param Json|null $value Value to set for the second property.
    */
    public function setSecond(?Json $value): void {
        $this->getBackingStore()->set('second', $value);
    }

}
