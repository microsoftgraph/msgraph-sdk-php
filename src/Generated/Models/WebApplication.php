<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WebApplication implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $homePageUrl Home page or landing page of the application.
    */
    private ?string $homePageUrl = null;
    
    /**
     * @var ImplicitGrantSettings|null $implicitGrantSettings Specifies whether this web application can request tokens using the OAuth 2.0 implicit flow.
    */
    private ?ImplicitGrantSettings $implicitGrantSettings = null;
    
    /**
     * @var string|null $logoutUrl Specifies the URL that will be used by Microsoft's authorization service to logout an user using front-channel, back-channel or SAML logout protocols.
    */
    private ?string $logoutUrl = null;
    
    /**
     * @var array<string>|null $redirectUris Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
    */
    private ?array $redirectUris = null;
    
    /**
     * Instantiates a new webApplication and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebApplication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebApplication {
        return new WebApplication();
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
            'homePageUrl' => function (ParseNode $n) use ($o) { $o->setHomePageUrl($n->getStringValue()); },
            'implicitGrantSettings' => function (ParseNode $n) use ($o) { $o->setImplicitGrantSettings($n->getObjectValue(array(ImplicitGrantSettings::class, 'createFromDiscriminatorValue'))); },
            'logoutUrl' => function (ParseNode $n) use ($o) { $o->setLogoutUrl($n->getStringValue()); },
            'redirectUris' => function (ParseNode $n) use ($o) { $o->setRedirectUris($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the homePageUrl property value. Home page or landing page of the application.
     * @return string|null
    */
    public function getHomePageUrl(): ?string {
        return $this->homePageUrl;
    }

    /**
     * Gets the implicitGrantSettings property value. Specifies whether this web application can request tokens using the OAuth 2.0 implicit flow.
     * @return ImplicitGrantSettings|null
    */
    public function getImplicitGrantSettings(): ?ImplicitGrantSettings {
        return $this->implicitGrantSettings;
    }

    /**
     * Gets the logoutUrl property value. Specifies the URL that will be used by Microsoft's authorization service to logout an user using front-channel, back-channel or SAML logout protocols.
     * @return string|null
    */
    public function getLogoutUrl(): ?string {
        return $this->logoutUrl;
    }

    /**
     * Gets the redirectUris property value. Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
     * @return array<string>|null
    */
    public function getRedirectUris(): ?array {
        return $this->redirectUris;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('homePageUrl', $this->homePageUrl);
        $writer->writeObjectValue('implicitGrantSettings', $this->implicitGrantSettings);
        $writer->writeStringValue('logoutUrl', $this->logoutUrl);
        $writer->writeCollectionOfPrimitiveValues('redirectUris', $this->redirectUris);
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
     * Sets the homePageUrl property value. Home page or landing page of the application.
     *  @param string|null $value Value to set for the homePageUrl property.
    */
    public function setHomePageUrl(?string $value ): void {
        $this->homePageUrl = $value;
    }

    /**
     * Sets the implicitGrantSettings property value. Specifies whether this web application can request tokens using the OAuth 2.0 implicit flow.
     *  @param ImplicitGrantSettings|null $value Value to set for the implicitGrantSettings property.
    */
    public function setImplicitGrantSettings(?ImplicitGrantSettings $value ): void {
        $this->implicitGrantSettings = $value;
    }

    /**
     * Sets the logoutUrl property value. Specifies the URL that will be used by Microsoft's authorization service to logout an user using front-channel, back-channel or SAML logout protocols.
     *  @param string|null $value Value to set for the logoutUrl property.
    */
    public function setLogoutUrl(?string $value ): void {
        $this->logoutUrl = $value;
    }

    /**
     * Sets the redirectUris property value. Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
     *  @param array<string>|null $value Value to set for the redirectUris property.
    */
    public function setRedirectUris(?array $value ): void {
        $this->redirectUris = $value;
    }

}
