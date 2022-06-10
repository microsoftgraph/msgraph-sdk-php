<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Workbook extends Entity implements Parsable 
{
    /**
     * @var WorkbookApplication|null $application The application property
    */
    private ?WorkbookApplication $application = null;
    
    /**
     * @var array<WorkbookComment>|null $comments The comments property
    */
    private ?array $comments = null;
    
    /**
     * @var WorkbookFunctions|null $functions The functions property
    */
    private ?WorkbookFunctions $functions = null;
    
    /**
     * @var array<WorkbookNamedItem>|null $names Represents a collection of workbooks scoped named items (named ranges and constants). Read-only.
    */
    private ?array $names = null;
    
    /**
     * @var array<WorkbookOperation>|null $operations The status of Workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only. Nullable.
    */
    private ?array $operations = null;
    
    /**
     * @var array<WorkbookTable>|null $tables Represents a collection of tables associated with the workbook. Read-only.
    */
    private ?array $tables = null;
    
    /**
     * @var array<WorkbookWorksheet>|null $worksheets Represents a collection of worksheets associated with the workbook. Read-only.
    */
    private ?array $worksheets = null;
    
    /**
     * Instantiates a new workbook and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->application;
    }

    /**
     * Gets the comments property value. The comments property
     * @return array<WorkbookComment>|null
    */
    public function getComments(): ?array {
        return $this->comments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'application' => function (ParseNode $n) use ($o) { $o->setApplication($n->getObjectValue(array(WorkbookApplication::class, 'createFromDiscriminatorValue'))); },
            'comments' => function (ParseNode $n) use ($o) { $o->setComments($n->getCollectionOfObjectValues(array(WorkbookComment::class, 'createFromDiscriminatorValue'))); },
            'functions' => function (ParseNode $n) use ($o) { $o->setFunctions($n->getObjectValue(array(WorkbookFunctions::class, 'createFromDiscriminatorValue'))); },
            'names' => function (ParseNode $n) use ($o) { $o->setNames($n->getCollectionOfObjectValues(array(WorkbookNamedItem::class, 'createFromDiscriminatorValue'))); },
            'operations' => function (ParseNode $n) use ($o) { $o->setOperations($n->getCollectionOfObjectValues(array(WorkbookOperation::class, 'createFromDiscriminatorValue'))); },
            'tables' => function (ParseNode $n) use ($o) { $o->setTables($n->getCollectionOfObjectValues(array(WorkbookTable::class, 'createFromDiscriminatorValue'))); },
            'worksheets' => function (ParseNode $n) use ($o) { $o->setWorksheets($n->getCollectionOfObjectValues(array(WorkbookWorksheet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the functions property value. The functions property
     * @return WorkbookFunctions|null
    */
    public function getFunctions(): ?WorkbookFunctions {
        return $this->functions;
    }

    /**
     * Gets the names property value. Represents a collection of workbooks scoped named items (named ranges and constants). Read-only.
     * @return array<WorkbookNamedItem>|null
    */
    public function getNames(): ?array {
        return $this->names;
    }

    /**
     * Gets the operations property value. The status of Workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only. Nullable.
     * @return array<WorkbookOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the tables property value. Represents a collection of tables associated with the workbook. Read-only.
     * @return array<WorkbookTable>|null
    */
    public function getTables(): ?array {
        return $this->tables;
    }

    /**
     * Gets the worksheets property value. Represents a collection of worksheets associated with the workbook. Read-only.
     * @return array<WorkbookWorksheet>|null
    */
    public function getWorksheets(): ?array {
        return $this->worksheets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('application', $this->application);
        $writer->writeCollectionOfObjectValues('comments', $this->comments);
        $writer->writeObjectValue('functions', $this->functions);
        $writer->writeCollectionOfObjectValues('names', $this->names);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeCollectionOfObjectValues('tables', $this->tables);
        $writer->writeCollectionOfObjectValues('worksheets', $this->worksheets);
    }

    /**
     * Sets the application property value. The application property
     *  @param WorkbookApplication|null $value Value to set for the application property.
    */
    public function setApplication(?WorkbookApplication $value ): void {
        $this->application = $value;
    }

    /**
     * Sets the comments property value. The comments property
     *  @param array<WorkbookComment>|null $value Value to set for the comments property.
    */
    public function setComments(?array $value ): void {
        $this->comments = $value;
    }

    /**
     * Sets the functions property value. The functions property
     *  @param WorkbookFunctions|null $value Value to set for the functions property.
    */
    public function setFunctions(?WorkbookFunctions $value ): void {
        $this->functions = $value;
    }

    /**
     * Sets the names property value. Represents a collection of workbooks scoped named items (named ranges and constants). Read-only.
     *  @param array<WorkbookNamedItem>|null $value Value to set for the names property.
    */
    public function setNames(?array $value ): void {
        $this->names = $value;
    }

    /**
     * Sets the operations property value. The status of Workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only. Nullable.
     *  @param array<WorkbookOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the tables property value. Represents a collection of tables associated with the workbook. Read-only.
     *  @param array<WorkbookTable>|null $value Value to set for the tables property.
    */
    public function setTables(?array $value ): void {
        $this->tables = $value;
    }

    /**
     * Sets the worksheets property value. Represents a collection of worksheets associated with the workbook. Read-only.
     *  @param array<WorkbookWorksheet>|null $value Value to set for the worksheets property.
    */
    public function setWorksheets(?array $value ): void {
        $this->worksheets = $value;
    }

}
