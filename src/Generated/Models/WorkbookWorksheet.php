<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookWorksheet extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbookWorksheet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookWorksheet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookWorksheet {
        return new WorkbookWorksheet();
    }

    /**
     * Gets the charts property value. Returns collection of charts that are part of the worksheet. Read-only.
     * @return array<WorkbookChart>|null
    */
    public function getCharts(): ?array {
        return $this->getBackingStore()->get('charts');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'charts' => fn(ParseNode $n) => $o->setCharts($n->getCollectionOfObjectValues([WorkbookChart::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'names' => fn(ParseNode $n) => $o->setNames($n->getCollectionOfObjectValues([WorkbookNamedItem::class, 'createFromDiscriminatorValue'])),
            'pivotTables' => fn(ParseNode $n) => $o->setPivotTables($n->getCollectionOfObjectValues([WorkbookPivotTable::class, 'createFromDiscriminatorValue'])),
            'position' => fn(ParseNode $n) => $o->setPosition($n->getIntegerValue()),
            'protection' => fn(ParseNode $n) => $o->setProtection($n->getObjectValue([WorkbookWorksheetProtection::class, 'createFromDiscriminatorValue'])),
            'tables' => fn(ParseNode $n) => $o->setTables($n->getCollectionOfObjectValues([WorkbookTable::class, 'createFromDiscriminatorValue'])),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getStringValue()),
        ]);
    }

    /**
     * Gets the name property value. The display name of the worksheet.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the names property value. Returns collection of names that are associated with the worksheet. Read-only.
     * @return array<WorkbookNamedItem>|null
    */
    public function getNames(): ?array {
        return $this->getBackingStore()->get('names');
    }

    /**
     * Gets the pivotTables property value. Collection of PivotTables that are part of the worksheet.
     * @return array<WorkbookPivotTable>|null
    */
    public function getPivotTables(): ?array {
        return $this->getBackingStore()->get('pivotTables');
    }

    /**
     * Gets the position property value. The zero-based position of the worksheet within the workbook.
     * @return int|null
    */
    public function getPosition(): ?int {
        return $this->getBackingStore()->get('position');
    }

    /**
     * Gets the protection property value. Returns sheet protection object for a worksheet. Read-only.
     * @return WorkbookWorksheetProtection|null
    */
    public function getProtection(): ?WorkbookWorksheetProtection {
        return $this->getBackingStore()->get('protection');
    }

    /**
     * Gets the tables property value. Collection of tables that are part of the worksheet. Read-only.
     * @return array<WorkbookTable>|null
    */
    public function getTables(): ?array {
        return $this->getBackingStore()->get('tables');
    }

    /**
     * Gets the visibility property value. The Visibility of the worksheet. The possible values are: Visible, Hidden, VeryHidden.
     * @return string|null
    */
    public function getVisibility(): ?string {
        return $this->getBackingStore()->get('visibility');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('charts', $this->getCharts());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('names', $this->getNames());
        $writer->writeCollectionOfObjectValues('pivotTables', $this->getPivotTables());
        $writer->writeIntegerValue('position', $this->getPosition());
        $writer->writeObjectValue('protection', $this->getProtection());
        $writer->writeCollectionOfObjectValues('tables', $this->getTables());
        $writer->writeStringValue('visibility', $this->getVisibility());
    }

    /**
     * Sets the charts property value. Returns collection of charts that are part of the worksheet. Read-only.
     *  @param array<WorkbookChart>|null $value Value to set for the charts property.
    */
    public function setCharts(?array $value): void {
        $this->getBackingStore()->set('charts', $value);
    }

    /**
     * Sets the name property value. The display name of the worksheet.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the names property value. Returns collection of names that are associated with the worksheet. Read-only.
     *  @param array<WorkbookNamedItem>|null $value Value to set for the names property.
    */
    public function setNames(?array $value): void {
        $this->getBackingStore()->set('names', $value);
    }

    /**
     * Sets the pivotTables property value. Collection of PivotTables that are part of the worksheet.
     *  @param array<WorkbookPivotTable>|null $value Value to set for the pivotTables property.
    */
    public function setPivotTables(?array $value): void {
        $this->getBackingStore()->set('pivotTables', $value);
    }

    /**
     * Sets the position property value. The zero-based position of the worksheet within the workbook.
     *  @param int|null $value Value to set for the position property.
    */
    public function setPosition(?int $value): void {
        $this->getBackingStore()->set('position', $value);
    }

    /**
     * Sets the protection property value. Returns sheet protection object for a worksheet. Read-only.
     *  @param WorkbookWorksheetProtection|null $value Value to set for the protection property.
    */
    public function setProtection(?WorkbookWorksheetProtection $value): void {
        $this->getBackingStore()->set('protection', $value);
    }

    /**
     * Sets the tables property value. Collection of tables that are part of the worksheet. Read-only.
     *  @param array<WorkbookTable>|null $value Value to set for the tables property.
    */
    public function setTables(?array $value): void {
        $this->getBackingStore()->set('tables', $value);
    }

    /**
     * Sets the visibility property value. The Visibility of the worksheet. The possible values are: Visible, Hidden, VeryHidden.
     *  @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value): void {
        $this->getBackingStore()->set('visibility', $value);
    }

}
