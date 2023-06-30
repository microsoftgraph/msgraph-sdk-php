<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SecurityVendorInformation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new securityVendorInformation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the backingStore property value. Stores model information.
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
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the provider property value. Specific provider (product/service - not vendor company); for example, WindowsDefenderATP.
     * @return string|null
    */
    public function getProvider(): ?string {
        $val = $this->getBackingStore()->get('provider');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provider'");
    }

    /**
     * Gets the providerVersion property value. Version of the provider or subprovider, if it exists, that generated the alert. Required
     * @return string|null
    */
    public function getProviderVersion(): ?string {
        $val = $this->getBackingStore()->get('providerVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'providerVersion'");
    }

    /**
     * Gets the subProvider property value. Specific subprovider (under aggregating provider); for example, WindowsDefenderATP.SmartScreen.
     * @return string|null
    */
    public function getSubProvider(): ?string {
        $val = $this->getBackingStore()->get('subProvider');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subProvider'");
    }

    /**
     * Gets the vendor property value. Name of the alert vendor (for example, Microsoft, Dell, FireEye). Required
     * @return string|null
    */
    public function getVendor(): ?string {
        $val = $this->getBackingStore()->get('vendor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendor'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeStringValue('providerVersion', $this->getProviderVersion());
        $writer->writeStringValue('subProvider', $this->getSubProvider());
        $writer->writeStringValue('vendor', $this->getVendor());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the provider property value. Specific provider (product/service - not vendor company); for example, WindowsDefenderATP.
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->getBackingStore()->set('provider', $value);
    }

    /**
     * Sets the providerVersion property value. Version of the provider or subprovider, if it exists, that generated the alert. Required
     * @param string|null $value Value to set for the providerVersion property.
    */
    public function setProviderVersion(?string $value): void {
        $this->getBackingStore()->set('providerVersion', $value);
    }

    /**
     * Sets the subProvider property value. Specific subprovider (under aggregating provider); for example, WindowsDefenderATP.SmartScreen.
     * @param string|null $value Value to set for the subProvider property.
    */
    public function setSubProvider(?string $value): void {
        $this->getBackingStore()->set('subProvider', $value);
    }

    /**
     * Sets the vendor property value. Name of the alert vendor (for example, Microsoft, Dell, FireEye). Required
     * @param string|null $value Value to set for the vendor property.
    */
    public function setVendor(?string $value): void {
        $this->getBackingStore()->set('vendor', $value);
    }

}
