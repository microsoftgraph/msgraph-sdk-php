<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContainerRegistryEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new ContainerRegistryEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.containerRegistryEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContainerRegistryEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContainerRegistryEvidence {
        return new ContainerRegistryEvidence();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'registry' => fn(ParseNode $n) => $o->setRegistry($n->getStringValue()),
        ]);
    }

    /**
     * Gets the registry property value. The registry URI.
     * @return string|null
    */
    public function getRegistry(): ?string {
        $val = $this->getBackingStore()->get('registry');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registry'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('registry', $this->getRegistry());
    }

    /**
     * Sets the registry property value. The registry URI.
     * @param string|null $value Value to set for the registry property.
    */
    public function setRegistry(?string $value): void {
        $this->getBackingStore()->set('registry', $value);
    }

}
