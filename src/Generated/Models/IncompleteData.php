<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IncompleteData implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new incompleteData and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IncompleteData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IncompleteData {
        return new IncompleteData();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'missingDataBeforeDateTime' => fn(ParseNode $n) => $o->setMissingDataBeforeDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'wasThrottled' => fn(ParseNode $n) => $o->setWasThrottled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the missingDataBeforeDateTime property value. The service does not have source data before the specified time.
     * @return DateTime|null
    */
    public function getMissingDataBeforeDateTime(): ?DateTime {
        return $this->getBackingStore()->get('missingDataBeforeDateTime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the wasThrottled property value. Some data was not recorded due to excessive activity.
     * @return bool|null
    */
    public function getWasThrottled(): ?bool {
        return $this->getBackingStore()->get('wasThrottled');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('missingDataBeforeDateTime', $this->getMissingDataBeforeDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('wasThrottled', $this->getWasThrottled());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the missingDataBeforeDateTime property value. The service does not have source data before the specified time.
     *  @param DateTime|null $value Value to set for the missingDataBeforeDateTime property.
    */
    public function setMissingDataBeforeDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('missingDataBeforeDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the wasThrottled property value. Some data was not recorded due to excessive activity.
     *  @param bool|null $value Value to set for the wasThrottled property.
    */
    public function setWasThrottled(?bool $value): void {
        $this->getBackingStore()->set('wasThrottled', $value);
    }

}
