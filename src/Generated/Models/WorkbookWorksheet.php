<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookWorksheet extends Entity implements Parsable 
{
    /**
     * @var array<WorkbookChart>|null $charts Returns collection of charts that are part of the worksheet. Read-only.
    */
    private ?array $charts = null;
    
    /**
     * @var string|null $name The display name of the worksheet.
    */
    private ?string $name = null;
    
    /**
     * @var array<WorkbookNamedItem>|null $names Returns collection of names that are associated with the worksheet. Read-only.
    */
    private ?array $names = null;
    
    /**
     * @var array<WorkbookPivotTable>|null $pivotTables Collection of PivotTables that are part of the worksheet.
    */
    private ?array $pivotTables = null;
    
    /**
     * @var int|null $position The zero-based position of the worksheet within the workbook.
    */
    private ?int $position = null;
    
    /**
     * @var WorkbookWorksheetProtection|null $protection Returns sheet protection object for a worksheet. Read-only.
    */
    private ?WorkbookWorksheetProtection $protection = null;
    
    /**
     * @var array<WorkbookTable>|null $tables Collection of tables that are part of the worksheet. Read-only.
    */
    private ?array $tables = null;
    
    /**
     * @var string|null $visibility The Visibility of the worksheet. The possible values are: Visible, Hidden, VeryHidden.
    */
    private ?string $visibility = null;
    
    /**
     * Instantiates a new workbookWorksheet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookWorksheet');
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
        return $this->charts;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'charts' => function (ParseNode $n) use ($o) { $o->setCharts($n->getCollectionOfObjectValues(array(WorkbookChart::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'names' => function (ParseNode $n) use ($o) { $o->setNames($n->getCollectionOfObjectValues(array(WorkbookNamedItem::class, 'createFromDiscriminatorValue'))); },
            'pivotTables' => function (ParseNode $n) use ($o) { $o->setPivotTables($n->getCollectionOfObjectValues(array(WorkbookPivotTable::class, 'createFromDiscriminatorValue'))); },
            'position' => function (ParseNode $n) use ($o) { $o->setPosition($n->getIntegerValue()); },
            'protection' => function (ParseNode $n) use ($o) { $o->setProtection($n->getObjectValue(array(WorkbookWorksheetProtection::class, 'createFromDiscriminatorValue'))); },
            'tables' => function (ParseNode $n) use ($o) { $o->setTables($n->getCollectionOfObjectValues(array(WorkbookTable::class, 'createFromDiscriminatorValue'))); },
            'visibility' => function (ParseNode $n) use ($o) { $o->setVisibility($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the name property value. The display name of the worksheet.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the names property value. Returns collection of names that are associated with the worksheet. Read-only.
     * @return array<WorkbookNamedItem>|null
    */
    public function getNames(): ?array {
        return $this->names;
    }

    /**
     * Gets the pivotTables property value. Collection of PivotTables that are part of the worksheet.
     * @return array<WorkbookPivotTable>|null
    */
    public function getPivotTables(): ?array {
        return $this->pivotTables;
    }

    /**
     * Gets the position property value. The zero-based position of the worksheet within the workbook.
     * @return int|null
    */
    public function getPosition(): ?int {
        return $this->position;
    }

    /**
     * Gets the protection property value. Returns sheet protection object for a worksheet. Read-only.
     * @return WorkbookWorksheetProtection|null
    */
    public function getProtection(): ?WorkbookWorksheetProtection {
        return $this->protection;
    }

    /**
     * Gets the tables property value. Collection of tables that are part of the worksheet. Read-only.
     * @return array<WorkbookTable>|null
    */
    public function getTables(): ?array {
        return $this->tables;
    }

    /**
     * Gets the visibility property value. The Visibility of the worksheet. The possible values are: Visible, Hidden, VeryHidden.
     * @return string|null
    */
    public function getVisibility(): ?string {
        return $this->visibility;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('charts', $this->charts);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('names', $this->names);
        $writer->writeCollectionOfObjectValues('pivotTables', $this->pivotTables);
        $writer->writeIntegerValue('position', $this->position);
        $writer->writeObjectValue('protection', $this->protection);
        $writer->writeCollectionOfObjectValues('tables', $this->tables);
        $writer->writeStringValue('visibility', $this->visibility);
    }

    /**
     * Sets the charts property value. Returns collection of charts that are part of the worksheet. Read-only.
     *  @param array<WorkbookChart>|null $value Value to set for the charts property.
    */
    public function setCharts(?array $value ): void {
        $this->charts = $value;
    }

    /**
     * Sets the name property value. The display name of the worksheet.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the names property value. Returns collection of names that are associated with the worksheet. Read-only.
     *  @param array<WorkbookNamedItem>|null $value Value to set for the names property.
    */
    public function setNames(?array $value ): void {
        $this->names = $value;
    }

    /**
     * Sets the pivotTables property value. Collection of PivotTables that are part of the worksheet.
     *  @param array<WorkbookPivotTable>|null $value Value to set for the pivotTables property.
    */
    public function setPivotTables(?array $value ): void {
        $this->pivotTables = $value;
    }

    /**
     * Sets the position property value. The zero-based position of the worksheet within the workbook.
     *  @param int|null $value Value to set for the position property.
    */
    public function setPosition(?int $value ): void {
        $this->position = $value;
    }

    /**
     * Sets the protection property value. Returns sheet protection object for a worksheet. Read-only.
     *  @param WorkbookWorksheetProtection|null $value Value to set for the protection property.
    */
    public function setProtection(?WorkbookWorksheetProtection $value ): void {
        $this->protection = $value;
    }

    /**
     * Sets the tables property value. Collection of tables that are part of the worksheet. Read-only.
     *  @param array<WorkbookTable>|null $value Value to set for the tables property.
    */
    public function setTables(?array $value ): void {
        $this->tables = $value;
    }

    /**
     * Sets the visibility property value. The Visibility of the worksheet. The possible values are: Visible, Hidden, VeryHidden.
     *  @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value ): void {
        $this->visibility = $value;
    }

}
