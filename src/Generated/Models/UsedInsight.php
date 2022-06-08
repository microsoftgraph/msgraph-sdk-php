<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UsedInsight extends Entity implements Parsable 
{
    /**
     * @var UsageDetails|null $lastUsed Information about when the item was last viewed or modified by the user. Read only.
    */
    private ?UsageDetails $lastUsed = null;
    
    /**
     * @var Entity|null $resource Used for navigating to the item that was used. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
    */
    private ?Entity $resource = null;
    
    /**
     * @var ResourceReference|null $resourceReference Reference properties of the used document, such as the url and type of the document. Read-only
    */
    private ?ResourceReference $resourceReference = null;
    
    /**
     * @var ResourceVisualization|null $resourceVisualization Properties that you can use to visualize the document in your experience. Read-only
    */
    private ?ResourceVisualization $resourceVisualization = null;
    
    /**
     * Instantiates a new usedInsight and sets the default values.
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastUsed' => function (ParseNode $n) use ($o) { $o->setLastUsed($n->getObjectValue(array(UsageDetails::class, 'createFromDiscriminatorValue'))); },
            'resource' => function (ParseNode $n) use ($o) { $o->setResource($n->getObjectValue(array(Entity::class, 'createFromDiscriminatorValue'))); },
            'resourceReference' => function (ParseNode $n) use ($o) { $o->setResourceReference($n->getObjectValue(array(ResourceReference::class, 'createFromDiscriminatorValue'))); },
            'resourceVisualization' => function (ParseNode $n) use ($o) { $o->setResourceVisualization($n->getObjectValue(array(ResourceVisualization::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastUsed property value. Information about when the item was last viewed or modified by the user. Read only.
     * @return UsageDetails|null
    */
    public function getLastUsed(): ?UsageDetails {
        return $this->lastUsed;
    }

    /**
     * Gets the resource property value. Used for navigating to the item that was used. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
     * @return Entity|null
    */
    public function getResource(): ?Entity {
        return $this->resource;
    }

    /**
     * Gets the resourceReference property value. Reference properties of the used document, such as the url and type of the document. Read-only
     * @return ResourceReference|null
    */
    public function getResourceReference(): ?ResourceReference {
        return $this->resourceReference;
    }

    /**
     * Gets the resourceVisualization property value. Properties that you can use to visualize the document in your experience. Read-only
     * @return ResourceVisualization|null
    */
    public function getResourceVisualization(): ?ResourceVisualization {
        return $this->resourceVisualization;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('lastUsed', $this->lastUsed);
        $writer->writeObjectValue('resource', $this->resource);
        $writer->writeObjectValue('resourceReference', $this->resourceReference);
        $writer->writeObjectValue('resourceVisualization', $this->resourceVisualization);
    }

    /**
     * Sets the lastUsed property value. Information about when the item was last viewed or modified by the user. Read only.
     *  @param UsageDetails|null $value Value to set for the lastUsed property.
    */
    public function setLastUsed(?UsageDetails $value ): void {
        $this->lastUsed = $value;
    }

    /**
     * Sets the resource property value. Used for navigating to the item that was used. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
     *  @param Entity|null $value Value to set for the resource property.
    */
    public function setResource(?Entity $value ): void {
        $this->resource = $value;
    }

    /**
     * Sets the resourceReference property value. Reference properties of the used document, such as the url and type of the document. Read-only
     *  @param ResourceReference|null $value Value to set for the resourceReference property.
    */
    public function setResourceReference(?ResourceReference $value ): void {
        $this->resourceReference = $value;
    }

    /**
     * Sets the resourceVisualization property value. Properties that you can use to visualize the document in your experience. Read-only
     *  @param ResourceVisualization|null $value Value to set for the resourceVisualization property.
    */
    public function setResourceVisualization(?ResourceVisualization $value ): void {
        $this->resourceVisualization = $value;
    }

}
