<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents the status of a Viva Engage async operation that is an operation that transcends thelifetime of a single API request. These operations are long-running or too expensive to completewithin the time frame of their original request.
*/
class EngagementAsyncOperation extends LongRunningOperation implements Parsable 
{
    /**
     * Instantiates a new EngagementAsyncOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EngagementAsyncOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EngagementAsyncOperation {
        return new EngagementAsyncOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'operationType' => fn(ParseNode $n) => $o->setOperationType($n->getEnumValue(EngagementAsyncOperationType::class)),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the operationType property value. The type of the long-running operation. The possible values are: createCommunity, unknownFutureValue.
     * @return EngagementAsyncOperationType|null
    */
    public function getOperationType(): ?EngagementAsyncOperationType {
        $val = $this->getBackingStore()->get('operationType');
        if (is_null($val) || $val instanceof EngagementAsyncOperationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationType'");
    }

    /**
     * Gets the resourceId property value. The ID of the object created or modified as a result of this async operation.
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('operationType', $this->getOperationType());
        $writer->writeStringValue('resourceId', $this->getResourceId());
    }

    /**
     * Sets the operationType property value. The type of the long-running operation. The possible values are: createCommunity, unknownFutureValue.
     * @param EngagementAsyncOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?EngagementAsyncOperationType $value): void {
        $this->getBackingStore()->set('operationType', $value);
    }

    /**
     * Sets the resourceId property value. The ID of the object created or modified as a result of this async operation.
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

}
