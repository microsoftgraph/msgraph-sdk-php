<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * configuration Manager client enabled features
*/
class ConfigurationManagerClientEnabledFeatures implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ConfigurationManagerClientEnabledFeatures and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationManagerClientEnabledFeatures
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationManagerClientEnabledFeatures {
        return new ConfigurationManagerClientEnabledFeatures();
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
     * Gets the compliancePolicy property value. Whether compliance policy is managed by Intune
     * @return bool|null
    */
    public function getCompliancePolicy(): ?bool {
        $val = $this->getBackingStore()->get('compliancePolicy');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliancePolicy'");
    }

    /**
     * Gets the deviceConfiguration property value. Whether device configuration is managed by Intune
     * @return bool|null
    */
    public function getDeviceConfiguration(): ?bool {
        $val = $this->getBackingStore()->get('deviceConfiguration');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceConfiguration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'compliancePolicy' => fn(ParseNode $n) => $o->setCompliancePolicy($n->getBooleanValue()),
            'deviceConfiguration' => fn(ParseNode $n) => $o->setDeviceConfiguration($n->getBooleanValue()),
            'inventory' => fn(ParseNode $n) => $o->setInventory($n->getBooleanValue()),
            'modernApps' => fn(ParseNode $n) => $o->setModernApps($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resourceAccess' => fn(ParseNode $n) => $o->setResourceAccess($n->getBooleanValue()),
            'windowsUpdateForBusiness' => fn(ParseNode $n) => $o->setWindowsUpdateForBusiness($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the inventory property value. Whether inventory is managed by Intune
     * @return bool|null
    */
    public function getInventory(): ?bool {
        $val = $this->getBackingStore()->get('inventory');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inventory'");
    }

    /**
     * Gets the modernApps property value. Whether modern application is managed by Intune
     * @return bool|null
    */
    public function getModernApps(): ?bool {
        $val = $this->getBackingStore()->get('modernApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modernApps'");
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
     * Gets the resourceAccess property value. Whether resource access is managed by Intune
     * @return bool|null
    */
    public function getResourceAccess(): ?bool {
        $val = $this->getBackingStore()->get('resourceAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceAccess'");
    }

    /**
     * Gets the windowsUpdateForBusiness property value. Whether Windows Update for Business is managed by Intune
     * @return bool|null
    */
    public function getWindowsUpdateForBusiness(): ?bool {
        $val = $this->getBackingStore()->get('windowsUpdateForBusiness');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsUpdateForBusiness'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('compliancePolicy', $this->getCompliancePolicy());
        $writer->writeBooleanValue('deviceConfiguration', $this->getDeviceConfiguration());
        $writer->writeBooleanValue('inventory', $this->getInventory());
        $writer->writeBooleanValue('modernApps', $this->getModernApps());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('resourceAccess', $this->getResourceAccess());
        $writer->writeBooleanValue('windowsUpdateForBusiness', $this->getWindowsUpdateForBusiness());
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
     * Sets the compliancePolicy property value. Whether compliance policy is managed by Intune
     * @param bool|null $value Value to set for the compliancePolicy property.
    */
    public function setCompliancePolicy(?bool $value): void {
        $this->getBackingStore()->set('compliancePolicy', $value);
    }

    /**
     * Sets the deviceConfiguration property value. Whether device configuration is managed by Intune
     * @param bool|null $value Value to set for the deviceConfiguration property.
    */
    public function setDeviceConfiguration(?bool $value): void {
        $this->getBackingStore()->set('deviceConfiguration', $value);
    }

    /**
     * Sets the inventory property value. Whether inventory is managed by Intune
     * @param bool|null $value Value to set for the inventory property.
    */
    public function setInventory(?bool $value): void {
        $this->getBackingStore()->set('inventory', $value);
    }

    /**
     * Sets the modernApps property value. Whether modern application is managed by Intune
     * @param bool|null $value Value to set for the modernApps property.
    */
    public function setModernApps(?bool $value): void {
        $this->getBackingStore()->set('modernApps', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resourceAccess property value. Whether resource access is managed by Intune
     * @param bool|null $value Value to set for the resourceAccess property.
    */
    public function setResourceAccess(?bool $value): void {
        $this->getBackingStore()->set('resourceAccess', $value);
    }

    /**
     * Sets the windowsUpdateForBusiness property value. Whether Windows Update for Business is managed by Intune
     * @param bool|null $value Value to set for the windowsUpdateForBusiness property.
    */
    public function setWindowsUpdateForBusiness(?bool $value): void {
        $this->getBackingStore()->set('windowsUpdateForBusiness', $value);
    }

}
