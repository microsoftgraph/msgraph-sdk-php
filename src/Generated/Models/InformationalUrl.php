<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class InformationalUrl implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new informationalUrl and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationalUrl
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InformationalUrl {
        return new InformationalUrl();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
            'logoUrl' => fn(ParseNode $n) => $o->setLogoUrl($n->getStringValue()),
            'marketingUrl' => fn(ParseNode $n) => $o->setMarketingUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'privacyStatementUrl' => fn(ParseNode $n) => $o->setPrivacyStatementUrl($n->getStringValue()),
            'supportUrl' => fn(ParseNode $n) => $o->setSupportUrl($n->getStringValue()),
            'termsOfServiceUrl' => fn(ParseNode $n) => $o->setTermsOfServiceUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the logoUrl property value. CDN URL to the application's logo, Read-only.
     * @return string|null
    */
    public function getLogoUrl(): ?string {
        return $this->getBackingStore()->get('logoUrl');
    }

    /**
     * Gets the marketingUrl property value. Link to the application's marketing page. For example, https://www.contoso.com/app/marketing
     * @return string|null
    */
    public function getMarketingUrl(): ?string {
        return $this->getBackingStore()->get('marketingUrl');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the privacyStatementUrl property value. Link to the application's privacy statement. For example, https://www.contoso.com/app/privacy
     * @return string|null
    */
    public function getPrivacyStatementUrl(): ?string {
        return $this->getBackingStore()->get('privacyStatementUrl');
    }

    /**
     * Gets the supportUrl property value. Link to the application's support page. For example, https://www.contoso.com/app/support
     * @return string|null
    */
    public function getSupportUrl(): ?string {
        return $this->getBackingStore()->get('supportUrl');
    }

    /**
     * Gets the termsOfServiceUrl property value. Link to the application's terms of service statement. For example, https://www.contoso.com/app/termsofservice
     * @return string|null
    */
    public function getTermsOfServiceUrl(): ?string {
        return $this->getBackingStore()->get('termsOfServiceUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('logoUrl', $this->getLogoUrl());
        $writer->writeStringValue('marketingUrl', $this->getMarketingUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('privacyStatementUrl', $this->getPrivacyStatementUrl());
        $writer->writeStringValue('supportUrl', $this->getSupportUrl());
        $writer->writeStringValue('termsOfServiceUrl', $this->getTermsOfServiceUrl());
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
     * Sets the logoUrl property value. CDN URL to the application's logo, Read-only.
     * @param string|null $value Value to set for the logoUrl property.
    */
    public function setLogoUrl(?string $value): void {
        $this->getBackingStore()->set('logoUrl', $value);
    }

    /**
     * Sets the marketingUrl property value. Link to the application's marketing page. For example, https://www.contoso.com/app/marketing
     * @param string|null $value Value to set for the marketingUrl property.
    */
    public function setMarketingUrl(?string $value): void {
        $this->getBackingStore()->set('marketingUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the privacyStatementUrl property value. Link to the application's privacy statement. For example, https://www.contoso.com/app/privacy
     * @param string|null $value Value to set for the privacyStatementUrl property.
    */
    public function setPrivacyStatementUrl(?string $value): void {
        $this->getBackingStore()->set('privacyStatementUrl', $value);
    }

    /**
     * Sets the supportUrl property value. Link to the application's support page. For example, https://www.contoso.com/app/support
     * @param string|null $value Value to set for the supportUrl property.
    */
    public function setSupportUrl(?string $value): void {
        $this->getBackingStore()->set('supportUrl', $value);
    }

    /**
     * Sets the termsOfServiceUrl property value. Link to the application's terms of service statement. For example, https://www.contoso.com/app/termsofservice
     * @param string|null $value Value to set for the termsOfServiceUrl property.
    */
    public function setTermsOfServiceUrl(?string $value): void {
        $this->getBackingStore()->set('termsOfServiceUrl', $value);
    }

}
