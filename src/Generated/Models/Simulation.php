<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Simulation extends Entity implements Parsable 
{
    /**
     * @var SimulationAttackTechnique|null $attackTechnique The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue. For more information on the types of social engineering attack techniques, see simulations.
    */
    private ?SimulationAttackTechnique $attackTechnique = null;
    
    /**
     * @var SimulationAttackType|null $attackType Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
    */
    private ?SimulationAttackType $attackType = null;
    
    /**
     * @var string|null $automationId Unique identifier for the attack simulation automation.
    */
    private ?string $automationId = null;
    
    /**
     * @var DateTime|null $completionDateTime Date and time of completion of the attack simulation and training campaign. Supports $filter and $orderby.
    */
    private ?DateTime $completionDateTime = null;
    
    /**
     * @var EmailIdentity|null $createdBy Identity of the user who created the attack simulation and training campaign.
    */
    private ?EmailIdentity $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime Date and time of creation of the attack simulation and training campaign.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Description of the attack simulation and training campaign.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Display name of the attack simulation and training campaign. Supports $filter and $orderby.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isAutomated Flag that represents if the attack simulation and training campaign was created from a simulation automation flow. Supports $filter and $orderby.
    */
    private ?bool $isAutomated = null;
    
    /**
     * @var EmailIdentity|null $lastModifiedBy Identity of the user who most recently modified the attack simulation and training campaign.
    */
    private ?EmailIdentity $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Date and time of the most recent modification of the attack simulation and training campaign.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DateTime|null $launchDateTime Date and time of the launch/start of the attack simulation and training campaign. Supports $filter and $orderby.
    */
    private ?DateTime $launchDateTime = null;
    
    /**
     * @var PayloadDeliveryPlatform|null $payloadDeliveryPlatform Method of delivery of the phishing payload used in the attack simulation and training campaign. Possible values are: unknown, sms, email, teams, unknownFutureValue.
    */
    private ?PayloadDeliveryPlatform $payloadDeliveryPlatform = null;
    
    /**
     * @var SimulationReport|null $report Report of the attack simulation and training campaign.
    */
    private ?SimulationReport $report = null;
    
    /**
     * @var SimulationStatus|null $status Status of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, draft, running, scheduled, succeeded, failed, cancelled, excluded, unknownFutureValue.
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
     * Gets the attackTechnique property value. The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue. For more information on the types of social engineering attack techniques, see simulations.
     * @return SimulationAttackTechnique|null
    */
    public function getAttackTechnique(): ?SimulationAttackTechnique {
        return $this->attackTechnique;
    }

    /**
     * Gets the attackType property value. Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
     * @return SimulationAttackType|null
    */
    public function getAttackType(): ?SimulationAttackType {
        return $this->attackType;
    }

    /**
     * Gets the automationId property value. Unique identifier for the attack simulation automation.
     * @return string|null
    */
    public function getAutomationId(): ?string {
        return $this->automationId;
    }

    /**
     * Gets the completionDateTime property value. Date and time of completion of the attack simulation and training campaign. Supports $filter and $orderby.
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        return $this->completionDateTime;
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the attack simulation and training campaign.
     * @return EmailIdentity|null
    */
    public function getCreatedBy(): ?EmailIdentity {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. Date and time of creation of the attack simulation and training campaign.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Description of the attack simulation and training campaign.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Display name of the attack simulation and training campaign. Supports $filter and $orderby.
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
     * Gets the isAutomated property value. Flag that represents if the attack simulation and training campaign was created from a simulation automation flow. Supports $filter and $orderby.
     * @return bool|null
    */
    public function getIsAutomated(): ?bool {
        return $this->isAutomated;
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who most recently modified the attack simulation and training campaign.
     * @return EmailIdentity|null
    */
    public function getLastModifiedBy(): ?EmailIdentity {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time of the most recent modification of the attack simulation and training campaign.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the launchDateTime property value. Date and time of the launch/start of the attack simulation and training campaign. Supports $filter and $orderby.
     * @return DateTime|null
    */
    public function getLaunchDateTime(): ?DateTime {
        return $this->launchDateTime;
    }

    /**
     * Gets the payloadDeliveryPlatform property value. Method of delivery of the phishing payload used in the attack simulation and training campaign. Possible values are: unknown, sms, email, teams, unknownFutureValue.
     * @return PayloadDeliveryPlatform|null
    */
    public function getPayloadDeliveryPlatform(): ?PayloadDeliveryPlatform {
        return $this->payloadDeliveryPlatform;
    }

    /**
     * Gets the report property value. Report of the attack simulation and training campaign.
     * @return SimulationReport|null
    */
    public function getReport(): ?SimulationReport {
        return $this->report;
    }

    /**
     * Gets the status property value. Status of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, draft, running, scheduled, succeeded, failed, cancelled, excluded, unknownFutureValue.
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
     * Sets the attackTechnique property value. The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue. For more information on the types of social engineering attack techniques, see simulations.
     *  @param SimulationAttackTechnique|null $value Value to set for the attackTechnique property.
    */
    public function setAttackTechnique(?SimulationAttackTechnique $value ): void {
        $this->attackTechnique = $value;
    }

    /**
     * Sets the attackType property value. Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
     *  @param SimulationAttackType|null $value Value to set for the attackType property.
    */
    public function setAttackType(?SimulationAttackType $value ): void {
        $this->attackType = $value;
    }

    /**
     * Sets the automationId property value. Unique identifier for the attack simulation automation.
     *  @param string|null $value Value to set for the automationId property.
    */
    public function setAutomationId(?string $value ): void {
        $this->automationId = $value;
    }

    /**
     * Sets the completionDateTime property value. Date and time of completion of the attack simulation and training campaign. Supports $filter and $orderby.
     *  @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value ): void {
        $this->completionDateTime = $value;
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the attack simulation and training campaign.
     *  @param EmailIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?EmailIdentity $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. Date and time of creation of the attack simulation and training campaign.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Description of the attack simulation and training campaign.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Display name of the attack simulation and training campaign. Supports $filter and $orderby.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isAutomated property value. Flag that represents if the attack simulation and training campaign was created from a simulation automation flow. Supports $filter and $orderby.
     *  @param bool|null $value Value to set for the isAutomated property.
    */
    public function setIsAutomated(?bool $value ): void {
        $this->isAutomated = $value;
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who most recently modified the attack simulation and training campaign.
     *  @param EmailIdentity|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?EmailIdentity $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time of the most recent modification of the attack simulation and training campaign.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the launchDateTime property value. Date and time of the launch/start of the attack simulation and training campaign. Supports $filter and $orderby.
     *  @param DateTime|null $value Value to set for the launchDateTime property.
    */
    public function setLaunchDateTime(?DateTime $value ): void {
        $this->launchDateTime = $value;
    }

    /**
     * Sets the payloadDeliveryPlatform property value. Method of delivery of the phishing payload used in the attack simulation and training campaign. Possible values are: unknown, sms, email, teams, unknownFutureValue.
     *  @param PayloadDeliveryPlatform|null $value Value to set for the payloadDeliveryPlatform property.
    */
    public function setPayloadDeliveryPlatform(?PayloadDeliveryPlatform $value ): void {
        $this->payloadDeliveryPlatform = $value;
    }

    /**
     * Sets the report property value. Report of the attack simulation and training campaign.
     *  @param SimulationReport|null $value Value to set for the report property.
    */
    public function setReport(?SimulationReport $value ): void {
        $this->report = $value;
    }

    /**
     * Sets the status property value. Status of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, draft, running, scheduled, succeeded, failed, cancelled, excluded, unknownFutureValue.
     *  @param SimulationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SimulationStatus $value ): void {
        $this->status = $value;
    }

}
