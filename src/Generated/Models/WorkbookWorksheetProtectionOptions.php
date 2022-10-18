<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookWorksheetProtectionOptions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowAutoFilter Represents the worksheet protection option of allowing using auto filter feature.
    */
    private ?bool $allowAutoFilter = null;
    
    /**
     * @var bool|null $allowDeleteColumns Represents the worksheet protection option of allowing deleting columns.
    */
    private ?bool $allowDeleteColumns = null;
    
    /**
     * @var bool|null $allowDeleteRows Represents the worksheet protection option of allowing deleting rows.
    */
    private ?bool $allowDeleteRows = null;
    
    /**
     * @var bool|null $allowFormatCells Represents the worksheet protection option of allowing formatting cells.
    */
    private ?bool $allowFormatCells = null;
    
    /**
     * @var bool|null $allowFormatColumns Represents the worksheet protection option of allowing formatting columns.
    */
    private ?bool $allowFormatColumns = null;
    
    /**
     * @var bool|null $allowFormatRows Represents the worksheet protection option of allowing formatting rows.
    */
    private ?bool $allowFormatRows = null;
    
    /**
     * @var bool|null $allowInsertColumns Represents the worksheet protection option of allowing inserting columns.
    */
    private ?bool $allowInsertColumns = null;
    
    /**
     * @var bool|null $allowInsertHyperlinks Represents the worksheet protection option of allowing inserting hyperlinks.
    */
    private ?bool $allowInsertHyperlinks = null;
    
    /**
     * @var bool|null $allowInsertRows Represents the worksheet protection option of allowing inserting rows.
    */
    private ?bool $allowInsertRows = null;
    
    /**
     * @var bool|null $allowPivotTables Represents the worksheet protection option of allowing using pivot table feature.
    */
    private ?bool $allowPivotTables = null;
    
    /**
     * @var bool|null $allowSort Represents the worksheet protection option of allowing using sort feature.
    */
    private ?bool $allowSort = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new workbookWorksheetProtectionOptions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.workbookWorksheetProtectionOptions');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookWorksheetProtectionOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookWorksheetProtectionOptions {
        return new WorkbookWorksheetProtectionOptions();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowAutoFilter property value. Represents the worksheet protection option of allowing using auto filter feature.
     * @return bool|null
    */
    public function getAllowAutoFilter(): ?bool {
        return $this->allowAutoFilter;
    }

    /**
     * Gets the allowDeleteColumns property value. Represents the worksheet protection option of allowing deleting columns.
     * @return bool|null
    */
    public function getAllowDeleteColumns(): ?bool {
        return $this->allowDeleteColumns;
    }

    /**
     * Gets the allowDeleteRows property value. Represents the worksheet protection option of allowing deleting rows.
     * @return bool|null
    */
    public function getAllowDeleteRows(): ?bool {
        return $this->allowDeleteRows;
    }

    /**
     * Gets the allowFormatCells property value. Represents the worksheet protection option of allowing formatting cells.
     * @return bool|null
    */
    public function getAllowFormatCells(): ?bool {
        return $this->allowFormatCells;
    }

    /**
     * Gets the allowFormatColumns property value. Represents the worksheet protection option of allowing formatting columns.
     * @return bool|null
    */
    public function getAllowFormatColumns(): ?bool {
        return $this->allowFormatColumns;
    }

    /**
     * Gets the allowFormatRows property value. Represents the worksheet protection option of allowing formatting rows.
     * @return bool|null
    */
    public function getAllowFormatRows(): ?bool {
        return $this->allowFormatRows;
    }

    /**
     * Gets the allowInsertColumns property value. Represents the worksheet protection option of allowing inserting columns.
     * @return bool|null
    */
    public function getAllowInsertColumns(): ?bool {
        return $this->allowInsertColumns;
    }

    /**
     * Gets the allowInsertHyperlinks property value. Represents the worksheet protection option of allowing inserting hyperlinks.
     * @return bool|null
    */
    public function getAllowInsertHyperlinks(): ?bool {
        return $this->allowInsertHyperlinks;
    }

    /**
     * Gets the allowInsertRows property value. Represents the worksheet protection option of allowing inserting rows.
     * @return bool|null
    */
    public function getAllowInsertRows(): ?bool {
        return $this->allowInsertRows;
    }

    /**
     * Gets the allowPivotTables property value. Represents the worksheet protection option of allowing using pivot table feature.
     * @return bool|null
    */
    public function getAllowPivotTables(): ?bool {
        return $this->allowPivotTables;
    }

    /**
     * Gets the allowSort property value. Represents the worksheet protection option of allowing using sort feature.
     * @return bool|null
    */
    public function getAllowSort(): ?bool {
        return $this->allowSort;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowAutoFilter' => fn(ParseNode $n) => $o->setAllowAutoFilter($n->getBooleanValue()),
            'allowDeleteColumns' => fn(ParseNode $n) => $o->setAllowDeleteColumns($n->getBooleanValue()),
            'allowDeleteRows' => fn(ParseNode $n) => $o->setAllowDeleteRows($n->getBooleanValue()),
            'allowFormatCells' => fn(ParseNode $n) => $o->setAllowFormatCells($n->getBooleanValue()),
            'allowFormatColumns' => fn(ParseNode $n) => $o->setAllowFormatColumns($n->getBooleanValue()),
            'allowFormatRows' => fn(ParseNode $n) => $o->setAllowFormatRows($n->getBooleanValue()),
            'allowInsertColumns' => fn(ParseNode $n) => $o->setAllowInsertColumns($n->getBooleanValue()),
            'allowInsertHyperlinks' => fn(ParseNode $n) => $o->setAllowInsertHyperlinks($n->getBooleanValue()),
            'allowInsertRows' => fn(ParseNode $n) => $o->setAllowInsertRows($n->getBooleanValue()),
            'allowPivotTables' => fn(ParseNode $n) => $o->setAllowPivotTables($n->getBooleanValue()),
            'allowSort' => fn(ParseNode $n) => $o->setAllowSort($n->getBooleanValue()),
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
        $writer->writeBooleanValue('allowAutoFilter', $this->allowAutoFilter);
        $writer->writeBooleanValue('allowDeleteColumns', $this->allowDeleteColumns);
        $writer->writeBooleanValue('allowDeleteRows', $this->allowDeleteRows);
        $writer->writeBooleanValue('allowFormatCells', $this->allowFormatCells);
        $writer->writeBooleanValue('allowFormatColumns', $this->allowFormatColumns);
        $writer->writeBooleanValue('allowFormatRows', $this->allowFormatRows);
        $writer->writeBooleanValue('allowInsertColumns', $this->allowInsertColumns);
        $writer->writeBooleanValue('allowInsertHyperlinks', $this->allowInsertHyperlinks);
        $writer->writeBooleanValue('allowInsertRows', $this->allowInsertRows);
        $writer->writeBooleanValue('allowPivotTables', $this->allowPivotTables);
        $writer->writeBooleanValue('allowSort', $this->allowSort);
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
     * Sets the allowAutoFilter property value. Represents the worksheet protection option of allowing using auto filter feature.
     *  @param bool|null $value Value to set for the allowAutoFilter property.
    */
    public function setAllowAutoFilter(?bool $value ): void {
        $this->allowAutoFilter = $value;
    }

    /**
     * Sets the allowDeleteColumns property value. Represents the worksheet protection option of allowing deleting columns.
     *  @param bool|null $value Value to set for the allowDeleteColumns property.
    */
    public function setAllowDeleteColumns(?bool $value ): void {
        $this->allowDeleteColumns = $value;
    }

    /**
     * Sets the allowDeleteRows property value. Represents the worksheet protection option of allowing deleting rows.
     *  @param bool|null $value Value to set for the allowDeleteRows property.
    */
    public function setAllowDeleteRows(?bool $value ): void {
        $this->allowDeleteRows = $value;
    }

    /**
     * Sets the allowFormatCells property value. Represents the worksheet protection option of allowing formatting cells.
     *  @param bool|null $value Value to set for the allowFormatCells property.
    */
    public function setAllowFormatCells(?bool $value ): void {
        $this->allowFormatCells = $value;
    }

    /**
     * Sets the allowFormatColumns property value. Represents the worksheet protection option of allowing formatting columns.
     *  @param bool|null $value Value to set for the allowFormatColumns property.
    */
    public function setAllowFormatColumns(?bool $value ): void {
        $this->allowFormatColumns = $value;
    }

    /**
     * Sets the allowFormatRows property value. Represents the worksheet protection option of allowing formatting rows.
     *  @param bool|null $value Value to set for the allowFormatRows property.
    */
    public function setAllowFormatRows(?bool $value ): void {
        $this->allowFormatRows = $value;
    }

    /**
     * Sets the allowInsertColumns property value. Represents the worksheet protection option of allowing inserting columns.
     *  @param bool|null $value Value to set for the allowInsertColumns property.
    */
    public function setAllowInsertColumns(?bool $value ): void {
        $this->allowInsertColumns = $value;
    }

    /**
     * Sets the allowInsertHyperlinks property value. Represents the worksheet protection option of allowing inserting hyperlinks.
     *  @param bool|null $value Value to set for the allowInsertHyperlinks property.
    */
    public function setAllowInsertHyperlinks(?bool $value ): void {
        $this->allowInsertHyperlinks = $value;
    }

    /**
     * Sets the allowInsertRows property value. Represents the worksheet protection option of allowing inserting rows.
     *  @param bool|null $value Value to set for the allowInsertRows property.
    */
    public function setAllowInsertRows(?bool $value ): void {
        $this->allowInsertRows = $value;
    }

    /**
     * Sets the allowPivotTables property value. Represents the worksheet protection option of allowing using pivot table feature.
     *  @param bool|null $value Value to set for the allowPivotTables property.
    */
    public function setAllowPivotTables(?bool $value ): void {
        $this->allowPivotTables = $value;
    }

    /**
     * Sets the allowSort property value. Represents the worksheet protection option of allowing using sort feature.
     *  @param bool|null $value Value to set for the allowSort property.
    */
    public function setAllowSort(?bool $value ): void {
        $this->allowSort = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
