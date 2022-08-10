<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookOperation extends Entity implements Parsable 
{
    /**
     * @var WorkbookOperationError|null $error The error returned by the operation.
    */
    private ?WorkbookOperationError $error = null;
    
    /**
     * @var string|null $resourceLocation The resource URI for the result.
    */
    private ?string $resourceLocation = null;
    
    /**
     * @var WorkbookOperationStatus|null $status The status property
    */
    private ?WorkbookOperationStatus $status = null;
    
    /**
     * Instantiates a new workbookOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookOperation');
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
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getObjectValue(array(WorkbookOperationError::class, 'createFromDiscriminatorValue'))); },
            'resourceLocation' => function (ParseNode $n) use ($o) { $o->setResourceLocation($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(WorkbookOperationStatus::class)); },
        ]);
    }

    /**
     * Gets the resourceLocation property value. The resource URI for the result.
     * @return string|null
    */
    public function getResourceLocation(): ?string {
        return $this->resourceLocation;
    }

    /**
     * Gets the status property value. The status property
     * @return WorkbookOperationStatus|null
    */
    public function getStatus(): ?WorkbookOperationStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeStringValue('resourceLocation', $this->resourceLocation);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the error property value. The error returned by the operation.
     *  @param WorkbookOperationError|null $value Value to set for the error property.
    */
    public function setError(?WorkbookOperationError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the resourceLocation property value. The resource URI for the result.
     *  @param string|null $value Value to set for the resourceLocation property.
    */
    public function setResourceLocation(?string $value ): void {
        $this->resourceLocation = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param WorkbookOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?WorkbookOperationStatus $value ): void {
        $this->status = $value;
    }

}
