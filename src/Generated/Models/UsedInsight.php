<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UsedInsight extends Entity implements Parsable 
{
    /**
     * Instantiates a new UsedInsight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsedInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsedInsight {
        return new UsedInsight();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastUsed' => fn(ParseNode $n) => $o->setLastUsed($n->getObjectValue([UsageDetails::class, 'createFromDiscriminatorValue'])),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([Entity::class, 'createFromDiscriminatorValue'])),
            'resourceReference' => fn(ParseNode $n) => $o->setResourceReference($n->getObjectValue([ResourceReference::class, 'createFromDiscriminatorValue'])),
            'resourceVisualization' => fn(ParseNode $n) => $o->setResourceVisualization($n->getObjectValue([ResourceVisualization::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastUsed property value. Information about when the item was last viewed or modified by the user. Read-only.
     * @return UsageDetails|null
    */
    public function getLastUsed(): ?UsageDetails {
        $val = $this->getBackingStore()->get('lastUsed');
        if (is_null($val) || $val instanceof UsageDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUsed'");
    }

    /**
     * Gets the resource property value. Used for navigating to the item that was used. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
     * @return Entity|null
    */
    public function getResource(): ?Entity {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof Entity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
    }

    /**
     * Gets the resourceReference property value. Reference properties of the used document, such as the URL and type of the document. Read-only
     * @return ResourceReference|null
    */
    public function getResourceReference(): ?ResourceReference {
        $val = $this->getBackingStore()->get('resourceReference');
        if (is_null($val) || $val instanceof ResourceReference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceReference'");
    }

    /**
     * Gets the resourceVisualization property value. Properties that you can use to visualize the document in your experience. Read-only
     * @return ResourceVisualization|null
    */
    public function getResourceVisualization(): ?ResourceVisualization {
        $val = $this->getBackingStore()->get('resourceVisualization');
        if (is_null($val) || $val instanceof ResourceVisualization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceVisualization'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('lastUsed', $this->getLastUsed());
        $writer->writeObjectValue('resource', $this->getResource());
    }

    /**
     * Sets the lastUsed property value. Information about when the item was last viewed or modified by the user. Read-only.
     * @param UsageDetails|null $value Value to set for the lastUsed property.
    */
    public function setLastUsed(?UsageDetails $value): void {
        $this->getBackingStore()->set('lastUsed', $value);
    }

    /**
     * Sets the resource property value. Used for navigating to the item that was used. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
     * @param Entity|null $value Value to set for the resource property.
    */
    public function setResource(?Entity $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

    /**
     * Sets the resourceReference property value. Reference properties of the used document, such as the URL and type of the document. Read-only
     * @param ResourceReference|null $value Value to set for the resourceReference property.
    */
    public function setResourceReference(?ResourceReference $value): void {
        $this->getBackingStore()->set('resourceReference', $value);
    }

    /**
     * Sets the resourceVisualization property value. Properties that you can use to visualize the document in your experience. Read-only
     * @param ResourceVisualization|null $value Value to set for the resourceVisualization property.
    */
    public function setResourceVisualization(?ResourceVisualization $value): void {
        $this->getBackingStore()->set('resourceVisualization', $value);
    }

}
