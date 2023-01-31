<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UnifiedApprovalStage implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new unifiedApprovalStage and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the approvalStageTimeOutInDays property value. The number of days that a request can be pending a response before it is automatically denied.
     * @return int|null
    */
    public function getApprovalStageTimeOutInDays(): ?int {
        return $this->getBackingStore()->get('approvalStageTimeOutInDays');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the escalationApprovers property value. The escalation approvers for this stage when the primary approvers don't respond.
     * @return array<SubjectSet>|null
    */
    public function getEscalationApprovers(): ?array {
        return $this->getBackingStore()->get('escalationApprovers');
    }

    /**
     * Gets the escalationTimeInMinutes property value. The time a request can be pending a response from a primary approver before it can be escalated to the escalation approvers.
     * @return int|null
    */
    public function getEscalationTimeInMinutes(): ?int {
        return $this->getBackingStore()->get('escalationTimeInMinutes');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'approvalStageTimeOutInDays' => fn(ParseNode $n) => $o->setApprovalStageTimeOutInDays($n->getIntegerValue()),
            'escalationApprovers' => fn(ParseNode $n) => $o->setEscalationApprovers($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
            'escalationTimeInMinutes' => fn(ParseNode $n) => $o->setEscalationTimeInMinutes($n->getIntegerValue()),
            'isApproverJustificationRequired' => fn(ParseNode $n) => $o->setIsApproverJustificationRequired($n->getBooleanValue()),
            'isEscalationEnabled' => fn(ParseNode $n) => $o->setIsEscalationEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'primaryApprovers' => fn(ParseNode $n) => $o->setPrimaryApprovers($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isApproverJustificationRequired property value. Indicates whether the approver must provide justification for their reponse.
     * @return bool|null
    */
    public function getIsApproverJustificationRequired(): ?bool {
        return $this->getBackingStore()->get('isApproverJustificationRequired');
    }

    /**
     * Gets the isEscalationEnabled property value. Indicates whether escalation if enabled.
     * @return bool|null
    */
    public function getIsEscalationEnabled(): ?bool {
        return $this->getBackingStore()->get('isEscalationEnabled');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the primaryApprovers property value. The primary approvers of this stage.
     * @return array<SubjectSet>|null
    */
    public function getPrimaryApprovers(): ?array {
        return $this->getBackingStore()->get('primaryApprovers');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('approvalStageTimeOutInDays', $this->getApprovalStageTimeOutInDays());
        $writer->writeCollectionOfObjectValues('escalationApprovers', $this->getEscalationApprovers());
        $writer->writeIntegerValue('escalationTimeInMinutes', $this->getEscalationTimeInMinutes());
        $writer->writeBooleanValue('isApproverJustificationRequired', $this->getIsApproverJustificationRequired());
        $writer->writeBooleanValue('isEscalationEnabled', $this->getIsEscalationEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('primaryApprovers', $this->getPrimaryApprovers());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the approvalStageTimeOutInDays property value. The number of days that a request can be pending a response before it is automatically denied.
     * @param int|null $value Value to set for the approvalStageTimeOutInDays property.
    */
    public function setApprovalStageTimeOutInDays(?int $value): void {
        $this->getBackingStore()->set('approvalStageTimeOutInDays', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the escalationApprovers property value. The escalation approvers for this stage when the primary approvers don't respond.
     * @param array<SubjectSet>|null $value Value to set for the escalationApprovers property.
    */
    public function setEscalationApprovers(?array $value): void {
        $this->getBackingStore()->set('escalationApprovers', $value);
    }

    /**
     * Sets the escalationTimeInMinutes property value. The time a request can be pending a response from a primary approver before it can be escalated to the escalation approvers.
     * @param int|null $value Value to set for the escalationTimeInMinutes property.
    */
    public function setEscalationTimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('escalationTimeInMinutes', $value);
    }

    /**
     * Sets the isApproverJustificationRequired property value. Indicates whether the approver must provide justification for their reponse.
     * @param bool|null $value Value to set for the isApproverJustificationRequired property.
    */
    public function setIsApproverJustificationRequired(?bool $value): void {
        $this->getBackingStore()->set('isApproverJustificationRequired', $value);
    }

    /**
     * Sets the isEscalationEnabled property value. Indicates whether escalation if enabled.
     * @param bool|null $value Value to set for the isEscalationEnabled property.
    */
    public function setIsEscalationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEscalationEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the primaryApprovers property value. The primary approvers of this stage.
     * @param array<SubjectSet>|null $value Value to set for the primaryApprovers property.
    */
    public function setPrimaryApprovers(?array $value): void {
        $this->getBackingStore()->set('primaryApprovers', $value);
    }

}
