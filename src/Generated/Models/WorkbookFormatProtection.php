<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookFormatProtection extends Entity implements Parsable 
{
    /**
     * @var bool|null $formulaHidden Indicates if Excel hides the formula for the cells in the range. A null value indicates that the entire range doesn't have uniform formula hidden setting.
    */
    private ?bool $formulaHidden = null;
    
    /**
     * @var bool|null $locked Indicates if Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting.
    */
    private ?bool $locked = null;
    
    /**
     * Instantiates a new WorkbookFormatProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookFormatProtection');
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
     * @return array<string, callable>
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
        return $this->formulaHidden;
    }

    /**
     * Gets the locked property value. Indicates if Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting.
     * @return bool|null
    */
    public function getLocked(): ?bool {
        return $this->locked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('formulaHidden', $this->formulaHidden);
        $writer->writeBooleanValue('locked', $this->locked);
    }

    /**
     * Sets the formulaHidden property value. Indicates if Excel hides the formula for the cells in the range. A null value indicates that the entire range doesn't have uniform formula hidden setting.
     *  @param bool|null $value Value to set for the formulaHidden property.
    */
    public function setFormulaHidden(?bool $value ): void {
        $this->formulaHidden = $value;
    }

    /**
     * Sets the locked property value. Indicates if Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting.
     *  @param bool|null $value Value to set for the locked property.
    */
    public function setLocked(?bool $value ): void {
        $this->locked = $value;
    }

}
