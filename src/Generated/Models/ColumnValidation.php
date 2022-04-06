<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ColumnValidation implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $defaultLanguage Default BCP 47 language tag for the description. */
    private ?string $defaultLanguage = null;
    
    /** @var array<DisplayNameLocalization>|null $descriptions Localized messages that explain what is needed for this column's value to be considered valid. User will be prompted with this message if validation fails. */
    private ?array $descriptions = null;
    
    /** @var string|null $formula The formula to validate column value. For examples, see Examples of common formulas in lists. */
    private ?string $formula = null;
    
    /**
     * Instantiates a new columnValidation and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ColumnValidation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ColumnValidation {
        return new ColumnValidation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultLanguage property value. Default BCP 47 language tag for the description.
     * @return string|null
    */
    public function getDefaultLanguage(): ?string {
        return $this->defaultLanguage;
    }

    /**
     * Gets the descriptions property value. Localized messages that explain what is needed for this column's value to be considered valid. User will be prompted with this message if validation fails.
     * @return array<DisplayNameLocalization>|null
    */
    public function getDescriptions(): ?array {
        return $this->descriptions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'defaultLanguage' => function (self $o, ParseNode $n) { $o->setDefaultLanguage($n->getStringValue()); },
            'descriptions' => function (self $o, ParseNode $n) { $o->setDescriptions($n->getCollectionOfObjectValues(DisplayNameLocalization::class)); },
            'formula' => function (self $o, ParseNode $n) { $o->setFormula($n->getStringValue()); },
        ];
    }

    /**
     * Gets the formula property value. The formula to validate column value. For examples, see Examples of common formulas in lists.
     * @return string|null
    */
    public function getFormula(): ?string {
        return $this->formula;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('defaultLanguage', $this->defaultLanguage);
        $writer->writeCollectionOfObjectValues('descriptions', $this->descriptions);
        $writer->writeStringValue('formula', $this->formula);
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
     * Sets the defaultLanguage property value. Default BCP 47 language tag for the description.
     *  @param string|null $value Value to set for the defaultLanguage property.
    */
    public function setDefaultLanguage(?string $value ): void {
        $this->defaultLanguage = $value;
    }

    /**
     * Sets the descriptions property value. Localized messages that explain what is needed for this column's value to be considered valid. User will be prompted with this message if validation fails.
     *  @param array<DisplayNameLocalization>|null $value Value to set for the descriptions property.
    */
    public function setDescriptions(?array $value ): void {
        $this->descriptions = $value;
    }

    /**
     * Sets the formula property value. The formula to validate column value. For examples, see Examples of common formulas in lists.
     *  @param string|null $value Value to set for the formula property.
    */
    public function setFormula(?string $value ): void {
        $this->formula = $value;
    }

}
