<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ScopedRoleMembership extends Entity implements Parsable 
{
    /**
     * Instantiates a new ScopedRoleMembership and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScopedRoleMembership
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScopedRoleMembership {
        return new ScopedRoleMembership();
    }

    /**
     * Gets the administrativeUnitId property value. Unique identifier for the administrative unit that the directory role is scoped to
     * @return string|null
    */
    public function getAdministrativeUnitId(): ?string {
        $val = $this->getBackingStore()->get('administrativeUnitId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'administrativeUnitId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'administrativeUnitId' => fn(ParseNode $n) => $o->setAdministrativeUnitId($n->getStringValue()),
            'roleId' => fn(ParseNode $n) => $o->setRoleId($n->getStringValue()),
            'roleMemberInfo' => fn(ParseNode $n) => $o->setRoleMemberInfo($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the roleId property value. Unique identifier for the directory role that the member is in.
     * @return string|null
    */
    public function getRoleId(): ?string {
        $val = $this->getBackingStore()->get('roleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleId'");
    }

    /**
     * Gets the roleMemberInfo property value. The roleMemberInfo property
     * @return Identity|null
    */
    public function getRoleMemberInfo(): ?Identity {
        $val = $this->getBackingStore()->get('roleMemberInfo');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleMemberInfo'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('administrativeUnitId', $this->getAdministrativeUnitId());
        $writer->writeStringValue('roleId', $this->getRoleId());
        $writer->writeObjectValue('roleMemberInfo', $this->getRoleMemberInfo());
    }

    /**
     * Sets the administrativeUnitId property value. Unique identifier for the administrative unit that the directory role is scoped to
     * @param string|null $value Value to set for the administrativeUnitId property.
    */
    public function setAdministrativeUnitId(?string $value): void {
        $this->getBackingStore()->set('administrativeUnitId', $value);
    }

    /**
     * Sets the roleId property value. Unique identifier for the directory role that the member is in.
     * @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value): void {
        $this->getBackingStore()->set('roleId', $value);
    }

    /**
     * Sets the roleMemberInfo property value. The roleMemberInfo property
     * @param Identity|null $value Value to set for the roleMemberInfo property.
    */
    public function setRoleMemberInfo(?Identity $value): void {
        $this->getBackingStore()->set('roleMemberInfo', $value);
    }

}
