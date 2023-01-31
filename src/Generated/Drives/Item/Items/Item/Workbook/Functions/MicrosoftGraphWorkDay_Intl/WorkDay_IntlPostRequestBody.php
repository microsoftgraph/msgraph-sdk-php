<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphWorkDay_Intl;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WorkDay_IntlPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new workDay_IntlPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkDay_IntlPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkDay_IntlPostRequestBody {
        return new WorkDay_IntlPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * Gets the days property value. 
     * @return Json|null
    */
    public function getDays(): ?Json {
        return $this->getBackingStore()->get('days');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'days' => fn(ParseNode $n) => $o->setDays($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'holidays' => fn(ParseNode $n) => $o->setHolidays($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'weekend' => fn(ParseNode $n) => $o->setWeekend($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the holidays property value. 
     * @return Json|null
    */
    public function getHolidays(): ?Json {
        return $this->getBackingStore()->get('holidays');
    }

    /**
     * Gets the startDate property value. 
     * @return Json|null
    */
    public function getStartDate(): ?Json {
        return $this->getBackingStore()->get('startDate');
    }

    /**
     * Gets the weekend property value. 
     * @return Json|null
    */
    public function getWeekend(): ?Json {
        return $this->getBackingStore()->get('weekend');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('days', $this->getDays());
        $writer->writeObjectValue('holidays', $this->getHolidays());
        $writer->writeObjectValue('startDate', $this->getStartDate());
        $writer->writeObjectValue('weekend', $this->getWeekend());
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
     * Sets the days property value. 
     * @param Json|null $value Value to set for the days property.
    */
    public function setDays(?Json $value): void {
        $this->getBackingStore()->set('days', $value);
    }

    /**
     * Sets the holidays property value. 
     * @param Json|null $value Value to set for the holidays property.
    */
    public function setHolidays(?Json $value): void {
        $this->getBackingStore()->set('holidays', $value);
    }

    /**
     * Sets the startDate property value. 
     * @param Json|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Json $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

    /**
     * Sets the weekend property value. 
     * @param Json|null $value Value to set for the weekend property.
    */
    public function setWeekend(?Json $value): void {
        $this->getBackingStore()->set('weekend', $value);
    }

}
