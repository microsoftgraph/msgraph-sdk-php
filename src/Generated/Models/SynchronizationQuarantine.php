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

class SynchronizationQuarantine implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new synchronizationQuarantine and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationQuarantine
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationQuarantine {
        return new SynchronizationQuarantine();
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
     * Gets the currentBegan property value. The currentBegan property
     * @return DateTime|null
    */
    public function getCurrentBegan(): ?DateTime {
        return $this->getBackingStore()->get('currentBegan');
    }

    /**
     * Gets the error property value. The error property
     * @return SynchronizationError|null
    */
    public function getError(): ?SynchronizationError {
        return $this->getBackingStore()->get('error');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currentBegan' => fn(ParseNode $n) => $o->setCurrentBegan($n->getDateTimeValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([SynchronizationError::class, 'createFromDiscriminatorValue'])),
            'nextAttempt' => fn(ParseNode $n) => $o->setNextAttempt($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getEnumValue(QuarantineReason::class)),
            'seriesBegan' => fn(ParseNode $n) => $o->setSeriesBegan($n->getDateTimeValue()),
            'seriesCount' => fn(ParseNode $n) => $o->setSeriesCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the nextAttempt property value. The nextAttempt property
     * @return DateTime|null
    */
    public function getNextAttempt(): ?DateTime {
        return $this->getBackingStore()->get('nextAttempt');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the reason property value. The reason property
     * @return QuarantineReason|null
    */
    public function getReason(): ?QuarantineReason {
        return $this->getBackingStore()->get('reason');
    }

    /**
     * Gets the seriesBegan property value. The seriesBegan property
     * @return DateTime|null
    */
    public function getSeriesBegan(): ?DateTime {
        return $this->getBackingStore()->get('seriesBegan');
    }

    /**
     * Gets the seriesCount property value. The seriesCount property
     * @return int|null
    */
    public function getSeriesCount(): ?int {
        return $this->getBackingStore()->get('seriesCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('currentBegan', $this->getCurrentBegan());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeDateTimeValue('nextAttempt', $this->getNextAttempt());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('reason', $this->getReason());
        $writer->writeDateTimeValue('seriesBegan', $this->getSeriesBegan());
        $writer->writeIntegerValue('seriesCount', $this->getSeriesCount());
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
     * Sets the currentBegan property value. The currentBegan property
     * @param DateTime|null $value Value to set for the currentBegan property.
    */
    public function setCurrentBegan(?DateTime $value): void {
        $this->getBackingStore()->set('currentBegan', $value);
    }

    /**
     * Sets the error property value. The error property
     * @param SynchronizationError|null $value Value to set for the error property.
    */
    public function setError(?SynchronizationError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the nextAttempt property value. The nextAttempt property
     * @param DateTime|null $value Value to set for the nextAttempt property.
    */
    public function setNextAttempt(?DateTime $value): void {
        $this->getBackingStore()->set('nextAttempt', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the reason property value. The reason property
     * @param QuarantineReason|null $value Value to set for the reason property.
    */
    public function setReason(?QuarantineReason $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

    /**
     * Sets the seriesBegan property value. The seriesBegan property
     * @param DateTime|null $value Value to set for the seriesBegan property.
    */
    public function setSeriesBegan(?DateTime $value): void {
        $this->getBackingStore()->set('seriesBegan', $value);
    }

    /**
     * Sets the seriesCount property value. The seriesCount property
     * @param int|null $value Value to set for the seriesCount property.
    */
    public function setSeriesCount(?int $value): void {
        $this->getBackingStore()->set('seriesCount', $value);
    }

}
