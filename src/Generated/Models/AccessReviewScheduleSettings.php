<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewScheduleSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<AccessReviewApplyAction>|null $applyActions Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction. */
    private ?array $applyActions = null;
    
    /** @var bool|null $autoApplyDecisionsEnabled Indicates whether decisions are automatically applied. When set to false, an admin must apply the decisions manually once the reviewer completes the access review. When set to true, decisions are applied automatically after the access review instance duration ends, whether or not the reviewers have responded. Default value is false. */
    private ?bool $autoApplyDecisionsEnabled = null;
    
    /** @var string|null $defaultDecision Decision chosen if defaultDecisionEnabled is true. Can be one of Approve, Deny, or Recommendation. */
    private ?string $defaultDecision = null;
    
    /** @var bool|null $defaultDecisionEnabled Indicates whether the default decision is enabled or disabled when reviewers do not respond. Default value is false. */
    private ?bool $defaultDecisionEnabled = null;
    
    /** @var int|null $instanceDurationInDays Duration of each recurrence of review (accessReviewInstance) in number of days. */
    private ?int $instanceDurationInDays = null;
    
    /** @var bool|null $justificationRequiredOnApproval Indicates whether reviewers are required to provide justification with their decision. Default value is false. */
    private ?bool $justificationRequiredOnApproval = null;
    
    /** @var bool|null $mailNotificationsEnabled Indicates whether emails are enabled or disabled. Default value is false. */
    private ?bool $mailNotificationsEnabled = null;
    
    /** @var bool|null $recommendationsEnabled Indicates whether decision recommendations are enabled or disabled. */
    private ?bool $recommendationsEnabled = null;
    
    /** @var PatternedRecurrence|null $recurrence Detailed settings for recurrence using the standard Outlook recurrence object.  Note: Only dayOfMonth, interval, and type (weekly, absoluteMonthly) properties are supported. Use the property startDate on recurrenceRange to determine the day the review starts. */
    private ?PatternedRecurrence $recurrence = null;
    
    /** @var bool|null $reminderNotificationsEnabled Indicates whether reminders are enabled or disabled. Default value is false. */
    private ?bool $reminderNotificationsEnabled = null;
    
    /**
     * Instantiates a new accessReviewScheduleSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewScheduleSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewScheduleSettings {
        return new AccessReviewScheduleSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applyActions property value. Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction.
     * @return array<AccessReviewApplyAction>|null
    */
    public function getApplyActions(): ?array {
        return $this->applyActions;
    }

    /**
     * Gets the autoApplyDecisionsEnabled property value. Indicates whether decisions are automatically applied. When set to false, an admin must apply the decisions manually once the reviewer completes the access review. When set to true, decisions are applied automatically after the access review instance duration ends, whether or not the reviewers have responded. Default value is false.
     * @return bool|null
    */
    public function getAutoApplyDecisionsEnabled(): ?bool {
        return $this->autoApplyDecisionsEnabled;
    }

    /**
     * Gets the defaultDecision property value. Decision chosen if defaultDecisionEnabled is true. Can be one of Approve, Deny, or Recommendation.
     * @return string|null
    */
    public function getDefaultDecision(): ?string {
        return $this->defaultDecision;
    }

    /**
     * Gets the defaultDecisionEnabled property value. Indicates whether the default decision is enabled or disabled when reviewers do not respond. Default value is false.
     * @return bool|null
    */
    public function getDefaultDecisionEnabled(): ?bool {
        return $this->defaultDecisionEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'applyActions' => function (self $o, ParseNode $n) { $o->setApplyActions($n->getCollectionOfObjectValues(AccessReviewApplyAction::class)); },
            'autoApplyDecisionsEnabled' => function (self $o, ParseNode $n) { $o->setAutoApplyDecisionsEnabled($n->getBooleanValue()); },
            'defaultDecision' => function (self $o, ParseNode $n) { $o->setDefaultDecision($n->getStringValue()); },
            'defaultDecisionEnabled' => function (self $o, ParseNode $n) { $o->setDefaultDecisionEnabled($n->getBooleanValue()); },
            'instanceDurationInDays' => function (self $o, ParseNode $n) { $o->setInstanceDurationInDays($n->getIntegerValue()); },
            'justificationRequiredOnApproval' => function (self $o, ParseNode $n) { $o->setJustificationRequiredOnApproval($n->getBooleanValue()); },
            'mailNotificationsEnabled' => function (self $o, ParseNode $n) { $o->setMailNotificationsEnabled($n->getBooleanValue()); },
            'recommendationsEnabled' => function (self $o, ParseNode $n) { $o->setRecommendationsEnabled($n->getBooleanValue()); },
            'recurrence' => function (self $o, ParseNode $n) { $o->setRecurrence($n->getObjectValue(PatternedRecurrence::class)); },
            'reminderNotificationsEnabled' => function (self $o, ParseNode $n) { $o->setReminderNotificationsEnabled($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the instanceDurationInDays property value. Duration of each recurrence of review (accessReviewInstance) in number of days.
     * @return int|null
    */
    public function getInstanceDurationInDays(): ?int {
        return $this->instanceDurationInDays;
    }

    /**
     * Gets the justificationRequiredOnApproval property value. Indicates whether reviewers are required to provide justification with their decision. Default value is false.
     * @return bool|null
    */
    public function getJustificationRequiredOnApproval(): ?bool {
        return $this->justificationRequiredOnApproval;
    }

    /**
     * Gets the mailNotificationsEnabled property value. Indicates whether emails are enabled or disabled. Default value is false.
     * @return bool|null
    */
    public function getMailNotificationsEnabled(): ?bool {
        return $this->mailNotificationsEnabled;
    }

    /**
     * Gets the recommendationsEnabled property value. Indicates whether decision recommendations are enabled or disabled.
     * @return bool|null
    */
    public function getRecommendationsEnabled(): ?bool {
        return $this->recommendationsEnabled;
    }

    /**
     * Gets the recurrence property value. Detailed settings for recurrence using the standard Outlook recurrence object.  Note: Only dayOfMonth, interval, and type (weekly, absoluteMonthly) properties are supported. Use the property startDate on recurrenceRange to determine the day the review starts.
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the reminderNotificationsEnabled property value. Indicates whether reminders are enabled or disabled. Default value is false.
     * @return bool|null
    */
    public function getReminderNotificationsEnabled(): ?bool {
        return $this->reminderNotificationsEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('applyActions', $this->applyActions);
        $writer->writeBooleanValue('autoApplyDecisionsEnabled', $this->autoApplyDecisionsEnabled);
        $writer->writeStringValue('defaultDecision', $this->defaultDecision);
        $writer->writeBooleanValue('defaultDecisionEnabled', $this->defaultDecisionEnabled);
        $writer->writeIntegerValue('instanceDurationInDays', $this->instanceDurationInDays);
        $writer->writeBooleanValue('justificationRequiredOnApproval', $this->justificationRequiredOnApproval);
        $writer->writeBooleanValue('mailNotificationsEnabled', $this->mailNotificationsEnabled);
        $writer->writeBooleanValue('recommendationsEnabled', $this->recommendationsEnabled);
        $writer->writeObjectValue('recurrence', $this->recurrence);
        $writer->writeBooleanValue('reminderNotificationsEnabled', $this->reminderNotificationsEnabled);
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
     * Sets the applyActions property value. Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction.
     *  @param array<AccessReviewApplyAction>|null $value Value to set for the applyActions property.
    */
    public function setApplyActions(?array $value ): void {
        $this->applyActions = $value;
    }

    /**
     * Sets the autoApplyDecisionsEnabled property value. Indicates whether decisions are automatically applied. When set to false, an admin must apply the decisions manually once the reviewer completes the access review. When set to true, decisions are applied automatically after the access review instance duration ends, whether or not the reviewers have responded. Default value is false.
     *  @param bool|null $value Value to set for the autoApplyDecisionsEnabled property.
    */
    public function setAutoApplyDecisionsEnabled(?bool $value ): void {
        $this->autoApplyDecisionsEnabled = $value;
    }

    /**
     * Sets the defaultDecision property value. Decision chosen if defaultDecisionEnabled is true. Can be one of Approve, Deny, or Recommendation.
     *  @param string|null $value Value to set for the defaultDecision property.
    */
    public function setDefaultDecision(?string $value ): void {
        $this->defaultDecision = $value;
    }

    /**
     * Sets the defaultDecisionEnabled property value. Indicates whether the default decision is enabled or disabled when reviewers do not respond. Default value is false.
     *  @param bool|null $value Value to set for the defaultDecisionEnabled property.
    */
    public function setDefaultDecisionEnabled(?bool $value ): void {
        $this->defaultDecisionEnabled = $value;
    }

    /**
     * Sets the instanceDurationInDays property value. Duration of each recurrence of review (accessReviewInstance) in number of days.
     *  @param int|null $value Value to set for the instanceDurationInDays property.
    */
    public function setInstanceDurationInDays(?int $value ): void {
        $this->instanceDurationInDays = $value;
    }

    /**
     * Sets the justificationRequiredOnApproval property value. Indicates whether reviewers are required to provide justification with their decision. Default value is false.
     *  @param bool|null $value Value to set for the justificationRequiredOnApproval property.
    */
    public function setJustificationRequiredOnApproval(?bool $value ): void {
        $this->justificationRequiredOnApproval = $value;
    }

    /**
     * Sets the mailNotificationsEnabled property value. Indicates whether emails are enabled or disabled. Default value is false.
     *  @param bool|null $value Value to set for the mailNotificationsEnabled property.
    */
    public function setMailNotificationsEnabled(?bool $value ): void {
        $this->mailNotificationsEnabled = $value;
    }

    /**
     * Sets the recommendationsEnabled property value. Indicates whether decision recommendations are enabled or disabled.
     *  @param bool|null $value Value to set for the recommendationsEnabled property.
    */
    public function setRecommendationsEnabled(?bool $value ): void {
        $this->recommendationsEnabled = $value;
    }

    /**
     * Sets the recurrence property value. Detailed settings for recurrence using the standard Outlook recurrence object.  Note: Only dayOfMonth, interval, and type (weekly, absoluteMonthly) properties are supported. Use the property startDate on recurrenceRange to determine the day the review starts.
     *  @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the reminderNotificationsEnabled property value. Indicates whether reminders are enabled or disabled. Default value is false.
     *  @param bool|null $value Value to set for the reminderNotificationsEnabled property.
    */
    public function setReminderNotificationsEnabled(?bool $value ): void {
        $this->reminderNotificationsEnabled = $value;
    }

}
