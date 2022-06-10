<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchBucket implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $aggregationFilterToken A token containing the encoded filter to aggregate search matches by the specific key value. To use the filter, pass the token as part of the aggregationFilter property in a searchRequest object, in the format '{field}:/'{aggregationFilterToken}/''. See an example.
    */
    private ?string $aggregationFilterToken = null;
    
    /**
     * @var int|null $count The approximate number of search matches that share the same value specified in the key property. Note that this number is not the exact number of matches.
    */
    private ?int $count = null;
    
    /**
     * @var string|null $key The discrete value of the field that an aggregation was computed on.
    */
    private ?string $key = null;
    
    /**
     * Instantiates a new searchBucket and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchBucket
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchBucket {
        return new SearchBucket();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the aggregationFilterToken property value. A token containing the encoded filter to aggregate search matches by the specific key value. To use the filter, pass the token as part of the aggregationFilter property in a searchRequest object, in the format '{field}:/'{aggregationFilterToken}/''. See an example.
     * @return string|null
    */
    public function getAggregationFilterToken(): ?string {
        return $this->aggregationFilterToken;
    }

    /**
     * Gets the count property value. The approximate number of search matches that share the same value specified in the key property. Note that this number is not the exact number of matches.
     * @return int|null
    */
    public function getCount(): ?int {
        return $this->count;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aggregationFilterToken' => function (ParseNode $n) use ($o) { $o->setAggregationFilterToken($n->getStringValue()); },
            'count' => function (ParseNode $n) use ($o) { $o->setCount($n->getIntegerValue()); },
            'key' => function (ParseNode $n) use ($o) { $o->setKey($n->getStringValue()); },
        ];
    }

    /**
     * Gets the key property value. The discrete value of the field that an aggregation was computed on.
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('aggregationFilterToken', $this->aggregationFilterToken);
        $writer->writeIntegerValue('count', $this->count);
        $writer->writeStringValue('key', $this->key);
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
     * Sets the aggregationFilterToken property value. A token containing the encoded filter to aggregate search matches by the specific key value. To use the filter, pass the token as part of the aggregationFilter property in a searchRequest object, in the format '{field}:/'{aggregationFilterToken}/''. See an example.
     *  @param string|null $value Value to set for the aggregationFilterToken property.
    */
    public function setAggregationFilterToken(?string $value ): void {
        $this->aggregationFilterToken = $value;
    }

    /**
     * Sets the count property value. The approximate number of search matches that share the same value specified in the key property. Note that this number is not the exact number of matches.
     *  @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value ): void {
        $this->count = $value;
    }

    /**
     * Sets the key property value. The discrete value of the field that an aggregation was computed on.
     *  @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value ): void {
        $this->key = $value;
    }

}
