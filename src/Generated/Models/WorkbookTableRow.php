<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookTableRow extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbookTableRow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookTableRow {
        return new WorkbookTableRow();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'index' => fn(ParseNode $n) => $o->setIndex($n->getIntegerValue()),
            'values' => fn(ParseNode $n) => $o->setValues($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the index property value. Returns the index number of the row within the rows collection of the table. Zero-indexed. Read-only.
     * @return int|null
    */
    public function getIndex(): ?int {
        return $this->getBackingStore()->get('index');
    }

    /**
     * Gets the values property value. Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
     * @return Json|null
    */
    public function getValues(): ?Json {
        return $this->getBackingStore()->get('values');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('index', $this->getIndex());
        $writer->writeObjectValue('values', $this->getValues());
    }

    /**
     * Sets the index property value. Returns the index number of the row within the rows collection of the table. Zero-indexed. Read-only.
     * @param int|null $value Value to set for the index property.
    */
    public function setIndex(?int $value): void {
        $this->getBackingStore()->set('index', $value);
    }

    /**
     * Sets the values property value. Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
     * @param Json|null $value Value to set for the values property.
    */
    public function setValues(?Json $value): void {
        $this->getBackingStore()->set('values', $value);
    }

}
