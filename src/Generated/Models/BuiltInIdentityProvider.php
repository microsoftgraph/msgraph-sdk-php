<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BuiltInIdentityProvider extends IdentityProviderBase implements Parsable 
{
    /**
     * Instantiates a new BuiltInIdentityProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.builtInIdentityProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BuiltInIdentityProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BuiltInIdentityProvider {
        return new BuiltInIdentityProvider();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identityProviderType' => fn(ParseNode $n) => $o->setIdentityProviderType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the identityProviderType property value. The identity provider type. For a B2B scenario, possible values: AADSignup, MicrosoftAccount, EmailOTP. Required.
     * @return string|null
    */
    public function getIdentityProviderType(): ?string {
        return $this->getBackingStore()->get('identityProviderType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('identityProviderType', $this->getIdentityProviderType());
    }

    /**
     * Sets the identityProviderType property value. The identity provider type. For a B2B scenario, possible values: AADSignup, MicrosoftAccount, EmailOTP. Required.
     *  @param string|null $value Value to set for the identityProviderType property.
    */
    public function setIdentityProviderType(?string $value): void {
        $this->getBackingStore()->set('identityProviderType', $value);
    }

}
