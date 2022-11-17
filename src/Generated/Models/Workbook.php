<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Workbook extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbook and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbook');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Workbook
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Workbook {
        return new Workbook();
    }

    /**
     * Gets the application property value. The application property
     * @return WorkbookApplication|null
    */
    public function getApplication(): ?WorkbookApplication {
        return $this->getBackingStore()->get('application');
    }

    /**
     * Gets the comments property value. The comments property
     * @return array<WorkbookComment>|null
    */
    public function getComments(): ?array {
        return $this->getBackingStore()->get('comments');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'application' => fn(ParseNode $n) => $o->setApplication($n->getObjectValue([WorkbookApplication::class, 'createFromDiscriminatorValue'])),
            'comments' => fn(ParseNode $n) => $o->setComments($n->getCollectionOfObjectValues([WorkbookComment::class, 'createFromDiscriminatorValue'])),
            'functions' => fn(ParseNode $n) => $o->setFunctions($n->getObjectValue([WorkbookFunctions::class, 'createFromDiscriminatorValue'])),
            'names' => fn(ParseNode $n) => $o->setNames($n->getCollectionOfObjectValues([WorkbookNamedItem::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([WorkbookOperation::class, 'createFromDiscriminatorValue'])),
            'tables' => fn(ParseNode $n) => $o->setTables($n->getCollectionOfObjectValues([WorkbookTable::class, 'createFromDiscriminatorValue'])),
            'worksheets' => fn(ParseNode $n) => $o->setWorksheets($n->getCollectionOfObjectValues([WorkbookWorksheet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the functions property value. The functions property
     * @return WorkbookFunctions|null
    */
    public function getFunctions(): ?WorkbookFunctions {
        return $this->getBackingStore()->get('functions');
    }

    /**
     * Gets the names property value. Represents a collection of workbooks scoped named items (named ranges and constants). Read-only.
     * @return array<WorkbookNamedItem>|null
    */
    public function getNames(): ?array {
        return $this->getBackingStore()->get('names');
    }

    /**
     * Gets the operations property value. The status of workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only.
     * @return array<WorkbookOperation>|null
    */
    public function getOperations(): ?array {
        return $this->getBackingStore()->get('operations');
    }

    /**
     * Gets the tables property value. Represents a collection of tables associated with the workbook. Read-only.
     * @return array<WorkbookTable>|null
    */
    public function getTables(): ?array {
        return $this->getBackingStore()->get('tables');
    }

    /**
     * Gets the worksheets property value. Represents a collection of worksheets associated with the workbook. Read-only.
     * @return array<WorkbookWorksheet>|null
    */
    public function getWorksheets(): ?array {
        return $this->getBackingStore()->get('worksheets');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('application', $this->getApplication());
        $writer->writeCollectionOfObjectValues('comments', $this->getComments());
        $writer->writeObjectValue('functions', $this->getFunctions());
        $writer->writeCollectionOfObjectValues('names', $this->getNames());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('tables', $this->getTables());
        $writer->writeCollectionOfObjectValues('worksheets', $this->getWorksheets());
    }

    /**
     * Sets the application property value. The application property
     *  @param WorkbookApplication|null $value Value to set for the application property.
    */
    public function setApplication(?WorkbookApplication $value): void {
        $this->getBackingStore()->set('application', $value);
    }

    /**
     * Sets the comments property value. The comments property
     *  @param array<WorkbookComment>|null $value Value to set for the comments property.
    */
    public function setComments(?array $value): void {
        $this->getBackingStore()->set('comments', $value);
    }

    /**
     * Sets the functions property value. The functions property
     *  @param WorkbookFunctions|null $value Value to set for the functions property.
    */
    public function setFunctions(?WorkbookFunctions $value): void {
        $this->getBackingStore()->set('functions', $value);
    }

    /**
     * Sets the names property value. Represents a collection of workbooks scoped named items (named ranges and constants). Read-only.
     *  @param array<WorkbookNamedItem>|null $value Value to set for the names property.
    */
    public function setNames(?array $value): void {
        $this->getBackingStore()->set('names', $value);
    }

    /**
     * Sets the operations property value. The status of workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only.
     *  @param array<WorkbookOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the tables property value. Represents a collection of tables associated with the workbook. Read-only.
     *  @param array<WorkbookTable>|null $value Value to set for the tables property.
    */
    public function setTables(?array $value): void {
        $this->getBackingStore()->set('tables', $value);
    }

    /**
     * Sets the worksheets property value. Represents a collection of worksheets associated with the workbook. Read-only.
     *  @param array<WorkbookWorksheet>|null $value Value to set for the worksheets property.
    */
    public function setWorksheets(?array $value): void {
        $this->getBackingStore()->set('worksheets', $value);
    }

}
