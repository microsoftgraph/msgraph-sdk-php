<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerBucketTaskBoardTaskFormat extends Entity implements Parsable 
{
    /**
     * Instantiates a new PlannerBucketTaskBoardTaskFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerBucketTaskBoardTaskFormat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerBucketTaskBoardTaskFormat {
        return new PlannerBucketTaskBoardTaskFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'orderHint' => fn(ParseNode $n) => $o->setOrderHint($n->getStringValue()),
        ]);
    }

    /**
     * Gets the orderHint property value. Hint used to order tasks in the bucket view of the task board. For details about the supported format, see Using order hints in Planner.
     * @return string|null
    */
    public function getOrderHint(): ?string {
        $val = $this->getBackingStore()->get('orderHint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orderHint'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('orderHint', $this->getOrderHint());
    }

    /**
     * Sets the orderHint property value. Hint used to order tasks in the bucket view of the task board. For details about the supported format, see Using order hints in Planner.
     * @param string|null $value Value to set for the orderHint property.
    */
    public function setOrderHint(?string $value): void {
        $this->getBackingStore()->set('orderHint', $value);
    }

}
