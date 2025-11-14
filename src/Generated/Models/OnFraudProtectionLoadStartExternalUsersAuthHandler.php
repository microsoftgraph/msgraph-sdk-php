<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnFraudProtectionLoadStartExternalUsersAuthHandler extends OnFraudProtectionLoadStartHandler implements Parsable 
{
    /**
     * Instantiates a new OnFraudProtectionLoadStartExternalUsersAuthHandler and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onFraudProtectionLoadStartExternalUsersAuthHandler');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnFraudProtectionLoadStartExternalUsersAuthHandler
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnFraudProtectionLoadStartExternalUsersAuthHandler {
        return new OnFraudProtectionLoadStartExternalUsersAuthHandler();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'signUp' => fn(ParseNode $n) => $o->setSignUp($n->getObjectValue([FraudProtectionConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the signUp property value. Specifies the fraud protection configuration for sign-up events.
     * @return FraudProtectionConfiguration|null
    */
    public function getSignUp(): ?FraudProtectionConfiguration {
        $val = $this->getBackingStore()->get('signUp');
        if (is_null($val) || $val instanceof FraudProtectionConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signUp'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('signUp', $this->getSignUp());
    }

    /**
     * Sets the signUp property value. Specifies the fraud protection configuration for sign-up events.
     * @param FraudProtectionConfiguration|null $value Value to set for the signUp property.
    */
    public function setSignUp(?FraudProtectionConfiguration $value): void {
        $this->getBackingStore()->set('signUp', $value);
    }

}
