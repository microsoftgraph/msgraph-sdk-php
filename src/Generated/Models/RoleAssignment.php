<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoleAssignment extends Entity implements Parsable 
{
    /**
     * @var string|null $description Description of the Role Assignment.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display or friendly name of the role Assignment.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<string>|null $resourceScopes List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
    */
    private ?array $resourceScopes = null;
    
    /**
     * @var RoleDefinition|null $roleDefinition Role definition this assignment is part of.
    */
    private ?RoleDefinition $roleDefinition = null;
    
    /**
     * Instantiates a new roleAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoleAssignment {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceAndAppManagementRoleAssignment': return new DeviceAndAppManagementRoleAssignment();
            }
        }
        return new RoleAssignment();
    }

    /**
     * Gets the description property value. Description of the Role Assignment.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display or friendly name of the role Assignment.
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
            'resourceScopes' => function (ParseNode $n) use ($o) { $o->setResourceScopes($n->getCollectionOfPrimitiveValues()); },
            'roleDefinition' => function (ParseNode $n) use ($o) { $o->setRoleDefinition($n->getObjectValue(array(RoleDefinition::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the resourceScopes property value. List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
     * @return array<string>|null
    */
    public function getResourceScopes(): ?array {
        return $this->resourceScopes;
    }

    /**
     * Gets the roleDefinition property value. Role definition this assignment is part of.
     * @return RoleDefinition|null
    */
    public function getRoleDefinition(): ?RoleDefinition {
        return $this->roleDefinition;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('resourceScopes', $this->resourceScopes);
        $writer->writeObjectValue('roleDefinition', $this->roleDefinition);
    }

    /**
     * Sets the description property value. Description of the Role Assignment.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display or friendly name of the role Assignment.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the resourceScopes property value. List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
     *  @param array<string>|null $value Value to set for the resourceScopes property.
    */
    public function setResourceScopes(?array $value ): void {
        $this->resourceScopes = $value;
    }

    /**
     * Sets the roleDefinition property value. Role definition this assignment is part of.
     *  @param RoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?RoleDefinition $value ): void {
        $this->roleDefinition = $value;
    }

}
