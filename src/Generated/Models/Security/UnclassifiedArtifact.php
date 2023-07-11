<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnclassifiedArtifact extends Artifact implements Parsable 
{
    /**
     * Instantiates a new unclassifiedArtifact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.unclassifiedArtifact');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnclassifiedArtifact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnclassifiedArtifact {
        return new UnclassifiedArtifact();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'kind' => fn(ParseNode $n) => $o->setKind($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the kind property value. The kind for this unclassifiedArtifact resource, describing what this value means.
     * @return string|null
    */
    public function getKind(): ?string {
        $val = $this->getBackingStore()->get('kind');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kind'");
    }

    /**
     * Gets the value property value. The value for this unclassifiedArtifact.
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('kind', $this->getKind());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the kind property value. The kind for this unclassifiedArtifact resource, describing what this value means.
     * @param string|null $value Value to set for the kind property.
    */
    public function setKind(?string $value): void {
        $this->getBackingStore()->set('kind', $value);
    }

    /**
     * Sets the value property value. The value for this unclassifiedArtifact.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
