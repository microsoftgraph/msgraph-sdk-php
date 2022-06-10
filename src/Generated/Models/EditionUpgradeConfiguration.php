<?php

namespace Microsoft\Graph\Models;

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
     * @var EditionUpgradeLicenseType|null $licenseType Edition Upgrade License Type. Possible values are: productKey, licenseFile, notConfigured.
    */
    private ?EditionUpgradeLicenseType $licenseType = null;
    
    /**
     * @var string|null $productKey Edition Upgrade Product Key.
    */
    private ?string $productKey = null;
    
    /**
     * @var Windows10EditionType|null $targetEdition Edition Upgrade Target Edition. Possible values are: windows10Enterprise, windows10EnterpriseN, windows10Education, windows10EducationN, windows10MobileEnterprise, windows10HolographicEnterprise, windows10Professional, windows10ProfessionalN, windows10ProfessionalEducation, windows10ProfessionalEducationN, windows10ProfessionalWorkstation, windows10ProfessionalWorkstationN, notConfigured, windows10Home, windows10HomeChina, windows10HomeN, windows10HomeSingleLanguage, windows10Mobile, windows10IoTCore, windows10IoTCoreCommercial.
    */
    private ?Windows10EditionType $targetEdition = null;
    
    /**
     * Instantiates a new EditionUpgradeConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
            'license' => function (ParseNode $n) use ($o) { $o->setLicense($n->getStringValue()); },
            'licenseType' => function (ParseNode $n) use ($o) { $o->setLicenseType($n->getEnumValue(EditionUpgradeLicenseType::class)); },
            'productKey' => function (ParseNode $n) use ($o) { $o->setProductKey($n->getStringValue()); },
            'targetEdition' => function (ParseNode $n) use ($o) { $o->setTargetEdition($n->getEnumValue(Windows10EditionType::class)); },
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
     * Gets the licenseType property value. Edition Upgrade License Type. Possible values are: productKey, licenseFile, notConfigured.
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
     * Gets the targetEdition property value. Edition Upgrade Target Edition. Possible values are: windows10Enterprise, windows10EnterpriseN, windows10Education, windows10EducationN, windows10MobileEnterprise, windows10HolographicEnterprise, windows10Professional, windows10ProfessionalN, windows10ProfessionalEducation, windows10ProfessionalEducationN, windows10ProfessionalWorkstation, windows10ProfessionalWorkstationN, notConfigured, windows10Home, windows10HomeChina, windows10HomeN, windows10HomeSingleLanguage, windows10Mobile, windows10IoTCore, windows10IoTCoreCommercial.
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
     * Sets the licenseType property value. Edition Upgrade License Type. Possible values are: productKey, licenseFile, notConfigured.
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
     * Sets the targetEdition property value. Edition Upgrade Target Edition. Possible values are: windows10Enterprise, windows10EnterpriseN, windows10Education, windows10EducationN, windows10MobileEnterprise, windows10HolographicEnterprise, windows10Professional, windows10ProfessionalN, windows10ProfessionalEducation, windows10ProfessionalEducationN, windows10ProfessionalWorkstation, windows10ProfessionalWorkstationN, notConfigured, windows10Home, windows10HomeChina, windows10HomeN, windows10HomeSingleLanguage, windows10Mobile, windows10IoTCore, windows10IoTCoreCommercial.
     *  @param Windows10EditionType|null $value Value to set for the targetEdition property.
    */
    public function setTargetEdition(?Windows10EditionType $value ): void {
        $this->targetEdition = $value;
    }

}
