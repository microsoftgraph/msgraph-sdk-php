<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SensorSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SensorSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensorSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensorSettings {
        return new SensorSettings();
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
     * Gets the description property value. Description of the sensor.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the domainControllerDnsNames property value. DNS names for the domain controller
     * @return array<string>|null
    */
    public function getDomainControllerDnsNames(): ?array {
        $val = $this->getBackingStore()->get('domainControllerDnsNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainControllerDnsNames'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'domainControllerDnsNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDomainControllerDnsNames($val);
            },
            'isDelayedDeploymentEnabled' => fn(ParseNode $n) => $o->setIsDelayedDeploymentEnabled($n->getBooleanValue()),
            'networkAdapters' => fn(ParseNode $n) => $o->setNetworkAdapters($n->getCollectionOfObjectValues([NetworkAdapter::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isDelayedDeploymentEnabled property value. Indicates whether to delay updates for the sensor.
     * @return bool|null
    */
    public function getIsDelayedDeploymentEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isDelayedDeploymentEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDelayedDeploymentEnabled'");
    }

    /**
     * Gets the networkAdapters property value. The networkAdapters property
     * @return array<NetworkAdapter>|null
    */
    public function getNetworkAdapters(): ?array {
        $val = $this->getBackingStore()->get('networkAdapters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NetworkAdapter::class);
            /** @var array<NetworkAdapter>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkAdapters'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfPrimitiveValues('domainControllerDnsNames', $this->getDomainControllerDnsNames());
        $writer->writeBooleanValue('isDelayedDeploymentEnabled', $this->getIsDelayedDeploymentEnabled());
        $writer->writeCollectionOfObjectValues('networkAdapters', $this->getNetworkAdapters());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the description property value. Description of the sensor.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the domainControllerDnsNames property value. DNS names for the domain controller
     * @param array<string>|null $value Value to set for the domainControllerDnsNames property.
    */
    public function setDomainControllerDnsNames(?array $value): void {
        $this->getBackingStore()->set('domainControllerDnsNames', $value);
    }

    /**
     * Sets the isDelayedDeploymentEnabled property value. Indicates whether to delay updates for the sensor.
     * @param bool|null $value Value to set for the isDelayedDeploymentEnabled property.
    */
    public function setIsDelayedDeploymentEnabled(?bool $value): void {
        $this->getBackingStore()->set('isDelayedDeploymentEnabled', $value);
    }

    /**
     * Sets the networkAdapters property value. The networkAdapters property
     * @param array<NetworkAdapter>|null $value Value to set for the networkAdapters property.
    */
    public function setNetworkAdapters(?array $value): void {
        $this->getBackingStore()->set('networkAdapters', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
