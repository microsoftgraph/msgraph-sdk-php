<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OptionalClaims implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<OptionalClaim>|null $accessToken The optional claims returned in the JWT access token.
    */
    private ?array $accessToken = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<OptionalClaim>|null $idToken The optional claims returned in the JWT ID token.
    */
    private ?array $idToken = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<OptionalClaim>|null $saml2Token The optional claims returned in the SAML token.
    */
    private ?array $saml2Token = null;
    
    /**
     * Instantiates a new optionalClaims and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.optionalClaims');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OptionalClaims
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OptionalClaims {
        return new OptionalClaims();
    }

    /**
     * Gets the accessToken property value. The optional claims returned in the JWT access token.
     * @return array<OptionalClaim>|null
    */
    public function getAccessToken(): ?array {
        return $this->accessToken;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessToken' => function (ParseNode $n) use ($o) { $o->setAccessToken($n->getCollectionOfObjectValues(array(OptionalClaim::class, 'createFromDiscriminatorValue'))); },
            'idToken' => function (ParseNode $n) use ($o) { $o->setIdToken($n->getCollectionOfObjectValues(array(OptionalClaim::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'saml2Token' => function (ParseNode $n) use ($o) { $o->setSaml2Token($n->getCollectionOfObjectValues(array(OptionalClaim::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the idToken property value. The optional claims returned in the JWT ID token.
     * @return array<OptionalClaim>|null
    */
    public function getIdToken(): ?array {
        return $this->idToken;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the saml2Token property value. The optional claims returned in the SAML token.
     * @return array<OptionalClaim>|null
    */
    public function getSaml2Token(): ?array {
        return $this->saml2Token;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('accessToken', $this->accessToken);
        $writer->writeCollectionOfObjectValues('idToken', $this->idToken);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('saml2Token', $this->saml2Token);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessToken property value. The optional claims returned in the JWT access token.
     *  @param array<OptionalClaim>|null $value Value to set for the accessToken property.
    */
    public function setAccessToken(?array $value ): void {
        $this->accessToken = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the idToken property value. The optional claims returned in the JWT ID token.
     *  @param array<OptionalClaim>|null $value Value to set for the idToken property.
    */
    public function setIdToken(?array $value ): void {
        $this->idToken = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the saml2Token property value. The optional claims returned in the SAML token.
     *  @param array<OptionalClaim>|null $value Value to set for the saml2Token property.
    */
    public function setSaml2Token(?array $value ): void {
        $this->saml2Token = $value;
    }

}
