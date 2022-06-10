<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsInformationProtectionApp implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $denied If true, app is denied protection or exemption.
    */
    private ?bool $denied = null;
    
    /**
     * @var string|null $description The app's description.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName App display name.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $productName The product name.
    */
    private ?string $productName = null;
    
    /**
     * @var string|null $publisherName The publisher name
    */
    private ?string $publisherName = null;
    
    /**
     * Instantiates a new windowsInformationProtectionApp and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionApp {
        return new WindowsInformationProtectionApp();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the denied property value. If true, app is denied protection or exemption.
     * @return bool|null
    */
    public function getDenied(): ?bool {
        return $this->denied;
    }

    /**
     * Gets the description property value. The app's description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. App display name.
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
            'denied' => function (ParseNode $n) use ($o) { $o->setDenied($n->getBooleanValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'productName' => function (ParseNode $n) use ($o) { $o->setProductName($n->getStringValue()); },
            'publisherName' => function (ParseNode $n) use ($o) { $o->setPublisherName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the productName property value. The product name.
     * @return string|null
    */
    public function getProductName(): ?string {
        return $this->productName;
    }

    /**
     * Gets the publisherName property value. The publisher name
     * @return string|null
    */
    public function getPublisherName(): ?string {
        return $this->publisherName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('denied', $this->denied);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('productName', $this->productName);
        $writer->writeStringValue('publisherName', $this->publisherName);
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
     * Sets the denied property value. If true, app is denied protection or exemption.
     *  @param bool|null $value Value to set for the denied property.
    */
    public function setDenied(?bool $value ): void {
        $this->denied = $value;
    }

    /**
     * Sets the description property value. The app's description.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. App display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the productName property value. The product name.
     *  @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value ): void {
        $this->productName = $value;
    }

    /**
     * Sets the publisherName property value. The publisher name
     *  @param string|null $value Value to set for the publisherName property.
    */
    public function setPublisherName(?string $value ): void {
        $this->publisherName = $value;
    }

}
