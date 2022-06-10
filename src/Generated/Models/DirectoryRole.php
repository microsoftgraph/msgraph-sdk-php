<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectoryRole extends DirectoryObject implements Parsable 
{
    /**
     * @var string|null $description The description for the directory role. Read-only. Supports $filter (eq), $search, $select.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name for the directory role. Read-only. Supports $filter (eq), $search, $select.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<DirectoryObject>|null $members Users that are members of this directory role. HTTP Methods: GET, POST, DELETE. Read-only. Nullable. Supports $expand.
    */
    private ?array $members = null;
    
    /**
     * @var string|null $roleTemplateId The id of the directoryRoleTemplate that this role is based on. The property must be specified when activating a directory role in a tenant with a POST operation. After the directory role has been activated, the property is read only. Supports $filter (eq), $select.
    */
    private ?string $roleTemplateId = null;
    
    /**
     * @var array<ScopedRoleMembership>|null $scopedMembers Members of this directory role that are scoped to administrative units. Read-only. Nullable.
    */
    private ?array $scopedMembers = null;
    
    /**
     * Instantiates a new directoryRole and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name for the directory role. Read-only. Supports $filter (eq), $search, $select.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'members' => function (ParseNode $n) use ($o) { $o->setMembers($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'roleTemplateId' => function (ParseNode $n) use ($o) { $o->setRoleTemplateId($n->getStringValue()); },
            'scopedMembers' => function (ParseNode $n) use ($o) { $o->setScopedMembers($n->getCollectionOfObjectValues(array(ScopedRoleMembership::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the members property value. Users that are members of this directory role. HTTP Methods: GET, POST, DELETE. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the roleTemplateId property value. The id of the directoryRoleTemplate that this role is based on. The property must be specified when activating a directory role in a tenant with a POST operation. After the directory role has been activated, the property is read only. Supports $filter (eq), $select.
     * @return string|null
    */
    public function getRoleTemplateId(): ?string {
        return $this->roleTemplateId;
    }

    /**
     * Gets the scopedMembers property value. Members of this directory role that are scoped to administrative units. Read-only. Nullable.
     * @return array<ScopedRoleMembership>|null
    */
    public function getScopedMembers(): ?array {
        return $this->scopedMembers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeStringValue('roleTemplateId', $this->roleTemplateId);
        $writer->writeCollectionOfObjectValues('scopedMembers', $this->scopedMembers);
    }

    /**
     * Sets the description property value. The description for the directory role. Read-only. Supports $filter (eq), $search, $select.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name for the directory role. Read-only. Supports $filter (eq), $search, $select.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the members property value. Users that are members of this directory role. HTTP Methods: GET, POST, DELETE. Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the roleTemplateId property value. The id of the directoryRoleTemplate that this role is based on. The property must be specified when activating a directory role in a tenant with a POST operation. After the directory role has been activated, the property is read only. Supports $filter (eq), $select.
     *  @param string|null $value Value to set for the roleTemplateId property.
    */
    public function setRoleTemplateId(?string $value ): void {
        $this->roleTemplateId = $value;
    }

    /**
     * Sets the scopedMembers property value. Members of this directory role that are scoped to administrative units. Read-only. Nullable.
     *  @param array<ScopedRoleMembership>|null $value Value to set for the scopedMembers property.
    */
    public function setScopedMembers(?array $value ): void {
        $this->scopedMembers = $value;
    }

}
