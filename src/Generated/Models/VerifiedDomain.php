<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VerifiedDomain implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $capabilities For example, Email, OfficeCommunicationsOnline.
    */
    private ?string $capabilities = null;
    
    /**
     * @var bool|null $isDefault true if this is the default domain associated with the tenant; otherwise, false.
    */
    private ?bool $isDefault = null;
    
    /**
     * @var bool|null $isInitial true if this is the initial domain associated with the tenant; otherwise, false.
    */
    private ?bool $isInitial = null;
    
    /**
     * @var string|null $name The domain name; for example, contoso.onmicrosoft.com.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $type For example, Managed.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new verifiedDomain and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerifiedDomain
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerifiedDomain {
        return new VerifiedDomain();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the capabilities property value. For example, Email, OfficeCommunicationsOnline.
     * @return string|null
    */
    public function getCapabilities(): ?string {
        return $this->capabilities;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'capabilities' => function (ParseNode $n) use ($o) { $o->setCapabilities($n->getStringValue()); },
            'isDefault' => function (ParseNode $n) use ($o) { $o->setIsDefault($n->getBooleanValue()); },
            'isInitial' => function (ParseNode $n) use ($o) { $o->setIsInitial($n->getBooleanValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isDefault property value. true if this is the default domain associated with the tenant; otherwise, false.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the isInitial property value. true if this is the initial domain associated with the tenant; otherwise, false.
     * @return bool|null
    */
    public function getIsInitial(): ?bool {
        return $this->isInitial;
    }

    /**
     * Gets the name property value. The domain name; for example, contoso.onmicrosoft.com.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the type property value. For example, Managed.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('capabilities', $this->capabilities);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeBooleanValue('isInitial', $this->isInitial);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('type', $this->type);
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
     * Sets the capabilities property value. For example, Email, OfficeCommunicationsOnline.
     *  @param string|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?string $value ): void {
        $this->capabilities = $value;
    }

    /**
     * Sets the isDefault property value. true if this is the default domain associated with the tenant; otherwise, false.
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the isInitial property value. true if this is the initial domain associated with the tenant; otherwise, false.
     *  @param bool|null $value Value to set for the isInitial property.
    */
    public function setIsInitial(?bool $value ): void {
        $this->isInitial = $value;
    }

    /**
     * Sets the name property value. The domain name; for example, contoso.onmicrosoft.com.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the type property value. For example, Managed.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
