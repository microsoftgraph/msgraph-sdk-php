<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookWorksheetProtection extends Entity implements Parsable 
{
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'protected' => fn(ParseNode $n) => $o->setProtected($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'options' => fn(ParseNode $n) => $o->setOptions($n->getObjectValue([WorkbookWorksheetProtectionOptions::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the options property value. Sheet protection options. Read-only.
     * @return WorkbookWorksheetProtectionOptions|null
    */
    public function getOptions(): ?WorkbookWorksheetProtectionOptions {
        $val = $this->getBackingStore()->get('options');
        if (is_null($val) || $val instanceof WorkbookWorksheetProtectionOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'options'");
    }

    /**
     * Gets the protected property value. Indicates if the worksheet is protected.  Read-only.
     * @return bool|null
    */
    public function getProtected(): ?bool {
        $val = $this->getBackingStore()->get('escapedProtected');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedProtected'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('protected', $this->getProtected());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('options', $this->getOptions());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the options property value. Sheet protection options. Read-only.
     * @param WorkbookWorksheetProtectionOptions|null $value Value to set for the options property.
    */
    public function setOptions(?WorkbookWorksheetProtectionOptions $value): void {
        $this->getBackingStore()->set('options', $value);
    }

    /**
     * Sets the protected property value. Indicates if the worksheet is protected.  Read-only.
     * @param bool|null $value Value to set for the EscapedProtected property.
    */
    public function setProtected(?bool $value): void {
        $this->getBackingStore()->set('escapedProtected', $value);
    }

}
