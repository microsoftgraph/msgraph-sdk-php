<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListItemVersion extends BaseItemVersion implements Parsable 
{
    /**
     * @var FieldValueSet|null $fields A collection of the fields and values for this version of the list item.
    */
    private ?FieldValueSet $fields = null;
    
    /**
     * Instantiates a new ListItemVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListItemVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListItemVersion {
        return new ListItemVersion();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fields' => function (ParseNode $n) use ($o) { $o->setFields($n->getObjectValue(array(FieldValueSet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the fields property value. A collection of the fields and values for this version of the list item.
     * @return FieldValueSet|null
    */
    public function getFields(): ?FieldValueSet {
        return $this->fields;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('fields', $this->fields);
    }

    /**
     * Sets the fields property value. A collection of the fields and values for this version of the list item.
     *  @param FieldValueSet|null $value Value to set for the fields property.
    */
    public function setFields(?FieldValueSet $value ): void {
        $this->fields = $value;
    }

}
