<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SimulationNotification extends BaseEndUserNotification implements Parsable 
{
    /**
     * Instantiates a new simulationNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.simulationNotification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SimulationNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SimulationNotification {
        return new SimulationNotification();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'targettedUserType' => fn(ParseNode $n) => $o->setTargettedUserType($n->getEnumValue(SimulationNotification_targettedUserType::class)),
        ]);
    }

    /**
     * Gets the targettedUserType property value. Target user type. Possible values are: unknown, clicked, compromised, allUsers, unknownFutureValue.
     * @return SimulationNotification_targettedUserType|null
    */
    public function getTargettedUserType(): ?SimulationNotification_targettedUserType {
        $val = $this->getBackingStore()->get('targettedUserType');
        if (is_null($val) || $val instanceof SimulationNotification_targettedUserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targettedUserType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('targettedUserType', $this->getTargettedUserType());
    }

    /**
     * Sets the targettedUserType property value. Target user type. Possible values are: unknown, clicked, compromised, allUsers, unknownFutureValue.
     * @param SimulationNotification_targettedUserType|null $value Value to set for the targettedUserType property.
    */
    public function setTargettedUserType(?SimulationNotification_targettedUserType $value): void {
        $this->getBackingStore()->set('targettedUserType', $value);
    }

}
