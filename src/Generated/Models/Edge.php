<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Edge extends Entity implements Parsable 
{
    /**
     * Instantiates a new edge and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Edge
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Edge {
        return new Edge();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'internetExplorerMode' => fn(ParseNode $n) => $o->setInternetExplorerMode($n->getObjectValue([InternetExplorerMode::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the internetExplorerMode property value. A container for Internet Explorer mode resources.
     * @return InternetExplorerMode|null
    */
    public function getInternetExplorerMode(): ?InternetExplorerMode {
        $val = $this->getBackingStore()->get('internetExplorerMode');
        if (is_null($val) || $val instanceof InternetExplorerMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internetExplorerMode'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('internetExplorerMode', $this->getInternetExplorerMode());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the internetExplorerMode property value. A container for Internet Explorer mode resources.
     * @param InternetExplorerMode|null $value Value to set for the internetExplorerMode property.
    */
    public function setInternetExplorerMode(?InternetExplorerMode $value): void {
        $this->getBackingStore()->set('internetExplorerMode', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
