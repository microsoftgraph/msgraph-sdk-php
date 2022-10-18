<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftAuthenticatorFeatureSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AuthenticationMethodFeatureConfiguration|null $displayAppInformationRequiredState Determines whether the user's Authenticator app will show them the client app they are signing into.
    */
    private ?AuthenticationMethodFeatureConfiguration $displayAppInformationRequiredState = null;
    
    /**
     * @var AuthenticationMethodFeatureConfiguration|null $displayLocationInformationRequiredState Determines whether the user's Authenticator app will show them the geographic location of where the authentication request originated from.
    */
    private ?AuthenticationMethodFeatureConfiguration $displayLocationInformationRequiredState = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new microsoftAuthenticatorFeatureSettings and sets the default values.
    */
    public function __construct() {
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayAppInformationRequiredState property value. Determines whether the user's Authenticator app will show them the client app they are signing into.
     * @return AuthenticationMethodFeatureConfiguration|null
    */
    public function getDisplayAppInformationRequiredState(): ?AuthenticationMethodFeatureConfiguration {
        return $this->displayAppInformationRequiredState;
    }

    /**
     * Gets the displayLocationInformationRequiredState property value. Determines whether the user's Authenticator app will show them the geographic location of where the authentication request originated from.
     * @return AuthenticationMethodFeatureConfiguration|null
    */
    public function getDisplayLocationInformationRequiredState(): ?AuthenticationMethodFeatureConfiguration {
        return $this->displayLocationInformationRequiredState;
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
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('displayAppInformationRequiredState', $this->displayAppInformationRequiredState);
        $writer->writeObjectValue('displayLocationInformationRequiredState', $this->displayLocationInformationRequiredState);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the displayAppInformationRequiredState property value. Determines whether the user's Authenticator app will show them the client app they are signing into.
     *  @param AuthenticationMethodFeatureConfiguration|null $value Value to set for the displayAppInformationRequiredState property.
    */
    public function setDisplayAppInformationRequiredState(?AuthenticationMethodFeatureConfiguration $value ): void {
        $this->displayAppInformationRequiredState = $value;
    }

    /**
     * Sets the displayLocationInformationRequiredState property value. Determines whether the user's Authenticator app will show them the geographic location of where the authentication request originated from.
     *  @param AuthenticationMethodFeatureConfiguration|null $value Value to set for the displayLocationInformationRequiredState property.
    */
    public function setDisplayLocationInformationRequiredState(?AuthenticationMethodFeatureConfiguration $value ): void {
        $this->displayLocationInformationRequiredState = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
