<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppMsiInformation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Win32LobAppMsiPackageType|null $packageType The MSI package type. Possible values are: perMachine, perUser, dualPurpose.
    */
    private ?Win32LobAppMsiPackageType $packageType = null;
    
    /**
     * @var string|null $productCode The MSI product code.
    */
    private ?string $productCode = null;
    
    /**
     * @var string|null $productName The MSI product name.
    */
    private ?string $productName = null;
    
    /**
     * @var string|null $productVersion The MSI product version.
    */
    private ?string $productVersion = null;
    
    /**
     * @var string|null $publisher The MSI publisher.
    */
    private ?string $publisher = null;
    
    /**
     * @var bool|null $requiresReboot Whether the MSI app requires the machine to reboot to complete installation.
    */
    private ?bool $requiresReboot = null;
    
    /**
     * @var string|null $upgradeCode The MSI upgrade code.
    */
    private ?string $upgradeCode = null;
    
    /**
     * Instantiates a new win32LobAppMsiInformation and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
            'packageType' => function (ParseNode $n) use ($o) { $o->setPackageType($n->getEnumValue(Win32LobAppMsiPackageType::class)); },
            'productCode' => function (ParseNode $n) use ($o) { $o->setProductCode($n->getStringValue()); },
            'productName' => function (ParseNode $n) use ($o) { $o->setProductName($n->getStringValue()); },
            'productVersion' => function (ParseNode $n) use ($o) { $o->setProductVersion($n->getStringValue()); },
            'publisher' => function (ParseNode $n) use ($o) { $o->setPublisher($n->getStringValue()); },
            'requiresReboot' => function (ParseNode $n) use ($o) { $o->setRequiresReboot($n->getBooleanValue()); },
            'upgradeCode' => function (ParseNode $n) use ($o) { $o->setUpgradeCode($n->getStringValue()); },
        ];
    }

    /**
     * Gets the packageType property value. The MSI package type. Possible values are: perMachine, perUser, dualPurpose.
     * @return Win32LobAppMsiPackageType|null
    */
    public function getPackageType(): ?Win32LobAppMsiPackageType {
        return $this->packageType;
    }

    /**
     * Gets the productCode property value. The MSI product code.
     * @return string|null
    */
    public function getProductCode(): ?string {
        return $this->productCode;
    }

    /**
     * Gets the productName property value. The MSI product name.
     * @return string|null
    */
    public function getProductName(): ?string {
        return $this->productName;
    }

    /**
     * Gets the productVersion property value. The MSI product version.
     * @return string|null
    */
    public function getProductVersion(): ?string {
        return $this->productVersion;
    }

    /**
     * Gets the publisher property value. The MSI publisher.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Gets the requiresReboot property value. Whether the MSI app requires the machine to reboot to complete installation.
     * @return bool|null
    */
    public function getRequiresReboot(): ?bool {
        return $this->requiresReboot;
    }

    /**
     * Gets the upgradeCode property value. The MSI upgrade code.
     * @return string|null
    */
    public function getUpgradeCode(): ?string {
        return $this->upgradeCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('packageType', $this->packageType);
        $writer->writeStringValue('productCode', $this->productCode);
        $writer->writeStringValue('productName', $this->productName);
        $writer->writeStringValue('productVersion', $this->productVersion);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeBooleanValue('requiresReboot', $this->requiresReboot);
        $writer->writeStringValue('upgradeCode', $this->upgradeCode);
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
     * Sets the packageType property value. The MSI package type. Possible values are: perMachine, perUser, dualPurpose.
     *  @param Win32LobAppMsiPackageType|null $value Value to set for the packageType property.
    */
    public function setPackageType(?Win32LobAppMsiPackageType $value ): void {
        $this->packageType = $value;
    }

    /**
     * Sets the productCode property value. The MSI product code.
     *  @param string|null $value Value to set for the productCode property.
    */
    public function setProductCode(?string $value ): void {
        $this->productCode = $value;
    }

    /**
     * Sets the productName property value. The MSI product name.
     *  @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value ): void {
        $this->productName = $value;
    }

    /**
     * Sets the productVersion property value. The MSI product version.
     *  @param string|null $value Value to set for the productVersion property.
    */
    public function setProductVersion(?string $value ): void {
        $this->productVersion = $value;
    }

    /**
     * Sets the publisher property value. The MSI publisher.
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

    /**
     * Sets the requiresReboot property value. Whether the MSI app requires the machine to reboot to complete installation.
     *  @param bool|null $value Value to set for the requiresReboot property.
    */
    public function setRequiresReboot(?bool $value ): void {
        $this->requiresReboot = $value;
    }

    /**
     * Sets the upgradeCode property value. The MSI upgrade code.
     *  @param string|null $value Value to set for the upgradeCode property.
    */
    public function setUpgradeCode(?string $value ): void {
        $this->upgradeCode = $value;
    }

}
