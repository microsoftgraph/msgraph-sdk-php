<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DirectoryRole extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new directoryRole and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.directoryRole');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectoryRole
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectoryRole {
        return new DirectoryRole();
    }

    /**
     * Gets the description property value. The description for the directory role. Read-only. Supports $filter (eq), $search, $select.
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
     * Gets the displayName property value. The display name for the directory role. Read-only. Supports $filter (eq), $search, $select.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'roleTemplateId' => fn(ParseNode $n) => $o->setRoleTemplateId($n->getStringValue()),
            'scopedMembers' => fn(ParseNode $n) => $o->setScopedMembers($n->getCollectionOfObjectValues([ScopedRoleMembership::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the members property value. Users that are members of this directory role. HTTP Methods: GET, POST, DELETE. Read-only. Nullable. Supports $expand.
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
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the roleTemplateId property value. The id of the directoryRoleTemplate that this role is based on. The property must be specified when activating a directory role in a tenant with a POST operation. After the directory role has been activated, the property is read only. Supports $filter (eq), $select.
     * @return string|null
    */
    public function getRoleTemplateId(): ?string {
        $val = $this->getBackingStore()->get('roleTemplateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleTemplateId'");
    }

    /**
     * Gets the scopedMembers property value. Members of this directory role that are scoped to administrative units. Read-only. Nullable.
     * @return array<ScopedRoleMembership>|null
    */
    public function getScopedMembers(): ?array {
        $val = $this->getBackingStore()->get('scopedMembers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ScopedRoleMembership::class);
            /** @var array<ScopedRoleMembership>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopedMembers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('roleTemplateId', $this->getRoleTemplateId());
        $writer->writeCollectionOfObjectValues('scopedMembers', $this->getScopedMembers());
    }

    /**
     * Sets the description property value. The description for the directory role. Read-only. Supports $filter (eq), $search, $select.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name for the directory role. Read-only. Supports $filter (eq), $search, $select.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the members property value. Users that are members of this directory role. HTTP Methods: GET, POST, DELETE. Read-only. Nullable. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the roleTemplateId property value. The id of the directoryRoleTemplate that this role is based on. The property must be specified when activating a directory role in a tenant with a POST operation. After the directory role has been activated, the property is read only. Supports $filter (eq), $select.
     * @param string|null $value Value to set for the roleTemplateId property.
    */
    public function setRoleTemplateId(?string $value): void {
        $this->getBackingStore()->set('roleTemplateId', $value);
    }

    /**
     * Sets the scopedMembers property value. Members of this directory role that are scoped to administrative units. Read-only. Nullable.
     * @param array<ScopedRoleMembership>|null $value Value to set for the scopedMembers property.
    */
    public function setScopedMembers(?array $value): void {
        $this->getBackingStore()->set('scopedMembers', $value);
    }

}
