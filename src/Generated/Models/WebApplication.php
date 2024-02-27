<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WebApplication implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WebApplication and sets the default values.
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'homePageUrl' => fn(ParseNode $n) => $o->setHomePageUrl($n->getStringValue()),
            'implicitGrantSettings' => fn(ParseNode $n) => $o->setImplicitGrantSettings($n->getObjectValue([ImplicitGrantSettings::class, 'createFromDiscriminatorValue'])),
            'logoutUrl' => fn(ParseNode $n) => $o->setLogoutUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'redirectUris' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRedirectUris($val);
            },
            'redirectUriSettings' => fn(ParseNode $n) => $o->setRedirectUriSettings($n->getCollectionOfObjectValues([RedirectUriSettings::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the homePageUrl property value. Home page or landing page of the application.
     * @return string|null
    */
    public function getHomePageUrl(): ?string {
        $val = $this->getBackingStore()->get('homePageUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'homePageUrl'");
    }

    /**
     * Gets the implicitGrantSettings property value. Specifies whether this web application can request tokens using the OAuth 2.0 implicit flow.
     * @return ImplicitGrantSettings|null
    */
    public function getImplicitGrantSettings(): ?ImplicitGrantSettings {
        $val = $this->getBackingStore()->get('implicitGrantSettings');
        if (is_null($val) || $val instanceof ImplicitGrantSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'implicitGrantSettings'");
    }

    /**
     * Gets the logoutUrl property value. Specifies the URL that is used by Microsoft's authorization service to log out a user using front-channel, back-channel or SAML logout protocols.
     * @return string|null
    */
    public function getLogoutUrl(): ?string {
        $val = $this->getBackingStore()->get('logoutUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'logoutUrl'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the redirectUris property value. Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
     * @return array<string>|null
    */
    public function getRedirectUris(): ?array {
        $val = $this->getBackingStore()->get('redirectUris');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'redirectUris'");
    }

    /**
     * Gets the redirectUriSettings property value. The redirectUriSettings property
     * @return array<RedirectUriSettings>|null
    */
    public function getRedirectUriSettings(): ?array {
        $val = $this->getBackingStore()->get('redirectUriSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RedirectUriSettings::class);
            /** @var array<RedirectUriSettings>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'redirectUriSettings'");
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
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
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
     * Sets the logoutUrl property value. Specifies the URL that is used by Microsoft's authorization service to log out a user using front-channel, back-channel or SAML logout protocols.
     * @param string|null $value Value to set for the logoutUrl property.
    */
    public function setLogoutUrl(?string $value): void {
        $this->getBackingStore()->set('logoutUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
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
