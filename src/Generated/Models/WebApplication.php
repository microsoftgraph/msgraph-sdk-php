<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WebApplication implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new webApplication and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
            'homePageUrl' => fn(ParseNode $n) => $o->setHomePageUrl($n->getStringValue()),
            'implicitGrantSettings' => fn(ParseNode $n) => $o->setImplicitGrantSettings($n->getObjectValue([ImplicitGrantSettings::class, 'createFromDiscriminatorValue'])),
            'logoutUrl' => fn(ParseNode $n) => $o->setLogoutUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'redirectUris' => fn(ParseNode $n) => $o->setRedirectUris($n->getCollectionOfPrimitiveValues()),
            'redirectUriSettings' => fn(ParseNode $n) => $o->setRedirectUriSettings($n->getCollectionOfObjectValues([RedirectUriSettings::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the homePageUrl property value. Home page or landing page of the application.
     * @return string|null
    */
    public function getHomePageUrl(): ?string {
        return $this->getBackingStore()->get('homePageUrl');
    }

    /**
     * Gets the implicitGrantSettings property value. Specifies whether this web application can request tokens using the OAuth 2.0 implicit flow.
     * @return ImplicitGrantSettings|null
    */
    public function getImplicitGrantSettings(): ?ImplicitGrantSettings {
        return $this->getBackingStore()->get('implicitGrantSettings');
    }

    /**
     * Gets the logoutUrl property value. Specifies the URL that will be used by Microsoft's authorization service to logout an user using front-channel, back-channel or SAML logout protocols.
     * @return string|null
    */
    public function getLogoutUrl(): ?string {
        return $this->getBackingStore()->get('logoutUrl');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the redirectUris property value. Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
     * @return array<string>|null
    */
    public function getRedirectUris(): ?array {
        return $this->getBackingStore()->get('redirectUris');
    }

    /**
     * Gets the redirectUriSettings property value. The redirectUriSettings property
     * @return array<RedirectUriSettings>|null
    */
    public function getRedirectUriSettings(): ?array {
        return $this->getBackingStore()->get('redirectUriSettings');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('homePageUrl', $this->getHomePageUrl());
        $writer->writeObjectValue('implicitGrantSettings', $this->getImplicitGrantSettings());
        $writer->writeStringValue('logoutUrl', $this->getLogoutUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('redirectUris', $this->getRedirectUris());
        $writer->writeCollectionOfObjectValues('redirectUriSettings', $this->getRedirectUriSettings());
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
     * Sets the homePageUrl property value. Home page or landing page of the application.
     * @param string|null $value Value to set for the homePageUrl property.
    */
    public function setHomePageUrl(?string $value): void {
        $this->getBackingStore()->set('homePageUrl', $value);
    }

    /**
     * Sets the implicitGrantSettings property value. Specifies whether this web application can request tokens using the OAuth 2.0 implicit flow.
     * @param ImplicitGrantSettings|null $value Value to set for the implicitGrantSettings property.
    */
    public function setImplicitGrantSettings(?ImplicitGrantSettings $value): void {
        $this->getBackingStore()->set('implicitGrantSettings', $value);
    }

    /**
     * Sets the logoutUrl property value. Specifies the URL that will be used by Microsoft's authorization service to logout an user using front-channel, back-channel or SAML logout protocols.
     * @param string|null $value Value to set for the logoutUrl property.
    */
    public function setLogoutUrl(?string $value): void {
        $this->getBackingStore()->set('logoutUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the redirectUris property value. Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
     * @param array<string>|null $value Value to set for the redirectUris property.
    */
    public function setRedirectUris(?array $value): void {
        $this->getBackingStore()->set('redirectUris', $value);
    }

    /**
     * Sets the redirectUriSettings property value. The redirectUriSettings property
     * @param array<RedirectUriSettings>|null $value Value to set for the redirectUriSettings property.
    */
    public function setRedirectUriSettings(?array $value): void {
        $this->getBackingStore()->set('redirectUriSettings', $value);
    }

}
