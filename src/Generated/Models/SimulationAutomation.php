<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SimulationAutomation extends Entity implements Parsable 
{
    /**
     * @var EmailIdentity|null $createdBy Identity of the user who created the attack simulation automation.
    */
    private ?EmailIdentity $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime Date and time when the attack simulation automation was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Description of the attack simulation automation.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Display name of the attack simulation automation. Supports $filter and $orderby.
    */
    private ?string $displayName = null;
    
    /**
     * @var EmailIdentity|null $lastModifiedBy Identity of the user who most recently modified the attack simulation automation.
    */
    private ?EmailIdentity $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Date and time when the attack simulation automation was most recently modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DateTime|null $lastRunDateTime Date and time of the latest run of the attack simulation automation.
    */
    private ?DateTime $lastRunDateTime = null;
    
    /**
     * @var DateTime|null $nextRunDateTime Date and time of the upcoming run of the attack simulation automation.
    */
    private ?DateTime $nextRunDateTime = null;
    
    /**
     * @var array<SimulationAutomationRun>|null $runs A collection of simulation automation runs.
    */
    private ?array $runs = null;
    
    /**
     * @var SimulationAutomationStatus|null $status Status of the attack simulation automation. Supports $filter and $orderby. The possible values are: unknown, draft, notRunning, running, completed, unknownFutureValue.
    */
    private ?SimulationAutomationStatus $status = null;
    
    /**
     * Instantiates a new simulationAutomation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.simulationAutomation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SimulationAutomation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SimulationAutomation {
        return new SimulationAutomation();
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the attack simulation automation.
     * @return EmailIdentity|null
    */
    public function getCreatedBy(): ?EmailIdentity {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. Date and time when the attack simulation automation was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Description of the attack simulation automation.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Display name of the attack simulation automation. Supports $filter and $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'lastRunDateTime' => fn(ParseNode $n) => $o->setLastRunDateTime($n->getDateTimeValue()),
            'nextRunDateTime' => fn(ParseNode $n) => $o->setNextRunDateTime($n->getDateTimeValue()),
            'runs' => fn(ParseNode $n) => $o->setRuns($n->getCollectionOfObjectValues([SimulationAutomationRun::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SimulationAutomationStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who most recently modified the attack simulation automation.
     * @return EmailIdentity|null
    */
    public function getLastModifiedBy(): ?EmailIdentity {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time when the attack simulation automation was most recently modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the lastRunDateTime property value. Date and time of the latest run of the attack simulation automation.
     * @return DateTime|null
    */
    public function getLastRunDateTime(): ?DateTime {
        return $this->lastRunDateTime;
    }

    /**
     * Gets the nextRunDateTime property value. Date and time of the upcoming run of the attack simulation automation.
     * @return DateTime|null
    */
    public function getNextRunDateTime(): ?DateTime {
        return $this->nextRunDateTime;
    }

    /**
     * Gets the runs property value. A collection of simulation automation runs.
     * @return array<SimulationAutomationRun>|null
    */
    public function getRuns(): ?array {
        return $this->runs;
    }

    /**
     * Gets the status property value. Status of the attack simulation automation. Supports $filter and $orderby. The possible values are: unknown, draft, notRunning, running, completed, unknownFutureValue.
     * @return SimulationAutomationStatus|null
    */
    public function getStatus(): ?SimulationAutomationStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeDateTimeValue('lastRunDateTime', $this->lastRunDateTime);
        $writer->writeDateTimeValue('nextRunDateTime', $this->nextRunDateTime);
        $writer->writeCollectionOfObjectValues('runs', $this->runs);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the attack simulation automation.
     *  @param EmailIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?EmailIdentity $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. Date and time when the attack simulation automation was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Description of the attack simulation automation.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Display name of the attack simulation automation. Supports $filter and $orderby.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who most recently modified the attack simulation automation.
     *  @param EmailIdentity|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?EmailIdentity $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time when the attack simulation automation was most recently modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the lastRunDateTime property value. Date and time of the latest run of the attack simulation automation.
     *  @param DateTime|null $value Value to set for the lastRunDateTime property.
    */
    public function setLastRunDateTime(?DateTime $value ): void {
        $this->lastRunDateTime = $value;
    }

    /**
     * Sets the nextRunDateTime property value. Date and time of the upcoming run of the attack simulation automation.
     *  @param DateTime|null $value Value to set for the nextRunDateTime property.
    */
    public function setNextRunDateTime(?DateTime $value ): void {
        $this->nextRunDateTime = $value;
    }

    /**
     * Sets the runs property value. A collection of simulation automation runs.
     *  @param array<SimulationAutomationRun>|null $value Value to set for the runs property.
    */
    public function setRuns(?array $value ): void {
        $this->runs = $value;
    }

    /**
     * Sets the status property value. Status of the attack simulation automation. Supports $filter and $orderby. The possible values are: unknown, draft, notRunning, running, completed, unknownFutureValue.
     *  @param SimulationAutomationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SimulationAutomationStatus $value ): void {
        $this->status = $value;
    }

}
