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

class SynchronizationProgress implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new synchronizationProgress and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationProgress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationProgress {
        return new SynchronizationProgress();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the completedUnits property value. The completedUnits property
     * @return int|null
    */
    public function getCompletedUnits(): ?int {
        $val = $this->getBackingStore()->get('completedUnits');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedUnits'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'completedUnits' => fn(ParseNode $n) => $o->setCompletedUnits($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'progressObservationDateTime' => fn(ParseNode $n) => $o->setProgressObservationDateTime($n->getDateTimeValue()),
            'totalUnits' => fn(ParseNode $n) => $o->setTotalUnits($n->getIntegerValue()),
            'units' => fn(ParseNode $n) => $o->setUnits($n->getStringValue()),
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
     * Gets the progressObservationDateTime property value. The progressObservationDateTime property
     * @return DateTime|null
    */
    public function getProgressObservationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('progressObservationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'progressObservationDateTime'");
    }

    /**
     * Gets the totalUnits property value. The totalUnits property
     * @return int|null
    */
    public function getTotalUnits(): ?int {
        $val = $this->getBackingStore()->get('totalUnits');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalUnits'");
    }

    /**
     * Gets the units property value. The units property
     * @return string|null
    */
    public function getUnits(): ?string {
        $val = $this->getBackingStore()->get('units');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'units'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('completedUnits', $this->getCompletedUnits());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('progressObservationDateTime', $this->getProgressObservationDateTime());
        $writer->writeIntegerValue('totalUnits', $this->getTotalUnits());
        $writer->writeStringValue('units', $this->getUnits());
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
     * Sets the completedUnits property value. The completedUnits property
     * @param int|null $value Value to set for the completedUnits property.
    */
    public function setCompletedUnits(?int $value): void {
        $this->getBackingStore()->set('completedUnits', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the progressObservationDateTime property value. The progressObservationDateTime property
     * @param DateTime|null $value Value to set for the progressObservationDateTime property.
    */
    public function setProgressObservationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('progressObservationDateTime', $value);
    }

    /**
     * Sets the totalUnits property value. The totalUnits property
     * @param int|null $value Value to set for the totalUnits property.
    */
    public function setTotalUnits(?int $value): void {
        $this->getBackingStore()->set('totalUnits', $value);
    }

    /**
     * Sets the units property value. The units property
     * @param string|null $value Value to set for the units property.
    */
    public function setUnits(?string $value): void {
        $this->getBackingStore()->set('units', $value);
    }

}
