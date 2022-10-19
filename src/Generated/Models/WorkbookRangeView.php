<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookRangeView extends Entity implements Parsable 
{
    /**
     * @var Json|null $cellAddresses Represents the cell addresses
    */
    private ?Json $cellAddresses = null;
    
    /**
     * @var int|null $columnCount Returns the number of visible columns. Read-only.
    */
    private ?int $columnCount = null;
    
    /**
     * @var Json|null $formulas Represents the formula in A1-style notation.
    */
    private ?Json $formulas = null;
    
    /**
     * @var Json|null $formulasLocal Represents the formula in A1-style notation, in the user's language and number-formatting locale. For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
    */
    private ?Json $formulasLocal = null;
    
    /**
     * @var Json|null $formulasR1C1 Represents the formula in R1C1-style notation.
    */
    private ?Json $formulasR1C1 = null;
    
    /**
     * @var int|null $index Index of the range.
    */
    private ?int $index = null;
    
    /**
     * @var Json|null $numberFormat Represents Excel's number format code for the given cell. Read-only.
    */
    private ?Json $numberFormat = null;
    
    /**
     * @var int|null $rowCount Returns the number of visible rows. Read-only.
    */
    private ?int $rowCount = null;
    
    /**
     * @var array<WorkbookRangeView>|null $rows Represents a collection of range views associated with the range. Read-only. Read-only.
    */
    private ?array $rows = null;
    
    /**
     * @var Json|null $text Text values of the specified range. The Text value will not depend on the cell width. The # sign substitution that happens in Excel UI will not affect the text value returned by the API. Read-only.
    */
    private ?Json $text = null;
    
    /**
     * @var Json|null $values Represents the raw values of the specified range view. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
    */
    private ?Json $values = null;
    
    /**
     * @var Json|null $valueTypes Represents the type of data of each cell. Read-only. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error.
    */
    private ?Json $valueTypes = null;
    
    /**
     * Instantiates a new WorkbookRangeView and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookRangeView');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookRangeView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookRangeView {
        return new WorkbookRangeView();
    }

    /**
     * Gets the cellAddresses property value. Represents the cell addresses
     * @return Json|null
    */
    public function getCellAddresses(): ?Json {
        return $this->cellAddresses;
    }

    /**
     * Gets the columnCount property value. Returns the number of visible columns. Read-only.
     * @return int|null
    */
    public function getColumnCount(): ?int {
        return $this->columnCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cellAddresses' => fn(ParseNode $n) => $o->setCellAddresses($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'columnCount' => fn(ParseNode $n) => $o->setColumnCount($n->getIntegerValue()),
            'formulas' => fn(ParseNode $n) => $o->setFormulas($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'formulasLocal' => fn(ParseNode $n) => $o->setFormulasLocal($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'formulasR1C1' => fn(ParseNode $n) => $o->setFormulasR1C1($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'index' => fn(ParseNode $n) => $o->setIndex($n->getIntegerValue()),
            'numberFormat' => fn(ParseNode $n) => $o->setNumberFormat($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rowCount' => fn(ParseNode $n) => $o->setRowCount($n->getIntegerValue()),
            'rows' => fn(ParseNode $n) => $o->setRows($n->getCollectionOfObjectValues([WorkbookRangeView::class, 'createFromDiscriminatorValue'])),
            'text' => fn(ParseNode $n) => $o->setText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'values' => fn(ParseNode $n) => $o->setValues($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'valueTypes' => fn(ParseNode $n) => $o->setValueTypes($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the formulas property value. Represents the formula in A1-style notation.
     * @return Json|null
    */
    public function getFormulas(): ?Json {
        return $this->formulas;
    }

    /**
     * Gets the formulasLocal property value. Represents the formula in A1-style notation, in the user's language and number-formatting locale. For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
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
     * Gets the index property value. Index of the range.
     * @return int|null
    */
    public function getIndex(): ?int {
        return $this->index;
    }

    /**
     * Gets the numberFormat property value. Represents Excel's number format code for the given cell. Read-only.
     * @return Json|null
    */
    public function getNumberFormat(): ?Json {
        return $this->numberFormat;
    }

    /**
     * Gets the rowCount property value. Returns the number of visible rows. Read-only.
     * @return int|null
    */
    public function getRowCount(): ?int {
        return $this->rowCount;
    }

    /**
     * Gets the rows property value. Represents a collection of range views associated with the range. Read-only. Read-only.
     * @return array<WorkbookRangeView>|null
    */
    public function getRows(): ?array {
        return $this->rows;
    }

    /**
     * Gets the text property value. Text values of the specified range. The Text value will not depend on the cell width. The # sign substitution that happens in Excel UI will not affect the text value returned by the API. Read-only.
     * @return Json|null
    */
    public function getText(): ?Json {
        return $this->text;
    }

    /**
     * Gets the values property value. Represents the raw values of the specified range view. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
     * @return Json|null
    */
    public function getValues(): ?Json {
        return $this->values;
    }

    /**
     * Gets the valueTypes property value. Represents the type of data of each cell. Read-only. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error.
     * @return Json|null
    */
    public function getValueTypes(): ?Json {
        return $this->valueTypes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('cellAddresses', $this->cellAddresses);
        $writer->writeIntegerValue('columnCount', $this->columnCount);
        $writer->writeObjectValue('formulas', $this->formulas);
        $writer->writeObjectValue('formulasLocal', $this->formulasLocal);
        $writer->writeObjectValue('formulasR1C1', $this->formulasR1C1);
        $writer->writeIntegerValue('index', $this->index);
        $writer->writeObjectValue('numberFormat', $this->numberFormat);
        $writer->writeIntegerValue('rowCount', $this->rowCount);
        $writer->writeCollectionOfObjectValues('rows', $this->rows);
        $writer->writeObjectValue('text', $this->text);
        $writer->writeObjectValue('values', $this->values);
        $writer->writeObjectValue('valueTypes', $this->valueTypes);
    }

    /**
     * Sets the cellAddresses property value. Represents the cell addresses
     *  @param Json|null $value Value to set for the cellAddresses property.
    */
    public function setCellAddresses(?Json $value ): void {
        $this->cellAddresses = $value;
    }

    /**
     * Sets the columnCount property value. Returns the number of visible columns. Read-only.
     *  @param int|null $value Value to set for the columnCount property.
    */
    public function setColumnCount(?int $value ): void {
        $this->columnCount = $value;
    }

    /**
     * Sets the formulas property value. Represents the formula in A1-style notation.
     *  @param Json|null $value Value to set for the formulas property.
    */
    public function setFormulas(?Json $value ): void {
        $this->formulas = $value;
    }

    /**
     * Sets the formulasLocal property value. Represents the formula in A1-style notation, in the user's language and number-formatting locale. For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
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
     * Sets the index property value. Index of the range.
     *  @param int|null $value Value to set for the index property.
    */
    public function setIndex(?int $value ): void {
        $this->index = $value;
    }

    /**
     * Sets the numberFormat property value. Represents Excel's number format code for the given cell. Read-only.
     *  @param Json|null $value Value to set for the numberFormat property.
    */
    public function setNumberFormat(?Json $value ): void {
        $this->numberFormat = $value;
    }

    /**
     * Sets the rowCount property value. Returns the number of visible rows. Read-only.
     *  @param int|null $value Value to set for the rowCount property.
    */
    public function setRowCount(?int $value ): void {
        $this->rowCount = $value;
    }

    /**
     * Sets the rows property value. Represents a collection of range views associated with the range. Read-only. Read-only.
     *  @param array<WorkbookRangeView>|null $value Value to set for the rows property.
    */
    public function setRows(?array $value ): void {
        $this->rows = $value;
    }

    /**
     * Sets the text property value. Text values of the specified range. The Text value will not depend on the cell width. The # sign substitution that happens in Excel UI will not affect the text value returned by the API. Read-only.
     *  @param Json|null $value Value to set for the text property.
    */
    public function setText(?Json $value ): void {
        $this->text = $value;
    }

    /**
     * Sets the values property value. Represents the raw values of the specified range view. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
     *  @param Json|null $value Value to set for the values property.
    */
    public function setValues(?Json $value ): void {
        $this->values = $value;
    }

    /**
     * Sets the valueTypes property value. Represents the type of data of each cell. Read-only. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error.
     *  @param Json|null $value Value to set for the valueTypes property.
    */
    public function setValueTypes(?Json $value ): void {
        $this->valueTypes = $value;
    }

}
