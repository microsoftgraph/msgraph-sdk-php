<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleScheduleInstanceBase extends Entity implements Parsable 
{
    /**
     * @var AppScope|null $appScope Read-only property with details of the app-specific scope when the assignment or role eligibility is scoped to an app. Nullable.
    */
    private ?AppScope $appScope = null;
    
    /**
     * @var string|null $appScopeId Identifier of the app-specific scope when the assignment or role eligibility is scoped to an app. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
    */
    private ?string $appScopeId = null;
    
    /**
     * @var DirectoryObject|null $directoryScope The directory object that is the scope of the assignment or role eligibility. Read-only.
    */
    private ?DirectoryObject $directoryScope = null;
    
    /**
     * @var string|null $directoryScopeId Identifier of the directory object representing the scope of the assignment or role eligibility. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
    */
    private ?string $directoryScopeId = null;
    
    /**
     * @var DirectoryObject|null $principal The principal that's getting a role assignment or role eligibility through the request.
    */
    private ?DirectoryObject $principal = null;
    
    /**
     * @var string|null $principalId Identifier of the principal that has been granted the role assignment or that's eligible for a role.
    */
    private ?string $principalId = null;
    
    /**
     * @var UnifiedRoleDefinition|null $roleDefinition Detailed information for the roleDefinition object that is referenced through the roleDefinitionId property.
    */
    private ?UnifiedRoleDefinition $roleDefinition = null;
    
    /**
     * @var string|null $roleDefinitionId Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that the principal is eligible for.
    */
    private ?string $roleDefinitionId = null;
    
    /**
     * Instantiates a new unifiedRoleScheduleInstanceBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleScheduleInstanceBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleScheduleInstanceBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.unifiedRoleAssignmentScheduleInstance': return new UnifiedRoleAssignmentScheduleInstance();
                case '#microsoft.graph.unifiedRoleEligibilityScheduleInstance': return new UnifiedRoleEligibilityScheduleInstance();
            }
        }
        return new UnifiedRoleScheduleInstanceBase();
    }

    /**
     * Gets the appScope property value. Read-only property with details of the app-specific scope when the assignment or role eligibility is scoped to an app. Nullable.
     * @return AppScope|null
    */
    public function getAppScope(): ?AppScope {
        return $this->appScope;
    }

    /**
     * Gets the appScopeId property value. Identifier of the app-specific scope when the assignment or role eligibility is scoped to an app. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
     * @return string|null
    */
    public function getAppScopeId(): ?string {
        return $this->appScopeId;
    }

    /**
     * Gets the directoryScope property value. The directory object that is the scope of the assignment or role eligibility. Read-only.
     * @return DirectoryObject|null
    */
    public function getDirectoryScope(): ?DirectoryObject {
        return $this->directoryScope;
    }

    /**
     * Gets the directoryScopeId property value. Identifier of the directory object representing the scope of the assignment or role eligibility. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
     * @return string|null
    */
    public function getDirectoryScopeId(): ?string {
        return $this->directoryScopeId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appScope' => function (ParseNode $n) use ($o) { $o->setAppScope($n->getObjectValue(array(AppScope::class, 'createFromDiscriminatorValue'))); },
            'appScopeId' => function (ParseNode $n) use ($o) { $o->setAppScopeId($n->getStringValue()); },
            'directoryScope' => function (ParseNode $n) use ($o) { $o->setDirectoryScope($n->getObjectValue(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'directoryScopeId' => function (ParseNode $n) use ($o) { $o->setDirectoryScopeId($n->getStringValue()); },
            'principal' => function (ParseNode $n) use ($o) { $o->setPrincipal($n->getObjectValue(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'principalId' => function (ParseNode $n) use ($o) { $o->setPrincipalId($n->getStringValue()); },
            'roleDefinition' => function (ParseNode $n) use ($o) { $o->setRoleDefinition($n->getObjectValue(array(UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'))); },
            'roleDefinitionId' => function (ParseNode $n) use ($o) { $o->setRoleDefinitionId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the principal property value. The principal that's getting a role assignment or role eligibility through the request.
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        return $this->principal;
    }

    /**
     * Gets the principalId property value. Identifier of the principal that has been granted the role assignment or that's eligible for a role.
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        return $this->principalId;
    }

    /**
     * Gets the roleDefinition property value. Detailed information for the roleDefinition object that is referenced through the roleDefinitionId property.
     * @return UnifiedRoleDefinition|null
    */
    public function getRoleDefinition(): ?UnifiedRoleDefinition {
        return $this->roleDefinition;
    }

    /**
     * Gets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that the principal is eligible for.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->roleDefinitionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appScope', $this->appScope);
        $writer->writeStringValue('appScopeId', $this->appScopeId);
        $writer->writeObjectValue('directoryScope', $this->directoryScope);
        $writer->writeStringValue('directoryScopeId', $this->directoryScopeId);
        $writer->writeObjectValue('principal', $this->principal);
        $writer->writeStringValue('principalId', $this->principalId);
        $writer->writeObjectValue('roleDefinition', $this->roleDefinition);
        $writer->writeStringValue('roleDefinitionId', $this->roleDefinitionId);
    }

    /**
     * Sets the appScope property value. Read-only property with details of the app-specific scope when the assignment or role eligibility is scoped to an app. Nullable.
     *  @param AppScope|null $value Value to set for the appScope property.
    */
    public function setAppScope(?AppScope $value ): void {
        $this->appScope = $value;
    }

    /**
     * Sets the appScopeId property value. Identifier of the app-specific scope when the assignment or role eligibility is scoped to an app. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
     *  @param string|null $value Value to set for the appScopeId property.
    */
    public function setAppScopeId(?string $value ): void {
        $this->appScopeId = $value;
    }

    /**
     * Sets the directoryScope property value. The directory object that is the scope of the assignment or role eligibility. Read-only.
     *  @param DirectoryObject|null $value Value to set for the directoryScope property.
    */
    public function setDirectoryScope(?DirectoryObject $value ): void {
        $this->directoryScope = $value;
    }

    /**
     * Sets the directoryScopeId property value. Identifier of the directory object representing the scope of the assignment or role eligibility. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
     *  @param string|null $value Value to set for the directoryScopeId property.
    */
    public function setDirectoryScopeId(?string $value ): void {
        $this->directoryScopeId = $value;
    }

    /**
     * Sets the principal property value. The principal that's getting a role assignment or role eligibility through the request.
     *  @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value ): void {
        $this->principal = $value;
    }

    /**
     * Sets the principalId property value. Identifier of the principal that has been granted the role assignment or that's eligible for a role.
     *  @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value ): void {
        $this->principalId = $value;
    }

    /**
     * Sets the roleDefinition property value. Detailed information for the roleDefinition object that is referenced through the roleDefinitionId property.
     *  @param UnifiedRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?UnifiedRoleDefinition $value ): void {
        $this->roleDefinition = $value;
    }

    /**
     * Sets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that the principal is eligible for.
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value ): void {
        $this->roleDefinitionId = $value;
    }

}
