<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SettingSource implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName Not yet documented
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $id Not yet documented
    */
    private ?string $id = null;
    
    /**
     * @var SettingSourceType|null $sourceType Not yet documented. Possible values are: deviceConfiguration, deviceIntent.
    */
    private ?SettingSourceType $sourceType = null;
    
    /**
     * Instantiates a new settingSource and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SettingSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SettingSource {
        return new SettingSource();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Not yet documented
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
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'sourceType' => function (ParseNode $n) use ($o) { $o->setSourceType($n->getEnumValue(SettingSourceType::class)); },
        ];
    }

    /**
     * Gets the id property value. Not yet documented
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the sourceType property value. Not yet documented. Possible values are: deviceConfiguration, deviceIntent.
     * @return SettingSourceType|null
    */
    public function getSourceType(): ?SettingSourceType {
        return $this->sourceType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('id', $this->id);
        $writer->writeEnumValue('sourceType', $this->sourceType);
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
     * Sets the displayName property value. Not yet documented
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the id property value. Not yet documented
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the sourceType property value. Not yet documented. Possible values are: deviceConfiguration, deviceIntent.
     *  @param SettingSourceType|null $value Value to set for the sourceType property.
    */
    public function setSourceType(?SettingSourceType $value ): void {
        $this->sourceType = $value;
    }

}
