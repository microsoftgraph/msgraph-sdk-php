<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharedInsight extends Entity implements Parsable 
{
    /**
     * @var SharingDetail|null $lastShared Details about the shared item. Read only.
    */
    private ?SharingDetail $lastShared = null;
    
    /**
     * @var Entity|null $lastSharedMethod The lastSharedMethod property
    */
    private ?Entity $lastSharedMethod = null;
    
    /**
     * @var Entity|null $resource Used for navigating to the item that was shared. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
    */
    private ?Entity $resource = null;
    
    /**
     * @var ResourceReference|null $resourceReference Reference properties of the shared document, such as the url and type of the document. Read-only
    */
    private ?ResourceReference $resourceReference = null;
    
    /**
     * @var ResourceVisualization|null $resourceVisualization Properties that you can use to visualize the document in your experience. Read-only
    */
    private ?ResourceVisualization $resourceVisualization = null;
    
    /**
     * @var array<SharingDetail>|null $sharingHistory The sharingHistory property
    */
    private ?array $sharingHistory = null;
    
    /**
     * Instantiates a new sharedInsight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedInsight {
        return new SharedInsight();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastShared' => function (ParseNode $n) use ($o) { $o->setLastShared($n->getObjectValue(array(SharingDetail::class, 'createFromDiscriminatorValue'))); },
            'lastSharedMethod' => function (ParseNode $n) use ($o) { $o->setLastSharedMethod($n->getObjectValue(array(Entity::class, 'createFromDiscriminatorValue'))); },
            'resource' => function (ParseNode $n) use ($o) { $o->setResource($n->getObjectValue(array(Entity::class, 'createFromDiscriminatorValue'))); },
            'resourceReference' => function (ParseNode $n) use ($o) { $o->setResourceReference($n->getObjectValue(array(ResourceReference::class, 'createFromDiscriminatorValue'))); },
            'resourceVisualization' => function (ParseNode $n) use ($o) { $o->setResourceVisualization($n->getObjectValue(array(ResourceVisualization::class, 'createFromDiscriminatorValue'))); },
            'sharingHistory' => function (ParseNode $n) use ($o) { $o->setSharingHistory($n->getCollectionOfObjectValues(array(SharingDetail::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastShared property value. Details about the shared item. Read only.
     * @return SharingDetail|null
    */
    public function getLastShared(): ?SharingDetail {
        return $this->lastShared;
    }

    /**
     * Gets the lastSharedMethod property value. The lastSharedMethod property
     * @return Entity|null
    */
    public function getLastSharedMethod(): ?Entity {
        return $this->lastSharedMethod;
    }

    /**
     * Gets the resource property value. Used for navigating to the item that was shared. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
     * @return Entity|null
    */
    public function getResource(): ?Entity {
        return $this->resource;
    }

    /**
     * Gets the resourceReference property value. Reference properties of the shared document, such as the url and type of the document. Read-only
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
     * Gets the sharingHistory property value. The sharingHistory property
     * @return array<SharingDetail>|null
    */
    public function getSharingHistory(): ?array {
        return $this->sharingHistory;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('lastShared', $this->lastShared);
        $writer->writeObjectValue('lastSharedMethod', $this->lastSharedMethod);
        $writer->writeObjectValue('resource', $this->resource);
        $writer->writeObjectValue('resourceReference', $this->resourceReference);
        $writer->writeObjectValue('resourceVisualization', $this->resourceVisualization);
        $writer->writeCollectionOfObjectValues('sharingHistory', $this->sharingHistory);
    }

    /**
     * Sets the lastShared property value. Details about the shared item. Read only.
     *  @param SharingDetail|null $value Value to set for the lastShared property.
    */
    public function setLastShared(?SharingDetail $value ): void {
        $this->lastShared = $value;
    }

    /**
     * Sets the lastSharedMethod property value. The lastSharedMethod property
     *  @param Entity|null $value Value to set for the lastSharedMethod property.
    */
    public function setLastSharedMethod(?Entity $value ): void {
        $this->lastSharedMethod = $value;
    }

    /**
     * Sets the resource property value. Used for navigating to the item that was shared. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
     *  @param Entity|null $value Value to set for the resource property.
    */
    public function setResource(?Entity $value ): void {
        $this->resource = $value;
    }

    /**
     * Sets the resourceReference property value. Reference properties of the shared document, such as the url and type of the document. Read-only
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

    /**
     * Sets the sharingHistory property value. The sharingHistory property
     *  @param array<SharingDetail>|null $value Value to set for the sharingHistory property.
    */
    public function setSharingHistory(?array $value ): void {
        $this->sharingHistory = $value;
    }

}
