<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DisplayNameLocalization implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName If present, the value of this field contains the displayName string that has been set for the language present in the languageTag field.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $languageTag Provides the language culture-code and friendly name of the language that the displayName field has been provided in.
    */
    private ?string $languageTag = null;
    
    /**
     * Instantiates a new displayNameLocalization and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DisplayNameLocalization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DisplayNameLocalization {
        return new DisplayNameLocalization();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. If present, the value of this field contains the displayName string that has been set for the language present in the languageTag field.
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
            'languageTag' => function (ParseNode $n) use ($o) { $o->setLanguageTag($n->getStringValue()); },
        ];
    }

    /**
     * Gets the languageTag property value. Provides the language culture-code and friendly name of the language that the displayName field has been provided in.
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        return $this->languageTag;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('languageTag', $this->languageTag);
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
     * Sets the displayName property value. If present, the value of this field contains the displayName string that has been set for the language present in the languageTag field.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the languageTag property value. Provides the language culture-code and friendly name of the language that the displayName field has been provided in.
     *  @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value ): void {
        $this->languageTag = $value;
    }

}
