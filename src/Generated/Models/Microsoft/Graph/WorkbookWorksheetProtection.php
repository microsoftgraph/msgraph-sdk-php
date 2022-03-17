<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookWorksheetProtection extends Entity 
{
    /** @var bool|null $EscapedProtected Indicates if the worksheet is protected.  Read-only. */
    private ?bool $escapedProtected = null;
    
    /** @var WorkbookWorksheetProtectionOptions|null $options Sheet protection options. Read-only. */
    private ?WorkbookWorksheetProtectionOptions $options = null;
    
    /**
     * Instantiates a new workbookWorksheetProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookWorksheetProtection
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookWorksheetProtection {
        return new WorkbookWorksheetProtection();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'protected' => function (self $o, ParseNode $n) { $o->setEscapedProtected($n->getBooleanValue()); },
            'options' => function (self $o, ParseNode $n) { $o->setOptions($n->getObjectValue(WorkbookWorksheetProtectionOptions::class)); },
        ]);
    }

    /**
     * Gets the options property value. Sheet protection options. Read-only.
     * @return WorkbookWorksheetProtectionOptions|null
    */
    public function getOptions(): ?WorkbookWorksheetProtectionOptions {
        return $this->options;
    }

    /**
     * Gets the protected property value. Indicates if the worksheet is protected.  Read-only.
     * @return bool|null
    */
    public function getProtected(): ?bool {
        return $this->escapedProtected;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('protected', $this->escapedProtected);
        $writer->writeObjectValue('options', $this->options);
    }

    /**
     * Sets the options property value. Sheet protection options. Read-only.
     *  @param WorkbookWorksheetProtectionOptions|null $value Value to set for the options property.
    */
    public function setOptions(?WorkbookWorksheetProtectionOptions $value ): void {
        $this->options = $value;
    }

    /**
     * Sets the protected property value. Indicates if the worksheet is protected.  Read-only.
     *  @param bool|null $value Value to set for the EscapedProtected property.
    */
    public function setProtected(?bool $value ): void {
        $this->escapedProtected = $value;
    }

}
