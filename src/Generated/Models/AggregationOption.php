<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AggregationOption implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var BucketAggregationDefinition|null $bucketDefinition The bucketDefinition property
    */
    private ?BucketAggregationDefinition $bucketDefinition = null;
    
    /**
     * @var string|null $field Computes aggregation on the field while the field exists in current entity type. Required.
    */
    private ?string $field = null;
    
    /**
     * @var int|null $size The number of searchBucket resources to be returned. This is not required when the range is provided manually in the search request. Optional.
    */
    private ?int $size = null;
    
    /**
     * Instantiates a new aggregationOption and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bucketDefinition property value. The bucketDefinition property
     * @return BucketAggregationDefinition|null
    */
    public function getBucketDefinition(): ?BucketAggregationDefinition {
        return $this->bucketDefinition;
    }

    /**
     * Gets the field property value. Computes aggregation on the field while the field exists in current entity type. Required.
     * @return string|null
    */
    public function getField(): ?string {
        return $this->field;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bucketDefinition' => function (ParseNode $n) use ($o) { $o->setBucketDefinition($n->getObjectValue(array(BucketAggregationDefinition::class, 'createFromDiscriminatorValue'))); },
            'field' => function (ParseNode $n) use ($o) { $o->setField($n->getStringValue()); },
            'size' => function (ParseNode $n) use ($o) { $o->setSize($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the size property value. The number of searchBucket resources to be returned. This is not required when the range is provided manually in the search request. Optional.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('bucketDefinition', $this->bucketDefinition);
        $writer->writeStringValue('field', $this->field);
        $writer->writeIntegerValue('size', $this->size);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the bucketDefinition property value. The bucketDefinition property
     *  @param BucketAggregationDefinition|null $value Value to set for the bucketDefinition property.
    */
    public function setBucketDefinition(?BucketAggregationDefinition $value ): void {
        $this->bucketDefinition = $value;
    }

    /**
     * Sets the field property value. Computes aggregation on the field while the field exists in current entity type. Required.
     *  @param string|null $value Value to set for the field property.
    */
    public function setField(?string $value ): void {
        $this->field = $value;
    }

    /**
     * Sets the size property value. The number of searchBucket resources to be returned. This is not required when the range is provided manually in the search request. Optional.
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

}
