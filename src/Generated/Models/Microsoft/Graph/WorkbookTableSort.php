<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookTableSort extends Entity 
{
    /** @var array<WorkbookSortField>|null $fields Represents the current conditions used to last sort the table. Read-only. */
    private ?array $fields = null;
    
    /** @var bool|null $matchCase Represents whether the casing impacted the last sort of the table. Read-only. */
    private ?bool $matchCase = null;
    
    /** @var string|null $method Represents Chinese character ordering method last used to sort the table. The possible values are: PinYin, StrokeCount. Read-only. */
    private ?string $method = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookTableSort {
        return new WorkbookTableSort();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'fields' => function (self $o, ParseNode $n) { $o->setFields($n->getCollectionOfObjectValues(WorkbookSortField::class)); },
            'matchCase' => function (self $o, ParseNode $n) { $o->setMatchCase($n->getBooleanValue()); },
            'method' => function (self $o, ParseNode $n) { $o->setMethod($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fields property value. Represents the current conditions used to last sort the table. Read-only.
     * @return array<WorkbookSortField>|null
    */
    public function getFields(): ?array {
        return $this->fields;
    }

    /**
     * Gets the matchCase property value. Represents whether the casing impacted the last sort of the table. Read-only.
     * @return bool|null
    */
    public function getMatchCase(): ?bool {
        return $this->matchCase;
    }

    /**
     * Gets the method property value. Represents Chinese character ordering method last used to sort the table. The possible values are: PinYin, StrokeCount. Read-only.
     * @return string|null
    */
    public function getMethod(): ?string {
        return $this->method;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('fields', $this->fields);
        $writer->writeBooleanValue('matchCase', $this->matchCase);
        $writer->writeStringValue('method', $this->method);
    }

    /**
     * Sets the fields property value. Represents the current conditions used to last sort the table. Read-only.
     *  @param array<WorkbookSortField>|null $value Value to set for the fields property.
    */
    public function setFields(?array $value ): void {
        $this->fields = $value;
    }

    /**
     * Sets the matchCase property value. Represents whether the casing impacted the last sort of the table. Read-only.
     *  @param bool|null $value Value to set for the matchCase property.
    */
    public function setMatchCase(?bool $value ): void {
        $this->matchCase = $value;
    }

    /**
     * Sets the method property value. Represents Chinese character ordering method last used to sort the table. The possible values are: PinYin, StrokeCount. Read-only.
     *  @param string|null $value Value to set for the method property.
    */
    public function setMethod(?string $value ): void {
        $this->method = $value;
    }

}
