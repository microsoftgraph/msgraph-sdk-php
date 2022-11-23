<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationMethodConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthenticationMethodConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethodConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethodConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.emailAuthenticationMethodConfiguration': return new EmailAuthenticationMethodConfiguration();
                case '#microsoft.graph.fido2AuthenticationMethodConfiguration': return new Fido2AuthenticationMethodConfiguration();
                case '#microsoft.graph.microsoftAuthenticatorAuthenticationMethodConfiguration': return new MicrosoftAuthenticatorAuthenticationMethodConfiguration();
                case '#microsoft.graph.temporaryAccessPassAuthenticationMethodConfiguration': return new TemporaryAccessPassAuthenticationMethodConfiguration();
                case '#microsoft.graph.x509CertificateAuthenticationMethodConfiguration': return new X509CertificateAuthenticationMethodConfiguration();
            }
        }
        return new AuthenticationMethodConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AuthenticationMethodState::class)),
        ]);
    }

    /**
     * Gets the state property value. The state of the policy. Possible values are: enabled, disabled.
     * @return AuthenticationMethodState|null
    */
    public function getState(): ?AuthenticationMethodState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the state property value. The state of the policy. Possible values are: enabled, disabled.
     *  @param AuthenticationMethodState|null $value Value to set for the state property.
    */
    public function setState(?AuthenticationMethodState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
