<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AuthenticationMethodsRegistrationCampaignIncludeTarget implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new authenticationMethodsRegistrationCampaignIncludeTarget and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethodsRegistrationCampaignIncludeTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethodsRegistrationCampaignIncludeTarget {
        return new AuthenticationMethodsRegistrationCampaignIncludeTarget();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'targetedAuthenticationMethod' => fn(ParseNode $n) => $o->setTargetedAuthenticationMethod($n->getStringValue()),
            'targetType' => fn(ParseNode $n) => $o->setTargetType($n->getEnumValue(AuthenticationMethodTargetType::class)),
        ];
    }

    /**
     * Gets the id property value. The object identifier of an Azure Active Directory user or group.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the targetedAuthenticationMethod property value. The authentication method that the user is prompted to register. The value must be microsoftAuthenticator.
     * @return string|null
    */
    public function getTargetedAuthenticationMethod(): ?string {
        return $this->getBackingStore()->get('targetedAuthenticationMethod');
    }

    /**
     * Gets the targetType property value. The targetType property
     * @return AuthenticationMethodTargetType|null
    */
    public function getTargetType(): ?AuthenticationMethodTargetType {
        return $this->getBackingStore()->get('targetType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('targetedAuthenticationMethod', $this->getTargetedAuthenticationMethod());
        $writer->writeEnumValue('targetType', $this->getTargetType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the id property value. The object identifier of an Azure Active Directory user or group.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the targetedAuthenticationMethod property value. The authentication method that the user is prompted to register. The value must be microsoftAuthenticator.
     * @param string|null $value Value to set for the targetedAuthenticationMethod property.
    */
    public function setTargetedAuthenticationMethod(?string $value): void {
        $this->getBackingStore()->set('targetedAuthenticationMethod', $value);
    }

    /**
     * Sets the targetType property value. The targetType property
     * @param AuthenticationMethodTargetType|null $value Value to set for the targetType property.
    */
    public function setTargetType(?AuthenticationMethodTargetType $value): void {
        $this->getBackingStore()->set('targetType', $value);
    }

}
