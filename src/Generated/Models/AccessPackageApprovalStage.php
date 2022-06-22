<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageApprovalStage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateInterval|null $durationBeforeAutomaticDenial The number of days that a request can be pending a response before it is automatically denied.
    */
    private ?DateInterval $durationBeforeAutomaticDenial = null;
    
    /**
     * @var DateInterval|null $durationBeforeEscalation If escalation is required, the time a request can be pending a response from a primary approver.
    */
    private ?DateInterval $durationBeforeEscalation = null;
    
    /**
     * @var array<SubjectSet>|null $escalationApprovers If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests.
    */
    private ?array $escalationApprovers = null;
    
    /**
     * @var array<SubjectSet>|null $fallbackEscalationApprovers The subjects, typically users, who are the fallback escalation approvers.
    */
    private ?array $fallbackEscalationApprovers = null;
    
    /**
     * @var array<SubjectSet>|null $fallbackPrimaryApprovers The subjects, typically users, who are the fallback primary approvers.
    */
    private ?array $fallbackPrimaryApprovers = null;
    
    /**
     * @var bool|null $isApproverJustificationRequired Indicates whether the approver is required to provide a justification for approving a request.
    */
    private ?bool $isApproverJustificationRequired = null;
    
    /**
     * @var bool|null $isEscalationEnabled If true, then one or more escalationApprovers are configured in this approval stage.
    */
    private ?bool $isEscalationEnabled = null;
    
    /**
     * @var array<SubjectSet>|null $primaryApprovers The subjects, typically users, who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors or externalSponsors.
    */
    private ?array $primaryApprovers = null;
    
    /**
     * Instantiates a new accessPackageApprovalStage and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageApprovalStage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageApprovalStage {
        return new AccessPackageApprovalStage();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the durationBeforeAutomaticDenial property value. The number of days that a request can be pending a response before it is automatically denied.
     * @return DateInterval|null
    */
    public function getDurationBeforeAutomaticDenial(): ?DateInterval {
        return $this->durationBeforeAutomaticDenial;
    }

    /**
     * Gets the durationBeforeEscalation property value. If escalation is required, the time a request can be pending a response from a primary approver.
     * @return DateInterval|null
    */
    public function getDurationBeforeEscalation(): ?DateInterval {
        return $this->durationBeforeEscalation;
    }

    /**
     * Gets the escalationApprovers property value. If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests.
     * @return array<SubjectSet>|null
    */
    public function getEscalationApprovers(): ?array {
        return $this->escalationApprovers;
    }

    /**
     * Gets the fallbackEscalationApprovers property value. The subjects, typically users, who are the fallback escalation approvers.
     * @return array<SubjectSet>|null
    */
    public function getFallbackEscalationApprovers(): ?array {
        return $this->fallbackEscalationApprovers;
    }

    /**
     * Gets the fallbackPrimaryApprovers property value. The subjects, typically users, who are the fallback primary approvers.
     * @return array<SubjectSet>|null
    */
    public function getFallbackPrimaryApprovers(): ?array {
        return $this->fallbackPrimaryApprovers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'durationBeforeAutomaticDenial' => function (ParseNode $n) use ($o) { $o->setDurationBeforeAutomaticDenial($n->getDateIntervalValue()); },
            'durationBeforeEscalation' => function (ParseNode $n) use ($o) { $o->setDurationBeforeEscalation($n->getDateIntervalValue()); },
            'escalationApprovers' => function (ParseNode $n) use ($o) { $o->setEscalationApprovers($n->getCollectionOfObjectValues(array(SubjectSet::class, 'createFromDiscriminatorValue'))); },
            'fallbackEscalationApprovers' => function (ParseNode $n) use ($o) { $o->setFallbackEscalationApprovers($n->getCollectionOfObjectValues(array(SubjectSet::class, 'createFromDiscriminatorValue'))); },
            'fallbackPrimaryApprovers' => function (ParseNode $n) use ($o) { $o->setFallbackPrimaryApprovers($n->getCollectionOfObjectValues(array(SubjectSet::class, 'createFromDiscriminatorValue'))); },
            'isApproverJustificationRequired' => function (ParseNode $n) use ($o) { $o->setIsApproverJustificationRequired($n->getBooleanValue()); },
            'isEscalationEnabled' => function (ParseNode $n) use ($o) { $o->setIsEscalationEnabled($n->getBooleanValue()); },
            'primaryApprovers' => function (ParseNode $n) use ($o) { $o->setPrimaryApprovers($n->getCollectionOfObjectValues(array(SubjectSet::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the isApproverJustificationRequired property value. Indicates whether the approver is required to provide a justification for approving a request.
     * @return bool|null
    */
    public function getIsApproverJustificationRequired(): ?bool {
        return $this->isApproverJustificationRequired;
    }

    /**
     * Gets the isEscalationEnabled property value. If true, then one or more escalationApprovers are configured in this approval stage.
     * @return bool|null
    */
    public function getIsEscalationEnabled(): ?bool {
        return $this->isEscalationEnabled;
    }

    /**
     * Gets the primaryApprovers property value. The subjects, typically users, who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors or externalSponsors.
     * @return array<SubjectSet>|null
    */
    public function getPrimaryApprovers(): ?array {
        return $this->primaryApprovers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateIntervalValue('durationBeforeAutomaticDenial', $this->durationBeforeAutomaticDenial);
        $writer->writeDateIntervalValue('durationBeforeEscalation', $this->durationBeforeEscalation);
        $writer->writeCollectionOfObjectValues('escalationApprovers', $this->escalationApprovers);
        $writer->writeCollectionOfObjectValues('fallbackEscalationApprovers', $this->fallbackEscalationApprovers);
        $writer->writeCollectionOfObjectValues('fallbackPrimaryApprovers', $this->fallbackPrimaryApprovers);
        $writer->writeBooleanValue('isApproverJustificationRequired', $this->isApproverJustificationRequired);
        $writer->writeBooleanValue('isEscalationEnabled', $this->isEscalationEnabled);
        $writer->writeCollectionOfObjectValues('primaryApprovers', $this->primaryApprovers);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the durationBeforeAutomaticDenial property value. The number of days that a request can be pending a response before it is automatically denied.
     *  @param DateInterval|null $value Value to set for the durationBeforeAutomaticDenial property.
    */
    public function setDurationBeforeAutomaticDenial(?DateInterval $value ): void {
        $this->durationBeforeAutomaticDenial = $value;
    }

    /**
     * Sets the durationBeforeEscalation property value. If escalation is required, the time a request can be pending a response from a primary approver.
     *  @param DateInterval|null $value Value to set for the durationBeforeEscalation property.
    */
    public function setDurationBeforeEscalation(?DateInterval $value ): void {
        $this->durationBeforeEscalation = $value;
    }

    /**
     * Sets the escalationApprovers property value. If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests.
     *  @param array<SubjectSet>|null $value Value to set for the escalationApprovers property.
    */
    public function setEscalationApprovers(?array $value ): void {
        $this->escalationApprovers = $value;
    }

    /**
     * Sets the fallbackEscalationApprovers property value. The subjects, typically users, who are the fallback escalation approvers.
     *  @param array<SubjectSet>|null $value Value to set for the fallbackEscalationApprovers property.
    */
    public function setFallbackEscalationApprovers(?array $value ): void {
        $this->fallbackEscalationApprovers = $value;
    }

    /**
     * Sets the fallbackPrimaryApprovers property value. The subjects, typically users, who are the fallback primary approvers.
     *  @param array<SubjectSet>|null $value Value to set for the fallbackPrimaryApprovers property.
    */
    public function setFallbackPrimaryApprovers(?array $value ): void {
        $this->fallbackPrimaryApprovers = $value;
    }

    /**
     * Sets the isApproverJustificationRequired property value. Indicates whether the approver is required to provide a justification for approving a request.
     *  @param bool|null $value Value to set for the isApproverJustificationRequired property.
    */
    public function setIsApproverJustificationRequired(?bool $value ): void {
        $this->isApproverJustificationRequired = $value;
    }

    /**
     * Sets the isEscalationEnabled property value. If true, then one or more escalationApprovers are configured in this approval stage.
     *  @param bool|null $value Value to set for the isEscalationEnabled property.
    */
    public function setIsEscalationEnabled(?bool $value ): void {
        $this->isEscalationEnabled = $value;
    }

    /**
     * Sets the primaryApprovers property value. The subjects, typically users, who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors or externalSponsors.
     *  @param array<SubjectSet>|null $value Value to set for the primaryApprovers property.
    */
    public function setPrimaryApprovers(?array $value ): void {
        $this->primaryApprovers = $value;
    }

}
