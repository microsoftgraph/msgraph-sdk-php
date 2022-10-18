<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChoiceColumn implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowTextEntry If true, allows custom values that aren't in the configured choices.
    */
    private ?bool $allowTextEntry = null;
    
    /**
     * @var array<string>|null $choices The list of values available for this column.
    */
    private ?array $choices = null;
    
    /**
     * @var string|null $displayAs How the choices are to be presented in the UX. Must be one of checkBoxes, dropDownMenu, or radioButtons
    */
    private ?string $displayAs = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new choiceColumn and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.choiceColumn');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChoiceColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChoiceColumn {
        return new ChoiceColumn();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowTextEntry property value. If true, allows custom values that aren't in the configured choices.
     * @return bool|null
    */
    public function getAllowTextEntry(): ?bool {
        return $this->allowTextEntry;
    }

    /**
     * Gets the choices property value. The list of values available for this column.
     * @return array<string>|null
    */
    public function getChoices(): ?array {
        return $this->choices;
    }

    /**
     * Gets the displayAs property value. How the choices are to be presented in the UX. Must be one of checkBoxes, dropDownMenu, or radioButtons
     * @return string|null
    */
    public function getDisplayAs(): ?string {
        return $this->displayAs;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowTextEntry' => fn(ParseNode $n) => $o->setAllowTextEntry($n->getBooleanValue()),
            'choices' => fn(ParseNode $n) => $o->setChoices($n->getCollectionOfPrimitiveValues()),
            'displayAs' => fn(ParseNode $n) => $o->setDisplayAs($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowTextEntry', $this->allowTextEntry);
        $writer->writeCollectionOfPrimitiveValues('choices', $this->choices);
        $writer->writeStringValue('displayAs', $this->displayAs);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the allowTextEntry property value. If true, allows custom values that aren't in the configured choices.
     *  @param bool|null $value Value to set for the allowTextEntry property.
    */
    public function setAllowTextEntry(?bool $value ): void {
        $this->allowTextEntry = $value;
    }

    /**
     * Sets the choices property value. The list of values available for this column.
     *  @param array<string>|null $value Value to set for the choices property.
    */
    public function setChoices(?array $value ): void {
        $this->choices = $value;
    }

    /**
     * Sets the displayAs property value. How the choices are to be presented in the UX. Must be one of checkBoxes, dropDownMenu, or radioButtons
     *  @param string|null $value Value to set for the displayAs property.
    */
    public function setDisplayAs(?string $value ): void {
        $this->displayAs = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
