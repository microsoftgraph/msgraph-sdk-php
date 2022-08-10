<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Fido2AuthenticationMethodConfiguration extends AuthenticationMethodConfiguration implements Parsable 
{
    /**
     * @var array<AuthenticationMethodTarget>|null $includeTargets A collection of users or groups who are enabled to use the authentication method.
    */
    private ?array $includeTargets = null;
    
    /**
     * @var bool|null $isAttestationEnforced Determines whether attestation must be enforced for FIDO2 security key registration.
    */
    private ?bool $isAttestationEnforced = null;
    
    /**
     * @var bool|null $isSelfServiceRegistrationAllowed Determines if users can register new FIDO2 security keys.
    */
    private ?bool $isSelfServiceRegistrationAllowed = null;
    
    /**
     * @var Fido2KeyRestrictions|null $keyRestrictions Controls whether key restrictions are enforced on FIDO2 security keys, either allowing or disallowing certain key types as defined by Authenticator Attestation GUID (AAGUID), an identifier that indicates the type (e.g. make and model) of the authenticator.
    */
    private ?Fido2KeyRestrictions $keyRestrictions = null;
    
    /**
     * Instantiates a new Fido2AuthenticationMethodConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.fido2AuthenticationMethodConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Fido2AuthenticationMethodConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Fido2AuthenticationMethodConfiguration {
        return new Fido2AuthenticationMethodConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'includeTargets' => function (ParseNode $n) use ($o) { $o->setIncludeTargets($n->getCollectionOfObjectValues(array(AuthenticationMethodTarget::class, 'createFromDiscriminatorValue'))); },
            'isAttestationEnforced' => function (ParseNode $n) use ($o) { $o->setIsAttestationEnforced($n->getBooleanValue()); },
            'isSelfServiceRegistrationAllowed' => function (ParseNode $n) use ($o) { $o->setIsSelfServiceRegistrationAllowed($n->getBooleanValue()); },
            'keyRestrictions' => function (ParseNode $n) use ($o) { $o->setKeyRestrictions($n->getObjectValue(array(Fido2KeyRestrictions::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the includeTargets property value. A collection of users or groups who are enabled to use the authentication method.
     * @return array<AuthenticationMethodTarget>|null
    */
    public function getIncludeTargets(): ?array {
        return $this->includeTargets;
    }

    /**
     * Gets the isAttestationEnforced property value. Determines whether attestation must be enforced for FIDO2 security key registration.
     * @return bool|null
    */
    public function getIsAttestationEnforced(): ?bool {
        return $this->isAttestationEnforced;
    }

    /**
     * Gets the isSelfServiceRegistrationAllowed property value. Determines if users can register new FIDO2 security keys.
     * @return bool|null
    */
    public function getIsSelfServiceRegistrationAllowed(): ?bool {
        return $this->isSelfServiceRegistrationAllowed;
    }

    /**
     * Gets the keyRestrictions property value. Controls whether key restrictions are enforced on FIDO2 security keys, either allowing or disallowing certain key types as defined by Authenticator Attestation GUID (AAGUID), an identifier that indicates the type (e.g. make and model) of the authenticator.
     * @return Fido2KeyRestrictions|null
    */
    public function getKeyRestrictions(): ?Fido2KeyRestrictions {
        return $this->keyRestrictions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('includeTargets', $this->includeTargets);
        $writer->writeBooleanValue('isAttestationEnforced', $this->isAttestationEnforced);
        $writer->writeBooleanValue('isSelfServiceRegistrationAllowed', $this->isSelfServiceRegistrationAllowed);
        $writer->writeObjectValue('keyRestrictions', $this->keyRestrictions);
    }

    /**
     * Sets the includeTargets property value. A collection of users or groups who are enabled to use the authentication method.
     *  @param array<AuthenticationMethodTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value ): void {
        $this->includeTargets = $value;
    }

    /**
     * Sets the isAttestationEnforced property value. Determines whether attestation must be enforced for FIDO2 security key registration.
     *  @param bool|null $value Value to set for the isAttestationEnforced property.
    */
    public function setIsAttestationEnforced(?bool $value ): void {
        $this->isAttestationEnforced = $value;
    }

    /**
     * Sets the isSelfServiceRegistrationAllowed property value. Determines if users can register new FIDO2 security keys.
     *  @param bool|null $value Value to set for the isSelfServiceRegistrationAllowed property.
    */
    public function setIsSelfServiceRegistrationAllowed(?bool $value ): void {
        $this->isSelfServiceRegistrationAllowed = $value;
    }

    /**
     * Sets the keyRestrictions property value. Controls whether key restrictions are enforced on FIDO2 security keys, either allowing or disallowing certain key types as defined by Authenticator Attestation GUID (AAGUID), an identifier that indicates the type (e.g. make and model) of the authenticator.
     *  @param Fido2KeyRestrictions|null $value Value to set for the keyRestrictions property.
    */
    public function setKeyRestrictions(?Fido2KeyRestrictions $value ): void {
        $this->keyRestrictions = $value;
    }

}
