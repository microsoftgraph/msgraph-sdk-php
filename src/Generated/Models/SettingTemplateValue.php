<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SettingTemplateValue implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $defaultValue Default value for the setting. Read-only.
    */
    private ?string $defaultValue = null;
    
    /**
     * @var string|null $description Description of the setting. Read-only.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $name Name of the setting. Read-only.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $type Type of the setting. Read-only.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new settingTemplateValue and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SettingTemplateValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SettingTemplateValue {
        return new SettingTemplateValue();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultValue property value. Default value for the setting. Read-only.
     * @return string|null
    */
    public function getDefaultValue(): ?string {
        return $this->defaultValue;
    }

    /**
     * Gets the description property value. Description of the setting. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultValue' => function (ParseNode $n) use ($o) { $o->setDefaultValue($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the name property value. Name of the setting. Read-only.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the type property value. Type of the setting. Read-only.
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
        $writer->writeStringValue('defaultValue', $this->defaultValue);
        $writer->writeStringValue('description', $this->description);
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
     * Sets the defaultValue property value. Default value for the setting. Read-only.
     *  @param string|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?string $value ): void {
        $this->defaultValue = $value;
    }

    /**
     * Sets the description property value. Description of the setting. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the name property value. Name of the setting. Read-only.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the type property value. Type of the setting. Read-only.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
