<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WorkbookRangeView extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbookRangeView and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('cellAddresses');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellAddresses'");
    }

    /**
     * Gets the columnCount property value. Returns the number of visible columns. Read-only.
     * @return int|null
    */
    public function getColumnCount(): ?int {
        $val = $this->getBackingStore()->get('columnCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'columnCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('formulas');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'formulas'");
    }

    /**
     * Gets the formulasLocal property value. Represents the formula in A1-style notation, in the user's language and number-formatting locale. For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
     * @return Json|null
    */
    public function getFormulasLocal(): ?Json {
        $val = $this->getBackingStore()->get('formulasLocal');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'formulasLocal'");
    }

    /**
     * Gets the formulasR1C1 property value. Represents the formula in R1C1-style notation.
     * @return Json|null
    */
    public function getFormulasR1C1(): ?Json {
        $val = $this->getBackingStore()->get('formulasR1C1');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'formulasR1C1'");
    }

    /**
     * Gets the index property value. Index of the range.
     * @return int|null
    */
    public function getIndex(): ?int {
        $val = $this->getBackingStore()->get('index');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'index'");
    }

    /**
     * Gets the numberFormat property value. Represents Excel's number format code for the given cell. Read-only.
     * @return Json|null
    */
    public function getNumberFormat(): ?Json {
        $val = $this->getBackingStore()->get('numberFormat');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberFormat'");
    }

    /**
     * Gets the rowCount property value. Returns the number of visible rows. Read-only.
     * @return int|null
    */
    public function getRowCount(): ?int {
        $val = $this->getBackingStore()->get('rowCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rowCount'");
    }

    /**
     * Gets the rows property value. Represents a collection of range views associated with the range. Read-only. Read-only.
     * @return array<WorkbookRangeView>|null
    */
    public function getRows(): ?array {
        $val = $this->getBackingStore()->get('rows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkbookRangeView::class);
            /** @var array<WorkbookRangeView>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rows'");
    }

    /**
     * Gets the text property value. Text values of the specified range. The Text value won't depend on the cell width. The # sign substitution that happens in Excel UI won't affect the text value returned by the API. Read-only.
     * @return Json|null
    */
    public function getText(): ?Json {
        $val = $this->getBackingStore()->get('text');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'text'");
    }

    /**
     * Gets the values property value. Represents the raw values of the specified range view. The data returned could be of type string, number, or a boolean. Cell that contains an error returns the error string.
     * @return Json|null
    */
    public function getValues(): ?Json {
        $val = $this->getBackingStore()->get('values');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'values'");
    }

    /**
     * Gets the valueTypes property value. Represents the type of data of each cell. Read-only. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error.
     * @return Json|null
    */
    public function getValueTypes(): ?Json {
        $val = $this->getBackingStore()->get('valueTypes');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueTypes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('cellAddresses', $this->getCellAddresses());
        $writer->writeIntegerValue('columnCount', $this->getColumnCount());
        $writer->writeObjectValue('formulas', $this->getFormulas());
        $writer->writeObjectValue('formulasLocal', $this->getFormulasLocal());
        $writer->writeObjectValue('formulasR1C1', $this->getFormulasR1C1());
        $writer->writeIntegerValue('index', $this->getIndex());
        $writer->writeObjectValue('numberFormat', $this->getNumberFormat());
        $writer->writeIntegerValue('rowCount', $this->getRowCount());
        $writer->writeCollectionOfObjectValues('rows', $this->getRows());
        $writer->writeObjectValue('text', $this->getText());
        $writer->writeObjectValue('values', $this->getValues());
        $writer->writeObjectValue('valueTypes', $this->getValueTypes());
    }

    /**
     * Sets the cellAddresses property value. Represents the cell addresses
     * @param Json|null $value Value to set for the cellAddresses property.
    */
    public function setCellAddresses(?Json $value): void {
        $this->getBackingStore()->set('cellAddresses', $value);
    }

    /**
     * Sets the columnCount property value. Returns the number of visible columns. Read-only.
     * @param int|null $value Value to set for the columnCount property.
    */
    public function setColumnCount(?int $value): void {
        $this->getBackingStore()->set('columnCount', $value);
    }

    /**
     * Sets the formulas property value. Represents the formula in A1-style notation.
     * @param Json|null $value Value to set for the formulas property.
    */
    public function setFormulas(?Json $value): void {
        $this->getBackingStore()->set('formulas', $value);
    }

    /**
     * Sets the formulasLocal property value. Represents the formula in A1-style notation, in the user's language and number-formatting locale. For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
     * @param Json|null $value Value to set for the formulasLocal property.
    */
    public function setFormulasLocal(?Json $value): void {
        $this->getBackingStore()->set('formulasLocal', $value);
    }

    /**
     * Sets the formulasR1C1 property value. Represents the formula in R1C1-style notation.
     * @param Json|null $value Value to set for the formulasR1C1 property.
    */
    public function setFormulasR1C1(?Json $value): void {
        $this->getBackingStore()->set('formulasR1C1', $value);
    }

    /**
     * Sets the index property value. Index of the range.
     * @param int|null $value Value to set for the index property.
    */
    public function setIndex(?int $value): void {
        $this->getBackingStore()->set('index', $value);
    }

    /**
     * Sets the numberFormat property value. Represents Excel's number format code for the given cell. Read-only.
     * @param Json|null $value Value to set for the numberFormat property.
    */
    public function setNumberFormat(?Json $value): void {
        $this->getBackingStore()->set('numberFormat', $value);
    }

    /**
     * Sets the rowCount property value. Returns the number of visible rows. Read-only.
     * @param int|null $value Value to set for the rowCount property.
    */
    public function setRowCount(?int $value): void {
        $this->getBackingStore()->set('rowCount', $value);
    }

    /**
     * Sets the rows property value. Represents a collection of range views associated with the range. Read-only. Read-only.
     * @param array<WorkbookRangeView>|null $value Value to set for the rows property.
    */
    public function setRows(?array $value): void {
        $this->getBackingStore()->set('rows', $value);
    }

    /**
     * Sets the text property value. Text values of the specified range. The Text value won't depend on the cell width. The # sign substitution that happens in Excel UI won't affect the text value returned by the API. Read-only.
     * @param Json|null $value Value to set for the text property.
    */
    public function setText(?Json $value): void {
        $this->getBackingStore()->set('text', $value);
    }

    /**
     * Sets the values property value. Represents the raw values of the specified range view. The data returned could be of type string, number, or a boolean. Cell that contains an error returns the error string.
     * @param Json|null $value Value to set for the values property.
    */
    public function setValues(?Json $value): void {
        $this->getBackingStore()->set('values', $value);
    }

    /**
     * Sets the valueTypes property value. Represents the type of data of each cell. Read-only. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error.
     * @param Json|null $value Value to set for the valueTypes property.
    */
    public function setValueTypes(?Json $value): void {
        $this->getBackingStore()->set('valueTypes', $value);
    }

}
