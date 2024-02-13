<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SoftwareOathAuthenticationMethod extends AuthenticationMethod implements Parsable 
{
    /**
     * Instantiates a new SoftwareOathAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.softwareOathAuthenticationMethod');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SoftwareOathAuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SoftwareOathAuthenticationMethod {
        return new SoftwareOathAuthenticationMethod();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'secretKey' => fn(ParseNode $n) => $o->setSecretKey($n->getStringValue()),
        ]);
    }

    /**
     * Gets the secretKey property value. The secret key of the method. Always returns null.
     * @return string|null
    */
    public function getSecretKey(): ?string {
        $val = $this->getBackingStore()->get('secretKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secretKey'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('secretKey', $this->getSecretKey());
    }

    /**
     * Sets the secretKey property value. The secret key of the method. Always returns null.
     * @param string|null $value Value to set for the secretKey property.
    */
    public function setSecretKey(?string $value): void {
        $this->getBackingStore()->set('secretKey', $value);
    }

}
