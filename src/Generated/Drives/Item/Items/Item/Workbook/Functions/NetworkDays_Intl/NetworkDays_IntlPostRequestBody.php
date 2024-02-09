<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\NetworkDays_Intl;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class NetworkDays_IntlPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new NetworkDays_IntlPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NetworkDays_IntlPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NetworkDays_IntlPostRequestBody {
        return new NetworkDays_IntlPostRequestBody();
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
     * Gets the endDate property value. The endDate property
     * @return Json|null
    */
    public function getEndDate(): ?Json {
        $val = $this->getBackingStore()->get('endDate');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'holidays' => fn(ParseNode $n) => $o->setHolidays($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'weekend' => fn(ParseNode $n) => $o->setWeekend($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the holidays property value. The holidays property
     * @return Json|null
    */
    public function getHolidays(): ?Json {
        $val = $this->getBackingStore()->get('holidays');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'holidays'");
    }

    /**
     * Gets the startDate property value. The startDate property
     * @return Json|null
    */
    public function getStartDate(): ?Json {
        $val = $this->getBackingStore()->get('startDate');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDate'");
    }

    /**
     * Gets the weekend property value. The weekend property
     * @return Json|null
    */
    public function getWeekend(): ?Json {
        $val = $this->getBackingStore()->get('weekend');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'weekend'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('endDate', $this->getEndDate());
        $writer->writeObjectValue('holidays', $this->getHolidays());
        $writer->writeObjectValue('startDate', $this->getStartDate());
        $writer->writeObjectValue('weekend', $this->getWeekend());
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
     * Sets the endDate property value. The endDate property
     * @param Json|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Json $value): void {
        $this->getBackingStore()->set('endDate', $value);
    }

    /**
     * Sets the holidays property value. The holidays property
     * @param Json|null $value Value to set for the holidays property.
    */
    public function setHolidays(?Json $value): void {
        $this->getBackingStore()->set('holidays', $value);
    }

    /**
     * Sets the startDate property value. The startDate property
     * @param Json|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Json $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

    /**
     * Sets the weekend property value. The weekend property
     * @param Json|null $value Value to set for the weekend property.
    */
    public function setWeekend(?Json $value): void {
        $this->getBackingStore()->set('weekend', $value);
    }

}
