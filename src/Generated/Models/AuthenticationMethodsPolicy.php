<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AuthenticationMethodsPolicy extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new authenticationMethodsPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethodsPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethodsPolicy {
        return new AuthenticationMethodsPolicy();
    }

    /**
     * Gets the authenticationMethodConfigurations property value. Represents the settings for each authentication method. Automatically expanded on GET /policies/authenticationMethodsPolicy.
     * @return array<AuthenticationMethodConfiguration>|null
    */
    public function getAuthenticationMethodConfigurations(): ?array {
        $val = $this->getBackingStore()->get('authenticationMethodConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationMethodConfiguration::class);
            /** @var array<AuthenticationMethodConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethodConfigurations'");
    }

    /**
     * Gets the description property value. A description of the policy. Read-only.
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
     * Gets the displayName property value. The name of the policy. Read-only.
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
            'authenticationMethodConfigurations' => fn(ParseNode $n) => $o->setAuthenticationMethodConfigurations($n->getCollectionOfObjectValues([AuthenticationMethodConfiguration::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'policyMigrationState' => fn(ParseNode $n) => $o->setPolicyMigrationState($n->getEnumValue(AuthenticationMethodsPolicyMigrationState::class)),
            'policyVersion' => fn(ParseNode $n) => $o->setPolicyVersion($n->getStringValue()),
            'reconfirmationInDays' => fn(ParseNode $n) => $o->setReconfirmationInDays($n->getIntegerValue()),
            'registrationEnforcement' => fn(ParseNode $n) => $o->setRegistrationEnforcement($n->getObjectValue([RegistrationEnforcement::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time of the last update to the policy. Read-only.
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
     * Gets the policyMigrationState property value. The state of migration of the authentication methods policy from the legacy multifactor authentication and self-service password reset (SSPR) policies. The possible values are: premigration - means the authentication methods policy is used for authentication only, legacy policies are respected. migrationInProgress - means the authentication methods policy is used for both authentication and SSPR, legacy policies are respected. migrationComplete - means the authentication methods policy is used for authentication and SSPR, legacy policies are ignored. unknownFutureValue - Evolvable enumeration sentinel value. Do not use.
     * @return AuthenticationMethodsPolicyMigrationState|null
    */
    public function getPolicyMigrationState(): ?AuthenticationMethodsPolicyMigrationState {
        $val = $this->getBackingStore()->get('policyMigrationState');
        if (is_null($val) || $val instanceof AuthenticationMethodsPolicyMigrationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyMigrationState'");
    }

    /**
     * Gets the policyVersion property value. The version of the policy in use. Read-only.
     * @return string|null
    */
    public function getPolicyVersion(): ?string {
        $val = $this->getBackingStore()->get('policyVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyVersion'");
    }

    /**
     * Gets the reconfirmationInDays property value. The reconfirmationInDays property
     * @return int|null
    */
    public function getReconfirmationInDays(): ?int {
        $val = $this->getBackingStore()->get('reconfirmationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reconfirmationInDays'");
    }

    /**
     * Gets the registrationEnforcement property value. Enforce registration at sign-in time. This property can be used to remind users to set up targeted authentication methods.
     * @return RegistrationEnforcement|null
    */
    public function getRegistrationEnforcement(): ?RegistrationEnforcement {
        $val = $this->getBackingStore()->get('registrationEnforcement');
        if (is_null($val) || $val instanceof RegistrationEnforcement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationEnforcement'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('authenticationMethodConfigurations', $this->getAuthenticationMethodConfigurations());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('policyMigrationState', $this->getPolicyMigrationState());
        $writer->writeStringValue('policyVersion', $this->getPolicyVersion());
        $writer->writeIntegerValue('reconfirmationInDays', $this->getReconfirmationInDays());
        $writer->writeObjectValue('registrationEnforcement', $this->getRegistrationEnforcement());
    }

    /**
     * Sets the authenticationMethodConfigurations property value. Represents the settings for each authentication method. Automatically expanded on GET /policies/authenticationMethodsPolicy.
     * @param array<AuthenticationMethodConfiguration>|null $value Value to set for the authenticationMethodConfigurations property.
    */
    public function setAuthenticationMethodConfigurations(?array $value): void {
        $this->getBackingStore()->set('authenticationMethodConfigurations', $value);
    }

    /**
     * Sets the description property value. A description of the policy. Read-only.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of the policy. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time of the last update to the policy. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the policyMigrationState property value. The state of migration of the authentication methods policy from the legacy multifactor authentication and self-service password reset (SSPR) policies. The possible values are: premigration - means the authentication methods policy is used for authentication only, legacy policies are respected. migrationInProgress - means the authentication methods policy is used for both authentication and SSPR, legacy policies are respected. migrationComplete - means the authentication methods policy is used for authentication and SSPR, legacy policies are ignored. unknownFutureValue - Evolvable enumeration sentinel value. Do not use.
     * @param AuthenticationMethodsPolicyMigrationState|null $value Value to set for the policyMigrationState property.
    */
    public function setPolicyMigrationState(?AuthenticationMethodsPolicyMigrationState $value): void {
        $this->getBackingStore()->set('policyMigrationState', $value);
    }

    /**
     * Sets the policyVersion property value. The version of the policy in use. Read-only.
     * @param string|null $value Value to set for the policyVersion property.
    */
    public function setPolicyVersion(?string $value): void {
        $this->getBackingStore()->set('policyVersion', $value);
    }

    /**
     * Sets the reconfirmationInDays property value. The reconfirmationInDays property
     * @param int|null $value Value to set for the reconfirmationInDays property.
    */
    public function setReconfirmationInDays(?int $value): void {
        $this->getBackingStore()->set('reconfirmationInDays', $value);
    }

    /**
     * Sets the registrationEnforcement property value. Enforce registration at sign-in time. This property can be used to remind users to set up targeted authentication methods.
     * @param RegistrationEnforcement|null $value Value to set for the registrationEnforcement property.
    */
    public function setRegistrationEnforcement(?RegistrationEnforcement $value): void {
        $this->getBackingStore()->set('registrationEnforcement', $value);
    }

}
