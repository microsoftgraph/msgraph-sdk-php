<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftAuthenticatorAuthenticationMethodTarget extends AuthenticationMethodTarget implements Parsable 
{
    /**
     * Instantiates a new microsoftAuthenticatorAuthenticationMethodTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftAuthenticatorAuthenticationMethodTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftAuthenticatorAuthenticationMethodTarget {
        return new MicrosoftAuthenticatorAuthenticationMethodTarget();
    }

    /**
     * Gets the authenticationMode property value. The authenticationMode property
     * @return MicrosoftAuthenticatorAuthenticationMode|null
    */
    public function getAuthenticationMode(): ?MicrosoftAuthenticatorAuthenticationMode {
        $val = $this->getBackingStore()->get('authenticationMode');
        if (is_null($val) || $val instanceof MicrosoftAuthenticatorAuthenticationMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMode' => fn(ParseNode $n) => $o->setAuthenticationMode($n->getEnumValue(MicrosoftAuthenticatorAuthenticationMode::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMode', $this->getAuthenticationMode());
    }

    /**
     * Sets the authenticationMode property value. The authenticationMode property
     * @param MicrosoftAuthenticatorAuthenticationMode|null $value Value to set for the authenticationMode property.
    */
    public function setAuthenticationMode(?MicrosoftAuthenticatorAuthenticationMode $value): void {
        $this->getBackingStore()->set('authenticationMode', $value);
    }

}
