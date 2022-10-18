<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookFunctionResult extends Entity implements Parsable 
{
    /**
     * @var string|null $error The error property
    */
    private ?string $error = null;
    
    /**
     * @var Json|null $value The value property
    */
    private ?Json $value = null;
    
    /**
     * Instantiates a new WorkbookFunctionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookFunctionResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookFunctionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookFunctionResult {
        return new WorkbookFunctionResult();
    }

    /**
     * Gets the error property value. The error property
     * @return string|null
    */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the value property value. The value property
     * @return Json|null
    */
    public function getValue(): ?Json {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('error', $this->error);
        $writer->writeObjectValue('value', $this->value);
    }

    /**
     * Sets the error property value. The error property
     *  @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the value property value. The value property
     *  @param Json|null $value Value to set for the value property.
    */
    public function setValue(?Json $value ): void {
        $this->value = $value;
    }

}
