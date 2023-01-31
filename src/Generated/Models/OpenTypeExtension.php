<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OpenTypeExtension extends Extension implements Parsable 
{
    /**
     * Instantiates a new OpenTypeExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.openTypeExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OpenTypeExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OpenTypeExtension {
        return new OpenTypeExtension();
    }

    /**
     * Gets the extensionName property value. A unique text identifier for an open type data extension. Optional.
     * @return string|null
    */
    public function getExtensionName(): ?string {
        return $this->getBackingStore()->get('extensionName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'extensionName' => fn(ParseNode $n) => $o->setExtensionName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('extensionName', $this->getExtensionName());
    }

    /**
     * Sets the extensionName property value. A unique text identifier for an open type data extension. Optional.
     * @param string|null $value Value to set for the extensionName property.
    */
    public function setExtensionName(?string $value): void {
        $this->getBackingStore()->set('extensionName', $value);
    }

}
