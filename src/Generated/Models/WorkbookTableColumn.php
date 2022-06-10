<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookTableColumn extends Entity implements Parsable 
{
    /**
     * @var WorkbookFilter|null $filter Retrieve the filter applied to the column. Read-only.
    */
    private ?WorkbookFilter $filter = null;
    
    /**
     * @var int|null $index Returns the index number of the column within the columns collection of the table. Zero-indexed. Read-only.
    */
    private ?int $index = null;
    
    /**
     * @var string|null $name Returns the name of the table column.
    */
    private ?string $name = null;
    
    /**
     * @var Json|null $values Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
    */
    private ?Json $values = null;
    
    /**
     * Instantiates a new workbookTableColumn and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookTableColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookTableColumn {
        return new WorkbookTableColumn();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'filter' => function (ParseNode $n) use ($o) { $o->setFilter($n->getObjectValue(array(WorkbookFilter::class, 'createFromDiscriminatorValue'))); },
            'index' => function (ParseNode $n) use ($o) { $o->setIndex($n->getIntegerValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'values' => function (ParseNode $n) use ($o) { $o->setValues($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the filter property value. Retrieve the filter applied to the column. Read-only.
     * @return WorkbookFilter|null
    */
    public function getFilter(): ?WorkbookFilter {
        return $this->filter;
    }

    /**
     * Gets the index property value. Returns the index number of the column within the columns collection of the table. Zero-indexed. Read-only.
     * @return int|null
    */
    public function getIndex(): ?int {
        return $this->index;
    }

    /**
     * Gets the name property value. Returns the name of the table column.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the values property value. Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
     * @return Json|null
    */
    public function getValues(): ?Json {
        return $this->values;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('filter', $this->filter);
        $writer->writeIntegerValue('index', $this->index);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('values', $this->values);
    }

    /**
     * Sets the filter property value. Retrieve the filter applied to the column. Read-only.
     *  @param WorkbookFilter|null $value Value to set for the filter property.
    */
    public function setFilter(?WorkbookFilter $value ): void {
        $this->filter = $value;
    }

    /**
     * Sets the index property value. Returns the index number of the column within the columns collection of the table. Zero-indexed. Read-only.
     *  @param int|null $value Value to set for the index property.
    */
    public function setIndex(?int $value ): void {
        $this->index = $value;
    }

    /**
     * Sets the name property value. Returns the name of the table column.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the values property value. Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
     *  @param Json|null $value Value to set for the values property.
    */
    public function setValues(?Json $value ): void {
        $this->values = $value;
    }

}
