<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookSortField implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $ascending Represents whether the sorting is done in an ascending fashion.
    */
    private ?bool $ascending = null;
    
    /**
     * @var string|null $color Represents the color that is the target of the condition if the sorting is on font or cell color.
    */
    private ?string $color = null;
    
    /**
     * @var string|null $dataOption Represents additional sorting options for this field. The possible values are: Normal, TextAsNumber.
    */
    private ?string $dataOption = null;
    
    /**
     * @var WorkbookIcon|null $icon Represents the icon that is the target of the condition if the sorting is on the cell's icon.
    */
    private ?WorkbookIcon $icon = null;
    
    /**
     * @var int|null $key Represents the column (or row, depending on the sort orientation) that the condition is on. Represented as an offset from the first column (or row).
    */
    private ?int $key = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $sortOn Represents the type of sorting of this condition. The possible values are: Value, CellColor, FontColor, Icon.
    */
    private ?string $sortOn = null;
    
    /**
     * Instantiates a new workbookSortField and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.workbookSortField');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookSortField
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookSortField {
        return new WorkbookSortField();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the ascending property value. Represents whether the sorting is done in an ascending fashion.
     * @return bool|null
    */
    public function getAscending(): ?bool {
        return $this->ascending;
    }

    /**
     * Gets the color property value. Represents the color that is the target of the condition if the sorting is on font or cell color.
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * Gets the dataOption property value. Represents additional sorting options for this field. The possible values are: Normal, TextAsNumber.
     * @return string|null
    */
    public function getDataOption(): ?string {
        return $this->dataOption;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ascending' => function (ParseNode $n) use ($o) { $o->setAscending($n->getBooleanValue()); },
            'color' => function (ParseNode $n) use ($o) { $o->setColor($n->getStringValue()); },
            'dataOption' => function (ParseNode $n) use ($o) { $o->setDataOption($n->getStringValue()); },
            'icon' => function (ParseNode $n) use ($o) { $o->setIcon($n->getObjectValue(array(WorkbookIcon::class, 'createFromDiscriminatorValue'))); },
            'key' => function (ParseNode $n) use ($o) { $o->setKey($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'sortOn' => function (ParseNode $n) use ($o) { $o->setSortOn($n->getStringValue()); },
        ];
    }

    /**
     * Gets the icon property value. Represents the icon that is the target of the condition if the sorting is on the cell's icon.
     * @return WorkbookIcon|null
    */
    public function getIcon(): ?WorkbookIcon {
        return $this->icon;
    }

    /**
     * Gets the key property value. Represents the column (or row, depending on the sort orientation) that the condition is on. Represented as an offset from the first column (or row).
     * @return int|null
    */
    public function getKey(): ?int {
        return $this->key;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the sortOn property value. Represents the type of sorting of this condition. The possible values are: Value, CellColor, FontColor, Icon.
     * @return string|null
    */
    public function getSortOn(): ?string {
        return $this->sortOn;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('ascending', $this->ascending);
        $writer->writeStringValue('color', $this->color);
        $writer->writeStringValue('dataOption', $this->dataOption);
        $writer->writeObjectValue('icon', $this->icon);
        $writer->writeIntegerValue('key', $this->key);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('sortOn', $this->sortOn);
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
     * Sets the ascending property value. Represents whether the sorting is done in an ascending fashion.
     *  @param bool|null $value Value to set for the ascending property.
    */
    public function setAscending(?bool $value ): void {
        $this->ascending = $value;
    }

    /**
     * Sets the color property value. Represents the color that is the target of the condition if the sorting is on font or cell color.
     *  @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value ): void {
        $this->color = $value;
    }

    /**
     * Sets the dataOption property value. Represents additional sorting options for this field. The possible values are: Normal, TextAsNumber.
     *  @param string|null $value Value to set for the dataOption property.
    */
    public function setDataOption(?string $value ): void {
        $this->dataOption = $value;
    }

    /**
     * Sets the icon property value. Represents the icon that is the target of the condition if the sorting is on the cell's icon.
     *  @param WorkbookIcon|null $value Value to set for the icon property.
    */
    public function setIcon(?WorkbookIcon $value ): void {
        $this->icon = $value;
    }

    /**
     * Sets the key property value. Represents the column (or row, depending on the sort orientation) that the condition is on. Represented as an offset from the first column (or row).
     *  @param int|null $value Value to set for the key property.
    */
    public function setKey(?int $value ): void {
        $this->key = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the sortOn property value. Represents the type of sorting of this condition. The possible values are: Value, CellColor, FontColor, Icon.
     *  @param string|null $value Value to set for the sortOn property.
    */
    public function setSortOn(?string $value ): void {
        $this->sortOn = $value;
    }

}
