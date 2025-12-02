<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserInactivityTrigger extends WorkflowExecutionTrigger implements Parsable 
{
    /**
     * Instantiates a new UserInactivityTrigger and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.userInactivityTrigger');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserInactivityTrigger
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserInactivityTrigger {
        return new UserInactivityTrigger();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'inactivityPeriodInDays' => fn(ParseNode $n) => $o->setInactivityPeriodInDays($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the inactivityPeriodInDays property value. The number of days a user must be inactive before triggering workflow execution.
     * @return int|null
    */
    public function getInactivityPeriodInDays(): ?int {
        $val = $this->getBackingStore()->get('inactivityPeriodInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactivityPeriodInDays'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('inactivityPeriodInDays', $this->getInactivityPeriodInDays());
    }

    /**
     * Sets the inactivityPeriodInDays property value. The number of days a user must be inactive before triggering workflow execution.
     * @param int|null $value Value to set for the inactivityPeriodInDays property.
    */
    public function setInactivityPeriodInDays(?int $value): void {
        $this->getBackingStore()->set('inactivityPeriodInDays', $value);
    }

}
