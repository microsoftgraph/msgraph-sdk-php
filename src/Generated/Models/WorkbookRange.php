<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookRange extends Entity implements Parsable 
{
    /**
     * @var string|null $address Represents the range reference in A1-style. Address value will contain the Sheet reference (e.g. Sheet1!A1:B4). Read-only.
    */
    private ?string $address = null;
    
    /**
     * @var string|null $addressLocal Represents range reference for the specified range in the language of the user. Read-only.
    */
    private ?string $addressLocal = null;
    
    /**
     * @var int|null $cellCount Number of cells in the range. Read-only.
    */
    private ?int $cellCount = null;
    
    /**
     * @var int|null $columnCount Represents the total number of columns in the range. Read-only.
    */
    private ?int $columnCount = null;
    
    /**
     * @var bool|null $columnHidden Represents if all columns of the current range are hidden.
    */
    private ?bool $columnHidden = null;
    
    /**
     * @var int|null $columnIndex Represents the column number of the first cell in the range. Zero-indexed. Read-only.
    */
    private ?int $columnIndex = null;
    
    /**
     * @var WorkbookRangeFormat|null $format Returns a format object, encapsulating the range's font, fill, borders, alignment, and other properties. Read-only.
    */
    private ?WorkbookRangeFormat $format = null;
    
    /**
     * @var Json|null $formulas Represents the formula in A1-style notation.
    */
    private ?Json $formulas = null;
    
    /**
     * @var Json|null $formulasLocal Represents the formula in A1-style notation, in the user's language and number-formatting locale.  For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
    */
    private ?Json $formulasLocal = null;
    
    /**
     * @var Json|null $formulasR1C1 Represents the formula in R1C1-style notation.
    */
    private ?Json $formulasR1C1 = null;
    
    /**
     * @var bool|null $hidden Represents if all cells of the current range are hidden. Read-only.
    */
    private ?bool $hidden = null;
    
    /**
     * @var Json|null $numberFormat Represents Excel's number format code for the given cell.
    */
    private ?Json $numberFormat = null;
    
    /**
     * @var int|null $rowCount Returns the total number of rows in the range. Read-only.
    */
    private ?int $rowCount = null;
    
    /**
     * @var bool|null $rowHidden Represents if all rows of the current range are hidden.
    */
    private ?bool $rowHidden = null;
    
    /**
     * @var int|null $rowIndex Returns the row number of the first cell in the range. Zero-indexed. Read-only.
    */
    private ?int $rowIndex = null;
    
    /**
     * @var WorkbookRangeSort|null $sort The worksheet containing the current range. Read-only.
    */
    private ?WorkbookRangeSort $sort = null;
    
    /**
     * @var Json|null $text Text values of the specified range. The Text value will not depend on the cell width. The # sign substitution that happens in Excel UI will not affect the text value returned by the API. Read-only.
    */
    private ?Json $text = null;
    
    /**
     * @var Json|null $values Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
    */
    private ?Json $values = null;
    
    /**
     * @var Json|null $valueTypes Represents the type of data of each cell. Possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error. Read-only.
    */
    private ?Json $valueTypes = null;
    
    /**
     * @var WorkbookWorksheet|null $worksheet The worksheet containing the current range. Read-only.
    */
    private ?WorkbookWorksheet $worksheet = null;
    
    /**
     * Instantiates a new WorkbookRange and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookRange');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookRange {
        return new WorkbookRange();
    }

    /**
     * Gets the address property value. Represents the range reference in A1-style. Address value will contain the Sheet reference (e.g. Sheet1!A1:B4). Read-only.
     * @return string|null
    */
    public function getAddress(): ?string {
        return $this->address;
    }

    /**
     * Gets the addressLocal property value. Represents range reference for the specified range in the language of the user. Read-only.
     * @return string|null
    */
    public function getAddressLocal(): ?string {
        return $this->addressLocal;
    }

    /**
     * Gets the cellCount property value. Number of cells in the range. Read-only.
     * @return int|null
    */
    public function getCellCount(): ?int {
        return $this->cellCount;
    }

    /**
     * Gets the columnCount property value. Represents the total number of columns in the range. Read-only.
     * @return int|null
    */
    public function getColumnCount(): ?int {
        return $this->columnCount;
    }

    /**
     * Gets the columnHidden property value. Represents if all columns of the current range are hidden.
     * @return bool|null
    */
    public function getColumnHidden(): ?bool {
        return $this->columnHidden;
    }

    /**
     * Gets the columnIndex property value. Represents the column number of the first cell in the range. Zero-indexed. Read-only.
     * @return int|null
    */
    public function getColumnIndex(): ?int {
        return $this->columnIndex;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'address' => function (ParseNode $n) use ($o) { $o->setAddress($n->getStringValue()); },
            'addressLocal' => function (ParseNode $n) use ($o) { $o->setAddressLocal($n->getStringValue()); },
            'cellCount' => function (ParseNode $n) use ($o) { $o->setCellCount($n->getIntegerValue()); },
            'columnCount' => function (ParseNode $n) use ($o) { $o->setColumnCount($n->getIntegerValue()); },
            'columnHidden' => function (ParseNode $n) use ($o) { $o->setColumnHidden($n->getBooleanValue()); },
            'columnIndex' => function (ParseNode $n) use ($o) { $o->setColumnIndex($n->getIntegerValue()); },
            'format' => function (ParseNode $n) use ($o) { $o->setFormat($n->getObjectValue(array(WorkbookRangeFormat::class, 'createFromDiscriminatorValue'))); },
            'formulas' => function (ParseNode $n) use ($o) { $o->setFormulas($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'formulasLocal' => function (ParseNode $n) use ($o) { $o->setFormulasLocal($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'formulasR1C1' => function (ParseNode $n) use ($o) { $o->setFormulasR1C1($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'hidden' => function (ParseNode $n) use ($o) { $o->setHidden($n->getBooleanValue()); },
            'numberFormat' => function (ParseNode $n) use ($o) { $o->setNumberFormat($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'rowCount' => function (ParseNode $n) use ($o) { $o->setRowCount($n->getIntegerValue()); },
            'rowHidden' => function (ParseNode $n) use ($o) { $o->setRowHidden($n->getBooleanValue()); },
            'rowIndex' => function (ParseNode $n) use ($o) { $o->setRowIndex($n->getIntegerValue()); },
            'sort' => function (ParseNode $n) use ($o) { $o->setSort($n->getObjectValue(array(WorkbookRangeSort::class, 'createFromDiscriminatorValue'))); },
            'text' => function (ParseNode $n) use ($o) { $o->setText($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'values' => function (ParseNode $n) use ($o) { $o->setValues($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'valueTypes' => function (ParseNode $n) use ($o) { $o->setValueTypes($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'worksheet' => function (ParseNode $n) use ($o) { $o->setWorksheet($n->getObjectValue(array(WorkbookWorksheet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the format property value. Returns a format object, encapsulating the range's font, fill, borders, alignment, and other properties. Read-only.
     * @return WorkbookRangeFormat|null
    */
    public function getFormat(): ?WorkbookRangeFormat {
        return $this->format;
    }

    /**
     * Gets the formulas property value. Represents the formula in A1-style notation.
     * @return Json|null
    */
    public function getFormulas(): ?Json {
        return $this->formulas;
    }

    /**
     * Gets the formulasLocal property value. Represents the formula in A1-style notation, in the user's language and number-formatting locale.  For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
     * @return Json|null
    */
    public function getFormulasLocal(): ?Json {
        return $this->formulasLocal;
    }

    /**
     * Gets the formulasR1C1 property value. Represents the formula in R1C1-style notation.
     * @return Json|null
    */
    public function getFormulasR1C1(): ?Json {
        return $this->formulasR1C1;
    }

    /**
     * Gets the hidden property value. Represents if all cells of the current range are hidden. Read-only.
     * @return bool|null
    */
    public function getHidden(): ?bool {
        return $this->hidden;
    }

    /**
     * Gets the numberFormat property value. Represents Excel's number format code for the given cell.
     * @return Json|null
    */
    public function getNumberFormat(): ?Json {
        return $this->numberFormat;
    }

    /**
     * Gets the rowCount property value. Returns the total number of rows in the range. Read-only.
     * @return int|null
    */
    public function getRowCount(): ?int {
        return $this->rowCount;
    }

    /**
     * Gets the rowHidden property value. Represents if all rows of the current range are hidden.
     * @return bool|null
    */
    public function getRowHidden(): ?bool {
        return $this->rowHidden;
    }

    /**
     * Gets the rowIndex property value. Returns the row number of the first cell in the range. Zero-indexed. Read-only.
     * @return int|null
    */
    public function getRowIndex(): ?int {
        return $this->rowIndex;
    }

    /**
     * Gets the sort property value. The worksheet containing the current range. Read-only.
     * @return WorkbookRangeSort|null
    */
    public function getSort(): ?WorkbookRangeSort {
        return $this->sort;
    }

    /**
     * Gets the text property value. Text values of the specified range. The Text value will not depend on the cell width. The # sign substitution that happens in Excel UI will not affect the text value returned by the API. Read-only.
     * @return Json|null
    */
    public function getText(): ?Json {
        return $this->text;
    }

    /**
     * Gets the values property value. Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
     * @return Json|null
    */
    public function getValues(): ?Json {
        return $this->values;
    }

    /**
     * Gets the valueTypes property value. Represents the type of data of each cell. Possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error. Read-only.
     * @return Json|null
    */
    public function getValueTypes(): ?Json {
        return $this->valueTypes;
    }

    /**
     * Gets the worksheet property value. The worksheet containing the current range. Read-only.
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
        $writer->writeStringValue('address', $this->address);
        $writer->writeStringValue('addressLocal', $this->addressLocal);
        $writer->writeIntegerValue('cellCount', $this->cellCount);
        $writer->writeIntegerValue('columnCount', $this->columnCount);
        $writer->writeBooleanValue('columnHidden', $this->columnHidden);
        $writer->writeIntegerValue('columnIndex', $this->columnIndex);
        $writer->writeObjectValue('format', $this->format);
        $writer->writeObjectValue('formulas', $this->formulas);
        $writer->writeObjectValue('formulasLocal', $this->formulasLocal);
        $writer->writeObjectValue('formulasR1C1', $this->formulasR1C1);
        $writer->writeBooleanValue('hidden', $this->hidden);
        $writer->writeObjectValue('numberFormat', $this->numberFormat);
        $writer->writeIntegerValue('rowCount', $this->rowCount);
        $writer->writeBooleanValue('rowHidden', $this->rowHidden);
        $writer->writeIntegerValue('rowIndex', $this->rowIndex);
        $writer->writeObjectValue('sort', $this->sort);
        $writer->writeObjectValue('text', $this->text);
        $writer->writeObjectValue('values', $this->values);
        $writer->writeObjectValue('valueTypes', $this->valueTypes);
        $writer->writeObjectValue('worksheet', $this->worksheet);
    }

    /**
     * Sets the address property value. Represents the range reference in A1-style. Address value will contain the Sheet reference (e.g. Sheet1!A1:B4). Read-only.
     *  @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the addressLocal property value. Represents range reference for the specified range in the language of the user. Read-only.
     *  @param string|null $value Value to set for the addressLocal property.
    */
    public function setAddressLocal(?string $value ): void {
        $this->addressLocal = $value;
    }

    /**
     * Sets the cellCount property value. Number of cells in the range. Read-only.
     *  @param int|null $value Value to set for the cellCount property.
    */
    public function setCellCount(?int $value ): void {
        $this->cellCount = $value;
    }

    /**
     * Sets the columnCount property value. Represents the total number of columns in the range. Read-only.
     *  @param int|null $value Value to set for the columnCount property.
    */
    public function setColumnCount(?int $value ): void {
        $this->columnCount = $value;
    }

    /**
     * Sets the columnHidden property value. Represents if all columns of the current range are hidden.
     *  @param bool|null $value Value to set for the columnHidden property.
    */
    public function setColumnHidden(?bool $value ): void {
        $this->columnHidden = $value;
    }

    /**
     * Sets the columnIndex property value. Represents the column number of the first cell in the range. Zero-indexed. Read-only.
     *  @param int|null $value Value to set for the columnIndex property.
    */
    public function setColumnIndex(?int $value ): void {
        $this->columnIndex = $value;
    }

    /**
     * Sets the format property value. Returns a format object, encapsulating the range's font, fill, borders, alignment, and other properties. Read-only.
     *  @param WorkbookRangeFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookRangeFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the formulas property value. Represents the formula in A1-style notation.
     *  @param Json|null $value Value to set for the formulas property.
    */
    public function setFormulas(?Json $value ): void {
        $this->formulas = $value;
    }

    /**
     * Sets the formulasLocal property value. Represents the formula in A1-style notation, in the user's language and number-formatting locale.  For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
     *  @param Json|null $value Value to set for the formulasLocal property.
    */
    public function setFormulasLocal(?Json $value ): void {
        $this->formulasLocal = $value;
    }

    /**
     * Sets the formulasR1C1 property value. Represents the formula in R1C1-style notation.
     *  @param Json|null $value Value to set for the formulasR1C1 property.
    */
    public function setFormulasR1C1(?Json $value ): void {
        $this->formulasR1C1 = $value;
    }

    /**
     * Sets the hidden property value. Represents if all cells of the current range are hidden. Read-only.
     *  @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value ): void {
        $this->hidden = $value;
    }

    /**
     * Sets the numberFormat property value. Represents Excel's number format code for the given cell.
     *  @param Json|null $value Value to set for the numberFormat property.
    */
    public function setNumberFormat(?Json $value ): void {
        $this->numberFormat = $value;
    }

    /**
     * Sets the rowCount property value. Returns the total number of rows in the range. Read-only.
     *  @param int|null $value Value to set for the rowCount property.
    */
    public function setRowCount(?int $value ): void {
        $this->rowCount = $value;
    }

    /**
     * Sets the rowHidden property value. Represents if all rows of the current range are hidden.
     *  @param bool|null $value Value to set for the rowHidden property.
    */
    public function setRowHidden(?bool $value ): void {
        $this->rowHidden = $value;
    }

    /**
     * Sets the rowIndex property value. Returns the row number of the first cell in the range. Zero-indexed. Read-only.
     *  @param int|null $value Value to set for the rowIndex property.
    */
    public function setRowIndex(?int $value ): void {
        $this->rowIndex = $value;
    }

    /**
     * Sets the sort property value. The worksheet containing the current range. Read-only.
     *  @param WorkbookRangeSort|null $value Value to set for the sort property.
    */
    public function setSort(?WorkbookRangeSort $value ): void {
        $this->sort = $value;
    }

    /**
     * Sets the text property value. Text values of the specified range. The Text value will not depend on the cell width. The # sign substitution that happens in Excel UI will not affect the text value returned by the API. Read-only.
     *  @param Json|null $value Value to set for the text property.
    */
    public function setText(?Json $value ): void {
        $this->text = $value;
    }

    /**
     * Sets the values property value. Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
     *  @param Json|null $value Value to set for the values property.
    */
    public function setValues(?Json $value ): void {
        $this->values = $value;
    }

    /**
     * Sets the valueTypes property value. Represents the type of data of each cell. Possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error. Read-only.
     *  @param Json|null $value Value to set for the valueTypes property.
    */
    public function setValueTypes(?Json $value ): void {
        $this->valueTypes = $value;
    }

    /**
     * Sets the worksheet property value. The worksheet containing the current range. Read-only.
     *  @param WorkbookWorksheet|null $value Value to set for the worksheet property.
    */
    public function setWorksheet(?WorkbookWorksheet $value ): void {
        $this->worksheet = $value;
    }

}
