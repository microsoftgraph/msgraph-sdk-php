<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityProvider extends Entity implements Parsable 
{
    /**
     * Instantiates a new identityProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityProvider {
        return new IdentityProvider();
    }

    /**
     * Gets the clientId property value. The client ID for the application. This is the client ID obtained when registering the application with the identity provider. Required. Not nullable.
     * @return string|null
    */
    public function getClientId(): ?string {
        return $this->getBackingStore()->get('clientId');
    }

    /**
     * Gets the clientSecret property value. The client secret for the application. This is the client secret obtained when registering the application with the identity provider. This is write-only. A read operation will return ****.  Required. Not nullable.
     * @return string|null
    */
    public function getClientSecret(): ?string {
        return $this->getBackingStore()->get('clientSecret');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientId' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'clientSecret' => fn(ParseNode $n) => $o->setClientSecret($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the name property value. The display name of the identity provider. Not nullable.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the type property value. The identity provider type is a required field. For B2B scenario: Google, Facebook. For B2C scenario: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat, OpenIDConnect. Not nullable.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clientId', $this->getClientId());
        $writer->writeStringValue('clientSecret', $this->getClientSecret());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the clientId property value. The client ID for the application. This is the client ID obtained when registering the application with the identity provider. Required. Not nullable.
     *  @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value): void {
        $this->getBackingStore()->set('clientId', $value);
    }

    /**
     * Sets the clientSecret property value. The client secret for the application. This is the client secret obtained when registering the application with the identity provider. This is write-only. A read operation will return ****.  Required. Not nullable.
     *  @param string|null $value Value to set for the clientSecret property.
    */
    public function setClientSecret(?string $value): void {
        $this->getBackingStore()->set('clientSecret', $value);
    }

    /**
     * Sets the name property value. The display name of the identity provider. Not nullable.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the type property value. The identity provider type is a required field. For B2B scenario: Google, Facebook. For B2C scenario: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat, OpenIDConnect. Not nullable.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
