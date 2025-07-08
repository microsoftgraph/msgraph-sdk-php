<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class BinaryContent extends ContentBase implements Parsable 
{
    /**
     * Instantiates a new BinaryContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.binaryContent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BinaryContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BinaryContent {
        return new BinaryContent();
    }

    /**
     * Gets the data property value. The binary content, encoded as a Base64 string. Inherited from contentBase.
     * @return StreamInterface|null
    */
    public function getData(): ?StreamInterface {
        $val = $this->getBackingStore()->get('data');
        if (is_null($val) || $val instanceof StreamInterface) {
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
            'data' => fn(ParseNode $n) => $o->setData($n->getBinaryContent()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('data', $this->getData());
    }

    /**
     * Sets the data property value. The binary content, encoded as a Base64 string. Inherited from contentBase.
     * @param StreamInterface|null $value Value to set for the data property.
    */
    public function setData(?StreamInterface $value): void {
        $this->getBackingStore()->set('data', $value);
    }

}
