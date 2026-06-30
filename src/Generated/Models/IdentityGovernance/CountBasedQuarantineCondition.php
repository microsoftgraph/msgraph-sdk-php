<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CountBasedQuarantineCondition extends QuarantineCondition implements Parsable 
{
    /**
     * Instantiates a new CountBasedQuarantineCondition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.countBasedQuarantineCondition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CountBasedQuarantineCondition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CountBasedQuarantineCondition {
        return new CountBasedQuarantineCondition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'threshold' => fn(ParseNode $n) => $o->setThreshold($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the threshold property value. The threshold property
     * @return int|null
    */
    public function getThreshold(): ?int {
        $val = $this->getBackingStore()->get('threshold');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threshold'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('threshold', $this->getThreshold());
    }

    /**
     * Sets the threshold property value. The threshold property
     * @param int|null $value Value to set for the threshold property.
    */
    public function setThreshold(?int $value): void {
        $this->getBackingStore()->set('threshold', $value);
    }

}
