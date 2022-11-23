<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookPivotTable extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbookPivotTable and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookPivotTable
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookPivotTable {
        return new WorkbookPivotTable();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'worksheet' => fn(ParseNode $n) => $o->setWorksheet($n->getObjectValue([WorkbookWorksheet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the name property value. Name of the PivotTable.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the worksheet property value. The worksheet containing the current PivotTable. Read-only.
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
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('worksheet', $this->getWorksheet());
    }

    /**
     * Sets the name property value. Name of the PivotTable.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the worksheet property value. The worksheet containing the current PivotTable. Read-only.
     *  @param WorkbookWorksheet|null $value Value to set for the worksheet property.
    */
    public function setWorksheet(?WorkbookWorksheet $value): void {
        $this->getBackingStore()->set('worksheet', $value);
    }

}
