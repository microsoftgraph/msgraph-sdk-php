<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph\ExternalConnectors;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Graph\Generated\Models\Microsoft\Graph\PublicError;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConnectionOperation extends Entity 
{
    /** @var PublicError|null $error If status is failed, provides more information about the error that caused the failure. */
    private ?PublicError $error = null;
    
    /** @var ConnectionOperationStatus|null $status Indicates the status of the asynchronous operation. Possible values are: unspecified, inprogress, completed, failed, unknownFutureValue. */
    private ?ConnectionOperationStatus $status = null;
    
    /**
     * Instantiates a new connectionOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectionOperation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConnectionOperation {
        return new ConnectionOperation();
    }

    /**
     * Gets the error property value. If status is failed, provides more information about the error that caused the failure.
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'error' => function (self $o, ParseNode $n) { $o->setError($n->getObjectValue(PublicError::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(ConnectionOperationStatus::class)); },
        ]);
    }

    /**
     * Gets the status property value. Indicates the status of the asynchronous operation. Possible values are: unspecified, inprogress, completed, failed, unknownFutureValue.
     * @return ConnectionOperationStatus|null
    */
    public function getStatus(): ?ConnectionOperationStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the error property value. If status is failed, provides more information about the error that caused the failure.
     *  @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the status property value. Indicates the status of the asynchronous operation. Possible values are: unspecified, inprogress, completed, failed, unknownFutureValue.
     *  @param ConnectionOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ConnectionOperationStatus $value ): void {
        $this->status = $value;
    }

}
