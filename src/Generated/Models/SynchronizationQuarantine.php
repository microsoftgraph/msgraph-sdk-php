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
     * Gets the currentBegan property value. Date and time when the quarantine was last evaluated and imposed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCurrentBegan(): ?DateTime {
        $val = $this->getBackingStore()->get('currentBegan');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentBegan'");
    }

    /**
     * Gets the error property value. Describes the error(s) that occurred when putting the synchronization job into quarantine.
     * @return SynchronizationError|null
    */
    public function getError(): ?SynchronizationError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof SynchronizationError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
     * Gets the nextAttempt property value. Date and time when the next attempt to re-evaluate the quarantine will be made. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getNextAttempt(): ?DateTime {
        $val = $this->getBackingStore()->get('nextAttempt');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextAttempt'");
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
     * Gets the reason property value. The reason property
     * @return QuarantineReason|null
    */
    public function getReason(): ?QuarantineReason {
        $val = $this->getBackingStore()->get('reason');
        if (is_null($val) || $val instanceof QuarantineReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reason'");
    }

    /**
     * Gets the seriesBegan property value. Date and time when the quarantine was first imposed in this series (a series starts when a quarantine is first imposed, and is reset as soon as the quarantine is lifted). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getSeriesBegan(): ?DateTime {
        $val = $this->getBackingStore()->get('seriesBegan');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'seriesBegan'");
    }

    /**
     * Gets the seriesCount property value. Number of times in this series the quarantine was re-evaluated and left in effect (a series starts when quarantine is first imposed, and is reset as soon as quarantine is lifted).
     * @return int|null
    */
    public function getSeriesCount(): ?int {
        $val = $this->getBackingStore()->get('seriesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'seriesCount'");
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
     * Sets the currentBegan property value. Date and time when the quarantine was last evaluated and imposed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the currentBegan property.
    */
    public function setCurrentBegan(?DateTime $value): void {
        $this->getBackingStore()->set('currentBegan', $value);
    }

    /**
     * Sets the error property value. Describes the error(s) that occurred when putting the synchronization job into quarantine.
     * @param SynchronizationError|null $value Value to set for the error property.
    */
    public function setError(?SynchronizationError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the nextAttempt property value. Date and time when the next attempt to re-evaluate the quarantine will be made. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the nextAttempt property.
    */
    public function setNextAttempt(?DateTime $value): void {
        $this->getBackingStore()->set('nextAttempt', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
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
     * Sets the seriesBegan property value. Date and time when the quarantine was first imposed in this series (a series starts when a quarantine is first imposed, and is reset as soon as the quarantine is lifted). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the seriesBegan property.
    */
    public function setSeriesBegan(?DateTime $value): void {
        $this->getBackingStore()->set('seriesBegan', $value);
    }

    /**
     * Sets the seriesCount property value. Number of times in this series the quarantine was re-evaluated and left in effect (a series starts when quarantine is first imposed, and is reset as soon as quarantine is lifted).
     * @param int|null $value Value to set for the seriesCount property.
    */
    public function setSeriesCount(?int $value): void {
        $this->getBackingStore()->set('seriesCount', $value);
    }

}
