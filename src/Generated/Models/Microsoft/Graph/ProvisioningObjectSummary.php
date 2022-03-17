<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProvisioningObjectSummary extends Entity 
{
    /** @var DateTime|null $activityDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $activityDateTime = null;
    
    /** @var string|null $changeId Unique ID of this change in this cycle. */
    private ?string $changeId = null;
    
    /** @var string|null $cycleId Unique ID per job iteration. */
    private ?string $cycleId = null;
    
    /** @var int|null $durationInMilliseconds Indicates how long this provisioning action took to finish. Measured in milliseconds. */
    private ?int $durationInMilliseconds = null;
    
    /** @var Initiator|null $initiatedBy Details of who initiated this provisioning. */
    private ?Initiator $initiatedBy = null;
    
    /** @var string|null $jobId The unique ID for the whole provisioning job. */
    private ?string $jobId = null;
    
    /** @var array<ModifiedProperty>|null $modifiedProperties Details of each property that was modified in this provisioning action on this object. */
    private ?array $modifiedProperties = null;
    
    /** @var ProvisioningAction|null $provisioningAction Indicates the activity name or the operation name. Possible values are: create, update, delete, stageddelete, disable, other and unknownFutureValue. For a list of activities logged, refer to Azure AD activity list. */
    private ?ProvisioningAction $provisioningAction = null;
    
    /** @var ProvisioningStatusInfo|null $provisioningStatusInfo Details of provisioning status. */
    private ?ProvisioningStatusInfo $provisioningStatusInfo = null;
    
    /** @var array<ProvisioningStep>|null $provisioningSteps Details of each step in provisioning. */
    private ?array $provisioningSteps = null;
    
    /** @var ProvisioningServicePrincipal|null $servicePrincipal Represents the service principal used for provisioning. */
    private ?ProvisioningServicePrincipal $servicePrincipal = null;
    
    /** @var ProvisionedIdentity|null $sourceIdentity Details of source object being provisioned. */
    private ?ProvisionedIdentity $sourceIdentity = null;
    
    /** @var ProvisioningSystem|null $sourceSystem Details of source system of the object being provisioned. */
    private ?ProvisioningSystem $sourceSystem = null;
    
    /** @var ProvisionedIdentity|null $targetIdentity Details of target object being provisioned. */
    private ?ProvisionedIdentity $targetIdentity = null;
    
    /** @var ProvisioningSystem|null $targetSystem Details of target system of the object being provisioned. */
    private ?ProvisioningSystem $targetSystem = null;
    
    /** @var string|null $tenantId Unique Azure AD tenant ID. */
    private ?string $tenantId = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): ProvisioningObjectSummary {
        return new ProvisioningObjectSummary();
    }

    /**
     * Gets the activityDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        return $this->activityDateTime;
    }

    /**
     * Gets the changeId property value. Unique ID of this change in this cycle.
     * @return string|null
    */
    public function getChangeId(): ?string {
        return $this->changeId;
    }

    /**
     * Gets the cycleId property value. Unique ID per job iteration.
     * @return string|null
    */
    public function getCycleId(): ?string {
        return $this->cycleId;
    }

    /**
     * Gets the durationInMilliseconds property value. Indicates how long this provisioning action took to finish. Measured in milliseconds.
     * @return int|null
    */
    public function getDurationInMilliseconds(): ?int {
        return $this->durationInMilliseconds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'activityDateTime' => function (self $o, ParseNode $n) { $o->setActivityDateTime($n->getDateTimeValue()); },
            'changeId' => function (self $o, ParseNode $n) { $o->setChangeId($n->getStringValue()); },
            'cycleId' => function (self $o, ParseNode $n) { $o->setCycleId($n->getStringValue()); },
            'durationInMilliseconds' => function (self $o, ParseNode $n) { $o->setDurationInMilliseconds($n->getIntegerValue()); },
            'initiatedBy' => function (self $o, ParseNode $n) { $o->setInitiatedBy($n->getObjectValue(Initiator::class)); },
            'jobId' => function (self $o, ParseNode $n) { $o->setJobId($n->getStringValue()); },
            'modifiedProperties' => function (self $o, ParseNode $n) { $o->setModifiedProperties($n->getCollectionOfObjectValues(ModifiedProperty::class)); },
            'provisioningAction' => function (self $o, ParseNode $n) { $o->setProvisioningAction($n->getEnumValue(ProvisioningAction::class)); },
            'provisioningStatusInfo' => function (self $o, ParseNode $n) { $o->setProvisioningStatusInfo($n->getObjectValue(ProvisioningStatusInfo::class)); },
            'provisioningSteps' => function (self $o, ParseNode $n) { $o->setProvisioningSteps($n->getCollectionOfObjectValues(ProvisioningStep::class)); },
            'servicePrincipal' => function (self $o, ParseNode $n) { $o->setServicePrincipal($n->getObjectValue(ProvisioningServicePrincipal::class)); },
            'sourceIdentity' => function (self $o, ParseNode $n) { $o->setSourceIdentity($n->getObjectValue(ProvisionedIdentity::class)); },
            'sourceSystem' => function (self $o, ParseNode $n) { $o->setSourceSystem($n->getObjectValue(ProvisioningSystem::class)); },
            'targetIdentity' => function (self $o, ParseNode $n) { $o->setTargetIdentity($n->getObjectValue(ProvisionedIdentity::class)); },
            'targetSystem' => function (self $o, ParseNode $n) { $o->setTargetSystem($n->getObjectValue(ProvisioningSystem::class)); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the initiatedBy property value. Details of who initiated this provisioning.
     * @return Initiator|null
    */
    public function getInitiatedBy(): ?Initiator {
        return $this->initiatedBy;
    }

    /**
     * Gets the jobId property value. The unique ID for the whole provisioning job.
     * @return string|null
    */
    public function getJobId(): ?string {
        return $this->jobId;
    }

    /**
     * Gets the modifiedProperties property value. Details of each property that was modified in this provisioning action on this object.
     * @return array<ModifiedProperty>|null
    */
    public function getModifiedProperties(): ?array {
        return $this->modifiedProperties;
    }

    /**
     * Gets the provisioningAction property value. Indicates the activity name or the operation name. Possible values are: create, update, delete, stageddelete, disable, other and unknownFutureValue. For a list of activities logged, refer to Azure AD activity list.
     * @return ProvisioningAction|null
    */
    public function getProvisioningAction(): ?ProvisioningAction {
        return $this->provisioningAction;
    }

    /**
     * Gets the provisioningStatusInfo property value. Details of provisioning status.
     * @return ProvisioningStatusInfo|null
    */
    public function getProvisioningStatusInfo(): ?ProvisioningStatusInfo {
        return $this->provisioningStatusInfo;
    }

    /**
     * Gets the provisioningSteps property value. Details of each step in provisioning.
     * @return array<ProvisioningStep>|null
    */
    public function getProvisioningSteps(): ?array {
        return $this->provisioningSteps;
    }

    /**
     * Gets the servicePrincipal property value. Represents the service principal used for provisioning.
     * @return ProvisioningServicePrincipal|null
    */
    public function getServicePrincipal(): ?ProvisioningServicePrincipal {
        return $this->servicePrincipal;
    }

    /**
     * Gets the sourceIdentity property value. Details of source object being provisioned.
     * @return ProvisionedIdentity|null
    */
    public function getSourceIdentity(): ?ProvisionedIdentity {
        return $this->sourceIdentity;
    }

    /**
     * Gets the sourceSystem property value. Details of source system of the object being provisioned.
     * @return ProvisioningSystem|null
    */
    public function getSourceSystem(): ?ProvisioningSystem {
        return $this->sourceSystem;
    }

    /**
     * Gets the targetIdentity property value. Details of target object being provisioned.
     * @return ProvisionedIdentity|null
    */
    public function getTargetIdentity(): ?ProvisionedIdentity {
        return $this->targetIdentity;
    }

    /**
     * Gets the targetSystem property value. Details of target system of the object being provisioned.
     * @return ProvisioningSystem|null
    */
    public function getTargetSystem(): ?ProvisioningSystem {
        return $this->targetSystem;
    }

    /**
     * Gets the tenantId property value. Unique Azure AD tenant ID.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('activityDateTime', $this->activityDateTime);
        $writer->writeStringValue('changeId', $this->changeId);
        $writer->writeStringValue('cycleId', $this->cycleId);
        $writer->writeIntegerValue('durationInMilliseconds', $this->durationInMilliseconds);
        $writer->writeObjectValue('initiatedBy', $this->initiatedBy);
        $writer->writeStringValue('jobId', $this->jobId);
        $writer->writeCollectionOfObjectValues('modifiedProperties', $this->modifiedProperties);
        $writer->writeEnumValue('provisioningAction', $this->provisioningAction);
        $writer->writeObjectValue('provisioningStatusInfo', $this->provisioningStatusInfo);
        $writer->writeCollectionOfObjectValues('provisioningSteps', $this->provisioningSteps);
        $writer->writeObjectValue('servicePrincipal', $this->servicePrincipal);
        $writer->writeObjectValue('sourceIdentity', $this->sourceIdentity);
        $writer->writeObjectValue('sourceSystem', $this->sourceSystem);
        $writer->writeObjectValue('targetIdentity', $this->targetIdentity);
        $writer->writeObjectValue('targetSystem', $this->targetSystem);
        $writer->writeStringValue('tenantId', $this->tenantId);
    }

    /**
     * Sets the activityDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value ): void {
        $this->activityDateTime = $value;
    }

    /**
     * Sets the changeId property value. Unique ID of this change in this cycle.
     *  @param string|null $value Value to set for the changeId property.
    */
    public function setChangeId(?string $value ): void {
        $this->changeId = $value;
    }

    /**
     * Sets the cycleId property value. Unique ID per job iteration.
     *  @param string|null $value Value to set for the cycleId property.
    */
    public function setCycleId(?string $value ): void {
        $this->cycleId = $value;
    }

    /**
     * Sets the durationInMilliseconds property value. Indicates how long this provisioning action took to finish. Measured in milliseconds.
     *  @param int|null $value Value to set for the durationInMilliseconds property.
    */
    public function setDurationInMilliseconds(?int $value ): void {
        $this->durationInMilliseconds = $value;
    }

    /**
     * Sets the initiatedBy property value. Details of who initiated this provisioning.
     *  @param Initiator|null $value Value to set for the initiatedBy property.
    */
    public function setInitiatedBy(?Initiator $value ): void {
        $this->initiatedBy = $value;
    }

    /**
     * Sets the jobId property value. The unique ID for the whole provisioning job.
     *  @param string|null $value Value to set for the jobId property.
    */
    public function setJobId(?string $value ): void {
        $this->jobId = $value;
    }

    /**
     * Sets the modifiedProperties property value. Details of each property that was modified in this provisioning action on this object.
     *  @param array<ModifiedProperty>|null $value Value to set for the modifiedProperties property.
    */
    public function setModifiedProperties(?array $value ): void {
        $this->modifiedProperties = $value;
    }

    /**
     * Sets the provisioningAction property value. Indicates the activity name or the operation name. Possible values are: create, update, delete, stageddelete, disable, other and unknownFutureValue. For a list of activities logged, refer to Azure AD activity list.
     *  @param ProvisioningAction|null $value Value to set for the provisioningAction property.
    */
    public function setProvisioningAction(?ProvisioningAction $value ): void {
        $this->provisioningAction = $value;
    }

    /**
     * Sets the provisioningStatusInfo property value. Details of provisioning status.
     *  @param ProvisioningStatusInfo|null $value Value to set for the provisioningStatusInfo property.
    */
    public function setProvisioningStatusInfo(?ProvisioningStatusInfo $value ): void {
        $this->provisioningStatusInfo = $value;
    }

    /**
     * Sets the provisioningSteps property value. Details of each step in provisioning.
     *  @param array<ProvisioningStep>|null $value Value to set for the provisioningSteps property.
    */
    public function setProvisioningSteps(?array $value ): void {
        $this->provisioningSteps = $value;
    }

    /**
     * Sets the servicePrincipal property value. Represents the service principal used for provisioning.
     *  @param ProvisioningServicePrincipal|null $value Value to set for the servicePrincipal property.
    */
    public function setServicePrincipal(?ProvisioningServicePrincipal $value ): void {
        $this->servicePrincipal = $value;
    }

    /**
     * Sets the sourceIdentity property value. Details of source object being provisioned.
     *  @param ProvisionedIdentity|null $value Value to set for the sourceIdentity property.
    */
    public function setSourceIdentity(?ProvisionedIdentity $value ): void {
        $this->sourceIdentity = $value;
    }

    /**
     * Sets the sourceSystem property value. Details of source system of the object being provisioned.
     *  @param ProvisioningSystem|null $value Value to set for the sourceSystem property.
    */
    public function setSourceSystem(?ProvisioningSystem $value ): void {
        $this->sourceSystem = $value;
    }

    /**
     * Sets the targetIdentity property value. Details of target object being provisioned.
     *  @param ProvisionedIdentity|null $value Value to set for the targetIdentity property.
    */
    public function setTargetIdentity(?ProvisionedIdentity $value ): void {
        $this->targetIdentity = $value;
    }

    /**
     * Sets the targetSystem property value. Details of target system of the object being provisioned.
     *  @param ProvisioningSystem|null $value Value to set for the targetSystem property.
    */
    public function setTargetSystem(?ProvisioningSystem $value ): void {
        $this->targetSystem = $value;
    }

    /**
     * Sets the tenantId property value. Unique Azure AD tenant ID.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
