<?php

namespace Microsoft\Graph\Models\TermStore;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LocalizedLabel implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isDefault Indicates whether the label is the default label.
    */
    private ?bool $isDefault = null;
    
    /**
     * @var string|null $languageTag The language tag for the label.
    */
    private ?string $languageTag = null;
    
    /**
     * @var string|null $name The name of the label.
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new localizedLabel and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LocalizedLabel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LocalizedLabel {
        return new LocalizedLabel();
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
            'isDefault' => function (ParseNode $n) use ($o) { $o->setIsDefault($n->getBooleanValue()); },
            'languageTag' => function (ParseNode $n) use ($o) { $o->setLanguageTag($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isDefault property value. Indicates whether the label is the default label.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the languageTag property value. The language tag for the label.
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        return $this->languageTag;
    }

    /**
     * Gets the name property value. The name of the label.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeStringValue('languageTag', $this->languageTag);
        $writer->writeStringValue('name', $this->name);
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
     * Sets the isDefault property value. Indicates whether the label is the default label.
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the languageTag property value. The language tag for the label.
     *  @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value ): void {
        $this->languageTag = $value;
    }

    /**
     * Sets the name property value. The name of the label.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

}
