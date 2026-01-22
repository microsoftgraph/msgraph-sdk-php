<?php

namespace Microsoft\Graph\Generated\Models\TeamsAdministration;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\User;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TeamsUserConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamsUserConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsUserConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsUserConfiguration {
        return new TeamsUserConfiguration();
    }

    /**
     * Gets the accountType property value. The accountType property
     * @return AccountType|null
    */
    public function getAccountType(): ?AccountType {
        $val = $this->getBackingStore()->get('accountType');
        if (is_null($val) || $val instanceof AccountType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountType'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the user was created. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the effectivePolicyAssignments property value. Contains the user's effective policy assignments, with each assignment including policyType and policyAssignment details.
     * @return array<EffectivePolicyAssignment>|null
    */
    public function getEffectivePolicyAssignments(): ?array {
        $val = $this->getBackingStore()->get('effectivePolicyAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EffectivePolicyAssignment::class);
            /** @var array<EffectivePolicyAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'effectivePolicyAssignments'");
    }

    /**
     * Gets the featureTypes property value. The Teams features enabled for a given user based on licensing or service plan.
     * @return array<string>|null
    */
    public function getFeatureTypes(): ?array {
        $val = $this->getBackingStore()->get('featureTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'featureTypes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountType' => fn(ParseNode $n) => $o->setAccountType($n->getEnumValue(AccountType::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'effectivePolicyAssignments' => fn(ParseNode $n) => $o->setEffectivePolicyAssignments($n->getCollectionOfObjectValues([EffectivePolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'featureTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setFeatureTypes($val);
            },
            'isEnterpriseVoiceEnabled' => fn(ParseNode $n) => $o->setIsEnterpriseVoiceEnabled($n->getBooleanValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'telephoneNumbers' => fn(ParseNode $n) => $o->setTelephoneNumbers($n->getCollectionOfObjectValues([AssignedTelephoneNumber::class, 'createFromDiscriminatorValue'])),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([User::class, 'createFromDiscriminatorValue'])),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isEnterpriseVoiceEnabled property value. Indicates whether voice capability is enabled.
     * @return bool|null
    */
    public function getIsEnterpriseVoiceEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnterpriseVoiceEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnterpriseVoiceEnabled'");
    }

    /**
     * Gets the modifiedDateTime property value. The date and time when the user's details were last modified. The system updates this value each time the user's details are changed. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the telephoneNumbers property value. Includes both the phone number and its corresponding assignment category. The assignment category can include values such as primary, private, and alternate.
     * @return array<AssignedTelephoneNumber>|null
    */
    public function getTelephoneNumbers(): ?array {
        $val = $this->getBackingStore()->get('telephoneNumbers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignedTelephoneNumber::class);
            /** @var array<AssignedTelephoneNumber>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'telephoneNumbers'");
    }

    /**
     * Gets the tenantId property value. The unique identifier of the tenant in Entra to which this user is assigned.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the user property value. Represents an Entra user account.
     * @return User|null
    */
    public function getUser(): ?User {
        $val = $this->getBackingStore()->get('user');
        if (is_null($val) || $val instanceof User) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'user'");
    }

    /**
     * Gets the userPrincipalName property value. The sign-in address of the user.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accountType', $this->getAccountType());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('effectivePolicyAssignments', $this->getEffectivePolicyAssignments());
        $writer->writeCollectionOfPrimitiveValues('featureTypes', $this->getFeatureTypes());
        $writer->writeBooleanValue('isEnterpriseVoiceEnabled', $this->getIsEnterpriseVoiceEnabled());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeCollectionOfObjectValues('telephoneNumbers', $this->getTelephoneNumbers());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the accountType property value. The accountType property
     * @param AccountType|null $value Value to set for the accountType property.
    */
    public function setAccountType(?AccountType $value): void {
        $this->getBackingStore()->set('accountType', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the user was created. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the effectivePolicyAssignments property value. Contains the user's effective policy assignments, with each assignment including policyType and policyAssignment details.
     * @param array<EffectivePolicyAssignment>|null $value Value to set for the effectivePolicyAssignments property.
    */
    public function setEffectivePolicyAssignments(?array $value): void {
        $this->getBackingStore()->set('effectivePolicyAssignments', $value);
    }

    /**
     * Sets the featureTypes property value. The Teams features enabled for a given user based on licensing or service plan.
     * @param array<string>|null $value Value to set for the featureTypes property.
    */
    public function setFeatureTypes(?array $value): void {
        $this->getBackingStore()->set('featureTypes', $value);
    }

    /**
     * Sets the isEnterpriseVoiceEnabled property value. Indicates whether voice capability is enabled.
     * @param bool|null $value Value to set for the isEnterpriseVoiceEnabled property.
    */
    public function setIsEnterpriseVoiceEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnterpriseVoiceEnabled', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The date and time when the user's details were last modified. The system updates this value each time the user's details are changed. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the telephoneNumbers property value. Includes both the phone number and its corresponding assignment category. The assignment category can include values such as primary, private, and alternate.
     * @param array<AssignedTelephoneNumber>|null $value Value to set for the telephoneNumbers property.
    */
    public function setTelephoneNumbers(?array $value): void {
        $this->getBackingStore()->set('telephoneNumbers', $value);
    }

    /**
     * Sets the tenantId property value. The unique identifier of the tenant in Entra to which this user is assigned.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the user property value. Represents an Entra user account.
     * @param User|null $value Value to set for the user property.
    */
    public function setUser(?User $value): void {
        $this->getBackingStore()->set('user', $value);
    }

    /**
     * Sets the userPrincipalName property value. The sign-in address of the user.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
