<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryNoncustodialDataSource extends DataSourceContainer implements Parsable 
{
    /**
     * Instantiates a new EdiscoveryNoncustodialDataSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.ediscoveryNoncustodialDataSource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryNoncustodialDataSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryNoncustodialDataSource {
        return new EdiscoveryNoncustodialDataSource();
    }

    /**
     * Gets the dataSource property value. User source or SharePoint site data source as non-custodial data source.
     * @return DataSource|null
    */
    public function getDataSource(): ?DataSource {
        return $this->getBackingStore()->get('dataSource');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dataSource' => fn(ParseNode $n) => $o->setDataSource($n->getObjectValue([DataSource::class, 'createFromDiscriminatorValue'])),
            'lastIndexOperation' => fn(ParseNode $n) => $o->setLastIndexOperation($n->getObjectValue([EdiscoveryIndexOperation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastIndexOperation property value. Operation entity that represents the latest indexing for the non-custodial data source.
     * @return EdiscoveryIndexOperation|null
    */
    public function getLastIndexOperation(): ?EdiscoveryIndexOperation {
        return $this->getBackingStore()->get('lastIndexOperation');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('dataSource', $this->getDataSource());
        $writer->writeObjectValue('lastIndexOperation', $this->getLastIndexOperation());
    }

    /**
     * Sets the dataSource property value. User source or SharePoint site data source as non-custodial data source.
     *  @param DataSource|null $value Value to set for the dataSource property.
    */
    public function setDataSource(?DataSource $value): void {
        $this->getBackingStore()->set('dataSource', $value);
    }

    /**
     * Sets the lastIndexOperation property value. Operation entity that represents the latest indexing for the non-custodial data source.
     *  @param EdiscoveryIndexOperation|null $value Value to set for the lastIndexOperation property.
    */
    public function setLastIndexOperation(?EdiscoveryIndexOperation $value): void {
        $this->getBackingStore()->set('lastIndexOperation', $value);
    }

}
