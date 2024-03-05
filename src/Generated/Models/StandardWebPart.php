<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StandardWebPart extends WebPart implements Parsable 
{
    /**
     * Instantiates a new StandardWebPart and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.standardWebPart');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StandardWebPart
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StandardWebPart {
        return new StandardWebPart();
    }

    /**
     * Gets the containerTextWebPartId property value. The containerTextWebPartId property
     * @return string|null
    */
    public function getContainerTextWebPartId(): ?string {
        $val = $this->getBackingStore()->get('containerTextWebPartId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containerTextWebPartId'");
    }

    /**
     * Gets the data property value. The data property
     * @return WebPartData|null
    */
    public function getData(): ?WebPartData {
        $val = $this->getBackingStore()->get('data');
        if (is_null($val) || $val instanceof WebPartData) {
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
            'containerTextWebPartId' => fn(ParseNode $n) => $o->setContainerTextWebPartId($n->getStringValue()),
            'data' => fn(ParseNode $n) => $o->setData($n->getObjectValue([WebPartData::class, 'createFromDiscriminatorValue'])),
            'webPartType' => fn(ParseNode $n) => $o->setWebPartType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the webPartType property value. The webPartType property
     * @return string|null
    */
    public function getWebPartType(): ?string {
        $val = $this->getBackingStore()->get('webPartType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webPartType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('containerTextWebPartId', $this->getContainerTextWebPartId());
        $writer->writeObjectValue('data', $this->getData());
        $writer->writeStringValue('webPartType', $this->getWebPartType());
    }

    /**
     * Sets the containerTextWebPartId property value. The containerTextWebPartId property
     * @param string|null $value Value to set for the containerTextWebPartId property.
    */
    public function setContainerTextWebPartId(?string $value): void {
        $this->getBackingStore()->set('containerTextWebPartId', $value);
    }

    /**
     * Sets the data property value. The data property
     * @param WebPartData|null $value Value to set for the data property.
    */
    public function setData(?WebPartData $value): void {
        $this->getBackingStore()->set('data', $value);
    }

    /**
     * Sets the webPartType property value. The webPartType property
     * @param string|null $value Value to set for the webPartType property.
    */
    public function setWebPartType(?string $value): void {
        $this->getBackingStore()->set('webPartType', $value);
    }

}
