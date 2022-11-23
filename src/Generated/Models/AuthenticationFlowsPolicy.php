<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationFlowsPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new authenticationFlowsPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationFlowsPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationFlowsPolicy {
        return new AuthenticationFlowsPolicy();
    }

    /**
     * Gets the description property value. Inherited property. A description of the policy. Optional. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Inherited property. The human-readable name of the policy. Optional. Read-only.
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'selfServiceSignUp' => fn(ParseNode $n) => $o->setSelfServiceSignUp($n->getObjectValue([SelfServiceSignUpAuthenticationFlowConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the selfServiceSignUp property value. Contains selfServiceSignUpAuthenticationFlowConfiguration settings that convey whether self-service sign-up is enabled or disabled. Optional. Read-only.
     * @return SelfServiceSignUpAuthenticationFlowConfiguration|null
    */
    public function getSelfServiceSignUp(): ?SelfServiceSignUpAuthenticationFlowConfiguration {
        return $this->getBackingStore()->get('selfServiceSignUp');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('selfServiceSignUp', $this->getSelfServiceSignUp());
    }

    /**
     * Sets the description property value. Inherited property. A description of the policy. Optional. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Inherited property. The human-readable name of the policy. Optional. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the selfServiceSignUp property value. Contains selfServiceSignUpAuthenticationFlowConfiguration settings that convey whether self-service sign-up is enabled or disabled. Optional. Read-only.
     *  @param SelfServiceSignUpAuthenticationFlowConfiguration|null $value Value to set for the selfServiceSignUp property.
    */
    public function setSelfServiceSignUp(?SelfServiceSignUpAuthenticationFlowConfiguration $value): void {
        $this->getBackingStore()->set('selfServiceSignUp', $value);
    }

}
