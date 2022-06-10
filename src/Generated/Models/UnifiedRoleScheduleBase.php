<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleScheduleBase extends Entity implements Parsable 
{
    /**
     * @var AppScope|null $appScope Read-only property with details of the app-specific scope when the role eligibility or assignment is scoped to an app. Nullable.
    */
    private ?AppScope $appScope = null;
    
    /**
     * @var string|null $appScopeId Identifier of the app-specific scope when the assignment or eligibility is scoped to an app. The scope of an assignment or eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
    */
    private ?string $appScopeId = null;
    
    /**
     * @var DateTime|null $createdDateTime When the schedule was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $createdUsing Identifier of the object through which this schedule was created.
    */
    private ?string $createdUsing = null;
    
    /**
     * @var DirectoryObject|null $directoryScope The directory object that is the scope of the role eligibility or assignment. Read-only.
    */
    private ?DirectoryObject $directoryScope = null;
    
    /**
     * @var string|null $directoryScopeId Identifier of the directory object representing the scope of the assignment or eligibility. The scope of an assignment or eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
    */
    private ?string $directoryScopeId = null;
    
    /**
     * @var DateTime|null $modifiedDateTime When the schedule was last modified.
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * @var DirectoryObject|null $principal The principal that's getting a role assignment or that's eligible for a role through the request.
    */
    private ?DirectoryObject $principal = null;
    
    /**
     * @var string|null $principalId Identifier of the principal that has been granted the role assignment or eligibility.
    */
    private ?string $principalId = null;
    
    /**
     * @var UnifiedRoleDefinition|null $roleDefinition Detailed information for the roleDefinition object that is referenced through the roleDefinitionId property.
    */
    private ?UnifiedRoleDefinition $roleDefinition = null;
    
    /**
     * @var string|null $roleDefinitionId Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that a principal is eligible for.
    */
    private ?string $roleDefinitionId = null;
    
    /**
     * @var string|null $status The status of the role assignment or eligibility request.
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new unifiedRoleScheduleBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleScheduleBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleScheduleBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.unifiedRoleAssignmentSchedule': return new UnifiedRoleAssignmentSchedule();
                case '#microsoft.graph.unifiedRoleEligibilitySchedule': return new UnifiedRoleEligibilitySchedule();
            }
        }
        return new UnifiedRoleScheduleBase();
    }

    /**
     * Gets the appScope property value. Read-only property with details of the app-specific scope when the role eligibility or assignment is scoped to an app. Nullable.
     * @return AppScope|null
    */
    public function getAppScope(): ?AppScope {
        return $this->appScope;
    }

    /**
     * Gets the appScopeId property value. Identifier of the app-specific scope when the assignment or eligibility is scoped to an app. The scope of an assignment or eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
     * @return string|null
    */
    public function getAppScopeId(): ?string {
        return $this->appScopeId;
    }

    /**
     * Gets the createdDateTime property value. When the schedule was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the createdUsing property value. Identifier of the object through which this schedule was created.
     * @return string|null
    */
    public function getCreatedUsing(): ?string {
        return $this->createdUsing;
    }

    /**
     * Gets the directoryScope property value. The directory object that is the scope of the role eligibility or assignment. Read-only.
     * @return DirectoryObject|null
    */
    public function getDirectoryScope(): ?DirectoryObject {
        return $this->directoryScope;
    }

    /**
     * Gets the directoryScopeId property value. Identifier of the directory object representing the scope of the assignment or eligibility. The scope of an assignment or eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
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
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'createdUsing' => function (ParseNode $n) use ($o) { $o->setCreatedUsing($n->getStringValue()); },
            'directoryScope' => function (ParseNode $n) use ($o) { $o->setDirectoryScope($n->getObjectValue(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'directoryScopeId' => function (ParseNode $n) use ($o) { $o->setDirectoryScopeId($n->getStringValue()); },
            'modifiedDateTime' => function (ParseNode $n) use ($o) { $o->setModifiedDateTime($n->getDateTimeValue()); },
            'principal' => function (ParseNode $n) use ($o) { $o->setPrincipal($n->getObjectValue(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'principalId' => function (ParseNode $n) use ($o) { $o->setPrincipalId($n->getStringValue()); },
            'roleDefinition' => function (ParseNode $n) use ($o) { $o->setRoleDefinition($n->getObjectValue(array(UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'))); },
            'roleDefinitionId' => function (ParseNode $n) use ($o) { $o->setRoleDefinitionId($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. When the schedule was last modified.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the principal property value. The principal that's getting a role assignment or that's eligible for a role through the request.
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        return $this->principal;
    }

    /**
     * Gets the principalId property value. Identifier of the principal that has been granted the role assignment or eligibility.
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
     * Gets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that a principal is eligible for.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->roleDefinitionId;
    }

    /**
     * Gets the status property value. The status of the role assignment or eligibility request.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appScope', $this->appScope);
        $writer->writeStringValue('appScopeId', $this->appScopeId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('createdUsing', $this->createdUsing);
        $writer->writeObjectValue('directoryScope', $this->directoryScope);
        $writer->writeStringValue('directoryScopeId', $this->directoryScopeId);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeObjectValue('principal', $this->principal);
        $writer->writeStringValue('principalId', $this->principalId);
        $writer->writeObjectValue('roleDefinition', $this->roleDefinition);
        $writer->writeStringValue('roleDefinitionId', $this->roleDefinitionId);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the appScope property value. Read-only property with details of the app-specific scope when the role eligibility or assignment is scoped to an app. Nullable.
     *  @param AppScope|null $value Value to set for the appScope property.
    */
    public function setAppScope(?AppScope $value ): void {
        $this->appScope = $value;
    }

    /**
     * Sets the appScopeId property value. Identifier of the app-specific scope when the assignment or eligibility is scoped to an app. The scope of an assignment or eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
     *  @param string|null $value Value to set for the appScopeId property.
    */
    public function setAppScopeId(?string $value ): void {
        $this->appScopeId = $value;
    }

    /**
     * Sets the createdDateTime property value. When the schedule was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the createdUsing property value. Identifier of the object through which this schedule was created.
     *  @param string|null $value Value to set for the createdUsing property.
    */
    public function setCreatedUsing(?string $value ): void {
        $this->createdUsing = $value;
    }

    /**
     * Sets the directoryScope property value. The directory object that is the scope of the role eligibility or assignment. Read-only.
     *  @param DirectoryObject|null $value Value to set for the directoryScope property.
    */
    public function setDirectoryScope(?DirectoryObject $value ): void {
        $this->directoryScope = $value;
    }

    /**
     * Sets the directoryScopeId property value. Identifier of the directory object representing the scope of the assignment or eligibility. The scope of an assignment or eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
     *  @param string|null $value Value to set for the directoryScopeId property.
    */
    public function setDirectoryScopeId(?string $value ): void {
        $this->directoryScopeId = $value;
    }

    /**
     * Sets the modifiedDateTime property value. When the schedule was last modified.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the principal property value. The principal that's getting a role assignment or that's eligible for a role through the request.
     *  @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value ): void {
        $this->principal = $value;
    }

    /**
     * Sets the principalId property value. Identifier of the principal that has been granted the role assignment or eligibility.
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
     * Sets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that a principal is eligible for.
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value ): void {
        $this->roleDefinitionId = $value;
    }

    /**
     * Sets the status property value. The status of the role assignment or eligibility request.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}
