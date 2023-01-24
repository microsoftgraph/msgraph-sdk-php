<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OpenShiftItem extends ShiftItem implements Parsable 
{
    /**
     * Instantiates a new OpenShiftItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.openShiftItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OpenShiftItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OpenShiftItem {
        return new OpenShiftItem();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'openSlotCount' => fn(ParseNode $n) => $o->setOpenSlotCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the openSlotCount property value. Count of the number of slots for the given open shift.
     * @return int|null
    */
    public function getOpenSlotCount(): ?int {
        return $this->getBackingStore()->get('openSlotCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('openSlotCount', $this->getOpenSlotCount());
    }

    /**
     * Sets the openSlotCount property value. Count of the number of slots for the given open shift.
     * @param int|null $value Value to set for the openSlotCount property.
    */
    public function setOpenSlotCount(?int $value): void {
        $this->getBackingStore()->set('openSlotCount', $value);
    }

}
