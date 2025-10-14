<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VirtualEventWebinarRegistrationConfiguration extends VirtualEventRegistrationConfiguration implements Parsable 
{
    /**
     * Instantiates a new VirtualEventWebinarRegistrationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventWebinarRegistrationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventWebinarRegistrationConfiguration {
        return new VirtualEventWebinarRegistrationConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isManualApprovalEnabled' => fn(ParseNode $n) => $o->setIsManualApprovalEnabled($n->getBooleanValue()),
            'isWaitlistEnabled' => fn(ParseNode $n) => $o->setIsWaitlistEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isManualApprovalEnabled property value. The isManualApprovalEnabled property
     * @return bool|null
    */
    public function getIsManualApprovalEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isManualApprovalEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isManualApprovalEnabled'");
    }

    /**
     * Gets the isWaitlistEnabled property value. The isWaitlistEnabled property
     * @return bool|null
    */
    public function getIsWaitlistEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isWaitlistEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isWaitlistEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isManualApprovalEnabled', $this->getIsManualApprovalEnabled());
        $writer->writeBooleanValue('isWaitlistEnabled', $this->getIsWaitlistEnabled());
    }

    /**
     * Sets the isManualApprovalEnabled property value. The isManualApprovalEnabled property
     * @param bool|null $value Value to set for the isManualApprovalEnabled property.
    */
    public function setIsManualApprovalEnabled(?bool $value): void {
        $this->getBackingStore()->set('isManualApprovalEnabled', $value);
    }

    /**
     * Sets the isWaitlistEnabled property value. The isWaitlistEnabled property
     * @param bool|null $value Value to set for the isWaitlistEnabled property.
    */
    public function setIsWaitlistEnabled(?bool $value): void {
        $this->getBackingStore()->set('isWaitlistEnabled', $value);
    }

}
