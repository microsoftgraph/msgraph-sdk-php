<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAndAppManagementRoleAssignment extends RoleAssignment implements Parsable 
{
    /**
     * Instantiates a new DeviceAndAppManagementRoleAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAndAppManagementRoleAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAndAppManagementRoleAssignment {
        return new DeviceAndAppManagementRoleAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the members property value. The list of ids of role member security groups. These are IDs from Azure Active Directory.
     * @return array<string>|null
    */
    public function getMembers(): ?array {
        return $this->getBackingStore()->get('members');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('members', $this->getMembers());
    }

    /**
     * Sets the members property value. The list of ids of role member security groups. These are IDs from Azure Active Directory.
     *  @param array<string>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

}
