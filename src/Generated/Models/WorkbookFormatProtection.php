<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookFormatProtection extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkbookFormatProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookFormatProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookFormatProtection {
        return new WorkbookFormatProtection();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'formulaHidden' => fn(ParseNode $n) => $o->setFormulaHidden($n->getBooleanValue()),
            'locked' => fn(ParseNode $n) => $o->setLocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the formulaHidden property value. Indicates if Excel hides the formula for the cells in the range. A null value indicates that the entire range doesn't have uniform formula hidden setting.
     * @return bool|null
    */
    public function getFormulaHidden(): ?bool {
        $val = $this->getBackingStore()->get('formulaHidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'formulaHidden'");
    }

    /**
     * Gets the locked property value. Indicates if Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting.
     * @return bool|null
    */
    public function getLocked(): ?bool {
        $val = $this->getBackingStore()->get('locked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locked'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('formulaHidden', $this->getFormulaHidden());
        $writer->writeBooleanValue('locked', $this->getLocked());
    }

    /**
     * Sets the formulaHidden property value. Indicates if Excel hides the formula for the cells in the range. A null value indicates that the entire range doesn't have uniform formula hidden setting.
     * @param bool|null $value Value to set for the formulaHidden property.
    */
    public function setFormulaHidden(?bool $value): void {
        $this->getBackingStore()->set('formulaHidden', $value);
    }

    /**
     * Sets the locked property value. Indicates if Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting.
     * @param bool|null $value Value to set for the locked property.
    */
    public function setLocked(?bool $value): void {
        $this->getBackingStore()->set('locked', $value);
    }

}
