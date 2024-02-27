<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListItemVersion extends BaseItemVersion implements Parsable 
{
    /**
     * Instantiates a new ListItemVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.listItemVersion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListItemVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListItemVersion {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.documentSetVersion': return new DocumentSetVersion();
            }
        }
        return new ListItemVersion();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fields' => fn(ParseNode $n) => $o->setFields($n->getObjectValue([FieldValueSet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the fields property value. A collection of the fields and values for this version of the list item.
     * @return FieldValueSet|null
    */
    public function getFields(): ?FieldValueSet {
        $val = $this->getBackingStore()->get('fields');
        if (is_null($val) || $val instanceof FieldValueSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fields'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('fields', $this->getFields());
    }

    /**
     * Sets the fields property value. A collection of the fields and values for this version of the list item.
     * @param FieldValueSet|null $value Value to set for the fields property.
    */
    public function setFields(?FieldValueSet $value): void {
        $this->getBackingStore()->set('fields', $value);
    }

}
