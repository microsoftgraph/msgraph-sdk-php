<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationMethod extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethod {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.emailAuthenticationMethod': return new EmailAuthenticationMethod();
                case '#microsoft.graph.fido2AuthenticationMethod': return new Fido2AuthenticationMethod();
                case '#microsoft.graph.microsoftAuthenticatorAuthenticationMethod': return new MicrosoftAuthenticatorAuthenticationMethod();
                case '#microsoft.graph.passwordAuthenticationMethod': return new PasswordAuthenticationMethod();
                case '#microsoft.graph.phoneAuthenticationMethod': return new PhoneAuthenticationMethod();
                case '#microsoft.graph.softwareOathAuthenticationMethod': return new SoftwareOathAuthenticationMethod();
                case '#microsoft.graph.temporaryAccessPassAuthenticationMethod': return new TemporaryAccessPassAuthenticationMethod();
                case '#microsoft.graph.windowsHelloForBusinessAuthenticationMethod': return new WindowsHelloForBusinessAuthenticationMethod();
            }
        }
        return new AuthenticationMethod();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
