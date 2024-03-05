<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookOperation extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkbookOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookOperation {
        return new WorkbookOperation();
    }

    /**
     * Gets the error property value. The error returned by the operation.
     * @return WorkbookOperationError|null
    */
    public function getError(): ?WorkbookOperationError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof WorkbookOperationError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([WorkbookOperationError::class, 'createFromDiscriminatorValue'])),
            'resourceLocation' => fn(ParseNode $n) => $o->setResourceLocation($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(WorkbookOperationStatus::class)),
        ]);
    }

    /**
     * Gets the resourceLocation property value. The resource URI for the result.
     * @return string|null
    */
    public function getResourceLocation(): ?string {
        $val = $this->getBackingStore()->get('resourceLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceLocation'");
    }

    /**
     * Gets the status property value. The status property
     * @return WorkbookOperationStatus|null
    */
    public function getStatus(): ?WorkbookOperationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof WorkbookOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeStringValue('resourceLocation', $this->getResourceLocation());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the error property value. The error returned by the operation.
     * @param WorkbookOperationError|null $value Value to set for the error property.
    */
    public function setError(?WorkbookOperationError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the resourceLocation property value. The resource URI for the result.
     * @param string|null $value Value to set for the resourceLocation property.
    */
    public function setResourceLocation(?string $value): void {
        $this->getBackingStore()->set('resourceLocation', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param WorkbookOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?WorkbookOperationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
