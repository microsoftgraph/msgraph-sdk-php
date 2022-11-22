<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookWorksheetProtection extends Entity implements Parsable 
{
    /**
     * @var bool|null $escapedProtected Indicates if the worksheet is protected.  Read-only.
    */
    public ?bool $escapedProtected = null;
    
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookWorksheetProtection {
        return new WorkbookWorksheetProtection();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'protected' => fn(ParseNode $n) => $o->setProtected($n->getBooleanValue()),
            'options' => fn(ParseNode $n) => $o->setOptions($n->getObjectValue([WorkbookWorksheetProtectionOptions::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the options property value. Sheet protection options. Read-only.
     * @return WorkbookWorksheetProtectionOptions|null
    */
    public function getOptions(): ?WorkbookWorksheetProtectionOptions {
        return $this->getBackingStore()->get('options');
    }

    /**
     * Gets the protected property value. Indicates if the worksheet is protected.  Read-only.
     * @return bool|null
    */
    public function getProtected(): ?bool {
        return $this->getBackingStore()->get('escapedProtected');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('protected', $this->getProtected());
        $writer->writeObjectValue('options', $this->getOptions());
    }

    /**
     * Sets the options property value. Sheet protection options. Read-only.
     *  @param WorkbookWorksheetProtectionOptions|null $value Value to set for the options property.
    */
    public function setOptions(?WorkbookWorksheetProtectionOptions $value): void {
        $this->getBackingStore()->set('options', $value);
    }

    /**
     * Sets the protected property value. Indicates if the worksheet is protected.  Read-only.
     *  @param bool|null $value Value to set for the EscapedProtected property.
    */
    public function setProtected(?bool $value): void {
        $this->getBackingStore()->set('escapedProtected', $value);
    }

}
