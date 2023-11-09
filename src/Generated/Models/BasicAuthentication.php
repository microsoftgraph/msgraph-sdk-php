<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BasicAuthentication extends ApiAuthenticationConfigurationBase implements Parsable 
{
    /**
     * Instantiates a new basicAuthentication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.basicAuthentication');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BasicAuthentication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BasicAuthentication {
        return new BasicAuthentication();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'username' => fn(ParseNode $n) => $o->setUsername($n->getStringValue()),
        ]);
    }

    /**
     * Gets the password property value. The password. It isn't returned in the responses.
     * @return string|null
    */
    public function getPassword(): ?string {
        $val = $this->getBackingStore()->get('password');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'password'");
    }

    /**
     * Gets the username property value. The username.
     * @return string|null
    */
    public function getUsername(): ?string {
        $val = $this->getBackingStore()->get('username');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'username'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('password', $this->getPassword());
        $writer->writeStringValue('username', $this->getUsername());
    }

    /**
     * Sets the password property value. The password. It isn't returned in the responses.
     * @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->getBackingStore()->set('password', $value);
    }

    /**
     * Sets the username property value. The username.
     * @param string|null $value Value to set for the username property.
    */
    public function setUsername(?string $value): void {
        $this->getBackingStore()->set('username', $value);
    }

}
