<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProfilePhoto extends Entity implements Parsable 
{
    /**
     * Instantiates a new profilePhoto and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProfilePhoto
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProfilePhoto {
        return new ProfilePhoto();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the height property value. The height of the photo. Read-only.
     * @return int|null
    */
    public function getHeight(): ?int {
        $val = $this->getBackingStore()->get('height');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'height'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the width property value. The width of the photo. Read-only.
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
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('width', $this->getWidth());
    }

    /**
     * Sets the height property value. The height of the photo. Read-only.
     * @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value): void {
        $this->getBackingStore()->set('height', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the width property value. The width of the photo. Read-only.
     * @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value): void {
        $this->getBackingStore()->set('width', $value);
    }

}
