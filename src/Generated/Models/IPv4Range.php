<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IPv4Range extends IpRange implements Parsable 
{
    /**
     * Instantiates a new IPv4Range and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iPv4Range');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IPv4Range
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IPv4Range {
        return new IPv4Range();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lowerAddress' => fn(ParseNode $n) => $o->setLowerAddress($n->getStringValue()),
            'upperAddress' => fn(ParseNode $n) => $o->setUpperAddress($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lowerAddress property value. Lower address.
     * @return string|null
    */
    public function getLowerAddress(): ?string {
        return $this->getBackingStore()->get('lowerAddress');
    }

    /**
     * Gets the upperAddress property value. Upper address.
     * @return string|null
    */
    public function getUpperAddress(): ?string {
        return $this->getBackingStore()->get('upperAddress');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('lowerAddress', $this->getLowerAddress());
        $writer->writeStringValue('upperAddress', $this->getUpperAddress());
    }

    /**
     * Sets the lowerAddress property value. Lower address.
     * @param string|null $value Value to set for the lowerAddress property.
    */
    public function setLowerAddress(?string $value): void {
        $this->getBackingStore()->set('lowerAddress', $value);
    }

    /**
     * Sets the upperAddress property value. Upper address.
     * @param string|null $value Value to set for the upperAddress property.
    */
    public function setUpperAddress(?string $value): void {
        $this->getBackingStore()->set('upperAddress', $value);
    }

}
