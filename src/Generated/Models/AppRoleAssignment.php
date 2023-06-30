<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppRoleAssignment extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new AppRoleAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appRoleAssignment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppRoleAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppRoleAssignment {
        return new AppRoleAssignment();
    }

    /**
     * Gets the appRoleId property value. The identifier (id) for the app role which is assigned to the principal. This app role must be exposed in the appRoles property on the resource application's service principal (resourceId). If the resource application has not declared any app roles, a default app role ID of 00000000-0000-0000-0000-000000000000 can be specified to signal that the principal is assigned to the resource app without any specific app roles. Required on create.
     * @return string|null
    */
    public function getAppRoleId(): ?string {
        $val = $this->getBackingStore()->get('appRoleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appRoleId'");
    }

    /**
     * Gets the createdDateTime property value. The time when the app role assignment was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appRoleId' => fn(ParseNode $n) => $o->setAppRoleId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'principalDisplayName' => fn(ParseNode $n) => $o->setPrincipalDisplayName($n->getStringValue()),
            'principalId' => fn(ParseNode $n) => $o->setPrincipalId($n->getStringValue()),
            'principalType' => fn(ParseNode $n) => $o->setPrincipalType($n->getStringValue()),
            'resourceDisplayName' => fn(ParseNode $n) => $o->setResourceDisplayName($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the principalDisplayName property value. The display name of the user, group, or service principal that was granted the app role assignment. Read-only. Supports $filter (eq and startswith).
     * @return string|null
    */
    public function getPrincipalDisplayName(): ?string {
        $val = $this->getBackingStore()->get('principalDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalDisplayName'");
    }

    /**
     * Gets the principalId property value. The unique identifier (id) for the user, security group, or service principal being granted the app role. Security groups with dynamic memberships are supported. Required on create.
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
     * Gets the principalType property value. The type of the assigned principal. This can either be User, Group, or ServicePrincipal. Read-only.
     * @return string|null
    */
    public function getPrincipalType(): ?string {
        $val = $this->getBackingStore()->get('principalType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalType'");
    }

    /**
     * Gets the resourceDisplayName property value. The display name of the resource app's service principal to which the assignment is made.
     * @return string|null
    */
    public function getResourceDisplayName(): ?string {
        $val = $this->getBackingStore()->get('resourceDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceDisplayName'");
    }

    /**
     * Gets the resourceId property value. The unique identifier (id) for the resource service principal for which the assignment is made. Required on create. Supports $filter (eq only).
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appRoleId', $this->getAppRoleId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('principalDisplayName', $this->getPrincipalDisplayName());
        $writer->writeStringValue('principalId', $this->getPrincipalId());
        $writer->writeStringValue('principalType', $this->getPrincipalType());
        $writer->writeStringValue('resourceDisplayName', $this->getResourceDisplayName());
        $writer->writeStringValue('resourceId', $this->getResourceId());
    }

    /**
     * Sets the appRoleId property value. The identifier (id) for the app role which is assigned to the principal. This app role must be exposed in the appRoles property on the resource application's service principal (resourceId). If the resource application has not declared any app roles, a default app role ID of 00000000-0000-0000-0000-000000000000 can be specified to signal that the principal is assigned to the resource app without any specific app roles. Required on create.
     * @param string|null $value Value to set for the appRoleId property.
    */
    public function setAppRoleId(?string $value): void {
        $this->getBackingStore()->set('appRoleId', $value);
    }

    /**
     * Sets the createdDateTime property value. The time when the app role assignment was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the principalDisplayName property value. The display name of the user, group, or service principal that was granted the app role assignment. Read-only. Supports $filter (eq and startswith).
     * @param string|null $value Value to set for the principalDisplayName property.
    */
    public function setPrincipalDisplayName(?string $value): void {
        $this->getBackingStore()->set('principalDisplayName', $value);
    }

    /**
     * Sets the principalId property value. The unique identifier (id) for the user, security group, or service principal being granted the app role. Security groups with dynamic memberships are supported. Required on create.
     * @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value): void {
        $this->getBackingStore()->set('principalId', $value);
    }

    /**
     * Sets the principalType property value. The type of the assigned principal. This can either be User, Group, or ServicePrincipal. Read-only.
     * @param string|null $value Value to set for the principalType property.
    */
    public function setPrincipalType(?string $value): void {
        $this->getBackingStore()->set('principalType', $value);
    }

    /**
     * Sets the resourceDisplayName property value. The display name of the resource app's service principal to which the assignment is made.
     * @param string|null $value Value to set for the resourceDisplayName property.
    */
    public function setResourceDisplayName(?string $value): void {
        $this->getBackingStore()->set('resourceDisplayName', $value);
    }

    /**
     * Sets the resourceId property value. The unique identifier (id) for the resource service principal for which the assignment is made. Required on create. Supports $filter (eq only).
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

}
