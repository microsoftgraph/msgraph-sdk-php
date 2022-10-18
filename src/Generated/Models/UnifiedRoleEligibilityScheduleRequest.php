<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleEligibilityScheduleRequest extends Request implements Parsable 
{
    /**
     * @var UnifiedRoleScheduleRequestActions|null $action Represents the type of operation on the role eligibility request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew, selfExtend, selfRenew, unknownFutureValue. adminAssign: For administrators to assign eligible roles to principals.adminRemove: For administrators to remove eligible roles from principals. adminUpdate: For administrators to change existing role eligibilities.adminExtend: For administrators to extend expiring role eligibilities.adminRenew: For administrators to renew expired eligibilities.selfActivate: For users to activate their assignments.selfDeactivate: For users to deactivate their active assignments.selfExtend: For users to request to extend their expiring assignments.selfRenew: For users to request to renew their expired assignments.
    */
    private ?UnifiedRoleScheduleRequestActions $action = null;
    
    /**
     * @var AppScope|null $appScope Read-only property with details of the app-specific scope when the role eligibility is scoped to an app. Nullable. Supports $expand.
    */
    private ?AppScope $appScope = null;
    
    /**
     * @var string|null $appScopeId Identifier of the app-specific scope when the role eligibility is scoped to an app. The scope of a role eligibility determines the set of resources for which the principal is eligible to access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, ne, and on null values).
    */
    private ?string $appScopeId = null;
    
    /**
     * @var DirectoryObject|null $directoryScope The directory object that is the scope of the role eligibility. Read-only. Supports $expand.
    */
    private ?DirectoryObject $directoryScope = null;
    
    /**
     * @var string|null $directoryScopeId Identifier of the directory object representing the scope of the role eligibility. The scope of a role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, ne, and on null values).
    */
    private ?string $directoryScopeId = null;
    
    /**
     * @var bool|null $isValidationOnly Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
    */
    private ?bool $isValidationOnly = null;
    
    /**
     * @var string|null $justification A message provided by users and administrators when create they create the unifiedRoleEligibilityScheduleRequest object.
    */
    private ?string $justification = null;
    
    /**
     * @var DirectoryObject|null $principal The principal that's getting a role eligibility through the request. Supports $expand.
    */
    private ?DirectoryObject $principal = null;
    
    /**
     * @var string|null $principalId Identifier of the principal that has been granted the role eligibility. Can be a user or a role-assignable group. You can grant only active assignments service principals.Supports $filter (eq, ne).
    */
    private ?string $principalId = null;
    
    /**
     * @var UnifiedRoleDefinition|null $roleDefinition Detailed information for the unifiedRoleDefinition object that is referenced through the roleDefinitionId property. Supports $expand.
    */
    private ?UnifiedRoleDefinition $roleDefinition = null;
    
    /**
     * @var string|null $roleDefinitionId Identifier of the unifiedRoleDefinition object that is being assigned to the principal. Supports $filter (eq, ne).
    */
    private ?string $roleDefinitionId = null;
    
    /**
     * @var RequestSchedule|null $scheduleInfo The period of the role eligibility. Recurring schedules are currently unsupported.
    */
    private ?RequestSchedule $scheduleInfo = null;
    
    /**
     * @var UnifiedRoleEligibilitySchedule|null $targetSchedule The schedule for a role eligibility that is referenced through the targetScheduleId property. Supports $expand.
    */
    private ?UnifiedRoleEligibilitySchedule $targetSchedule = null;
    
    /**
     * @var string|null $targetScheduleId Identifier of the schedule object that's linked to the eligibility request. Supports $filter (eq, ne).
    */
    private ?string $targetScheduleId = null;
    
    /**
     * @var TicketInfo|null $ticketInfo Ticket details linked to the role eligibility request including details of the ticket number and ticket system. Optional.
    */
    private ?TicketInfo $ticketInfo = null;
    
    /**
     * Instantiates a new UnifiedRoleEligibilityScheduleRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unifiedRoleEligibilityScheduleRequest');
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
     * Gets the action property value. Represents the type of operation on the role eligibility request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew, selfExtend, selfRenew, unknownFutureValue. adminAssign: For administrators to assign eligible roles to principals.adminRemove: For administrators to remove eligible roles from principals. adminUpdate: For administrators to change existing role eligibilities.adminExtend: For administrators to extend expiring role eligibilities.adminRenew: For administrators to renew expired eligibilities.selfActivate: For users to activate their assignments.selfDeactivate: For users to deactivate their active assignments.selfExtend: For users to request to extend their expiring assignments.selfRenew: For users to request to renew their expired assignments.
     * @return UnifiedRoleScheduleRequestActions|null
    */
    public function getAction(): ?UnifiedRoleScheduleRequestActions {
        return $this->action;
    }

    /**
     * Gets the appScope property value. Read-only property with details of the app-specific scope when the role eligibility is scoped to an app. Nullable. Supports $expand.
     * @return AppScope|null
    */
    public function getAppScope(): ?AppScope {
        return $this->appScope;
    }

    /**
     * Gets the appScopeId property value. Identifier of the app-specific scope when the role eligibility is scoped to an app. The scope of a role eligibility determines the set of resources for which the principal is eligible to access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, ne, and on null values).
     * @return string|null
    */
    public function getAppScopeId(): ?string {
        return $this->appScopeId;
    }

    /**
     * Gets the directoryScope property value. The directory object that is the scope of the role eligibility. Read-only. Supports $expand.
     * @return DirectoryObject|null
    */
    public function getDirectoryScope(): ?DirectoryObject {
        return $this->directoryScope;
    }

    /**
     * Gets the directoryScopeId property value. Identifier of the directory object representing the scope of the role eligibility. The scope of a role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, ne, and on null values).
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
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(UnifiedRoleScheduleRequestActions::class)),
            'appScope' => fn(ParseNode $n) => $o->setAppScope($n->getObjectValue([AppScope::class, 'createFromDiscriminatorValue'])),
            'appScopeId' => fn(ParseNode $n) => $o->setAppScopeId($n->getStringValue()),
            'directoryScope' => fn(ParseNode $n) => $o->setDirectoryScope($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'directoryScopeId' => fn(ParseNode $n) => $o->setDirectoryScopeId($n->getStringValue()),
            'isValidationOnly' => fn(ParseNode $n) => $o->setIsValidationOnly($n->getBooleanValue()),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'principal' => fn(ParseNode $n) => $o->setPrincipal($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'principalId' => fn(ParseNode $n) => $o->setPrincipalId($n->getStringValue()),
            'roleDefinition' => fn(ParseNode $n) => $o->setRoleDefinition($n->getObjectValue([UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'roleDefinitionId' => fn(ParseNode $n) => $o->setRoleDefinitionId($n->getStringValue()),
            'scheduleInfo' => fn(ParseNode $n) => $o->setScheduleInfo($n->getObjectValue([RequestSchedule::class, 'createFromDiscriminatorValue'])),
            'targetSchedule' => fn(ParseNode $n) => $o->setTargetSchedule($n->getObjectValue([UnifiedRoleEligibilitySchedule::class, 'createFromDiscriminatorValue'])),
            'targetScheduleId' => fn(ParseNode $n) => $o->setTargetScheduleId($n->getStringValue()),
            'ticketInfo' => fn(ParseNode $n) => $o->setTicketInfo($n->getObjectValue([TicketInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isValidationOnly property value. Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
     * @return bool|null
    */
    public function getIsValidationOnly(): ?bool {
        return $this->isValidationOnly;
    }

    /**
     * Gets the justification property value. A message provided by users and administrators when create they create the unifiedRoleEligibilityScheduleRequest object.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->justification;
    }

    /**
     * Gets the principal property value. The principal that's getting a role eligibility through the request. Supports $expand.
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        return $this->principal;
    }

    /**
     * Gets the principalId property value. Identifier of the principal that has been granted the role eligibility. Can be a user or a role-assignable group. You can grant only active assignments service principals.Supports $filter (eq, ne).
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        return $this->principalId;
    }

    /**
     * Gets the roleDefinition property value. Detailed information for the unifiedRoleDefinition object that is referenced through the roleDefinitionId property. Supports $expand.
     * @return UnifiedRoleDefinition|null
    */
    public function getRoleDefinition(): ?UnifiedRoleDefinition {
        return $this->roleDefinition;
    }

    /**
     * Gets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition object that is being assigned to the principal. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->roleDefinitionId;
    }

    /**
     * Gets the scheduleInfo property value. The period of the role eligibility. Recurring schedules are currently unsupported.
     * @return RequestSchedule|null
    */
    public function getScheduleInfo(): ?RequestSchedule {
        return $this->scheduleInfo;
    }

    /**
     * Gets the targetSchedule property value. The schedule for a role eligibility that is referenced through the targetScheduleId property. Supports $expand.
     * @return UnifiedRoleEligibilitySchedule|null
    */
    public function getTargetSchedule(): ?UnifiedRoleEligibilitySchedule {
        return $this->targetSchedule;
    }

    /**
     * Gets the targetScheduleId property value. Identifier of the schedule object that's linked to the eligibility request. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getTargetScheduleId(): ?string {
        return $this->targetScheduleId;
    }

    /**
     * Gets the ticketInfo property value. Ticket details linked to the role eligibility request including details of the ticket number and ticket system. Optional.
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
     * Sets the action property value. Represents the type of operation on the role eligibility request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew, selfExtend, selfRenew, unknownFutureValue. adminAssign: For administrators to assign eligible roles to principals.adminRemove: For administrators to remove eligible roles from principals. adminUpdate: For administrators to change existing role eligibilities.adminExtend: For administrators to extend expiring role eligibilities.adminRenew: For administrators to renew expired eligibilities.selfActivate: For users to activate their assignments.selfDeactivate: For users to deactivate their active assignments.selfExtend: For users to request to extend their expiring assignments.selfRenew: For users to request to renew their expired assignments.
     *  @param UnifiedRoleScheduleRequestActions|null $value Value to set for the action property.
    */
    public function setAction(?UnifiedRoleScheduleRequestActions $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the appScope property value. Read-only property with details of the app-specific scope when the role eligibility is scoped to an app. Nullable. Supports $expand.
     *  @param AppScope|null $value Value to set for the appScope property.
    */
    public function setAppScope(?AppScope $value ): void {
        $this->appScope = $value;
    }

    /**
     * Sets the appScopeId property value. Identifier of the app-specific scope when the role eligibility is scoped to an app. The scope of a role eligibility determines the set of resources for which the principal is eligible to access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, ne, and on null values).
     *  @param string|null $value Value to set for the appScopeId property.
    */
    public function setAppScopeId(?string $value ): void {
        $this->appScopeId = $value;
    }

    /**
     * Sets the directoryScope property value. The directory object that is the scope of the role eligibility. Read-only. Supports $expand.
     *  @param DirectoryObject|null $value Value to set for the directoryScope property.
    */
    public function setDirectoryScope(?DirectoryObject $value ): void {
        $this->directoryScope = $value;
    }

    /**
     * Sets the directoryScopeId property value. Identifier of the directory object representing the scope of the role eligibility. The scope of a role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, ne, and on null values).
     *  @param string|null $value Value to set for the directoryScopeId property.
    */
    public function setDirectoryScopeId(?string $value ): void {
        $this->directoryScopeId = $value;
    }

    /**
     * Sets the isValidationOnly property value. Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
     *  @param bool|null $value Value to set for the isValidationOnly property.
    */
    public function setIsValidationOnly(?bool $value ): void {
        $this->isValidationOnly = $value;
    }

    /**
     * Sets the justification property value. A message provided by users and administrators when create they create the unifiedRoleEligibilityScheduleRequest object.
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value ): void {
        $this->justification = $value;
    }

    /**
     * Sets the principal property value. The principal that's getting a role eligibility through the request. Supports $expand.
     *  @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value ): void {
        $this->principal = $value;
    }

    /**
     * Sets the principalId property value. Identifier of the principal that has been granted the role eligibility. Can be a user or a role-assignable group. You can grant only active assignments service principals.Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value ): void {
        $this->principalId = $value;
    }

    /**
     * Sets the roleDefinition property value. Detailed information for the unifiedRoleDefinition object that is referenced through the roleDefinitionId property. Supports $expand.
     *  @param UnifiedRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?UnifiedRoleDefinition $value ): void {
        $this->roleDefinition = $value;
    }

    /**
     * Sets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition object that is being assigned to the principal. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value ): void {
        $this->roleDefinitionId = $value;
    }

    /**
     * Sets the scheduleInfo property value. The period of the role eligibility. Recurring schedules are currently unsupported.
     *  @param RequestSchedule|null $value Value to set for the scheduleInfo property.
    */
    public function setScheduleInfo(?RequestSchedule $value ): void {
        $this->scheduleInfo = $value;
    }

    /**
     * Sets the targetSchedule property value. The schedule for a role eligibility that is referenced through the targetScheduleId property. Supports $expand.
     *  @param UnifiedRoleEligibilitySchedule|null $value Value to set for the targetSchedule property.
    */
    public function setTargetSchedule(?UnifiedRoleEligibilitySchedule $value ): void {
        $this->targetSchedule = $value;
    }

    /**
     * Sets the targetScheduleId property value. Identifier of the schedule object that's linked to the eligibility request. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the targetScheduleId property.
    */
    public function setTargetScheduleId(?string $value ): void {
        $this->targetScheduleId = $value;
    }

    /**
     * Sets the ticketInfo property value. Ticket details linked to the role eligibility request including details of the ticket number and ticket system. Optional.
     *  @param TicketInfo|null $value Value to set for the ticketInfo property.
    */
    public function setTicketInfo(?TicketInfo $value ): void {
        $this->ticketInfo = $value;
    }

}
