<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents a Viva Engage role and its members
*/
class EngagementRole extends Entity implements Parsable 
{
    /**
     * Instantiates a new EngagementRole and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EngagementRole
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EngagementRole {
        return new EngagementRole();
    }

    /**
     * Gets the displayName property value. The name of the role.
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
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([EngagementRoleMember::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the members property value. Users that have this role assigned.
     * @return array<EngagementRoleMember>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EngagementRoleMember::class);
            /** @var array<EngagementRoleMember>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
    }

    /**
     * Sets the displayName property value. The name of the role.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the members property value. Users that have this role assigned.
     * @param array<EngagementRoleMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

}
