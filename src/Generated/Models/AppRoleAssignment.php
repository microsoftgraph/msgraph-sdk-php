<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppRoleAssignment extends DirectoryObject implements Parsable 
{
    /**
     * @var string|null $appRoleId The identifier (id) for the app role which is assigned to the principal. This app role must be exposed in the appRoles property on the resource application's service principal (resourceId). If the resource application has not declared any app roles, a default app role ID of 00000000-0000-0000-0000-000000000000 can be specified to signal that the principal is assigned to the resource app without any specific app roles. Required on create.
    */
    private ?string $appRoleId = null;
    
    /**
     * @var DateTime|null $createdDateTime The time when the app role assignment was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $principalDisplayName The display name of the user, group, or service principal that was granted the app role assignment. Read-only. Supports $filter (eq and startswith).
    */
    private ?string $principalDisplayName = null;
    
    /**
     * @var string|null $principalId The unique identifier (id) for the user, group, or service principal being granted the app role. Required on create.
    */
    private ?string $principalId = null;
    
    /**
     * @var string|null $principalType The type of the assigned principal. This can either be User, Group, or ServicePrincipal. Read-only.
    */
    private ?string $principalType = null;
    
    /**
     * @var string|null $resourceDisplayName The display name of the resource app's service principal to which the assignment is made.
    */
    private ?string $resourceDisplayName = null;
    
    /**
     * @var string|null $resourceId The unique identifier (id) for the resource service principal for which the assignment is made. Required on create. Supports $filter (eq only).
    */
    private ?string $resourceId = null;
    
    /**
     * Instantiates a new appRoleAssignment and sets the default values.
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
        return $this->appRoleId;
    }

    /**
     * Gets the createdDateTime property value. The time when the app role assignment was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appRoleId' => function (ParseNode $n) use ($o) { $o->setAppRoleId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'principalDisplayName' => function (ParseNode $n) use ($o) { $o->setPrincipalDisplayName($n->getStringValue()); },
            'principalId' => function (ParseNode $n) use ($o) { $o->setPrincipalId($n->getStringValue()); },
            'principalType' => function (ParseNode $n) use ($o) { $o->setPrincipalType($n->getStringValue()); },
            'resourceDisplayName' => function (ParseNode $n) use ($o) { $o->setResourceDisplayName($n->getStringValue()); },
            'resourceId' => function (ParseNode $n) use ($o) { $o->setResourceId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the principalDisplayName property value. The display name of the user, group, or service principal that was granted the app role assignment. Read-only. Supports $filter (eq and startswith).
     * @return string|null
    */
    public function getPrincipalDisplayName(): ?string {
        return $this->principalDisplayName;
    }

    /**
     * Gets the principalId property value. The unique identifier (id) for the user, group, or service principal being granted the app role. Required on create.
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        return $this->principalId;
    }

    /**
     * Gets the principalType property value. The type of the assigned principal. This can either be User, Group, or ServicePrincipal. Read-only.
     * @return string|null
    */
    public function getPrincipalType(): ?string {
        return $this->principalType;
    }

    /**
     * Gets the resourceDisplayName property value. The display name of the resource app's service principal to which the assignment is made.
     * @return string|null
    */
    public function getResourceDisplayName(): ?string {
        return $this->resourceDisplayName;
    }

    /**
     * Gets the resourceId property value. The unique identifier (id) for the resource service principal for which the assignment is made. Required on create. Supports $filter (eq only).
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appRoleId', $this->appRoleId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('principalDisplayName', $this->principalDisplayName);
        $writer->writeStringValue('principalId', $this->principalId);
        $writer->writeStringValue('principalType', $this->principalType);
        $writer->writeStringValue('resourceDisplayName', $this->resourceDisplayName);
        $writer->writeStringValue('resourceId', $this->resourceId);
    }

    /**
     * Sets the appRoleId property value. The identifier (id) for the app role which is assigned to the principal. This app role must be exposed in the appRoles property on the resource application's service principal (resourceId). If the resource application has not declared any app roles, a default app role ID of 00000000-0000-0000-0000-000000000000 can be specified to signal that the principal is assigned to the resource app without any specific app roles. Required on create.
     *  @param string|null $value Value to set for the appRoleId property.
    */
    public function setAppRoleId(?string $value ): void {
        $this->appRoleId = $value;
    }

    /**
     * Sets the createdDateTime property value. The time when the app role assignment was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the principalDisplayName property value. The display name of the user, group, or service principal that was granted the app role assignment. Read-only. Supports $filter (eq and startswith).
     *  @param string|null $value Value to set for the principalDisplayName property.
    */
    public function setPrincipalDisplayName(?string $value ): void {
        $this->principalDisplayName = $value;
    }

    /**
     * Sets the principalId property value. The unique identifier (id) for the user, group, or service principal being granted the app role. Required on create.
     *  @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value ): void {
        $this->principalId = $value;
    }

    /**
     * Sets the principalType property value. The type of the assigned principal. This can either be User, Group, or ServicePrincipal. Read-only.
     *  @param string|null $value Value to set for the principalType property.
    */
    public function setPrincipalType(?string $value ): void {
        $this->principalType = $value;
    }

    /**
     * Sets the resourceDisplayName property value. The display name of the resource app's service principal to which the assignment is made.
     *  @param string|null $value Value to set for the resourceDisplayName property.
    */
    public function setResourceDisplayName(?string $value ): void {
        $this->resourceDisplayName = $value;
    }

    /**
     * Sets the resourceId property value. The unique identifier (id) for the resource service principal for which the assignment is made. Required on create. Supports $filter (eq only).
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

}
