<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ThumbnailSet extends Entity implements Parsable 
{
    /**
     * @var Thumbnail|null $large A 1920x1920 scaled thumbnail.
    */
    private ?Thumbnail $large = null;
    
    /**
     * @var Thumbnail|null $medium A 176x176 scaled thumbnail.
    */
    private ?Thumbnail $medium = null;
    
    /**
     * @var Thumbnail|null $small A 48x48 cropped thumbnail.
    */
    private ?Thumbnail $small = null;
    
    /**
     * @var Thumbnail|null $source A custom thumbnail image or the original image used to generate other thumbnails.
    */
    private ?Thumbnail $source = null;
    
    /**
     * Instantiates a new thumbnailSet and sets the default values.
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'large' => function (ParseNode $n) use ($o) { $o->setLarge($n->getObjectValue(array(Thumbnail::class, 'createFromDiscriminatorValue'))); },
            'medium' => function (ParseNode $n) use ($o) { $o->setMedium($n->getObjectValue(array(Thumbnail::class, 'createFromDiscriminatorValue'))); },
            'small' => function (ParseNode $n) use ($o) { $o->setSmall($n->getObjectValue(array(Thumbnail::class, 'createFromDiscriminatorValue'))); },
            'source' => function (ParseNode $n) use ($o) { $o->setSource($n->getObjectValue(array(Thumbnail::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the large property value. A 1920x1920 scaled thumbnail.
     * @return Thumbnail|null
    */
    public function getLarge(): ?Thumbnail {
        return $this->large;
    }

    /**
     * Gets the medium property value. A 176x176 scaled thumbnail.
     * @return Thumbnail|null
    */
    public function getMedium(): ?Thumbnail {
        return $this->medium;
    }

    /**
     * Gets the small property value. A 48x48 cropped thumbnail.
     * @return Thumbnail|null
    */
    public function getSmall(): ?Thumbnail {
        return $this->small;
    }

    /**
     * Gets the source property value. A custom thumbnail image or the original image used to generate other thumbnails.
     * @return Thumbnail|null
    */
    public function getSource(): ?Thumbnail {
        return $this->source;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('large', $this->large);
        $writer->writeObjectValue('medium', $this->medium);
        $writer->writeObjectValue('small', $this->small);
        $writer->writeObjectValue('source', $this->source);
    }

    /**
     * Sets the large property value. A 1920x1920 scaled thumbnail.
     *  @param Thumbnail|null $value Value to set for the large property.
    */
    public function setLarge(?Thumbnail $value ): void {
        $this->large = $value;
    }

    /**
     * Sets the medium property value. A 176x176 scaled thumbnail.
     *  @param Thumbnail|null $value Value to set for the medium property.
    */
    public function setMedium(?Thumbnail $value ): void {
        $this->medium = $value;
    }

    /**
     * Sets the small property value. A 48x48 cropped thumbnail.
     *  @param Thumbnail|null $value Value to set for the small property.
    */
    public function setSmall(?Thumbnail $value ): void {
        $this->small = $value;
    }

    /**
     * Sets the source property value. A custom thumbnail image or the original image used to generate other thumbnails.
     *  @param Thumbnail|null $value Value to set for the source property.
    */
    public function setSource(?Thumbnail $value ): void {
        $this->source = $value;
    }

}
