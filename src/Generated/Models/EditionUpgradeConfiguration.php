<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EditionUpgradeConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var string|null $license Edition Upgrade License File Content.
    */
    private ?string $license = null;
    
    /**
     * @var EditionUpgradeLicenseType|null $licenseType Edition Upgrade License type
    */
    private ?EditionUpgradeLicenseType $licenseType = null;
    
    /**
     * @var string|null $productKey Edition Upgrade Product Key.
    */
    private ?string $productKey = null;
    
    /**
     * @var Windows10EditionType|null $targetEdition Windows 10 Edition type.
    */
    private ?Windows10EditionType $targetEdition = null;
    
    /**
     * Instantiates a new EditionUpgradeConfiguration and sets the default values.
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
     * @return array<string, callable>
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
        return $this->license;
    }

    /**
     * Gets the licenseType property value. Edition Upgrade License type
     * @return EditionUpgradeLicenseType|null
    */
    public function getLicenseType(): ?EditionUpgradeLicenseType {
        return $this->licenseType;
    }

    /**
     * Gets the productKey property value. Edition Upgrade Product Key.
     * @return string|null
    */
    public function getProductKey(): ?string {
        return $this->productKey;
    }

    /**
     * Gets the targetEdition property value. Windows 10 Edition type.
     * @return Windows10EditionType|null
    */
    public function getTargetEdition(): ?Windows10EditionType {
        return $this->targetEdition;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('license', $this->license);
        $writer->writeEnumValue('licenseType', $this->licenseType);
        $writer->writeStringValue('productKey', $this->productKey);
        $writer->writeEnumValue('targetEdition', $this->targetEdition);
    }

    /**
     * Sets the license property value. Edition Upgrade License File Content.
     *  @param string|null $value Value to set for the license property.
    */
    public function setLicense(?string $value ): void {
        $this->license = $value;
    }

    /**
     * Sets the licenseType property value. Edition Upgrade License type
     *  @param EditionUpgradeLicenseType|null $value Value to set for the licenseType property.
    */
    public function setLicenseType(?EditionUpgradeLicenseType $value ): void {
        $this->licenseType = $value;
    }

    /**
     * Sets the productKey property value. Edition Upgrade Product Key.
     *  @param string|null $value Value to set for the productKey property.
    */
    public function setProductKey(?string $value ): void {
        $this->productKey = $value;
    }

    /**
     * Sets the targetEdition property value. Windows 10 Edition type.
     *  @param Windows10EditionType|null $value Value to set for the targetEdition property.
    */
    public function setTargetEdition(?Windows10EditionType $value ): void {
        $this->targetEdition = $value;
    }

}
