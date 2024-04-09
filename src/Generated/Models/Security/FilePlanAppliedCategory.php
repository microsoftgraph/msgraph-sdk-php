<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FilePlanAppliedCategory extends FilePlanDescriptorBase implements Parsable 
{
    /**
     * Instantiates a new FilePlanAppliedCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FilePlanAppliedCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FilePlanAppliedCategory {
        return new FilePlanAppliedCategory();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'subcategory' => fn(ParseNode $n) => $o->setSubcategory($n->getObjectValue([FilePlanSubcategory::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the subcategory property value. The subcategory property
     * @return FilePlanSubcategory|null
    */
    public function getSubcategory(): ?FilePlanSubcategory {
        $val = $this->getBackingStore()->get('subcategory');
        if (is_null($val) || $val instanceof FilePlanSubcategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subcategory'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('subcategory', $this->getSubcategory());
    }

    /**
     * Sets the subcategory property value. The subcategory property
     * @param FilePlanSubcategory|null $value Value to set for the subcategory property.
    */
    public function setSubcategory(?FilePlanSubcategory $value): void {
        $this->getBackingStore()->set('subcategory', $value);
    }

}
