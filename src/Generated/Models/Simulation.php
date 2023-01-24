<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Simulation extends Entity implements Parsable 
{
    /**
     * Instantiates a new simulation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('attackTechnique');
    }

    /**
     * Gets the attackType property value. Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
     * @return SimulationAttackType|null
    */
    public function getAttackType(): ?SimulationAttackType {
        return $this->getBackingStore()->get('attackType');
    }

    /**
     * Gets the automationId property value. Unique identifier for the attack simulation automation.
     * @return string|null
    */
    public function getAutomationId(): ?string {
        return $this->getBackingStore()->get('automationId');
    }

    /**
     * Gets the completionDateTime property value. Date and time of completion of the attack simulation and training campaign. Supports $filter and $orderby.
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        return $this->getBackingStore()->get('completionDateTime');
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the attack simulation and training campaign.
     * @return EmailIdentity|null
    */
    public function getCreatedBy(): ?EmailIdentity {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. Date and time of creation of the attack simulation and training campaign.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. Description of the attack simulation and training campaign.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Display name of the attack simulation and training campaign. Supports $filter and $orderby.
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
            'attackTechnique' => fn(ParseNode $n) => $o->setAttackTechnique($n->getEnumValue(SimulationAttackTechnique::class)),
            'attackType' => fn(ParseNode $n) => $o->setAttackType($n->getEnumValue(SimulationAttackType::class)),
            'automationId' => fn(ParseNode $n) => $o->setAutomationId($n->getStringValue()),
            'completionDateTime' => fn(ParseNode $n) => $o->setCompletionDateTime($n->getDateTimeValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isAutomated' => fn(ParseNode $n) => $o->setIsAutomated($n->getBooleanValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'launchDateTime' => fn(ParseNode $n) => $o->setLaunchDateTime($n->getDateTimeValue()),
            'payloadDeliveryPlatform' => fn(ParseNode $n) => $o->setPayloadDeliveryPlatform($n->getEnumValue(PayloadDeliveryPlatform::class)),
            'report' => fn(ParseNode $n) => $o->setReport($n->getObjectValue([SimulationReport::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SimulationStatus::class)),
        ]);
    }

    /**
     * Gets the isAutomated property value. Flag that represents if the attack simulation and training campaign was created from a simulation automation flow. Supports $filter and $orderby.
     * @return bool|null
    */
    public function getIsAutomated(): ?bool {
        return $this->getBackingStore()->get('isAutomated');
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who most recently modified the attack simulation and training campaign.
     * @return EmailIdentity|null
    */
    public function getLastModifiedBy(): ?EmailIdentity {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time of the most recent modification of the attack simulation and training campaign.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the launchDateTime property value. Date and time of the launch/start of the attack simulation and training campaign. Supports $filter and $orderby.
     * @return DateTime|null
    */
    public function getLaunchDateTime(): ?DateTime {
        return $this->getBackingStore()->get('launchDateTime');
    }

    /**
     * Gets the payloadDeliveryPlatform property value. Method of delivery of the phishing payload used in the attack simulation and training campaign. Possible values are: unknown, sms, email, teams, unknownFutureValue.
     * @return PayloadDeliveryPlatform|null
    */
    public function getPayloadDeliveryPlatform(): ?PayloadDeliveryPlatform {
        return $this->getBackingStore()->get('payloadDeliveryPlatform');
    }

    /**
     * Gets the report property value. Report of the attack simulation and training campaign.
     * @return SimulationReport|null
    */
    public function getReport(): ?SimulationReport {
        return $this->getBackingStore()->get('report');
    }

    /**
     * Gets the status property value. Status of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, draft, running, scheduled, succeeded, failed, cancelled, excluded, unknownFutureValue.
     * @return SimulationStatus|null
    */
    public function getStatus(): ?SimulationStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('attackTechnique', $this->getAttackTechnique());
        $writer->writeEnumValue('attackType', $this->getAttackType());
        $writer->writeStringValue('automationId', $this->getAutomationId());
        $writer->writeDateTimeValue('completionDateTime', $this->getCompletionDateTime());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isAutomated', $this->getIsAutomated());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeDateTimeValue('launchDateTime', $this->getLaunchDateTime());
        $writer->writeEnumValue('payloadDeliveryPlatform', $this->getPayloadDeliveryPlatform());
        $writer->writeObjectValue('report', $this->getReport());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the attackTechnique property value. The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue. For more information on the types of social engineering attack techniques, see simulations.
     * @param SimulationAttackTechnique|null $value Value to set for the attackTechnique property.
    */
    public function setAttackTechnique(?SimulationAttackTechnique $value): void {
        $this->getBackingStore()->set('attackTechnique', $value);
    }

    /**
     * Sets the attackType property value. Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
     * @param SimulationAttackType|null $value Value to set for the attackType property.
    */
    public function setAttackType(?SimulationAttackType $value): void {
        $this->getBackingStore()->set('attackType', $value);
    }

    /**
     * Sets the automationId property value. Unique identifier for the attack simulation automation.
     * @param string|null $value Value to set for the automationId property.
    */
    public function setAutomationId(?string $value): void {
        $this->getBackingStore()->set('automationId', $value);
    }

    /**
     * Sets the completionDateTime property value. Date and time of completion of the attack simulation and training campaign. Supports $filter and $orderby.
     * @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completionDateTime', $value);
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the attack simulation and training campaign.
     * @param EmailIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time of creation of the attack simulation and training campaign.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description of the attack simulation and training campaign.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name of the attack simulation and training campaign. Supports $filter and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isAutomated property value. Flag that represents if the attack simulation and training campaign was created from a simulation automation flow. Supports $filter and $orderby.
     * @param bool|null $value Value to set for the isAutomated property.
    */
    public function setIsAutomated(?bool $value): void {
        $this->getBackingStore()->set('isAutomated', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who most recently modified the attack simulation and training campaign.
     * @param EmailIdentity|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time of the most recent modification of the attack simulation and training campaign.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the launchDateTime property value. Date and time of the launch/start of the attack simulation and training campaign. Supports $filter and $orderby.
     * @param DateTime|null $value Value to set for the launchDateTime property.
    */
    public function setLaunchDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('launchDateTime', $value);
    }

    /**
     * Sets the payloadDeliveryPlatform property value. Method of delivery of the phishing payload used in the attack simulation and training campaign. Possible values are: unknown, sms, email, teams, unknownFutureValue.
     * @param PayloadDeliveryPlatform|null $value Value to set for the payloadDeliveryPlatform property.
    */
    public function setPayloadDeliveryPlatform(?PayloadDeliveryPlatform $value): void {
        $this->getBackingStore()->set('payloadDeliveryPlatform', $value);
    }

    /**
     * Sets the report property value. Report of the attack simulation and training campaign.
     * @param SimulationReport|null $value Value to set for the report property.
    */
    public function setReport(?SimulationReport $value): void {
        $this->getBackingStore()->set('report', $value);
    }

    /**
     * Sets the status property value. Status of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, draft, running, scheduled, succeeded, failed, cancelled, excluded, unknownFutureValue.
     * @param SimulationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SimulationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
