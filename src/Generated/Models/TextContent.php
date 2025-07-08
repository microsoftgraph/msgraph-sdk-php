<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TextContent extends ContentBase implements Parsable 
{
    /**
     * Instantiates a new TextContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.textContent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TextContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TextContent {
        return new TextContent();
    }

    /**
     * Gets the data property value. The text content data. Inherits properties from contentBase.
     * @return string|null
    */
    public function getData(): ?string {
        $val = $this->getBackingStore()->get('data');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'data'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'data' => fn(ParseNode $n) => $o->setData($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('data', $this->getData());
    }

    /**
     * Sets the data property value. The text content data. Inherits properties from contentBase.
     * @param string|null $value Value to set for the data property.
    */
    public function setData(?string $value): void {
        $this->getBackingStore()->set('data', $value);
    }

}
