<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityVendorInformation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $provider Specific provider (product/service - not vendor company); for example, WindowsDefenderATP.
    */
    private ?string $provider = null;
    
    /**
     * @var string|null $providerVersion Version of the provider or subprovider, if it exists, that generated the alert. Required
    */
    private ?string $providerVersion = null;
    
    /**
     * @var string|null $subProvider Specific subprovider (under aggregating provider); for example, WindowsDefenderATP.SmartScreen.
    */
    private ?string $subProvider = null;
    
    /**
     * @var string|null $vendor Name of the alert vendor (for example, Microsoft, Dell, FireEye). Required
    */
    private ?string $vendor = null;
    
    /**
     * Instantiates a new securityVendorInformation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.securityVendorInformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityVendorInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityVendorInformation {
        return new SecurityVendorInformation();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'providerVersion' => fn(ParseNode $n) => $o->setProviderVersion($n->getStringValue()),
            'subProvider' => fn(ParseNode $n) => $o->setSubProvider($n->getStringValue()),
            'vendor' => fn(ParseNode $n) => $o->setVendor($n->getStringValue()),
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
     * Gets the provider property value. Specific provider (product/service - not vendor company); for example, WindowsDefenderATP.
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the providerVersion property value. Version of the provider or subprovider, if it exists, that generated the alert. Required
     * @return string|null
    */
    public function getProviderVersion(): ?string {
        return $this->providerVersion;
    }

    /**
     * Gets the subProvider property value. Specific subprovider (under aggregating provider); for example, WindowsDefenderATP.SmartScreen.
     * @return string|null
    */
    public function getSubProvider(): ?string {
        return $this->subProvider;
    }

    /**
     * Gets the vendor property value. Name of the alert vendor (for example, Microsoft, Dell, FireEye). Required
     * @return string|null
    */
    public function getVendor(): ?string {
        return $this->vendor;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('provider', $this->provider);
        $writer->writeStringValue('providerVersion', $this->providerVersion);
        $writer->writeStringValue('subProvider', $this->subProvider);
        $writer->writeStringValue('vendor', $this->vendor);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the provider property value. Specific provider (product/service - not vendor company); for example, WindowsDefenderATP.
     *  @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value ): void {
        $this->provider = $value;
    }

    /**
     * Sets the providerVersion property value. Version of the provider or subprovider, if it exists, that generated the alert. Required
     *  @param string|null $value Value to set for the providerVersion property.
    */
    public function setProviderVersion(?string $value ): void {
        $this->providerVersion = $value;
    }

    /**
     * Sets the subProvider property value. Specific subprovider (under aggregating provider); for example, WindowsDefenderATP.SmartScreen.
     *  @param string|null $value Value to set for the subProvider property.
    */
    public function setSubProvider(?string $value ): void {
        $this->subProvider = $value;
    }

    /**
     * Sets the vendor property value. Name of the alert vendor (for example, Microsoft, Dell, FireEye). Required
     *  @param string|null $value Value to set for the vendor property.
    */
    public function setVendor(?string $value ): void {
        $this->vendor = $value;
    }

}
