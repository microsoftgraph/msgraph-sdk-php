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

class RetentionPeriodChange implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RetentionPeriodChange and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetentionPeriodChange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetentionPeriodChange {
        return new RetentionPeriodChange();
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
     * Gets the effectiveFromDateTime property value. The date and time from which the retention period change takes effect. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2026, is 2026-01-01T00:00:00Z. Nullable.
     * @return DateTime|null
    */
    public function getEffectiveFromDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('effectiveFromDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'effectiveFromDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'effectiveFromDateTime' => fn(ParseNode $n) => $o->setEffectiveFromDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(RetentionPeriodChangeStatus::class)),
            'targetRetentionPeriodInDays' => fn(ParseNode $n) => $o->setTargetRetentionPeriodInDays($n->getIntegerValue()),
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
     * Gets the status property value. The status property
     * @return RetentionPeriodChangeStatus|null
    */
    public function getStatus(): ?RetentionPeriodChangeStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof RetentionPeriodChangeStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the targetRetentionPeriodInDays property value. Specifies the retention period, in days, that applies after the change is completed. Nullable.
     * @return int|null
    */
    public function getTargetRetentionPeriodInDays(): ?int {
        $val = $this->getBackingStore()->get('targetRetentionPeriodInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetRetentionPeriodInDays'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('effectiveFromDateTime', $this->getEffectiveFromDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeIntegerValue('targetRetentionPeriodInDays', $this->getTargetRetentionPeriodInDays());
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
     * Sets the effectiveFromDateTime property value. The date and time from which the retention period change takes effect. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2026, is 2026-01-01T00:00:00Z. Nullable.
     * @param DateTime|null $value Value to set for the effectiveFromDateTime property.
    */
    public function setEffectiveFromDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('effectiveFromDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param RetentionPeriodChangeStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RetentionPeriodChangeStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the targetRetentionPeriodInDays property value. Specifies the retention period, in days, that applies after the change is completed. Nullable.
     * @param int|null $value Value to set for the targetRetentionPeriodInDays property.
    */
    public function setTargetRetentionPeriodInDays(?int $value): void {
        $this->getBackingStore()->set('targetRetentionPeriodInDays', $value);
    }

}
