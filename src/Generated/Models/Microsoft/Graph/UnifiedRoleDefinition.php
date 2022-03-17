<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleDefinition extends Entity 
{
    /** @var string|null $description The description for the unifiedRoleDefinition. Read-only when isBuiltIn is true. */
    private ?string $description = null;
    
    /** @var string|null $displayName The display name for the unifiedRoleDefinition. Read-only when isBuiltIn is true. Required.  Supports $filter (eq, in). */
    private ?string $displayName = null;
    
    /** @var array<UnifiedRoleDefinition>|null $inheritsPermissionsFrom Read-only collection of role definitions that the given role definition inherits from. Only Azure AD built-in roles (isBuiltIn is true) support this attribute. Supports $expand. */
    private ?array $inheritsPermissionsFrom = null;
    
    /** @var bool|null $isBuiltIn Flag indicating whether the role definition is part of the default set included in Azure Active Directory (Azure AD) or a custom definition. Read-only. Supports $filter (eq, in). */
    private ?bool $isBuiltIn = null;
    
    /** @var bool|null $isEnabled Flag indicating whether the role is enabled for assignment. If false the role is not available for assignment. Read-only when isBuiltIn is true. */
    private ?bool $isEnabled = null;
    
    /** @var array<string>|null $resourceScopes List of the scopes or permissions the role definition applies to. Currently only / is supported. Read-only when isBuiltIn is true. DO NOT USE. This will be deprecated soon. Attach scope to role assignment. */
    private ?array $resourceScopes = null;
    
    /** @var array<UnifiedRolePermission>|null $rolePermissions List of permissions included in the role. Read-only when isBuiltIn is true. Required. */
    private ?array $rolePermissions = null;
    
    /** @var string|null $templateId Custom template identifier that can be set when isBuiltIn is false but is read-only when isBuiltIn is true. This identifier is typically used if one needs an identifier to be the same across different directories. */
    private ?string $templateId = null;
    
    /** @var string|null $version Indicates version of the role definition. Read-only when isBuiltIn is true. */
    private ?string $version = null;
    
    /**
     * Instantiates a new unifiedRoleDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleDefinition
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleDefinition {
        return new UnifiedRoleDefinition();
    }

    /**
     * Gets the description property value. The description for the unifiedRoleDefinition. Read-only when isBuiltIn is true.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name for the unifiedRoleDefinition. Read-only when isBuiltIn is true. Required.  Supports $filter (eq, in).
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
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'inheritsPermissionsFrom' => function (self $o, ParseNode $n) { $o->setInheritsPermissionsFrom($n->getCollectionOfObjectValues(UnifiedRoleDefinition::class)); },
            'isBuiltIn' => function (self $o, ParseNode $n) { $o->setIsBuiltIn($n->getBooleanValue()); },
            'isEnabled' => function (self $o, ParseNode $n) { $o->setIsEnabled($n->getBooleanValue()); },
            'resourceScopes' => function (self $o, ParseNode $n) { $o->setResourceScopes($n->getCollectionOfPrimitiveValues()); },
            'rolePermissions' => function (self $o, ParseNode $n) { $o->setRolePermissions($n->getCollectionOfObjectValues(UnifiedRolePermission::class)); },
            'templateId' => function (self $o, ParseNode $n) { $o->setTemplateId($n->getStringValue()); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the inheritsPermissionsFrom property value. Read-only collection of role definitions that the given role definition inherits from. Only Azure AD built-in roles (isBuiltIn is true) support this attribute. Supports $expand.
     * @return array<UnifiedRoleDefinition>|null
    */
    public function getInheritsPermissionsFrom(): ?array {
        return $this->inheritsPermissionsFrom;
    }

    /**
     * Gets the isBuiltIn property value. Flag indicating whether the role definition is part of the default set included in Azure Active Directory (Azure AD) or a custom definition. Read-only. Supports $filter (eq, in).
     * @return bool|null
    */
    public function getIsBuiltIn(): ?bool {
        return $this->isBuiltIn;
    }

    /**
     * Gets the isEnabled property value. Flag indicating whether the role is enabled for assignment. If false the role is not available for assignment. Read-only when isBuiltIn is true.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the resourceScopes property value. List of the scopes or permissions the role definition applies to. Currently only / is supported. Read-only when isBuiltIn is true. DO NOT USE. This will be deprecated soon. Attach scope to role assignment.
     * @return array<string>|null
    */
    public function getResourceScopes(): ?array {
        return $this->resourceScopes;
    }

    /**
     * Gets the rolePermissions property value. List of permissions included in the role. Read-only when isBuiltIn is true. Required.
     * @return array<UnifiedRolePermission>|null
    */
    public function getRolePermissions(): ?array {
        return $this->rolePermissions;
    }

    /**
     * Gets the templateId property value. Custom template identifier that can be set when isBuiltIn is false but is read-only when isBuiltIn is true. This identifier is typically used if one needs an identifier to be the same across different directories.
     * @return string|null
    */
    public function getTemplateId(): ?string {
        return $this->templateId;
    }

    /**
     * Gets the version property value. Indicates version of the role definition. Read-only when isBuiltIn is true.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('inheritsPermissionsFrom', $this->inheritsPermissionsFrom);
        $writer->writeBooleanValue('isBuiltIn', $this->isBuiltIn);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeCollectionOfPrimitiveValues('resourceScopes', $this->resourceScopes);
        $writer->writeCollectionOfObjectValues('rolePermissions', $this->rolePermissions);
        $writer->writeStringValue('templateId', $this->templateId);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the description property value. The description for the unifiedRoleDefinition. Read-only when isBuiltIn is true.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name for the unifiedRoleDefinition. Read-only when isBuiltIn is true. Required.  Supports $filter (eq, in).
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the inheritsPermissionsFrom property value. Read-only collection of role definitions that the given role definition inherits from. Only Azure AD built-in roles (isBuiltIn is true) support this attribute. Supports $expand.
     *  @param array<UnifiedRoleDefinition>|null $value Value to set for the inheritsPermissionsFrom property.
    */
    public function setInheritsPermissionsFrom(?array $value ): void {
        $this->inheritsPermissionsFrom = $value;
    }

    /**
     * Sets the isBuiltIn property value. Flag indicating whether the role definition is part of the default set included in Azure Active Directory (Azure AD) or a custom definition. Read-only. Supports $filter (eq, in).
     *  @param bool|null $value Value to set for the isBuiltIn property.
    */
    public function setIsBuiltIn(?bool $value ): void {
        $this->isBuiltIn = $value;
    }

    /**
     * Sets the isEnabled property value. Flag indicating whether the role is enabled for assignment. If false the role is not available for assignment. Read-only when isBuiltIn is true.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the resourceScopes property value. List of the scopes or permissions the role definition applies to. Currently only / is supported. Read-only when isBuiltIn is true. DO NOT USE. This will be deprecated soon. Attach scope to role assignment.
     *  @param array<string>|null $value Value to set for the resourceScopes property.
    */
    public function setResourceScopes(?array $value ): void {
        $this->resourceScopes = $value;
    }

    /**
     * Sets the rolePermissions property value. List of permissions included in the role. Read-only when isBuiltIn is true. Required.
     *  @param array<UnifiedRolePermission>|null $value Value to set for the rolePermissions property.
    */
    public function setRolePermissions(?array $value ): void {
        $this->rolePermissions = $value;
    }

    /**
     * Sets the templateId property value. Custom template identifier that can be set when isBuiltIn is false but is read-only when isBuiltIn is true. This identifier is typically used if one needs an identifier to be the same across different directories.
     *  @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value ): void {
        $this->templateId = $value;
    }

    /**
     * Sets the version property value. Indicates version of the role definition. Read-only when isBuiltIn is true.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
