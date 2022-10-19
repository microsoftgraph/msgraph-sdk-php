<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImplicitGrantSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $enableAccessTokenIssuance Specifies whether this web application can request an access token using the OAuth 2.0 implicit flow.
    */
    private ?bool $enableAccessTokenIssuance = null;
    
    /**
     * @var bool|null $enableIdTokenIssuance Specifies whether this web application can request an ID token using the OAuth 2.0 implicit flow.
    */
    private ?bool $enableIdTokenIssuance = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new implicitGrantSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.implicitGrantSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImplicitGrantSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImplicitGrantSettings {
        return new ImplicitGrantSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the enableAccessTokenIssuance property value. Specifies whether this web application can request an access token using the OAuth 2.0 implicit flow.
     * @return bool|null
    */
    public function getEnableAccessTokenIssuance(): ?bool {
        return $this->enableAccessTokenIssuance;
    }

    /**
     * Gets the enableIdTokenIssuance property value. Specifies whether this web application can request an ID token using the OAuth 2.0 implicit flow.
     * @return bool|null
    */
    public function getEnableIdTokenIssuance(): ?bool {
        return $this->enableIdTokenIssuance;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enableAccessTokenIssuance' => fn(ParseNode $n) => $o->setEnableAccessTokenIssuance($n->getBooleanValue()),
            'enableIdTokenIssuance' => fn(ParseNode $n) => $o->setEnableIdTokenIssuance($n->getBooleanValue()),
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
        $writer->writeBooleanValue('enableAccessTokenIssuance', $this->enableAccessTokenIssuance);
        $writer->writeBooleanValue('enableIdTokenIssuance', $this->enableIdTokenIssuance);
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
     * Sets the enableAccessTokenIssuance property value. Specifies whether this web application can request an access token using the OAuth 2.0 implicit flow.
     *  @param bool|null $value Value to set for the enableAccessTokenIssuance property.
    */
    public function setEnableAccessTokenIssuance(?bool $value ): void {
        $this->enableAccessTokenIssuance = $value;
    }

    /**
     * Sets the enableIdTokenIssuance property value. Specifies whether this web application can request an ID token using the OAuth 2.0 implicit flow.
     *  @param bool|null $value Value to set for the enableIdTokenIssuance property.
    */
    public function setEnableIdTokenIssuance(?bool $value ): void {
        $this->enableIdTokenIssuance = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
