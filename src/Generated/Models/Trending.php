<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Trending extends Entity implements Parsable 
{
    /**
     * Instantiates a new trending and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Trending
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Trending {
        return new Trending();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([Entity::class, 'createFromDiscriminatorValue'])),
            'resourceReference' => fn(ParseNode $n) => $o->setResourceReference($n->getObjectValue([ResourceReference::class, 'createFromDiscriminatorValue'])),
            'resourceVisualization' => fn(ParseNode $n) => $o->setResourceVisualization($n->getObjectValue([ResourceVisualization::class, 'createFromDiscriminatorValue'])),
            'weight' => fn(ParseNode $n) => $o->setWeight($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the resource property value. Used for navigating to the trending document.
     * @return Entity|null
    */
    public function getResource(): ?Entity {
        return $this->getBackingStore()->get('resource');
    }

    /**
     * Gets the resourceReference property value. Reference properties of the trending document, such as the url and type of the document.
     * @return ResourceReference|null
    */
    public function getResourceReference(): ?ResourceReference {
        return $this->getBackingStore()->get('resourceReference');
    }

    /**
     * Gets the resourceVisualization property value. Properties that you can use to visualize the document in your experience.
     * @return ResourceVisualization|null
    */
    public function getResourceVisualization(): ?ResourceVisualization {
        return $this->getBackingStore()->get('resourceVisualization');
    }

    /**
     * Gets the weight property value. Value indicating how much the document is currently trending. The larger the number, the more the document is currently trending around the user (the more relevant it is). Returned documents are sorted by this value.
     * @return float|null
    */
    public function getWeight(): ?float {
        return $this->getBackingStore()->get('weight');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('resource', $this->getResource());
        $writer->writeFloatValue('weight', $this->getWeight());
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the resource property value. Used for navigating to the trending document.
     * @param Entity|null $value Value to set for the resource property.
    */
    public function setResource(?Entity $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

    /**
     * Sets the resourceReference property value. Reference properties of the trending document, such as the url and type of the document.
     * @param ResourceReference|null $value Value to set for the resourceReference property.
    */
    public function setResourceReference(?ResourceReference $value): void {
        $this->getBackingStore()->set('resourceReference', $value);
    }

    /**
     * Sets the resourceVisualization property value. Properties that you can use to visualize the document in your experience.
     * @param ResourceVisualization|null $value Value to set for the resourceVisualization property.
    */
    public function setResourceVisualization(?ResourceVisualization $value): void {
        $this->getBackingStore()->set('resourceVisualization', $value);
    }

    /**
     * Sets the weight property value. Value indicating how much the document is currently trending. The larger the number, the more the document is currently trending around the user (the more relevant it is). Returned documents are sorted by this value.
     * @param float|null $value Value to set for the weight property.
    */
    public function setWeight(?float $value): void {
        $this->getBackingStore()->set('weight', $value);
    }

}
