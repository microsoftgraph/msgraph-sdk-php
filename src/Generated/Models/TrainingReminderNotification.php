<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrainingReminderNotification extends BaseEndUserNotification implements Parsable 
{
    /**
     * Instantiates a new TrainingReminderNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.trainingReminderNotification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrainingReminderNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrainingReminderNotification {
        return new TrainingReminderNotification();
    }

    /**
     * Gets the deliveryFrequency property value. Configurable frequency for the reminder email introduced during simulation creation. Possible values are: unknown, weekly, biWeekly, unknownFutureValue.
     * @return NotificationDeliveryFrequency|null
    */
    public function getDeliveryFrequency(): ?NotificationDeliveryFrequency {
        $val = $this->getBackingStore()->get('deliveryFrequency');
        if (is_null($val) || $val instanceof NotificationDeliveryFrequency) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deliveryFrequency'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deliveryFrequency' => fn(ParseNode $n) => $o->setDeliveryFrequency($n->getEnumValue(NotificationDeliveryFrequency::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('deliveryFrequency', $this->getDeliveryFrequency());
    }

    /**
     * Sets the deliveryFrequency property value. Configurable frequency for the reminder email introduced during simulation creation. Possible values are: unknown, weekly, biWeekly, unknownFutureValue.
     * @param NotificationDeliveryFrequency|null $value Value to set for the deliveryFrequency property.
    */
    public function setDeliveryFrequency(?NotificationDeliveryFrequency $value): void {
        $this->getBackingStore()->set('deliveryFrequency', $value);
    }

}
