<?php

namespace Microsoft\\Graph\\Generated\Models;

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
     * Gets the address property value. Represents the range reference in A1-style. Address value contains the Sheet reference (for example, Sheet1!A1:B4). Read-only.
     * @return string|null
    */
    public function getAddress(): ?string {
        $val = $this->getBackingStore()->get('address');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'address'");
    }

    /**
     * Gets the addressLocal property value. Represents range reference for the specified range in the language of the user. Read-only.
     * @return string|null
    */
    public function getAddressLocal(): ?string {
        $val = $this->getBackingStore()->get('addressLocal');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addressLocal'");
    }

    /**
     * Gets the cellCount property value. Number of cells in the range. Read-only.
     * @return int|null
    */
    public function getCellCount(): ?int {
        $val = $this->getBackingStore()->get('cellCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellCount'");
    }

    /**
     * Gets the columnCount property value. Represents the total number of columns in the range. Read-only.
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
     * Gets the columnHidden property value. Indicates whether all columns of the current range are hidden.
     * @return bool|null
    */
    public function getColumnHidden(): ?bool {
        $val = $this->getBackingStore()->get('columnHidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'columnHidden'");
    }

    /**
     * Gets the columnIndex property value. Represents the column number of the first cell in the range. Zero-indexed. Read-only.
     * @return int|null
    */
    public function getColumnIndex(): ?int {
        $val = $this->getBackingStore()->get('columnIndex');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'columnIndex'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'hidden' => fn(ParseNode $n) => $o->setHidden($n->getBooleanValue()),
            'rowCount' => fn(ParseNode $n) => $o->setRowCount($n->getIntegerValue()),
            'rowHidden' => fn(ParseNode $n) => $o->setRowHidden($n->getBooleanValue()),
            'rowIndex' => fn(ParseNode $n) => $o->setRowIndex($n->getIntegerValue()),
            'sort' => fn(ParseNode $n) => $o->setSort($n->getObjectValue([WorkbookRangeSort::class, 'createFromDiscriminatorValue'])),
            'worksheet' => fn(ParseNode $n) => $o->setWorksheet($n->getObjectValue([WorkbookWorksheet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the format property value. Returns a format object, encapsulating the range's font, fill, borders, alignment, and other properties. Read-only.
     * @return WorkbookRangeFormat|null
    */
    public function getFormat(): ?WorkbookRangeFormat {
        $val = $this->getBackingStore()->get('format');
        if (is_null($val) || $val instanceof WorkbookRangeFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'format'");
    }

    /**
     * Gets the hidden property value. Represents if all cells of the current range are hidden. Read-only.
     * @return bool|null
    */
    public function getHidden(): ?bool {
        $val = $this->getBackingStore()->get('hidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hidden'");
    }

    /**
     * Gets the rowCount property value. Returns the total number of rows in the range. Read-only.
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
     * Gets the rowHidden property value. Indicates whether all rows of the current range are hidden.
     * @return bool|null
    */
    public function getRowHidden(): ?bool {
        $val = $this->getBackingStore()->get('rowHidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rowHidden'");
    }

    /**
     * Gets the rowIndex property value. Returns the row number of the first cell in the range. Zero-indexed. Read-only.
     * @return int|null
    */
    public function getRowIndex(): ?int {
        $val = $this->getBackingStore()->get('rowIndex');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rowIndex'");
    }

    /**
     * Gets the sort property value. The worksheet containing the current range. Read-only.
     * @return WorkbookRangeSort|null
    */
    public function getSort(): ?WorkbookRangeSort {
        $val = $this->getBackingStore()->get('sort');
        if (is_null($val) || $val instanceof WorkbookRangeSort) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sort'");
    }

    /**
     * Gets the worksheet property value. The worksheet containing the current range. Read-only.
     * @return WorkbookWorksheet|null
    */
    public function getWorksheet(): ?WorkbookWorksheet {
        $val = $this->getBackingStore()->get('worksheet');
        if (is_null($val) || $val instanceof WorkbookWorksheet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'worksheet'");
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
        $writer->writeBooleanValue('hidden', $this->getHidden());
        $writer->writeIntegerValue('rowCount', $this->getRowCount());
        $writer->writeBooleanValue('rowHidden', $this->getRowHidden());
        $writer->writeIntegerValue('rowIndex', $this->getRowIndex());
        $writer->writeObjectValue('sort', $this->getSort());
        $writer->writeObjectValue('worksheet', $this->getWorksheet());
    }

    /**
     * Sets the address property value. Represents the range reference in A1-style. Address value contains the Sheet reference (for example, Sheet1!A1:B4). Read-only.
     * @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the addressLocal property value. Represents range reference for the specified range in the language of the user. Read-only.
     * @param string|null $value Value to set for the addressLocal property.
    */
    public function setAddressLocal(?string $value): void {
        $this->getBackingStore()->set('addressLocal', $value);
    }

    /**
     * Sets the cellCount property value. Number of cells in the range. Read-only.
     * @param int|null $value Value to set for the cellCount property.
    */
    public function setCellCount(?int $value): void {
        $this->getBackingStore()->set('cellCount', $value);
    }

    /**
     * Sets the columnCount property value. Represents the total number of columns in the range. Read-only.
     * @param int|null $value Value to set for the columnCount property.
    */
    public function setColumnCount(?int $value): void {
        $this->getBackingStore()->set('columnCount', $value);
    }

    /**
     * Sets the columnHidden property value. Indicates whether all columns of the current range are hidden.
     * @param bool|null $value Value to set for the columnHidden property.
    */
    public function setColumnHidden(?bool $value): void {
        $this->getBackingStore()->set('columnHidden', $value);
    }

    /**
     * Sets the columnIndex property value. Represents the column number of the first cell in the range. Zero-indexed. Read-only.
     * @param int|null $value Value to set for the columnIndex property.
    */
    public function setColumnIndex(?int $value): void {
        $this->getBackingStore()->set('columnIndex', $value);
    }

    /**
     * Sets the format property value. Returns a format object, encapsulating the range's font, fill, borders, alignment, and other properties. Read-only.
     * @param WorkbookRangeFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookRangeFormat $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the hidden property value. Represents if all cells of the current range are hidden. Read-only.
     * @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value): void {
        $this->getBackingStore()->set('hidden', $value);
    }

    /**
     * Sets the rowCount property value. Returns the total number of rows in the range. Read-only.
     * @param int|null $value Value to set for the rowCount property.
    */
    public function setRowCount(?int $value): void {
        $this->getBackingStore()->set('rowCount', $value);
    }

    /**
     * Sets the rowHidden property value. Indicates whether all rows of the current range are hidden.
     * @param bool|null $value Value to set for the rowHidden property.
    */
    public function setRowHidden(?bool $value): void {
        $this->getBackingStore()->set('rowHidden', $value);
    }

    /**
     * Sets the rowIndex property value. Returns the row number of the first cell in the range. Zero-indexed. Read-only.
     * @param int|null $value Value to set for the rowIndex property.
    */
    public function setRowIndex(?int $value): void {
        $this->getBackingStore()->set('rowIndex', $value);
    }

    /**
     * Sets the sort property value. The worksheet containing the current range. Read-only.
     * @param WorkbookRangeSort|null $value Value to set for the sort property.
    */
    public function setSort(?WorkbookRangeSort $value): void {
        $this->getBackingStore()->set('sort', $value);
    }

    /**
     * Sets the worksheet property value. The worksheet containing the current range. Read-only.
     * @param WorkbookWorksheet|null $value Value to set for the worksheet property.
    */
    public function setWorksheet(?WorkbookWorksheet $value): void {
        $this->getBackingStore()->set('worksheet', $value);
    }

}
