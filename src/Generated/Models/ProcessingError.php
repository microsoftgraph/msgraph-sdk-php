<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProcessingError extends ClassificationError implements Parsable 
{
    /**
     * Instantiates a new ProcessingError and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProcessingError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProcessingError {
        return new ProcessingError();
    }

    /**
     * Gets the errorType property value. The errorType property
     * @return ContentProcessingErrorType|null
    */
    public function getErrorType(): ?ContentProcessingErrorType {
        $val = $this->getBackingStore()->get('errorType');
        if (is_null($val) || $val instanceof ContentProcessingErrorType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorType' => fn(ParseNode $n) => $o->setErrorType($n->getEnumValue(ContentProcessingErrorType::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('errorType', $this->getErrorType());
    }

    /**
     * Sets the errorType property value. The errorType property
     * @param ContentProcessingErrorType|null $value Value to set for the errorType property.
    */
    public function setErrorType(?ContentProcessingErrorType $value): void {
        $this->getBackingStore()->set('errorType', $value);
    }

}
