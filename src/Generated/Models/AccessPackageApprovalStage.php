<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AccessPackageApprovalStage implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new accessPackageApprovalStage and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the durationBeforeAutomaticDenial property value. The number of days that a request can be pending a response before it is automatically denied.
     * @return DateInterval|null
    */
    public function getDurationBeforeAutomaticDenial(): ?DateInterval {
        return $this->getBackingStore()->get('durationBeforeAutomaticDenial');
    }

    /**
     * Gets the durationBeforeEscalation property value. If escalation is required, the time a request can be pending a response from a primary approver.
     * @return DateInterval|null
    */
    public function getDurationBeforeEscalation(): ?DateInterval {
        return $this->getBackingStore()->get('durationBeforeEscalation');
    }

    /**
     * Gets the escalationApprovers property value. If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests.
     * @return array<SubjectSet>|null
    */
    public function getEscalationApprovers(): ?array {
        return $this->getBackingStore()->get('escalationApprovers');
    }

    /**
     * Gets the fallbackEscalationApprovers property value. The subjects, typically users, who are the fallback escalation approvers.
     * @return array<SubjectSet>|null
    */
    public function getFallbackEscalationApprovers(): ?array {
        return $this->getBackingStore()->get('fallbackEscalationApprovers');
    }

    /**
     * Gets the fallbackPrimaryApprovers property value. The subjects, typically users, who are the fallback primary approvers.
     * @return array<SubjectSet>|null
    */
    public function getFallbackPrimaryApprovers(): ?array {
        return $this->getBackingStore()->get('fallbackPrimaryApprovers');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'durationBeforeAutomaticDenial' => fn(ParseNode $n) => $o->setDurationBeforeAutomaticDenial($n->getDateIntervalValue()),
            'durationBeforeEscalation' => fn(ParseNode $n) => $o->setDurationBeforeEscalation($n->getDateIntervalValue()),
            'escalationApprovers' => fn(ParseNode $n) => $o->setEscalationApprovers($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
            'fallbackEscalationApprovers' => fn(ParseNode $n) => $o->setFallbackEscalationApprovers($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
            'fallbackPrimaryApprovers' => fn(ParseNode $n) => $o->setFallbackPrimaryApprovers($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
            'isApproverJustificationRequired' => fn(ParseNode $n) => $o->setIsApproverJustificationRequired($n->getBooleanValue()),
            'isEscalationEnabled' => fn(ParseNode $n) => $o->setIsEscalationEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'primaryApprovers' => fn(ParseNode $n) => $o->setPrimaryApprovers($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isApproverJustificationRequired property value. Indicates whether the approver is required to provide a justification for approving a request.
     * @return bool|null
    */
    public function getIsApproverJustificationRequired(): ?bool {
        return $this->getBackingStore()->get('isApproverJustificationRequired');
    }

    /**
     * Gets the isEscalationEnabled property value. If true, then one or more escalationApprovers are configured in this approval stage.
     * @return bool|null
    */
    public function getIsEscalationEnabled(): ?bool {
        return $this->getBackingStore()->get('isEscalationEnabled');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the primaryApprovers property value. The subjects, typically users, who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors or externalSponsors.
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
        $writer->writeDateIntervalValue('durationBeforeAutomaticDenial', $this->getDurationBeforeAutomaticDenial());
        $writer->writeDateIntervalValue('durationBeforeEscalation', $this->getDurationBeforeEscalation());
        $writer->writeCollectionOfObjectValues('escalationApprovers', $this->getEscalationApprovers());
        $writer->writeCollectionOfObjectValues('fallbackEscalationApprovers', $this->getFallbackEscalationApprovers());
        $writer->writeCollectionOfObjectValues('fallbackPrimaryApprovers', $this->getFallbackPrimaryApprovers());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the durationBeforeAutomaticDenial property value. The number of days that a request can be pending a response before it is automatically denied.
     * @param DateInterval|null $value Value to set for the durationBeforeAutomaticDenial property.
    */
    public function setDurationBeforeAutomaticDenial(?DateInterval $value): void {
        $this->getBackingStore()->set('durationBeforeAutomaticDenial', $value);
    }

    /**
     * Sets the durationBeforeEscalation property value. If escalation is required, the time a request can be pending a response from a primary approver.
     * @param DateInterval|null $value Value to set for the durationBeforeEscalation property.
    */
    public function setDurationBeforeEscalation(?DateInterval $value): void {
        $this->getBackingStore()->set('durationBeforeEscalation', $value);
    }

    /**
     * Sets the escalationApprovers property value. If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests.
     * @param array<SubjectSet>|null $value Value to set for the escalationApprovers property.
    */
    public function setEscalationApprovers(?array $value): void {
        $this->getBackingStore()->set('escalationApprovers', $value);
    }

    /**
     * Sets the fallbackEscalationApprovers property value. The subjects, typically users, who are the fallback escalation approvers.
     * @param array<SubjectSet>|null $value Value to set for the fallbackEscalationApprovers property.
    */
    public function setFallbackEscalationApprovers(?array $value): void {
        $this->getBackingStore()->set('fallbackEscalationApprovers', $value);
    }

    /**
     * Sets the fallbackPrimaryApprovers property value. The subjects, typically users, who are the fallback primary approvers.
     * @param array<SubjectSet>|null $value Value to set for the fallbackPrimaryApprovers property.
    */
    public function setFallbackPrimaryApprovers(?array $value): void {
        $this->getBackingStore()->set('fallbackPrimaryApprovers', $value);
    }

    /**
     * Sets the isApproverJustificationRequired property value. Indicates whether the approver is required to provide a justification for approving a request.
     * @param bool|null $value Value to set for the isApproverJustificationRequired property.
    */
    public function setIsApproverJustificationRequired(?bool $value): void {
        $this->getBackingStore()->set('isApproverJustificationRequired', $value);
    }

    /**
     * Sets the isEscalationEnabled property value. If true, then one or more escalationApprovers are configured in this approval stage.
     * @param bool|null $value Value to set for the isEscalationEnabled property.
    */
    public function setIsEscalationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEscalationEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the primaryApprovers property value. The subjects, typically users, who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors or externalSponsors.
     * @param array<SubjectSet>|null $value Value to set for the primaryApprovers property.
    */
    public function setPrimaryApprovers(?array $value): void {
        $this->getBackingStore()->set('primaryApprovers', $value);
    }

}
