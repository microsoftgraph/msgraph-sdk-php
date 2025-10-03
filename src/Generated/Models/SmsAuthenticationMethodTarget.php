<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SmsAuthenticationMethodTarget extends AuthenticationMethodTarget implements Parsable 
{
    /**
     * Instantiates a new SmsAuthenticationMethodTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SmsAuthenticationMethodTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SmsAuthenticationMethodTarget {
        return new SmsAuthenticationMethodTarget();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isUsableForSignIn' => fn(ParseNode $n) => $o->setIsUsableForSignIn($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isUsableForSignIn property value. Determines if users can use this authentication method to sign in to Microsoft Entra ID. true if users can use this method for primary authentication, otherwise false.
     * @return bool|null
    */
    public function getIsUsableForSignIn(): ?bool {
        $val = $this->getBackingStore()->get('isUsableForSignIn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUsableForSignIn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isUsableForSignIn', $this->getIsUsableForSignIn());
    }

    /**
     * Sets the isUsableForSignIn property value. Determines if users can use this authentication method to sign in to Microsoft Entra ID. true if users can use this method for primary authentication, otherwise false.
     * @param bool|null $value Value to set for the isUsableForSignIn property.
    */
    public function setIsUsableForSignIn(?bool $value): void {
        $this->getBackingStore()->set('isUsableForSignIn', $value);
    }

}
