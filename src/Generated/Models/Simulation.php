<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Simulation extends Entity implements Parsable 
{
    /**
     * @var SimulationAttackTechnique|null $attackTechnique The attackTechnique property
    */
    private ?SimulationAttackTechnique $attackTechnique = null;
    
    /**
     * @var SimulationAttackType|null $attackType The attackType property
    */
    private ?SimulationAttackType $attackType = null;
    
    /**
     * @var string|null $automationId The automationId property
    */
    private ?string $automationId = null;
    
    /**
     * @var DateTime|null $completionDateTime The completionDateTime property
    */
    private ?DateTime $completionDateTime = null;
    
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
     * @var bool|null $isAutomated The isAutomated property
    */
    private ?bool $isAutomated = null;
    
    /**
     * @var EmailIdentity|null $lastModifiedBy The lastModifiedBy property
    */
    private ?EmailIdentity $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DateTime|null $launchDateTime The launchDateTime property
    */
    private ?DateTime $launchDateTime = null;
    
    /**
     * @var PayloadDeliveryPlatform|null $payloadDeliveryPlatform The payloadDeliveryPlatform property
    */
    private ?PayloadDeliveryPlatform $payloadDeliveryPlatform = null;
    
    /**
     * @var SimulationReport|null $report The report property
    */
    private ?SimulationReport $report = null;
    
    /**
     * @var SimulationStatus|null $status The status property
    */
    private ?SimulationStatus $status = null;
    
    /**
     * Instantiates a new simulation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.simulation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Simulation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Simulation {
        return new Simulation();
    }

    /**
     * Gets the attackTechnique property value. The attackTechnique property
     * @return SimulationAttackTechnique|null
    */
    public function getAttackTechnique(): ?SimulationAttackTechnique {
        return $this->attackTechnique;
    }

    /**
     * Gets the attackType property value. The attackType property
     * @return SimulationAttackType|null
    */
    public function getAttackType(): ?SimulationAttackType {
        return $this->attackType;
    }

    /**
     * Gets the automationId property value. The automationId property
     * @return string|null
    */
    public function getAutomationId(): ?string {
        return $this->automationId;
    }

    /**
     * Gets the completionDateTime property value. The completionDateTime property
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        return $this->completionDateTime;
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
            'attackTechnique' => function (ParseNode $n) use ($o) { $o->setAttackTechnique($n->getEnumValue(SimulationAttackTechnique::class)); },
            'attackType' => function (ParseNode $n) use ($o) { $o->setAttackType($n->getEnumValue(SimulationAttackType::class)); },
            'automationId' => function (ParseNode $n) use ($o) { $o->setAutomationId($n->getStringValue()); },
            'completionDateTime' => function (ParseNode $n) use ($o) { $o->setCompletionDateTime($n->getDateTimeValue()); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(EmailIdentity::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isAutomated' => function (ParseNode $n) use ($o) { $o->setIsAutomated($n->getBooleanValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(EmailIdentity::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'launchDateTime' => function (ParseNode $n) use ($o) { $o->setLaunchDateTime($n->getDateTimeValue()); },
            'payloadDeliveryPlatform' => function (ParseNode $n) use ($o) { $o->setPayloadDeliveryPlatform($n->getEnumValue(PayloadDeliveryPlatform::class)); },
            'report' => function (ParseNode $n) use ($o) { $o->setReport($n->getObjectValue(array(SimulationReport::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(SimulationStatus::class)); },
        ]);
    }

    /**
     * Gets the isAutomated property value. The isAutomated property
     * @return bool|null
    */
    public function getIsAutomated(): ?bool {
        return $this->isAutomated;
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
     * Gets the launchDateTime property value. The launchDateTime property
     * @return DateTime|null
    */
    public function getLaunchDateTime(): ?DateTime {
        return $this->launchDateTime;
    }

    /**
     * Gets the payloadDeliveryPlatform property value. The payloadDeliveryPlatform property
     * @return PayloadDeliveryPlatform|null
    */
    public function getPayloadDeliveryPlatform(): ?PayloadDeliveryPlatform {
        return $this->payloadDeliveryPlatform;
    }

    /**
     * Gets the report property value. The report property
     * @return SimulationReport|null
    */
    public function getReport(): ?SimulationReport {
        return $this->report;
    }

    /**
     * Gets the status property value. The status property
     * @return SimulationStatus|null
    */
    public function getStatus(): ?SimulationStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('attackTechnique', $this->attackTechnique);
        $writer->writeEnumValue('attackType', $this->attackType);
        $writer->writeStringValue('automationId', $this->automationId);
        $writer->writeDateTimeValue('completionDateTime', $this->completionDateTime);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isAutomated', $this->isAutomated);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeDateTimeValue('launchDateTime', $this->launchDateTime);
        $writer->writeEnumValue('payloadDeliveryPlatform', $this->payloadDeliveryPlatform);
        $writer->writeObjectValue('report', $this->report);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the attackTechnique property value. The attackTechnique property
     *  @param SimulationAttackTechnique|null $value Value to set for the attackTechnique property.
    */
    public function setAttackTechnique(?SimulationAttackTechnique $value ): void {
        $this->attackTechnique = $value;
    }

    /**
     * Sets the attackType property value. The attackType property
     *  @param SimulationAttackType|null $value Value to set for the attackType property.
    */
    public function setAttackType(?SimulationAttackType $value ): void {
        $this->attackType = $value;
    }

    /**
     * Sets the automationId property value. The automationId property
     *  @param string|null $value Value to set for the automationId property.
    */
    public function setAutomationId(?string $value ): void {
        $this->automationId = $value;
    }

    /**
     * Sets the completionDateTime property value. The completionDateTime property
     *  @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value ): void {
        $this->completionDateTime = $value;
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
     * Sets the isAutomated property value. The isAutomated property
     *  @param bool|null $value Value to set for the isAutomated property.
    */
    public function setIsAutomated(?bool $value ): void {
        $this->isAutomated = $value;
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
     * Sets the launchDateTime property value. The launchDateTime property
     *  @param DateTime|null $value Value to set for the launchDateTime property.
    */
    public function setLaunchDateTime(?DateTime $value ): void {
        $this->launchDateTime = $value;
    }

    /**
     * Sets the payloadDeliveryPlatform property value. The payloadDeliveryPlatform property
     *  @param PayloadDeliveryPlatform|null $value Value to set for the payloadDeliveryPlatform property.
    */
    public function setPayloadDeliveryPlatform(?PayloadDeliveryPlatform $value ): void {
        $this->payloadDeliveryPlatform = $value;
    }

    /**
     * Sets the report property value. The report property
     *  @param SimulationReport|null $value Value to set for the report property.
    */
    public function setReport(?SimulationReport $value ): void {
        $this->report = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param SimulationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SimulationStatus $value ): void {
        $this->status = $value;
    }

}
