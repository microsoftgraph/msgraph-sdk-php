<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Indicator extends Entity implements Parsable 
{
    /**
     * Instantiates a new indicator and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Indicator
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Indicator {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.articleIndicator': return new ArticleIndicator();
                case '#microsoft.graph.security.intelligenceProfileIndicator': return new IntelligenceProfileIndicator();
            }
        }
        return new Indicator();
    }

    /**
     * Gets the artifact property value. The artifact property
     * @return Artifact|null
    */
    public function getArtifact(): ?Artifact {
        $val = $this->getBackingStore()->get('artifact');
        if (is_null($val) || $val instanceof Artifact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'artifact'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'artifact' => fn(ParseNode $n) => $o->setArtifact($n->getObjectValue([Artifact::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(IndicatorSource::class)),
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
     * Gets the source property value. The source property
     * @return IndicatorSource|null
    */
    public function getSource(): ?IndicatorSource {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof IndicatorSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('artifact', $this->getArtifact());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('source', $this->getSource());
    }

    /**
     * Sets the artifact property value. The artifact property
     * @param Artifact|null $value Value to set for the artifact property.
    */
    public function setArtifact(?Artifact $value): void {
        $this->getBackingStore()->set('artifact', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the source property value. The source property
     * @param IndicatorSource|null $value Value to set for the source property.
    */
    public function setSource(?IndicatorSource $value): void {
        $this->getBackingStore()->set('source', $value);
    }

}
