<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationFlowsPolicy extends Entity 
{
    /** @var string|null $description Inherited property. A description of the policy. Optional. Read-only. */
    private ?string $description = null;
    
    /** @var string|null $displayName Inherited property. The human-readable name of the policy. Optional. Read-only. */
    private ?string $displayName = null;
    
    /** @var SelfServiceSignUpAuthenticationFlowConfiguration|null $selfServiceSignUp Contains selfServiceSignUpAuthenticationFlowConfiguration settings that convey whether self-service sign-up is enabled or disabled. Optional. Read-only. */
    private ?SelfServiceSignUpAuthenticationFlowConfiguration $selfServiceSignUp = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationFlowsPolicy {
        return new AuthenticationFlowsPolicy();
    }

    /**
     * Gets the description property value. Inherited property. A description of the policy. Optional. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Inherited property. The human-readable name of the policy. Optional. Read-only.
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
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'selfServiceSignUp' => function (self $o, ParseNode $n) { $o->setSelfServiceSignUp($n->getObjectValue(SelfServiceSignUpAuthenticationFlowConfiguration::class)); },
        ]);
    }

    /**
     * Gets the selfServiceSignUp property value. Contains selfServiceSignUpAuthenticationFlowConfiguration settings that convey whether self-service sign-up is enabled or disabled. Optional. Read-only.
     * @return SelfServiceSignUpAuthenticationFlowConfiguration|null
    */
    public function getSelfServiceSignUp(): ?SelfServiceSignUpAuthenticationFlowConfiguration {
        return $this->selfServiceSignUp;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('selfServiceSignUp', $this->selfServiceSignUp);
    }

    /**
     * Sets the description property value. Inherited property. A description of the policy. Optional. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Inherited property. The human-readable name of the policy. Optional. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the selfServiceSignUp property value. Contains selfServiceSignUpAuthenticationFlowConfiguration settings that convey whether self-service sign-up is enabled or disabled. Optional. Read-only.
     *  @param SelfServiceSignUpAuthenticationFlowConfiguration|null $value Value to set for the selfServiceSignUp property.
    */
    public function setSelfServiceSignUp(?SelfServiceSignUpAuthenticationFlowConfiguration $value ): void {
        $this->selfServiceSignUp = $value;
    }

}
