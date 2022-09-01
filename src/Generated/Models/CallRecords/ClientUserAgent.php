<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClientUserAgent extends UserAgent implements Parsable 
{
    /**
     * @var string|null $azureADAppId The unique identifier of the Azure AD application used by this endpoint.
    */
    private ?string $azureADAppId = null;
    
    /**
     * @var string|null $communicationServiceId Immutable resource identifier of the Azure Communication Service associated with this endpoint based on Communication Services APIs.
    */
    private ?string $communicationServiceId = null;
    
    /**
     * @var ClientPlatform|null $platform The platform property
    */
    private ?ClientPlatform $platform = null;
    
    /**
     * @var ProductFamily|null $productFamily The productFamily property
    */
    private ?ProductFamily $productFamily = null;
    
    /**
     * Instantiates a new ClientUserAgent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.callRecords.clientUserAgent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClientUserAgent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClientUserAgent {
        return new ClientUserAgent();
    }

    /**
     * Gets the azureADAppId property value. The unique identifier of the Azure AD application used by this endpoint.
     * @return string|null
    */
    public function getAzureADAppId(): ?string {
        return $this->azureADAppId;
    }

    /**
     * Gets the communicationServiceId property value. Immutable resource identifier of the Azure Communication Service associated with this endpoint based on Communication Services APIs.
     * @return string|null
    */
    public function getCommunicationServiceId(): ?string {
        return $this->communicationServiceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureADAppId' => function (ParseNode $n) use ($o) { $o->setAzureADAppId($n->getStringValue()); },
            'communicationServiceId' => function (ParseNode $n) use ($o) { $o->setCommunicationServiceId($n->getStringValue()); },
            'platform' => function (ParseNode $n) use ($o) { $o->setPlatform($n->getEnumValue(ClientPlatform::class)); },
            'productFamily' => function (ParseNode $n) use ($o) { $o->setProductFamily($n->getEnumValue(ProductFamily::class)); },
        ]);
    }

    /**
     * Gets the platform property value. The platform property
     * @return ClientPlatform|null
    */
    public function getPlatform(): ?ClientPlatform {
        return $this->platform;
    }

    /**
     * Gets the productFamily property value. The productFamily property
     * @return ProductFamily|null
    */
    public function getProductFamily(): ?ProductFamily {
        return $this->productFamily;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureADAppId', $this->azureADAppId);
        $writer->writeStringValue('communicationServiceId', $this->communicationServiceId);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeEnumValue('productFamily', $this->productFamily);
    }

    /**
     * Sets the azureADAppId property value. The unique identifier of the Azure AD application used by this endpoint.
     *  @param string|null $value Value to set for the azureADAppId property.
    */
    public function setAzureADAppId(?string $value ): void {
        $this->azureADAppId = $value;
    }

    /**
     * Sets the communicationServiceId property value. Immutable resource identifier of the Azure Communication Service associated with this endpoint based on Communication Services APIs.
     *  @param string|null $value Value to set for the communicationServiceId property.
    */
    public function setCommunicationServiceId(?string $value ): void {
        $this->communicationServiceId = $value;
    }

    /**
     * Sets the platform property value. The platform property
     *  @param ClientPlatform|null $value Value to set for the platform property.
    */
    public function setPlatform(?ClientPlatform $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the productFamily property value. The productFamily property
     *  @param ProductFamily|null $value Value to set for the productFamily property.
    */
    public function setProductFamily(?ProductFamily $value ): void {
        $this->productFamily = $value;
    }

}
