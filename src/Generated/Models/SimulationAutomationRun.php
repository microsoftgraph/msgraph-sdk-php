<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SimulationAutomationRun extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new simulationAutomationRun and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SimulationAutomationRun
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SimulationAutomationRun {
        return new SimulationAutomationRun();
    }

    /**
     * Gets the endDateTime property value. Date and time when the run ends in an attack simulation automation.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'simulationId' => fn(ParseNode $n) => $o->setSimulationId($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SimulationAutomationRunStatus::class)),
        ]);
    }

    /**
     * Gets the simulationId property value. Unique identifier for the attack simulation campaign initiated in the attack simulation automation run.
     * @return string|null
    */
    public function getSimulationId(): ?string {
        $val = $this->getBackingStore()->get('simulationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simulationId'");
    }

    /**
     * Gets the startDateTime property value. Date and time when the run starts in an attack simulation automation.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the status property value. Status of the attack simulation automation run. The possible values are: unknown, running, succeeded, failed, skipped, unknownFutureValue.
     * @return SimulationAutomationRunStatus|null
    */
    public function getStatus(): ?SimulationAutomationRunStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SimulationAutomationRunStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('simulationId', $this->getSimulationId());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the endDateTime property value. Date and time when the run ends in an attack simulation automation.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the simulationId property value. Unique identifier for the attack simulation campaign initiated in the attack simulation automation run.
     * @param string|null $value Value to set for the simulationId property.
    */
    public function setSimulationId(?string $value): void {
        $this->getBackingStore()->set('simulationId', $value);
    }

    /**
     * Sets the startDateTime property value. Date and time when the run starts in an attack simulation automation.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. Status of the attack simulation automation run. The possible values are: unknown, running, succeeded, failed, skipped, unknownFutureValue.
     * @param SimulationAutomationRunStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SimulationAutomationRunStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
