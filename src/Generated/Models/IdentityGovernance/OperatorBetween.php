<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OperatorBetween extends WorkflowTriggerTimeBasedOperator implements Parsable 
{
    /**
     * Instantiates a new OperatorBetween and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.operatorBetween');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OperatorBetween
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OperatorBetween {
        return new OperatorBetween();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'greaterThanOffsetInDays' => fn(ParseNode $n) => $o->setGreaterThanOffsetInDays($n->getIntegerValue()),
            'lessThanOffsetInDays' => fn(ParseNode $n) => $o->setLessThanOffsetInDays($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the greaterThanOffsetInDays property value. The exclusive lower bound of the date range, in days. The value must be a nonnegative integer and less than lessThanOffsetInDays.
     * @return int|null
    */
    public function getGreaterThanOffsetInDays(): ?int {
        $val = $this->getBackingStore()->get('greaterThanOffsetInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'greaterThanOffsetInDays'");
    }

    /**
     * Gets the lessThanOffsetInDays property value. The exclusive upper bound of the date range, in days. The value must be a nonnegative integer and greater than greaterThanOffsetInDays. The difference between the upper and lower bounds can't exceed 180 days.
     * @return int|null
    */
    public function getLessThanOffsetInDays(): ?int {
        $val = $this->getBackingStore()->get('lessThanOffsetInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lessThanOffsetInDays'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('greaterThanOffsetInDays', $this->getGreaterThanOffsetInDays());
        $writer->writeIntegerValue('lessThanOffsetInDays', $this->getLessThanOffsetInDays());
    }

    /**
     * Sets the greaterThanOffsetInDays property value. The exclusive lower bound of the date range, in days. The value must be a nonnegative integer and less than lessThanOffsetInDays.
     * @param int|null $value Value to set for the greaterThanOffsetInDays property.
    */
    public function setGreaterThanOffsetInDays(?int $value): void {
        $this->getBackingStore()->set('greaterThanOffsetInDays', $value);
    }

    /**
     * Sets the lessThanOffsetInDays property value. The exclusive upper bound of the date range, in days. The value must be a nonnegative integer and greater than greaterThanOffsetInDays. The difference between the upper and lower bounds can't exceed 180 days.
     * @param int|null $value Value to set for the lessThanOffsetInDays property.
    */
    public function setLessThanOffsetInDays(?int $value): void {
        $this->getBackingStore()->set('lessThanOffsetInDays', $value);
    }

}
