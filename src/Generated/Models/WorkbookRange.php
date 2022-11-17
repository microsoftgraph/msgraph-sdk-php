<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookRange extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('address');
    }

    /**
     * Gets the addressLocal property value. Represents range reference for the specified range in the language of the user. Read-only.
     * @return string|null
    */
    public function getAddressLocal(): ?string {
        return $this->getBackingStore()->get('addressLocal');
    }

    /**
     * Gets the cellCount property value. Number of cells in the range. Read-only.
     * @return int|null
    */
    public function getCellCount(): ?int {
        return $this->getBackingStore()->get('cellCount');
    }

    /**
     * Gets the columnCount property value. Represents the total number of columns in the range. Read-only.
     * @return int|null
    */
    public function getColumnCount(): ?int {
        return $this->getBackingStore()->get('columnCount');
    }

    /**
     * Gets the columnHidden property value. Represents if all columns of the current range are hidden.
     * @return bool|null
    */
    public function getColumnHidden(): ?bool {
        return $this->getBackingStore()->get('columnHidden');
    }

    /**
     * Gets the columnIndex property value. Represents the column number of the first cell in the range. Zero-indexed. Read-only.
     * @return int|null
    */
    public function getColumnIndex(): ?int {
        return $this->getBackingStore()->get('columnIndex');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getStringValue()),
            'addressLocal' => fn(ParseNode $n) => $o->setAddressLocal($n->getStringValue()),
            'cellCount' => fn(ParseNode $n) => $o->setCellCount($n->getIntegerValue()),
            'columnCount' => fn(ParseNode $n) => $o->setColumnCount($n->getIntegerValue()),
            'columnHidden' => fn(ParseNode $n) => $o->setColumnHidden($n->getBooleanValue()),
            'columnIndex' => fn(ParseNode $n) => $o->setColumnIndex($n->getIntegerValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getObjectValue([WorkbookRangeFormat::class, 'createFromDiscriminatorValue'])),
            'formulas' => fn(ParseNode $n) => $o->setFormulas($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'formulasLocal' => fn(ParseNode $n) => $o->setFormulasLocal($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'formulasR1C1' => fn(ParseNode $n) => $o->setFormulasR1C1($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'hidden' => fn(ParseNode $n) => $o->setHidden($n->getBooleanValue()),
            'numberFormat' => fn(ParseNode $n) => $o->setNumberFormat($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rowCount' => fn(ParseNode $n) => $o->setRowCount($n->getIntegerValue()),
            'rowHidden' => fn(ParseNode $n) => $o->setRowHidden($n->getBooleanValue()),
            'rowIndex' => fn(ParseNode $n) => $o->setRowIndex($n->getIntegerValue()),
            'sort' => fn(ParseNode $n) => $o->setSort($n->getObjectValue([WorkbookRangeSort::class, 'createFromDiscriminatorValue'])),
            'text' => fn(ParseNode $n) => $o->setText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'values' => fn(ParseNode $n) => $o->setValues($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'valueTypes' => fn(ParseNode $n) => $o->setValueTypes($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'worksheet' => fn(ParseNode $n) => $o->setWorksheet($n->getObjectValue([WorkbookWorksheet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the format property value. Returns a format object, encapsulating the range's font, fill, borders, alignment, and other properties. Read-only.
     * @return WorkbookRangeFormat|null
    */
    public function getFormat(): ?WorkbookRangeFormat {
        return $this->getBackingStore()->get('format');
    }

    /**
     * Gets the formulas property value. Represents the formula in A1-style notation.
     * @return Json|null
    */
    public function getFormulas(): ?Json {
        return $this->getBackingStore()->get('formulas');
    }

    /**
     * Gets the formulasLocal property value. Represents the formula in A1-style notation, in the user's language and number-formatting locale.  For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
     * @return Json|null
    */
    public function getFormulasLocal(): ?Json {
        return $this->getBackingStore()->get('formulasLocal');
    }

    /**
     * Gets the formulasR1C1 property value. Represents the formula in R1C1-style notation.
     * @return Json|null
    */
    public function getFormulasR1C1(): ?Json {
        return $this->getBackingStore()->get('formulasR1C1');
    }

    /**
     * Gets the hidden property value. Represents if all cells of the current range are hidden. Read-only.
     * @return bool|null
    */
    public function getHidden(): ?bool {
        return $this->getBackingStore()->get('hidden');
    }

    /**
     * Gets the numberFormat property value. Represents Excel's number format code for the given cell.
     * @return Json|null
    */
    public function getNumberFormat(): ?Json {
        return $this->getBackingStore()->get('numberFormat');
    }

    /**
     * Gets the rowCount property value. Returns the total number of rows in the range. Read-only.
     * @return int|null
    */
    public function getRowCount(): ?int {
        return $this->getBackingStore()->get('rowCount');
    }

    /**
     * Gets the rowHidden property value. Represents if all rows of the current range are hidden.
     * @return bool|null
    */
    public function getRowHidden(): ?bool {
        return $this->getBackingStore()->get('rowHidden');
    }

    /**
     * Gets the rowIndex property value. Returns the row number of the first cell in the range. Zero-indexed. Read-only.
     * @return int|null
    */
    public function getRowIndex(): ?int {
        return $this->getBackingStore()->get('rowIndex');
    }

    /**
     * Gets the sort property value. The worksheet containing the current range. Read-only.
     * @return WorkbookRangeSort|null
    */
    public function getSort(): ?WorkbookRangeSort {
        return $this->getBackingStore()->get('sort');
    }

    /**
     * Gets the text property value. Text values of the specified range. The Text value will not depend on the cell width. The # sign substitution that happens in Excel UI will not affect the text value returned by the API. Read-only.
     * @return Json|null
    */
    public function getText(): ?Json {
        return $this->getBackingStore()->get('text');
    }

    /**
     * Gets the values property value. Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
     * @return Json|null
    */
    public function getValues(): ?Json {
        return $this->getBackingStore()->get('values');
    }

    /**
     * Gets the valueTypes property value. Represents the type of data of each cell. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error. Read-only.
     * @return Json|null
    */
    public function getValueTypes(): ?Json {
        return $this->getBackingStore()->get('valueTypes');
    }

    /**
     * Gets the worksheet property value. The worksheet containing the current range. Read-only.
     * @return WorkbookWorksheet|null
    */
    public function getWorksheet(): ?WorkbookWorksheet {
        return $this->getBackingStore()->get('worksheet');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('address', $this->getAddress());
        $writer->writeStringValue('addressLocal', $this->getAddressLocal());
        $writer->writeIntegerValue('cellCount', $this->getCellCount());
        $writer->writeIntegerValue('columnCount', $this->getColumnCount());
        $writer->writeBooleanValue('columnHidden', $this->getColumnHidden());
        $writer->writeIntegerValue('columnIndex', $this->getColumnIndex());
        $writer->writeObjectValue('format', $this->getFormat());
        $writer->writeObjectValue('formulas', $this->getFormulas());
        $writer->writeObjectValue('formulasLocal', $this->getFormulasLocal());
        $writer->writeObjectValue('formulasR1C1', $this->getFormulasR1C1());
        $writer->writeBooleanValue('hidden', $this->getHidden());
        $writer->writeObjectValue('numberFormat', $this->getNumberFormat());
        $writer->writeIntegerValue('rowCount', $this->getRowCount());
        $writer->writeBooleanValue('rowHidden', $this->getRowHidden());
        $writer->writeIntegerValue('rowIndex', $this->getRowIndex());
        $writer->writeObjectValue('sort', $this->getSort());
        $writer->writeObjectValue('text', $this->getText());
        $writer->writeObjectValue('values', $this->getValues());
        $writer->writeObjectValue('valueTypes', $this->getValueTypes());
        $writer->writeObjectValue('worksheet', $this->getWorksheet());
    }

    /**
     * Sets the address property value. Represents the range reference in A1-style. Address value will contain the Sheet reference (e.g. Sheet1!A1:B4). Read-only.
     *  @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the addressLocal property value. Represents range reference for the specified range in the language of the user. Read-only.
     *  @param string|null $value Value to set for the addressLocal property.
    */
    public function setAddressLocal(?string $value): void {
        $this->getBackingStore()->set('addressLocal', $value);
    }

    /**
     * Sets the cellCount property value. Number of cells in the range. Read-only.
     *  @param int|null $value Value to set for the cellCount property.
    */
    public function setCellCount(?int $value): void {
        $this->getBackingStore()->set('cellCount', $value);
    }

    /**
     * Sets the columnCount property value. Represents the total number of columns in the range. Read-only.
     *  @param int|null $value Value to set for the columnCount property.
    */
    public function setColumnCount(?int $value): void {
        $this->getBackingStore()->set('columnCount', $value);
    }

    /**
     * Sets the columnHidden property value. Represents if all columns of the current range are hidden.
     *  @param bool|null $value Value to set for the columnHidden property.
    */
    public function setColumnHidden(?bool $value): void {
        $this->getBackingStore()->set('columnHidden', $value);
    }

    /**
     * Sets the columnIndex property value. Represents the column number of the first cell in the range. Zero-indexed. Read-only.
     *  @param int|null $value Value to set for the columnIndex property.
    */
    public function setColumnIndex(?int $value): void {
        $this->getBackingStore()->set('columnIndex', $value);
    }

    /**
     * Sets the format property value. Returns a format object, encapsulating the range's font, fill, borders, alignment, and other properties. Read-only.
     *  @param WorkbookRangeFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookRangeFormat $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the formulas property value. Represents the formula in A1-style notation.
     *  @param Json|null $value Value to set for the formulas property.
    */
    public function setFormulas(?Json $value): void {
        $this->getBackingStore()->set('formulas', $value);
    }

    /**
     * Sets the formulasLocal property value. Represents the formula in A1-style notation, in the user's language and number-formatting locale.  For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
     *  @param Json|null $value Value to set for the formulasLocal property.
    */
    public function setFormulasLocal(?Json $value): void {
        $this->getBackingStore()->set('formulasLocal', $value);
    }

    /**
     * Sets the formulasR1C1 property value. Represents the formula in R1C1-style notation.
     *  @param Json|null $value Value to set for the formulasR1C1 property.
    */
    public function setFormulasR1C1(?Json $value): void {
        $this->getBackingStore()->set('formulasR1C1', $value);
    }

    /**
     * Sets the hidden property value. Represents if all cells of the current range are hidden. Read-only.
     *  @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value): void {
        $this->getBackingStore()->set('hidden', $value);
    }

    /**
     * Sets the numberFormat property value. Represents Excel's number format code for the given cell.
     *  @param Json|null $value Value to set for the numberFormat property.
    */
    public function setNumberFormat(?Json $value): void {
        $this->getBackingStore()->set('numberFormat', $value);
    }

    /**
     * Sets the rowCount property value. Returns the total number of rows in the range. Read-only.
     *  @param int|null $value Value to set for the rowCount property.
    */
    public function setRowCount(?int $value): void {
        $this->getBackingStore()->set('rowCount', $value);
    }

    /**
     * Sets the rowHidden property value. Represents if all rows of the current range are hidden.
     *  @param bool|null $value Value to set for the rowHidden property.
    */
    public function setRowHidden(?bool $value): void {
        $this->getBackingStore()->set('rowHidden', $value);
    }

    /**
     * Sets the rowIndex property value. Returns the row number of the first cell in the range. Zero-indexed. Read-only.
     *  @param int|null $value Value to set for the rowIndex property.
    */
    public function setRowIndex(?int $value): void {
        $this->getBackingStore()->set('rowIndex', $value);
    }

    /**
     * Sets the sort property value. The worksheet containing the current range. Read-only.
     *  @param WorkbookRangeSort|null $value Value to set for the sort property.
    */
    public function setSort(?WorkbookRangeSort $value): void {
        $this->getBackingStore()->set('sort', $value);
    }

    /**
     * Sets the text property value. Text values of the specified range. The Text value will not depend on the cell width. The # sign substitution that happens in Excel UI will not affect the text value returned by the API. Read-only.
     *  @param Json|null $value Value to set for the text property.
    */
    public function setText(?Json $value): void {
        $this->getBackingStore()->set('text', $value);
    }

    /**
     * Sets the values property value. Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
     *  @param Json|null $value Value to set for the values property.
    */
    public function setValues(?Json $value): void {
        $this->getBackingStore()->set('values', $value);
    }

    /**
     * Sets the valueTypes property value. Represents the type of data of each cell. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error. Read-only.
     *  @param Json|null $value Value to set for the valueTypes property.
    */
    public function setValueTypes(?Json $value): void {
        $this->getBackingStore()->set('valueTypes', $value);
    }

    /**
     * Sets the worksheet property value. The worksheet containing the current range. Read-only.
     *  @param WorkbookWorksheet|null $value Value to set for the worksheet property.
    */
    public function setWorksheet(?WorkbookWorksheet $value): void {
        $this->getBackingStore()->set('worksheet', $value);
    }

}
