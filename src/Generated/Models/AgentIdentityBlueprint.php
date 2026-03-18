<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AgentIdentityBlueprint extends Application implements Parsable 
{
    /**
     * Instantiates a new AgentIdentityBlueprint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.agentIdentityBlueprint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentIdentityBlueprint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentIdentityBlueprint {
        return new AgentIdentityBlueprint();
    }

    /**
     * Gets the createdByAppId property value. The appId of the application that created this agent identity blueprint. Set internally by Microsoft Entra ID. Read-only. Inherited from application.
     * @return string|null
    */
    public function getCreatedByAppId(): ?string {
        $val = $this->getBackingStore()->get('createdByAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdByAppId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdByAppId' => fn(ParseNode $n) => $o->setCreatedByAppId($n->getStringValue()),
            'inheritablePermissions' => fn(ParseNode $n) => $o->setInheritablePermissions($n->getCollectionOfObjectValues([InheritablePermission::class, 'createFromDiscriminatorValue'])),
            'sponsors' => fn(ParseNode $n) => $o->setSponsors($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the inheritablePermissions property value. Defines scopes of a resource application that may be automatically granted to agent identities without additional consent.
     * @return array<InheritablePermission>|null
    */
    public function getInheritablePermissions(): ?array {
        $val = $this->getBackingStore()->get('inheritablePermissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, InheritablePermission::class);
            /** @var array<InheritablePermission>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inheritablePermissions'");
    }

    /**
     * Gets the sponsors property value. The sponsors for this agent identity blueprint. Sponsors are users or groups who can authorize and manage the lifecycle of agent identity instances. Required during the create operation.
     * @return array<DirectoryObject>|null
    */
    public function getSponsors(): ?array {
        $val = $this->getBackingStore()->get('sponsors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sponsors'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('createdByAppId', $this->getCreatedByAppId());
        $writer->writeCollectionOfObjectValues('inheritablePermissions', $this->getInheritablePermissions());
        $writer->writeCollectionOfObjectValues('sponsors', $this->getSponsors());
    }

    /**
     * Sets the createdByAppId property value. The appId of the application that created this agent identity blueprint. Set internally by Microsoft Entra ID. Read-only. Inherited from application.
     * @param string|null $value Value to set for the createdByAppId property.
    */
    public function setCreatedByAppId(?string $value): void {
        $this->getBackingStore()->set('createdByAppId', $value);
    }

    /**
     * Sets the inheritablePermissions property value. Defines scopes of a resource application that may be automatically granted to agent identities without additional consent.
     * @param array<InheritablePermission>|null $value Value to set for the inheritablePermissions property.
    */
    public function setInheritablePermissions(?array $value): void {
        $this->getBackingStore()->set('inheritablePermissions', $value);
    }

    /**
     * Sets the sponsors property value. The sponsors for this agent identity blueprint. Sponsors are users or groups who can authorize and manage the lifecycle of agent identity instances. Required during the create operation.
     * @param array<DirectoryObject>|null $value Value to set for the sponsors property.
    */
    public function setSponsors(?array $value): void {
        $this->getBackingStore()->set('sponsors', $value);
    }

}
