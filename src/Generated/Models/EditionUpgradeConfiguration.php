<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Windows 10 Edition Upgrade configuration.
*/
class EditionUpgradeConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new editionUpgradeConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.editionUpgradeConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EditionUpgradeConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EditionUpgradeConfiguration {
        return new EditionUpgradeConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'license' => fn(ParseNode $n) => $o->setLicense($n->getStringValue()),
            'licenseType' => fn(ParseNode $n) => $o->setLicenseType($n->getEnumValue(EditionUpgradeLicenseType::class)),
            'productKey' => fn(ParseNode $n) => $o->setProductKey($n->getStringValue()),
            'targetEdition' => fn(ParseNode $n) => $o->setTargetEdition($n->getEnumValue(Windows10EditionType::class)),
        ]);
    }

    /**
     * Gets the license property value. Edition Upgrade License File Content.
     * @return string|null
    */
    public function getLicense(): ?string {
        $val = $this->getBackingStore()->get('license');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'license'");
    }

    /**
     * Gets the licenseType property value. Edition Upgrade License type
     * @return EditionUpgradeLicenseType|null
    */
    public function getLicenseType(): ?EditionUpgradeLicenseType {
        $val = $this->getBackingStore()->get('licenseType');
        if (is_null($val) || $val instanceof EditionUpgradeLicenseType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licenseType'");
    }

    /**
     * Gets the productKey property value. Edition Upgrade Product Key.
     * @return string|null
    */
    public function getProductKey(): ?string {
        $val = $this->getBackingStore()->get('productKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productKey'");
    }

    /**
     * Gets the targetEdition property value. Windows 10 Edition type.
     * @return Windows10EditionType|null
    */
    public function getTargetEdition(): ?Windows10EditionType {
        $val = $this->getBackingStore()->get('targetEdition');
        if (is_null($val) || $val instanceof Windows10EditionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetEdition'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('license', $this->getLicense());
        $writer->writeEnumValue('licenseType', $this->getLicenseType());
        $writer->writeStringValue('productKey', $this->getProductKey());
        $writer->writeEnumValue('targetEdition', $this->getTargetEdition());
    }

    /**
     * Sets the license property value. Edition Upgrade License File Content.
     * @param string|null $value Value to set for the license property.
    */
    public function setLicense(?string $value): void {
        $this->getBackingStore()->set('license', $value);
    }

    /**
     * Sets the licenseType property value. Edition Upgrade License type
     * @param EditionUpgradeLicenseType|null $value Value to set for the licenseType property.
    */
    public function setLicenseType(?EditionUpgradeLicenseType $value): void {
        $this->getBackingStore()->set('licenseType', $value);
    }

    /**
     * Sets the productKey property value. Edition Upgrade Product Key.
     * @param string|null $value Value to set for the productKey property.
    */
    public function setProductKey(?string $value): void {
        $this->getBackingStore()->set('productKey', $value);
    }

    /**
     * Sets the targetEdition property value. Windows 10 Edition type.
     * @param Windows10EditionType|null $value Value to set for the targetEdition property.
    */
    public function setTargetEdition(?Windows10EditionType $value): void {
        $this->getBackingStore()->set('targetEdition', $value);
    }

}
