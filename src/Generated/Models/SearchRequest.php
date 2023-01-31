<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SearchRequest implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new searchRequest and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchRequest {
        return new SearchRequest();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the aggregationFilters property value. 
     * @return array<string>|null
    */
    public function getAggregationFilters(): ?array {
        return $this->getBackingStore()->get('aggregationFilters');
    }

    /**
     * Gets the aggregations property value. 
     * @return array<AggregationOption>|null
    */
    public function getAggregations(): ?array {
        return $this->getBackingStore()->get('aggregations');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the contentSources property value. 
     * @return array<string>|null
    */
    public function getContentSources(): ?array {
        return $this->getBackingStore()->get('contentSources');
    }

    /**
     * Gets the enableTopResults property value. 
     * @return bool|null
    */
    public function getEnableTopResults(): ?bool {
        return $this->getBackingStore()->get('enableTopResults');
    }

    /**
     * Gets the entityTypes property value. 
     * @return array<EntityType>|null
    */
    public function getEntityTypes(): ?array {
        return $this->getBackingStore()->get('entityTypes');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aggregationFilters' => fn(ParseNode $n) => $o->setAggregationFilters($n->getCollectionOfPrimitiveValues()),
            'aggregations' => fn(ParseNode $n) => $o->setAggregations($n->getCollectionOfObjectValues([AggregationOption::class, 'createFromDiscriminatorValue'])),
            'contentSources' => fn(ParseNode $n) => $o->setContentSources($n->getCollectionOfPrimitiveValues()),
            'enableTopResults' => fn(ParseNode $n) => $o->setEnableTopResults($n->getBooleanValue()),
            'entityTypes' => fn(ParseNode $n) => $o->setEntityTypes($n->getCollectionOfEnumValues(EntityType::class)),
            'fields' => fn(ParseNode $n) => $o->setFields($n->getCollectionOfPrimitiveValues()),
            'from' => fn(ParseNode $n) => $o->setFrom($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'query' => fn(ParseNode $n) => $o->setQuery($n->getObjectValue([SearchQuery::class, 'createFromDiscriminatorValue'])),
            'queryAlterationOptions' => fn(ParseNode $n) => $o->setQueryAlterationOptions($n->getObjectValue([SearchAlterationOptions::class, 'createFromDiscriminatorValue'])),
            'resultTemplateOptions' => fn(ParseNode $n) => $o->setResultTemplateOptions($n->getObjectValue([ResultTemplateOption::class, 'createFromDiscriminatorValue'])),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'sortProperties' => fn(ParseNode $n) => $o->setSortProperties($n->getCollectionOfObjectValues([SortProperty::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fields property value. 
     * @return array<string>|null
    */
    public function getFields(): ?array {
        return $this->getBackingStore()->get('fields');
    }

    /**
     * Gets the from property value. 
     * @return int|null
    */
    public function getFrom(): ?int {
        return $this->getBackingStore()->get('from');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the query property value. 
     * @return SearchQuery|null
    */
    public function getQuery(): ?SearchQuery {
        return $this->getBackingStore()->get('query');
    }

    /**
     * Gets the queryAlterationOptions property value. 
     * @return SearchAlterationOptions|null
    */
    public function getQueryAlterationOptions(): ?SearchAlterationOptions {
        return $this->getBackingStore()->get('queryAlterationOptions');
    }

    /**
     * Gets the resultTemplateOptions property value. 
     * @return ResultTemplateOption|null
    */
    public function getResultTemplateOptions(): ?ResultTemplateOption {
        return $this->getBackingStore()->get('resultTemplateOptions');
    }

    /**
     * Gets the size property value. 
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->getBackingStore()->get('size');
    }

    /**
     * Gets the sortProperties property value. 
     * @return array<SortProperty>|null
    */
    public function getSortProperties(): ?array {
        return $this->getBackingStore()->get('sortProperties');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('aggregationFilters', $this->getAggregationFilters());
        $writer->writeCollectionOfObjectValues('aggregations', $this->getAggregations());
        $writer->writeCollectionOfPrimitiveValues('contentSources', $this->getContentSources());
        $writer->writeBooleanValue('enableTopResults', $this->getEnableTopResults());
        $writer->writeCollectionOfEnumValues('entityTypes', $this->getEntityTypes());
        $writer->writeCollectionOfPrimitiveValues('fields', $this->getFields());
        $writer->writeIntegerValue('from', $this->getFrom());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('query', $this->getQuery());
        $writer->writeObjectValue('queryAlterationOptions', $this->getQueryAlterationOptions());
        $writer->writeObjectValue('resultTemplateOptions', $this->getResultTemplateOptions());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeCollectionOfObjectValues('sortProperties', $this->getSortProperties());
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
     * Sets the aggregationFilters property value. 
     * @param array<string>|null $value Value to set for the aggregationFilters property.
    */
    public function setAggregationFilters(?array $value): void {
        $this->getBackingStore()->set('aggregationFilters', $value);
    }

    /**
     * Sets the aggregations property value. 
     * @param array<AggregationOption>|null $value Value to set for the aggregations property.
    */
    public function setAggregations(?array $value): void {
        $this->getBackingStore()->set('aggregations', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the contentSources property value. 
     * @param array<string>|null $value Value to set for the contentSources property.
    */
    public function setContentSources(?array $value): void {
        $this->getBackingStore()->set('contentSources', $value);
    }

    /**
     * Sets the enableTopResults property value. 
     * @param bool|null $value Value to set for the enableTopResults property.
    */
    public function setEnableTopResults(?bool $value): void {
        $this->getBackingStore()->set('enableTopResults', $value);
    }

    /**
     * Sets the entityTypes property value. 
     * @param array<EntityType>|null $value Value to set for the entityTypes property.
    */
    public function setEntityTypes(?array $value): void {
        $this->getBackingStore()->set('entityTypes', $value);
    }

    /**
     * Sets the fields property value. 
     * @param array<string>|null $value Value to set for the fields property.
    */
    public function setFields(?array $value): void {
        $this->getBackingStore()->set('fields', $value);
    }

    /**
     * Sets the from property value. 
     * @param int|null $value Value to set for the from property.
    */
    public function setFrom(?int $value): void {
        $this->getBackingStore()->set('from', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the query property value. 
     * @param SearchQuery|null $value Value to set for the query property.
    */
    public function setQuery(?SearchQuery $value): void {
        $this->getBackingStore()->set('query', $value);
    }

    /**
     * Sets the queryAlterationOptions property value. 
     * @param SearchAlterationOptions|null $value Value to set for the queryAlterationOptions property.
    */
    public function setQueryAlterationOptions(?SearchAlterationOptions $value): void {
        $this->getBackingStore()->set('queryAlterationOptions', $value);
    }

    /**
     * Sets the resultTemplateOptions property value. 
     * @param ResultTemplateOption|null $value Value to set for the resultTemplateOptions property.
    */
    public function setResultTemplateOptions(?ResultTemplateOption $value): void {
        $this->getBackingStore()->set('resultTemplateOptions', $value);
    }

    /**
     * Sets the size property value. 
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the sortProperties property value. 
     * @param array<SortProperty>|null $value Value to set for the sortProperties property.
    */
    public function setSortProperties(?array $value): void {
        $this->getBackingStore()->set('sortProperties', $value);
    }

}
