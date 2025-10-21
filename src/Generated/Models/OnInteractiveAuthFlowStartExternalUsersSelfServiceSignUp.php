<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp extends OnInteractiveAuthFlowStartHandler implements Parsable 
{
    /**
     * Instantiates a new OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onInteractiveAuthFlowStartExternalUsersSelfServiceSignUp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp {
        return new OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isSignUpAllowed' => fn(ParseNode $n) => $o->setIsSignUpAllowed($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isSignUpAllowed property value. Optional. Specifies whether the authentication flow includes an option to sign up (create account) and sign in. Default value is false meaning only sign in is enabled.
     * @return bool|null
    */
    public function getIsSignUpAllowed(): ?bool {
        $val = $this->getBackingStore()->get('isSignUpAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSignUpAllowed'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isSignUpAllowed', $this->getIsSignUpAllowed());
    }

    /**
     * Sets the isSignUpAllowed property value. Optional. Specifies whether the authentication flow includes an option to sign up (create account) and sign in. Default value is false meaning only sign in is enabled.
     * @param bool|null $value Value to set for the isSignUpAllowed property.
    */
    public function setIsSignUpAllowed(?bool $value): void {
        $this->getBackingStore()->set('isSignUpAllowed', $value);
    }

}
