<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GuestSponsorTrigger extends WorkflowExecutionTrigger implements Parsable 
{
    /**
     * Instantiates a new GuestSponsorTrigger and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.guestSponsorTrigger');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GuestSponsorTrigger
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GuestSponsorTrigger {
        return new GuestSponsorTrigger();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'minimumRequiredSponsors' => fn(ParseNode $n) => $o->setMinimumRequiredSponsors($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the minimumRequiredSponsors property value. The minimumRequiredSponsors property
     * @return int|null
    */
    public function getMinimumRequiredSponsors(): ?int {
        $val = $this->getBackingStore()->get('minimumRequiredSponsors');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredSponsors'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('minimumRequiredSponsors', $this->getMinimumRequiredSponsors());
    }

    /**
     * Sets the minimumRequiredSponsors property value. The minimumRequiredSponsors property
     * @param int|null $value Value to set for the minimumRequiredSponsors property.
    */
    public function setMinimumRequiredSponsors(?int $value): void {
        $this->getBackingStore()->set('minimumRequiredSponsors', $value);
    }

}
