<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleEligibilityScheduleRequest extends Request implements Parsable 
{
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
     * Gets the action property value. Represents the type of operation on the role eligibility request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew, selfExtend, selfRenew, unknownFutureValue. adminAssign: For administrators to assign eligible roles to principals.adminRemove: For administrators to remove eligible roles from principals. adminUpdate: For administrators to change existing role eligibilities.adminExtend: For administrators to extend expiring role eligibilities.adminRenew: For administrators to renew expired eligibilities.selfActivate: For users to activate their assignments.selfDeactivate: For users to deactivate their active assignments.selfExtend: For users to request to extend their expiring assignments.selfRenew: For users to request to renew their expired assignments.
     * @return UnifiedRoleScheduleRequestActions|null
    */
    public function getAction(): ?UnifiedRoleScheduleRequestActions {
        return $this->getBackingStore()->get('action');
    }

    /**
     * Gets the appScope property value. Read-only property with details of the app-specific scope when the role eligibility is scoped to an app. Nullable. Supports $expand.
     * @return AppScope|null
    */
    public function getAppScope(): ?AppScope {
        return $this->getBackingStore()->get('appScope');
    }

    /**
     * Gets the appScopeId property value. Identifier of the app-specific scope when the role eligibility is scoped to an app. The scope of a role eligibility determines the set of resources for which the principal is eligible to access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, ne, and on null values).
     * @return string|null
    */
    public function getAppScopeId(): ?string {
        return $this->getBackingStore()->get('appScopeId');
    }

    /**
     * Gets the directoryScope property value. The directory object that is the scope of the role eligibility. Read-only. Supports $expand.
     * @return DirectoryObject|null
    */
    public function getDirectoryScope(): ?DirectoryObject {
        return $this->getBackingStore()->get('directoryScope');
    }

    /**
     * Gets the directoryScopeId property value. Identifier of the directory object representing the scope of the role eligibility. The scope of a role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, ne, and on null values).
     * @return string|null
    */
    public function getDirectoryScopeId(): ?string {
        return $this->getBackingStore()->get('directoryScopeId');
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
        return $this->getBackingStore()->get('isValidationOnly');
    }

    /**
     * Gets the justification property value. A message provided by users and administrators when create they create the unifiedRoleEligibilityScheduleRequest object.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->getBackingStore()->get('justification');
    }

    /**
     * Gets the principal property value. The principal that's getting a role eligibility through the request. Supports $expand.
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        return $this->getBackingStore()->get('principal');
    }

    /**
     * Gets the principalId property value. Identifier of the principal that has been granted the role eligibility. Can be a user or a role-assignable group. You can grant only active assignments service principals.Supports $filter (eq, ne).
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        return $this->getBackingStore()->get('principalId');
    }

    /**
     * Gets the roleDefinition property value. Detailed information for the unifiedRoleDefinition object that is referenced through the roleDefinitionId property. Supports $expand.
     * @return UnifiedRoleDefinition|null
    */
    public function getRoleDefinition(): ?UnifiedRoleDefinition {
        return $this->getBackingStore()->get('roleDefinition');
    }

    /**
     * Gets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition object that is being assigned to the principal. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->getBackingStore()->get('roleDefinitionId');
    }

    /**
     * Gets the scheduleInfo property value. The period of the role eligibility. Recurring schedules are currently unsupported.
     * @return RequestSchedule|null
    */
    public function getScheduleInfo(): ?RequestSchedule {
        return $this->getBackingStore()->get('scheduleInfo');
    }

    /**
     * Gets the targetSchedule property value. The schedule for a role eligibility that is referenced through the targetScheduleId property. Supports $expand.
     * @return UnifiedRoleEligibilitySchedule|null
    */
    public function getTargetSchedule(): ?UnifiedRoleEligibilitySchedule {
        return $this->getBackingStore()->get('targetSchedule');
    }

    /**
     * Gets the targetScheduleId property value. Identifier of the schedule object that's linked to the eligibility request. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getTargetScheduleId(): ?string {
        return $this->getBackingStore()->get('targetScheduleId');
    }

    /**
     * Gets the ticketInfo property value. Ticket details linked to the role eligibility request including details of the ticket number and ticket system. Optional.
     * @return TicketInfo|null
    */
    public function getTicketInfo(): ?TicketInfo {
        return $this->getBackingStore()->get('ticketInfo');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeObjectValue('appScope', $this->getAppScope());
        $writer->writeStringValue('appScopeId', $this->getAppScopeId());
        $writer->writeObjectValue('directoryScope', $this->getDirectoryScope());
        $writer->writeStringValue('directoryScopeId', $this->getDirectoryScopeId());
        $writer->writeBooleanValue('isValidationOnly', $this->getIsValidationOnly());
        $writer->writeStringValue('justification', $this->getJustification());
        $writer->writeObjectValue('principal', $this->getPrincipal());
        $writer->writeStringValue('principalId', $this->getPrincipalId());
        $writer->writeObjectValue('roleDefinition', $this->getRoleDefinition());
        $writer->writeStringValue('roleDefinitionId', $this->getRoleDefinitionId());
        $writer->writeObjectValue('scheduleInfo', $this->getScheduleInfo());
        $writer->writeObjectValue('targetSchedule', $this->getTargetSchedule());
        $writer->writeStringValue('targetScheduleId', $this->getTargetScheduleId());
        $writer->writeObjectValue('ticketInfo', $this->getTicketInfo());
    }

    /**
     * Sets the action property value. Represents the type of operation on the role eligibility request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew, selfExtend, selfRenew, unknownFutureValue. adminAssign: For administrators to assign eligible roles to principals.adminRemove: For administrators to remove eligible roles from principals. adminUpdate: For administrators to change existing role eligibilities.adminExtend: For administrators to extend expiring role eligibilities.adminRenew: For administrators to renew expired eligibilities.selfActivate: For users to activate their assignments.selfDeactivate: For users to deactivate their active assignments.selfExtend: For users to request to extend their expiring assignments.selfRenew: For users to request to renew their expired assignments.
     *  @param UnifiedRoleScheduleRequestActions|null $value Value to set for the action property.
    */
    public function setAction(?UnifiedRoleScheduleRequestActions $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the appScope property value. Read-only property with details of the app-specific scope when the role eligibility is scoped to an app. Nullable. Supports $expand.
     *  @param AppScope|null $value Value to set for the appScope property.
    */
    public function setAppScope(?AppScope $value): void {
        $this->getBackingStore()->set('appScope', $value);
    }

    /**
     * Sets the appScopeId property value. Identifier of the app-specific scope when the role eligibility is scoped to an app. The scope of a role eligibility determines the set of resources for which the principal is eligible to access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, ne, and on null values).
     *  @param string|null $value Value to set for the appScopeId property.
    */
    public function setAppScopeId(?string $value): void {
        $this->getBackingStore()->set('appScopeId', $value);
    }

    /**
     * Sets the directoryScope property value. The directory object that is the scope of the role eligibility. Read-only. Supports $expand.
     *  @param DirectoryObject|null $value Value to set for the directoryScope property.
    */
    public function setDirectoryScope(?DirectoryObject $value): void {
        $this->getBackingStore()->set('directoryScope', $value);
    }

    /**
     * Sets the directoryScopeId property value. Identifier of the directory object representing the scope of the role eligibility. The scope of a role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, ne, and on null values).
     *  @param string|null $value Value to set for the directoryScopeId property.
    */
    public function setDirectoryScopeId(?string $value): void {
        $this->getBackingStore()->set('directoryScopeId', $value);
    }

    /**
     * Sets the isValidationOnly property value. Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
     *  @param bool|null $value Value to set for the isValidationOnly property.
    */
    public function setIsValidationOnly(?bool $value): void {
        $this->getBackingStore()->set('isValidationOnly', $value);
    }

    /**
     * Sets the justification property value. A message provided by users and administrators when create they create the unifiedRoleEligibilityScheduleRequest object.
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the principal property value. The principal that's getting a role eligibility through the request. Supports $expand.
     *  @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value): void {
        $this->getBackingStore()->set('principal', $value);
    }

    /**
     * Sets the principalId property value. Identifier of the principal that has been granted the role eligibility. Can be a user or a role-assignable group. You can grant only active assignments service principals.Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value): void {
        $this->getBackingStore()->set('principalId', $value);
    }

    /**
     * Sets the roleDefinition property value. Detailed information for the unifiedRoleDefinition object that is referenced through the roleDefinitionId property. Supports $expand.
     *  @param UnifiedRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?UnifiedRoleDefinition $value): void {
        $this->getBackingStore()->set('roleDefinition', $value);
    }

    /**
     * Sets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition object that is being assigned to the principal. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value): void {
        $this->getBackingStore()->set('roleDefinitionId', $value);
    }

    /**
     * Sets the scheduleInfo property value. The period of the role eligibility. Recurring schedules are currently unsupported.
     *  @param RequestSchedule|null $value Value to set for the scheduleInfo property.
    */
    public function setScheduleInfo(?RequestSchedule $value): void {
        $this->getBackingStore()->set('scheduleInfo', $value);
    }

    /**
     * Sets the targetSchedule property value. The schedule for a role eligibility that is referenced through the targetScheduleId property. Supports $expand.
     *  @param UnifiedRoleEligibilitySchedule|null $value Value to set for the targetSchedule property.
    */
    public function setTargetSchedule(?UnifiedRoleEligibilitySchedule $value): void {
        $this->getBackingStore()->set('targetSchedule', $value);
    }

    /**
     * Sets the targetScheduleId property value. Identifier of the schedule object that's linked to the eligibility request. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the targetScheduleId property.
    */
    public function setTargetScheduleId(?string $value): void {
        $this->getBackingStore()->set('targetScheduleId', $value);
    }

    /**
     * Sets the ticketInfo property value. Ticket details linked to the role eligibility request including details of the ticket number and ticket system. Optional.
     *  @param TicketInfo|null $value Value to set for the ticketInfo property.
    */
    public function setTicketInfo(?TicketInfo $value): void {
        $this->getBackingStore()->set('ticketInfo', $value);
    }

}
