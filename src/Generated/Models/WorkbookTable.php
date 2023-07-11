<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WorkbookTable extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new workbookTable and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('columns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkbookTableColumn::class);
            /** @var array<WorkbookTableColumn>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'columns'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'columns' => fn(ParseNode $n) => $o->setColumns($n->getCollectionOfObjectValues([WorkbookTableColumn::class, 'createFromDiscriminatorValue'])),
            'highlightFirstColumn' => fn(ParseNode $n) => $o->setHighlightFirstColumn($n->getBooleanValue()),
            'highlightLastColumn' => fn(ParseNode $n) => $o->setHighlightLastColumn($n->getBooleanValue()),
            'legacyId' => fn(ParseNode $n) => $o->setLegacyId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'rows' => fn(ParseNode $n) => $o->setRows($n->getCollectionOfObjectValues([WorkbookTableRow::class, 'createFromDiscriminatorValue'])),
            'showBandedColumns' => fn(ParseNode $n) => $o->setShowBandedColumns($n->getBooleanValue()),
            'showBandedRows' => fn(ParseNode $n) => $o->setShowBandedRows($n->getBooleanValue()),
            'showFilterButton' => fn(ParseNode $n) => $o->setShowFilterButton($n->getBooleanValue()),
            'showHeaders' => fn(ParseNode $n) => $o->setShowHeaders($n->getBooleanValue()),
            'showTotals' => fn(ParseNode $n) => $o->setShowTotals($n->getBooleanValue()),
            'sort' => fn(ParseNode $n) => $o->setSort($n->getObjectValue([WorkbookTableSort::class, 'createFromDiscriminatorValue'])),
            'style' => fn(ParseNode $n) => $o->setStyle($n->getStringValue()),
            'worksheet' => fn(ParseNode $n) => $o->setWorksheet($n->getObjectValue([WorkbookWorksheet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the highlightFirstColumn property value. Indicates whether the first column contains special formatting.
     * @return bool|null
    */
    public function getHighlightFirstColumn(): ?bool {
        $val = $this->getBackingStore()->get('highlightFirstColumn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'highlightFirstColumn'");
    }

    /**
     * Gets the highlightLastColumn property value. Indicates whether the last column contains special formatting.
     * @return bool|null
    */
    public function getHighlightLastColumn(): ?bool {
        $val = $this->getBackingStore()->get('highlightLastColumn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'highlightLastColumn'");
    }

    /**
     * Gets the legacyId property value. Legacy Id used in older Excle clients. The value of the identifier remains the same even when the table is renamed. This property should be interpreted as an opaque string value and should not be parsed to any other type. Read-only.
     * @return string|null
    */
    public function getLegacyId(): ?string {
        $val = $this->getBackingStore()->get('legacyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'legacyId'");
    }

    /**
     * Gets the name property value. Name of the table.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the rows property value. Represents a collection of all the rows in the table. Read-only.
     * @return array<WorkbookTableRow>|null
    */
    public function getRows(): ?array {
        $val = $this->getBackingStore()->get('rows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkbookTableRow::class);
            /** @var array<WorkbookTableRow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rows'");
    }

    /**
     * Gets the showBandedColumns property value. Indicates whether the columns show banded formatting in which odd columns are highlighted differently from even ones to make reading the table easier.
     * @return bool|null
    */
    public function getShowBandedColumns(): ?bool {
        $val = $this->getBackingStore()->get('showBandedColumns');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showBandedColumns'");
    }

    /**
     * Gets the showBandedRows property value. Indicates whether the rows show banded formatting in which odd rows are highlighted differently from even ones to make reading the table easier.
     * @return bool|null
    */
    public function getShowBandedRows(): ?bool {
        $val = $this->getBackingStore()->get('showBandedRows');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showBandedRows'");
    }

    /**
     * Gets the showFilterButton property value. Indicates whether the filter buttons are visible at the top of each column header. Setting this is only allowed if the table contains a header row.
     * @return bool|null
    */
    public function getShowFilterButton(): ?bool {
        $val = $this->getBackingStore()->get('showFilterButton');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showFilterButton'");
    }

    /**
     * Gets the showHeaders property value. Indicates whether the header row is visible or not. This value can be set to show or remove the header row.
     * @return bool|null
    */
    public function getShowHeaders(): ?bool {
        $val = $this->getBackingStore()->get('showHeaders');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showHeaders'");
    }

    /**
     * Gets the showTotals property value. Indicates whether the total row is visible or not. This value can be set to show or remove the total row.
     * @return bool|null
    */
    public function getShowTotals(): ?bool {
        $val = $this->getBackingStore()->get('showTotals');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showTotals'");
    }

    /**
     * Gets the sort property value. Represents the sorting for the table. Read-only.
     * @return WorkbookTableSort|null
    */
    public function getSort(): ?WorkbookTableSort {
        $val = $this->getBackingStore()->get('sort');
        if (is_null($val) || $val instanceof WorkbookTableSort) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sort'");
    }

    /**
     * Gets the style property value. Constant value that represents the Table style. The possible values are: TableStyleLight1 thru TableStyleLight21, TableStyleMedium1 thru TableStyleMedium28, TableStyleStyleDark1 thru TableStyleStyleDark11. A custom user-defined style present in the workbook can also be specified.
     * @return string|null
    */
    public function getStyle(): ?string {
        $val = $this->getBackingStore()->get('style');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'style'");
    }

    /**
     * Gets the worksheet property value. The worksheet containing the current table. Read-only.
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
        $writer->writeCollectionOfObjectValues('columns', $this->getColumns());
        $writer->writeBooleanValue('highlightFirstColumn', $this->getHighlightFirstColumn());
        $writer->writeBooleanValue('highlightLastColumn', $this->getHighlightLastColumn());
        $writer->writeStringValue('legacyId', $this->getLegacyId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('rows', $this->getRows());
        $writer->writeBooleanValue('showBandedColumns', $this->getShowBandedColumns());
        $writer->writeBooleanValue('showBandedRows', $this->getShowBandedRows());
        $writer->writeBooleanValue('showFilterButton', $this->getShowFilterButton());
        $writer->writeBooleanValue('showHeaders', $this->getShowHeaders());
        $writer->writeBooleanValue('showTotals', $this->getShowTotals());
        $writer->writeObjectValue('sort', $this->getSort());
        $writer->writeStringValue('style', $this->getStyle());
        $writer->writeObjectValue('worksheet', $this->getWorksheet());
    }

    /**
     * Sets the columns property value. Represents a collection of all the columns in the table. Read-only.
     * @param array<WorkbookTableColumn>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value): void {
        $this->getBackingStore()->set('columns', $value);
    }

    /**
     * Sets the highlightFirstColumn property value. Indicates whether the first column contains special formatting.
     * @param bool|null $value Value to set for the highlightFirstColumn property.
    */
    public function setHighlightFirstColumn(?bool $value): void {
        $this->getBackingStore()->set('highlightFirstColumn', $value);
    }

    /**
     * Sets the highlightLastColumn property value. Indicates whether the last column contains special formatting.
     * @param bool|null $value Value to set for the highlightLastColumn property.
    */
    public function setHighlightLastColumn(?bool $value): void {
        $this->getBackingStore()->set('highlightLastColumn', $value);
    }

    /**
     * Sets the legacyId property value. Legacy Id used in older Excle clients. The value of the identifier remains the same even when the table is renamed. This property should be interpreted as an opaque string value and should not be parsed to any other type. Read-only.
     * @param string|null $value Value to set for the legacyId property.
    */
    public function setLegacyId(?string $value): void {
        $this->getBackingStore()->set('legacyId', $value);
    }

    /**
     * Sets the name property value. Name of the table.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the rows property value. Represents a collection of all the rows in the table. Read-only.
     * @param array<WorkbookTableRow>|null $value Value to set for the rows property.
    */
    public function setRows(?array $value): void {
        $this->getBackingStore()->set('rows', $value);
    }

    /**
     * Sets the showBandedColumns property value. Indicates whether the columns show banded formatting in which odd columns are highlighted differently from even ones to make reading the table easier.
     * @param bool|null $value Value to set for the showBandedColumns property.
    */
    public function setShowBandedColumns(?bool $value): void {
        $this->getBackingStore()->set('showBandedColumns', $value);
    }

    /**
     * Sets the showBandedRows property value. Indicates whether the rows show banded formatting in which odd rows are highlighted differently from even ones to make reading the table easier.
     * @param bool|null $value Value to set for the showBandedRows property.
    */
    public function setShowBandedRows(?bool $value): void {
        $this->getBackingStore()->set('showBandedRows', $value);
    }

    /**
     * Sets the showFilterButton property value. Indicates whether the filter buttons are visible at the top of each column header. Setting this is only allowed if the table contains a header row.
     * @param bool|null $value Value to set for the showFilterButton property.
    */
    public function setShowFilterButton(?bool $value): void {
        $this->getBackingStore()->set('showFilterButton', $value);
    }

    /**
     * Sets the showHeaders property value. Indicates whether the header row is visible or not. This value can be set to show or remove the header row.
     * @param bool|null $value Value to set for the showHeaders property.
    */
    public function setShowHeaders(?bool $value): void {
        $this->getBackingStore()->set('showHeaders', $value);
    }

    /**
     * Sets the showTotals property value. Indicates whether the total row is visible or not. This value can be set to show or remove the total row.
     * @param bool|null $value Value to set for the showTotals property.
    */
    public function setShowTotals(?bool $value): void {
        $this->getBackingStore()->set('showTotals', $value);
    }

    /**
     * Sets the sort property value. Represents the sorting for the table. Read-only.
     * @param WorkbookTableSort|null $value Value to set for the sort property.
    */
    public function setSort(?WorkbookTableSort $value): void {
        $this->getBackingStore()->set('sort', $value);
    }

    /**
     * Sets the style property value. Constant value that represents the Table style. The possible values are: TableStyleLight1 thru TableStyleLight21, TableStyleMedium1 thru TableStyleMedium28, TableStyleStyleDark1 thru TableStyleStyleDark11. A custom user-defined style present in the workbook can also be specified.
     * @param string|null $value Value to set for the style property.
    */
    public function setStyle(?string $value): void {
        $this->getBackingStore()->set('style', $value);
    }

    /**
     * Sets the worksheet property value. The worksheet containing the current table. Read-only.
     * @param WorkbookWorksheet|null $value Value to set for the worksheet property.
    */
    public function setWorksheet(?WorkbookWorksheet $value): void {
        $this->getBackingStore()->set('worksheet', $value);
    }

}
