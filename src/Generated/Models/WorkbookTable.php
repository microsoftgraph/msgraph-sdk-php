<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookTable extends Entity implements Parsable 
{
    /**
     * @var array<WorkbookTableColumn>|null $columns Represents a collection of all the columns in the table. Read-only.
    */
    private ?array $columns = null;
    
    /**
     * @var bool|null $highlightFirstColumn Indicates whether the first column contains special formatting.
    */
    private ?bool $highlightFirstColumn = null;
    
    /**
     * @var bool|null $highlightLastColumn Indicates whether the last column contains special formatting.
    */
    private ?bool $highlightLastColumn = null;
    
    /**
     * @var string|null $legacyId Legacy Id used in older Excle clients. The value of the identifier remains the same even when the table is renamed. This property should be interpreted as an opaque string value and should not be parsed to any other type. Read-only.
    */
    private ?string $legacyId = null;
    
    /**
     * @var string|null $name Name of the table.
    */
    private ?string $name = null;
    
    /**
     * @var array<WorkbookTableRow>|null $rows Represents a collection of all the rows in the table. Read-only.
    */
    private ?array $rows = null;
    
    /**
     * @var bool|null $showBandedColumns Indicates whether the columns show banded formatting in which odd columns are highlighted differently from even ones to make reading the table easier.
    */
    private ?bool $showBandedColumns = null;
    
    /**
     * @var bool|null $showBandedRows Indicates whether the rows show banded formatting in which odd rows are highlighted differently from even ones to make reading the table easier.
    */
    private ?bool $showBandedRows = null;
    
    /**
     * @var bool|null $showFilterButton Indicates whether the filter buttons are visible at the top of each column header. Setting this is only allowed if the table contains a header row.
    */
    private ?bool $showFilterButton = null;
    
    /**
     * @var bool|null $showHeaders Indicates whether the header row is visible or not. This value can be set to show or remove the header row.
    */
    private ?bool $showHeaders = null;
    
    /**
     * @var bool|null $showTotals Indicates whether the total row is visible or not. This value can be set to show or remove the total row.
    */
    private ?bool $showTotals = null;
    
    /**
     * @var WorkbookTableSort|null $sort Represents the sorting for the table. Read-only.
    */
    private ?WorkbookTableSort $sort = null;
    
    /**
     * @var string|null $style Constant value that represents the Table style. The possible values are: TableStyleLight1 thru TableStyleLight21, TableStyleMedium1 thru TableStyleMedium28, TableStyleStyleDark1 thru TableStyleStyleDark11. A custom user-defined style present in the workbook can also be specified.
    */
    private ?string $style = null;
    
    /**
     * @var WorkbookWorksheet|null $worksheet The worksheet containing the current table. Read-only.
    */
    private ?WorkbookWorksheet $worksheet = null;
    
    /**
     * Instantiates a new workbookTable and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookTable');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookTable
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookTable {
        return new WorkbookTable();
    }

    /**
     * Gets the columns property value. Represents a collection of all the columns in the table. Read-only.
     * @return array<WorkbookTableColumn>|null
    */
    public function getColumns(): ?array {
        return $this->columns;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'columns' => function (ParseNode $n) use ($o) { $o->setColumns($n->getCollectionOfObjectValues(array(WorkbookTableColumn::class, 'createFromDiscriminatorValue'))); },
            'highlightFirstColumn' => function (ParseNode $n) use ($o) { $o->setHighlightFirstColumn($n->getBooleanValue()); },
            'highlightLastColumn' => function (ParseNode $n) use ($o) { $o->setHighlightLastColumn($n->getBooleanValue()); },
            'legacyId' => function (ParseNode $n) use ($o) { $o->setLegacyId($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'rows' => function (ParseNode $n) use ($o) { $o->setRows($n->getCollectionOfObjectValues(array(WorkbookTableRow::class, 'createFromDiscriminatorValue'))); },
            'showBandedColumns' => function (ParseNode $n) use ($o) { $o->setShowBandedColumns($n->getBooleanValue()); },
            'showBandedRows' => function (ParseNode $n) use ($o) { $o->setShowBandedRows($n->getBooleanValue()); },
            'showFilterButton' => function (ParseNode $n) use ($o) { $o->setShowFilterButton($n->getBooleanValue()); },
            'showHeaders' => function (ParseNode $n) use ($o) { $o->setShowHeaders($n->getBooleanValue()); },
            'showTotals' => function (ParseNode $n) use ($o) { $o->setShowTotals($n->getBooleanValue()); },
            'sort' => function (ParseNode $n) use ($o) { $o->setSort($n->getObjectValue(array(WorkbookTableSort::class, 'createFromDiscriminatorValue'))); },
            'style' => function (ParseNode $n) use ($o) { $o->setStyle($n->getStringValue()); },
            'worksheet' => function (ParseNode $n) use ($o) { $o->setWorksheet($n->getObjectValue(array(WorkbookWorksheet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the highlightFirstColumn property value. Indicates whether the first column contains special formatting.
     * @return bool|null
    */
    public function getHighlightFirstColumn(): ?bool {
        return $this->highlightFirstColumn;
    }

    /**
     * Gets the highlightLastColumn property value. Indicates whether the last column contains special formatting.
     * @return bool|null
    */
    public function getHighlightLastColumn(): ?bool {
        return $this->highlightLastColumn;
    }

    /**
     * Gets the legacyId property value. Legacy Id used in older Excle clients. The value of the identifier remains the same even when the table is renamed. This property should be interpreted as an opaque string value and should not be parsed to any other type. Read-only.
     * @return string|null
    */
    public function getLegacyId(): ?string {
        return $this->legacyId;
    }

    /**
     * Gets the name property value. Name of the table.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the rows property value. Represents a collection of all the rows in the table. Read-only.
     * @return array<WorkbookTableRow>|null
    */
    public function getRows(): ?array {
        return $this->rows;
    }

    /**
     * Gets the showBandedColumns property value. Indicates whether the columns show banded formatting in which odd columns are highlighted differently from even ones to make reading the table easier.
     * @return bool|null
    */
    public function getShowBandedColumns(): ?bool {
        return $this->showBandedColumns;
    }

    /**
     * Gets the showBandedRows property value. Indicates whether the rows show banded formatting in which odd rows are highlighted differently from even ones to make reading the table easier.
     * @return bool|null
    */
    public function getShowBandedRows(): ?bool {
        return $this->showBandedRows;
    }

    /**
     * Gets the showFilterButton property value. Indicates whether the filter buttons are visible at the top of each column header. Setting this is only allowed if the table contains a header row.
     * @return bool|null
    */
    public function getShowFilterButton(): ?bool {
        return $this->showFilterButton;
    }

    /**
     * Gets the showHeaders property value. Indicates whether the header row is visible or not. This value can be set to show or remove the header row.
     * @return bool|null
    */
    public function getShowHeaders(): ?bool {
        return $this->showHeaders;
    }

    /**
     * Gets the showTotals property value. Indicates whether the total row is visible or not. This value can be set to show or remove the total row.
     * @return bool|null
    */
    public function getShowTotals(): ?bool {
        return $this->showTotals;
    }

    /**
     * Gets the sort property value. Represents the sorting for the table. Read-only.
     * @return WorkbookTableSort|null
    */
    public function getSort(): ?WorkbookTableSort {
        return $this->sort;
    }

    /**
     * Gets the style property value. Constant value that represents the Table style. The possible values are: TableStyleLight1 thru TableStyleLight21, TableStyleMedium1 thru TableStyleMedium28, TableStyleStyleDark1 thru TableStyleStyleDark11. A custom user-defined style present in the workbook can also be specified.
     * @return string|null
    */
    public function getStyle(): ?string {
        return $this->style;
    }

    /**
     * Gets the worksheet property value. The worksheet containing the current table. Read-only.
     * @return WorkbookWorksheet|null
    */
    public function getWorksheet(): ?WorkbookWorksheet {
        return $this->worksheet;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('columns', $this->columns);
        $writer->writeBooleanValue('highlightFirstColumn', $this->highlightFirstColumn);
        $writer->writeBooleanValue('highlightLastColumn', $this->highlightLastColumn);
        $writer->writeStringValue('legacyId', $this->legacyId);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('rows', $this->rows);
        $writer->writeBooleanValue('showBandedColumns', $this->showBandedColumns);
        $writer->writeBooleanValue('showBandedRows', $this->showBandedRows);
        $writer->writeBooleanValue('showFilterButton', $this->showFilterButton);
        $writer->writeBooleanValue('showHeaders', $this->showHeaders);
        $writer->writeBooleanValue('showTotals', $this->showTotals);
        $writer->writeObjectValue('sort', $this->sort);
        $writer->writeStringValue('style', $this->style);
        $writer->writeObjectValue('worksheet', $this->worksheet);
    }

    /**
     * Sets the columns property value. Represents a collection of all the columns in the table. Read-only.
     *  @param array<WorkbookTableColumn>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value ): void {
        $this->columns = $value;
    }

    /**
     * Sets the highlightFirstColumn property value. Indicates whether the first column contains special formatting.
     *  @param bool|null $value Value to set for the highlightFirstColumn property.
    */
    public function setHighlightFirstColumn(?bool $value ): void {
        $this->highlightFirstColumn = $value;
    }

    /**
     * Sets the highlightLastColumn property value. Indicates whether the last column contains special formatting.
     *  @param bool|null $value Value to set for the highlightLastColumn property.
    */
    public function setHighlightLastColumn(?bool $value ): void {
        $this->highlightLastColumn = $value;
    }

    /**
     * Sets the legacyId property value. Legacy Id used in older Excle clients. The value of the identifier remains the same even when the table is renamed. This property should be interpreted as an opaque string value and should not be parsed to any other type. Read-only.
     *  @param string|null $value Value to set for the legacyId property.
    */
    public function setLegacyId(?string $value ): void {
        $this->legacyId = $value;
    }

    /**
     * Sets the name property value. Name of the table.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the rows property value. Represents a collection of all the rows in the table. Read-only.
     *  @param array<WorkbookTableRow>|null $value Value to set for the rows property.
    */
    public function setRows(?array $value ): void {
        $this->rows = $value;
    }

    /**
     * Sets the showBandedColumns property value. Indicates whether the columns show banded formatting in which odd columns are highlighted differently from even ones to make reading the table easier.
     *  @param bool|null $value Value to set for the showBandedColumns property.
    */
    public function setShowBandedColumns(?bool $value ): void {
        $this->showBandedColumns = $value;
    }

    /**
     * Sets the showBandedRows property value. Indicates whether the rows show banded formatting in which odd rows are highlighted differently from even ones to make reading the table easier.
     *  @param bool|null $value Value to set for the showBandedRows property.
    */
    public function setShowBandedRows(?bool $value ): void {
        $this->showBandedRows = $value;
    }

    /**
     * Sets the showFilterButton property value. Indicates whether the filter buttons are visible at the top of each column header. Setting this is only allowed if the table contains a header row.
     *  @param bool|null $value Value to set for the showFilterButton property.
    */
    public function setShowFilterButton(?bool $value ): void {
        $this->showFilterButton = $value;
    }

    /**
     * Sets the showHeaders property value. Indicates whether the header row is visible or not. This value can be set to show or remove the header row.
     *  @param bool|null $value Value to set for the showHeaders property.
    */
    public function setShowHeaders(?bool $value ): void {
        $this->showHeaders = $value;
    }

    /**
     * Sets the showTotals property value. Indicates whether the total row is visible or not. This value can be set to show or remove the total row.
     *  @param bool|null $value Value to set for the showTotals property.
    */
    public function setShowTotals(?bool $value ): void {
        $this->showTotals = $value;
    }

    /**
     * Sets the sort property value. Represents the sorting for the table. Read-only.
     *  @param WorkbookTableSort|null $value Value to set for the sort property.
    */
    public function setSort(?WorkbookTableSort $value ): void {
        $this->sort = $value;
    }

    /**
     * Sets the style property value. Constant value that represents the Table style. The possible values are: TableStyleLight1 thru TableStyleLight21, TableStyleMedium1 thru TableStyleMedium28, TableStyleStyleDark1 thru TableStyleStyleDark11. A custom user-defined style present in the workbook can also be specified.
     *  @param string|null $value Value to set for the style property.
    */
    public function setStyle(?string $value ): void {
        $this->style = $value;
    }

    /**
     * Sets the worksheet property value. The worksheet containing the current table. Read-only.
     *  @param WorkbookWorksheet|null $value Value to set for the worksheet property.
    */
    public function setWorksheet(?WorkbookWorksheet $value ): void {
        $this->worksheet = $value;
    }

}
