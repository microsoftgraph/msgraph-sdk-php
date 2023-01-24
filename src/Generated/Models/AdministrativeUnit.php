<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

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
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Display name for the administrative unit. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for this administrative unit. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->getBackingStore()->get('extensions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'scopedRoleMembers' => fn(ParseNode $n) => $o->setScopedRoleMembers($n->getCollectionOfObjectValues([ScopedRoleMembership::class, 'createFromDiscriminatorValue'])),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getStringValue()),
        ]);
    }

    /**
     * Gets the members property value. Users and groups that are members of this administrative unit. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getMembers(): ?array {
        return $this->getBackingStore()->get('members');
    }

    /**
     * Gets the scopedRoleMembers property value. Scoped-role members of this administrative unit.
     * @return array<ScopedRoleMembership>|null
    */
    public function getScopedRoleMembers(): ?array {
        return $this->getBackingStore()->get('scopedRoleMembers');
    }

    /**
     * Gets the visibility property value. Controls whether the administrative unit and its members are hidden or public. Can be set to HiddenMembership. If not set (value is null), the default behavior is public. When set to HiddenMembership, only members of the administrative unit can list other members of the administrative unit.
     * @return string|null
    */
    public function getVisibility(): ?string {
        return $this->getBackingStore()->get('visibility');
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
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
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
     * Sets the displayName property value. Display name for the administrative unit. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
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
     * Sets the members property value. Users and groups that are members of this administrative unit. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
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
