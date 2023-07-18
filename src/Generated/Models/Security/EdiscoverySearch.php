<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EdiscoverySearch extends Search implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new ediscoverySearch and sets the default values.
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
        $val = $this->getBackingStore()->get('additionalSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DataSource::class);
            /** @var array<DataSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalSources'");
    }

    /**
     * Gets the addToReviewSetOperation property value. Adds the results of the eDiscovery search to the specified reviewSet.
     * @return EdiscoveryAddToReviewSetOperation|null
    */
    public function getAddToReviewSetOperation(): ?EdiscoveryAddToReviewSetOperation {
        $val = $this->getBackingStore()->get('addToReviewSetOperation');
        if (is_null($val) || $val instanceof EdiscoveryAddToReviewSetOperation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addToReviewSetOperation'");
    }

    /**
     * Gets the custodianSources property value. Custodian sources that are included in the eDiscovery search.
     * @return array<DataSource>|null
    */
    public function getCustodianSources(): ?array {
        $val = $this->getBackingStore()->get('custodianSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DataSource::class);
            /** @var array<DataSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'custodianSources'");
    }

    /**
     * Gets the dataSourceScopes property value. When specified, the collection will span across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
     * @return DataSourceScopes|null
    */
    public function getDataSourceScopes(): ?DataSourceScopes {
        $val = $this->getBackingStore()->get('dataSourceScopes');
        if (is_null($val) || $val instanceof DataSourceScopes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataSourceScopes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('lastEstimateStatisticsOperation');
        if (is_null($val) || $val instanceof EdiscoveryEstimateOperation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastEstimateStatisticsOperation'");
    }

    /**
     * Gets the noncustodialSources property value. noncustodialDataSource sources that are included in the eDiscovery search
     * @return array<EdiscoveryNoncustodialDataSource>|null
    */
    public function getNoncustodialSources(): ?array {
        $val = $this->getBackingStore()->get('noncustodialSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EdiscoveryNoncustodialDataSource::class);
            /** @var array<EdiscoveryNoncustodialDataSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'noncustodialSources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('additionalSources', $this->getAdditionalSources());
        $writer->writeObjectValue('addToReviewSetOperation', $this->getAddToReviewSetOperation());
        $writer->writeCollectionOfObjectValues('custodianSources', $this->getCustodianSources());
        $writer->writeEnumValue('dataSourceScopes', $this->getDataSourceScopes());
        $writer->writeObjectValue('lastEstimateStatisticsOperation', $this->getLastEstimateStatisticsOperation());
        $writer->writeCollectionOfObjectValues('noncustodialSources', $this->getNoncustodialSources());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the additionalSources property value. Adds an additional source to the eDiscovery search.
     * @param array<DataSource>|null $value Value to set for the additionalSources property.
    */
    public function setAdditionalSources(?array $value): void {
        $this->getBackingStore()->set('additionalSources', $value);
    }

    /**
     * Sets the addToReviewSetOperation property value. Adds the results of the eDiscovery search to the specified reviewSet.
     * @param EdiscoveryAddToReviewSetOperation|null $value Value to set for the addToReviewSetOperation property.
    */
    public function setAddToReviewSetOperation(?EdiscoveryAddToReviewSetOperation $value): void {
        $this->getBackingStore()->set('addToReviewSetOperation', $value);
    }

    /**
     * Sets the custodianSources property value. Custodian sources that are included in the eDiscovery search.
     * @param array<DataSource>|null $value Value to set for the custodianSources property.
    */
    public function setCustodianSources(?array $value): void {
        $this->getBackingStore()->set('custodianSources', $value);
    }

    /**
     * Sets the dataSourceScopes property value. When specified, the collection will span across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
     * @param DataSourceScopes|null $value Value to set for the dataSourceScopes property.
    */
    public function setDataSourceScopes(?DataSourceScopes $value): void {
        $this->getBackingStore()->set('dataSourceScopes', $value);
    }

    /**
     * Sets the lastEstimateStatisticsOperation property value. The last estimate operation associated with the eDiscovery search.
     * @param EdiscoveryEstimateOperation|null $value Value to set for the lastEstimateStatisticsOperation property.
    */
    public function setLastEstimateStatisticsOperation(?EdiscoveryEstimateOperation $value): void {
        $this->getBackingStore()->set('lastEstimateStatisticsOperation', $value);
    }

    /**
     * Sets the noncustodialSources property value. noncustodialDataSource sources that are included in the eDiscovery search
     * @param array<EdiscoveryNoncustodialDataSource>|null $value Value to set for the noncustodialSources property.
    */
    public function setNoncustodialSources(?array $value): void {
        $this->getBackingStore()->set('noncustodialSources', $value);
    }

}
