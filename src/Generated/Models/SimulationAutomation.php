<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SimulationAutomation extends Entity implements Parsable 
{
    /**
     * Instantiates a new simulationAutomation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. Date and time when the attack simulation automation was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. Description of the attack simulation automation.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Display name of the attack simulation automation. Supports $filter and $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
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
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time when the attack simulation automation was most recently modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the lastRunDateTime property value. Date and time of the latest run of the attack simulation automation.
     * @return DateTime|null
    */
    public function getLastRunDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastRunDateTime');
    }

    /**
     * Gets the nextRunDateTime property value. Date and time of the upcoming run of the attack simulation automation.
     * @return DateTime|null
    */
    public function getNextRunDateTime(): ?DateTime {
        return $this->getBackingStore()->get('nextRunDateTime');
    }

    /**
     * Gets the runs property value. A collection of simulation automation runs.
     * @return array<SimulationAutomationRun>|null
    */
    public function getRuns(): ?array {
        return $this->getBackingStore()->get('runs');
    }

    /**
     * Gets the status property value. Status of the attack simulation automation. Supports $filter and $orderby. The possible values are: unknown, draft, notRunning, running, completed, unknownFutureValue.
     * @return SimulationAutomationStatus|null
    */
    public function getStatus(): ?SimulationAutomationStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeDateTimeValue('lastRunDateTime', $this->getLastRunDateTime());
        $writer->writeDateTimeValue('nextRunDateTime', $this->getNextRunDateTime());
        $writer->writeCollectionOfObjectValues('runs', $this->getRuns());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the attack simulation automation.
     *  @param EmailIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time when the attack simulation automation was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description of the attack simulation automation.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name of the attack simulation automation. Supports $filter and $orderby.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who most recently modified the attack simulation automation.
     *  @param EmailIdentity|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time when the attack simulation automation was most recently modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lastRunDateTime property value. Date and time of the latest run of the attack simulation automation.
     *  @param DateTime|null $value Value to set for the lastRunDateTime property.
    */
    public function setLastRunDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRunDateTime', $value);
    }

    /**
     * Sets the nextRunDateTime property value. Date and time of the upcoming run of the attack simulation automation.
     *  @param DateTime|null $value Value to set for the nextRunDateTime property.
    */
    public function setNextRunDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('nextRunDateTime', $value);
    }

    /**
     * Sets the runs property value. A collection of simulation automation runs.
     *  @param array<SimulationAutomationRun>|null $value Value to set for the runs property.
    */
    public function setRuns(?array $value): void {
        $this->getBackingStore()->set('runs', $value);
    }

    /**
     * Sets the status property value. Status of the attack simulation automation. Supports $filter and $orderby. The possible values are: unknown, draft, notRunning, running, completed, unknownFutureValue.
     *  @param SimulationAutomationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SimulationAutomationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
