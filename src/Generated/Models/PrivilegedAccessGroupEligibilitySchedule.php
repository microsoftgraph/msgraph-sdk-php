<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedAccessGroupEligibilitySchedule extends PrivilegedAccessSchedule implements Parsable 
{
    /**
     * Instantiates a new privilegedAccessGroupEligibilitySchedule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.privilegedAccessGroupEligibilitySchedule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedAccessGroupEligibilitySchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedAccessGroupEligibilitySchedule {
        return new PrivilegedAccessGroupEligibilitySchedule();
    }

    /**
     * Gets the accessId property value. The accessId property
     * @return PrivilegedAccessGroupRelationships|null
    */
    public function getAccessId(): ?PrivilegedAccessGroupRelationships {
        $val = $this->getBackingStore()->get('accessId');
        if (is_null($val) || $val instanceof PrivilegedAccessGroupRelationships) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessId' => fn(ParseNode $n) => $o->setAccessId($n->getEnumValue(PrivilegedAccessGroupRelationships::class)),
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([Group::class, 'createFromDiscriminatorValue'])),
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'memberType' => fn(ParseNode $n) => $o->setMemberType($n->getEnumValue(PrivilegedAccessGroupMemberType::class)),
            'principal' => fn(ParseNode $n) => $o->setPrincipal($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'principalId' => fn(ParseNode $n) => $o->setPrincipalId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the group property value. The group property
     * @return Group|null
    */
    public function getGroup(): ?Group {
        $val = $this->getBackingStore()->get('group');
        if (is_null($val) || $val instanceof Group) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'group'");
    }

    /**
     * Gets the groupId property value. The groupId property
     * @return string|null
    */
    public function getGroupId(): ?string {
        $val = $this->getBackingStore()->get('groupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupId'");
    }

    /**
     * Gets the memberType property value. The memberType property
     * @return PrivilegedAccessGroupMemberType|null
    */
    public function getMemberType(): ?PrivilegedAccessGroupMemberType {
        $val = $this->getBackingStore()->get('memberType');
        if (is_null($val) || $val instanceof PrivilegedAccessGroupMemberType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberType'");
    }

    /**
     * Gets the principal property value. The principal property
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        $val = $this->getBackingStore()->get('principal');
        if (is_null($val) || $val instanceof DirectoryObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principal'");
    }

    /**
     * Gets the principalId property value. The principalId property
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        $val = $this->getBackingStore()->get('principalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessId', $this->getAccessId());
        $writer->writeObjectValue('group', $this->getGroup());
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeEnumValue('memberType', $this->getMemberType());
        $writer->writeObjectValue('principal', $this->getPrincipal());
        $writer->writeStringValue('principalId', $this->getPrincipalId());
    }

    /**
     * Sets the accessId property value. The accessId property
     * @param PrivilegedAccessGroupRelationships|null $value Value to set for the accessId property.
    */
    public function setAccessId(?PrivilegedAccessGroupRelationships $value): void {
        $this->getBackingStore()->set('accessId', $value);
    }

    /**
     * Sets the group property value. The group property
     * @param Group|null $value Value to set for the group property.
    */
    public function setGroup(?Group $value): void {
        $this->getBackingStore()->set('group', $value);
    }

    /**
     * Sets the groupId property value. The groupId property
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the memberType property value. The memberType property
     * @param PrivilegedAccessGroupMemberType|null $value Value to set for the memberType property.
    */
    public function setMemberType(?PrivilegedAccessGroupMemberType $value): void {
        $this->getBackingStore()->set('memberType', $value);
    }

    /**
     * Sets the principal property value. The principal property
     * @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value): void {
        $this->getBackingStore()->set('principal', $value);
    }

    /**
     * Sets the principalId property value. The principalId property
     * @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value): void {
        $this->getBackingStore()->set('principalId', $value);
    }

}