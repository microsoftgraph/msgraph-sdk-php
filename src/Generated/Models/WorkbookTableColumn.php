<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookTableColumn extends Entity implements Parsable 
{
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'filter' => fn(ParseNode $n) => $o->setFilter($n->getObjectValue([WorkbookFilter::class, 'createFromDiscriminatorValue'])),
            'index' => fn(ParseNode $n) => $o->setIndex($n->getIntegerValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'values' => fn(ParseNode $n) => $o->setValues($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the filter property value. Retrieve the filter applied to the column. Read-only.
     * @return WorkbookFilter|null
    */
    public function getFilter(): ?WorkbookFilter {
        $val = $this->getBackingStore()->get('filter');
        if (is_null($val) || $val instanceof WorkbookFilter) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filter'");
    }

    /**
     * Gets the index property value. Returns the index number of the column within the columns collection of the table. Zero-indexed. Read-only.
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
     * Gets the name property value. Returns the name of the table column.
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
     * Gets the values property value. Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('filter', $this->getFilter());
        $writer->writeIntegerValue('index', $this->getIndex());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('values', $this->getValues());
    }

    /**
     * Sets the filter property value. Retrieve the filter applied to the column. Read-only.
     * @param WorkbookFilter|null $value Value to set for the filter property.
    */
    public function setFilter(?WorkbookFilter $value): void {
        $this->getBackingStore()->set('filter', $value);
    }

    /**
     * Sets the index property value. Returns the index number of the column within the columns collection of the table. Zero-indexed. Read-only.
     * @param int|null $value Value to set for the index property.
    */
    public function setIndex(?int $value): void {
        $this->getBackingStore()->set('index', $value);
    }

    /**
     * Sets the name property value. Returns the name of the table column.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the values property value. Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
     * @param Json|null $value Value to set for the values property.
    */
    public function setValues(?Json $value): void {
        $this->getBackingStore()->set('values', $value);
    }

}
