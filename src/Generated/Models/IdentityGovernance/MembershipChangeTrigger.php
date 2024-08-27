<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MembershipChangeTrigger extends WorkflowExecutionTrigger implements Parsable 
{
    /**
     * Instantiates a new MembershipChangeTrigger and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.membershipChangeTrigger');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MembershipChangeTrigger
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MembershipChangeTrigger {
        return new MembershipChangeTrigger();
    }

    /**
     * Gets the changeType property value. The changeType property
     * @return MembershipChangeType|null
    */
    public function getChangeType(): ?MembershipChangeType {
        $val = $this->getBackingStore()->get('changeType');
        if (is_null($val) || $val instanceof MembershipChangeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'changeType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'changeType' => fn(ParseNode $n) => $o->setChangeType($n->getEnumValue(MembershipChangeType::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('changeType', $this->getChangeType());
    }

    /**
     * Sets the changeType property value. The changeType property
     * @param MembershipChangeType|null $value Value to set for the changeType property.
    */
    public function setChangeType(?MembershipChangeType $value): void {
        $this->getBackingStore()->set('changeType', $value);
    }

}
