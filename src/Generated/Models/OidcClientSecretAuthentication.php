<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OidcClientSecretAuthentication extends OidcClientAuthentication implements Parsable 
{
    /**
     * Instantiates a new OidcClientSecretAuthentication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.oidcClientSecretAuthentication');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OidcClientSecretAuthentication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OidcClientSecretAuthentication {
        return new OidcClientSecretAuthentication();
    }

    /**
     * Gets the clientSecret property value. The clientSecret property
     * @return string|null
    */
    public function getClientSecret(): ?string {
        $val = $this->getBackingStore()->get('clientSecret');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientSecret'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientSecret' => fn(ParseNode $n) => $o->setClientSecret($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clientSecret', $this->getClientSecret());
    }

    /**
     * Sets the clientSecret property value. The clientSecret property
     * @param string|null $value Value to set for the clientSecret property.
    */
    public function setClientSecret(?string $value): void {
        $this->getBackingStore()->set('clientSecret', $value);
    }

}
