<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
*/
class EdgeSearchEngine extends EdgeSearchEngineBase implements Parsable 
{
    /**
     * Instantiates a new edgeSearchEngine and sets the default values.
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
        $val = $this->getBackingStore()->get('edgeSearchEngineType');
        if (is_null($val) || $val instanceof EdgeSearchEngineType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeSearchEngineType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'edgeSearchEngineType' => fn(ParseNode $n) => $o->setEdgeSearchEngineType($n->getEnumValue(EdgeSearchEngineType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('edgeSearchEngineType', $this->getEdgeSearchEngineType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the edgeSearchEngineType property value. Allows IT admind to set a predefined default search engine for MDM-Controlled devices
     * @param EdgeSearchEngineType|null $value Value to set for the edgeSearchEngineType property.
    */
    public function setEdgeSearchEngineType(?EdgeSearchEngineType $value): void {
        $this->getBackingStore()->set('edgeSearchEngineType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
