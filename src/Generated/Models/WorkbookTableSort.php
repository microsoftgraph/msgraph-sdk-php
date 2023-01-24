<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookTableSort extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbookTableSort and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookTableSort
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookTableSort {
        return new WorkbookTableSort();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fields' => fn(ParseNode $n) => $o->setFields($n->getCollectionOfObjectValues([WorkbookSortField::class, 'createFromDiscriminatorValue'])),
            'matchCase' => fn(ParseNode $n) => $o->setMatchCase($n->getBooleanValue()),
            'method' => fn(ParseNode $n) => $o->setMethod($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fields property value. Represents the current conditions used to last sort the table. Read-only.
     * @return array<WorkbookSortField>|null
    */
    public function getFields(): ?array {
        return $this->getBackingStore()->get('fields');
    }

    /**
     * Gets the matchCase property value. Represents whether the casing impacted the last sort of the table. Read-only.
     * @return bool|null
    */
    public function getMatchCase(): ?bool {
        return $this->getBackingStore()->get('matchCase');
    }

    /**
     * Gets the method property value. Represents Chinese character ordering method last used to sort the table. The possible values are: PinYin, StrokeCount. Read-only.
     * @return string|null
    */
    public function getMethod(): ?string {
        return $this->getBackingStore()->get('method');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('fields', $this->getFields());
        $writer->writeBooleanValue('matchCase', $this->getMatchCase());
        $writer->writeStringValue('method', $this->getMethod());
    }

    /**
     * Sets the fields property value. Represents the current conditions used to last sort the table. Read-only.
     * @param array<WorkbookSortField>|null $value Value to set for the fields property.
    */
    public function setFields(?array $value): void {
        $this->getBackingStore()->set('fields', $value);
    }

    /**
     * Sets the matchCase property value. Represents whether the casing impacted the last sort of the table. Read-only.
     * @param bool|null $value Value to set for the matchCase property.
    */
    public function setMatchCase(?bool $value): void {
        $this->getBackingStore()->set('matchCase', $value);
    }

    /**
     * Sets the method property value. Represents Chinese character ordering method last used to sort the table. The possible values are: PinYin, StrokeCount. Read-only.
     * @param string|null $value Value to set for the method property.
    */
    public function setMethod(?string $value): void {
        $this->getBackingStore()->set('method', $value);
    }

}
