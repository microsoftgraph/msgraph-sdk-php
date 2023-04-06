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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'internetExplorerMode' => fn(ParseNode $n) => $o->setInternetExplorerMode($n->getObjectValue([InternetExplorerMode::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the internetExplorerMode property value. The internetExplorerMode property
     * @return InternetExplorerMode|null
    */
    public function getInternetExplorerMode(): ?InternetExplorerMode {
        return $this->getBackingStore()->get('internetExplorerMode');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('internetExplorerMode', $this->getInternetExplorerMode());
    }

    /**
     * Sets the internetExplorerMode property value. The internetExplorerMode property
     * @param InternetExplorerMode|null $value Value to set for the internetExplorerMode property.
    */
    public function setInternetExplorerMode(?InternetExplorerMode $value): void {
        $this->getBackingStore()->set('internetExplorerMode', $value);
    }

}
