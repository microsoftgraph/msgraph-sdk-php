<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoverySearch extends Search implements Parsable 
{
    /**
     * @var array<DataSource>|null $additionalSources Adds an additional source to the eDiscovery search.
    */
    private ?array $additionalSources = null;
    
    /**
     * @var EdiscoveryAddToReviewSetOperation|null $addToReviewSetOperation Adds the results of the eDiscovery search to the specified reviewSet.
    */
    private ?EdiscoveryAddToReviewSetOperation $addToReviewSetOperation = null;
    
    /**
     * @var array<DataSource>|null $custodianSources Custodian sources that are included in the eDiscovery search.
    */
    private ?array $custodianSources = null;
    
    /**
     * @var DataSourceScopes|null $dataSourceScopes When specified, the collection will span across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
    */
    private ?DataSourceScopes $dataSourceScopes = null;
    
    /**
     * @var EdiscoveryEstimateOperation|null $lastEstimateStatisticsOperation The last estimate operation associated with the eDiscovery search.
    */
    private ?EdiscoveryEstimateOperation $lastEstimateStatisticsOperation = null;
    
    /**
     * @var array<EdiscoveryNoncustodialDataSource>|null $noncustodialSources noncustodialDataSource sources that are included in the eDiscovery search
    */
    private ?array $noncustodialSources = null;
    
    /**
     * Instantiates a new EdiscoverySearch and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.ediscoverySearch');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoverySearch
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoverySearch {
        return new EdiscoverySearch();
    }

    /**
     * Gets the additionalSources property value. Adds an additional source to the eDiscovery search.
     * @return array<DataSource>|null
    */
    public function getAdditionalSources(): ?array {
        return $this->additionalSources;
    }

    /**
     * Gets the addToReviewSetOperation property value. Adds the results of the eDiscovery search to the specified reviewSet.
     * @return EdiscoveryAddToReviewSetOperation|null
    */
    public function getAddToReviewSetOperation(): ?EdiscoveryAddToReviewSetOperation {
        return $this->addToReviewSetOperation;
    }

    /**
     * Gets the custodianSources property value. Custodian sources that are included in the eDiscovery search.
     * @return array<DataSource>|null
    */
    public function getCustodianSources(): ?array {
        return $this->custodianSources;
    }

    /**
     * Gets the dataSourceScopes property value. When specified, the collection will span across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
     * @return DataSourceScopes|null
    */
    public function getDataSourceScopes(): ?DataSourceScopes {
        return $this->dataSourceScopes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalSources' => fn(ParseNode $n) => $o->setAdditionalSources($n->getCollectionOfObjectValues([DataSource::class, 'createFromDiscriminatorValue'])),
            'addToReviewSetOperation' => fn(ParseNode $n) => $o->setAddToReviewSetOperation($n->getObjectValue([EdiscoveryAddToReviewSetOperation::class, 'createFromDiscriminatorValue'])),
            'custodianSources' => fn(ParseNode $n) => $o->setCustodianSources($n->getCollectionOfObjectValues([DataSource::class, 'createFromDiscriminatorValue'])),
            'dataSourceScopes' => fn(ParseNode $n) => $o->setDataSourceScopes($n->getEnumValue(DataSourceScopes::class)),
            'lastEstimateStatisticsOperation' => fn(ParseNode $n) => $o->setLastEstimateStatisticsOperation($n->getObjectValue([EdiscoveryEstimateOperation::class, 'createFromDiscriminatorValue'])),
            'noncustodialSources' => fn(ParseNode $n) => $o->setNoncustodialSources($n->getCollectionOfObjectValues([EdiscoveryNoncustodialDataSource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastEstimateStatisticsOperation property value. The last estimate operation associated with the eDiscovery search.
     * @return EdiscoveryEstimateOperation|null
    */
    public function getLastEstimateStatisticsOperation(): ?EdiscoveryEstimateOperation {
        return $this->lastEstimateStatisticsOperation;
    }

    /**
     * Gets the noncustodialSources property value. noncustodialDataSource sources that are included in the eDiscovery search
     * @return array<EdiscoveryNoncustodialDataSource>|null
    */
    public function getNoncustodialSources(): ?array {
        return $this->noncustodialSources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('additionalSources', $this->additionalSources);
        $writer->writeObjectValue('addToReviewSetOperation', $this->addToReviewSetOperation);
        $writer->writeCollectionOfObjectValues('custodianSources', $this->custodianSources);
        $writer->writeEnumValue('dataSourceScopes', $this->dataSourceScopes);
        $writer->writeObjectValue('lastEstimateStatisticsOperation', $this->lastEstimateStatisticsOperation);
        $writer->writeCollectionOfObjectValues('noncustodialSources', $this->noncustodialSources);
    }

    /**
     * Sets the additionalSources property value. Adds an additional source to the eDiscovery search.
     *  @param array<DataSource>|null $value Value to set for the additionalSources property.
    */
    public function setAdditionalSources(?array $value ): void {
        $this->additionalSources = $value;
    }

    /**
     * Sets the addToReviewSetOperation property value. Adds the results of the eDiscovery search to the specified reviewSet.
     *  @param EdiscoveryAddToReviewSetOperation|null $value Value to set for the addToReviewSetOperation property.
    */
    public function setAddToReviewSetOperation(?EdiscoveryAddToReviewSetOperation $value ): void {
        $this->addToReviewSetOperation = $value;
    }

    /**
     * Sets the custodianSources property value. Custodian sources that are included in the eDiscovery search.
     *  @param array<DataSource>|null $value Value to set for the custodianSources property.
    */
    public function setCustodianSources(?array $value ): void {
        $this->custodianSources = $value;
    }

    /**
     * Sets the dataSourceScopes property value. When specified, the collection will span across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
     *  @param DataSourceScopes|null $value Value to set for the dataSourceScopes property.
    */
    public function setDataSourceScopes(?DataSourceScopes $value ): void {
        $this->dataSourceScopes = $value;
    }

    /**
     * Sets the lastEstimateStatisticsOperation property value. The last estimate operation associated with the eDiscovery search.
     *  @param EdiscoveryEstimateOperation|null $value Value to set for the lastEstimateStatisticsOperation property.
    */
    public function setLastEstimateStatisticsOperation(?EdiscoveryEstimateOperation $value ): void {
        $this->lastEstimateStatisticsOperation = $value;
    }

    /**
     * Sets the noncustodialSources property value. noncustodialDataSource sources that are included in the eDiscovery search
     *  @param array<EdiscoveryNoncustodialDataSource>|null $value Value to set for the noncustodialSources property.
    */
    public function setNoncustodialSources(?array $value ): void {
        $this->noncustodialSources = $value;
    }

}
