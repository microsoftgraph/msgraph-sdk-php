<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AdministrativeUnit extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new AdministrativeUnit and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.administrativeUnit');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdministrativeUnit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdministrativeUnit {
        return new AdministrativeUnit();
    }

    /**
     * Gets the description property value. An optional description for the administrative unit. Supports $filter (eq, ne, in, startsWith), $search.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. Display name for the administrative unit. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for this administrative unit. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        $val = $this->getBackingStore()->get('extensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Extension::class);
            /** @var array<Extension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'isMemberManagementRestricted' => fn(ParseNode $n) => $o->setIsMemberManagementRestricted($n->getBooleanValue()),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'membershipRule' => fn(ParseNode $n) => $o->setMembershipRule($n->getStringValue()),
            'membershipRuleProcessingState' => fn(ParseNode $n) => $o->setMembershipRuleProcessingState($n->getStringValue()),
            'membershipType' => fn(ParseNode $n) => $o->setMembershipType($n->getStringValue()),
            'scopedRoleMembers' => fn(ParseNode $n) => $o->setScopedRoleMembers($n->getCollectionOfObjectValues([ScopedRoleMembership::class, 'createFromDiscriminatorValue'])),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isMemberManagementRestricted property value. The isMemberManagementRestricted property
     * @return bool|null
    */
    public function getIsMemberManagementRestricted(): ?bool {
        $val = $this->getBackingStore()->get('isMemberManagementRestricted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMemberManagementRestricted'");
    }

    /**
     * Gets the members property value. Users and groups that are members of this administrative unit. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Gets the membershipRule property value. The membershipRule property
     * @return string|null
    */
    public function getMembershipRule(): ?string {
        $val = $this->getBackingStore()->get('membershipRule');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipRule'");
    }

    /**
     * Gets the membershipRuleProcessingState property value. The membershipRuleProcessingState property
     * @return string|null
    */
    public function getMembershipRuleProcessingState(): ?string {
        $val = $this->getBackingStore()->get('membershipRuleProcessingState');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipRuleProcessingState'");
    }

    /**
     * Gets the membershipType property value. The membershipType property
     * @return string|null
    */
    public function getMembershipType(): ?string {
        $val = $this->getBackingStore()->get('membershipType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipType'");
    }

    /**
     * Gets the scopedRoleMembers property value. Scoped-role members of this administrative unit.
     * @return array<ScopedRoleMembership>|null
    */
    public function getScopedRoleMembers(): ?array {
        $val = $this->getBackingStore()->get('scopedRoleMembers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ScopedRoleMembership::class);
            /** @var array<ScopedRoleMembership>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopedRoleMembers'");
    }

    /**
     * Gets the visibility property value. Controls whether the administrative unit and its members are hidden or public. Can be set to HiddenMembership. If not set (value is null), the default behavior is public. When set to HiddenMembership, only members of the administrative unit can list other members of the administrative unit.
     * @return string|null
    */
    public function getVisibility(): ?string {
        $val = $this->getBackingStore()->get('visibility');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'visibility'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeBooleanValue('isMemberManagementRestricted', $this->getIsMemberManagementRestricted());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeStringValue('membershipRule', $this->getMembershipRule());
        $writer->writeStringValue('membershipRuleProcessingState', $this->getMembershipRuleProcessingState());
        $writer->writeStringValue('membershipType', $this->getMembershipType());
        $writer->writeCollectionOfObjectValues('scopedRoleMembers', $this->getScopedRoleMembers());
        $writer->writeStringValue('visibility', $this->getVisibility());
    }

    /**
     * Sets the description property value. An optional description for the administrative unit. Supports $filter (eq, ne, in, startsWith), $search.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name for the administrative unit. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for this administrative unit. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the isMemberManagementRestricted property value. The isMemberManagementRestricted property
     * @param bool|null $value Value to set for the isMemberManagementRestricted property.
    */
    public function setIsMemberManagementRestricted(?bool $value): void {
        $this->getBackingStore()->set('isMemberManagementRestricted', $value);
    }

    /**
     * Sets the members property value. Users and groups that are members of this administrative unit. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the membershipRule property value. The membershipRule property
     * @param string|null $value Value to set for the membershipRule property.
    */
    public function setMembershipRule(?string $value): void {
        $this->getBackingStore()->set('membershipRule', $value);
    }

    /**
     * Sets the membershipRuleProcessingState property value. The membershipRuleProcessingState property
     * @param string|null $value Value to set for the membershipRuleProcessingState property.
    */
    public function setMembershipRuleProcessingState(?string $value): void {
        $this->getBackingStore()->set('membershipRuleProcessingState', $value);
    }

    /**
     * Sets the membershipType property value. The membershipType property
     * @param string|null $value Value to set for the membershipType property.
    */
    public function setMembershipType(?string $value): void {
        $this->getBackingStore()->set('membershipType', $value);
    }

    /**
     * Sets the scopedRoleMembers property value. Scoped-role members of this administrative unit.
     * @param array<ScopedRoleMembership>|null $value Value to set for the scopedRoleMembers property.
    */
    public function setScopedRoleMembers(?array $value): void {
        $this->getBackingStore()->set('scopedRoleMembers', $value);
    }

    /**
     * Sets the visibility property value. Controls whether the administrative unit and its members are hidden or public. Can be set to HiddenMembership. If not set (value is null), the default behavior is public. When set to HiddenMembership, only members of the administrative unit can list other members of the administrative unit.
     * @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value): void {
        $this->getBackingStore()->set('visibility', $value);
    }

}
