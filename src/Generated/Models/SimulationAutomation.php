<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SimulationAutomation extends Entity implements Parsable 
{
    /**
     * @var EmailIdentity|null $createdBy The createdBy property
    */
    private ?EmailIdentity $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var EmailIdentity|null $lastModifiedBy The lastModifiedBy property
    */
    private ?EmailIdentity $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DateTime|null $lastRunDateTime The lastRunDateTime property
    */
    private ?DateTime $lastRunDateTime = null;
    
    /**
     * @var DateTime|null $nextRunDateTime The nextRunDateTime property
    */
    private ?DateTime $nextRunDateTime = null;
    
    /**
     * @var array<SimulationAutomationRun>|null $runs The runs property
    */
    private ?array $runs = null;
    
    /**
     * @var SimulationAutomationStatus|null $status The status property
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
     * Gets the createdBy property value. The createdBy property
     * @return EmailIdentity|null
    */
    public function getCreatedBy(): ?EmailIdentity {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The displayName property
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
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(EmailIdentity::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(EmailIdentity::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'lastRunDateTime' => function (ParseNode $n) use ($o) { $o->setLastRunDateTime($n->getDateTimeValue()); },
            'nextRunDateTime' => function (ParseNode $n) use ($o) { $o->setNextRunDateTime($n->getDateTimeValue()); },
            'runs' => function (ParseNode $n) use ($o) { $o->setRuns($n->getCollectionOfObjectValues(array(SimulationAutomationRun::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(SimulationAutomationStatus::class)); },
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return EmailIdentity|null
    */
    public function getLastModifiedBy(): ?EmailIdentity {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the lastRunDateTime property value. The lastRunDateTime property
     * @return DateTime|null
    */
    public function getLastRunDateTime(): ?DateTime {
        return $this->lastRunDateTime;
    }

    /**
     * Gets the nextRunDateTime property value. The nextRunDateTime property
     * @return DateTime|null
    */
    public function getNextRunDateTime(): ?DateTime {
        return $this->nextRunDateTime;
    }

    /**
     * Gets the runs property value. The runs property
     * @return array<SimulationAutomationRun>|null
    */
    public function getRuns(): ?array {
        return $this->runs;
    }

    /**
     * Gets the status property value. The status property
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
     * Sets the createdBy property value. The createdBy property
     *  @param EmailIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?EmailIdentity $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     *  @param EmailIdentity|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?EmailIdentity $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the lastRunDateTime property value. The lastRunDateTime property
     *  @param DateTime|null $value Value to set for the lastRunDateTime property.
    */
    public function setLastRunDateTime(?DateTime $value ): void {
        $this->lastRunDateTime = $value;
    }

    /**
     * Sets the nextRunDateTime property value. The nextRunDateTime property
     *  @param DateTime|null $value Value to set for the nextRunDateTime property.
    */
    public function setNextRunDateTime(?DateTime $value ): void {
        $this->nextRunDateTime = $value;
    }

    /**
     * Sets the runs property value. The runs property
     *  @param array<SimulationAutomationRun>|null $value Value to set for the runs property.
    */
    public function setRuns(?array $value ): void {
        $this->runs = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param SimulationAutomationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SimulationAutomationStatus $value ): void {
        $this->status = $value;
    }

}
