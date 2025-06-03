<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AiInteractionContext extends Entity implements Parsable 
{
    /**
     * Instantiates a new AiInteractionContext and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AiInteractionContext
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AiInteractionContext {
        return new AiInteractionContext();
    }

    /**
     * Gets the contextReference property value. The full file URL where the interaction happened.
     * @return string|null
    */
    public function getContextReference(): ?string {
        $val = $this->getBackingStore()->get('contextReference');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contextReference'");
    }

    /**
     * Gets the contextType property value. The type of the file.
     * @return string|null
    */
    public function getContextType(): ?string {
        $val = $this->getBackingStore()->get('contextType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contextType'");
    }

    /**
     * Gets the displayName property value. The name of the file.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contextReference' => fn(ParseNode $n) => $o->setContextReference($n->getStringValue()),
            'contextType' => fn(ParseNode $n) => $o->setContextType($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contextReference', $this->getContextReference());
        $writer->writeStringValue('contextType', $this->getContextType());
        $writer->writeStringValue('displayName', $this->getDisplayName());
    }

    /**
     * Sets the contextReference property value. The full file URL where the interaction happened.
     * @param string|null $value Value to set for the contextReference property.
    */
    public function setContextReference(?string $value): void {
        $this->getBackingStore()->set('contextReference', $value);
    }

    /**
     * Sets the contextType property value. The type of the file.
     * @param string|null $value Value to set for the contextType property.
    */
    public function setContextType(?string $value): void {
        $this->getBackingStore()->set('contextType', $value);
    }

    /**
     * Sets the displayName property value. The name of the file.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

}
