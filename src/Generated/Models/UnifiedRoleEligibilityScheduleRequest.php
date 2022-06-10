<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleEligibilityScheduleRequest extends Request implements Parsable 
{
    /**
     * @var UnifiedRoleScheduleRequestActions|null $action Represents the type of the operation on the role eligibility assignment. The possible values are: AdminAssign: For administrators to assign role eligibility to users or groups to roles.AdminExtend: For administrators to extend expiring assignments.AdminUpdate: For administrators to change existing role assignments.AdminRenew: For administrators to renew expired assignments.AdminRemove: For administrators to remove users or groups from eligible roles.UserAdd: For users to activate their eligible assignments.UserExtend: For users to request to extend their expiring eligible assignments.UserRemove: For users to deactivate their active eligible assignments.UserRenew: For users to request to renew their expired eligible assignments.
    */
    private ?UnifiedRoleScheduleRequestActions $action = null;
    
    /**
     * @var AppScope|null $appScope Read-only property with details of the app-specific scope when the assignment scope is app-specific. Containment entity.
    */
    private ?AppScope $appScope = null;
    
    /**
     * @var string|null $appScopeId Identifier of the app-specific scope when the assignment scope is app-specific. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
    */
    private ?string $appScopeId = null;
    
    /**
     * @var DirectoryObject|null $directoryScope Property referencing the directory object that is the scope of the assignment. Provided so that callers can get the directory object using $expand at the same time as getting the role assignment. Read-only.
    */
    private ?DirectoryObject $directoryScope = null;
    
    /**
     * @var string|null $directoryScopeId Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
    */
    private ?string $directoryScopeId = null;
    
    /**
     * @var bool|null $isValidationOnly A boolean that determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
    */
    private ?bool $isValidationOnly = null;
    
    /**
     * @var string|null $justification A message provided by users and administrators when create the request about why it is needed.
    */
    private ?string $justification = null;
    
    /**
     * @var DirectoryObject|null $principal Property referencing the principal that is getting a role assignment through the request. Provided so that callers can get the principal using $expand at the same time as getting the role assignment. Read-only.
    */
    private ?DirectoryObject $principal = null;
    
    /**
     * @var string|null $principalId Identifier of the principal to which the assignment is being granted to. For example, a user or a group. For groups, they must be assignable to roles, that is, the isAssignableToRole of the group property set to true.
    */
    private ?string $principalId = null;
    
    /**
     * @var UnifiedRoleDefinition|null $roleDefinition Property indicating the roleDefinition the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment. roleDefinition.Id will be auto expanded.
    */
    private ?UnifiedRoleDefinition $roleDefinition = null;
    
    /**
     * @var string|null $roleDefinitionId Identifier of the unifiedRoleDefinition the assignment is for. Read only.
    */
    private ?string $roleDefinitionId = null;
    
    /**
     * @var RequestSchedule|null $scheduleInfo The schedule object of the role assignment request.
    */
    private ?RequestSchedule $scheduleInfo = null;
    
    /**
     * @var UnifiedRoleEligibilitySchedule|null $targetSchedule Property indicating the schedule for an eligible role assignment.
    */
    private ?UnifiedRoleEligibilitySchedule $targetSchedule = null;
    
    /**
     * @var string|null $targetScheduleId The time period for which the eligibility assignment is valid.
    */
    private ?string $targetScheduleId = null;
    
    /**
     * @var TicketInfo|null $ticketInfo The details of the ticket number and ticket system that is attached to the role assignment request.
    */
    private ?TicketInfo $ticketInfo = null;
    
    /**
     * Instantiates a new UnifiedRoleEligibilityScheduleRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleEligibilityScheduleRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleEligibilityScheduleRequest {
        return new UnifiedRoleEligibilityScheduleRequest();
    }

    /**
     * Gets the action property value. Represents the type of the operation on the role eligibility assignment. The possible values are: AdminAssign: For administrators to assign role eligibility to users or groups to roles.AdminExtend: For administrators to extend expiring assignments.AdminUpdate: For administrators to change existing role assignments.AdminRenew: For administrators to renew expired assignments.AdminRemove: For administrators to remove users or groups from eligible roles.UserAdd: For users to activate their eligible assignments.UserExtend: For users to request to extend their expiring eligible assignments.UserRemove: For users to deactivate their active eligible assignments.UserRenew: For users to request to renew their expired eligible assignments.
     * @return UnifiedRoleScheduleRequestActions|null
    */
    public function getAction(): ?UnifiedRoleScheduleRequestActions {
        return $this->action;
    }

    /**
     * Gets the appScope property value. Read-only property with details of the app-specific scope when the assignment scope is app-specific. Containment entity.
     * @return AppScope|null
    */
    public function getAppScope(): ?AppScope {
        return $this->appScope;
    }

    /**
     * Gets the appScopeId property value. Identifier of the app-specific scope when the assignment scope is app-specific. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
     * @return string|null
    */
    public function getAppScopeId(): ?string {
        return $this->appScopeId;
    }

    /**
     * Gets the directoryScope property value. Property referencing the directory object that is the scope of the assignment. Provided so that callers can get the directory object using $expand at the same time as getting the role assignment. Read-only.
     * @return DirectoryObject|null
    */
    public function getDirectoryScope(): ?DirectoryObject {
        return $this->directoryScope;
    }

    /**
     * Gets the directoryScopeId property value. Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
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
            'action' => function (ParseNode $n) use ($o) { $o->setAction($n->getEnumValue(UnifiedRoleScheduleRequestActions::class)); },
            'appScope' => function (ParseNode $n) use ($o) { $o->setAppScope($n->getObjectValue(array(AppScope::class, 'createFromDiscriminatorValue'))); },
            'appScopeId' => function (ParseNode $n) use ($o) { $o->setAppScopeId($n->getStringValue()); },
            'directoryScope' => function (ParseNode $n) use ($o) { $o->setDirectoryScope($n->getObjectValue(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'directoryScopeId' => function (ParseNode $n) use ($o) { $o->setDirectoryScopeId($n->getStringValue()); },
            'isValidationOnly' => function (ParseNode $n) use ($o) { $o->setIsValidationOnly($n->getBooleanValue()); },
            'justification' => function (ParseNode $n) use ($o) { $o->setJustification($n->getStringValue()); },
            'principal' => function (ParseNode $n) use ($o) { $o->setPrincipal($n->getObjectValue(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'principalId' => function (ParseNode $n) use ($o) { $o->setPrincipalId($n->getStringValue()); },
            'roleDefinition' => function (ParseNode $n) use ($o) { $o->setRoleDefinition($n->getObjectValue(array(UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'))); },
            'roleDefinitionId' => function (ParseNode $n) use ($o) { $o->setRoleDefinitionId($n->getStringValue()); },
            'scheduleInfo' => function (ParseNode $n) use ($o) { $o->setScheduleInfo($n->getObjectValue(array(RequestSchedule::class, 'createFromDiscriminatorValue'))); },
            'targetSchedule' => function (ParseNode $n) use ($o) { $o->setTargetSchedule($n->getObjectValue(array(UnifiedRoleEligibilitySchedule::class, 'createFromDiscriminatorValue'))); },
            'targetScheduleId' => function (ParseNode $n) use ($o) { $o->setTargetScheduleId($n->getStringValue()); },
            'ticketInfo' => function (ParseNode $n) use ($o) { $o->setTicketInfo($n->getObjectValue(array(TicketInfo::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isValidationOnly property value. A boolean that determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
     * @return bool|null
    */
    public function getIsValidationOnly(): ?bool {
        return $this->isValidationOnly;
    }

    /**
     * Gets the justification property value. A message provided by users and administrators when create the request about why it is needed.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->justification;
    }

    /**
     * Gets the principal property value. Property referencing the principal that is getting a role assignment through the request. Provided so that callers can get the principal using $expand at the same time as getting the role assignment. Read-only.
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        return $this->principal;
    }

    /**
     * Gets the principalId property value. Identifier of the principal to which the assignment is being granted to. For example, a user or a group. For groups, they must be assignable to roles, that is, the isAssignableToRole of the group property set to true.
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        return $this->principalId;
    }

    /**
     * Gets the roleDefinition property value. Property indicating the roleDefinition the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment. roleDefinition.Id will be auto expanded.
     * @return UnifiedRoleDefinition|null
    */
    public function getRoleDefinition(): ?UnifiedRoleDefinition {
        return $this->roleDefinition;
    }

    /**
     * Gets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition the assignment is for. Read only.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->roleDefinitionId;
    }

    /**
     * Gets the scheduleInfo property value. The schedule object of the role assignment request.
     * @return RequestSchedule|null
    */
    public function getScheduleInfo(): ?RequestSchedule {
        return $this->scheduleInfo;
    }

    /**
     * Gets the targetSchedule property value. Property indicating the schedule for an eligible role assignment.
     * @return UnifiedRoleEligibilitySchedule|null
    */
    public function getTargetSchedule(): ?UnifiedRoleEligibilitySchedule {
        return $this->targetSchedule;
    }

    /**
     * Gets the targetScheduleId property value. The time period for which the eligibility assignment is valid.
     * @return string|null
    */
    public function getTargetScheduleId(): ?string {
        return $this->targetScheduleId;
    }

    /**
     * Gets the ticketInfo property value. The details of the ticket number and ticket system that is attached to the role assignment request.
     * @return TicketInfo|null
    */
    public function getTicketInfo(): ?TicketInfo {
        return $this->ticketInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('action', $this->action);
        $writer->writeObjectValue('appScope', $this->appScope);
        $writer->writeStringValue('appScopeId', $this->appScopeId);
        $writer->writeObjectValue('directoryScope', $this->directoryScope);
        $writer->writeStringValue('directoryScopeId', $this->directoryScopeId);
        $writer->writeBooleanValue('isValidationOnly', $this->isValidationOnly);
        $writer->writeStringValue('justification', $this->justification);
        $writer->writeObjectValue('principal', $this->principal);
        $writer->writeStringValue('principalId', $this->principalId);
        $writer->writeObjectValue('roleDefinition', $this->roleDefinition);
        $writer->writeStringValue('roleDefinitionId', $this->roleDefinitionId);
        $writer->writeObjectValue('scheduleInfo', $this->scheduleInfo);
        $writer->writeObjectValue('targetSchedule', $this->targetSchedule);
        $writer->writeStringValue('targetScheduleId', $this->targetScheduleId);
        $writer->writeObjectValue('ticketInfo', $this->ticketInfo);
    }

    /**
     * Sets the action property value. Represents the type of the operation on the role eligibility assignment. The possible values are: AdminAssign: For administrators to assign role eligibility to users or groups to roles.AdminExtend: For administrators to extend expiring assignments.AdminUpdate: For administrators to change existing role assignments.AdminRenew: For administrators to renew expired assignments.AdminRemove: For administrators to remove users or groups from eligible roles.UserAdd: For users to activate their eligible assignments.UserExtend: For users to request to extend their expiring eligible assignments.UserRemove: For users to deactivate their active eligible assignments.UserRenew: For users to request to renew their expired eligible assignments.
     *  @param UnifiedRoleScheduleRequestActions|null $value Value to set for the action property.
    */
    public function setAction(?UnifiedRoleScheduleRequestActions $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the appScope property value. Read-only property with details of the app-specific scope when the assignment scope is app-specific. Containment entity.
     *  @param AppScope|null $value Value to set for the appScope property.
    */
    public function setAppScope(?AppScope $value ): void {
        $this->appScope = $value;
    }

    /**
     * Sets the appScopeId property value. Identifier of the app-specific scope when the assignment scope is app-specific. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
     *  @param string|null $value Value to set for the appScopeId property.
    */
    public function setAppScopeId(?string $value ): void {
        $this->appScopeId = $value;
    }

    /**
     * Sets the directoryScope property value. Property referencing the directory object that is the scope of the assignment. Provided so that callers can get the directory object using $expand at the same time as getting the role assignment. Read-only.
     *  @param DirectoryObject|null $value Value to set for the directoryScope property.
    */
    public function setDirectoryScope(?DirectoryObject $value ): void {
        $this->directoryScope = $value;
    }

    /**
     * Sets the directoryScopeId property value. Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
     *  @param string|null $value Value to set for the directoryScopeId property.
    */
    public function setDirectoryScopeId(?string $value ): void {
        $this->directoryScopeId = $value;
    }

    /**
     * Sets the isValidationOnly property value. A boolean that determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
     *  @param bool|null $value Value to set for the isValidationOnly property.
    */
    public function setIsValidationOnly(?bool $value ): void {
        $this->isValidationOnly = $value;
    }

    /**
     * Sets the justification property value. A message provided by users and administrators when create the request about why it is needed.
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value ): void {
        $this->justification = $value;
    }

    /**
     * Sets the principal property value. Property referencing the principal that is getting a role assignment through the request. Provided so that callers can get the principal using $expand at the same time as getting the role assignment. Read-only.
     *  @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value ): void {
        $this->principal = $value;
    }

    /**
     * Sets the principalId property value. Identifier of the principal to which the assignment is being granted to. For example, a user or a group. For groups, they must be assignable to roles, that is, the isAssignableToRole of the group property set to true.
     *  @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value ): void {
        $this->principalId = $value;
    }

    /**
     * Sets the roleDefinition property value. Property indicating the roleDefinition the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment. roleDefinition.Id will be auto expanded.
     *  @param UnifiedRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?UnifiedRoleDefinition $value ): void {
        $this->roleDefinition = $value;
    }

    /**
     * Sets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition the assignment is for. Read only.
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value ): void {
        $this->roleDefinitionId = $value;
    }

    /**
     * Sets the scheduleInfo property value. The schedule object of the role assignment request.
     *  @param RequestSchedule|null $value Value to set for the scheduleInfo property.
    */
    public function setScheduleInfo(?RequestSchedule $value ): void {
        $this->scheduleInfo = $value;
    }

    /**
     * Sets the targetSchedule property value. Property indicating the schedule for an eligible role assignment.
     *  @param UnifiedRoleEligibilitySchedule|null $value Value to set for the targetSchedule property.
    */
    public function setTargetSchedule(?UnifiedRoleEligibilitySchedule $value ): void {
        $this->targetSchedule = $value;
    }

    /**
     * Sets the targetScheduleId property value. The time period for which the eligibility assignment is valid.
     *  @param string|null $value Value to set for the targetScheduleId property.
    */
    public function setTargetScheduleId(?string $value ): void {
        $this->targetScheduleId = $value;
    }

    /**
     * Sets the ticketInfo property value. The details of the ticket number and ticket system that is attached to the role assignment request.
     *  @param TicketInfo|null $value Value to set for the ticketInfo property.
    */
    public function setTicketInfo(?TicketInfo $value ): void {
        $this->ticketInfo = $value;
    }

}
