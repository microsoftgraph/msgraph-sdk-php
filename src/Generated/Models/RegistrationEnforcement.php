<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RegistrationEnforcement implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AuthenticationMethodsRegistrationCampaign|null $authenticationMethodsRegistrationCampaign Run campaigns to remind users to set up targeted authentication methods.
    */
    private ?AuthenticationMethodsRegistrationCampaign $authenticationMethodsRegistrationCampaign = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new registrationEnforcement and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.registrationEnforcement');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegistrationEnforcement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegistrationEnforcement {
        return new RegistrationEnforcement();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authenticationMethodsRegistrationCampaign property value. Run campaigns to remind users to set up targeted authentication methods.
     * @return AuthenticationMethodsRegistrationCampaign|null
    */
    public function getAuthenticationMethodsRegistrationCampaign(): ?AuthenticationMethodsRegistrationCampaign {
        return $this->authenticationMethodsRegistrationCampaign;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticationMethodsRegistrationCampaign' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethodsRegistrationCampaign($n->getObjectValue(array(AuthenticationMethodsRegistrationCampaign::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
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
        $writer->writeObjectValue('authenticationMethodsRegistrationCampaign', $this->authenticationMethodsRegistrationCampaign);
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
     * Sets the authenticationMethodsRegistrationCampaign property value. Run campaigns to remind users to set up targeted authentication methods.
     *  @param AuthenticationMethodsRegistrationCampaign|null $value Value to set for the authenticationMethodsRegistrationCampaign property.
    */
    public function setAuthenticationMethodsRegistrationCampaign(?AuthenticationMethodsRegistrationCampaign $value ): void {
        $this->authenticationMethodsRegistrationCampaign = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
