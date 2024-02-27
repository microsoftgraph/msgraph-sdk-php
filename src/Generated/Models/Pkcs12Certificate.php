<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Pkcs12Certificate extends ApiAuthenticationConfigurationBase implements Parsable 
{
    /**
     * Instantiates a new Pkcs12Certificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.pkcs12Certificate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Pkcs12Certificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Pkcs12Certificate {
        return new Pkcs12Certificate();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'pkcs12Value' => fn(ParseNode $n) => $o->setPkcs12Value($n->getStringValue()),
        ]);
    }

    /**
     * Gets the password property value. The password for the pfx file. Required. If no password is used, you must still provide a value of ''.
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
     * Gets the pkcs12Value property value. Represents the pfx content that is sent. The value should be a base-64 encoded version of the actual certificate content. Required.
     * @return string|null
    */
    public function getPkcs12Value(): ?string {
        $val = $this->getBackingStore()->get('pkcs12Value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pkcs12Value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('password', $this->getPassword());
        $writer->writeStringValue('pkcs12Value', $this->getPkcs12Value());
    }

    /**
     * Sets the password property value. The password for the pfx file. Required. If no password is used, you must still provide a value of ''.
     * @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->getBackingStore()->set('password', $value);
    }

    /**
     * Sets the pkcs12Value property value. Represents the pfx content that is sent. The value should be a base-64 encoded version of the actual certificate content. Required.
     * @param string|null $value Value to set for the pkcs12Value property.
    */
    public function setPkcs12Value(?string $value): void {
        $this->getBackingStore()->set('pkcs12Value', $value);
    }

}
