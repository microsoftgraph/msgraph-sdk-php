<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookApplication extends Entity implements Parsable 
{
    /**
     * @var string|null $calculationMode Returns the calculation mode used in the workbook. Possible values are: Automatic, AutomaticExceptTables, Manual.
    */
    private ?string $calculationMode = null;
    
    /**
     * Instantiates a new workbookApplication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookApplication');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookApplication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookApplication {
        return new WorkbookApplication();
    }

    /**
     * Gets the calculationMode property value. Returns the calculation mode used in the workbook. Possible values are: Automatic, AutomaticExceptTables, Manual.
     * @return string|null
    */
    public function getCalculationMode(): ?string {
        return $this->calculationMode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'calculationMode' => fn(ParseNode $n) => $o->setCalculationMode($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('calculationMode', $this->calculationMode);
    }

    /**
     * Sets the calculationMode property value. Returns the calculation mode used in the workbook. Possible values are: Automatic, AutomaticExceptTables, Manual.
     *  @param string|null $value Value to set for the calculationMode property.
    */
    public function setCalculationMode(?string $value ): void {
        $this->calculationMode = $value;
    }

}
