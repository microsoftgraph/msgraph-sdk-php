<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SimulationAutomationRun extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $endDateTime The endDateTime property
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var string|null $simulationId The simulationId property
    */
    private ?string $simulationId = null;
    
    /**
     * @var DateTime|null $startDateTime The startDateTime property
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var SimulationAutomationRunStatus|null $status The status property
    */
    private ?SimulationAutomationRunStatus $status = null;
    
    /**
     * Instantiates a new simulationAutomationRun and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.simulationAutomationRun');
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
     * Gets the endDateTime property value. The endDateTime property
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'simulationId' => function (ParseNode $n) use ($o) { $o->setSimulationId($n->getStringValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(SimulationAutomationRunStatus::class)); },
        ]);
    }

    /**
     * Gets the simulationId property value. The simulationId property
     * @return string|null
    */
    public function getSimulationId(): ?string {
        return $this->simulationId;
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the status property value. The status property
     * @return SimulationAutomationRunStatus|null
    */
    public function getStatus(): ?SimulationAutomationRunStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeStringValue('simulationId', $this->simulationId);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the endDateTime property value. The endDateTime property
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the simulationId property value. The simulationId property
     *  @param string|null $value Value to set for the simulationId property.
    */
    public function setSimulationId(?string $value ): void {
        $this->simulationId = $value;
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param SimulationAutomationRunStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SimulationAutomationRunStatus $value ): void {
        $this->status = $value;
    }

}
