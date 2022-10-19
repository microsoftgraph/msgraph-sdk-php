<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BucketAggregationDefinition implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isDescending True to specify the sort order as descending. The default is false, with the sort order as ascending. Optional.
    */
    private ?bool $isDescending = null;
    
    /**
     * @var int|null $minimumCount The minimum number of items that should be present in the aggregation to be returned in a bucket. Optional.
    */
    private ?int $minimumCount = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $prefixFilter A filter to define a matching criteria. The key should start with the specified prefix to be returned in the response. Optional.
    */
    private ?string $prefixFilter = null;
    
    /**
     * @var array<BucketAggregationRange>|null $ranges Specifies the manual ranges to compute the aggregations. This is only valid for non-string refiners of date or numeric type. Optional.
    */
    private ?array $ranges = null;
    
    /**
     * @var BucketAggregationSortProperty|null $sortBy The sortBy property
    */
    private ?BucketAggregationSortProperty $sortBy = null;
    
    /**
     * Instantiates a new bucketAggregationDefinition and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.bucketAggregationDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BucketAggregationDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BucketAggregationDefinition {
        return new BucketAggregationDefinition();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isDescending' => fn(ParseNode $n) => $o->setIsDescending($n->getBooleanValue()),
            'minimumCount' => fn(ParseNode $n) => $o->setMinimumCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'prefixFilter' => fn(ParseNode $n) => $o->setPrefixFilter($n->getStringValue()),
            'ranges' => fn(ParseNode $n) => $o->setRanges($n->getCollectionOfObjectValues([BucketAggregationRange::class, 'createFromDiscriminatorValue'])),
            'sortBy' => fn(ParseNode $n) => $o->setSortBy($n->getEnumValue(BucketAggregationSortProperty::class)),
        ];
    }

    /**
     * Gets the isDescending property value. True to specify the sort order as descending. The default is false, with the sort order as ascending. Optional.
     * @return bool|null
    */
    public function getIsDescending(): ?bool {
        return $this->isDescending;
    }

    /**
     * Gets the minimumCount property value. The minimum number of items that should be present in the aggregation to be returned in a bucket. Optional.
     * @return int|null
    */
    public function getMinimumCount(): ?int {
        return $this->minimumCount;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the prefixFilter property value. A filter to define a matching criteria. The key should start with the specified prefix to be returned in the response. Optional.
     * @return string|null
    */
    public function getPrefixFilter(): ?string {
        return $this->prefixFilter;
    }

    /**
     * Gets the ranges property value. Specifies the manual ranges to compute the aggregations. This is only valid for non-string refiners of date or numeric type. Optional.
     * @return array<BucketAggregationRange>|null
    */
    public function getRanges(): ?array {
        return $this->ranges;
    }

    /**
     * Gets the sortBy property value. The sortBy property
     * @return BucketAggregationSortProperty|null
    */
    public function getSortBy(): ?BucketAggregationSortProperty {
        return $this->sortBy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isDescending', $this->isDescending);
        $writer->writeIntegerValue('minimumCount', $this->minimumCount);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('prefixFilter', $this->prefixFilter);
        $writer->writeCollectionOfObjectValues('ranges', $this->ranges);
        $writer->writeEnumValue('sortBy', $this->sortBy);
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
     * Sets the isDescending property value. True to specify the sort order as descending. The default is false, with the sort order as ascending. Optional.
     *  @param bool|null $value Value to set for the isDescending property.
    */
    public function setIsDescending(?bool $value ): void {
        $this->isDescending = $value;
    }

    /**
     * Sets the minimumCount property value. The minimum number of items that should be present in the aggregation to be returned in a bucket. Optional.
     *  @param int|null $value Value to set for the minimumCount property.
    */
    public function setMinimumCount(?int $value ): void {
        $this->minimumCount = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the prefixFilter property value. A filter to define a matching criteria. The key should start with the specified prefix to be returned in the response. Optional.
     *  @param string|null $value Value to set for the prefixFilter property.
    */
    public function setPrefixFilter(?string $value ): void {
        $this->prefixFilter = $value;
    }

    /**
     * Sets the ranges property value. Specifies the manual ranges to compute the aggregations. This is only valid for non-string refiners of date or numeric type. Optional.
     *  @param array<BucketAggregationRange>|null $value Value to set for the ranges property.
    */
    public function setRanges(?array $value ): void {
        $this->ranges = $value;
    }

    /**
     * Sets the sortBy property value. The sortBy property
     *  @param BucketAggregationSortProperty|null $value Value to set for the sortBy property.
    */
    public function setSortBy(?BucketAggregationSortProperty $value ): void {
        $this->sortBy = $value;
    }

}
