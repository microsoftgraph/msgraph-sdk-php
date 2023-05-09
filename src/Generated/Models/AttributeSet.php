<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttributeSet extends Entity implements Parsable 
{
    /**
     * Instantiates a new AttributeSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttributeSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttributeSet {
        return new AttributeSet();
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'maxAttributesPerSet' => fn(ParseNode $n) => $o->setMaxAttributesPerSet($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the maxAttributesPerSet property value. The maxAttributesPerSet property
     * @return int|null
    */
    public function getMaxAttributesPerSet(): ?int {
        return $this->getBackingStore()->get('maxAttributesPerSet');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeIntegerValue('maxAttributesPerSet', $this->getMaxAttributesPerSet());
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the maxAttributesPerSet property value. The maxAttributesPerSet property
     * @param int|null $value Value to set for the maxAttributesPerSet property.
    */
    public function setMaxAttributesPerSet(?int $value): void {
        $this->getBackingStore()->set('maxAttributesPerSet', $value);
    }

}
