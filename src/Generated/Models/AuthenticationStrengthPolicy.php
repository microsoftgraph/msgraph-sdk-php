<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationStrengthPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new authenticationStrengthPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationStrengthPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationStrengthPolicy {
        return new AuthenticationStrengthPolicy();
    }

    /**
     * Gets the allowedCombinations property value. The allowedCombinations property
     * @return array<AuthenticationMethodModes>|null
    */
    public function getAllowedCombinations(): ?array {
        return $this->getBackingStore()->get('allowedCombinations');
    }

    /**
     * Gets the combinationConfigurations property value. The combinationConfigurations property
     * @return array<AuthenticationCombinationConfiguration>|null
    */
    public function getCombinationConfigurations(): ?array {
        return $this->getBackingStore()->get('combinationConfigurations');
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The displayName property
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
            'allowedCombinations' => fn(ParseNode $n) => $o->setAllowedCombinations($n->getCollectionOfEnumValues(AuthenticationMethodModes::class)),
            'combinationConfigurations' => fn(ParseNode $n) => $o->setCombinationConfigurations($n->getCollectionOfObjectValues([AuthenticationCombinationConfiguration::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'policyType' => fn(ParseNode $n) => $o->setPolicyType($n->getEnumValue(AuthenticationStrengthPolicyType::class)),
            'requirementsSatisfied' => fn(ParseNode $n) => $o->setRequirementsSatisfied($n->getEnumValue(AuthenticationStrengthRequirements::class)),
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. The modifiedDateTime property
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('modifiedDateTime');
    }

    /**
     * Gets the policyType property value. The policyType property
     * @return AuthenticationStrengthPolicyType|null
    */
    public function getPolicyType(): ?AuthenticationStrengthPolicyType {
        return $this->getBackingStore()->get('policyType');
    }

    /**
     * Gets the requirementsSatisfied property value. The requirementsSatisfied property
     * @return AuthenticationStrengthRequirements|null
    */
    public function getRequirementsSatisfied(): ?AuthenticationStrengthRequirements {
        return $this->getBackingStore()->get('requirementsSatisfied');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('allowedCombinations', $this->getAllowedCombinations());
        $writer->writeCollectionOfObjectValues('combinationConfigurations', $this->getCombinationConfigurations());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeEnumValue('policyType', $this->getPolicyType());
        $writer->writeEnumValue('requirementsSatisfied', $this->getRequirementsSatisfied());
    }

    /**
     * Sets the allowedCombinations property value. The allowedCombinations property
     * @param array<AuthenticationMethodModes>|null $value Value to set for the allowedCombinations property.
    */
    public function setAllowedCombinations(?array $value): void {
        $this->getBackingStore()->set('allowedCombinations', $value);
    }

    /**
     * Sets the combinationConfigurations property value. The combinationConfigurations property
     * @param array<AuthenticationCombinationConfiguration>|null $value Value to set for the combinationConfigurations property.
    */
    public function setCombinationConfigurations(?array $value): void {
        $this->getBackingStore()->set('combinationConfigurations', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The modifiedDateTime property
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the policyType property value. The policyType property
     * @param AuthenticationStrengthPolicyType|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?AuthenticationStrengthPolicyType $value): void {
        $this->getBackingStore()->set('policyType', $value);
    }

    /**
     * Sets the requirementsSatisfied property value. The requirementsSatisfied property
     * @param AuthenticationStrengthRequirements|null $value Value to set for the requirementsSatisfied property.
    */
    public function setRequirementsSatisfied(?AuthenticationStrengthRequirements $value): void {
        $this->getBackingStore()->set('requirementsSatisfied', $value);
    }

}
