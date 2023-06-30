<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AggregationOption implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AggregationOption and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AggregationOption
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AggregationOption {
        return new AggregationOption();
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
     * Gets the bucketDefinition property value. The bucketDefinition property
     * @return BucketAggregationDefinition|null
    */
    public function getBucketDefinition(): ?BucketAggregationDefinition {
        $val = $this->getBackingStore()->get('bucketDefinition');
        if (is_null($val) || $val instanceof BucketAggregationDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bucketDefinition'");
    }

    /**
     * Gets the field property value. Computes aggregation on the field while the field exists in current entity type. Required.
     * @return string|null
    */
    public function getField(): ?string {
        $val = $this->getBackingStore()->get('field');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'field'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bucketDefinition' => fn(ParseNode $n) => $o->setBucketDefinition($n->getObjectValue([BucketAggregationDefinition::class, 'createFromDiscriminatorValue'])),
            'field' => fn(ParseNode $n) => $o->setField($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
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
     * Gets the size property value. The number of searchBucket resources to be returned. This is not required when the range is provided manually in the search request. Optional.
     * @return int|null
    */
    public function getSize(): ?int {
        $val = $this->getBackingStore()->get('size');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'size'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('bucketDefinition', $this->getBucketDefinition());
        $writer->writeStringValue('field', $this->getField());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('size', $this->getSize());
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
     * Sets the bucketDefinition property value. The bucketDefinition property
     * @param BucketAggregationDefinition|null $value Value to set for the bucketDefinition property.
    */
    public function setBucketDefinition(?BucketAggregationDefinition $value): void {
        $this->getBackingStore()->set('bucketDefinition', $value);
    }

    /**
     * Sets the field property value. Computes aggregation on the field while the field exists in current entity type. Required.
     * @param string|null $value Value to set for the field property.
    */
    public function setField(?string $value): void {
        $this->getBackingStore()->set('field', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the size property value. The number of searchBucket resources to be returned. This is not required when the range is provided manually in the search request. Optional.
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

}
