<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProvisioningSystem extends Identity implements Parsable 
{
    /**
     * Instantiates a new ProvisioningSystem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.provisioningSystem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvisioningSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvisioningSystem {
        return new ProvisioningSystem();
    }

    /**
     * Gets the details property value. Details of the system.
     * @return DetailsInfo|null
    */
    public function getDetails(): ?DetailsInfo {
        return $this->getBackingStore()->get('details');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'details' => fn(ParseNode $n) => $o->setDetails($n->getObjectValue([DetailsInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('details', $this->getDetails());
    }

    /**
     * Sets the details property value. Details of the system.
     *  @param DetailsInfo|null $value Value to set for the details property.
    */
    public function setDetails(?DetailsInfo $value): void {
        $this->getBackingStore()->set('details', $value);
    }

}
