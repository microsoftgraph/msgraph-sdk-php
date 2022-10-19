<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $aggregationFilters The aggregationFilters property
    */
    private ?array $aggregationFilters = null;
    
    /**
     * @var array<AggregationOption>|null $aggregations The aggregations property
    */
    private ?array $aggregations = null;
    
    /**
     * @var array<string>|null $contentSources The contentSources property
    */
    private ?array $contentSources = null;
    
    /**
     * @var bool|null $enableTopResults The enableTopResults property
    */
    private ?bool $enableTopResults = null;
    
    /**
     * @var array<EntityType>|null $entityTypes The entityTypes property
    */
    private ?array $entityTypes = null;
    
    /**
     * @var array<string>|null $fields The fields property
    */
    private ?array $fields = null;
    
    /**
     * @var int|null $from The from property
    */
    private ?int $from = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var SearchQuery|null $query The query property
    */
    private ?SearchQuery $query = null;
    
    /**
     * @var SearchAlterationOptions|null $queryAlterationOptions The queryAlterationOptions property
    */
    private ?SearchAlterationOptions $queryAlterationOptions = null;
    
    /**
     * @var ResultTemplateOption|null $resultTemplateOptions The resultTemplateOptions property
    */
    private ?ResultTemplateOption $resultTemplateOptions = null;
    
    /**
     * @var int|null $size The size property
    */
    private ?int $size = null;
    
    /**
     * @var array<SortProperty>|null $sortProperties The sortProperties property
    */
    private ?array $sortProperties = null;
    
    /**
     * Instantiates a new searchRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.searchRequest');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the aggregationFilters property value. The aggregationFilters property
     * @return array<string>|null
    */
    public function getAggregationFilters(): ?array {
        return $this->aggregationFilters;
    }

    /**
     * Gets the aggregations property value. The aggregations property
     * @return array<AggregationOption>|null
    */
    public function getAggregations(): ?array {
        return $this->aggregations;
    }

    /**
     * Gets the contentSources property value. The contentSources property
     * @return array<string>|null
    */
    public function getContentSources(): ?array {
        return $this->contentSources;
    }

    /**
     * Gets the enableTopResults property value. The enableTopResults property
     * @return bool|null
    */
    public function getEnableTopResults(): ?bool {
        return $this->enableTopResults;
    }

    /**
     * Gets the entityTypes property value. The entityTypes property
     * @return array<EntityType>|null
    */
    public function getEntityTypes(): ?array {
        return $this->entityTypes;
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
     * Gets the fields property value. The fields property
     * @return array<string>|null
    */
    public function getFields(): ?array {
        return $this->fields;
    }

    /**
     * Gets the from property value. The from property
     * @return int|null
    */
    public function getFrom(): ?int {
        return $this->from;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the query property value. The query property
     * @return SearchQuery|null
    */
    public function getQuery(): ?SearchQuery {
        return $this->query;
    }

    /**
     * Gets the queryAlterationOptions property value. The queryAlterationOptions property
     * @return SearchAlterationOptions|null
    */
    public function getQueryAlterationOptions(): ?SearchAlterationOptions {
        return $this->queryAlterationOptions;
    }

    /**
     * Gets the resultTemplateOptions property value. The resultTemplateOptions property
     * @return ResultTemplateOption|null
    */
    public function getResultTemplateOptions(): ?ResultTemplateOption {
        return $this->resultTemplateOptions;
    }

    /**
     * Gets the size property value. The size property
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the sortProperties property value. The sortProperties property
     * @return array<SortProperty>|null
    */
    public function getSortProperties(): ?array {
        return $this->sortProperties;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('aggregationFilters', $this->aggregationFilters);
        $writer->writeCollectionOfObjectValues('aggregations', $this->aggregations);
        $writer->writeCollectionOfPrimitiveValues('contentSources', $this->contentSources);
        $writer->writeBooleanValue('enableTopResults', $this->enableTopResults);
        $writer->writeCollectionOfEnumValues('entityTypes', $this->entityTypes);
        $writer->writeCollectionOfPrimitiveValues('fields', $this->fields);
        $writer->writeIntegerValue('from', $this->from);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('query', $this->query);
        $writer->writeObjectValue('queryAlterationOptions', $this->queryAlterationOptions);
        $writer->writeObjectValue('resultTemplateOptions', $this->resultTemplateOptions);
        $writer->writeIntegerValue('size', $this->size);
        $writer->writeCollectionOfObjectValues('sortProperties', $this->sortProperties);
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
     * Sets the aggregationFilters property value. The aggregationFilters property
     *  @param array<string>|null $value Value to set for the aggregationFilters property.
    */
    public function setAggregationFilters(?array $value ): void {
        $this->aggregationFilters = $value;
    }

    /**
     * Sets the aggregations property value. The aggregations property
     *  @param array<AggregationOption>|null $value Value to set for the aggregations property.
    */
    public function setAggregations(?array $value ): void {
        $this->aggregations = $value;
    }

    /**
     * Sets the contentSources property value. The contentSources property
     *  @param array<string>|null $value Value to set for the contentSources property.
    */
    public function setContentSources(?array $value ): void {
        $this->contentSources = $value;
    }

    /**
     * Sets the enableTopResults property value. The enableTopResults property
     *  @param bool|null $value Value to set for the enableTopResults property.
    */
    public function setEnableTopResults(?bool $value ): void {
        $this->enableTopResults = $value;
    }

    /**
     * Sets the entityTypes property value. The entityTypes property
     *  @param array<EntityType>|null $value Value to set for the entityTypes property.
    */
    public function setEntityTypes(?array $value ): void {
        $this->entityTypes = $value;
    }

    /**
     * Sets the fields property value. The fields property
     *  @param array<string>|null $value Value to set for the fields property.
    */
    public function setFields(?array $value ): void {
        $this->fields = $value;
    }

    /**
     * Sets the from property value. The from property
     *  @param int|null $value Value to set for the from property.
    */
    public function setFrom(?int $value ): void {
        $this->from = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the query property value. The query property
     *  @param SearchQuery|null $value Value to set for the query property.
    */
    public function setQuery(?SearchQuery $value ): void {
        $this->query = $value;
    }

    /**
     * Sets the queryAlterationOptions property value. The queryAlterationOptions property
     *  @param SearchAlterationOptions|null $value Value to set for the queryAlterationOptions property.
    */
    public function setQueryAlterationOptions(?SearchAlterationOptions $value ): void {
        $this->queryAlterationOptions = $value;
    }

    /**
     * Sets the resultTemplateOptions property value. The resultTemplateOptions property
     *  @param ResultTemplateOption|null $value Value to set for the resultTemplateOptions property.
    */
    public function setResultTemplateOptions(?ResultTemplateOption $value ): void {
        $this->resultTemplateOptions = $value;
    }

    /**
     * Sets the size property value. The size property
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

    /**
     * Sets the sortProperties property value. The sortProperties property
     *  @param array<SortProperty>|null $value Value to set for the sortProperties property.
    */
    public function setSortProperties(?array $value ): void {
        $this->sortProperties = $value;
    }

}
