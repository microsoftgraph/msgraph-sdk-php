<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConfigurationManagerClientEnabledFeatures implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $compliancePolicy Whether compliance policy is managed by Intune */
    private ?bool $compliancePolicy = null;
    
    /** @var bool|null $deviceConfiguration Whether device configuration is managed by Intune */
    private ?bool $deviceConfiguration = null;
    
    /** @var bool|null $inventory Whether inventory is managed by Intune */
    private ?bool $inventory = null;
    
    /** @var bool|null $modernApps Whether modern application is managed by Intune */
    private ?bool $modernApps = null;
    
    /** @var bool|null $resourceAccess Whether resource access is managed by Intune */
    private ?bool $resourceAccess = null;
    
    /** @var bool|null $windowsUpdateForBusiness Whether Windows Update for Business is managed by Intune */
    private ?bool $windowsUpdateForBusiness = null;
    
    /**
     * Instantiates a new configurationManagerClientEnabledFeatures and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationManagerClientEnabledFeatures
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationManagerClientEnabledFeatures {
        return new ConfigurationManagerClientEnabledFeatures();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the compliancePolicy property value. Whether compliance policy is managed by Intune
     * @return bool|null
    */
    public function getCompliancePolicy(): ?bool {
        return $this->compliancePolicy;
    }

    /**
     * Gets the deviceConfiguration property value. Whether device configuration is managed by Intune
     * @return bool|null
    */
    public function getDeviceConfiguration(): ?bool {
        return $this->deviceConfiguration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'compliancePolicy' => function (self $o, ParseNode $n) { $o->setCompliancePolicy($n->getBooleanValue()); },
            'deviceConfiguration' => function (self $o, ParseNode $n) { $o->setDeviceConfiguration($n->getBooleanValue()); },
            'inventory' => function (self $o, ParseNode $n) { $o->setInventory($n->getBooleanValue()); },
            'modernApps' => function (self $o, ParseNode $n) { $o->setModernApps($n->getBooleanValue()); },
            'resourceAccess' => function (self $o, ParseNode $n) { $o->setResourceAccess($n->getBooleanValue()); },
            'windowsUpdateForBusiness' => function (self $o, ParseNode $n) { $o->setWindowsUpdateForBusiness($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the inventory property value. Whether inventory is managed by Intune
     * @return bool|null
    */
    public function getInventory(): ?bool {
        return $this->inventory;
    }

    /**
     * Gets the modernApps property value. Whether modern application is managed by Intune
     * @return bool|null
    */
    public function getModernApps(): ?bool {
        return $this->modernApps;
    }

    /**
     * Gets the resourceAccess property value. Whether resource access is managed by Intune
     * @return bool|null
    */
    public function getResourceAccess(): ?bool {
        return $this->resourceAccess;
    }

    /**
     * Gets the windowsUpdateForBusiness property value. Whether Windows Update for Business is managed by Intune
     * @return bool|null
    */
    public function getWindowsUpdateForBusiness(): ?bool {
        return $this->windowsUpdateForBusiness;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('compliancePolicy', $this->compliancePolicy);
        $writer->writeBooleanValue('deviceConfiguration', $this->deviceConfiguration);
        $writer->writeBooleanValue('inventory', $this->inventory);
        $writer->writeBooleanValue('modernApps', $this->modernApps);
        $writer->writeBooleanValue('resourceAccess', $this->resourceAccess);
        $writer->writeBooleanValue('windowsUpdateForBusiness', $this->windowsUpdateForBusiness);
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
     * Sets the compliancePolicy property value. Whether compliance policy is managed by Intune
     *  @param bool|null $value Value to set for the compliancePolicy property.
    */
    public function setCompliancePolicy(?bool $value ): void {
        $this->compliancePolicy = $value;
    }

    /**
     * Sets the deviceConfiguration property value. Whether device configuration is managed by Intune
     *  @param bool|null $value Value to set for the deviceConfiguration property.
    */
    public function setDeviceConfiguration(?bool $value ): void {
        $this->deviceConfiguration = $value;
    }

    /**
     * Sets the inventory property value. Whether inventory is managed by Intune
     *  @param bool|null $value Value to set for the inventory property.
    */
    public function setInventory(?bool $value ): void {
        $this->inventory = $value;
    }

    /**
     * Sets the modernApps property value. Whether modern application is managed by Intune
     *  @param bool|null $value Value to set for the modernApps property.
    */
    public function setModernApps(?bool $value ): void {
        $this->modernApps = $value;
    }

    /**
     * Sets the resourceAccess property value. Whether resource access is managed by Intune
     *  @param bool|null $value Value to set for the resourceAccess property.
    */
    public function setResourceAccess(?bool $value ): void {
        $this->resourceAccess = $value;
    }

    /**
     * Sets the windowsUpdateForBusiness property value. Whether Windows Update for Business is managed by Intune
     *  @param bool|null $value Value to set for the windowsUpdateForBusiness property.
    */
    public function setWindowsUpdateForBusiness(?bool $value ): void {
        $this->windowsUpdateForBusiness = $value;
    }

}
