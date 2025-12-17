<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Floor extends Place implements Parsable 
{
    /**
     * Instantiates a new Floor and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.floor');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Floor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Floor {
        return new Floor();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'sortOrder' => fn(ParseNode $n) => $o->setSortOrder($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the sortOrder property value. Specifies the sort order of the floor. For example, a floor might be named 'Lobby' with a sort order of 0 to show this floor first in ordered lists.
     * @return int|null
    */
    public function getSortOrder(): ?int {
        $val = $this->getBackingStore()->get('sortOrder');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sortOrder'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('sortOrder', $this->getSortOrder());
    }

    /**
     * Sets the sortOrder property value. Specifies the sort order of the floor. For example, a floor might be named 'Lobby' with a sort order of 0 to show this floor first in ordered lists.
     * @param int|null $value Value to set for the sortOrder property.
    */
    public function setSortOrder(?int $value): void {
        $this->getBackingStore()->set('sortOrder', $value);
    }

}
