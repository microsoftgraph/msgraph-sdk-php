<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationalUrl implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $logoUrl CDN URL to the application's logo, Read-only.
    */
    private ?string $logoUrl = null;
    
    /**
     * @var string|null $marketingUrl Link to the application's marketing page. For example, https://www.contoso.com/app/marketing
    */
    private ?string $marketingUrl = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $privacyStatementUrl Link to the application's privacy statement. For example, https://www.contoso.com/app/privacy
    */
    private ?string $privacyStatementUrl = null;
    
    /**
     * @var string|null $supportUrl Link to the application's support page. For example, https://www.contoso.com/app/support
    */
    private ?string $supportUrl = null;
    
    /**
     * @var string|null $termsOfServiceUrl Link to the application's terms of service statement. For example, https://www.contoso.com/app/termsofservice
    */
    private ?string $termsOfServiceUrl = null;
    
    /**
     * Instantiates a new informationalUrl and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.informationalUrl');
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
            'logoUrl' => function (ParseNode $n) use ($o) { $o->setLogoUrl($n->getStringValue()); },
            'marketingUrl' => function (ParseNode $n) use ($o) { $o->setMarketingUrl($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'privacyStatementUrl' => function (ParseNode $n) use ($o) { $o->setPrivacyStatementUrl($n->getStringValue()); },
            'supportUrl' => function (ParseNode $n) use ($o) { $o->setSupportUrl($n->getStringValue()); },
            'termsOfServiceUrl' => function (ParseNode $n) use ($o) { $o->setTermsOfServiceUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the logoUrl property value. CDN URL to the application's logo, Read-only.
     * @return string|null
    */
    public function getLogoUrl(): ?string {
        return $this->logoUrl;
    }

    /**
     * Gets the marketingUrl property value. Link to the application's marketing page. For example, https://www.contoso.com/app/marketing
     * @return string|null
    */
    public function getMarketingUrl(): ?string {
        return $this->marketingUrl;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the privacyStatementUrl property value. Link to the application's privacy statement. For example, https://www.contoso.com/app/privacy
     * @return string|null
    */
    public function getPrivacyStatementUrl(): ?string {
        return $this->privacyStatementUrl;
    }

    /**
     * Gets the supportUrl property value. Link to the application's support page. For example, https://www.contoso.com/app/support
     * @return string|null
    */
    public function getSupportUrl(): ?string {
        return $this->supportUrl;
    }

    /**
     * Gets the termsOfServiceUrl property value. Link to the application's terms of service statement. For example, https://www.contoso.com/app/termsofservice
     * @return string|null
    */
    public function getTermsOfServiceUrl(): ?string {
        return $this->termsOfServiceUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('logoUrl', $this->logoUrl);
        $writer->writeStringValue('marketingUrl', $this->marketingUrl);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('privacyStatementUrl', $this->privacyStatementUrl);
        $writer->writeStringValue('supportUrl', $this->supportUrl);
        $writer->writeStringValue('termsOfServiceUrl', $this->termsOfServiceUrl);
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
     * Sets the logoUrl property value. CDN URL to the application's logo, Read-only.
     *  @param string|null $value Value to set for the logoUrl property.
    */
    public function setLogoUrl(?string $value ): void {
        $this->logoUrl = $value;
    }

    /**
     * Sets the marketingUrl property value. Link to the application's marketing page. For example, https://www.contoso.com/app/marketing
     *  @param string|null $value Value to set for the marketingUrl property.
    */
    public function setMarketingUrl(?string $value ): void {
        $this->marketingUrl = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the privacyStatementUrl property value. Link to the application's privacy statement. For example, https://www.contoso.com/app/privacy
     *  @param string|null $value Value to set for the privacyStatementUrl property.
    */
    public function setPrivacyStatementUrl(?string $value ): void {
        $this->privacyStatementUrl = $value;
    }

    /**
     * Sets the supportUrl property value. Link to the application's support page. For example, https://www.contoso.com/app/support
     *  @param string|null $value Value to set for the supportUrl property.
    */
    public function setSupportUrl(?string $value ): void {
        $this->supportUrl = $value;
    }

    /**
     * Sets the termsOfServiceUrl property value. Link to the application's terms of service statement. For example, https://www.contoso.com/app/termsofservice
     *  @param string|null $value Value to set for the termsOfServiceUrl property.
    */
    public function setTermsOfServiceUrl(?string $value ): void {
        $this->termsOfServiceUrl = $value;
    }

}
