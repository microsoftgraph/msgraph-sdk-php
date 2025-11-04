<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TextWebPart extends WebPart implements Parsable 
{
    /**
     * Instantiates a new TextWebPart and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.textWebPart');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TextWebPart
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TextWebPart {
        return new TextWebPart();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'innerHtml' => fn(ParseNode $n) => $o->setInnerHtml($n->getStringValue()),
        ]);
    }

    /**
     * Gets the innerHtml property value. The HTML string in text web part.
     * @return string|null
    */
    public function getInnerHtml(): ?string {
        $val = $this->getBackingStore()->get('innerHtml');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'innerHtml'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('innerHtml', $this->getInnerHtml());
    }

    /**
     * Sets the innerHtml property value. The HTML string in text web part.
     * @param string|null $value Value to set for the innerHtml property.
    */
    public function setInnerHtml(?string $value): void {
        $this->getBackingStore()->set('innerHtml', $value);
    }

}
