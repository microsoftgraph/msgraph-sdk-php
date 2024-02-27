<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SearchHitsContainer implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SearchHitsContainer and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchHitsContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchHitsContainer {
        return new SearchHitsContainer();
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
     * Gets the aggregations property value. The aggregations property
     * @return array<SearchAggregation>|null
    */
    public function getAggregations(): ?array {
        $val = $this->getBackingStore()->get('aggregations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SearchAggregation::class);
            /** @var array<SearchAggregation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aggregations'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aggregations' => fn(ParseNode $n) => $o->setAggregations($n->getCollectionOfObjectValues([SearchAggregation::class, 'createFromDiscriminatorValue'])),
            'hits' => fn(ParseNode $n) => $o->setHits($n->getCollectionOfObjectValues([SearchHit::class, 'createFromDiscriminatorValue'])),
            'moreResultsAvailable' => fn(ParseNode $n) => $o->setMoreResultsAvailable($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the hits property value. A collection of the search results.
     * @return array<SearchHit>|null
    */
    public function getHits(): ?array {
        $val = $this->getBackingStore()->get('hits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SearchHit::class);
            /** @var array<SearchHit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hits'");
    }

    /**
     * Gets the moreResultsAvailable property value. Provides information if more results are available. Based on this information, you can adjust the from and size properties of the searchRequest accordingly.
     * @return bool|null
    */
    public function getMoreResultsAvailable(): ?bool {
        $val = $this->getBackingStore()->get('moreResultsAvailable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'moreResultsAvailable'");
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
     * Gets the total property value. The total number of results. Note this isn't the number of results on the page, but the total number of results satisfying the query.
     * @return int|null
    */
    public function getTotal(): ?int {
        $val = $this->getBackingStore()->get('total');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'total'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('aggregations', $this->getAggregations());
        $writer->writeCollectionOfObjectValues('hits', $this->getHits());
        $writer->writeBooleanValue('moreResultsAvailable', $this->getMoreResultsAvailable());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the aggregations property value. The aggregations property
     * @param array<SearchAggregation>|null $value Value to set for the aggregations property.
    */
    public function setAggregations(?array $value): void {
        $this->getBackingStore()->set('aggregations', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the hits property value. A collection of the search results.
     * @param array<SearchHit>|null $value Value to set for the hits property.
    */
    public function setHits(?array $value): void {
        $this->getBackingStore()->set('hits', $value);
    }

    /**
     * Sets the moreResultsAvailable property value. Provides information if more results are available. Based on this information, you can adjust the from and size properties of the searchRequest accordingly.
     * @param bool|null $value Value to set for the moreResultsAvailable property.
    */
    public function setMoreResultsAvailable(?bool $value): void {
        $this->getBackingStore()->set('moreResultsAvailable', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the total property value. The total number of results. Note this isn't the number of results on the page, but the total number of results satisfying the query.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->getBackingStore()->set('total', $value);
    }

}
