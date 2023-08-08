<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContainerImageEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new containerImageEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.containerImageEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContainerImageEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContainerImageEvidence {
        return new ContainerImageEvidence();
    }

    /**
     * Gets the digestImage property value. The digest image entity, in case this is a tag image.
     * @return ContainerImageEvidence|null
    */
    public function getDigestImage(): ?ContainerImageEvidence {
        $val = $this->getBackingStore()->get('digestImage');
        if (is_null($val) || $val instanceof ContainerImageEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'digestImage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'digestImage' => fn(ParseNode $n) => $o->setDigestImage($n->getObjectValue([ContainerImageEvidence::class, 'createFromDiscriminatorValue'])),
            'imageId' => fn(ParseNode $n) => $o->setImageId($n->getStringValue()),
            'registry' => fn(ParseNode $n) => $o->setRegistry($n->getObjectValue([ContainerRegistryEvidence::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the imageId property value. The unique identifier for the container image entity.
     * @return string|null
    */
    public function getImageId(): ?string {
        $val = $this->getBackingStore()->get('imageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageId'");
    }

    /**
     * Gets the registry property value. The container registry for this image.
     * @return ContainerRegistryEvidence|null
    */
    public function getRegistry(): ?ContainerRegistryEvidence {
        $val = $this->getBackingStore()->get('registry');
        if (is_null($val) || $val instanceof ContainerRegistryEvidence) {
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
        $writer->writeObjectValue('digestImage', $this->getDigestImage());
        $writer->writeStringValue('imageId', $this->getImageId());
        $writer->writeObjectValue('registry', $this->getRegistry());
    }

    /**
     * Sets the digestImage property value. The digest image entity, in case this is a tag image.
     * @param ContainerImageEvidence|null $value Value to set for the digestImage property.
    */
    public function setDigestImage(?ContainerImageEvidence $value): void {
        $this->getBackingStore()->set('digestImage', $value);
    }

    /**
     * Sets the imageId property value. The unique identifier for the container image entity.
     * @param string|null $value Value to set for the imageId property.
    */
    public function setImageId(?string $value): void {
        $this->getBackingStore()->set('imageId', $value);
    }

    /**
     * Sets the registry property value. The container registry for this image.
     * @param ContainerRegistryEvidence|null $value Value to set for the registry property.
    */
    public function setRegistry(?ContainerRegistryEvidence $value): void {
        $this->getBackingStore()->set('registry', $value);
    }

}
