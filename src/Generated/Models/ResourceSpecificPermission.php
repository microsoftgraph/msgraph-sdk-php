<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResourceSpecificPermission implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description Describes the level of access that the resource-specific permission represents.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name for the resource-specific permission.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $id The unique identifier for the resource-specific application permission.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isEnabled Indicates whether the permission is enabled.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var string|null $value The value of the permission.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new resourceSpecificPermission and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResourceSpecificPermission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResourceSpecificPermission {
        return new ResourceSpecificPermission();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Describes the level of access that the resource-specific permission represents.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name for the resource-specific permission.
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
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. The unique identifier for the resource-specific application permission.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isEnabled property value. Indicates whether the permission is enabled.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the value property value. The value of the permission.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('id', $this->id);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeStringValue('value', $this->value);
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
     * Sets the description property value. Describes the level of access that the resource-specific permission represents.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name for the resource-specific permission.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the resource-specific application permission.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the isEnabled property value. Indicates whether the permission is enabled.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the value property value. The value of the permission.
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

}
