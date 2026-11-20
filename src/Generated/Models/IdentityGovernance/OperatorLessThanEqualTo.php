<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OperatorLessThanEqualTo extends WorkflowTriggerTimeBasedOperator implements Parsable 
{
    /**
     * Instantiates a new OperatorLessThanEqualTo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.operatorLessThanEqualTo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OperatorLessThanEqualTo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OperatorLessThanEqualTo {
        return new OperatorLessThanEqualTo();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'offsetInDays' => fn(ParseNode $n) => $o->setOffsetInDays($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the offsetInDays property value. The maximum number of days between the current date and the date in the user attribute. The value must be a nonnegative integer.
     * @return int|null
    */
    public function getOffsetInDays(): ?int {
        $val = $this->getBackingStore()->get('offsetInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offsetInDays'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('offsetInDays', $this->getOffsetInDays());
    }

    /**
     * Sets the offsetInDays property value. The maximum number of days between the current date and the date in the user attribute. The value must be a nonnegative integer.
     * @param int|null $value Value to set for the offsetInDays property.
    */
    public function setOffsetInDays(?int $value): void {
        $this->getBackingStore()->set('offsetInDays', $value);
    }

}
