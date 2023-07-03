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
 * Contains MSI app properties for a Win32 App.
*/
class Win32LobAppMsiInformation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new win32LobAppMsiInformation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppMsiInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppMsiInformation {
        return new Win32LobAppMsiInformation();
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
            'packageType' => fn(ParseNode $n) => $o->setPackageType($n->getEnumValue(Win32LobAppMsiPackageType::class)),
            'productCode' => fn(ParseNode $n) => $o->setProductCode($n->getStringValue()),
            'productName' => fn(ParseNode $n) => $o->setProductName($n->getStringValue()),
            'productVersion' => fn(ParseNode $n) => $o->setProductVersion($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'requiresReboot' => fn(ParseNode $n) => $o->setRequiresReboot($n->getBooleanValue()),
            'upgradeCode' => fn(ParseNode $n) => $o->setUpgradeCode($n->getStringValue()),
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
     * Gets the packageType property value. Indicates the package type of an MSI Win32LobApp.
     * @return Win32LobAppMsiPackageType|null
    */
    public function getPackageType(): ?Win32LobAppMsiPackageType {
        $val = $this->getBackingStore()->get('packageType');
        if (is_null($val) || $val instanceof Win32LobAppMsiPackageType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageType'");
    }

    /**
     * Gets the productCode property value. The MSI product code.
     * @return string|null
    */
    public function getProductCode(): ?string {
        $val = $this->getBackingStore()->get('productCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productCode'");
    }

    /**
     * Gets the productName property value. The MSI product name.
     * @return string|null
    */
    public function getProductName(): ?string {
        $val = $this->getBackingStore()->get('productName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productName'");
    }

    /**
     * Gets the productVersion property value. The MSI product version.
     * @return string|null
    */
    public function getProductVersion(): ?string {
        $val = $this->getBackingStore()->get('productVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productVersion'");
    }

    /**
     * Gets the publisher property value. The MSI publisher.
     * @return string|null
    */
    public function getPublisher(): ?string {
        $val = $this->getBackingStore()->get('publisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisher'");
    }

    /**
     * Gets the requiresReboot property value. Whether the MSI app requires the machine to reboot to complete installation.
     * @return bool|null
    */
    public function getRequiresReboot(): ?bool {
        $val = $this->getBackingStore()->get('requiresReboot');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiresReboot'");
    }

    /**
     * Gets the upgradeCode property value. The MSI upgrade code.
     * @return string|null
    */
    public function getUpgradeCode(): ?string {
        $val = $this->getBackingStore()->get('upgradeCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'upgradeCode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('packageType', $this->getPackageType());
        $writer->writeStringValue('productCode', $this->getProductCode());
        $writer->writeStringValue('productName', $this->getProductName());
        $writer->writeStringValue('productVersion', $this->getProductVersion());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeBooleanValue('requiresReboot', $this->getRequiresReboot());
        $writer->writeStringValue('upgradeCode', $this->getUpgradeCode());
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
     * Sets the packageType property value. Indicates the package type of an MSI Win32LobApp.
     * @param Win32LobAppMsiPackageType|null $value Value to set for the packageType property.
    */
    public function setPackageType(?Win32LobAppMsiPackageType $value): void {
        $this->getBackingStore()->set('packageType', $value);
    }

    /**
     * Sets the productCode property value. The MSI product code.
     * @param string|null $value Value to set for the productCode property.
    */
    public function setProductCode(?string $value): void {
        $this->getBackingStore()->set('productCode', $value);
    }

    /**
     * Sets the productName property value. The MSI product name.
     * @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value): void {
        $this->getBackingStore()->set('productName', $value);
    }

    /**
     * Sets the productVersion property value. The MSI product version.
     * @param string|null $value Value to set for the productVersion property.
    */
    public function setProductVersion(?string $value): void {
        $this->getBackingStore()->set('productVersion', $value);
    }

    /**
     * Sets the publisher property value. The MSI publisher.
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the requiresReboot property value. Whether the MSI app requires the machine to reboot to complete installation.
     * @param bool|null $value Value to set for the requiresReboot property.
    */
    public function setRequiresReboot(?bool $value): void {
        $this->getBackingStore()->set('requiresReboot', $value);
    }

    /**
     * Sets the upgradeCode property value. The MSI upgrade code.
     * @param string|null $value Value to set for the upgradeCode property.
    */
    public function setUpgradeCode(?string $value): void {
        $this->getBackingStore()->set('upgradeCode', $value);
    }

}
