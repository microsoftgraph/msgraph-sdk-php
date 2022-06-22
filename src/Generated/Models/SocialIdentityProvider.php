<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SocialIdentityProvider extends IdentityProviderBase implements Parsable 
{
    /**
     * @var string|null $clientId The client identifier for the application obtained when registering the application with the identity provider. Required.
    */
    private ?string $clientId = null;
    
    /**
     * @var string|null $clientSecret The client secret for the application that is obtained when the application is registered with the identity provider. This is write-only. A read operation returns ****. Required.
    */
    private ?string $clientSecret = null;
    
    /**
     * @var string|null $identityProviderType For a B2B scenario, possible values: Google, Facebook. For a B2C scenario, possible values: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat. Required.
    */
    private ?string $identityProviderType = null;
    
    /**
     * Instantiates a new SocialIdentityProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the clientId property value. The client identifier for the application obtained when registering the application with the identity provider. Required.
     * @return string|null
    */
    public function getClientId(): ?string {
        return $this->clientId;
    }

    /**
     * Gets the clientSecret property value. The client secret for the application that is obtained when the application is registered with the identity provider. This is write-only. A read operation returns ****. Required.
     * @return string|null
    */
    public function getClientSecret(): ?string {
        return $this->clientSecret;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientId' => function (ParseNode $n) use ($o) { $o->setClientId($n->getStringValue()); },
            'clientSecret' => function (ParseNode $n) use ($o) { $o->setClientSecret($n->getStringValue()); },
            'identityProviderType' => function (ParseNode $n) use ($o) { $o->setIdentityProviderType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the identityProviderType property value. For a B2B scenario, possible values: Google, Facebook. For a B2C scenario, possible values: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat. Required.
     * @return string|null
    */
    public function getIdentityProviderType(): ?string {
        return $this->identityProviderType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clientId', $this->clientId);
        $writer->writeStringValue('clientSecret', $this->clientSecret);
        $writer->writeStringValue('identityProviderType', $this->identityProviderType);
    }

    /**
     * Sets the clientId property value. The client identifier for the application obtained when registering the application with the identity provider. Required.
     *  @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value ): void {
        $this->clientId = $value;
    }

    /**
     * Sets the clientSecret property value. The client secret for the application that is obtained when the application is registered with the identity provider. This is write-only. A read operation returns ****. Required.
     *  @param string|null $value Value to set for the clientSecret property.
    */
    public function setClientSecret(?string $value ): void {
        $this->clientSecret = $value;
    }

    /**
     * Sets the identityProviderType property value. For a B2B scenario, possible values: Google, Facebook. For a B2C scenario, possible values: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat. Required.
     *  @param string|null $value Value to set for the identityProviderType property.
    */
    public function setIdentityProviderType(?string $value ): void {
        $this->identityProviderType = $value;
    }

}
