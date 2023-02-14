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
     * Gets the aggregationFilters property value. The aggregationFilters property
     * @return array<string>|null
    */
    public function getAggregationFilters(): ?array {
        return $this->getBackingStore()->get('aggregationFilters');
    }

    /**
     * Gets the aggregations property value. The aggregations property
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
     * Gets the contentSources property value. The contentSources property
     * @return array<string>|null
    */
    public function getContentSources(): ?array {
        return $this->getBackingStore()->get('contentSources');
    }

    /**
     * Gets the enableTopResults property value. The enableTopResults property
     * @return bool|null
    */
    public function getEnableTopResults(): ?bool {
        return $this->getBackingStore()->get('enableTopResults');
    }

    /**
     * Gets the entityTypes property value. The entityTypes property
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
            'region' => fn(ParseNode $n) => $o->setRegion($n->getStringValue()),
            'resultTemplateOptions' => fn(ParseNode $n) => $o->setResultTemplateOptions($n->getObjectValue([ResultTemplateOption::class, 'createFromDiscriminatorValue'])),
            'sharePointOneDriveOptions' => fn(ParseNode $n) => $o->setSharePointOneDriveOptions($n->getObjectValue([SharePointOneDriveOptions::class, 'createFromDiscriminatorValue'])),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'sortProperties' => fn(ParseNode $n) => $o->setSortProperties($n->getCollectionOfObjectValues([SortProperty::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fields property value. The fields property
     * @return array<string>|null
    */
    public function getFields(): ?array {
        return $this->getBackingStore()->get('fields');
    }

    /**
     * Gets the from property value. The from property
     * @return int|null
    */
    public function getFrom(): ?int {
        return $this->getBackingStore()->get('from');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the query property value. The query property
     * @return SearchQuery|null
    */
    public function getQuery(): ?SearchQuery {
        return $this->getBackingStore()->get('query');
    }

    /**
     * Gets the queryAlterationOptions property value. The queryAlterationOptions property
     * @return SearchAlterationOptions|null
    */
    public function getQueryAlterationOptions(): ?SearchAlterationOptions {
        return $this->getBackingStore()->get('queryAlterationOptions');
    }

    /**
     * Gets the region property value. The region property
     * @return string|null
    */
    public function getRegion(): ?string {
        return $this->getBackingStore()->get('region');
    }

    /**
     * Gets the resultTemplateOptions property value. The resultTemplateOptions property
     * @return ResultTemplateOption|null
    */
    public function getResultTemplateOptions(): ?ResultTemplateOption {
        return $this->getBackingStore()->get('resultTemplateOptions');
    }

    /**
     * Gets the sharePointOneDriveOptions property value. The sharePointOneDriveOptions property
     * @return SharePointOneDriveOptions|null
    */
    public function getSharePointOneDriveOptions(): ?SharePointOneDriveOptions {
        return $this->getBackingStore()->get('sharePointOneDriveOptions');
    }

    /**
     * Gets the size property value. The size property
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->getBackingStore()->get('size');
    }

    /**
     * Gets the sortProperties property value. The sortProperties property
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
        $writer->writeStringValue('region', $this->getRegion());
        $writer->writeObjectValue('resultTemplateOptions', $this->getResultTemplateOptions());
        $writer->writeObjectValue('sharePointOneDriveOptions', $this->getSharePointOneDriveOptions());
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
     * Sets the aggregationFilters property value. The aggregationFilters property
     * @param array<string>|null $value Value to set for the aggregationFilters property.
    */
    public function setAggregationFilters(?array $value): void {
        $this->getBackingStore()->set('aggregationFilters', $value);
    }

    /**
     * Sets the aggregations property value. The aggregations property
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
     * Sets the contentSources property value. The contentSources property
     * @param array<string>|null $value Value to set for the contentSources property.
    */
    public function setContentSources(?array $value): void {
        $this->getBackingStore()->set('contentSources', $value);
    }

    /**
     * Sets the enableTopResults property value. The enableTopResults property
     * @param bool|null $value Value to set for the enableTopResults property.
    */
    public function setEnableTopResults(?bool $value): void {
        $this->getBackingStore()->set('enableTopResults', $value);
    }

    /**
     * Sets the entityTypes property value. The entityTypes property
     * @param array<EntityType>|null $value Value to set for the entityTypes property.
    */
    public function setEntityTypes(?array $value): void {
        $this->getBackingStore()->set('entityTypes', $value);
    }

    /**
     * Sets the fields property value. The fields property
     * @param array<string>|null $value Value to set for the fields property.
    */
    public function setFields(?array $value): void {
        $this->getBackingStore()->set('fields', $value);
    }

    /**
     * Sets the from property value. The from property
     * @param int|null $value Value to set for the from property.
    */
    public function setFrom(?int $value): void {
        $this->getBackingStore()->set('from', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the query property value. The query property
     * @param SearchQuery|null $value Value to set for the query property.
    */
    public function setQuery(?SearchQuery $value): void {
        $this->getBackingStore()->set('query', $value);
    }

    /**
     * Sets the queryAlterationOptions property value. The queryAlterationOptions property
     * @param SearchAlterationOptions|null $value Value to set for the queryAlterationOptions property.
    */
    public function setQueryAlterationOptions(?SearchAlterationOptions $value): void {
        $this->getBackingStore()->set('queryAlterationOptions', $value);
    }

    /**
     * Sets the region property value. The region property
     * @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value): void {
        $this->getBackingStore()->set('region', $value);
    }

    /**
     * Sets the resultTemplateOptions property value. The resultTemplateOptions property
     * @param ResultTemplateOption|null $value Value to set for the resultTemplateOptions property.
    */
    public function setResultTemplateOptions(?ResultTemplateOption $value): void {
        $this->getBackingStore()->set('resultTemplateOptions', $value);
    }

    /**
     * Sets the sharePointOneDriveOptions property value. The sharePointOneDriveOptions property
     * @param SharePointOneDriveOptions|null $value Value to set for the sharePointOneDriveOptions property.
    */
    public function setSharePointOneDriveOptions(?SharePointOneDriveOptions $value): void {
        $this->getBackingStore()->set('sharePointOneDriveOptions', $value);
    }

    /**
     * Sets the size property value. The size property
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the sortProperties property value. The sortProperties property
     * @param array<SortProperty>|null $value Value to set for the sortProperties property.
    */
    public function setSortProperties(?array $value): void {
        $this->getBackingStore()->set('sortProperties', $value);
    }

}
