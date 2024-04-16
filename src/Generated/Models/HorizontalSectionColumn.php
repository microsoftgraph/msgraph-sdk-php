<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class HorizontalSectionColumn extends Entity implements Parsable 
{
    /**
     * Instantiates a new HorizontalSectionColumn and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HorizontalSectionColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HorizontalSectionColumn {
        return new HorizontalSectionColumn();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'webparts' => fn(ParseNode $n) => $o->setWebparts($n->getCollectionOfObjectValues([WebPart::class, 'createFromDiscriminatorValue'])),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the webparts property value. The collection of WebParts in this column.
     * @return array<WebPart>|null
    */
    public function getWebparts(): ?array {
        $val = $this->getBackingStore()->get('webparts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WebPart::class);
            /** @var array<WebPart>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webparts'");
    }

    /**
     * Gets the width property value. Width of the column. A horizontal section is divided into 12 grids. A column should have a value of 1-12 to represent its range spans. For example, there can be two columns both have a width of 6 in a section.
     * @return int|null
    */
    public function getWidth(): ?int {
        $val = $this->getBackingStore()->get('width');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'width'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('webparts', $this->getWebparts());
        $writer->writeIntegerValue('width', $this->getWidth());
    }

    /**
     * Sets the webparts property value. The collection of WebParts in this column.
     * @param array<WebPart>|null $value Value to set for the webparts property.
    */
    public function setWebparts(?array $value): void {
        $this->getBackingStore()->set('webparts', $value);
    }

    /**
     * Sets the width property value. Width of the column. A horizontal section is divided into 12 grids. A column should have a value of 1-12 to represent its range spans. For example, there can be two columns both have a width of 6 in a section.
     * @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value): void {
        $this->getBackingStore()->set('width', $value);
    }

}
