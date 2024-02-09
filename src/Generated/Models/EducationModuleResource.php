<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationModuleResource extends Entity implements Parsable 
{
    /**
     * Instantiates a new EducationModuleResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationModuleResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationModuleResource {
        return new EducationModuleResource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([EducationResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resource property value. The resource property
     * @return EducationResource|null
    */
    public function getResource(): ?EducationResource {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof EducationResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('resource', $this->getResource());
    }

    /**
     * Sets the resource property value. The resource property
     * @param EducationResource|null $value Value to set for the resource property.
    */
    public function setResource(?EducationResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

}
