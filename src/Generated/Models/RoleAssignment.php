<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoleAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new roleAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.roleAssignment');
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
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display or friendly name of the role Assignment.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
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
            'resourceScopes' => fn(ParseNode $n) => $o->setResourceScopes($n->getCollectionOfPrimitiveValues()),
            'roleDefinition' => fn(ParseNode $n) => $o->setRoleDefinition($n->getObjectValue([RoleDefinition::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resourceScopes property value. List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
     * @return array<string>|null
    */
    public function getResourceScopes(): ?array {
        return $this->getBackingStore()->get('resourceScopes');
    }

    /**
     * Gets the roleDefinition property value. Role definition this assignment is part of.
     * @return RoleDefinition|null
    */
    public function getRoleDefinition(): ?RoleDefinition {
        return $this->getBackingStore()->get('roleDefinition');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('resourceScopes', $this->getResourceScopes());
        $writer->writeObjectValue('roleDefinition', $this->getRoleDefinition());
    }

    /**
     * Sets the description property value. Description of the Role Assignment.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display or friendly name of the role Assignment.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the resourceScopes property value. List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
     *  @param array<string>|null $value Value to set for the resourceScopes property.
    */
    public function setResourceScopes(?array $value): void {
        $this->getBackingStore()->set('resourceScopes', $value);
    }

    /**
     * Sets the roleDefinition property value. Role definition this assignment is part of.
     *  @param RoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?RoleDefinition $value): void {
        $this->getBackingStore()->set('roleDefinition', $value);
    }

}
