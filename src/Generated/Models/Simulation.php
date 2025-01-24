<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Simulation extends Entity implements Parsable 
{
    /**
     * Instantiates a new Simulation and sets the default values.
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
     * Gets the attackTechnique property value. The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue, oAuthConsentGrant. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: oAuthConsentGrant. For more information on the types of social engineering attack techniques, see simulations.
     * @return SimulationAttackTechnique|null
    */
    public function getAttackTechnique(): ?SimulationAttackTechnique {
        $val = $this->getBackingStore()->get('attackTechnique');
        if (is_null($val) || $val instanceof SimulationAttackTechnique) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attackTechnique'");
    }

    /**
     * Gets the attackType property value. Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
     * @return SimulationAttackType|null
    */
    public function getAttackType(): ?SimulationAttackType {
        $val = $this->getBackingStore()->get('attackType');
        if (is_null($val) || $val instanceof SimulationAttackType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attackType'");
    }

    /**
     * Gets the automationId property value. Unique identifier for the attack simulation automation.
     * @return string|null
    */
    public function getAutomationId(): ?string {
        $val = $this->getBackingStore()->get('automationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'automationId'");
    }

    /**
     * Gets the completionDateTime property value. Date and time of completion of the attack simulation and training campaign. Supports $filter and $orderby.
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completionDateTime'");
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the attack simulation and training campaign.
     * @return EmailIdentity|null
    */
    public function getCreatedBy(): ?EmailIdentity {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof EmailIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. Date and time of creation of the attack simulation and training campaign.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. Description of the attack simulation and training campaign.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. Display name of the attack simulation and training campaign. Supports $filter and $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the durationInDays property value. Simulation duration in days.
     * @return int|null
    */
    public function getDurationInDays(): ?int {
        $val = $this->getBackingStore()->get('durationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationInDays'");
    }

    /**
     * Gets the endUserNotificationSetting property value. Details about the end user notification setting.
     * @return EndUserNotificationSetting|null
    */
    public function getEndUserNotificationSetting(): ?EndUserNotificationSetting {
        $val = $this->getBackingStore()->get('endUserNotificationSetting');
        if (is_null($val) || $val instanceof EndUserNotificationSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endUserNotificationSetting'");
    }

    /**
     * Gets the excludedAccountTarget property value. Users excluded from the simulation.
     * @return AccountTargetContent|null
    */
    public function getExcludedAccountTarget(): ?AccountTargetContent {
        $val = $this->getBackingStore()->get('excludedAccountTarget');
        if (is_null($val) || $val instanceof AccountTargetContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludedAccountTarget'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'durationInDays' => fn(ParseNode $n) => $o->setDurationInDays($n->getIntegerValue()),
            'endUserNotificationSetting' => fn(ParseNode $n) => $o->setEndUserNotificationSetting($n->getObjectValue([EndUserNotificationSetting::class, 'createFromDiscriminatorValue'])),
            'excludedAccountTarget' => fn(ParseNode $n) => $o->setExcludedAccountTarget($n->getObjectValue([AccountTargetContent::class, 'createFromDiscriminatorValue'])),
            'includedAccountTarget' => fn(ParseNode $n) => $o->setIncludedAccountTarget($n->getObjectValue([AccountTargetContent::class, 'createFromDiscriminatorValue'])),
            'isAutomated' => fn(ParseNode $n) => $o->setIsAutomated($n->getBooleanValue()),
            'landingPage' => fn(ParseNode $n) => $o->setLandingPage($n->getObjectValue([LandingPage::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'launchDateTime' => fn(ParseNode $n) => $o->setLaunchDateTime($n->getDateTimeValue()),
            'loginPage' => fn(ParseNode $n) => $o->setLoginPage($n->getObjectValue([LoginPage::class, 'createFromDiscriminatorValue'])),
            'oAuthConsentAppDetail' => fn(ParseNode $n) => $o->setOAuthConsentAppDetail($n->getObjectValue([OAuthConsentAppDetail::class, 'createFromDiscriminatorValue'])),
            'payload' => fn(ParseNode $n) => $o->setPayload($n->getObjectValue([Payload::class, 'createFromDiscriminatorValue'])),
            'payloadDeliveryPlatform' => fn(ParseNode $n) => $o->setPayloadDeliveryPlatform($n->getEnumValue(PayloadDeliveryPlatform::class)),
            'report' => fn(ParseNode $n) => $o->setReport($n->getObjectValue([SimulationReport::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SimulationStatus::class)),
            'trainingSetting' => fn(ParseNode $n) => $o->setTrainingSetting($n->getObjectValue([TrainingSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the includedAccountTarget property value. Users targeted in the simulation.
     * @return AccountTargetContent|null
    */
    public function getIncludedAccountTarget(): ?AccountTargetContent {
        $val = $this->getBackingStore()->get('includedAccountTarget');
        if (is_null($val) || $val instanceof AccountTargetContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includedAccountTarget'");
    }

    /**
     * Gets the isAutomated property value. Flag that represents if the attack simulation and training campaign was created from a simulation automation flow. Supports $filter and $orderby.
     * @return bool|null
    */
    public function getIsAutomated(): ?bool {
        $val = $this->getBackingStore()->get('isAutomated');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAutomated'");
    }

    /**
     * Gets the landingPage property value. The landing page associated with a simulation during its creation.
     * @return LandingPage|null
    */
    public function getLandingPage(): ?LandingPage {
        $val = $this->getBackingStore()->get('landingPage');
        if (is_null($val) || $val instanceof LandingPage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'landingPage'");
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who most recently modified the attack simulation and training campaign.
     * @return EmailIdentity|null
    */
    public function getLastModifiedBy(): ?EmailIdentity {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof EmailIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time of the most recent modification of the attack simulation and training campaign.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the launchDateTime property value. Date and time of the launch/start of the attack simulation and training campaign. Supports $filter and $orderby.
     * @return DateTime|null
    */
    public function getLaunchDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('launchDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'launchDateTime'");
    }

    /**
     * Gets the loginPage property value. The login page associated with a simulation during its creation.
     * @return LoginPage|null
    */
    public function getLoginPage(): ?LoginPage {
        $val = $this->getBackingStore()->get('loginPage');
        if (is_null($val) || $val instanceof LoginPage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loginPage'");
    }

    /**
     * Gets the oAuthConsentAppDetail property value. OAuth app details for the OAuth technique.
     * @return OAuthConsentAppDetail|null
    */
    public function getOAuthConsentAppDetail(): ?OAuthConsentAppDetail {
        $val = $this->getBackingStore()->get('oAuthConsentAppDetail');
        if (is_null($val) || $val instanceof OAuthConsentAppDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oAuthConsentAppDetail'");
    }

    /**
     * Gets the payload property value. The payload associated with a simulation during its creation.
     * @return Payload|null
    */
    public function getPayload(): ?Payload {
        $val = $this->getBackingStore()->get('payload');
        if (is_null($val) || $val instanceof Payload) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payload'");
    }

    /**
     * Gets the payloadDeliveryPlatform property value. Method of delivery of the phishing payload used in the attack simulation and training campaign. Possible values are: unknown, sms, email, teams, unknownFutureValue.
     * @return PayloadDeliveryPlatform|null
    */
    public function getPayloadDeliveryPlatform(): ?PayloadDeliveryPlatform {
        $val = $this->getBackingStore()->get('payloadDeliveryPlatform');
        if (is_null($val) || $val instanceof PayloadDeliveryPlatform) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payloadDeliveryPlatform'");
    }

    /**
     * Gets the report property value. Report of the attack simulation and training campaign.
     * @return SimulationReport|null
    */
    public function getReport(): ?SimulationReport {
        $val = $this->getBackingStore()->get('report');
        if (is_null($val) || $val instanceof SimulationReport) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'report'");
    }

    /**
     * Gets the status property value. Status of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, draft, running, scheduled, succeeded, failed, cancelled, excluded, unknownFutureValue.
     * @return SimulationStatus|null
    */
    public function getStatus(): ?SimulationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SimulationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the trainingSetting property value. Details about the training settings for a simulation.
     * @return TrainingSetting|null
    */
    public function getTrainingSetting(): ?TrainingSetting {
        $val = $this->getBackingStore()->get('trainingSetting');
        if (is_null($val) || $val instanceof TrainingSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trainingSetting'");
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
        $writer->writeIntegerValue('durationInDays', $this->getDurationInDays());
        $writer->writeObjectValue('endUserNotificationSetting', $this->getEndUserNotificationSetting());
        $writer->writeObjectValue('excludedAccountTarget', $this->getExcludedAccountTarget());
        $writer->writeObjectValue('includedAccountTarget', $this->getIncludedAccountTarget());
        $writer->writeBooleanValue('isAutomated', $this->getIsAutomated());
        $writer->writeObjectValue('landingPage', $this->getLandingPage());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeDateTimeValue('launchDateTime', $this->getLaunchDateTime());
        $writer->writeObjectValue('loginPage', $this->getLoginPage());
        $writer->writeObjectValue('oAuthConsentAppDetail', $this->getOAuthConsentAppDetail());
        $writer->writeObjectValue('payload', $this->getPayload());
        $writer->writeEnumValue('payloadDeliveryPlatform', $this->getPayloadDeliveryPlatform());
        $writer->writeObjectValue('report', $this->getReport());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeObjectValue('trainingSetting', $this->getTrainingSetting());
    }

    /**
     * Sets the attackTechnique property value. The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue, oAuthConsentGrant. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: oAuthConsentGrant. For more information on the types of social engineering attack techniques, see simulations.
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
     * Sets the durationInDays property value. Simulation duration in days.
     * @param int|null $value Value to set for the durationInDays property.
    */
    public function setDurationInDays(?int $value): void {
        $this->getBackingStore()->set('durationInDays', $value);
    }

    /**
     * Sets the endUserNotificationSetting property value. Details about the end user notification setting.
     * @param EndUserNotificationSetting|null $value Value to set for the endUserNotificationSetting property.
    */
    public function setEndUserNotificationSetting(?EndUserNotificationSetting $value): void {
        $this->getBackingStore()->set('endUserNotificationSetting', $value);
    }

    /**
     * Sets the excludedAccountTarget property value. Users excluded from the simulation.
     * @param AccountTargetContent|null $value Value to set for the excludedAccountTarget property.
    */
    public function setExcludedAccountTarget(?AccountTargetContent $value): void {
        $this->getBackingStore()->set('excludedAccountTarget', $value);
    }

    /**
     * Sets the includedAccountTarget property value. Users targeted in the simulation.
     * @param AccountTargetContent|null $value Value to set for the includedAccountTarget property.
    */
    public function setIncludedAccountTarget(?AccountTargetContent $value): void {
        $this->getBackingStore()->set('includedAccountTarget', $value);
    }

    /**
     * Sets the isAutomated property value. Flag that represents if the attack simulation and training campaign was created from a simulation automation flow. Supports $filter and $orderby.
     * @param bool|null $value Value to set for the isAutomated property.
    */
    public function setIsAutomated(?bool $value): void {
        $this->getBackingStore()->set('isAutomated', $value);
    }

    /**
     * Sets the landingPage property value. The landing page associated with a simulation during its creation.
     * @param LandingPage|null $value Value to set for the landingPage property.
    */
    public function setLandingPage(?LandingPage $value): void {
        $this->getBackingStore()->set('landingPage', $value);
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
     * Sets the loginPage property value. The login page associated with a simulation during its creation.
     * @param LoginPage|null $value Value to set for the loginPage property.
    */
    public function setLoginPage(?LoginPage $value): void {
        $this->getBackingStore()->set('loginPage', $value);
    }

    /**
     * Sets the oAuthConsentAppDetail property value. OAuth app details for the OAuth technique.
     * @param OAuthConsentAppDetail|null $value Value to set for the oAuthConsentAppDetail property.
    */
    public function setOAuthConsentAppDetail(?OAuthConsentAppDetail $value): void {
        $this->getBackingStore()->set('oAuthConsentAppDetail', $value);
    }

    /**
     * Sets the payload property value. The payload associated with a simulation during its creation.
     * @param Payload|null $value Value to set for the payload property.
    */
    public function setPayload(?Payload $value): void {
        $this->getBackingStore()->set('payload', $value);
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

    /**
     * Sets the trainingSetting property value. Details about the training settings for a simulation.
     * @param TrainingSetting|null $value Value to set for the trainingSetting property.
    */
    public function setTrainingSetting(?TrainingSetting $value): void {
        $this->getBackingStore()->set('trainingSetting', $value);
    }

}
