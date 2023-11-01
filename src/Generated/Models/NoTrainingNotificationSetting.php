<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NoTrainingNotificationSetting extends EndUserNotificationSetting implements Parsable 
{
    /**
     * Instantiates a new noTrainingNotificationSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.noTrainingNotificationSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NoTrainingNotificationSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NoTrainingNotificationSetting {
        return new NoTrainingNotificationSetting();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'simulationNotification' => fn(ParseNode $n) => $o->setSimulationNotification($n->getObjectValue([SimulationNotification::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the simulationNotification property value. The notification for the user who is part of the simulation.
     * @return SimulationNotification|null
    */
    public function getSimulationNotification(): ?SimulationNotification {
        $val = $this->getBackingStore()->get('simulationNotification');
        if (is_null($val) || $val instanceof SimulationNotification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simulationNotification'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('simulationNotification', $this->getSimulationNotification());
    }

    /**
     * Sets the simulationNotification property value. The notification for the user who is part of the simulation.
     * @param SimulationNotification|null $value Value to set for the simulationNotification property.
    */
    public function setSimulationNotification(?SimulationNotification $value): void {
        $this->getBackingStore()->set('simulationNotification', $value);
    }

}
