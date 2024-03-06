<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CanvasLayout extends Entity implements Parsable 
{
    /**
     * Instantiates a new CanvasLayout and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CanvasLayout
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CanvasLayout {
        return new CanvasLayout();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'horizontalSections' => fn(ParseNode $n) => $o->setHorizontalSections($n->getCollectionOfObjectValues([HorizontalSection::class, 'createFromDiscriminatorValue'])),
            'verticalSection' => fn(ParseNode $n) => $o->setVerticalSection($n->getObjectValue([VerticalSection::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the horizontalSections property value. The horizontalSections property
     * @return array<HorizontalSection>|null
    */
    public function getHorizontalSections(): ?array {
        $val = $this->getBackingStore()->get('horizontalSections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HorizontalSection::class);
            /** @var array<HorizontalSection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'horizontalSections'");
    }

    /**
     * Gets the verticalSection property value. The verticalSection property
     * @return VerticalSection|null
    */
    public function getVerticalSection(): ?VerticalSection {
        $val = $this->getBackingStore()->get('verticalSection');
        if (is_null($val) || $val instanceof VerticalSection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verticalSection'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('horizontalSections', $this->getHorizontalSections());
        $writer->writeObjectValue('verticalSection', $this->getVerticalSection());
    }

    /**
     * Sets the horizontalSections property value. The horizontalSections property
     * @param array<HorizontalSection>|null $value Value to set for the horizontalSections property.
    */
    public function setHorizontalSections(?array $value): void {
        $this->getBackingStore()->set('horizontalSections', $value);
    }

    /**
     * Sets the verticalSection property value. The verticalSection property
     * @param VerticalSection|null $value Value to set for the verticalSection property.
    */
    public function setVerticalSection(?VerticalSection $value): void {
        $this->getBackingStore()->set('verticalSection', $value);
    }

}
