<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Payload extends Entity implements Parsable 
{
    /**
     * Instantiates a new Payload and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Payload
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Payload {
        return new Payload();
    }

    /**
     * Gets the brand property value. The branch of a payload. Possible values are: unknown, other, americanExpress, capitalOne, dhl, docuSign, dropbox, facebook, firstAmerican, microsoft, netflix, scotiabank, sendGrid, stewartTitle, tesco, wellsFargo, syrinxCloud, adobe, teams, zoom, unknownFutureValue.
     * @return PayloadBrand|null
    */
    public function getBrand(): ?PayloadBrand {
        $val = $this->getBackingStore()->get('brand');
        if (is_null($val) || $val instanceof PayloadBrand) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'brand'");
    }

    /**
     * Gets the complexity property value. The complexity of a payload. Possible values are: unknown, low, medium, high, unknownFutureValue.
     * @return PayloadComplexity|null
    */
    public function getComplexity(): ?PayloadComplexity {
        $val = $this->getBackingStore()->get('complexity');
        if (is_null($val) || $val instanceof PayloadComplexity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complexity'");
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the attack simulation and training campaign payload.
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
     * Gets the createdDateTime property value. Date and time when the attack simulation and training campaign payload. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the description property value. Description of the attack simulation and training campaign payload.
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
     * Gets the detail property value. Additional details about the payload.
     * @return PayloadDetail|null
    */
    public function getDetail(): ?PayloadDetail {
        $val = $this->getBackingStore()->get('detail');
        if (is_null($val) || $val instanceof PayloadDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detail'");
    }

    /**
     * Gets the displayName property value. Display name of the attack simulation and training campaign payload. Supports $filter and $orderby.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'brand' => fn(ParseNode $n) => $o->setBrand($n->getEnumValue(PayloadBrand::class)),
            'complexity' => fn(ParseNode $n) => $o->setComplexity($n->getEnumValue(PayloadComplexity::class)),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getObjectValue([PayloadDetail::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'industry' => fn(ParseNode $n) => $o->setIndustry($n->getEnumValue(PayloadIndustry::class)),
            'isAutomated' => fn(ParseNode $n) => $o->setIsAutomated($n->getBooleanValue()),
            'isControversial' => fn(ParseNode $n) => $o->setIsControversial($n->getBooleanValue()),
            'isCurrentEvent' => fn(ParseNode $n) => $o->setIsCurrentEvent($n->getBooleanValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'payloadTags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPayloadTags($val);
            },
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(PayloadDeliveryPlatform::class)),
            'predictedCompromiseRate' => fn(ParseNode $n) => $o->setPredictedCompromiseRate($n->getFloatValue()),
            'simulationAttackType' => fn(ParseNode $n) => $o->setSimulationAttackType($n->getEnumValue(SimulationAttackType::class)),
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(SimulationContentSource::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SimulationContentStatus::class)),
            'technique' => fn(ParseNode $n) => $o->setTechnique($n->getEnumValue(SimulationAttackTechnique::class)),
            'theme' => fn(ParseNode $n) => $o->setTheme($n->getEnumValue(PayloadTheme::class)),
        ]);
    }

    /**
     * Gets the industry property value. Industry of a payload. Possible values are: unknown, other, banking, businessServices, consumerServices, education, energy, construction, consulting, financialServices, government, hospitality, insurance, legal, courierServices, IT, healthcare, manufacturing, retail, telecom, realEstate, unknownFutureValue.
     * @return PayloadIndustry|null
    */
    public function getIndustry(): ?PayloadIndustry {
        $val = $this->getBackingStore()->get('industry');
        if (is_null($val) || $val instanceof PayloadIndustry) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'industry'");
    }

    /**
     * Gets the isAutomated property value. Indicates whether the attack simulation and training campaign payload was created from an automation flow. Supports $filter and $orderby.
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
     * Gets the isControversial property value. Indicates whether the payload is controversial.
     * @return bool|null
    */
    public function getIsControversial(): ?bool {
        $val = $this->getBackingStore()->get('isControversial');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isControversial'");
    }

    /**
     * Gets the isCurrentEvent property value. Indicates whether the payload is from any recent event.
     * @return bool|null
    */
    public function getIsCurrentEvent(): ?bool {
        $val = $this->getBackingStore()->get('isCurrentEvent');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCurrentEvent'");
    }

    /**
     * Gets the language property value. Payload language.
     * @return string|null
    */
    public function getLanguage(): ?string {
        $val = $this->getBackingStore()->get('language');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'language'");
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who most recently modified the attack simulation and training campaign payload.
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
     * Gets the lastModifiedDateTime property value. Date and time when the attack simulation and training campaign payload was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the payloadTags property value. Free text tags for a payload.
     * @return array<string>|null
    */
    public function getPayloadTags(): ?array {
        $val = $this->getBackingStore()->get('payloadTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payloadTags'");
    }

    /**
     * Gets the platform property value. The payload delivery platform for a simulation. Possible values are: unknown, sms, email, teams, unknownFutureValue.
     * @return PayloadDeliveryPlatform|null
    */
    public function getPlatform(): ?PayloadDeliveryPlatform {
        $val = $this->getBackingStore()->get('platform');
        if (is_null($val) || $val instanceof PayloadDeliveryPlatform) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platform'");
    }

    /**
     * Gets the predictedCompromiseRate property value. Predicted probability for a payload to phish a targeted user.
     * @return float|null
    */
    public function getPredictedCompromiseRate(): ?float {
        $val = $this->getBackingStore()->get('predictedCompromiseRate');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'predictedCompromiseRate'");
    }

    /**
     * Gets the simulationAttackType property value. Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
     * @return SimulationAttackType|null
    */
    public function getSimulationAttackType(): ?SimulationAttackType {
        $val = $this->getBackingStore()->get('simulationAttackType');
        if (is_null($val) || $val instanceof SimulationAttackType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simulationAttackType'");
    }

    /**
     * Gets the source property value. The source property
     * @return SimulationContentSource|null
    */
    public function getSource(): ?SimulationContentSource {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof SimulationContentSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the status property value. Simulation content status. Supports $filter and $orderby. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue.
     * @return SimulationContentStatus|null
    */
    public function getStatus(): ?SimulationContentStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SimulationContentStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the technique property value. The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue, oAuthConsentGrant. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: oAuthConsentGrant. For more information on the types of social engineering attack techniques, see simulations.
     * @return SimulationAttackTechnique|null
    */
    public function getTechnique(): ?SimulationAttackTechnique {
        $val = $this->getBackingStore()->get('technique');
        if (is_null($val) || $val instanceof SimulationAttackTechnique) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'technique'");
    }

    /**
     * Gets the theme property value. The theme of a payload. Possible values are: unknown, other, accountActivation, accountVerification, billing, cleanUpMail, controversial, documentReceived, expense, fax, financeReport, incomingMessages, invoice, itemReceived, loginAlert, mailReceived, password, payment, payroll, personalizedOffer, quarantine, remoteWork, reviewMessage, securityUpdate, serviceSuspended, signatureRequired, upgradeMailboxStorage, verifyMailbox, voicemail, advertisement, employeeEngagement, unknownFutureValue.
     * @return PayloadTheme|null
    */
    public function getTheme(): ?PayloadTheme {
        $val = $this->getBackingStore()->get('theme');
        if (is_null($val) || $val instanceof PayloadTheme) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'theme'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('brand', $this->getBrand());
        $writer->writeEnumValue('complexity', $this->getComplexity());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('detail', $this->getDetail());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('industry', $this->getIndustry());
        $writer->writeBooleanValue('isAutomated', $this->getIsAutomated());
        $writer->writeBooleanValue('isControversial', $this->getIsControversial());
        $writer->writeBooleanValue('isCurrentEvent', $this->getIsCurrentEvent());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfPrimitiveValues('payloadTags', $this->getPayloadTags());
        $writer->writeEnumValue('platform', $this->getPlatform());
        $writer->writeFloatValue('predictedCompromiseRate', $this->getPredictedCompromiseRate());
        $writer->writeEnumValue('simulationAttackType', $this->getSimulationAttackType());
        $writer->writeEnumValue('source', $this->getSource());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('technique', $this->getTechnique());
        $writer->writeEnumValue('theme', $this->getTheme());
    }

    /**
     * Sets the brand property value. The branch of a payload. Possible values are: unknown, other, americanExpress, capitalOne, dhl, docuSign, dropbox, facebook, firstAmerican, microsoft, netflix, scotiabank, sendGrid, stewartTitle, tesco, wellsFargo, syrinxCloud, adobe, teams, zoom, unknownFutureValue.
     * @param PayloadBrand|null $value Value to set for the brand property.
    */
    public function setBrand(?PayloadBrand $value): void {
        $this->getBackingStore()->set('brand', $value);
    }

    /**
     * Sets the complexity property value. The complexity of a payload. Possible values are: unknown, low, medium, high, unknownFutureValue.
     * @param PayloadComplexity|null $value Value to set for the complexity property.
    */
    public function setComplexity(?PayloadComplexity $value): void {
        $this->getBackingStore()->set('complexity', $value);
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the attack simulation and training campaign payload.
     * @param EmailIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time when the attack simulation and training campaign payload. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description of the attack simulation and training campaign payload.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the detail property value. Additional details about the payload.
     * @param PayloadDetail|null $value Value to set for the detail property.
    */
    public function setDetail(?PayloadDetail $value): void {
        $this->getBackingStore()->set('detail', $value);
    }

    /**
     * Sets the displayName property value. Display name of the attack simulation and training campaign payload. Supports $filter and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the industry property value. Industry of a payload. Possible values are: unknown, other, banking, businessServices, consumerServices, education, energy, construction, consulting, financialServices, government, hospitality, insurance, legal, courierServices, IT, healthcare, manufacturing, retail, telecom, realEstate, unknownFutureValue.
     * @param PayloadIndustry|null $value Value to set for the industry property.
    */
    public function setIndustry(?PayloadIndustry $value): void {
        $this->getBackingStore()->set('industry', $value);
    }

    /**
     * Sets the isAutomated property value. Indicates whether the attack simulation and training campaign payload was created from an automation flow. Supports $filter and $orderby.
     * @param bool|null $value Value to set for the isAutomated property.
    */
    public function setIsAutomated(?bool $value): void {
        $this->getBackingStore()->set('isAutomated', $value);
    }

    /**
     * Sets the isControversial property value. Indicates whether the payload is controversial.
     * @param bool|null $value Value to set for the isControversial property.
    */
    public function setIsControversial(?bool $value): void {
        $this->getBackingStore()->set('isControversial', $value);
    }

    /**
     * Sets the isCurrentEvent property value. Indicates whether the payload is from any recent event.
     * @param bool|null $value Value to set for the isCurrentEvent property.
    */
    public function setIsCurrentEvent(?bool $value): void {
        $this->getBackingStore()->set('isCurrentEvent', $value);
    }

    /**
     * Sets the language property value. Payload language.
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who most recently modified the attack simulation and training campaign payload.
     * @param EmailIdentity|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time when the attack simulation and training campaign payload was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the payloadTags property value. Free text tags for a payload.
     * @param array<string>|null $value Value to set for the payloadTags property.
    */
    public function setPayloadTags(?array $value): void {
        $this->getBackingStore()->set('payloadTags', $value);
    }

    /**
     * Sets the platform property value. The payload delivery platform for a simulation. Possible values are: unknown, sms, email, teams, unknownFutureValue.
     * @param PayloadDeliveryPlatform|null $value Value to set for the platform property.
    */
    public function setPlatform(?PayloadDeliveryPlatform $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the predictedCompromiseRate property value. Predicted probability for a payload to phish a targeted user.
     * @param float|null $value Value to set for the predictedCompromiseRate property.
    */
    public function setPredictedCompromiseRate(?float $value): void {
        $this->getBackingStore()->set('predictedCompromiseRate', $value);
    }

    /**
     * Sets the simulationAttackType property value. Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
     * @param SimulationAttackType|null $value Value to set for the simulationAttackType property.
    */
    public function setSimulationAttackType(?SimulationAttackType $value): void {
        $this->getBackingStore()->set('simulationAttackType', $value);
    }

    /**
     * Sets the source property value. The source property
     * @param SimulationContentSource|null $value Value to set for the source property.
    */
    public function setSource(?SimulationContentSource $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the status property value. Simulation content status. Supports $filter and $orderby. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue.
     * @param SimulationContentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SimulationContentStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the technique property value. The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue, oAuthConsentGrant. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: oAuthConsentGrant. For more information on the types of social engineering attack techniques, see simulations.
     * @param SimulationAttackTechnique|null $value Value to set for the technique property.
    */
    public function setTechnique(?SimulationAttackTechnique $value): void {
        $this->getBackingStore()->set('technique', $value);
    }

    /**
     * Sets the theme property value. The theme of a payload. Possible values are: unknown, other, accountActivation, accountVerification, billing, cleanUpMail, controversial, documentReceived, expense, fax, financeReport, incomingMessages, invoice, itemReceived, loginAlert, mailReceived, password, payment, payroll, personalizedOffer, quarantine, remoteWork, reviewMessage, securityUpdate, serviceSuspended, signatureRequired, upgradeMailboxStorage, verifyMailbox, voicemail, advertisement, employeeEngagement, unknownFutureValue.
     * @param PayloadTheme|null $value Value to set for the theme property.
    */
    public function setTheme(?PayloadTheme $value): void {
        $this->getBackingStore()->set('theme', $value);
    }

}
