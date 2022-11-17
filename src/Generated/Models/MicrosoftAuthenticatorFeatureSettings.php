<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MicrosoftAuthenticatorFeatureSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new microsoftAuthenticatorFeatureSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.microsoftAuthenticatorFeatureSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftAuthenticatorFeatureSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftAuthenticatorFeatureSettings {
        return new MicrosoftAuthenticatorFeatureSettings();
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
     * Gets the displayAppInformationRequiredState property value. Determines whether the user's Authenticator app will show them the client app they are signing into.
     * @return AuthenticationMethodFeatureConfiguration|null
    */
    public function getDisplayAppInformationRequiredState(): ?AuthenticationMethodFeatureConfiguration {
        return $this->getBackingStore()->get('displayAppInformationRequiredState');
    }

    /**
     * Gets the displayLocationInformationRequiredState property value. Determines whether the user's Authenticator app will show them the geographic location of where the authentication request originated from.
     * @return AuthenticationMethodFeatureConfiguration|null
    */
    public function getDisplayLocationInformationRequiredState(): ?AuthenticationMethodFeatureConfiguration {
        return $this->getBackingStore()->get('displayLocationInformationRequiredState');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayAppInformationRequiredState' => fn(ParseNode $n) => $o->setDisplayAppInformationRequiredState($n->getObjectValue([AuthenticationMethodFeatureConfiguration::class, 'createFromDiscriminatorValue'])),
            'displayLocationInformationRequiredState' => fn(ParseNode $n) => $o->setDisplayLocationInformationRequiredState($n->getObjectValue([AuthenticationMethodFeatureConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('displayAppInformationRequiredState', $this->getDisplayAppInformationRequiredState());
        $writer->writeObjectValue('displayLocationInformationRequiredState', $this->getDisplayLocationInformationRequiredState());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the displayAppInformationRequiredState property value. Determines whether the user's Authenticator app will show them the client app they are signing into.
     *  @param AuthenticationMethodFeatureConfiguration|null $value Value to set for the displayAppInformationRequiredState property.
    */
    public function setDisplayAppInformationRequiredState(?AuthenticationMethodFeatureConfiguration $value): void {
        $this->getBackingStore()->set('displayAppInformationRequiredState', $value);
    }

    /**
     * Sets the displayLocationInformationRequiredState property value. Determines whether the user's Authenticator app will show them the geographic location of where the authentication request originated from.
     *  @param AuthenticationMethodFeatureConfiguration|null $value Value to set for the displayLocationInformationRequiredState property.
    */
    public function setDisplayLocationInformationRequiredState(?AuthenticationMethodFeatureConfiguration $value): void {
        $this->getBackingStore()->set('displayLocationInformationRequiredState', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
