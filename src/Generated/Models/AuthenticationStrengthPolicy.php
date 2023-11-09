<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * Gets the allowedCombinations property value. A collection of authentication method modes that are required be used to satify this authentication strength.
     * @return array<AuthenticationMethodModes>|null
    */
    public function getAllowedCombinations(): ?array {
        $val = $this->getBackingStore()->get('allowedCombinations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationMethodModes::class);
            /** @var array<AuthenticationMethodModes>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedCombinations'");
    }

    /**
     * Gets the combinationConfigurations property value. Settings that may be used to require specific types or instances of an authentication method to be used when authenticating with a specified combination of authentication methods.
     * @return array<AuthenticationCombinationConfiguration>|null
    */
    public function getCombinationConfigurations(): ?array {
        $val = $this->getBackingStore()->get('combinationConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationCombinationConfiguration::class);
            /** @var array<AuthenticationCombinationConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'combinationConfigurations'");
    }

    /**
     * Gets the createdDateTime property value. The datetime when this policy was created.
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
     * Gets the description property value. The human-readable description of this policy.
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
     * Gets the displayName property value. The human-readable display name of this policy. Supports $filter (eq, ne, not , and in).
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
     * Gets the modifiedDateTime property value. The datetime when this policy was last modified.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('modifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedDateTime'");
    }

    /**
     * Gets the policyType property value. The policyType property
     * @return AuthenticationStrengthPolicyType|null
    */
    public function getPolicyType(): ?AuthenticationStrengthPolicyType {
        $val = $this->getBackingStore()->get('policyType');
        if (is_null($val) || $val instanceof AuthenticationStrengthPolicyType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyType'");
    }

    /**
     * Gets the requirementsSatisfied property value. The requirementsSatisfied property
     * @return AuthenticationStrengthRequirements|null
    */
    public function getRequirementsSatisfied(): ?AuthenticationStrengthRequirements {
        $val = $this->getBackingStore()->get('requirementsSatisfied');
        if (is_null($val) || $val instanceof AuthenticationStrengthRequirements) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requirementsSatisfied'");
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
     * Sets the allowedCombinations property value. A collection of authentication method modes that are required be used to satify this authentication strength.
     * @param array<AuthenticationMethodModes>|null $value Value to set for the allowedCombinations property.
    */
    public function setAllowedCombinations(?array $value): void {
        $this->getBackingStore()->set('allowedCombinations', $value);
    }

    /**
     * Sets the combinationConfigurations property value. Settings that may be used to require specific types or instances of an authentication method to be used when authenticating with a specified combination of authentication methods.
     * @param array<AuthenticationCombinationConfiguration>|null $value Value to set for the combinationConfigurations property.
    */
    public function setCombinationConfigurations(?array $value): void {
        $this->getBackingStore()->set('combinationConfigurations', $value);
    }

    /**
     * Sets the createdDateTime property value. The datetime when this policy was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The human-readable description of this policy.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The human-readable display name of this policy. Supports $filter (eq, ne, not , and in).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The datetime when this policy was last modified.
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
