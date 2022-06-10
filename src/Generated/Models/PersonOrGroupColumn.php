<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PersonOrGroupColumn implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowMultipleSelection Indicates whether multiple values can be selected from the source.
    */
    private ?bool $allowMultipleSelection = null;
    
    /**
     * @var string|null $chooseFromType Whether to allow selection of people only, or people and groups. Must be one of peopleAndGroups or peopleOnly.
    */
    private ?string $chooseFromType = null;
    
    /**
     * @var string|null $displayAs How to display the information about the person or group chosen. See below.
    */
    private ?string $displayAs = null;
    
    /**
     * Instantiates a new personOrGroupColumn and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonOrGroupColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PersonOrGroupColumn {
        return new PersonOrGroupColumn();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowMultipleSelection property value. Indicates whether multiple values can be selected from the source.
     * @return bool|null
    */
    public function getAllowMultipleSelection(): ?bool {
        return $this->allowMultipleSelection;
    }

    /**
     * Gets the chooseFromType property value. Whether to allow selection of people only, or people and groups. Must be one of peopleAndGroups or peopleOnly.
     * @return string|null
    */
    public function getChooseFromType(): ?string {
        return $this->chooseFromType;
    }

    /**
     * Gets the displayAs property value. How to display the information about the person or group chosen. See below.
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
            'allowMultipleSelection' => function (ParseNode $n) use ($o) { $o->setAllowMultipleSelection($n->getBooleanValue()); },
            'chooseFromType' => function (ParseNode $n) use ($o) { $o->setChooseFromType($n->getStringValue()); },
            'displayAs' => function (ParseNode $n) use ($o) { $o->setDisplayAs($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowMultipleSelection', $this->allowMultipleSelection);
        $writer->writeStringValue('chooseFromType', $this->chooseFromType);
        $writer->writeStringValue('displayAs', $this->displayAs);
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
     * Sets the allowMultipleSelection property value. Indicates whether multiple values can be selected from the source.
     *  @param bool|null $value Value to set for the allowMultipleSelection property.
    */
    public function setAllowMultipleSelection(?bool $value ): void {
        $this->allowMultipleSelection = $value;
    }

    /**
     * Sets the chooseFromType property value. Whether to allow selection of people only, or people and groups. Must be one of peopleAndGroups or peopleOnly.
     *  @param string|null $value Value to set for the chooseFromType property.
    */
    public function setChooseFromType(?string $value ): void {
        $this->chooseFromType = $value;
    }

    /**
     * Sets the displayAs property value. How to display the information about the person or group chosen. See below.
     *  @param string|null $value Value to set for the displayAs property.
    */
    public function setDisplayAs(?string $value ): void {
        $this->displayAs = $value;
    }

}
