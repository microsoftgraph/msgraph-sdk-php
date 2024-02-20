<?php

namespace Microsoft\Graph\Generated\Models\Partners\Billing;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExportSuccessOperation extends Operation implements Parsable 
{
    /**
     * Instantiates a new ExportSuccessOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExportSuccessOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExportSuccessOperation {
        return new ExportSuccessOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resourceLocation' => fn(ParseNode $n) => $o->setResourceLocation($n->getObjectValue([Manifest::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resourceLocation property value. The resourceLocation property
     * @return Manifest|null
    */
    public function getResourceLocation(): ?Manifest {
        $val = $this->getBackingStore()->get('resourceLocation');
        if (is_null($val) || $val instanceof Manifest) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceLocation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('resourceLocation', $this->getResourceLocation());
    }

    /**
     * Sets the resourceLocation property value. The resourceLocation property
     * @param Manifest|null $value Value to set for the resourceLocation property.
    */
    public function setResourceLocation(?Manifest $value): void {
        $this->getBackingStore()->set('resourceLocation', $value);
    }

}
