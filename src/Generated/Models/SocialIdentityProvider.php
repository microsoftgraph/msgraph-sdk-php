<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SocialIdentityProvider extends IdentityProviderBase implements Parsable 
{
    /**
     * Instantiates a new socialIdentityProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.socialIdentityProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SocialIdentityProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SocialIdentityProvider {
        return new SocialIdentityProvider();
    }

    /**
     * Gets the clientId property value. The identifier for the client application obtained when registering the application with the identity provider. Required.
     * @return string|null
    */
    public function getClientId(): ?string {
        $val = $this->getBackingStore()->get('clientId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientId'");
    }

    /**
     * Gets the clientSecret property value. The client secret for the application that is obtained when the application is registered with the identity provider. This is write-only. A read operation returns . Required.
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
            'clientId' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'clientSecret' => fn(ParseNode $n) => $o->setClientSecret($n->getStringValue()),
            'identityProviderType' => fn(ParseNode $n) => $o->setIdentityProviderType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the identityProviderType property value. For a B2B scenario, possible values: Google, Facebook. For a B2C scenario, possible values: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat. Required.
     * @return string|null
    */
    public function getIdentityProviderType(): ?string {
        $val = $this->getBackingStore()->get('identityProviderType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityProviderType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clientId', $this->getClientId());
        $writer->writeStringValue('clientSecret', $this->getClientSecret());
        $writer->writeStringValue('identityProviderType', $this->getIdentityProviderType());
    }

    /**
     * Sets the clientId property value. The identifier for the client application obtained when registering the application with the identity provider. Required.
     * @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value): void {
        $this->getBackingStore()->set('clientId', $value);
    }

    /**
     * Sets the clientSecret property value. The client secret for the application that is obtained when the application is registered with the identity provider. This is write-only. A read operation returns . Required.
     * @param string|null $value Value to set for the clientSecret property.
    */
    public function setClientSecret(?string $value): void {
        $this->getBackingStore()->set('clientSecret', $value);
    }

    /**
     * Sets the identityProviderType property value. For a B2B scenario, possible values: Google, Facebook. For a B2C scenario, possible values: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat. Required.
     * @param string|null $value Value to set for the identityProviderType property.
    */
    public function setIdentityProviderType(?string $value): void {
        $this->getBackingStore()->set('identityProviderType', $value);
    }

}
