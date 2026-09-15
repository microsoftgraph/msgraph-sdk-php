<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantGovernanceSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new TenantGovernanceSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantGovernanceSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantGovernanceSetting {
        return new TenantGovernanceSetting();
    }

    /**
     * Gets the canReceiveInvitations property value. The canReceiveInvitations property
     * @return bool|null
    */
    public function getCanReceiveInvitations(): ?bool {
        $val = $this->getBackingStore()->get('canReceiveInvitations');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canReceiveInvitations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'canReceiveInvitations' => fn(ParseNode $n) => $o->setCanReceiveInvitations($n->getBooleanValue()),
            'isRelatedTenantsEnabled' => fn(ParseNode $n) => $o->setIsRelatedTenantsEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isRelatedTenantsEnabled property value. The isRelatedTenantsEnabled property
     * @return bool|null
    */
    public function getIsRelatedTenantsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isRelatedTenantsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRelatedTenantsEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('canReceiveInvitations', $this->getCanReceiveInvitations());
        $writer->writeBooleanValue('isRelatedTenantsEnabled', $this->getIsRelatedTenantsEnabled());
    }

    /**
     * Sets the canReceiveInvitations property value. The canReceiveInvitations property
     * @param bool|null $value Value to set for the canReceiveInvitations property.
    */
    public function setCanReceiveInvitations(?bool $value): void {
        $this->getBackingStore()->set('canReceiveInvitations', $value);
    }

    /**
     * Sets the isRelatedTenantsEnabled property value. The isRelatedTenantsEnabled property
     * @param bool|null $value Value to set for the isRelatedTenantsEnabled property.
    */
    public function setIsRelatedTenantsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isRelatedTenantsEnabled', $value);
    }

}
