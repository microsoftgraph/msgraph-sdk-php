<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $browser Indicates the browser information of the used for signing-in.
    */
    private ?string $browser = null;
    
    /**
     * @var string|null $deviceId Refers to the UniqueID of the device used for signing-in.
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $displayName Refers to the name of the device used for signing-in.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isCompliant Indicates whether the device is compliant or not.
    */
    private ?bool $isCompliant = null;
    
    /**
     * @var bool|null $isManaged Indicates if the device is managed or not.
    */
    private ?bool $isManaged = null;
    
    /**
     * @var string|null $operatingSystem Indicates the OS name and version used for signing-in.
    */
    private ?string $operatingSystem = null;
    
    /**
     * @var string|null $trustType Indicates information on whether the signed-in device is Workplace Joined, AzureAD Joined, Domain Joined.
    */
    private ?string $trustType = null;
    
    /**
     * Instantiates a new deviceDetail and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceDetail {
        return new DeviceDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the browser property value. Indicates the browser information of the used for signing-in.
     * @return string|null
    */
    public function getBrowser(): ?string {
        return $this->browser;
    }

    /**
     * Gets the deviceId property value. Refers to the UniqueID of the device used for signing-in.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the displayName property value. Refers to the name of the device used for signing-in.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'browser' => function (ParseNode $n) use ($o) { $o->setBrowser($n->getStringValue()); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isCompliant' => function (ParseNode $n) use ($o) { $o->setIsCompliant($n->getBooleanValue()); },
            'isManaged' => function (ParseNode $n) use ($o) { $o->setIsManaged($n->getBooleanValue()); },
            'operatingSystem' => function (ParseNode $n) use ($o) { $o->setOperatingSystem($n->getStringValue()); },
            'trustType' => function (ParseNode $n) use ($o) { $o->setTrustType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isCompliant property value. Indicates whether the device is compliant or not.
     * @return bool|null
    */
    public function getIsCompliant(): ?bool {
        return $this->isCompliant;
    }

    /**
     * Gets the isManaged property value. Indicates if the device is managed or not.
     * @return bool|null
    */
    public function getIsManaged(): ?bool {
        return $this->isManaged;
    }

    /**
     * Gets the operatingSystem property value. Indicates the OS name and version used for signing-in.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->operatingSystem;
    }

    /**
     * Gets the trustType property value. Indicates information on whether the signed-in device is Workplace Joined, AzureAD Joined, Domain Joined.
     * @return string|null
    */
    public function getTrustType(): ?string {
        return $this->trustType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('browser', $this->browser);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isCompliant', $this->isCompliant);
        $writer->writeBooleanValue('isManaged', $this->isManaged);
        $writer->writeStringValue('operatingSystem', $this->operatingSystem);
        $writer->writeStringValue('trustType', $this->trustType);
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
     * Sets the browser property value. Indicates the browser information of the used for signing-in.
     *  @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value ): void {
        $this->browser = $value;
    }

    /**
     * Sets the deviceId property value. Refers to the UniqueID of the device used for signing-in.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the displayName property value. Refers to the name of the device used for signing-in.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isCompliant property value. Indicates whether the device is compliant or not.
     *  @param bool|null $value Value to set for the isCompliant property.
    */
    public function setIsCompliant(?bool $value ): void {
        $this->isCompliant = $value;
    }

    /**
     * Sets the isManaged property value. Indicates if the device is managed or not.
     *  @param bool|null $value Value to set for the isManaged property.
    */
    public function setIsManaged(?bool $value ): void {
        $this->isManaged = $value;
    }

    /**
     * Sets the operatingSystem property value. Indicates the OS name and version used for signing-in.
     *  @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value ): void {
        $this->operatingSystem = $value;
    }

    /**
     * Sets the trustType property value. Indicates information on whether the signed-in device is Workplace Joined, AzureAD Joined, Domain Joined.
     *  @param string|null $value Value to set for the trustType property.
    */
    public function setTrustType(?string $value ): void {
        $this->trustType = $value;
    }

}
