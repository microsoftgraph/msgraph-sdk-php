<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProvisioningObjectSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new provisioningObjectSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvisioningObjectSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvisioningObjectSummary {
        return new ProvisioningObjectSummary();
    }

    /**
     * Gets the activityDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        return $this->getBackingStore()->get('activityDateTime');
    }

    /**
     * Gets the changeId property value. Unique ID of this change in this cycle.
     * @return string|null
    */
    public function getChangeId(): ?string {
        return $this->getBackingStore()->get('changeId');
    }

    /**
     * Gets the cycleId property value. Unique ID per job iteration.
     * @return string|null
    */
    public function getCycleId(): ?string {
        return $this->getBackingStore()->get('cycleId');
    }

    /**
     * Gets the durationInMilliseconds property value. Indicates how long this provisioning action took to finish. Measured in milliseconds.
     * @return int|null
    */
    public function getDurationInMilliseconds(): ?int {
        return $this->getBackingStore()->get('durationInMilliseconds');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityDateTime' => fn(ParseNode $n) => $o->setActivityDateTime($n->getDateTimeValue()),
            'changeId' => fn(ParseNode $n) => $o->setChangeId($n->getStringValue()),
            'cycleId' => fn(ParseNode $n) => $o->setCycleId($n->getStringValue()),
            'durationInMilliseconds' => fn(ParseNode $n) => $o->setDurationInMilliseconds($n->getIntegerValue()),
            'initiatedBy' => fn(ParseNode $n) => $o->setInitiatedBy($n->getObjectValue([Initiator::class, 'createFromDiscriminatorValue'])),
            'jobId' => fn(ParseNode $n) => $o->setJobId($n->getStringValue()),
            'modifiedProperties' => fn(ParseNode $n) => $o->setModifiedProperties($n->getCollectionOfObjectValues([ModifiedProperty::class, 'createFromDiscriminatorValue'])),
            'provisioningAction' => fn(ParseNode $n) => $o->setProvisioningAction($n->getEnumValue(ProvisioningAction::class)),
            'provisioningStatusInfo' => fn(ParseNode $n) => $o->setProvisioningStatusInfo($n->getObjectValue([ProvisioningStatusInfo::class, 'createFromDiscriminatorValue'])),
            'provisioningSteps' => fn(ParseNode $n) => $o->setProvisioningSteps($n->getCollectionOfObjectValues([ProvisioningStep::class, 'createFromDiscriminatorValue'])),
            'servicePrincipal' => fn(ParseNode $n) => $o->setServicePrincipal($n->getObjectValue([ProvisioningServicePrincipal::class, 'createFromDiscriminatorValue'])),
            'sourceIdentity' => fn(ParseNode $n) => $o->setSourceIdentity($n->getObjectValue([ProvisionedIdentity::class, 'createFromDiscriminatorValue'])),
            'sourceSystem' => fn(ParseNode $n) => $o->setSourceSystem($n->getObjectValue([ProvisioningSystem::class, 'createFromDiscriminatorValue'])),
            'targetIdentity' => fn(ParseNode $n) => $o->setTargetIdentity($n->getObjectValue([ProvisionedIdentity::class, 'createFromDiscriminatorValue'])),
            'targetSystem' => fn(ParseNode $n) => $o->setTargetSystem($n->getObjectValue([ProvisioningSystem::class, 'createFromDiscriminatorValue'])),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the initiatedBy property value. Details of who initiated this provisioning.
     * @return Initiator|null
    */
    public function getInitiatedBy(): ?Initiator {
        return $this->getBackingStore()->get('initiatedBy');
    }

    /**
     * Gets the jobId property value. The unique ID for the whole provisioning job.
     * @return string|null
    */
    public function getJobId(): ?string {
        return $this->getBackingStore()->get('jobId');
    }

    /**
     * Gets the modifiedProperties property value. Details of each property that was modified in this provisioning action on this object.
     * @return array<ModifiedProperty>|null
    */
    public function getModifiedProperties(): ?array {
        return $this->getBackingStore()->get('modifiedProperties');
    }

    /**
     * Gets the provisioningAction property value. Indicates the activity name or the operation name. Possible values are: create, update, delete, stageddelete, disable, other and unknownFutureValue. For a list of activities logged, refer to Azure AD activity list.
     * @return ProvisioningAction|null
    */
    public function getProvisioningAction(): ?ProvisioningAction {
        return $this->getBackingStore()->get('provisioningAction');
    }

    /**
     * Gets the provisioningStatusInfo property value. Details of provisioning status.
     * @return ProvisioningStatusInfo|null
    */
    public function getProvisioningStatusInfo(): ?ProvisioningStatusInfo {
        return $this->getBackingStore()->get('provisioningStatusInfo');
    }

    /**
     * Gets the provisioningSteps property value. Details of each step in provisioning.
     * @return array<ProvisioningStep>|null
    */
    public function getProvisioningSteps(): ?array {
        return $this->getBackingStore()->get('provisioningSteps');
    }

    /**
     * Gets the servicePrincipal property value. Represents the service principal used for provisioning.
     * @return ProvisioningServicePrincipal|null
    */
    public function getServicePrincipal(): ?ProvisioningServicePrincipal {
        return $this->getBackingStore()->get('servicePrincipal');
    }

    /**
     * Gets the sourceIdentity property value. Details of source object being provisioned.
     * @return ProvisionedIdentity|null
    */
    public function getSourceIdentity(): ?ProvisionedIdentity {
        return $this->getBackingStore()->get('sourceIdentity');
    }

    /**
     * Gets the sourceSystem property value. Details of source system of the object being provisioned.
     * @return ProvisioningSystem|null
    */
    public function getSourceSystem(): ?ProvisioningSystem {
        return $this->getBackingStore()->get('sourceSystem');
    }

    /**
     * Gets the targetIdentity property value. Details of target object being provisioned.
     * @return ProvisionedIdentity|null
    */
    public function getTargetIdentity(): ?ProvisionedIdentity {
        return $this->getBackingStore()->get('targetIdentity');
    }

    /**
     * Gets the targetSystem property value. Details of target system of the object being provisioned.
     * @return ProvisioningSystem|null
    */
    public function getTargetSystem(): ?ProvisioningSystem {
        return $this->getBackingStore()->get('targetSystem');
    }

    /**
     * Gets the tenantId property value. Unique Azure AD tenant ID.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('activityDateTime', $this->getActivityDateTime());
        $writer->writeStringValue('changeId', $this->getChangeId());
        $writer->writeStringValue('cycleId', $this->getCycleId());
        $writer->writeIntegerValue('durationInMilliseconds', $this->getDurationInMilliseconds());
        $writer->writeObjectValue('initiatedBy', $this->getInitiatedBy());
        $writer->writeStringValue('jobId', $this->getJobId());
        $writer->writeCollectionOfObjectValues('modifiedProperties', $this->getModifiedProperties());
        $writer->writeEnumValue('provisioningAction', $this->getProvisioningAction());
        $writer->writeObjectValue('provisioningStatusInfo', $this->getProvisioningStatusInfo());
        $writer->writeCollectionOfObjectValues('provisioningSteps', $this->getProvisioningSteps());
        $writer->writeObjectValue('servicePrincipal', $this->getServicePrincipal());
        $writer->writeObjectValue('sourceIdentity', $this->getSourceIdentity());
        $writer->writeObjectValue('sourceSystem', $this->getSourceSystem());
        $writer->writeObjectValue('targetIdentity', $this->getTargetIdentity());
        $writer->writeObjectValue('targetSystem', $this->getTargetSystem());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the activityDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('activityDateTime', $value);
    }

    /**
     * Sets the changeId property value. Unique ID of this change in this cycle.
     *  @param string|null $value Value to set for the changeId property.
    */
    public function setChangeId(?string $value): void {
        $this->getBackingStore()->set('changeId', $value);
    }

    /**
     * Sets the cycleId property value. Unique ID per job iteration.
     *  @param string|null $value Value to set for the cycleId property.
    */
    public function setCycleId(?string $value): void {
        $this->getBackingStore()->set('cycleId', $value);
    }

    /**
     * Sets the durationInMilliseconds property value. Indicates how long this provisioning action took to finish. Measured in milliseconds.
     *  @param int|null $value Value to set for the durationInMilliseconds property.
    */
    public function setDurationInMilliseconds(?int $value): void {
        $this->getBackingStore()->set('durationInMilliseconds', $value);
    }

    /**
     * Sets the initiatedBy property value. Details of who initiated this provisioning.
     *  @param Initiator|null $value Value to set for the initiatedBy property.
    */
    public function setInitiatedBy(?Initiator $value): void {
        $this->getBackingStore()->set('initiatedBy', $value);
    }

    /**
     * Sets the jobId property value. The unique ID for the whole provisioning job.
     *  @param string|null $value Value to set for the jobId property.
    */
    public function setJobId(?string $value): void {
        $this->getBackingStore()->set('jobId', $value);
    }

    /**
     * Sets the modifiedProperties property value. Details of each property that was modified in this provisioning action on this object.
     *  @param array<ModifiedProperty>|null $value Value to set for the modifiedProperties property.
    */
    public function setModifiedProperties(?array $value): void {
        $this->getBackingStore()->set('modifiedProperties', $value);
    }

    /**
     * Sets the provisioningAction property value. Indicates the activity name or the operation name. Possible values are: create, update, delete, stageddelete, disable, other and unknownFutureValue. For a list of activities logged, refer to Azure AD activity list.
     *  @param ProvisioningAction|null $value Value to set for the provisioningAction property.
    */
    public function setProvisioningAction(?ProvisioningAction $value): void {
        $this->getBackingStore()->set('provisioningAction', $value);
    }

    /**
     * Sets the provisioningStatusInfo property value. Details of provisioning status.
     *  @param ProvisioningStatusInfo|null $value Value to set for the provisioningStatusInfo property.
    */
    public function setProvisioningStatusInfo(?ProvisioningStatusInfo $value): void {
        $this->getBackingStore()->set('provisioningStatusInfo', $value);
    }

    /**
     * Sets the provisioningSteps property value. Details of each step in provisioning.
     *  @param array<ProvisioningStep>|null $value Value to set for the provisioningSteps property.
    */
    public function setProvisioningSteps(?array $value): void {
        $this->getBackingStore()->set('provisioningSteps', $value);
    }

    /**
     * Sets the servicePrincipal property value. Represents the service principal used for provisioning.
     *  @param ProvisioningServicePrincipal|null $value Value to set for the servicePrincipal property.
    */
    public function setServicePrincipal(?ProvisioningServicePrincipal $value): void {
        $this->getBackingStore()->set('servicePrincipal', $value);
    }

    /**
     * Sets the sourceIdentity property value. Details of source object being provisioned.
     *  @param ProvisionedIdentity|null $value Value to set for the sourceIdentity property.
    */
    public function setSourceIdentity(?ProvisionedIdentity $value): void {
        $this->getBackingStore()->set('sourceIdentity', $value);
    }

    /**
     * Sets the sourceSystem property value. Details of source system of the object being provisioned.
     *  @param ProvisioningSystem|null $value Value to set for the sourceSystem property.
    */
    public function setSourceSystem(?ProvisioningSystem $value): void {
        $this->getBackingStore()->set('sourceSystem', $value);
    }

    /**
     * Sets the targetIdentity property value. Details of target object being provisioned.
     *  @param ProvisionedIdentity|null $value Value to set for the targetIdentity property.
    */
    public function setTargetIdentity(?ProvisionedIdentity $value): void {
        $this->getBackingStore()->set('targetIdentity', $value);
    }

    /**
     * Sets the targetSystem property value. Details of target system of the object being provisioned.
     *  @param ProvisioningSystem|null $value Value to set for the targetSystem property.
    */
    public function setTargetSystem(?ProvisioningSystem $value): void {
        $this->getBackingStore()->set('targetSystem', $value);
    }

    /**
     * Sets the tenantId property value. Unique Azure AD tenant ID.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
