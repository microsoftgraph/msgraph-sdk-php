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

class SearchRequest implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SearchRequest and sets the default values.
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
     * Gets the aggregationFilters property value. Contains one or more filters to obtain search results aggregated and filtered to a specific value of a field. Optional.Build this filter based on a prior search that aggregates by the same field. From the response of the prior search, identify the searchBucket that filters results to the specific value of the field, use the string in its aggregationFilterToken property, and build an aggregation filter string in the format '{field}:/'{aggregationFilterToken}/''. If multiple values for the same field need to be provided, use the strings in its aggregationFilterToken property and build an aggregation filter string in the format '{field}:or(/'{aggregationFilterToken1}/',/'{aggregationFilterToken2}/')'. For example, searching and aggregating drive items by file type returns a searchBucket for the file type docx in the response. You can conveniently use the aggregationFilterToken returned for this searchBucket in a subsequent search query and filter matches down to drive items of the docx file type. Example 1 and example 2 show the actual requests and responses.
     * @return array<string>|null
    */
    public function getAggregationFilters(): ?array {
        $val = $this->getBackingStore()->get('aggregationFilters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aggregationFilters'");
    }

    /**
     * Gets the aggregations property value. Specifies aggregations (also known as refiners) to be returned alongside search results. Optional.
     * @return array<AggregationOption>|null
    */
    public function getAggregations(): ?array {
        $val = $this->getBackingStore()->get('aggregations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AggregationOption::class);
            /** @var array<AggregationOption>|null $val */
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
     * Gets the collapseProperties property value. Contains the ordered collection of fields and limit to collapse results. Optional.
     * @return array<CollapseProperty>|null
    */
    public function getCollapseProperties(): ?array {
        $val = $this->getBackingStore()->get('collapseProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CollapseProperty::class);
            /** @var array<CollapseProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'collapseProperties'");
    }

    /**
     * Gets the contentSources property value. Contains the connection to be targeted.
     * @return array<string>|null
    */
    public function getContentSources(): ?array {
        $val = $this->getBackingStore()->get('contentSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentSources'");
    }

    /**
     * Gets the enableTopResults property value. This triggers hybrid sort for messages : the first 3 messages are the most relevant. This property is only applicable to entityType=message. Optional.
     * @return bool|null
    */
    public function getEnableTopResults(): ?bool {
        $val = $this->getBackingStore()->get('enableTopResults');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableTopResults'");
    }

    /**
     * Gets the entityTypes property value. One or more types of resources expected in the response. Possible values are: event, message, driveItem, externalItem, site, list, listItem, drive, chatMessage, person, acronym, bookmark.  Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: chatMessage, person, acronym, bookmark. See known limitations for those combinations of two or more entity types that are supported in the same search request. Required.
     * @return array<EntityType>|null
    */
    public function getEntityTypes(): ?array {
        $val = $this->getBackingStore()->get('entityTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EntityType::class);
            /** @var array<EntityType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entityTypes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aggregationFilters' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAggregationFilters($val);
            },
            'aggregations' => fn(ParseNode $n) => $o->setAggregations($n->getCollectionOfObjectValues([AggregationOption::class, 'createFromDiscriminatorValue'])),
            'collapseProperties' => fn(ParseNode $n) => $o->setCollapseProperties($n->getCollectionOfObjectValues([CollapseProperty::class, 'createFromDiscriminatorValue'])),
            'contentSources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setContentSources($val);
            },
            'enableTopResults' => fn(ParseNode $n) => $o->setEnableTopResults($n->getBooleanValue()),
            'entityTypes' => fn(ParseNode $n) => $o->setEntityTypes($n->getCollectionOfEnumValues(EntityType::class)),
            'fields' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setFields($val);
            },
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
     * Gets the fields property value. Contains the fields to be returned for each resource object specified in entityTypes, allowing customization of the fields returned by default; otherwise, including additional fields such as custom managed properties from SharePoint and OneDrive, or custom fields in externalItem from the content that Microsoft Graph connectors bring in. The fields property can use the semantic labels applied to properties. For example, if a property is labeled as title, you can retrieve it using the following syntax: label_title. Optional.
     * @return array<string>|null
    */
    public function getFields(): ?array {
        $val = $this->getBackingStore()->get('fields');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fields'");
    }

    /**
     * Gets the from property value. Specifies the offset for the search results. Offset 0 returns the very first result. Optional.
     * @return int|null
    */
    public function getFrom(): ?int {
        $val = $this->getBackingStore()->get('from');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'from'");
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
     * Gets the query property value. The query property
     * @return SearchQuery|null
    */
    public function getQuery(): ?SearchQuery {
        $val = $this->getBackingStore()->get('query');
        if (is_null($val) || $val instanceof SearchQuery) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'query'");
    }

    /**
     * Gets the queryAlterationOptions property value. Query alteration options formatted in a JSON blob that contains two optional flags related to spelling correction. Optional.
     * @return SearchAlterationOptions|null
    */
    public function getQueryAlterationOptions(): ?SearchAlterationOptions {
        $val = $this->getBackingStore()->get('queryAlterationOptions');
        if (is_null($val) || $val instanceof SearchAlterationOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'queryAlterationOptions'");
    }

    /**
     * Gets the region property value. The geographic location for the search. Required for searches that use application permissions. For details, see Get the region value.
     * @return string|null
    */
    public function getRegion(): ?string {
        $val = $this->getBackingStore()->get('region');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'region'");
    }

    /**
     * Gets the resultTemplateOptions property value. Provides the search result template options to render search results from connectors.
     * @return ResultTemplateOption|null
    */
    public function getResultTemplateOptions(): ?ResultTemplateOption {
        $val = $this->getBackingStore()->get('resultTemplateOptions');
        if (is_null($val) || $val instanceof ResultTemplateOption) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resultTemplateOptions'");
    }

    /**
     * Gets the sharePointOneDriveOptions property value. Indicates the kind of contents to be searched when a search is performed using application permissions. Optional.
     * @return SharePointOneDriveOptions|null
    */
    public function getSharePointOneDriveOptions(): ?SharePointOneDriveOptions {
        $val = $this->getBackingStore()->get('sharePointOneDriveOptions');
        if (is_null($val) || $val instanceof SharePointOneDriveOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharePointOneDriveOptions'");
    }

    /**
     * Gets the size property value. The size of the page to be retrieved. The maximum value is 500. Optional.
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
     * Gets the sortProperties property value. Contains the ordered collection of fields and direction to sort results. There can be at most 5 sort properties in the collection. Optional.
     * @return array<SortProperty>|null
    */
    public function getSortProperties(): ?array {
        $val = $this->getBackingStore()->get('sortProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SortProperty::class);
            /** @var array<SortProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sortProperties'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('aggregationFilters', $this->getAggregationFilters());
        $writer->writeCollectionOfObjectValues('aggregations', $this->getAggregations());
        $writer->writeCollectionOfObjectValues('collapseProperties', $this->getCollapseProperties());
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
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the aggregationFilters property value. Contains one or more filters to obtain search results aggregated and filtered to a specific value of a field. Optional.Build this filter based on a prior search that aggregates by the same field. From the response of the prior search, identify the searchBucket that filters results to the specific value of the field, use the string in its aggregationFilterToken property, and build an aggregation filter string in the format '{field}:/'{aggregationFilterToken}/''. If multiple values for the same field need to be provided, use the strings in its aggregationFilterToken property and build an aggregation filter string in the format '{field}:or(/'{aggregationFilterToken1}/',/'{aggregationFilterToken2}/')'. For example, searching and aggregating drive items by file type returns a searchBucket for the file type docx in the response. You can conveniently use the aggregationFilterToken returned for this searchBucket in a subsequent search query and filter matches down to drive items of the docx file type. Example 1 and example 2 show the actual requests and responses.
     * @param array<string>|null $value Value to set for the aggregationFilters property.
    */
    public function setAggregationFilters(?array $value): void {
        $this->getBackingStore()->set('aggregationFilters', $value);
    }

    /**
     * Sets the aggregations property value. Specifies aggregations (also known as refiners) to be returned alongside search results. Optional.
     * @param array<AggregationOption>|null $value Value to set for the aggregations property.
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
     * Sets the collapseProperties property value. Contains the ordered collection of fields and limit to collapse results. Optional.
     * @param array<CollapseProperty>|null $value Value to set for the collapseProperties property.
    */
    public function setCollapseProperties(?array $value): void {
        $this->getBackingStore()->set('collapseProperties', $value);
    }

    /**
     * Sets the contentSources property value. Contains the connection to be targeted.
     * @param array<string>|null $value Value to set for the contentSources property.
    */
    public function setContentSources(?array $value): void {
        $this->getBackingStore()->set('contentSources', $value);
    }

    /**
     * Sets the enableTopResults property value. This triggers hybrid sort for messages : the first 3 messages are the most relevant. This property is only applicable to entityType=message. Optional.
     * @param bool|null $value Value to set for the enableTopResults property.
    */
    public function setEnableTopResults(?bool $value): void {
        $this->getBackingStore()->set('enableTopResults', $value);
    }

    /**
     * Sets the entityTypes property value. One or more types of resources expected in the response. Possible values are: event, message, driveItem, externalItem, site, list, listItem, drive, chatMessage, person, acronym, bookmark.  Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: chatMessage, person, acronym, bookmark. See known limitations for those combinations of two or more entity types that are supported in the same search request. Required.
     * @param array<EntityType>|null $value Value to set for the entityTypes property.
    */
    public function setEntityTypes(?array $value): void {
        $this->getBackingStore()->set('entityTypes', $value);
    }

    /**
     * Sets the fields property value. Contains the fields to be returned for each resource object specified in entityTypes, allowing customization of the fields returned by default; otherwise, including additional fields such as custom managed properties from SharePoint and OneDrive, or custom fields in externalItem from the content that Microsoft Graph connectors bring in. The fields property can use the semantic labels applied to properties. For example, if a property is labeled as title, you can retrieve it using the following syntax: label_title. Optional.
     * @param array<string>|null $value Value to set for the fields property.
    */
    public function setFields(?array $value): void {
        $this->getBackingStore()->set('fields', $value);
    }

    /**
     * Sets the from property value. Specifies the offset for the search results. Offset 0 returns the very first result. Optional.
     * @param int|null $value Value to set for the from property.
    */
    public function setFrom(?int $value): void {
        $this->getBackingStore()->set('from', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
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
     * Sets the queryAlterationOptions property value. Query alteration options formatted in a JSON blob that contains two optional flags related to spelling correction. Optional.
     * @param SearchAlterationOptions|null $value Value to set for the queryAlterationOptions property.
    */
    public function setQueryAlterationOptions(?SearchAlterationOptions $value): void {
        $this->getBackingStore()->set('queryAlterationOptions', $value);
    }

    /**
     * Sets the region property value. The geographic location for the search. Required for searches that use application permissions. For details, see Get the region value.
     * @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value): void {
        $this->getBackingStore()->set('region', $value);
    }

    /**
     * Sets the resultTemplateOptions property value. Provides the search result template options to render search results from connectors.
     * @param ResultTemplateOption|null $value Value to set for the resultTemplateOptions property.
    */
    public function setResultTemplateOptions(?ResultTemplateOption $value): void {
        $this->getBackingStore()->set('resultTemplateOptions', $value);
    }

    /**
     * Sets the sharePointOneDriveOptions property value. Indicates the kind of contents to be searched when a search is performed using application permissions. Optional.
     * @param SharePointOneDriveOptions|null $value Value to set for the sharePointOneDriveOptions property.
    */
    public function setSharePointOneDriveOptions(?SharePointOneDriveOptions $value): void {
        $this->getBackingStore()->set('sharePointOneDriveOptions', $value);
    }

    /**
     * Sets the size property value. The size of the page to be retrieved. The maximum value is 500. Optional.
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the sortProperties property value. Contains the ordered collection of fields and direction to sort results. There can be at most 5 sort properties in the collection. Optional.
     * @param array<SortProperty>|null $value Value to set for the sortProperties property.
    */
    public function setSortProperties(?array $value): void {
        $this->getBackingStore()->set('sortProperties', $value);
    }

}
