<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookFilterCriteria implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $color  */
    private ?string $color = null;
    
    /** @var string|null $criterion1  */
    private ?string $criterion1 = null;
    
    /** @var string|null $criterion2  */
    private ?string $criterion2 = null;
    
    /** @var string|null $dynamicCriteria  */
    private ?string $dynamicCriteria = null;
    
    /** @var string|null $filterOn  */
    private ?string $filterOn = null;
    
    /** @var WorkbookIcon|null $icon  */
    private ?WorkbookIcon $icon = null;
    
    /** @var string|null $operator  */
    private ?string $operator = null;
    
    /** @var Json|null $values  */
    private ?Json $values = null;
    
    /**
     * Instantiates a new workbookFilterCriteria and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookFilterCriteria
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookFilterCriteria {
        return new WorkbookFilterCriteria();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the color property value. 
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * Gets the criterion1 property value. 
     * @return string|null
    */
    public function getCriterion1(): ?string {
        return $this->criterion1;
    }

    /**
     * Gets the criterion2 property value. 
     * @return string|null
    */
    public function getCriterion2(): ?string {
        return $this->criterion2;
    }

    /**
     * Gets the dynamicCriteria property value. 
     * @return string|null
    */
    public function getDynamicCriteria(): ?string {
        return $this->dynamicCriteria;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'color' => function (self $o, ParseNode $n) { $o->setColor($n->getStringValue()); },
            'criterion1' => function (self $o, ParseNode $n) { $o->setCriterion1($n->getStringValue()); },
            'criterion2' => function (self $o, ParseNode $n) { $o->setCriterion2($n->getStringValue()); },
            'dynamicCriteria' => function (self $o, ParseNode $n) { $o->setDynamicCriteria($n->getStringValue()); },
            'filterOn' => function (self $o, ParseNode $n) { $o->setFilterOn($n->getStringValue()); },
            'icon' => function (self $o, ParseNode $n) { $o->setIcon($n->getObjectValue(WorkbookIcon::class)); },
            'operator' => function (self $o, ParseNode $n) { $o->setOperator($n->getStringValue()); },
            'values' => function (self $o, ParseNode $n) { $o->setValues($n->getObjectValue(Json::class)); },
        ];
    }

    /**
     * Gets the filterOn property value. 
     * @return string|null
    */
    public function getFilterOn(): ?string {
        return $this->filterOn;
    }

    /**
     * Gets the icon property value. 
     * @return WorkbookIcon|null
    */
    public function getIcon(): ?WorkbookIcon {
        return $this->icon;
    }

    /**
     * Gets the operator property value. 
     * @return string|null
    */
    public function getOperator(): ?string {
        return $this->operator;
    }

    /**
     * Gets the values property value. 
     * @return Json|null
    */
    public function getValues(): ?Json {
        return $this->values;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('color', $this->color);
        $writer->writeStringValue('criterion1', $this->criterion1);
        $writer->writeStringValue('criterion2', $this->criterion2);
        $writer->writeStringValue('dynamicCriteria', $this->dynamicCriteria);
        $writer->writeStringValue('filterOn', $this->filterOn);
        $writer->writeObjectValue('icon', $this->icon);
        $writer->writeStringValue('operator', $this->operator);
        $writer->writeObjectValue('values', $this->values);
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
     * Sets the color property value. 
     *  @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value ): void {
        $this->color = $value;
    }

    /**
     * Sets the criterion1 property value. 
     *  @param string|null $value Value to set for the criterion1 property.
    */
    public function setCriterion1(?string $value ): void {
        $this->criterion1 = $value;
    }

    /**
     * Sets the criterion2 property value. 
     *  @param string|null $value Value to set for the criterion2 property.
    */
    public function setCriterion2(?string $value ): void {
        $this->criterion2 = $value;
    }

    /**
     * Sets the dynamicCriteria property value. 
     *  @param string|null $value Value to set for the dynamicCriteria property.
    */
    public function setDynamicCriteria(?string $value ): void {
        $this->dynamicCriteria = $value;
    }

    /**
     * Sets the filterOn property value. 
     *  @param string|null $value Value to set for the filterOn property.
    */
    public function setFilterOn(?string $value ): void {
        $this->filterOn = $value;
    }

    /**
     * Sets the icon property value. 
     *  @param WorkbookIcon|null $value Value to set for the icon property.
    */
    public function setIcon(?WorkbookIcon $value ): void {
        $this->icon = $value;
    }

    /**
     * Sets the operator property value. 
     *  @param string|null $value Value to set for the operator property.
    */
    public function setOperator(?string $value ): void {
        $this->operator = $value;
    }

    /**
     * Sets the values property value. 
     *  @param Json|null $value Value to set for the values property.
    */
    public function setValues(?Json $value ): void {
        $this->values = $value;
    }

}
