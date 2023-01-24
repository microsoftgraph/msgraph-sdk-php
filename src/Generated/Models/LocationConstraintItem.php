<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LocationConstraintItem extends Location implements Parsable 
{
    /**
     * Instantiates a new LocationConstraintItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.locationConstraintItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LocationConstraintItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LocationConstraintItem {
        return new LocationConstraintItem();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resolveAvailability' => fn(ParseNode $n) => $o->setResolveAvailability($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the resolveAvailability property value. If set to true and the specified resource is busy, findMeetingTimes looks for another resource that is free. If set to false and the specified resource is busy, findMeetingTimes returns the resource best ranked in the user's cache without checking if it's free. Default is true.
     * @return bool|null
    */
    public function getResolveAvailability(): ?bool {
        return $this->getBackingStore()->get('resolveAvailability');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('resolveAvailability', $this->getResolveAvailability());
    }

    /**
     * Sets the resolveAvailability property value. If set to true and the specified resource is busy, findMeetingTimes looks for another resource that is free. If set to false and the specified resource is busy, findMeetingTimes returns the resource best ranked in the user's cache without checking if it's free. Default is true.
     * @param bool|null $value Value to set for the resolveAvailability property.
    */
    public function setResolveAvailability(?bool $value): void {
        $this->getBackingStore()->set('resolveAvailability', $value);
    }

}
