<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRbacResourceNamespace extends Entity implements Parsable 
{
    /**
     * Instantiates a new unifiedRbacResourceNamespace and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRbacResourceNamespace
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRbacResourceNamespace {
        return new UnifiedRbacResourceNamespace();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'resourceActions' => fn(ParseNode $n) => $o->setResourceActions($n->getCollectionOfObjectValues([UnifiedRbacResourceAction::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the resourceActions property value. The resourceActions property
     * @return array<UnifiedRbacResourceAction>|null
    */
    public function getResourceActions(): ?array {
        return $this->getBackingStore()->get('resourceActions');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('resourceActions', $this->getResourceActions());
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the resourceActions property value. The resourceActions property
     * @param array<UnifiedRbacResourceAction>|null $value Value to set for the resourceActions property.
    */
    public function setResourceActions(?array $value): void {
        $this->getBackingStore()->set('resourceActions', $value);
    }

}
