<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PositiveReinforcementNotification extends BaseEndUserNotification implements Parsable 
{
    /**
     * Instantiates a new PositiveReinforcementNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.positiveReinforcementNotification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PositiveReinforcementNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PositiveReinforcementNotification {
        return new PositiveReinforcementNotification();
    }

    /**
     * Gets the deliveryPreference property value. Delivery preference. Possible values are: unknown, deliverImmedietly, deliverAfterCampaignEnd, unknownFutureValue.
     * @return NotificationDeliveryPreference|null
    */
    public function getDeliveryPreference(): ?NotificationDeliveryPreference {
        $val = $this->getBackingStore()->get('deliveryPreference');
        if (is_null($val) || $val instanceof NotificationDeliveryPreference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deliveryPreference'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deliveryPreference' => fn(ParseNode $n) => $o->setDeliveryPreference($n->getEnumValue(NotificationDeliveryPreference::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('deliveryPreference', $this->getDeliveryPreference());
    }

    /**
     * Sets the deliveryPreference property value. Delivery preference. Possible values are: unknown, deliverImmedietly, deliverAfterCampaignEnd, unknownFutureValue.
     * @param NotificationDeliveryPreference|null $value Value to set for the deliveryPreference property.
    */
    public function setDeliveryPreference(?NotificationDeliveryPreference $value): void {
        $this->getBackingStore()->set('deliveryPreference', $value);
    }

}
