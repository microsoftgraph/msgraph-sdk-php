<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdgeSearchEngine extends EdgeSearchEngineBase implements Parsable 
{
    /**
     * Instantiates a new EdgeSearchEngine and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.edgeSearchEngine');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdgeSearchEngine
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdgeSearchEngine {
        return new EdgeSearchEngine();
    }

    /**
     * Gets the edgeSearchEngineType property value. Allows IT admind to set a predefined default search engine for MDM-Controlled devices
     * @return EdgeSearchEngineType|null
    */
    public function getEdgeSearchEngineType(): ?EdgeSearchEngineType {
        return $this->getBackingStore()->get('edgeSearchEngineType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'edgeSearchEngineType' => fn(ParseNode $n) => $o->setEdgeSearchEngineType($n->getEnumValue(EdgeSearchEngineType::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('edgeSearchEngineType', $this->getEdgeSearchEngineType());
    }

    /**
     * Sets the edgeSearchEngineType property value. Allows IT admind to set a predefined default search engine for MDM-Controlled devices
     *  @param EdgeSearchEngineType|null $value Value to set for the edgeSearchEngineType property.
    */
    public function setEdgeSearchEngineType(?EdgeSearchEngineType $value): void {
        $this->getBackingStore()->set('edgeSearchEngineType', $value);
    }

}