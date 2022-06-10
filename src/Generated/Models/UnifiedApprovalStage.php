<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedApprovalStage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $approvalStageTimeOutInDays The number of days that a request can be pending a response before it is automatically denied.
    */
    private ?int $approvalStageTimeOutInDays = null;
    
    /**
     * @var array<SubjectSet>|null $escalationApprovers The escalation approvers for this stage when the primary approvers don't respond.
    */
    private ?array $escalationApprovers = null;
    
    /**
     * @var int|null $escalationTimeInMinutes The time a request can be pending a response from a primary approver before it can be escalated to the escalation approvers.
    */
    private ?int $escalationTimeInMinutes = null;
    
    /**
     * @var bool|null $isApproverJustificationRequired Indicates whether the approver must provide justification for their reponse.
    */
    private ?bool $isApproverJustificationRequired = null;
    
    /**
     * @var bool|null $isEscalationEnabled Indicates whether escalation if enabled.
    */
    private ?bool $isEscalationEnabled = null;
    
    /**
     * @var array<SubjectSet>|null $primaryApprovers The primary approvers of this stage.
    */
    private ?array $primaryApprovers = null;
    
    /**
     * Instantiates a new unifiedApprovalStage and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedApprovalStage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedApprovalStage {
        return new UnifiedApprovalStage();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the approvalStageTimeOutInDays property value. The number of days that a request can be pending a response before it is automatically denied.
     * @return int|null
    */
    public function getApprovalStageTimeOutInDays(): ?int {
        return $this->approvalStageTimeOutInDays;
    }

    /**
     * Gets the escalationApprovers property value. The escalation approvers for this stage when the primary approvers don't respond.
     * @return array<SubjectSet>|null
    */
    public function getEscalationApprovers(): ?array {
        return $this->escalationApprovers;
    }

    /**
     * Gets the escalationTimeInMinutes property value. The time a request can be pending a response from a primary approver before it can be escalated to the escalation approvers.
     * @return int|null
    */
    public function getEscalationTimeInMinutes(): ?int {
        return $this->escalationTimeInMinutes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'approvalStageTimeOutInDays' => function (ParseNode $n) use ($o) { $o->setApprovalStageTimeOutInDays($n->getIntegerValue()); },
            'escalationApprovers' => function (ParseNode $n) use ($o) { $o->setEscalationApprovers($n->getCollectionOfObjectValues(array(SubjectSet::class, 'createFromDiscriminatorValue'))); },
            'escalationTimeInMinutes' => function (ParseNode $n) use ($o) { $o->setEscalationTimeInMinutes($n->getIntegerValue()); },
            'isApproverJustificationRequired' => function (ParseNode $n) use ($o) { $o->setIsApproverJustificationRequired($n->getBooleanValue()); },
            'isEscalationEnabled' => function (ParseNode $n) use ($o) { $o->setIsEscalationEnabled($n->getBooleanValue()); },
            'primaryApprovers' => function (ParseNode $n) use ($o) { $o->setPrimaryApprovers($n->getCollectionOfObjectValues(array(SubjectSet::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the isApproverJustificationRequired property value. Indicates whether the approver must provide justification for their reponse.
     * @return bool|null
    */
    public function getIsApproverJustificationRequired(): ?bool {
        return $this->isApproverJustificationRequired;
    }

    /**
     * Gets the isEscalationEnabled property value. Indicates whether escalation if enabled.
     * @return bool|null
    */
    public function getIsEscalationEnabled(): ?bool {
        return $this->isEscalationEnabled;
    }

    /**
     * Gets the primaryApprovers property value. The primary approvers of this stage.
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
        $writer->writeIntegerValue('approvalStageTimeOutInDays', $this->approvalStageTimeOutInDays);
        $writer->writeCollectionOfObjectValues('escalationApprovers', $this->escalationApprovers);
        $writer->writeIntegerValue('escalationTimeInMinutes', $this->escalationTimeInMinutes);
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
     * Sets the approvalStageTimeOutInDays property value. The number of days that a request can be pending a response before it is automatically denied.
     *  @param int|null $value Value to set for the approvalStageTimeOutInDays property.
    */
    public function setApprovalStageTimeOutInDays(?int $value ): void {
        $this->approvalStageTimeOutInDays = $value;
    }

    /**
     * Sets the escalationApprovers property value. The escalation approvers for this stage when the primary approvers don't respond.
     *  @param array<SubjectSet>|null $value Value to set for the escalationApprovers property.
    */
    public function setEscalationApprovers(?array $value ): void {
        $this->escalationApprovers = $value;
    }

    /**
     * Sets the escalationTimeInMinutes property value. The time a request can be pending a response from a primary approver before it can be escalated to the escalation approvers.
     *  @param int|null $value Value to set for the escalationTimeInMinutes property.
    */
    public function setEscalationTimeInMinutes(?int $value ): void {
        $this->escalationTimeInMinutes = $value;
    }

    /**
     * Sets the isApproverJustificationRequired property value. Indicates whether the approver must provide justification for their reponse.
     *  @param bool|null $value Value to set for the isApproverJustificationRequired property.
    */
    public function setIsApproverJustificationRequired(?bool $value ): void {
        $this->isApproverJustificationRequired = $value;
    }

    /**
     * Sets the isEscalationEnabled property value. Indicates whether escalation if enabled.
     *  @param bool|null $value Value to set for the isEscalationEnabled property.
    */
    public function setIsEscalationEnabled(?bool $value ): void {
        $this->isEscalationEnabled = $value;
    }

    /**
     * Sets the primaryApprovers property value. The primary approvers of this stage.
     *  @param array<SubjectSet>|null $value Value to set for the primaryApprovers property.
    */
    public function setPrimaryApprovers(?array $value ): void {
        $this->primaryApprovers = $value;
    }

}
