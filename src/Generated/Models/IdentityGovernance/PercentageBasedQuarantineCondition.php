<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PercentageBasedQuarantineCondition extends QuarantineCondition implements Parsable 
{
    /**
     * Instantiates a new PercentageBasedQuarantineCondition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.percentageBasedQuarantineCondition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PercentageBasedQuarantineCondition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PercentageBasedQuarantineCondition {
        return new PercentageBasedQuarantineCondition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'percentage' => fn(ParseNode $n) => $o->setPercentage($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the percentage property value. The maximum percentage of in-scope users a workflow run can process before the workflow is quarantined.
     * @return int|null
    */
    public function getPercentage(): ?int {
        $val = $this->getBackingStore()->get('percentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'percentage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('percentage', $this->getPercentage());
    }

    /**
     * Sets the percentage property value. The maximum percentage of in-scope users a workflow run can process before the workflow is quarantined.
     * @param int|null $value Value to set for the percentage property.
    */
    public function setPercentage(?int $value): void {
        $this->getBackingStore()->set('percentage', $value);
    }

}
