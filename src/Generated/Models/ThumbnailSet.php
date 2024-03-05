<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ThumbnailSet extends Entity implements Parsable 
{
    /**
     * Instantiates a new ThumbnailSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ThumbnailSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ThumbnailSet {
        return new ThumbnailSet();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'large' => fn(ParseNode $n) => $o->setLarge($n->getObjectValue([Thumbnail::class, 'createFromDiscriminatorValue'])),
            'medium' => fn(ParseNode $n) => $o->setMedium($n->getObjectValue([Thumbnail::class, 'createFromDiscriminatorValue'])),
            'small' => fn(ParseNode $n) => $o->setSmall($n->getObjectValue([Thumbnail::class, 'createFromDiscriminatorValue'])),
            'source' => fn(ParseNode $n) => $o->setSource($n->getObjectValue([Thumbnail::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the large property value. A 1920x1920 scaled thumbnail.
     * @return Thumbnail|null
    */
    public function getLarge(): ?Thumbnail {
        $val = $this->getBackingStore()->get('large');
        if (is_null($val) || $val instanceof Thumbnail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'large'");
    }

    /**
     * Gets the medium property value. A 176x176 scaled thumbnail.
     * @return Thumbnail|null
    */
    public function getMedium(): ?Thumbnail {
        $val = $this->getBackingStore()->get('medium');
        if (is_null($val) || $val instanceof Thumbnail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'medium'");
    }

    /**
     * Gets the small property value. A 48x48 cropped thumbnail.
     * @return Thumbnail|null
    */
    public function getSmall(): ?Thumbnail {
        $val = $this->getBackingStore()->get('small');
        if (is_null($val) || $val instanceof Thumbnail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'small'");
    }

    /**
     * Gets the source property value. A custom thumbnail image or the original image used to generate other thumbnails.
     * @return Thumbnail|null
    */
    public function getSource(): ?Thumbnail {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof Thumbnail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('large', $this->getLarge());
        $writer->writeObjectValue('medium', $this->getMedium());
        $writer->writeObjectValue('small', $this->getSmall());
        $writer->writeObjectValue('source', $this->getSource());
    }

    /**
     * Sets the large property value. A 1920x1920 scaled thumbnail.
     * @param Thumbnail|null $value Value to set for the large property.
    */
    public function setLarge(?Thumbnail $value): void {
        $this->getBackingStore()->set('large', $value);
    }

    /**
     * Sets the medium property value. A 176x176 scaled thumbnail.
     * @param Thumbnail|null $value Value to set for the medium property.
    */
    public function setMedium(?Thumbnail $value): void {
        $this->getBackingStore()->set('medium', $value);
    }

    /**
     * Sets the small property value. A 48x48 cropped thumbnail.
     * @param Thumbnail|null $value Value to set for the small property.
    */
    public function setSmall(?Thumbnail $value): void {
        $this->getBackingStore()->set('small', $value);
    }

    /**
     * Sets the source property value. A custom thumbnail image or the original image used to generate other thumbnails.
     * @param Thumbnail|null $value Value to set for the source property.
    */
    public function setSource(?Thumbnail $value): void {
        $this->getBackingStore()->set('source', $value);
    }

}
