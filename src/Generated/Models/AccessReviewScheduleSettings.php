<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AccessReviewScheduleSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new accessReviewScheduleSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewScheduleSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewScheduleSettings {
        return new AccessReviewScheduleSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the applyActions property value. Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction.
     * @return array<AccessReviewApplyAction>|null
    */
    public function getApplyActions(): ?array {
        return $this->getBackingStore()->get('applyActions');
    }

    /**
     * Gets the autoApplyDecisionsEnabled property value. Indicates whether decisions are automatically applied. When set to false, an admin must apply the decisions manually once the reviewer completes the access review. When set to true, decisions are applied automatically after the access review instance duration ends, whether or not the reviewers have responded. Default value is false.  CAUTION: If both autoApplyDecisionsEnabled and defaultDecisionEnabled are true, all access for the principals to the resource risks being revoked if the reviewers fail to respond.
     * @return bool|null
    */
    public function getAutoApplyDecisionsEnabled(): ?bool {
        return $this->getBackingStore()->get('autoApplyDecisionsEnabled');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the decisionHistoriesForReviewersEnabled property value. Indicates whether decisions on previous access review stages are available for reviewers on an accessReviewInstance with multiple subsequent stages. If not provided, the default is disabled (false).
     * @return bool|null
    */
    public function getDecisionHistoriesForReviewersEnabled(): ?bool {
        return $this->getBackingStore()->get('decisionHistoriesForReviewersEnabled');
    }

    /**
     * Gets the defaultDecision property value. Decision chosen if defaultDecisionEnabled is enabled. Can be one of Approve, Deny, or Recommendation.
     * @return string|null
    */
    public function getDefaultDecision(): ?string {
        return $this->getBackingStore()->get('defaultDecision');
    }

    /**
     * Gets the defaultDecisionEnabled property value. Indicates whether the default decision is enabled or disabled when reviewers do not respond. Default value is false.  CAUTION: If both autoApplyDecisionsEnabled and defaultDecisionEnabled are true, all access for the principals to the resource risks being revoked if the reviewers fail to respond.
     * @return bool|null
    */
    public function getDefaultDecisionEnabled(): ?bool {
        return $this->getBackingStore()->get('defaultDecisionEnabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applyActions' => fn(ParseNode $n) => $o->setApplyActions($n->getCollectionOfObjectValues([AccessReviewApplyAction::class, 'createFromDiscriminatorValue'])),
            'autoApplyDecisionsEnabled' => fn(ParseNode $n) => $o->setAutoApplyDecisionsEnabled($n->getBooleanValue()),
            'decisionHistoriesForReviewersEnabled' => fn(ParseNode $n) => $o->setDecisionHistoriesForReviewersEnabled($n->getBooleanValue()),
            'defaultDecision' => fn(ParseNode $n) => $o->setDefaultDecision($n->getStringValue()),
            'defaultDecisionEnabled' => fn(ParseNode $n) => $o->setDefaultDecisionEnabled($n->getBooleanValue()),
            'instanceDurationInDays' => fn(ParseNode $n) => $o->setInstanceDurationInDays($n->getIntegerValue()),
            'justificationRequiredOnApproval' => fn(ParseNode $n) => $o->setJustificationRequiredOnApproval($n->getBooleanValue()),
            'mailNotificationsEnabled' => fn(ParseNode $n) => $o->setMailNotificationsEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recommendationsEnabled' => fn(ParseNode $n) => $o->setRecommendationsEnabled($n->getBooleanValue()),
            'recurrence' => fn(ParseNode $n) => $o->setRecurrence($n->getObjectValue([PatternedRecurrence::class, 'createFromDiscriminatorValue'])),
            'reminderNotificationsEnabled' => fn(ParseNode $n) => $o->setReminderNotificationsEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the instanceDurationInDays property value. Duration of an access review instance in days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its durationInDays setting will be used instead of the value of this property.
     * @return int|null
    */
    public function getInstanceDurationInDays(): ?int {
        return $this->getBackingStore()->get('instanceDurationInDays');
    }

    /**
     * Gets the justificationRequiredOnApproval property value. Indicates whether reviewers are required to provide justification with their decision. Default value is false.
     * @return bool|null
    */
    public function getJustificationRequiredOnApproval(): ?bool {
        return $this->getBackingStore()->get('justificationRequiredOnApproval');
    }

    /**
     * Gets the mailNotificationsEnabled property value. Indicates whether emails are enabled or disabled. Default value is false.
     * @return bool|null
    */
    public function getMailNotificationsEnabled(): ?bool {
        return $this->getBackingStore()->get('mailNotificationsEnabled');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the recommendationsEnabled property value. Indicates whether decision recommendations are enabled or disabled. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationsEnabled setting will be used instead of the value of this property.
     * @return bool|null
    */
    public function getRecommendationsEnabled(): ?bool {
        return $this->getBackingStore()->get('recommendationsEnabled');
    }

    /**
     * Gets the recurrence property value. Detailed settings for recurrence using the standard Outlook recurrence object. Note: Only dayOfMonth, interval, and type (weekly, absoluteMonthly) properties are supported. Use the property startDate on recurrenceRange to determine the day the review starts.
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->getBackingStore()->get('recurrence');
    }

    /**
     * Gets the reminderNotificationsEnabled property value. Indicates whether reminders are enabled or disabled. Default value is false.
     * @return bool|null
    */
    public function getReminderNotificationsEnabled(): ?bool {
        return $this->getBackingStore()->get('reminderNotificationsEnabled');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('applyActions', $this->getApplyActions());
        $writer->writeBooleanValue('autoApplyDecisionsEnabled', $this->getAutoApplyDecisionsEnabled());
        $writer->writeBooleanValue('decisionHistoriesForReviewersEnabled', $this->getDecisionHistoriesForReviewersEnabled());
        $writer->writeStringValue('defaultDecision', $this->getDefaultDecision());
        $writer->writeBooleanValue('defaultDecisionEnabled', $this->getDefaultDecisionEnabled());
        $writer->writeIntegerValue('instanceDurationInDays', $this->getInstanceDurationInDays());
        $writer->writeBooleanValue('justificationRequiredOnApproval', $this->getJustificationRequiredOnApproval());
        $writer->writeBooleanValue('mailNotificationsEnabled', $this->getMailNotificationsEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('recommendationsEnabled', $this->getRecommendationsEnabled());
        $writer->writeObjectValue('recurrence', $this->getRecurrence());
        $writer->writeBooleanValue('reminderNotificationsEnabled', $this->getReminderNotificationsEnabled());
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
     * Sets the applyActions property value. Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction.
     * @param array<AccessReviewApplyAction>|null $value Value to set for the applyActions property.
    */
    public function setApplyActions(?array $value): void {
        $this->getBackingStore()->set('applyActions', $value);
    }

    /**
     * Sets the autoApplyDecisionsEnabled property value. Indicates whether decisions are automatically applied. When set to false, an admin must apply the decisions manually once the reviewer completes the access review. When set to true, decisions are applied automatically after the access review instance duration ends, whether or not the reviewers have responded. Default value is false.  CAUTION: If both autoApplyDecisionsEnabled and defaultDecisionEnabled are true, all access for the principals to the resource risks being revoked if the reviewers fail to respond.
     * @param bool|null $value Value to set for the autoApplyDecisionsEnabled property.
    */
    public function setAutoApplyDecisionsEnabled(?bool $value): void {
        $this->getBackingStore()->set('autoApplyDecisionsEnabled', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the decisionHistoriesForReviewersEnabled property value. Indicates whether decisions on previous access review stages are available for reviewers on an accessReviewInstance with multiple subsequent stages. If not provided, the default is disabled (false).
     * @param bool|null $value Value to set for the decisionHistoriesForReviewersEnabled property.
    */
    public function setDecisionHistoriesForReviewersEnabled(?bool $value): void {
        $this->getBackingStore()->set('decisionHistoriesForReviewersEnabled', $value);
    }

    /**
     * Sets the defaultDecision property value. Decision chosen if defaultDecisionEnabled is enabled. Can be one of Approve, Deny, or Recommendation.
     * @param string|null $value Value to set for the defaultDecision property.
    */
    public function setDefaultDecision(?string $value): void {
        $this->getBackingStore()->set('defaultDecision', $value);
    }

    /**
     * Sets the defaultDecisionEnabled property value. Indicates whether the default decision is enabled or disabled when reviewers do not respond. Default value is false.  CAUTION: If both autoApplyDecisionsEnabled and defaultDecisionEnabled are true, all access for the principals to the resource risks being revoked if the reviewers fail to respond.
     * @param bool|null $value Value to set for the defaultDecisionEnabled property.
    */
    public function setDefaultDecisionEnabled(?bool $value): void {
        $this->getBackingStore()->set('defaultDecisionEnabled', $value);
    }

    /**
     * Sets the instanceDurationInDays property value. Duration of an access review instance in days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its durationInDays setting will be used instead of the value of this property.
     * @param int|null $value Value to set for the instanceDurationInDays property.
    */
    public function setInstanceDurationInDays(?int $value): void {
        $this->getBackingStore()->set('instanceDurationInDays', $value);
    }

    /**
     * Sets the justificationRequiredOnApproval property value. Indicates whether reviewers are required to provide justification with their decision. Default value is false.
     * @param bool|null $value Value to set for the justificationRequiredOnApproval property.
    */
    public function setJustificationRequiredOnApproval(?bool $value): void {
        $this->getBackingStore()->set('justificationRequiredOnApproval', $value);
    }

    /**
     * Sets the mailNotificationsEnabled property value. Indicates whether emails are enabled or disabled. Default value is false.
     * @param bool|null $value Value to set for the mailNotificationsEnabled property.
    */
    public function setMailNotificationsEnabled(?bool $value): void {
        $this->getBackingStore()->set('mailNotificationsEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recommendationsEnabled property value. Indicates whether decision recommendations are enabled or disabled. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationsEnabled setting will be used instead of the value of this property.
     * @param bool|null $value Value to set for the recommendationsEnabled property.
    */
    public function setRecommendationsEnabled(?bool $value): void {
        $this->getBackingStore()->set('recommendationsEnabled', $value);
    }

    /**
     * Sets the recurrence property value. Detailed settings for recurrence using the standard Outlook recurrence object. Note: Only dayOfMonth, interval, and type (weekly, absoluteMonthly) properties are supported. Use the property startDate on recurrenceRange to determine the day the review starts.
     * @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value): void {
        $this->getBackingStore()->set('recurrence', $value);
    }

    /**
     * Sets the reminderNotificationsEnabled property value. Indicates whether reminders are enabled or disabled. Default value is false.
     * @param bool|null $value Value to set for the reminderNotificationsEnabled property.
    */
    public function setReminderNotificationsEnabled(?bool $value): void {
        $this->getBackingStore()->set('reminderNotificationsEnabled', $value);
    }

}
