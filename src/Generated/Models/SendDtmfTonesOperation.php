<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SendDtmfTonesOperation extends CommsOperation implements Parsable 
{
    /**
     * Instantiates a new sendDtmfTonesOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendDtmfTonesOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendDtmfTonesOperation {
        return new SendDtmfTonesOperation();
    }

    /**
     * Gets the completionReason property value. The completionReason property
     * @return SendDtmfCompletionReason|null
    */
    public function getCompletionReason(): ?SendDtmfCompletionReason {
        $val = $this->getBackingStore()->get('completionReason');
        if (is_null($val) || $val instanceof SendDtmfCompletionReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completionReason'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completionReason' => fn(ParseNode $n) => $o->setCompletionReason($n->getEnumValue(SendDtmfCompletionReason::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('completionReason', $this->getCompletionReason());
    }

    /**
     * Sets the completionReason property value. The completionReason property
     * @param SendDtmfCompletionReason|null $value Value to set for the completionReason property.
    */
    public function setCompletionReason(?SendDtmfCompletionReason $value): void {
        $this->getBackingStore()->set('completionReason', $value);
    }

}
