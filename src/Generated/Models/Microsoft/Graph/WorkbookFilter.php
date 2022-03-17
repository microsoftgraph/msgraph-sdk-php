<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookFilter extends Entity 
{
    /** @var WorkbookFilterCriteria|null $criteria The currently applied filter on the given column. Read-only. */
    private ?WorkbookFilterCriteria $criteria = null;
    
    /**
     * Instantiates a new workbookFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookFilter
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookFilter {
        return new WorkbookFilter();
    }

    /**
     * Gets the criteria property value. The currently applied filter on the given column. Read-only.
     * @return WorkbookFilterCriteria|null
    */
    public function getCriteria(): ?WorkbookFilterCriteria {
        return $this->criteria;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'criteria' => function (self $o, ParseNode $n) { $o->setCriteria($n->getObjectValue(WorkbookFilterCriteria::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('criteria', $this->criteria);
    }

    /**
     * Sets the criteria property value. The currently applied filter on the given column. Read-only.
     *  @param WorkbookFilterCriteria|null $value Value to set for the criteria property.
    */
    public function setCriteria(?WorkbookFilterCriteria $value ): void {
        $this->criteria = $value;
    }

}
