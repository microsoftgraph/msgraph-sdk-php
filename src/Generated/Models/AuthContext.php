<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthContext extends SignInContext implements Parsable 
{
    /**
     * Instantiates a new AuthContext and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.authContext');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthContext
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthContext {
        return new AuthContext();
    }

    /**
     * Gets the authenticationContextValue property value. Supported values are c1 through c99.
     * @return string|null
    */
    public function getAuthenticationContextValue(): ?string {
        $val = $this->getBackingStore()->get('authenticationContextValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationContextValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationContextValue' => fn(ParseNode $n) => $o->setAuthenticationContextValue($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('authenticationContextValue', $this->getAuthenticationContextValue());
    }

    /**
     * Sets the authenticationContextValue property value. Supported values are c1 through c99.
     * @param string|null $value Value to set for the authenticationContextValue property.
    */
    public function setAuthenticationContextValue(?string $value): void {
        $this->getBackingStore()->set('authenticationContextValue', $value);
    }

}
